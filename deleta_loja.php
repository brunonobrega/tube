<?php
	$cod = $_GET['cod'];
	
	require_once("includes/conexao_loja.inc");
	$loja = new ALOJA();
	$retorno = $loja->Excluir($cod);
	
	if ($retorno > 0 )
	{	
		header('Location: deletar_loja.php');
	}
	else
	{
		echo ("<p>Erro ao deletar Loja!</p>");
	}
	//echo ("<p><input type='submit' value='Voltar' onClick='history.go(-1)' /> </p>");
	
?>