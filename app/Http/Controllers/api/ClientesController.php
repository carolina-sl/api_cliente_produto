<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClientesController extends Controller {
    
    public function index() {

        $clientes = Cliente::with('Pedido')->get();
        return response()->json($clientes);
    }

    public function store(Request $request) {
        return response()->json(Cliente::create($request->all()), 201);
    }
}
