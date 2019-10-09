
<?php  
    $sql = $db->select("SELECT * FROM infoprop
        $where");

    $info = $db->expand($sql);


?>


<div class="widget widget-form">
    <h3 class="widget-title">Contato com o Proprietário</h3>
    <div class="contct-info">
        <img src="https://via.placeholder.com/81x74" alt="">
        <div class="contct-nf">
            <h3><?php echo $info['nome'] ?></h3>
            <h4><?php echo $info['agencia'] ?></h4>
            <span><i class="la la-phone"></i><?php echo $info['tel'] ?></span>
        </div>
    </div><!--contct-info end-->
    <div class="post-comment-sec">
        <form>
            <div class="form-field">
                <input type="text" name="name" placeholder="Nome">
            </div><!--form-field end-->
            <div class="form-field">
                <input type="text" name="email" placeholder="E-mail">
            </div><!--form-field end-->
            <div class="form-field">
                <input type="text" name="phone" placeholder="Telefone">
            </div><!--form-field end-->
            <div class="form-field">
                <textarea name="message" placeholder="Mensagem"></textarea>
            </div><!--form-field end-->
            <button type="submit" class="btn2">Enviar</button>
        </form>
    </div><!--post-comment-sec end-->
</div>