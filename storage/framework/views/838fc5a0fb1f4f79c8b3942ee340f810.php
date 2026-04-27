

<?php $__env->startSection('title'); ?>
    Data Debitur Pasar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Debitur Pasar
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Data Debitur Pasar
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Debitur Pasar</h4>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Nasabah</th>
                                    <th>Jumlah Permohonan</th>
                                    <th>Jangka Waktu</th>
                                    <th>Account Officer</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($data->firstItem() + $index); ?></td>
                                        <td><?php echo e($item->nama); ?></td>
                                        <td>Rp <?php echo e(number_format($item->jumlah_permohonan_kredit, 0, ',', '.')); ?></td>
                                        <td><?php echo e($item->jangka_waktu); ?> Bulan</td>
                                        <td><?php echo e($item->account_officer); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('debitur-pasar.open', $item->id)); ?>" class="btn btn-sm btn-info">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="<?php echo e(route('debitur-pasar.edit', $item->id)); ?>" class="btn btn-sm btn-warning">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="<?php echo e(route('debitur-pasar.export', $item->id)); ?>" class="btn btn-sm btn-success">
                                                <i class="ri-download-line"></i>
                                            </a>
                                            <form action="<?php echo e(route('debitur-pasar.destroy', $item->id)); ?>" method="POST" style="display:inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        <?php echo e($data->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LOS\resources\views/debitur-pasar/index.blade.php ENDPATH**/ ?>