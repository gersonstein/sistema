 <?php

	session_start();
?>	
	<div class="welcome">
    <?php
	if(isset($_SESSION['logado']) and $_SESSION['logado'] == true){
	print_r($_SESSION);
	
	echo "Seja bem-vindo " . $_SESSION['nome'] . " <br><a 
	href='logout.php' class='botao' class='luz'>Sair</a>";
	}
	elseif () {
		echo "não tem logado";
	}
?>	
</div>	