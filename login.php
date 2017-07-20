<?php
ob_start();
session_start();
if (isset($_SESSION['usuariosistema']) && (isset($_SESSION['senhasistema']))) {
  header("Location: index.php");exit;
  
}

include("conexao/conecta.php");
include ("header2.php");


        if (isset($_POST['logar'])) {
              $email = ($_POST['email']);
              $senha = ($_POST['senha']);

              $select = "SELECT * from usuarios WHERE email=:email AND senha=:senha";
         
         try {
              $result = $conexao->prepare($select);
               $result->bindParam(':email', $email, PDO::PARAM_STR);
               $result->bindParam(':senha', $senha, PDO::PARAM_STR);
               $result->execute();
               $contar = $result-> rowCount();
                if ($contar>0) {
                  $usuario = $_POST['usuario'];
                  $senha   = $_POST['senha'];
                  $_SESSION['usuariosistema'] = $usuario;
                  $_SESSION['senhasistema'] = $senha;
                  echo '<div class="alert alert-success">
                                                  <button type="button" class="close" data-dismiss="alert">×</button>
                                                  <strong>Logado com Sucesso!</strong> Redirecionando para o Sistema.
                                                </div>';
                  header("Refresh: 5, index.php");
                }else{
                    echo '<div class="alert alert-danger">
                                                  <button type="button" class="close" data-dismiss="alert">×</button>
                                                  <strong>Erro ao Logar</strong> Os dados estão Incorretos.
                                                </div>';
                }
         } catch (PDOException $e) {
              $e;
         }


        }

?>
<body>
  <div class="wrap">
    
 <div class="main">
  <div class="content">

 <fieldset>
          <div class="login_panel">
            <h3>Faça Seu Login</h3>
            <p>Insira seus dados de acesso.</p>
            <form action="" method="post"  enctype="multipart/form-data">
              <input type="email"      class="form-control input-lg" id="email"    name="email" placeholder="Email" required=""   />
              <input type="password"   class="form-control input-lg" id="senha" name="senha" placeholder="Senha" required=""   />






              <p class="note">Se você esqueceu sua senha clique aqui e informe seu email  <a href="recuperar_senha.php">Recuperar Senha</a></p>

              <div class="clear"></div>
              <div>

                <input type="submit" name="logar" value="logar" class="btn btn-primary">

              </div>
              </form>
            </div> 





               <div class="clear"></div>

               <br>
               <br>
     
                   <div class="main">
                      <div class="content">

                         <div class="login_panel">
                          <div class="clear"></div>
                            <h3>Ainda não Possui Cadastro?</h3>
                            <p>Cadastre-se Aqui.</p>
                            <form action="hello" method="post" id="member">
                                    
                          
                              </form>      
                                      <div>
                                      <a href="cadastro.php" class="btn btn-info" role="button">Cadastrar</a>
                                      </div>
                                   
                                      </div> 


                          


                          
                         <div class="clear"></div>
                      </div>
                    </div>


      </fieldset>

</div>
</div>
</div>

<?php 
include ('footer2.php');
?>

</body>


