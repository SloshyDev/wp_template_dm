<?php get_header();
/*template name: Un dia por los mares */
?>

<style>
	.splide__container{box-sizing:border-box;position:relative}.splide__list{backface-visibility:hidden;display:-ms-flexbox;display:flex;height:100%;margin:0!important;padding:0!important}.splide.is-initialized:not(.is-active) .splide__list{display:block}.splide__pagination{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;margin:0;pointer-events:none}.splide__pagination li{display:inline-block;line-height:1;list-style-type:none;margin:0;pointer-events:auto}.splide:not(.is-overflow) .splide__pagination{display:none}.splide__progress__bar{width:0}.splide{position:relative;visibility:hidden}.splide.is-initialized,.splide.is-rendered{visibility:visible}.splide__slide{backface-visibility:hidden;box-sizing:border-box;-ms-flex-negative:0;flex-shrink:0;list-style-type:none!important;margin:0;position:relative}.splide__slide img{vertical-align:bottom}.splide__spinner{animation:splide-loading 1s linear infinite;border:2px solid #999;border-left-color:transparent;border-radius:50%;bottom:0;contain:strict;display:inline-block;height:20px;left:0;margin:auto;position:absolute;right:0;top:0;width:20px}.splide__sr{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.splide__toggle.is-active .splide__toggle__play,.splide__toggle__pause{display:none}.splide__toggle.is-active .splide__toggle__pause{display:inline}.splide__track{overflow:hidden;position:relative;z-index:0}@keyframes splide-loading{0%{transform:rotate(0)}to{transform:rotate(1turn)}}.splide__track--draggable{-webkit-touch-callout:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.splide__track--fade>.splide__list>.splide__slide{margin:0!important;opacity:0;z-index:0}.splide__track--fade>.splide__list>.splide__slide.is-active{opacity:1;z-index:1}.splide--rtl{direction:rtl}.splide__track--ttb>.splide__list{display:block}.splide__arrow{-ms-flex-align:center;align-items:center;border:0;border-radius:50%;cursor:pointer;display:-ms-flexbox;display:flex;height:2em;-ms-flex-pack:center;justify-content:center;opacity:.7;padding:0;position:absolute;top:50%;transform:translateY(-50%);width:2em;z-index:1}.splide__arrow svg{fill:#000;height:1.2em;width:1.2em}.splide__arrow:hover:not(:disabled) {opacity:.9}.splide__arrow:disabled{opacity:.3}.splide__arrow:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide__arrow--prev{left:1em}.splide__arrow--prev svg{transform:scaleX(-1)}.splide__arrow--next{right:1em}.splide.is-focus-in .splide__arrow:focus{outline:3px solid #0bf;outline-offset:3px}.splide__pagination{bottom:.5em;left:0;padding:0 1em;position:absolute;right:0;z-index:1}.splide__pagination__page{background:#ccc;border:0;border-radius:50%;display:inline-block;height:8px;margin:3px;opacity:.7;padding:0;position:relative;transition:transform .2s linear;width:8px}.splide__pagination__page.is-active{background:#fff;transform:scale(1.4);z-index:1}.splide__pagination__page:hover{cursor:pointer;opacity:.9}.splide__pagination__page:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__pagination__page:focus{outline:3px solid #0bf;outline-offset:3px}.splide__progress__bar{background:#ccc;height:3px}.splide__slide{-webkit-tap-highlight-color:rgba(0,0,0,0)}.splide__slide:focus{outline:0}@supports(outline-offset:-3px){.splide__slide:focus-visible{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide__slide:focus-visible{border:3px solid #0bf}}@supports(outline-offset:-3px){.splide.is-focus-in .splide__slide:focus{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide.is-focus-in .splide__slide:focus{border:3px solid #0bf}.splide.is-focus-in .splide__track>.splide__list>.splide__slide:focus{border-color:#0bf}}.splide__toggle{cursor:pointer}.splide__toggle:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__toggle:focus{outline:3px solid #0bf;outline-offset:3px}.splide__track--nav>.splide__list>.splide__slide{border:3px solid transparent;cursor:pointer}.splide__track--nav>.splide__list>.splide__slide.is-active{border:3px solid #000}.splide__arrows--rtl .splide__arrow--prev{left:auto;right:1em}.splide__arrows--rtl .splide__arrow--prev svg{transform:scaleX(1)}.splide__arrows--rtl .splide__arrow--next{left:1em;right:auto}.splide__arrows--rtl .splide__arrow--next svg{transform:scaleX(-1)}.splide__arrows--ttb .splide__arrow{left:50%;transform:translate(-50%)}.splide__arrows--ttb .splide__arrow--prev{top:1em}.splide__arrows--ttb .splide__arrow--prev svg{transform:rotate(-90deg)}.splide__arrows--ttb .splide__arrow--next{bottom:1em;top:auto}.splide__arrows--ttb .splide__arrow--next svg{transform:rotate(90deg)}.splide__pagination--ttb{bottom:0;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;left:auto;padding:1em 0;right:.5em;top:0}
	
		.mx-auto{margin-left:auto;margin-right:auto}.mb-\[3vw\]{margin-bottom:3vw}.mt-\[1vw\]{margin-top:1vw}.mt-\[2vw\]{margin-top:2vw}.h-\[17vw\]{height:17vw}.w-2\/3{width:66.666667%}.w-3\/4{width:75%}.w-4\/5{width:80%}.w-\[18vw\]{width:18vw}.w-full{width:100%}.cursor-pointer{cursor:pointer}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.rounded-\[7vw\]{border-radius:7vw}.rounded-lg{border-radius:.5rem}.border-\[1\.5vw\]{border-width:1.5vw}.border-\[\#285b6e\]{--tw-border-opacity:1;border-color:rgb(40 91 110 / var(--tw-border-opacity))}.bg-\[\#1f4c5c\]{--tw-bg-opacity:1;background-color:rgb(31 76 92 / var(--tw-bg-opacity))}.bg-\[\#3d7b91\]{--tw-bg-opacity:1;background-color:rgb(61 123 145 / var(--tw-bg-opacity))}.bg-\[\#3f7b91\]{--tw-bg-opacity:1;background-color:rgb(63 123 145 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.px-4{padding-left:1rem;padding-right:1rem}.px-\[1vw\]{padding-left:1vw;padding-right:1vw}.px-\[4vw\]{padding-left:4vw;padding-right:4vw}.py-8{padding-top:2rem;padding-bottom:2rem}.py-\[\.3vw\]{padding-top:.3vw;padding-bottom:.3vw}.py-\[1vw\]{padding-top:1vw;padding-bottom:1vw}.py-\[2vw\]{padding-top:2vw;padding-bottom:2vw}.py-\[3vw\]{padding-top:3vw;padding-bottom:3vw}.pb-\[3vw\]{padding-bottom:3vw}.text-center{text-align:center}.font-myriadCond{font-family:myriad-pro-condensed,system-ui}.text-\[5vw\]{font-size:5vw}.text-\[7vw\]{font-size:7vw}.text-\[9vw\]{font-size:9vw}.font-black{font-weight:900}.font-bold{font-weight:700}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.decoration-\[\#285b6e\]{text-decoration-color:#285b6e}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.font-myriad,.font-myriadCond{line-height:1}.wpml-ls-legacy-list-horizontal ul{display:flex;gap:.75rem}.splide__arrow svg{height:2vw;width:2vw;fill:none;stroke:#fff;stroke-width:.3vw}.splide__arrow{height:2vw;width:2vw;background-image:none}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:text-\[\#eadbc6\]:hover{--tw-text-opacity:1;color:rgb(234 219 198 / var(--tw-text-opacity))}.group:hover .group-hover\:scale-105{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.group:hover .group-hover\:underline{text-decoration-line:underline}@media(min-width:768px){.md\:mx-\[2vw\]{margin-left:2vw;margin-right:2vw}.md\:mt-auto{margin-top:auto}.md\:h-\[3vw\]{height:3vw}.md\:w-11\/12{width:91.666667%}.md\:w-\[10vw\]{width:10vw}.md\:w-\[17vw\]{width:17vw}.md\:w-\[37vw\]{width:37vw}.md\:flex-row{flex-direction:row}.md\:rounded-\[2vw\]{border-radius:2vw}.md\:border-\[\.5vw\]{border-width:.5vw}.md\:px-\[2vw\]{padding-left:2vw;padding-right:2vw}.md\:text-24w{font-size:2.4vw}.md\:text-2w{font-size:2vw}.md\:text-3w{font-size:3vw}}
	
    .splide__arrow svg,
    .splide__arrow {
        width: 10vw;
        height: 10vw;
        stroke-width: .1vw;
		background: transparentl !important;
    }
	
	.group:hover .group-hover\:text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}
	#linkM:hover{
		--tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
	}

    @media (min-width: 768px) {

        .splide__arrow svg,
        .splide__arrow {
            width: 4vw;
            height: 4vw;
            stroke-width: .05vw;
        }
    }


    #partners .splide__arrow svg {
        stroke: #1f4c5c;
    }
	
	
</style>
<section class="bg-[#1f4c5c] pb-[3vw]">
    <!-- Banner -->
    <div class="mb-[3vw]">
        <?php if (has_post_thumbnail($post->ID)) { ?>
            <?php $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        } ?>
        <img src="<?php echo $image; ?>" alt="Banner UPM" class="mx-auto w-full" width="1905" height="274">
    </div>

    <!--  Promo upm -->
    <div class="">
        <?php
        $promo_upm = get_field('banner_upm')
            ?>
        <img src="<?php echo esc_url($promo_upm['url']); ?>" alt="<?php echo $promo_upm['title'] ?>" alt="Banner promo upm 2024" class="mx-auto w-full" width="1905" height="274">
    </div>
	 <div class="flex h-[17vw] md:h-[3vw] justify-center items-center">
        <a href="https://iamericas.salsalabs.org/un-dia-por-los-mares-2024" target="_blank"
            class="hover:text-[#eadbc6] hover:scale-105 transition-all py-[.3vw] font-myriadCond font-black px-[1vw] text-[9vw] md:text-3w rounded-[7vw] md:rounded-[2vw] flex w-2/3 md:w-[17vw] justify-center mx-auto border-[1.5vw] md:border-[.5vw] border-[#285b6e] bg-[#3d7b91] text-white">
            REGÍSTRATE
        </a>
    </div>

    <!-- Text content -->
    <div class="py-8 bg-[#3d7b91] mb-[3vw]">
        <h1 class="w-4/5 px-4 mx-auto text-center font-myriadCond text-[5vw] md:text-2w text-white">
            <?php echo the_field('content') ?>
        </h1>
    </div>

    


</section>

<section class="pb-[3vw] bg-[#1f4c5c]">
    <?php if (have_rows('carrousel_ediciones')): ?>
        <section id="ediciones_upm" class="splide  md:mx-[2vw]" aria-label="Ediciones UPM">
            <div class="splide__track w-4/5 md:w-11/12 mx-auto">
                <section class="splide__list">
                    <?php while (have_rows('carrousel_ediciones')):
                        the_row();
                        $image = get_sub_field('img');
                        $link = get_sub_field("link");
                        ?>

                        <div class="splide__slide  hover:scale-105 transition-transform" role="anp_sections">
                            <a href="<?php echo $link ?>">
                                <img height="241" width="828" class="mx-auto rounded-lg w-4/5 md:w-[37vw]"
                                    src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" />
                            </a>
                        </div>

                    <?php endwhile; ?>
                </section>
            </div>
        </section>
    <?php endif; ?>
</section>

<section class="py-[2vw]">
    <?php if (have_rows('partners')): ?>
        <section id="partners" class="splide  md:mx-[2vw]" aria-label="Colaboradores UPM">
            <div class="splide__track w-4/5 md:w-11/12 mx-auto">
                <section class="splide__list">
                    <?php while (have_rows('partners')):
                        the_row();
                        $image = get_sub_field('img');
                        ?>

                        <div class="splide__slide  " role="patrocinadores">
                            <img class="mx-auto rounded-lg" src="<?php echo $image['url'] ?>"
                                alt="<?php echo $image['title'] ?>" />
                        </div>

                    <?php endwhile; ?>
                </section>
            </div>
        </section>
    <?php endif; ?>
</section>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/upm.js"></script>
<?php get_footer(); ?>