<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo('App/Models/User'); 
    }
    public function articles(){
        return $this->belongsTo('App/Models/Articles'); 
    }
}
