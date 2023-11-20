<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';

    public $fillable = [
        'id',
        'cpf',
        'nome',
        'dt_nascimento',
        'endereco'
    ];

    public function pedido() {
        return $this->hasMany(Pedido::class);
    }
}
