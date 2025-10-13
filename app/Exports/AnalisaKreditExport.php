<?php

namespace App\Exports;

use App\Models\AccountOfficer;
use App\Models\MasterDebitur;
use App\Models\AnalisaKredit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class AnalisaKreditExport implements FromView,WithStyles,WithDrawings 
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
        
        $analisa_kredit = AnalisaKredit::with('detailAnalisaKredit','debitur')->findOrFail($this->id);
        $officer = AccountOfficer::where('nama_dokumen', 'ANALISA KREDIT')->first();
        if ($officer) {
            $nama = $officer->nama;
            $jabatan = $officer->jabatan;
        } else {
            // Handle jika tidak ada baris yang sesuai dengan kriteria
            $nama = null;
            $jabatan = null;
        }
        return view('analisa_kredit.export', [
            'analisa_kredit'=>$analisa_kredit,'nama'=>$nama,'jabatan'=>$jabatan
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
        $drawing->setHeight(70);
        $drawing->setCoordinates('J5');

       
        

       
        return [$drawing];
    }
}
