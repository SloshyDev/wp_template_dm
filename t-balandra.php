<?php get_header();
/*template name: Balandra*/
?>
<?php if (has_post_thumbnail($post->ID)) { ?>
    <?php $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
} ?>
<!-- Banner -->
<?php if ($image): ?>
    <img style="width:100%" src="<?php echo $image; ?>" width="1910" height="275" class="mx-auto" alt="Banner News" />
<?php endif; ?>

<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/caboPulmo.css">

<style>
.last\:block:last-child {
    display: block;
}
	
	.apexcharts-legend-text {
        position: relative;
        font-size: 1.6vw !important;
        font-family: "myriad-pro-condensed" !important;
        font-weight: 700 !important;
    }

    .apexcharts-pie-series path {
        stroke-width: 0.3vw !important;
    }

    .apexcharts-text tspan {
        margin-top: 1rem;
        fill: #f9fafb !important;
        font-size: 3.6vw;
        font-family: "myriad-pro" !important;
        font-weight: 900 !important;
        font-style: normal !important;
    }



    .apexcharts-datalabel {
        fill: #4c7738 !important;
        font-size: 7.5vw;
        font-family: "myriad-pro" !important;
        font-weight: 900 !important;
        font-style: normal !important;
    }

    @media (min-width: 768px) {
        .apexcharts-text tspan {
            font-size: 1.6vw;
        }

        .apexcharts-datalabel {
            font-size: 4.375vw;
        }
		.md\:px-6 {
    padding-left: 1.5rem !important;
    padding-right: 1.5rem !important;
}
		.md\:w-\[30\.208vw\] {
    width: 30.208vw;
}
    }
	.fill-\[\#237370\] {
    fill: #237370;
}
	.group:hover .group-hover\:fill-\[\#EE9438\] {
    fill: #EE9438;
}
	.border-t-gray-50 {
    border-top-color: #fff;
}
	@font-face {
        font-family: 'Academy Engraved LET';
        src: url(../Fonts/AcademyEngravedLetPlain.woff)format('woff');
        font-weight: 100;
        font-style: normal;
        font-display: swap
    }

    .MBold {
        font-family: "myriad-pro", sans-serif;
        font-weight: 700;
        font-style: normal
    }

    .MRegular {
        font-family: "myriad-pro", sans-serif;
        font-weight: 200;
        font-style: normal
    }

    .isSansExtraBold {
        font-family: "OpenSansExtraBold"
    }

    .MCond {
        font-family: "myriad-pro-condensed", sans-serif;
        font-weight: 400;
        font-style: normal
    }

    .MBoldCondensed {
        font-family: "myriad-pro-condensed", sans-serif;
        font-weight: 700;
        font-style: normal
    }

    .MBlack {
        font-family: "myriad-pro", sans-serif;
        font-weight: 900;
        font-style: normal
    }

    .MBlackCondensed {
        font-family: "myriad-pro-condensed", sans-serif;
        font-weight: 900;
        font-style: normal
    }

    .isAcademy {
        font-family: 'Academy Engraved LET', sans-serif
    }

    .apexcharts-tooltip * {
        font-family: "myriad-pro", sans-serif;
        font-weight: 700;
        font-style: normal
    }

    .apexcharts-tooltip-text-y-label {
        display: none
    }

    .apexcharts-canvas {
        margin: auto
    }

    .dark::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #111827
    }

    .dark::-webkit-scrollbar {
        width: 10px;
        background-color: #111827
    }

    .dark::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #1f4c5c
    }

    .summary::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #3d7b91;
        border-radius: 10px
    }

    .summary::-webkit-scrollbar {
        width: 10px;
        background-color: #3d7b91;
        border-radius: 10px
    }

    .summary::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #4b5563
    }

    #baultNews::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #00302e;
        border-radius: 10px
    }

    #baultNews::-webkit-scrollbar {
        width: 10px;
        background-color: #00302e;
        border-radius: 10px
    }

    #baultNews::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #D4DC27
    }

    .apexcharts-tooltip-text-y-value {
        margin-left: 0 !important
    }

    .apexcharts-tooltip-text {
        margin: auto
    }

    .apexcharts-menu-icon {
        display: none
    }

    #numeralia {
        cursor: url(https://datamares.org/wp-content/uploads/2023/03/Group-23.svg), auto
    }

    .cursor-zoom {
        cursor: url(../len.svg), zoom-in
    }

    .apexcharts-datalabel-value {
        font-family: "myriad-pro-condensed", sans-serif !important;
        font-weight: 900 !important;
        font-style: normal;
        color: white
    }
</style>


<style>
    @media (min-width: 768px) {

        .md\:text-\[3vw\] {
            font-size: 3vw;
        }

        .md\:w-4\/5 {
            width: 77%;
        }

        .md\:w-\[12vw\] {
            width: 16vw;
        }
		.md\:w-\[17\.135vw\] {
    width: 27.135vw;
}
		.md\:text-xl {
    font-size: .9vw;
}
    }
</style>

<?php 
$anpVisit = get_field('anp-visit');
$anpVerde = get_field('anp-verde');
$anpAzul= get_field('anp-azul');
?>

<section data-aos="fade-up" data-aos-id="number1" class="my-8 md:ml-4 md:flex justify-between items-end">
    <div class="w-[97%] mx-auto md:w-4/5 md:px-0">
        <div class="md:justify-start flex items-center gap-2 md:gap-4 md:ml-2 2xl:ml-8 mb-2">
            <img class="w-[11vw] md:w-[4.7vw]" width="87" height="87"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/calendario.svg" alt="" />
            <h1 class="MBlackCondensed text-[5.5vw] md:text-4m text-[#4c7738]">
                <?php _e("DATE ESTABLISHED", 'dm') ?>: <span class="text-[#aeb521]">
                    <?php echo esc_html(get_field('dateEstablished')); ?>
                </span>
            </h1>
        </div>
        <div class="flex items-center gap-[2vw] md:gap-4 xl:ml-2 2xl:ml-8">
            <img class="w-[11vw] md:w-[4.7vw]" width="87" height="87"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/categoria.svg" alt="" />
            <h1 class="MBlackCondensed text-9m md:text-2m leading-none text-[#4C7738]">
                <?php _e("MANAGEMENT CATEGORY", 'dm') ?>:
                <span class="text-[#aeb521]">
                    <?php echo esc_html(get_field('managementCategory')); ?>
                </span>
            </h1>
        </div>
        <div
            class=" w-fit md:w-auto px-[5vw] mb-0 mx-auto md:px-0 md:flex flex-col md:flex-row items-center justify-around md:justify-start gap-4 py-8 md:mr-[1vw] bg-[#4C7738] rounded-md">
            <div class="flex items-center gap-[2vw] md:gap-4 xl:ml-2 2xl:ml-8">
                <img class="w-[16vw] md:w-[4.7vw]" width="87" height="87"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/superficie.svg" alt="" />
                <h1 class="MBlackCondensed gap-1 items-end block text-[8vw] md:text-2m leading-none text-gray-50">
                    <?php _e("TOTAL AREA", 'dm') ?>: <br class='hidden md:block'>
                    <span
                        class="number1 block w-[20vw] md:w-[12vw] text-[#aeb521] text-[12vw] md:text-[3vw] leading-none">
                        <?php echo esc_html(get_field('totalArea')); ?>
                    </span>
                    <?php _e("HECTARES", 'dm') ?>
                </h1>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-[.3vw] bg-[#aeb521] h-[11vw] rounded-3xl hidden md:block"></div>
                <img width="178" height="208" class="w-[16vw] md:w-[6vw]"
                    src="<?php echo $anpAzul?>" alt="" />
                <div class="">
                    <h1 id="hmarinas" style="width: 15.5vw;"
                        class=" MBlackCondensed text-[12vw] md:text-[3vw] leading-none number1 text-[#aeb521] dark:text-[#007080]">
                        <?php echo esc_html(get_field('marineArea')); ?>
                    </h1>
                    <h1 class="MBlackCondensed text-[8vw] uppercase md:text-3m leading-none text-gray-50">
                        <?php _e("HECTARES IN</br>MARINE AREA", 'dm') ?>
                    </h1>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-[.3vw] bg-[#aeb521] h-[11vw] rounded-3xl hidden md:block"></div>
                <img width="178" height="208" class="w-[16vw] md:w-[6vw]"
                    src="<?php echo $anpVerde?>" alt="" />
                <div class="">
                    <h1
                        class="MBlackCondensed text-[12vw] md:text-[3vw] leading-none text-[#aeb521] number1 dark:text-[#007080]">
                        <?php echo esc_html(get_field('terrestrialArea')); ?>
                    </h1>
                    <h1 class="MBlackCondensed text-[8vw] uppercase md:text-3m leading-none text-gray-50">
                        <?php _e("HECTARES IN</br>TERRESTRIAL AREA", 'dm') ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="w-1/2 mx-auto md:w-1/5 overflow-hidden rounded-xl md:rounded-l-3xl bg-[#4c7738] h-fit">
        <div class="mt-5 bg-[#0a3518] p-2">
            <a href="<?php  echo _e('https://datamares.org/npa/','dm'); ?>" target="_blank"
                class="flex items-center transition-transform hover:scale-105">
                <img width="60" height="60" class="w-[6vw] md:w-[3.125vw]"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="" />
                <h1 class="MBlackCondensed ml-4 text-6m md:text-3xl text-gray-50">
                    <?php _e("VISIT OUR NPA HOME PAGE", 'dm') ?>
                </h1>
            </a>
        </div>
        <a class="my-4 md:mb-0 md:mt-4 flex transition-transform hover:scale-105 pb-[1vw]"
            href="<?php  echo _e('https://datamares.org/npa/','dm'); ?>" target="_blank">
            <img width="260" height="168" class="m-auto w-[20vw] md:w-[13.5vw]"
                src="<?php echo $anpVisit?>" alt="" />
        </a>
    </div>
</section>

<section data-aos="fade-up" class="my-8 ml-4 md:flex justify-between">
    <div class="flex w-full md:px-0 md:w-1/2 flex-col justify-between">
        <div class="flex items-center gap-4 xl:ml-2 2xl:ml-8">
            <img class="w-[11vw] md:w-[4.7vw]" width="87" height="87"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/calendario.svg" alt="" />
            <h1 class="MBlackCondensed text-[5.5vw] md:text-4m text-[#4c7738] leading-none">
                <?php _e("GEOGRAPHIC LOCATION: </br>", 'dm') ?> <span class="text-[#aeb521]">
                    <?php echo esc_html(get_field('geographicLocation')); ?>
                </span>
            </h1>
        </div>
        <div class="flex justify-end">
			<?php if (get_field('mapss')): ?>
			<img width="842" height="478" class="w-11/12 md:mx-0 md:w-[43.854vw]"
                src="<?php the_field('mapss'); ?>" alt="" />
        <?php endif; ?>
            
        </div>
        <div class="w-full rounded-l-3xl my-8 md:m-0 bg-[#aeb521] rounded-r-3xl md:rounded-r-none px-2 md:px-6 py-2">
            <div class="flex gap-3 justify-center items-center" style="margin-right: 5vw;">
                <img style="margin:1vw;width:8.6vw;"
                    src="https://datamares.org/wp-content/uploads/2025/02/Asset-2.svg" alt="">
                <h1 class="MBlack text-[#4c7738] text-6m md:text-5xl leading-none text-center md:text-start">
                    <?php echo esc_html(get_field('dataMap1')); ?>
                </h1>
            </div>
            <div class="h-1 rounded-xl w-full bg-[#005f7e]"></div>
            <div class="mt-1 md:mt-4 " style="margin-left:1vw;">
                <div class="flex gap-2 md:gap-6 items-cente text-gray-50 MBlackCondensed">
                    <img class="w-[11.5vw] md:w-[4.531vw] my-auto"
                        src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/temperatura.svg" alt="">
                    <div class="">
                        <h1 class="text-[11vw] md:text-6m leading-none">
                            <?php echo esc_html(get_field('annualTemperature')); ?> °C
                        </h1>
                        <h1 class="text-6m md:text-8xl leading-none">
                            <?php _e("MEAN ANNUAL TEMPERATURE", 'dm') ?>
                        </h1>
                    </div>
                </div>
                <div class="flex gap-2 md:gap-6 items-cente text-gray-50 MBlackCondensed">
                    <img class="w-[11.5vw] md:w-[4.531vw] my-auto"
                        src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/precipitacion.svg" alt="">
                    <div class="">
                        <h1 class="text-[11vw] md:text-8m leading-none">
                            <?php echo esc_html(get_field('annualRainfall')); ?> mm
                        </h1>
                        <h1 class="text-6m md:text-8xl leading-none">
                            <?php _e("AVERAGE ANNUAL RAINFALL", 'dm') ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full  md:px-0 md:w-1/2">
        <div class="flex justify-start flex-col">
            <div>
             <?php the_field('map');  ?>
            </div>
            <div class="maps">
                
                <div class="hidden last:block m3">
                    <img width="877" height="1164" class="w-11/12 md:mx-0 md:w-[45.677vw]"
                        src="<?php the_field('mapab');  ?>" alt="" />
                </div>
                <div class="hidden last:block m4">
                    <img width="877" height="1164" class="w-11/12 md:mx-0 md:w-[45.677vw]"
                        src="<?php the_field('mapab');  ?>" alt="" />
                </div>
				<div class="hidden last:block m1">
                    <img width="877" height="1164" class="w-11/12 md:mx-0 md:w-[45.677vw]"
                        src="<?php the_field('mapab');  ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-up">
    <div class="flex justify-start">
        <div class="w-1/2 md:w-auto group flex cursor-pointer justify-center md:justify-start bg-[#4c7738] md:pl-8"
            onclick="changeCarrousel('atractivos')">
            <img width="60" height="60" class="mr-2 w-[6vw] md:w-[3.125vw] transition-transform group-hover:scale-105"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="" />
            <h1
                class="MBlack z-10 text-9m md:text-3m text-gray-50 transition-colors group-hover:text-[#aeb521] md:ml-auto">
                <?php _e("ATTRACTIONS", 'dm') ?>
            </h1>
        </div>
        <div
            class="hidden md:block md:w-4 border-t-[4.167vw] border-l-[4.167vw] border-r-0 border-solid border-t-[#aeb521] border-l-[#4c7738] border-r-[#4c7738] dark:border-t-[#aeb521]">
        </div>
        <div class="w-1/2 md:w-auto group flex justify-center md:justify-start cursor-pointer bg-[#aeb521]"
            onclick="changeCarrousel('amenazas')">
            <img width="60" height="60" class="mr-2 w-[6vw] md:w-[3.125vw] transition-transform group-hover:scale-105"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="" />
            <h1
                class="MBlack z-10 text-9m md:text-3m text-gray-50 transition-colors group-hover:text-[#4c7738] md:ml-auto">
                <?php _e("THREATS", 'dm') ?>
            </h1>
        </div>
        <div
            class="hidden md:block md:w-[52%] border-t-[4.167vw] border-l-[4.167vw] border-r-0 border-solid border-t-gray-50 border-l-[#aeb521] border-r-[#aeb521] dark:border-t-gray-900">
        </div>
    </div>

    <?php if (have_rows('atractivos')): ?>
        <section id="atractivos" class="splide mx-auto bg-[#4c7738]  min-h-[22vw]" aria-label="Carrousel ATRACTIVOS">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while (have_rows('atractivos')):
                        the_row(); ?>

                        <li class="splide__slide flex flex-col py-8">
                            <img width="324" height="215" class="mx-auto w-[75%] md:w-[16.8vw] rounded-lg shadow-xl"
                                src="<?php the_sub_field('img'); ?>" alt="" />
                            <div class="mx-auto w-[75%] md:w-[16.8vw]">
                                <h1 class="MBlack text-9m md:text-4xl text-[#aeb521] leading-none">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                                <h1 class="MBold text-6m md:text-2xl leading-none text-gray-50">
                                    <?php the_sub_field('content'); ?>
                                </h1>
                                <h1 class="MBlack text-5m md:text-base text-[#aeb521]">
                                    <?php the_sub_field('from'); ?>
                                </h1>
                            </div>
                        </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('amenazas')): ?>
        <section id="amenazas" class="splide mx-auto hidden bg-[#aeb521] min-h-[22vw]" aria-label="Carrousel ATRACTIVOS">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while (have_rows('amenazas')):
                        the_row(); ?>

                        <li class="splide__slide flex flex-col py-8">
                            <img width="324" height="215" class="mx-auto w-1/3 md:w-[9.323vw] rounded-full shadow-lg"
                                src="<?php the_sub_field('img'); ?>" alt="" />
                            <div class="mx-6 md:mx-auto md:w-[16.8vw] text-center">
                                <h1 class="MBlack text-9m md:text-3xl text-[#003c3a] leading-none mt-2">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                                <h1 class="MBold text-8m md:text-base leading-none text-secondary3">
                                    <?php the_sub_field('content'); ?>
                                </h1>
                            </div>
                        </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>
</section>

<div data-aos="fade-up" data-aos-id="bar" class="bg-secondary4 py-12">
    <div class="MBlack mx-auto w-4/5 md:w-[45.208vw] text-center">
        <h1 class="text-9m md:text-1m leading-none text-gray-50">
            <?php _e("LEVEL OF PROTECTION", 'dm') ?>
        </h1>
        <h1 class="text-5m md:text-2xl text-gray-50 leading-none">
            <?php echo esc_html(get_field('levelOfProtection')); ?>
        </h1>
    </div>
    <div class="mx-[3.2vw] md:mx-[7.2vw] mb-4 flex items-baseline justify-between">
        <img src="https://datamares.org/wp-content/uploads/2025/02/Asset-1-1.svg" class="w-full" >
    </div>
    <div
        class="m-auto grid h-[8vw] md:h-[2.656vw] w-[80vw] grid-cols-6 md:grid-cols-10 md:gap-[.2vw] md:border-[.2vw] gap-[.7vw] border-[.7vw] border-gray-50 bg-gray-50">
        <div class="flex items-center bg-secondary4">
            <div class="absolute flex w-[80vw] items-center">
                <div id="bar" class="h-[2.9vw] md:h-[1vw] bg-[#aeb521]"></div>
                <div
                    class="h-0 w-0 border-t-[3vw] border-b-[3vw] md:border-t-[1.1vw] md:border-b-[1.1vw] border-l-[2.604vw] border-t-transparent border-b-transparent border-l-[#aeb521]">
                </div>
            </div>
        </div>
        <div class="bg-secondary4"></div>
        <div class="bg-secondary4"></div>
        <div class="bg-secondary4"></div>
        <div class="bg-secondary4"></div>
        <div class="bg-secondary4"></div>
        <div class="bg-secondary4 hidden md:block"></div>
        <div class="bg-secondary4 hidden md:block"></div>
        <div class="bg-secondary4 hidden md:block"></div>
        <div class="bg-secondary4 hidden md:block"></div>
    </div>
    <div class="mx-[6vw] flex items-baseline justify-between">
        <div class="MBlackCondensed text-center">
            <h1 class="text-6m leading-none text-gray-50">0%</h1>
            <h1 class="text-4xl leading-none text-gray-50">
                <?php _e("PROTECTION", 'dm') ?>
            </h1>
        </div>
        <div class="MBlackCondensed text-center">
            <h1 class="text-6m leading-none text-gray-50">50%</h1>
            <h1 class="text-4xl leading-none text-gray-50">
                <?php _e("PROTECTION", 'dm') ?>
            </h1>
        </div>
        <div class="MBlackCondensed text-center">
            <h1 class="text-6m leading-none text-gray-50">100%</h1>
            <h1 class="text-4xl leading-none text-gray-50">
                <?php _e("PROTECTION", 'dm') ?>
            </h1>
        </div>
    </div>
</div>



<section data-aos="fade-up" data-aos-id="number3"
    class="bg-[#4c7738] w-11/12 md:w-[95.260vw] mx-auto rounded-3xl md:flex justify-between items-center mt-6">
	<dic style="
    width: 33vw;
    height: 8vw;
    position: fixed;
    top: 0;
    right: 4vw;
    background: #003c3a;
    border-radius: 0vw 1vw 2vw 2vw;
    display: flex;
    justify-content: center;
    align-items: center;
">
     <h1 class="text-[6vw] md:text-4m MBlack leading-none text-white "><?php _e("RICHNESS", 'dm') ?>: 

<span class="number3" ini="133">133</span>
</h1>
 </dic>
   <img src="<?php _e("https://datamares.org/wp-content/uploads/2025/03/data.svg", 'dm') ?>">
</section>

<div data-aos="fade-up" class="mt-6 md:mt-12 w-[95.260vw] mx-auto mb-12 md:mb-24">
    <h1
        class='MBlackCondensed text-[7vw] md:text-6m text-[#4c7738] leading-none md:mb-12 mb-6 md:pl-8 text-center md:text-start'>
        <?php _e("VISIT OUR SECTION", 'dm') ?>
    </h1>
    <a href="https://datamares.org/perfil-de-especie-pargo-amarillo/?lang=es">
        <?php if (get_field('diveAtlas')): ?>
            <img width="1830" height="501"
                class="w-11/12 md:w-[95.260vw] mx-auto  shadow-xl rounded-3xl hover:scale-[1.02] transition-transform"
                src="<?php the_field('diveAtlas'); ?>" alt="">
        <?php endif; ?>

    </a>
</div>

<style>
	@media (min-width: 768px) {
    .md\:w-\[17\.135vw\] {
        height: 18.135vw;
        width: auto;
    }
}
</style>

<div data-aos="fade-up" class="bg-[#4c7738] py-16 px-8">
    <div class="flex items-center justify-center md:justify-start gap-4">
        <img width="127" height="96" class="w-[16vw] md:w-[6.615vw]"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/exc.svg" alt="">
        <h1 class="MBlack text-[6vw] md:text-8xl text-gray-50"><?php _e("YOU MIGHT LIKE", 'dm') ?></h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <div class="">
            <a class="group" href="https://datamares.org/preview/dp_anp-balandra/?lang=es" target="_blank">
                <img width="339" height="187"
                    class="w-11/12 md:w-[17.135vw] shadow-xl mx-auto border-gray-50 border-4 rounded-xl group-hover:scale-105 transition-transform"
                    src="https://datamares.org/wp-content/uploads/2024/10/dataPoster-BALANDRA-min.webp" alt="">
                <div
                    class="w-11/12 md:w-[16.510vw] group-hover:bg-[#aeb521] transition-colors bg-secondary4 border-[#aeb521] border-8 mb-12 md:mb-auto mt-8 rounded-3xl mx-auto">
                    <div class="border-gray-50 border-4 p-2 rounded-2xl flex items-center gap-4">
                        <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
                        <h1 class="MBlack text-9m md:text-xl text-gray-50"><?php _e("dataPoster Balandra", 'dm') ?></h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="">
            <a class="group" href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/6311.pdf 
" target="_blank">
                <img width="339" height="187"
                    class="w-11/12 md:w-[17.135vw] shadow-xl mx-auto border-gray-50 border-4 rounded-xl group-hover:scale-105 transition-transform"
                    src="https://datamares.org/wp-content/uploads/2025/02/Screenshot-2025-02-10-at-12.04.11 a.m..png" alt="">
                <div
                    class="w-11/12 md:w-[16.510vw] group-hover:bg-[#aeb521] transition-colors  bg-secondary4 border-[#aeb521] border-8 mb-12 md:mb-auto mt-8 rounded-3xl mx-auto">
                    <div class="border-gray-50 border-4 p-2 rounded-2xl flex gap-4 items-center">
                        <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
                        <h1 class="MBlack text-9m md:text-xl text-gray-50"><?php _e("Balandra: The coastal forest of La Paz.", 'dm') ?></h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="">
            <a class="group"
                href="https://datamares.org/stories/los-manglares-son-productores-de-pargos/?lang=es  "
                target="_blank">
                <img width="339" height="187"
                    class="w-11/12 md:w-[17.135vw] shadow-xl mx-auto border-gray-50 border-4 rounded-xl group-hover:scale-105 transition-transform"
                    src="https://datamares.org/wp-content/uploads/2025/02/Asset-7.webp" alt="">
                <div
                    class="w-11/12 md:w-[16.510vw] group-hover:bg-[#aeb521] transition-colors bg-secondary4 border-[#aeb521] border-8 mb-12 md:mb-auto mt-8 rounded-3xl mx-auto">
                    <div class="border-gray-50 border-4 p-2 rounded-2xl flex items-center gap-4">
                        <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
                        <h1 class="MBlack text-9m md:text-xl text-gray-50"><?php _e("Mangroves are snapper generators.", 'dm') ?></h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
	
	<style>
	.text-15w {
  font-size: 1.5vw;
}
	</style>
    <div class="md:mt-4">
        <h1 class="MBlack text-[6vw] md:text-1m text-gray-50 text-center md:text-start"><?php _e("SOURCES", 'dm') ?></h1>

        <div class="mb-4 md:my-8 text-white">
            <p class="text-15w  MBold"><a href="https://simec.conanp.gob.mx/ficha.php?anp=131&reg=11" target="_blank"
            rel="noopener noreferrer"> •
            https://simec.conanp.gob.mx/ficha.php?anp=131&reg=11</a></p><br>
    <p class="text-15w  MBold">• Matthew Thomas Costa, Isaí Dominguez-Guerrero, José Cota-Nieto, Exequiel
        Ezcurra and Octavio Aburto-Oropeza
        (2015): Los manglares son productores de pargos. DataMares. InteractiveResource. <a
            href="http://dx.doi.org/10.13022/M3F30F" target="_blank"
            rel="noopener noreferrer">http://dx.doi.org/10.13022/M3F30F</a></p><br>
    <p class="text-15w  MBold"> • SEMARNAT-CONANP. Programa de Manejo: Área de Protección de Flora y
        Fauna Balandra. México. 242 pp. Disponible
        en: <a href="https://simec.conanp.gob.mx/pdf_libro_pm/131_libro_pm.pdf" target="_blank"
            rel="noopener noreferrer">https://simec.conanp.gob.mx/pdf_libro_pm/131_libro_pm.pdf</a></p>
        </div>
        <h1 class="text-gray-50 MBold text-9m md:text-4xl leading-none text-center md:text-start"><?php _e("UPDATE", 'dm') ?>: <br
                class="md:hidden"> <span class="MBlack text-[#aeb521]"><?php _e("FEBRUARY 2025", 'dm') ?></span></h1>
    </div>
</div>

<?php if (have_rows('carrousel')): ?>
    <section id="carrousel" class="splide mx-auto my-4 md:my-16" aria-label="Carrousel ATRACTIVOS">
        <div class="splide__track">
            <ul class="splide__list">
                <?php while (have_rows('carrousel')):
                    the_row(); ?>

                    <li class="splide__slide flex flex-col py-8">
                        <img width="324" height="215" class="mx-auto w-3/4 md:w-[16.8vw]" src="<?php the_sub_field('img'); ?>"
                            alt="" />
                    </li>

                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
	
	<div class="modal w-auto">
    <div class="modal-background close"></div>
	
    <div class="modal-content p-0 w-2/3"style="
    position: relative;
">
        <style type="text/css">
			.hover\:shadow-xl:hover {
    color: white; 
    --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / .1),0 8px 10px -6px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
			.modal-card, .modal-content {
    max-height: calc(100vh - 250px);
}
        </style>
        <style type="text/css">
.tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
.tg td{background-color:#fff;border-bottom-width:1px;border-color:#ccc;border-style:solid;border-top-width:1px;
  border-width:0px;color:#333;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;
  word-break:normal;}
.tg th{background-color:#f0f0f0;border-bottom-width:1px;border-color:#ccc;border-style:solid;border-top-width:1px;
  border-width:0px;color:#333;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;
  padding:10px 5px;word-break:normal;}
.tg .tg-buh4{background-color:#f9f9f9;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-0lax">dataMares Metadatos</th>
    <th class="tg-0lax"></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-buh4">Última actualización:</td>
    <td class="tg-buh4">04/01/2023</td>
  </tr>
  <tr>
    <td class="tg-0lax">Título del Proyecto:</td>
    <td class="tg-0lax">Monitoreo Ecológico en el Golfo de California y costa del Pacífico</td>
  </tr>
  <tr>
    <td class="tg-buh4">Resumen:</td>
    <td class="tg-buh4">Los datos ecológicos sobre peces e invertebrados se colectaron bajo el liderazgo del Centro para la Biodiversidad Marina y la Conservación A.C. (CBMC) como parte del programa de monitoreo ecológico de largo plazo del Programa Marino del Golfo de California. Este esfuerzo incluye a científicos y estudiantes de la Universidad Autónoma de Baja California Sur in La Paz, BCS. El programa de monitoreo se ha implementado desde 1998 y ha resultado en la serie de tiempo más larga con datos del Golfo de California. La base de datos incluye información colectada en: Bahía de los Ángeles (2008, 2009, 2010, 2016), Región de las Grandes Islas (2008, 2009, 2010 and 2016) en Baja California; Santa Rosalia (2009, 2010, 2016, 2021, 2022), San Basilio (2019, 2021-2022), Loreto (1998-2019, 2021-2022), El Corredor (2013-2019), La Paz (1998-2019,2022), La Ventana (2013-2018), Cabo Pulmo (1999, 2009-2022), y Cabo San Lucas (1998-2000, 2009-2019, 2021-2022) en Baja California Sur; Islas Marías (2010, 2018), Bahia Banderas (2013), Nayarit; Revillagigedo (2006, 2016, 2017,2021), Colima; Ixtapa Zihuatanejo (2017), Guerrero; Huatulco (2016), Oaxaca. Esta base de datos incluye información de 216 especies de peces y 244 especies de invertebrados.</td>
  </tr>
  <tr>
    <td class="tg-0lax">Key words:</td>
    <td class="tg-0lax">monitoreo, peces, invertebrados, transectos, arrecifes rocosos</td>
  </tr>
  <tr>
    <td class="tg-buh4">Lead investigator:</td>
    <td class="tg-buh4">Ismael Mascareñas</td>
  </tr>
  <tr>
    <td class="tg-0lax">Contact information:</td>
    <td class="tg-0lax">ismael.mascarenas@gocmarineprogram.org</td>
  </tr>
  <tr>
    <td class="tg-buh4">Data Manager:</td>
    <td class="tg-buh4">Santiago Dominguez-Sanchez</td>
  </tr>
  <tr>
    <td class="tg-0lax">Usage Rights &amp; Copyrights:</td>
    <td class="tg-0lax">Ismael Mascareñas Osorio, Octavio Aburto Oropeza, Carlos Sanchez Ortiz</td>
  </tr>
  <tr>
    <td class="tg-buh4">How to cite:</td>
    <td class="tg-buh4">Mascareñas-Osorio, Ismael; Aburto-Oropeza, Octavio; Sanchez Ortiz, Carlos (2018). Monitoreo ecológico de arrecifes en el Golfo de California y océano Pacífico. En dataMares: Ecological Monitoring. UC San Diego Library Digital Collections. https://doi.org/10.6075/J0KH0KJ3</td>
  </tr>
  <tr>
    <td class="tg-0lax">Geographic Area:</td>
    <td class="tg-0lax">Golfo de California, Pacífico Mexicano</td>
  </tr>
  <tr>
    <td class="tg-buh4">Collection dates:</td>
    <td class="tg-buh4">1998-2022</td>
  </tr>
  <tr>
    <td class="tg-0lax">Embargo:</td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4">Primary data sofware or service:</td>
    <td class="tg-buh4">Excel</td>
  </tr>
  <tr>
    <td class="tg-0lax">Dataset name:</td>
    <td class="tg-0lax">em_gc_ecological_monitoring</td>
  </tr>
  <tr>
    <td class="tg-buh4">Methods:</td>
    <td class="tg-buh4">Los datos se generan empleando metodologías estandarizadas adaptadas para el programa de monitoreo de largo plazo del Programa Marino del Golfo de California. Los buzos utilizan transectos como guia (peces=50m x 5m; invertebrados=30m x 1m) durante el monitoreo. Peces: Los transectos se colocan a 20m y 5m de profundidad. Si el sitio de monitoreo no cuenta con fondos rocosos más allá de los 5m de profundidad, esta es la única profundidad que se monitorea. Los peces se cuentan sobre el transecto contando primero los peces demeersales y, en la segunda vuelta, se cuentan los peces bentónicos y crípticos. El área monitoreada total es de 250m cuadrados. Las tallas de los peces también se registra y, junto con información de bibliografía, se utiliza para calcular la biomasa.Invertebrados: Los transectos se colocan a 5m y 20 m de profundidad y se registran las especies sobre el transecto. El buzo cuenta macroinvertebrados epibentónicos (mayores a 2cm) y anota la talla estimada.</td>
  </tr>
  <tr>
    <td class="tg-0lax">Coordinate system:</td>
    <td class="tg-0lax">WGS 1984</td>
  </tr>
  <tr>
    <td class="tg-buh4">Additional Notes:</td>
    <td class="tg-buh4"></td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Nombre de Pestaña:</td>
    <td class="tg-0lax">base</td>
  </tr>
  <tr>
    <td class="tg-buh4">Campo</td>
    <td class="tg-buh4">Descripción</td>
  </tr>
  <tr>
    <td class="tg-0lax">Etiqueta</td>
    <td class="tg-0lax">Peces o Invertebrados</td>
  </tr>
  <tr>
    <td class="tg-buh4">Año</td>
    <td class="tg-buh4">Año de muestreo</td>
  </tr>
  <tr>
    <td class="tg-0lax">Mes</td>
    <td class="tg-0lax">Mes de muestreo</td>
  </tr>
  <tr>
    <td class="tg-buh4">Día</td>
    <td class="tg-buh4">Día de muestreo</td>
  </tr>
  <tr>
    <td class="tg-0lax">IDArrecife</td>
    <td class="tg-0lax">Identificador de arrecife asociado a la tabla Arrecifes Reef</td>
  </tr>
  <tr>
    <td class="tg-buh4">IDEspecie</td>
    <td class="tg-buh4">Identificador de Especie asociado a la tabla de especies</td>
  </tr>
  <tr>
    <td class="tg-0lax">Profundidad</td>
    <td class="tg-0lax">Profundidad del transecto</td>
  </tr>
  <tr>
    <td class="tg-buh4">Transecto</td>
    <td class="tg-buh4">Número del transecto</td>
  </tr>
  <tr>
    <td class="tg-0lax">Area</td>
    <td class="tg-0lax">Área cubierta con el transecto</td>
  </tr>
  <tr>
    <td class="tg-buh4">Talla</td>
    <td class="tg-buh4">Talla de la especie registrada</td>
  </tr>
  <tr>
    <td class="tg-0lax">Cantidad</td>
    <td class="tg-0lax">Número de individuos de la especie registrada por un buzo</td>
  </tr>
  <tr>
    <td class="tg-buh4">Año.Real</td>
    <td class="tg-buh4">Año real del muestreo. Se refiere a muestreos realizados con retraso por razones climáticas (por ejemplo, huracanes); solo apllica a datos de febrero y marzo del 2015.</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4">Nombre de Pestaña:</td>
    <td class="tg-buh4">Arrecifes</td>
  </tr>
  <tr>
    <td class="tg-0lax">Campo</td>
    <td class="tg-0lax">Descripción</td>
  </tr>
  <tr>
    <td class="tg-buh4">IDArrecife</td>
    <td class="tg-buh4">Identificador del arrecife</td>
  </tr>
  <tr>
    <td class="tg-0lax">Región</td>
    <td class="tg-0lax">Región en donde se localiza el arrecife</td>
  </tr>
  <tr>
    <td class="tg-buh4">Isla</td>
    <td class="tg-buh4">Isla o estado mexicano donde se localiza el arrecife</td>
  </tr>
  <tr>
    <td class="tg-0lax">Arrecife</td>
    <td class="tg-0lax">Nombre del arrecife</td>
  </tr>
  <tr>
    <td class="tg-buh4">Habitat</td>
    <td class="tg-buh4">Tipo de hábitat</td>
  </tr>
  <tr>
    <td class="tg-0lax">Latitud</td>
    <td class="tg-0lax">Latitud con 6 decimales with 6 decimals</td>
  </tr>
  <tr>
    <td class="tg-buh4">Longitud</td>
    <td class="tg-buh4">Longitud con 6 decimales</td>
  </tr>
  <tr>
    <td class="tg-0lax">CONCAT</td>
    <td class="tg-0lax">Etiqueta que integra al arrecife y el hábitat</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Nombre de Pestaña:</td>
    <td class="tg-0lax">Especies</td>
  </tr>
  <tr>
    <td class="tg-buh4">Campo</td>
    <td class="tg-buh4">Descripción</td>
  </tr>
  <tr>
    <td class="tg-0lax">IDEspecie</td>
    <td class="tg-0lax">Identificador de la especie</td>
  </tr>
  <tr>
    <td class="tg-buh4">Etiqueta</td>
    <td class="tg-buh4">Pez o invertebrado</td>
  </tr>
  <tr>
    <td class="tg-0lax">Especie</td>
    <td class="tg-0lax">Nombre de la especie</td>
  </tr>
  <tr>
    <td class="tg-buh4">Phylum</td>
    <td class="tg-buh4">Phylum</td>
  </tr>
  <tr>
    <td class="tg-0lax">Taxa1</td>
    <td class="tg-0lax">Especificación taxonómica</td>
  </tr>
  <tr>
    <td class="tg-buh4">Taxa2</td>
    <td class="tg-buh4">Especificación taxonómica</td>
  </tr>
  <tr>
    <td class="tg-0lax">Taxa3</td>
    <td class="tg-0lax">Especificación taxonómica</td>
  </tr>
  <tr>
    <td class="tg-buh4">Familia</td>
    <td class="tg-buh4">Familia</td>
  </tr>
  <tr>
    <td class="tg-0lax">GrupoTrofico</td>
    <td class="tg-0lax">Grupo trófico al cual pertenece la especie (herbívoro, zooplanktívoro, carnívoro, depredador tope).</td>
  </tr>
  <tr>
    <td class="tg-buh4">A_ord</td>
    <td class="tg-buh4">dato origen para calcular peso a partir de talla</td>
  </tr>
  <tr>
    <td class="tg-0lax">B_pen</td>
    <td class="tg-0lax">dato de pendiente para convertir talla en peso</td>
  </tr>
  <tr>
    <td class="tg-buh4">NivelTrofico</td>
    <td class="tg-buh4">Lugar que ocupa la especie en la cadena trófica expresada en número y de acuerdo al alimento y tomado de fishbase</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4">Recursos adicionales:</td>
    <td class="tg-buh4">Rodriguez, A.S, Báez, M, Aburto-Oropeza, O., Arango, G., Masacareñas-Osorio, I., Erisman, B. (2014). Protocolo de Monitoreo: Para Ambientes Marinos Costeros. UC San Diego: Aburto Lab. Retrieved from https://escholarship.org/uc/item/23f1404c</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Alfredo Giron-Nava, Andrew F. Johnson, Octavio Aburto-Oropeza (2014): Richness, density and biomass as measures of health. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M37P4Z</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Arturo Ramirez-Valdez, Andrew F. Johnson, Octavio Aburto-Oropeza, Alfredo Giron-Nava (2014): Mexico’s reefs and underwater data. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M33W21</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Alfredo Giron-Nava, Andrew F. Johnson, Octavio Aburto-Oropeza (2014): Health Index. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3059H</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Alfredo Girón-Nava, Andrew F. Johnson, Octavio Aburto-Oropeza (2014): Riqueza específica, densidad y biomasa como indicadores de salud. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M38G6Z</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Arturo Ramírez-Valdez, Andrew F. Johnson, Octavio Aburto-Oropeza, Alfredo Girón-Nava (2014): Arrecifes de México y los datos bajo el agua. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3201C</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Alfredo Girón-Nava, Octavio Aburto-Oropeza, Andrew F. Johnson (2014): Índice de Salud. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M35P4B</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">José Cota-Nieto, Tomás Plomozo, Isaí Dominguez-Guerrero, Matthew Costa, Octavio Aburto-Oropeza (2014): Snapper Habitat in Gulf of California Mangrove Forests. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3CC77</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">José Cota-Nieto, Tomás Plomozo, Isaí Domínguez-Guerrero, Matthew Costa, Octavio Aburto-Oropeza (2014): Hábitat de pargos en los bosques de manglar del Golfo de California. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M39G68</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Ismael Mascareñas Osorio, Alfredo Girón Nava, Amy Hudson Weaver, Benigno Guerrero, Carlos Sánchez y Octavio Aburto Oropeza (2015): Recovering fishery resources in the Gulf of California. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3D304</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Ismael Mascareñas Osorio, Alfredo Girón Nava, Amy Hudson Weaver, Benigno Guerrero, Carlos Sánchez y Octavio Aburto Oropeza (2015): Recuperando los recursos pesqueros del Golfo de California. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3S88</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4"></td>
  </tr>
  <tr>
    <td class="tg-0lax">dataMares Metadata</td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4">Date of last update:</td>
    <td class="tg-buh4">04/01/2023</td>
  </tr>
  <tr>
    <td class="tg-0lax">Project title:</td>
    <td class="tg-0lax">Long Term Ecological Monitoring&nbsp;&nbsp;of Gulf of California and Pacific coast</td>
  </tr>
  <tr>
    <td class="tg-buh4">Abstract:</td>
    <td class="tg-buh4">The ecological data of fish and invertebrates were collected under the leadership of the Centro para la Biodiversidad Marina y la Conservación, A.C. (CBMC) as part of Gulf of California Marine Program's long-term ecological monitoring program. This effort includes researchers and students from the Universidad Autónoma de Baja California Sur in La Paz, BCS.&nbsp;&nbsp;This monitoring program has been implemented since 1998, making it the longest-running monitoring effort in the Gulf of California. The data included in this data base was collected in the Bahía de los Ángeles (2008, 2009, 2010, 2016), the Región de las Grandes Islas (2008, 2009, 2010 and 2016) in Baja California; Santa Rosalia (2009, 2010, 2016, 2021, 2022), San Basilio (2019, 2021-2022), Loreto (1998-2019, 2021-2022), El Corredor (2013-2019), La Paz (1998-2019,2022), La Ventana (2013-2018), Cabo Pulmo (1999, 2009-2022), and Cabo San Lucas (1998-2000, 2009-2019, 2021-2022) in Baja California Sur; Islas Marías (2010, 2018), Bahia Banderas (2013), Nayarit; Revillagigedo (2006, 2016, 2017,2021), Colima; Ixtapa Zihuatanejo (2017), Guerrero; Huatulco (2016), Oaxaca. There are 216 species of fish and 244 species of invertebrates included in this inventory.</td>
  </tr>
  <tr>
    <td class="tg-0lax">Key words:</td>
    <td class="tg-0lax">monitoring , fish, invertebrate, transects, rocky reefs</td>
  </tr>
  <tr>
    <td class="tg-buh4">Lead investigator:</td>
    <td class="tg-buh4">Ismael Mascareñas</td>
  </tr>
  <tr>
    <td class="tg-0lax">Contact information:</td>
    <td class="tg-0lax">ismael.mascarenas@gocmarineprogram.org</td>
  </tr>
  <tr>
    <td class="tg-buh4">Data Manager:</td>
    <td class="tg-buh4">Santiago Dominguez-Sanchez</td>
  </tr>
  <tr>
    <td class="tg-0lax">Usage Rights &amp; Copyrights:</td>
    <td class="tg-0lax">Ismael Mascareñas Osorio, Octavio Aburto Oropeza, Carlos Sanchez Ortiz</td>
  </tr>
  <tr>
    <td class="tg-buh4">How to cite:</td>
    <td class="tg-buh4">Mascareñas-Osorio, Ismael; Aburto-Oropeza, Octavio; Sanchez Ortiz, Carlos (2018). Ecological monitoring in reefs of the Gulf of California and Pacific Ocean. In dataMares: Ecological Monitoring. UC San Diego Library Digital Collections. https://doi.org/10.6075/J0KH0KJ3</td>
  </tr>
  <tr>
    <td class="tg-0lax">Geographic Area:</td>
    <td class="tg-0lax">Gulf of California, Mexican Pacific</td>
  </tr>
  <tr>
    <td class="tg-buh4">Collection dates:</td>
    <td class="tg-buh4">1998-2022</td>
  </tr>
  <tr>
    <td class="tg-0lax">Embargo:</td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4">Primary data sofware or service:</td>
    <td class="tg-buh4">Excel</td>
  </tr>
  <tr>
    <td class="tg-0lax">Dataset name:</td>
    <td class="tg-0lax">em_gc_ecological_monitoring</td>
  </tr>
  <tr>
    <td class="tg-buh4">Methods:</td>
    <td class="tg-buh4">Data are collected using transect belt methods, using the standardized methodology of the Long-Term Ecological Monitoring Program designed by the Gulf of California Marine Program.&nbsp;&nbsp;Divers use SCUBA diving in rocky reefs and use linear transects (fish = 50m x 5m; invertebrates = 30m x 1m) as a guide. Fish: Transects were placed at 20 and 5 meters depth. If the sites monitored does not have a rocky bottom at more than 5 meters, only one depth is surveyed. Fishes are visually counted over a belt transect with a reference area of 50m x 5m: first swim over transect, larger demersal fishes are prioritized, whereas on the second swim the focus is on cryptic species. Therefore, the final estimation area is of 250 m squared. Fish sizes are also visually estimated, this measures is then combined to bibliographic data to estimate biomass.Invertebrates: Transects were placed at&nbsp;&nbsp;20 and 5 meters depth. Invertebrates are visually counted over a belt transect with a reference area of 30m x 1m: one swim over transect counting epibenthic macroinvertebrates (larger than 2 cm) and recording estimated size.</td>
  </tr>
  <tr>
    <td class="tg-0lax">Coordinate system:</td>
    <td class="tg-0lax">WGS 1984</td>
  </tr>
  <tr>
    <td class="tg-buh4">Additional Notes:</td>
    <td class="tg-buh4"></td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Tab name:</td>
    <td class="tg-0lax">base</td>
  </tr>
  <tr>
    <td class="tg-buh4">Fields</td>
    <td class="tg-buh4">Description</td>
  </tr>
  <tr>
    <td class="tg-0lax">Label</td>
    <td class="tg-0lax">Fish or invertebrates</td>
  </tr>
  <tr>
    <td class="tg-buh4">Year</td>
    <td class="tg-buh4">Year of sampling</td>
  </tr>
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-0lax">Month of sampling</td>
  </tr>
  <tr>
    <td class="tg-buh4">Day</td>
    <td class="tg-buh4">Day of sampling</td>
  </tr>
  <tr>
    <td class="tg-0lax">IDReef</td>
    <td class="tg-0lax">Reef Id associated to table Reefs</td>
  </tr>
  <tr>
    <td class="tg-buh4">IDSpecies</td>
    <td class="tg-buh4">Species Id associated to table Species</td>
  </tr>
  <tr>
    <td class="tg-0lax">Depth</td>
    <td class="tg-0lax">Depth of transect</td>
  </tr>
  <tr>
    <td class="tg-buh4">Transect</td>
    <td class="tg-buh4">Number of transect</td>
  </tr>
  <tr>
    <td class="tg-0lax">Area</td>
    <td class="tg-0lax">Area covered by transect</td>
  </tr>
  <tr>
    <td class="tg-buh4">Size</td>
    <td class="tg-buh4">Size of the species recorded</td>
  </tr>
  <tr>
    <td class="tg-0lax">Quantity</td>
    <td class="tg-0lax">Number of individuals of the species recorded by diver</td>
  </tr>
  <tr>
    <td class="tg-buh4">Real.year</td>
    <td class="tg-buh4">Real year of sampling. Refers to a delayed monitoring due to environmental conditions (hurricane Odile); only applies to data from February and March, 2015 data.</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4">Tab name:</td>
    <td class="tg-buh4">Reefs</td>
  </tr>
  <tr>
    <td class="tg-0lax">Fields</td>
    <td class="tg-0lax">Description</td>
  </tr>
  <tr>
    <td class="tg-buh4">IDReef</td>
    <td class="tg-buh4">Reef Id</td>
  </tr>
  <tr>
    <td class="tg-0lax">Region</td>
    <td class="tg-0lax">Region where reef is located</td>
  </tr>
  <tr>
    <td class="tg-buh4">Island</td>
    <td class="tg-buh4">Island of the reef or Mexican state if it is on the continent</td>
  </tr>
  <tr>
    <td class="tg-0lax">Reef</td>
    <td class="tg-0lax">Name of the reef</td>
  </tr>
  <tr>
    <td class="tg-buh4">Habitat</td>
    <td class="tg-buh4">Type of habitat</td>
  </tr>
  <tr>
    <td class="tg-0lax">Latitude</td>
    <td class="tg-0lax">Latitude with 6 decimals</td>
  </tr>
  <tr>
    <td class="tg-buh4">Longitude</td>
    <td class="tg-buh4">Longitude with 6 decimals</td>
  </tr>
  <tr>
    <td class="tg-0lax">CONCAT</td>
    <td class="tg-0lax">Label that integrates reef and habitat</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Tab name:</td>
    <td class="tg-0lax">Species</td>
  </tr>
  <tr>
    <td class="tg-buh4">Fields</td>
    <td class="tg-buh4">Description</td>
  </tr>
  <tr>
    <td class="tg-0lax">IDSpecies</td>
    <td class="tg-0lax">Species Id</td>
  </tr>
  <tr>
    <td class="tg-buh4">Label</td>
    <td class="tg-buh4">Fish or invertebrates</td>
  </tr>
  <tr>
    <td class="tg-0lax">Species</td>
    <td class="tg-0lax">Name of the species</td>
  </tr>
  <tr>
    <td class="tg-buh4">Phylum</td>
    <td class="tg-buh4">Phylum</td>
  </tr>
  <tr>
    <td class="tg-0lax">Taxa1</td>
    <td class="tg-0lax">Diverse taxonomic specifications</td>
  </tr>
  <tr>
    <td class="tg-buh4">Taxa2</td>
    <td class="tg-buh4">Diverse taxonomic specifications</td>
  </tr>
  <tr>
    <td class="tg-0lax">Taxa3</td>
    <td class="tg-0lax">Diverse taxonomic specifications</td>
  </tr>
  <tr>
    <td class="tg-buh4">Family</td>
    <td class="tg-buh4">Family</td>
  </tr>
  <tr>
    <td class="tg-0lax">TrophicGroup</td>
    <td class="tg-0lax">Trophic groups the species belongs to (hervibores, zooplanktivores, carnivores, top predator).</td>
  </tr>
  <tr>
    <td class="tg-buh4">A_ord</td>
    <td class="tg-buh4">origin data to convert length in weight</td>
  </tr>
  <tr>
    <td class="tg-0lax">B_pen</td>
    <td class="tg-0lax">slope data to convert length in weight</td>
  </tr>
  <tr>
    <td class="tg-buh4">TrophicLevel</td>
    <td class="tg-buh4">Position in trophic chain in number for each species according to food items from fishbase</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-buh4">Related resources:</td>
    <td class="tg-buh4">Rodriguez, A.S, Báez, M, Aburto-Oropeza, O., Arango, G., Masacareñas-Osorio, I., Erisman, B. (2014). Protocolo de Monitoreo: Para Ambientes Marinos Costeros. UC San Diego: Aburto Lab. Retrieved from https://escholarship.org/uc/item/23f1404c</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Alfredo Giron-Nava, Andrew F. Johnson, Octavio Aburto-Oropeza (2014): Richness, density and biomass as measures of health. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M37P4Z</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Arturo Ramirez-Valdez, Andrew F. Johnson, Octavio Aburto-Oropeza, Alfredo Giron-Nava (2014): Mexico’s reefs and underwater data. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M33W21</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Alfredo Giron-Nava, Andrew F. Johnson, Octavio Aburto-Oropeza (2014): Health Index. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3059H</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Alfredo Girón-Nava, Andrew F. Johnson, Octavio Aburto-Oropeza (2014): Riqueza específica, densidad y biomasa como indicadores de salud. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M38G6Z</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Arturo Ramírez-Valdez, Andrew F. Johnson, Octavio Aburto-Oropeza, Alfredo Girón-Nava (2014): Arrecifes de México y los datos bajo el agua. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3201C</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Alfredo Girón-Nava, Octavio Aburto-Oropeza, Andrew F. Johnson (2014): Índice de Salud. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M35P4B</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">José Cota-Nieto, Tomás Plomozo, Isaí Dominguez-Guerrero, Matthew Costa, Octavio Aburto-Oropeza (2014): Snapper Habitat in Gulf of California Mangrove Forests. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3CC77</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">José Cota-Nieto, Tomás Plomozo, Isaí Domínguez-Guerrero, Matthew Costa, Octavio Aburto-Oropeza (2014): Hábitat de pargos en los bosques de manglar del Golfo de California. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M39G68</td>
  </tr>
  <tr>
    <td class="tg-0lax"></td>
    <td class="tg-0lax">Ismael Mascareñas Osorio, Alfredo Girón Nava, Amy Hudson Weaver, Benigno Guerrero, Carlos Sánchez y Octavio Aburto Oropeza (2015): Recovering fishery resources in the Gulf of California. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3D304</td>
  </tr>
  <tr>
    <td class="tg-buh4"></td>
    <td class="tg-buh4">Ismael Mascareñas Osorio, Alfredo Girón Nava, Amy Hudson Weaver, Benigno Guerrero, Carlos Sánchez y Octavio Aburto Oropeza (2015): Recuperando los recursos pesqueros del Golfo de California. DataMares. InteractiveResource. http://dx.doi.org/10.13022/M3S88</td>
  </tr>
</tbody>
</table>
    </div>
	<div class="my-4 flex justify-center" style="
    position: relative;
    z-index: 2;
    bottom: -1rem;
">
<a href="https://datamares.org/dwd/em_gc_ecological_monitoring_metadata-actualizado-marzo-2023/" class="bg-secondary text-gray-50 rounded-xl p-3 isBold text-xl hover:bg-secondary2 hover:scale-105 hover:shadow-xl transition-all">
    Descargar
</a>
</div>
    <button class="modal-close is-large close" aria-label="close"></button>
</div>
<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/splide.min.css" />
<script
    src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4/dist/js/splide-extension-grid.min.js"></script>




<script>
let numbers



document.addEventListener("aos:in:number1", ({ detail }) => {
    numbers = document.getElementsByClassName('number1')
    for (let index = 0; index < numbers.length; index++) {
        const element = numbers[index];
        anime({
            targets: element,
            duration: 5000,
            easing: "easeOutQuart",
            round: 100,
            update: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            end: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            innerHTML: [0, remocecoma(element.innerHTML)]
        });
    }
});

document.addEventListener("aos:in:number3", ({ detail }) => {
    numbers = document.getElementsByClassName('number3')
    for (let index = 0; index < numbers.length; index++) {
        const element = numbers[index];
        anime({
            targets: element,
            duration: 3000,
            easing: "easeInOutCubic",
            round: 1,
            update: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            end: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            innerHTML: [0, remocecoma(element.getAttribute('ini'))]
        });
    }
});



document.addEventListener("aos:in:number2", ({ detail }) => {
    numbers = document.getElementsByClassName('number2')
    let por = document.getElementsByClassName('transition-opacity')
    for (let index = 0; index < por.length; index++) {
        const element = por[index];

        if (element.classList) {
            element.classList.remove('opacity-100')
            element.classList.add('opacity-0')
        }

    }
    for (let index = 0; index < numbers.length; index++) {
        const element = numbers[index];
        anime({
            targets: element,
            duration: 4000,
            easing: "easeOutExpo",
            round: 10,
            update: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            complete: function (anim) {
                for (let index = 0; index < por.length; index++) {
                    const element = por[index];

                    if (element.classList) {
                        element.classList.remove('opacity-0')
                        element.classList.add('opacity-100')
                    }

                }
            },
            innerHTML: [0, remocecoma(element.getAttribute('ini'))]
        });
    }

});


document.addEventListener("aos:in:bar", ({ detail }) => {
    let bar = document.getElementById('bar')
    bar.setAttribute('style', 'width:1vw')
    anime({
        targets: '#bar',
        width: '76vw',
        duration: 10000,
        easing: "easeOutQuint",
    });
});



function remocecoma(val) {
    var val = val.replace(/,/g, '')
    return parseFloat(val)
}
function numberWithCommas(tarjet, x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    tarjet.innerHTML = x

}

var atractivos = new Splide('#atractivos', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 4,
        },
        767: {
            perPage: 1,
        },
    },
    perPage: 4,
    perMove: 1,
    rewind: true,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

atractivos.mount();

var amenazas = new Splide('#amenazas', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 4,
        },
        767: {
            perPage: 1,
        },
    },
    perPage: 4,
    perMove: 1,
    rewind: true,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

amenazas.mount();


var carrousel = new Splide('#carrousel', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 4,
        },
        767: {
            perPage: 1,
        },
    },
    perPage: 4,
    perMove: 1,
    rewind: true,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

carrousel.mount();

function changeCarrousel(target) {

    target = document.getElementById(target)
    vSplide = document.getElementsByClassName('splide')

    for (let index = 0; index < vSplide.length; index++) {
        const element = vSplide[index];

        element.classList.add('hidden')

    }

    if (target.classList) {
        target.classList.remove('hidden')


    }

}










onDOMContentLoaded = (event) => {


    //Setting up the logics of submenus

    let hasChildren = document.getElementsByClassName('menu-item-has-children')


    for (let i = 0; i < hasChildren.length; i++) {
        const children = hasChildren[i];
        const dropItem = children.getElementsByClassName('dropd')[0].innerHTML
        const dropDown = document.createElement('div')
        const ul = document.createElement('ul')
        let nested = children.classList.contains('nested')

        if (children.classList) {
            children.classList.add(nested ? 'group/Nested' : 'group/Main', 'flex-col', 'md:flex-row', 'flex', 'z-10')
        }

        if (ul.classList) {
            ul.classList.add('navbar-dropdown', 'dropd')
        }

        if (dropDown.classList) {
            dropDown.setAttribute('class', nested ? 'md:p-0 md:pl-2 -mt-1 group-hover/Nested:block left-[100%] hidden md:absolute' : 'pt-2 md:pt-10 group-hover/Main:block hidden md:absolute')
        }

        var elem = document.querySelector('#dropDownArrow');
        var clone = elem.cloneNode(true);

        ul.innerHTML = dropItem
        dropDown.appendChild(ul)
        children.appendChild(dropDown)

        children.getElementsByClassName('dropd')[0].remove()

        clone.setAttribute('class', nested ? 'group-hover/Nested:rotate-180 group-hover/Nested:transition-transform' : 'group-hover/Main:rotate-180' + ' hidden transition-transform')
        children.appendChild(clone)



        if (clone.classList) {
            clone.classList.remove('hidden')
        }

    }




};



</script>
<script>
document.addEventListener("aos:in:bar", ({ detail }) => {
    let bar = document.getElementById('bar')
    bar.setAttribute('style', 'width:1vw')
    anime({
        targets: '#bar',
        width: '18vw',
        duration: 10000,
        easing: "easeOutQuint",
    });
});
    function changeMap(tarjet) {
      $(".maps").append($('.' + tarjet))
    }
	
	var options = {
    chart: {
        height: '100%',
        with: '80%',
        type: 'bar'
    },
    plotOptions: {
    },
    series: [{
        data: [{
            x: '<?php _e("INVERTEBRATES", "dm") ?>',
            y: 50,
            fillColor: '#e1e1bd',
        }, {
            x: '<?php _e("FISHES", "dm") ?>',
            y: 83,
            fillColor: '#e1e1bd',
        },]
    }]
};


$('.close').click(function (e) { 
    $('.modal').removeClass('is-active');  
});
  </script>