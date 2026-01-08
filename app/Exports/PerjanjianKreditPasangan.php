<?php

namespace App\Exports;

use App\Models\AccountOfficer;
use App\Models\MasterDebitur;
use App\Models\DebiturModalKerja;
use App\Models\DebiturPensiun;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

use App\Exports\Traits\HasDynamicViewPath;

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
        $debitur = DebiturModalKerja::with('simulation')->findOrFail($this->id);
        $officer = AccountOfficer::where('nama_dokumen', 'PERJANJIAN KREDIT')->first();

        
        return view('debiturs.modal_kerja.pk_kredit_pasangan_export', [
        'debitur' => $debitur,
        'nama'    => $officer->nama ?? null,
        'alamat'  => $officer->alamat ?? null,
        'jabatan' => $officer->jabatan ?? null,
        'nik'     => $officer->nik ?? null,
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
