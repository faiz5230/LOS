<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    td {
      font-family: "Aptos Narrow";
      font-size: 11pt;
      padding: 2px;
      vertical-align: top;
    }
    .no-border {
      border: none;
    }
    .wrap {
      white-space: normal;        /* WAJIB untuk Excel */
      word-wrap: break-word;      /* Excel style */
      word-break: break-word;
    }
    .center { text-align: center; }
    .bold { font-weight: bold; }
  </style>
</head>
<body>
@php
use Carbon\Carbon;
use App\Models\AccountOfficer;
Carbon::setLocale('id');
            /**
             * Mapping data (Memo Kredit)
             * Prioritas: relasi $debitur->simulation (jika ada) lalu fallback ke field $debitur.
             */
            $sim = $debitur->simulation ?? null;

            // Format Rupiah angka: 1000000 -> 1.000.000
            if (!function_exists('fmt_rp_angka')) {
                function fmt_rp_angka($value): string {
                    if ($value === null || $value === '') return '';
                    // hilangkan pemisah ribuan jika string "1.000.000"
                    if (is_string($value)) {
                        $clean = str_replace(['.', ','], ['', '.'], $value);
                        $value = is_numeric($clean) ? (float)$clean : 0;
                    }
                    $n = is_numeric($value) ? (float)$value : 0;
                    return number_format($n, 0, ',', '.');
                }
            }

            // Helper ambil nilai dari simulation lalu fallback debitur
            if (!function_exists('pick_sim')) {
                function pick_sim($sim, $debitur, string $key, $default = null) {
                    if ($sim && isset($sim->{$key}) && $sim->{$key} !== null && $sim->{$key} !== '') {
                        return $sim->{$key};
                    }
                    if (isset($debitur->{$key}) && $debitur->{$key} !== null && $debitur->{$key} !== '') {
                        return $debitur->{$key};
                    }
                    return $default;
                }
            }

            // Nilai yang sering dipakai
            
            $memoNomor = function_exists('getNomorUrut') ? getNomorUrut($debitur->id, 'MEMO_KREDIT') : ($debitur->nomor_memo ?? '-');
            $aoNama = optional($debitur->accountOfficer)->nama ?? ($debitur->account_officer ?? '');

            $plafond = pick_sim($sim, $debitur, 'plafond', pick_sim($sim, $debitur, 'jumlah_permohonan_kredit', 0));
            $jangkaWaktu = pick_sim($sim, $debitur, 'jangka_waktu', '');
            $bungaFlat = pick_sim($sim, $debitur, 'bunga_flat', '');
            $angsuran = pick_sim($sim, $debitur, 'angsuran', '');
            $biayaProvisi = pick_sim($sim, $debitur, 'biaya_provisi', 0);
            $biayaAdministrasi = pick_sim($sim, $debitur, 'biaya_administrasi', pick_sim($sim, $debitur, 'biaya_administrasi', 0));
            $biayaAsuransi = pick_sim($sim, $debitur, 'biaya_asuransi', 0);
            $biayaMaterai = pick_sim($sim, $debitur, 'biaya_materai', 0);
            $retensi = pick_sim($sim, $debitur, 'retensi', 0);
            $totalAsuransi = ($debitur->simulation->biaya_asuransi ?? 0) + ($debitur->simulation->ass_krd ?? 0);
            $tglMulai = $debitur->simulation->tanggal_realisasi ?? $debitur->tanggal ?? now();
            $tglAkhir = $debitur->simulation->jatuh_tempo ?? now();
            $tenor    = $debitur->simulation->jangka_waktu ?? $debitur->jangka_waktu ?? '';
            $nomor = getNomorUrut($debitur->id, 'MEMO_KREDIT');
            $nomor = ($nomor == '-') ? generateNomorUrut('MEMO_KREDIT', 'KRD-INST/BPR-DP') : $nomor;
            $tanggalDasar = $sim?->tanggal ?? $debitur->tanggal ?? now('Asia/Jakarta');
            $tanggal = $tanggalDasar instanceof Carbon ? $tanggalDasar : Carbon::parse($tanggalDasar, 'Asia/Jakarta');
            $hari = $tanggal->translatedFormat('l');
            $tanggalText = $tanggal->translatedFormat('d F Y');
            $jangka = (int)($sim?->jangka_waktu ?? $debitur->jangka_waktu ?? 1);
            $jatuhTempo = $tanggal->copy()->addMonths($jangka);
        @endphp
<table>
  <!-- 12 kolom -->
  <colgroup>
    <col span="12" style="width:8.33%">
  </colgroup>
<tr>
</tr> 
<tr>
</tr>
<tr>
</tr>   
<tr>
</tr>
  <tr>
    <td colspan="12" class="no-border center bold">SURAT AKSEP</td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <tr>
    <td></td>
    <td colspan="2">Nominal</td>
    <td>:</td>
    <td colspan="8" class="wrap">'{{ $plafond }}</td>
  </tr>

  <tr>
    <td></td>
    <td colspan="2">Terbilang</td>
    <td>:</td>
    <td colspan="8" class="wrap">{{ formatRupiah($plafond) }}</td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <tr>
    <td colspan="12" class="wrap">
      Atas pengunjuk surat aksep ini, maka yang bertanda tangan dibawah ini :
    </td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <!-- DATA DIREKTUR -->
  <tr>
    <td></td><td></td>
    <td>Nama</td><td>:</td>
    <td colspan="8" class="wrap">{{ $debitur->nama_direktur }}</td>
  </tr>
  <tr>
    <td></td><td></td>
    <td>NIB</td><td>:</td>
    <td colspan="8" class="wrap">'{{ $debitur->nib }}</td>
  </tr>
  <tr>
    <td></td><td></td>
    <td>Alamat</td><td>:</td>
    <td colspan="8" class="wrap">{{ $debitur->alamat_lengkap }}</td>
  </tr>
  <tr>
    <td></td><td></td>
    <td>NPWP</td><td>:</td>
    <td colspan="8" class="wrap">'{{ $debitur->npwp_usaha }}</td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <tr>
    <td colspan="12" class="wrap">
      Dalam melakukan tindakan hukum tersebut dalam akta ini sebagai direktur diantaranya yaitu :
    </td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <!-- DATA DEBITUR -->
  <tr>
    <td></td><td></td>
    <td>Nama</td><td>:</td>
    <td colspan="8" class="wrap">{{ $debitur->nama_direktur }}</td>
  </tr>
  <tr>
    <td></td><td></td>
    <td>NIK</td><td>:</td>
    <td colspan="8" class="wrap">'{{ $debitur->no_ktp_sim}}</td>
  </tr>

  <tr>
    <td></td><td></td>
    <td>Alamat</td><td>:</td>
    <td colspan="8" rowspan="2" class="wrap">{{ $debitur->alamat_lengkap }}</td>
  </tr>
  <tr>
    <td></td><td></td><td></td><td></td>
  </tr>

  <tr>
    <td></td><td></td>
    <td>Pekerjaan</td><td>:</td>
    <td colspan="8" class="wrap">{{ $debitur->pekerjaan }}</td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <tr>
    <td colspan="12" class="wrap">
      Berjanji membayarkan kepada PT. BPR HALDEN PRIME sesuai dengan Perjanjian Kredit yang telah disepakati.
    </td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <tr>
    <td colspan="12" class="wrap">
      Atau, ordernya dengan jumlah nominal sebesar yang tertulis diatas dilunasi selambat-lambatnya pada :
    </td>
  </tr>

  <tr>
    <td></td>
    <td colspan="2">Hari</td>
    <td>:</td>
    <td colspan="8" class="wrap">{{ $hari }}</td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">Tanggal</td>
    <td>:</td>
    <td colspan="8" class="wrap">{{ $tanggal }}</td>
  </tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <tr>
    <td colspan="12" rowspan="2" class="wrap">
      
    </td>
  </tr>
  <tr></tr>

  <tr><td colspan="12" class="no-border">&nbsp;</td></tr>

  <tr>
    <td colspan="12" class="wrap">Dari PT. BPR HALDEN PRIME</td>
  </tr>

  <tr><td colspan="12" class="no-border" style="height:30px">&nbsp;</td></tr>

  <tr>
    <td colspan="9"></td>
    <td colspan="4" class="center bold">DEBITUR</td>
    <td></td>
  </tr>

  <tr><td colspan="12" class="no-border" style="height:40px">&nbsp;</td></tr>

  <tr>
    <td colspan="9"></td>
    <td class="center">materai</td>
    <td colspan="2"></td>
  </tr>

</table>

</body>
</html>
