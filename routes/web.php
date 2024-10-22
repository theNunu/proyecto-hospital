<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController; // Asegúrate de importar el controlador
use App\Http\Controllers\Admin\UserController; //para el admin
use App\Http\Controllers\MedicoController; //para el medico

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

Route::get('/', fn () => auth()->check()? redirect('/home') : view('welcome')); //modificado pra la autentifcacion del user

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//ruta para llamar a los medicos
Route::get('/home', [MedicoController::class, 'showSpecificMedicos'])->name('home');


//por favor funcionaaaaa(consulta)
//Route::get('/consultas/create', [ConsultaController::class, 'create']);
Route::post('/consultas/horarios', [ConsultaController::class, 'getHorarios']);
Route::post('/consultas/medicos', [ConsultaController::class, 'getMedicos']);

Route::get('/consultas/create/', [ConsultaController::class, 'create'])->name('consultas.create');
Route::post('/consultas/', [ConsultaController::class, 'store'])->name('consultas.store');

Route::get('/consultas/{consulta}/', [ConsultaController::class, 'show'])->name('consultas.show');

Route::get('/consultas/{consulta}/edit', [ConsultaController::class, 'edit'])->name('consultas.edit');
Route::put('/consultas/{consulta}/', [ConsultaController::class, 'update'])->name('consultas.update');

Route::delete('/consultas/{consulta}/', [ConsultaController::class, 'destroy'])->name('consultas.destroy');

Route::get('/consultas', [ConsultaController::class, 'index'])->name('consultas.index');


//rutas del admin
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('users', UserController::class);
});