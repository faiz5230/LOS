{{-- resources/views/simulations/download-xls.blade.php --}}
@php
    // ===== Helpers =====
    $fmtMoney = function ($v) {
        if ($v === null || $v === '') return '';
        // kalau nilai sudah string "1.000.000" biarkan, kalau numeric formatkan
        if (is_numeric($v)) return number_format((float)$v, 0, ',', '.');
        return $v;
    };

    $fmtPercent = function ($v, $dec = 0) {
        if ($v === null || $v === '') return '';
        if (is_numeric($v)) {
            // asumsi dsr/bunga bisa disimpan 0.15 -> 15% (umum)
            // kalau ternyata disimpan 15 -> jadi 1500%, kamu bisa matiin perkalian 100 di bawah
            $val = (float)$v;
            if ($val > 1) {
                // kalau user simpan 15 artinya 15% (bukan 0.15)
                return number_format($val, $dec, ',', '.') . '%';
            }
            return number_format($val * 100, $dec, ',', '.') . '%';
        }
        return $v;
    };

    $fmtDateLong = function ($v) {
        if (!$v) return '';
        try {
            return \Carbon\Carbon::parse($v)->locale('id')->translatedFormat('d F Y');
        } catch (\Throwable $e) {
            return $v;
        }
    };

    // ===== Mapping sesuai kolom yang dipakai di SimulationController (pasti ada) =====
    $tanggal_realisasi = $simulation->tanggal_realisasi ?? null;
    $nama             = $simulation->nama ?? '';
    $tanggal_lahir    = $simulation->tanggal_lahir ?? null;
    $usia             = $simulation->usia ?? '';
    $besaran_gaji     = $simulation->besaran_gaji ?? null;
    $dsr              = $simulation->dsr ?? null;
    $maks_angsuran    = $simulation->maksimal_angsuran ?? null;
    $plafond          = $simulation->plafond ?? null;
    $jangka_waktu     = $simulation->jangka_waktu ?? null;

    $bunga_flat       = $simulation->bunga_flat ?? null;
    $bunga_effektif   = $simulation->bunga_effektif ?? null;
    $angsuran         = $simulation->angsuran ?? null;
    $sisa_gaji        = $simulation->sisa_gaji ?? null;

    $biaya_provisi    = $simulation->biaya_provisi ?? null;
    $biaya_admin      = $simulation->biaya_administrasi ?? null;
    $biaya_asuransi_ajb = $simulation->biaya_asuransi ?? null; // controller hanya punya biaya_asuransi
    $retensi          = $simulation->retensi ?? null;
    $tabungan_wajib   = $simulation->tabungan_wajib ?? null;
    $materai          = $simulation->biaya_materai ?? null;

    $ht_notaris       = $simulation->biaya_notaris ?? null;
    $denda            = $simulation->denda ?? null;
    $pinalty          = $simulation->pinalty ?? null;
    $total_diterima   = $simulation->total_diterima ?? null;

    // ===== Kolom yang tidak ada di validate/store/update (jadi fallback aman) =====
    // Kalau ternyata di DB ada, otomatis akan keisi karena pakai null coalescing.
    $biaya_asuransi_ciu = $simulation->biaya_asuransi_ciu ?? null; // kalau ada kolom ini
    $pelunasan          = $simulation->pelunasan ?? null;          // kalau ada kolom ini
    $ht                 = $simulation->ht ?? null;                // kalau ada kolom ini
@endphp

<table style="border-collapse: collapse; width: 100%; table-layout: fixed;">
    <colgroup>
        <col style="width: 240px;"> {{-- A --}}
        <col style="width: 35px;">  {{-- B --}}
        <col style="width: 190px;"> {{-- C --}}
        <col style="width: 25px;">  {{-- D --}}
        <col style="width: 190px;"> {{-- E --}}
        <col style="width: 35px;">  {{-- F --}}
        <col style="width: 190px;"> {{-- G --}}
    </colgroup>

    {{-- Row 1-5 kosong --}}
    @for ($i = 1; $i <= 5; $i++)
        <tr>
            @for ($j = 1; $j <= 7; $j++)
                <td style="height: 18px;">&nbsp;</td>
            @endfor
        </tr>
    @endfor

    {{-- Judul --}}
    <tr>
        <td colspan="7"
            style="border: 1px solid #000; text-align: center; font-weight: bold; font-family: Arial; font-size: 10pt; height: 24px;">
            SIMULASI PERHITUNGAN KREDIT PT. BPR HALDEN PRIME
        </td>
    </tr>
    <tr>
        <td colspan="7" style="border: 1px solid #000; height: 24px;">&nbsp;</td>
    </tr>

    {{-- Row 8 kosong --}}
    <tr>
        @for ($j = 1; $j <= 7; $j++)
            <td style="height: 18px;">&nbsp;</td>
        @endfor
    </tr>

    @php
        $thin = "border:1px solid #000;";
        $fontA = "font-family: Arial; font-size:10pt;";
        $fontC = "font-family: Calibri; font-size:11pt;";
        $right = "text-align:right;";
    @endphp

    {{-- Row 9 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Tanggal Realisasi</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }}">{{ $fmtDateLong($tanggal_realisasi) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Biaya Provisi</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($biaya_provisi) }}</td>
    </tr>

    {{-- Row 10 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Nama</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }}">{{ $nama }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Biaya Administrasi</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($biaya_admin) }}</td>
    </tr>

    {{-- Row 11 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Tanggal Bulan Tahun Lahir</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }}">{{ $fmtDateLong($tanggal_lahir) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Biaya Asuransi AJB</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($biaya_asuransi_ajb) }}</td>
    </tr>

    {{-- Row 12 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Usia</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }}">{{ $usia }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Biaya Asuransi CIU</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($biaya_asuransi_ciu) }}</td>
    </tr>

    {{-- Row 13 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Besaran Pendapatan</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($besaran_gaji) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Retensi 1 X</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($retensi) }}</td>
    </tr>

    {{-- Row 14 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">DSR</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtPercent($dsr, 0) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Tabungan</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ is_numeric($tabungan_wajib) ? (float)$tabungan_wajib : $tabungan_wajib }}</td>
    </tr>

    {{-- Row 15 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Maksimal Angsuran</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($maks_angsuran) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Materai</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ is_numeric($materai) ? (float)$materai : $materai }}</td>
    </tr>

    {{-- Row 16 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Plafond</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($plafond) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Pelunasan</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($pelunasan) }}</td>
    </tr>

    {{-- Row 17 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Jangka waktu</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }}">{{ $jangka_waktu }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">HT Notaris</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($ht_notaris) }}</td>
    </tr>

    {{-- Row 18 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Bunga flat</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtPercent($bunga_flat, 0) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">ht</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($ht) }}</td>
    </tr>

    {{-- Row 19 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Bunga Effektif</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtPercent($bunga_effektif, 2) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Denda</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($denda) }}</td>
    </tr>

    {{-- Row 20 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Angsuran</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($angsuran) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Pinalty</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($pinalty) }}</td>
    </tr>

    {{-- Row 21 --}}
    <tr>
        <td style="{{ $thin }} {{ $fontA }}">Sisa Gaji</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} {{ $fontC }} {{ $right }}">{{ $fmtMoney($sisa_gaji) }}</td>
        <td>&nbsp;</td>
        <td style="{{ $thin }} {{ $fontA }}">Total Diterima</td>
        <td style="{{ $thin }} {{ $fontA }}">:</td>
        <td style="{{ $thin }} font-family: Calibri; font-size:14pt; font-weight:bold; {{ $right }}">
            {{ $fmtMoney($total_diterima) }}
        </td>
    </tr>
</table>