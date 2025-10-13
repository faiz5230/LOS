<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<table style="border-collapse:collapse;border-spacing:0;table-layout: fixed; width: 1083px" class="tg">
    <colgroup>
        <col style="width: 25px">
        <col style="width: 46px">
        <col style="width: 150px">
        <col style="width: 70px">
        <col style="width: 10px">
        <col style="width: 130px">
        <col style="width: 53px">
        <col style="width: 117px">
        <col style="width: 44px">
        <col style="width: 128px">
        <col style="width: 37px">
        <col style="width: 122px">
        <col style="width: 69px">
    </colgroup>
    <thead>
        <tr>
            <th style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="13">ANALISA KEUANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Nama Debitur</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="3">{{ ucwords($analisa_kredit->debitur->nama) }}</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="3">{{ ubahFormatTanggal($analisa_kredit->debitur->tanggal) }}</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Plafond Pengajuan</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="3">{{convertNumberFormat($analisa_kredit->debitur->jumlah_permohonan_kredit)}}</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Jangka Waktu Kredit</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="3">{{$analisa_kredit->debitur->jangka_waktu}}</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Angsuran </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="3">{{ convertNumberFormat($analisa_kredit->debitur->angsuran)}}</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                1</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
                SLIK</td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Berdasarkan SLIK pertgl :</td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="3">
                {{ ubahFormatTanggal($analisa_kredit->debitur->tanggal_slik) }}
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal">
                No</td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal">
                Atas Nama</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal"
                colspan="2">Bank</td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal">
                Plafond&nbsp;&nbsp;&nbsp;Awal</td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-wrap:break-word">
                Bunga Flat</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal"
                colspan="2">Outstanding</td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                Jangka Waktu</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal"
                colspan="2">Angsuran</td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal">
                Kol</td>
        </tr>
        @php
            $no = 1; // Counter for row number
            $totalAngsuran = 0; // Variable for total angsuran
        @endphp
        @foreach ($analisa_kredit->detailAnalisaKredit as $detail)
        @php
            $totalAngsuran += $detail->angsuran; // Add current angsuran to total
        @endphp
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ $no++ }} </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ $detail->atas_nama }} </td>
            <td style="border:1px solid #000;border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="2"> {{ $detail->bank }} </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($detail->plafond_awal) }} </td>
            <td
                style="border:1px solid #000;border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                {{ $detail->bunga }} %</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="2">{{ convertNumberFormat($detail->outstanding) }}</td>
            <td
                style="border:1px solid #000;border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                {{ $detail->jangka_waktu }}</td>
            <td style="border:1px solid #000;background-color:#F2F2F2;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="2">{{ convertNumberFormat($detail->angsuran) }}</td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ $detail->kolektibilitas }} </td>
        </tr>
        @endforeach
        
       
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                TOTAL</td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="2">  </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="2">  </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="2">{{ convertNumberFormat($totalAngsuran)}} </td>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="3">Keterangan Tambahan :</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-wrap:break-word"
                colspan="7" rowspan="2"> {{$analisa_kredit->keterangan}}</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                2</td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="3">Kemampuan Membayar Pinjaman</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                1 </td>
            <td style="border-top:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> Gaji Pokok </td>
                <td
                style="border-left:1px solid #000;border-top:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;border-top:1px solid #000;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-top:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="border-right:1px solid #000;border-top:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->gaji_pokok) }} </td>
            <td
                style="border-top:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-right:1px solid #000;border-top:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> Tunjangan Jabatan </td>
                <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->tunjangan_jabatan) }}
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                Lembur (70%) </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                slip lembur: </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>

            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->lembur) }}
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                Tunjangan lain </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-style:italic;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"> (yang bersifat rutin) </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="2"> </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->tunjangan_lain) }}
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> Total Pendapatan Perbulan </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="background-color:#F2F2F2;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->total_pendapatan_perbulan) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="background-color:#F2F2F2;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->total_pendapatan) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="4"> &nbsp;&nbsp; </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                2 </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> Pendapatan Lain (jika ada) : </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> 1) Gaji Pasangan Hidup (50%) </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->gaji_pasangan) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> 2) Pendapatan Lain-lain </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->pendapatan_lain) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> Total Pendapatan Lain-lain </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>

            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="background-color:#F2F2F2;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->total_pendapatan_lain) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> TOTAL PENDAPATAN </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                (A) </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="background-color:#F2F2F2;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->total_pendapatan) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="4"> &nbsp;&nbsp; </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                3 </td>
            <td style="border-left:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> Kewajiban Kepada Bank Lain : </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> 1) angsuran Bank/Leasing </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->angsuran_bank) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> 2) Kewajiban kepada pihak ketiga lainnya </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->kewajiban_pihak_ketiga) }}</td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> 3) Angsuran BPR Duta Pasundan jika disetujui </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->angsuran_bpr) }}</td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> Total Kewajiban /bln </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                (B) </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="background-color:#F2F2F2;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->total_kewajiban) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> Disposible Income </td>
                <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                Rp </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->disposible_income) }} </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;border-bottom:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="border-bottom:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                *</td>
            <td
                style="border-bottom:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->disposible_income_percent) }}%</td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Repayment Capacity</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                =</td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->rp_kewajiban) }} </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                :</td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->rp_pendapatan) }} </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Rumus RC = A:B</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                =</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:right;vertical-align:bottom;word-break:normal">
                {{ convertNumberFormat($analisa_kredit->rumus_rc) }}%</td>
            <td style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"> Max 40% </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="2">Hasil</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
                =</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                {{ $analisa_kredit->hasil }}</td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="2">  </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal"
                colspan="4"> </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="5"> Catatan : </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                rowspan="10">
                
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-wrap:break-word"
                colspan="5" rowspan="12">{{ $analisa_kredit->catatan }}
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="4"> &nbsp;&nbsp;&nbsp;</td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="5">{{$nama}}</td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="4"> &nbsp;&nbsp;&nbsp;</td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td style="font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal"
                colspan="5">{{$jabatan}}</td>
        </tr>
        <tr>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
            <td
                style="font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:bottom;word-break:normal">
            </td>
        </tr>
    </tbody>
</table>

</html>
