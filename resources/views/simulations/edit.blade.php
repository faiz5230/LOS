@extends('layouts.master')

@section('title')
    Simulasi Kredit - {{ $jenis_kredit ?? 'Baru' }}
@endsection

@section('css')
    <link href="{{ URL::asset('css/select2.min.css') }}" rel="stylesheet" />
    <style>
        .section-header {
            background: linear-gradient(135deg, #467889 0%, #daf5ca 100%);
            color: white !important;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem 0.5rem 0 0;
            margin: -1.5rem -1.5rem 1.5rem -1.5rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        .section-header h5,
        .section-header i {
            color: white !important;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        .required-mark {
            color: #dc3545;
            margin-left: 2px;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border-color: #ced4da;
        }
        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
            border: none;
        }
        .btn-action {
            min-width: 120px;
        }
    </style>
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Simulasi
        @endslot
        @slot('title')
            Edit Simulasi {{ $jenis_kredit ?? '' }}
        @endslot
    @endcomponent

    <form action="{{ route($route . '.update', $simulation->id) }}" method="POST" id="simulationForm">
        @csrf
            @method('PUT')
        
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-6">
                <!-- Data Pemohon -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-user-line me-2"></i>Data Pemohon</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_realisasi" class="form-label">Tanggal Realisasi<span class="required-mark">*</span></label>
                                <input type="date" name="tanggal_realisasi" id="tanggal_realisasi" 
                                    class="form-control @error('tanggal_realisasi') is-invalid @enderror" 
                                    value="{{ old('tanggal_realisasi', $simulation->tanggal_realisasi) }}">
                                @error('tanggal_realisasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="jenis_kredit" class="form-label">Jenis Kredit<span class="required-mark">*</span></label>
                                <select id="jenis_kredit" name="{{ !empty($jenis_kredit) ? 'jenis_kredit_display' : 'jenis_kredit' }}" 
                                    class="form-control @error('jenis_kredit') is-invalid @enderror" 
                                    {{ !empty($jenis_kredit) ? 'disabled' : '' }}>
                                    @if (!empty($jenis_kredit))
                                        <option value="{{ $simulation->jenis_kredit }}" selected>{{ $jenis_kredit }}</option>
                                    @else
                                        <option value="">-- Pilih Jenis Kredit --</option>
                                        <option value="Modal Kerja" {{ old('jenis_kredit') == 'Modal Kerja' ? 'selected' : '' }}>Modal Kerja</option>
                                        <option value="Pensiun" {{ old('jenis_kredit') == 'Pensiun' ? 'selected' : '' }}>Pensiun</option>
                                        <option value="Pasar" {{ old('jenis_kredit') == 'Pasar' ? 'selected' : '' }}>Pasar</option>
                                        <option value="UMKM" {{ old('jenis_kredit') == 'UMKM' ? 'selected' : '' }}>UMKM</option>
                                    @endif
                                </select>
                                @if (!empty($jenis_kredit))
                                    <input type="hidden" name="jenis_kredit" value="{{ $simulation->jenis_kredit }}">
                                @endif
                                @error('jenis_kredit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <input type="hidden" name="jatuh_tempo" id="jatuh_tempo" value="{{ old('jatuh_tempo', $simulation->jatuh_tempo) }}">

                            <div class="col-md-12 mb-3">
                                <label for="nama" class="form-label">Nama Lengkap<span class="required-mark">*</span></label>
                                <input type="text" name="nama" id="nama" 
                                    class="form-control @error('nama') is-invalid @enderror" 
                                    value="{{ old('nama', $simulation->nama) }}" placeholder="Masukkan nama lengkap">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir<span class="required-mark">*</span></label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                                    value="{{ old('tanggal_lahir', $simulation->tanggal_lahir) }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="usia" class="form-label">Usia (Tahun)<span class="required-mark">*</span></label>
                                <input type="number" name="usia" id="usia" 
                                    class="form-control @error('usia') is-invalid @enderror" 
                                    value="{{ old('usia', $simulation->usia) }}" readonly>
                                @error('usia')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="besaran_gaji" class="form-label">Besaran Gaji<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="besaran_gaji" id="besaran_gaji" 
                                        class="form-control @error('besaran_gaji') is-invalid @enderror" 
                                        value="{{ old('besaran_gaji', (int)$simulation->besaran_gaji) }}"placeholder="0">

                                    @error('besaran_gaji')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="dsr" class="form-label">DSR<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="dsr" id="dsr" 
                                        class="form-control @error('dsr') is-invalid @enderror" 
                                        value="{{ old('dsr', $simulation->dsr) }}" placeholder="0">
                                    <span class="input-group-text">%</span>
                                    @error('dsr')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="maksimal_angsuran" class="form-label">Maksimal Angsuran<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="maksimal_angsuran" id="maksimal_angsuran" 
                                        class="form-control @error('maksimal_angsuran') is-invalid @enderror" 
                                        value="{{ old('maksimal_angsuran', $simulation->maksimal_angsuran) }}" readonly>
                                    @error('maksimal_angsuran')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Kredit -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-money-dollar-circle-line me-2"></i>Data Kredit</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="plafond" class="form-label">Plafond<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="plafond" id="plafond" 
                                        class="form-control @error('plafond') is-invalid @enderror" 
                                        value="{{ old('plafond', (int) $simulation->plafond) }}" placeholder="0">
                                    @error('plafond')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="jangka_waktu" class="form-label">Jangka Waktu<span class="required-mark">*</span></label>
                                <select name="jangka_waktu" id="jangka_waktu" 
                                    class="form-control select2 @error('jangka_waktu') is-invalid @enderror">
                                    <option value="">-- Pilih --</option>
                                    @for ($i = 1; $i <= 240; $i++)
                                        <option value="{{ $i }}" {{ old('jangka_waktu', $simulation->jangka_waktu) == $i ? 'selected' : '' }}>
                                            {{ $i }} Bulan
                                        </option>
                                    @endfor
                                </select>
                                @error('jangka_waktu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="bunga_flat" class="form-label">Bunga Flat<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="bunga_flat" id="bunga_flat" 
                                        class="form-control @error('bunga_flat') is-invalid @enderror" 
                                        value="{{ old('bunga_flat', $simulation->bunga_flat) }}" placeholder="0">
                                    <span class="input-group-text">%</span>
                                    @error('bunga_flat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="bunga_effektif" class="form-label">Bunga Efektif<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="bunga_effektif" id="bunga_effektif" 
                                        class="form-control @error('bunga_effektif') is-invalid @enderror" 
                                        value="{{ old('bunga_effektif', $simulation->bunga_effektif) }}" readonly>
                                    <span class="input-group-text">%</span>
                                    @error('bunga_effektif')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="angsuran" class="form-label">Angsuran/Bulan<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="angsuran" id="angsuran" 
                                        class="form-control @error('angsuran') is-invalid @enderror" 
                                        value="{{ old('angsuran', $simulation->angsuran) }}" readonly>
                                    @error('angsuran')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="sisa_gaji" class="form-label">Sisa Gaji<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="sisa_gaji" id="sisa_gaji" 
                                        class="form-control @error('sisa_gaji') is-invalid @enderror" 
                                        value="{{ old('sisa_gaji', $simulation->sisa_gaji) }}" readonly>
                                    @error('sisa_gaji')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <!-- Biaya-Biaya -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-file-list-3-line me-2"></i>Biaya-Biaya</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="biaya_provisi" class="form-label">Biaya Provisi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_provisi" id="biaya_provisi" 
                                        class="form-control @error('biaya_provisi') is-invalid @enderror" 
                                        value="{{ old('biaya_provisi', $simulation->biaya_provisi) }}" readonly>
                                    @error('biaya_provisi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_notaris" class="form-label">Biaya Notaris<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_notaris" id="biaya_notaris" 
                                        class="form-control @error('biaya_notaris') is-invalid @enderror" 
                                        value="{{ old('biaya_notaris', $simulation->biaya_notaris) }}">
                                    @error('biaya_notaris')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_administrasi" class="form-label">Biaya Administrasi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_administrasi" id="biaya_administrasi" 
                                        class="form-control @error('biaya_administrasi') is-invalid @enderror" 
                                        value="{{ old('biaya_administrasi', (int) $simulation->biaya_administrasi) }}" readonly>  
                                    @error('biaya_administrasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_asuransi" class="form-label">Biaya Asuransi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_asuransi" id="biaya_asuransi" 
                                        class="form-control @error('biaya_asuransi') is-invalid @enderror" 
                                        value="{{ old('biaya_asuransi', (int) $simulation->biaya_asuransi) }}" readonly>
                                    @error('biaya_asuransi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="biaya_materai" class="form-label">Biaya Materai<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="biaya_materai" id="biaya_materai"
                                        class="form-control @error('biaya_materai') is-invalid @enderror"
                                        value="{{ old('biaya_materai', $simulation->biaya_materai ?? ($biaya_materaiValue ?? 0)) }}"
                                        {{ ($simulation->jenis_kredit ?? $jenis_kredit ?? old('jenis_kredit')) === 'Pensiun' ? '' : 'readonly' }}>

                                    @error('biaya_materai')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="retensi" class="form-label">Retensi<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="retensi" id="retensi" 
                                        class="form-control @error('retensi') is-invalid @enderror" 
                                        value="{{ old('retensi', $simulation->retensi) }}">
                                    @error('retensi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tabungan_wajib" class="form-label">Tabungan Wajib<span class="required-mark">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="tabungan_wajib" id="tabungan_wajib"
                                        class="form-control @error('tabungan_wajib') is-invalid @enderror"
                                        value="{{ old('tabungan_wajib', $simulation->tabungan_wajib ?? ($tabungan_wajibValue ?? 0)) }}"
                                        {{ ($simulation->jenis_kredit ?? $jenis_kredit ?? old('jenis_kredit')) === 'Pensiun' ? '' : 'readonly' }}>

                                    @error('tabungan_wajib')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="rate_asuransi" class="form-label">Rate Asuransi<span class="required-mark">*</span></label>
                                <input type="text" name="rate_asuransi" id="rate_asuransi" 
                                    class="form-control @error('rate_asuransi') is-invalid @enderror" 
                                    value="{{ old('rate_asuransi', $simulation->rate_asuransi) }}" readonly>
                                @error('rate_asuransi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="ass_krd" class="form-label">Ass KRD<span class="required-mark">*</span></label>
                                <div class="form-check mb-2" id="auto_ass_krd_wrapper" style="display: none;">
                                    <input class="form-check-input" type="checkbox" id="auto_ass_krd">
                                    <label class="form-check-label" for="auto_ass_krd">
                                        Hitung Otomatis (0.8% × Plafond × Tenure)
                                    </label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="ass_krd" id="ass_krd" 
                                        class="form-control @error('ass_krd') is-invalid @enderror" 
                                        value="{{ old('ass_krd', $simulation->ass_krd) }}" readonly>
                                    @error('ass_krd')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="bunga" class="form-label">Bunga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="bunga" id="bunga" 
                                        class="form-control" value="{{ old('bunga', 0) }}">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="denda" class="form-label">Denda</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="denda" id="denda" 
                                        class="form-control" value="{{ old('denda', 0) }}">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="pinalty" class="form-label">Pinalty</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="pinalty" id="pinalty" 
                                        class="form-control" value="{{ old('pinalty', 0) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Diterima -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="section-header">
                            <h5 class="mb-0"><i class="ri-wallet-3-line me-2"></i>Total Diterima</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="total_diterima" class="form-label">Total Diterima Debitur<span class="required-mark">*</span></label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="total_diterima" id="total_diterima" 
                                        class="form-control @error('total_diterima') is-invalid @enderror" 
                                        value="{{ old('total_diterima', $simulation->total_diterima) }}" readonly style="font-size: 1.5rem; font-weight: 600;">
                                    @error('total_diterima')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route($route . '.index') }}" class="btn btn-secondary btn-action">
                                <i class="ri-arrow-left-line me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary btn-action">
                                <i class="ri-save-line me-1"></i> Update Simulasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
<script src="{{ URL::asset('build/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('build/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/cleave.js/cleave.min.js') }}"></script>

<script>
$(document).ready(function () {
    $('.select2').select2();

    // =========================
    // HELPER CLEAVE
    // =========================
    function cleaveCurrency(selector) {
        return new Cleave(selector, {
            numeral: true,
            delimiter: '.',
            numeralDecimalMark: ',',
            numeralThousandsGroupStyle: 'thousand',
            numeralPositiveOnly: true
        });
    }

    function cleavePercent(selector) {
        return new Cleave(selector, {
            numeral: true,
            numeralDecimalMark: '.',
            numeralPositiveOnly: true,
            numeralDecimalScale: 2,
        });
    }

    // =========================
    // CLEAVE INSTANCES
    // =========================
    var besaran_gaji        = cleaveCurrency('#besaran_gaji');
    var maksimal_angsuran   = cleaveCurrency('#maksimal_angsuran');
    var plafond             = cleaveCurrency('#plafond');
    var angsuran            = cleaveCurrency('#angsuran');
    var sisa_gaji           = cleaveCurrency('#sisa_gaji');
    var biaya_provisi       = cleaveCurrency('#biaya_provisi');
    var biaya_notaris       = cleaveCurrency('#biaya_notaris');
    var biaya_administrasi  = cleaveCurrency('#biaya_administrasi');
    var biaya_asuransi      = cleaveCurrency('#biaya_asuransi');
    var biaya_materai       = cleaveCurrency('#biaya_materai');
    var retensi             = cleaveCurrency('#retensi');
    var tabungan_wajib      = cleaveCurrency('#tabungan_wajib');
    var ass_krd             = cleaveCurrency('#ass_krd');
    var bunga               = cleaveCurrency('#bunga');
    var denda               = cleaveCurrency('#denda');
    var pinalty             = cleaveCurrency('#pinalty');
    var total_diterima      = cleaveCurrency('#total_diterima');

    var bunga_flat          = cleavePercent('#bunga_flat');
    var dsr_input           = cleavePercent('#dsr');
    var rate_asuransi       = cleavePercent('#rate_asuransi');
    const SETTING_MATERAI = parseFloat('{{ $biaya_materaiValue }}') || 0;
    const SETTING_TABUNGAN_WAJIB = parseFloat('{{ $tabungan_wajibValue }}') || 0;

    // =========================
    // GET JENIS KREDIT (AMAN WALAU DISABLED)
    // =========================
    function getJenisKredit() {
        return $('#jenis_kredit').val() || $('input[name="jenis_kredit"]').val() || '';
    }

    // =========================
    // JATUH TEMPO DARI REALISASI
    // =========================
    $('#tanggal_realisasi').change(function () {
        var tanggalRealisasi = new Date($(this).val());
        tanggalRealisasi.setMonth(tanggalRealisasi.getMonth() + 1);

        var tahun = tanggalRealisasi.getFullYear();
        var bulan = ('0' + (tanggalRealisasi.getMonth() + 1)).slice(-2);
        var hari  = ('0' + tanggalRealisasi.getDate()).slice(-2);

        $('#jatuh_tempo').val(tahun + '-' + bulan + '-' + hari);
    });

    // =========================
    // HITUNG USIA
    // =========================
    $('#tanggal_lahir').on('change', function () {
        const birthDate = new Date($(this).val());
        const today = new Date();
        let age = today.getFullYear() - birthDate.getFullYear();
        const monthDiff = today.getMonth() - birthDate.getMonth();

        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        $('#usia').val(age);
        hitungSimulasi();
    });

    // =========================
    // HITUNG MAKSIMAL ANGSURAN
    // =========================
    function hitungMaksimalAngsuran() {
        const gaji = parseFloat($('#besaran_gaji').val().replace(/\./g, '').replace(',', '.')) || 0;
        const dsr  = parseFloat($('#dsr').val().replace(',', '.')) || 0;

        const maksAngsuran = gaji * (dsr / 100);
        maksimal_angsuran.setRawValue(maksAngsuran.toFixed(0));
    }

    $('#besaran_gaji, #dsr').on('input', function () {
        hitungMaksimalAngsuran();
        hitungSimulasi();
    });

    // =========================
    // GET RATE ASURANSI (AJAX)
    // =========================
    function get_asuransi_rate(jangka_waktu, usia) {
        return new Promise((resolve) => {
            if (usia < 20 || usia > 64 || jangka_waktu > 240 || (usia + jangka_waktu / 12) > 65) {
                resolve(0);
            } else {
                $.ajax({
                    url: '/get_rate_asuransi',
                    method: 'GET',
                    data: {
                        jangka_waktu: jangka_waktu,
                        usia: usia
                    },
                    success: function (response) {
                        resolve(parseFloat(response));
                    },
                    error: function () {
                        resolve(0);
                    }
                });
            }
        });
    }

    // =========================
    // BUNGA EFEKTIF
    // =========================
    function calculateRate(plafond, jangkaWaktu, bungaFlat) {
        plafond = parseFloat(plafond);
        jangkaWaktu = parseFloat(jangkaWaktu);
        bungaFlat = parseFloat(bungaFlat);

        var payment = ((plafond * (bungaFlat / 12) * jangkaWaktu) + plafond) / jangkaWaktu;
        return Math.abs(parseFloat((RATE(jangkaWaktu, payment, -plafond, 0, 0)) * 12) * 100);
    }

    function RATE(periods, payment, present, future, type, guess) {
        guess = (guess === undefined) ? 0.01 : guess;
        future = (future === undefined) ? 0 : future;
        type = (type === undefined) ? 0 : type;

        var epsMax = 1e-10;
        var iterMax = 10;

        var y, y0, y1, x0, x1 = 0, f = 0, i = 0;
        var rate = guess;

        if (Math.abs(rate) < epsMax) {
            y = present * (1 + periods * rate) + payment * (1 + rate * type) * periods + future;
        } else {
            f = Math.exp(periods * Math.log(1 + rate));
            y = present * f + payment * (1 / rate + type) * (f - 1) + future;
        }

        y0 = present + payment * periods + future;
        y1 = y;

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

        if (rate === 0) return -(pv + fv) / nper;

        pvif = Math.pow(1 + rate, nper);
        pmt = -rate * (pv * pvif + fv) / (pvif - 1);

        if (type === 1) pmt /= (1 + rate);
        return pmt;
    }

    // =========================
    // AUTO ASS KRD MODAL KERJA (0.8% x plafond x tenure)
    // =========================
    function toggleAssKrdCheckbox() {
        const jenisKredit = getJenisKredit();

        if (jenisKredit === 'Modal Kerja') {
            $('#auto_ass_krd_wrapper').show();
        } else {
            $('#auto_ass_krd_wrapper').hide();
            $('#auto_ass_krd').prop('checked', false);
            ass_krd.setRawValue('0.00'); // reset otomatis bila bukan modal kerja
        }

        // PENSIUN: asuransi kredit tidak dihitung
        if (jenisKredit === 'Pensiun') {
            ass_krd.setRawValue('0.00');
        }
    }

    function hitungAssKrdModalKerja() {
        const jenisKredit = getJenisKredit();
        const isAutoChecked = $('#auto_ass_krd').is(':checked');

        if (jenisKredit === 'Modal Kerja' && isAutoChecked) {
            const plafond_val = parseFloat(plafond.getRawValue() || 0);
            const jangkaWaktu = parseFloat($('#jangka_waktu').val() || 0);
            const tenureYears = jangkaWaktu / 12;

            const assKrdValue = plafond_val * 0.008 * tenureYears;
            ass_krd.setRawValue(Math.abs(assKrdValue).toFixed(2));
        }
    }

    $('#auto_ass_krd').on('change', function () {
        hitungAssKrdModalKerja();
        hitungTotalDiterima();
    });

    // =========================
    // TOTAL DITERIMA
    // =========================
    function hitungTotalDiterima() {
        var plafond_input        = parseFloat(plafond.getRawValue() || 0);
        var biayaNotaris         = parseFloat(biaya_notaris.getRawValue() || 0);
        var biayaProvisi         = parseFloat(biaya_provisi.getRawValue() || 0);
        var biayaAdministrasi    = parseFloat(biaya_administrasi.getRawValue() || 0);
        var biayaAsuransi        = parseFloat(biaya_asuransi.getRawValue() || 0);
        var biayaMaterai         = parseFloat(biaya_materai.getRawValue() || 0);
        var retensiValue         = parseFloat(retensi.getRawValue() || 0);
        var tabunganWajibValue   = parseFloat(tabungan_wajib.getRawValue() || 0);
        var assKrdValue          = parseFloat(ass_krd.getRawValue() || 0);
        var bunga_input          = parseFloat(bunga.getRawValue() || 0);
        var denda_input          = parseFloat(denda.getRawValue() || 0);
        var pinalty_input        = parseFloat(pinalty.getRawValue() || 0);

        var totalDiterima = plafond_input - biayaNotaris - biayaProvisi - biayaAdministrasi -
            biayaAsuransi - biayaMaterai - retensiValue - tabunganWajibValue - assKrdValue -
            bunga_input - denda_input - pinalty_input;

        total_diterima.setRawValue(Math.abs(totalDiterima).toFixed(2));
    }

    // =========================
    // FUNGSI UTAMA SIMULASI (INI KUNCI!)
    // =========================
    async function hitungSimulasi() {
        toggleAssKrdCheckbox(); // pastikan aturan pensiun/modal kerja kepanggil

        let jenisKredit = getJenisKredit();
        let besaranGaji = parseFloat(besaran_gaji.getRawValue() || 0);
        let plafond_input = parseFloat(plafond.getRawValue() || 0);
        let jangkaWaktu = parseFloat($('#jangka_waktu').val() || 0);
        let usia = parseFloat($('#usia').val() || 0);
        let bungaFlat = parseFloat(bunga_flat.getRawValue() || 0) / 100;
        // Materai & Tabungan Wajib
        // - Selain Pensiun: pakai setting_params (readonly, auto)
        // - Pensiun: boleh diinput manual, jangan ditimpa tiap hitung
        if (jenisKredit !== 'Pensiun') {
            biaya_materai.setRawValue(SETTING_MATERAI.toFixed(2));
            tabungan_wajib.setRawValue(SETTING_TABUNGAN_WAJIB.toFixed(2));
        }// Stop jika belum lengkap data utama
        if (!plafond_input || !jangkaWaktu || !usia || !bungaFlat) return;

        // =========================
        // 1) HITUNG BUNGA EFEKTIF
        // =========================
        let bungaEffektif = calculateRate(plafond_input, jangkaWaktu, bungaFlat);
        if (isNaN(bungaEffektif)) return;

        $('#bunga_effektif').val(Math.abs(bungaEffektif).toFixed(2));

        // =========================
        // 2) HITUNG ANGSURAN (PMT)
        // =========================
        let interestRate = (bungaEffektif / 12 / 100);
        let monthlyPayment = PMT(interestRate, jangkaWaktu, -plafond_input, 0, 0);

        angsuran.setRawValue(Math.abs(monthlyPayment).toFixed(2));

        // =========================
        // 3) RETENSI = ANGSURAN (aturanmu)
        // =========================
        retensi.setRawValue(Math.abs(monthlyPayment).toFixed(2));

        // =========================
        // 4) SISA GAJI
        // =========================
        let sisaGaji = besaranGaji - Math.abs(monthlyPayment);
        sisa_gaji.setRawValue(Math.abs(sisaGaji).toFixed(2));

        // =========================
        // 5) PROVISI & ADMIN
        // =========================
        let biayaProvisi = plafond_input * parseFloat('{{ $biaya_provisiValue }}');
        let biayaAdministrasi = plafond_input * parseFloat('{{ $biaya_administrasiValue }}');

        biaya_provisi.setRawValue(Math.abs(biayaProvisi).toFixed(2));
        biaya_administrasi.setRawValue(Math.abs(biayaAdministrasi).toFixed(2));

        // =========================
        // 6) RATE ASURANSI + BIAYA ASURANSI (SEMUA JENIS TERMASUK PENSIUN)
        // =========================
        let rate = await get_asuransi_rate(jangkaWaktu, usia);
        rate_asuransi.setRawValue(Math.abs(rate).toFixed(2));

        let biayaAsuransi = (plafond_input / 1000) * rate;
        biaya_asuransi.setRawValue(Math.abs(biayaAsuransi).toFixed(2)); // FIX

        // =========================
        // 7) ASURANSI KREDIT (ass_krd)
        // =========================
        if (jenisKredit === 'Pensiun') {
            // pensiun tidak menghitung asuransi kredit
            ass_krd.setRawValue('0.00');
        } else if (jenisKredit === 'Modal Kerja') {
            // kalau modal kerja dan checkbox auto dicentang
            hitungAssKrdModalKerja();
        } else {
            // jenis lain default 0 (sesuaikan jika punya aturan lain)
            ass_krd.setRawValue(ass_krd.getRawValue() || '0.00');
        }

        // =========================
        // 8) TOTAL DITERIMA
        // =========================
        hitungTotalDiterima();
    }

    // =========================
    // TRIGGER HITUNG OTOMATIS
    // =========================
    $('#plafond, #jangka_waktu, #bunga_flat, #besaran_gaji, #dsr, #biaya_notaris, #bunga, #denda, #pinalty, #usia, #jenis_kredit')
        .on('change input', function () {
            hitungMaksimalAngsuran();
            hitungSimulasi();
        });

    // Event biaya manual tetap update total
    $('#biaya_notaris, #bunga, #denda, #pinalty, #biaya_materai, #tabungan_wajib').on('input', function () {
        hitungTotalDiterima();
    });

    // INIT
    toggleAssKrdCheckbox();
    setTimeout(function () {
        hitungMaksimalAngsuran();
        hitungSimulasi();
    }, 300);
});
</script>
@endsection

