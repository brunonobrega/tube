<?php
	session_start();
	$cod = $_GET['cod'];
	
	require_once("includes/conexao.inc");
	$conexao = new AUSU();
	$retorno = $conexao->Excluir($cod);
	
	//echo($_SESSION['acessoUsuario']);
	
	if ($retorno > 0 )
	{	
		echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_sucesso=Usuário excluído com sucesso!; expires=' + date.toUTCString() + 'path=/';location.href='deletar_usuario.php';</script>;";
	}
	else
	{
		echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Usuário não excluído!; expires=' + date.toUTCString() + 'path=/';location.href='deletar_usuario.php';</script>;";
	}
?>