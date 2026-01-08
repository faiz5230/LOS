<?php
use App\Models\NomorUrut;
use App\Models\User;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


function getNomorUrut($idDebitur, $jenisDokumen) {
    // Mencari entri terakhir berdasarkan id_debitur dan jenis_dokumen
    $nomorUrut = NomorUrut::where('id_debitur', $idDebitur)
                           ->where('jenis_dokumen', $jenisDokumen)
                           ->orderBy('id', 'desc')
                           ->first();
    //$nomorUrut = $nomorUrut->nomor_full;
    return $nomorUrut?->nomor_full ?? '-';
    
}

function generateNomorUrut($jenisDokumen, $kode) {
    $tahunSekarang = now()->year;
    $bulanSekarang = now()->format('m');
    $bulanRomawi = convertToRoman($bulanSekarang);

    $nomorTerakhir = NomorUrut::where('jenis_dokumen', $jenisDokumen)
                                           ->whereYear('created_at', $tahunSekarang)
                                           ->orderBy('nomor', 'desc')
                                           ->first();

    $nomor = $nomorTerakhir ? $nomorTerakhir->nomor + 1 : 1;

    return "{$nomor}/{$kode}/{$bulanRomawi}/{$tahunSekarang}";
}

function convertToRoman($num) { 
    $n = intval($num);
    $res = '';

    $roman_numerals = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1);

    foreach ($roman_numerals as $roman => $number) {
        $matches = intval($n / $number);
        $res .= str_repeat($roman, $matches);
        $n = $n % $number;
    }

    return $res;
}

function terbilang($nilai) {
    //dd($nilai);
    if ($nilai < 0) {
        return "minus " . trim(terbilang(abs($nilai)));
    }

    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    if ($nilai < 12) {
        return " " . $huruf[$nilai];
    } elseif ($nilai < 20) {
        return terbilang($nilai - 10) . " belas";
    } elseif ($nilai < 100) {
        return terbilang($nilai / 10) . " puluh" . terbilang($nilai % 10);
    } elseif ($nilai < 200) {
        return " seratus" . terbilang($nilai - 100);
    } elseif ($nilai < 1000) {
        return terbilang($nilai / 100) . " ratus" . terbilang($nilai % 100);
    } elseif ($nilai < 2000) {
        return " seribu" . terbilang($nilai - 1000);
    } elseif ($nilai < 1000000) {
        return terbilang($nilai / 1000) . " ribu" . terbilang($nilai % 1000);
    } elseif ($nilai < 1000000000) {
        return terbilang($nilai / 1000000) . " juta" . terbilang($nilai % 1000000);
    } elseif ($nilai < 1000000000000) {
        return terbilang($nilai / 1000000000) . " milyar" . terbilang($nilai % 1000000000);
    } elseif ($nilai < 1000000000000000) {
        return terbilang($nilai / 1000000000000) . " triliun" . terbilang($nilai % 1000000000000);
    } else {
        return "nilai terlalu besar";
    }
}

function formatRupiah($nilai) {
  
    $bagian = explode(".", $nilai);
    $rupiah = ucwords(trim(terbilang($bagian[0]))) . " Rupiah";

    if (count($bagian) > 1) {
        if($bagian[1] == "00"){
            return $rupiah;
        }else{
            $sen = ucwords(trim(terbilang($bagian[1])));
            return $rupiah . " dan " . $sen . " Sen";
        }
        
    } else {
        return $rupiah;
    }
}
function convertCurrencyFormat($value)
{
    if ($value === null || $value === '') {
        return 0;
    }

    // Bersihkan Rp dan spasi
    $value = trim($value);
    $value = str_replace(['Rp', ' '], '', $value);

    /**
     * ✅ CASE 1: Kalau sudah format raw numeric dari Cleave
     * Contoh: "30000000.00" atau "30000000"
     * Ini jangan dihapus titiknya karena titik = desimal
     */
    if (preg_match('/^\d+(\.\d+)?$/', $value)) {
        return (float) $value;
    }

    /**
     * ✅ CASE 2: Format Indonesia
     * Contoh: "30.000.000,00"
     * Titik = ribuan, koma = desimal
     */
    $value = str_replace('.', '', $value);
    $value = str_replace(',', '.', $value);

    return is_numeric($value) ? (float) $value : 0;
}

function convertNumberFormat($value)
{
    
    // Menghilangkan titik dan mengganti koma dengan titik
    if(!empty($value)){
        return number_format($value,2,',','.');
    }else{
        return "";
    }
    
}

function ubahFormatTanggal($tanggal) {
    // Set the locale to Bahasa Indonesia
    app()->setLocale('id');
    $tanggalAwal = Carbon::parse($tanggal);
    // Format the date with localized month names
    $formatBaru = $tanggalAwal->translatedFormat('d F Y');

    return $formatBaru;
}
