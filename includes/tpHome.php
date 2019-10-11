<div class="wrapper">

        <header class="pb">

            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="">
                                    <img src="assets/images/logo2.png" alt="">
                                </a>
                                <button class="menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                </button>

                               <?php require("includes/menu.php"); ?>


                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header><!--header end-->

        <?php require("includes/login.php"); ?> 

        <div class="popup" id="register-popup">
            <h3>Registrar</h3>
            <div class="popup-form">
                <form>
                    <div class="form-field">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-field">
                        <input type="text" name="password" placeholder="Password">
                    </div>
                    <div class="form-cp">
                        <div class="form-field">
                            <div class="input-field">
                                <input type="checkbox" name="ccc" id="cc2">
                                <label for="cc2">
                                    <span></span>
                                    <small>Concordo com os termos</small>
                                </label>
                            </div>
                        </div>
                        <a href="#" title="" class="signin-op">Tem uma conta?</a>
                    </div><!--form-cp end-->
                    <button type="submit" class="btn2">Registrar</button>
                </form>
            </div>
        </div><!--popup end-->

        <section class="banner hp2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content">
                            <h1>Encontre as melhores propriedades</h1>
                        </div>
                        <form action="busca" method="post" class="row banner-search">
                            <div class="form_field addres">
                                <input type="text" class="form-control" name="endereco" placeholder="Digite o endereço">
                            </div>
                            <div class="form_field tpmax">
                                <div class="form-group">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Categorias</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="categoria" id="categoria">
                                        <ul class="dropeddown" id="cate">
                                            <li id="cate1">Salão de Festa</li>
                                            <li id="cate2">Chacaras</li>
                                            <li id="cate3">Barracas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             <div class="form_field tpmax">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="preco_minimo" placeholder="Preço minimo">   
                                </div>
                            </div>
                            <div class="form_field tpmax">
                                <div class="form-group">
                                    <div class="form_field tpmax">
                                        <input type="text" class="form-control" name="preco_maximo" placeholder="Preço maximo">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form_field srch-btn">
                                <a href="#"  onclick="$(this).closest('form').submit()" class="btn btn-outline-primary ">
                                    <i class="la la-search"></i>
                                    <span>Procurar</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>