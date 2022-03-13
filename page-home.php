<?php /* Template Name: Strona główna */ ?>
<?php get_header(); ?>

<style type="text/css">
    .widget-well[data-v-b7c536c8] {
    box-shadow: 0 1px 2px rgb(0 0 0 / 5%), 0 4px 16px rgb(0 0 0 / 5%);
    max-width: 432px;
    overflow-y: hidden;
}
</style>

    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
    <div class="about-area default-padding">
        <div class="container">
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-7 thumb-box">
                        <div class="thumb">
                            <i class="mp-mk"></i>
                            <img src="<?php the_field('obraz1')?>" alt="Thumb">
                            <img src="<?php the_field('obraz2')?>" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-5 info">
                        <h5><?php the_field('naglowek'); ?> </h5>
                        <h2> <?php the_field('tytul'); ?></h2>
                        <p>
                        <?php the_field('opis'); ?>
                        </p>
                        <hr>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Our Process
    ============================================= -->
    <div class="process-area default-padding-bottom">
        <!-- Shape -->
        <div class="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="process-items">
                <div class="row">
                    <div class="col-lg-5 heading">
                        <h2><?php the_field('naglowek1'); ?>  </h2>
                        <p>
                        <?php the_field('opis1'); ?>
                        </p>

                    </div>
                    <div class="col-lg-7">
                        <div class="process-items text-center">
                            <div class="row">
                            <?php if( have_rows('cechy') ): while ( have_rows('cechy') ) : the_row(); ?>

                                <div class="col-lg-4 col-md-4 single-item">
                                    <div class="item" >
                                        <i class="<?php the_sub_field('ikona'); ?>"></i>
                                        <h4><?php the_sub_field('opis'); ?> </h4>
                                    </div>
                                </div>
                            <?php endwhile; else :endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Process -->

    <!-- Start Our Services
    ============================================= -->


 <div class="doctors-area three-colum bg-gray default-padding bottom-less" style="display: none">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Oferta gabineru dermatologicznego</h4>
                            <h2>Usługi w gabinecie</h2>
                        </div>
                    </div>
                </div>
            <div class="doctor-items text-center">
                <div class="row">
                   <?php
                    $posts = get_posts(array(
                    'post_type'         => 'oferta',
                    'posts_per_page' => '6',
                     'orderby' => 'menu_order',

                    'order' => 'ASC'
                    ));

                    if( $posts ): ?>
                    <?php foreach( $posts as $post ):
                    setup_postdata( $post );?>

                        <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" ); ?>
                        <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                            <div class="thumb">
                                <?php the_post_thumbnail('oferta-home') ?>
                                <div class="button">
                                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                </div>
                            </div>

                        </div>
                    </div>

                        <!-- Single Item -->

                        <!-- End Single Item -->
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="text-center"><a class="btn btn-md btn-gradient" href="https://dermatolog-katowice.pl/oferta/">Zobacz wszystkie <i class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
    </div>

    <div class="register-area default-padding bg-fixed shadow half text-light" style="background-image: url(https://dermatolog-katowice.pl/wp-content/uploads/2020/11/dermatolog-katowice-5.jpg);">
        <div class="container">
            <div class="register-items">
                <div class="row align-center">




                    <div class="col-lg-12 info">

                        <h2>Zarezerwuj wizytę w Gabinecie</h2>
                        <p>
                            Zapraszmy do umawiania wizyty w gabinecie poprzez rejestrację telefoniczną 
                        </p>

                         <div class="row text-center">
                            <div class="col-12 text-center">
                        <a style="    font-size: 3em;
    font-weight: bold;" href="tel:<?php the_field('numer_telefonu_rejestracja', 'option'); ?> " class="h1 text-center"> <i class="flaticon-call mr-3"></i><?php the_field('numer_telefonu_rejestracja', 'option'); ?> </a>
                        </div>
                        </div>



                           <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">

                                <div class="info">
                                    <h5>Adres</h5>
                                    <p>
                                        <?php the_field('adres', 'option'); ?>

                                    </p>
                                    <hr>

                                    <p class="pt-3">
                                    <?php the_field('godziny_otwarcia', 'option'); ?>
                                    </p>

                                </div>

                            </div>





                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="health-tips-area default-padding-bottom" style="margin-top: 110px">
        <div class="container">
            <div class="health-tips-items">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2><?php the_field('tytul','option')?></h2>
                        <p>
                            <?php the_field('opis','option') ?>
                        </p>
                        <a class="btn btn-md btn-gradient" href="https://dermatolog-katowice.pl/o-mnie/">Więcej o mnie <i
                                class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-7 right-info">
                        <div class="tips-items health-tips-carousel owl-carousel owl-theme">

                        <?php if( have_rows('opinie','option') ): while ( have_rows('opinie','option') ) : the_row(); ?>

                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">

                                    <p>
                                        <?php the_sub_field('tekst_opinii')?>
                                    </p>
                                    <div class="bottom">

                                        <div class="provider">
                                            <h5><?php the_sub_field('autor')?></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        <?php endwhile; else :endif; ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Health Tips -->




<?php get_footer(); ?>