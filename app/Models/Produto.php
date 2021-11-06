<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'name', 'valor', 'descricao', 'email', 'data_fabricao'
    ];

    protected $hidden;
}
