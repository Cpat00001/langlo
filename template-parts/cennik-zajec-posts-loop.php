<?php

$args = array(
    'post_type' => 'post',
    'category' => '8',
    'post_status' => 'public',
    'orderby' => 'date',
    'order' => 'ASC'
);

$posts = get_posts($args);

foreach($posts as $post){
    //var_dump($post);
    ?>
    
     
    <div class="alert alert-secondary cennik_zajec_usluga_box" role="alert">
    <div class="row">
        <div class="col-12">
            <p style="font-weight:900;"><?php echo $post->post_title; ?></p>
        </div>
    </div>    
    <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-1 cennik_zajec_arrow_container">
                <span class="cennik_zajec_font_awsome_arrow">
                    <i class="fa fa-long-arrow-alt-right"></i>
                </span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-11 cennik_zajec_usluga_container">
                <span><p><?php echo $post->post_content; ?></p></span>
            </div>
        </div>
    </div>
    
    <?php
}
