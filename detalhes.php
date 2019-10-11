<?php require("includes/header.php"); ?>  
<?php require("includes/tpInterna.php"); ?> 
<?php require("includes/topo_busca.php"); ?>        


<?php 

$id = (int) $id_imovel;

	$sql = $db->select("SELECT imoveis.*, bairros.bairro, caracteristicas.*,categoria.*  FROM imoveis
    INNER JOIN bairros ON imoveis.id_bairro = bairros.id_bairro
    INNER JOIN caracteristicas ON imoveis.id_carac = caracteristicas.id_carac
    INNER JOIN categoria ON imoveis.id_cate = categoria.id_cate
    WHERE imoveis.id_imoveis = $id ");

    $line = $db->expand($sql)
?>


<section class="property-single-pg">
            <div class="container">
                <div class="property-hd-sec">
                    <div class="card">
                        <div class="card-body">
                            <a href="#">
                                <h3> <?php echo $line['bairro']?> </h3>
                                <p><i class="la la-map-marker"></i><?php echo $line['bairro']?></p>
                            </a>
                            <ul>
                                <?php
                                    if($line['salao'] == true){
                                        echo "<li>Salão de Festas</li>";
                                    }
                                    if($line['chacara'] == true){
                                        echo "<li>Chacara</li>";
                                    }
                                    if($line['barraca'] == true){
                                        echo "<li>Barraca</li>";
                                    }
                                	if($line['banheiros'] != 0){
                                        if($line['banheiros'] == 1) echo "<li>".$line['banheiros']." Banheiro</li>";
                                                else echo "<li>".$line['banheiros']." Banheiros</li>";
                                    }
                                    if($line['tamanho'] != 0){
                                        echo "<li>".$line['tamanho']." m²</li>";
                                    }
                                ?>
                            </ul>
                        </div><!--card-body end-->
                        <div class="rate-info">
                            <h5>R$ <?php echo valores($line['preco'])?></h5>
                            <span>Alugar</span>
                        </div><!--rate-info end-->
                    </div><!--card end-->
                </div><!---property-hd-sec end-->
                <div class="property-single-page-content">
                    <div class="row">
                        <div class="col-lg-8 pl-0 pr-0">
                            <div class="property-pg-left">
                                <div class="property-imgs">
                                    <div class="property-main-img">
                                        <div class="property-img">
                                            <img src="https://via.placeholder.com/770x515" alt="">
                                        </div><!--property-img end-->
                                        <div class="property-img">
                                            <img src="https://via.placeholder.com/770x515" alt="">
                                        </div><!--property-img end-->
                                        <div class="property-img">
                                            <img src="https://via.placeholder.com/770x515" alt="">
                                        </div><!--property-img end-->
                                        <div class="property-img">
                                            <img src="https://via.placeholder.com/770x515" alt="">
                                        </div><!--property-img end-->
                                        <div class="property-img">
                                            <img src="https://via.placeholder.com/770x515" alt="">
                                        </div><!--property-img end-->
                                        <div class="property-img">
                                            <img src="https://via.placeholder.com/770x515" alt="">
                                        </div><!--property-img end-->
                                    </div><!--property-main-img end-->
                                    <div class="property-thumb-imgs">
                                        <div class="row thumb-carous">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="property-img">
                                                    <img src="https://via.placeholder.com/226x150" alt="">
                                                </div><!--property-img end-->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="property-img">
                                                    <img src="https://via.placeholder.com/226x150" alt="">
                                                </div><!--property-img end-->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="property-img">
                                                    <img src="https://via.placeholder.com/226x150" alt="">
                                                </div><!--property-img end-->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="property-img">
                                                    <img src="https://via.placeholder.com/226x150" alt="">
                                                </div><!--property-img end-->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="property-img">
                                                    <img src="https://via.placeholder.com/226x150" alt="">
                                                </div><!--property-img end-->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="property-img">
                                                    <img src="https://via.placeholder.com/226x150" alt="">
                                                </div><!--property-img end-->
                                            </div>
                                        </div>
                                    </div><!--property-thumb-imgs end-->
                                </div><!--property-imgs end-->
                                <div class="descp-text">
                                    <h3>Descrição</h3>
                                    <p> <?php echo $line['desc'] ?></p>
                                </div><!--descp-text end-->
                                <div class="details-info">
                                    <h3>Detalhes</h3>
                                    <ul>
                                        <?php
                                            if($line['salao'] == true){
                                                echo "<h4><li><i class='fa fa-check-circle green' aria-hidden='true'></i> Salão de Festas</li></h4>";
                                            }
                                            if($line['chacara'] == true){
                                                echo "<h4><li> <i class='fa fa-check-circle green' aria-hidden='true'></i> Chacara</li></h4>";
                                            }
                                            if($line['barraca'] == true){
                                                echo "<h4><li> <i class='fa fa-check-circle green' aria-hidden='true'></i> Barraca</li></h4>";
                                            }
                                            if($line['piscina'] == true){
                                                echo "<h4><li><i class='fa fa-check-circle green' aria-hidden='true'></i> Piscina</li></h4>";
                                            }elseif ($line['piscina'] == false) {
                                                echo "<h4><li><i class='fa fa-times-circle red' aria-hidden='true'></i> Piscina</li></h4>";
                                            }
                                            if($line['churras'] == true){
                                                echo "<h4><li><i class='fa fa-check-circle green' aria-hidden='true'></i> Churrasqueira</li></h4>";
                                            }elseif($line['churras'] == false){
                                                echo "<h4><li><i class='fa fa-times-circle red' aria-hidden='true'></i> Churrasqueira</li></h4>";
                                            }
                                            if($line['fogao'] == true){
                                                echo "<h4><li><i class='fa fa-check-circle green' aria-hidden='true'></i> Fogão</li></h4>";
                                            }elseif($line['fogao'] == false){
                                                echo "<h4><li><i class='fa fa-times-circle red' aria-hidden='true'></i> Fogão</li></h4>";
                                            }
                                            if($line['geladeira'] == true){
                                                echo "<h4><li><i class='fa fa-check-circle green' aria-hidden='true'></i> Geladeira</li></h4>";
                                            }elseif($line['geladeira'] == false){
                                                echo "<h4><li><i class='fa fa-times-circle red' aria-hidden='true'></i> Geladeira</li></h4>";
                                            }
                                            if($line['camas'] != 0){
                                                if($line['camas'] == 1) 
                                                    echo "<h4><li> <i class='fa fa-check-circle green' aria-hidden='true'></i> ".$line['camas']." Cama</li></h4>";
                                                else echo "<h4><li> <i class='fa fa-check-circle green' aria-hidden='true'></i> ".$line['camas']." Camas</li></h4>";
                                            }elseif($line['camas'] == 0){
                                                echo "<h4><li> <i class='fa fa-times-circle red' aria-hidden='true'></i> ".$line['camas']." Cama</li></h4>";
                                            }
                                            if($line['garagem'] == true){
                                                echo "<h4><li> <i class='fa fa-check-circle green' aria-hidden='true'></i> Garagem</li></h4>";
                                            }elseif($line['garagem'] == false){
                                                echo "<h4><li> <i class='fa fa-times-circle red' aria-hidden='true'></i> Garagem</li></h4>";
                                            }
                                            if($line['sinuca'] == true){
                                                echo "<h4><li> <i class='fa fa-check-circle green' aria-hidden='true'></i> Mesa de Sinuca</li></h4>";
                                            }elseif($line['sinuca'] == false){
                                                echo "<h4><li> <i class='fa fa-times-circle red' aria-hidden='true'></i> Mesa de Sinuca</li></h4>";
                                            }
                                            if($line['ar_cond'] == true){
                                                echo "<h4><li> <i class='fa fa-check-circle green' aria-hidden='true'></i> Ar Condicionado</li></h4>";
                                            }elseif($line['ar_cond'] == false){
                                                echo "<h4><li> <i class='fa fa-times-circle red' aria-hidden='true'></i> Ar Condicionado</li></h4>";
                                            }
                                        ?>
                                        <!--<li>
                                            <h4>Construction Tyoe:</h4>
                                            <span>Condo</span>
                                        </li>-->
                                        
                                    </ul>
                                </div><!--details-info end-->

                                <?php 
                                    $where = "WHERE id_imagens = ".$line['id_imagens'];
                                    require("includes/plantaBaixa.php"); 
                                ?> 

                                <div class="nearby-locts">
                                    <h3>What's Nearby?</h3>
                                    <span>Powered by <img src="assets/images/ylog.png" alt=""></span>
                                    <div class="widget-posts">
                                        <ul>
                                            <li>
                                                <div class="wd-posts">
                                                    <div class="ps-img">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </div><!--ps-img end-->
                                                    <div class="ps-info">
                                                        <h3><a href="#" title="">O museu de arte moderna</a></h3>
                                                        <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                    </div><!--ps-info end-->
                                                </div><!--wd-posts end-->
                                                <ul class="star-rating">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                </ul><!--star-rating end-->
                                            </li>
                                            <li>
                                                <div class="wd-posts">
                                                    <div class="ps-img">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </div><!--ps-img end-->
                                                    <div class="ps-info">
                                                        <h3><a href="#" title="">Joe's Shanghai</a></h3>
                                                        <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                    </div><!--ps-info end-->
                                                </div><!--wd-posts end-->
                                                <ul class="star-rating">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                </ul><!--star-rating end-->
                                            </li>
                                            <li>
                                                <div class="wd-posts">
                                                    <div class="ps-img">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </div><!--ps-img end-->
                                                    <div class="ps-info">
                                                        <h3><a href="#" title="">Apple Fifth Avenue</a></h3>
                                                        <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                    </div><!--ps-info end-->
                                                </div><!--wd-posts end-->
                                                <ul class="star-rating">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                </ul><!--star-rating end-->
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--nearby-locts end-->
                                <div class="comments-dv">
                                    <!-- Começo Reviews-->
                                    <?php 
                                        $where = "WHERE id_imovel = $id";
                                        require("includes/review.php"); 
                                    ?>
                                    <!-- Final Reviews-->
                                    <div class="review-hd">
                                        <div class="rev-hd">
                                            <h3>Comente sua Experiência</h3>

                                            <ul class="rating-lst">

                                                <?php require("includes/starRating.php"); ?>

                                            </ul><!--rating-lst end-->
                                        </div><!--rev-hd end-->
                                        <div class="post-comment-sec">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 pl-0">
                                                        <div class="form-field">
                                                            <input type="text" name="name" placeholder="Nome">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-field">
                                                            <input type="text" name="email" placeholder="E-mail">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 pr-0">
                                                        <div class="form-field">
                                                            <input type="text" name="phone" placeholder="Telefone">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12 pl-0 pr-0">
                                                        <div class="form-field">
                                                            <textarea name="msg" placeholder="Mensagem"></textarea>
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12 pl-0 pr-0">
                                                        <button type="submit" class="btn-default">Postar Mensagem</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!--post-comment-sec end-->
                                    </div><!--review-hd end-->
                                </div><!--comments-dv end-->

                                <?php 
                                    /*if(isset($name) && isset($comentario)){
                                        $sql = $db->select("INSERT INTO reviews(id_imovel,nome,rating,comentario,data)
                                            VALUES($id_imovel,$rating,$msg," . 
                                            data_user_para_mysql(date("d/m/Y")) . ")");
                                        $db->expand($sql);
                                    }*/
                                 ?>

                                <div class="similar-listings-posts">
                                    <h3>Outras Locações</h3>
                                   <div class="list-products">
                                        <?php
                                            $where = "WHERE imoveis.id_imoveis != ". $id; 
                                            require("includes/infoOutros.php")
                                        ?>   
                                    </div>
                            </div><!--property-pg-left end-->
                        </div>
                        </div>
                        <div class="col-lg-4 pr-0">
                            <div class="sidebar layout2">
                                <!-- Inicio contato prop -->
                                <?php 
                                    $where = "WHERE id_infoProp = ". $line['id_infoProp'];
                                    require("includes/contatoProp.php"); 
                                ?>
                                <!-- Final contato prop -->
                                <div class="widget widget-catgs">
                                    <h3 class="widget-title">Categorias</h3>
                                    <ul>
                                        <?php require("includes/categorias.php"); ?>
                                    </ul>
                                </div><!--widget-catgs end-->     
                            </div><!--sidebar end-->
                        </div>
                    </div>
                </div><!--property-single-page-content end-->
            </div>
        </section><!--property-single-pg end-->


	


<?php require("includes/rodape.php"); ?>        