<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Aquí nombro las rutas de mis módulos o vistas
|También les puedo dar condición de ruta
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('fotos/{numero?}',function ($numero = 'sin número') {
return 'Estás en la galería de fotos: '.$numero;
})-> where('numero','[0-9]+');



Route::get('pais', function () {
    return view('mapa');
});


Route::get('logicbus', function () {
    return view('aplicaciones');
});

Route::get('frutas', function () {
    return view('penetrometro');
});

Route::get('tanque', function () {
    return view('mediciontanque');
});
