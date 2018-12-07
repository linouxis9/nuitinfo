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

    echo '<pre>', print_r($users), '</pre>';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="CSS/nuitdelinfo.css"/>
        <title>Modèle de page pour le TP Contacts</title>
    </head>

    <body>
        <p class="binome"><img src="img/LogoIUT-H.jpg" alt="Logo IUT"/>Réalisée par : GERVASI Nicolas et REYNAUD Tanguy - Groupe 2I</p>
        <br><br>
        <h1 class=titre>Gestion des contacts</h1>
        <br><br>
        <table>
            <th>
              <td>Salut moi c'est nicolas et vous ?</td>
            </th>
            <tr>
              <td>Bonjour</td>
            </tr>
            <tr>
              <td>Bonjour2</td>
            </tr>
        </table>
    </body>

</html>
