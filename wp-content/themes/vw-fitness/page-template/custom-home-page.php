<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_fitness_above_slider' ); ?>

  <?php if( get_theme_mod('vw_fitness_slider_hide_show') != ''){ ?>
    <section class="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php $vw_fitness_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_fitness_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_fitness_slider_pages[] = $mod;
            }
          }
          if( !empty($vw_fitness_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_fitness_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail('full'); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_fitness_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_fitness_slider_excerpt_number','30')))); ?></p>
                  <div class="more-btn">              
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','vw-fitness'); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','vw-fitness' );?></span></a>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
          <span class="screen-reader-text"><?php esc_attr_e( 'Previous','vw-fitness' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
          <span class="screen-reader-text"><?php esc_attr_e( 'Next','vw-fitness' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action( 'vw_fitness_below_slider' ); ?>

  <section class="our-services">
    <div class="container">
      <div class="row">
        <?php $vw_fitness_service_page = array();
        for ( $count = 0; $count <= 3; $count++ ) {
          $mod = intval( get_theme_mod( 'vw_fitness_servicesettings' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $vw_fitness_service_page[] = $mod;
          }
        }
        if( !empty($vw_fitness_service_page) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $vw_fitness_service_page,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="col-lg-3 col-md-6">
                <div class="service-main-box">
                    <h2><?php the_title(); ?></h2>                    
                    <div class="box-content">
                      <?php the_post_thumbnail('full'); ?>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_fitness_string_limit_words( $excerpt,15 ) ); ?></p>
                      <div class="more-btn">              
                        <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','vw-fitness'); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','vw-fitness' );?></span></a>
                      </div>               
                      <div class="clearfix"></div>                   
                    </div>
                </div>
              </div>
            <?php $count++; endwhile; 
            wp_reset_postdata();?>
          <?php else : ?>
              <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <div class="clearfix"></div>
      </div>
    </div> 
  </section>

  <?php do_action( 'vw_fitness_below_services' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>