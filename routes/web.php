<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdmDepartamentoController;
use App\Http\Controllers\AdmEesstipoController;
use App\Http\Controllers\AdmUserController;
use App\Http\Controllers\AdmMunicipioController;
use App\Http\Controllers\AdmProvinciaController;
use App\Http\Controllers\AdmRedController;
use App\Http\Controllers\AdmEstablecimientoController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\RrhhCalendarioController;
use App\Http\Controllers\RrhhEventoController;
use App\Models\User;
use GuzzleHttp\Middleware;
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
Route::get('/logout', [AdmUserController::class, 'AdminLogout'])->name('admin.logout');
// User Profile
Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function(){
    Route::get('/user/profile', [AdmUserController::class, 'UserProfile'])->name('user.profile');
    // User Edit Profile
    Route::get('/user/profile/edit', [AdmUserController::class, 'UserProfileEdit'])->name('user.profile.edit');
    // User Store Profile
    Route::post('/user/profile/store', [AdmUserController::class, 'UserProfileStore'])->name('user.profile.store');
    // RRHH List All
    Route::get('/rrhh/list', [AdmUserController::class, 'UserList'])->name('rrhh.list');   
    // RRHH view
    Route::get('/rrhh/view/{id}', [AdmUserController::class, 'rrhhView'])->name('rrhh.view');   
    // RRHH add
    Route::get('/rrhh/add', [AdmUserController::class, 'UserAdd'])->name('rrhh.add');   
    // RRHH edit
    Route::get('/user/edit/{id}', [AdmUserController::class, 'rrhhEdit'])->name('rrhh.edit');   
    
    /*EESS*/
    // EESS List All
    Route::get('/eess/list', [AdmEstablecimientoController::class, 'EessList'])->name('eess.list');   
    // EESS add
    Route::get('/eess/add', [AdmEstablecimientoController::class, 'EessAdd'])->name('eess.add');   
    // EESS edit
    Route::get('/eess/edit/{id}', [AdmEstablecimientoController::class, 'EessEdit'])->name('eess.edit');   
    
    // Tipo EESS List All
    Route::get('/eess/tipo/list', [AdmEesstipoController::class, 'EesstipoList'])->name('eess.tipo.list');   
    // Tipo EESS Add
    Route::get('/eess/tipo/add', [AdmEesstipoController::class, 'EesstipoAdd'])->name('eess.tipo.add');   

    // Tipo EESS Store
    Route::post('/eess/tipo/store', [AdmEesstipoController::class, 'EesstipoStore'])->name('eess.tipo.store');   


    /******CALENDARIO */
    Route::get('/calendario/index', [RrhhCalendarioController::class, 'index'])->name('calendario.index');   
    // Route::get('/calendario/index', [RrhhCalendarioController::class, 'eventos'])->name('eventos');   
    Route::post('/calendario/store', [RrhhCalendarioController::class, 'store'])->name('calendario.store');   
    
    //Roles
    // Route::resource('')
    Route::get('/roles/index', [RoleController::class, 'index'])->name('roles.index');   
    Route::get('/roles/edit/{user}', [RoleController::class, 'edit'])->name('role.edit');   

      
});







//
Route::get('/contact-asf', [ContactController::class, 'index'])->name('con');

//AdmDepartamento Controller
Route::get('/departamento/all', [AdmDepartamentoController::class, 'AllDepartamento'])->name('all.departamento');

//AdmProvincia Controller
Route::get('/provincia/all', [AdmProvinciaController::class, 'AllProvincia'])->name('all.provincia');

//AdmMunicipio Controller
Route::get('/municipio/list', [AdmMunicipioController::class, 'MunicipioList'])->name('municipio.list');

//AdmRedes Controller
Route::get('/red/list', [AdmRedController::class, 'RedList'])->name('red.list');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     // $users = User::all();
//     $users = DB::table('users')->get();
//     return view('dashboard', compact('users'));
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

