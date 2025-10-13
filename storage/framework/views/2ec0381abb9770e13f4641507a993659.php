


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
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">

                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Simulasi</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="row">


                                                <div class=col-6>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="tanggal_realisasi" class="form-label">Tanggal
                                                                Realisasi <span style="color:red">*</span></label>
                                                            <input type="date" value="<?php echo e(old('tanggal_realisasi')); ?>"
                                                                name="tanggal_realisasi" id="tanggal_realisasi"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['tanggal_realisasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="nama" class="form-label">Nama <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('nama')); ?>" name="nama"
                                                                id="nama" class="form-control form-control-sm"
                                                                placeholder="Nama">
                                                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="jenis_kredit" class="form-label">Jenis Kredit <span
                                                                    style="color:red">*</span></label>
                                                            <!--<input type="text" value="<?php echo e(old('jenis_kredit')); ?>" name="jenis_kredit"-->
                                                            <select  id="jenis_kredit" name="jenis_kredit" class="form-control">
                                                                <?php if(old('jenis_kredit') == 'UMKM'): ?>
                                                                <option value="">-- Pilih Jenis Produk --</option>
                                                                <option value="UMKM" selected> UMKM </option>
                                                                <option value="KTA Pegawai">KTA Pegawai</option>
                                                                <option value="Modal kerja">Modal Kerja</option>
                                                                <option value="Pensiun">Pensiun</option>
                                                                <?php elseif(old('jenis_kredit') == 'KTA Pegawai'): ?>
                                                                <option value="">-- Pilih Jenis Produk --</option>
                                                                <option value="UMKM"> UMKM</option>
                                                                <option value="KTA Pegawai" selected>KTA Pegawai</option>
                                                                <option value="Modal Kerja">Modal Kerja</option>
                                                                <option value="Pensiun">Pensiun</option>
                                                                <?php elseif(old('jenis_kredit') == 'Modal Kerja'): ?>
                                                                <option value="">-- Pilih Jenis Produk --</option>
                                                                <option value="UMKM"> UMKM</option>
                                                                <option value="KTA Pegawai">KTA Pegawai</option>
                                                                <option value="Modal Kerja" selected>Modal Kerja</option>
                                                                <option value="Pensiun">Pensiun</option>
                                                                <?php elseif(old('jenis_kredit') == 'Pensiun'): ?>
                                                                <option value="">-- Pilih Jenis Produk --</option>
                                                                <option value="UMKM"> UMKM</option>
                                                                <option value="KTA Pegawai">KTA Pegawai</option>
                                                                <option value="Modal Kerja">Modal Kerja</option>
                                                                <option value="Pensiun" selected>Pensiun</option>
                                                                <?php else: ?>
                                                                <option value="">-- Pilih Jenis Produk --</option>
                                                                <option value="UMKM"> UMKM </option>
                                                                <option value="KTA Pegawai">KTA Pegawai</option>
                                                                <option value="Modal Kerja">Modal Kerja</option>
                                                                <option value="Pensiun">Pensiun</option>
                                                                <?php endif; ?>
                                                            </select>
                                                            <?php $__errorArgs = ['jenis_kredit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="tanggal_lahir" class="form-label">Tanggal Bulan
                                                                Tahun Lahir <span style="color:red">*</span></label>
                                                            <input type="date" value="<?php echo e(old('tanggal_lahir')); ?>"
                                                                name="tanggal_lahir" id="tanggal_lahir"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="usia" class="form-label">Usia <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('usia')); ?>"
                                                                name="usia" id="usia"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['usia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="besaran_gaji" class="form-label">Besaran Gaji <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('besaran_gaji')); ?>"
                                                                name="besaran_gaji" id="besaran_gaji"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['besaran_gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <!-- DSR Dinamis -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="dsr" class="form-label">DSR (%)<span style="color:red">*</span></label>
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" value="<?php echo e(old('dsr', $dsrValue ?? '')); ?>"
                                                                    name="dsr" id="dsr"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Masukkan DSR">
                                                                <div class="input-group-sm">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                            <?php $__errorArgs = ['dsr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="maksimal_angsuran" class="form-label">Maksimal
                                                                Angsuran <span style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('maksimal_angsuran')); ?>"
                                                                name="maksimal_angsuran" id="maksimal_angsuran"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['maksimal_angsuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="plafond" class="form-label">Plafond <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('plafond')); ?>"
                                                                name="plafond" id="plafond"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['plafond'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="jangka_waktu" class="form-label">Jangka Waktu
                                                                (Bulan)
                                                                <span style="color:red">*</span></label>
                                                            <select name="jangka_waktu" id="jangka_waktu"
                                                                class="form-control form-control-sm select2">
                                                                <?php for($i = 1; $i <= 240; $i++): ?>
                                                                    <option value="<?php echo e($i); ?>"
                                                                        <?php echo e(old('jangka_waktu') == $i ? 'selected' : ''); ?>>
                                                                        <?php echo e($i); ?> Bulan</option>
                                                                <?php endfor; ?>
                                                            </select>
                                                            <?php $__errorArgs = ['jangka_waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="jatuh_tempo" class="form-label">Jatuh Tempo <span style="color:red">*</span></label>
                                                            <input type="date" value="<?php echo e(old('jatuh_tempo')); ?>"
                                                                name="jatuh_tempo" id="jatuh_tempo"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['jatuh_tempo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="jatuh_tempo" class="form-label">Jatuh Tempo
                                                                <span style="color:red">*</span></label>
                                                            <div class="input-group input-group-sm">
                                                                <input type="date" value="<?php echo e(old('jatuh_tempo')); ?>"
                                                                    name="jatuh_tempo" id="jatuh_tempo"
                                                                    class="form-control form-control-sm">
                                                            </div>
                                                            <?php $__errorArgs = ['jatuh_tempo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>-->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="bunga_flat" class="form-label">Bunga Flat (%)
                                                                <span style="color:red">*</span></label>


                                                            <div class="input-group input-group-sm">
                                                                <input type="text" value="<?php echo e(old('bunga_flat')); ?>"
                                                                    name="bunga_flat" id="bunga_flat"
                                                                    class="form-control form-control-sm">
                                                                <div class="input-group-sm">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>

                                                            <?php $__errorArgs = ['bunga_flat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    

        
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="bunga_effektif" class="form-label">Bunga Effektif
                                                                (%)
                                                                <span style="color:red">*</span></label>
                                                           

                                                                <div class="input-group input-group-sm">
                                                                    <input type="text" value="<?php echo e(old('bunga_effektif')); ?>"
                                                                    name="bunga_effektif" id="bunga_effektif"
                                                                    class="form-control form-control-sm">
                                                                    <div class="input-group-sm">
                                                                        <span class="input-group-text">%</span>
                                                                    </div>
                                                                </div>
                                                            <?php $__errorArgs = ['bunga_effektif'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="angsuran" class="form-label">Angsuran <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('angsuran')); ?>"
                                                                name="angsuran" id="angsuran"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['angsuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="sisa_gaji" class="form-label">Sisa Gaji <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('sisa_gaji')); ?>"
                                                                name="sisa_gaji" id="sisa_gaji"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['sisa_gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=col-6>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_notaris" class="form-label">Biaya Notaris
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('biaya_notaris')); ?>"
                                                                name="biaya_notaris" id="biaya_notaris"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['biaya_notaris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                <div class=col-6>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_provisi" class="form-label">Biaya Provisi
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('biaya_provisi')); ?>"
                                                                name="biaya_provisi" id="biaya_provisi"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['biaya_provisi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_administrasi" class="form-label">Biaya
                                                                Administrasi <span style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('biaya_administrasi')); ?>"
                                                                name="biaya_administrasi" id="biaya_administrasi"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['biaya_administrasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_asuransi" class="form-label">Biaya Asuransi
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('biaya_asuransi')); ?>"
                                                                name="biaya_asuransi" id="biaya_asuransi"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['biaya_asuransi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_materai" class="form-label">Biaya Materai</label>
                                                            <input type="text" value="<?php echo e(old('biaya_materai')); ?>"
                                                                name="biaya_materai" id="biaya_materai"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['biaya_materai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="retensi" class="form-label">Retensi 1X <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('retensi')); ?>"
                                                                name="retensi" id="retensi"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['retensi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="tabungan_wajib" class="form-label">Tabungan Wajib
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('tabungan_wajib')); ?>"
                                                                name="tabungan_wajib" id="tabungan_wajib"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['tabungan_wajib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>



                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="ass_krd" class="form-label">Asuransi Kredit <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('ass_krd')); ?>"
                                                                name="ass_krd" id="ass_krd"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['ass_krd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="bunga" class="form-label">Bunga </label>
                                                            <input type="text" value="<?php echo e(old('bunga')); ?>"
                                                                name="bunga" id="bunga"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['bunga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="denda" class="form-label">Denda </label>
                                                            <input type="text" value="<?php echo e(old('denda')); ?>"
                                                                name="denda" id="denda"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['denda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="pinalty" class="form-label">Pinalty </label>
                                                            <input type="text" value="<?php echo e(old('pinalty')); ?>"
                                                                name="pinalty" id="pinalty"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['pinalty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

                                                                </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="total_diterima" class="form-label">Total Diterima
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="<?php echo e(old('total_diterima')); ?>"
                                                                name="total_diterima" id="total_diterima"
                                                                class="form-control form-control-sm">
                                                            <?php $__errorArgs = ['total_diterima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?>

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
                                        <div class="card-footer">
                                            <div class="pull-right mb-2 pt-3">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">

                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Asuransi</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="row">


                                                <div class="row">


                                                    <div class=col-6>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <label for="rate_asuransi" class="form-label">Rate
                                                                    Asuransi (%)
                                                                    <span style="color:red">*</span></label>
                                                                
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" value="<?php echo e(old('rate_asuransi')); ?>"
                                                                    name="rate_asuransi" id="rate_asuransi"
                                                                    class="form-control form-control-sm">
                                                                        <div class="input-group-sm">
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                <?php $__errorArgs = ['rate_asuransi'];
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
                                                    <div class=col-6>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

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
    <script>
    $(document).ready(function() {
        $('.select2').select2();
        
        $('#tanggal_realisasi').change(function() {
            var tanggalRealisasi1 = $(this).val();
            $('#mulai_asuransi').val(tanggalRealisasi1);

            var tanggalRealisasi = new Date($(this).val());
            tanggalRealisasi.setMonth(tanggalRealisasi.getMonth() + 1);

            var tahun = tanggalRealisasi.getFullYear();
            var bulan = ('0' + (tanggalRealisasi.getMonth() + 1)).slice(-2);
            var hari = ('0' + tanggalRealisasi.getDate()).slice(-2);
            var tanggalJatuhTempoFormatted = tahun + '-' + bulan + '-' + hari;

            $('#jatuh_tempo').val(tanggalJatuhTempoFormatted);
        });

        $('#nama').change(function() {
            var nama = $(this).val();
            $('#nama_debitur').val(nama);
        });

        $('#tanggal_lahir').change(function() {
            var tanggal_lahir = $(this).val();
            var tanggalLahir = new Date($(this).val());
            var today = new Date();
            var diffTime = today - tanggalLahir;
            var age = Math.round(diffTime / (1000 * 60 * 60 * 24 * 365.25));

            if (today.getMonth() < tanggalLahir.getMonth() || (today.getMonth() === tanggalLahir
                    .getMonth() && today.getDate() < tanggalLahir.getDate())) {
                
            }

            $('#usia').val(age);
        });

        // Inisialisasi Cleave.js untuk format angka
        var besaran_gaji = new Cleave('#besaran_gaji', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralThousandsGroupStyle: 'thousand'
        });

        // Tambahkan Cleave.js untuk DSR dengan format desimal
        var dsr_input = new Cleave('#dsr', {
            numeral: true,
            numeralDecimalMark: '.',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var plafond = new Cleave('#plafond', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralThousandsGroupStyle: 'thousand'
        });

        var bunga_flat = new Cleave('#bunga_flat', {
            numeral: true,
            numeralDecimalMark: '.',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var angsuran = new Cleave('#angsuran', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var sisa_gaji = new Cleave('#sisa_gaji', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var biaya_notaris = new Cleave('#biaya_notaris', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var biaya_provisi = new Cleave('#biaya_provisi', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var biaya_administrasi = new Cleave('#biaya_administrasi', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var biaya_asuransi = new Cleave('#biaya_asuransi', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var biaya_materai = new Cleave('#biaya_materai', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var retensi = new Cleave('#retensi', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var tabungan_wajib = new Cleave('#tabungan_wajib', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var rate_asuransi = new Cleave('#rate_asuransi', {
            numeral: true,
            numeralDecimalMark: '.',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var ass_krd = new Cleave('#ass_krd', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var bunga = new Cleave('#bunga', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var denda = new Cleave('#denda', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var pinalty = new Cleave('#pinalty', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var total_diterima = new Cleave('#total_diterima', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
            prefix: '',
        });

        var maksimal_angsuran = new Cleave('#maksimal_angsuran', {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralThousandsGroupStyle: 'thousand'
        });

        // Fungsi untuk menghitung Maksimal Angsuran berdasarkan DSR
        function hitungMaksimalAngsuran() {
            var besaranGaji = besaran_gaji.getRawValue() || 0;
            var dsrValue = dsr_input.getRawValue() / 100 || 0; // Ambil nilai dari input DSR
            var maksimalAngsuranValue = besaranGaji * dsrValue;

            // Set nilai ke input maksimal_angsuran
            maksimal_angsuran.setRawValue(maksimalAngsuranValue.toFixed(2));
        }

        // Event listener untuk besaran_gaji dan dsr
        $('#besaran_gaji, #dsr').on('input', function() {
            hitungMaksimalAngsuran();
        });

        // Inisialisasi nilai maksimal_angsuran saat halaman dimuat
        hitungMaksimalAngsuran();

        // Fungsi untuk menghitung Total Diterima
        function hitungTotalDiterima() {
            var plafond_input = plafond.getRawValue() || 0;
            var biayaNotaris = biaya_notaris.getRawValue() || 0;
            var biayaProvisi = biaya_provisi.getRawValue() || 0;
            var biayaAdministrasi = biaya_administrasi.getRawValue() || 0;
            var biayaAsuransi = biaya_asuransi.getRawValue() || 0;
            var biayaMaterai = biaya_materai.getRawValue() || 0;
            var retensiValue = retensi.getRawValue() || 0;
            var tabunganWajibValue = tabungan_wajib.getRawValue() || 0;
            var assKrdValue = ass_krd.getRawValue() || 0;
            var bunga_input = bunga.getRawValue() || 0;
            var denda_input = denda.getRawValue() || 0;
            var pinalty_input = pinalty.getRawValue() || 0;

            var totalDiterima = plafond_input - biayaNotaris - biayaProvisi - biayaAdministrasi -
                biayaAsuransi - biayaMaterai - retensiValue - tabunganWajibValue - assKrdValue -
                bunga_input - denda_input - pinalty_input;

            total_diterima.setRawValue(Math.abs(totalDiterima).toFixed(2));
        }

        // Event listener untuk semua field biaya yang mempengaruhi Total Diterima
        $('#biaya_notaris, #biaya_provisi, #biaya_administrasi, #biaya_asuransi, #biaya_materai, #retensi, #tabungan_wajib, #ass_krd, #bunga, #denda, #pinalty').on('input', function() {
            hitungTotalDiterima();
        });

        var rateAsuransi = 0;
        $('#plafond, #jangka_waktu, #bunga_flat, #bunga, #denda, #pinalty').on('change', function() {
            var besaranGaji = besaran_gaji.getRawValue() || 0;
            var plafond_input = plafond.getRawValue() || 0;
            var jangkaWaktu = $('#jangka_waktu').val() || 0;
            var usia = $('#usia').val() || 0;
            var bungaFlat = bunga_flat.getRawValue() / 100 || 0;

            var bungaEffektif = calculateRate(plafond_input, jangkaWaktu, bungaFlat);
            var interestRate = parseFloat(bungaEffektif / 12 / 100);
            var numberOfPeriods = parseFloat(jangkaWaktu);
            var loanAmount = plafond_input * -1;
            var futureValue = 0;
            var paymentType = 0;

            var monthlyPayment = PMT(interestRate, numberOfPeriods, loanAmount, futureValue,
                paymentType);

            var sisaGaji = besaranGaji - monthlyPayment;
            var biayaNotaris = biaya_notaris.getRawValue() || 0;
            var biayaProvisi = plafond_input * parseFloat('<?php echo e($biaya_provisiValue); ?>');
            var biayaAdministrasi = plafond_input * parseFloat('<?php echo e($biaya_administrasiValue); ?>');

            var rateAsuransiPromise = get_asuransi_rate(parseFloat(jangkaWaktu), parseFloat(usia));

            rateAsuransiPromise.then(function(rate) {
                rateAsuransi = rate;
                console.log("rateAsuransi:" + rate);
            });

            var biayaAsuransi = plafond_input / 1000 * rateAsuransi;
            //var biayaAsuransi = biaya_asuransi.getRawValue() || 0;
            var biayaMaterai = parseFloat('<?php echo e($biaya_materaiValue); ?>');
            var tabunganWajib = parseFloat('<?php echo e($tabungan_wajibValue); ?>');
            var assKdr = parseFloat('<?php echo e($ass_krdValue); ?>');
            var bunga_input = bunga.getRawValue() || 0;
            var denda_input = denda.getRawValue() || 0;
            var pinalty_input = pinalty.getRawValue() || 0;
            var totalDiterima = plafond_input - biayaProvisi - biayaNotaris - biayaAdministrasi - biayaAsuransi -
                biayaMaterai - monthlyPayment - tabunganWajib - assKdr - bunga_input - denda_input -
                pinalty_input;

            if (!isNaN(bungaEffektif)) {
                $('#bunga_effektif').val(Math.abs(bungaEffektif).toFixed(2));
                angsuran.setRawValue(Math.abs(monthlyPayment).toFixed(2));
                sisa_gaji.setRawValue(Math.abs(sisaGaji).toFixed(2));
                biaya_notaris.setRawValue(Math.abs(biayaNotaris).toFixed(2));
                biaya_provisi.setRawValue(Math.abs(biayaProvisi).toFixed(2));
                biaya_administrasi.setRawValue(Math.abs(biayaAdministrasi).toFixed(2));
                rate_asuransi.setRawValue(Math.abs(rateAsuransi).toFixed(2));
                biaya_asuransi.setRawValue(Math.abs(biayaAsuransi).toFixed(2));
                biaya_materai.setRawValue(Math.abs(biayaMaterai).toFixed(2));
                retensi.setRawValue(Math.abs(monthlyPayment).toFixed(2));
                tabungan_wajib.setRawValue(Math.abs(tabunganWajib).toFixed(2));
                ass_krd.setRawValue(Math.abs(assKdr).toFixed(2));
                total_diterima.setRawValue(Math.abs(totalDiterima).toFixed(2));
            } else {
                console.error('Hasil bungaEffektif bukan angka:', bungaEffektif);
            }
        });

        function calculateRate(plafond, jangkaWaktu, bungaFlat) {
            var plafond = parseFloat(plafond);
            var jangkaWaktu = parseFloat(jangkaWaktu);
            var bungaFlat = parseFloat(bungaFlat);
            var payment = ((plafond * (bungaFlat / 12) * jangkaWaktu) + plafond) / jangkaWaktu;

            return Math.abs(parseFloat((RATE(jangkaWaktu, payment, -plafond, 0, 0)) * 12) * 100);
        }

        function RATE(periods, payment, present, future, type, guess) {
            guess = (guess === undefined) ? 0.01 : guess;
            future = (future === undefined) ? 0 : future;
            type = (type === undefined) ? 0 : type;

            var epsMax = 1e-10;
            var iterMax = 10;

            var y, y0, y1, x0, x1 = 0,
                f = 0,
                i = 0;
            var rate = guess;
            if (Math.abs(rate) < epsMax) {
                y = present * (1 + periods * rate) + payment * (1 + rate * type) * periods + future;
            } else {
                f = Math.exp(periods * Math.log(1 + rate));
                y = present * f + payment * (1 / rate + type) * (f - 1) + future;
            }
            y0 = present + payment * periods + future;
            y1 = present * f + payment * (1 / rate + type) * (f - 1) + future;
            i = x0 = 0;
            x1 = rate;
            while ((Math.abs(y0 - y1) > epsMax) && (i < iterMax)) {
                rate = (y1 * x0 - y0 * x1) / (y1 - y0);
                x0 = x1;
                x1 = rate;
                if (Math.abs(rate) < epsMax) {
                    y = present * (1 + periods * rate) + payment * (1 + rate * type) * periods + future;
                } else {
                    f = Math.exp(periods * Math.log(1 + rate));
                    y = present * f + payment * (1 / rate + type) * (f - 1) + future;
                }
                y0 = y1;
                y1 = y;
                ++i;
            }
            return rate;
        }

        function PMT(rate, nper, pv, fv, type) {
            let pmt, pvif;

            fv || (fv = 0);
            type || (type = 0);

            if (rate === 0)
                return -(pv + fv) / nper;

            pvif = Math.pow(1 + rate, nper);
            pmt = -rate * (pv * pvif + fv) / (pvif - 1);

            if (type === 1)
                pmt /= (1 + rate);
            return pmt;
        }

        function get_asuransi_rate(jangka_waktu, usia) {
            return new Promise((resolve, reject) => {
                if (usia < 20 || usia > 64 || jangka_waktu > 240 || usia + jangka_waktu / 12 > 65) {
                    resolve(0);
                } else {
                    $.ajax({
                        url: '/get_rate_asuransi',
                        method: 'GET',
                        data: {
                            jangka_waktu: jangka_waktu,
                            usia: usia
                        },
                        success: function(response) {
                            console.log(response);
                            resolve(parseFloat(response));
                        },
                        error: function() {
                            resolve(0);
                        }
                    });
                }
            });
        }
    });
</script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BWS\Project\Los\LOS\resources\views/simulations/create.blade.php ENDPATH**/ ?>