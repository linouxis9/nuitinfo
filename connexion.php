<?php
// Autochargement des classes
require_once "autoload.php";

    session_start() ;
    $cdao = new UsersDAO(MaBD::getInstance());
    if(isset($_POST['submit']))
    {
      if($cdao->check($_POST['login'],$_POST['password']))
      {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password']= $_POST['password'];
        header("Location: index.php");
      }
      else {
        echo '<p class="erreur"> Veuillez entrer un identifiant correct</p>';
      }
    }


?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8"/>
      <link rel="stylesheet" type="text/css" href="CSS/nuitdelinfo.css"/>
      <title>Authentification</title>
  </head>

  <body>
    <p class="binome"><img src="img/LogoIUT-H.jpg" alt="Logo IUT"/>Réalisée par :</p>
    <br><br>
    <h1 class=titre>Veuillez vous connecter...</h1>
    <br><br>
    <form id="formLogin" action="?" method="post">
      <table>
        <tbody>
          <tr>
             <th>Identifiant : </th>
             <td>
               <input type="text" name="login" size="20" value=""/>
             </td>
          </tr>
          <tr>
             <th>Mot de passe : </th>
             <td>
               <input type="password" name="password" size="20" value=""/>
             </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center; border: none;">
              <input type="submit" name="submit" value="Connexion"/>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
