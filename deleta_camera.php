<?php
	$cod = $_GET['cod'];
	
	require_once("incd/VBD.inc");
	$prod = new VBD();
	$linha = $prod->Excluir($cod);
	if ($linha > 0 )
	{	
		//echo ("<p>Título excluído com sucesso!</p>");
		//echo ("<a href='exc-v.php'></a>");
		header('Location: deletar_camera.php');
	}
	else
	{
		echo ("<p>Erro ao deletar Câmera!</p>");
	}
	//echo ("<p><input type='submit' value='Voltar' onClick='history.go(-1)' /> </p>");
	
?>