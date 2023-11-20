<?php

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ClientesController;
use App\Http\Controllers\api\PedidosController;
use Illuminate\Http\Request;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Route::get('/clientes', [ClientesController::class, 'index']);
// Route::get('/pedidos', [PedidosController::class, 'index']);
// Route::post('/pedidos', [PedidosController::class, 'store']);

Route::apiResource('/clientes', \App\Http\Controllers\Api\ClientesController::class);
Route::apiResource('/pedidos', \App\Http\Controllers\Api\PedidosController::class);
Route::apiResource('/pedido_items', \App\Http\Controllers\Api\PedidoItemsController::class);
Route::apiResource('/produtos', \App\Http\Controllers\Api\ProdutosController::class);


