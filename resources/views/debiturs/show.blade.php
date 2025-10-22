@extends('layouts.master')

{{-- Dynamic title based on the resource being shown --}}
@section('title')
    Show @lang('translation.' . $resource)
@endsection

@section('css')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            @lang('translation.' . $resource)
        @endslot
        @slot('title')
            Show @lang('translation.' . $resource)
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Show @lang('translation.' . $resource)</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route($route . '.index') }}"> <i data-feather="arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="row mb-2">
                        
                        <div class="col-6">
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_data_calon_debitur_export', $debitur->id) }}">
                                Data Calon Debitur</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_analisa_kredit_export', $debitur->id) }}">
                                Analisa Kredit</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_memo_kredit_export', $debitur->id) }}">
                                Memo Kredit</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_sppk_export', $debitur->id) }}">
                                SPPK</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_sttu_export', $debitur->id) }}">
                                STTU</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_tanda_terima_export', $debitur->id) }}">
                                Tanda Terima</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_analisa_yuridis_export', $debitur->id) }}">
                                Analisa Yuridis</a>
                        </div>
                        <div class="col-6 ">
                            
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_pk_kredit_pasangan_export', $debitur->id) }}">
                                PK Kredit Pasangan</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_pk_kredit_sendiri_export', $debitur->id) }}">
                                PK Kredit Sendiri</a>
                            <a class="btn btn-primary mb-2"
                                href="{{ route('debiturs_pk_kredit_non_mou_pasangan_export', $debitur->id) }}">
                                PK Kredit Non MOU Pasangan</a>
                            <a class="btn btn-primary mb-2"
                                href="{{ route('debiturs_pk_kredit_non_mou_sendiri_export', $debitur->id) }}">
                                PK Kredit Non MOU Sendiri</a>
                            <a class="btn btn-primary mb-2" href="{{ route('debiturs_pk_kredit_reguler_export', $debitur->id) }}">
                                PK Kredit Reguler</a>
                        </div>
                       
                    </div>
                    <div class="live-preview">
                        @if (session('status'))
                            <div class="alert alert-success mb-1 mt-1">
                                {{ session('status') }}
                            </div>
                        @endif

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
                                                                        class="form-control form-control-sm">{{ $debitur->nama }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->jenis_kelamin }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->no_ktp_sim }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->masa_berlaku }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->alamat_lengkap }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->tempat_lahir }}</span>
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
                                                                        class="form-control form-control-sm">{{ ubahFormatTanggal($debitur->tanggal_lahir) }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->pendidikan_terakhir }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->status_rumah }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->lama_menempati }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->status_perkawinan }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->nama_ibu_kandung }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->pekerjaan_ibu_kandung }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->nama_ayah_kandung }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->pekerjaan_ayah_kandung }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->no_telepon_pemohon }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->agunan }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->no_ijasah }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->nama_pasangan }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->no_ktp_sim_pasangan }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->tempat_lahir_pasangan }}</span>
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
                                                                                class="form-control form-control-sm">{{ ubahFormatTanggal($debitur->tanggal_lahir_pasangan) }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->jumlah_tanggungan }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->pekerjaan_pasangan }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->nama_perusahaan_pasangan }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->lama_bekerja_pasangan }}</span>
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
                                                                                class="form-control form-control-sm">{{ $debitur->no_telepon_pasangan }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->nama_kontak_tidak_serumah }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->hubungan }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->alamat }}</span>
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
                                                                        class="form-control form-control-sm">{{ $debitur->no_telepon_kontak_tidak_serumah }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->nama_perusahaan }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->alamat_perusahaan }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->lama_bekerja }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->no_id_pegawai }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->bidang_usaha }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->jabatan }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->no_telepon }}</span>
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
                                                                            class="form-control form-control-sm">{{ convertNumberFormat($debitur->jumlah_permohonan_kredit) }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->jangka_waktu }} Bulan</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->tujuan_penggunaan }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->account_officer }}</span>
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
                                                                            class="form-control form-control-sm">{{ convertNumberFormat($debitur->besaran_gaji) }}</span>
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
                                                                            class="form-control form-control-sm">{{ $debitur->dsr }}%</span>
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
                                                                            class="form-control form-control-sm">{{ convertNumberFormat($debitur->angsuran) }}</span>
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
@endsection

@section('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
