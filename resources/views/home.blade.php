@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Choisissez l'une des fonctionalitées suivantes : </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="ajouter_enseignant">Ajouter Enseignant</a>
                    <br>
                    <br>
                
                 
                    <a href="ajout">Consulter la liste des enseignants</a>
                       <br>
                    <br>
                    <a href="importer_file">Importer Emploi du temps</a>
                        <br>
                    <br>
                    <a href="consulter_file">Consulter Emploi du temps </a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
