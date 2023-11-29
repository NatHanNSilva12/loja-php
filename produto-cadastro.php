<?php
include("conexao.php");
include("produto-banco.php");

$nome=$_POST['nome'];
$marca=$_POST['marca'];
$preco=$_POST['preco'];

insereProduto($conexao, $nome, $marca, $preco);
header("Location:produto-lista.php");
?>


