
        <?php
       include('conexao.php');
       include('login-banco.php');  
       
       if($_POST){
           $usuario=$_POST["usuario"];
           $senha=$_POST["senha"];
           if(buscaUsuario($conexao,$usuario,$senha)){
               session_start();
               $_SESSION['usuario']=$usuario;
               $_SESSION['log']='ativo';
             header("Location:principal.php");
             die();
           }else{
           echo "Usuário ou senha inválida<br>";
           echo "<a href='index.php'>Voltar para a tela de login</a>"; 
           }
       }
        ?>

