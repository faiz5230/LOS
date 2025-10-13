<?php

namespace App\Exports;

use App\Models\MasterDebitur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MasterDebiturExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MasterDebitur::all();
    }



    public function headings(): array
    {
        return [
            'Tanggal',
            'Nama',
            'Jenis Kelamin',
            'No KTP/SIM',
            'Masa Berlaku',
            'Alamat Lengkap',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Pendidikan Terakhir',
            'Status Rumah',
            'Lama Menempati',
            'Status Perkawinan',
            'Nama Ibu Kandung',
            'Pekerjaan Ibu Kandung',
            'Nama Ayah Kandung',
            'Pekerjaan Ayah Kandung',
            'No Telepon Pemohon',
            'Agunan',
            'No Ijasah',
            'Nama Pasangan',
            'No KTP/SIM Pasangan',
            'Tempat Lahir Pasangan',
            'Tanggal Lahir Pasangan',
            'Jumlah Tanggungan',
            'Pekerjaan Pasangan',
            'Nama Perusahaan Pasangan',
            'Alamat Perusahaan Pasangan',
            'Lama Bekerja Pasangan',
            'No Telepon Pasangan',
            'Nama Perusahaan',
            'Alamat Perusahaan',
            'Lama Bekerja',
            'No Telepon',
            'Nama Kontak Tidak Serumah',
            'Hubungan',
            'Alamat Kontak Tidak Serumah',
            'No Telepon Kontak Tidak Serumah',
            'No ID Pegawai',
            'Bidang Usaha',
            'Jabatan',
            'Jumlah Permohonan Kredit',
            'Jangka Waktu',
            'Tujuan Penggunaan',
            'Account Officer',
            'Besaran Gaji',
            'DSR',
            'Angsuran',
            'ID Simulation',
            'Created At',
            'Updated At',
            'Deleted At',
        ];
    }
}
