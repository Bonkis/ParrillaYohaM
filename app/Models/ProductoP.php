<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoP extends Model
{
    use HasFactory;
    protected $fillable = ['name','precio','estado','Descripcion'];
}
