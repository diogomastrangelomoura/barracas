<?php require("includes/header.php"); ?>  
<?php require("includes/tpinterna.php"); ?>  

    <section class="pager-sec bfr">
            <div class="container">
                <div class="pager-sec-details">
                    <h3>Registrar</h3>
                    <ul>
                        <li><a href="home" title="">Home</a></li>
                        <li><span>Registrar</span></li>
                    </ul>
                </div><!--pager-sec-details end-->
            </div>
        </section>      


	<div class="contact-sec">
            <div class="container">
                <div class="contact-details-sec">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 pl-0">
                            <div class="contact_form">
                                <h3>Credenciais</h3>
                                <form class="js-ajax-form">
                                    <div class="form-group no-pt">
                                        <div class="missing-message">
                                            Populate Missing Fields
                                        </div>
                                        <div class="success-message">
                                            <i class="fa fa-check text-primary"></i> Obrigado! Sua mensagem foi enviada com sucesso...
                                        </div>
                                        <div class="error-message">Populate Missing Fields</div>
                                    </div><!--form-group end-->
                                    <div class="form-fieldss">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-4 pl-0">
                                                <div class="form-field">
                                                    <input type="text" name="login" placeholder="Login" id="login">
                                                </div><!-- form-field end-->
                                                <div class="form-field">
                                                    <input type="password" name="pass" placeholder="Senha" id="pass">
                                                </div><!-- form-field end-->
                                                <div class="form-field">
                                                    <input type="password" name="pass" placeholder="Confirmar Senha" id="pass">
                                                </div><!-- form-field end-->
                                                <div class="form-field">
                                                    <input type="email" name="email" placeholder="E-mail" id="email">
                                                </div><!-- form-field end-->
                                                <div class="form-field">
                                                    <input type="text" name="nome" placeholder="Nome Completo" id="nome">
                                                </div><!-- form-field end-->
                                                <div class="form-field">
                                                    <input type="text" name="agencia" placeholder="Agência" id="agencia">
                                                </div><!-- form-field end-->
                                                <div class="form-field">
                                                    <input type="text" name="tel" placeholder="Telefone" id="text" class="phone_with_ddd">
                                                </div><!-- form-field end-->
                                            </div>
                                            <div class="col-lg-12 col-md-12 pl-0">
                                                <button type="submit" class="btn-default submit">Cadastrar</button>
                                            </div>
                                            
                                        </div>
                                    </div><!--form-fieldss end-->
                                </form>
                            </div><!--contact_form end-->
                        </div>
                    </div>
                </div><!--contact-details-sec end-->
            </div>
        </div><!--contact-sec end-->





<?php require("includes/rodape.php"); ?>        