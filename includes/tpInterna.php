<div class="wrapper">

      	<header>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="">
                                    <img src="assets/images/logo.png" alt="">
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

        