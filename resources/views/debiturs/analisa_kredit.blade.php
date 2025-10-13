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
                                                <h4 class="card-title mb-0 flex-grow-1">ANALISA KREDIT</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <!-- Nama -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Nama
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->nama }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Tempat Lahir -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Tempat
                                                                                Lahir <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->tempat_lahir }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Nama Perusahaan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Pekerjaan
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->nama_perusahaan }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- No ID Pegawai -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">No ID
                                                                                Pegawai
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->no_id_pegawai }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Lama Bekerja -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Masa
                                                                                Kerja
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->lama_bekerja }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Alamat Lengkap -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Alamat
                                                                                Lengkap
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->alamat_lengkap }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

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

                                                                <!-- No Telepon Pemohon -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">No
                                                                                Telepon Pemohon
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->no_telepon_pemohon }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Jumlah Permohonan Kredit -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Pengajuan
                                                                                Kredit <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ convertNumberFormat($debitur->jumlah_permohonan_kredit) }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Besaran Gaji -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span
                                                                                class="input-group-text col-4">Penghasilan/Gaji
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ convertNumberFormat($debitur->besaran_gaji) }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Masksimum Angsuran -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Maksimum
                                                                                Angsuran
                                                                                <span style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ convertNumberFormat($debitur->simulation->maksimal_angsuran) }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card">
                                                            <div class="card-body">
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

                                                                <!-- Tanggal Pengajuan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Tanggal
                                                                                Pengajuan<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->tanggal }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Pinjaman Ke -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Pinjaman
                                                                                Ke<span style="color:red">*</span></span>
                                                                            <span class="form-control form-control-sm">1
                                                                                (Baru)</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Kredit Pernah Diterima -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Kredit
                                                                                Pernah
                                                                                Diterima<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">-</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- O/S Pokok -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">O/S
                                                                                Pokok<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">-</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Bunga -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Bunga<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">-</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Tunggakan Pokok -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Tunggakan
                                                                                Pokok<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">-</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Tunggakan Bunga -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Tunggakan
                                                                                Bunga<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">-</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Rate Bunga -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Rate
                                                                                Bunga<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ $debitur->simulation->bunga_flat }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Jenis Bunga -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Jenis
                                                                                Bunga<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">Flat</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Tujuan Pinjaman -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Tujuan
                                                                                Pinjaman<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">Konsumtif</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <!-- Jabatan -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4"> Jabatan<span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">ACCOUNT
                                                                                OFFICER</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Jumlah Permohonan Kredit -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                    <div class="form-group">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text col-4">Plafond
                                                                                Yang Disetujui <span
                                                                                    style="color:red">*</span></span>
                                                                            <span
                                                                                class="form-control form-control-sm">{{ convertNumberFormat($debitur->jumlah_permohonan_kredit) }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Jangka Waktu -->
                                                                
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group ">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Jangka Waktu & Bunga 
                                                                            <span style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm">
                                                                            <div class="row">
                                                                            <div class="col-sm-5 text-center"> {{ $debitur->simulation->jangka_waktu }} </div>
                                                                            <div class="col-sm-2 text-center">|</div> 
                                                                            <div class="col-sm-5 text-center">{{$debitur->simulation->bunga_flat}}</div>
                                                                            </div>
                                                                        </span>
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

                                                            <!-- Tabungan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Tabungan <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm">{{ convertNumberFormat($debitur->simulation->tabungan_wajib) }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <!-- Retensi -->
                                                             <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Retensi <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm">1 x Angsuran</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <!-- Disposisi -->
                                                             <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Disposisi <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm">Sudah MOU / PKS perihal pemotongan gaji dan sudah mendapat persetujuan rekomendasi dari SDM/bag. Terkait.</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <!-- Nama Lengkap -->
                                                             <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Nama Lengkap <span
                                                                                style="color:red">*</span></span>
                                                                        <span
                                                                            class="form-control form-control-sm">Muhamad Aria Putra</span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card">
                                                            <div class="card-body">
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

        </div>

    </div><!-- end card-body -->
    </div><!-- end card -->
    </div><!-- end col -->
    </div><!-- end row -->
@endsection

@section('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
