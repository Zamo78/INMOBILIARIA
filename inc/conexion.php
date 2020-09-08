<?php
$SERVER = "localhost";
$USER = "root";
$PASS = "";
$BD = 'inmobiliaria';

$conexion=mysqli_connect($SERVER, $USER, $PASS, $BD) or die ('Error al conectar con la base de datos');
?>