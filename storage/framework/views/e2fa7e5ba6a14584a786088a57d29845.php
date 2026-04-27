<table>
    
    <tr>
        <td colspan="14" style="text-align:center;font-weight:bold;font-size:14pt;">
            DATA SURVEI CALON DEBITUR
        </td>
    </tr>

    
    <tr>
        <td colspan="14" style="text-align:center;">
            Jalan Terusan Kopo No.43560 Telp. (022) 5410733, Fax. (022) 5402140
        </td>
    </tr>

    
    <tr>
        <td colspan="14" style="text-align:center;">Kab. Bandung</td>
    </tr>

    
    <tr><td colspan="14"></td></tr>

    
    <tr>
        <td colspan="2">Permohonan kredit</td>
        <td>:</td>
        <td colspan="5"><?php echo e($debitur->permohonan_kredit ?? ''); ?></td>
        <td colspan="2">Tanggal</td>
        <td>:</td>
        <td colspan="3">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->format('d/m/Y') : ''); ?>

        </td>
    </tr>

    
    <tr><td colspan="14"></td></tr>

    
    <tr>
        <td colspan="14" style="background-color:#D3D3D3;font-weight:bold;text-align:center;">
            DATA DEBITUR PASAR
        </td>
    </tr>

    
    <tr><td colspan="14"></td></tr>

    
    <tr>
        <td colspan="2">Nama Nasabah</td>
        <td>:</td>
        <td colspan="5"><?php echo e($debitur->nama); ?></td>
        <td colspan="2">Data Agunan</td>
        <td colspan="4"></td>
    </tr>

    
    <tr>
        <td colspan="2">Nama Usaha</td>
        <td>:</td>
        <td colspan="5"><?php echo e($debitur->nama_usaha); ?></td>
        <td colspan="2">Agunan</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->agunan); ?></td>
    </tr>

    
    <tr>
        <td colspan="2">No.SK</td>
        <td>:</td>
        <td colspan="5"><?php echo e($debitur->no_sk); ?></td>
        <td colspan="2">Alamat</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->alamat_lengkap); ?></td>
    </tr>

    
    <tr>
        <td colspan="2">No KTP/SIM</td>
        <td>:</td>
        <td colspan="5" style="mso-number-format:'\@';">'<?php echo e($debitur->no_ktp_sim); ?></td>
        <td colspan="2">Atas Nama Agunan</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->nama); ?></td>
    </tr>

    
    <tr><td colspan="14"></td></tr>

    
    <tr>
        <td colspan="2">Tanggal lahir (tgl/bln/thn)</td>
        <td>:</td>
        <td colspan="11">
            <?php echo e($debitur->tanggal_lahir ? \Carbon\Carbon::parse($debitur->tanggal_lahir)->format('d/m/Y') : ''); ?>

        </td>
    </tr>

    
    <tr><td colspan="14"></td></tr>

    
    <tr>
        <td colspan="2">Tempat Lahir</td>
        <td>:</td>
        <td colspan="5"><?php echo e($debitur->tempat_lahir); ?></td>
        <td colspan="2">Data Keluarga</td>
        <td colspan="4"></td>
    </tr>

    
    <tr>
        <td colspan="2">No. Telpon</td>
        <td>:</td>
        <td colspan="5">'<?php echo e($debitur->no_telepon_pemohon); ?></td>
        <td colspan="2">Nama Keluarga</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->nama_kontak_tidak_serumah); ?></td>
    </tr>

    
    <tr>
        <td colspan="2">No.Telp Tidak Serumah</td>
        <td></td>
        <td colspan="5"><?php echo e($debitur->no_telepon_kontak_tidak_serumah); ?></td>
        <td colspan="2">Alamat Tidak Serumah</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->alamat_saudara); ?></td>
    </tr>

    
    <tr>
        <td colspan="2" rowspan="5" style="text-align:center;vertical-align:top;font-weight:bold;">
            Account Officer
        </td>
        <td colspan="5" rowspan="5" style="text-align:center;vertical-align:top;font-weight:bold;">
            Pemohon
        </td>

        <td colspan="2">Jumlah Tanggungan</td>
        <td>:</td>
        <td colspan="4"><?php echo e($debitur->jumlah_tanggungan); ?></td>
    </tr>

    
    <tr>
        <td colspan="2">Nama Usaha</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->nama_usaha ?? ''); ?></td>
        <td colspan="3"></td>
    </tr>

    
    <tr>
        <td colspan="2">Alamat Usaha</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->alamat_usaha ?? ''); ?></td>
        <td colspan="3"></td>
    </tr>

    
    <tr>
        <td colspan="2">Lama Usaha</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->lama_usaha ?? ''); ?></td>
        <td colspan="3"></td>
    </tr>

    
    <tr>
        <td colspan="2">No. Telepon</td>
        <td>:</td>
        <td colspan="3"><?php echo e($debitur->no_telepon_pemohon ?? ''); ?></td>
        <td colspan="3"></td>
    </tr>

    
    <tr>
        <td colspan="14" style="background-color:#D3D3D3;font-weight:bold;text-align:center;">
            PERMOHONAN KREDIT
        </td>
    </tr>

    
    <tr><td colspan="14"></td></tr>

    
    <tr>
        <td colspan="3">Jumlah Permohonan Kredit</td>
        <td colspan="11">: Rp<?php echo e(number_format($debitur->jumlah_permohonan_kredit, 0, ',', '.')); ?></td>
    </tr>

    
    <tr>
        <td colspan="3">Jangka Waktu</td>
        <td colspan="11">: <?php echo e($debitur->jangka_waktu); ?> Bulan</td>
    </tr>

    
    <tr>
        <td colspan="3">Tujuan Penggunaan</td>
        <td colspan="11">: <?php echo e($debitur->tujuan_penggunaan); ?></td>
    </tr>

    
    <tr>
        <td colspan="3">Account Officer</td>
        <td colspan="11">: <?php echo e($debitur->account_officer); ?></td>
    </tr>
</table>
<?php /**PATH C:\xampp\htdocs\LOS\resources\views/exports/data_debitur_pasar.blade.php ENDPATH**/ ?>