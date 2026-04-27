

<?php $__env->startSection('title'); ?>
    Detail Debitur UMKM
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
           Debitur UMKM
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Detail Data UMKM
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Data Debitur Pensiun</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route('debitur-umkm.index')); ?>">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>
                        <a class="btn btn-primary" href="<?php echo e(route('debitur-umkm.export', $debitur->id)); ?>">
                            <i data-feather="download"></i> Download Excel
                        </a>
                        <a href="<?php echo e(route('debitur-umkm.export.memo_kredit', $debitur->id)); ?>" 
                            class="btn btn-primary"><i class="fas fa-download"></i>Memo Droping
                        </a>
                        <a href="<?php echo e(route('debitur-umkm.export.sppk', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Export SPPK     
                        </a>
                        <a href="<?php echo e(route('debitur-umkm.export.sttu', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Export STTU   
                        </a>
                        <a href="<?php echo e(route('debitur-umkm.export.pk_snd_sim', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Sendiri   
                        </a>
                        <!--<a href="<?php echo e(route('debitur-pensiun.export.pk_kredit_pasangan', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Pasangan   
                        </a>
                        <a href="<?php echo e(route('debitur-pensiun.export.surat_kuasa', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Surat Kuasa  
                        </a>
                        <a href="<?php echo e(route('debitur-pensiun.export.surat_askep', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Surat Askep
                        </a>
                        <a href="<?php echo e(route('debitur-pensiun.export.pk_kredit_perusahaan', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Kredit Perusahaan
                        </a>-->
    
                        <a href="<?php echo e(route('debitur-umkm.export.memo_fasilitas_kredit', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Memo Fasilitas Kredit
                        </a>
                        <a href="<?php echo e(route('debitur-umkm.export.mcc', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> MCC
                        </a>
                        <a href="<?php echo e(route('debitur-umkm.export.tanda_terima', $debitur->id)); ?>"
                           class="btn btn-primary"><i class="fas fa-download"></i> Tanda Terima
                        </a>
                        <a class="btn btn-warning" href="<?php echo e(route('debitur-umkm.edit', $debitur->id)); ?>">
                            <i data-feather="edit"></i> Edit
                        </a>
                        
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
                                    <div class="col-xl-12">
                                        <div class="card">

                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">DATA PRIBADI</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">


                                                        <!-- Nama -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Nama <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->nama); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Jenis Kelamin -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Jenis Kelamin <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->jenis_kelamin); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- No KTP/SIM -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">No KTP/SIM <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->no_ktp_sim); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Masa Berlaku -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Masa Berlaku <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->masa_berlaku); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Alamat Lengkap -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Alamat Lengkap
                                                                        <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->alamat_lengkap); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Tempat Lahir -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Tempat Lahir <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->tempat_lahir); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Tanggal Lahir -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Tanggal Lahir <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e(ubahFormatTanggal($debitur->tanggal_lahir)); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Pendidikan Terakhir -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Pendidikan Terakhir
                                                                        <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->pendidikan_terakhir); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Status Rumah -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Status Rumah <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->status_rumah); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Lama Menempati -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Lama Menempati
                                                                        <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->lama_menempati); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Status Perkawinan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Status Perkawinan
                                                                        <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->status_perkawinan); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Nama Ibu Kandung -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Nama Ibu Kandung
                                                                        <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->nama_ibu_kandung); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Pekerjaan Ibu Kandung -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Pekerjaan Ibu
                                                                        Kandung <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->pekerjaan_ibu_kandung); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Nama Ayah Kandung -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Nama Ayah Kandung
                                                                        <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->nama_ayah_kandung); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Pekerjaan Ayah Kandung -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Pekerjaan Ayah
                                                                        Kandung <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->pekerjaan_ayah_kandung); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- No Telepon Pemohon -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">No Telepon Pemohon
                                                                        <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->no_telepon_pemohon); ?></span>
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
                                                                            <span class="input-group-text col-4">Agunan
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->agunan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- No Ijasah -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">No Ijasah
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->no_ijasah); ?></span>
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
                                                                <!-- Nama Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Nama
                                                                                Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->nama_pasangan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- No KTP/SIM Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">No KTP/SIM
                                                                                Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->no_ktp_sim_pasangan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Tempat Lahir Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Tempat
                                                                                Lahir Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->tempat_lahir_pasangan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Tanggal Lahir Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Tanggal
                                                                                Lahir Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e(ubahFormatTanggal($debitur->tanggal_lahir_pasangan)); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Jumlah Tanggungan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Jumlah
                                                                                Tanggungan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->jumlah_tanggungan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Pekerjaan Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Pekerjaan
                                                                                Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->pekerjaan_pasangan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Nama Perusahaan Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Nama
                                                                                Perusahaan Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->nama_perusahaan_pasangan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                
                                                                <!-- Lama Bekerja Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Lama
                                                                                Bekerja Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->lama_bekerja_pasangan); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- No Telepon Pasangan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">No Telepon
                                                                                Pasangan <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm"><?php echo e($debitur->no_telepon_pasangan); ?></span>
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
                                                                        Serumah <span style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->nama_kontak_tidak_serumah); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Hubungan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Hubungan <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->hubungan); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Alamat -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Alamat <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->alamat); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- No Telepon Kontak Tidak Serumah -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">No Telepon Kontak
                                                                        Tidak Serumah <span
                                                                            style="color:red">*</span></span>
                                                                    <span
                                                                        class="form-control form-control-sm"><?php echo e($debitur->no_telepon_kontak_tidak_serumah); ?></span>
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
                                                                            Perusahaan <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->nama_usaha); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Alamat Perusahaan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Alamat
                                                                            Perusahaan <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->alamat_perusahaan); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Lama Bekerja -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Lama Bekerja
                                                                            <span style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->lama_bekerja); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- No ID Pegawai -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">No ID Pegawai
                                                                            <span style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->no_id_pegawai); ?></span>
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
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->bidang_usaha); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Jabatan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Jabatan <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->jabatan); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- No Telepon -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">No Telepon
                                                                            <span style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->no_telepon); ?></span>
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
                                                                        <span class="input-group-text col-4">Jumlah
                                                                            Permohonan Kredit <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e(convertNumberFormat($debitur->jumlah_permohonan_kredit)); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Jangka Waktu -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Jangka Waktu
                                                                            <span style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->jangka_waktu); ?> Bulan</span>
                                                                        <span class="input-group-text col-1">
                                                                            Bulan</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Tujuan Penggunaan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Tujuan
                                                                            Penggunaan <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->tujuan_penggunaan); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Account Officer -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Account
                                                                            Officer <span style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->account_officer); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">

                                                            <!-- Besaran Gaji -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Besaran Gaji
                                                                            <span style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e(convertNumberFormat($debitur->besaran_gaji)); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- DSR -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">DSR <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e($debitur->dsr); ?>%</span>
                                                                        <span class="input-group-text col-1">
                                                                            %</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Angsuran -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Angsuran <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm"><?php echo e(convertNumberFormat($debitur->angsuran)); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LOS\resources\views/debitur-umkm/show.blade.php ENDPATH**/ ?>