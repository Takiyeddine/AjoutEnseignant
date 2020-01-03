<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
       

    <title>Accueil</title>

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 
    <style>
        .button {
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
  margin-top: 550px

}
    </style>
        <link rel="stylesheet" type="text/css" href="style.css">
         </head>


       
            <body class="accueil">
                <div>
                    <form action="./login">
                         <button class="button" type="submit">Connexion! </button>
                    </form>
                   
                </div>
              
              
    </body>
</html>