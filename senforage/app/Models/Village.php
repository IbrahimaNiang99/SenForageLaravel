<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $fillable = array('nomVillage', 'chefVillage','dateCreation');

    public static $rule = 
        array(
            'nomVillage'=>'required∣min:3',
            'dateCreation'=>'date∣min:3',
            'chefVillage'=>'required∣min:5',
        );

    // public function getChefVillageAttribute(){
    //     $c = Village::find($this->categories_id);
    //     return $c->nomCategorie;
    // }
}
