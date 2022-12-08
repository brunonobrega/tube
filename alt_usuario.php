<?php
	session_start();
	require_once("includes/conexao.inc");
				
	$usuarioForm = $_POST ['usuario'];
	$senhaForm = $_POST ['novaSenha'];
	$confSenhaForm = $_POST ['confNovaSenha'];
	$statusForm = $_POST ['perfil'];
	
	switch($statusForm){
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
	
	if ((!empty($usuarioForm)) && (!empty($senhaForm)) && (!empty($confSenhaForm)) && (!empty($statusForm)) && ($senhaForm == $confSenhaForm)){
		$acesso = new AUSU();
		$usuarios = $acesso->Atualizar($usuarioForm, $senhaForm, $perfil);
		if($usuarios > 0){
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_sucesso=Usuário alterado com sucesso!; expires=' + date.toUTCString() + 'path=/';location.href='alterar_usuario.php';</script>;";		
		} else{		
			echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Usuário não alterado!; expires=' + date.toUTCString() + 'path=/';location.href='alterar_usuario.php';</script>;";
		}
	}		
	echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Preencha os dados corretamente!; expires=' + date.toUTCString() + 'path=/';location.href='alterar_usuario.php';</script>;";
?>