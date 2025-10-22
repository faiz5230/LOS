<?php

namespace App\Http\Controllers;

use App\Exports\AnalisaKredit;
use App\Exports\AnalisaYuridis;
use App\Exports\DataCalonDebitur;
use App\Exports\MasterDebiturExport;
use App\Exports\MemoKredit;
use App\Exports\PerjanjianKreditNonMouPasangan;
use App\Exports\PerjanjianKreditNonMouSendiri;
use App\Exports\PerjanjianKreditPasangan;
use App\Exports\PerjanjianKreditReguler;
use App\Exports\PerjanjianKreditSendiri;
use App\Exports\Sppk;
use App\Exports\Sttu;
use App\Exports\TandaTerima;
use App\Models\AccountOfficer;
use App\Models\NomorUrut;
use App\Models\Simulation;
use Illuminate\Http\Request;
use App\Models\MasterDebitur;
use Maatwebsite\Excel\Facades\Excel;

class MasterDebiturController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function data_calon_debitur_export($id)
    {
        return Excel::download(new DataCalonDebitur($id), 'data_calon_debitur.xlsx');
    }
    public function analisa_yuridis_export($id)
    {
        return Excel::download(new AnalisaYuridis($id), 'analisa_yuridis.xlsx');
    }
    public function tanda_terima_export($id)
    {
        return Excel::download(new TandaTerima($id), 'tanda_terima.xlsx');
    }
    public function sttu_export($id)
    {
        return Excel::download(new Sttu($id), 'sttu.xlsx');
    }
    public function sppk_export($id)
    {
        return Excel::download(new Sppk($id), 'sppk.xlsx');
    }
    public function pk_kredit_reguler_export($id)
    {
        return Excel::download(new PerjanjianKreditReguler($id), 'pk_kredit_reguler.xlsx');
    }
    public function pk_kredit_non_mou_sendiri_export($id)
    {
        return Excel::download(new PerjanjianKreditNonMouSendiri($id), 'pk_kredit_non_mou_sendiri.xlsx');
    }
    public function pk_kredit_non_mou_pasangan_export($id)
    {
        return Excel::download(new PerjanjianKreditNonMouPasangan($id), 'pk_kredit_non_mou_pasangan.xlsx');
    }

    public function pk_kredit_sendiri_export($id)
    {
        return Excel::download(new PerjanjianKreditSendiri($id), 'pk_kredit_sendiri.xlsx');
    }
    public function pk_kredit_pasangan_export($id)
    {
        return Excel::download(new PerjanjianKreditPasangan($id), 'pk_kredit_pasangan.xlsx');
    }
    public function analisa_kredit_export($id)
    {
        return Excel::download(new AnalisaKredit($id), 'analisa_kredit.xlsx');
    }

    public function memo_kredit_export($id)
    {
        return Excel::download(new MemoKredit($id), 'memo_kredit.xlsx');
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $jenis_kredit = $request->query('jenis_kredit');
        $view = $request->query('view'); // for yuridis view
        $resource = 'debiturs';
        $route = 'debiturs';
        $collection = MasterDebitur::with(['simulation', 'latestAnalisaKredit']);

        // Filter by jenis_kredit if provided
        if (!empty($jenis_kredit)) {
            $collection = $collection->whereHas('simulation', function ($query) use ($jenis_kredit) {
                $query->where('jenis_kredit', $jenis_kredit);
            });
        }

        if (!empty($search)) {
            $collection = $collection->where(function ($query) use ($search) {
                $query->where('tanggal', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama', 'LIKE', '%' . $search . '%')
                    ->orWhere('jenis_kelamin', 'LIKE', '%' . $search . '%')
                    ->orWhere('no_ktp_sim', 'LIKE', '%' . $search . '%')
                    ->orWhere('masa_berlaku', 'LIKE', '%' . $search . '%')
                    ->orWhere('alamat_lengkap', 'LIKE', '%' . $search . '%')
                    ->orWhere('tempat_lahir', 'LIKE', '%' . $search . '%')
                    ->orWhere('tanggal_lahir', 'LIKE', '%' . $search . '%')
                    ->orWhere('pendidikan_terakhir', 'LIKE', '%' . $search . '%')
                    ->orWhere('status_rumah', 'LIKE', '%' . $search . '%')
                    ->orWhere('lama_menempati', 'LIKE', '%' . $search . '%')
                    ->orWhere('status_perkawinan', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama_ibu_kandung', 'LIKE', '%' . $search . '%')
                    ->orWhere('pekerjaan', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama_ayah_kandung', 'LIKE', '%' . $search . '%')
                    ->orWhere('no_telepon_pemohon', 'LIKE', '%' . $search . '%')
                    ->orWhere('agunan', 'LIKE', '%' . $search . '%')
                    ->orWhere('no_ijasah', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama_istri_suami', 'LIKE', '%' . $search . '%')
                    ->orWhere('jumlah_tanggungan', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama_perusahaan', 'LIKE', '%' . $search . '%')
                    ->orWhere('alamat_perusahaan', 'LIKE', '%' . $search . '%')
                    ->orWhere('lama_bekerja', 'LIKE', '%' . $search . '%')
                    ->orWhere('no_telepon', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama_kontak_tidak_serumah', 'LIKE', '%' . $search . '%')
                    ->orWhere('hubungan', 'LIKE', '%' . $search . '%')
                    ->orWhere('alamat', 'LIKE', '%' . $search . '%')
                    ->orWhere('no_id_pegawai', 'LIKE', '%' . $search . '%')
                    ->orWhere('bidang_usaha', 'LIKE', '%' . $search . '%')
                    ->orWhere('jabatan', 'LIKE', '%' . $search . '%')
                    ->orWhere('jumlah_permohonan_kredit', 'LIKE', '%' . $search . '%')
                    ->orWhere('jangka_waktu', 'LIKE', '%' . $search . '%')
                    ->orWhere('tujuan_penggunaan', 'LIKE', '%' . $search . '%')
                    ->orWhere('account_officer', 'LIKE', '%' . $search . '%')
                    ->orWhere('besaran_gaji', 'LIKE', '%' . $search . '%')
                    ->orWhere('dsr', 'LIKE', '%' . $search . '%')
                    ->orWhere('angsuran', 'LIKE', '%' . $search . '%');
            });
        }
        $rows = $request->query('rows', 10);
        $collection = $collection->orderBy('id', 'desc')->paginate($rows);
        $collection->appends(request()->query());
        return view('debiturs.index', compact('collection', 'resource', 'route', 'rows', 'jenis_kredit', 'view'));
    }

    public function create($id)
    {
        $resource = 'debiturs';
        $route = 'debiturs';
        $simulation = Simulation::findOrFail($id);
        $accountOfficers = AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
        return view('debiturs.create', compact('accountOfficers','resource', 'route', 'simulation'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_ktp_sim' => 'required',
            'masa_berlaku' => 'required',
            'alamat_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'status_rumah' => 'required',
            'lama_menempati' => 'required',
            'status_perkawinan' => 'required',
            'nama_ibu_kandung' => 'required',
            'pekerjaan_ibu_kandung' => 'required',
            'nama_ayah_kandung' => 'required',
            'pekerjaan_ayah_kandung' => 'required',
            'no_telepon_pemohon' => 'required',
            'agunan' => 'required',
            'no_ijasah' => 'required',
            //'nama_pasangan' => 'required',
            //'no_ktp_sim_pasangan' => 'required',
            //'tempat_lahir_pasangan' => 'required',
            //'tanggal_lahir_pasangan' => 'required',
            //'jumlah_tanggungan' => 'required',
            //'pekerjaan_pasangan' => 'required',
            //'nama_perusahaan_pasangan' => 'required',
            'nama_perusahaan' => 'required',
            //'alamat_perusahaan_pasangan' => 'required',
            'alamat_perusahaan' => 'required',
            //'lama_bekerja_pasangan' => 'required',
            'lama_bekerja' => 'required',
            //'no_telepon_pasangan' => 'required',
            'no_telepon' => 'required',
            'nama_kontak_tidak_serumah' => 'required',
            'hubungan' => 'required',
            'alamat' => 'required',
            'no_telepon_kontak_tidak_serumah' => 'required',
            'no_id_pegawai' => 'required',
            'bidang_usaha' => 'required',
            'jabatan' => 'required',
            'jumlah_permohonan_kredit' => 'required',
            'jangka_waktu' => 'required',
            'tujuan_penggunaan' => 'required',
            'account_officer' => 'required',
            'besaran_gaji' => 'required',
            'dsr' => 'required',
            'angsuran' => 'required',
        ]);

        $requestData = $request->post();

        if (isset($requestData['plafond'])) {
            $requestData['plafond'] = convertCurrencyFormat($requestData['plafond']);
        }

        if (isset($requestData['angsuran'])) {
            $requestData['angsuran'] = convertCurrencyFormat($requestData['angsuran']);
        }

        if (isset($requestData['jumlah_permohonan_kredit'])) {
            $requestData['jumlah_permohonan_kredit'] = convertCurrencyFormat($requestData['jumlah_permohonan_kredit']);
        }

        if (isset($requestData['besaran_gaji'])) {
            $requestData['besaran_gaji'] = convertCurrencyFormat($requestData['besaran_gaji']);
        }

       
        //$requestData['id_simulation'] = 
        //dd($requestData);
        // Create a new record

        $masterDebitur = MasterDebitur::create($requestData);
        $id_debitur = $masterDebitur->id; // Mengambil id dari model MasterDebitur yang baru dibuat


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
            $nomorUrutModel->id_debitur = $id_debitur;
            $nomorUrutModel->nomor_full = $nomorUrut;
            $nomorUrutModel->save();
        }

        

        return redirect()->route('debiturs.index')->with('success', 'Debitur created successfully!');
    }

    public function analisa_kredit($id)
    {
        $resource = 'analisa_kredit';
        $route = 'debiturs';
        $debitur = MasterDebitur::with('simulation')->findOrFail($id);
        return view('debiturs.analisa_kredit', compact('debitur','resource','route'));
    }

    public function show($id)
    {
        $resource = 'debiturs';
        $route = 'debiturs';
        $debitur = MasterDebitur::findOrFail($id);
        return view('debiturs.show', compact('debitur','resource','route'));
    }

    public function edit($id)
    {
        $resource = 'debiturs';
        $route = 'debiturs';
        $simulation = MasterDebitur::findOrFail($id);
        $simulations = Simulation::findOrFail($simulation->id_simulation);
        $accountOfficers = AccountOfficer::where('nama_dokumen', 'DATA CALON DEBITUR')->get();
        
        return view('debiturs.edit', compact('simulations','accountOfficers','resource', 'route', 'simulation'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_ktp_sim' => 'required',
            'masa_berlaku' => 'required',
            'alamat_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'status_rumah' => 'required',
            'lama_menempati' => 'required',
            'status_perkawinan' => 'required',
            'nama_ibu_kandung' => 'required',
            'pekerjaan_ibu_kandung' => 'required',
            'nama_ayah_kandung' => 'required',
            'pekerjaan_ayah_kandung' => 'required',
            'no_telepon_pemohon' => 'required',
            'agunan' => 'required',
            'no_ijasah' => 'required',
            //'nama_pasangan' => 'required',
            //'no_ktp_sim_pasangan' => 'required',
            //'tempat_lahir_pasangan' => 'required',
            //'tanggal_lahir_pasangan' => 'required',
            //'jumlah_tanggungan' => 'required',
            //'pekerjaan_pasangan' => 'required',
            //'nama_perusahaan_pasangan' => 'required',
            'nama_perusahaan' => 'required',
            //'alamat_perusahaan_pasangan' => 'required',
            'alamat_perusahaan' => 'required',
            //'lama_bekerja_pasangan' => 'required',
            'lama_bekerja' => 'required',
            //'no_telepon_pasangan' => 'required',
            'no_telepon' => 'required',
            'nama_kontak_tidak_serumah' => 'required',
            'hubungan' => 'required',
            'alamat' => 'required',
            'no_telepon_kontak_tidak_serumah' => 'required',
            'no_id_pegawai' => 'required',
            'bidang_usaha' => 'required',
            'jabatan' => 'required',
            'jumlah_permohonan_kredit' => 'required',
            'jangka_waktu' => 'required',
            'tujuan_penggunaan' => 'required',
            'account_officer' => 'required',
            'besaran_gaji' => 'required',
            'dsr' => 'required',
            'angsuran' => 'required',
        ]);

        $requestData = $request->post();

        if (isset($requestData['plafond'])) {
            $requestData['plafond'] = convertCurrencyFormat($requestData['plafond']);
        }

        if (isset($requestData['angsuran'])) {
            $requestData['angsuran'] = convertCurrencyFormat($requestData['angsuran']);
        }

        if (isset($requestData['jumlah_permohonan_kredit'])) {
            $requestData['jumlah_permohonan_kredit'] = convertCurrencyFormat($requestData['jumlah_permohonan_kredit']);
        }

        if (isset($requestData['besaran_gaji'])) {
            $requestData['besaran_gaji'] = convertCurrencyFormat($requestData['besaran_gaji']);
        }

       
        $debitur = MasterDebitur::findOrFail($id);
        $debitur->update($requestData);

        return redirect()->route('debiturs.index')->with('success', 'Debitur updated successfully!');
    }

    public function destroy($id)
    {
        // Delete the record
        $debitur = MasterDebitur::findOrFail($id);
        $debitur->delete();

        return redirect()->route('debiturs.index')->with('success', 'Debitur deleted successfully!');
    }
}