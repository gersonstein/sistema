<?php 
	try {
			$conexao = new PDO('mysql:host=localhost;dbname=gas', 'root', 'senha5');
			$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	} catch (Exception $e) {
			echo 'ERROR: ' . $e->getMessage();
	}
	

include_once './class.crud.php';

$crud = new crud($conexao);


 ?>