<?php
	$conecta = mysql_connect("localhost", "cbertoli_tube", "Tube@2022") or print (mysql_error());
	mysql_select_db("cbertoli_tube", $conecta) or print (mysql_error());		
?>