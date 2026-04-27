<?php

namespace App\Exports;

use App\Models\DebiturModalKerja;
use App\Models\DebiturPensiun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Border;

class PerjanjianKreditSendiri implements FromView, WithStyles, WithDrawings
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

            return view('debitur.pensiun-pensiun.pk_snd_sim_export', [
                'debitur' => $debitur
            ]);
        }

        if ($this->jenis === 'modal_kerja') {
            $debitur = DebiturModalKerja::with('simulation')->findOrFail($this->id);

            return view('debiturs.modal_kerja.pk_snd_sim_export', [
                'debitur' => $debitur
            ]);
        }

        // ✅ Kalau jenis tidak diisi, coba cari otomatis
        $debitur = DebiturModalKerja::with('simulation')->find($this->id);
        if ($debitur) {
            return view('debiturs.modal_kerja.pk_snd_sim_export', compact('debitur'));
        }

        $debitur = DebiturPensiun::with('simulation')->findOrFail($this->id);
        return view('debiturs.Pensiun.pk_snd_sim_export', compact('debitur'));
    }

    public function styles(Worksheet $sheet)
    {
        // tetap style lama
        $sheet->getStyle('A1')->getFont()->setBold(true);

        // ✅ Hilangkan gridlines excel
        $sheet->setShowGridlines(false);

        // ✅ Hilangkan semua border di area tabel A-K
        $sheet->getStyle('A1:L178')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_NONE,
                ],
            ],
        ]);
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/build/images/logo.png'));
        $drawing->setHeight(40);
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
