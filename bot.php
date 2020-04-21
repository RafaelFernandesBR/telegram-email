<?php
$chat_id="";//seu chat id
$token="";//A chave API de seu bot
$name= $_POST["campo2"];
$mail= $_POST["mail"];
$tel= $_POST["tel"];
$final= $_POST["vai"];

$resumo= "Nova mensagem enviada por: $name, email: $mail, Número de telefone: $tel. Mensagem: $final";
$msg= $resumo;
$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$msg."";
$execucao = file_get_contents($url);
?>

