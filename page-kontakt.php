<?php get_header(); ?>
<!--<h1>page-kontakt.php</h1>-->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
           <div class="row">   
                <div class="col-12 col-md-5 col-lg-5">
                        <div class="row oferta_zajec_row">
                            <div class="col-12 oferta_zajec_huge_txt">
                                <h1>KONTAKT</h1>
                            </div>
                        </div>
                </div>

                 <!-- formularz -->
                <div class="col-md-6 offset-md-1 formularz_kontaktowy">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end">
                                <div class="div">
                                <p class="form_txt">Formularz Kontaktowy</p>
                                <p><span class="form_txt_odpowiadam">ODPOWIADAM NA WIADOMOŚCI W DNI ROBOCZE</span></p>
                                </div>
                                
                            </div>
                            <div class="col-12 kontakt_form_container">
                                <?php
                                // include formularz-kontakt.php
                                include 'template-parts/formularz-kontakt.php';
                                ?>
                                
                            </div> 
                        </div>        
                </div>
           </div><!-- end of row -->
                    
        </div>
    </div>
</div>

<?php get_footer(); ?>