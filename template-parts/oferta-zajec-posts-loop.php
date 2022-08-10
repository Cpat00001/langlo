<?php

$args = array(
    'post_type' => 'post',
    'numberposts' => '-1',
    'field'    => 'term_id',
    'terms'    => '9',
    'category_name' => 'oferta',
    'post_status' => 'public',
    'orderby' => 'date',
    'order' => 'ASC'
);
//get the posts with given args
$posts = get_posts($args);

//var_dump($posts);
foreach($posts as $post){
    // var_dump($post);
    ?>
    <div class="alert alert-secondary cennik_zajec_usluga_box" role="alert">
    <div class="row oferta_zajec_tile">
        <div class="col-12">
            <p style="font-weight:900;margin-top:1rem;margin-bottom:1rem;"><?php echo $post->post_title; ?></p>
        </div>
    </div>    
    </div>
    
    <?php
}