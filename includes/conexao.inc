<?php
class AUSU{
	
	public function Acessar($email, $senha){
		
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		
		$retornoEmailUsuario = Array();
		$retornoSenhaUsuario = Array();
		$retornoAcessoUsuario = Array();
		
		$comandoEmailUsuario = "SELECT EMAIL_USUARIO FROM TB_USU WHERE EMAIL_USUARIO = '$email'";
		$queryEmailUsuario = mysqli_query($conecta, $comandoEmailUsuario); # retorna registros (SELECT)
		$retornoEmailUsuario = mysqli_fetch_array($queryEmailUsuario); # pega valor do primeiro registro (SELECT)
		$retornoEmailUsuario = $retornoEmailUsuario[0];
		
		$comandoSenhaUsuario = "SELECT SENHA_USUARIO FROM TB_USU WHERE EMAIL_USUARIO = '$email'";
		$querySenhaUsuario = mysqli_query($conecta, $comandoSenhaUsuario); # retorna registros (SELECT)
		$retornoSenhaUsuario = mysqli_fetch_array($querySenhaUsuario); # pega valor do primeiro registro (SELECT)
		$retornoSenhaUsuario = $retornoSenhaUsuario[0];
		
		$comandoStatusUsuario = "SELECT STATUS_USUARIO FROM TB_USU WHERE EMAIL_USUARIO = '$email'";
		$queryStatusUsuario = mysqli_query($conecta, $comandoStatusUsuario); # retorna registros (SELECT)
		$retornoStatusUsuario = mysqli_fetch_array($queryStatusUsuario); # pega valor do primeiro registro (SELECT)
		$retornoStatusUsuario = $retornoStatusUsuario[0];
		
		if (mysqli_num_rows($queryEmailUsuario) > 0 && mysqli_num_rows($querySenhaUsuario) > 0){
			if($retornoEmailUsuario == $email && $retornoSenhaUsuario == md5($senha)){
				if ($retornoStatusUsuario == 1){
					$comandoAcessoUsuario = "SELECT PERFIL_USUARIO FROM TB_USU WHERE EMAIL_USUARIO = '$email'";
					$queryAcessoUsuario = mysqli_query($conecta, $comandoAcessoUsuario); # retorna registros (SELECT)
					$retornoAcessoUsuario = mysqli_fetch_array($queryAcessoUsuario); # retorna registros (SELECT)
				
					$_SESSION['emailUsuario'] = $email;
					$_SESSION['acessoUsuario'] = $retornoAcessoUsuario[0];

					echo "<script>location.href='dashboard.php';</script>"; 
				} else {
					$_SESSION['acessoUsuario'] = 0;
				
					echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Cadastro inativo. Acesse seu e-mail e ative o cadastro!; expires=' + date.toUTCString(); location.href='index.php';</script>";
				}
			} else {
				$_SESSION['acessoUsuario'] = 0;
				
				echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Usuário ou senha incorretos!; expires=' + date.toUTCString(); location.href='index.php';</script>";
			}			
		} else{
			$_SESSION['acessoUsuario'] = 0;
			
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Usuário ou senha incorretos!; expires=' + date.toUTCString(); location.href='index.php';</script>"; 
		}
		
		mysqli_close($conecta);
		return $tab_ret;
	}
	
	public function Logado(){
		if ($_SESSION['acessoUsuario'] !== '5' && $_SESSION['acessoUsuario'] !== '1' && $_SESSION['acessoUsuario'] !== '2' && $_SESSION['acessoUsuario'] !== '3' && $_SESSION['acessoUsuario'] !== '4' && $_SESSION['acessoUsuario'] !== 5 && $_SESSION['acessoUsuario'] !== 1 && $_SESSION['acessoUsuario'] !== 2 && $_SESSION['acessoUsuario'] !== 3 && $_SESSION['acessoUsuario'] !== 4){
			
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Sua sessão foi encerrada, acesse novamente.; expires=' + date.toUTCString() + 'path=/';location.href='index.php';</script>";
		}
	}
	
	
	public function Listar(){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, PERFIL_USUARIO, STATUS_USUARIO FROM TB_USU";
		$retorno = mysqli_query($conecta, $comando); # retorna registros (SELECT)
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++)
		{ 
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_USUARIO
			$tab_ret[$i][1] = $row[1];	#EMAIL_USUARIO
			$tab_ret[$i][2] = $row[2];	#SENHA_USUARIO
			$tab_ret[$i][3] = $row[3];	#PERFIL_USUARIO
			$tab_ret[$i][4] = $row[4];	#STATUS_USUARIO
		}
		mysqli_close($conecta);
		return $tab_ret;
	}
	
	public function Cadastrar($email, $senha, $senhaConf, $perfil){
		if ($senha != $senhaConf){			
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Preencha todos os campos corretamente!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_usuario.php';</script>;";
		} else{
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		
		$comandoEmailUsuario = "SELECT EMAIL_USUARIO FROM TB_USU WHERE EMAIL_USUARIO = '$email'";
		$queryEmailUsuario = mysqli_query($conecta, $comandoEmailUsuario); # retorna registros (SELECT)
		
		
		if (mysqli_num_rows($queryEmailUsuario) > 0){
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Usuário já cadastrado!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_usuario.php';</script>;";
		} else {
		
			switch($perfil){
				case 'Administrador':
					$perfil = 5;
					break;
			
				case 'Suporte':
					$perfil = 1;
					break;
			
				case 'Monitor':
					$perfil = 2;
					break;
				
				case 'Manutenção':
					$perfil = 3;
					break;
				
				case 'Visitante':
					$perfil = 4;
					break;
			
				default:
					$perfil = 4;
					break;
			}
		
			//echo($email."<br>");
			//echo($senha."<br>");
			//echo($senhaConf."<br>");
			//echo($perfil."<br>");
			$token = hash('sha256', $email);
			
			$senhacript = md5($senha);
		
			$comando = "INSERT INTO TB_USU (EMAIL_USUARIO, SENHA_USUARIO, PERFIL_USUARIO, TOKEN_USUARIO)
					VALUES ('$email', '$senhacript', $perfil, '$token')";
			$retorno = mysqli_query($conecta,$comando); # executa (UPDATE)
			$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (UPDATE)
			mysqli_close($conecta);
		
			// envia e-mail para ativação
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$headers .= 'From: noreply@bit2b.com.br';
			$body = '<html><head><title>Bit2B</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body style="margin: 0px; padding: 0px;"><table width="98%" border="0" cellspacing="0" cellpadding="40"><tr><td bgcolor="#F7F7F7" width="100%" style="font-family: tahoma, verdana, arial, sans-serif;"><table cellpadding="0" cellspacing="0" border="0" width="768"><tr><td align="left" bgcolor="#cccaca" height="34" valign="middle" style="font-size: 22px; font-family: tahoma, verdana, arial, sans-serif; color: #fff;"><img src="http://www.bit2b.com.br/images/logo.png" alt="Bit2B"title="Bit2B" style="width:200px; height: 60px;"/></td><td bgcolor="#cccaca"><span style="margin-top: 15px; float: right; text-align: right; margin-right: 10px; font-size: small; color: rgb(255, 255, 255); font-family: tahoma, verdana, arial, sans-serif;"> Bit2B <br /> G4 - Virtual <br /> <br /></span></td></tr></table><table cellpadding="0" cellspacing="0" border="0" width="768" style="border-bottom: 1px solid #3b5998; border-left: 1px solid #ccc; border-right: 1px solid #ccc;" bgcolor="#ffffff"><tr><td bgcolor="white" width="768" style="font-size: small; padding: 10px 18px 18px 18px; font-family: tahoma, verdana, arial, sans-serif;" valign="top" align="left"><h1 style="font-size: small;">Olá,</h1>Seja bem vindo! <span style="font-weight: bold;"><br>Você foi cadastrado no nosso sistema.<br><br> Para ativar seu cadastro, acesse</span>:<br /> #URL-TOKEN# <br /><hr style="margin-bottom: 10px;" /><br> Seu nome de usuário é: #EMAIL-USUARIO#<br> Sua Senha é: #SENHA-USUARIO#<br><br> Recomendamos sua senha seja alterada no primeiro acesso.</td></tr></table><table cellpadding="0" cellspacing="0" border="0" width="768"><tr><td style="color: #666666; padding: 10px; font-size: 9px; font-family: tahoma, verdana, arial, sans-serif;">Você recebeu este e-mail pela realização de um cadastro em um sistema da Bit2B.<br />Caso não tenha realizado este cadastro, ignore este e-mail.</td></tr></table></td></tr></table></body></html>';
			
			$body = str_replace('#URL-TOKEN#', 'http://www.bit2b.com.br/projetos/burger_tube/ativar_cadastro.php?token='.$token, $body);
			$body = str_replace('#EMAIL-USUARIO#', $email, $body);
			$body = str_replace('#SENHA-USUARIO#', $senha, $body);
			
			mail($email, "Ativacao da sua conta - Bit2B - BK", $body, $headers);
			
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_sucesso=Usuário cadastrado com sucesso!; expires=' + date.toUTCString() + 'path=/';location.href='cadastrar_usuario.php';</script>;";
		}
		}
		return $qtde;
	}
	
	public function Buscar($email){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$tab_ret = Array();
		$comando = "SELECT ID_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, PERFIL_USUARIO 
					FROM TB_USU WHERE EMAIL_USUARIO = '$email' ";
		$retorno = mysqli_query($conecta, $comando); # retorna registros (SELECT)
		$qtde = mysqli_num_rows($retorno); # qtde linhas retornadas
		for($i=0;$i<$qtde;$i++)
		{ 
			$row = mysqli_fetch_array($retorno);
			$tab_ret[$i][0] = $row[0];	#ID_USUARIO
			$tab_ret[$i][1] = $row[1];	#EMAIL_USUARIO
			$tab_ret[$i][2] = $row[2];	#SENHA_USUARIO
			$tab_ret[$i][3] = $row[3];	#PERFIL_USUARIO
		}
		mysqli_close($conecta);
		return $tab_ret;
	}
	
	public function Atualizar($email, $senha, $perfil){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$senha = md5($senha);
		
		$comando = "UPDATE TB_USU SET SENHA_USUARIO = '$senha',
					PERFIL_USUARIO = $perfil WHERE EMAIL_USUARIO = '$email'";
		$retorno = mysqli_query($conecta,$comando); # executa (UPDATE)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (UPDATE)
		mysqli_close($conecta);
		return $qtde;
	}
	
	public function Excluir($cod){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		$comando = "DELETE FROM TB_USU WHERE ID_USUARIO = $cod";
		mysqli_query($conecta,$comando); # executa (DELETE)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (DELETE)
		mysqli_close($conecta);
		return $qtde;
	}
	
	public function Ativar($token){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		
		$comando = "UPDATE TB_USU SET STATUS_USUARIO = 1 WHERE TOKEN_USUARIO = '$token'";
		mysqli_query($conecta,$comando); # executa (UPDATE)
		$qtde = mysqli_affected_rows($conecta); #retorna qtde_linhas (UPDATE)
		mysqli_close($conecta);
		return $qtde;
	}
	
	public function EsqueciSenha($email){
		$conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
		mysqli_set_charset($conecta, "UTF8");
		
		$comandoEmailUsuario = "SELECT EMAIL_USUARIO FROM TB_USU WHERE EMAIL_USUARIO = '$email'";
		$queryEmailUsuario = mysqli_query($conecta, $comandoEmailUsuario); # retorna registros (SELECT)
		$retornoEmailUsuario = mysqli_fetch_array($queryEmailUsuario); # pega valor do primeiro registro (SELECT)
		$retornoEmailUsuario = $retornoEmailUsuario[0];
		
		if (mysqli_num_rows($queryEmailUsuario) > 0){
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_sucesso=Requisição processada, Aguarde o contato por e-mail!; expires=' + date.toUTCString() + 'path=/';location.href='index.php';</script>;";
		} else {
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=E-mail não cadastrado.; expires=' + date.toUTCString() + 'path=/';location.href='index.php';</script>";
		
		}
	
	}
	
	public function NivelAcesso($nivelAcesso){
		
		include_once "header.php";
		
		switch($nivelAcesso){
			case 5:
				include_once "menu_lateral.php"; 
				break;
			case '5':
				include_once "menu_lateral.php"; 
				break;		
		}
		
	}
}
?>