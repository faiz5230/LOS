<?php

namespace App\Exports;

use App\Models\DebiturModalKerja;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataDebiturModalKerja implements FromView, WithStyles, WithDrawings 
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $debitur = DebiturModalKerja::with('simulation')->findOrFail($this->id);
        
        return view('exports.data_debitur_modal_kerja', [
            'debitur' => $debitur
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        // Set column widths to match the design
        $sheet->getColumnDimension('A')->setWidth(4);    // Narrow column
        $sheet->getColumnDimension('B')->setWidth(20);   // Label column (wider)
        $sheet->getColumnDimension('C')->setWidth(2);    // Colon (:)
        $sheet->getColumnDimension('D')->setWidth(8);    // Data column
        $sheet->getColumnDimension('E')->setWidth(8);    // Data column
        $sheet->getColumnDimension('F')->setWidth(8);    // Data column
        $sheet->getColumnDimension('G')->setWidth(15);   // Data column (wider for longer text)
        $sheet->getColumnDimension('H')->setWidth(4);    // Separator
        $sheet->getColumnDimension('I')->setWidth(20);   // Right side label column
        $sheet->getColumnDimension('J')->setWidth(2);    // Colon (:)
        $sheet->getColumnDimension('K')->setWidth(8);    // Right side data
        $sheet->getColumnDimension('L')->setWidth(8);    // Right side data
        $sheet->getColumnDimension('M')->setWidth(8);    // Right side data
        $sheet->getColumnDimension('N')->setWidth(15);   // Right side data (wider)

        // Get highest row
        $highestRow = $sheet->getHighestRow();

        // Apply borders to all cells
        $sheet->getStyle('A1:N' . $highestRow)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ]);

        // Header styling (rows 1-3)
        $sheet->getStyle('A1:N3')->applyFromArray([
            'font' => ['bold' => true],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ]);

        // Title font size
        $sheet->getStyle('A1')->getFont()->setSize(14);

        // Section headers background color (DATA PERUSAHAAN, DATA USAHA CALON DEBITUR, PERMOHONAN KREDIT)
        $dataRows = [];
        for ($row = 1; $row <= $highestRow; $row++) {
            $cellValue = $sheet->getCell('A' . $row)->getValue();
            if (in_array($cellValue, ['DATA PERUSAHAAN', 'DATA USAHA CALON DEBITUR', 'PERMOHONAN KREDIT'])) {
                $dataRows[] = $row;
                $sheet->getStyle('A' . $row . ':N' . $row)->applyFromArray([
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'D3D3D3'],
                    ],
                    'font' => ['bold' => true],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    ],
                ]);
            }
        }

        // Vertical alignment for all data cells
        $sheet->getStyle('A1:N' . $highestRow)->getAlignment()->setVertical(
            \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP
        );

        // Set row heights
        $sheet->getDefaultRowDimension()->setRowHeight(20);

        // Account Officer and Pemohon boxes - set specific height
        for ($row = 1; $row <= $highestRow; $row++) {
            $cellValue = $sheet->getCell('A' . $row)->getValue();
            if ($cellValue === 'Account Officer' || $cellValue === 'Pemohon') {
                $sheet->getRowDimension($row)->setRowHeight(80);

                // Center alignment for these labels
                $sheet->getStyle('A' . $row)->applyFromArray([
                    'font' => ['bold' => true],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP,
                    ],
                ]);
            }
        }

        // Wrap text for all cells
        $sheet->getStyle('A1:N' . $highestRow)->getAlignment()->setWrapText(true);

        return [];
    }

    public function drawings()
    {
        // Uncomment below to add logo to the export
        // $drawing = new Drawing();
        // $drawing->setName('Logo');
        // $drawing->setDescription('This is my logo');
        // $drawing->setPath(public_path('/build/images/logo.png'));
        // $drawing->setHeight(50);
        // $drawing->setCoordinates('O2');
        // return $drawing;

        return [];
    }
}
