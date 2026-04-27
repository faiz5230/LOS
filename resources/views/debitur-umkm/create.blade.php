@extends('layouts.master')
@php
$sim = $simulation ?? \App\Models\Simulation::find(request()->route('id') ?? request()->route('simulation_id') ?? request('simulation_id'));
@endphp
@section('title')
    Data Debitur UMKM
@endsection

@section('css')
    <link href="{{ URL::asset('css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Debitur UMKM
        @endslot
        @slot('title')
            Tambah Data Debitur UMKM
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Tambah Data Debitur UMKM</h4>
                </div>

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('simulations.index', ['jenis_kredit' => 'UMKM']) }}">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>
                    </div>

                    <div class="live-preview">
                        @if (session('status'))
                            <div class="alert alert-success mb-1 mt-1">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mb-xl-0" role="alert">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('debitur-umkm.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id_simulation" id="id_simulation" value="{{ $simulation->id }}" />

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">

                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">DATA PRIBADI</h4>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" value="{{ date('Y-m-d') }}"
                                                        name="tanggal" id="tanggal"
                                                        class="form-control form-control-sm" required>

                                                    <!-- Nama -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('nama', $simulation->nama) }}"
                                                                    name="nama" id="nama"
                                                                    class="form-control" required>
                                                            </div>
                                                            @error('nama')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Jenis Kelamin -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Jenis Kelamin <span style="color:red">*</span></span>
                                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm" required>
                                                                    <option value="Laki-laki" {{ old('jenis_kelamin', $simulation->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                                    <option value="Perempuan" {{ old('jenis_kelamin', $simulation->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                                </select>
                                                            </div>
                                                            @error('jenis_kelamin')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- No KTP/SIM -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No KTP/SIM <span style="color:red">*</span></span>
                                                                <input type="number" value="{{ old('no_ktp_sim', $simulation->no_ktp_sim) }}"
                                                                    name="no_ktp_sim" id="no_ktp_sim"
                                                                    class="form-control form-control-sm" max="9999999999999999"
                                                                    onKeyPress="if( this.value.length == 16 ) return false;" required>
                                                            </div>
                                                            @error('no_ktp_sim')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Masa Berlaku -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Masa Berlaku <span style="color:red">*</span></span>
                                                                <input type="date" value="{{ old('masa_berlaku', $simulation->masa_berlaku) }}"
                                                                    name="masa_berlaku" id="masa_berlaku"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('masa_berlaku')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Alamat Lengkap -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat Lengkap <span style="color:red">*</span></span>
                                                                <textarea name="alamat_lengkap" id="alamat_lengkap" class="form-control form-control-sm" required>{{ old('alamat_lengkap', $simulation->alamat_lengkap) }}</textarea>
                                                            </div>
                                                            @error('alamat_lengkap')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Tempat Lahir -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tempat Lahir <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('tempat_lahir', $simulation->tempat_lahir) }}"
                                                                    name="tempat_lahir" id="tempat_lahir"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('tempat_lahir')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Tanggal Lahir -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tanggal Lahir <span style="color:red">*</span></span>
                                                                <input type="date" value="{{ old('tanggal_lahir', $simulation->tanggal_lahir) }}"
                                                                    name="tanggal_lahir" id="tanggal_lahir"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('tanggal_lahir')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Pendidikan Terakhir -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pendidikan Terakhir <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('pendidikan_terakhir', $simulation->pendidikan_terakhir) }}"
                                                                    name="pendidikan_terakhir" id="pendidikan_terakhir"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('pendidikan_terakhir')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Status Rumah -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Status Rumah <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('status_rumah', $simulation->status_rumah) }}"
                                                                    name="status_rumah" id="status_rumah"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('status_rumah')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Lama Menempati -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Lama Menempati <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('lama_menempati', $simulation->lama_menempati) }}"
                                                                    name="lama_menempati" id="lama_menempati"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('lama_menempati')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Status Perkawinan -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Status Perkawinan <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('status_perkawinan', $simulation->status_perkawinan) }}"
                                                                    name="status_perkawinan" id="status_perkawinan"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('status_perkawinan')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Nama Ibu Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Ibu Kandung <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('nama_ibu_kandung', $simulation->nama_ibu_kandung) }}"
                                                                    name="nama_ibu_kandung" id="nama_ibu_kandung"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('nama_ibu_kandung')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Pekerjaan Ibu Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pekerjaan Ibu Kandung <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('pekerjaan_ibu_kandung', $simulation->pekerjaan_ibu_kandung) }}"
                                                                    name="pekerjaan_ibu_kandung" id="pekerjaan_ibu_kandung"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('pekerjaan_ibu_kandung')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Nama Ayah Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Ayah Kandung <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('nama_ayah_kandung', $simulation->nama_ayah_kandung) }}"
                                                                    name="nama_ayah_kandung" id="nama_ayah_kandung"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('nama_ayah_kandung')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Pekerjaan Ayah Kandung -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pekerjaan Ayah Kandung <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('pekerjaan_ayah_kandung', $simulation->pekerjaan_ayah_kandung) }}"
                                                                    name="pekerjaan_ayah_kandung" id="pekerjaan_ayah_kandung"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('pekerjaan_ayah_kandung')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- No Telepon Pemohon -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No Telepon Pemohon <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('no_telepon_pemohon', $simulation->no_telepon_pemohon) }}"
                                                                    name="no_telepon_pemohon" id="no_telepon_pemohon"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('no_telepon_pemohon')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="card-header align-items-center d-flex">
                                                        <h4 class="card-title mb-0 flex-grow-1">Data Agunan</h4>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- Agunan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Agunan <span style="color:red">*</span></span>
                                                                        <input type="text" value="{{ old('agunan', $simulation->agunan) }}"
                                                                            name="agunan" id="agunan"
                                                                            class="form-control form-control-sm" required>
                                                                    </div>
                                                                    @error('agunan')
                                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <!-- No Ijasah -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">No Ijasah <span style="color:red">*</span></span>
                                                                        <input type="text" value="{{ old('no_ijasah', $simulation->no_ijasah) }}"
                                                                            name="no_ijasah" id="no_ijasah"
                                                                            class="form-control form-control-sm" required>
                                                                    </div>
                                                                    @error('no_ijasah')
                                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-header align-items-center d-flex pt-4">
                                                        <h4 class="card-title mb-0 flex-grow-1 pt-5">Data Pasangan</h4>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- Nama Pasangan -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Nama Istri/Suami</span>
                                                                        <input type="text" value="{{ old('nama_pasangan', $simulation->nama_pasangan) }}"
                                                                            name="nama_pasangan" id="nama_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                    </div>
                                                                    @error('nama_pasangan')
                                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Tempat Lahir
                                                                            </span>
                                                                        <input type="text"
                                                                            value="{{ old('tempat_lahir_pasangan') }}"
                                                                            name="tempat_lahir_pasangan"
                                                                            id="tempat_lahir_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        @error('tempat_lahir_pasangan')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Tanggal Lahir
                                                                            </span>
                                                                        <input type="date"
                                                                            value="{{ old('tanggal_lahir_pasangan') }}"
                                                                            name="tanggal_lahir_pasangan"
                                                                            id="tanggal_lahir_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        @error('tanggal_lahir_pasangan')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Jumlah
                                                                            Tanggungan
                                                                            </span>
                                                                        <input type="number"
                                                                            value="{{ old('jumlah_tanggungan') }}"
                                                                            name="jumlah_tanggungan"
                                                                            id="jumlah_tanggungan"
                                                                            class="form-control form-control-sm" required>
                                                                        @error('jumlah_tanggungan')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Pekerjaan
                                                                            Pasangan </span>
                                                                        <input type="text"
                                                                            value="{{ old('pekerjaan_pasangan') }}"
                                                                            name="pekerjaan_pasangan"
                                                                            id="pekerjaan_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        @error('pekerjaan_pasangan')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Nama
                                                                            Perusahaan
                                                                            </span>
                                                                        <input type="text"
                                                                            value="{{ old('nama_perusahaan_pasangan') }}"
                                                                            name="nama_perusahaan_pasangan"
                                                                            id="nama_perusahaan_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        @error('nama_perusahaan_pasangan')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Alamat Perusahaan Pasangan (FIX old + value) -->
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Alamat Perusahaan Pasangan</span>
                                                                        <textarea name="alamat_perusahaan_pasangan" id="alamat_perusahaan_pasangan"
                                                                            class="form-control form-control-sm" required>{{ old('alamat_perusahaan_pasangan', $simulation->alamat_perusahaan_pasangan) }}</textarea>
                                                                    </div>
                                                                    @error('alamat_perusahaan_pasangan')
                                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">Lama Bekerja
                                                                            </span>
                                                                        <input type="text"
                                                                            value="{{ old('lama_bekerja_pasangan') }}"
                                                                            name="lama_bekerja_pasangan"
                                                                            id="lama_bekerja_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        @error('lama_bekerja_pasangan')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                                <div class="form-group">
                                                                     <div class="input-group input-group-sm">
                                                                        <span class="input-group-text col-4">No Telepon
                                                                            </span>
                                                                        <input type="text"
                                                                            value="{{ old('no_telepon_pasangan') }}"
                                                                            name="no_telepon_pasangan"
                                                                            id="no_telepon_pasangan"
                                                                            class="form-control form-control-sm" required>
                                                                        @error('no_telepon_pasangan')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">KONTAK DAN ALAMAT TIDAK SERUMAH</h4>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- Nama Kontak Tidak Serumah -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Kontak Tidak Serumah <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('nama_kontak_tidak_serumah', $simulation->nama_kontak_tidak_serumah) }}"
                                                                    name="nama_kontak_tidak_serumah" id="nama_kontak_tidak_serumah"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('nama_kontak_tidak_serumah')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Hubungan -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Hubungan <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('hubungan', $simulation->hubungan) }}"
                                                                    name="hubungan" id="hubungan"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('hubungan')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Alamat Saudara (FIX error key!) -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat <span style="color:red">*</span></span>
                                                                <textarea name="alamat_saudara" id="alamat_saudara" class="form-control form-control-sm">{{ old('alamat_saudara', $simulation->alamat_saudara) }}</textarea>
                                                            </div>
                                                            @error('alamat_saudara')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- No Telepon Kontak -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No Telepon <span style="color:red">*</span></span>
                                                                <input type="text" value="{{ old('no_telepon_kontak_tidak_serumah', $simulation->no_telepon_kontak_tidak_serumah) }}"
                                                                    name="no_telepon_kontak_tidak_serumah" id="no_telepon_kontak_tidak_serumah"
                                                                    class="form-control form-control-sm" required>
                                                            </div>
                                                            @error('no_telepon_kontak_tidak_serumah')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">DATA PEKERJAAN CALON DEBITUR UMKM</h4>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- Nama Perusahaan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Perusahaan</span>
                                                                <input type="text" name="nama_usaha" class="form-control" value="{{ old('nama_usaha') }}">
                                                                </div>
                                                                @error('nama_usaha')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <!-- Alamat Perusahaan (JANGAN DIHILANGKAN) -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Alamat Perusahaan <span style="color:red">*</span></span>
                                                                    <textarea name="alamat_perusahaan" id="alamat_perusahaan" class="form-control form-control-sm" required>{{ old('alamat_perusahaan', $simulation->alamat_perusahaan) }}</textarea>
                                                                </div>
                                                                @error('alamat_perusahaan')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <!-- Lama Bekerja -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Lama Bekerja <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('lama_bekerja', $simulation->lama_bekerja) }}"
                                                                        name="lama_bekerja" id="lama_bekerja"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('lama_bekerja')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <!-- No ID Pegawai -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">No ID Pegawai <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('no_id_pegawai', $simulation->no_id_pegawai) }}"
                                                                        name="no_id_pegawai" id="no_id_pegawai"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('no_id_pegawai')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <!-- Bidang Usaha -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Bidang Usaha <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('bidang_usaha', $simulation->bidang_usaha) }}"
                                                                        name="bidang_usaha" id="bidang_usaha"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('bidang_usaha')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <!-- Jabatan -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Jabatan <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('jabatan', $simulation->jabatan) }}"
                                                                        name="jabatan" id="jabatan"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('jabatan')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <!-- No Telepon -->
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">No Telepon <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('no_telepon', $simulation->no_telepon) }}"
                                                                        name="no_telepon" id="no_telepon"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('no_telepon')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">PERMOHONAN KREDIT</h4>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Jumlah Permohonan Kredit <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('jumlah_permohonan_kredit', convertNumberFormat($simulation->plafond)) }}"
                                                                        name="jumlah_permohonan_kredit" id="jumlah_permohonan_kredit"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('jumlah_permohonan_kredit')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Jangka Waktu <span style="color:red">*</span></span>
                                                                    <input type="number" value="{{ old('jangka_waktu', $simulation->jangka_waktu) }}"
                                                                        name="jangka_waktu" id="jangka_waktu"
                                                                        class="form-control form-control-sm" required>
                                                                    <span class="input-group-text col-1">Bulan</span>
                                                                </div>
                                                                @error('jangka_waktu')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Tujuan Penggunaan <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('tujuan_penggunaan', $simulation->tujuan_penggunaan) }}"
                                                                        name="tujuan_penggunaan" id="tujuan_penggunaan"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('tujuan_penggunaan')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Account Officer</span>
                                                                <select name="account_officer" class="form-control">
                                                                    <option value="">Pilih Account Officer</option>
                                                                    @foreach ($accountOfficers as $accountOfficer)
                                                                        <option value="{{ $accountOfficer->nama }}" {{ old('account_officer') == $accountOfficer->nama ? 'selected' : '' }}>
                                                                            {{ $accountOfficer->nama }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    </div>

                                                    <div class="col-6">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Besaran Gaji <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('besaran_gaji', convertNumberFormat($simulation->besaran_gaji)) }}"
                                                                        name="besaran_gaji" id="besaran_gaji"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('besaran_gaji')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">DSR (%) <span style="color:red">*</span></span>
                                                                    <input type="number" value="{{ old('dsr', $simulation->dsr) }}"
                                                                        name="dsr" id="dsr"
                                                                        class="form-control form-control-sm" required>
                                                                    <span class="input-group-text col-1">%</span>
                                                                </div>
                                                                @error('dsr')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                            <div class="form-group">
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-text col-4">Angsuran <span style="color:red">*</span></span>
                                                                    <input type="text" value="{{ old('angsuran', convertNumberFormat($simulation->angsuran)) }}"
                                                                        name="angsuran" id="angsuran"
                                                                        class="form-control form-control-sm" required>
                                                                </div>
                                                                @error('angsuran')
                                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <input type="hidden" name="redirect_to_umkm" value="1">

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
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('build/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/cleave.js/cleave.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
