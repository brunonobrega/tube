<?php

	try {
	  
	  $conecta = mysqli_connect("localhost", "cbertoli_tube", "Tube@2022", "cbertoli_tube");
	  mysqli_set_charset($conecta, "UTF8");
	  
	  //$tipo = $_GET['tipo'];
	  //$estado = $_GET['estado'];
	  
	  //echo "<script>alert('O tipo eh $tipo e o estado eh $estado');</script>";
	  
	  switch ( $_GET['tipo'] ) {
		case 'pais' :
		  $sql = "SELECT * FROM TB_PAIS";
		  $option = 'o Pais';
		  $string = 'ID_PAIS';
		  $nome = 'NOME_PORTUGUES_PAIS';
		  break;
		case 'estado' :
		  //$sql = sprintf ( "SELECT * FROM TB_ESTADO WHERE NOME_PAIS = '%s'", $_GET['pais'] );
		  $sql = sprintf ( "SELECT * FROM TB_ESTADO WHERE NOME_PAIS = 'Brasil'");
		  $option = 'o Estado';
		  $string = 'ID_ESTADO';
		  $nome = 'NOME_ESTADO';
		  break;
		case 'cidade' :
		  $sql = sprintf ( "SELECT * FROM TB_CIDADE WHERE ID_ESTADO = '%s'", $_GET['estado'] );
		  $option = 'a Cidade';
		  $nome = 'NOME_CIDADE';
		  $string = 'ID_CIDADE';
		  break;
		case 'bairro' :
		  $sql = sprintf ( "SELECT * FROM dados_bairros WHERE cidade = '%s'", utf8_encode ( $_GET['cidade'] ) );
		  $option = ' o Bairro';
		  $string = 'nome';
		  break;
	  }
	  /*
	* Executamos o SQL aqui
	  */
	  //$consulta = $con->query ( $sql );

	  $consulta = mysqli_query($conecta, $sql);
	  
	  $resultado = null;

	  $resultado = sprintf (
		  '<option value="%s">Escolha %s</option>',
		  0,
		  $option
	  );

	  $resultado .= sprintf (
		  '<option value="%s">- - - - - - - - - - - - -</option>',
		  0
	  );

	  while ( $c = mysqli_fetch_object($consulta)) {
		$resultado .= sprintf (
			'<option id="%s" value="%s">%s</option>',
			$c->$string,
			$c->$nome,
			$c->$nome
		);
	  }
	  
	  print $resultado;

	} catch ( Exception $e ) {

	  return null;
	}
?>