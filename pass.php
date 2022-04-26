<?php
extract($_POST);
$email = $_POST['email'];

//the subject
$sub = "Mot de passe oublié";
//the message
$msg = "Bonjour, Réinitialiser votre mot de passe à partir de la page suivante: \n\n http://localhost/plateform-2/change.php?email=$email";
//recipient email here
$rec = "$email";
//send email
mail($rec,$sub,$msg);
echo "<script>if(confirm('Un mail a été envoyer sur votre adresse email !')){document.location.href='login.php'};</script>";

?>