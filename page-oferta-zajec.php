<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="row oferta_zajec_row">
                        <div class="col-12 oferta_zajec_huge_txt">
                            <h1>OFERTA<br>ZAJĘĆ</h1>
                        </div>
                        <div class="col-12 zajecia_online">
                            <p>WSZYSTKIE ZAJĘCIA ODBYWAJĄ SIĘ ONLINE</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 text_autora_container_oferta_and_godziny">
                    <?php // the_content() ?>
                    <?php
                        include 'template-parts/oferta-zajec-posts-loop.php';
                    ?>
                </div>              
            <?php
            }
        }
    ?>   
    </div>
</div>




<?php get_footer() ?>