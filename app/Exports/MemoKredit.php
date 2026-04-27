<?php

namespace App\Exports;

use App\Models\DebiturModalKerja;
use App\Models\DebiturPensiun;
use App\Models\DebiturPasar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class MemoKredit implements FromView, WithStyles, WithDrawings
{
    protected $id;
    protected $jenis; // modal_kerja / pensiun

    public function __construct($id, $jenis = null)
    {
        $this->id = $id;
        $this->jenis = $jenis;
    }

    public function view(): View
    {
        // ✅ Kalau jenis kredit ditentukan dari controller
        if ($this->jenis === 'pensiun') {
            $debitur = DebiturPensiun::with('simulation')->findOrFail($this->id);

            return view('debitur.pensiun-pensiun.memo_kredit_pensiun_export', [
                'debitur' => $debitur
            ]);
        }

        if ($this->jenis === 'modal_kerja') {
            $debitur = DebiturModalKerja::with('simulation')->findOrFail($this->id);

            return view('debiturs.memo_kredit_export', [
                'debitur' => $debitur
            ]);
        }
        if ($this->jenis === 'pasar') {
            $debitur = DebiturPasar::with('simulation')->findOrFail($this->id);

            return view('debitur.pasar.memo_kredit_pasar_export', [
                'debitur' => $debitur
            ]);
        }

        // ✅ Kalau jenis tidak diisi, coba cari otomatis
        $debitur = DebiturModalKerja::with('simulation')->find($this->id);
        if ($debitur) {
            return view('debiturs.memo_kredit_export', compact('debitur'));
        }
        if ($debitur) {
        $debitur = DebiturPensiun::with('simulation')->findOrFail($this->id);
        return view('debiturs.Pensiun.memo_kredit_pensiun_export', compact('debitur'));
        } 
        if ($debitur) {
        $debitur = DebiturPasar::with('simulation')->findOrFail($this->id);
        return view('debiturs.Pasar.memo_kredit_pasar_export', compact('debitur'));
        } 
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1')->getFont()->setBold(true);
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/build/images/logo.png'));
        $drawing->setHeight(40);
        $drawing->setCoordinates('A1');

        return $drawing;
    }
}
