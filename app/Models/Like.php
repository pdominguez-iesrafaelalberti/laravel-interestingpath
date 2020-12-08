<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';
    public $timestamps = true;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'intpath_id',
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    //Relaciónde Muchos a Uno
    public function interestingpath(){
        return $this->belongsTo('App\Models\Interestingpath', 'intpath_id');
    }

}
