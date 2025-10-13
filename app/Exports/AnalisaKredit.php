<?php

namespace App\Exports;

use App\Models\AccountOfficer;
use App\Models\MasterDebitur;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class AnalisaKredit implements FromView,WithStyles,WithDrawings 
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        
        $debitur = MasterDebitur::with('simulation')->findOrFail($this->id);
        $officer = AccountOfficer::where('nama_dokumen', 'PERJANJIAN KREDIT')->first();

        if ($officer) {
            $nama = $officer->nama;
            $alamat = $officer->alamat;
        } else {
            // Handle jika tidak ada baris yang sesuai dengan kriteria
            $nama = null;
            $alamat = null;
        }
        return view('debiturs.analisa_kredit_export', [
            'debitur'=>$debitur,'nama'=>$nama,'alamat'=>$alamat
        ]);
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
