<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoFilho extends Model
{
    use HasFactory;
    protected $table = 'produtos_filho';

    protected $fillable = [
        'id_pai',
        'estoque',
        'variacao',
        "active"
    ];
}
