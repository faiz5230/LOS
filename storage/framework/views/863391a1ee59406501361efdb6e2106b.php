

<?php $__env->startSection('title'); ?>
    Detail Debitur Pensiun
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Debitur Pensiun
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Detail Data Debitur
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Data Debitur Pensiun</h4>
                </div>

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route('debitur-pensiun.index')); ?>">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>
                        <a class="btn btn-primary" href="<?php echo e(route('debitur-pensiun.export', $debitur->id)); ?>">
                            <i data-feather="download"></i> Download Excel
                        </a>
                        <a href="<?php echo e(route('debiturs_memo_kredit_pensiun_export', $debitur->id)); ?>" 
                            class="btn btn-primary"><i class="fas fa-download"></i>Memo Droping
                        </a>
                        <a href="<?php echo e(route('debiturs_sppk_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Export SPPK     
                        </a>
                        <a href="<?php echo e(route('debiturs_sttu_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Export STTU   
                        </a>
                        <a href="<?php echo e(route('debiturs_pk_snd_sim_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Sendiri   
                        </a>
                        <a href="<?php echo e(route('debiturs_pk_kredit_pasangan_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Pasangan   
                        </a>
                        <a href="<?php echo e(route('debiturs_surat_kuasa_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Surat Kuasa  
                        </a>
                        <a href="<?php echo e(route('debiturs_surat_askep_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Surat Askep
                        </a>
                        <a href="<?php echo e(route('debiturs_pk_kredit_perusahaan_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Kredit Perusahaan
                        </a>
                        
                        </div>
                        <!-- BARIS 2 (kunci posisinya: kasih spacer sampai sejajar di bawah Download Excel) -->
                        <div class="w-100"></div>

                        <!-- kolom untuk "Kembali" biar Memo Fasilitas Kredit tepat di bawah Download Excel -->
                        <div class="col-auto">
                        <!-- spacer selebar tombol Kembali -->
                        <div style="width: 90px;"></div>
                        </div>

                        <div class="col-auto">
    
    
                        <a href="<?php echo e(route('debiturs_memo_fasilitas_kredit_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Memo Fasilitas Kredit
                        </a>
                        <a href="<?php echo e(route('debiturs_mcc_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> MCC
                        </a>
                        <a href="<?php echo e(route('debiturs_tanda_terima_export', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Tanda Terima
                        </a>
                        <a class="btn btn-warning" href="<?php echo e(route('debitur-pensiun.edit', $debitur->id)); ?>">
                            <i data-feather="edit"></i> Edit
                        </a>
                        
                    </div>
                    </div>
                    
                    <div class="live-preview">
                        <!-- DATA PENSIUN -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA PENSIUN</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama Nasabah</strong></td>
                                                <td>: <?php echo e($debitur->nama_pensiun); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Lengkap</strong></td>
                                                <td>: <?php echo e($debitur->alamat_lengkap); ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><strong>No. Telp</strong></td>
                                                <td>: <?php echo e($debitur->no_telepon_pemohon); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No KTP/SIM</strong></td>
                                                <td>: <?php echo e($debitur->no_ktp_sim); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tempat Lahir</strong></td>
                                                <td>: <?php echo e($debitur->tempat_lahir); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tanggal Lahir</strong></td>
                                                <td>: <?php echo e($debitur->tanggal_lahir); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Jumlah Tanggungan</strong></td>
                                                <td>: <?php echo e($debitur->jumlah_tanggungan); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="mb-3"><strong>Data Agunan</strong></h6>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Agunan</strong></td>
                                                <td>: <?php echo e($debitur->agunan); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. SK</strong></td>
                                                <td>: <?php echo e($debitur->no_sk); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Atas Nama Agunan</strong></td>
                                                <td>: <?php echo e($debitur->atas_nama_agunan); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DATA SAUDARA YANG TIDAK SERUMAH -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA SAUDARA TIDAK SERUMAH</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama</strong></td>
                                                <td>: <?php echo e($debitur->nama_kontak_tidak_serumah); ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td width="40%"><strong>Hubungan</strong></td>
                                                <td>: <?php echo e($debitur->hubungan); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><strong>Alamat</strong></td>
                                                <td>: <?php echo e($debitur->alamat_saudara); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                   <!-- <div class="col-md-6">
                                        <table class="table table-borderless">
                                    
                                            <tr>
                                                <td><strong>Nama Perusahaan</strong></td>
                                                <td>: <?php echo e($debitur->nama_perusahaan); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Perusahaan</strong></td>
                                                <td>: <?php echo e($debitur->alamat_perusahaan_direktur); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telepon</strong></td>
                                                <td>: <?php echo e($debitur->no_telepon_kontak_tidak_serumah); ?></td>
                                            </tr>
                                        </table>
                                    </div>-->
                                </div>
                            </div>
                        </div>

                        <!-- DATA PERUSAHAAN -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA PERUSAHAAN CALON DEBITUR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama Perusahaan</strong></td>
                                                <td>: <?php echo e($debitur->nama_perusahaan); ?></td>
                                            </tr>
                                           <!-- <tr>
                                                <td><strong>Alamat Usaha</strong></td>
                                                <td>: <?php echo e($debitur->alamat_usaha); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Lama Usaha</strong></td>
                                                <td>: <?php echo e($debitur->lama_usaha); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bentuk Badan Usaha</strong></td>
                                                <td>: <?php echo e($debitur->bentuk_badan_usaha); ?></td>
                                            </tr>-->
                                        </table>
                                    </div>
                                    <!--<div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Bidang Usaha</strong></td>
                                                <td>: <?php echo e($debitur->bidang_usaha); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>NPWP</strong></td>
                                                <td>: <?php echo e($debitur->npwp_usaha); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telepon</strong></td>
                                                <td>: <?php echo e($debitur->no_telepon_usaha); ?></td>
                                            </tr>
                                        </table>
                                    </div>-->
                                </div>
                            </div>
                        </div>

                        <!-- PERMOHONAN KREDIT -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">PERMOHONAN KREDIT</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Jumlah Permohonan Kredit</strong></td>
                                                <td>: Rp <?php echo e(number_format($debitur->jumlah_permohonan_kredit, 0, ',', '.')); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Jangka Waktu</strong></td>
                                                <td>: <?php echo e($debitur->jangka_waktu); ?> Bulan</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tujuan Penggunaan</strong></td>
                                                <td>: <?php echo e($debitur->tujuan_penggunaan); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Account Officer</strong></td>
                                                <td>: <?php echo e($debitur->account_officer); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pemohon</strong></td>
                                                <td>: <?php echo e($debitur->pemohon); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LOS\resources\views/debitur-pensiun/show.blade.php ENDPATH**/ ?>