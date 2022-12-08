<?php
	session_start();
	require_once("includes/conexao.inc");
				
	$token = $_GET ['token'];
	
	$acesso = new AUSU();
	$usuarios = $acesso->Ativar($token);
	if ($usuarios > 0){
		echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_sucesso=Cadastro ativado com sucesso!; expires=' + date.toUTCString() + 'path=/';location.href='index.php';</script>;";
	} else{
		echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Cadastro não ativado!; expires=' + date.toUTCString() + 'path=/';location.href='index.php';</script>;";
	}

?>