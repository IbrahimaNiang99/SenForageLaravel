@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <span class="h3">Liste des villages</span>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>id</th>
                            <th>Village</th>
                            <th>Chef du village</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($listeVillage as $v)
                        <tr>
                            <td class="py-1">{{$v->id}}</td>
                            <td>{{$v->nomVillage}}</td>
                            <td>{{$v->chefVillage}}</td>
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
                    
                    </div>
                    <div class="card-footer">
                        <p>Liste des villages ajoutés</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <form action="{{ route('persistvillage') }}" method="post">
                        @csrf
                        <div class="card-header">
                        <h3>Formulaire d'ajout de village</h3>
                        </div>
                        <div class="card-body">
                        <div class="form-group" >
                            <label for="nomVillage"><h4>Nom du village</h4></label>
                            <input style="border:solid" type="text" required name="nomVillage" placeholder="Nom du village" class="form-control">
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success btn-rounded btn-fw">Ajouter</button>
                            <button type="reset" class="btn btn-danger btn-rounded btn-fw">Annuler</button>
                        
                        </div>
                        </div>
                        <div class="card-footer">
                        <p>Formulaire pour ajouter des villages</p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


