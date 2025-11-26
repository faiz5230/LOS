<?php $__env->startSection('title'); ?>
    Detail Debitur Modal Kerja
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Debitur Modal Kerja
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Detail Data Debitur
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Data Debitur Modal Kerja</h4>
                </div>

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route('debitur-modal-kerja.index')); ?>">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>
                        <a class="btn btn-primary" href="<?php echo e(route('debitur-modal-kerja.export', $debitur->id)); ?>">
                            <i data-feather="download"></i> Download Excel
                        </a>
                        <a class="btn btn-warning" href="<?php echo e(route('debitur-modal-kerja.edit', $debitur->id)); ?>">
                            <i data-feather="edit"></i> Edit
                        </a>
                    </div>

                    <div class="live-preview">
                        <!-- DATA PERUSAHAAN -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA PERUSAHAAN</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama Perusahaan</strong></td>
                                                <td>: <?php echo e($debitur->nama_perusahaan); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bidang Usaha</strong></td>
                                                <td>: <?php echo e($debitur->bidang_usaha_perusahaan); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>NIB</strong></td>
                                                <td>: <?php echo e($debitur->nib); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Akte Pendirian</strong></td>
                                                <td>: <?php echo e($debitur->akte_pendirian); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Lengkap</strong></td>
                                                <td>: <?php echo e($debitur->alamat_lengkap); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. NPWP</strong></td>
                                                <td>: <?php echo e($debitur->no_npwp_perusahaan); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telp</strong></td>
                                                <td>: <?php echo e($debitur->no_telp_perusahaan); ?></td>
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
                                                <td><strong>No. Agunan</strong></td>
                                                <td>: <?php echo e($debitur->no_agunan); ?></td>
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

                        <!-- DATA DIREKTUR -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA DIREKTUR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama</strong></td>
                                                <td>: <?php echo e($debitur->nama_direktur); ?></td>
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
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Pekerjaan</strong></td>
                                                <td>: <?php echo e($debitur->pekerjaan); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nama Perusahaan</strong></td>
                                                <td>: <?php echo e($debitur->nama_perusahaan_direktur); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Perusahaan</strong></td>
                                                <td>: <?php echo e($debitur->alamat_perusahaan_direktur); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Lama Bekerja</strong></td>
                                                <td>: <?php echo e($debitur->lama_bekerja); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telepon</strong></td>
                                                <td>: <?php echo e($debitur->no_telepon_direktur); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DATA USAHA CALON DEBITUR -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA USAHA CALON DEBITUR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama Usaha</strong></td>
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
                                            <tr>
                                                <td><strong>Bentuk Badan Usaha</strong></td>
                                                <td>: <?php echo e($debitur->bentuk_badan_usaha); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
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
                                    </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BWS\Project\Los\LOS\resources\views/debitur-modal-kerja/show.blade.php ENDPATH**/ ?>