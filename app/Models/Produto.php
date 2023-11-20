<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';

    public $fillable = [
        'id',
        'descricao',
        'preco_custo',
        'preco_venda',
        'cod_fornecedor'
    ];

    public function pedidoItem() {
        return $this->belongsTo(PedidoItem::class);
    }
}
