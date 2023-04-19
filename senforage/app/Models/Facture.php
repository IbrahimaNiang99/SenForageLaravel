<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = array('client', 'date', 'prixParLittre', 'totale', 'etat', 'consommation', 'periode', 'user_id');

    public static $rule = 
        array(
            'client'=>'required|min:5',
            'date'=>'required|min:3',
            'prixParLittre'=>'required|min:2',
            'etat'=>'required|min:1',
            'consommation'=>'required|min:1',
            'periode'=>'required|min:16',
            'totale'=>'required|min:1',
            'user_id'=>'required|bigInteger'
        );
}
