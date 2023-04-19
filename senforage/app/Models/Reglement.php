<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    use HasFactory;

    protected $fillable = array('dateReglement', 'facture_id', 'versement', 'reste', 'montantAPayer', 'user_id');

    public static $rule = 

        array(
            'dateReglement'=>'required|min:2',
            'facture_id'=>'required|integer',
            'reste'=>'required|min:2',
            'versement'=>'required|min:1',
            'montantAPayer'=>'required|min:1',
            'user_id'=>'required|bigInteger'
        );
}
