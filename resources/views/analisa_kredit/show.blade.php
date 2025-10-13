@extends('layouts.master')

{{-- Dynamic title based on the resource being shown --}}
@section('title') Show @lang('translation.' . $resource) @endsection

@section('css')
@endsection

@section('content')

@component('components.breadcrumb')
    @slot('li_1') @lang('translation.' . $resource) @endslot
    @slot('title') Show @lang('translation.' . $resource) @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Show @lang('translation.' . $resource)</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route($route . '.index') }}"> <i data-feather="arrow-left"></i> Kembali</a>
                    
                </div> 
                
                <div class="live-preview">
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
                @endif
                
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="table-card">
                                    <table class="table table-bordered table-sm">
                                        <tbody>
                                            <tr>
                                                <th>NIK</th>
                                                <td>{{ $user->nik }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>{{ $user->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jabatan</th>
                                                <td>{{ $user->jabatan }}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table><!--end table-->
                                    <!--end table-->
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
