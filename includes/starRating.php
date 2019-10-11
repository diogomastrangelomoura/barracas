<div class="rating-container theme-krajee-fa rating-xs rating-animate">
    <!--<div class="clear-rating clear-rating-active" title="Clear">
        <i class="fa fa-minus-circle"></i>
    </div>-->
    <div class="rating-stars" title="">
        <!--<span class="empty-stars">
            <span class="star"><i class="fa fa-star-o"></i></span>
            <span class="star"><i class="fa fa-star-o"></i></span>
            <span class="star"><i class="fa fa-star-o"></i></span>
            <span class="star"><i class="fa fa-star-o"></i></span>
            <span class="star"><i class="fa fa-star-o"></i></span>
        </span>
        <span class="filled-stars" style="width: 50%; ">
            <span class="star"><i class="fa fa-star"></i></span>
            <span class="star"><i class="fa fa-star"></i></span>
            <span class="star"><i class="fa fa-star"></i></span>
            <span class="star"><i class="fa fa-star"></i></span>
            <span class="star"><i class="fa fa-star"></i></span>
        </span>-->
        <input id="rating" name="rating" type="text" class="kv-fa rating-input" value="0" data-size="xs" title="">
    </div>
    <!--<div class="caption">
        <span class="label label-warning badge-warning">Two Stars</span>
    </div>-->
</div>

<script>
    $(document).on('ready', function () {
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>',
            language:'pt-BR'
        });
        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
                'change', function () {
                    console.log('Rating selected: ' + $(this).val());
                });
    });
</script>
<?php echo $_POST['rating']; ?>