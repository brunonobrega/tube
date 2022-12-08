<?php
session_start();
require_once("includes/conexao_loja.inc");
$logon = new ALOJA();

$nomeLoja = $_POST ['NomeLoja'];
$siglaLoja = $_POST ['SiglaLoja'];
$fanquia = $_POST ['Franquia'];
$contato = $_POST ['Contato'];
$telefone = $_POST ['Telefone'];
$pais = $_POST ['Pais'];
$estado = $_POST ['Estado'];
$cidade = $_POST ['Cidade'];
$bairro = $_POST ['Bairro'];
$logradouro = $_POST ['Logradouro'];
$numero = $_POST ['Numero'];
$cep = $_POST ['Cep'];
$tipoLoja = $_POST ['TipoLoja'];
$referencia = $_POST ['Referencia'];
$observacao = $_POST ['Observacao'];
	/*
	echo ($nomeLoja."<br>");
	echo ($siglaLoja."<br>");
	echo ($fanquia."<br>");
	echo ($contato."<br>");
	echo ($telefone."<br>");
	echo ($pais."<br>");
	echo ($estado."<br>");
	echo ($cidade."<br>");
	echo ($bairro."<br>");
	echo ($logradouro."<br>");
	echo ($numero."<br>");
	echo ($cep."<br>");
	echo ($tipoLoja."<br>");
	echo ($referencia."<br>");
	echo ($observacao."<br>");*/
	
	$verificaLoja = $logon->Verificar($nomeLoja, $siglaLoja, $fanquia, $tipoLoja, $contato, $telefone, $logradouro, $numero, $cep, $bairro, $cidade, $estado, $pais, $referencia, $observacao);
		
		if($verificaLoja == 1){
			$cadastraLoja = $logon->Cadastrar($nomeLoja, $siglaLoja, $fanquia, $tipoLoja, $contato, $telefone, $logradouro, $numero, $cep, $bairro, $cidade, $estado, $pais, $referencia, $observacao);
			if($cadastraLoja > 0){
				echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_sucesso=Loja cadastrada com sucesso!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";			
			} else {
				echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";			
			}
		} else {
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
		}
?>
