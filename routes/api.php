<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::apiResource('v1/posts', App\Http\Controllers\Api\V1\PostController::class)
->only(['index','show', 'destroy']);
/* ->only('show') se usa para decir que solo habilite una ruta pero se pueden habilitar mas rutas al ponerlas dentro de [] */

/* Ruta de prueba en el postman o en el rested addon de firefox http://localhost/apilaravel9/public/api/v1/posts/1 */