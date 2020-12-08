<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
//Relacion One-To-Many - De uno a muchos:
//Para sacar todas las imagenes relacionadas al usuario

public function interestingpath(){
    return $this->hasMany('App\Models\Interestingpath', 'intpath_id');
}
   //Un recurso puede tener muchos comentarios
   public function comments(){
    return $this->hasMany('App\Models\Comment');
}

//Relación One-To-Many 
public function likes(){
    return $this->hasMany('App\Models\Like');

}
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
}
