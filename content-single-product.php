<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<style type="text/css">
	section {
		padding: 0px;
		margin: 0px ;
	}
    .img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    width: auto;
    min-width: 81px;
    height: 69px;
}
</style>
        <section class="product pt-0 pb-0 mb-0">

           <header>
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo get_home_url()?>">Strona główna</a></li>
                        <li class="breadcrumb-item"><?php echo wc_get_product_category_list( $product->get_id()); ?></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title()?></li>
                    </ol>




                </div>
            </header>

            <div class="main">
                <div class="container">
                    <div class="row product-flex">

                        <div class="col-lg-7 col-12 d-flex align-items-stretch product-flex-info">
                            <div class="clearfix">

                                <div class="clearfix">

                                	 <div class="row">
                    	<div class="col-md-6 col-12">
                    		<h2 class="title themecolor"><?php the_title()?></h2>
                            <?php if( !get_field('ukryj_cene_produktu') ): ?>
                    		<div class="price">
                                        <span class="h3">
                                            <?php woocommerce_template_single_price()?>
                                        </span>
                            </div>
                            <?php endif; ?>
                             <?php if( get_field('ukryj_cene_produktu') ): ?>
                            <div class="price">
                                        <a href="<?php echo get_home_url(); ?>/kontakt">Zapytaj o cenę produktu</a>
                            </div>
                            <?php endif; ?>
                    	</div>
                    	<div class="col-md-3 col-6">   <img class="img-fluid " src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/04/producent-.png"></div>
                            <div class="col-md-3 col-6">   <img class="img-fluid " src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/03/gwarancja.png"></div>
                    </div>

                                    <!--price wrapper-->



                                    <hr>

                                    <!--info-box-->

                                    <div class="info-box">
                                        <span><strong class="themecolor">Kategoria</strong></span>
                                        <span>  <?php echo wc_get_product_category_list( $product->get_id()); ?></span>
                                    </div>

                                    <!--info-box-->

                                    <div class="info-box">
                                        <span><strong class="themecolor">Termin wykonania</strong></span>
                                        <span>od 14 do 28 dni roboczych. W okresach świąt termin może się wydłużyć.</span>
                                    </div>

                                    <div class="info-box">
                                        <span><strong class="themecolor">Termin dostawy</strong></span>
                                        <span>W kolejnym tygodniu po wykonaniu mebli po wcześniejszym ustaleniu terminu z Klientem.</span>
                                    </div>

                                    <hr>

                                        <div class="row">
                                        <div class="col-lg-2 col-md-2 col-3 open-popup-gallery ">

                                           <a href="<?php echo $thumbnail[0]; ?>" class="d-block mb-4 ">
                                                 <img class="m-0 img-fluid "  src="<?php echo $thumbnail[0]; ?>" alt="">
                                               </a>
                                         </div>
                                        <?php
                                $attachment_ids = $product->get_gallery_image_ids();
                                foreach( $attachment_ids as $attachment_id ) { ?>
                                    <div class="col-lg-2 col-md-2 col-3 open-popup-gallery ">

                                      <a href="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>" class="d-block mb-4 ">
                                            <img class="m-0 img-fluid "  src="<?php   echo $shop_single_image_url = wp_get_attachment_image_src( $attachment_id, 'small' )[0]; ?>" alt="">
                                          </a>
                                    </div>
                                           <?php  } ?>
                                       </div>
                                    <!--info-box-->






                                    <!--info-box-->











                                </div> <!--/clearfix-->
                            </div> <!--/product-info-wrapper-->
                        </div> <!--/col-lg-4-->
                        <!--product item gallery-->

                        <div class="col-lg-5 col-12 text-center d-flex align-items-stretch ">


                        <a href="<?php echo $thumbnail[0]; ?>" class=" mx-auto d-block d-block mb-4 ">
                                            <img class="mx-auto d-block  img-fluid "  src="<?php echo $thumbnail[0]; ?>" alt="">
                                          </a>







                        </div>

                    </div>
                    <hr>

                     <!-- 3 col -->
                <div class="row pt-3">
                <div class="col-md-6">
                <?php if( !get_field('ukryj_cene_produktu') ): ?>
                	 <div class="info-box">
                                        <small>   <p>Używając wstępnego konfiguratora prduktu mogą Państwo oszacować koszt produkcji 1 metra bieżącego przedstwionego produktu. Po klinięciu "dodaj do wyceny", poroszeni zostaną Państwo o podanie podstwowych danych kontaktowych. Nasz konsultant po przeanalizowaniu zamowienia skontaktuje się z Państwem w celu ustalenia szczegółów. Nie jest wymagana płatność przy wstępnej wycenie za pośrednictwem strony internetowej. </p></small>

                                    </div>
                                    <?php endif; ?>


                    <?php   $the_content = apply_filters('the_content', get_the_content());
  if ( !empty($the_content) ) {
  	echo '<h3 class="title themecolor ">Wymiary produktu</h3>';
    echo $the_content;
  } ?>
                    <hr>
                      <h3 class="title themecolor ">Wzornik</h3>

                <?php wp_nav_menu( array('menu' => 'menu5',
                        'container' => 'ul',
                        'theme_location' => 'menu5',
                            'walker' => new WPDocs_Walker_Nav_Menu(),
                         'menu_class' => 'list-group',
                         'depth'             => "1", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                         ));
?>



                </div>
                <div class="col-md-6">
                    <?php if( !get_field('ukryj_cene_produktu') ): ?>
                    <h3 class="themecolor">Konfiguracja produktu</h3>
                      <div class="info-box">

                                         <?php woocommerce_template_single_add_to_cart();  ?>

                                    </div>
                                     <?php endif; ?>
                </div>

            </div>
                </div>





            </div>

        </section>






