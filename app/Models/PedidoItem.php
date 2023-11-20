<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model {
    use HasFactory;
    protected $table = 'pedido_items';

    public $fillable = [
        'id',
        'produto_id',
        'qtd',
        'pedido_id'
    ];

    public function pedido() {
        return $this->belongsTo(Pedido::class);
    }

    public function produto() {
        return $this->hasMany(Produto::class, 'produto_id');
    }
}


