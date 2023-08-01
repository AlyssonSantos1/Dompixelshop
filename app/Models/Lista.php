<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    protected $table = 'lista1';

    protected $primarykey = 'id';

    protected $fillable = ['nome', 'descricao', 'preco', 'quantidade'];
}
