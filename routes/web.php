<?php

use App\Http\Controllers\AdmComunidadController;
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
use App\Http\Controllers\Backend\RrhhAntigenoController;
use App\Http\Controllers\Backend\RrhhBrigadaController;
use App\Http\Controllers\Backend\RrhhComisionController;
use App\Http\Controllers\Backend\RrhhRastrillajeController;
use App\Http\Controllers\Backend\RrhhVacunaController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RrhhCalendarioController;
use App\Http\Controllers\RrhhEventoController;
use App\Models\RrhhComisiones;
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
Route::get('/logout', [AdmUserController::class, 'logout'])->name('logout');


// User Profile
Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function(){
    Route::get('/user/profile', [AdmUserController::class, 'UserProfile'])->name('user.profile');
    // User Edit Profile
    Route::get('/user/profile/edit', [AdmUserController::class, 'UserProfileEdit'])->name('user.profile.edit');
    // User Store Profile
    Route::post('/user/profile/store', [AdmUserController::class, 'UserProfileStore'])->name('user.profile.store');
    // RRHH List All
    Route::get('/rrhh/list', [AdmUserController::class, 'UserList'])->name('rrhh.list');   
    
    // RRHH add
    Route::get('/rrhh/add', [AdmUserController::class, 'UserAdd'])->name('rrhh.add');   
    // RRHH edit
    Route::get('/user/edit/{id}', [AdmUserController::class, 'rrhhEdit'])->name('rrhh.edit');   
    
    /************ Kardex *******/
    // RRHH kardex info
    Route::get('/rrhh/kardex/index/{id}', [AdmUserController::class, 'kardexIndex'])->name('rrhh.kardex.index');   
    Route::get('/rrhh/kardex/cargo/{id}', [AdmUserController::class, 'kardexCargo'])->name('rrhh.kardex.cargo'); 
    Route::get('/rrhh/kardex/educacion/{id}', [AdmUserController::class, 'kardexEducacion'])->name('rrhh.kardex.educacion'); 
    Route::get('/rrhh/kardex/establecimiento/{id}', [AdmUserController::class, 'kardexEstablecimiento'])->name('rrhh.kardex.establecimiento'); 
    Route::get('/rrhh/kardex/supervision/{id}', [AdmUserController::class, 'kardexSupervision'])->name('rrhh.kardex.supervision'); 
    Route::get('/rrhh/kardex/vacuna/{id}', [AdmUserController::class, 'kardexVacuna'])->name('rrhh.kardex.vacuna'); 
    Route::get('/rrhh/kardex/baja/{id}', [AdmUserController::class, 'kardexBaja'])->name('rrhh.kardex.baja'); 
    

    /**************Comisiones************/
    Route::resource('/comisiones', RrhhComisionController::class)->names('comisiones');

    /*EESS*/
    // EESS List All
    Route::get('/eess/list', [AdmEstablecimientoController::class, 'EessList'])->name('eess.list');   
    // EESS add
    Route::get('/eess/add', [AdmEstablecimientoController::class, 'EessAdd'])->name('eess.add');   
    // EESS edit
    Route::get('/eess/edit/{id}', [AdmEstablecimientoController::class, 'EessEdit'])->name('eess.edit');   
    Route::get('/eess/view/{id}', [AdmEstablecimientoController::class, 'EessView'])->name('eess.view');   
    
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
    
    /**************Brigadas************/
    Route::resource('/brigadas', RrhhBrigadaController::class)->names('brigadas');

    //Antigeno
    Route::resource('/antigenos', RrhhAntigenoController::class)->names('antigenos');

    //Rastrillaje
    Route::resource('/rastrillajes', RrhhRastrillajeController::class)->names('rastrillajes');

    //Vacunas
    Route::resource('/vacunas', RrhhVacunaController::class)->names('vacunas');

    /*************Territorio*******************/
    //Departamento
    Route::resource('/departamentos', AdmDepartamentoController::class)->names('departamentos');
    //Redes
    Route::resource('/redes', AdmRedController::class)->names('redes');
    //Municipio
    Route::resource('/municipios', AdmMunicipioController::class)->names('municipios');
    // Comunidades
    Route::resource('/comunidades', AdmComunidadController::class)->names('comunidades');
      
});







//
Route::get('/contact-asf', [ContactController::class, 'index'])->name('con');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     // $users = User::all();
//     $users = DB::table('users')->get();
//     return view('dashboard', compact('users'));
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

