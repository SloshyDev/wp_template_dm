<?php get_header();
/*template name:News*/
?>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<style>
    .mb-42 {
        margin-bottom: 1vw
    }

    .ml-\[4vw\] {
        margin-left: 4vw
    }

    .h-\[14\.4vw\;\] {
        height: 14.4vw
    }

    .w-3w {
        width: 3vw
    }

    .w-7w {
        width: 7vw
    }

    .items-center {
        align-items: center
    }

    .justify-end {
        justify-content: flex-end
    }

    .gap-\[1vw\] {
        gap: 1vw
    }

    .rounded-l-3xl {
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem
    }

    .bg-\[\#285b6e\] {
        --tw-bg-opacity: 1;
        background-color: rgb(40 91 110 / var(--tw-bg-opacity))
    }

    .bg-cover {
        background-size: cover
    }

    .bg-no-repeat {
        background-repeat: no-repeat
    }

    .p-4 {
        padding: 1rem
    }

    .font-myriadCond {
        font-family: myriad-pro-condensed, system-ui
    }

    .text-12w {
        font-size: 1vw
    }

    .font-semibold {
        font-weight: 600
    }

    .text-\[\#96a6b6\] {
        --tw-text-opacity: 1;
        color: rgb(150 166 182 / var(--tw-text-opacity))
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .decoration-\[\#96a6b6\] {
        text-decoration-color: #96a6b6
    }

    .font-myriad,
    .font-myriadCond {
        line-height: 1
    }

    .group:hover .group-hover\:underline {
        text-decoration-line: underline
    }

    .group:hover .group-hover\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:opacity-0 {
        opacity: 0;
    }

    .group:hover .group-hover\:opacity-100 {
        opacity: 1;
    }

    .opacity-0 {
        opacity: 0;
    }

    .transition-opacity {
        transition-property: opacity;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .absolute {
        position: absolute;
    }

    @media (min-width: 1536px) {
        .\32xl\:hidden {
            display: none !important;
        }

        .\32xl\:block {
            display: block !important;
        }
    }
</style>

<!-- Banner -->
<div class="mb-2 lg:mb-12">
    <?php if (has_post_thumbnail($post->ID)) { ?>
        <?php $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    } ?>
    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
</div>
<?php while (have_posts()):
    the_post(); ?>     <?php the_content(); ?> <?php endwhile; ?>

<div data-aos="zoom-in-down" class="px-0">
    <?php $header2 = get_field('header2'); ?>
    <div style="background-image: url(<?php echo $header2 ?>);"
        class="h-[14.4vw;] bg-cover bg-no-repeat flex justify-end items-center">
        <div class="rounded-l-3xl bg-[#285b6e] p-4">
            <img class="w-7w mb-42 ml-[4vw]" src="https://datamares.org/wp-content/uploads/2024/06/Asset-2.svg" alt="">
            <div class="flex gap-[1vw] items-center text-white mb-42">
                <img class="w-3w" src="https://datamares.org/wp-content/uploads/2024/06/Asset-1-7.webp" alt="">
                <div class="font-myriadCond font-semibold text-12w">
                    <a class="group" href="https://suracapulco.mx/urgen-proteccion-para-los-mares-mexicanos/">
                        <h1 class="group-hover:text-white">URGEN PROTECCIÓN PARA LOS MARES MEXICANOS</h1>
                        <h1 class="group-hover:underline decoration-[#96a6b6] text-[#96a6b6]">www.suracapulco.mx</h1>
                    </a>
                </div>
            </div>
            <div class="flex gap-[1vw] items-center text-white">
                <img class="w-3w" src="https://datamares.org/wp-content/uploads/2024/06/Asset-1-7.webp" alt="">
                <div class="font-myriadCond font-semibold text-12w">
                    <a class="group"
                        href="https://edomexaldia.com/en-el-dia-mundial-de-los-oceanos-se-refrendan-compromisos-por-proteger-la-biodiversidad-marina-de-mexico/">
                        <h1 class="group-hover:text-white">SE REFRENDAN COMPROMISOS POR PROTEGER LA BIODIVERSIDAD
                        </h1>
                        <h1 class="group-hover:underline decoration-[#96a6b6] text-[#96a6b6]">edomexaldia.com</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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
	
	#interviews::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #00302e;
            border-radius: 10px;
        }

        #interviews::-webkit-scrollbar {
            width: 10px;
            background-color: #00302e;
            border-radius: 10px;
        }

        #interviews::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #4b5563;
        }
</style>

<div data-aos="zoom-in-down" class="px-0">
    <?php $header = get_field('header'); ?>
    <button onclick="showModal()" class="overflow-x-clip">
        <img class="hover:scale-105 hover:z-20 w-full hover:shadow-2xl transition-all" width="1905" height="275"
            src="<?php echo $header ?>" />
    </button>
</div>








<!-- Third Section -->
<div class="md:flex w-11/12 mx-auto">
    <div class="md:w-2/4 md:border-r-4 border-r-secondary4 dark:border-r-secondary3 ">
        <div class="bg-secondary4 mr-4 my-10 flex rounded-lg border-secondary2 border-8">
            <?php while (have_rows('bault')):
                the_row();
                $icon = get_sub_field('icon');
                $iconlink = get_sub_field('iconlink');
                ?>
                <div class="hidden lg:block w-[10%] bg-yellow rounded-lg">
                    <img style="left: 3.5vw;" class='absolute lg:w-24 2xl:w-36 left-[-1rem]' src="<?php echo $icon ?>"
                        alt="">
                </div>
                <div class="w-[97%] lg:w-[80%] mx-auto">
                    <h1 class='isBoldCondensed text-6xl mt-4 text-center text-yellow'>
                        <?php _e("NEWS VAULT", 'dm') ?>
                    </h1>
                    <div id='baultNews' style="overflow-y: scroll;height: 35rem;">
                        <?php $j = 1;
                        while (have_rows('baultnews')):
                            the_row();
                            $img = get_sub_field('img');
                            $title = get_sub_field('title');
                            $subTitle = get_sub_field('subtitle');
                            $link = get_sub_field('link');
                            ?>
                            <div class="flex isBoldCondensed justify-evenly">
                                <a href="<?php echo $link ?>" class='m-auto' target="_blank" rel="noopener noreferrer">
                                    <img class='w-10 lg:w-12 xl:w-16 hover:scale-105 transition-transform'
                                        src="<?php echo $iconlink ?>" alt="">
                                </a>
                                <div class="w-[82%] h-28 flex flex-col justify-center overflow-x-hidden">
                                    <a href="<?php echo $link ?>"
                                        class='text-gray-50 xl:text-[1.3rem] 2xl:text-3xl hover:text-gray-50 hover:underline decoration-primary transition-transform'
                                        target="_blank" rel="noopener noreferrer">
                                        <?php echo $title ?>
                                    </a>
                                    <h1 class='text-yellow text-xl'><?php echo $subTitle ?></h1>
                                </div>
                            </div>
                            <?php
                            $j++;
                            if ($j == 3) { ?>
                                <script type="text/javascript">
                                    const gallery = document.getElementById("baultNews");
                                    gallery.style.overflowY = "scroll";
                                    gallery.style.height = 35 + "rem";
                                </script>
                            <?php }endwhile; ?>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>

        <!-- News 3 -->
        <?php while (have_rows('new3')):
            the_row();
            $img = get_sub_field('img');
            $link = get_sub_field('link');
            ?>
            <div data-aos="flip-up" data-aos-duration="600" class="mx-auto my-10">
                <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer"><img
                        class='md:pr-8 hover:scale-[1.02] transition-transform' src="<?php echo $img; ?>" alt="">
                </a>
            </div>
        <?php endwhile; ?>

        <!-- News 2 -->
        <?php while (have_rows('new2')):
            the_row();
            $img = get_sub_field('img');
            $link = get_sub_field('link');
            ?>
            <div data-aos="fade-up-left" data-aos-duration="600" data-aos-offset="300" class="mx-auto my-10">
                <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                    <img class='md:pr-8 hover:scale-[1.02] transition-transform' src="<?php echo $img; ?>" alt="">
                </a>
            </div>
        <?php endwhile; ?>


        <!-- News 5 -->
        <?php while (have_rows('new5')):
            the_row();
            $img = get_sub_field('img');
            $title = get_sub_field('title');
            $subTitle = get_sub_field('subtitle');
            $content = get_sub_field('content');
            $link = get_sub_field('link');
            ?>
            <div data-aos="flip-up" data-aos-duration="600" class="md:pt-12 pt-8 flex flex-col items-end">
                <a href="<?php echo $link; ?>" class='contents' target="_blank" rel="noopener noreferrer"><img
                        class='md:pr-4 hover:scale-105 transition-transform' src="<?php echo $img; ?>" alt="">
                </a>
                <div class="md:pr-4 w-full">
                    <div class="flex justify-between mt-3 md:mt-6">
                        <div class="flex flex-col justify-evenly">
                            <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer"
                                class='leading-loose isBlackCond text-3xl sm:text-5xl hover:underline decoration-primary hover:text-secondary decoration-2 text-secondary 2xl:text-7xl 2xl:leading-[3.5rem] xl:text-6xl lg:text-4xl md:text-3xl'>
                                <?php echo $title ?><br><span
                                    class='isBoldCondensed text-xl sm:text-3xl text-yellow 2xl:text-5xl xl:text-4xl lg:text-3xl md:text-2xl'><?php echo $subTitle ?>
                                </span></a>
                        </div>
                    </div>
                    <h2 class='mt-2 md:mt-4 isCond text-primary2 2xl:text-4xl xl:text-3xl md:text-2xl text-2xl'>
                        <?php echo $content ?>
                    </h2>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="w-[98%] sm:w-11/12 mx-auto md:w-2/4 md:border-l-4 border-l-secondary4 dark:border-l-secondary3">

        <?php while (have_rows('new4')):
            the_row();
            $background = get_sub_field('background');
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $subTitle = get_sub_field('subtitle');
            $content = get_sub_field('content');
            $icon2 = get_sub_field('icon2');
            $icont = get_sub_field('icont');
            $title2 = get_sub_field('title2');
            $content2 = get_sub_field('content2');
            $link2 = get_sub_field('link2');
            ?>
            <div data-aos="flip-up" data-aos-duration="600"
                class="2xl:w-11/12 overflow-visible md:w-[97%] mt-8 rounded-xl p-2  md:mt-12 mx-auto bg-gradient-to-b from-secondary to-primary">
	
				<div class="rounded-xl bg-secondary4 p-1 md:p-3">
					<img class='mb-2 lg:relative lg:bottom-4 xl:bottom-8' src="<?php echo $icont; ?>" alt="">
					<div id="interviews" class="rounded-xl bg-secondary4 p-1 md:p-3" style="height: 51vw;overflow-y: scroll;">
                    
					 <a href=" ">
						<img style="width:38vw" class="mx-auto" src="https://datamares.org/wp-content/uploads/2025/05/Recurso-1-11.webp">
						</a>
					
					
					 <div style="padding: 2vh;display: flex;gap: 2vh;" class="w-[98%] mx-auto rounded-md  p-8">
                        <img src="https://datamares.org/wp-content/uploads/2024/09/Asset-1-1.webp" class=" rounded-md"
                            style="width: 10vw;">
                        <div style="display: flex;flex-direction: column;justify-content: space-between;" class="px-4">
                            <div>
                                <h1 style="font-size: 2.2vw;font-family: 'myriad-pro-condensed';font-weight: bold;color: white;"
                                    class="MBlackCondensed leading-none">LOS NIÑOS PREGUNTAN
                                </h1>
                                <h1 style="font-size: 1.4vw;font-family: 'myriad-pro-condensed';color: white;font-weight: bold;"
                                    class="leading-none">
                                    <?php _e("¿Qué hay en las profundidades del océano?, ¿cómo es que el cambio climático está afectando a los mares y océanos?", 'dm') ?>
                                </h1>


                            </div>
                            <a href="https://fb.watch/ugh0s_uXga/" target="_blank" rel="noopener noreferrer"
                                class="hover:scale-105 transition-transform border-4 hover:text-gray-50 text-center justify-center flex isBoldCondensed text-gray-50 md:text-sm xl:text-base mt-1 2xl:text-2xl border-secondary4 rounded-xl px-6 bg-gradient-to-b from-secondary2 to-yellow"
                                style="width: 14vh;">VIDEO</a>
                        </div>
                    </div>

                    <div style="padding: 2vh;display: flex;gap: 2vh;" class="w-[98%] mx-auto rounded-md  p-8">
                        <img src="https://datamares.org/wp-content/uploads/2024/09/Asset-2-1.webp" class=" rounded-md"
                            style="width: 10vw;">
                        <div style="display: flex;flex-direction: column;justify-content: space-between;" class="px-4">
                            <div>
                                <h1 style="font-size: 2.2vw;font-family: 'myriad-pro-condensed';font-weight: bold;color: white;"
                                    class="MBlackCondensed leading-none">DATAMARES EN LA UNAM
                                </h1>
                                <h1 style="font-size: 1.4vw;font-family: 'myriad-pro-condensed';color: white;font-weight: bold;"
                                    class="leading-none">
                                    <?php _e("a directora de dataMares en conversación con la
                                    comunidad universitaria.", 'dm') ?>
                                </h1>


                            </div>
                            <a href="https://www.youtube.com/watch?v=zOhxYEQnZOs" target="_blank" rel="noopener noreferrer"
                                class="hover:scale-105 transition-transform border-4 hover:text-gray-50 text-center justify-center flex isBoldCondensed text-gray-50 md:text-sm xl:text-base mt-1 2xl:text-2xl border-secondary4 rounded-xl px-6 bg-gradient-to-b from-secondary2 to-yellow"
                                style="width: 14vh;">VIDEO</a>
                        </div>
                    </div>
					
					
					
                    <div style="
    background-image: url(https://datamares.org/wp-content/uploads/2024/01/image-9.png);
    padding: 2vh;
    background-size: contain;
    display: flex;
    gap: 2vh;
" class="w-[98%] mx-auto rounded-md my-8 p-8 mt-2">
                        <img src="https://datamares.org/wp-content/uploads/2024/06/WhatsApp-Image-2024-06-11-at-12.56.49.jpeg"
                            class=" rounded-md" style="
    width: 10vw;margin:auto;
">
                        <div style="
    display: flex;
    flex-direction: column;
    justify-content: space-between;
" class="px-4">
                            <div>
                                <h1 style="
    font-size: 2.2vw;
    font-family: 'myriad-pro-condensed';
    font-weight: bold;
    color: white;
" class="MBlackCondensed leading-none">LA CIENCIA QUE SOMOS
                                </h1>
                                <h1 style="
    color: #00302E;
    font-size: 1.4vw;
    font-family: 'myriad-pro-condensed';
    font-weight: bold;
" class="leading-none">     <?php _e("CONOCE LOS OCÉANOS.</br>
07 DE JUNIO 2024", 'dm') ?></h1>
                                <h1 style="
    font-size: 1.4vw;
    font-family: 'myriad-pro-condensed';
    color: white;
    font-weight: bold;
" class="leading-none">     <?php _e("La directora general de dataMares nos cuenta de los retos para conservar y defender los ecosistemas marinos.", 'dm') ?>
                                </h1>


                            </div>
                            <a href="https://fb.watch/sDdVmbT-IS/" target="_blank" rel="noopener noreferrer"
                                class="hover:scale-105 transition-transform border-4 hover:text-gray-50 text-center justify-center flex isBoldCondensed text-gray-50 md:text-sm xl:text-base mt-1 2xl:text-2xl border-secondary4 rounded-xl px-6 bg-gradient-to-b from-secondary2 to-yellow"
                                style="
    width: 14vh;
">VIDEO</a>
                        </div>
                    </div>
                    <div class="w-[98%] mx-auto flex flex-col lg:flex-row justify-between mb-4">
                        <div class="w-2/4 mx-auto lg:w-3/12 flex flex-col justify-evenly">
                            <img src="<?php echo $icon2; ?>" alt="">
                            <a href="<?php echo $link2; ?>" target="_blank" rel="noopener noreferrer"
                                class='hover:scale-105 transition-transform border-4 hover:text-gray-50 text-center justify-center flex mx-auto isBoldCondensed text-gray-50 md:text-sm xl:text-base mt-1 2xl:text-2xl border-secondary4 rounded-xl px-6 bg-gradient-to-b from-secondary2 to-yellow'>
                                <?php _e("LISTEN", 'dm') ?></a>
                        </div>
                        <div class="w-11/12 lg:w-[60%] mx-auto text-gray-50 text-center md:text-left">
                            <h1 class='isBlackCond 2xl:text-5xl xl:text-4xl md:text-3xl text-2xl'><?php echo $title2; ?>
                            </h1>
                            <h1 class='isBoldCondensed 2xl:text-3xl xl:text-2xl lg:text-lg md:text-base'>
                                <?php echo $content2; ?>
                            </h1>
                        </div>
                    </div>
						<img src="https://datamares.org/wp-content/uploads/2025/02/Asset-1.webp" class="my-20w mx-auto w-[98%] rounded-md" style="
">

                    <div class="w-[98%] bg-cover bg-bottom mx-auto rounded-md mb-2"
                        style="background-image: url(<?php echo $background; ?>);">
                        <h1 style="font-size: 2.1vw;font-family: 'myriad-pro-condensed';color: white;font-weight: bold;"
                            class="leading-none text-center">dataMares en LA PANDILLA</h1>
                        <h1 style=" font-size: 1.4vw;font-family: 'myriad-pro-condensed'; color: white;font-weight: bold;"
                            class="leading-none text-center px-8">
                            <?php _e("Nacho Casas and his gang interview the dataMares team to talk about the marine world.", 'dm') ?>
                        </h1>
                        <div class="flex flex-col lg:flex-row"
                            style="padding-top: 2rem;padding-bottom: 2rem;padding-left: 1rem;padding-right: 1rem;">
                            <?php while (have_rows('audios')):
                                the_row();
                                $img = get_sub_field('img');
                                $firstname = get_sub_field('firstname');
                                $lastname = get_sub_field('lastname');
                                $employment = get_sub_field('employment');
                                $audio = get_sub_field('audio');
                                ?>

                                <button onclick="launchModal('audio','<?php echo $audio ?>')">
                                    <img style="width:80%;" class='w-1/2' src="<?php echo $img ?>" alt="">
                                </button>

                            <?php endwhile; ?>
                        </div>
                    </div>
					<div class="w-[98%] mx-auto md:flex justify-between my-4" style="">
						<div>
                    <img onclick="launchModal('video','https://datamares.org/wp-content/uploads/2023/02/Solorzano-Entrevista-CLS_26-enero-2023.mp4')" class="hover:scale-[1.02] transition-transform" src="https://datamares.org/wp-content/uploads/2024/09/Asset-4.webp" alt="">
                </div>
						<a href="https://youtu.be/g-206ut8f1k?si=DcjUC2annFRiHJjH" target="_blank" rel="noopener noreferrer">
                    <img class="hover:scale-[1.02] transition-transform" src="https://datamares.org/wp-content/uploads/2024/09/Asset-3.webp" alt="">
                </a>
					</div>
                </div>
					
				</div>

                
            </div>

            
        <?php endwhile; ?>
        <!-- News 6 -->
        <?php while (have_rows('new7')):
            the_row();
            $img = get_sub_field('img');
            $title = get_sub_field('title');
            $subTitle = get_sub_field('subtitle');
            $content = get_sub_field('content');
            $linktabl = get_sub_field('link');
            ?>
            <div data-aos="flip-up" data-aos-duration="600" class="md:pt-12 pt-8 w-11/12 mx-auto flex flex-col items-end">
                <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer"
                    class='hover:text-primary decoration-2 hover:underline decoration-primary w-full flex text-right items-baseline isBlackCond text-xl sm:text-3xl text-primary 2xl:text-5xl xl:text-4xl lg:text-3xl md:text-2xl'>
                    <?php echo $title ?> <span
                        class='isBoldCondensed text-3xl sm:text-5xl text-secondary 2xl:text-7xl xl:text-6xl lg:text-4xl md:text-3xl'>
                        <?php echo $subTitle ?></span></a>
                <a href="<?php echo $linktabl; ?>" target="_blank" rel="noopener noreferrer">
                    <img class='hover:scale-[1.02] transition-transform' src="<?php echo $img; ?>" alt="">
                </a>
                <div class="w-full">
                    <h2 class='isCond mt-6 text-zinc-900 dark:text-gray-50 2xl:text-4xl xl:text-3xl md:text-2xl text-2xl'>
                        <?php echo $content ?>
                    </h2>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</div>


<!-- Reports Section -->
<div class="mb-10 w-11/12 md:mt-12 mt-8 bg-[#bbbfbf] border-8 border-secondary4 dark:border-secondary3 rounded-2xl sm:p-8 mx-auto flex flex-col-reverse lg:flex-row"
    style="flex-direction: column-reverse;">

    <?php while (have_rows('reports')):
        the_row();
        $title = get_sub_field('title');
        $subTitle = get_sub_field('subtitle');
        $content = get_sub_field('content');
        ?>
        <div class="w-[97%] mx-auto rounded-lg 2xl:mr-auto  flex justify-evenly">
            <div class="splide flex w-11/12 mx-auto" aria-label="Splide Basic HTML Example">
                <div class="splide__track w-11/12 mx-auto">
                    <ul class="splide__list">
                        <?php while (have_rows('report')):
                            the_row();
                            $img = get_sub_field('img');
                            $link = get_sub_field('link');
                            $imgdate = get_sub_field('imgdate');
                            ?>

                            <?php if ($imgdate): ?>
                                <li class='group splide__slide flex justify-center items-center'>
                                    <img class="w-64 group-hover:opacity-0 transition-opacity absolute" src="<?php echo $img; ?>"
                                        alt="">
                                    <img class="w-64 group-hover:opacity-100 transition-opacity opacity-0"
                                        src="<?php echo $imgdate; ?>" alt="">
                                </li>
                            <?php endif; ?>

                            <?php if (!$imgdate): ?>
                                <li class='splide__slide flex justify-center items-center'>
                                    <a class='flex items-center' href="<?php echo $link; ?>">
                                        <img class='w-64 hover:scale-105 transition-transform' src="<?php echo $img; ?>" alt="">
                                    </a>
                                </li>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-4/5 text-center mx-auto mb-4 sm:mb-8 lg:mb-auto rounded-lg  text-[#231f20]">
            <h1 class='isBlackCond 2xl:text-4xl xl:text-2xl lg:text-xl md:text-2xl text-sm'><?php echo $title; ?></h1>
            <h1 class='isBlackCond 2xl:text-6xl xl:text-5xl lg:text-3xl md:text-4xl text-lg'><?php echo $subTitle; ?></h1>
            <h1 class='isCond 2xl:text-3xl xl:text-xl lg:text-lg md:text-xl text-xs'><?php echo $content; ?></h1>
        </div>

    <?php endwhile; ?>


</div>
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
        <a class="" href="https://datamares.org/dwd/programa-de-actividades-filuni/">
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
    <img width="447" height="387" class="w-full h-[95%] m-auto"
        src="https://datamares.org/wp-content/uploads/2024/08/PROGRAMA-DE-ACTIVIDAES-FILUNI-2024.svg" alt="" />
</div>

<div id='modalNews' class="modal">
    <div onclick="launchModal('close')" class="modal-background"></div>
    <div class="modal-content">
        <!-- Any other Bulma elements you want -->
    </div>
    <button onclick="launchModal('close')" class="modal-close is-large" aria-label="close"></button>
</div>

<?php get_footer(); ?>
<script>

    let modal = document.getElementById("tlmodal");

    function showModal() {
        window.scrollTo(0, 0);
        modal.classList.remove("hidden");
        modal.classList.add("flex");
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


    function launchModal(type, file) {
        $('#modalNews').toggleClass('is-active');
        if (type === 'audio') {
            $('.modal-content').append('<img style="width: 25rem;" src="https://datamares.org/wp-content/uploads/2023/02/Group-7.png">');
            $('.modal-content').append('<audio class="relative bottom-[85%] w-11/12 audio mx-auto" controls><source src=' +
                file + ' type="audio/ogg"></audio>');
            $('.audio').prop("volume", 0.2);
            $('.audio').trigger('play');
        }

        if (type === 'video') {
            $('.modal-content').append(
                '<video class="w-11/12 video mx-auto p-4 bg-secondary rounded-3xl" controls><source src=' +
                file + ' type="video/mp4"></video>');
            $('.audio').prop("volume", 0.2);
            $('.audio').trigger('play');
        }

        if (type === 'close') {
            $('.modal-content').empty();
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        new Splide('.splide', {
            breakpoints: {
                1350: {
                    arrows: true,
                    perPage: 4
                },
                1050: {
                    arrows: true,
                    perPage: 1,
                },
                480: {
                    arrows: true,
                    perPage: 1,
                },
            },
            arrows: true,
            perPage: 5,
            perMove: 1,
            rewind: true,
            pagination: false,
            arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
        }).mount();
    });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>