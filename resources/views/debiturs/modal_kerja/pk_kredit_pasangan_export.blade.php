@php
use Carbon\Carbon;
use App\Models\AccountOfficer;
Carbon::setLocale('id');
$sim = $simulation ?? ($debitur->simulation ?? null);
$ao = $debitur->accountOfficer ?? AccountOfficer::where('nama_dokumen','PERJANJIAN KREDIT')->first();
$tanggalDasar = $sim?->tanggal ?? $debitur->tanggal ?? now('Asia/Jakarta');
$tanggal = $tanggalDasar instanceof Carbon ? $tanggalDasar : Carbon::parse($tanggalDasar, 'Asia/Jakarta');
$hari = $tanggal->translatedFormat('l');
$tanggalText = $tanggal->translatedFormat('d F Y');
$jangka = (int)($sim?->jangka_waktu ?? $debitur->jangka_waktu ?? 1);
$jatuhTempo = $tanggal->copy()->addMonths($jangka);
$jatuhTempoText = $jatuhTempo->translatedFormat('d F Y');
@endphp
<table style="border-collapse:collapse;table-layout:fixed;width:100%;">
<colgroup>
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
<col style="width:96px;">
</colgroup>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr style="height:18.0px;">
<td colspan="12" style="font-family:Arial Narrow;font-size:14.0px;font-weight:bold;text-decoration:underline;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PERJANJIAN KREDIT</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">                                                             Nomor : {{ getNomorUrut($debitur->id, "PERJANJIAN_KREDIT") }}</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Perjanjian Kredit ( yang untuk selanjutnya disebut Perjanjian) ini dibuat di Kabupaten Bandung pada :</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Hari</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $hari }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Tanggal</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td colspan="3" style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $tanggalText }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Oleh dan antara</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td rowspan="5" style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">I.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Nama</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $ao?->nama ?? "-" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">NIK</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $ao?->nik ?? "-" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Alamat</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $ao?->alamat ?? "-" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Bertindak dalam jabatannya sebagai {{ $ao?->jabatan ?? "Pejabat Bank" }}, dalam hal ini bertindak untuk dan atas nama PT. BPR HALDEN PRIME.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Selanjutnya disebut &quot;BANK&quot;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">II.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Nama</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->nama ?? $debitur->nama ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">NIK</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->nik ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Alamat</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td rowspan="2" colspan="8" style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->alamat ?? $debitur->alamat_lengkap ?? "" }}</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Pekerjaan</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->pekerjaan ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Dalam melakukan tindakan hukum tersebut dalam akta ini telah mendapat persetujuan dari pasangannya yaitu :</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Nama</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->nama_pasangan ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">NIK</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->nik_pasangan ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Alamat</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td rowspan="2" colspan="8" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->alamat_pasangan ?? ($sim->alamat ?? "") }}</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Pekerjaan</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->pekerjaan_pasangan ?? ($sim->pekerjaan ?? "") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Yang ikut serta menandatangani Perjanjian ini sebagai bukti persetujuannya</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Selanjutnya disebut &quot; DEBITUR&quot;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td rowspan="3" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Kedua belah pihak dengan ini menerangkan bahwa antara BANK dengan DEBITUR telah sepakat dan karenanya saling mengikatkan diri untuk mengadakan Perjanjian Kredit dengan ketentuan dan syarat-syarat yang telah disepakati bersama sebagaimana diatur dalam pasal-pasal sebagai berikut :</td>
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 1</td>
</tr>
<tr >
<td rowspan="2" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">BANK memberikan kredit/pinjaman kepada Debitur dan dengan ini Debitur menyatakan telah menerima kredit dari Bank dengan ketentuan-ketentuan sebagai berikut :</td>
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">a.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Plafond</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td colspan="3" style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Rp {{ number_format((float)($sim->plafond ?? $debitur->jumlah_permohonan_kredit ?? 0), 0, ",", ".") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">b.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Jenis Kredit</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->jenis_kredit ?? $debitur->jenis_kredit ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">c.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Jangka Waktu</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ (int)($sim->jangka_waktu ?? $debitur->jangka_waktu ?? 0) }} Bulan</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">d.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Jatuh Tempo</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $tanggalText }} - {{ $jatuhTempoText }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">e.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Bunga Kredit</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->bunga_flat ?? $debitur->bunga_flat ?? "" }} % Flatt</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">f.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Administrasi</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Rp {{ number_format((float)($sim->biaya_administrasi ?? $debitur->biaya_administrasi ?? 0), 0, ",", ".") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">g.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Asuransi</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Rp {{ number_format((float)($sim->biaya_asuransi ?? $debitur->biaya_asuransi ?? 0), 0, ",", ".") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">h.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Retensi</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Rp {{ number_format((float)($sim->retensi ?? $debitur->retensi ?? 0), 0, ",", ".") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">i.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Materai</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Rp {{ number_format((float)($sim->biaya_materai ?? $debitur->biaya_materai ?? 0), 0, ",", ".") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">j.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Notaris</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Rp {{ number_format((float)($sim->biaya_notaris ?? $debitur->biaya_notaris ?? 0), 0, ",", ".") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">k.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Agunan</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $debitur->agunan ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">l.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">No. Agunan</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $debitur->no_agunan ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">m.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Atas Nama</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $debitur->atas_nama_agunan ?? ($sim->nama ?? $debitur->nama ?? "") }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 2</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">-</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Bank sewaktu-waktu berhak mengubah suku bunga kredit sesuai keadaan pasar perbankan dengan pemberitahuan tertulis terlebih dahulu kepada Debitur.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">-</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Jumlah (plafond) kredit dimaksud dalam Pasal 1 diberikan oleh Bank kepada Debitur secara sekaligus dengan pemindahbukuan ke rekening atas nama Debitur yang ada pada Bank.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">-</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Jumlah kredit yang diterima adalah besarnya pokok kredit dikurangi potongan-potongan sebagaimana diuraikan dalam perincian penerimaan kredit yang ditandatangani Debitur dan merupakan bagian yang tidak terpisahkan dengan perjanjian ini.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 3</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">1.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Pelunasan pinjaman akan dilakukan secara diangsur/dicicil dalam jumlah dan jangka waktu kredit tersebut diatas melalui :</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">-</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Setor tunai melalui rekening tabungan PT. BPR Halden Prime dengan No Rekening dan atas nama DEBITUR.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">-</td>
<td colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Transfer melalui Bank Mandiri No. Rek 130.000.450.8555 atas nama PT. BPR DUTA PASUNDAN.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">-</td>
<td colspan="10" style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Transfer melalui BCA (Bank Central Asia) No. Rekening 3793013929 atas nama PT. BPR Halden Prime.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">2.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Debitur memberi kuasa kepada Bank untuk melakukan penutupan asuransi pada perusahaan asuransi yang ditunjuk oleh Bank.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">3.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="5" colspan="10" style="font-family:Aptos Narrow;font-size:10.6px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Debitur dengan ini memberikan kuasa kepada Bank selama kredit belum lunas untuk mendebet, membebankan dan/atau memblokir uang yang disimpan pada rekening tabungan Debitur di Bank untuk pembayaran kewajiban yang telah jatuh tempo dan Debitur memberi kuasa kepada Bank untuk menerima pembayaran klaim asuransi dari perusahaan asuransi apabila Debitur meninggal dunia, untuk pembayaran kredit sebesar kewajiban debitur yang harus dibayarkan kepada Bank.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 4</td>
</tr>
<tr >
<td rowspan="2" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Selama Perjanjian berlaku dan sebelum seluruh hutang Debitur kepada Bank dibayar lunas, Debitur mengikat diri untuk :</td>
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">a.</td>
<td colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Tidak meminjam uang pada pihak ketiga tanpa persetujuan tertulis terlebih dahulu dari Bank.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">b.</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Mengijinkan pegawai atau wakil-wakil Bank sewaktu-waktu yang layak (sebagaimana akan diterapkan oleh Bank dan akan diberitahukan kepada Debitur) untuk masuk kedalam bangunan-bangunan yang dijaminkan kepada Bank dan memeriksa keadaan bangunan-bangunan tersebut.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">c.</td>
<td rowspan="5" colspan="10" style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Apabila kualitas kredit debitur bermasalah, maka Bank berhak dan dengan ini diberi kuasa yang tidak dapat di cabut kembali oleh debitur untuk memanggil debitur dan atau mengumumkan nama debitur pada media massa atau media lain yang ditentukan Bank dan atau melakukan perbuatan lain yang diperlukan termasuk tindakan memasuki tanah/pekarangan tempat agunan dan memasang pengumuman pada objek agunan, pengumuman tersebut tidak boleh diubah oleh debitur sampai dengan kewajiban debitur lunas.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">d.</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Seluruh biaya yang timbul sebagai akibat pemberian fasilitas kredit ini menjadi beban Debitur dan Bank berhak membebankannya secara seketika dan sekaligus.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">e.</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Bank sewaktu-waktu berhakuntuk mengakhiri perjanjian kredit dan dapat menarik kembali fasilitas kredit tersebut apabila Debitur tidak membayar kembali dengan segera seluruh kewajibannya baik karena pokok, bunga dan biaya-biaya lainnya, tanpa diharuskan memberikan peringatan terlebih dahulu dari Bank.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">f.</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Apabila terdapat hal-hal yang tidak sesuai dengan keadaan sebenarnya dan bertentangan dengan ketentuan yang berlaku, Bank berhak menarik kembali fasilitas kredit dengan seketika dan sekaligus tanpa mengurangi kewajiban Debitur yang masih harus dipenuhi sesuai ketentuan yang berlaku.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 5</td>
</tr>
<tr >
<td rowspan="2" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Sebagai jaminan kepastian pembayaran kembali kredit debitur kepada Bank, debitur menyerahkan kepada Bank :</td>
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">-</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Agunan berupa</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $debitur->agunan ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">No. Agunan</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $debitur->no_agunan ?? "" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Atas Nama</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $debitur->atas_nama_agunan ?? ($sim->nama ?? $debitur->nama ?? "") }}</td>
<td colspan="4" style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td rowspan="2" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Bukti kepemilikan atas jaminan sebagaimana tersebut diatas dikuasai oleh Bank sampai kredit yang diberikan oleh Bank kepada Debitur dinyatakan lunas.</td>
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 6</td>
</tr>
<tr >
<td rowspan="5" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Debitur harus memenuhi kewajiban-kewajibannya dalam jangka waktu yang telah ditetapkan dalam perjanjian ini. Dalam hal Debitur lalai untuk memenuhi kewajiban-kewajibannya dalam jangka waktu tersebut, maka lewatnya waktu saja telah merupakan bukti yang cukup akan kelalaian Debitur sehingga tidak diperlukan lagi surat juru sita atau lain surat serupa dengan itu untuk membuktikan kelalaian dari Debitur.</td>
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 7</td>
</tr>
<tr >
<td rowspan="5" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Selama jangka waktu kredit dan sebelum Debitur melunasi utangnya kepada Bank semua piutang Bank terhadap debitur berdasarkan Perjanjian Kredit ini dan/atau perjanjian-perjanjian lainnya antara Bank dan Debitur, dapet setiap saat dialihkan oleh Bank kepada pihak ketiga lainnya secara tidak terbatas pada lembaga keuangan/Bank/Kreditur, dan debitur dengan ini memberikan persetujuan dimuka atas pengalihan tersebut tanpa diperlukan pemberitahuan dalam bentuk apapun atau cara apapun juga kepada Debitur.</td>
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 8</td>
</tr>
<tr >
<td rowspan="5" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Selama kredit Debitur kepada Bank belum dilunasi, maka segala kuasa yang diberikan oleh Debitur kepada bank dalam perjanjian ini atau dokumen-dokumen lain sehubungan dengan pemberian kredit kepada Debitur merupakan bagian yang tidak terpisahkan dari Perjanjian ini, dengan demikian kuasa-kuasa tersebut tidak akan berakhir karena sebab apapun termasuk oleh sebab-sebab yang tercantum dalam pasal 1813 kitab Undang-Undang Hukum Perdata Indonesia mengenai berakhirnya pemberian kuasa.</td>
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PASAL 9</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">1.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="6" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Yang dimaksud dengan keadaan memaksa (force majeure) adalah segala keadaan atau peristiwa yang terjadi diluar kekuasaan Para Pihak, termasuk tetapi tidak terbatas pada kejadian seperti bencana alam, sabotase, pemogokan, huru-hara, epidemi, kebakaran, banjir, gempa bumi, perang, keputusan pemerintah yang bersifat nasional, kerusakan jaringan listrik, kerusakan sistem dan komunikasi dari salah satu pihak yang jasanya dimanfaatkan oleh satu pihak, yang menghalangi secara langsung untuk terlaksananya Perjanjian ini.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">2.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="5" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Dalam hal terjadinya satu atau beberapa kejadian atau peristiwa sebagaimana dimaksud pada ayat 1 Pasal ini, yang menyebabkan pelaksanaan Perjanjian ini menjadi terlambat atau tidak dapat dilakukan sama sekali, maka segala kerugian yang timbul menjadi tanggung jawab para pihak dan hal ini tidak dapat dijadikan alasan oleh salah satu pihak untuk meminta ganti rugi terhadap pihak lainnya dan atau memutuskan Perjanjian ini.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">3.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="5" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Dalam hal terjadinya keadaan memaksa (force majeure) sebagaimana dimaksud pada ayat 1 Pasal ini, sehingga mempengaruhi pelaksanaan kewajiban salah satu Pihak, maka Pihak yang mengalami keadaan memaksa wajib memberitahukan secara tertulis mengenai terjadinya keadaan memaksa kepada Pihak lainnya paling lambat 5 (lima) Hari Kerja terhitung sejak terjadinya keadaan memaksa (force majeure) dimaksud.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">4.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Kelalaian atau keterlambatan dalam memenuhi kewajiban memberitahukan sebagaimana dimaksud pada ayat 3 Pasal ini mengakibatkan tidak diakuinya keadaan sebagaimana dimaksud pada ayat 1 Pasal ini sebagai force majeure.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">5.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Apabila dalam 5 (lima) Hari Kerja sejak tanggal diterimanya pemberitahuan sebagaimana dimaksud pada ayat 3 Pasal ini belum atau tidak ada tanggapan dari Pihak yang menerima pemberitahuan, maka adanya peristiwa dimaksud dianggap telah disetujui oleh Pihak yang menerima pemberitahuan.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:10.5px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">6.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Pihak yang mengalami keadaan memaksa (force majeure) harus melaksanakan kembali kewajibannya sesuai dengan Perjanjian ini setelah keadaan memaksa berakhir.</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">7.</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Keadaan memaksa  (force majeure) yang menyebabkan keterlambatan pelaksanaan perjanjian ini baik sebagian maupun seluruhnya tidak merupakan alasan untuk pengakhiran atau pembatalan perjanjian ini, akan tetapi hanya merupakan alasan untuk menangguhkan perjanjian ini sampai keadaan memaksa (force majeure) berakhir</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Pasal 10</td>
</tr>
<tr >
<td rowspan="2" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Debitur dengan ini menyatakan sanggup dan mengikatkan diri untuk mematuhi dan melaksanakan ketentuan dan syarat-syarata yang berlaku pada bank khususunya tentang perkreditan.</td>
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Pasal 11</td>
</tr>
<tr >
<td rowspan="2" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Untuk segala urusan mengenai perjanjian ini dengan segala akibatnya, para pihak memilih domisili hukum yang umum dan tetap pada kantor panitera pengadilan negeri di Kabupaten Bandung. </td>
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td rowspan="2" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Demikian perjanjian ini dibuat dalam rangkap 2 (dua) bermaterai cukup dan setelah dimengerti isinya, kemudian ditandatangani oleh para pihak. </td>
</tr>
<tr >
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Demikian akta ini disetujui dan ditanda tangani di Kabupaten Bandung pada :</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Hari</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td colspan="3" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $hari }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Tanggal</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">:</td>
<td colspan="3" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $tanggalText }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">PT. BPR HALDEN PRIME</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $ao?->nama ?? "-" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td colspan="5" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->nama ?? $debitur->nama ?? "" }}</td>
<td colspan="2" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $sim->nama_pasangan ?? "" }}</td>
</tr>
<tr >
<td style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">{{ $ao?->jabatan ?? "Direktur Utama" }}</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">&nbsp;</td>
<td colspan="5" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Debitur</td>
<td colspan="2" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word;">Pasangan</td>
</tr>
</table>