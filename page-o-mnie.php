<?php get_header(); ?>

<div class="container page_content_div">
    <div class="row">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                <div class="col-12 col-sm-12 col-md-5">
                    <div class="row" >
                        <div class="d-none d-sm-none d-md-block col-md-12" 
                            style="min-height:100px;height:auto;
                            padding-top:20px;padding-bottom:20px;">
                            <h3 class="oMnie_header"><?php the_title(); ?></h3>
                        </div>
                        <div class="col-12" style="border:2px solid white;min-height:400px;">
                            <p style="font-size:2.0em;font-weight:900;"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 order-first col-sm-12 col-md-6 order-md-last">
                    <div class="row">
                        <div class="col-12 o_mnie_img_container"></div>
                        <div class="d-sm-block d-md-none col-12 oMnie_headerMobile_Container">
                            <h3 class="oMnie_headerMobile"><?php the_title(); ?></h3>
                        </div>
                        <!--<div class="col-md-12" style="background-color:red;"></div>-->
                    </div>
                </div>
            <?php
            }
        }
    ?>   
    </div>
</div>

<?php get_footer() ?>