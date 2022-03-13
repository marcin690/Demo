<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marcinpohl
 */

get_header();
?>


<main>
      <article class="article">
        <header class="article__header">
          <div class="container">
            <h1 class="article__heading heading heading--size-large"><?php the_title()?></h1>
            <ul class="article__header-meta project-meta">
              <li class="project-meta__item" data-aos="fade">
                <div class="project-meta__item-title">Klient / Inwestor </div>
                <div class="project-meta__item-text"><?php the_field('klient')?></div>
              </li>
              <li class="project-meta__item" data-aos="fade" data-aos-delay="200">
                <div class="project-meta__item-title">Realizacja</div>
                <div class="project-meta__item-text"><?php the_field('data')?></div>
              </li>
              <li class="project-meta__item" data-aos="fade" data-aos-delay="400">
                <div class="project-meta__item-title">Typ </div>
                <div class="project-meta__item-text"><?php echo get_the_term_list( $post->ID, 'katrealizacji', '', ', ' ); ?> </div>
              </li>
              <li class="project-meta__item" data-aos="fade" data-aos-delay="600">
                <div class="project-meta__item-title">Zespół </div>
                <div class="project-meta__item-text"><?php the_field('zespol')?></div>
              </li>
            </ul>
          </div>
        </header>
        <div class="article__project-hero" data-aos="fade">
        <?php the_post_thumbnail() ?>
        </div>
        <div class="container">
          <div class="article__project-text" data-aos="fade">
            <p>
             <?php the_content()?>
          </div>
        </div>
        <div class="article__project-images container">

        <?php if( have_rows('galeria8') ):
           while ( have_rows('galeria8') ) : the_row(); ?>

        <?php  if( get_row_layout() == 'pierwsza_linia' ) { ?>
          <div class="row">
             <?php $images = get_sub_field('zbiorcze_zdjecia'); if( $images ): ?>
								<?php foreach( $images as $image ): ?>
                 <div class="col-md-6">
                 <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_html($image['caption']); ?>">
                </div>
                <?php endforeach; ?>
							<?php endif; ?>
        </div>
        <?php } ?>

        <?php  if( get_row_layout() == 'druga_linia' ) { ?>
          <div class="row d-flex flex-row-reverse">
             <?php $images = get_sub_field('zbiorcze_zdjecia'); if( $images ): ?>
								<?php foreach( $images as $image ): ?>
                 <div class="col-md-3  pt-3">
                 <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_html($image['caption']); ?>">
                </div>
                <?php endforeach; ?>
							<?php endif; ?>
        </div>
        <?php } ?>
       
       <?php endwhile;

// No value.
else :
    // Do something...
endif;
?>


  


        <section class="webpage__services-provided services-provided">
          <div class="container">
            <h2 class="services-provided__heading heading heading--size-small" data-aos="fade"><?php the_field('naglowek_listy_'); ?></h2>

  
            <div class="row">
            <?php if( have_rows('lista') ): while ( have_rows('lista') ) : the_row(); ?>
               <div class="services-provided__column col-12 col-md" data-aos="fade">
                  <h3 class="services-provided__column-heading"><?php the_sub_field('naglowek_'); ?></h3>
                  <div class="services-provided__column-text"><?php the_sub_field('opis'); ?></div>
               </div>

              <?php endwhile; else :endif; ?>
            
            
          </div>
        </section>
        
      </article>
    </main>


<?php
get_footer();
