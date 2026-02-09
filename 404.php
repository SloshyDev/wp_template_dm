<?php get_header(); ?>
  <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
<!-- Search form -->
<div class="columns px-0 mx-0 py-6 my-6" id="story-search">
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

  <section class="column px-0 mx-0 py-6 my-6">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
      <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
    <img src="<?php echo $image; ?>" alt="">
    <h4 class="has-text-centered is-size-5 has-text-weight-semibold has-text-primary"><span><?php _e( 'This is somewhat embarrassing, isn’t it?', 'dm' ); ?></span></h4>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h5 class="has-text-centered is-size-5 has-text-weight-semibold has-text-primary"><?php echo site_url(); ?></h5>
      <h4 class="has-text-centered is-size-5 has-text-weight-semibold has-text-primary"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'dm' ); ?></h4>
    </div>
  </section>


<?php get_footer(); ?>
