<?php require("includes/header.php"); ?>  
<?php require("includes/tpInterna.php"); ?> 
<?php require("includes/topo_busca.php"); ?>        


<?php 

$id = (int) $id_imovel;
;
	$sql = $db->select("SELECT imoveis.*, bairros.bairro, caracteristicas.*  FROM imoveis
    INNER JOIN bairros ON imoveis.id_bairro = bairros.id_bairro
    INNER JOIN caracteristicas ON imoveis.id_carac = caracteristicas.id_carac
    WHERE imoveis.id_imoveis = $id
    ORDER BY imoveis.id_imoveis");

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
                                	if($line['piscina'] == true){
                                		echo "<li>Piscina</li>";
                                	}
                                	if($line['churras'] == true){
                                		echo "<li>Churrasqueira</li>";
                                	}
                                	if($line['fogao'] == true){
                                		echo "<li>Fogão</li>";
                                	}
                                	if($line['geladeira'] == true){
                                		echo "<li>Geladeira</li>";
                                	}
                                	if($line['camas'] != 0){
                                		if($line['camas'] == 1){
                                			echo "<li>".$line['camas']." Cama</li>";
                                		}else echo "<li>".$line['camas']." Camas</li>";
                                	}
                                	if($line['garagem'] == true){
                                		echo "<li>Garagem</li>";
                                	}
                                	if($line['sinuca'] == true){
                                		echo "<li>Mesa de Sinuca</li>";
                                	}
                                	if($line['ar_cond'] == true){
                                		echo "<li>Ar Condicionado</li>";
                                	}
                                ?>
                            </ul>
                        </div><!--card-body end-->
                        <div class="rate-info">
                            <h5>R$ <?php echo $line['preco']?></h5>
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
                                            if($line['piscina'] == true){
                                                echo "<li>Piscina</li>";
                                            }
                                            if($line['churras'] == true){
                                                echo "<li>Churrasqueira</li>";
                                            }
                                            if($line['fogao'] == true){
                                                echo "<li>Fogão</li>";
                                            }
                                            if($line['geladeira'] == true){
                                                echo "<li>Geladeira</li>";
                                            }
                                            if($line['camas'] != 0){
                                                if($line['camas'] == 1){
                                                    echo "<li>".$line['camas']." Cama</li>";
                                            }else echo "<li>".$line['camas']." Camas</li>";
                                            }
                                            if($line['garagem'] == true){
                                                echo "<li>Garagem</li>";
                                            }
                                            if($line['sinuca'] == true){
                                                echo "<li>Mesa de Sinuca</li>";
                                            }
                                            if($line['ar_cond'] == true){
                                                echo "<li>Ar Condicionado</li>";
                                            }
                                        ?>
                                        <li>
                                            <h4>Construction Tyoe:</h4>
                                            <span>Condo</span>
                                        </li>
                                        
                                    </ul>
                                </div><!--details-info end-->
                                <div class="features-dv">
                                    <h3>Features</h3>
                                    <form class="form_field">
                                        <ul>
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c1">
                                                <label for="c1">
                                                    <span></span>
                                                    <small>Parking</small>
                                                </label>
                                            </li>
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c2" checked>
                                                <label for="c2">
                                                    <span></span>
                                                    <small>Academia</small>
                                                </label>
                                            </li>
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c3">
                                                <label for="c3">
                                                    <span></span>
                                                    <small>Aquecedor</small>
                                                </label>
                                            </li>
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c4" checked>
                                                <label for="c4">
                                                    <span></span>
                                                    <small>Ar Condicionado</small>
                                                </label>
                                            </li>
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c5" checked>
                                                <label for="c5">
                                                    <span></span>
                                                    <small>Internet</small>
                                                </label>
                                            </li>
                                            <li class="input-field">
                                                <input type="checkbox" name="cc" id="c6">
                                                <label for="c6">
                                                    <span></span>
                                                    <small>Piscina</small>
                                                </label>
                                            </li>
                                        </ul>
                                    </form>
                                </div><!--features-dv end-->
                                <div class="floorplan">
                                    <h3>floorplan</h3>
                                    <img src="https://via.placeholder.com/427x268" alt="">
                                </div><!--floorplan end-->
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
                                    <h3>3 Reviews</h3>
                                    <div class="comment-section">
                                        <ul>
                                            <li>
                                                <div class="cm-info-sec">
                                                    <div class="cm-img">
                                                        <img src="https://via.placeholder.com/79x79" alt="">
                                                    </div><!--author-img end-->
                                                    <div class="cm-info">
                                                        <h3>Kritsofer Nolan</h3>
                                                        <h4>April 25, 2018</h4>
                                                    </div>
                                                    <ul class="rating-lst">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                    </ul><!--rating-lst end-->
                                                </div><!--cm-info-sec end-->
                                                <p>Nam placerat facilisis placerat. Morbi elit nibh, auctor sit amet sodales id, porttitor eu quam. Aenean dui libero, laoreet quis con sequat vitae, posuere ut sapien. Etiam pharetra nulla vel diam eleifend, eu placerat nunc molestie. </p>
                                                <a href="#" title="" class="cm-reply">Reply</a>
                                            </li>
                                            <li>
                                                <div class="cm-info-sec">
                                                    <div class="cm-img">
                                                        <img src="https://via.placeholder.com/79x79" alt="">
                                                    </div><!--author-img end-->
                                                    <div class="cm-info">
                                                        <h3>Kritsofer Nolan</h3>
                                                        <h4>April 25, 2018</h4>
                                                    </div>
                                                    <ul class="rating-lst">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                    </ul><!--rating-lst end-->
                                                </div><!--cm-info-sec end-->
                                                <p>Nam placerat facilisis placerat. Morbi elit nibh, auctor sit amet sodales id, porttitor eu quam. Aenean dui libero, laoreet quis con sequat vitae, posuere ut sapien. Etiam pharetra nulla vel diam eleifend, eu placerat nunc molestie. </p>
                                                <a href="#" title="" class="cm-reply">Reply</a>
                                            </li>
                                            <li>
                                                <div class="cm-info-sec">
                                                    <div class="cm-img">
                                                        <img src="https://via.placeholder.com/79x79" alt="">
                                                    </div><!--author-img end-->
                                                    <div class="cm-info">
                                                        <h3>Kritsofer Nolan</h3>
                                                        <h4>April 25, 2018</h4>
                                                    </div>
                                                    <ul class="rating-lst">
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                        <li><span class="la la-star"></span></li>
                                                    </ul><!--rating-lst end-->
                                                </div><!--cm-info-sec end-->
                                                <p>Nam placerat facilisis placerat. Morbi elit nibh, auctor sit amet sodales id, porttitor eu quam. Aenean dui libero, laoreet quis con sequat vitae, posuere ut sapien. Etiam pharetra nulla vel diam eleifend, eu placerat nunc molestie. </p>
                                                <a href="#" title="" class="cm-reply">Reply</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review-hd">
                                        <div class="rev-hd">
                                            <h3>Write a Review</h3>
                                            <ul class="rating-lst">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                            </ul><!--rating-lst end-->
                                        </div><!--rev-hd end-->
                                        <div class="post-comment-sec">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 pl-0">
                                                        <div class="form-field">
                                                            <input type="text" name="name" placeholder="Your Name">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-field">
                                                            <input type="text" name="email" placeholder="Your Email">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 pr-0">
                                                        <div class="form-field">
                                                            <input type="text" name="phone" placeholder="Your Phone">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12 pl-0 pr-0">
                                                        <div class="form-field">
                                                            <textarea name="message" placeholder="Your Message"></textarea>
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12 pl-0 pr-0">
                                                        <button type="submit" class="btn-default">Post Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!--post-comment-sec end-->
                                    </div><!--review-hd end-->
                                </div><!--comments-dv end-->
                                <div class="similar-listings-posts">
                                    <h3>Outras Locações</h3>
                                    	<?php
                                            $where = "WHERE imoveis.id_imoveis != ". $id; 
                 							require("includes/info.php");
                 						?>
                                </div><!--similar-listings-posts end-->
                            </div><!--property-pg-left end-->
                        </div>
                        <div class="col-lg-4 pr-0">
                            <div class="sidebar layout2">
                                <div class="widget widget-form">
                                    <h3 class="widget-title">Contact Listing Agent</h3>
                                    <div class="contct-info">
                                        <img src="https://via.placeholder.com/81x74" alt="">
                                        <div class="contct-nf">
                                            <h3>Tomas Wilkinson</h3>
                                            <h4>Douglas and Eleman Agency</h4>
                                            <span><i class="la la-phone"></i>+1 212-925-3797</span>
                                        </div>
                                    </div><!--contct-info end-->
                                    <div class="post-comment-sec">
                                        <form>
                                            <div class="form-field">
                                                <input type="text" name="name" placeholder="Your Name">
                                            </div><!--form-field end-->
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your Email">
                                            </div><!--form-field end-->
                                            <div class="form-field">
                                                <input type="text" name="phone" placeholder="Your Phone">
                                            </div><!--form-field end-->
                                            <div class="form-field">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                            </div><!--form-field end-->
                                            <button type="submit" class="btn2">Contato</button>
                                        </form>
                                    </div><!--post-comment-sec end-->
                                </div><!--widget-form end-->
                                <div class="widget widget-catgs">
                                    <h3 class="widget-title">Categorias</h3>
                                    <ul>
                                        <li>
                                            <a href="#" title=""><i class="la la-angle-right"></i><span>House</span></a>
                                            <span>7</span>
                                        </li>
                                        <li>
                                            <a href="#" title=""><i class="la la-angle-right"></i><span>Condo</span></a>
                                            <span>15</span>
                                        </li>
                                        <li>
                                            <a href="#" title=""><i class="la la-angle-right"></i><span>Townhouse</span></a>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <a href="#" title=""><i class="la la-angle-right"></i><span>Coop</span></a>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div><!--widget-catgs end-->
                                <div class="widget widget-posts">
                                    <h3 class="widget-title">Popular Listings</h3>
                                    <ul>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <a href="14_Blog_Open.html" title="">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </a>
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="14_Blog_Open.html" title="">Traditional Apartments</a></h3>
                                                    <strong>$125.700</strong>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                        </li>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <a href="14_Blog_Open.html" title="">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </a>
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="14_Blog_Open.html" title="">Traditional Apartments</a></h3>
                                                    <strong>$125.700</strong>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                        </li>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <a href="14_Blog_Open.html" title="">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </a>
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="14_Blog_Open.html" title="">Apartamentos Tradicionais</a></h3>
                                                    <strong>$125.700</strong>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                        </li>
                                    </ul>
                                </div><!--widget-posts end-->
                                <div class="widget widget-calculator">
                                    <h3 class="widget-title">Mortgage Calculator</h3>
                                    <form>
                                        <ul>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Total Amount">
                                            </li>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Down Payment">
                                            </li>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Interest Rate">
                                            </li>
                                            <li>
                                                <i>$</i>
                                                <input type="number" name="amount" placeholder="Monthly Repayments">
                                            </li>
                                            <li>
                                                <button type="submit" class="btn2">Calcular</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div><!--widget-calculator end-->
                            </div><!--sidebar end-->
                        </div>
                    </div>
                </div><!--property-single-page-content end-->
            </div>
        </section><!--property-single-pg end-->


	


<?php require("includes/rodape.php"); ?>        