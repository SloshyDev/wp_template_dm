<?php get_header();
/*template name: Wanha*/
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

</style>

<style>
	a:hover {
    color: #9ea621;
}
	.w-\[22\.8vw\] {
    width: 22.8vw 
}
	.h-\[3\.7vw\] {
    height: 3.7vw;
}
	.grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
}
	.grid {
    display: grid;
}
.last\:block:last-child {
    display: block;
}
	.apexcharts-text tspan {
      font-size: 1.2vw;
      color: white;
    }

    .mx-\[2vw\] {
    margin-left: 2vw;
    margin-right: 2vw;
}
    @media (min-width: 768px) {
      
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
	.w-\[3\.8vw\] {
    width: 3.8vw;
}
	.text-\[2\.4vw\] {
		width: 19vw;
    font-size: 2vw;
}
	.text-\[2\.2vw\] {
    font-size: 2.2vw;
}
	.w-\[4\.8vw\]{
		 width:4.8vw	
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
$mapab = get_field('mapab')
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
                <img width="178" height="208" class="w-[16vw] md:w-[6vw]" src="<?php echo $anpVerde; ?>"> 
                <div class="">
                    <h1 id="hmarinas" style="width: 15.5vw;"
                        class=" MBlackCondensed text-[12vw] md:text-[3vw] leading-none number1 text-[#aeb521] dark:text-[#007080]">
                        <?php echo esc_html(get_field('marineArea')); ?>
                    </h1>
                    <h1 style="width: min-content;" class="MBlackCondensed text-[8vw] uppercase md:text-3m leading-none text-gray-50">
                        <?php _e("HECTARES IN</br>TERRESTRIAL AREA", 'dm') ?>
                    </h1>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-[.3vw] bg-[#aeb521] h-[11vw] rounded-3xl hidden md:block"></div>
                <div style="    display: flex;
    flex-direction: column;
    gap: 2rem;">
					<div class="ml-[1vw] flex gap-4">
              <img src="https://datamares.org/wp-content/uploads/2024/02/location.svg" class="w-[3.8vw]" alt="" />
              <h1
                class="MBlackCondensed text-[2.4vw] font-black leading-none text-white">
               <?php _e('Balancán Municipality','dm') ?>:
                <span class="text-[2.7vw] text-[#aeb521] number1">23,219.94 ha</span>
              </h1>
            </div>
            <div class="ml-[1vw] flex gap-4">
              <img src="https://datamares.org/wp-content/uploads/2024/02/location.svg" class="w-[3.8vw]" alt="" />
              <h1
                class="MBlackCondensed text-[2.4vw] font-black leading-none text-white">
                <?php _e('Tenosique Municipality','dm') ?>:
                <span class="text-[2.7vw] text-[#aeb521] number1">15,035.69 ha</span>
              </h1>
            </div>
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
                <h1 class="MBlackCondensed ml-4 text-6m md:text-4xl text-gray-50">
                    <?php _e("VISIT THE ANP HOME PAGE", 'dm') ?>
                </h1>
            </a>
        </div>
        <a class="my-4 md:mb-0 md:mt-4 flex transition-transform hover:scale-105 pb-[1vw]"
            href="<?php  echo _e('https://datamares.org/npa/','dm'); ?>" target="_blank">
            <img width="260" height="168" class="m-auto w-[20vw] md:w-[13.5vw]"
                src="<?php echo $anpVisit ?>" alt="" />
        </a>
    </div>
</section>

<section data-aos="fade-up" class="my-8 ml-4 md:flex justify-between">
    <div class="flex w-full md:px-0 md:w-1/2 flex-col justify-between">
        <div class="flex items-center gap-4 xl:ml-2 2xl:ml-8">
            <img class="w-[11vw] md:w-[4.7vw]" width="87" height="87"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/calendario.svg" alt="" />
            <h1 class="MBlackCondensed text-[5.5vw] md:text-4m text-[#4c7738] leading-none">
                <?php _e("GEOGRAPHIC LOCATION: ", 'dm') ?> <span class="text-[#aeb521]">
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
        <div class="w-full rounded-l-3xl my-4 md:m-0 bg-[#aeb521] rounded-r-3xl md:rounded-r-none px-2 md:px-6 py-2">
            <div class="flex gap-3 justify-center items-center " style="margin-right: 5vw;">
                <img style="margin:1vw;width:8.6vw;"
                    src="https://datamares.org/wp-content/uploads/2024/02/Recurso-1.svg" alt="">
                <h1 class="MBlack text-[#4c7738] text-6m md:text-4xl leading-none text-center md:text-start">
					<?php _e("It is home of an inland red mangrove forest (<span class='italic'>Rhizophora mangle</span> ) located between 110 to 170 km inland from the Gulf of Mexico coastline and living in fresh water.", 'dm') ?>
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
           <img src='<?php echo $mapab ?>'>
 
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
                                <h1 style='margin-top: 1vw;' class="MBlack text-9m md:text-4xl text-[#aeb521] leading-none">
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
        <img width="97" height="97" class="w-[10vw] md:w-[5.052vw]"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/0proteccion.svg" alt="" />
        <img width="52" height="52" class="w-[7vw] md:w-[2.708vw]"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/5proteccion.svg" alt="" />
        <img width="97" height="97" class="w-[10vw] md:w-[5.052vw]"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/1proteccion.svg" alt="" />
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





<div data-aos="fade-up" class="mt-6 md:mt-12 w-[95.260vw] mx-auto mb-12 md:mb-24">
    <div class="flex items-center justify-center gap-3 md:gap-6">
        <img width="143" height="168" class="w-[18vw] md:w-[7.448vw]"
            src="<?php echo $anpVerde?>" alt="" />
        <h1 class="MBlackCondensed text-[7vw] md:text-8m text-[#4c7738]">
            <?php _e("BIODIVERSITY", 'dm') ?>
        </h1>
    </div>
	<div class="mx-[2vw] rounded-[2vw] bg-[#4c7738] py-[2vw]" style="
    margin-left: 2vw;
    margin-right: 2vw;
																	 margin-top: 2vw;
    border-radius: 2vw;
    padding-top: 2vw;
    padding-bottom: 2vw;
">
      <div class="mx-[2vw] my-4 flex justify-around">
      <button
          onclick="updateData(totalData,892,'https://datamares.org/wp-content/uploads/2024/02/Asset-3-3.svg')"
          class="group flex items-center">
          <img
            src="https://datamares.org/wp-content/uploads/2024/02/Asset-3-2.svg"
            class="w-[4.8vw] transition-transform group-hover:scale-105"
            alt="" />
          <h1
            class="font-myriad MBlack text-[2.2vw] font-black text-white transition-colors group-hover:text-[#a5ad3f]">
            <?php _e("TOTAL SPECIES", 'dm') ?>
          </h1>
        </button>

        <button
          onclick="updateData(endemicData,20,'https://datamares.org/wp-content/uploads/2024/02/Asset-5-2.svg')"
          class="group flex items-center">
          <img
            src="https://datamares.org/wp-content/uploads/2024/02/Asset-5-1.svg"
            class="w-[4.8vw] transition-transform group-hover:scale-105"
            alt="" />
          <h1
            class="font-myriad MBlack text-[2.2vw] font-black text-white transition-colors group-hover:text-[#a5ad3f]">
            <?php _e("ENDEMIC SPECIES", 'dm') ?>
          </h1>
        </button>

        <button
          onclick="updateData(normadaData,102,'https://datamares.org/wp-content/uploads/2024/02/Asset-5-2.svg')"
          class="group flex items-center">
          <img
            src="https://datamares.org/wp-content/uploads/2024/02/Asset-6-1.svg"
            class="w-[4.8vw] transition-transform group-hover:scale-105"
            alt="" />
          <h1
            class="font-myriad MBlack text-[2.2vw] font-black text-white transition-colors group-hover:text-[#a5ad3f]">
            <?php _e("PROTECTED SPECIES", 'dm') ?>
          </h1>
        </button>
      </div>
      <div id="chart" class="mx-[2vw]"></div>

      <div class="flex">
        <div
          class="flex h-[20vw] w-3/5 items-center bg-gray-50 md:h-[6.354vw] md:w-[30.208vw]">
          <img
            width="78"
            height="78"
            class="imgC ml-4 mr-4 w-[13vw] md:w-[4.063vw]"
            src="https://datamares.org/wp-content/uploads/2024/02/Asset-3-3.svg"
            alt="" />
          <div class="font-myriad MBlack font-black text-[#007080]">
            <h1
              class=" font-myriad text-[3vw] font-black leading-none">
              TOTAL:
              <span class="numberC">892</span>
            </h1>
          </div>
        </div>
        <div
          class="h-0 w-0 border-b-[10vw] border-l-[5vw] border-t-[10vw] border-y-transparent border-l-gray-50 md:border-b-[3.18vw] md:border-l-[2vw] md:border-t-[3.18vw]"></div>
      </div>
    </div>
</div>

<div data-aos="fade-up" class="bg-[#4c7738] py-16 px-8">
    <div class="flex items-center justify-center md:justify-start gap-4">
        <img width="127" height="96" class="w-[16vw] md:w-[6.615vw]"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/exc.svg" alt="">
        <h1 class="MBlack text-[6vw] md:text-8xl text-gray-50">
            <?php _e("YOU MIGHT LIKE", "dm") ?>
        </h1>
    </div>
    <div class="">
        <div class="mx-[2vw] grid grid-cols-4 " style="gap:2vw; margin-top:2vw;">
      <?php if( have_rows('boxes') ): ?>
    <?php while( have_rows('boxes') ): the_row(); 
        $main = get_sub_field('main');
        $title = get_sub_field('title');
			$link = get_sub_field('link');
			?>
        <div class="">
        <a class="flex flex-col items-center gap-2 group" href="<?php echo $link ?>" target="_blank">
          <img
            class="w-[22.8vw] group-hover:scale-105 transition-transform"
            src="<?php echo $main ?>"
            alt="" />
          <img
            class="h-[3.7vw]"
            src="<?php echo $title ?>"
            alt="" />
        </a>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
    </div>
    </div>
    <div class="md:mt-4" style="margin-top: 3vw;">
        <h1 class="MBlack text-[6vw] md:text-1m text-gray-50 text-center md:text-start">
            <?php _e("SOURCES", "dm") ?>
        </h1>

        <div class="mb-4 md:my-8" style="
    display: flex;
    flex-direction: column;
    gap: 1vw;
">
<h1 class="Mbold text-gray-50 text-9m text-center md:text-start md:text-4xl">
	• Aburto-Oropeza et al. (2021). Relict inland mangrove reveals Last Interglacial sea levels. Proceedings of the National Academy of Sciences 118: 1-8. Dataset_S01 (XLSX). DOI: 
	<a 
	href="https://doi.org/10.1073/pnas.2024518118">
	https://doi.org/10.1073/pnas.2024518118
	</a>

			</h1>
			
			<h1 class="Mbold text-gray-50 text-9m text-center md:text-start md:text-4xl">
	• CONANP. (2023). Estudio Previo Justificativo para el establecimiento del Área Natural Protegida Reserva de la Biosfera Wanha'. Recuperado el 14 de febrero de 2024 de
 
	<a 
	href="https://www.conanp.gob.mx/pdf/separata/EPJ-RB-Wanha.pdf">
	https://www.conanp.gob.mx/pdf/separata/EPJ-RB-Wanha.pdf
	</a>

			</h1>
			
			<h1 class="Mbold text-gray-50 text-9m text-center md:text-start md:text-4xl">
	• DOF. (2023). DECRETO por el que se declara área natural protegida Wanha', con el carácter de reserva de la biosfera. 01/09/2023. Secretaría de Gobernación. Recuperado el 14 de febrero de 2024 de
 
	<a 
	href="https://www.dof.gob.mx/nota_detalle.php?codigo=5700709&fecha=01/09/2023">
	https://www.dof.gob.mx/nota_detalle.php?codigo=5700709&fecha=01/09/2023
	</a>

			</h1>

			<h1 class="Mbold text-gray-50 text-9m text-center md:text-start md:text-4xl">
	• Geofolio (2024). Recuperado el 14 de febrero de 2024 de 

 
	<a 
	href="https://geofolio.org/f/969307284">
https://geofolio.org/f/969307284
	</a>

			</h1>
			


        </div>
        <h1 class="text-gray-50 MBold text-9m md:text-4xl leading-none text-center md:text-start">
            <?php _e("UPDATE", "dm") ?>: <br class="md:hidden"> <span class="MBlack text-[#aeb521]">
               <?php _e("MARCH 2024", "dm") ?> 
            </span>
        </h1>
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
<?php get_footer(); ?>


	

<?php get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/splide.min.css" />
<script
    src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4/dist/js/splide-extension-grid.min.js"></script>



<script>
let numbers

var carrousel = new Splide('#carrousel', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 2,
        },
        767: {
            perPage: 1,
        },
    },
    perPage: 2,
    perMove: 1,
    rewind: true,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

carrousel.mount();


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
        width: '25vw',
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

var options = {
  series: [
    {
      data: [48, 1, 7, 445, 12, 1, 16, 1, 29, 49, 12, 26, 203, 42],
    },
  ],
  colors: ["#a5ad3f"],
  chart: {
    toolbar: {
      show: false,
    },
    foreColor: "#ffffff",
    height: 350,
    type: "bar",
    events: {
      click: function (chart, w, e) {
        // console.log(chart, w, e)
      },
    },
  },
  plotOptions: {
    bar: {
      columnWidth: "78%",
      distributed: true,
      dataLabels: {
        position: "top", // top, center, bottom
      },
    },
  },
  dataLabels: {
    enabled: true,
    offsetY: -8,
    style: {
      fontSize: "1vw",
      fontFamily: "myriad-pro-condensed",
      fontWeight: 700,
      color: "#ffffff",
    },
  },
  legend: {
    show: false,
  },
  grid: {
    row: {
      colors: ["#538046", "#426e37"],
      opacity: 1,
    },
  },
  yaxis: {
    labels: {
      style: {
        fontFamily: "myriad-pro-condensed",
        fontWeight: 700,
      },
    },
  },
  xaxis: {
    categories: [
      "<?php _e("Fungi", "dm") ?> ",
      "<?php _e("Hepatica", "dm") ?> ",
      "<?php _e("Bryophites", "dm") ?>",
      ["<?php _e("Vascular", "dm") ?>", "<?php _e("plants", "dm") ?>"],
      "<?php _e("Helminths", "dm") ?>",
      "<?php _e("Acanthocephalus", "dm") ?>",
      "<?php _e("Molluscs", "dm") ?>",
      "<?php _e("Crustaceans", "dm") ?>",
      "<?php _e("Insects", "dm") ?>",
      "<?php _e("Fish", "dm") ?>",
      "<?php _e("Amphibians", "dm") ?>",
      "<?php _e("Reptiles", "dm") ?>",
      "<?php _e("Birds", "dm") ?>",
      "<?php _e("Mammals", "dm") ?>",
    ],
    labels: {
      style: {
        fontFamily: "myriad-pro-condensed",
        fontWeight: 700,
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

let totalData = [48, 1, 7, 445, 12, 1, 16, 1, 29, 49, 12, 26, 203, 42];
let endemicData = [0, 0, 0, 14, 0, 0, 0, 0, 0, 4, 0, 0, 0, 2];
let normadaData = [0, 0, 0, 16, 0, 0, 0, 0, 1, 2, 2, 13, 50, 18];
function updateData(data, total, url) {
  chart.updateSeries([
    {
      data: data,
    },
  ]);
  $(".numberC").text(total);
  $(".imgC").attr("src", url);
}










</script>

<script>

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

var riqueza = new ApexCharts(document.querySelector("#riqueza"), options);
riqueza.render();
			$('.buttonMeta').click(function (e) { 
    $('.modal').addClass('is-active');    
});

$('.close').click(function (e) { 
    $('.modal').removeClass('is-active');  
});
  </script>