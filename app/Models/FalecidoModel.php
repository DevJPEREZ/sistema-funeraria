<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FalecidoModel extends Model
{
    use HasFactory;
    protected $table = 'falecidos';
    protected $fillable = ['cpf','nome'];
}
