<?php
include("conexao/conecta.php"); 
include ("header2.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {

    // Método para pular campos teclando ENTER
      $('.pula').on('keypress', function(e){
          var tecla = (e.keyCode?e.keyCode:e.which);

          if(tecla == 13){
              campo = $('.pula');
              indice = campo.index(this);

              if(campo[indice+1] != null){
                  proximo = campo[indice + 1];
                  proximo.focus();
                  e.preventDefault(e);
              }
          }
      });

       // Inseri máscara no CEP
      $("#cep").inputmask({
          mask: ["99999-999",],
          keepStatic: true
      });

       // Método para consultar o CEP
    $('#cep').on('blur', function(){

      if($.trim($("#cep").val()) != ""){

        $("#mensagem").html('(Aguarde, consultando CEP ...)');
        $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){

            if(resultadoCEP["resultado"]){
            $("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
            $("#bairro").val(unescape(resultadoCEP["bairro"]));
            $("#cidade").val(unescape(resultadoCEP["cidade"]));
            $("#uf").val(unescape(resultadoCEP["uf"]));
          }

          $("#mensagem").html('');
        });       
      }     
    });
  }); 

// Inseri máscara no CEP
$("#cep").inputmask({
  mask: ["99999-999",],
  keepStatic: true
});




// Método para consultar o CEP
$('#cep').on('blur', function(){

  if($.trim($("#cep").val()) != ""){

    $("#mensagem").html('(Aguarde, consultando CEP ...)');
    $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){

        if(resultadoCEP["resultado"]){
        $("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
        $("#bairro").val(unescape(resultadoCEP["bairro"]));
        $("#cidade").val(unescape(resultadoCEP["cidade"]));
        $("#uf").val(unescape(resultadoCEP["uf"]));
      }

      $("#mensagem").html('');
    });       
  }     
});


  </script>
<form class="form-horizontal">


<!-- Form Name -->
<body>
  <div class="wrap">
    
 <div class="main">
  <div class="content">

 <fieldset>

       <div class="login_panel2">
<h2>Identificação<br>
<small>Cadastre-se!Agilize suas compras com seus dados salvos e gerencie seus pedidos.</small></h2>
<br>
<br>
<!-- <div style="background-color: #4ED4E8"></div> -->


<form class="form-horizontal">

<!-- nome -->
  <div class="form-group">
    <label for="inputNome3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="nome" class="form-control input-md" required="" id="inputNome3" placeholder="Nome">
    </div>
  </div>

<!-- email -->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control input-md" required="" id="inputEmail3" placeholder="Email">
    </div>
  </div>


<!-- senha -->
  <div class="form-group">
    <label for="inputSenha3" class="col-sm-2 control-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control input-md" required="" id="inputSenha3" placeholder="Senha">
    </div>
  </div>

<!-- confirmar senha -->
<div class="form-group">
    <label for="inputConfirmarSenha3" class="col-sm-2 control-label">Confirmar Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control input-md" required="" id="inputConfirmarSenha3" placeholder="Confirmar Senha">
    </div>
  </div>

<!-- cpf -->
<div class="form-group">
    <label for="inputCpf3" class="col-sm-2 control-label">CPF</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="inputCpf3" placeholder="___.___.___-__">
    </div>
  </div>

<!-- telefone -->
<div class="form-group">
    <label for="inputTelefone3" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="telefone" placeholder="(  )      -    ">
    </div>
  </div>

<!-- cep -->
<div class="form-group">
    <label for="inputCep3" class="col-sm-2 control-label">CEP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="cep" placeholder="__.___-___">
    </div>
  </div>

<!-- endereço -->
<div class="form-group">
    <label for="inputEndereco3" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="rua" placeholder="Endereço">
    </div>
  </div>

<!-- numero casa -->
<div class="form-group">
    <label for="inputNumero3" class="col-sm-2 control-label">Numero/Apartamento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="numero" placeholder="Numero">
    </div>
  </div>

<!-- bairro -->
<div class="form-group">
    <label for="inputBairro3" class="col-sm-2 control-label">Bairro</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="bairro" placeholder="Bairro">
    </div>
  </div>

<!-- cidade -->
<div class="form-group">
    <label for="inputCidade3" class="col-sm-2 control-label">Cidade</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="cidade" placeholder="Cidade">
    </div>
  </div>

<!-- estado -->
<div class="form-group">
    <label for="inputEstado3" class="col-sm-2 control-label">Estado</label>
    <div class="col-sm-10">
      <input type="text" class="form-control input-md" required="" id="uf" placeholder="Estado">
    </div>
  </div>

<!-- botao -->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input class="btn btn-primary" type="submit" value="Cadastrar Dados">
    </div>
  </div>
</form>
</div>

</div>





</fieldset>

</form>


<?php 
include ('footer2.php');
?>
</div>
</body>
</div>
</div>

