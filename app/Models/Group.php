<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    function lesson(){
        return $this->hasMany('App\Models\Lesson');
    }
    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
