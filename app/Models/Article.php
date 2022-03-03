<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    public function users(){
        return $this->hasMany('App/Models/User'); 
    }
    public function avis(){
        return $this->hasMany('App/Models/Avis'); 
    }
    public function commandes(){
        return $this->hasMany('App/Models/Commandes'); 
    }
    public function gammes(){
        return $this->belongsTo('App/Models/Gammes'); 
    }
    public function campagnes(){
        return $this->hasMany('App/Models/Campagnes'); 
    }
}
