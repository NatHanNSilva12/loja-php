<?php
include("conexao.php");
include("cabecalho.php");
include("produto-banco.php");
$id=$_POST['id'];
$produto=buscaProdutos($conexao,$id);
?>



<form name="flogin" method="post" action="produto-alterar.php">
<input type="hidden" name="id" value="<?=$produto['id']?>">
    <div class="form-group">
    <p><label>Produto</label><br><input type="text" name="nome" value="<?=$produto['nome']?>"></p>
    </div>
    <div class="form-group">
    <p><label>Marca</label><br><input type="text" name="marca" value="<?=$produto['marca']?>"></p>
    </div>
    <div class="form-group">
    <p><label>Preço</label><br><input type="text" name="preco" value="<?=$produto['preco']?>"></p>
    </div>
    <div class="form-group">
    <p><input type="submit" name="alterar" value="Alterar" class="btn-success btn-lg"></p>
    </div>
</form>