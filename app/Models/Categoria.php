<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table="categorias";
    protected $primaryKey="id";

    //Relación uno a muchos(una categoria puede tener muchos posts | un post pertenece a una categoria)
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

}
