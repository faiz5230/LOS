<table>
    {{-- Header Section --}}
    <tr>
        <td colspan="14" style="text-align: center; font-weight: bold; font-size: 14pt;">DATA SURVEI CALON DEBITUR</td>
    </tr>
    <tr>
        <td colspan="14" style="text-align: center;">Jalan Terusan Kopo No.43560 Telp. (022) 5410733, Fax. (022) 5402140</td>
    </tr>
    <tr>
        <td colspan="14" style="text-align: center;">Kab. Bandung</td>
    </tr>
    <tr><td colspan="14"></td></tr>

    {{-- Permohonan Kredit --}}
    <tr>
        <td colspan="2">Permohonan kredit</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->permohonan_kredit ?? ($debitur->simulation->jenis_kredit ?? 'Kredit Modal Kerja') }}</td>
        <td colspan="2">Tanggal</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->format('d/m/Y') : '' }}</td>
    </tr>
    <tr><td colspan="14"></td></tr>

    {{-- DATA PERUSAHAAN Header --}}
    <tr>
        <td colspan="14" style="background-color: #D3D3D3; font-weight: bold; text-align: center;">DATA PERUSAHAAN</td>
    </tr>
    <tr><td colspan="14"></td></tr>

    {{-- Data Perusahaan & Data Agunan --}}
    <tr>
        <td colspan="2">Nama Perusahaan</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->nama_perusahaan }}</td>
        <td colspan="2">Data Agunan</td>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="2">Bidang Usaha</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->bidang_usaha_perusahaan }}</td>
        <td colspan="2">Agunan</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->agunan }}</td>
    </tr>
    <tr>
        <td colspan="2">NIB</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->nib }}</td>
        <td colspan="2">No. Agunan</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->no_agunan }}</td>
    </tr>
    <tr>
        <td colspan="2">Akta Pendirian</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->akte_pendirian }}</td>
        <td colspan="2">Atas Nama Agunan</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->atas_nama_agunan }}</td>
    </tr>
    <tr><td colspan="14"></td></tr>

    <tr>
        <td colspan="2">Alamat Lengkap</td>
        <td>:</td>
        <td colspan="11">{{ $debitur->alamat_lengkap }}</td>
    </tr>
    <tr><td colspan="14"></td></tr>

    {{-- Data NPWP/Telp & Data Direktur --}}
    <tr>
        <td colspan="2">No. NPWP</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->no_npwp_perusahaan }}</td>
        <td colspan="2">Data Direktur</td>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="2">No. Telp</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->no_telp_perusahaan }}</td>
        <td colspan="2">Nama</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->nama_direktur }}</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td colspan="5"></td>
        <td colspan="2">No KTP/ SIM</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->no_ktp_sim }}</td>
    </tr>

    {{-- Account Officer & Pemohon Section with Director Details --}}
    <tr>
        <td colspan="2" rowspan="9" style="text-align: center; vertical-align: top; font-weight: bold;">Account Officer</td>
        <td colspan="5" rowspan="9" style="text-align: center; vertical-align: top; font-weight: bold;">Pemohon</td>
        <td colspan="2">Tempat Lahir</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->tempat_lahir }}</td>
    </tr>
    <tr>
        <td colspan="2">Tanggal lahir (tgl/bln/thn)</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->tanggal_lahir ? \Carbon\Carbon::parse($debitur->tanggal_lahir)->format('d/m/Y') : '' }}</td>
    </tr>
    <tr>
        <td colspan="2">Jumlah Tanggungan</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->jumlah_tanggungan }}</td>
    </tr>
    <tr>
        <td colspan="2">Pekerjaan</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->pekerjaan }}</td>
    </tr>
    <tr>
        <td colspan="2">Nama Perusahaan</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->nama_perusahaan_direktur }}</td>
    </tr>
    <tr>
        <td colspan="2">Alamat Perusahaan</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->alamat_perusahaan_direktur }}</td>
    </tr>
    <tr>
        <td colspan="2">Lama Bekerja</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->lama_bekerja }}</td>
    </tr>
    <tr>
        <td colspan="2">No. Telepon</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->no_telepon_direktur }}</td>
    </tr>
    <tr>
        <td colspan="7"></td>
    </tr>
    <tr><td colspan="14"></td></tr>

    {{-- DATA USAHA CALON DEBITUR --}}
    <tr>
        <td colspan="14" style="background-color: #D3D3D3; font-weight: bold; text-align: center;">DATA USAHA CALON DEBITUR</td>
    </tr>
    <tr><td colspan="14"></td></tr>
    <tr>
        <td colspan="2">Nama Usaha</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->nama_usaha }}</td>
        <td colspan="2">Bidang Usaha</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->bidang_usaha }}</td>
    </tr>
    <tr>
        <td colspan="2">Alamat Usaha</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->alamat_usaha }}</td>
        <td colspan="2">NPWP</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->npwp_usaha }}</td>
    </tr>
    <tr>
        <td colspan="2">Lama Usaha</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->lama_usaha }}</td>
        <td colspan="2">No. Telepon</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->no_telepon_usaha }}</td>
    </tr>
    <tr>
        <td colspan="2">Bentuk badan Usaha</td>
        <td>:</td>
        <td colspan="11">{{ $debitur->bentuk_badan_usaha }}</td>
    </tr>
    <tr><td colspan="14"></td></tr>

    {{-- PERMOHONAN KREDIT --}}
    <tr>
        <td colspan="14" style="background-color: #D3D3D3; font-weight: bold; text-align: center;">PERMOHONAN KREDIT</td>
    </tr>
    <tr><td colspan="14"></td></tr>
    <tr>
        <td colspan="3">Jumlah Permohonan Kredit</td>
        <td colspan="11">: Rp{{ number_format($debitur->jumlah_permohonan_kredit, 0, ',', '.') }}</td>
    </tr>
    <tr>
        <td colspan="3">Jangka Waktu</td>
        <td colspan="11">: {{ $debitur->jangka_waktu }} Bulan</td>
    </tr>
    <tr>
        <td colspan="3">Tujuan Penggunaan</td>
        <td colspan="11">: {{ $debitur->tujuan_penggunaan }}</td>
    </tr>
    <tr>
        <td colspan="3">Account Officer</td>
        <td colspan="11">: {{ $debitur->account_officer }}</td>
    </tr>
</table>
