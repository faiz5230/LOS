@extends('layouts.master')

@section('title')
    Detail Debitur Modal Kerja
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Debitur Modal Kerja
        @endslot
        @slot('title')
            Detail Data Debitur
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Data Debitur Modal Kerja</h4>
                </div>

                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('debitur-modal-kerja.index') }}">
                            <i data-feather="arrow-left"></i> Kembali
                        </a>
                        <a class="btn btn-primary" href="{{ route('debitur-modal-kerja.export', $debitur->id) }}">
                            <i data-feather="download"></i> Download Excel
                        </a>
                        <a href="{{ route('debiturs.modal_kerja.memo_kredit_export', $debitur->id) }}" 
                            class="btn btn-primary"><i class="fas fa-download"></i>Memo Droping
                        </a>
                        <a href="{{ route('debiturs_sppk_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> Export SPPK     
                        </a>
                        <a href="{{ route('debiturs_sttu_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> Export STTU   
                        </a>
                        <a href="{{ route('debiturs_pk_snd_sim_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Sendiri   
                        </a>
                        <a href="{{ route('debiturs_pk_kredit_pasangan_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Pasangan   
                        </a>
                        <a href="{{ route('debiturs_surat_kuasa_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> Surat Kuasa  
                        </a>
                        <a href="{{ route('debiturs_surat_askep_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> Surat Askep
                        </a>
                        <a href="{{ route('debiturs_pk_kredit_perusahaan_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> PK Kredit Perusahaan
                        </a>
                        
                        </div>
                        <!-- BARIS 2 (kunci posisinya: kasih spacer sampai sejajar di bawah Download Excel) -->
                        <div class="w-100"></div>

                        <!-- kolom untuk "Kembali" biar Memo Fasilitas Kredit tepat di bawah Download Excel -->
                        <div class="col-auto">
                        <!-- spacer selebar tombol Kembali -->
                        <div style="width: 90px;"></div>
                        </div>

                        <div class="col-auto">
    
    
                        <a href="{{ route('debiturs_memo_fasilitas_kredit_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> Memo Fasilitas Kredit
                        </a>
                        <a href="{{ route('debiturs_mcc_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> MCC
                        </a>
                        <a href="{{ route('debiturs_tanda_terima_export', $debitur->id) }}"
                           class="btn btn-primary"><i class="fas fa-download"></i> Tanda Terima
                        </a>
                        <a class="btn btn-warning" href="{{ route('debitur-modal-kerja.edit', $debitur->id) }}">
                            <i data-feather="edit"></i> Edit
                        </a>
                        
                    </div>
                    </div>

                    <div class="live-preview">
                        <!-- DATA PERUSAHAAN -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA PERUSAHAAN</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama Perusahaan</strong></td>
                                                <td>: {{ $debitur->nama_perusahaan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bidang Usaha</strong></td>
                                                <td>: {{ $debitur->bidang_usaha_perusahaan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>NIB</strong></td>
                                                <td>: {{ $debitur->nib }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Akte Pendirian</strong></td>
                                                <td>: {{ $debitur->akte_pendirian }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Lengkap</strong></td>
                                                <td>: {{ $debitur->alamat_lengkap }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. NPWP</strong></td>
                                                <td>: {{ $debitur->no_npwp_perusahaan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telp</strong></td>
                                                <td>: {{ $debitur->no_telp_perusahaan }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="mb-3"><strong>Data Agunan</strong></h6>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Agunan</strong></td>
                                                <td>: {{ $debitur->agunan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Agunan</strong></td>
                                                <td>: {{ $debitur->no_agunan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Atas Nama Agunan</strong></td>
                                                <td>: {{ $debitur->atas_nama_agunan }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DATA DIREKTUR -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA DIREKTUR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama</strong></td>
                                                <td>: {{ $debitur->nama_direktur }}</td>
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
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Pekerjaan</strong></td>
                                                <td>: {{ $debitur->pekerjaan }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nama Perusahaan</strong></td>
                                                <td>: {{ $debitur->nama_perusahaan_direktur }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Alamat Perusahaan</strong></td>
                                                <td>: {{ $debitur->alamat_perusahaan_direktur }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Lama Bekerja</strong></td>
                                                <td>: {{ $debitur->lama_bekerja }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telepon</strong></td>
                                                <td>: {{ $debitur->no_telepon_direktur }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DATA USAHA CALON DEBITUR -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">DATA USAHA CALON DEBITUR</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Nama Usaha</strong></td>
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
                                            <tr>
                                                <td><strong>Bentuk Badan Usaha</strong></td>
                                                <td>: {{ $debitur->bentuk_badan_usaha }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Bidang Usaha</strong></td>
                                                <td>: {{ $debitur->bidang_usaha }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>NPWP</strong></td>
                                                <td>: {{ $debitur->npwp_usaha }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>No. Telepon</strong></td>
                                                <td>: {{ $debitur->no_telepon_usaha }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PERMOHONAN KREDIT -->
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">PERMOHONAN KREDIT</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Jumlah Permohonan Kredit</strong></td>
                                                <td>: Rp {{ number_format($debitur->jumlah_permohonan_kredit, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Jangka Waktu</strong></td>
                                                <td>: {{ $debitur->jangka_waktu }} Bulan</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tujuan Penggunaan</strong></td>
                                                <td>: {{ $debitur->tujuan_penggunaan }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td width="40%"><strong>Account Officer</strong></td>
                                                <td>: {{ $debitur->account_officer }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pemohon</strong></td>
                                                <td>: {{ $debitur->pemohon }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
