<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefvillage extends Model
{
    use HasFactory;

    protected $fillable = array('prenom', 'nom', 'region','dateNomination', 'village_id','telephone','user_id');

    public static $rule = 
        array(
            'prenom'=>'required∣min:3',
            'nom'=>'required∣min:2',
            'region'=>'required∣min:5',
            'telephone'=>'required∣min:9',
            'village_id'=>'required∣integer',
            'dateNomination'=>'date∣min:3',
            'user_id'=>'required|bigInteger'
        );
}
