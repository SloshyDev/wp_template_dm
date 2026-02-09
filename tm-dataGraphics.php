<?php
get_header();
/* template name: dataGraphics*/
?>
<div id="fb-root"></div>
<!-- Tittle -->
<h3
    class="is-size-4 is-uppercase has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php the_title()  ?></h3>
<!-- infoGraphics-->
<div class="columns column is-flex  is-10 is-multiline m-auto aos-all">
    <?php if( have_rows('dataposter') ): $i=1; ?>
    <?php while( have_rows('dataposter') ): the_row();
    $image = get_sub_field('img');
    $preview  = get_sub_field('link');
    $pdf  = get_sub_field('pdf');
    ?>
    <div data-aos="fade-down" data-aos-duration="1200" class="column is-half is-full-mobile">
        <a href="<?php echo $preview ?>" rel=""> <img src="<?php echo $image; ?>"
                title="<?php _e("See dataPoster",'dm');?>" alt="<?php _e("See dataPoster",'dm');?> "
                class="img-responsive img-thumbnail mt-4"></a>
        <div class="column is-flex is-justify-content-center p-0 m-0">
            <!-- share button facebook -->
            <div class="fb-share-button" data-href="<?php echo $pdf ?>" data-layout="button_count" data-lazy="true">
            </div>
            <!-- Share button twitter -->
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button ml-1"
                data-hashtags="dataMares" data-url="<?php echo $pdf; ?>" data-show-count="true">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a href="<?php echo $pdf ?>" class="button is-info is-small ml-1"
                id="pdf"><?php _e("Download PDF",'dm') ?></a>
        </div>
    </div>
    <?php $i++; endwhile; ?>
    <?php endif; ?>
</div>
<?php
$my_current_lang = apply_filters('wpml_current_language', NULL);

?>

<h1><?php echo $my_current_lang ?></h1>

<?php get_footer(); ?>