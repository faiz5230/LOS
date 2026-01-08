@php
use Carbon\Carbon;
Carbon::setLocale('id');
$now = Carbon::now('Asia/Jakarta')->startOfDay();
$hari = $now->translatedFormat('l');
$tanggalText = $now->translatedFormat('d F Y');
$sim = (isset($simulation) && $simulation) ? $simulation : ($debitur->simulation ?? null);
$ao = \App\Models\AccountOfficer::where('nama_dokumen','SURAT KUASA')->first();
@endphp

<table style="border-collapse:collapse;width:100%;">
<colgroup>
<col style="width:33px">
<col style="width:15px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
<col style="width:64px">
</colgroup>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr style="height:23px">
<td colspan="12" style="font-family:Arial Narrow;font-size:14.0px;font-weight:bold;text-decoration:underline;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SURAT KUASA</td>
</tr>
<tr>
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nomor : {{ getNomorUrut($debitur->id, "SURAT_KUASA") }}</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Yang bertanda tangan di bawah ini :</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">I.</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nama</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">No. Akta</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Alamat</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td rowspan="2" colspan="8" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NPWP</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Dalam melakukan tindakan hukum tersebut dalam akta ini sebagai direktur diantaranya yaitu :</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nama</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NIK</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Alamat</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td rowspan="2" colspan="8" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Pekerjaan</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Selanjutnya disebut &quot; Pemberi Kuasa&quot;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">II.</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nama</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Indrianti Sukarmadijaya</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NIK</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">3273064305710004</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Alamat</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Jalan Terusan Kopo No. 456 D Kabupaten Bandung</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Bertindak dalam jabatannya sebagai Direktur Utama, dalam hal ini bertindak untuk dan atas nama PT. BPR HALDEN PRIME.</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Selanjutnya disebut &quot;Penerima Kuasa&quot;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td rowspan="3" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Pemberi kuasa dengan ini memberi kuasa penuh kepada PT. BPR HALDEN PRIME selanjutnya PENERIMA KUASA, yang tidak dapat ditarik kembali atau dicabut selama Perjanjian ini belum berakhir atau pun sepanjang kewajiban DEBITUR/PENJAMIN kepada BANK belum selesai dan lunas.</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">KHUSUS</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Untuk dan atas nama DEBITUR/PENJAMIN atau PEMBERI KUASA :</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">-</td>
<td rowspan="2" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Mengambil atau menarik barang jaminan yang dijaminkan/digunakan kepada Penerima Kuasa atas pinjaman kredit tersebut.</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">-</td>
<td rowspan="3" colspan="10" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Menjual barang jaminan dengan dasar title eksekutorial, melalui pelelangan dimuka umum maupun melalui penjualan di bawah tangan dengan harga yang dipandang patut oleh BANK sebagai PENERIMA KUASA dengan data sebagai berikut :</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Akta</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nomor</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Atas Nama</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Selanjutnya disebut sebagai &quot;Barang Jaminan&quot;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td rowspan="3" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:left;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Yaitu apabila DEBITUR/PENJAMIN atau PEMBERI KUASA telah lalai tidak melaksanakan dan memenuhi salah satu ketentuan-ketentuan yang tercantum pada Perjanjian Kredit yang telah disepakati. Penerima Kuasa berhak dan diperbolehkan untuk :</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td rowspan="6" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Memasuki tempat-tempat barang jaminan tersebut berada atau kemungkinan berada, mengambil dengan cara apapun juga atas barang jaminan baik dari tangan atau penguasaan Debitur/Penjamin atau pihak lain, menghadap dan meminta laporan kepolisian, dapat melaksanakan tindakan penting serta berguna sehubungan dengan kepentingan tersebut di atas dan dapat melakukan pekerjaan umumnya yang dapat dilakukan oleh kuasa/wakil guna kepentingan tersebut diatas.</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td rowspan="5" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Selanjutnya BANK berhak menerima uang hasil penjualannya, memberikan kwitansinya kepada pembeli, menyerahkan barang yang dijualnya tersebut kepada pembeli dan melaksanakan segala sesuatu untuk tercapainya maksud tersebut, menghadap pejabat-pejabat atau instansi-instansi yang berwenang, dan dapat melaksanakan segala sesuatu tindakan penting dan berguna atas pelaksanaan pemberian kuasa ini dan pemenuhan pelaksanaan perjanjian kredit yang telah disepakati.</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td rowspan="3" colspan="12" style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Seluruh hasil penjualan barang-barang yang dijaminkan tersebut setelah dikurangi biaya-biaya yang timbul dari pelaksanaan perjanjian kredit, akan diperhitungkan untuk melunasi dan menyelesaikan seluruh kewajiban hutang DEBITUR/PENJAMIN kepada BANK.</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;text-align:justify;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Demikian surat kuasa ini disetujui dan ditanda tangani di Kabupaten Bandung pada :</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Hari</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td colspan="3" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $hari }}</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Tanggal</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td colspan="3" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $tanggalText }}</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Penerima Kuasa</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="font-family:Aptos Narrow;font-size:11.0px;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Pemberi Kuasa</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PT. BPR HALDEN PRIME</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Debitur</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">=E27</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-decoration:underline;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Debitur</td>
</tr>
<tr>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Direktur Utama</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td  style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Debitur</td>
</tr>
</table>