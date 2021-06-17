<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table="profiles";
    protected $primaryKey="id";

    //Relación de uno a uno (tabla hija)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
