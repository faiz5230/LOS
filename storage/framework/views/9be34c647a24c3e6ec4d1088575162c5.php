


<?php $__env->startSection('title'); ?>
    <?php if(!empty($jenis_kredit)): ?>
        <?php echo app('translator')->get('translation.analisa_kredit'); ?> - <?php echo e($jenis_kredit); ?>

    <?php else: ?>
        <?php echo app('translator')->get('translation.' . $resource); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            <?php echo app('translator')->get('translation.' . $resource); ?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            <?php echo app('translator')->get('translation.' . $resource); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">
                        <?php if(!empty($jenis_kredit)): ?>
                            <?php echo app('translator')->get('translation.analisa_kredit'); ?> - <?php echo e($jenis_kredit); ?>

                        <?php else: ?>
                            <?php echo app('translator')->get('translation.' . $resource); ?>
                        <?php endif; ?>
                    </h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row g-4 pb-3">
                        <div class="col-sm-auto">
                            <div>
                                <?php if(request()->routeIs($route . '.index')): ?>
                                    
                                        
                                    
                                    
                                <?php endif; ?>
                            </div>
                        </div>

                       

                    </div>

                    <div class="row g-1 pb-3 d-flex align-items-center">
                        <div class="col-sm-auto form-label"> Show:</div>
                        <div class="col-sm-auto">

                            <form action="<?php echo e(url()->current()); ?>" method="get">

                                
                                
                               
                                    <select class="form-control" name="rows" onchange="this.form.submit()">
                                        <option value="10" <?php echo e($rows == 10 ? 'selected' : ''); ?>>10</option>
                                        <option value="20" <?php echo e($rows == 20 ? 'selected' : ''); ?>>20</option>
                                        <option value="50" <?php echo e($rows == 50 ? 'selected' : ''); ?>>50</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    <input type="hidden" name="jenis_kredit" value="<?php echo e(request('jenis_kredit')); ?>">



                            </form>

                        </div>
                        <div class="col-sm-auto form-label">entries</div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">


                                <form action="<?php echo e(url()->current()); ?>" method="get" class="form-inline">
                                    <div class="search-box ms-2">

                                        <input type="text" class="form-control" name="search"
                                            value="<?php echo e(request('search')); ?>" placeholder="Search...">

                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                    <input type="hidden" name="rows" value="<?php echo e(request('rows')); ?>">
                                    <input type="hidden" name="jenis_kredit" value="<?php echo e(request('jenis_kredit')); ?>">
                                </form>
                            </div>
                        </div>

                    </div>



                  
                    <div class="live-preview">

                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <p><?php echo e($message); ?></p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <?php if($message = Session::get('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-xl-0" role="alert">
                                <p><?php echo e($message); ?></p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>


                        
                        <table class="table table-bordered table-hover align-middle table-wrap mb-0">
                            <thead>
                                <tr>
                                    <th>ID Analisa</th>
                                    <th>ID Debitur</th>
                                    <th>Nama Debitur</th>
                                    <th>Jumlah Permohonan Kredit</th>
                                    <th>Jangka Waktu</th>
                                    <th>Angsuran</th>
                                    <th>Hasil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->id_debitur); ?></td>
                                        <td><?php echo e($item->debitur->nama); ?></td>
                                        <td><?php echo e($item->debitur->jumlah_permohonan_kredit); ?></td>
                                        <td><?php echo e($item->debitur->jangka_waktu); ?></td>
                                        <td><?php echo e($item->debitur->angsuran); ?></td>
                                        <td><?php echo e($item->hasil); ?></td>
                                        <td>
                                            <a class="btn btn-primary mb-2" href="<?php echo e(route('analisa_kredit.export', $item->id)); ?>">
                                             Download Analisa Kredit</a>
                                            <a class="btn btn-warning mb-2" href="<?php echo e(route('analisa_kredit.edit', $item->id)); ?>">
                                             Edit Analisa Kredit</a>                                           
                                            
                                          
                                       
                                    </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <br>
                        
                        <div class="row g-4 pb-3">
                            <div class="col-sm-auto">
                            Showing <?php echo e($collection->firstItem()); ?> to <?php echo e($collection->lastItem()); ?> of
                            <?php echo e($collection->total()); ?> entries
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                <?php echo $collection->links(); ?>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BWS\Project\Los\LOS\resources\views/analisa_kredit/index.blade.php ENDPATH**/ ?>