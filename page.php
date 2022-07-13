<?php get_header(); ?>

<div class="container page_content_div">
    page.php
    <div class="row">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                <div class="col-12">
                    <h5><?php the_content() ?></h5>
                </div>
            <?php
            }
        }
    ?>   
    </div>
</div>

<?php get_footer() ?>