<?php
$miamail = "mathisgrieco.dev@gmail.com";
$successo = $_POST['successo'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['msg'];
$messaggio = "Nome: " . $nome . "\nCognome: " . $cognome . "\nEmail: " . $email . "\nTel: " . $tel . "\nMessaggio: " . $msg;
$headers = "From: " . $miamail . "\r\n" . "Reply-To: " . $miamail;
mail($miamail,"Messaggio dal sito",$messaggio,$headers);
header("location: " . $successo);
?>