<?php

use App\Http\Controllers\AccountOfficerController;
use App\Http\Controllers\AnalisaKreditController;
use App\Http\Controllers\MasterDebiturController;
use App\Http\Controllers\SimulationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::get('debiturs/simulation/{id}', [MasterDebiturController::class, 'create'])->name('debiturs_simulation');
Route::get('debiturs/analisa-kredit/{id}', [MasterDebiturController::class, 'analisa_kredit'])->name('debiturs_analisa_kredit');
Route::get('debiturs/export-analisa-kredit/{id}', [MasterDebiturController::class, 'analisa_kredit_export'])->name('debiturs_analisa_kredit_export');
Route::get('debiturs/export-memo-kredit/{id}', [MasterDebiturController::class, 'memo_kredit_export'])->name('debiturs_memo_kredit_export');
Route::get('debiturs/export-pk-kredit-pasangan/{id}', [MasterDebiturController::class, 'pk_kredit_pasangan_export'])->name('debiturs_pk_kredit_pasangan_export');
Route::get('debiturs/export-pk-kredit-sendiri/{id}', [MasterDebiturController::class, 'pk_kredit_sendiri_export'])->name('debiturs_pk_kredit_sendiri_export');
Route::get('debiturs/export-pk-kredit-non-mou-pasangan/{id}', [MasterDebiturController::class, 'pk_kredit_non_mou_pasangan_export'])->name('debiturs_pk_kredit_non_mou_pasangan_export');
Route::get('debiturs/export-pk-kredit-non-mou-sendiri/{id}', [MasterDebiturController::class, 'pk_kredit_non_mou_sendiri_export'])->name('debiturs_pk_kredit_non_mou_sendiri_export');
Route::get('debiturs/export-pk-kredit-reguler/{id}', [MasterDebiturController::class, 'pk_kredit_reguler_export'])->name('debiturs_pk_kredit_reguler_export');
Route::get('debiturs/export-sppk/{id}', [MasterDebiturController::class, 'sppk_export'])->name('debiturs_sppk_export');
Route::get('debiturs/export-sttu/{id}', [MasterDebiturController::class, 'sttu_export'])->name('debiturs_sttu_export');
Route::get('debiturs/export-tanda-terima/{id}', [MasterDebiturController::class, 'tanda_terima_export'])->name('debiturs_tanda_terima_export');
Route::get('debiturs/export-analisa-yuridis/{id}', [MasterDebiturController::class, 'analisa_yuridis_export'])->name('debiturs_analisa_yuridis_export');
Route::get('debiturs/export-data-calon-debitur/{id}', [MasterDebiturController::class, 'data_calon_debitur_export'])->name('debiturs_data_calon_debitur_export');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Menampilkan form untuk membuat user baru
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Menyimpan user baru ke dalam database
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Menampilkan detail user berdasarkan ID
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

// Menampilkan form untuk mengedit user berdasarkan ID
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

// Mengupdate user berdasarkan ID
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

// Menghapus user berdasarkan ID
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::resource('account_officers', AccountOfficerController::class);
Route::get('/analisa_kredit', [AnalisaKreditController::class, 'index'])->name('analisa_kredit.index');

Route::get('/analisa_kredit/create/{id}', [AnalisaKreditController::class, 'create'])->name('analisa_kredit.create');
Route::post('/analisa_kredit', [AnalisaKreditController::class, 'store'])->name('analisa_kredit.store');
Route::get('/analisa_kredit/{id}/edit', [AnalisaKreditController::class, 'edit'])->name('analisa_kredit.edit');
Route::put('/analisa_kredit/{id}', [AnalisaKreditController::class, 'update'])->name('analisa_kredit.update');
Route::get('/analisa_kredit/{id}', [AnalisaKreditController::class, 'show'])->name('analisa_kredit.show');
Route::delete('/analisa_kredit/{id}', [AnalisaKreditController::class, 'destroy'])->name('analisa_kredit.destroy');
Route::get('analisa_kredit/export-data/{id}', [AnalisaKreditController::class, 'export'])->name('analisa_kredit.export');

//Route::resource('analisa_kredit', AnalisaKreditController::class);
Route::get('/debiturs/{id}/edit', [MasterDebiturController::class, 'edit'])->name('users.edit');
Route::resource('debiturs', MasterDebiturController::class);

Route::resource('simulations', SimulationController::class);
Route::get('/get_rate_asuransi', [SimulationController::class, 'get_rate_asuransi']);

Route::resource('debitur-modal-kerja', App\Http\Controllers\DebiturModalKerjaController::class);
Route::get('debitur-modal-kerja/{id}/export', [App\Http\Controllers\DebiturModalKerjaController::class, 'export'])->name('debitur-modal-kerja.export');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
