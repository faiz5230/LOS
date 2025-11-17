<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\MasterDebitur;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

use App\Exports\Traits\HasDynamicViewPath;

class MemoKredit implements FromView,WithStyles,WithDrawings 
    use HasDynamicViewPath;

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

        $viewPath = $this->getViewPath($debitur, 'memo_kredit_export');
        
        return view($viewPath, [
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
        $drawing->setHeight(40);
        $drawing->setCoordinates('A1');

        return $drawing;
    }
}
