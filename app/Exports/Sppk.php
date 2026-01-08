<?php

namespace App\Exports;

use App\Models\DebiturModalKerja;
use App\Models\MasterDebitur;
use App\Models\DebiturPensiun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

use App\Exports\Traits\HasDynamicViewPath;

class Sppk implements FromView, WithStyles, WithDrawings
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

            return view('debitur.pensiun-pensiun.sppk_export', [
                'debitur' => $debitur
            ]);
        }

        if ($this->jenis === 'modal_kerja') {
            $debitur = DebiturModalKerja::with('simulation')->findOrFail($this->id);

            return view('debiturs.sppk_export', [
                'debitur' => $debitur
            ]);
        }

        // ✅ Kalau jenis tidak diisi, coba cari otomatis
        $debitur = DebiturModalKerja::with('simulation')->find($this->id);
        if ($debitur) {
            return view('debiturs.sppk_export', compact('debitur'));
        }

        $debitur = DebiturPensiun::with('simulation')->findOrFail($this->id);
        return view('debiturs.Pensiun.sppk_export', compact('debitur'));
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
        $drawing->setPath(public_path('build/images/logo.png'));
        $drawing->setHeight(50);
        $drawing->setCoordinates('A1');

        $drawing2 = new Drawing();
        $drawing2->setName('Logo BPR');
        $drawing2->setDescription('This is another image');
        $drawing2->setPath(public_path('build/images/logo_bpr.png'));
        $drawing2->setHeight(70);
        $drawing2->setCoordinates('K1');
        $drawing2->setOffsetX(50);

        return [$drawing, $drawing2];
    }
}
