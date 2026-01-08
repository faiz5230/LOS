@extends('layouts.master')

@section('title')
    Data Debitur Pensiun
@endsection

@section('css')
    <link href="{{ URL::asset('css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Debitur Pensiun
        @endslot
        @slot('title')
            Tambah Data Debitur Pensiun
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Tambah Data Debitur Pensiun</h4>
                </div>

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('simulations.index', ['jenis_kredit' => 'Pensiun']) }}">
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

                        <form action="{{ route('debitur-pensiun.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="simulation_id" value="{{ $simulation->id ?? request('simulation_id') }}">

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
                                                                <input type="text" name="permohonan_kredit" class="form-control" value="{{ old('permohonan_kredit', $simulation->jenis_kredit ?? '') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tanggal</span>
                                                                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $simulation->tanggal_realisasi ?? '') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DATA PENSIUN -->
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">DATA PENSIUN</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Pensiun</span>
                                                                <input type="text" name="nama_pensiun" class="form-control" value="{{ old('nama_pensiun', $simulation->nama ?? '')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Bidang Usaha</span>
                                                                <input type="text" name="bidang_usaha_perusahaan" class="form-control" value="{{ old('bidang_usaha_perusahaan') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">NIB</span>
                                                                <input type="text" name="nib" class="form-control" value="{{ old('nib') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Akte Pendirian</span>
                                                                <input type="text" name="akte_pendirian" class="form-control" value="{{ old('akte_pendirian') }}">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat Lengkap</span>
                                                                <textarea name="alamat_lengkap" class="form-control" rows="3">{{ old('alamat_lengkap') }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. KTP</span>
                                                                <input type="text" name="no_ktp_sim" class="form-control" value="{{ old('no_ktp_sim') }}">
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                @error('jenis_kelamin')
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
                                                                <span class="input-group-text col-4">Tempat Lahir</span>
                                                                <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tanggal Lahir</span>
                                                                <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $simulation->tanggal_lahir ?? '') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. Telepon</span>
                                                                <input type="text" name="no_telepon_pemohon" class="form-control" value="{{ old('no_telepon_pemohon') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Jumlah Tanggungan</span>
                                                                <input type="number" name="jumlah_tanggungan" class="form-control" value="{{ old('jumlah_tanggungan') }}">
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
                                                                <input type="text" name="agunan" class="form-control" value="{{ old('agunan') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">SK. Pensiun</span>
                                                                <input type="text" name="no_sk" class="form-control" value="{{ old('no_sk') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Atas Nama Agunan</span>
                                                                <input type="text" name="atas_nama_agunan" class="form-control" value="{{ old('atas_nama_agunan', $simulation->nama ?? '') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DATA SAUDARA YANG TIDAK SERUMAH -->
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">DATA SAUDARA YANG TIDAK SERUMAH</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama</span>
                                                                <input type="text" name="nama_kontak_tidak_serumah" class="form-control" value="{{ old('nama_kontak_tidak_serumah', $simulation->nama_kontak_tidak_serumah ?? '') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Hubungan</span>
                                                                <input type="text" name="hubungan" class="form-control" value="{{ old('hubungan') }}">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Alamat</span>
                                                                <input type="text" name="alamat_saudara" class="form-control" value="{{ old('alamat_saudara') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Nama Perusahaan</span>
                                                                <input type="text" name="nama_perusahaan" class="form-control" value="{{ old('nama_perusahaan') }}">
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. Telepon</span>
                                                                <textarea name="no_telepon_kontak_tidak_serumah" class="form-control" rows="2">{{ old('no_telepon_kontak_tidak_serumah') }}</textarea>
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
                                                                <input type="text" name="nama_perusahaan" class="form-control" value="{{ old('nama_perusahaan') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="col-6">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Bidang Usaha</span>
                                                                <input type="text" name="bidang_usaha" class="form-control" value="{{ old('bidang_usaha') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">NPWP</span>
                                                                <input type="text" name="npwp_usaha" class="form-control" value="{{ old('npwp_usaha') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">No. Telepon</span>
                                                                <input type="text" name="no_telepon_usaha" class="form-control" value="{{ old('no_telepon_usaha') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
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
                                                                <input type="text" name="jumlah_permohonan_kredit" class="form-control" value="{{ old('jumlah_permohonan_kredit', isset($simulation) ? number_format($simulation->plafond, 0, ',', '.') : '') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Jangka Waktu</span>
                                                                <input type="text" name="jangka_waktu" class="form-control" value="{{ old('jangka_waktu', isset($simulation) ? $simulation->jangka_waktu . ' Bulan' : '') }}" placeholder="12 Bulan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Tujuan Penggunaan</span>
                                                                <input type="text" name="tujuan_penggunaan" class="form-control" value="{{ old('tujuan_penggunaan', 'Modal Kerja') }}">
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
                                                                    @foreach ($accountOfficers as $accountOfficer)
                                                                        <option value="{{ $accountOfficer->nama }}" {{ old('account_officer') == $accountOfficer->nama ? 'selected' : '' }}>
                                                                            {{ $accountOfficer->nama }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text col-4">Pemohon</span>
                                                                <input type="text" name="nama_pensiun" class="form-control" value="{{ old('nama_pensiun', $simulation->nama ?? '')}}">
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
                                                    <i data-feather="save"></i> Simpan Data
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
@endsection

@section('script')
    <script src="{{ URL::asset('build/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/select2.min.js') }}"></script>
@endsection
