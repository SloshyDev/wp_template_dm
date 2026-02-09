<?php get_header();?>
<?php /*template name:Atlas*/ ?>

<style>
.data-Historia {
    background-image: url("<?php echo get_field('dh-background')?>");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.dataP {
    background-image: url("<?php echo get_field('dpb-background')?>");
}

.da-multimedia {
    background-image: url("<?php echo get_field('da-background')?>");
    background-size: cover;
}

.dv-footer {
    background-image: url("<?php echo get_field('footer-background')?>");
    background-size: cover;
}
}
</style>
<!-- Banner -->
<div class="mb-4">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
</div>

<section class="content">
    <?php while (have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
</section>

<?php if( have_rows('partners') ): $i=1; ?>
<h3
    class="is-size-3 is-uppercase has-text-weight-semibold has-text-primary my-4 column is-full heading-block has-text-centered isBlack">
    <?php  _e("Collaborators", 'dm' ) ?></h3>
<!-- Carousel Collaborators -->
<div class="collaborators-container column is-full m-0 p-0">
    <div class="column is-10 mx-auto dive">
        <div class="carousel-diveAtlas carousel">
            <?php while( have_rows('partners') ): the_row();
            $image = get_sub_field('img');
            $link = get_sub_field('link');
            ?>
            <div class="item">
                <a href="<?php echo $link; ?>" target="_blank">
                    <img src="<?php echo $image; ?>" alt="">
                </a>
            </div>
            <?php
            $i++;
        endwhile;
        ?>
        </div>
    </div>
</div>

<?php endif?>

<!-- Seccion data historias  -->
<div class="data-Historia columns p-0 my-6 is-multiline mx-0">
    <div class="column is-3 is-offset-6">
        <img src="<?php echo get_field('img_dh')?>" class="mx-auto">
    </div>
    <h3
        class="dive-tittle isBlackCond column is-off is-7 is-offset-4 is-uppercase is-condensed has-text-weight-semibold has-text-white column is-full heading-block has-text-centered">
        <?php  _e("DIVING AND SNORKELING ATLAS", 'dm' ) ?></h3>
    <h3
        class="column is-off is-5 is-offset-5 p-0 is-size-6 has-text-white my-4 column is-full heading-block has-text-centered isCond">
        <?php  echo get_field('dh_texto') ?></h3>
    <div class="dive-Buttons column is-5 is-offset-5 p-0 is-flex is-justify-content-center">
        <a href="<?php echo get_field('pdf1')?>" target="_blank"
            class="button dive-Button is-size-4 is-condensed isCond mx-4 is-medium px-6 mt-2 mb-6 has-text-white has-text-weight-semibold"><?php _e('EXPLORE THE INTERACTIVE PDF','dm')?></a>
        <a href="<?php echo get_field('pdf2')?>" target="_blank"
            class="button dive-Button is-size-4 is-condensed isCond mx-4 is-medium px-6 mt-2 mb-6 has-text-white has-text-weight-semibold"><?php _e('DOWNLOAD THE INTERACTIVE PDF','dm')?></a>
    </div>
</div>

<div class="columns column is-11 is-12-tablet mx-auto p-0 is-multiline">
    <div class="columns is-multiline my-1 column py-1 is-3-desktop is-5-tablet is-11-mobile mx-auto">
        <div class="trapezo column is-full ">
        </div>
        <div class="column is-full has-background-primary-dark py-2 m-0">
            <figure class="image column is-10 p-0 mx-auto">
                <img class="column is-11 mx-auto my-0 p-0"
                    src="<?php bloginfo('template_url');?>/img/diveAtlas/dataPoster.svg">
            </figure>
        </div>
        <div class="column is-full dataP">
            <a class="mx-auto" href="<?php echo get_field('dp-pdf') ?>" target="_blank" rel="noopener noreferrer"><img
                    class="dv py-5 mx-auto is-flex" src="<?php echo get_field('dp-da')?>" alt=""></a>
        </div>

    </div>
    <div class="columns is-multiline column my-2 p-0 is-8-desktop is-5-tablet  is-11-mobile mx-auto">
        <div class="trapezoid column is-3 ">
        </div>
        <div class="column is-full has-background-primary-dark py-2 m-0">
            <figure class="image column is-3 p-0 m-0">
                <img class="column is-9 mx-auto my-0 p-0"
                    src="<?php bloginfo('template_url');?>/img/diveAtlas/dataPub.svg">
            </figure>
        </div>
        <div class="column is-full dataP">
            <div class="carousel-dataPub carousel">
                <?php while( have_rows('content-datapub') ): the_row();
              $image = get_sub_field('img');
              $pdf = get_sub_field('pdf');
              ?>
                <div class="item">
                    <a href="<?php echo $pdf ?>" target="_blank" rel="noopener noreferrer"><img
                            class="dv py-5 mx- is-flex" src="<?php echo $image ?>" alt=""></a>
                </div>
                <?php
              $i++;
          endwhile;
          ?>
            </div>
        </div>
    </div>

</div>

<h3 class="is-size-3 has-text-weight-semibold has-text-primary my-4 column is-full heading-block has-text-centered">
    <?php  _e("MULTIMEDIA", 'dm' ) ?></h3>
<div class="columns column is-11 is-12-tablet mx-auto p-0 is-multiline px-5">
    <div class="column my-2 p-0 is-8 is-11-mobile py-6 da-multimedia mx-auto">
        <div class="column is-flex ">
            <img width="67" class="mx-auto" src="<?php bloginfo('template_url');?>/img/diveAtlas/instagram.svg" alt="">
        </div>
        <div class="carousel-diveAtlas1 carousel mb-6">
            <?php while( have_rows('content-multimedia') ): the_row();
              $content = get_sub_field('content');
              $image = get_sub_field('img');
              $type = get_sub_field('type');
              ?>

            <?php if( $type != 'audio' ){ ?>
            <div class="item">
                <img onclick="modal('<?php echo $content;?>','<?php echo $type;?>');"
                    class="is-clickable dv mx-auto is-flex" src="<?php echo $image?>" alt="">
            </div>
            <?php }else { ?>
            <div
                class="is-align-items-center item column is-flex is-flex-direction-column is-justify-content-space-evenly">
                <?php echo $content; ?>
            </div>
            <?php  } ?>

            <?php
              $i++;
          endwhile;
          ?>
        </div>
    </div>
    <div class="column p-0 is-4 my-2  is-11-mobile mx-auto">
        <div id="gallerry-diveAtlas"
            class="columns is-flex is-multiline p-0 my-0 column is-11 mx-auto has-background-primary">
            <h3
                class="is-size-3 has-text-weight-semibold has-text-white mt-3 column is-full heading-block has-text-centered">
                <?php  _e("PHOTO GALLERY", 'dm' ) ?></h3>
            <?php while( have_rows('gallery') ): the_row();
            $image = get_sub_field('img');
            ?>
            <div class="column is-4-desktop is-6-tablet is-full-mobile mx-auto my-5 is-flex  ">
                <img class="mx-auto is-clickable" onclick="modal('<?php echo $image;?>','img');"
                    src="<?php echo $image; ?>" alt="">
            </div>
            <?php
            $j++;
            if ($j==8) { ?>
            <script type="text/javascript">
            const gallery = document.getElementById("gallerry-diveAtlas");
            const height = 69
            gallery.style.overflowY = "scroll";
            gallery.style.height = height + "vh";
            </script>
            <?php } endwhile; ?>
        </div>
    </div>
</div>

<div class="dv-footer columns is-multiline mx-0 p-0 mt-6 mb-0">
    <div class="column is-3 mr-auto my-2">
        <img class="column is-10 mx-auto" src="<?php echo get_field('logo-footer')?>" alt="">
        <img class="column is-7 mx-auto" src="<?php echo get_field('icon-footer')?>" alt="">
    </div>
    <div class="column is-8 mx-auto has-text-white is-size-5">
        <?php echo get_field('content-footer')?>
    </div>
</div>

<!-- Modal -->
<div class="modal">
    <div class="modal-background close-m"></div>
    <div id="modal-Multimedia" class="modal-content close-m columns is-multiline is-justify-content-space-evenly">
    </div>
    <button class="close-m modal-close is-large" aria-label="close"></button>
</div>

<?php get_footer()?>
<script>
var vid = document.getElementById("myVideo");

function modal(link, type) {
    console.log(link);
    $('.modal').addClass('is-active');
    var content = document.createElement(type);
    if (type == "img") {
        content.src = link;
        content.width = "900";
    }
    if (type == "video") {
        content.src = link;
        content.width = "530";
        content.autoplay = true;
        content.controls = true;
    }
    if (type == "audio") {
        var img = document.createElement("img");
        img.src = "http://192.168.1.71/wordpress/wp-content/uploads/2021/12/Recurso-5.svg";
        img.className = "my-5"
        content.setAttribute("src", link);
        content.setAttribute("controls", "controls");
        document.getElementById('modal-Multimedia').appendChild(img);
    }
    document.getElementById('modal-Multimedia').appendChild(content);
}
$('.close-m').click(function() {
    $("#modal-Multimedia").empty();
    $('.modal').removeClass('is-active');
});
</script>

<script>
       
        $(".otgs-development-site-front-end").remove();
        </script>