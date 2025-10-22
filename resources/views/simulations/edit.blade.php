@extends('layouts.master')

{{-- Dynamic title and breadcrumb based on the resource type --}}
@section('title')
    Add @lang('translation.' . $resource)
@endsection

@section('css')
    <link href="{{ URL::asset('css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            @lang('translation.' . $resource)
        @endslot
        @slot('title')
            Add @lang('translation.' . $resource)
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add @lang('translation.' . $resource)</h4>
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
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mb-xl-0" role="alert">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ route($route . '.update',$simulation->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                                            <input type="date" value="{{ old('tanggal_realisasi',$simulation->tanggal_realisasi) }}"
                                                                name="tanggal_realisasi" id="tanggal_realisasi"
                                                                class="form-control form-control-sm">
                                                            @error('tanggal_realisasi')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="nama" class="form-label">Nama <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('nama',$simulation->nama) }}" name="nama"
                                                                id="nama" class="form-control form-control-sm"
                                                                placeholder="Nama">
                                                            @error('nama')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="jenis_kredit" class="form-label">Jenis Kredit <span
                                                                    style="color:red">*</span></label>
                                                            <select id="jenis_kredit" name="jenis_kredit_display" class="form-control" disabled>
                                                                <option value="{{ $simulation->jenis_kredit }}" selected>{{ $simulation->jenis_kredit }}</option>
                                                            </select>
                                                            <input type="hidden" name="jenis_kredit" value="{{ $simulation->jenis_kredit }}">
                                                            <small class="text-muted">Jenis kredit tidak dapat diubah setelah dibuat</small>
                                                            @error('jenis_kredit')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="tanggal_lahir" class="form-label">Tanggal Bulan
                                                                Tahun Lahir <span style="color:red">*</span></label>
                                                            <input type="date" value="{{ old('tanggal_lahir',$simulation->tanggal_lahir) }}"
                                                                name="tanggal_lahir" id="tanggal_lahir"
                                                                class="form-control form-control-sm">
                                                            @error('tanggal_lahir')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="usia" class="form-label">Usia <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('usia',$simulation->usia) }}"
                                                                name="usia" id="usia"
                                                                class="form-control form-control-sm">
                                                            @error('usia')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="besaran_gaji" class="form-label">Besaran Gaji <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('besaran_gaji',number_format($simulation->besaran_gaji, 0, '.', '')) }}"
                                                                name="besaran_gaji" id="besaran_gaji"
                                                                class="form-control form-control-sm">
                                                            @error('besaran_gaji')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="dsr" class="form-label">DSR (%)<span
                                                                    style="color:red">*</span></label>
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" value="{{ $dsrValue }}"
                                                                    name="dsr" id="dsr"
                                                                    class="form-control form-control-sm">
                                                                <div class="input-group-sm">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>


                                                            @error('dsr')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="maksimal_angsuran" class="form-label">Maksimal
                                                                Angsuran <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('maksimal_angsuran',number_format($simulation->maksimal_angsuran, 0, '.', '')) }}"
                                                                name="maksimal_angsuran" id="maksimal_angsuran"
                                                                class="form-control form-control-sm">
                                                            @error('maksimal_angsuran')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="plafond" class="form-label">Plafond <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('plafond',number_format($simulation->plafond, 0, '.', '')) }}"
                                                                name="plafond" id="plafond"
                                                                class="form-control form-control-sm">
                                                            @error('plafond')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="jangka_waktu" class="form-label">Jangka Waktu
                                                                (Bulan)
                                                                <span style="color:red">*</span></label>
                                                            <select name="jangka_waktu" id="jangka_waktu"
                                                                class="form-control form-control-sm select2">
                                                                @for ($i = 1; $i <= 240; $i++)
                                                                    <option value="{{ $i }}"
                                                                        {{ $simulation->jangka_waktu == $i ? 'selected' : '' }}>
                                                                        {{ $i }} Bulan</option>
                                                                @endfor
                                                            </select>
                                                            @error('jangka_waktu')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="jatuh_tempo" class="form-label">Jatuh Tempo <span style="color:red">*</span></label>
                                                            <input type="date" value="{{ old('jatuh_tempo',$simulation->jatuh_tempo) }}"
                                                                name="jatuh_tempo" id="jatuh_tempo"
                                                                class="form-control form-control-sm">
                                                            @error('jatuh_tempo')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="bunga_flat" class="form-label">Bunga Flat (%)
                                                                <span style="color:red">*</span></label>


                                                            <div class="input-group input-group-sm">
                                                                <input type="text" value="{{ old('bunga_flat',$simulation->bunga_flat) }}"
                                                                    name="bunga_flat" id="bunga_flat"
                                                                    class="form-control form-control-sm">
                                                                <div class="input-group-sm">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>

                                                            @error('bunga_flat')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="bunga_effektif" class="form-label">Bunga Effektif
                                                                (%)
                                                                <span style="color:red">*</span></label>
                                                           

                                                                <div class="input-group input-group-sm">
                                                                    <input type="text" value="{{ old('bunga_effektif',$simulation->bunga_effektif) }}"
                                                                    name="bunga_effektif" id="bunga_effektif"
                                                                    class="form-control form-control-sm">
                                                                    <div class="input-group-sm">
                                                                        <span class="input-group-text">%</span>
                                                                    </div>
                                                                </div>
                                                            @error('bunga_effektif')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="angsuran" class="form-label">Angsuran <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('angsuran',number_format($simulation->angsuran, 0, '.', '')) }}"
                                                                name="angsuran" id="angsuran"
                                                                class="form-control form-control-sm">
                                                            @error('angsuran')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="sisa_gaji" class="form-label">Sisa Gaji <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('sisa_gaji',number_format($simulation->sisa_gaji, 0, '.', '')) }}"
                                                                name="sisa_gaji" id="sisa_gaji"
                                                                class="form-control form-control-sm">
                                                            @error('sisa_gaji')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=col-6>
                                                <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_notaris" class="form-label">Biaya Notaris
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('biaya_notaris',number_format($simulation->biaya_notaris, 0, '.', '')) }}"
                                                                name="biaya_notaris" id="biaya_notaris"
                                                                class="form-control form-control-sm">
                                                            @error('biaya_notaris')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_provisi" class="form-label">Biaya Provisi
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('biaya_provisi',number_format($simulation->biaya_provisi, 0, '.', '')) }}"
                                                                name="biaya_provisi" id="biaya_provisi"
                                                                class="form-control form-control-sm">
                                                            @error('biaya_provisi')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_administrasi" class="form-label">Biaya
                                                                Administrasi <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('biaya_administrasi',number_format($simulation->biaya_administrasi, 0, '.', '')) }}"
                                                                name="biaya_administrasi" id="biaya_administrasi"
                                                                class="form-control form-control-sm">
                                                            @error('biaya_administrasi')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_asuransi" class="form-label">Biaya Asuransi
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('biaya_asuransi',number_format($simulation->biaya_asuransi, 0, '.', '')) }}"
                                                                name="biaya_asuransi" id="biaya_asuransi"
                                                                class="form-control form-control-sm">
                                                            @error('biaya_asuransi')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="biaya_materai" class="form-label">Biaya Materai
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('biaya_materai',number_format($simulation->biaya_materai, 0, '.', '')) }}"
                                                                name="biaya_materai" id="biaya_materai"
                                                                class="form-control form-control-sm">
                                                            @error('biaya_materai')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="retensi" class="form-label">Retensi 1X <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('retensi',number_format($simulation->retensi, 0, '.', '')) }}"
                                                                name="retensi" id="retensi"
                                                                class="form-control form-control-sm">
                                                            @error('retensi')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="tabungan_wajib" class="form-label">Tabungan Wajib
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('tabungan_wajib',number_format($simulation->tabungan_wajib, 0, '.', '')) }}"
                                                                name="tabungan_wajib" id="tabungan_wajib"
                                                                class="form-control form-control-sm">
                                                            @error('tabungan_wajib')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="ass_krd" class="form-label">Asuransi Kredit <span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('ass_krd',number_format($simulation->ass_krd, 0, '.', '')) }}"
                                                                name="ass_krd" id="ass_krd"
                                                                class="form-control form-control-sm">
                                                            @error('ass_krd')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="bunga" class="form-label">Bunga </label>
                                                            <input type="text" value="{{ old('bunga',number_format($simulation->bunga, 0, '.', '')) }}"
                                                                name="bunga" id="bunga"
                                                                class="form-control form-control-sm">
                                                            @error('bunga')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="denda" class="form-label">Denda </label>
                                                            <input type="text" value="{{ old('denda',number_format($simulation->denda, 0, '.', '')) }}"
                                                                name="denda" id="denda"
                                                                class="form-control form-control-sm">
                                                            @error('denda')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="pinalty" class="form-label">Pinalty</label>
                                                            <input type="text" value="{{ old('pinalty',number_format($simulation->pinalty, 0, '.', '')) }}"
                                                                name="pinalty" id="pinalty"
                                                                class="form-control form-control-sm">
                                                            @error('pinalty')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 pt-3">
                                                        <div class="form-group">
                                                            <label for="total_diterima" class="form-label">Total Diterima
                                                                <span style="color:red">*</span></label>
                                                            <input type="text" value="{{ old('total_diterima',number_format($simulation->total_diterima, 0, '.', '')) }}"
                                                                name="total_diterima" id="total_diterima"
                                                                class="form-control form-control-sm">
                                                            @error('total_diterima')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                                </div>
                                                            @enderror
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
                                                                        <input type="text" value="{{ old('rate_asuransi',$simulation->rate_asuransi) }}"
                                                                    name="rate_asuransi" id="rate_asuransi"
                                                                    class="form-control form-control-sm">
                                                                        <div class="input-group-sm">
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                @error('rate_asuransi')
                                                                    <div class="alert alert-danger mt-1 mb-1">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
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
@endsection

@section('script')
    <script src="{{ URL::asset('build/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ URL::asset('build/libs/cleave.js/cleave.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            $('#tanggal_realisasi').change(function() {

                var tanggalRealisasi1 = $(this).val();

                $('#mulai_asuransi').val(tanggalRealisasi1);
                var tanggalRealisasi = new Date($(this).val());

                tanggalRealisasi.setMonth(tanggalRealisasi.getMonth() + 1);

                // Format tanggal ke format yang sesuai untuk input[type=date] (yyyy-MM-dd)
                var tahun = tanggalRealisasi.getFullYear();
                var bulan = ('0' + (tanggalRealisasi.getMonth() + 1)).slice(-2); // Tambah 1 karena getMonth() dimulai dari 0
                var hari = ('0' + tanggalRealisasi.getDate()).slice(-2);
                var tanggalJatuhTempoFormatted = tahun + '-' + bulan + '-' + hari;

                // Set nilai ke input tanggal jatuh tempo
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
                var age = today.getFullYear() - tanggalLahir.getFullYear();

                // Check if birthday has occurred this year
                if (today.getMonth() < tanggalLahir.getMonth() || (today.getMonth() === tanggalLahir
                        .getMonth() && today.getDate() < tanggalLahir.getDate())) {
                    age--;
                }

                $('#usia').val(age);


            });
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
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var angsuran = new Cleave('#angsuran', {
                // numeral: true,
                // delimiter: '.',
                // numeralDecimalMark: ',',
                // numeralPositiveOnly: true,
                // numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                // prefix: '',
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var sisa_gaji = new Cleave('#sisa_gaji', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });
            var biaya_notaris = new Cleave('#biaya_notaris', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });


            var biaya_provisi = new Cleave('#biaya_provisi', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var biaya_administrasi = new Cleave('#biaya_administrasi', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var biaya_asuransi = new Cleave('#biaya_asuransi', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var biaya_materai = new Cleave('#biaya_materai', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var retensi = new Cleave('#retensi', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var tabungan_wajib = new Cleave('#tabungan_wajib', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var rate_asuransi = new Cleave('#rate_asuransi', {
                numeral: true,
                //delimiter: '.',
                numeralDecimalMark: '.',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var ass_krd = new Cleave('#ass_krd', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var bunga = new Cleave('#bunga', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var denda = new Cleave('#denda', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var pinalty = new Cleave('#pinalty', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
                prefix: '',
            });

            var total_diterima = new Cleave('#total_diterima', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralPositiveOnly: true,
                numeralDecimalScale: 2, // Menambahkan 2 digit desimal
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
                var interestRate = parseFloat(bungaEffektif / 12 / 100); // Tingkat bunga per periode
                var numberOfPeriods = parseFloat(jangkaWaktu); // Jumlah periode
                var loanAmount = plafond_input * -1; // Nilai sekarang atau pinjaman
                var futureValue = 0; // Nilai di masa depan, default 0
                var paymentType = 0; // Tipe pembayaran, 0 = awal periode, 1 = akhir periode, default 0


                var monthlyPayment = PMT(interestRate, numberOfPeriods, loanAmount, futureValue,
                    paymentType);

                var sisaGaji = besaranGaji - monthlyPayment;
                var biayanotaris = biaya_notaris.getRawValue() || 0;
                var biayaProvisi = plafond_input * parseFloat('{{ $biaya_provisiValue }}');
                var biayaAdministrasi = plafond_input * parseFloat('{{ $biaya_administrasiValue }}');



                var rateAsuransiPromise = get_asuransi_rate(parseFloat(jangkaWaktu), parseFloat(usia));

                rateAsuransiPromise.then(function(rate) {
                    rateAsuransi = rate;
                    console.log("rateAsuransi:" + rate);
                });

                var biayaAsuransi = plafond_input / 1000 * rateAsuransi;
                //var biayaAsuransi = biaya_asuransi.getRawValue() || 0;
                var biayaMaterai = parseFloat('{{ $biaya_materaiValue }}');
                var tabunganWajib = parseFloat('{{ $tabungan_wajibValue }}');
                var assKdr = parseFloat('{{ $ass_krdValue }}');
                var bunga_input = bunga.getRawValue() || 0;
                var denda_input = denda.getRawValue() || 0;
                var pinalty_input = pinalty.getRawValue() || 0;
                var totalDiterima = plafond_input - biayaProvisi - biayanotaris - biayaAdministrasi - biayaAsuransi -
                    biayaMaterai - monthlyPayment - tabunganWajib - assKdr - bunga_input - denda_input -
                    pinalty_input;
                if (!isNaN(bungaEffektif)) {
                    // Set nilai pada field bunga_effektif
                    $('#bunga_effektif').val(Math.abs(bungaEffektif).toFixed(2));
                    angsuran.setRawValue(Math.abs(monthlyPayment).toFixed(2));
                    sisa_gaji.setRawValue(Math.abs(sisaGaji).toFixed(2));
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
                    // Handle kasus jika hasilnya bukan angka
                    console.error('Hasil bungaEffektif bukan angka:', bungaEffektif);
                    // Anda dapat memberikan pesan kesalahan atau melakukan tindakan lainnya sesuai kebutuhan
                }
            });

            // Fungsi untuk menghitung rumus RATE
            function calculateRate(plafond, jangkaWaktu, bungaFlat) {
                var plafond = parseFloat(plafond);
                var jangkaWaktu = parseFloat(jangkaWaktu);
                var bungaFlat = parseFloat(bungaFlat);
                var payment = ((plafond * (bungaFlat / 12) * jangkaWaktu) + plafond) / jangkaWaktu;

                return Math.abs(parseFloat((RATE(jangkaWaktu, payment, -plafond, 0, 0)) * 12) * 100);
            }

            // Fungsi RATE yang mensimulasikan rumus RATE Excel
            function RATE(periods, payment, present, future, type, guess) {
                guess = (guess === undefined) ? 0.01 : guess;
                future = (future === undefined) ? 0 : future;
                type = (type === undefined) ? 0 : type;

                // Set maximum epsilon for end of iteration
                var epsMax = 1e-10;

                // Set maximum number of iterations
                var iterMax = 10;

                // Implement Newton's method
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
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
