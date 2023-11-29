<?php
include('cabecalho.php');
session_start();
if($_SESSION['log']!="ativo"){
   session_destroy();
   header("Location:index.php");
}
else{
    echo "Olá, " . $_SESSION['usuario'] . " Você está logado no nosso sistema!!<br>";
    
}
?>

        <h1>Bem-vindo ao sistema</h1>
    </body>
    </div>
</html>
