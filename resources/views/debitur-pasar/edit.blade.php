@extends('layouts.master')

@section('title')
    Data Debitur Pasar
@endsection

@section('css')
    <link href="{{ URL::asset('css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Debitur Pasar
        @endslot
        @slot('title')
            Edit Data Debitur Pasar
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit Data Debitur Pasar</h4>
                </div>

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('debitur-pasar.index') }}">
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

                        <form action="{{ route('debitur-pasar.update', $debitur->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="hidden" name="simulation_id" value="{{ old('simulation_id', $debitur->simulation_id) }}">

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
                                        <input type="text" name="permohonan_kredit" class="form-control"
                                            value="{{ old('permohonan_kredit', $debitur->permohonan_kredit) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Tanggal</span>
                                            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $debitur->tanggal) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- DATA PASAR -->
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">DATA NASABAH PASAR</h4>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-6">
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Nama</span>
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ old('nama', $debitur->nama) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Alamat Lengkap</span>
                                        <textarea name="alamat_lengkap" class="form-control" rows="3">{{ old('alamat_lengkap', $debitur->alamat_lengkap) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">No. KTP</span>
                                        <input type="text" name="no_ktp_sim" class="form-control"
                                            value="{{ old('no_ktp_sim', $debitur->no_ktp_sim) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Jenis Kelamin <span style="color:red">*</span></span>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm" required>
                                            @php $jk = old('jenis_kelamin', $debitur->jenis_kelamin); @endphp
                                            <option value="Laki-laki" {{ $jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Tempat Lahir</span>
                                        <input type="text" name="tempat_lahir" class="form-control"
                                            value="{{ old('tempat_lahir', $debitur->tempat_lahir) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Tanggal Lahir</span>
                                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $debitur->tanggal_lahir) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Status Perkawinan</span>
                                        <input type="text" name="status_perkawinan" class="form-control"
                                            value="{{ old('status_perkawinan', $debitur->status_perkawinan) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Status Rumah</span>
                                        <input type="text" name="status_rumah" class="form-control"
                                            value="{{ old('status_rumah', $debitur->status_rumah) }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Lama Menempati</span>
                                        <input type="text" name="lama_menempati" class="form-control"
                                            value="{{ old('lama_menempati', $debitur->lama_menempati) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">No. Telepon</span>
                                        <input type="text" name="no_telepon_pemohon" class="form-control"
                                            value="{{ old('no_telepon_pemohon', $debitur->no_telepon_pemohon) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Jumlah Tanggungan</span>
                                        <input type="number" name="jumlah_tanggungan" class="form-control"
                                            value="{{ old('jumlah_tanggungan', $debitur->jumlah_tanggungan) }}">
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
                                        <input type="text" name="agunan" class="form-control"
                                            value="{{ old('agunan', $debitur->agunan) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">No. Ijasah</span>
                                        <input type="text" name="no_sk" class="form-control"
                                            value="{{ old('no_ijasah', $debitur->no_ijasah) }}">
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
                                        <input type="text" name="nama_kontak_tidak_serumah" class="form-control"
                                            value="{{ old('nama_kontak_tidak_serumah', $debitur->nama_kontak_tidak_serumah) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Hubungan</span>
                                        <input type="text" name="hubungan" class="form-control"value="{{ old('hubungan', $debitur->hubungan) }}">    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Alamat</span>
                                        <input type="text" name="alamat_saudara" class="form-control"
                                            value="{{ old('alamat_saudara', $debitur->alamat_saudara ?? $debitur->alamat_saudara ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">No. Telepon</span>
                                        <textarea name="no_telepon_kontak_tidak_serumah" class="form-control" rows="2">{{ old('no_telepon_kontak_tidak_serumah', $debitur->no_telepon_kontak_tidak_serumah) }}</textarea>
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
                    <h4 class="card-title mb-0 flex-grow-1">DATA USAHA</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Nama Usaha</span>
                                        <input type="text" name="nama_perusahaan" class="form-control"
                                            value="{{ old('nama_usaha', $debitur->nama_usaha) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Bidang Usaha</span>
                                        <input type="text" name="bidang_usaha" class="form-control"
                                            value="{{ old('bidang_usaha', $debitur->bidang_usaha) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Alamat Usaha</span>
                                        <input type="text" name="alamat_usaha" class="form-control"
                                            value="{{ old('alamat_usaha', $debitur->alamat_usaha) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Lama Usaha</span>
                                        <input type="text" name="lama_usaha" class="form-control"
                                            value="{{ old('lama_usaha', $debitur->lama_usaha) }}">
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
                                        <input type="text" name="jumlah_permohonan_kredit" class="form-control"
                                            value="{{ old('jumlahPermohonan_kredit', $debitur->jumlah_permohonan_kredit) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Jangka Waktu</span>
                                        <input type="text" name="jangka_waktu" class="form-control"
                                            value="{{ old('jangka_waktu', $debitur->jangka_waktu) }}" placeholder="12">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Tujuan Penggunaan</span>
                                        <input type="text" name="tujuan_penggunaan" class="form-control"
                                            value="{{ old('tujuan_penggunaan', $debitur->tujuan_penggunaan) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Account Officer</span>
                                        @php $ao = old('account_officer', $debitur->account_officer); @endphp
                                        <select name="account_officer" class="form-control">
                                            <option value="">Pilih Account Officer</option>
                                            @foreach ($accountOfficers as $accountOfficer)
                                                <option value="{{ $accountOfficer->nama }}" {{ $ao == $accountOfficer->nama ? 'selected' : '' }}>
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
                                        <span class="input-group-text col-4">Besaran Gaji</span>
                                        <input type="text" name="pemohon" class="form-control"
                                         value="{{ old('besaran_gaji', $debitur->besaran_gaji) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text col-4">Angsuran</span>
                                        <input type="text" name="pemohon" class="form-control"
                                         value="{{ old('angsuran', $debitur->angsuran) }}">
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
@endsection

@section('script')
    <script src="{{ URL::asset('build/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/select2.min.js') }}"></script>
@endsection
