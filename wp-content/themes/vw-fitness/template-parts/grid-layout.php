<?php
/**
 * The template part for displaying grid layout
 *
 * @package VW Fitness
 * @subpackage vw_fitness
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<div class="col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="page-box">
      <h2><a href="<?php  the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <div class="metabox">
        <?php if(get_theme_mod('vw_fitness_toggle_postdate',true)==1){ ?>
          <span class="entry-date"><i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
        <?php } ?>

        <?php if(get_theme_mod('vw_fitness_toggle_author',true)==1){ ?>
          <i class="far fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
        <?php } ?>

        <?php if(get_theme_mod('vw_fitness_toggle_comments',true)==1){ ?>
          <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','vw-fitness'), __('0 Comments','vw-fitness'), __('% Comments','vw-fitness')); ?></span>
        <?php } ?>
      </div>
      <div class="box-image">
        <?php 
          if(has_post_thumbnail()) {
           the_post_thumbnail(); 
          }
        ?>
      </div>
      <div class="entry-content">
        <p>
          <?php $excerpt = get_the_excerpt(); echo esc_html( vw_fitness_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_fitness_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('vw_fitness_excerpt_suffix','') ); ?>
        </p>
      </div>
      <div class="clearfix"></div>      
    </div>
  </article>
</div>