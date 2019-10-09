<?php
 
$sql = $db->select("SELECT imoveis.*, bairros.bairro, caracteristicas.*,categoria.*  FROM imoveis
    INNER JOIN bairros ON imoveis.id_bairro = bairros.id_bairro
    INNER JOIN caracteristicas ON imoveis.id_carac = caracteristicas.id_carac
    INNER JOIN categoria ON imoveis.id_cate = categoria.id_cate
    $where
    ORDER BY imoveis.id_imoveis DESC     
    LIMIT 6");

if($db->rows($sql)){

    while($data = $db->expand($sql)){

?>
           <div class="col-lg-4 col-md-6" style="">
                        <div class="card">
                            <a href="detalhes/<?php echo $data['id_imoveis'] ?>/propriedade-<?php echo $data['id_imoveis'] ?>-<?php echo normaliza($data['bairro']) ?>" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <h5> R$ <?php echo valores($data['preco'])?> </h5>
                                        <span>Alugar</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="detalhes.php" title="">
                                    <h3> <?php echo $data['bairro'] ?> </h3>
                                    <p><i class="la la-map-marker"></i> <?php echo $data['bairro']  ?> </p>
                                </a>
                                <ul>
                                    <?php
                                    if($data['salao'] == true){
                                        echo "<li>Salão de Festas</li>";
                                    }
                                    if($data['chacara'] == true){
                                        echo "<li>Chacara</li>";
                                    }
                                    if($data['barraca'] == true){
                                        echo "<li>Barraca</li>";
                                    }
                                    if($data['banheiros'] != 0){
                                        if($data['banheiros'] == 1) echo "<li>".$data['banheiros']." Banheiro</li>";
                                                else echo "<li>".$data['banheiros']." Banheiros</li>";
                                    }
                                    if($data['tamanho'] != 0){
                                        echo "<li>".$data['tamanho']." m²</li>";
                                    }
                                ?>
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


    