<?php

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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {

    $datos=[

        "titulo"=>'Hola alumnos de laravel',
        "contenido"=>'Esto es una prueba de envío',
    ];

    /*
     * SEND RECIBE 3 PARÁMETROS
     * 1-LA VIEW email.test
     * 2-Array que contiene la informacion
     * 3- Una función anónima (a quien va dirigido=
     * AL CAMBIAR EL archivo ENV hay que refrescar la
     * cache php artisan config:cache
     */
    Mail::send("emails.test",$datos,function ($mensaje){
       $mensaje->to("f.oliver90@gmail.com","Juan")->subject("ojo, mensaje importante");

    });
    return view('welcome');
});
