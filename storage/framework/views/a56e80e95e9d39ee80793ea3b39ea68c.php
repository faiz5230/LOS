<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<table style="border-collapse:collapse;border-spacing:0" class="tg">
    <thead>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>

            <th style="background-color:#ffffff;border-color:inherit;border-style:solid;border-width:1px;font-family:Calibri;font-size:11px;font-weight:normal;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="9">                 </th>
            <th style="border:none;font-family:Calibri;font-size:12px;font-style:italic;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="5">MEMORANDUM</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border-top:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">Kepada</td>
            <td
                style="width:10px;border-top:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-top:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="10">BAG. ADMINISTRASI KREDIT</td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">Tanggal</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="10"><?php echo e(ubahFormatTanggal($debitur->tanggal)); ?></td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">Perihal</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="10">Pencairan Fasilitas Kredit a.n <?php echo e(ucwords($debitur->nama)); ?></td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid #000;border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">AO</td>
            <td style="border-bottom:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-bottom:1px solid #000;border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="10"><?php echo e(ucwords($debitur->account_officer)); ?></td>
        </tr>
        <tr>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="14">               </td>
        </tr>
        <tr>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="14">SESUAI DENGAN PERJANJIAN KREDIT</td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">NOMOR</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="10"><?php echo e(getNomorUrut($debitur->id,"MEMO_KREDIT")); ?></td>
        </tr>
        <tr>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="14">HARAP DIBUKA/DIPINDAHBUKUKAN UNTUK KEUNTUNGAN</td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">NAMA</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"><?php echo e($debitur->nama); ?></td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">NO. REK</td>
            <td
                style="width:10px;border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"></td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">ALAMAT</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3" rowspan="5"><?php echo e($debitur->alamat_lengkap); ?></td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">PLAFOND</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:15px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:middle;word-break:normal"
                colspan="4" rowspan="3"><?php echo e(convertNumberFormat($debitur->jumlah_permohonan_kredit)); ?></td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;border-width:1px;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4" rowspan="4">    <br>    <br>    <br>       </td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3" rowspan="2"></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">Terbilang</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-wrap:break-word"
                colspan="4" rowspan="2"><?php echo e(formatRupiah($debitur->jumlah_permohonan_kredit)); ?></td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">     </td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="7">KONDISI&nbsp;&nbsp;&nbsp;KREDIT</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="7">SANDI BI</td>
        </tr>
        <tr>
            <td
                style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal">
                X</td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">BARU</td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                rowspan="2"></td>
            <td
                style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
            </td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">PERUBAHAN</td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">SIFAT</td>
            <td
                style="width:30px;border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">3 (Inst)</td>
        </tr>
        <tr>
            <td
                style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
            </td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">TAMBAHAN</td>
            <td
                style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
            </td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">PERPANJANGAN</td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">JENIS PENGGUNAAN</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"> </td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="7"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4"> &nbsp;&nbsp;&nbsp;</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"> </td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">JANGKA WAKTU</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                <?php echo e($debitur->simulation->jangka_waktu); ?></td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">Bulan</td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">COLLECTIBILITY</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">1</td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">JATUH TEMPO</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"></td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">GOL. DEBITUR</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"> </td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">BUNGA</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
            </td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"><?php echo e($debitur->simulation->bunga_flat); ?> %</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                (Flatt)</td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">SEKTOR EKONOMI</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2"> </td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">ANGSURAN</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
            </td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   <?php echo e(convertNumberFormat($debitur->angsuran)); ?> </td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
            </td>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">LOKASI</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">BANDUNG</td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="14">PEMBEBANAN</td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">BIAYA PROVISI</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">Rp. <?php echo e(convertNumberFormat($debitur->simulation->biaya_provisi)); ?></td>
            
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="7" rowspan="4">
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <br>
            </td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">BIAYA ADM</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">Rp. <?php echo e(convertNumberFormat($debitur->simulation->biaya_administrasi)); ?></td>
            
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">BIAYA ASURANSI</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">Rp. <?php echo e(convertNumberFormat($debitur->simulation->biaya_asuransi)); ?></td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">BIAYA MATERAI</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">Rp. <?php echo e(convertNumberFormat($debitur->simulation->biaya_materai)); ?></td>
        </tr>
        <tr>
            <td style="border:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="14">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="7">CATATAN BAGIAN&nbsp;&nbsp;&nbsp;ADMINISTRASI KREDIT</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="7">             </td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="14"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
        </tr>
        <tr>
            <td style="border-left:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">TANGGAL</td>
            <td
                style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                :</td>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"></td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="5">DROPPING KREDIT</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="2">TGL :</td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="4">ACCOUNT&nbsp;&nbsp;&nbsp;OFFICER</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="3">MENYETUJUI</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="2">DEBET</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="3">KREDIT</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal"
                colspan="2">NOMINAL</td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4" rowspan="9">
                &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;
            </td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3" rowspan="9">
                &nbsp;&nbsp;<br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br>
            </td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:15px;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal"
                colspan="2" rowspan="11">TAB. DUTA</td>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> &nbsp;&nbsp; </td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   </td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">TAB. DUTA</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">Rp.</td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   </td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">PEND. ADM KRD</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">Rp.</td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   </td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">PEND. PROVISI</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">Rp.</td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   </td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">BY. MATERAI</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">Rp.</td>
        </tr>
        <tr>
            <td style="border:none;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   </td>
        </tr>
        <tr>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                TGL :</td>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">   </td>
            <td
                style="border-left:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                TGL :</td>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   </td>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">TTP. ASURANSI</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">Rp.</td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="7">PARAF BAGIAN&nbsp;&nbsp;&nbsp;ADMINISTRASI KREDIT</td>
            <td style="border:none;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3"> &nbsp;&nbsp;</td>
            <td style="border-right:1px solid #000;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">   </td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">DITERIMA</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">DILAKSANAKAN</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">BAGIAN :</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">DIBUAT OLEH :</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">DISETUJUI OLEH :</td>
        </tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4" rowspan="7">
                &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;
            </td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3" rowspan="7">
                <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br>
            </td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:middle;word-break:normal"
                colspan="2" rowspan="7">OPERASIONAL</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3" rowspan="7">
                &nbsp;&nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br> &nbsp;&nbsp; <br>
            </td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2" rowspan="7"> <br>  <br>  <br>  <br>  <br>  <br>  </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="4">TGL :</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">TGL :</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">TGL :</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="3">TGL :</td>
            <td style="border:1px solid #000;border-style:solid;font-family:Calibri;font-size:11px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                colspan="2">TGL :</td>
        </tr>
    </tbody>
</table>

</html>
<?php /**PATH D:\BWS\Project\LOS\LOS\resources\views/debiturs/memo_kredit_export.blade.php ENDPATH**/ ?>