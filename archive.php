

<?php get_header();?>

<div class="container-fluid">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?><?php echo $image; ?>
    <section class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="story-search">
            <div
                class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 ">
                <form class="search-keyword" action="<?php echo home_url('/'); ?>">
                    <?php if (get_locale() == 'es_ES') { ?>
                    <input type="hidden" name="lang" value="es">
                    <?php } ?>
                    <input type="text" name="s" placeholder="<?php _e('Search by keyword', 'datamares') ?>"
                        class="form-control">
                    <br />
                    <input type="submit" value="<?php _e("Search Stories", 'datamares') ?>"
                        class="btn btn-lg btn-block btn-info">
                </form>
            </div>
        </div>
    </section>

    <section class="row">
        <h4 class="heading-block"><span><?php _e("Most recent stories",'datamares')?></span></h4>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="">
            <div class="items-holder">
                <?php if (have_posts()) :  $args = array('post_type' => 'stories','posts_per_page' => '4');
          query_posts($args); ?>
                <?php while (have_posts()) : the_post();  ?>
                <div class="item"> <?php the_post_thumbnail(); ?>
                    <div class="entry">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php echo substr(get_the_excerpt(),0,70); ?></p>
                    </div>
                    <a class="btn" href="<?php the_permalink(); ?>"><?php _e("Read More", 'datamares' );?> »</a>
                </div>
                <?php endwhile; ?>
                <?php endif;  wp_reset_query();  ?>
            </div>
        </div>
    </section>

    <section class="row">

        <?php if ( get_query_var('paged') ) {
      $paged = get_query_var('paged');
    }elseif ( get_query_var('page') ) {
      $paged = get_query_var('page');
    }else{
      $paged = 1;
    }
    $args = array(
      'post_type' => 'stories',
      'posts_per_page' => 4,
      'paged' => $paged,
    );
    query_posts($args);
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 stories">
            <div>
                <h5 class="subheading-block"><span><?php echo get_field('keyword'); ?></span></h5>
                <?php the_post_thumbnail("medium_large","class=img-responsive"); ?>
            </div>

            <div>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php echo substr(get_the_excerpt(),0,70); ?></p>
                <a class="btn btn-sm btn-info btn-block"
                    href="<?php the_permalink(); ?>"><?php _e("Read More", 'datamares'); ?> »</a>
            </div>

        </div>
        <?php endwhile;
    endif; ?>
        <?php if(function_exists('wp_paginate')) {
      wp_paginate();
    }?>

    </section>

</div>


<div class="separator"></div>

<?php get_footer(); ?>