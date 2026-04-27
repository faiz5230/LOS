<?php

namespace App\Http\Controllers;

use App\Models\DebiturPasar;
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

class DebiturPasarController extends Controller
{
    private function rupiahToInt($value): int
    {
        if ($value === null) return 0;

        $value = trim((string) $value);
        $value = preg_replace('/[^0-9\.,]/', '', $value);
        $value = str_replace('.', '', $value);
        $value = preg_replace('/,.*$/', '', $value);

        return (int) ($value === '' ? 0 : $value);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DebiturPasar::with('simulation')->latest()->paginate(10);
        return view('debitur-pasar.index', compact('data'));
    }

    public function create(Simulation $simulation)
    {
    $accountOfficers = AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
    return view('debitur-pasar.create', compact('simulation', 'accountOfficers'));
}

    public function open($id)
{
    // 1) jika data pasar sudah ada, langsung buka show
    $debitur = DebiturPasar::find($id);
    if ($debitur) {
        return redirect()->route('debitur-pasar.show', $debitur->id);
    }

    // 2) kalau belum ada, ambil data dari master debitur
    $master = MasterDebitur::with('simulation')->findOrFail($id);
    $permohonanKredit = $master->permohonan_kredit;
        
    $jumlahPermohonanKredit = $master->jumlah_permohonan_kredit;
        

    // 3) buat data debitur pasar dari master debitur
    $debitur = DebiturPasar::create([
        'simulation_id' => optional($master->simulation)->id,
        'tanggal' => $master->tanggal ?? now(),
        'permohonan_kredit' => $permohonanKredit?? null,
        'nama' => $master->nama ?? null,
        'alamat_lengkap' => $master->alamat_lengkap ?? null,
        'status_rumah' => $master->status_rumah ?? null,
        'lama_menempati' => $master->lama_menempati ?? null,
        'no_telepon_pemohon' => $master->no_telepon_pemohon ?? null,
        'no_ktp_sim' => $master->no_ktp_sim ?? null,
        'tempat_lahir' => $master->tempat_lahir ?? null,
        'tanggal_lahir' => $master->tanggal_lahir ?? null,
        'status_perkawinan' => $master->status_perkawinan ?? null,
        'jumlah_tanggungan' => $master->jumlah_tanggungan ?? 0,
        'agunan' => $master->agunan ?? null,
        'no_ijasah' => $master->no_ijasah ?? null,
        //'atas_nama_agunan' =>$master->atas_nama_agunan ?? null,
        'nama_kontak_tidak_serumah' => $master->nama_kontak_tidak_serumah ?? null,
        'hubungan' => $master->hubungan ?? null,
        'alamat_saudara' => $master->alamat_saudara ?? null,
        'no_telepon_kontak_tidak_serumah' => $master->no_telepon_kontak_tidak_serumah ?? null,

        'nama_usaha' => $master->nama_usaha ?? null,
        'bidang_usaha' => $master->bidang_usaha ?? null,
        'lama_usaha' => $master->lama_usaha ?? null,
        'alamat_usaha' => $master->alamat_usaha ?? null,
        //'no_telepon_usaha' => $master->no_telepon ?? null,

        'jumlah_permohonan_kredit' => $master->jumlah_permohonan_kredit ?? 0,
        'jangka_waktu' => $master->jangka_waktu ?? 0,
        'tujuan_penggunaan' => $master->tujuan_penggunaan ?? null,
        'account_officer' => $master->account_officer ?? null,
        'besaran_gaji' => $master->besaran_gaji ?? null,
        'angsuran' => $master->angsuran ?? null,
    ]);

    return redirect()->route('debitur-pasar.show', $debitur->id);
}

    public function sttu_export($id)
{
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new Sttu($debitur->id),
        'sttu_' . $debitur->id . '.xlsx'
    );
}
public function memo_kredit_pasar_export($id)
{
    // coba cari sesuai id
    $debitur = DebiturPasar::find($id);

    // kalau tidak ada, pakai debitur pertama yang tersedia
    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
    }

    // kalau database kosong
    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new MemoKredit($debitur->id),
        'memo_kredit_pasar_' . $debitur->id . '.xlsx'
    );
}

    public function sppk_export($id)
{
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
    $debitur = DebiturPasar::find($id);

    if (!$debitur) {
        $debitur = DebiturPasar::orderBy('id', 'asc')->first();
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
        'id_simulation' => 'required|exists:simulations,id',
        'tanggal' => 'required|date',
        'permohonan_kredit' => 'required|string',
        'nama' => 'required|string',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'alamat_lengkap' => 'required|string',
        'no_ktp_sim' => 'required',
        'jumlah_permohonan_kredit' => 'required',
        'jangka_waktu' => 'required',
        'account_officer' => 'required',
    ]);

    $data = $request->only([
        'tanggal',
        'nama',
        'jenis_kelamin',
        'no_ktp_sim',
        'alamat_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'status_rumah',
        'lama_menempati',
        'status_perkawinan',
        'no_telepon_pemohon',
        'agunan',
        'no_ijasah',
        'jumlah_tanggungan',
        'alamat_saudara',
        'nama_kontak_tidak_serumah',
        'hubungan',
        //'alamat',
        'no_telepon_kontak_tidak_serumah',
        'nama_usaha',
        'alamat_usaha',
        'lama_usaha',
        'bidang_usaha',
        'tujuan_penggunaan',
        'account_officer',
        'besaran_gaji',
        'dsr',
        'angsuran',
    ]);

    // mapping hidden field form -> db
    $data['simulation_id'] = $request->id_simulation;

    // normalisasi uang (hapus titik ribuan)
    $data['jumlah_permohonan_kredit'] = $this->rupiahToInt($request->jumlah_permohonan_kredit);
    $data['besaran_gaji'] = $request->filled('besaran_gaji')? $this->rupiahToInt($request->besaran_gaji): null;
    $data['angsuran'] = $request->filled('angsuran')? $this->rupiahToInt($request->angsuran): null;


    // normalisasi jangka waktu: "24 Bulan" -> 24
    $data['jangka_waktu'] = (int) preg_replace('/[^0-9]/', '', (string) $request->jangka_waktu);

    // simpan debitur pasar
    $debitur = DebiturPasar::create($data);

    // generate nomor urut (tetap pakai gaya lama kamu: new NomorUrut + save)
    $jenisDokumenKode = [
        'MEMO_KREDIT' => 'KRD-INST/BPR-DP',
        'PERJANJIAN_KREDIT' => 'KRD-INST/BPR-DP',
        'PERJANJIAN_KREDIT_REGULER' => 'KRD-REG/BPR-DP',
        'SPPK' => 'BPR-DP/SPPK',
        'SITTU' => 'KRD-INST/BPR-DP/STTU',
        'ANALISIS' => 'AY/PERS'
    ];

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
        $nomorUrutModel->id_debitur = $debitur->id;
        $nomorUrutModel->nomor_full = $nomorUrut;
        $nomorUrutModel->save();
    }

    return redirect()->route('debitur-pasar.index')
        ->with('success', 'Data Debitur Pasar berhasil disimpan.');
}




    public function show($id)
    {
        $debitur = DebiturPasar::with('simulation')->findOrFail($id);
        return view('debitur-pasar.show', compact('debitur'));
    }

    public function edit($id)
    {
        $debitur = DebiturPasar::findOrFail($id);
        $accountOfficers = \App\Models\AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
        return view('debitur-pasar.edit', compact('debitur', 'accountOfficers'));
    }

    public function update(Request $request, $id)
{
    $debitur = DebiturPasar::findOrFail($id);

    $request->validate([
        'id_simulation' => 'nullable|exists:simulations,id',
        'tanggal' => 'required|date',
        'nama' => 'required|string',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'alamat_lengkap' => 'required|string',
        'no_ktp_sim' => 'required',
        'jumlah_permohonan_kredit' => 'required',
        'jangka_waktu' => 'required',
        'account_officer' => 'required',
        // kalau DB NOT NULL, wajibkan juga biar gak pernah null
        'besaran_gaji' => 'required',
        'angsuran' => 'required',
    ]);

    $data = $request->only([
        'tanggal',
        'nama',
        'jenis_kelamin',
        'no_ktp_sim',
        'alamat_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'status_rumah',
        'lama_menempati',
        'status_perkawinan',
        'no_telepon_pemohon',
        'agunan',
        'no_ijasah',
        'jumlah_tanggungan',
        'nama_kontak_tidak_serumah',
        'hubungan',
        'alamat', // kamu tadi comment, tapi di show kamu pakai alamat
        'no_telepon_kontak_tidak_serumah',

        // === USAHA (pakai field pasar) ===
        'nama_usaha',
        'alamat_usaha',
        'lama_usaha',
        'bidang_usaha',
        'no_telepon_usaha',

        // === KREDIT ===
        'tujuan_penggunaan',
        'account_officer',
        'dsr',
    ]);

    // mapping simulation
    if ($request->filled('id_simulation')) {
        $data['simulation_id'] = $request->id_simulation;
    }

    // normalisasi angka
    $data['jumlah_permohonan_kredit'] = str_replace('.', '', (string) $request->jumlah_permohonan_kredit);
    $data['besaran_gaji'] = str_replace('.', '', (string) $request->besaran_gaji);
    $data['angsuran'] = str_replace('.', '', (string) $request->angsuran);

    // jangka waktu ambil angka saja
    $data['jangka_waktu'] = (int) preg_replace('/[^0-9]/', '', (string) $request->jangka_waktu);

    // ✅ PROTEKSI KALAU ADA FIELD YANG TIDAK TERKIRIM
    // (misalnya input disabled / name beda / dll)
    if (!isset($data['besaran_gaji']) || $data['besaran_gaji'] === '' || $data['besaran_gaji'] === null) {
        $data['besaran_gaji'] = $debitur->besaran_gaji;
    }
    if (!isset($data['angsuran']) || $data['angsuran'] === '' || $data['angsuran'] === null) {
        $data['angsuran'] = $debitur->angsuran;
    }

    $debitur->update($data);

    return redirect()->route('debitur-pasar.index')
        ->with('success', 'Data Debitur Pasar berhasil diupdate.');
}



    public function export($id)
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new \App\Exports\DataDebiturPasar($id), 'Data_Debitur_Pasar_' . date('YmdHis') . '.xlsx');
    }
}
