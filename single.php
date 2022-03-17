<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marcinpohl
 */

get_header();
include_once('template-parts/header.php');
?>

<div class="site-main">

            <!-- sidebar -->
            <div class="ttm-row sidebar ttm-sidebar-left pb-45 ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
						<?php get_sidebar(); ?>
                        <div class="col-lg-8 content-area">
                            <article class="ttm-service-single-content-area">
                                <!-- service-featured-wrapper -->
								<h2><?php the_field('podnaglowek')?></h2>
                               
                                <?php the_content() ?>
                                <div class="ttm-service-featured-wrapper ttm-featured-wrapper">
								<div class="galeria-slider">

								<?php $images = get_field('galeria'); if( $images ): ?>
										<?php foreach( $images as $image ): ?>
									<div class="mr-20 ttm_single_image-wrapper mb-40 res-991-mb-30">
									<img  data-fancybox="gallery"  src="<?php echo esc_url($image['sizes']['galeria']); ?>" alt="<?php echo esc_html($image['caption']); ?>">

                                    </div>
									<?php endforeach; ?>
									<?php endif; ?>


								</div>

                                </div><!-- service-featured-wrapper end -->
                                <!-- ttm-service-classic-content -->
                                <div class="ttm-service-classic-content">



                                    <div class="section-title">
                                    <div class="title-header">
                                        <h3><?php the_title()?> na każdą kieszeń </h3>
                                        <h2 class="title"><h2><?php the_field('podnaglowek2')?></h2> </h2>
                                    </div>
                                </div>
                                <?php if( have_rows('lista') ): while ( have_rows('lista') ) : the_row(); ?>
                                  <div class="row">
                                            <div class="<?php the_sub_field('kolejnosc')?> col-md-6">
                                                <div class="text-content">

                                                    <div class="icon-content">
                                                        <h2 class="pt-3"><?php the_sub_field('element_listy'); ?></h2>

                                                    </div>
                                                </div>
                                               <p><?php the_sub_field('opis'); ?></p>
                                            </div>
                                             <div class="<?php the_sub_field('kolejnosc2')?> col-md-6 ">
                                                <div class="ttm_single_image-wrapper res-767-pt-30">
                                                    <img width="385" height="224" class="img-fluid" src="<?php the_sub_field('zdjecie'); ?>" alt="single_image-10">
                                                </div>
                                            </div>
                                    </div>
                                    <?php endwhile; else :endif; ?>

                                            <?php if (is_single(40)) { include_once('template-parts/kuchniaprojekt.php'); } ?>




                                    </div>
                                    <?php the_field('dodatkowy_opis_za_galeria_')?>

                                </div><!-- ttm-service-classic-content end -->
                            </article>
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->



            <!-- Banner meble mix -->


            <?php if( get_field('bannery') ): ?>
            <section>
                <div class="container">
                    <div>
                    <div class="section-title title-style-center_text pt-5 ">
                                    <div class="title-header">
                                        <h3><?php the_field('naglowek_3')?></h3>
                                        <h2 class="title"> <?php the_field('podnaglowek_3')?></h2>
                                    </div>
                                </div>

                    <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>

                    <?php if( have_rows('bannery') ): while ( have_rows('bannery') ) : the_row(); ?>

                        <div class="col d-flex align-items-stretch">
                            <div class="featured-imagebox featured-imagebox-portfolio style3">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a target="_blank" href="<?php the_sub_field('link_banneru'); ?>">
                                <?php
                    $image = get_sub_field('banner');
                    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                    }
                    ?></a>
            </div>
            <!-- featured-thumbnail end-->
                    <div class="featured-content-inner">
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a target="_blank" href="<?php the_sub_field('link_banneru'); ?>" tabindex="0"><?php the_sub_field('nazwa_banneru'); ?></a></h3>
                            </div>

                        </div>
                        <div class="ttm-footer">
                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" target="_blank" href="<?php the_sub_field('link_banneru'); ?>" tabindex="0"> Zobacz <i class="ti ti-plus"></i></a>
                        </div>
                    </div>
        </div>
    </div>

                <?php endwhile; else :endif; ?>


                    </div>
                    <?php the_field('dodatkowy_opis_za_cechami_wyrozaniajacymi_')?>
                </div>
            </section>
            <?php endif; ?>

        </div>


<?php get_footer();
?>
