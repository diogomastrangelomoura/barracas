<?php
	require ("../class/class.db.php");
	require ("../class/class.seguranca.php");

	$nome = str_replace(".html","", normaliza($nameReview));
	$email = str_replace(".html","", normaliza($emailReview));
	$tel = str_replace(".html","", normaliza($phoneReview));
	$msg = str_replace(".html","", normaliza($msgReview));
	$id = (int) $id_imovel;

	$data = data_user_para_mysql(date("d/m/Y"));

	$sql = $db->select("INSERT INTO reviews(id_imovel, nome, rating, comentario, tel, data) 
		VALUES ($id, '$nome', $ratingReview, '$msg', '$tel', '$data')");


	//echo "$id - " . "$nome - " . "$email - " . "$tel - " . "$msg - " . "$ratingReview - " . "$data";

    unset($nome);
    unset($email);
    unset($tel);
    unset($data);
    unset($msg);
    unset($ratingReview);
    unset($id);

	
    header("Location:detalhes/$id_imovel");
?>