<?php

function insereProduto($conexao,$nome,$marca,$preco){
$sql="insert into produto(nome,marca,preco) values('$nome','$marca','$preco')";
return mysqli_query($conexao,$sql);
}
function listaProdutos($conexao){
    $produtos=array();
    $sql="select * from produto";
    $resultado=mysqli_query($conexao,$sql);
     
    while($produto= mysqli_fetch_assoc($resultado)){
       array_push($produtos,$produto);
    }
    return $produtos;
    }//fim lista produto

function excluirProduto($conexao,$id) {
   $sql= "delete from produto where id='$id'";
   return mysqli_query($conexao,$sql);
      }

      function alteraProduto($conexao,$id,$nome,$marca,$preco) {
      $sql="update produto set nome='$nome',marca='$marca',preco='$preco' where id='$id'";
      return mysqli_query($conexao,$sql);
      }

      function buscaProdutos($conexao,$id){
         $sql="select * from produto where id='$id'";//Instrução sql
         $resultado=mysqli_query($conexao,$sql);//Executar a consulta
         return mysqli_fetch_assoc($resultado);//retornar os valores
      }
         
