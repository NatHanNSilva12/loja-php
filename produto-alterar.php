<?php
include("conexao.php");
include("produto-banco.php");
$id=$_POST['id'];
$nome=$_POST['nome'];
$marca=$_POST['marca'];
$preco=$_POST['preco'];
alteraProduto($conexao,$id,$nome,$marca,$preco);
header("Location:produto-lista.php");