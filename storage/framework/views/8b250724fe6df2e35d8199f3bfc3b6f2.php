<?php $__env->startSection('title'); ?>
    Simulasi Kredit - <?php echo e($jenis_kredit ?? 'Baru'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('css/select2.min.css')); ?>" rel="stylesheet" />
    <style>
        .section-header {
            background: linear-gradient(135deg, #467889 0%, #daf5ca 100%);
            color: white !important;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem 0.5rem 0 0;
            margin: -1.5rem -1.5rem 1.5rem -1.5rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        .section-header h5,
        .section-header i {
            color: white !important;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        .required-mark {
            color: #dc3545;
            margin-left: 2px;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border-color: #ced4da;
        }
        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
            border: none;
        }
        .btn-action {
            min-width: 120px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Simulasi
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Edit Simulasi <?php echo e($jenis_kredit ?? ''); ?>

        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <form action="<?php echo e(route($route . '.update', $simulation->id)); ?>" method="POST" id="simulationForm">
        <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
        
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-6">
                <!-- Data Pemohon -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-user-line me-2"></i>Data Pemohon</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_realisasi" class="form-label">Tanggal Realisasi<span class="required-mark">*</span></label>
                                <input type="date" name="tanggal_realisasi" id="tanggal_realisasi" 
                                    class="form-control <?php $__errorArgs = ['tanggal_realisasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    value="<?php echo e(old('tanggal_realisasi', $simulation->tanggal_realisasi)); ?>">
                                <?php $__errorArgs = ['tanggal_realisasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="jenis_kredit" class="form-label">Jenis Kredit<span class="required-mark">*</span></label>
                                <select id="jenis_kredit" name="<?php echo e(!empty($jenis_kredit) ? 'jenis_kredit_display' : 'jenis_kredit'); ?>" 
                                    class="form-control <?php $__errorArgs = ['jenis_kredit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    <?php echo e(!empty($jenis_kredit) ? 'disabled' : ''); ?>>
                                    <?php if(!empty($jenis_kredit)): ?>
                                        <option value="<?php echo e($simulation->jenis_kredit); ?>" selected><?php echo e($jenis_kredit); ?></option>
                                    <?php else: ?>
                                        <option value="">-- Pilih Jenis Kredit --</option>
                                        <option value="Modal Kerja" <?php echo e(old('jenis_kredit') == 'Modal Kerja' ? 'selected' : ''); ?>>Modal Kerja</option>
                                        <option value="Pensiun" <?php echo e(old('jenis_kredit') == 'Pensiun' ? 'selected' : ''); ?>>Pensiun</option>
                                        <option value="Pasar" <?php echo e(old('jenis_kredit') == 'Pasar' ? 'selected' : ''); ?>>Pasar</option>
                                        <option value="UMKM" <?php echo e(old('jenis_kredit') == 'UMKM' ? 'selected' : ''); ?>>UMKM</option>
                                    <?php endif; ?>
                                </select>
                                <?php if(!empty($jenis_kredit)): ?>
                                    <input type="hidden" name="jenis_kredit" value="<?php echo e($simulation->jenis_kredit); ?>">
                                <?php endif; ?>
                                <?php $__errorArgs = ['jenis_kredit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="nama" class="form-label">Nama Lengkap<span class="required-mark">*</span></label>
                                <input type="text" name="nama" id="nama" 
                                    class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    value="<?php echo e(old('nama', $simulation->nama)); ?>" placeholder="Masukkan nama lengkap">
                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir<span class="required-mark">*</span></label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
                                    class="form-control <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    value="<?php echo e(old('tanggal_lahir', $simulation->tanggal_lahir)); ?>">
                                <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="usia" class="form-label">Usia (Tahun)<span class="required-mark">*</span></label>
                                <input type="number" name="usia" id="usia" 
                                    class="form-control <?php $__errorArgs = ['usia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    value="<?php echo e(old('usia', $simulation->usia)); ?>" readonly>
                                <?php $__errorArgs = ['usia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="besaran_gaji" class="form-label">Besaran Gaji<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="besaran_gaji" id="besaran_gaji" 
                                        class="form-control <?php $__errorArgs = ['besaran_gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('besaran_gaji', $simulation->besaran_gaji)); ?>" placeholder="0">
                                    <?php $__errorArgs = ['besaran_gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="dsr" class="form-label">DSR<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="dsr" id="dsr" 
                                        class="form-control <?php $__errorArgs = ['dsr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('dsr', $dsrValue ?? '')); ?>" placeholder="0">
                                    <span class="input-group-text">%</span>
                                    <?php $__errorArgs = ['dsr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="maksimal_angsuran" class="form-label">Maksimal Angsuran<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="maksimal_angsuran" id="maksimal_angsuran" 
                                        class="form-control <?php $__errorArgs = ['maksimal_angsuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('maksimal_angsuran', $simulation->maksimal_angsuran)); ?>" readonly>
                                    <?php $__errorArgs = ['maksimal_angsuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Kredit -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-money-dollar-circle-line me-2"></i>Data Kredit</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="plafond" class="form-label">Plafond<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="plafond" id="plafond" 
                                        class="form-control <?php $__errorArgs = ['plafond'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('plafond', $simulation->plafond)); ?>" placeholder="0">
                                    <?php $__errorArgs = ['plafond'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="jangka_waktu" class="form-label">Jangka Waktu<span class="required-mark">*</span></label>
                                <select name="jangka_waktu" id="jangka_waktu" 
                                    class="form-control select2 <?php $__errorArgs = ['jangka_waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih --</option>
                                    <?php for($i = 1; $i <= 240; $i++): ?>
                                        <option value="<?php echo e($i); ?>" <?php echo e(old('jangka_waktu') == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?> Bulan
                                        </option>
                                    <?php endfor; ?>
                                </select>
                                <?php $__errorArgs = ['jangka_waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="bunga_flat" class="form-label">Bunga Flat<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="bunga_flat" id="bunga_flat" 
                                        class="form-control <?php $__errorArgs = ['bunga_flat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('bunga_flat', $simulation->bunga_flat)); ?>" placeholder="0">
                                    <span class="input-group-text">%</span>
                                    <?php $__errorArgs = ['bunga_flat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="bunga_effektif" class="form-label">Bunga Efektif<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="bunga_effektif" id="bunga_effektif" 
                                        class="form-control <?php $__errorArgs = ['bunga_effektif'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('bunga_effektif', $simulation->bunga_effektif)); ?>" readonly>
                                    <span class="input-group-text">%</span>
                                    <?php $__errorArgs = ['bunga_effektif'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="angsuran" class="form-label">Angsuran/Bulan<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="angsuran" id="angsuran" 
                                        class="form-control <?php $__errorArgs = ['angsuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('angsuran', $simulation->angsuran)); ?>" readonly>
                                    <?php $__errorArgs = ['angsuran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="sisa_gaji" class="form-label">Sisa Gaji<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="sisa_gaji" id="sisa_gaji" 
                                        class="form-control <?php $__errorArgs = ['sisa_gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('sisa_gaji', $simulation->sisa_gaji)); ?>" readonly>
                                    <?php $__errorArgs = ['sisa_gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
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

            <!-- Right Column -->
            <div class="col-lg-6">
                <!-- Biaya-Biaya -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-file-list-3-line me-2"></i>Biaya-Biaya</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="biaya_provisi" class="form-label">Biaya Provisi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_provisi" id="biaya_provisi" 
                                        class="form-control <?php $__errorArgs = ['biaya_provisi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('biaya_provisi', $simulation->biaya_provisi)); ?>" readonly>
                                    <?php $__errorArgs = ['biaya_provisi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_notaris" class="form-label">Biaya Notaris<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_notaris" id="biaya_notaris" 
                                        class="form-control <?php $__errorArgs = ['biaya_notaris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('biaya_notaris', $simulation->biaya_notaris)); ?>">
                                    <?php $__errorArgs = ['biaya_notaris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_administrasi" class="form-label">Biaya Administrasi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_administrasi" id="biaya_administrasi" 
                                        class="form-control <?php $__errorArgs = ['biaya_administrasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('biaya_administrasi', $simulation->biaya_administrasi)); ?>" readonly>
                                    <?php $__errorArgs = ['biaya_administrasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_asuransi" class="form-label">Biaya Asuransi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_asuransi" id="biaya_asuransi" 
                                        class="form-control <?php $__errorArgs = ['biaya_asuransi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('biaya_asuransi', $simulation->biaya_asuransi)); ?>" readonly>
                                    <?php $__errorArgs = ['biaya_asuransi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_materai" class="form-label">Biaya Materai<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_materai" id="biaya_materai" 
                                        class="form-control <?php $__errorArgs = ['biaya_materai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('biaya_materai', $simulation->biaya_materai)); ?>" readonly>
                                    <?php $__errorArgs = ['biaya_materai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="retensi" class="form-label">Retensi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="retensi" id="retensi" 
                                        class="form-control <?php $__errorArgs = ['retensi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('retensi', 0)); ?>">
                                    <?php $__errorArgs = ['retensi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tabungan_wajib" class="form-label">Tabungan Wajib<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="tabungan_wajib" id="tabungan_wajib" 
                                        class="form-control <?php $__errorArgs = ['tabungan_wajib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('tabungan_wajib', $simulation->tabungan_wajib)); ?>" readonly>
                                    <?php $__errorArgs = ['tabungan_wajib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="rate_asuransi" class="form-label">Rate Asuransi<span class="required-mark">*</span></label>
                                <input type="text" name="rate_asuransi" id="rate_asuransi" 
                                    class="form-control <?php $__errorArgs = ['rate_asuransi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    value="<?php echo e(old('rate_asuransi', $simulation->rate_asuransi)); ?>" readonly>
                                <?php $__errorArgs = ['rate_asuransi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="ass_krd" class="form-label">Ass KRD<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="ass_krd" id="ass_krd" 
                                        class="form-control <?php $__errorArgs = ['ass_krd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('ass_krd', $simulation->ass_krd)); ?>" readonly>
                                    <?php $__errorArgs = ['ass_krd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="bunga" class="form-label">Bunga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="bunga" id="bunga" 
                                        class="form-control" value="<?php echo e(old('bunga', 0)); ?>">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="denda" class="form-label">Denda</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="denda" id="denda" 
                                        class="form-control" value="<?php echo e(old('denda', 0)); ?>">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="pinalty" class="form-label">Pinalty</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="pinalty" id="pinalty" 
                                        class="form-control" value="<?php echo e(old('pinalty', 0)); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Diterima -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-wallet-3-line me-2"></i>Total Diterima</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="total_diterima" class="form-label">Total Diterima Debitur<span class="required-mark">*</span></label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="total_diterima" id="total_diterima" 
                                        class="form-control <?php $__errorArgs = ['total_diterima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        value="<?php echo e(old('total_diterima', $simulation->total_diterima)); ?>" readonly style="font-size: 1.5rem; font-weight: 600;">
                                    <?php $__errorArgs = ['total_diterima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
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

        <!-- Action Buttons -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo e(route($route . '.index')); ?>" class="btn btn-secondary btn-action">
                                <i class="ri-arrow-left-line me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary btn-action">
                                <i class="ri-save-line me-1"></i> Update Simulasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/cleave.js/cleave.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();

            // Currency formatting with Cleave.js instances
            var besaran_gaji = new Cleave('#besaran_gaji', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var maksimal_angsuran = new Cleave('#maksimal_angsuran', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var plafond = new Cleave('#plafond', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
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

            var biaya_provisi = new Cleave('#biaya_provisi', {
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

            // Percentage fields formatting
            var bunga_flat = new Cleave('#bunga_flat', {
                numeral: true,
                numeralDecimalMark: '.',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2,
                prefix: '',
            });

            var dsr_input = new Cleave('#dsr', {
                numeral: true,
                numeralDecimalMark: '.',
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

            // Tanggal realisasi auto-set jatuh tempo
            $('#tanggal_realisasi').change(function() {
                var tanggalRealisasi = new Date($(this).val());
                tanggalRealisasi.setMonth(tanggalRealisasi.getMonth() + 1);

                var tahun = tanggalRealisasi.getFullYear();
                var bulan = ('0' + (tanggalRealisasi.getMonth() + 1)).slice(-2);
                var hari = ('0' + tanggalRealisasi.getDate()).slice(-2);
                var tanggalJatuhTempoFormatted = tahun + '-' + bulan + '-' + hari;

                $('#jatuh_tempo').val(tanggalJatuhTempoFormatted);
            });

            // Calculate age from birth date
            $('#tanggal_lahir').on('change', function() {
                const birthDate = new Date($(this).val());
                const today = new Date();
                let age = today.getFullYear() - birthDate.getFullYear();
                const monthDiff = today.getMonth() - birthDate.getMonth();
                
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                
                $('#usia').val(age);
            });

            // Calculate maksimal angsuran
            function hitungMaksimalAngsuran() {
                const gaji = parseFloat($('#besaran_gaji').val().replace(/\./g, '').replace(',', '.')) || 0;
                const dsr = parseFloat($('#dsr').val().replace(',', '.')) || 0;
                const maksAngsuran = gaji * (dsr / 100);
                
                $('#maksimal_angsuran').val(maksAngsuran.toFixed(0));
            }

            $('#besaran_gaji, #dsr').on('input', hitungMaksimalAngsuran);

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BWS\Project\LOS\LOS\resources\views/simulations/edit.blade.php ENDPATH**/ ?>