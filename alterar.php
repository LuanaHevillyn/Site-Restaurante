<?php 
	
	include_once 'form_editar.php';
	include_once 'conexao.php';

	$id = $_GET['id'];
	$nome  = isset($_POST['nome'])?$_POST['nome']:"";
	$endereco   = isset($_POST['endereco'])?$_POST['endereco']:"";
	$pedido = isset($_POST['pedido'])?$_POST['pedido']:"";

	$alterar = $conn->query("update tb_cadpedido set nome ='$nome', endereco ='$endereco', pedido ='$pedido' where id='$id'");
	
	if(mysqli_affected_rows($conn) > 0){
		header("location: mostrar.php");
	}
	
?>