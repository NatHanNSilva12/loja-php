<?php
include('conexao.php');
include('produto-banco.php');
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
        <div class="container">
        <h1 alLign="center">Lista produtos</h1>
        <table class="table table-active table-bordered table-striped">
  <?php
  $produtos=listaProdutos($conexao);
  foreach ($produtos as $produto):
   ?>
            <tr>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['marca']?></td>
                <td><?=$produto['preco']?></td>
                <td><form action="produto-excluir.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn-danger">Excluir</button>
                    </form>
                </td>
                
                 <td><form action="formulario-alterar.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn-primary">Alterar</button>
                   </form>
                </td>
            </tr>
 <?php
  endforeach;
 ?>     
        </table>
    
        </div>
    </body>
</html>
