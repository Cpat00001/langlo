<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="description" content="LANGLO.pl Szkolenia językowe - angielski. Profesjonalne szkolenia prowadzone przez wykwalifikowaną kadrę - Dagmara Kamińska.Zaprszam.">
        <meta name="keywords" content="korepetycje , angielski , dagmara kamińska , angielski online" />
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Playfair+Display&display=swap" rel="stylesheet">
        <!--end of google fonts -->
        <!-- font awsome -->
        <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <script src="https://kit.fontawesome.com/11d4f90b7c.js" crossorigin="anonymous"></script>
        <!-- end of font awsome -->
        <!-- dodaj tagi dla social media -->
        <meta property="og:locale" content="pl_PL">
        <meta property="og:type" content="article">
        <meta property="og:title" content="Langlo.pl - Profesjonalne Szkolenia Językowe.Speaking | Practice | Progress">
        <meta property="og:description" content="Warsztaty i szkolenia językowe - angielski. Profesjonalne Szkolenia Językowe na każdym poziomie zaawansowania.
        Przełam bariery, otwórz się na świat i podróze.">
        <meta property="og:url" content="https://langlo.pl">
        <meta property="og:image" content="https://langlo.pl/wp-content/uploads/2022/06/langlo_logo_noBackground.png" />
        <meta name="twitter:title" content="Langlo.pl - Profesjonalne Szkolenia Językowe.Speaking | Practice | Progress">
        <meta name="twitter:description" content="Warsztaty i szkolenia językowe - angielski. Profesjonalne Szkolenia Językowe na każdym poziomie zaawansowania.">
        <meta name="twitter:image" content="https://langlo.pl/wp-content/uploads/2022/06/langlo_logo_noBackground.png">
        <meta name="twitter:card" content="summary_large_image">


        <?php wp_head(); ?>
    </head>
<body <?php body_class('nowa_class'); ?>>
<div class="container-fluid p-0">

<nav class="navbar navbar-expand-lg navbar-light langlo_navbar">
    <a class="navbar-brand" href="/">
        <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                // the_custom_logo();
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id);
                // var_dump($image);
            }
        ?>
    <img src="<?php echo $image[0]; ?>" width="100" height="80" class="d-inline-block align-top" alt="Langlo korepetycje angielski Dagmara Kamińska"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        
            <?php wp_nav_menu(array(
                'menu' => 'primary',
                'container' => '',
                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
                )); ?>
        
    </div>
</nav>

</div>


