<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interestingpath extends Model
{
    use HasFactory;
    protected $table = 'interestingpaths';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'path',
        'description',
    ];
    //Un InteresantingPath pertenece a un usuario
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    //Un recurso puede tener muchos comentarios
    public function comments(){
        return $this->hasMany('App\Models\Comment', 'intpath_id');
    }
    
    //Relación One-To-Many 
    public function likes(){
        return $this->hasMany('App\Models\Like', 'intpath_id');
    
    }


}
