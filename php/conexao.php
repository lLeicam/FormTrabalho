<?php

$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$dbname     = "formulario";

$konn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$konn){
    die("Falha de conexão: " . mysql_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";
?>