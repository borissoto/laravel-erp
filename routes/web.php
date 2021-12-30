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
use App\Http\Controllers\Backend\AlmacenController;
use App\Http\Controllers\Backend\PlanEstudiosController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\RrhhAntigenoController;
use App\Http\Controllers\Backend\RrhhBrigadaController;
use App\Http\Controllers\Backend\RrhhComisionController;
use App\Http\Controllers\Backend\RrhhRastrillajeController;
use App\Http\Controllers\Backend\RrhhVacunaController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Configuracion\ConfiguracionController;
use App\Http\Controllers\Helpers\CuadernosController;
use App\Http\Controllers\Helpers\CuadernosImportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RrhhCalendarioController;
use App\Http\Controllers\SalaCovidController;
use App\Http\Controllers\SalaSituacionalController;
use App\Http\Controllers\Viaje\AdmViajeController;
use App\Models\RrhhComisiones;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

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

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    
    if (App::environment('production')) {
        URL::forceScheme('https');
    }
    
    return view('welcome');
});

Route::get('/home', function () {
    echo 'This is home page';
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/salasituacional', [SalaSituacionalController::class, 'index'])->name('sala.index');   
Route::get('/salacovid', [SalaCovidController::class, 'covid'])->name('sala.covid');
Route::get('/salacovid/positivos', [SalaCovidController::class, 'positivos']);   
Route::get('/salacovid/atendidos', [SalaCovidController::class, 'atendidos']);   
Route::get('/salacovid/vacunas', [SalaCovidController::class, 'vacunas']);   
Route::get('/salacovid/antigenos', [SalaCovidController::class, 'antigenos']);   
// Route::get('/about', function () {
//     return view('about');
// })->middleware('check');
// UserLogout
// Route::post('/logout', [AdmUserController::class, 'logout'])->name('logout');


// User Profile
Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function(){
    Route::get('/user/profile', [AdmUserController::class, 'UserProfile'])->name('user.profile');
    // User Edit Profile
    Route::get('/user/profile/edit', [AdmUserController::class, 'UserProfileEdit'])->name('user.profile.edit');
    // User Store Profile
    Route::post('/user/profile/store', [AdmUserController::class, 'UserProfileStore'])->name('user.profile.store');
    // RRHH List All
    Route::get('/rrhh/list', [AdmUserController::class, 'UserList'])->name('rrhh.list');   
    Route::get('/rrhh/departamental', [AdmUserController::class, 'ListaDepartamental'])->name('rrhh.departamental');   
    Route::get('/rrhh/municipal', [AdmUserController::class, 'ListaMunicipal'])->name('rrhh.municipal');   
    
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
    

       /************ Almacenes *******/
    // Alm admi
    Route::get('/almacen/adm/partidas', [AlmacenController::class, 'partidas'])->name('almacen.adm.partidas');   
    Route::get('/almacen/adm/subgrupo', [AlmacenController::class, 'subgrupos'])->name('almacen.adm.subgrupos'); 
    Route::get('/almacen/adm/articulos', [AlmacenController::class, 'articulos'])->name('almacen.adm.articulos'); 
    Route::get('/almacen/adm/medida', [AlmacenController::class, 'medidas'])->name('almacen.adm.medidas'); 
    // Alm ingresos
    Route::get('/almacen/adm/ingresos', [AlmacenController::class, 'ingresos'])->name('almacen.ingresos');
    // Route::get('/almacen/adm/ingresos/add', [AlmacenController::class, 'ingresosAdd'])->name('almacen.ingresos.add');      
    // Alm salidas
    Route::get('/almacen/sal/solicitudes', [AlmacenController::class, 'solicitudes'])->name('almacen.sal.solicitudes');   
    Route::get('/almacen/sal/entregados', [AlmacenController::class, 'entregados'])->name('almacen.sal.entregados');   
    Route::get('/almacen/sal/saldos', [AlmacenController::class, 'saldos'])->name('almacen.sal.saldos');  
    // Alm solicitudes
    Route::get('/almacen/sol/solicitud', [AlmacenController::class, 'solicitud'])->name('almacen.solicitud'); 
    Route::get('/almacen/sol/solicitud/pdf', [AlmacenController::class, 'sendPrint'])->name('almacen.solicitud.pdf'); 

    // Plan Estudios
    Route::get('/planestudios/residencias', [PlanEstudiosController::class, 'residencias'])->name('planestudios.residencias');   
    Route::get('/planestudios/modulos', [PlanEstudiosController::class, 'modulos'])->name('planestudios.modulos');   
    Route::get('/planestudios/cursos', [PlanEstudiosController::class, 'cursos'])->name('planestudios.cursos'); 
    Route::get('/planestudios/evaluaciones', [PlanEstudiosController::class, 'evaluaciones'])->name('planestudios.evaluaciones'); 
    //Plan de Estudios
    Route::get('/planestudios/residentes', [PlanEstudiosController::class, 'residentes'])->name('planestudios.residentes');   
    Route::get('/planestudios/matriculaciones', [PlanEstudiosController::class, 'matriculaciones'])->name('planestudios.matriculaciones'); 

    /**************Comisiones************/
    Route::resource('/comisiones', RrhhComisionController::class)->names('comisiones');

    /**************Viajes************/
    Route::resource('/viajes', AdmViajeController::class)->names('viajes');

     /**************Configuracion************/
     Route::get('/configuracion/gestiones', [ConfiguracionController::class,'gestiones'])->name('configuracion.gestiones');
     Route::get('/configuracion/poa', [ConfiguracionController::class,'poa'])->name('configuracion.poa');
     Route::get('/configuracion/unidades', [ConfiguracionController::class,'unidades'])->name('configuracion.unidades');

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
    Route::get('/brigadas', [RrhhBrigadaController::class, 'index'])->name('brigadas.index');
    Route::get('/antigenos', [RrhhAntigenoController::class, 'index'])->name('antigenos.index');
    Route::get('/rastrillajes', [RrhhRastrillajeController::class, 'index'])->name('rastrillajes.index');
    Route::get('/vacunas', [RrhhVacunaController::class, 'index'])->name('vacunas.index');

    /*************Territorio*******************/
    //Departamento
    Route::resource('/departamentos', AdmDepartamentoController::class)->names('departamentos');
    //Redes
    Route::resource('/redes', AdmRedController::class)->names('redes');
    //Municipio
    Route::resource('/municipios', AdmMunicipioController::class)->names('municipios');
    // Comunidades
    Route::resource('/comunidades', AdmComunidadController::class)->names('comunidades');


    /*************Cuadernos*******************/

    Route::get('/cuadernos/import', [CuadernosImportController::class, 'show'])->name('cuadernos.index');
    Route::get('/getMunicipio/{id}', [CuadernosImportController::class, 'getMunicipio']);
    Route::get('/getEstablecimiento/{id}', [CuadernosImportController::class, 'getEstablecimiento']);
    Route::get('/getMedico/{id}', [CuadernosImportController::class, 'getMedico']);
    
    Route::post('/cuadernos/import', [CuadernosImportController::class, 'store']);

    Route::get('/cuadernos/c1', [CuadernosController::class, 'c1'])->name('cuadernos.c1');   
    Route::get('/cuadernos/c2', [CuadernosController::class, 'c2'])->name('cuadernos.c2');   
    Route::get('/cuadernos/c3', [CuadernosController::class, 'c3'])->name('cuadernos.c3');   
    Route::get('/cuadernos/c4', [CuadernosController::class, 'c4'])->name('cuadernos.c4');   
    Route::get('/cuadernos/c5', [CuadernosController::class, 'c5'])->name('cuadernos.c5');   
    Route::get('/cuadernos/c6', [CuadernosController::class, 'c6'])->name('cuadernos.c6');   
    Route::get('/cuadernos/c9', [CuadernosController::class, 'c9'])->name('cuadernos.c9');   
    Route::get('/cuadernos/c10d', [CuadernosController::class, 'c10d'])->name('cuadernos.c10d');   
    Route::get('/cuadernos/c10f', [CuadernosController::class, 'c10f'])->name('cuadernos.c10f');   
    Route::get('/cuadernos/c11', [CuadernosController::class, 'c11'])->name('cuadernos.c11');   
    Route::get('/cuadernos/c12', [CuadernosController::class, 'c12'])->name('cuadernos.c12');   
     
});







//
Route::get('/contact-asf', [ContactController::class, 'index'])->name('con');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     // $users = User::all();
//     $users = DB::table('users')->get();
//     return view('dashboard', compact('users'));
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

