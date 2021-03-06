<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'prix',
        'adresse_facturation_id',
        'adresse_livraison_id',
        'user_id',
        'quantite'
    ];

    public function user(){
        return $this->belongsTo('App/Models/User'); 
    }

    public function articles(){
        return $this->belongsToMany(Article::class , 'commande_articles')->withPivot('quantite', 'reduction'); 
    }

    public function adresse(){
        return $this->belongsTo(Adresse::class); 
    }

}
