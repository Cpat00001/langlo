<?php get_header(); ?>

<div class="container page_content_div">
    <div class="row">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                <!--<div class="d-none d-sm-none d-md-block">Left</div>-->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h5><?php the_content() ?></h5>
                </div>
                <!--<div class="d-none d-sm-none d-md-block">Right</div>-->
            <?php
            }
        }
    ?>   
    </div>
</div>

<?php get_footer() ?>