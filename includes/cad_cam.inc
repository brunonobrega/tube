<?php

class Acam{
	
	public function Cadastrar($id_lj, $nome_cam, $visao_cam, $url_cam){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$comando = "INSERT INTO TB_CAMERA (ID_LOJA, NOME_CAMERA, VISAO_CAMERA, URL_CAMERA)
					VALUES ('$id_lj', '$nome_cam', '$visao_cam', '$url_cam')";
		$retorno = mysqli_query($conecta,$comando); # executa (INSERT)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas
		mysqli_close($conecta);
		return $qtde;
	}
	
	public function Atualizar($id_cam, $id_lj, $nome_cam, $visao_cam, $url_cam){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$comando = "UPDATE TB_CAMERA SET ID_LOJA = '$id_lj', NOME_CAMERA = '$nome_cam',
					VISAO_CAMERA = '$visao_cam', URL_CAMERA = '$url_cam'
					WHERE ID_CAMERA = '$id_cam'";
		$retorno = mysqli_query($conecta,$comando); # executa (UPDATE)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas
		mysqli_close($conecta);
		return $qtde;
	}
	
	public function Buscar($id_cam){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_CAMERA, ID_LOJA, NOME_CAMERA, VISAO_CAMERA, URL_CAMERA FROM TB_CAMERA
					WHERE ID_CAMERA = '$id_cam'";
		$retorno = mysqli_query($conecta,$comando); # executa
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++){
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_CAMERA
			$tab_ret[$i][1] = $row[1];	#ID_LOJA
			$tab_ret[$i][2] = $row[2];	#NOME_CAMERA
			$tab_ret[$i][3] = $row[3];	#VISAO_CAMERA
			$tab_ret[$i][4] = $row[4];	#URL_CAMERA
		}
		mysqli_close($conecta);
		return $tab_ret;
	}
	
	public function Listar($id_lj){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_CAMERA, ID_LOJA, NOME_CAMERA, VISAO_CAMERA, URL_CAMERA FROM TB_CAMERA
					WHERE ID_LOJA = '$id_lj'";
		$retorno = mysqli_query($conecta,$comando); # executa
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++){
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_CAMERA
			$tab_ret[$i][1] = $row[1];	#ID_LOJA
			$tab_ret[$i][2] = $row[2];	#NOME_CAMERA
			$tab_ret[$i][3] = $row[3];	#VISAO_CAMERA
			$tab_ret[$i][4] = $row[4];	#URL_CAMERA
		}
		mysqli_close($conecta);
		return $tab_ret;
	}
	
	public function Excluir($id_cam){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$comando = "DELETE FROM TB_CAMERA WHERE ID_CAMERA = '$id_cam'";
		mysqli_query($conecta,$comando); # executa (DELETE)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (DELETE)
		mysqli_close($conecta);
		return $qtde;
	}
}
?>