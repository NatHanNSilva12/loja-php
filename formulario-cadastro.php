<?php
include("cabecalho.php");
session_start();
if($_SESSION['log']!="ativo"){
   session_destroy();
   header("Location:index.php");
}
else{
    echo "Olá, " . $_SESSION['usuario'] . " Você está logado no nosso sistema!!<br>";
   
}
?>

        <div class="container">
        <h1>Cadastro de Produtos</h1>
        <form name="f1" method="post" action="produto-cadastro.php">
            <div class="form-group">
            <p> Nome:<input type="text" name="nome" class="form-control"></p>
            <p>Marca:<input type="text" name="marca" class="form-control"></p>
            <p>Preço:<input type="text" name="preco" class="form-control"></p>
            <p><input type="submit" name="enviar" value="Enviar" class="btn-success"></p>
            </div>  
        </form>
        </div>     
    </body>
</html>
