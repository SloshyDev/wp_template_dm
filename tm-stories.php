<?php
get_header();
/* template name: Stories */
?>
<!-- Banner -->
<div class="px-5 my-4">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
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
<h3 class="is-size-5 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php _e("STORIES", 'dm' )?></h3>

<?php $args = array(
    'post_type' => 'stories',
    //'paged' => $paged,
    //'post__not_in' => $skipIDs,
    'posts_per_page' => 8,
    'suppress_filters' => false,
    'lang' => ICL_LANGUAGE_CODE,
);
//query_posts($args);
global $wp_query;
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) :
    $row_number = 1; ?>
<div class="next_posts columns column is-11 mx-auto has-text-centered is-multiline aos-all">
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <div data-aos="zoom-in-up" data-aos-duration="1000" class="column is-one-quarter m-auto ">
        <h5 class="is-uppercase stories-tittle is-bold has-text-primary has-text-weight-bold">
            <span><?php echo get_field('keyword'); ?></span>
        </h5>
        <div class="image is-5by4">
            <?php the_post_thumbnail();?>
        </div>
        <a class="column pt-0 has-text-primary card_stories is-uppercase" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        <a class="button is-success is-fullwidth is-small"
            href="<?php the_permalink(); ?>"><?php _e("Read More", 'dm'); ?> »</a>
    </div>
    <?php
        $row_number = $row_number + 1;
         wp_reset_postdata();
    endwhile; ?>
</div>
<div class="column is-flex is-justify-content-center load">
    <button type="button" class="button is-info is-flex load_more btn-lg"><?php _e("Load More", 'dm'); ?></button>
</div>
<?php endif; ?>
</div>

<?php get_footer(); ?>
<?php
$noM='No more stories';
//handling ajax urls.
$language_code;
if (get_locale() == 'es_ES') {
    $language_code = 'es';
}
?>
<script>
jQuery(document).ready(function() {
    $('img').removeAttr('width');
    $('img').removeAttr('height');
    $('img').removeAttr('srcset');
    var offset_post = 0;
    $(".load .load_more").click(function() {
        var inriment = Number(16);
        offset_post = offset_post + inriment;
        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'offset=' + offset_post;
        // AJAX Code To Submit Form.
        $.ajax({

            type: "GET",

            url: "<?php bloginfo('template_url') ?>/load_next.php",

            data: {
                "offset": offset_post,
                "wpml_lang": '<?php echo $language_code; ?>',
            },

            cache: false,

            success: function(data) {
                var $data = $(data);
                console.log(data);
                if ($data.length) {
                    $(".next_posts").append($data);
                } else {
                    $('.load .load_more').removeClass('is-info');
                    $('.load .load_more').addClass('is-warning');
                    $('.load .load_more').text('<?php _e("No more stories","dm"); ?>');
                    $('.load .load_more').prop("disabled", true);
                }
            }
        });
        return false;
    });
});
</script>