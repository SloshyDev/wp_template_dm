<?php
get_header();
/* template name: dataGrams*/
?>
<div id="fb-root"></div>
<!-- Tittle -->
<h3
    class="is-size-4 is-uppercase has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php the_title()  ?></h3>
<!-- infoGraphics-->
<div class="columns column is-flex  is-10 is-multiline m-auto">
    <?php if( have_rows('infographics') ): $i=1; ?>
    <?php while( have_rows('infographics') ): the_row();
    $image = get_sub_field('infographic_image');
    $link  = get_sub_field('infographic_link')
    ?>
    <div class="column is-half is-full-mobile">
        <a href="<?php echo $link ?>" target="_blank" rel="noopener noreferrer"> <img src="<?php echo $image; ?>"
                title="<?php _e("See dataGram",'dm');?>" alt="<?php _e("See dataGram",'dm');?> "
                class="img-responsive img-thumbnail mt-4"></a>
        <div class="column is-flex is-justify-content-center p-0 m-0">
            <!-- share button facebook -->
            <div class="fb-share-button" data-href="<?php echo $link ?>" data-layout="button_count" data-lazy="true">
            </div>
            <!-- Share button twitter -->
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                data-hashtags="dataMares" data-url="<?php echo $link; ?>" data-show-count="true">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    <?php $i++; endwhile; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>