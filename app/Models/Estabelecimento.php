<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descr',
        'phone',
        'email',
        'endereco_id',
        'user_id',
    ];
}
