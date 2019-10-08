<?php require("includes/header.php"); ?>  
<?php require("includes/tpHome.php"); ?>        


	
<section class="popular-listing hp2 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Encontre</span>
                            <h3>Locações Populares</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                 <?php   
                    $where = "";              	
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