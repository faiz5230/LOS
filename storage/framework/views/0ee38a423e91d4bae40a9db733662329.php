


<?php $__env->startSection('title'); ?>
    <?php if(!empty($jenis_kredit)): ?>
        <?php echo app('translator')->get('translation.simulasi_kredit'); ?> - <?php echo e($jenis_kredit); ?>

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
                            <?php echo app('translator')->get('translation.simulasi_kredit'); ?> - <?php echo e($jenis_kredit); ?>

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

                                        <a class="btn btn-success" href="<?php echo e(route($route . '.create', ['jenis_kredit' => request('jenis_kredit')])); ?>"> <i
                                                data-feather="file-plus"></i> Create
                                            <?php echo app('translator')->get('translation.' . $resource); ?></a>
                                    
                                    
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
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Jenis Kredit</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Besaran Gaji</th>
                                    <th>DSR</th>
                                    <th>Maksimal Angsuran</th>
                                    <th>Plafond</th>
                                    <th>Jangka Waktu</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Angsuran</th>
                                    <th>Total Diterima</th>
                                    <th width="160px">Action</th>
                                </tr>

                                </form>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->nama); ?></td>
                                        <td><?php echo e($item->jenis_kredit); ?></td>
                                        <td><?php echo e($item->tanggal_lahir); ?></td>
                                        <td><?php echo e(convertNumberFormat($item->besaran_gaji)); ?></td>
                                        <td><?php echo e($item->dsr); ?></td>
                                        <td><?php echo e(convertNumberFormat($item->maksimal_angsuran)); ?></td>
                                        <td><?php echo e(convertNumberFormat($item->plafond)); ?></td>
                                        <td><?php echo e($item->jangka_waktu); ?></td>
                                        <td><?php echo e($item->jatuh_tempo); ?></td>
                                        <td><?php echo e(convertNumberFormat($item->angsuran)); ?></td>
                                        <td><?php echo e(convertNumberFormat($item->total_diterima)); ?></td>
                                        <td>

                                                <div class="btn-group" role="group" aria-label="Action">

                                                    <!--
                                                    <a href="<?php echo e(route('debitur-umkm.simulation', $item->id)); ?>"
                                                    class="btn btn-primary btn-sm"
                                                    title="Input Debitur UMKM">
                                                    <i class="ri-add-line"></i>
                                                    </a>-->

                                                     
                                                    <a href="<?php echo e(route($route . '.show', $item->id)); ?>"
                                                        class="btn btn-info btn-sm"
                                                        title="View">
                                                        <i class="ri-eye-line"></i>
                                                    </a>

                                                      
                                                    <a href="<?php echo e(route($route . '.edit', $item->id)); ?>"
                                                        class="btn btn-warning btn-sm"
                                                        title="Edit">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>

                                                    
                                                    <a href="<?php echo e(route($route . '.download', $item->id)); ?>"
                                                        class="btn btn-success btn-sm"
                                                        title="Download">
                                                        <i class="ri-download-2-line"></i>
                                                    </a>

                                             </div>

                                                     
                                                    <form action="<?php echo e(route($route . '.destroy', $item->id)); ?>"
                                                    method="POST"
                                                    class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                    </button>
                                            </form>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toggleLink = document.getElementById('toggleAdvancedSearch');
            var form = document.getElementById('advancedSearchForm');

            toggleLink.addEventListener('click', function(event) {
                event.preventDefault();
                var isFormHidden = form.style.display === 'none';

                if (isFormHidden) {
                    form.style.display = 'block';
                    toggleLink.innerText = 'Hide Advanced Search';
                } else {
                    form.style.display = 'none';
                    toggleLink.innerText = 'Show Advanced Search';
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LOS\resources\views/simulations/index.blade.php ENDPATH**/ ?>