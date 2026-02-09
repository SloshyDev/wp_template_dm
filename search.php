<?php get_header();
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
<div class="columns m-0 p-0">
    <div class="column is-5  m-auto p-6">
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


<?php
        global $wpdb;
          $keyword = get_search_query();
          $keyword = '%' . $wpdb->esc_like($keyword) . '%'; 
          // Search in all custom fields
          $post_ids_meta = $wpdb->get_col($wpdb->prepare("
          SELECT DISTINCT post_id FROM {$wpdb->postmeta}
          WHERE meta_value LIKE '%s'", $keyword));

        // Search in post_title and post_content
        $post_ids_post = $wpdb->get_col($wpdb->prepare("
          SELECT DISTINCT ID FROM {$wpdb->posts}
          WHERE post_title LIKE '%s' OR post_content LIKE '%s'", $keyword, $keyword));

        $post_ids = array_merge($post_ids_meta, $post_ids_post);

        // Query arguments
        $args = array(
          'post_type' => 'stories',
          'post_status' => 'publish',
          'post__in' => $post_ids,
        );
        $the_query = new WP_Query($args);?>
<h3><?php _e("Search Results for:", 'dm'); ?> <label class="key-word"><?php echo get_query_var('s'); ?></label></h3>
<?php
        if ($the_query->have_posts()) {
        $row_number = 1; ?>

<div class="items-holder columns column is-11 mx-auto has-text-centered is-multiline aos-all">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div data-aos="zoom-in-up" data-aos-duration="1000" class="column is-one-quarter m-auto">
        <h3 class="is-uppercase stories-tittle is-bold has-text-primary has-text-weight-bold">
            <span><?php echo get_field('keyword'); ?></span></h3>
        <div class="image is-5by4">
            <?php the_post_thumbnail(); ?>
        </div>

        <a class="column pt-0 has-text-primary card_stories is-uppercase" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <a class="button is-success is-fullwidth is-small"
            href="<?php the_permalink(); ?>"><?php _e("Read More", 'dm'); ?> »</a>


    </div>
    <?php
            $row_number = $row_number + 1;
          endwhile; ?>
</div>

<?php
        } else {
          ?>
<h2><strong><?php _e("Nothing Found", 'dm') ?></strong></h2>
<div class="alert alert-info">
    <p><?php _e("Sorry, but nothing matched your search criteria. Please try again with some different keywords", 'dm') ?>.
    </p>
</div>
<?php } ?>

<?php get_footer(); ?>