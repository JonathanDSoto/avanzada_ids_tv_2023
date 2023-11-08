<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/greeting', function () {
    
    return '<h1>Hola crayola</h1>';

});

Route::get('/hola-pollito-frito',function(){

    return "Hola";
});

Route::get('/busca-usuario/{name}/{lastname?}',function($name,$lasname = "Doe"){

    return "User: ".$name." ".$lasname;

})->where(['name' => '[A-Za-z]+','lastname' => '[A-Za-z]+'])->name('filtrado');


Route::get('/suma/{num1}/{num2}',function($num1,$num2){

    return $num1 + $num2;

})->where(['num1'=>'[0-9]+', 'num2'=>'[0-9]+'])->name('suma');

Route::get('/vista/{name}', function ($name) {
    
    return view('prueba', ['name' => $name]);

});

Route::get('/prueba-controller/{name}',[UserController::class,'index']);