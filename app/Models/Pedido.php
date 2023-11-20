<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Pedido extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'valor',
        'valor_frete',
        'data_entrega',
        'cliente_id'
    ];
    protected $table = 'pedidos';

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function pedidoItem() {
        return $this->hasMany(PedidoItem::class, 'pedido_id');
    }
}
