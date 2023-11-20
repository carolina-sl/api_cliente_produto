<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\PedidoItem;
use App\Models\Produto;


class PedidosController extends Controller {

    public function index() {
        
        $pedidos = Pedido::join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
        ->join('pedido_items', 'pedido_items.pedido_id', '=', 'pedidos.id')
        ->join('produtos', 'pedido_items.produto_id', '=', 'produtos.id')
        ->select('pedidos.id as numero do pedido',
        'clientes.nome as nome do cliente',
        'clientes.cpf as cpf do cliente',
        'valor_frete as valor do frete', 
        'data_entrega as data de entrega',
        'endereco as endereço do cliente')
        ->get();
        return $pedidos;
        
    }

    public function store(Request $request) {
        
        return response()->json(Pedido::create($request->all()), 201);
    }


}
