

<?php $__env->startSection('title'); ?>
    Detail Debitur Pasar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Debitur Pasar
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Detail Data Debitur Pasar
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Data Debitur Pasar</h4>
                </div>

                <div class="card-body">

                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <a class="btn btn-success" href="<?php echo e(route('debitur-pasar.index')); ?>">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>

                        <a class="btn btn-primary" href="<?php echo e(route('debitur-pasar.export', $debitur->id)); ?>">
                            <i data-feather="download"></i> Download Excel
                        </a>

                        <a href="<?php echo e(route('debitur-pasar.export.memo_kredit', $debitur->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-download"></i> Memo Droping
                        </a>

                        <a href="<?php echo e(route('debitur-pasar.export.sppk', $debitur->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-download"></i> Export SPPK
                        </a>

                        <a href="<?php echo e(route('debitur-pasar.export.sttu', $debitur->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-download"></i> Export STTU
                        </a>

                        <a href="<?php echo e(route('debitur-pasar.export.pk_snd_sim', $debitur->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-download"></i> PK Sendiri
                        </a>

                        <a href="<?php echo e(route('debitur-pasar.export.memo_fasilitas_kredit', $debitur->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-download"></i> Memo Fasilitas Kredit
                        </a>

                        <a href="<?php echo e(route('debitur-pasar.export.mcc', $debitur->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-download"></i> MCC
                        </a>

                        <a href="<?php echo e(route('debitur-pasar.export.tanda_terima', $debitur->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-download"></i> Tanda Terima
                        </a>

                        <a class="btn btn-warning" href="<?php echo e(route('debitur-pasar.edit', $debitur->id)); ?>">
                            <i data-feather="edit"></i> Edit
                        </a>
                    </div>

                    <div class="live-preview">

                        
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA DEBITUR PASAR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Nama Nasabah</strong></td>
                                                <td>: <?php echo e($debitur->nama); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Lengkap</strong></td>
                                                <td>: <?php echo e($debitur->alamat_lengkap); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telp Pemohon</strong></td>
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
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Agunan</strong></td>
                                                <td>: <?php echo e($debitur->agunan); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Ijasah</strong></td>
                                                <td>: <?php echo e($debitur->no_ijasah); ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA SAUDARA TIDAK SERUMAH</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
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
                                            <tr>
                                                <td width="40%"><strong>No. Telepon</strong></td>
                                                <td>: <?php echo e($debitur->no_telepon_kontak_tidak_serumah); ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA USAHA CALON DEBITUR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            
                                            <tr>
                                                <td width="40%"><strong>Nama Usaha/Perusahaan</strong></td>
                                                <td>: <?php echo e($debitur->nama_usaha); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Usaha</strong></td>
                                                <td>: <?php echo e($debitur->alamat_usaha); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Lama Usaha</strong></td>
                                                <td>: <?php echo e($debitur->lama_usaha); ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Bidang Usaha</strong></td>
                                                <td>: <?php echo e($debitur->bidang_usaha); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><strong>No. Telepon Usaha</strong></td>
                                                <td>: <?php echo e($debitur->no_telepon_pemohon); ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">PERMOHONAN KREDIT</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">

                                            
    

                                            <tr>
                                                <td width="40%"><strong>Jumlah Permohonan Kredit</strong></td>
                                                <td>: Rp <?php echo e(number_format((int) ($debitur->jumlah_permohonan_kredit ?? 0), 0, ',', '.')); ?></td>
                                            </tr>

                                            <tr>
                                                <td><strong>Jangka Waktu</strong></td>
                                                <td>: <?php echo e((int) ($debitur->jangka_waktu ?? 0)); ?> Bulan</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tujuan Penggunaan</strong></td>
                                                <td>: <?php echo e($debitur->tujuan_penggunaan); ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Account Officer</strong></td>
                                                <td>: <?php echo e($debitur->account_officer); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Besaran Gaji</strong></td>
                                                <td>: Rp <?php echo e(number_format((int) ($debitur->besaran_gaji ?? 0), 0, ',', '.')); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Angsuran</strong></td>
                                                <td>: Rp <?php echo e(number_format((int) ($debitur->angsuran ?? 0), 0, ',', '.')); ?></td>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LOS\resources\views/debitur-pasar/show.blade.php ENDPATH**/ ?>