<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    protected $table = 'generos';
    protected $primaryKey='id_genero';
    protected $fillable=['descripcion'];
}
