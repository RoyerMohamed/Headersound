<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany('App/Models/User'); 
    }
    public function articles(){
        return $this->hasMany('App/Models/Articles'); 
    }

}
