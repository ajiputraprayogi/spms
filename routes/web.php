<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SettingWebController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\DataPendidikanController;
use App\Http\Controllers\UploadBerkasController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes([
'register' => true,
'reset' => false,
'verify' => false,
]);

//===========================================================================================Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//===========================================================================================Login Admin
Route::get('/sp-admin', [App\Http\Controllers\Auth\LoginController::class, 'indexAdmin'])->name('sp-admin');

//===========================================================================================Simpan Data Diri
Route::post('/data-diri', [DataDiriController::class,'store'])->name('data-diri.storeUser');
//===========================================================================================Simpan Data Pendidikan
Route::post('/data-pendidikan', [DataPendidikanController::class,'store'])->name('data-pendidikan.storeUser');
//===========================================================================================Simpan Data Berkas
Route::post('/data-berkas', [UploadBerkasController::class,'store'])->name('data-berkas.storeUser');


Route::prefix('backend')->middleware('is_admin')->group(function () {

    //===========================================================================================Home Admin
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('home.admin');
    Route::get('/home/edit-profile', [App\Http\Controllers\HomeController::class, 'editprofile']);
    Route::post('/home/edit-profile', [App\Http\Controllers\HomeController::class, 'aksieditprofile']);
    
    //===========================================================================================Users
    Route::get('/list-data-users',[UserController::class,'listdata']);
    Route::resource('users', UserController::class);
    
    //===========================================================================================Roles
    Route::get('/list-data-roles',[RolesController::class,'listdata']);
    Route::resource('roles', RolesController::class);
    
    //===========================================================================================Permission
    Route::get('/list-data-permission',[PermissionController::class,'listdata']);
    Route::resource('permission', PermissionController::class);
    
    //===========================================================================================Setting-Web
    Route::get('/setting-web',[SettingWebController::class,'index']);
    Route::post('/setting-web',[SettingWebController::class,'store']);
    
    //===========================================================================================perusahaan
    Route::resource('/perusahaan', PerusahaanController::class);
    
    //===========================================================================================jabatan
    Route::resource('/jabatan', JabatanController::class);
    
    //===========================================================================================soal
    Route::resource('/soal', SoalController::class);

    //===========================================================================================data diri
    Route::resource('/data-diri', DataDiriController::class);

    //===========================================================================================data pendidikan
    Route::resource('/data-pendidikan', DataPendidikanController::class);

    //===========================================================================================upload berkas
    Route::resource('/upload-berkas', UploadBerkasController::class);
});
