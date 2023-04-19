<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = array('date', 'libelle', 'numCompteur', 'user_id', 'client');

    public static $rule =
        array(
            
            'date'=>'required∣min:3',
            'libelle'=>'required∣min:10',
            'user_id'=>'required|bigInteger',
            'numCompteur'=>'required|Integre',
            'client'=>'required|Integer'
        );
}
