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
                    @if($simulation->jenis_kredit == 'Modal Kerja')
                        <a class="btn btn-primary" href="{{ route('debitur-modal-kerja.create', ['simulation_id' => $simulation->id]) }}"> <i data-feather="plus-square"></i> Buat Data Debitur Modal Kerja</a>
                    @elseif($simulation->jenis_kredit == 'Pensiun')
                        <a class="btn btn-primary" href="{{ route('debitur-pensiun.create', ['simulation_id' => $simulation->id]) }}"><i data-feather="plus-square"></i> Buat Data Debitur Pensiun</a>
                    @else
                        <a class="btn btn-primary" href="{{ route('debiturs_simulation',[$simulation->id]) }}"> <i data-feather="plus-square"></i> Buat Data Debitur</a>
                    @endif
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
                                                <th>ID</th>
                                                <td>{{ $simulation->id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Realisasi</th>
                                                <td>{{ $simulation->tanggal_realisasi }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <td>{{ $simulation->nama }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kredit</th>
                                                <td>{{ $simulation->jenis_kredit }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td>{{ $simulation->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <th>Usia</th>
                                                <td>{{ $simulation->usia }}</td>
                                            </tr>
                                            <tr>
                                                <th>Besaran Gaji</th>
                                                <td>{{ convertNumberFormat($simulation->besaran_gaji) }}</td>
                                            </tr>
                                            <tr>
                                                <th>DSR</th>
                                                <td>{{ $simulation->dsr }} %</th>
                                            </tr>
                                            <tr>
                                                <th>Maksimal Angsuran</th>
                                                <td>{{ convertNumberFormat($simulation->maksimal_angsuran) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Plafond</th>
                                                <td>{{ convertNumberFormat($simulation->plafond) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jangka Waktu</th>
                                                <td>{{$simulation->jangka_waktu }} Bulan</td>
                                            </tr>
                                            <!--<tr>
                                                <th>Jatuh Tempo</th>
                                                <td>{{$simulation->jatuh_tempo}}</td>
                                            </tr>-->
                                            <tr>
                                                <th>Bunga Flat</th>
                                                <td>{{ $simulation->bunga_flat }} %</td>
                                            </tr>
                                            <tr>
                                                <th>Bunga Efektif</th>
                                                <td>{{ $simulation->bunga_effektif }} %</td>
                                            </tr>
                                            <tr>
                                                <th>Angsuran</th>
                                                <td>{{ convertNumberFormat($simulation->angsuran) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sisa Gaji</th>
                                                <td>{{ convertNumberFormat($simulation->sisa_gaji) }}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table><!--end table-->
                                    <!--end table-->
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="table-card">
                                    <table class="table table-bordered table-sm">
                                        <tbody>
                                            <tr>
                                                <th>Biaya Provisi</th>
                                                <td>{{ convertNumberFormat($simulation->biaya_provisi) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Notaris</th>
                                                <td>{{ convertNumberFormat($simulation->biaya_notaris) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Administrasi</th>
                                                <td>{{ convertNumberFormat($simulation->biaya_administrasi) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Asuransi</th>
                                                <td>{{ convertNumberFormat($simulation->biaya_asuransi) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Materai</th>
                                                <td>{{ convertNumberFormat($simulation->biaya_materai) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Retensi</th>
                                                <td>{{ convertNumberFormat($simulation->retensi) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tabungan Wajib</th>
                                                <td>{{ convertNumberFormat($simulation->tabungan_wajib) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Rate Asuransi</th>
                                                <td>{{ $simulation->rate_asuransi }} %</td>
                                            </tr>
                                            <tr>
                                                <th>Ass KRD</th>
                                                <td>{{ convertNumberFormat($simulation->ass_krd) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Bunga</th>
                                                <td>{{ convertNumberFormat($simulation->bunga) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Denda</th>
                                                <td>{{ convertNumberFormat($simulation->denda) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pinalty</th>
                                                <td>{{ convertNumberFormat($simulation->pinalty) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Total Diterima</th>
                                                <td>{{ convertNumberFormat($simulation->total_diterima) }}</td>
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
