@php
use Carbon\Carbon;
use App\Models\AccountOfficer;
Carbon::setLocale('id');
$sim = $simulation ?? ($debitur->simulation ?? null);
$totalAsuransi = ($debitur->simulation->biaya_asuransi ?? 0) + ($debitur->simulation->ass_krd ?? 0);
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
<col style="width:33px">
<col style="width:20px">
<col style="width:102px">
<col style="width:13px">
<col style="width:100px">
<col style="width:15px">
<col style="width:41px">
<col style="width:51px">
<col style="width:13px">
<col style="width:96px">
<col style="width:96px">
<col style="width:180px">
</colgroup>
<tr>

<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>

<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td colspan="12" style="border: none;font-family:Arial Narrow;font-size:14.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">SURAT KUASA</td>
</tr><tr><td colspan="12" style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">                                                             Nomor :         /INST/SK/BPR-HALDEN/VI/2025</td>
</tr><tr><td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Yang bertanda tangan di bawah ini :</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">I.</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nama</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->nama_perusahaan ?? $debitur->nama_usaha ?? '-' }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">No. Akta</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->akte_pendirian ?? $debitur->akte_pendirian ?? '-' }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Alamat</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td rowspan="2" colspan="8" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->alamat_lengkap ?? $debitur->alamat_lengkap ?? '-' }}</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NPWP</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->no_npwp_perusahaan ?? $debitur->no_npwp_perusahaan ?? ($sim->npwp ?? $debitur->npwp ?? '-') }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr><tr><td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td rowspan="2" colspan="10" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Dalam melakukan tindakan hukum tersebut dalam akta ini sebagai direktur diantaranya yaitu :</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nama</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->nama ?? $debitur->nama ?? '-' }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NIK</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">'{{ $debitur->no_ktp_sim ?? '-' }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Alamat</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td rowspan="2" colspan="8" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->alamat ?? $debitur->alamat_lengkap ?? '-' }}</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr><tr><td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Pekerjaan</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $sim->pekerjaan ?? $debitur->pekerjaan ?? '-' }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Selanjutnya disebut &quot; Pemberi Kuasa&quot;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">II.</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nama</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $ao?->nama ?? "-" }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">NIK</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">'{{ $ao?->nik ?? "-" }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Alamat</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $ao?->alamat ?? "-" }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:middle;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td rowspan="2" colspan="10" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Bertindak dalam jabatannya sebagai Direktur Bisnis, dalam hal ini bertindak untuk dan atas nama PT. BPR HALDEN PRIME.</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Selanjutnya disebut &quot;Penerima Kuasa&quot;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td rowspan="2" colspan="12" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Pemberi kuasa dengan ini memberi kuasa penuh kepada PT. BPR HALDEN PRIME selanjutnya PENERIMA KUASA, yang tidak dapat ditarik kembali atau dicabut selama Perjanjian ini belum berakhir atau pun sepanjang kewajiban DEBITUR/PENJAMIN kepada BANK belum selesai dan lunas.</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td colspan="12" style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">KHUSUS</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Untuk dan atas nama DEBITUR/PENJAMIN atau PEMBERI KUASA :</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">-</td>
<td rowspan="2" colspan="10" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Mengambil atau menarik barang jaminan yang dijaminkan/digunakan kepada Penerima Kuasa atas pinjaman kredit tersebut.</td>
</tr>
<tr>
</tr>    
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">-</td>
<td rowspan="3" colspan="10" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Menjual barang jaminan dengan dasar title eksekutorial, melalui pelelangan dimuka umum maupun melalui penjualan di bawah tangan dengan harga yang dipandang patut oleh BANK sebagai PENERIMA KUASA dengan data sebagai berikut :</td>
<tr>
</tr>    
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>

<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Akta</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Nomor</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Atas Nama</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Selanjutnya disebut sebagai &quot;Barang Jaminan&quot;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td rowspan="4" colspan="12"
  style="border:none;font-family:'Aptos Narrow';font-size:11px;text-align:left;vertical-align:top;
  white-space:pre-wrap; overflow-wrap:anywhere; word-break:break-word; padding:2px; overflow:hidden;">
  Yaitu apabila DEBITUR/PENJAMIN atau PEMBERI KUASA telah lalai tidak melaksanakan dan memenuhi salah satu ketentuan-ketentuan yang tercantum pada Perjanjian Kredit yang telah disepakati. Penerima Kuasa berhak dan diperbolehkan untuk :
</td>
</tr>
<tr>
</tr>
<tr>    
</tr>
<tr>
</tr>
<tr>   
<td rowspan="5" colspan="12"
  style="border:none;font-family:'Aptos Narrow';font-size:11px;text-align:left;vertical-align:top;
  white-space:pre-wrap; overflow-wrap:anywhere; word-break:break-word; padding:2px; overflow:hidden;">
  Memasuki tempat-tempat barang jaminan tersebut berada atau kemungkinan berada, mengambil dengan cara apapun juga atas barang jaminan baik dari tangan atau penguasaan Debitur/Penjamin atau pihak lain, menghadap dan meminta laporan kepolisian, dapat melaksanakan tindakan penting serta berguna sehubungan dengan kepentingan tersebut di atas dan dapat melakukan pekerjaan umumnya yang dapat dilakukan oleh kuasa/wakil guna kepentingan tersebut diatas.
</td>

</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
 </tr>
<tr>   
<td rowspan="5" colspan="12"
  style="border:none;font-family:'Aptos Narrow';font-size:11px;text-align:left;vertical-align:top;
  white-space:pre-wrap; overflow-wrap:anywhere; word-break:break-word; padding:2px; overflow:hidden;">
  Selanjutnya BANK berhak menerima uang hasil penjualannya, memberikan kwitansinya kepada pembeli, menyerahkan barang yang dijualnya tersebut kepada pembeli dan melaksanakan segala sesuatu untuk tercapainya maksud tersebut, menghadap pejabat-pejabat atau instansi-instansi yang berwenang, dan dapat melaksanakan segala sesuatu tindakan penting dan berguna atas pelaksanaan pemberian kuasa ini dan pemenuhan pelaksanaan perjanjian kredit yang telah disepakati.
</td>

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
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td rowspan="3" colspan="12" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Seluruh hasil penjualan barang-barang yang dijaminkan tersebut setelah dikurangi biaya-biaya yang timbul dari pelaksanaan perjanjian kredit, akan diperhitungkan untuk melunasi dan menyelesaikan seluruh kewajiban hutang DEBITUR/PENJAMIN kepada BANK.</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Demikian surat kuasa ini disetujui dan ditanda tangani di Kabupaten Bandung pada :</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Hari</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td colspan="3" style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{$hari}}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Tanggal</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">:</td>
<td colspan="3" style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $tanggalText }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Penerima Kuasa</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Pemberi Kuasa</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">PT. BPR HALDEN PRIME</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Debitur</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $ao?->nama ?? "-" }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $debitur->nama_direktur }}</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">{{ $ao?->jabatan ?? "-" }}</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td colspan="5" style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:center;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">Debitur</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
<tr>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">           /KRD-INST/BPR-DP/IX/2023</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;font-weight:bold;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
<td style="border: none;font-family:Aptos Narrow;font-size:11.0px;text-align:left;vertical-align:top;white-space:pre-wrap;padding:2px;overflow:hidden;word-break:break-word">&nbsp;</td>
</tr>
</table>
