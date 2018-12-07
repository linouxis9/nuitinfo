<?php
// Autochargement des classes
require_once "autoload.php";
    session_start();
    $cdao = new UsersDAO(MaBD::getInstance());
    $users = $cdao->getAll();

    if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
    {
      header("Location: connexion.php");
    }

$durationDAO = new DurationDAO(MaBD::getInstance());
$allDuration = $durationDAO->getAll();

$weatherDAO = new WeatherDAO(MaBD::getInstance());
$allWeather = $weatherDAO->getAll();

    //echo '<pre>', print_r($users), '</pre>';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="CSS/nuitdelinfo.css"/>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <title>Accueil</title>
    </head>

    <body>
        <div class="content">
            <div class="row">
                <div class="col">
                    <h1>Accueil</h1>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-center">
                    <button type="button" id="buttonCreateForm" class="btn btn-secondary btn-lg">Créer CheckList</button>
                    <button type="button" id="buttonViewCheckList" class="btn btn-secondary btn-lg">Choisir CheckList</button>
                    <div id="createForm">
                        <form id="formCreateCheckList" action="" method="post">
                            <label for="weather">Météo:</label>

                        </form>
                    </div>
                    <div id="chooseCheckList">
                        Formulaire de choix
                    </div>
                </div>
            </div>
        </div>

        <script src="JS/jQuery.js"></script>
        <script>
        $(document).ready(function(){
            $("#createForm").hide();
            $("#chooseCheckList").hide();
            $( "#buttonCreateForm" ).click(function() {
              $("#createForm").show();
              $("#chooseCheckList").hide();
            });
            $( "#buttonViewCheckList" ).click(function() {
              $("#createForm").hide();
              $("#chooseCheckList").show();
            });
        });
        </script>
    </body>

</html>
