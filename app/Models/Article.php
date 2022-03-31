<?php

namespace App\Models;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    public function users(){
        return $this->belongsToMany(User::class , 'favoris'); 
    }

    public function avis(){
        return $this->hasMany('App/Models/Avis'); 
    }

    public function commandes(){
        return $this->belongsToMany(Commande::class , 'commande_articles')->withPivot('quantite', 'reduction'); 
    }

    public function gamme(){
        return $this->belongsTo('App/Models/Gamme'); 
    }

    public function campagnes(){
        return $this->belongsToMany(Campagne::class , 'campagne_articles'); 
    }
}
