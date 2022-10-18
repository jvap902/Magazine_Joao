<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;
    public function getAuthIdentifierName()
    {
        return 'id';
    }
    public function getAuthIdentifier()
    {
        return $this->id;
    }
    public function getAuthPassword()
    {
        return $this->senha;
    }
    public function getRememberToken()
    {
    }
    public function setRememberToken($token)
    {
    }
    public function getRememberTokenName()
    {
    }

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'CPF',
    ];
}
