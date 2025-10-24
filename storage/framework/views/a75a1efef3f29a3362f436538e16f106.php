


<?php $__env->startSection('title'); ?>
    Add <?php echo app('translator')->get('translation.' . $resource); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('css/select2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            <?php echo app('translator')->get('translation.' . $resource); ?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Add <?php echo app('translator')->get('translation.' . $resource); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add <?php echo app('translator')->get('translation.' . $resource); ?></h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route($route . '.index')); ?>"> <i data-feather="arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="live-preview">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success mb-1 mt-1">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-xl-0" role="alert">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route($route . '.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_simulation" id="id_simulation" value=<?php echo e($simulation->id); ?> />
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">

                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">DATA PRIBADI</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" value="<?php echo e(date("Y-m-d")); ?>"
                                                                name="tanggal" id="tanggal"
                                                                class="form-control form-control-sm" required>
                                                    

                                                    <!-- Nama -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama <span
                                                                        style="color:red">*</span></span>
                                                                <input type="text" value="<?php echo e(old('nama',$simulation->nama)); ?>"
                                                                    name="nama" id="nama"
                                                                    class="form-control" required>
                                                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Jenis Kelamin -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Jenis Kelamin <span
                                                                        style="color:red">*</span></span>
                                                                <select name="jenis_kelamin" id="jenis_kelamin"
                                                                    class="form-control form-control-sm" required>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                                <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- No KTP/SIM -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No KTP/SIM <span
                                                                        style="color:red">*</span></span>
                                                                <input type="number" value="<?php echo e(old('no_ktp_sim')); ?>"
                                                                    name="no_ktp_sim" id="no_ktp_sim"
                                                                    class="form-control form-control-sm" max="9999999999999999"
                                                                    pattern="/^-?\d+\.?\d*$/"  
                                                                    onKeyPress="if( this.value.length == 16 ) return false;" required>
                                                                <?php $__errorArgs = ['no_ktp_sim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Masa Berlaku -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Masa Berlaku <span
                                                                        style="color:red">*</span></span>
                                                                <input type="date" value="<?php echo e(old('masa_berlaku')); ?>"
                                                                    name="masa_berlaku" id="masa_berlaku"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['masa_berlaku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat Lengkap <span
                                                                        style="color:red">*</span></span>
                                                                <textarea name="alamat_lengkap" id="alamat_lengkap" class="form-control form-control-sm" required><?php echo e(old('alamat_lengkap')); ?></textarea>
                                                                <?php $__errorArgs = ['alamat_lengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Tempat Lahir -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tempat Lahir <span
                                                                        style="color:red">*</span></span>
                                                                <input type="text" value="<?php echo e(old('tempat_lahir')); ?>"
                                                                    name="tempat_lahir" id="tempat_lahir"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['tempat_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Tanggal Lahir -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tanggal Lahir <span
                                                                        style="color:red">*</span></span>
                                                                <input type="date" value="<?php echo e(old('tanggal_lahir',$simulation->tanggal_lahir)); ?>"
                                                                    name="tanggal_lahir" id="tanggal_lahir"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Pendidikan Terakhir -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pendidikan Terakhir
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('pendidikan_terakhir')); ?>"
                                                                    name="pendidikan_terakhir" id="pendidikan_terakhir"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['pendidikan_terakhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Status Rumah -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Status Rumah <span
                                                                        style="color:red">*</span></span>
                                                                <input type="text" value="<?php echo e(old('status_rumah')); ?>"
                                                                    name="status_rumah" id="status_rumah"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['status_rumah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Lama Menempati -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Lama Menempati <span
                                                                        style="color:red">*</span></span>
                                                                <input type="text" value="<?php echo e(old('lama_menempati')); ?>"
                                                                    name="lama_menempati" id="lama_menempati"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['lama_menempati'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Status Perkawinan
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('status_perkawinan')); ?>"
                                                                    name="status_perkawinan" id="status_perkawinan"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['status_perkawinan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Nama Ibu Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Ibu Kandung <span
                                                                        style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('nama_ibu_kandung')); ?>"
                                                                    name="nama_ibu_kandung" id="nama_ibu_kandung"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['nama_ibu_kandung'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Pekerjaan Ibu Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pekerjaan Ibu Kandung
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('pekerjaan_ibu_kandung')); ?>"
                                                                    name="pekerjaan_ibu_kandung"
                                                                    id="pekerjaan_ibu_kandung"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['pekerjaan_ibu_kandung'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Nama Ayah Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Ayah Kandung
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('nama_ayah_kandung')); ?>"
                                                                    name="nama_ayah_kandung" id="nama_ayah_kandung"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['nama_ayah_kandung'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Pekerjaan ayah Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pekerjaan Ayah Kandung
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('pekerjaan_ayah_kandung')); ?>"
                                                                    name="pekerjaan_ayah_kandung"
                                                                    id="pekerjaan_ayah_kandung"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['pekerjaan_ayah_kandung'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No Telepon Pemohon
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('no_telepon_pemohon')); ?>"
                                                                    name="no_telepon_pemohon" id="no_telepon_pemohon"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['no_telepon_pemohon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>











                                                </div>

                                                <div class="col-6">
                                                    <div class="card-header align-items-center d-flex">
                                                        <h4 class="card-title mb-0 flex-grow-1">Data Agunan</h4>
                                                    </div><!-- end card header -->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- Agunan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Agunan <span
                                                                                style="color:red">*</span></span>
                                                                        <input type="text" value="<?php echo e(old('agunan')); ?>"
                                                                            name="agunan" id="agunan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['agunan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- No Ijasah -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">No Ijasah
                                                                            <span style="color:red">*</span></span>
                                                                        <input type="text"
                                                                            value="<?php echo e(old('no_ijasah')); ?>"
                                                                            name="no_ijasah" id="no_ijasah"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['no_ijasah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="card-header align-items-center d-flex pt-4">
                                                        <h4 class="card-title mb-0 flex-grow-1 pt-5">Data Pasangan</h4>
                                                    </div><!-- end card header -->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- Nama Istri/Suami -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Nama
                                                                            Istri/Suami
                                                                            </span>
                                                                        <input type="text"
                                                                            value="<?php echo e(old('nama_pasangan')); ?>"
                                                                            name="nama_pasangan" id="nama_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['nama_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- No KTP/SIM pasangan-->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">No KTP/SIM
                                                                            </span>
                                                                        <input type="number" value="<?php echo e(old('no_ktp_sim_pasangan')); ?>"
                                                                            name="no_ktp_sim_pasangan" id="no_ktp_sim_pasangan"
                                                                            class="form-control form-control-sm" max="9999999999999999"
                                                                            pattern="/^-?\d+\.?\d*$/"  
                                                                            onKeyPress="if( this.value.length == 16 ) return false;" required>
                                                                        <?php $__errorArgs = ['no_ktp_sim_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Tempat Lahir Pasangan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Tempat Lahir
                                                                            </span>
                                                                        <input type="text"
                                                                            value="<?php echo e(old('tempat_lahir_pasangan')); ?>"
                                                                            name="tempat_lahir_pasangan"
                                                                            id="tempat_lahir_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['tempat_lahir_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Tanggal Lahir Pasangan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Tanggal Lahir
                                                                            </span>
                                                                        <input type="date"
                                                                            value="<?php echo e(old('tanggal_lahir_pasangan')); ?>"
                                                                            name="tanggal_lahir_pasangan"
                                                                            id="tanggal_lahir_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['tanggal_lahir_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Jumlah Tanggungan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Jumlah
                                                                            Tanggungan
                                                                            </span>
                                                                        <input type="number"
                                                                            value="<?php echo e(old('jumlah_tanggungan')); ?>"
                                                                            name="jumlah_tanggungan"
                                                                            id="jumlah_tanggungan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['jumlah_tanggungan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Pekerjaan pasangan Kandung -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Pekerjaan
                                                                            Pasangan </span>
                                                                        <input type="text"
                                                                            value="<?php echo e(old('pekerjaan_pasangan')); ?>"
                                                                            name="pekerjaan_pasangan"
                                                                            id="pekerjaan_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['pekerjaan_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Nama Perusahaan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Nama
                                                                            Perusahaan
                                                                            </span>
                                                                        <input type="text"
                                                                            value="<?php echo e(old('nama_perusahaan_pasangan')); ?>"
                                                                            name="nama_perusahaan_pasangan"
                                                                            id="nama_perusahaan_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['nama_perusahaan_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Alamat Perusahaan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Alamat
                                                                            Perusahaan
                                                                            </span>
                                                                        <textarea name="alamat_perusahaan_pasangan" id="alamat_perusahaan_pasangan" class="form-control form-control-sm"
                                                                            required><?php echo e(old('alamat_perusahaan')); ?></textarea>
                                                                        <?php $__errorArgs = ['alamat_perusahaan_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Lama Bekerja -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Lama Bekerja
                                                                            </span>
                                                                        <input type="text"
                                                                            value="<?php echo e(old('lama_bekerja_pasangan')); ?>"
                                                                            name="lama_bekerja_pasangan"
                                                                            id="lama_bekerja_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['lama_bekerja_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- No Telepon -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">No Telepon
                                                                            </span>
                                                                        <input type="text"
                                                                            value="<?php echo e(old('no_telepon_pasangan')); ?>"
                                                                            name="no_telepon_pasangan"
                                                                            id="no_telepon_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        <?php $__errorArgs = ['no_telepon_pasangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                <?php echo e($message); ?>

                                                                            </div>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">KONTAK DAN ALAMAT TIDAK SERUMAH
                                                </h4>
                                            </div><!-- end card header -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- Nama Kontak Tidak Serumah -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Kontak Tidak
                                                                    Serumah
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('nama_kontak_tidak_serumah')); ?>"
                                                                    name="nama_kontak_tidak_serumah"
                                                                    id="nama_kontak_tidak_serumah"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['nama_kontak_tidak_serumah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Hubungan -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Hubungan <span
                                                                        style="color:red">*</span></span>
                                                                <input type="text" value="<?php echo e(old('hubungan')); ?>"
                                                                    name="hubungan" id="hubungan"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['hubungan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Alamat -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat <span
                                                                        style="color:red">*</span></span>
                                                                <textarea name="alamat" id="alamat" class="form-control form-control-sm" required><?php echo e(old('alamat')); ?></textarea>
                                                                <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- No Telepon -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                             <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No Telepon
                                                                    <span style="color:red">*</span></span>
                                                                <input type="text"
                                                                    value="<?php echo e(old('no_telepon_kontak_tidak_serumah')); ?>"
                                                                    name="no_telepon_kontak_tidak_serumah"
                                                                    id="no_telepon_kontak_tidak_serumah"
                                                                    class="form-control form-control-sm" required>
                                                                <?php $__errorArgs = ['no_telepon_kontak_tidak_serumah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">DATA PEKERJAAN CALON DEBITUR
                                                </h4>
                                            </div><!-- end card header -->
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-6">
                                                        <!-- Nama Perusahaan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Nama
                                                                        Perusahaan
                                                                        <span style="color:red">*</span></span>
                                                                    <input type="text"
                                                                        value="<?php echo e(old('nama_perusahaan')); ?>"
                                                                        name="nama_perusahaan" id="nama_perusahaan"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['nama_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Alamat Perusahaan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Alamat
                                                                        Perusahaan
                                                                        <span style="color:red">*</span></span>
                                                                    <textarea name="alamat_perusahaan" id="alamat_perusahaan" class="form-control form-control-sm" required><?php echo e(old('alamat_perusahaan')); ?></textarea>
                                                                    <?php $__errorArgs = ['alamat_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Lama Bekerja -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Lama Bekerja
                                                                        <span style="color:red">*</span></span>
                                                                    <input type="text"
                                                                        value="<?php echo e(old('lama_bekerja')); ?>"
                                                                        name="lama_bekerja" id="lama_bekerja"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['lama_bekerja'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- No ID Pegawai -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">No ID Pegawai
                                                                        <span style="color:red">*</span></span>
                                                                    <input type="text"
                                                                        value="<?php echo e(old('no_id_pegawai')); ?>"
                                                                        name="no_id_pegawai" id="no_id_pegawai"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['no_id_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">

                                                        <!-- Bidang Usaha -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Bidang Usaha
                                                                        <span style="color:red">*</span></span>
                                                                    <input type="text"
                                                                        value="<?php echo e(old('bidang_usaha')); ?>"
                                                                        name="bidang_usaha" id="bidang_usaha"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['bidang_usaha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Jabatan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Jabatan <span
                                                                            style="color:red">*</span></span>
                                                                    <input type="text" value="<?php echo e(old('jabatan')); ?>"
                                                                        name="jabatan" id="jabatan"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- No Telepon -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">No Telepon
                                                                        <span style="color:red">*</span></span>
                                                                    <input type="text" value="<?php echo e(old('no_telepon')); ?>"
                                                                        name="no_telepon" id="no_telepon"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['no_telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>


                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">PERMOHONAN KREDIT
                                                </h4>
                                            </div><!-- end card header -->
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-6">
                                                        <!-- Jumlah Permohonan Kredit -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Jumlah Permohonan
                                                                        Kredit
                                                                        <span style="color:red">*</span></span>
                                                                    <input type="text"
                                                                        value="<?php echo e(old('jumlah_permohonan_kredit', convertNumberFormat($simulation->plafond))); ?>"
                                                                        name="jumlah_permohonan_kredit"
                                                                        id="jumlah_permohonan_kredit"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['jumlah_permohonan_kredit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Jangka Waktu -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Jangka Waktu <span
                                                                            style="color:red">*</span></span>
                                                                    <input type="number"
                                                                        value="<?php echo e(old('jangka_waktu', $simulation->jangka_waktu)); ?>"
                                                                        name="jangka_waktu" id="jangka_waktu"
                                                                        class="form-control form-control-sm" required>
                                                                        <span class="input-group-text col-1">Bulan</span>
                                                                    <?php $__errorArgs = ['jangka_waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Tujuan Penggunaan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Tujuan Penggunaan
                                                                        <span style="color:red">*</span></span>
                                                                    <input type="text"
                                                                        value="<?php echo e(old('tujuan_penggunaan')); ?>"
                                                                        name="tujuan_penggunaan" id="tujuan_penggunaan"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['tujuan_penggunaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Account Officer -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Account Officer
                                                                        <span style="color:red">*</span></span>
                                                                        <select name="account_officer" id="account_officer" class="form-control form-control-sm" required>
                                                                            <option value="">Pilih Account Officer</option>
                                                                            <?php $__currentLoopData = $accountOfficers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accountOfficer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($accountOfficer->nama); ?>"><?php echo e($accountOfficer->nama); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    <?php $__errorArgs = ['account_officer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">

                                                        <!-- Besaran Gaji -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Besaran Gaji <span
                                                                            style="color:red">*</span></span>
                                                                            
                                                                    <input type="text"
                                                                        value="<?php echo e(old('besaran_gaji',convertNumberFormat($simulation->besaran_gaji))); ?>"
                                                                        name="besaran_gaji" id="besaran_gaji"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['besaran_gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- DSR -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">DSR (%)<span
                                                                            style="color:red">*</span></span>
                                                                    <input type="number" value="<?php echo e(old('dsr',$simulation->dsr)); ?>"
                                                                        name="dsr" id="dsr"
                                                                        class="form-control form-control-sm" required> 
                                                                        <span class="input-group-text col-1">%</span>
                                                                    <?php $__errorArgs = ['dsr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Angsuran -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                 <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Angsuran <span
                                                                            style="color:red">*</span></span>
                                                                    <input type="text" value="<?php echo e(old('angsuran',convertNumberFormat($simulation->angsuran))); ?>"
                                                                        name="angsuran" id="angsuran"
                                                                        class="form-control form-control-sm" required>
                                                                    <?php $__errorArgs = ['angsuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="alert alert-danger mt-1 mb-1">
                                                                            <?php echo e($message); ?>

                                                                        </div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="pull-right mb-2 pt-3">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    

                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
    </div><!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/js/jquery-3.6.0.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/libs/cleave.js/cleave.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/select2.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
    <script>
        $(document).ready(function() {
           

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BWS\Project\LOS\LOS\resources\views/debiturs/create.blade.php ENDPATH**/ ?>