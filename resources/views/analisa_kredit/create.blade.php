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
                        <form method="POST" action="{{ url('/analisa_kredit') }}" id="analisaKreditForm">
                            @csrf
                            <input type="hidden" id="id_debitur" name="id_debitur" value="{{$master_debitur->id}}">
                            <div class="row">
                                <div class="col-6">
                                    <table class="table table-sm table-bordered table-hover align-middle table-wrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nama Debitur</th>
                                                <td>{{ $master_debitur->nama }}</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Plafond Pengajuan</th>
                                                <td>{{ convertNumberFormat($master_debitur->jumlah_permohonan_kredit) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Jangka Waktu Kredit</th>
                                                <td>{{ $master_debitur->jangka_waktu }}</td>
                                            </tr>
                                            <tr>
                                                <th>Angsuran</th>
                                                <td>{{ convertNumberFormat($master_debitur->angsuran) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="col-5 p-1">
                                            <div class="input-group input-group-sm align-middle">

                                                <label><b>Tanggal Pengajuan: {{ ubahFormatTanggal($master_debitur->tanggal) }}</b></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row p-1 pt-3">
                                <h4>1. SLIK</h4>

                                <div class="col-lg-4 p-1">
                                    <div class="input-group input-group-sm">

                                        <span class="input-group-text" id="inputGroup-sizing-sm">Berdasarkan Slik Pada
                                            Tanggal:</span>
                                        <input type="date" name="tanggal_slik" id="tanggal_slik"
                                            value="{{ request('tanggal_slik') }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 p-1">
                                        <table
                                            class="table table-sm table-bordered table-hover align-middle table-wrap mb-0 "
                                            id="detailTable">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Atas Nama</th>
                                                    <th>Bank</th>
                                                    <th>Plafond Awal</th>
                                                    <th>Bunga Flat (%)</th>
                                                    <th>Outstanding</th>
                                                    <th>Jangka Waktu (bln)</th>
                                                    <th>Angsuran</th>
                                                    <th>Kol</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-id="1">
                                                    <td>1</td>
                                                    <td><input type="text" class="form-control form-control-sm" id="atas_nama[]"
                                                            name="atas_nama[]" required></td>
                                                    <td><input type="text" class="form-control form-control-sm" id="bank[]"
                                                            name="bank[]" required></td>
                                                    <td><input type="text" class="form-control form-control-sm plafond_awal" id="plafond_awal[]"
                                                            name="plafond_awal[]" placeholder="1.000.000" required></td>
                                                    <td><input type="number" step="0.01" max="999.99" min="0" class="form-control form-control-sm bunga" id="bunga[]"
                                                            name="bunga[]" placeholder="10.50" required></td>
                                                    <td><input type="text" class="form-control form-control-sm outstanding" id="outstanding[]"
                                                            name="outstanding[]" placeholder="500.000" required></td>
                                                    <td><input type="number" min="1" class="form-control form-control-sm jangka_waktu" id="jangka_waktu[]"
                                                            name="jangka_waktu[]" placeholder="12" required></td>
                                                    <td><input type="text" class="form-control form-control-sm angsuran" id="angsuran[]"
                                                            name="angsuran[]" placeholder="100.000" required></td>
                                                    <td><input type="text" class="form-control form-control-sm kolektibilitas" id="kolektibilitas[]"
                                                            name="kolektibilitas[]" placeholder="1" maxlength="1" required></td>
                                                    <td><button type="button" class="btn btn-sm btn-primary addRow"><i class="ri-add-line"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7">Total Angsuran</th>
                                                    <th id="totalAngsuran">0</th>
                                                    <!-- Sesuaikan colspan sesuai jumlah kolom tabel Anda -->
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 p-1">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Keterangan Tambahan:</span>
                                        <textarea name="keterangan" id="keterangan" class="form-control form-control-sm" required>{{ old('keterangan') }}</textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="row p-1">
                                <h4>2. Kemampuan Membayar Pinjaman</h4>

                                <div class="col-lg-12 p-1">
                                    <table class="table table-sm table-hover align-middle table-wrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>1</th>
                                                <th>Gaji Pokok</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Rp</th>
                                                <th> <input type="text"
                                                        value="{{ old('gaji_pokok', number_format($master_debitur->besaran_gaji, 0, '.', '')) }}"
                                                        name="gaji_pokok" id="gaji_pokok"
                                                        class="form-control form-control-sm"></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Tunjangan Jabatan</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('tunjangan_jabatan', '0') }}"
                                                        name="tunjangan_jabatan" id="tunjangan_jabatan"
                                                        class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Lembur (70%) slip lembur :</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('lembur', '0') }}" name="lembur"
                                                        id="lembur" class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Tunjangan lain (yang bersifat rutin)</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('tunjangan_lain', '0') }}"
                                                        name="tunjangan_lain" id="tunjangan_lain"
                                                        class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>Total Pendapatan Perbulan</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <th></th>
                                                <th></th>
                                                <th>Rp</th>
                                                <th><input type="text" value="{{ old('total_pendapatan_perbulan', number_format($master_debitur->besaran_gaji, 0, '.', '')) }}"
                                                        name="total_pendapatan_perbulan" id="total_pendapatan_perbulan"
                                                        class="form-control form-control-sm" readonly></th>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <th>Pendapatan Lain (jika ada) :</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1) Gaji Pasangan Hidup (50%)</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('gaji_pasangan', '0') }}"
                                                        name="gaji_pasangan" id="gaji_pasangan"
                                                        class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>2) Pendapatan Lain-lain</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('pendapatan_lain', '0') }}"
                                                        name="pendapatan_lain" id="pendapatan_lain"
                                                        class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>Total Pendapatan Lain-lain</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <th>Rp</th>
                                                <th><input type="text" value="{{ old('total_pendapatan_lain', '0') }}"
                                                        name="total_pendapatan_lain" id="total_pendapatan_lain"
                                                        class="form-control form-control-sm" readonly></th>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>TOTAL PENDAPATAN</th>
                                                <th>(A)</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <th>Rp</th>
                                                <th><input type="text" value="{{ old('total_pendapatan', '0') }}"
                                                        name="total_pendapatan" id="total_pendapatan"
                                                        class="form-control form-control-sm" readonly></th>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <th>Kewajiban Kepada Bank Lain :</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1) Angsuran Bank/Leasing</td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('angsuran_bank','0') }}"
                                                        name="angsuran_bank" id="angsuran_bank"
                                                        class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>2) Kewajiban kepada pihak ketiga lainnya</td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('kewajiban_pihak_ketiga', '0') }}"
                                                        name="kewajiban_pihak_ketiga" id="kewajiban_pihak_ketiga"
                                                        class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>3) Angsuran BPR Duta Pasundan jika disetujui</td>
                                                <td></td>
                                                <td>Rp</td>
                                                <td><input type="text" value="{{ old('angsuran_bpr', number_format($master_debitur->angsuran, 0, '.', '')) }}"
                                                        name="angsuran_bpr" id="angsuran_bpr"
                                                        class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>Total Kewajiban perbulan</th>
                                                <th>(B)</th>
                                                <th>Rp</th>
                                                <th><input type="text" value="{{ old('total_kewajiban', '0') }}"
                                                        name="total_kewajiban" id="total_kewajiban"
                                                        class="form-control form-control-sm" readonly></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>Disposible Income</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <th>Rp</th>
                                                <th><input type="text" value="{{ old('disposible_income', '0') }}"
                                                        name="disposible_income" id="disposible_income"
                                                        class="form-control form-control-sm"></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <th>*</th>
                                                <th><div class="input-group input-group-sm">
                                                    <input type="text"
                                                        value="{{ old('disposible_income_percent', '0') }}"
                                                        name="disposible_income_percent" id="disposible_income_percent"
                                                        class="form-control form-control-sm" readonly>
                                                    <div class="input-group-sm">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                                   </th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Repayment Capacity</td>
                                                <td>=</td>
                                                <td colspan="3">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" value="{{ old('rp_kewajiban', '0') }}"
                                                    name="rp_kewajiban" id="rp_kewajiban"
                                                    class="form-control form-control-sm"><div class="input-group-sm">
                                                        <span class="input-group-text">:</span>
                                                    </div>
                                                    <input type="text" value="{{ old('rp_pendapatan', '0') }}"
                                                    name="rp_pendapatan" id="rp_pendapatan"
                                                    class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Rumus RC = A:B</td>
                                                <td>=</td>
                                                <td> </td>
                                                <td><div class="input-group input-group-sm">
                                                    <input type="text" value="{{ old('rumus_rc', '0') }}"
                                                name="rumus_rc" id="rumus_rc"
                                                class="form-control form-control-sm"><div class="input-group-sm">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                                </div></td>
                                                <td colspan="4">MAX 40%</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Hasil</td>
                                                <td>=</td>
                                                <td></td>
                                                <td><input type="text" value="{{ old('hasil', '') }}"
                                                    name="hasil" id="hasil"
                                                    class="form-control form-control-sm"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="row p-1">
                                <div class="col-lg-12 p-1">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Catatan:</span>
                                    <textarea name="catatan" id="catatan" class="form-control form-control-sm" required>{{ old('catatan') }}</textarea>

                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ url('/analisa_kredit') }}" class="btn btn-secondary">Batal</a> 
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

            
            var gaji_pokok = new Cleave('#gaji_pokok', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var tunjangan_jabatan = new Cleave('#tunjangan_jabatan', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var lembur = new Cleave('#lembur', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var tunjangan_lain = new Cleave('#tunjangan_lain', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var gaji_pasangan = new Cleave('#gaji_pasangan', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var pendapatan_lain = new Cleave('#pendapatan_lain', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var total_pendapatan_lain = new Cleave('#total_pendapatan_lain', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });
            var total_pendapatan_perbulan = new Cleave('#total_pendapatan_perbulan', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });
             var total_pendapatan = new Cleave('#total_pendapatan', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var angsuran_bank = new Cleave('#angsuran_bank', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var kewajiban_pihak_ketiga = new Cleave('#kewajiban_pihak_ketiga', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var angsuran_bpr = new Cleave('#angsuran_bpr', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var total_kewajiban = new Cleave('#total_kewajiban', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var disposible_income = new Cleave('#disposible_income', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var disposible_income_percent = new Cleave('#disposible_income_percent', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var rp_kewajiban = new Cleave('#rp_kewajiban', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var rp_pendapatan = new Cleave('#rp_pendapatan', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });

            var rumus_rc = new Cleave('#rumus_rc', {
                numeral: true,
                delimiter: '.',
                numeralDecimalMark: ',',
                numeralThousandsGroupStyle: 'thousand'
            });



            let rowId = 2;

            // Fungsi untuk apply Cleave.js pada field currency
            function applyCleaveToRow($row) {
                $row.find('.plafond_awal').each(function() {
                    new Cleave(this, {
                        numeral: true,
                        delimiter: '.',
                        numeralDecimalMark: ',',
                        numeralThousandsGroupStyle: 'thousand'
                    });
                });
                $row.find('.outstanding').each(function() {
                    new Cleave(this, {
                        numeral: true,
                        delimiter: '.',
                        numeralDecimalMark: ',',
                        numeralThousandsGroupStyle: 'thousand'
                    });
                });
                $row.find('.angsuran').each(function() {
                    new Cleave(this, {
                        numeral: true,
                        delimiter: '.',
                        numeralDecimalMark: ',',
                        numeralThousandsGroupStyle: 'thousand'
                    });
                });
            }

            // Apply Cleave.js ke row pertama yang sudah ada
            applyCleaveToRow($('#detailTable tbody tr:first'));

            // Fungsi untuk menambah baris
            $(document).on('click', '.addRow', function() {
                let tr = '<tr data-id="' + rowId + '">' +
                    '<td>' + rowId + '</td>' +
                    '<td><input type="text" class="form-control form-control-sm" name="atas_nama[]" required></td>' +
                    '<td><input type="text" class="form-control form-control-sm" name="bank[]" required></td>' +
                    '<td><input type="text" class="form-control form-control-sm plafond_awal" name="plafond_awal[]" placeholder="1.000.000" required></td>' +
                    '<td><input type="number" step="0.01" max="999.99" min="0" class="form-control form-control-sm" name="bunga[]" placeholder="10.50" required></td>' +
                    '<td><input type="text" class="form-control form-control-sm outstanding" name="outstanding[]" placeholder="500.000" required></td>' +
                    '<td><input type="number" min="1" class="form-control form-control-sm" name="jangka_waktu[]" placeholder="12" required></td>' +
                    '<td><input type="text" class="form-control form-control-sm angsuran" name="angsuran[]" placeholder="100.000" required></td>' +
                    '<td><input type="text" class="form-control form-control-sm" name="kolektibilitas[]" placeholder="1" maxlength="1" required></td>' +
                    '<td><button type="button" class="btn btn-sm btn-danger removeRow"><i class="ri-subtract-line"></i></button></td>' +
                    '</tr>';
                let $newRow = $(tr);
                $('#detailTable tbody').append($newRow);
                applyCleaveToRow($newRow);
                rowId++;
            });

            // Fungsi untuk menghapus baris
            $(document).on('click', '.removeRow', function() {
                $(this).closest('tr').remove();
                rowId--;
            });

            function calculateTotal() {
                let total = 0;
                $('input[name="angsuran[]"]').each(function() {
                    // Convert Indonesian format to number (remove dots, replace comma with dot)
                    let value = $(this).val().replace(/\./g, '').replace(',', '.');
                    total += parseFloat(value) || 0;
                });
                // Format total dengan ribuan
                $('#totalAngsuran').text(total.toLocaleString('id-ID'));
            }

            // Panggil calculateTotal ketika baris ditambahkan atau dihapus
            $(document).on('click', '.addRow, .removeRow', function() {
                calculateTotal();
            });

            // Panggil calculateTotal ketika nilai angsuran berubah
            $(document).on('keyup change', 'input[name="angsuran[]"]', function() {
                calculateTotal();
            });


            function calculateTotalPendapatanPerbulan() {
                let gajiPokok = parseFloat(gaji_pokok.getRawValue()) || 0;
                let tunjanganJabatan = parseFloat(tunjangan_jabatan.getRawValue()) || 0;
                let Lembur = parseFloat(lembur.getRawValue()) || 0;
                let tunjanganLain = parseFloat(tunjangan_lain.getRawValue()) || 0;

                let totalPendapatan = gajiPokok + tunjanganJabatan + Lembur + tunjanganLain;
                total_pendapatan_perbulan.setRawValue(totalPendapatan); // Menggunakan Cleave.js untuk format

            }

            // Event listener untuk setiap kali nilai input berubah
            $('#gaji_pokok, #tunjangan_jabatan, #lembur, #tunjangan_lain').on('keyup change', function() {
                calculateTotalPendapatanPerbulan();
            });

            function calculateTotalPendapatanLain() {
                let gajiPasangan = parseFloat(gaji_pasangan.getRawValue()) || 0;
                let pendapatanLain = parseFloat(pendapatan_lain.getRawValue()) || 0;
                
                let totalPendapatanLain = gajiPasangan + pendapatanLain;
                total_pendapatan_lain.setRawValue(totalPendapatanLain); // Menggunakan Cleave.js untuk format

            }

            // Event listener untuk setiap kali nilai input berubah
            // $('#gaji_pasangan, #pendapatan_lain').on('keyup change', function() {
            //     calculateTotalPendapatanLain();
            // });


            function calculateTotalPendapatan() {
                let totalPendapatanBulanan = parseFloat(total_pendapatan_perbulan.getRawValue()) || 0;
                let totalPendapatanLain = parseFloat(total_pendapatan_lain.getRawValue()) || 0;
                
                let totalPendapatan = totalPendapatanBulanan + totalPendapatanLain;
                total_pendapatan.setRawValue(totalPendapatan); // Menggunakan Cleave.js untuk format

            }

            // Event listener untuk setiap kali nilai input berubah
            // $('#gaji_pokok, #tunjangan_jabatan, #lembur, #tunjangan_lain,#gaji_pasangan, #pendapatan_lain').on('keyup change', function() {
            //     calculateTotalPendapatan();
            // });

            function calculateKewajiban() {
                let angsuranBank = parseFloat(angsuran_bank.getRawValue()) || 0;
                let kewajibanPihakKetiga = parseFloat(kewajiban_pihak_ketiga.getRawValue()) || 0;
                let angsuranBpr = parseFloat(angsuran_bpr.getRawValue()) || 0;
                
                let totalKewajiban = angsuranBank + kewajibanPihakKetiga + angsuranBpr;
                total_kewajiban.setRawValue(totalKewajiban); // Menggunakan Cleave.js untuk format

            }

            // Event listener untuk setiap kali nilai input berubah
            // $('#angsuran_bank, #kewajiban_pihak_ketiga, #angsuran_bpr').on('keyup change', function() {
            //     calculateKewajiban();
            // });


            function calculateDisposible() {
                let totalPendapatan = parseFloat(total_pendapatan.getRawValue()) || 0;
                let totalKewajiban = parseFloat(total_kewajiban.getRawValue()) || 0;
               
                
                let totalDisposible = totalPendapatan - totalKewajiban;
                disposible_income.setRawValue(totalDisposible); // Menggunakan Cleave.js untuk format

            }

            function calculateDisposiblePercent() {
                let totalPendapatan = parseFloat(total_pendapatan.getRawValue()) || 0;
                let totalDisposible = parseFloat(disposible_income.getRawValue()) || 0;
               
                
                let totalDisposiblePercent = (totalDisposible/totalPendapatan)*100;
                disposible_income_percent.setRawValue(totalDisposiblePercent); // Menggunakan Cleave.js untuk format
                

            }

            function calculateRepaymentCapacity() {
               
                let rpKkewajiban = parseFloat(total_kewajiban.getRawValue()) || 0;
                let rpPendapatan = parseFloat(total_pendapatan.getRawValue()) || 0;
                rp_kewajiban.setRawValue(rpKkewajiban);
                rp_pendapatan.setRawValue(rpPendapatan);
                let totalKewajiban = parseFloat(total_kewajiban.getRawValue()) || 0;
                let totalPendapatan = parseFloat(total_pendapatan.getRawValue()) || 0;
               
                
                let rumusRc = (totalKewajiban/totalPendapatan)*100;
                rumus_rc.setRawValue(rumusRc); // Menggunakan Cleave.js untuk format
                if(rumusRc > 40){
                    $('#hasil').val("Reject");
                }else{
                    $('#hasil').val("Approve");
                }

            }
            calculateTotalPendapatanLain();
            calculateTotalPendapatan();
            calculateKewajiban();
            calculateDisposible();
            calculateDisposiblePercent();
            calculateRepaymentCapacity();
            // Event listener untuk setiap kali nilai input berubah
            $('#gaji_pokok, #tunjangan_jabatan, #lembur, #tunjangan_lain,#gaji_pasangan, #pendapatan_lain,#gaji_pokok, #tunjangan_jabatan, #lembur, #tunjangan_lain,#gaji_pasangan, #pendapatan_lain,#angsuran_bank, #kewajiban_pihak_ketiga, #angsuran_bpr').on('keyup change', function() {
                calculateTotalPendapatanLain();
                calculateTotalPendapatan();
                calculateKewajiban();
                calculateDisposible();
                calculateDisposiblePercent();
                calculateRepaymentCapacity();
            });

            // Form validation sebelum submit
            $('#analisaKreditForm').on('submit', function(e) {
                let isValid = true;
                let errorMessages = [];

                // Validasi Detail Analisa Kredit (tabel)
                $('#detailTable tbody tr').each(function(index) {
                    let rowNum = index + 1;
                    let $row = $(this);

                    // Check atas nama
                    if (!$row.find('input[name="atas_nama[]"]').val()) {
                        errorMessages.push('Baris ' + rowNum + ': Atas nama harus diisi');
                        isValid = false;
                    }

                    // Check bank
                    if (!$row.find('input[name="bank[]"]').val()) {
                        errorMessages.push('Baris ' + rowNum + ': Bank harus diisi');
                        isValid = false;
                    }

                    // Check plafond awal
                    if (!$row.find('input[name="plafond_awal[]"]').val()) {
                        errorMessages.push('Baris ' + rowNum + ': Plafond awal harus diisi');
                        isValid = false;
                    }

                    // Check bunga
                    let bunga = $row.find('input[name="bunga[]"]').val();
                    if (!bunga) {
                        errorMessages.push('Baris ' + rowNum + ': Bunga harus diisi');
                        isValid = false;
                    } else if (parseFloat(bunga) > 999.99) {
                        errorMessages.push('Baris ' + rowNum + ': Bunga maksimal 999.99%');
                        isValid = false;
                    }

                    // Check outstanding
                    if (!$row.find('input[name="outstanding[]"]').val()) {
                        errorMessages.push('Baris ' + rowNum + ': Outstanding harus diisi');
                        isValid = false;
                    }

                    // Check jangka waktu
                    let jangkaWaktu = $row.find('input[name="jangka_waktu[]"]').val();
                    if (!jangkaWaktu) {
                        errorMessages.push('Baris ' + rowNum + ': Jangka waktu harus diisi');
                        isValid = false;
                    } else if (parseInt(jangkaWaktu) < 1) {
                        errorMessages.push('Baris ' + rowNum + ': Jangka waktu minimal 1 bulan');
                        isValid = false;
                    }

                    // Check angsuran
                    if (!$row.find('input[name="angsuran[]"]').val()) {
                        errorMessages.push('Baris ' + rowNum + ': Angsuran harus diisi');
                        isValid = false;
                    }

                    // Check kolektibilitas
                    if (!$row.find('input[name="kolektibilitas[]"]').val()) {
                        errorMessages.push('Baris ' + rowNum + ': Kolektibilitas harus diisi');
                        isValid = false;
                    }
                });

                // Check catatan
                if (!$('#catatan').val()) {
                    errorMessages.push('Catatan harus diisi');
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault();
                    alert('Mohon lengkapi data berikut:\n\n' + errorMessages.join('\n'));
                    return false;
                }

                // Confirm sebelum submit
                if (!confirm('Apakah Anda yakin data yang diinput sudah benar?')) {
                    e.preventDefault();
                    return false;
                }
            });


        });
    </script>

    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
