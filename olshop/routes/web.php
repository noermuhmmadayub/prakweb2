<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;

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

Route::get('/salam', function () {
    return "Keberuntungan seharusnya bukanlah hal yang akan membuatmu sengsara jika memilikinya";
});

Route::get('/about', function(){
    return view('about',[
        "nama" => "Noer Muhamad Ayub",
        "umur" => 20,
        "email" => "biribiri@gmail.com"
    ]);
});

Route::get('/nf', function(){
    return view('nf');
});

Route::get('/pemeriksa', function(){
    return view('pemeriksa');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output',[InputController::class, 'output']); 
