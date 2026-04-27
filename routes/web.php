<?php

use App\Http\Controllers\AccountOfficerController;
use App\Http\Controllers\AnalisaKreditController;
use App\Http\Controllers\MasterDebiturController;
use App\Http\Controllers\SimulationController;
use App\Http\Controllers\DebiturModalKerjaController;
use App\Http\Controllers\DebiturPensiunController;
use App\Http\Controllers\DebiturPasarController;
use App\Http\Controllers\DebiturUMKMController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/cek-route-umkm', function () {
    return \Illuminate\Support\Facades\Route::has('debitur-umkm.create') ? 'ADA' : 'TIDAK ADA';
});

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
Route::get('simulations/{simulation}/download', [SimulationController::class, 'download'])->name('simulations.download');

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

// =========================
// DEBITUR MODAL KERJA (URL BARU)
// =========================
Route::prefix('debitur/modal-kerja')
    ->name('debitur-modal-kerja.')
    ->group(function () {

    // CRUD
    Route::get('/', [DebiturModalKerjaController::class, 'index'])->name('index');
    Route::get('/{id}', [DebiturModalKerjaController::class, 'show'])->name('show');
    Route::get('/create/{simulation}', [DebiturModalKerjaController::class, 'create'])->name('create');
    Route::post('/', [DebiturModalKerjaController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [DebiturModalKerjaController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DebiturModalKerjaController::class, 'update'])->name('update');
    Route::delete('/{id}', [DebiturModalKerjaController::class, 'destroy'])->name('destroy');

    // Export Excel
    Route::get('/{id}/export', [DebiturModalKerjaController::class, 'export'])->name('export');

    // Export Dokumen (SEMUA ROUTE NAME UNIQUE)
    Route::prefix('export')->name('export.')->group(function () {
        Route::get('tanda-terima/{id}', [DebiturModalKerjaController::class, 'tanda_terima_export'])->name('tanda_terima');
        Route::get('sttu/{id}', [DebiturModalKerjaController::class, 'sttu_export'])->name('sttu');
        Route::get('sppk/{id}', [DebiturModalKerjaController::class, 'sppk_export'])->name('sppk');
        Route::get('surat-kuasa/{id}', [DebiturModalKerjaController::class, 'surat_kuasa_export'])->name('surat_kuasa');

        Route::get('pk-kredit-perusahaan/{id}', [DebiturModalKerjaController::class, 'pk_kredit_perusahaan_export'])->name('pk_kredit_perusahaan');
        Route::get('pk-snd-sim/{id}', [DebiturModalKerjaController::class, 'pk_snd_sim_export'])->name('pk_snd_sim');
        Route::get('pk-kredit-pasangan/{id}', [DebiturModalKerjaController::class, 'pk_kredit_pasangan_export'])->name('pk_kredit_pasangan');

        Route::get('memo-kredit/{id}', [DebiturModalKerjaController::class, 'memo_kredit_export'])->name('memo_kredit');
        Route::get('memo-fasilitas-kredit/{id}', [DebiturModalKerjaController::class, 'memo_fasilitas_kredit_export'])->name('memo_fasilitas_kredit');

        Route::get('surat-askep/{id}', [DebiturModalKerjaController::class, 'surat_askep_export'])->name('surat_askep');
        Route::get('mcc/{id}', [DebiturModalKerjaController::class, 'mcc_export'])->name('mcc');
        Route::get('tanda-terima/{id}', [DebiturModalKerjaController::class, 'tanda_terima_export'])->name('tanda_terima');
    });
});

// =========================
// DEBITUR PENSIUN
// =========================
Route::prefix('debitur/pensiun')
    ->name('debitur-pensiun.')
    ->group(function () {

    Route::get('/', [DebiturPensiunController::class, 'index'])->name('index');
    Route::get('/open/{id}', [DebiturPensiunController::class, 'open'])->name('open');
    Route::get('/{id}', [DebiturPensiunController::class, 'show'])->name('show');
    Route::post('/', [DebiturPensiunController::class, 'store'])->name('store');
    Route::get('/create/{simulation}', [DebiturPensiunController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [DebiturPensiunController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DebiturPensiunController::class, 'update'])->name('update');
    Route::delete('/{id}', [DebiturPensiunController::class, 'destroy'])->name('destroy');

    Route::get('/{id}/export', [DebiturPensiunController::class, 'export'])->name('export');

    Route::prefix('export')->name('export.')->group(function () {
        Route::get('tanda-terima/{id}', [DebiturPensiunController::class, 'tanda_terima_export'])->name('tanda_terima');
        Route::get('sttu/{id}', [DebiturPensiunController::class, 'sttu_export'])->name('sttu');
        Route::get('sppk/{id}', [DebiturPensiunController::class, 'sppk_export'])->name('sppk');
        Route::get('surat-kuasa/{id}', [DebiturPensiunController::class, 'surat_kuasa_export'])->name('surat_kuasa');

        Route::get('pk-kredit-perusahaan/{id}', [DebiturPensiunController::class, 'pk_kredit_perusahaan_export'])->name('pk_kredit_perusahaan');
        Route::get('pk-snd-sim/{id}', [DebiturPensiunController::class, 'pk_snd_sim_export'])->name('pk_snd_sim');
        Route::get('pk-kredit-pasangan/{id}', [DebiturPensiunController::class, 'pk_kredit_pasangan_export'])->name('pk_kredit_pasangan');

        Route::get('memo-kredit/{id}', [DebiturPensiunController::class, 'memo_kredit_pensiun_export'])->name('memo_kredit');
        Route::get('memo-fasilitas-kredit/{id}', [DebiturPensiunController::class, 'memo_fasilitas_kredit_export'])->name('memo_fasilitas_kredit');

        Route::get('surat-askep/{id}', [DebiturPensiunController::class, 'surat_askep_export'])->name('surat_askep');
        Route::get('mcc/{id}', [DebiturPensiunController::class, 'mcc_export'])->name('mcc');
    });
});

// =========================
// DEBITUR PASAR
// =========================
Route::prefix('debitur/pasar')
    ->name('debitur-pasar.')
    ->group(function () {

    Route::get('/', [DebiturPasarController::class, 'index'])->name('index');
    Route::get('/open/{id}', [DebiturPasarController::class, 'open'])->name('open');
    Route::get('/{id}', [DebiturPasarController::class, 'show'])->name('show');
    Route::post('/', [DebiturPasarController::class, 'store'])->name('store');
    Route::get('/create/{simulation}', [DebiturPasarController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [DebiturPasarController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DebiturPasarController::class, 'update'])->name('update');
    Route::delete('/{id}', [DebiturPasarController::class, 'destroy'])->name('destroy');

    Route::get('/{id}/export', [DebiturPasarController::class, 'export'])->name('export');

    Route::prefix('export')->name('export.')->group(function () {
        Route::get('tanda-terima/{id}', [DebiturPasarController::class, 'tanda_terima_export'])->name('tanda_terima');
        Route::get('sttu/{id}', [DebiturPasarController::class, 'sttu_export'])->name('sttu');
        Route::get('sppk/{id}', [DebiturPasarController::class, 'sppk_export'])->name('sppk');
        Route::get('surat-kuasa/{id}', [DebiturPasarController::class, 'surat_kuasa_export'])->name('surat_kuasa');

        Route::get('pk-kredit-perusahaan/{id}', [DebiturPasarController::class, 'pk_kredit_perusahaan_export'])->name('pk_kredit_perusahaan');
        Route::get('pk-snd-sim/{id}', [DebiturPasarController::class, 'pk_snd_sim_export'])->name('pk_snd_sim');
        Route::get('pk-kredit-pasangan/{id}', [DebiturPasarController::class, 'pk_kredit_pasangan_export'])->name('pk_kredit_pasangan');

        Route::get('memo-kredit/{id}', [DebiturPasarController::class, 'memo_kredit_pasar_export'])->name('memo_kredit');
        Route::get('memo-fasilitas-kredit/{id}', [DebiturPasarController::class, 'memo_fasilitas_kredit_export'])->name('memo_fasilitas_kredit');

        Route::get('surat-askep/{id}', [DebiturPasarController::class, 'surat_askep_export'])->name('surat_askep');
        Route::get('mcc/{id}', [DebiturPasarController::class, 'mcc_export'])->name('mcc');
    });
});

// =========================
// DEBITUR UMKM
// =========================
Route::prefix('debitur/umkm')
    ->name('debitur-umkm.')
    ->group(function () {

        Route::get('/', [DebiturUMKMController::class, 'index'])->name('index');
        Route::get('/open/{id}', [DebiturUMKMController::class, 'open'])->name('open');
        Route::get('/{id}', [DebiturUMKMController::class, 'show'])->name('show');
        Route::post('/', [DebiturUMKMController::class, 'store'])->name('store');

        // ✅ INI YANG KAMU BUTUH: route name "debitur-umkm.create"
        Route::get('/create/{simulation}', [DebiturUMKMController::class, 'create'])->name('create');

        // ✅ Optional: biar link lama /simulation/... tetap jalan (kalau ada yg pakai)
        Route::get('/simulation/{simulation}', [DebiturUMKMController::class, 'create'])->name('simulation');

        Route::get('/{id}/edit', [DebiturUMKMController::class, 'edit'])->name('edit');
        Route::put('/{id}', [DebiturUMKMController::class, 'update'])->name('update');
        Route::delete('/{id}', [DebiturUMKMController::class, 'destroy'])->name('destroy');

        Route::get('/{id}/export', [DebiturUMKMController::class, 'export'])->name('export');

        Route::prefix('export')->name('export.')->group(function () {
            Route::get('tanda-terima/{id}', [DebiturUMKMController::class, 'tanda_terima_export'])->name('tanda_terima');
            Route::get('sttu/{id}', [DebiturUMKMController::class, 'sttu_export'])->name('sttu');
            Route::get('sppk/{id}', [DebiturUMKMController::class, 'sppk_export'])->name('sppk');
            Route::get('surat-kuasa/{id}', [DebiturUMKMController::class, 'surat_kuasa_export'])->name('surat_kuasa');

            Route::get('pk-kredit-perusahaan/{id}', [DebiturUMKMController::class, 'pk_kredit_perusahaan_export'])->name('pk_kredit_perusahaan');
            Route::get('pk-snd-sim/{id}', [DebiturUMKMController::class, 'pk_snd_sim_export'])->name('pk_snd_sim');
            Route::get('pk-kredit-pasangan/{id}', [DebiturUMKMController::class, 'pk_kredit_pasangan_export'])->name('pk_kredit_pasangan');

            Route::get('memo-kredit/{id}', [DebiturUMKMController::class, 'memo_kredit_pensiun_export'])->name('memo_kredit');
            Route::get('memo-fasilitas-kredit/{id}', [DebiturUMKMController::class, 'memo_fasilitas_kredit_export'])->name('memo_fasilitas_kredit');

            Route::get('surat-askep/{id}', [DebiturUMKMController::class, 'surat_askep_export'])->name('surat_askep');
            Route::get('mcc/{id}', [DebiturUMKMController::class, 'mcc_export'])->name('mcc');
        });
    });



// ===== OTHER ROUTES =====
Route::get('/get_rate_asuransi', [SimulationController::class, 'get_rate_asuransi']);
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// ===== CATCH ALL ROUTE - HARUS PALING TERAKHIR =====
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
