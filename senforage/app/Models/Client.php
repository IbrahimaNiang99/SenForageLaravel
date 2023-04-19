<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = array('nom', 'date', 'village_id','telephone', 'adresse', 'etreChef', 'chefVillage', 'user_id');

    public static $rule =
        array(
            'nom'=>'required∣min:5',
            'date'=>'required∣min:3',
            'telephone'=>'required∣min:9',
            'village_id'=>'required∣Integer',
            'chefVillage'=>'required|min:5',
            'etreChef'=>'required∣min:1',
            'adresse'=>'required|min:4',
            'user_id'=>'required|bigInteger'
        );

    public function getVillageAttribute(){
        $v = Village::find($this->village_id);
        return $v->nomVillage;
    }
}
