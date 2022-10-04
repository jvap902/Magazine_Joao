<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;

    protected $fillable = [
        "nome",
        "email",
        "senha"
    ];
}
