<?php
include("conexao.php");
include("produto-banco.php");
$id=$_POST['id'];
excluirProduto($conexao,$id);
header("Location:produto-lista.php");