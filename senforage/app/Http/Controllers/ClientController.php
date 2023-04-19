<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Village;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function liste(){
        $listeClient = Client::all();
        $listeVillage = Village::all();
        return view('client.liste', ['listeClient'=>$listeClient, 'listeVillage'=>$listeVillage]);
    }

    public function persist(Request $request){
        $cli = new Client();
        $cli->nom = $request->nom;
        $cli->adresse = $request->adresse;
        $cli->telephone = $request->telephone;
        $cli->date = date("Y/m/d");
        $cli->etreChef = $request->etreChef;
        $cli->user_id = $request->user_id;
        $cli->village_id = $request->village_id;
        
        if ($request->village_id != null) {
            $v = Village::find($request->village_id);
            $cli->chefVillage = $v->chefVillage;
        }
        $cli->save();

        return $this->liste();
    }
}
