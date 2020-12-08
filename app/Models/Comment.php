<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'content',
    ];

    //Relaciónde Muchos a Uno
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
        //Relaciónde Muchos a Uno
        public function interestingpath(){
            return $this->belongsTo('App\Models\Interestingpath', 'intpath_id');
        }

    }