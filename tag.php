<?php get_header();
$queried_object = get_queried_object();
 //var_dump( $queried_object );
 $cat_name = $queried_object->slug;
 $cat_count= $queried_object->count;
 if (get_locale() == 'es_ES') {
    $post_id='1708';  
    } else {
    $post_id='153';
  }
 $image = get_the_post_thumbnail( $post_id );
?>

<!-- Banner -->
<div class="px-5 my-4">
    <?php echo $image; ?>
</div>

<!-- Search form -->
<div class="columns p-0 m-0" id="story-search">
    <div class="column is-5 m-auto">
        <form class="search-keyword" action="<?php echo home_url('/'); ?>">
            <?php if (get_locale() == 'es_ES') { ?>
            <input type="hidden" name="lang" value="es">
            <?php } ?>
            <input type="text" name="s" placeholder="<?php _e('Search by keyword', 'dm') ?>" class="input">
            <br />
            <input type="submit" value="<?php _e("Search Stories", 'dm') ?>" class="button is-success is-fullwidth">
        </form>
    </div>
</div>

<?php $args = array('post_type' => 'stories','posts_per_page' => '-1','tag_slug__and' =>  $cat_name);
    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) :$row_number = 1; ?>
<div class="next_posts columns p-0 column is-11 mx-auto has-text-centered is-multiline aos-all">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div data-aos="zoom-in-up" data-aos-duration="1000" class="column is-one-quarter m-auto">
        <h5 class="stories-tittle is-bold has-text-primary has-text-weight-bold">
            <span><?php echo get_field('keyword'); ?></span></h5>
        <div class="image is-5by4">
            <?php the_post_thumbnail(); ?>
        </div>
        <a class="column pt-0 has-text-primary card_stories" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <a class="button is-success is-fullwidth is-small"
            href="<?php the_permalink(); ?>"><?php _e("Read More", 'dm'); ?> »</a>

    </div>
    <?php
          $row_number = $row_number + 1;
        endwhile; ?>
</div>
<?php endif;?>

<?php get_footer(); ?>