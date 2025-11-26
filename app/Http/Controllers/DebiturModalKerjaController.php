<?php

namespace App\Http\Controllers;

use App\Models\DebiturModalKerja;
use Illuminate\Http\Request;

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

        DebiturModalKerja::create($data);

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
