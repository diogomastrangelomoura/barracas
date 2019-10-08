<?php
 
$sql = $db->select("SELECT imoveis.*, bairros.bairro  FROM imoveis 
    INNER JOIN bairros ON imoveis.id_bairro = bairros.id_bairro
    $where
    ORDER BY imoveis.id_imoveis DESC     
    LIMIT 6");

if($db->rows($sql)){

    while($line = $db->expand($sql)){

?>
           <div class="col-lg-4 col-md-6" style="">
                        <div class="card">
                            <a href="detalhes/<?php echo $line['id_imoveis'] ?>/propriedade-<?php echo $line['id_imoveis'] ?>-<?php echo normaliza($line['bairro']) ?>" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <h5> R$ <?php echo $line['preco']?> </h5>
                                        <span>For Rent</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="detalhes.php" title="">
                                    <h3> <?php echo $line['bairro'] ?> </h3>
                                    <p><i class="la la-map-marker"></i> <?php echo $line['bairro']  ?> </p>
                                </a>
                                <ul>
                                    <li>3 Banheiros</li>
                                    <li>2 Quartos</li>
                                    <li>Area 555 Sq Ft</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="pull-left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="#" class="pull-right">
                                    <i class="la la-calendar-check-o"></i> 25 Days Ago</a>
                            </div>
                            <a href="detalhes.php" title="" class="ext-link"></a>
                        </div>
                    </div>  
<?php       

    }


} else {

    echo 'Nenhum local encontrado';

}

?>


    