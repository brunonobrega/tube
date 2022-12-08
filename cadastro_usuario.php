<?php
session_start();
require_once("includes/conexao.inc");
$logon = new AUSU();
$logon->Logado();

$usuarioForm = $_POST ['usuario'];
$senhaForm = $_POST ['senha'];
$senhaConfForm = $_POST ['senhaconf'];
$perfilForm = $_POST ['perfil'];

//echo($usuarioForm."<br>");
//echo($senhaForm."<br>");
//echo($senhaConfForm."<br>");
//echo($perfilForm."<br>");


	$logon->Cadastrar($usuarioForm, $senhaForm, $senhaConfForm, $perfilForm);

?>
