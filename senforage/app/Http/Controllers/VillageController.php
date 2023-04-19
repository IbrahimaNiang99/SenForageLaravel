<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function liste(){
        $listeVillage = Village::all();
        return view('village.liste', ['listeVillage'=>$listeVillage]);
    }

    public function persist(Request $request){
        $vil = new Village();
        $vil->nomVillage = $request->nomVillage;
        $vil->save();

        return $this->liste();
    }

}
