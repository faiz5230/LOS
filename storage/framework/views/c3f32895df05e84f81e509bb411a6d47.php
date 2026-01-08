<?php
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
        ?>


<table>
    
    <tr>
        <td colspan="4" style="height:40px;"></td>
        <td colspan="9"></td>
        <td colspan="4" style="text-align:center;font-weight:bold;font-style:italic;font-size:14px;border-bottom:2px solid #000;">MEMORANDUM</td>
    </tr>

    
    <tr>
        <td colspan="17" style="border-bottom:2px solid #000;height:10px;"></td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;">Kepada</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;">BAG. ADMINISTRASI KREDIT</td>
        <td colspan="5" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;">Tanggal</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y') : ''); ?>

        </td>
        <td colspan="5" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;">Perihal</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">Pencairan Fasilitas Kredit a.n</td>
        <td colspan="9" style="border:1px solid #000;background:#d9d9d9;font-weight:bold;">
            <?php echo e($debitur->nama_pensiun ?? ''); ?>

        </td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;">AO</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;"><?php echo e($debitur->account_officer ?? ''); ?></td>
        <td colspan="5" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="17" style="border-bottom:2px solid #000;height:10px;"></td>
    </tr>

    
    <tr>
        <td colspan="17" style="text-align:center;font-weight:bold;border:1px solid #000;">
            SESUAI DENGAN PERJANJIAN KREDIT
        </td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;">NOMOR</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;"><?php echo e($memoNomor); ?></td>
        <td colspan="13" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="17" style="text-align:center;font-weight:bold;border:1px solid #000;">
            HARAP DIBUKA/DIPINDAHBUKUKAN :
        </td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;">NAMA</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="7" style="border:1px solid #000;"><?php echo e($debitur->nama_pensiun ?? ''); ?></td>

        <td colspan="3" style="border:1px solid #000;">NO. REK</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="2" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;">ALAMAT</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="7" style="border:1px solid #000;">
            <?php echo e($debitur->alamat_lengkap ?? ''); ?>

        </td>

        <td colspan="3" style="border:1px solid #000;">PLAFOND</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="2" style="border:1px solid #000;background:#d9d9d9;font-size:18px;font-weight:bold;text-align:center;">
            <?php echo e(number_format($debitur->jumlah_permohonan_kredit ?? 0,0,',','.')); ?>

        </td>
    </tr>

    
    <tr>
        <td colspan="8" style="border:1px solid #000;"></td>
        <td colspan="3" style="border:1px solid #000;">Terbilang</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="5" style="border:1px solid #000;font-weight:bold;">
            <?php echo e(strtoupper(terbilang($debitur->jumlah_permohonan_kredit ?? 0))); ?> RUPIAH
        </td>
    </tr>

    
    <tr>
        <td colspan="9" style="border:1px solid #000;text-align:center;font-weight:bold;">KONDISI KREDIT</td>
        <td colspan="8" style="border:1px solid #000;text-align:center;font-weight:bold;">SANDI BI</td>
    </tr>

    
    <tr>
        <td colspan="1" style="border:1px solid #000;text-align:center;">X</td>
        <td colspan="3" style="border:1px solid #000;">BARU</td>
        <td colspan="2" style="border:1px solid #000;"></td>
        <td colspan="3" style="border:1px solid #000;">PERUBAHAN</td>

        <td colspan="3" style="border:1px solid #000;">SIFAT</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">3 (Inst)</td>
    </tr>

    
    <tr>
        <td colspan="1" style="border:1px solid #000;"></td>
        <td colspan="3" style="border:1px solid #000;">TAMBAHAN</td>
        <td colspan="2" style="border:1px solid #000;"></td>
        <td colspan="3" style="border:1px solid #000;">PERPANJANGAN</td>

        <td colspan="3" style="border:1px solid #000;">JENIS PENGGUNAAN</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;">JANGKA WAKTU</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="3" style="border:1px solid #000;text-align:center;"><?php echo e($debitur->jangka_waktu ?? ''); ?></td>
        <td colspan="1" style="border:1px solid #000;">Bulan</td>

        <td colspan="3" style="border:1px solid #000;">COLLECTIBILITY</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">1</td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;">JATUH TEMPO</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"><?php echo e($debitur->simulation->jatuh_tempo ?? ''); ?></td>

        <td colspan="3" style="border:1px solid #000;">GOL. DEBITUR</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;">BUNGA</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"><?php echo e(number_format($debitur->simulation->bunga_flat ?? 0,2,',','.')); ?>%</td>

        <td colspan="3" style="border:1px solid #000;">SEKTOR EKONOMI</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;">ANGSURAN</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;text-align:center;">
            <?php echo e(number_format($debitur->simulation->angsuran ?? 0,0,',','.')); ?>

        </td>

        <td colspan="3" style="border:1px solid #000;">LOKASI</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">BANDUNG</td>
    </tr>

    
    <tr>
        <td colspan="17" style="border:1px solid #000;text-align:center;font-weight:bold;">PEMBEBANAN</td>
    </tr>

    
    <tr>
        <td colspan="3" style="border:1px solid #000;">TABUNGAN</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="4" style="border:1px solid #000;text-align:right;">
            <?php echo e(number_format($debitur->simulation->tabungan_wajib ?? 0,0,',','.')); ?></td>

        <td colspan="3" style="border:1px solid #000;">RETENSI</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;text-align:right;">
            <?php echo e(number_format($debitur->simulation->angsuran ?? 0,0,',','.')); ?>

        </td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">BIAYA ADM</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="4" style="border:1px solid #000;text-align:right;">
            <?php echo e(number_format($debitur->simulation->biaya_administrasi ?? 0,0,',','.')); ?>

        </td>

        <td colspan="3" style="border:1px solid #000;">TATA LAKSANA</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"></td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">BIAYA ASURANSI</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="4" style="border:1px solid #000;text-align:right;">
            <?php echo e(number_format($debitur->simulation->biaya_asuransi ?? 0,0,',','.')); ?>

        </td>

        <td colspan="3" style="border:1px solid #000;">PELUNASAN</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"></td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">PEMB. REKENING</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="4" style="border:1px solid #000;"></td>

        <td colspan="3" style="border:1px solid #000;">BLOKIR MUTASI</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="17" style="height:25px;border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;text-align:center;">TANGGAL</td>
        <td colspan="5" style="border:1px solid #000;text-align:center;font-weight:bold;">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y') : ''); ?>

        </td>

        <td colspan="4" style="border:1px solid #000;font-weight:bold;text-align:center;">DROPPING KREDIT</td>
        <td colspan="4" style="border:1px solid #000;text-align:center;font-weight:bold;">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y') : ''); ?>

        </td>
    </tr>

    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;text-align:center;">ACCOUNT OFFICER</td>
        <td colspan="5" style="border:1px solid #000;font-weight:bold;text-align:center;">MENYETUJUI</td>

        <td colspan="2" style="border:1px solid #000;font-weight:bold;text-align:center;">DEBET</td>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;text-align:center;">KREDIT</td>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;text-align:center;">NOMINAL</td>
    </tr>

    
    <tr>
        <td colspan="9" rowspan="6" style="border:1px solid #000;"></td>

        <td colspan="2" rowspan="6" style="border:1px solid #000;font-size:18px;font-weight:bold;text-align:center;vertical-align:middle;">
            PI INST<br> TAB.<br> HALDEN
        </td>

        <td colspan="3" style="border:1px solid #000;">TAB. PAKET DUTA</td>
        <td colspan="3" style="border:1px solid #000;">Rp.</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">PEND. ADM KRD</td>
        <td colspan="3" style="border:1px solid #000;">Rp.</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">PEND. PROVISI</td>
        <td colspan="3" style="border:1px solid #000;">Rp.</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">BY. MATERAI</td>
        <td colspan="3" style="border:1px solid #000;">Rp.</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">TTP. ASURANSI</td>
        <td colspan="3" style="border:1px solid #000;">Rp.</td>
    </tr>

    <tr>
        <td colspan="6" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;text-align:center;"><?php echo e($debitur->account_officer ?? ''); ?></td>
        <td colspan="5" style="border:1px solid #000;text-align:center;">Dwi Gustin Caturani</td>

        <td colspan="8" style="border:1px solid #000;"></td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="5" style="border:1px solid #000;">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y') : ''); ?>

        </td>

        <td colspan="4" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="4" style="border:1px solid #000;">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y') : ''); ?>

        </td>
    </tr>

    
    <tr>
        <td colspan="17" style="border:1px solid #000;text-align:center;font-weight:bold;">
            PARAF BAGIAN ADMINISTRASI KREDIT
        </td>
    </tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;text-align:center;font-weight:bold;">DITERIMA</td>
        <td colspan="5" style="border:1px solid #000;text-align:center;font-weight:bold;">DILAKSANAKAN</td>
        <td colspan="3" style="border:1px solid #000;text-align:center;font-weight:bold;">BAGIAN :</td>
        <td colspan="3" style="border:1px solid #000;text-align:center;font-weight:bold;">DIBUAT OLEH :</td>
        <td colspan="2" style="border:1px solid #000;text-align:center;font-weight:bold;">DISETUJUI OLEH :</td>
    </tr>

    
    <tr>
        <td colspan="4" rowspan="4" style="border:1px solid #000;"></td>
        <td colspan="5" rowspan="4" style="border:1px solid #000;"></td>
        <td colspan="3" rowspan="4" style="border:1px solid #000;text-align:center;font-weight:bold;vertical-align:middle;">
            OPERASIONAL
        </td>
        <td colspan="3" rowspan="4" style="border:1px solid #000;"></td>
        <td colspan="2" rowspan="4" style="border:1px solid #000;"></td>
    </tr>

    <tr></tr>
    <tr></tr>
    <tr></tr>

    
    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="5" style="border:1px solid #000;">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y') : ''); ?>

        </td>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="3" style="border:1px solid #000;">
            <?php echo e($debitur->tanggal ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y') : ''); ?>

        </td>
        <td colspan="2" style="border:1px solid #000;font-weight:bold;">TGL :</td>
    </tr>
</table>
<?php /**PATH C:\xampp\htdocs\LOS\resources\views/debiturs/Pensiun/memo_kredit_pensiun_export.blade.php ENDPATH**/ ?>