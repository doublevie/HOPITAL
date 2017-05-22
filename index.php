<?php
// connexon base des donnes
$file_db = new PDO('sqlite:data/main.sqlite');
$file_db->exec("pragma synchronous = off;");


$utilisateurs = null;
// donnes d'utilisateurs
$result_one = $file_db->query("SELECT * FROM UTILISATEURS  ");
foreach($result_one as $row) {
$utilisateurs .= '<option value="'.$row['ID'].'" data-pass="'.$row['PASS'].'" data-power="'.$row['POWER'].'"   >'.$row['NOM'].' </option>';
}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HOPITAL</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


  </head>
  <body>


    <!-- Connexion a la base -->
<div class="connexion">

    <!-- Composant bootstrap - pannel + titre -->
  <div class="panel panel-primary">
    <!-- titre -->
    <div class="panel-heading"> <span class="glyphicon glyphicon-user"></span>  Connexion</div>
    <!-- corp -->
    <div class="panel-body">
<!-- champ utilisateur -->
<select class="form-control" name="utilisateur">
<?php
print $utilisateurs;
 ?>
</select>

<br>
<!-- champ mot de passe -->
<input id="pass" type="password" name="" class="form-control" value="" placeholder="Mot de passe">
<br>

<button type="button"  class="btn btn-primary"  style="float:right" name="button" onclick="connexion()">Connexion</button>

    </div>
  </div>


</div>



  </body>


<script type="text/javascript">


// progr mation de boutton connexion
function connexion() {
var userPassword = document.getElementById('pass').value ;

var e = document.querySelector('[name="utilisateur"]');
var UserId = e.options[e.selectedIndex].value;
var UserOriginalPassword = e.options[e.selectedIndex].getAttribute('data-pass');
var UserPower = e.options[e.selectedIndex].getAttribute('data-power');
var UserName = e.options[e.selectedIndex].innerText;


if (userPassword == UserOriginalPassword) {
window.location.href = 'setc.php?userid='+UserId+'&username='+UserName+'&userpower='+UserPower;
} else {
  alert('incorrect');
}
}


document.getElementById('pass').onkeyup = function(e) {
  if (e.keyCode == 13 ) connexion();
}


</script>



</html>
