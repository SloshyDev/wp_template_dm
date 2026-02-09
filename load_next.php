<?php
$offset = $_GET['offset'];
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');
wp_reset_query();

if (isset($_GET['wpml_lang'])) {
  do_action('wpml_switch_language', $_GET['wpml_lang']); // switch the content language
}
?>
<?php
$args = array(
  'post_type' => 'stories',
//'paged' => $paged,
//'post__not_in' => $skipIDs,
  'posts_per_page' => '16',
  'offset' => $offset,
  'suppress_filters' => false,
  'lang' => ICL_LANGUAGE_CODE,
);
//query_posts($args); 
global $wp_query;
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) :
  $row_number = 1 + $offset; ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <div data-aos="zoom-in-up" data-aos-duration="1000" class="column is-one-quarter m-auto">
        <h5 class="is-uppercase stories-tittle is-bold has-text-primary has-text-weight-bold"><span><?php echo get_field('keyword'); ?></span></h5>
        <div class="image is-5by4">
            <?php the_post_thumbnail(); ?>
        </div>
                <a class="column pt-0 has-text-primary is-uppercase card_stories" href="<?php the_permalink(); ?>">
                    <?php echo the_title();  ?>
                </a>
        <a class="button is-success is-fullwidth is-small" href="<?php the_permalink(); ?>"><?php _e("Read More", 'datamares'); ?> »</a>
    </div>
    <?php
    $row_number = $row_number + 1;
endwhile; ?>
<?php endif; ?>