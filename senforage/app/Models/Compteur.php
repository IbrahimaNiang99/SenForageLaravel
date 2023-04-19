<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compteur extends Model
{
    use HasFactory;
    protected $fillable = array('numCompteur', 'consommation', 'etat', 'user_id');

    public static $rules = 
        array(
            'numCompteur'=>'required|min:1',
            'consommation'=>'required|min:0',
            'etat'=>'required|min:1',
            'user_id'=>'required|bigInteger'
        );
}
