


<?php $__env->startSection('title'); ?> Show <?php echo app('translator')->get('translation.' . $resource); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> <?php echo app('translator')->get('translation.' . $resource); ?> <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> Show <?php echo app('translator')->get('translation.' . $resource); ?> <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Show <?php echo app('translator')->get('translation.' . $resource); ?></h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="<?php echo e(route($route . '.index')); ?>"> <i data-feather="arrow-left"></i> Kembali</a>
                    <a class="btn btn-primary" href="<?php echo e(route('debiturs_simulation',[$simulation->id])); ?>"> <i data-feather="plus-square"></i> Buat Data Debitur</a>
                </div> 
                
                <div class="live-preview">
                <?php if(session('status')): ?>
                <div class="alert alert-success mb-1 mt-1">
                    <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
                
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="table-card">
                                    <table class="table table-bordered table-sm">
                                        <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td><?php echo e($simulation->id); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Realisasi</th>
                                                <td><?php echo e($simulation->tanggal_realisasi); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <td><?php echo e($simulation->nama); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kredit</th>
                                                <td><?php echo e($simulation->jenis_kredit); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td><?php echo e($simulation->tanggal_lahir); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Usia</th>
                                                <td><?php echo e($simulation->usia); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Besaran Gaji</th>
                                                <td><?php echo e(convertNumberFormat($simulation->besaran_gaji)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>DSR</th>
                                                <td><?php echo e($simulation->dsr); ?> %</th>
                                            </tr>
                                            <tr>
                                                <th>Maksimal Angsuran</th>
                                                <td><?php echo e(convertNumberFormat($simulation->maksimal_angsuran)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Plafond</th>
                                                <td><?php echo e(convertNumberFormat($simulation->plafond)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jangka Waktu</th>
                                                <td><?php echo e($simulation->jangka_waktu); ?> Bulan</td>
                                            </tr>
                                            <!--<tr>
                                                <th>Jatuh Tempo</th>
                                                <td><?php echo e($simulation->jatuh_tempo); ?></td>
                                            </tr>-->
                                            <tr>
                                                <th>Bunga Flat</th>
                                                <td><?php echo e($simulation->bunga_flat); ?> %</td>
                                            </tr>
                                            <tr>
                                                <th>Bunga Efektif</th>
                                                <td><?php echo e($simulation->bunga_effektif); ?> %</td>
                                            </tr>
                                            <tr>
                                                <th>Angsuran</th>
                                                <td><?php echo e(convertNumberFormat($simulation->angsuran)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Sisa Gaji</th>
                                                <td><?php echo e(convertNumberFormat($simulation->sisa_gaji)); ?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table><!--end table-->
                                    <!--end table-->
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="table-card">
                                    <table class="table table-bordered table-sm">
                                        <tbody>
                                            <tr>
                                                <th>Biaya Provisi</th>
                                                <td><?php echo e(convertNumberFormat($simulation->biaya_provisi)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Notaris</th>
                                                <td><?php echo e(convertNumberFormat($simulation->biaya_notaris)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Administrasi</th>
                                                <td><?php echo e(convertNumberFormat($simulation->biaya_administrasi)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Asuransi</th>
                                                <td><?php echo e(convertNumberFormat($simulation->biaya_asuransi)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Materai</th>
                                                <td><?php echo e(convertNumberFormat($simulation->biaya_materai)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Retensi</th>
                                                <td><?php echo e(convertNumberFormat($simulation->retensi)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tabungan Wajib</th>
                                                <td><?php echo e(convertNumberFormat($simulation->tabungan_wajib)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Rate Asuransi</th>
                                                <td><?php echo e($simulation->rate_asuransi); ?> %</td>
                                            </tr>
                                            <tr>
                                                <th>Ass KRD</th>
                                                <td><?php echo e(convertNumberFormat($simulation->ass_krd)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bunga</th>
                                                <td><?php echo e(convertNumberFormat($simulation->bunga)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Denda</th>
                                                <td><?php echo e(convertNumberFormat($simulation->denda)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Pinalty</th>
                                                <td><?php echo e(convertNumberFormat($simulation->pinalty)); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Total Diterima</th>
                                                <td><?php echo e(convertNumberFormat($simulation->total_diterima)); ?></td>
                                            </tr>
                                        </tbody>
                                    </table><!--end table-->
                                    <!--end table-->
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                    
                </div>
           
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BWS\Project\LOS\LOS\resources\views/simulations/show.blade.php ENDPATH**/ ?>