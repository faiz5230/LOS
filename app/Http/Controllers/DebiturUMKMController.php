<?php

namespace App\Http\Controllers;

use App\Models\DebiturUMKM;
use App\Models\MasterDebitur;
use App\Models\Simulation;
use App\Models\NomorUrut;
use App\Models\AccountOfficer;
use App\Exports\Sttu;
use App\Exports\Sppk;
use App\Exports\MemoKredit;
use App\Exports\SuratKuasa;
use App\Exports\PerjanjianKreditSendiri;
use App\Exports\PerjanjianKreditPasangan;
use App\Exports\SuratAskep;
use App\Exports\PerjanjianKreditPerusahaan;
use App\Exports\MemoFasilitasKredit;
use App\Exports\MCC;
use App\Exports\TandaTerima;
use Illuminate\Http\Request;
//use App\Exports\MemoKredit;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class DebiturUMKMController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DebiturUMKM::with('simulation')->latest()->paginate(10);
        return view('debitur-umkm.index', compact('data'));
    }

    public function create(Simulation $simulation)
    {
    $accountOfficers = AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
    return view('debitur-umkm.create', compact('simulation', 'accountOfficers'));
}

    public function open($id)
{
    // 1) jika data umkm sudah ada, langsung buka show
    $debitur = DebiturUMKM::find($id);
    if ($debitur) {
        return redirect()->route('debitur-umkm.show', $debitur->id);
    }

    // 2) kalau belum ada, ambil data dari master debitur
    $master = MasterDebitur::with('simulation')->findOrFail($id);

    // 3) buat data debitur umkm dari master debitur
    $debitur = DebiturUMKM::create([
        'simulation_id' => optional($master->simulation)->id,
        'tanggal' => $master->tanggal ?? now(),
        'nama' => $master->nama ?? null,
        'jenis_kelamin' => $master->jenis_kelamin ?? null,
        'alamat_lengkap' => $master->alamat_lengkap ?? null,
        'no_telepon_pemohon' => $master->no_telepon_pemohon ?? null,
        'no_ktp_sim' => $master->no_ktp_sim ?? null,
        'masa_berlaku' => $master->masa_berlaku ?? null,
        'tempat_lahir' => $master->tempat_lahir ?? null,
        'tanggal_lahir' => $master->tanggal_lahir ?? null,
        'pendidikan_terakhir' => $master->pendidikan_terakhir ?? null,
        'status_rumah' => $master->status_rumah ?? null,
        'lama_menempati' => $master->lama_menempati ?? null,
        'status_perkawinan' => $master->status_perkawinan ?? null,
        'nama_ibu_kandung' => $master->nama_ibu_kandung ?? null,
        'jumlah_tanggungan' => $master->jumlah_tanggungan ?? 0,
        'pekerjaan_ibu_kandung' => $master->pekerjaan_ibu_kandung ?? null,
        'nama_ayah_kandung' => $master->nama_ayah_kandung ?? null,
        'pekerjaan_ayah_kandung' => $master->pekerjaan_ayah_kandung ?? null,
        'agunan' => $master->agunan ?? null,
        'atas_nama_agunan' =>$master->atas_nama_agunan ?? null,
        'nama_kontak_tidak_serumah' => $master->nama_kontak_tidak_serumah ?? null,
        'alamat_saudara' => $master->alamat_saudara ?? null,
        'no_telepon_kontak_tidak_serumah' => $master->no_telepon_kontak_tidak_serumah ?? null,
        'no_ijasah' => $master->no_ijasah ?? null,
        'nama_usaha' => $master->nama_usaha ?? null,
        'no_telepon' => $master->no_telepon ?? null,
        'nama_pasangan' => $master->nama_pasangan ?? null,
        'tempat_lahir_pasangan' => $master->tempat_lahir_pasangan ?? null,
        'tanggal_lahir_pasangan' => $master->tanggal_lahir_pasangan ?? null,
        'pekerjaan_pasangan' => $master->pekerjaan_pasangan ?? null,
        'nama_perusahaan_pasangan' => $master->nama_perusahaan_pasangan ?? null,
        'alamat_perusahaan_pasangan' => $master->alamat_perusahaan_pasangan ?? null,
        'lama_bekerja_pasangan' => $master->lama_bekerja_pasangan ?? null,
        'no_telepon_pasangan' => $master->no_telepon_pasangan ?? null,
        'hubungan' => $master->hubungan ?? null,
        'alamat_perusahaan' => $master->alamat_perusahaan ?? null,
        'lama_bekerja' => $master->lama_bekerja ?? null,
        'no_id_pegawai' => $master->no_id_pegawai ?? null,
        'bidang_usaha' => $master->bidang_usaha ?? null,
        'jabatan' => $master->jabatan ?? null,
        'no_ktp_sim_pasangan' => $master->no_ktp_sim_pasangan ?? null,
        'jumlah_permohonan_kredit' => $master->jumlah_permohonan_kredit ?? 0,
        'jangka_waktu' => $master->jangka_waktu ?? 0,
        'tujuan_penggunaan' => $master->tujuan_penggunaan ?? null,
        'account_officer' => $master->account_officer ?? null,
        'besaran_gaji' => $master->besaran_gaji ?? 0,
        'angsuran' => $master->angsuran ?? 0,
    ]);

    return redirect()->route('debitur-umkm.show', $debitur->id);
}

    public function sttu_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new Sttu($debitur->id),
        'sttu_' . $debitur->id . '.xlsx'
    );
}
public function memo_kredit_umkm_export($id)
{
    // coba cari sesuai id
    $debitur = DebiturUMKM::find($id);

    // kalau tidak ada, pakai debitur pertama yang tersedia
    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    // kalau database kosong
    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new MemoKredit($debitur->id),
        'memo_kredit_umkm_' . $debitur->id . '.xlsx'
    );
}

    public function sppk_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new Sppk($debitur->id),
        'sppk_' . $debitur->id . '.xlsx'
    );
}
public function pk_snd_sim_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new PerjanjianKreditSendiri($debitur->id),
        'pk_snd_sim_' . $debitur->id . '.xlsx'
    );
}
public function pk_kredit_pasangan_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new PerjanjianKreditPasangan($debitur->id),
        'pk_kredit_pasangan_' . $debitur->id . '.xlsx'
    );
}
public function surat_kuasa_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new SuratKuasa($debitur->id),
        'surat_kuasa_' . $debitur->id . '.xlsx'
    );
}
public function surat_askep_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new SuratAskep($debitur->id),
        'surat_askep_' . $debitur->id . '.xlsx'
    );
}

public function pk_kredit_perusahaan_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new PerjanjianKreditPerusahaan($debitur->id),
        'pk_kredit_perusahaan_' . $debitur->id . '.xlsx'
    );
}

public function memo_fasilitas_kredit_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new MemoFasilitasKredit($debitur->id),
        'Memo_Fasilitas_kredit_' . $debitur->id . '.xlsx'
    );
}

public function mcc_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new MCC($debitur->id),
        'mcc_' . $debitur->id . '.xlsx'
    );
}

public function tanda_terima_export($id)
{
    $debitur = DebiturUMKM::find($id);

    if (!$debitur) {
        $debitur = DebiturUMKM::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new TandaTerima($debitur->id),
        'tanda_terima_' . $debitur->id . '.xlsx'
    );
}
    public function store(Request $request)
{
    $request->validate([
        'simulation_id' => 'nullable|exists:simulations,id',
    ]);

    $data = $request->all();

    // Convert currency format
    if (isset($data['jumlah_permohonan_kredit'])) {
        $data['jumlah_permohonan_kredit'] = str_replace('.', '', $data['jumlah_permohonan_kredit']);
    }

    // Extract number from jangka_waktu (e.g., "24 Bulan" -> 24)
    if (isset($data['jangka_waktu'])) {
        $data['jangka_waktu'] = (int) preg_replace('/[^0-9]/', '', $data['jangka_waktu']);
    }

    // ✅ 1) simpan debitur dulu supaya dapat ID
    $debitur = DebiturUMKM::create($data);

    $jenisDokumenKode = [
        'MEMO_KREDIT' => 'KRD-INST/BPR-DP',
        'PERJANJIAN_KREDIT' => 'KRD-INST/BPR-DP',
        'PERJANJIAN_KREDIT_REGULER' => 'KRD-REG/BPR-DP',
        'SPPK' => 'BPR-DP/SPPK',
        'SITTU' => 'KRD-INST/BPR-DP/STTU',
        'ANALISIS' => 'AY/PERS'
    ];

    // ✅ 2) baru generate nomor urut dan simpan pakai $debitur->id
    foreach ($jenisDokumenKode as $jenisDokumen => $kode) {
        $nomorUrut = generateNomorUrut($jenisDokumen, $kode);

        $bagian = explode('/', $nomorUrut);
        $nomor = trim($bagian[0]);

        $nomorUrutModel = new NomorUrut();
        $nomorUrutModel->nomor = $nomor;
        $nomorUrutModel->jenis_dokumen = $jenisDokumen;
        $nomorUrutModel->kode = $kode;
        $nomorUrutModel->bulan = now()->format('m');
        $nomorUrutModel->tahun = now()->year;
        $nomorUrutModel->id_debitur = $debitur->id;   // ✅ FIX UTAMA
        $nomorUrutModel->nomor_full = $nomorUrut;
        $nomorUrutModel->save();
    }

    return redirect()->route('debitur-umkm.index')
        ->with('success', 'Data Debitur UMKM berhasil disimpan.');
}


    public function show($id)
    {
        $debitur = DebiturUMKM::with('simulation')->findOrFail($id);
        return view('debitur-umkm.show', compact('debitur'));
    }

    public function edit($id)
    {
        $debitur = DebiturUMKM::findOrFail($id);
        $accountOfficers = \App\Models\AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
        return view('debitur-umkm.edit', compact('debitur', 'accountOfficers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'simulation_id' => 'nullable|exists:simulations,id',
        ]);

        $data = $request->all();
        
        if (isset($data['besaran_gaji'])) {
        $data['besaran_gaji'] = preg_replace('/[^0-9]/', '', $data['besaran_gaji']);
    }

        if (isset($data['jumlah_permohonan_kredit'])) {
        $data['jumlah_permohonan_kredit'] = preg_replace('/[^0-9]/', '', $data['jumlah_permohonan_kredit']);
    }

        // Extract number from jangka_waktu
        if (isset($data['jangka_waktu'])) {
        $data['jangka_waktu'] = (int) preg_replace('/[^0-9]/', '', $data['jangka_waktu']);
    }

        if (isset($data['angsuran'])) {
        $data['angsuran'] = preg_replace('/[^0-9]/', '', $data['angsuran']);
    }
        if (isset($data['plafond'])) {
        $data['plafond'] = preg_replace('/[^0-9]/', '', $data['plafond']);
    }

        $debitur = DebiturUMKM::findOrFail($id);
        $debitur->update($data);

        return redirect()->route('debitur-umkm.index')
            ->with('success', 'Data Debitur UMKM berhasil diupdate.');
    }

    public function destroy($id)
    {
        $debitur = DebiturUMKM::findOrFail($id);
        $debitur->delete();

        return redirect()->route('debitur-umkm.index')
            ->with('success', 'Data Debitur UMKM berhasil dihapus.');
    }

    public function export($id)
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new \App\Exports\DataDebiturUMKM($id), 'Data_Debitur_umkm_' . date('YmdHis') . '.xlsx');
    }
}

