<?php require("includes/header.php"); ?>  
<?php require("includes/tpinterna.php"); ?> 

	<section class="pager-sec bfr">
            <div class="container">
                <div class="pager-sec-details">
                    <h3>Busca</h3>
                    <ul>
                        <li><a href="home" title="">Home</a></li>
                        <li><span>Busca</span></li>
                    </ul>
                </div><!--pager-sec-details end-->
            </div>
        </section>  

        <section class="popular-listing hp2 section-padding">
            <div class="container">
           
                <div class="row">
                  
                 <?php  
                     $busca1 = '';
                     $busca2 = '';
                     $busca3 = '';
                     $busca4 = '';

                     if (!empty($endereco)) {
                         $busca1 = "AND imoveis.endereco LIKE '%$endereco%'";
                     }


                      if (!empty($categoria)) {
                         $busca2 = "AND imoveis.id_cate='$categoria'";
                     }


                      if (!empty($preco_minimo)) {
                         $busca3 = "AND imoveis.preco>='$preco_minimo'";
                     }


                      if (!empty($preco_maximo)) {
                         $busca4 = "AND imoveis.preco<='$preco_maximo'";
                     }


                    $where = "WHERE imoveis.id_imoveis!='0' $busca1 $busca2 $busca3 $busca4";              	
                 	require("includes/info.php");
                 ?> 

                    <div class="col-lg-12">
                        <div class="load-more-posts">
                            <a href="#" title="" class="btn2">Carregar Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>    

        <?php require("includes/rodape.php"); ?>       