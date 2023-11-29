<?php
include('conexao.php');

function buscaUsuario($conexao,$usuario,$senha){
$sql="select * from login where usuario='$usuario' and senha='$senha'";
$resultado= mysqli_query($conexao, $sql);
return mysqli_fetch_assoc($resultado);
}
?>

