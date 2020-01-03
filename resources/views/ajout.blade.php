@extends('layouts.app')

@section('content')
    <style>
    <style>
        .button2 {
  background-color: #f6921e; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 610px;
  cursor: pointer;
  border-radius: 12px;
  margin-top: 450px

}
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Liste des Enseignants ') }}</div>

                <div class="card-body">
            <table class="table table-hover table-striped">
                                        <thead>
                                           
                                                    <th>Nom</th>
                                                      <th>Prénom</th>
                                                      <th>@Email</th>
                                                      <th>Date de Naissance</th>
                                                      <th>Spécialité</th>
                                                       <th>Licence En  </th>
                                                        <th>Master En </th>
                                                         <th>Doctorat En </th>
                                                         <th>Années d'experience </th>
                                                    
                                                    
                                                        <?php 
                                                       $enseignants =App\Enseignants::all();

    	                                               foreach ($enseignants as $editeur) {
    	                                               
                                                       echo '<tr><td>',$editeur->nom, '</td>';
                                                       echo '<td>',$editeur->prenom, '</td>';
                                                         echo '<td>',$editeur->email, '</td>';
                                                           echo '<td>',$editeur->date_naissance , '</td>';
                                                             echo '<td>',$editeur->specialite, '</td>';
                                                               echo '<td>',$editeur->licence, '</td>';
                                                                echo '<td>',$editeur->master, '</td>';
                                                                 echo '<td>',$editeur->doctorat, '</td>';
                                                                  echo '<td>',$editeur->experience, '</td></tr>';
                                                                 
                                                                 

         
                                                       }


                                                    ?>
                                                       
                                                    
                                                    
                                               


                                                   
                                        </thead>
                                    </table>
                </div>
            </div>
        </div>
        <div>
                  <form action="home">
                         <button class="button2"type="submit">Retour au menu des fonctionnaités </button>
                    </form>
                </div>
    </div>
</div>
@endsection
