<?php

namespace App\Exports;

use App\Models\MasterDebitur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class Sttu implements FromView,WithStyles,WithDrawings 
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

        return view('debiturs.sttu_export', [
            'debitur'=>$debitur
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
        $drawing2->setCoordinates('H1'); 
        

       
        return [$drawing, $drawing2];
    }
}
