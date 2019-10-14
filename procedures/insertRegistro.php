<?php 

	require ("../class/class.db.php");
	require ("../class/class.seguranca.php");



	$sql = $db->select("INSERT INTO infoprop(nome, agencia, tel, email) 
		VALUES ('$nome','$agencia', '$tel', '$email')");

	$id_prop = mysql_insert_id();

	$sql2 = $db->select("INSERT INTO login(login, senha,id_infoProp) 
		VALUES ('$login','$pass',$id_prop)");

	$msgRegist = "Cadastro realizado com sucesso";
	
	//echo "teste"

	header("Location:registrar");

 ?>