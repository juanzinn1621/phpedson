<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "bdcomponente";
$conexao = mysqli_connect($host, $user, $pass) or die ( mysqli_error($conexão));
mysqli_select_db($conexao, $banco);

?>