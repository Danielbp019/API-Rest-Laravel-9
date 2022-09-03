<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;//se usa un alias para diferenciar las rutas y usar el alias en las rutas
use App\Http\Controllers\Api\V2\PostController as PostV2;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('v1/posts', PostV1::class)
->only(['index','show', 'destroy'])
->middleware('auth:sanctum');
/* ->only('show') se usa para decir que solo habilite una ruta pero se pueden habilitar mas rutas al ponerlas dentro de [] */
/* Ruta de prueba en el postman o en el rested addon de firefox http://localhost/apilaravel9/public/api/v1/posts/1 */
/*Se cambia Route::apiResource('v1/posts', App\Http\Controllers\Api\V1\PostController::class) por el alias!*/

Route::apiResource('v2/posts', PostV2::class)
->only(['index','show'])
->middleware('auth:sanctum');//se agrega esta linea para proteger la ruta y se copia en ambas rutas.