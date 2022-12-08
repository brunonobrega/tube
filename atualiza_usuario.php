<?php 
	
	ini_set( 'default_charset', 'utf-8');
	session_start();
	if($_SESSION['login'] != 1){
		echo "<script>window.location='http://localhost/burger_tube/index.php'</script>";
	}
	
	$cod = $_POST['id'];
	
	$Categoria = $_POST ['Categoria'];
	$Genero = $_POST ['Genero'];
	$Estreia = $_POST ['Estreia'];
	$NomeTitulo = $_POST ['NomeTitulo'];
	$TituloOriginalBanda = $_POST ['TituloOriginalBanda'];
	$Classificacao = $_POST ['Classificacao'];
	$Imdb = floatval(number_format($_POST ['Imdb'], 2));
	$Diretor = $_POST ['Diretor'];
	$Duracao = $_POST ['Duracao'];
	$Origem = $_POST ['Origem'];
	$ElencoIntegrantes = $_POST ['ElencoIntegrantes'];
	$DescricaoSetlist = $_POST ['DescricaoSetlist'];
	$LTrailer = $_POST ['LTrailer'];
	$AlteraImg = $_POST ['AlteraImg'];
	
	$data =  date("dmYHis");
	
	if($Categoria != "" && $Genero != "" && $Estreia != "" && $NomeTitulo != "" && $TituloOriginalBanda != "" && $Classificacao != "" && $Imdb != "" && $Diretor != "" && $Duracao != "" && $Origem != "" && $ElencoIntegrantes != "" && $DescricaoSetlist != "" && $LTrailer != ""){ 
		
		require_once("incd/VBD.inc");
		$vid = new VBD();
		$video = $vid->Atualizar($cod,$NomeTitulo,$Estreia,$Genero,$Categoria,$TituloOriginalBanda,$Diretor,$DescricaoSetlist,$Classificacao,$Imdb,$Duracao,$Origem,$ElencoIntegrantes,$LTrailer);
		
		if ($AlteraImg == "1"){
			move_uploaded_file($_FILES['ImageUm']['tmp_name'], $EndImageUm);
			$linkimg = $vid->AtualizarImg($cod, $EndImageUm);
		}
		echo "<script>alert('O usuário $Usuario, foi atualizado com sucesso!');</script>";
		
	} else {
		echo "<script>alert('Ocorreu um erro, entre em contato com o desenvolvedor!')</script>";
	}
	echo "<script>window.location='listar_usuario.php'</script>";
	exit();
?>