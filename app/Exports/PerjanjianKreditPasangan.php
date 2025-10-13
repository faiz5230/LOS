<?php

namespace App\Exports;

use App\Models\AccountOfficer;
use App\Models\MasterDebitur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class PerjanjianKreditPasangan implements FromView,WithStyles,WithDrawings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
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
            $jabatan = $officer->jabatan;
            $nik = $officer->nik;
        } else {
            // Handle jika tidak ada baris yang sesuai dengan kriteria
            $nama = null;
            $alamat = null;
            $jabatan = null;
            $nik = null;
        }
        return view('debiturs.pk_kredit_pasangan_export', [
            'debitur'=>$debitur,'nama'=>$nama,'alamat'=>$alamat,'jabatan'=>$jabatan,'nik'=>$nik
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
        $drawing->setHeight(50);
        $drawing->setCoordinates('A1');

        $drawing2 = new Drawing();
        $drawing2->setName('Logo BPR');
        $drawing2->setDescription('This is another image');
        $drawing2->setPath(public_path('/build/images/logo_bpr.png'));
        $drawing2->setHeight(70);
        $drawing2->setCoordinates('L1'); 

       
        return [$drawing, $drawing2];
    }
}
