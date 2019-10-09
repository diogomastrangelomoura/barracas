
<?php 

	$sql = $db->select("SELECT id_imagens, planta FROM imagens
		$where");


if($db->rows($sql)){

	$img = $db->expand($sql);

	if(!strcmp($img['planta'],"")){
?>
<div class="floorplan">
    <h3>Planta baixa</h3>
    <img src="https://via.placeholder.com/427x268" alt="">
</div><!--floorplan end-->

<?php 
	}
} ?>