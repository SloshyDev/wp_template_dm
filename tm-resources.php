<?php
get_header();
/* template name: resources*/
?>
<!-- Banner -->
<div class="px-5 my-4">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
</div>
<!-- Accordion -->
<h3
    class="is-size-4 is-uppercase has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php the_title()  ?></h3>
<div class="column is-8 m-auto">
    <p class="m-2"><?php the_content();?></p>
    <div id="accordion">
        <?php while( have_rows('accordion') ): the_row();
    $tittle = get_sub_field('title');
    $content  = get_sub_field('content')
    ?>
        <h2 class="is-clickable p-2 my-3 is-size-5 has-background-success has-text-white"><?php echo $tittle ?></h2>
        <div class="">
            <?php echo $content ?>
        </div>
        <?php $i++; endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>