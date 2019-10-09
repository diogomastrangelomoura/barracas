<?php
 
$sql = $db->select("SELECT imoveis.*, bairros.bairro, caracteristicas.*,categoria.*  FROM imoveis
    INNER JOIN bairros ON imoveis.id_bairro = bairros.id_bairro
    INNER JOIN caracteristicas ON imoveis.id_carac = caracteristicas.id_carac
    INNER JOIN categoria ON imoveis.id_cate = categoria.id_cate
    $where
    ORDER BY imoveis.id_imoveis DESC     
    LIMIT 6");

if($db->rows($sql)){

    while($dataOther = $db->expand($sql)){

?>
           <div class="card">
                <a href="detalhes/<?php echo $dataOther['id_imoveis'] ?>/propriedade-<?php echo $dataOther['id_imoveis'] ?>-<?php echo normaliza($dataOther['bairro']) ?>" title="">
                    <div class="img-block">
                        <div class="overlay"></div>
                        <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                        <div class="rate-info">
                            <h5> R$ <?php echo valores($dataOther['preco'])?> </h5>
                            <span>Alugar</span>
                        </div>
                    </div>
                </a>
                <div class="card_bod_full">
                    <div class="card-body">
                        <a href="24_Property_Single.html" title="">
                            <h3><?php echo $dataOther['bairro'] ?> </h3>
                            <p><i class="la la-map-marker"></i><?php echo $dataOther['bairro'] ?> </p>
                        </a>
                        <ul>
                            <?php
                                    if($dataOther['salao'] == true){
                                        echo "<li>Salão de Festas</li>";
                                    }
                                    if($dataOther['chacara'] == true){
                                        echo "<li>Chacara</li>";
                                    }
                                    if($dataOther['barraca'] == true){
                                        echo "<li>Barraca</li>";
                                    }
                                    if($dataOther['banheiros'] != 0){
                                        if($dataOther['banheiros'] == 1) echo "<li>".$dataOther['banheiros']." Banheiro</li>";
                                                else echo "<li>".$dataOther['banheiros']." Banheiros</li>";
                                    }
                                    if($dataOther['tamanho'] != 0){
                                        echo "<li>".$dataOther['tamanho']." m²</li>";
                                    }
                                ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="crd-links">
                            <a href="#" class="pull-left">
                                <i class="la la-heart-o"></i>
                            </a>
                            <a href="#" class="plf">
                                <i class="la la-calendar-check-o"></i> 25 Days Ago
                            </a>
                        </div><!--crd-links end-->
                        <a href="detalhes/<?php echo $dataOther['id_imoveis'] ?>/propriedade-<?php echo $dataOther['id_imoveis'] ?>-<?php echo normaliza($dataOther['bairro']) ?>" title="" class="btn-default">Ver Detalhes</a>
                    </div>
                </div><!--card_bod_full end-->
                <a href="detalhes/<?php echo $dataOther['id_imoveis'] ?>/propriedade-<?php echo $dataOther['id_imoveis'] ?>-<?php echo normaliza($dataOther['bairro']) ?>" title="" class="ext-link"></a>
            </div>
<?php       

    }


} else {

    echo 'Nenhum local encontrado';

}

?>


