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
                        <form method="POST" action="{{ url('/account_officers') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="nama" value="{{ old('nama') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                            </div>
                            
                
                            <div class="mb-3">
                                <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                                <select class="form-select" id="nama_dokumen" name="nama_dokumen" required>
                                    <option value="DATA CALON DEBITUR">DATA CALON DEBITUR</option>
                                    <option value="FORMULIR ANALISA KREDIT">FORMULIR ANALISA KREDIT</option>
                                    <option value="PERJANJIAN KREDIT">PERJANJIAN KREDIT</option>
                                    <option value="ANALISA KREDIT">ANALISA KREDIT</option>
                                </select>
                            </div>
                
                           
                
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ url('/account_officers') }}" class="btn btn-secondary">Batal</a>
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
   
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
