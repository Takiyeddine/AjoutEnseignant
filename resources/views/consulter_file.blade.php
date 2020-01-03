@extends('layouts.app')

@section('content')
    <style>
        .button1 {
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
  margin-top: 300px

}
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Les emplois du temps des examens semestriels  ') }}</div>

                <div class="card-body">
            <table class="table table-hover table-striped">
                                        <thead>
                                           
                                                    <th>Titre</th>
                                                      <th>Piece Jointe </th>
                                                      <th>Date de publication</th>
                                           
                                                    
                                                    
                                                        <?php 
                                                       $file =App\Fichiers::all();

    	                                               foreach ($file as $editeur) {
    	                                               
                                                       echo '<tr><td>',$editeur->titre, '</td>';
                                                       echo '<td>','<a href=',$editeur->file,'  target=_blank ;> Piece Jointe ICI','</td>' ; 
                                                
                                                       echo '<td>',$editeur->created_at, '</td></tr>';

                                                        }


                                                    ?>
                                                       
                                                    
                                                    
                                               


                                                   
                                        </thead>
                                    </table>
                </div>
            </div>
        </div>
        <div>
                  <form action="home">
                         <button class="button1"type="submit">Retour au menu des fonctionnaités </button>
                    </form>
                </div>
    </div>
</div>
@endsection
