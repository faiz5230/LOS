@php
  use Carbon\Carbon;
  Carbon::setLocale('id');
  $tanggalObj = isset($debitur->tanggal) ? Carbon::parse($debitur->tanggal, 'Asia/Jakarta') : Carbon::now('Asia/Jakarta');
  $tanggalText = $tanggalObj->translatedFormat('d F Y');
  if (!function_exists('rupiah_angka')) {
    function rupiah_angka($n){
      $n=is_numeric($n)?(float)$n:0;
      return 'Rp' . number_format($n, 0, ',', '.');
    }
  }
  $sim = $simulation ?? ($debitur->simulation ?? null);
@endphp

<table cellspacing="0" cellpadding="0" style="border-collapse:collapse;table-layout:fixed;width:1268px;">
<colgroup>
<col style="width:20px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
<col style="width:96px">
</colgroup>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:28px">
<td colspan="16" style="font-family:Arial Black;font-size:14.0px;font-weight:bold;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">MEMORANDUM CREDIT COMMITTEE</td>
</tr>
<tr style="height:29px">
<td colspan="16" style="font-family:Arial Black;font-size:14.0px;font-weight:bold;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">KREDIT</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NAMA PERUSAHAAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $debitur->nama_perusahaan ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">TANGGAL</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ isset($tanggalText) ? $tanggalText : (isset($tanggal) ? ubahFormatTanggal($tanggal) : '') }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;vertical-align:center;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="2" style="font-family:Arial Black;font-size:8.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NPWP</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $debitur->no_npwp_perusahaan ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">JENIS FASILITAS</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->jenis_kredit ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">BIDANG USAHA</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $debitur->bidang_usaha_perusahaan ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PENGGUNAAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->penggunaan ?? $debitur->permohonan_kredit ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">ALAMAT</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $debitur->alamat_lengkap ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NO REKENING</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->no_rekening ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">AKTA PENDIRIAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $debitur->akte_pendirian ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td colspan="8" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">DAFTAR CEK DOKUMEN PERSYARATAN KREDIT</td>
<td colspan="4" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">PENGAJUAN BARU</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="2" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">TOPUP</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="8" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">KONDISI YANG DIUSULKAN</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SURAT PERMOHONAN KREDIT</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PLAFOND</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td colspan="3" style="font-family:Arial Black;font-size:8.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">FORM APLIKASI KREDIT</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">JANGKA WAKTU</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">KTP DIREKTUR</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SUKU BUNGA</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NPWP DIREKTUR</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">POLA KREDIT</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NPWP PERUSAHAAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;font-weight:bold;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">ANGSURAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PENGIKATAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SLIK CHCEKING PERUSAHAAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">BIAYA ADM</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SLIK CHECKING DIREKTUR</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">BIAYA ASURANSI</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">BIAYA NOTARIS</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">AKTA PENDIRIAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">BIAYA MATERAI</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">AKTA PERUBAHAN DAN PENGESAHAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NIB</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">OUTSTANDING</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">FOTO USAHA</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">BUNGA</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">REKENING KORAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">KOLEKTIBILITAS</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NERACA KEUANGAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">LAPORAN LABA RUGI</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PLAFOND</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Rp {{ number_format((float)($sim->plafond ?? $debitur->jumlah_permohonan_kredit ?? 0),0,',','.') }}</td>
<td colspan="2" style="font-family:Arial Black;font-size:8.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SURAT PERSETUJUAN</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PENAMBAHAN PLAFOND</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word"></td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SPK</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">TOTAL PLAFOND</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td colspan="2" style="font-family:Arial Black;font-size:8.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Rp {{ number_format((float)($sim->plafond ?? $debitur->jumlah_permohonan_kredit ?? 0),0,',','.') }}</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">CASH FLOW</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->pola_kredit ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PROPOSAL KREDIT</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">ANALISA KREDIT</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->pengikatan ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">OPINI MANRISK</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td colspan="16" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">TANGGAPAN KREDIT KOMMITTEE</td>
</tr>
<tr style="height:20px">
<td colspan="3" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">PE BISNIS</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->kolektibilitas ?? '' }}</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td colspan="3" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">DIREKTUR UTAMA</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-top:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td colspan="4" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">DIAJUKAN OLEH</td>
<td colspan="4" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">DIPERIKSA OLEH</td>
<td colspan="8" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">PERSETUJUAN KREDIT KOMMITTEE</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-left:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;border-right:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="font-family:Arial Black;font-size:8.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:20px">
<td colspan="4" style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">YANIF DWI ATMOKO</td>
<td colspan="4" style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">MOCHAMAD ALDI AKBAR</td>
<td colspan="5" style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">FITRA RAMDANI</td>
<td colspan="3" style="font-family:Arial Black;font-size:8.0px;text-align:center;vertical-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">INDRIANTI SUKARMADIJAYA</td>
</tr>
<tr style="height:20px">
<td colspan="4" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">ACCOUNT OFFICER</td>
<td colspan="4" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">KABAG LAPDOK &amp; ASURANSI</td>
<td colspan="5" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">PEJABAT EKSEKUTIF BISNIS</td>
<td colspan="3" style="font-family:Arial Black;font-size:8.0px;text-align:center;white-space:pre-wrap;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;padding:2px;overflow:hidden;word-break:break-word">DIREKTUR UTAMA</td>
</tr>
</table>
