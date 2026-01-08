<?php

namespace App\Http\Controllers;

use App\Models\DebiturModalKerja;
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

class DebiturModalKerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DebiturModalKerja::with('simulation')->latest()->paginate(10);
        return view('debitur-modal-kerja.index', compact('data'));
    }

    public function create(Request $request)
    {
        $simulation = null;
        if ($request->has('simulation_id')) {
            $simulation = \App\Models\Simulation::findOrFail($request->simulation_id);
        }
        $accountOfficers = \App\Models\AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
        return view('debitur-modal-kerja.create', compact('simulation', 'accountOfficers'));
    }
    public function sttu_export($id)
{
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new Sttu($debitur->id),
        'sttu_' . $debitur->id . '.xlsx'
    );
}
public function memo_kredit_export($id)
{
    // coba cari sesuai id
    $debitur = DebiturModalKerja::find($id);

    // kalau tidak ada, pakai debitur pertama yang tersedia
    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
    }

    // kalau database kosong
    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new MemoKredit($debitur->id),
        'memo_kredit_' . $debitur->id . '.xlsx'
    );
}

    public function sppk_export($id)
{
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
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
    $debitur = DebiturModalKerja::find($id);

    if (!$debitur) {
        $debitur = DebiturModalKerja::orderBy('id', 'asc')->first();
    }

    if (!$debitur) {
        abort(404, 'Tidak ada data debitur.');
    }

    return Excel::download(
        new TandaTerima($debitur->id),
        'mcc_' . $debitur->id . '.xlsx'
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
    $debitur = DebiturModalKerja::create($data);

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

    return redirect()->route('debitur-modal-kerja.index')
        ->with('success', 'Data Debitur Modal Kerja berhasil disimpan.');
}


    public function show($id)
    {
        $debitur = DebiturModalKerja::with('simulation')->findOrFail($id);
        return view('debitur-modal-kerja.show', compact('debitur'));
    }

    public function edit($id)
    {
        $debitur = DebiturModalKerja::findOrFail($id);
        $accountOfficers = \App\Models\AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
        return view('debitur-modal-kerja.edit', compact('debitur', 'accountOfficers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'simulation_id' => 'nullable|exists:simulations,id',
        ]);

        $data = $request->all();
        
        // Convert currency format
        if (isset($data['jumlah_permohonan_kredit'])) {
            $data['jumlah_permohonan_kredit'] = str_replace('.', '', $data['jumlah_permohonan_kredit']);
        }
        
        // Extract number from jangka_waktu
        if (isset($data['jangka_waktu'])) {
            $data['jangka_waktu'] = (int) preg_replace('/[^0-9]/', '', $data['jangka_waktu']);
        }

        $debitur = DebiturModalKerja::findOrFail($id);
        $debitur->update($data);

        return redirect()->route('debitur-modal-kerja.index')
            ->with('success', 'Data Debitur Modal Kerja berhasil diupdate.');
    }

    public function destroy($id)
    {
        $debitur = DebiturModalKerja::findOrFail($id);
        $debitur->delete();

        return redirect()->route('debitur-modal-kerja.index')
            ->with('success', 'Data Debitur Modal Kerja berhasil dihapus.');
    }

    public function export($id)
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new \App\Exports\DataDebiturModalKerja($id), 'Data_Debitur_Modal_Kerja_' . date('YmdHis') . '.xlsx');
    }
}
