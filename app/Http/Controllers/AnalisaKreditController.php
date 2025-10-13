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
        $resource = 'analisa_kredit';
        $route = 'analisa_kredit';

        $collection = AnalisaKredit::with(['debitur','detailAnalisaKredit']);
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

        return view('analisa_kredit.index', compact('collection', 'search', 'resource', 'route', 'rows'));


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
            // Atur aturan validasi sesuai dengan field yang diperlukan
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
                    'bunga' => convertCurrencyFormat($request->bunga[$key]),
                    'outstanding' => convertCurrencyFormat($request->outstanding[$key]),
                    'jangka_waktu' => convertCurrencyFormat($request->jangka_waktu[$key]),
                    'angsuran' => convertCurrencyFormat($request->angsuran[$key]),
                    'kolektibilitas' => convertCurrencyFormat($request->kolektibilitas[$key])
                ]);
            }
        }

       

        return redirect()->route('analisa_kredit.index')
            ->with('success', 'Analisa Kredit berhasil ditambahkan.');
    }

    public function show($id)
    {
        $analisaKredit = AnalisaKredit::findOrFail($id);
        return view('analisa_kredit.show', compact('analisaKredit'));
    }

    public function edit($id)
    {
        $analisaKredit = AnalisaKredit::findOrFail($id);
        return view('analisa_kredit.edit', compact('analisaKredit'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diinputkan oleh pengguna
        $request->validate([
            // Atur aturan validasi sesuai dengan field yang diperlukan
        ]);

        // Perbarui data analisa kredit dalam database
        $analisaKredit = AnalisaKredit::findOrFail($id);
        $analisaKredit->update($request->all());

        return redirect()->route('analisa_kredit.index')
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