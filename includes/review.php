<?php 
    $sql = $db->select("SELECT * FROM reviews
    $where");

if($db->rows($sql)){

?>

<h3> <?php echo $db->rows($sql) ?> Comentários</h3>
    <div class="comment-section">
        <ul>

<?php
    while($review = $db->expand($sql)){
?>


<li>
    <div class="cm-info-sec">
        <div class="cm-img">
            <img src="https://via.placeholder.com/79x79" alt="">
        </div><!--author-img end-->
        <div class="cm-info">
            <h3><?php echo $review['nome']?></h3>
            <h4><?php echo data_mysql_para_user($review['data']) ?></h4>
        </div>
        <ul class="rating-lst">
            <?php
                for ($i=0; $i <= $review['rating'] - 1; $i++) { ?>
                    <li><span><i class="fa fa-star" aria-hidden="true"></i></span></li>
            <?php 
                }
                for ($i=0; $i < 5 - $review['rating']; $i++) {  ?>
                    <li><span><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
            <?php 
                }?>
        </ul><!--rating-lst end-->
    </div><!--cm-info-sec end-->
    <p><?php echo $review['comentario']?></p>
    <a href="#" title="" class="cm-reply">Reply</a>
</li>

<?php       

    }
?>
        </ul>
    </div>
<?php
} else {

    echo 'Nenhuma review encontrada';

}

?>