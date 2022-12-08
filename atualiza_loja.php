<?php 
	
	session_start();
	require_once("includes/conexao.inc");
	$logon = new AUSU();
	$logon->Logado();
	
	require_once("includes/conexao_loja.inc");
	$aloja = new ALOJA();
	
	$idlj = $_POST['idlj'];
	//echo $idlj;
	$nomelj = $_POST ['NomeLoja'];
	$siglalj = $_POST ['SiglaLoja'];
	$franqlj = $_POST ['Franquia'];
	$tplj = $_POST ['TipoLoja'];
	$ncontatolj = $_POST ['Contato'];
	$tellj = $_POST ['Telefone'];
	$logrlj = $_POST ['Logradouro'];
	$numlj = $_POST ['Numero'];
	$ceplj = $_POST ['Cep'];
	$brlj = $_POST ['Bairro'];
	$cidadelj = $_POST ['Cidade'];
	$estadolj = $_POST ['Estado'];
	$paislj = $_POST ['Pais'];
	$reflj = $_POST ['Referencia'];
	$obslj = $_POST ['Observacao'];
	
	$retorno = $aloja->Atualizar($idlj,$nomelj,$siglalj,$franqlj,$tplj,$ncontatolj,$tellj,$logrlj,$numlj,$ceplj,$brlj,$cidadelj,$estadolj,$paislj,$reflj,$obslj);
	
	if ($retorno > 0){
		echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_sucesso=Loja atualizada com sucesso!; expires=' + date.toUTCString() + 'path=/';location.href='alterar_loja.php?cod=".$idlj."';</script>;";
	} else {
		echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não atualizada!; expires=' + date.toUTCString() + 'path=/';location.href='alterar_loja.php?cod=".$idlj."';</script>;";
	}	
?>