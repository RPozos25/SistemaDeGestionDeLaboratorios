<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\CatalogoEquipoController;
use App\Http\Controllers\EquipoComputoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\MaterialPracticaController;
use App\Http\Controllers\TipoMaterialPracticaController;
use App\Http\Controllers\PrestamoController;

Route::get('/', function () {
    return view('home');
})//->middleware('auth');
->middleware('guest');

//Rutas de Administrador
//Ruta para acceder al menu de administrador 
Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

//Ruta para crear un usuario siendo admin --posible cambio
Route::get('/admin/createusers', [AdminRegisterController::class, 'create'])
->middleware('auth.admin')
->name('users.registerUsers');

//Ruta para crear un usuario siendo admin --posible cambio
/*Route::post('/admin/createusers', [AdminRegisterController::class, 'store'])
->middleware('auth.admin')
->name('users.registerUsers');

Route::get('/admin/createusers/{id}/edit', [AdminRegisterController::class, 'edit'])
->middleware('auth.admin')
->name('users.edit');

/*Route::post('/admin/createusers/{id}', [AdminRegisterController::class, 'update'])
->middleware('auth.admin')
->name('users.edit');*/

Route::resource('users', AdminRegisterController::class);

Route::resource('catec', CatalogoEquipoController::class);

Route::resource('laboratorios', LaboratorioController::class);

Route::resource('equipo', EquipoComputoController::class);

Route::resource('material', MaterialPracticaController::class);

Route::resource('tmaterial', TipoMaterialPracticaController::class);

Route::get('/admin/tipomaterial', [TipoMaterialPracticaController::class, 'index'])
->middleware('auth.admin')
->name('TipoMaterialPractica.crudTMP');

Route::get('/admin/createtipomaterial', [TipoMaterialPracticaController::class, 'create'])
->middleware('auth.admin')
->name('TipoMaterialPractica.registerTMP');

Route::get('/admin/pedidos', [PrestamoController::class, 'index'])
->middleware('auth.admin')
->name('otherU.pedidos');

//Ruta para acceder al Crud de usuarios
Route::get('/admin/user', [AdminRegisterController::class, 'index'])
->middleware('auth.admin')
->name('users.crudUser');

//Ruta para acceder al Crud de 
Route::get('/admin/equipo', [EquipoComputoController::class, 'index'])
->middleware('auth.admin')
->name('EquipoComputo.crudEC');

Route::get('/admin/createequipo', [EquipoComputoController::class, 'create'])
->middleware('auth.admin')
->name('EquipoComputo.registerEC');

//Ruta para acceder al Crud de 
Route::get('/admin/laboratorio', [LaboratorioController::class, 'index'])
->middleware('auth.admin')
->name('laboratorio.crudLaboratorio');

Route::get('/admin/createlaboratorio', [LaboratorioController::class, 'create'])
->middleware('auth.admin')
->name('laboratorio.registerLaboratorio');

//Ruta para acceder al Crud de 
Route::get('/admin/practica', [MaterialPracticaController::class, 'index'])
->middleware('auth.admin')
->name('MaterialPractica.crudMP');

Route::get('/admin/createpractica', [MaterialPracticaController::class, 'create'])
->middleware('auth.admin')
->name('MaterialPractica.registerMP');

//Ruta para acceder al Crud de 
Route::get('/admin/catequipo', [CatalogoEquipoController::class, 'index'])
->middleware('auth.admin')
->name('catalogoEquipoComputo.crudCatE');

Route::get('/admin/createcatequipo', [CatalogoEquipoController::class, 'create'])
->middleware('auth.admin')
->name('catalogoEquipoComputo.registerCatE');

//Rutas para acceder sin ser loggeado
//Ruta para ir al login 
Route::get('/login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login.index');

//Ruta para registrar un usuario con privilegios de alumno y sin estar logeado 
Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

//Ruta del login para iniciar sesion 
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

//Ruta para crear un usuario sin ser logeado
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//Ruta para cerrar sesion, siempre y cuando un usuario este en sesion 
Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

//Ruta para alumnos
//Ruta para acceder al menu de alumnos
Route::get('/others', [OtherController::class, 'index'])
->middleware('auth.other')
->name('otherU.index');

Route::get('/others/pedido', [PrestamoController::class, 'create'])
->middleware('auth.other')
->name('otherU.registerp');

Route::resource('pedido', PrestamoController::class);
