<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdmDepartamentoController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdmMunicipioController;
use App\Http\Controllers\AdmProvinciaController;
use App\Http\Controllers\AdmRedController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo 'This is home page';
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/about', function () {
//     return view('about');
// })->middleware('check');
// UserLogout
Route::get('/logout', [AdminUserController::class, 'AdminLogout'])->name('admin.logout');
// User Profile
Route::prefix('admin')->group(function(){
    Route::get('/user/profile', [AdminUserController::class, 'UserProfile'])->name('user.profile');
});



//
Route::get('/contact-asf', [ContactController::class, 'index'])->name('con');

//AdmDepartamento Controller
Route::get('/departamento/all', [AdmDepartamentoController::class, 'AllDepartamento'])->name('all.departamento');

//AdmProvincia Controller
Route::get('/provincia/all', [AdmProvinciaController::class, 'AllProvincia'])->name('all.provincia');

//AdmMunicipio Controller
Route::get('/municipio/all', [AdmMunicipioController::class, 'AllMunicipio'])->name('all.municipio');

//AdmRed Controller
Route::get('/red/all', [AdmRedController::class, 'AllRed'])->name('all.red');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     // $users = User::all();n
//     $users = DB::table('users')->get();
//     return view('dashboard', compact('users'));
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

