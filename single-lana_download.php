<?php 
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));
?>

 <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>

<head>
	<meta property="og:url" content="<?php echo $current_url ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php the_title();  ?>" />
    <meta property="og:description" content="WORK - PUBLISH - RELEASE" />
    <meta property="og:image:url" content="<?php echo $image ?>" />
    
</head>


<?php get_header(); ?>
<h3
    class="heading-block is-size-4 is-uppercase has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php the_title();  ?>
    <?php $value = get_field('sc_name');
    if( $value ) {?>
        (<span class="is-italic sc-name"><?php echo $value;  ?></span>)
    <?php }?>
</h3>
<?php $lowRes = get_field('lowresimage') ?>
<meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@dataMares" />
    <meta name="twitter:title" content="<?php the_title();  ?>" />
    <meta name="twitter:description" content="Mira este dataPoster sobre <?php the_title();  ?> creado por @dataMares" />
    <meta name="twitter:image" content="<?php echo $lowRes ?>" />

<style>
.df-ui-share{
display:none;
}
</style>
<?php
if( get_field('type') ) {?>
<div class="" style="
    display: flex;
    justify-content: space-evenly;
">
    <?php 
$traslatedVersion = get_field('traslatedversion');
if( $traslatedVersion ): ?>
    <?php
            if( get_field('flag') ) {?>
    <a class="column is-3 my-2 button is-text is-fullwidth is-flex" href="<?php echo $traslatedVersion; ?>"><img
            style="width: 26px;position: absolute;left: 3px;" class="is-hidden-desktop-only is-hidden-tablet-only"
            src="https://datamares.org/wp-content/uploads/flags/phpP7yybx" alt="">
        <?php _e("Versión en inglés",'dm') ?></a>
    <?php }; ?>
    <?php
            if( !get_field('flag') ) {?>
    <a class="column is-3 my-2 button is-text is-fullwidth is-flex" href="<?php echo $traslatedVersion; ?>?lang=es"><img
            style="width: 26px;position: absolute;left: 3px;" class="is-hidden-desktop-only is-hidden-tablet-only"
            src="https://datamares.org/wp-content/uploads/flags/phpiKQpw2" alt="">
        <?php _e("Spanish version",'dm') ?></a>
    <?php }; ?>
    <?php endif; ?>
    <a class="column is-3 my-1 button is-success is-fullwidth"
        href="<?php echo get_field('pdf')?>"><?php _e("Download PDF",'dm') ?></a>
	<?php if(get_field('datakids')): ?>
	<a target="_blank" class="column is-3 my-1 button is-success is-fullwidth"
        href="https://forms.gle/zg5zVThW9ET3RSqA8"><?php _e("Enviar dibujo",'dm') ?></a>
	<?php endif ?>
</div>
   <?php $embed = get_field('embed'); echo $embed ?>
<?php };?>
<?php
if( !get_field('type') ) {?>
    <!-- Content -->
<div class="container-lupa columns p-0 m-0 is-multiline">
  
    <!-- Image ZOOM -->
    <img id="zoom" src="<?php echo $image; ?>" data-big="<?php echo $image; ?>" data-overlay="images/overlay.png" />
    <!-- Side Bar -->
    <div class="column is-3 is-flex is-flex-direction-column mx-auto">
        <div class="column is-7 m-0 p-0">
			<div class="">
				<?php 
			$traslatedVersion = get_field('traslatedversion');
			if( $traslatedVersion ): ?>
				<?php
						if( get_field('flag') ) {?>
				<a class="mx-auto my-2 button is-text is-fullwidth is-flex" href="<?php echo $traslatedVersion; ?>"><img
						style="width: 26px;position: absolute;left: 3px;" class="is-hidden-desktop-only is-hidden-tablet-only"
						src="https://datamares.org/wp-content/uploads/flags/phpP7yybx" alt="">
					<?php _e("Versión en inglés",'dm') ?></a>
				<?php }; ?>
				<?php
						if( !get_field('flag') ) {?>
				<a class="mx-auto my-2 button is-text is-fullwidth is-flex" href="<?php echo $traslatedVersion; ?>?lang=es"><img
						style="width: 26px;position: absolute;left: 3px;" class="is-hidden-desktop-only is-hidden-tablet-only"
						src="https://datamares.org/wp-content/uploads/flags/phpiKQpw2" alt="">
					<?php _e("Spanish version",'dm') ?></a>
				<?php }; ?>
				<?php endif; ?>
				<a class="mx-auto my-1 button is-success is-fullwidth"
					href="<?php echo get_field('pdf')?>"><?php _e("Download PDF",'dm') ?></a>
			</div>			
            <div class="button my-1 is-fullwidth is-fb fb-share-button"
                data-href="<?php echo get_field('download_link') ?>" data-size="large" data-layout="button"
                data-lazy="true"></div>
            <!-- Share button twitter -->
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large"
                data-via="dataMares" data-hashtags="dataPosters" data_url="<?php echo get_field('download_link') ?>"
                data-show-count="false">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <!-- Zoom Settings -->
        <form id="real_time_form">
            <legend></legend>
            <fieldset>
                <div class="field">
                    <label class="label"> <?php _e('Zoom Level','dm') ?></label>
                    <div class="control">
                        <input class="input" type="tel" id="zoomLevel_param" name="zoomLevel_param" value="1" />
                    </div>
                </div>
                <input class="button is-info is-small" id="form_button_reset" type="reset" value="Values reset" />
                <input class="button is-info is-small" id="form_button" type="button" value="Apply changes" />
            </fieldset>
            <div id="risposta"></div>
        </form>
    </div>
</div>
<?php };?>


















<?php get_footer(); ?>


<!-- Zoom preSetting JS -->
<script type="text/javascript">
$("#mlens_wrapper_0").addClass("column")
let box = document.querySelector('.container-lupa');
let width = box.offsetWidth;
var w = 300;
if (width < 640) {
    w = 200;
}
$(document).ready(function() {
    console.log(w);
    $("#zoom").mlens({
        imgSrc: $("#zoom").attr("data-big"),
        lensShape: "circle",
        lensSize: [w, w],
        borderSize: 4,
        borderColor: "#fff",
        borderRadius: 5,
        imgOverlay: $("#gear").attr("data-overlay"),
        overlayAdapt: true,
        zoomLevel: 1,
        responsive: true,
    });
});

$("#form_button").click(function(e) {
    e.preventDefault();
    var $new_settings = [];
    $("#real_time_form select, #real_time_form input").each(function(index) {
        $new_settings[index] = $(this).val();
    });
    $("#zoom").mlens("update", {
        imgSrc: $("#zoom").attr("data-big"),
        imgSrc2x: $("#zoom").attr("data-big2x"),
        lensShape: "circle",
        lensSize: w,
        zoomLevel: parseInt($new_settings[0])
    });

    var $risposta = "<p><?php _e('&larr; New values setted, try now!','dm'); ?></p>";
    $("#risposta").html($risposta).show().fadeOut(4000);
});
</script>