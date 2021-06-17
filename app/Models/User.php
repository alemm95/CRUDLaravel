<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="users";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relación de muchos a muchos
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    //Relación de uno a uno
    public function profile(){
        return $this->hasOne('App\Models\Profile'); //Si en vez de user_id en la tabla profiles usamos otro nombre
                                                    //y en vez de id en la tabla users usamos otro nombre, los pasamos como argumentos en ese orden
    }

    //Relación uno a muchos
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
