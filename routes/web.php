<?php
use App\Http\Controllers\SitioController;
use App\Models\Contacto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Cuando reciba una petición de este tipo, va a ejecutar el sitio controller y después va a buscar el contactoform
Route::get('/contacto/{tipo?}', [SitioController::class,'contactoForm']);

Route::post('contacto', function (Request $request){
    //Mostrar todo
    dd($request->all());
    //mostrar solo una variable
    //dd($request->name);
});

Route::post('/contacto', [SitioController::class,'contactoSave']);