<?php

namespace App\Http\Controllers;

use App\Models\SettingParam;
use App\Models\Simulation;
use Illuminate\Http\Request;
use DB;

class SimulationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_rate_asuransi(Request $request)
    {
        $jangka_waktu = $request->query('jangka_waktu');
        $usia = $request->query('usia');
        $result = DB::table('table_counts')
            ->select($jangka_waktu)
            ->where('age', $usia)
            ->pluck($jangka_waktu)->first();

        return $result;
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $jenis_kredit = $request->query('jenis_kredit');
        $resource = 'simulations';
        $route = 'simulations';

        $collection = Simulation::query();

        // Filter by jenis_kredit if provided
        if (!empty($jenis_kredit)) {
            $collection = $collection->where('jenis_kredit', $jenis_kredit);
        }

        if (!empty($search)) {
            $collection = $collection->where(function ($query) use ($search) {
                $query->where('tanggal_realisasi', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama', 'LIKE', '%' . $search . '%')
                    ->orWhere('tanggal_lahir', 'LIKE', '%' . $search . '%')
                    //->orWhere('jatuh_tempo', 'LIKE', '%' . $search . '%')
                    ->orWhere('usia', 'LIKE', '%' . $search . '%')
                    ->orWhere('besaran_gaji', 'LIKE', '%' . $search . '%')
                    ->orWhere('dsr', 'LIKE', '%' . $search . '%')
                    ->orWhere('maksimal_angsuran', 'LIKE', '%' . $search . '%')
                    ->orWhere('plafond', 'LIKE', '%' . $search . '%')
                    ->orWhere('jangka_waktu', 'LIKE', '%' . $search . '%')
                    ->orWhere('bunga_flat', 'LIKE', '%' . $search . '%')
                    ->orWhere('bunga_effektif', 'LIKE', '%' . $search . '%')
                    ->orWhere('angsuran', 'LIKE', '%' . $search . '%')
                    ->orWhere('sisa_gaji', 'LIKE', '%' . $search . '%')
                    ->orWhere('biaya_provisi', 'LIKE', '%' . $search . '%')
                    ->orWhere('biaya_notaris', 'LIKE', '%' . $search . '%')
                    ->orWhere('biaya_administrasi', 'LIKE', '%' . $search . '%')
                    ->orWhere('biaya_asuransi', 'LIKE', '%' . $search . '%')
                    ->orWhere('biaya_materai', 'LIKE', '%' . $search . '%')
                    ->orWhere('retensi', 'LIKE', '%' . $search . '%')
                    ->orWhere('tabungan_wajib', 'LIKE', '%' . $search . '%')
                    ->orWhere('rate_asuransi', 'LIKE', '%' . $search . '%')
                    ->orWhere('ass_krd', 'LIKE', '%' . $search . '%')
                    ->orWhere('bunga', 'LIKE', '%' . $search . '%')
                    ->orWhere('denda', 'LIKE', '%' . $search . '%')
                    ->orWhere('pinalty', 'LIKE', '%' . $search . '%')
                    ->orWhere('total_diterima', 'LIKE', '%' . $search . '%');
            });
        }
        $rows = $request->query('rows', 10);
        $collection = $collection->orderBy('id', 'desc')->paginate($rows);
        $collection->appends(request()->query());
        return view('simulations.index', compact('collection', 'search', 'resource', 'route', 'rows', 'jenis_kredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $resource = 'simulations';
        $route = 'simulations';
        $jenis_kredit = $request->query('jenis_kredit'); // Get jenis_kredit from query parameter
        $params = SettingParam::all();
        $dsrValue = $params->where('name', 'dsr')->pluck('value')->first();
        $biaya_provisiValue = $params->where('name', 'biaya_provisi')->pluck('value')->first();
        $biaya_notarisValue = $params->where('name', 'biaya_notaris')->pluck('value')->first();
        $biaya_administrasiValue = $params->where('name', 'biaya_administrasi')->pluck('value')->first();
        $biaya_materaiValue = $params->where('name', 'biaya_materai')->pluck('value')->first();
        $tabungan_wajibValue = $params->where('name', 'tabungan_wajib')->pluck('value')->first();
        $ass_krdValue = $params->where('name', 'ass_krd')->pluck('value')->first();


        return view('simulations.create', compact('resource', 'route', 'dsrValue', 'biaya_provisiValue','biaya_notarisValue','biaya_administrasiValue', 'biaya_materaiValue', 'tabungan_wajibValue', 'ass_krdValue', 'jenis_kredit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_realisasi' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'besaran_gaji' => 'required',
            'dsr' => 'required',
            'maksimal_angsuran' => 'required',
            'plafond' => 'required',
            'jangka_waktu' => 'required',
            //'jatuh_tempo' => 'required',
            'bunga_flat' => 'required',
            'bunga_effektif' => 'required',
            'angsuran' => 'required',
            'sisa_gaji' => 'required',
            'biaya_provisi' => 'required',
            'biaya_notaris' => 'required',
            'biaya_administrasi' => 'required',
            'biaya_asuransi' => 'required',
            'biaya_materai' => 'required',
            'retensi' => 'required',
            'tabungan_wajib' => 'required',
            'rate_asuransi' => 'required',
            'ass_krd' => 'required',
            //'bunga' => 'required',
            //'denda' => 'required',
            //'pinalty' => 'required',
            'total_diterima' => 'required',
            'jenis_kredit' => 'required',
        ]);

        $requestData = $request->post();
        
        
        if (isset($requestData['besaran_gaji'])) {
            $requestData['besaran_gaji'] = convertCurrencyFormat($requestData['besaran_gaji']);
        }

        
        if (isset($requestData['maksimal_angsuran'])) {
            $requestData['maksimal_angsuran'] = convertCurrencyFormat($requestData['maksimal_angsuran']);
        }

        if (isset($requestData['plafond'])) {
            $requestData['plafond'] = convertCurrencyFormat($requestData['plafond']);
        }

        if (isset($requestData['angsuran'])) {
            $requestData['angsuran'] = convertCurrencyFormat($requestData['angsuran']);
        }

        if (isset($requestData['sisa_gaji'])) {
            $requestData['sisa_gaji'] = convertCurrencyFormat($requestData['sisa_gaji']);
        }
        if (isset($requestData['biaya_notaris'])) {
            $requestData['biaya_notaris'] = convertCurrencyFormat($requestData['biaya_notaris']);
        }

        if (isset($requestData['biaya_provisi'])) {
            $requestData['biaya_provisi'] = convertCurrencyFormat($requestData['biaya_provisi']);
        }

        if (isset($requestData['biaya_administrasi'])) {
            $requestData['biaya_administrasi'] = convertCurrencyFormat($requestData['biaya_administrasi']);
        }

        if (isset($requestData['biaya_asuransi'])) {
            $requestData['biaya_asuransi'] = convertCurrencyFormat($requestData['biaya_asuransi']);
        }
        if (isset($requestData['biaya_materai'])) {
            $requestData['biaya_materai'] = convertCurrencyFormat($requestData['biaya_materai']);
        }

        if (isset($requestData['retensi'])) {
            $requestData['retensi'] = convertCurrencyFormat($requestData['retensi']);
        }

        if (isset($requestData['tabungan_wajib'])) {
            $requestData['tabungan_wajib'] = convertCurrencyFormat($requestData['tabungan_wajib']);
        }

        if (isset($requestData['ass_krd'])) {
            $requestData['ass_krd'] = convertCurrencyFormat($requestData['ass_krd']);
        }

        if (isset($requestData['bunga'])) {
            $requestData['bunga'] = convertCurrencyFormat($requestData['bunga']);
        }

        if (isset($requestData['denda'])) {
            $requestData['denda'] = convertCurrencyFormat($requestData['denda']);
        }

        if (isset($requestData['pinalty'])) {
            $requestData['pinalty'] = convertCurrencyFormat($requestData['pinalty']);
        }

        if (isset($requestData['total_diterima'])) {
            $requestData['total_diterima'] = convertCurrencyFormat($requestData['total_diterima']);
        }

       // dd($requestData);

        Simulation::create($requestData);

        return redirect()->route('simulations.index')
            ->with('success', 'Simulation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Simulation  $simulation
     * @return \Illuminate\Http\Response
     */
    public function show(Simulation $simulation)
    {
        $resource = 'simulations';
        $route = 'simulations';
        return view('simulations.show', compact('simulation','resource','route'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Simulation  $simulation
     * @return \Illuminate\Http\Response
     */
    public function edit(Simulation $simulation)
    {
        $resource = 'simulations';
        $route = 'simulations';

        return view('simulations.edit', compact('simulation','resource', 'route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simulation  $simulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simulation $simulation)
    {
        $request->validate([
            'tanggal_realisasi' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'besaran_gaji' => 'required',
            'dsr' => 'required',
            'maksimal_angsuran' => 'required',
            'plafond' => 'required',
            'jangka_waktu' => 'required',
            //'jatuh_tempo' => 'required',
            'bunga_flat' => 'required',
            'bunga_effektif' => 'required',
            'angsuran' => 'required',
            'sisa_gaji' => 'required',
            'biaya_notaris' => 'required',
            'biaya_provisi' => 'required',
            'biaya_administrasi' => 'required',
            'biaya_asuransi' => 'required',
            'biaya_materai' => 'required',
            'retensi' => 'required',
            'tabungan_wajib' => 'required',
            'rate_asuransi' => 'required',
            'ass_krd' => 'required',
            //'bunga' => 'required',
            //'denda' => 'required',
            //'pinalty' => 'required',
            'total_diterima' => 'required',
            'jenis_kredit' => 'required',
        ]);

        $requestData = $request->post();
        
        
        if (isset($requestData['besaran_gaji'])) {
            $requestData['besaran_gaji'] = convertCurrencyFormat($requestData['besaran_gaji']);
        }

        
        if (isset($requestData['maksimal_angsuran'])) {
            $requestData['maksimal_angsuran'] = convertCurrencyFormat($requestData['maksimal_angsuran']);
        }

        if (isset($requestData['plafond'])) {
            $requestData['plafond'] = convertCurrencyFormat($requestData['plafond']);
        }

        if (isset($requestData['angsuran'])) {
            $requestData['angsuran'] = convertCurrencyFormat($requestData['angsuran']);
        }

        if (isset($requestData['sisa_gaji'])) {
            $requestData['sisa_gaji'] = convertCurrencyFormat($requestData['sisa_gaji']);
        }
        if (isset($requestData['biaya_notaris'])) {
            $requestData['biaya_notaris'] = convertCurrencyFormat($requestData['biaya_notaris']);
        }

        if (isset($requestData['biaya_provisi'])) {
            $requestData['biaya_provisi'] = convertCurrencyFormat($requestData['biaya_provisi']);
        }

        if (isset($requestData['biaya_administrasi'])) {
            $requestData['biaya_administrasi'] = convertCurrencyFormat($requestData['biaya_administrasi']);
        }

        if (isset($requestData['biaya_asuransi'])) {
            $requestData['biaya_asuransi'] = convertCurrencyFormat($requestData['biaya_asuransi']);
        }
        if (isset($requestData['biaya_materai'])) {
            $requestData['biaya_materai'] = convertCurrencyFormat($requestData['biaya_materai']);
        }

        if (isset($requestData['retensi'])) {
            $requestData['retensi'] = convertCurrencyFormat($requestData['retensi']);
        }

        if (isset($requestData['tabungan_wajib'])) {
            $requestData['tabungan_wajib'] = convertCurrencyFormat($requestData['tabungan_wajib']);
        }

        if (isset($requestData['ass_krd'])) {
            $requestData['ass_krd'] = convertCurrencyFormat($requestData['ass_krd']);
        }

        if (isset($requestData['bunga'])) {
            $requestData['bunga'] = convertCurrencyFormat($requestData['bunga']);
        }

        if (isset($requestData['denda'])) {
            $requestData['denda'] = convertCurrencyFormat($requestData['denda']);
        }

        if (isset($requestData['pinalty'])) {
            $requestData['pinalty'] = convertCurrencyFormat($requestData['pinalty']);
        }

        if (isset($requestData['total_diterima'])) {
            $requestData['total_diterima'] = convertCurrencyFormat($requestData['total_diterima']);
        }

        $simulation->update($requestData);

        return redirect()->route('simulations.index')
            ->with('success', 'Simulation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Simulation  $simulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simulation $simulation)
    {
        $simulation->delete();

        return redirect()->route('simulations.index')
            ->with('success', 'Simulation deleted successfully.');
    }
}
