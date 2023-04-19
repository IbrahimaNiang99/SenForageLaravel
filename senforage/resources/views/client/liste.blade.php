@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
                <div class="card-header">
                    <span class="h3">Liste des clients</span>
                    <span class="offset-8">
                        <button type="button" class="btn btn-success btn-rounded btn-fw" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                            <i class="mdi mdi-plus"></i>
                            Ajouter client
                        </button>
                    </span>
                </div>
                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nom du client</th>
                                <th>Village</th>
                                <th>Chef du village</th>
                                <th>Téléphone</th>
                                <th>Adresse </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $listeClient as $client )
                            <tr>
                                <td class="py-1">{{$client->id}}</td>
                                <td>{{$client->nom}}</td>
                                <td>{{$client->village}}</td>
                                <td>{{$client->chefVillage}}</td>
                                <td>{{$client->telephone}}</td>
                                <td>{{$client->adresse}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-rounded btn-icon">
                                        <i class="mdi mdi-pencil-box"></i>
                                    </button>
                                
                                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-3">
                                        <i class="mdi mdi-delete-outline"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <p>Liste des clients ajoutés</p>
                </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: blue">
        <h2 class="modal-title" id="exampleModalLabel" style="color:white">Formulaire d'ajout de client</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{route('persistclient')}}" method="post">
            <div class="modal-body">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label for="nom">Nom du client</label>
                        <input type="text" name="nom" required class="form-control" placeholder="Nom du client" style="border: solid;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">Adresse</label>
                            <input type="text" name="adresse" required class="form-control" placeholder="Adresse du client" style="border: solid;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">Téléphone</label>
                            <input type="text" name="telephone" required class="form-control" placeholder="N° téléphone du client" style="border: solid;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nom">Village</label><br>
                            <select class="form-select" name="village_id" aria-label="Default select example"  style="border: solid;">
                                @foreach($listeVillage as $v)
                                    <option type="number" value="{{ $v->id }}" >{{$v->nomVillage}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input hidden type="date" name="date" style="border: solid;">
                        <input hidden type="number" name="user_id" value="{{ Auth::user()->id }}" style="border: solid;">
                        <input hidden type="number" name="etreChef" value="0" style="border: solid;">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded"  data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection

