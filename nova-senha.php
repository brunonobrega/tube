<?php
	session_start();
	require_once("includes/conexao.inc");
				
	$usuarioForm = $_POST ['usuario'];
	$senhaForm = $_POST ['senha'];
	
	$acesso = new AUSU();
	$usuarios = $acesso->EsqueciSenha($usuarioForm);				

?>