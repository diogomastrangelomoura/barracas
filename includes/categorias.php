<?php  

	$cate =[
		1 => "Salão de Festas",
		2 => "Chacara",
		3 => "Barraca"
	];

	

	$sql = $db->select("SELECT id_cate, count(id_imoveis) AS count FROM imoveis GROUP BY id_cate");
	if($db->rows($sql)){
		while($cateCount = $db->expand($sql)){
			
?>	
			<li>
			    <a href="#" title=""><i class="la la-angle-right"></i><span><?php echo $cate[$cateCount['id_cate']] ?></span></a>
			    <span><?php echo $cateCount['count']; ?></span>
			</li>
<?php 
		}
	}
?>