<?php

class ALOJA{

	public function Cadastrar($nomelj,$siglalj,$franqlj,$tplj,$ncontatolj,$tellj,$logrlj,$numlj,$ceplj,$brlj,$cidadelj,$estadolj,$paislj,$reflj,$obslj){
		
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$comando = "INSERT INTO TB_LOJA (NOME_LOJA, SIGLA_LOJA, FRANQUIA_LOJA, TIPO_LOJA, NOME_CONTATO_LOJA, TELEFONE_LOJA, 
					LOGRADOURO_LOJA, NUMERO_LOJA, CEP_LOJA, BAIRRO_LOJA, CIDADE_LOJA, ESTADO_LOJA, PAIS_LOJA, REFERENCIA_LOJA,
					OBS_LOJA) VALUES ('$nomelj','$siglalj','$franqlj','$tplj','$ncontatolj','$tellj','$logrlj','$numlj','$ceplj',
					'$brlj','$cidadelj','$estadolj','$paislj','$reflj','$obslj')";
		$retorno = mysqli_query($conecta,$comando); # executa (INSERT)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (INSERT)
		mysqli_close($conecta);
		return $qtde;			
	
	}
	
	public function Verificar($nomelj,$siglalj,$franqlj,$tplj,$ncontatolj,$tellj,$logrlj,$numlj,$ceplj,$brlj,$cidadelj,$estadolj,$paislj,$reflj,$obslj){
		
		if (!empty($nomelj)){
			if (!empty($siglalj)){
				if (!empty($franqlj)){
					if (!empty($tplj)){
						if (!empty($ncontatolj)){
							if (!empty($tellj)){
								if (!empty($logrlj)){
									if (!empty($numlj)){
										if (!empty($ceplj)){					
											if (!empty($brlj)){
												if (!empty($cidadelj)){			
													if (!empty($estadolj)){
														if (!empty($paislj)){
															return 1;															
														} else {
															echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o país da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
														}			
													} else {
														echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o estado da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
													}			
												} else {
													echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira a cidade da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
												}			
											} else {
												echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o bairro da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
											}
										} else {
											echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o cep da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
										}			
									} else {
										echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o número do logradouro da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
									}			
								} else {
									echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o logradouro da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
								}			
							} else {
								echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o número de telefone da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
							}			
						} else {
							echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o nome do contato da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
						}			
					} else {
						echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Escolha o tipo da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
					}			
				} else {
					echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Escolha entre 'Filial' ou 'Franquia'!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
				}			
			} else {
				echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira a sigla da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
			}		
		} else {
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Loja não cadastrada. Insira o nome da loja!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_loja.php';</script>;";
		}	
	
	}
	
	public function Atualizar($idlj,$nomelj,$siglalj,$franqlj,$tplj,$ncontatolj,$tellj,$logrlj,$numlj,$ceplj,$brlj,$cidadelj,$estadolj,$paislj,$reflj,$obslj){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$comando = "UPDATE TB_LOJA SET NOME_LOJA ='$nomelj',SIGLA_LOJA = '$siglalj', FRANQUIA_LOJA = '$franqlj',
					TIPO_LOJA = '$tplj', NOME_CONTATO_LOJA = '$ncontatolj', TELEFONE_LOJA = '$tellj', LOGRADOURO_LOJA = '$logrlj',
					NUMERO_LOJA = '$numlj', CEP_LOJA = '$ceplj', BAIRRO_LOJA = '$brlj', CIDADE_LOJA = '$cidadelj',
					ESTADO_LOJA = '$estadolj', PAIS_LOJA = '$paislj', REFERENCIA_LOJA = '$reflj', OBS_LOJA = '$obslj'
					WHERE ID_LOJA = $idlj";
		$retorno = mysqli_query($conecta,$comando); # executa (UPDATE)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (UPDATE)
		mysqli_close($conecta);
		return $qtde;
	}
	
	public function Buscar($idlj){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_LOJA, NOME_LOJA, SIGLA_LOJA, FRANQUIA_LOJA, TIPO_LOJA, NOME_CONTATO_LOJA, TELEFONE_LOJA, 
					LOGRADOURO_LOJA, NUMERO_LOJA, CEP_LOJA, BAIRRO_LOJA, CIDADE_LOJA, ESTADO_LOJA, PAIS_LOJA, REFERENCIA_LOJA,
					OBS_LOJA FROM TB_LOJA WHERE ID_LOJA = '$idlj'";
		$retorno = mysqli_query($conecta, $comando); # retorna registros (SELECT)
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++)
		{ 
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_LOJA
			$tab_ret[$i][1] = $row[1];	#NOME_LOJA
			$tab_ret[$i][2] = $row[2];	#SIGLA_LOJA
			$tab_ret[$i][3] = $row[3];	#FRANQUIA_LOJA
			$tab_ret[$i][4] = $row[4];	#TIPO_LOJA
			$tab_ret[$i][5] = $row[5];	#NOME_CONTATO_LOJA
			$tab_ret[$i][6] = $row[6];	#TELEFONE_LOJA
			$tab_ret[$i][7] = $row[7];	#LOGRADOURO_LOJA
			$tab_ret[$i][8] = $row[8];	#NUMERO_LOJA
			$tab_ret[$i][9] = $row[9];	#CEP_LOJA
			$tab_ret[$i][10] = $row[10];	#BAIRRO_LOJA
			$tab_ret[$i][11] = $row[11];	#CIDADE_LOJA
			$tab_ret[$i][12] = $row[12];	#ESTADO_LOJA
			$tab_ret[$i][13] = $row[13];	#PAIS_LOJA
			$tab_ret[$i][14] = $row[14];	#REFERENCIA_LOJA
			$tab_ret[$i][15] = $row[15];	#OBS_LOJA
		}
		mysqli_close($conecta);
		return $tab_ret;
	
	}
	
	public function Listar(){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_LOJA, NOME_LOJA, SIGLA_LOJA, FRANQUIA_LOJA, TIPO_LOJA, NOME_CONTATO_LOJA, TELEFONE_LOJA, 
					LOGRADOURO_LOJA, NUMERO_LOJA, CEP_LOJA, BAIRRO_LOJA, CIDADE_LOJA, ESTADO_LOJA, PAIS_LOJA, REFERENCIA_LOJA,
					OBS_LOJA FROM TB_LOJA";
		$retorno = mysqli_query($conecta, $comando); # retorna registros (SELECT)
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++)
		{ 
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_LOJA
			$tab_ret[$i][1] = $row[1];	#NOME_LOJA
			$tab_ret[$i][2] = $row[2];	#SIGLA_LOJA
			$tab_ret[$i][3] = $row[3];	#FRANQUIA_LOJA
			$tab_ret[$i][4] = $row[4];	#TIPO_LOJA
			$tab_ret[$i][5] = $row[5];	#NOME_CONTATO_LOJA
			$tab_ret[$i][6] = $row[6];	#TELEFONE_LOJA
			$tab_ret[$i][7] = $row[7];	#LOGRADOURO_LOJA
			$tab_ret[$i][8] = $row[8];	#NUMERO_LOJA
			$tab_ret[$i][9] = $row[9];	#CEP_LOJA
			$tab_ret[$i][10] = $row[10];	#BAIRRO_LOJA
			$tab_ret[$i][11] = $row[11];	#CIDADE_LOJA
			$tab_ret[$i][12] = $row[12];	#ESTADO_LOJA
			$tab_ret[$i][13] = $row[13];	#PAIS_LOJA
			$tab_ret[$i][14] = $row[14];	#REFERENCIA_LOJA
			$tab_ret[$i][15] = $row[15];	#OBS_LOJA
		}
		mysqli_close($conecta);
		return $tab_ret;
	
	}
	
	public function Excluir($idlj){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$comando = "DELETE FROM TB_LOJA WHERE ID_LOJA = '$idlj'";
		mysqli_query($conecta,$comando); # executa (DELETE)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (DELETE)
		mysqli_close($conecta);
		return $qtde;
	}
	
	public function ListarPais(){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_PAIS, NOME_PORTUGUES_PAIS, NOME_INGLES_PAIS FROM TB_PAIS";
		$retorno = mysqli_query($conecta, $comando); # retorna registros (SELECT)
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++)
		{ 
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_PAIS
			$tab_ret[$i][1] = $row[1];	#NOME_PORTUGUES_PAIS
			$tab_ret[$i][2] = $row[2];	#NOME_INGLES_PAIS
		}
		mysqli_close($conecta);
		return $tab_ret;
	}
	
	public function ListarEstado(){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_ESTADO, ID_PAIS, NOME_ESTADO FROM TB_ESTADO";
		$retorno = mysqli_query($conecta, $comando); # retorna registros (SELECT)
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++)
		{ 
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_ESTADO
			$tab_ret[$i][1] = $row[1];	#ID_PAIS
			$tab_ret[$i][2] = $row[2];	#NOME_ESTADO
		}
		mysqli_close($conecta);
		return $tab_ret;
	}
	
	public function ListarCidade(){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_CIDADE, ID_ESTADO, NOME_CIDADE FROM TB_CIDADE";
		$retorno = mysqli_query($conecta, $comando); # retorna registros (SELECT)
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++)
		{ 
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_CIDADE
			$tab_ret[$i][1] = $row[1];	#ID_ESTADO
			$tab_ret[$i][2] = $row[2];	#NOME_CIDADE
		}
		mysqli_close($conecta);
		return $tab_ret;
	}
	
}

?>