<?php

use App\Http\Controllers\AccountOfficerController;
use App\Http\Controllers\AnalisaKreditController;
use App\Http\Controllers\MasterDebiturController;
use App\Http\Controllers\SimulationController;
use App\Http\Controllers\DebiturModalKerjaController;
use App\Http\Controllers\DebiturPensiunController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

// ============================================================
// DEBUG ROUTES - LETAKKAN DI SINI, SEBELUM ROUTE LAINNYA
// ============================================================
Route::get('/list-debiturs', function() {
    $debiturs = \App\Models\MasterDebitur::select('id', 'nama')->get();
    
    if ($debiturs->isEmpty()) {
        return "Tidak ada data debitur di database!";
    }
    
    $html = '<h3>Daftar Debitur:</h3><ul>';
    foreach ($debiturs as $debitur) {
        $html .= '<li>ID: ' . $debitur->id . ' - Nama: ' . $debitur->nama . 
                 ' <a href="/debiturs/export-memo-kredit/' . $debitur->id . '">Export Memo</a></li>';
    }
    $html .= '</ul>';
    
    return $html;
});

Route::get('/debug-memo/{id}', function($id) {
    $debitur = \App\Models\MasterDebitur::with('simulation')->find($id);
    
    if (!$debitur) {
        return "Debitur dengan ID {$id} tidak ditemukan!";
    }
    
    return [
        'id' => $debitur->id,
        'nama' => $debitur->nama,
        'simulation' => $debitur->simulation ? 'Ada' : 'Tidak ada'
    ];
});


// ===== DEBITURS EXPORT ROUTES - HARUS DI ATAS RESOURCE ROUTE =====
//Route::get('debiturs/export-data-calon-debitur/{id}', [MasterDebiturController::class, 'data_calon_debitur_export'])->name('debiturs_data_calon_debitur_export');
//Route::get('debiturs/export-analisa-yuridis/{id}', [MasterDebiturController::class, 'analisa_yuridis_export'])->name('debiturs_analisa_yuridis_export');
//Route::get('debiturs/export-tanda-terima/{id}', [MasterDebiturController::class, 'tanda_terima_export'])->name('debiturs_tanda_terima_export');
//Route::get('debiturs/export-sttu/{id}', [MasterDebiturController::class, 'sttu_export'])->name('debiturs_sttu_export');
//Route::get('debiturs/export-sppk/{id}', [MasterDebiturController::class, 'sppk_export'])->name('debiturs_sppk_export');
//Route::get('debiturs/export-pk-kredit-reguler/{id}', [MasterDebiturController::class, 'pk_kredit_reguler_export'])->name('debiturs_pk_kredit_reguler_export');
//Route::get('debiturs/export-pk-kredit-non-mou-sendiri/{id}', [MasterDebiturController::class, 'pk_kredit_non_mou_sendiri_export'])->name('debiturs_pk_kredit_non_mou_sendiri_export');
//Route::get('debiturs/export-pk-kredit-non-mou-pasangan/{id}', [MasterDebiturController::class, 'pk_kredit_non_mou_pasangan_export'])->name('debiturs_pk_kredit_non_mou_pasangan_export');
//Route::get('debiturs/export-pk-kredit-sendiri/{id}', [MasterDebiturController::class, 'pk_kredit_sendiri_export'])->name('debiturs_pk_kredit_sendiri_export');
//Route::get('debiturs/export-pk-kredit-pasangan/{id}', [MasterDebiturController::class, 'pk_kredit_pasangan_export'])->name('debiturs_pk_kredit_pasangan_export');
//Route::get('debiturs/export-memo-kredit/{id}', [MasterDebiturController::class, 'memo_kredit_export'])->name('debiturs_memo_kredit_export');
//Route::get('debiturs/export-analisa-kredit/{id}', [MasterDebiturController::class, 'analisa_kredit_export'])->name('debiturs_analisa_kredit_export');

// ===== DEBITURS OTHER ROUTES =====
Route::get('debiturs/simulation/{id}', [MasterDebiturController::class, 'create'])->name('debiturs_simulation');
Route::get('debiturs/analisa-kredit/{id}', [MasterDebiturController::class, 'analisa_kredit'])->name('debiturs_analisa_kredit');

// ===== USERS ROUTES =====
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// ===== ANALISA KREDIT ROUTES =====
Route::get('/analisa_kredit', [AnalisaKreditController::class, 'index'])->name('analisa_kredit.index');
Route::get('/analisa_kredit/create/{id}', [AnalisaKreditController::class, 'create'])->name('analisa_kredit.create');
Route::post('/analisa_kredit', [AnalisaKreditController::class, 'store'])->name('analisa_kredit.store');
Route::get('/analisa_kredit/{id}/edit', [AnalisaKreditController::class, 'edit'])->name('analisa_kredit.edit');
Route::put('/analisa_kredit/{id}', [AnalisaKreditController::class, 'update'])->name('analisa_kredit.update');
Route::get('/analisa_kredit/{id}', [AnalisaKreditController::class, 'show'])->name('analisa_kredit.show');
Route::delete('/analisa_kredit/{id}', [AnalisaKreditController::class, 'destroy'])->name('analisa_kredit.destroy');
Route::get('analisa_kredit/export-data/{id}', [AnalisaKreditController::class, 'export'])->name('analisa_kredit.export');

// ===== DEBITURS EDIT ROUTE (Sebelum Resource) =====
Route::get('/debiturs/{id}/edit', [MasterDebiturController::class, 'edit'])->name('debiturs.edit');

// ===== RESOURCE ROUTES =====
Route::resource('debiturs', MasterDebiturController::class);
Route::resource('account_officers', AccountOfficerController::class);
Route::resource('simulations', SimulationController::class);
// ===== DEBITURS EXPORT ROUTES - Modal Kerja =====
Route::resource('debitur-modal-kerja', DebiturModalKerjaController::class);
Route::get('debitur-modal-kerja/{id}/export', [DebiturModalKerjaController::class, 'export'])->name('debitur-modal-kerja.export');
//Route::get('debiturs/modal-kerja/export-analisa-yuridis/{id}', [DebiturModalKerjaController::class, 'analisa_yuridis_export'])->name('debiturs_analisa_yuridis_export');
Route::get('debiturs/modal-kerja/export-tanda-terima/{id}', [DebiturModalKerjaController::class, 'tanda_terima_export'])->name('debiturs_tanda_terima_export');
Route::get('debiturs/modal-kerja/export-sttu/{id}', [DebiturModalKerjaController::class, 'sttu_export'])->name('debiturs_sttu_export');
Route::get('debiturs/modal-kerja/export-sppk/{id}', [DebiturModalKerjaController::class, 'sppk_export'])->name('debiturs_sppk_export');
Route::get('debiturs/modal-kerja/export-surat-kuasa/{id}', [DebiturModalKerjaController::class, 'surat_kuasa_export'])->name('debiturs_surat_kuasa_export');
//Route::get('debiturs/export-pk-kredit-reguler/{id}', [MasterDebiturController::class, 'pk_kredit_reguler_export'])->name('debiturs_pk_kredit_reguler_export');
Route::get('debiturs/modal-kerja/export-pk-kredit-perusahaan/{id}', [DebiturModalKerjaController::class, 'pk_kredit_perusahaan_export'])->name('debiturs_pk_kredit_perusahaan_export');
//Route::get('debiturs/export-pk-kredit-non-mou-pasangan/{id}', [MasterDebiturController::class, 'pk_kredit_non_mou_pasangan_export'])->name('debiturs_pk_kredit_non_mou_pasangan_export');
Route::get('debiturs/modal-kerja/export-pk-snd-sim/{id}', [DebiturModalKerjaController::class, 'pk_snd_sim_export'])->name('debiturs_pk_snd_sim_export');
Route::get('debiturs/modal-kerja/export-pk-kredit-pasangan/{id}', [DebiturModalKerjaController::class, 'pk_kredit_pasangan_export'])->name('debiturs_pk_kredit_pasangan_export');
Route::get('debiturs/modal-kerja/export-memo-kredit/{id}', [DebiturModalKerjaController::class, 'memo_kredit_export'])->name('debiturs.modal_kerja.memo_kredit_export');
Route::get('debiturs/modal-kerja/export-surat-askep/{id}', [DebiturModalKerjaController::class, 'surat_askep_export'])->name('debiturs_surat_askep_export');
Route::get('debiturs/modal-kerja/export-memo-fasilitas-kredit/{id}', [DebiturModalKerjaController::class, 'memo_fasilitas_kredit_export'])->name('debiturs_memo_fasilitas_kredit_export');
//Route::get('/debitur-modal-kerja/{id}/memo-fasilitas/pdf', [DebiturModalKerjaController::class, 'memoFasilitasPdf'])->name('debitur-modal-kerja.memo_fasilitas_pdf');
Route::get('debiturs/modal-kerja/export-mcc/{id}', [DebiturModalKerjaController::class, 'mcc_export'])->name('debiturs_mcc_export');
//Route::get('debiturs/export-analisa-kredit/{id}', [MasterDebiturController::class, 'analisa_kredit_export'])->name('debiturs_analisa_kredit_export');

// ===== DEBITURS EXPORT ROUTES - Kredit pensiun =====
Route::get('debitur-pensiun/open/{id}', [DebiturPensiunController::class, 'open'])->name('debitur-pensiun.open');
Route::resource('debitur-pensiun', DebiturPensiunController::class);
Route::get('debitur-pensiun/{id}/export', [DebiturPensiunController::class, 'export'])->name('debitur-pensiun.export');
//Route::get('debiturs/modal-kerja/export-analisa-yuridis/{id}', [DebiturModalKerjaController::class, 'analisa_yuridis_export'])->name('debiturs_analisa_yuridis_export');
Route::get('debiturs/pensiun/export-tanda-terima/{id}', [DebiturPensiunController::class, 'tanda_terima_export'])->name('debiturs_tanda_terima_export');
Route::get('debiturs/pensiun/export-sttu/{id}', [DebiturPensiunController::class, 'sttu_export'])->name('debiturs_sttu_export');
Route::get('debiturs/pensiun/export-sppk/{id}', [DebiturPensiunController::class, 'sppk_export'])->name('debiturs_sppk_export');
Route::get('debiturs/pensiun/export-surat-kuasa/{id}', [DebiturPensiunController::class, 'surat_kuasa_export'])->name('debiturs_surat_kuasa_export');
//Route::get('debiturs/export-pk-kredit-reguler/{id}', [MasterDebiturController::class, 'pk_kredit_reguler_export'])->name('debiturs_pk_kredit_reguler_export');
Route::get('debiturs/pensiun/export-pk-kredit-perusahaan/{id}', [DebiturPensiunController::class, 'pk_kredit_perusahaan_export'])->name('debiturs_pk_kredit_perusahaan_export');
//Route::get('debiturs/export-pk-kredit-non-mou-pasangan/{id}', [MasterDebiturController::class, 'pk_kredit_non_mou_pasangan_export'])->name('debiturs_pk_kredit_non_mou_pasangan_export');
Route::get('debiturs/pensiun/export-pk-snd-sim/{id}', [DebiturPensiunController::class, 'pk_snd_sim_export'])->name('debiturs_pk_snd_sim_export');
Route::get('debiturs/pensiun/export-pk-kredit-pasangan/{id}', [DebiturPensiunController::class, 'pk_kredit_pasangan_export'])->name('debiturs_pk_kredit_pasangan_export');
Route::get('debiturs/pensiun/export-memo-kredit-pensiun/{id}', [DebiturPensiunController::class, 'memo_kredit_pensiun_export'])->name('debiturs_memo_kredit_pensiun_export');
Route::get('debiturs/pensiun/export-surat-askep/{id}', [DebiturPensiunController::class, 'surat_askep_export'])->name('debiturs_surat_askep_export');
Route::get('debiturs/pensiun/export-memo-fasilitas-kredit/{id}', [DebiturPensiunController::class, 'memo_fasilitas_kredit_export'])->name('debiturs_memo_fasilitas_kredit_export');
//Route::get('/debitur-modal-kerja/{id}/memo-fasilitas/pdf', [DebiturModalKerjaController::class, 'memoFasilitasPdf'])->name('debitur-modal-kerja.memo_fasilitas_pdf');
Route::get('debiturs/pensiun/export-mcc/{id}', [DebiturPensiunController::class, 'mcc_export'])->name('debiturs_mcc_export');
//Route::get('debiturs/export-analisa-kredit/{id}', [MasterDebiturController::class, 'analisa_kredit_export'])->name('debiturs_analisa_kredit_export');

// ===== OTHER ROUTES =====
Route::get('/get_rate_asuransi', [SimulationController::class, 'get_rate_asuransi']);
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// ===== CATCH ALL ROUTE - HARUS PALING TERAKHIR =====
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
