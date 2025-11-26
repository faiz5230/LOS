<?php $__env->startSection('title'); ?>
    Edit Debitur Modal Kerja
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('css/select2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Debitur Modal Kerja
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Edit Data Debitur Modal Kerja
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit Data Debitur Modal Kerja</h4>
                </div>

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route('debitur-modal-kerja.index')); ?>">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('debitur-modal-kerja.update', $debitur->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="simulation_id" value="<?php echo e($debitur->simulation_id); ?>">

                            <div class="row">
                                <div class="col-xl-12">
                                    <!-- Header Info -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Permohonan Kredit</span>
                                                                <input type="text" name="permohonan_kredit" class="form-control" value="<?php echo e(old('permohonan_kredit', $debitur->permohonan_kredit)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tanggal</span>
                                                                <input type="date" name="tanggal" class="form-control" value="<?php echo e(old('tanggal', $debitur->tanggal)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DATA PERUSAHAAN -->
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">DATA PERUSAHAAN</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Perusahaan</span>
                                                                <input type="text" name="nama_perusahaan" class="form-control" value="<?php echo e(old('nama_perusahaan', $debitur->nama_perusahaan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Bidang Usaha</span>
                                                                <input type="text" name="bidang_usaha_perusahaan" class="form-control" value="<?php echo e(old('bidang_usaha_perusahaan', $debitur->bidang_usaha_perusahaan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">NIB</span>
                                                                <input type="text" name="nib" class="form-control" value="<?php echo e(old('nib', $debitur->nib)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Akte Pendirian</span>
                                                                <input type="text" name="akte_pendirian" class="form-control" value="<?php echo e(old('akte_pendirian', $debitur->akte_pendirian)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat Lengkap</span>
                                                                <textarea name="alamat_lengkap" class="form-control" rows="3"><?php echo e(old('alamat_lengkap', $debitur->alamat_lengkap)); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. NPWP</span>
                                                                <input type="text" name="no_npwp_perusahaan" class="form-control" value="<?php echo e(old('no_npwp_perusahaan', $debitur->no_npwp_perusahaan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. Telp</span>
                                                                <input type="text" name="no_telp_perusahaan" class="form-control" value="<?php echo e(old('no_telp_perusahaan', $debitur->no_telp_perusahaan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <h5>Data Agunan</h5>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Agunan</span>
                                                                <input type="text" name="agunan" class="form-control" value="<?php echo e(old('agunan', $debitur->agunan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. Agunan</span>
                                                                <input type="text" name="no_agunan" class="form-control" value="<?php echo e(old('no_agunan', $debitur->no_agunan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Atas Nama Agunan</span>
                                                                <input type="text" name="atas_nama_agunan" class="form-control" value="<?php echo e(old('atas_nama_agunan', $debitur->atas_nama_agunan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DATA DIREKTUR -->
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">DATA DIREKTUR</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama</span>
                                                                <input type="text" name="nama_direktur" class="form-control" value="<?php echo e(old('nama_direktur', $debitur->nama_direktur)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No KTP/SIM</span>
                                                                <input type="text" name="no_ktp_sim" class="form-control" value="<?php echo e(old('no_ktp_sim', $debitur->no_ktp_sim)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tempat Lahir</span>
                                                                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo e(old('tempat_lahir', $debitur->tempat_lahir)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tanggal Lahir</span>
                                                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo e(old('tanggal_lahir', $debitur->tanggal_lahir)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Jumlah Tanggungan</span>
                                                                <input type="number" name="jumlah_tanggungan" class="form-control" value="<?php echo e(old('jumlah_tanggungan', $debitur->jumlah_tanggungan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pekerjaan</span>
                                                                <input type="text" name="pekerjaan" class="form-control" value="<?php echo e(old('pekerjaan', $debitur->pekerjaan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Perusahaan</span>
                                                                <input type="text" name="nama_perusahaan_direktur" class="form-control" value="<?php echo e(old('nama_perusahaan_direktur', $debitur->nama_perusahaan_direktur)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat Perusahaan</span>
                                                                <textarea name="alamat_perusahaan_direktur" class="form-control" rows="2"><?php echo e(old('alamat_perusahaan_direktur', $debitur->alamat_perusahaan_direktur)); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Lama Bekerja</span>
                                                                <input type="text" name="lama_bekerja" class="form-control" value="<?php echo e(old('lama_bekerja', $debitur->lama_bekerja)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. Telepon</span>
                                                                <input type="text" name="no_telepon_direktur" class="form-control" value="<?php echo e(old('no_telepon_direktur', $debitur->no_telepon_direktur)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DATA USAHA CALON DEBITUR -->
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">DATA USAHA CALON DEBITUR</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Usaha</span>
                                                                <input type="text" name="nama_usaha" class="form-control" value="<?php echo e(old('nama_usaha', $debitur->nama_usaha)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat Usaha</span>
                                                                <textarea name="alamat_usaha" class="form-control" rows="2"><?php echo e(old('alamat_usaha', $debitur->alamat_usaha)); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Lama Usaha</span>
                                                                <input type="text" name="lama_usaha" class="form-control" value="<?php echo e(old('lama_usaha', $debitur->lama_usaha)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Bentuk Badan Usaha</span>
                                                                <input type="text" name="bentuk_badan_usaha" class="form-control" value="<?php echo e(old('bentuk_badan_usaha', $debitur->bentuk_badan_usaha)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Bidang Usaha</span>
                                                                <input type="text" name="bidang_usaha" class="form-control" value="<?php echo e(old('bidang_usaha', $debitur->bidang_usaha)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">NPWP</span>
                                                                <input type="text" name="npwp_usaha" class="form-control" value="<?php echo e(old('npwp_usaha', $debitur->npwp_usaha)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. Telepon</span>
                                                                <input type="text" name="no_telepon_usaha" class="form-control" value="<?php echo e(old('no_telepon_usaha', $debitur->no_telepon_usaha)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- PERMOHONAN KREDIT -->
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">PERMOHONAN KREDIT</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Jumlah Permohonan Kredit</span>
                                                                <input type="text" name="jumlah_permohonan_kredit" class="form-control" value="<?php echo e(old('jumlah_permohonan_kredit', number_format($debitur->jumlah_permohonan_kredit, 0, ',', '.'))); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Jangka Waktu</span>
                                                                <input type="text" name="jangka_waktu" class="form-control" value="<?php echo e(old('jangka_waktu', $debitur->jangka_waktu . ' Bulan')); ?>" placeholder="12 Bulan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tujuan Penggunaan</span>
                                                                <input type="text" name="tujuan_penggunaan" class="form-control" value="<?php echo e(old('tujuan_penggunaan', $debitur->tujuan_penggunaan)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Account Officer</span>
                                                                <select name="account_officer" class="form-control">
                                                                    <option value="">Pilih Account Officer</option>
                                                                    <?php $__currentLoopData = $accountOfficers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accountOfficer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($accountOfficer->nama); ?>" <?php echo e(old('account_officer', $debitur->account_officer) == $accountOfficer->nama ? 'selected' : ''); ?>>
                                                                            <?php echo e($accountOfficer->nama); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pemohon</span>
                                                                <input type="text" name="pemohon" class="form-control" value="<?php echo e(old('pemohon', $debitur->pemohon)); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">
                                                    <i data-feather="save"></i> Update Data
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/select2.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BWS\Project\Los\LOS\resources\views/debitur-modal-kerja/edit.blade.php ENDPATH**/ ?>