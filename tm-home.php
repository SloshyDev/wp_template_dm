    <?php include 'animations/intro_home.php';  ?>

<?php get_header(); 
/*template name:Home*/
?>

<style>
	.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}
	.splide__container{box-sizing:border-box;position:relative}.splide__list{backface-visibility:hidden;display:-ms-flexbox;display:flex;height:100%;margin:0!important;padding:0!important}.splide.is-initialized:not(.is-active) .splide__list{display:block}.splide__pagination{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;margin:0;pointer-events:none}.splide__pagination li{display:inline-block;line-height:1;list-style-type:none;margin:0;pointer-events:auto}.splide:not(.is-overflow) .splide__pagination{display:none}.splide__progress__bar{width:0}.splide{position:relative;visibility:hidden}.splide.is-initialized,.splide.is-rendered{visibility:visible}.splide__slide{backface-visibility:hidden;box-sizing:border-box;-ms-flex-negative:0;flex-shrink:0;list-style-type:none!important;margin:0;position:relative}.splide__slide img{vertical-align:bottom}.splide__spinner{animation:splide-loading 1s linear infinite;border:2px solid #999;border-left-color:transparent;border-radius:50%;bottom:0;contain:strict;display:inline-block;height:20px;left:0;margin:auto;position:absolute;right:0;top:0;width:20px}.splide__sr{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.splide__toggle.is-active .splide__toggle__play,.splide__toggle__pause{display:none}.splide__toggle.is-active .splide__toggle__pause{display:inline}.splide__track{overflow:hidden;position:relative;z-index:0}@keyframes splide-loading{0%{transform:rotate(0)}to{transform:rotate(1turn)}}.splide__track--draggable{-webkit-touch-callout:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.splide__track--fade>.splide__list>.splide__slide{margin:0!important;opacity:0;z-index:0}.splide__track--fade>.splide__list>.splide__slide.is-active{opacity:1;z-index:1}.splide--rtl{direction:rtl}.splide__track--ttb>.splide__list{display:block}.splide__arrow{-ms-flex-align:center;align-items:center;background:#ccc;border:0;border-radius:50%;cursor:pointer;display:-ms-flexbox;display:flex;height:2em;-ms-flex-pack:center;justify-content:center;opacity:.7;padding:0;position:absolute;top:50%;transform:translateY(-50%);width:2em;z-index:1}.splide__arrow svg{fill:#000;height:1.2em;width:1.2em}.splide__arrow:hover:not(:disabled){opacity:.9}.splide__arrow:disabled{opacity:.3}.splide__arrow:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide__arrow--prev{left:1em}.splide__arrow--prev svg{transform:scaleX(-1)}.splide__arrow--next{right:1em}.splide.is-focus-in .splide__arrow:focus{outline:3px solid #0bf;outline-offset:3px}.splide__pagination{bottom:.5em;left:0;padding:0 1em;position:absolute;right:0;z-index:1}.splide__pagination__page{background:#ccc;border:0;border-radius:50%;display:inline-block;height:8px;margin:3px;opacity:.7;padding:0;position:relative;transition:transform .2s linear;width:8px}.splide__pagination__page.is-active{background:#fff;transform:scale(1.4);z-index:1}.splide__pagination__page:hover{cursor:pointer;opacity:.9}.splide__pagination__page:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__pagination__page:focus{outline:3px solid #0bf;outline-offset:3px}.splide__progress__bar{background:#ccc;height:3px}.splide__slide{-webkit-tap-highlight-color:rgba(0,0,0,0)}.splide__slide:focus{outline:0}@supports(outline-offset:-3px){.splide__slide:focus-visible{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide__slide:focus-visible{border:3px solid #0bf}}@supports(outline-offset:-3px){.splide.is-focus-in .splide__slide:focus{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide.is-focus-in .splide__slide:focus{border:3px solid #0bf}.splide.is-focus-in .splide__track>.splide__list>.splide__slide:focus{border-color:#0bf}}.splide__toggle{cursor:pointer}.splide__toggle:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__toggle:focus{outline:3px solid #0bf;outline-offset:3px}.splide__track--nav>.splide__list>.splide__slide{border:3px solid transparent;cursor:pointer}.splide__track--nav>.splide__list>.splide__slide.is-active{border:3px solid #000}.splide__arrows--rtl .splide__arrow--prev{left:auto;right:1em}.splide__arrows--rtl .splide__arrow--prev svg{transform:scaleX(1)}.splide__arrows--rtl .splide__arrow--next{left:1em;right:auto}.splide__arrows--rtl .splide__arrow--next svg{transform:scaleX(-1)}.splide__arrows--ttb .splide__arrow{left:50%;transform:translate(-50%)}.splide__arrows--ttb .splide__arrow--prev{top:1em}.splide__arrows--ttb .splide__arrow--prev svg{transform:rotate(-90deg)}.splide__arrows--ttb .splide__arrow--next{bottom:1em;top:auto}.splide__arrows--ttb .splide__arrow--next svg{transform:rotate(90deg)}.splide__pagination--ttb{bottom:0;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;left:auto;padding:1em 0;right:.5em;top:0}
	
.col-span-4{grid-column:span 4 / span 4}.mx-4{margin-left:1rem;margin-right:1rem}.mx-auto{margin-left:auto;margin-right:auto}.my-12w{margin-top:.2vw;margin-bottom:.2vw}.my-6{margin-top:1.5rem;margin-bottom:1.5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.ml-auto{margin-left:auto}.mr-0{margin-right:0}.mt-12{margin-top:3rem}.h-full{height:100%}.w-2\/3{width:66.666667%}.w-full{width:100%}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.items-center{align-items:center}.justify-between{justify-content:space-between}.justify-around{justify-content:space-around}.gap-15w{gap:1.5vw}.gap-28w{gap:2.8vw}.gap-8{gap:2rem}.rounded-lg{border-radius:.5rem}.border-4{border-width:4px}.border-blue-400{--tw-border-opacity:1;border-color:rgb(0 48 46 / var(--tw-border-opacity))}.bg-blue-400{--tw-bg-opacity:1;background-color:rgb(0 48 46 / var(--tw-bg-opacity))}.px-4{padding-left:1rem;padding-right:1rem}.py-20w{padding-top:2.1vw;padding-bottom:2.1vw}.text-center{text-align:center}.font-myriad{font-family:myriad-pro,system-ui}.font-myriadCond{font-family:myriad-pro-condensed,system-ui}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-black{font-weight:900}.text-blue-200{--tw-text-opacity:1;color:rgb(22 101 97 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-yellow-100{--tw-text-opacity:1;color:rgb(196 204 45 / var(--tw-text-opacity))}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.font-myriad,.font-myriadCond{line-height:1}.wpml-ls-legacy-list-horizontal ul{display:flex;gap:.75rem}.splide__arrow svg{height:2vw;width:2vw;fill:none;stroke:#fff;stroke-width:.3vw}.splide__arrow{height:2vw;width:2vw;background-image:none}.buttonLink{border-radius:1rem;border-width:4px;--tw-border-opacity:1;border-color:rgb(0 48 46 / var(--tw-border-opacity));background:rgb(22,101,97);background:linear-gradient(180deg,rgba(22,101,97,1)0,rgba(158,165,33,1)100%);padding-left:.2vw;padding-right:.2vw;padding-top:.2vw;padding-bottom:.2vw;text-align:center;font-family:myriad-pro-condensed,system-ui;font-weight:700;--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity));transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms;line-height:1}.buttonLink:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:scale-\[1\.02\]:hover{--tw-scale-x:1.02;--tw-scale-y:1.02;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}@media(min-width:768px){.md\:col-span-4{grid-column:span 4 / span 4}.md\:mb-0{margin-bottom:0}.md\:flex{display:flex}.md\:w-1\/2{width:50%}.md\:w-1\/4{width:25%}.md\:w-9\/12{width:75%}.md\:w-\[98\%\]{width:98%}.md\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.md\:flex-row{flex-direction:row}.md\:text-14w{font-size:1.4vw}.md\:text-16w{font-size:1.6vw}}.dark\:text-gray-50:where(.dark,.dark *){--tw-text-opacity:1;color:rgb(249 250 251 / var(--tw-text-opacity))}
	
	.my-8 {
    margin-top: 2.5rem /* 48px */;
    margin-bottom: 2rem /* 48px */;
}
	

	
	@media (min-width: 768px) {
    .md\:mb-0 {
        margin-bottom: 0 !important;
    }
}
	.splide__arrow {
		background:transparent;
	}
	.buttonLink:hover{
		color:white;
	}
	
	
	
	@media (min-width: 768px) {
    .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}
	
	
.right-\[3vw\] {
  right: 3vw;
}
.top-0 {
  top: 0px;
}
.top-\[3vw\] {
  top: 3vw;
}
.z-10 {
  z-index: 900;
}
.z-20 {
  z-index: 20;
}
.m-auto {
  margin: auto;
}


.h-\[95\%\] {
  height: 95%;
}
.h-full {
  height: 100%;
}
.w-\[10vw\] {
  width: 10vw;
}
.w-\[3vw\] {
  width: 3vw;
}
.w-full {
  width: 100%;
}
.scale-105 {
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.bg-gray-900\/80 {
  background-color: rgb(17 24 39 / 0.8);
}
.fill-blue-200 {
  fill: #166561;
}
.stroke-white {
  stroke: #fff;
}
.shadow-2xl {
  --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
  --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.backdrop-blur-lg {
  --tw-backdrop-blur: blur(16px);
  -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.hover\:scale-105:hover {
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.group:hover .group-hover\:scale-105 {
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.group:hover .group-hover\:stroke-yellow-100 {
  stroke: #c4cc2d;
}
@media (min-width: 768px) {

  .md\:w-\[3vw\] {
    width: 3vw;
  }
}
	
	
</style>

<!-- Carrousel banners y marquesina -->
<section class="mx-4 my-6 flex flex-col gap-28w md:flex-row">
    <!-- Carrousel banners -->
    <?php if (have_rows('banners')): ?>
        <section id="banners" class="splide flex items-center rounded-lg md:w-9/12" aria-label="banners ATRACTIVOS">
            <div class="splide__track">
                <section class="splide__list">
                    <?php while (have_rows('banners')):
                        the_row();
					$link =
                            get_sub_field('link');
                        $image =
                            get_sub_field('img'); ?>

                        <div class="splide__slide flex flex-col" role="banner">
                            <a href="<?php echo $link ?>"><img height="315" width="1592" class="mx-auto rounded-lg" src="<?php echo $image['url'] ?>"
                                alt="<?php echo $image['title'] ?>" /></a>
                        </div>

                    <?php endwhile; ?>
                </section>
            </div>
        </section>
    <?php endif; ?>
    <!-- Marquesina -->
    <div class="mx-auto flex flex-col justify-between gap-15w md:w-1/4">
        <div class="flex h-full flex-col justify-around rounded-lg border-4 border-blue-400 bg-blue-400 hover:scale-105 transition-transform">
            <h1 class="my-12w text-center font-myriad text-2xl font-black text-yellow-100 md:text-16w is-uppercase"><?php echo _e('Latest News', 'dm'); ?></h1><a target="_blank" href="#" ><?php $image = get_field('marquesina-image') ?>
<img width="447" height="387" class="w-full" src="<?php echo $image['url'] ?>" alt="" /></a>
        </div>
        <a href="<?php the_field('news-link') ?>" class="buttonLink block w-full text-xl md:text-14w bg-gradient-to-b from-secondary2 to-yellow" >
           <?php _e("VISIT THE NEWS ARCHIVE", 'dm' )?>
        </a>
    </div>
</section>

<!-- Lo mas reciente -->
<div class="grid grid-cols-1 gap-8 bg-blue-400 px-4 py-20w md:grid-cols-4">
    <h1 class="text-center font-myriadCond text-3xl font-black text-white md:col-span-4 md:text-16w">
        <?php echo _e('MOST RECENT', 'dm'); ?>
    </h1>
    <?php if (have_rows('promos')): ?>
        <?php while (have_rows('promos')):
            the_row();
            $image = get_sub_field('img');
            $link = get_sub_field('link'); ?>

            <a href="<?php echo $link ?>" aria-label="Link to <?php echo $image['title'] ?>"
                class="transition-transform hover:scale-105">
                <img height="315" width="1592" class="mx-auto rounded-lg" src="<?php echo $image['url'] ?>"
                    alt="<?php echo $image['title'] ?>" />
            </a>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<!-- Para no perderse -->
<section class="my-8">
    <h1
        class="col-span-4 mb-6 text-center font-myriadCond text-3xl font-black text-blue-200 md:text-16w dark:text-gray-50">
        <?php echo _e('READING RECOMMENDATIONS', 'dm'); ?>...
    </h1>
    <div class="mx-4 grid grid-cols-1 md:grid-cols-2 gap-4">
		
		<?php 
		$rec1 = get_field('rec1');
		$rec2 = get_field('rec2');
		?>
        <img class="mb-4 md:mb-0" src="<?php echo esc_url($rec1['url']); ?>"
                        alt="<?php echo $rec1['title'] ?>" />
        <img src="<?php echo esc_url($rec2['url']); ?>"
                        alt="<?php echo $rec2['title'] ?>" />
    </div>
</section>


<!-- Para no perderse -->
<section class="my-6">
    <h1
        class="col-span-4 mb-6 text-center font-myriadCond text-3xl font-black text-blue-200 md:text-16w dark:text-gray-50 is-uppercase">
       <?php echo _e('Do not miss it', 'dm'); ?> 
    </h1>
    <div class="mx-4 md:flex">
        <?php if (have_rows('caja1')): ?>
            <?php while (have_rows('caja1')):
                the_row();
                $link = get_sub_field('link');
                $image = get_sub_field('img'); ?>

                <a aria-label="link to <?php echo $image['title'] ?>" href="<?php echo $link ?>"
                    class="mb-4 block transition-transform hover:scale-[1.02] md:mb-0 md:w-1/2">
                    <img height="315" width="1592" class="mx-auto rounded-lg" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo $image['title'] ?>" />
                </a>

            <?php endwhile; ?>
        <?php endif; ?>

        <div class="flex flex-col justify-between md:w-1/2">
            <?php if (have_rows('caja2')): ?>
                <?php while (have_rows('caja2')):
                    the_row();
                    $link = get_sub_field('link');
                    $image = get_sub_field('img');
                    ?>

                    <a aria-label="link to <?php echo $image['title'] ?>" href="<?php echo $link ?>"
                        class="transition-transform hover:scale-[1.02]">
                        <img height="315" width="1592" class=" mb-4 ml-auto mr-0 rounded-lg md:mb-0 md:w-[98%]"
                            src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['title'] ?>" />
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('caja3')): ?>
                <?php
                while (have_rows('caja3')):
                    the_row();
                    $link = get_sub_field('link');
                    $image = get_sub_field('img'); ?>

                    <a href="<?php echo $link ?>" aria-label="link to <?php echo $image['title'] ?>"
                        class="transition-transform hover:scale-[1.02]">
                        <img height="315" width="1592" class=" ml-auto mr-0 rounded-lg md:w-[98%]"
                            src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['title'] ?>" />
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Grafico como funciona dataMares -->
<?php
$grafico_dataMaresmd = get_field('graficomd');
$link_dataMaresmd = get_field('dmlink');
?>
<a href="<?php echo $link_dataMaresmd ?>">
<img class="w-2/3 mx-auto mb-6 mt-12" width="1269" height="871"
    src="<?php echo esc_url($grafico_dataMaresmd['url']); ?>" alt="<?php echo $grafico_dataMaresmd['title'] ?>">
</a>


<div id="tlmodal" class="absolute top-0 h-full w-full backdrop-blur-lg bg-gray-900/80 z-10 hidden">
    <div class="flex md:block gap-10w absolute top-[3vw] right-[3vw]">
        <button onclick="closeModal()" class=" group z-20" aria-label="closeModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-[10vw] md:w-[3vw] fill-blue-200 stroke-white shadow-2xl group-hover:scale-105 group-hover:stroke-yellow-100 transition-all">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
        <a class="hidden" href="https://datamares.org/dwd/semana-literatura-y-ciencia/">
            <svg class="w-[10vw] md:w-[3vw] group hover:scale-105 transition-transform" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="2.75" y="2.75" width="18.5" height="18.5" rx="9.25"
                    class="fill-blue-200 stroke-white group-hover:stroke-yellow-100 transition-colors"
                    stroke-width="1.5" />
                <path
                    d="M6.74902 13.876V15.1885C6.74902 15.5366 6.8873 15.8704 7.13345 16.1166C7.37959 16.3627 7.71343 16.501 8.06152 16.501H15.9365C16.2846 16.501 16.6185 16.3627 16.8646 16.1166C17.1107 15.8704 17.249 15.5366 17.249 15.1885V13.876M14.624 11.251L11.999 13.876M11.999 13.876L9.37402 11.251M11.999 13.876V6.00098"
                    class="stroke-white group-hover:stroke-yellow-100 transition-colors" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>



    <?php $programfil = get_field('program') ?>
    <img width="447" height="387" class="w-auto h-[95%] m-auto" src="<?php echo $programfil['url'] ?>" alt="" />
</div>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>




<?php get_footer(); ?>

<script>
	var banners = new Splide("#banners", {
  type: "loop",
  perPage: 1,
  perMove: 1,
  rewind: true,
  pagination: false,
  autoplay: true,
  arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
  role: "banner",
});

banners.mount();

	function setStroke() {
    $("body").height("100vh");
    $("body").addClass("is-clipped");
    $(".vr").attr('stroke', '#6a9a4a');
    $(".az").attr('stroke', '#187470');
}
$('.draggable').height('fit-content');
	
	
let modal = document.getElementById("tlmodal");

function showModal() {
	  window.scrollTo(0, 0);
  modal.classList.remove("hidden");
  modal.classList.add("flex");

	// Get the current page scroll position
            scrollTop =
                window.pageYOffset ||
                document.documentElement.scrollTop;
            scrollLeft =
                window.pageXOffset ||
                document.documentElement.scrollLeft,

                // if any scroll is attempted,
                // set this to the previous value
                window.onscroll = function () {
                    window.scrollTo(scrollLeft, scrollTop);
                };
	
	
}

function closeModal() {
  modal.classList.add("hidden");
  modal.classList.remove("flex");
	window.onscroll = function () { };
}

	
	
	
let newUser = localStorage.getItem("newUser")

if (newUser) {
    $(".logoFull").addClass('hidden');
    $(".logoMin").removeClass('hidden');
} else {
    $(".logoFull").removeClass('hidden');
}
anime({
	setStroke: setStroke(),
    targets: '.dmMin path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutQuint',
    duration: newUser ? 2000 : 3000,
    delay: function (el, i) { return i * newUser ? 250 : 180 },
    begin: function (anim) {
        var animation_in = anime.timeline({
            duration: 800,
            delay: newUser ? 1500 : 2500,
            easing: 'linear',
        }).add({
            targets: '.vr',
            fill: '#6a9a4a'
        }, 0).add({
            targets: '.az',
            fill: '#187470'
        }, 0);
    },
    complete: function () {
        anime({
            targets: '.dmMin path',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutQuint',
            duration: newUser ? 1000 : 1200,
            delay: function (el, i) { return i * newUser ? 220 : 110 },
            direction: 'reverse',
            begin: function (anim) {
                anime({
                    targets: '.dmMin path',
                    duration: 700,
                    delay: 500,
                    fill: '#ffffff'
                })
            },
            complete: function (anim) {
                $('.dmMin path').addClass('fill-transparent');
                $(".animation").removeClass('bg-white');
                $(".animation").addClass('bg-transparent');
                localStorage.setItem("newUser", "false");
				$("body").removeClass("is-clipped");
        $("body").height("auto");
        $('.dmLogo').remove();
            }
        });
    }
});




$(".otgs-development-site-front-end").remove();
</script>