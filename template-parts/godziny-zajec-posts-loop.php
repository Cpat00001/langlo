<?php

$args = array(
    'post_type' => 'post',
    'numberposts' => '-1',
    'field'    => 'term_id',
    'terms'    => '10',
    'category_name' => 'godzina',
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
    <div class="alert alert-secondary godzina_zajec_usluga_box" role="alert">
    <div class="row godziny_zajec_tile">
        <div class="col-12">
            <p style="font-weight:900;font-size:1.5em;"><?php echo $post->post_title; ?></p>
        </div>
    </div>    
    </div>
    
    <?php
}