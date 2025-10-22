<?php

namespace App\Http\Controllers;

use App\Exports\AnalisaKreditExport;
use App\Models\DetailAnalisaKredit;
use App\Models\MasterDebitur;
use Illuminate\Http\Request;
use App\Models\AnalisaKredit;
use Maatwebsite\Excel\Facades\Excel;
class AnalisaKreditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function export($id)
    {
        return Excel::download(new AnalisaKreditExport($id), 'analisa_kredit.xlsx');
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $jenis_kredit = $request->query('jenis_kredit');
        $resource = 'analisa_kredit';
        $route = 'analisa_kredit';

        $collection = AnalisaKredit::with(['debitur.simulation','detailAnalisaKredit']);

        // Filter by jenis_kredit if provided
        if (!empty($jenis_kredit)) {
            $collection = $collection->whereHas('debitur.simulation', function ($query) use ($jenis_kredit) {
                $query->where('jenis_kredit', $jenis_kredit);
            });
        }

        if (!empty($search)) {
            $collection = $collection->where(function ($query) use ($search) {
                $query->where('id_debitur', 'LIKE', '%' . $search . '%')
                    ->orWhere('master_debiturs.nama', 'LIKE', '%' . $search . '%')
                    ->orWhere('master_debiturs.jumlah_permohonan_kredit', 'LIKE', '%' . $search . '%')
                    ->orWhere('master_debiturs.jangka_waktu', 'LIKE', '%' . $search . '%')
                    ->orWhere('master_debiturs.angsuran', 'LIKE', '%' . $search . '%')
                    ->orWhere('hasil', 'LIKE', '%' . $search . '%');

            });
        }
        $rows = $request->query('rows', 10);
        $collection = $collection->orderBy('id', 'desc')->paginate($rows);
        $collection->appends(request()->query());

        return view('analisa_kredit.index', compact('collection', 'search', 'resource', 'route', 'rows', 'jenis_kredit'));


    }

    public function create($id)
    {
        $resource = 'analisa_kredit';
        $route = 'analisa_kredit';
        $master_debitur = MasterDebitur::findOrFail($id);
        return view('analisa_kredit.create',compact('master_debitur','resource','route'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diinputkan oleh pengguna
        $request->validate([
            'id_debitur' => 'required|exists:master_debiturs,id',
            'tanggal_slik' => 'required|date',
            'keterangan' => 'required|string',
            'gaji_pokok' => 'required',
            'tunjangan_jabatan' => 'required',
            'lembur' => 'required',
            'tunjangan_lain' => 'required',
            'total_pendapatan_perbulan' => 'required',
            'gaji_pasangan' => 'required',
            'pendapatan_lain' => 'required',
            'total_pendapatan_lain' => 'required',
            'total_pendapatan' => 'required',
            'angsuran_bank' => 'required',
            'kewajiban_pihak_ketiga' => 'required',
            'angsuran_bpr' => 'required',
            'total_kewajiban' => 'required',
            'disposible_income' => 'required',
            'disposible_income_percent' => 'required',
            'rp_kewajiban' => 'required',
            'rp_pendapatan' => 'required',
            'rumus_rc' => 'required',
            'hasil' => 'required|string',
            'catatan' => 'required|string',
            // Validasi detail analisa kredit (array)
            'atas_nama.*' => 'required|string',
            'bank.*' => 'required|string',
            'plafond_awal.*' => 'required',
            'bunga.*' => 'required|numeric|min:0|max:999.99',
            'outstanding.*' => 'required',
            'jangka_waktu.*' => 'required|integer|min:1',
            'angsuran.*' => 'required',
            'kolektibilitas.*' => 'required|string',
        ], [
            'id_debitur.required' => 'Data debitur harus dipilih',
            'id_debitur.exists' => 'Data debitur tidak valid',
            'tanggal_slik.required' => 'Tanggal SLIK harus diisi',
            'keterangan.required' => 'Keterangan harus diisi',
            'atas_nama.*.required' => 'Atas nama harus diisi pada semua baris',
            'bank.*.required' => 'Bank harus diisi pada semua baris',
            'plafond_awal.*.required' => 'Plafond awal harus diisi pada semua baris',
            'bunga.*.required' => 'Bunga harus diisi pada semua baris',
            'bunga.*.numeric' => 'Bunga harus berupa angka',
            'bunga.*.max' => 'Bunga maksimal 999.99',
            'outstanding.*.required' => 'Outstanding harus diisi pada semua baris',
            'jangka_waktu.*.required' => 'Jangka waktu harus diisi pada semua baris',
            'jangka_waktu.*.integer' => 'Jangka waktu harus berupa angka',
            'jangka_waktu.*.min' => 'Jangka waktu minimal 1 bulan',
            'angsuran.*.required' => 'Angsuran harus diisi pada semua baris',
            'kolektibilitas.*.required' => 'Kolektibilitas harus diisi pada semua baris',
            'hasil.required' => 'Hasil analisa harus diisi',
            'catatan.required' => 'Catatan harus diisi',
        ]);

        

         // Pertama, simpan data utama analisa_kredit
         $analisaKredit = AnalisaKredit::create([
            'id_debitur' => $request->id_debitur,
            'tanggal_slik' => $request->tanggal_slik,
            'keterangan' => $request->keterangan,
            'gaji_pokok' => convertCurrencyFormat($request->gaji_pokok),
            'tunjangan_jabatan' => convertCurrencyFormat($request->tunjangan_jabatan),
            'lembur' => convertCurrencyFormat($request->lembur),
            'tunjangan_lain' => convertCurrencyFormat($request->tunjangan_lain),
            'total_pendapatan_perbulan' => convertCurrencyFormat($request->total_pendapatan_perbulan),
            'gaji_pasangan' => convertCurrencyFormat($request->gaji_pasangan),
            'pendapatan_lain' => convertCurrencyFormat($request->pendapatan_lain),
            'total_pendapatan_lain' => convertCurrencyFormat($request->total_pendapatan_lain),
            'total_pendapatan' => convertCurrencyFormat($request->total_pendapatan),
            'angsuran_bank' => convertCurrencyFormat($request->angsuran_bank),
            'kewajiban_pihak_ketiga' => convertCurrencyFormat($request->kewajiban_pihak_ketiga),
            'angsuran_bpr' => convertCurrencyFormat($request->angsuran_bpr),
            'total_kewajiban' => convertCurrencyFormat($request->total_kewajiban),
            'disposible_income' => convertCurrencyFormat($request->disposible_income),
            'disposible_income_percent' => convertCurrencyFormat($request->disposible_income_percent),
            'rp_kewajiban' => convertCurrencyFormat($request->rp_kewajiban),
            'rp_pendapatan' => convertCurrencyFormat($request->rp_pendapatan),
            'rumus_rc' => convertCurrencyFormat($request->rumus_rc),
            'hasil' => $request->hasil,
            'catatan' => $request->catatan,
        ]);

        // Kedua, simpan data detail analisa kredit
        if($analisaKredit && !empty($request->atas_nama)) {
            foreach($request->atas_nama as $key => $value) {
                DetailAnalisaKredit::create([
                    'id_analisa_kredit' => $analisaKredit->id,
                    'atas_nama' => $value,
                    'bank' => $request->bank[$key],
                    'plafond_awal' => convertCurrencyFormat($request->plafond_awal[$key]),
                    'bunga' => $request->bunga[$key], // Bunga adalah persentase, max 999.99, tidak perlu currency format
                    'outstanding' => convertCurrencyFormat($request->outstanding[$key]),
                    'jangka_waktu' => $request->jangka_waktu[$key], // Jangka waktu adalah integer, tidak perlu currency format
                    'angsuran' => convertCurrencyFormat($request->angsuran[$key]),
                    'kolektibilitas' => $request->kolektibilitas[$key] // Kolektibilitas adalah varchar, tidak perlu currency format
                ]);
            }
        }

       

        $jenis_kredit = $analisaKredit->debitur->simulation->jenis_kredit ?? null;
        
        return redirect()->route('analisa_kredit.index', ['jenis_kredit' => $jenis_kredit])
            ->with('success', 'Analisa Kredit berhasil ditambahkan.');
    }

    public function show($id)
    {
        $resource = 'analisa_kredit';
        $route = 'analisa_kredit';
        $analisaKredit = AnalisaKredit::with(['debitur', 'detailAnalisaKredit'])->findOrFail($id);
        return view('analisa_kredit.show', compact('analisaKredit', 'resource', 'route'));
    }

    public function edit($id)
    {
        $resource = 'analisa_kredit';
        $route = 'analisa_kredit';
        $analisaKredit = AnalisaKredit::with(['debitur', 'detailAnalisaKredit'])->findOrFail($id);
        return view('analisa_kredit.edit', compact('analisaKredit', 'resource', 'route'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diinputkan oleh pengguna
        $request->validate([
            'id_debitur' => 'required|exists:master_debiturs,id',
            'tanggal_slik' => 'required|date',
            'keterangan' => 'required|string',
            'gaji_pokok' => 'required',
            'tunjangan_jabatan' => 'required',
            'lembur' => 'required',
            'tunjangan_lain' => 'required',
            'total_pendapatan_perbulan' => 'required',
            'gaji_pasangan' => 'required',
            'pendapatan_lain' => 'required',
            'total_pendapatan_lain' => 'required',
            'total_pendapatan' => 'required',
            'angsuran_bank' => 'required',
            'kewajiban_pihak_ketiga' => 'required',
            'angsuran_bpr' => 'required',
            'total_kewajiban' => 'required',
            'disposible_income' => 'required',
            'disposible_income_percent' => 'required',
            'rp_kewajiban' => 'required',
            'rp_pendapatan' => 'required',
            'rumus_rc' => 'required',
            'hasil' => 'required|string',
            'catatan' => 'required|string',
            // Validasi detail analisa kredit (array)
            'atas_nama.*' => 'required|string',
            'bank.*' => 'required|string',
            'plafond_awal.*' => 'required',
            'bunga.*' => 'required|numeric|min:0|max:999.99',
            'outstanding.*' => 'required',
            'jangka_waktu.*' => 'required|integer|min:1',
            'angsuran.*' => 'required',
            'kolektibilitas.*' => 'required|string',
        ]);

        // Update data utama analisa_kredit
        $analisaKredit = AnalisaKredit::findOrFail($id);
        $analisaKredit->update([
            'id_debitur' => $request->id_debitur,
            'tanggal_slik' => $request->tanggal_slik,
            'keterangan' => $request->keterangan,
            'gaji_pokok' => convertCurrencyFormat($request->gaji_pokok),
            'tunjangan_jabatan' => convertCurrencyFormat($request->tunjangan_jabatan),
            'lembur' => convertCurrencyFormat($request->lembur),
            'tunjangan_lain' => convertCurrencyFormat($request->tunjangan_lain),
            'gaji_pasangan' => convertCurrencyFormat($request->gaji_pasangan),
            'pendapatan_lain' => convertCurrencyFormat($request->pendapatan_lain),
            'total_pendapatan_lain' => convertCurrencyFormat($request->total_pendapatan_lain),
            'total_pendapatan_perbulan' => convertCurrencyFormat($request->total_pendapatan_perbulan),
            'total_pendapatan' => convertCurrencyFormat($request->total_pendapatan),
            'angsuran_bank' => convertCurrencyFormat($request->angsuran_bank),
            'kewajiban_pihak_ketiga' => convertCurrencyFormat($request->kewajiban_pihak_ketiga),
            'angsuran_bpr' => convertCurrencyFormat($request->angsuran_bpr),
            'total_kewajiban' => convertCurrencyFormat($request->total_kewajiban),
            'disposible_income' => convertCurrencyFormat($request->disposible_income),
            'disposible_income_percent' => convertCurrencyFormat($request->disposible_income_percent),
            'rp_kewajiban' => convertCurrencyFormat($request->rp_kewajiban),
            'rp_pendapatan' => convertCurrencyFormat($request->rp_pendapatan),
            'rumus_rc' => convertCurrencyFormat($request->rumus_rc),
            'hasil' => $request->hasil,
            'catatan' => $request->catatan,
        ]);

        // Hapus detail lama dan buat detail baru
        $analisaKredit->detailAnalisaKredit()->delete();

        // Simpan detail analisa kredit baru
        if($analisaKredit && !empty($request->atas_nama)) {
            foreach($request->atas_nama as $key => $value) {
                DetailAnalisaKredit::create([
                    'id_analisa_kredit' => $analisaKredit->id,
                    'atas_nama' => $value,
                    'bank' => $request->bank[$key],
                    'plafond_awal' => convertCurrencyFormat($request->plafond_awal[$key]),
                    'bunga' => $request->bunga[$key],
                    'outstanding' => convertCurrencyFormat($request->outstanding[$key]),
                    'jangka_waktu' => $request->jangka_waktu[$key],
                    'angsuran' => convertCurrencyFormat($request->angsuran[$key]),
                    'kolektibilitas' => $request->kolektibilitas[$key]
                ]);
            }
        }

        $jenis_kredit = $analisaKredit->debitur->simulation->jenis_kredit ?? null;
        
        return redirect()->route('analisa_kredit.index', ['jenis_kredit' => $jenis_kredit])
            ->with('success', 'Analisa Kredit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data analisa kredit dari database
        $analisaKredit = AnalisaKredit::findOrFail($id);
        $analisaKredit->delete();

        return redirect()->route('analisa_kredit.index')
            ->with('success', 'Analisa Kredit berhasil dihapus.');
    }
}
