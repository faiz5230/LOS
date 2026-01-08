<table>
    {{-- Row 1 --}}
    <tr>
        <td colspan="14" style="text-align:center;font-weight:bold;font-size:14pt;">
            DATA SURVEI CALON DEBITUR
        </td>
    </tr>

    {{-- Row 2 --}}
    <tr>
        <td colspan="14" style="text-align:center;">
            Jalan Terusan Kopo No.43560 Telp. (022) 5410733, Fax. (022) 5402140
        </td>
    </tr>

    {{-- Row 3 --}}
    <tr>
        <td colspan="14" style="text-align:center;">Kab. Bandung</td>
    </tr>

    {{-- Row 4 --}}
    <tr><td colspan="14"></td></tr>

    {{-- Row 5 (A:B, C, D:H, I:J, K, L:N) --}}
    <tr>
        <td colspan="2">Permohonan kredit</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->permohonan_kredit ?? '' }}</td>
        <td colspan="2">Tanggal</td>
        <td>:</td>
        <td colspan="3">
            {{ $debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->format('d/m/Y') : '' }}
        </td>
    </tr>

    {{-- Row 6 --}}
    <tr><td colspan="14"></td></tr>

    {{-- Row 7 --}}
    <tr>
        <td colspan="14" style="background-color:#D3D3D3;font-weight:bold;text-align:center;">
            DATA DEBITUR PENSIUN
        </td>
    </tr>

    {{-- Row 8 --}}
    <tr><td colspan="14"></td></tr>

    {{-- Row 9 --}}
    <tr>
        <td colspan="2">Nama Pensiun</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->nama_pensiun }}</td>
        <td colspan="2">Data Agunan</td>
        <td colspan="4"></td>
    </tr>

    {{-- Row 10 --}}
    <tr>
        <td colspan="2">Nama Perusahaan</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->nama_perusahaan }}</td>
        <td colspan="2">Agunan</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->agunan }}</td>
    </tr>

    {{-- Row 11 --}}
    <tr>
        <td colspan="2">No.SK</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->no_sk }}</td>
        <td colspan="2">Alamat</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->alamat_lengkap }}</td>
    </tr>

    {{-- Row 12 --}}
    <tr>
        <td colspan="2">No KTP/SIM</td>
        <td>:</td>
        <td colspan="5" style="mso-number-format:'\@';">'{{ $debitur->no_ktp_sim }}</td>
        <td colspan="2">Atas Nama Agunan</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->atas_nama_agunan }}</td>
    </tr>

    {{-- Row 13 --}}
    <tr><td colspan="14"></td></tr>

    {{-- Row 14 --}}
    <tr>
        <td colspan="2">Tanggal lahir (tgl/bln/thn)</td>
        <td>:</td>
        <td colspan="11">
            {{ $debitur->tanggal_lahir ? \Carbon\Carbon::parse($debitur->tanggal_lahir)->format('d/m/Y') : '' }}
        </td>
    </tr>

    {{-- Row 15 --}}
    <tr><td colspan="14"></td></tr>

    {{-- Row 16 --}}
    <tr>
        <td colspan="2">Tempat Lahir</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->tempat_lahir }}</td>
        <td colspan="2">Data Keluarga</td>
        <td colspan="4"></td>
    </tr>

    {{-- Row 17 --}}
    <tr>
        <td colspan="2">No. Telpon</td>
        <td>:</td>
        <td colspan="5">{{ $debitur->no_telepon_pemohon }}</td>
        <td colspan="2">Nama Keluarga</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->nama_kontak_tidak_serumah }}</td>
    </tr>

    {{-- Row 18 --}}
    <tr>
        <td colspan="2">No.Telp Tidak Serumah</td>
        <td></td>
        <td colspan="5">{{ $debitur->no_telepon_kontak_tidak_serumah }}</td>
        <td colspan="2">Alamat Tidak Serumah</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->alamat_saudara }}</td>
    </tr>

    {{-- Row 19 (A:B merged, C:G merged) --}}
    <tr>
        <td colspan="2" rowspan="5" style="text-align:center;vertical-align:top;font-weight:bold;">
            Account Officer
        </td>
        <td colspan="5" rowspan="5" style="text-align:center;vertical-align:top;font-weight:bold;">
            Pemohon
        </td>

        <td colspan="2">Jumlah Tanggungan</td>
        <td>:</td>
        <td colspan="4">{{ $debitur->jumlah_tanggungan }}</td>
    </tr>

    {{-- Row 20 --}}
    <tr>
        <td colspan="2">Nama Perusahaan</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->nama_perusahaan_direktur ?? '' }}</td>
        <td colspan="3"></td>
    </tr>

    {{-- Row 21 --}}
    <tr>
        <td colspan="2">Alamat Perusahaan</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->alamat_perusahaan_direktur ?? '' }}</td>
        <td colspan="3"></td>
    </tr>

    {{-- Row 22 --}}
    <tr>
        <td colspan="2">Lama Bekerja</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->lama_bekerja ?? '' }}</td>
        <td colspan="3"></td>
    </tr>

    {{-- Row 23 --}}
    <tr>
        <td colspan="2">No. Telepon</td>
        <td>:</td>
        <td colspan="3">{{ $debitur->no_telepon_direktur ?? '' }}</td>
        <td colspan="3"></td>
    </tr>

    {{-- Row 24 --}}
    <tr>
        <td colspan="14" style="background-color:#D3D3D3;font-weight:bold;text-align:center;">
            PERMOHONAN KREDIT
        </td>
    </tr>

    {{-- Row 25 --}}
    <tr><td colspan="14"></td></tr>

    {{-- Row 26 --}}
    <tr>
        <td colspan="3">Jumlah Permohonan Kredit</td>
        <td colspan="11">: Rp{{ number_format($debitur->jumlah_permohonan_kredit, 0, ',', '.') }}</td>
    </tr>

    {{-- Row 27 --}}
    <tr>
        <td colspan="3">Jangka Waktu</td>
        <td colspan="11">: {{ $debitur->jangka_waktu }} Bulan</td>
    </tr>

    {{-- Row 28 --}}
    <tr>
        <td colspan="3">Tujuan Penggunaan</td>
        <td colspan="11">: {{ $debitur->tujuan_penggunaan }}</td>
    </tr>

    {{-- Row 29 --}}
    <tr>
        <td colspan="3">Account Officer</td>
        <td colspan="11">: {{ $debitur->account_officer }}</td>
    </tr>
</table>
