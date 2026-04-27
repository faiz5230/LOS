@extends('layouts.master')

@section('title')
    Detail Debitur Pasar
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Debitur Pasar
        @endslot
        @slot('title')
            Detail Data Debitur Pasar
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Data Debitur Pasar</h4>
                </div>

                <div class="card-body">

                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <a class="btn btn-success" href="{{ route('debitur-pasar.index') }}">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>

                        <a class="btn btn-primary" href="{{ route('debitur-pasar.export', $debitur->id) }}">
                            <i data-feather="download"></i> Download Excel
                        </a>

                        <a href="{{ route('debitur-pasar.export.memo_kredit', $debitur->id) }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Memo Droping
                        </a>

                        <a href="{{ route('debitur-pasar.export.sppk', $debitur->id) }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Export SPPK
                        </a>

                        <a href="{{ route('debitur-pasar.export.sttu', $debitur->id) }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Export STTU
                        </a>

                        <a href="{{ route('debitur-pasar.export.pk_snd_sim', $debitur->id) }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> PK Sendiri
                        </a>

                        <a href="{{ route('debitur-pasar.export.memo_fasilitas_kredit', $debitur->id) }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Memo Fasilitas Kredit
                        </a>

                        <a href="{{ route('debitur-pasar.export.mcc', $debitur->id) }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> MCC
                        </a>

                        <a href="{{ route('debitur-pasar.export.tanda_terima', $debitur->id) }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Tanda Terima
                        </a>

                        <a class="btn btn-warning" href="{{ route('debitur-pasar.edit', $debitur->id) }}">
                            <i data-feather="edit"></i> Edit
                        </a>
                    </div>

                    <div class="live-preview">

                        {{-- DATA DEBITUR PASAR --}}
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA DEBITUR PASAR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Nama Nasabah</strong></td>
                                                <td>: {{ $debitur->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Lengkap</strong></td>
                                                <td>: {{ $debitur->alamat_lengkap }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telp Pemohon</strong></td>
                                                <td>: {{ $debitur->no_telepon_pemohon }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No KTP/SIM</strong></td>
                                                <td>: {{ $debitur->no_ktp_sim }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tempat Lahir</strong></td>
                                                <td>: {{ $debitur->tempat_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tanggal Lahir</strong></td>
                                                <td>: {{ $debitur->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Jumlah Tanggungan</strong></td>
                                                <td>: {{ $debitur->jumlah_tanggungan }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <h6 class="mb-3"><strong>Data Agunan</strong></h6>
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Agunan</strong></td>
                                                <td>: {{ $debitur->agunan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Ijasah</strong></td>
                                                <td>: {{ $debitur->no_ijasah }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- DATA SAUDARA TIDAK SERUMAH --}}
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA SAUDARA TIDAK SERUMAH</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Nama</strong></td>
                                                <td>: {{ $debitur->nama_kontak_tidak_serumah }}</td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><strong>Hubungan</strong></td>
                                                <td>: {{ $debitur->hubungan }}</td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><strong>Alamat</strong></td>
                                                {{-- FIX: sebelumnya alamat_saudara, padahal field yang kamu isi di controller = alamat --}}
                                                <td>: {{ $debitur->alamat_saudara }}</td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><strong>No. Telepon</strong></td>
                                                <td>: {{ $debitur->no_telepon_kontak_tidak_serumah }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- DATA USAHA CALON DEBITUR --}}
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA USAHA CALON DEBITUR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            {{-- FIX: pakai nama_perusahaan/alamat_perusahaan/lama_bekerja sesuai mapping di controller --}}
                                            <tr>
                                                <td width="40%"><strong>Nama Usaha/Perusahaan</strong></td>
                                                <td>: {{ $debitur->nama_usaha }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Usaha</strong></td>
                                                <td>: {{ $debitur->alamat_usaha }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Lama Usaha</strong></td>
                                                <td>: {{ $debitur->lama_usaha }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Bidang Usaha</strong></td>
                                                <td>: {{ $debitur->bidang_usaha }}</td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><strong>No. Telepon Usaha</strong></td>
                                                <td>: {{ $debitur->no_telepon_pemohon }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- PERMOHONAN KREDIT --}}
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">PERMOHONAN KREDIT</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">

                                            {{-- FIX: tampilkan dua field yang berbeda --}}
    

                                            <tr>
                                                <td width="40%"><strong>Jumlah Permohonan Kredit</strong></td>
                                                <td>: Rp {{ number_format((int) ($debitur->jumlah_permohonan_kredit ?? 0), 0, ',', '.') }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Jangka Waktu</strong></td>
                                                <td>: {{ (int) ($debitur->jangka_waktu ?? 0) }} Bulan</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tujuan Penggunaan</strong></td>
                                                <td>: {{ $debitur->tujuan_penggunaan }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td width="40%"><strong>Account Officer</strong></td>
                                                <td>: {{ $debitur->account_officer }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Besaran Gaji</strong></td>
                                                <td>: Rp {{ number_format((int) ($debitur->besaran_gaji ?? 0), 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Angsuran</strong></td>
                                                <td>: Rp {{ number_format((int) ($debitur->angsuran ?? 0), 0, ',', '.') }}</td>
                                            </tr>
                                            
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div> {{-- live-preview --}}

                </div> {{-- card-body --}}
            </div> {{-- card --}}
        </div>
    </div>
@endsection
