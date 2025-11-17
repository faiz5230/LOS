<?php

namespace App\Exports;

use App\Exports\Traits\HasDynamicViewPath;
use App\Models\AccountOfficer;
use App\Models\MasterDebitur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataCalonDebitur implements FromView,WithStyles,WithDrawings 
{
    use HasDynamicViewPath;
    
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
            $nama = null;
            $alamat = null;
            $jabatan = null;
            $nik = null;
        }
        
        $viewPath = $this->getViewPath($debitur, 'data_calon_debitur_export');
        
        return view($viewPath, [
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
        $drawing->setCoordinates('O2');
        

       

       
        return $drawing;
    }
}
