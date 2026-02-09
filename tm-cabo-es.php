<?php get_header();
/*template name:Cabo pulmo es*/
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
@font-face{font-family:'Academy Engraved LET';src:url(../Fonts/AcademyEngravedLetPlain.woff)format('woff');font-weight:100;font-style:normal;font-display:swap}.MBold{font-family:"myriad-pro",sans-serif;font-weight:700;font-style:normal}.MRegular{font-family:"myriad-pro",sans-serif;font-weight:200;font-style:normal}.isSansExtraBold{font-family:"OpenSansExtraBold"}.MCond{font-family:"myriad-pro-condensed",sans-serif;font-weight:400;font-style:normal}.MBoldCondensed{font-family:"myriad-pro-condensed",sans-serif;font-weight:700;font-style:normal}.MBlack{font-family:"myriad-pro",sans-serif;font-weight:900;font-style:normal}.MBlackCondensed{font-family:"myriad-pro-condensed",sans-serif;font-weight:900;font-style:normal}.isAcademy{font-family:'Academy Engraved LET',sans-serif}.apexcharts-tooltip *{font-family:"myriad-pro",sans-serif;font-weight:700;font-style:normal}.apexcharts-tooltip-text-y-label{display:none}.apexcharts-canvas{margin:auto}.dark::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#111827}.dark::-webkit-scrollbar{width:10px;background-color:#111827}.dark::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#1f4c5c}.summary::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#3d7b91;border-radius:10px}.summary::-webkit-scrollbar{width:10px;background-color:#3d7b91;border-radius:10px}.summary::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#4b5563}#baultNews::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#00302e;border-radius:10px}#baultNews::-webkit-scrollbar{width:10px;background-color:#00302e;border-radius:10px}#baultNews::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#D4DC27}.apexcharts-tooltip-text-y-value{margin-left:0!important}.apexcharts-tooltip-text{margin:auto}.apexcharts-menu-icon{display:none}#numeralia{cursor:url(https://datamares.org/wp-content/uploads/2023/03/Group-23.svg),auto}.cursor-zoom{cursor:url(../len.svg),zoom-in}.apexcharts-datalabel-value{font-family:"myriad-pro-condensed",sans-serif!important;font-weight:900!important;font-style:normal;color:white}
	
	
	
</style>

<style>
	.navbar-item a:hover {
    color: #494949;
}
	
	a:hover {
     color: #aeae30; 
	}
	.page-template{
		background-color:#f9fafb;
	}
    .bar {
        width: 1vw;
    }

    #carrousel .splide__arrow svg {
        stroke: #007080;
        stroke-width: 6px;
        fill: none;
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
	
	@media (min-width: 768px){
.md\:mr-\[1vw\] {
    margin-right: 1vw !important;
		}
		#hmarinas{
			width: 17vw;
		}
		#mpmx{
			margin-right:0 !important;
		}
	}
	

</style>


<section data-aos="fade-up" data-aos-id="number1" class="my-8 md:ml-4 md:flex justify-between items-center">
    <div class="w-[97%] mx-auto md:w-4/5 md:px-0">
        <div class="md:justify-start flex items-center gap-2 md:gap-4 md:ml-2 2xl:ml-8 mb-2">
            <img class="w-[11vw] md:w-[4.7vw]" width="87" height="87"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/calendario.svg" alt="" />
            <h1 class="MBlackCondensed text-[5.5vw] md:text-4m text-[#4c7738]">
                DATE ESTABLISHED: <span class="text-[#aeb521]">July 19, 1996</span>
            </h1>
        </div>
        <div class="flex items-center gap-[2vw] md:gap-4 xl:ml-2 2xl:ml-8">
            <img class="w-[11vw] md:w-[4.7vw]" width="87" height="87"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/categoria.svg" alt="" />
            <h1 class="MBlackCondensed text-9m md:text-2m leading-none text-[#4C7738]">
               MANAGEMENT CATEGORY:
                <span class="text-[#aeb521]">NATIONAL PARK</span>
            </h1>
        </div>
        <div
            class="my-2 w-fit md:w-auto px-[5vw] mx-auto md:px-0 md:mb-8 md:flex flex-col md:flex-row items-center justify-around md:justify-start gap-4 py-8 md:mr-[1vw] bg-[#4C7738] rounded-md">
            <div class="flex items-center gap-[2vw] md:gap-4 xl:ml-2 2xl:ml-8">
                <img class="w-[16vw] md:w-[4.7vw]" width="87" height="87"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/superficie.svg" alt="" />
                <h1 class="MBlackCondensed gap-1 items-end block text-[8vw] md:text-2m leading-none text-gray-50">
                    TOTAL AREA: <br class='hidden md:block'>
                    <span
                        class="number1 block w-[20vw] md:w-[12vw] text-[#aeb521] text-[12vw] md:text-[4vw] leading-none">
                        7,111.01
                    </span>
                    HECTARES
                </h1>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-[.3vw] bg-[#aeb521] h-[11vw] rounded-3xl hidden md:block"></div>
                <img width="178" height="208" class="w-[16vw] md:w-[6vw]"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/anpAzul.svg" alt="" />
                <div class="">
                    <h1 id="hmarinas"
                        class=" MBlackCondensed text-[12vw] md:text-[4vw] leading-none number1 text-[#aeb521] dark:text-[#007080]">
                        7,072.15
                    </h1>
                    <h1 class="MBlackCondensed text-[8vw] uppercase md:text-3m leading-none text-gray-50">
                       HECTARES IN<br />MARINE AREA
                    </h1>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-[.3vw] bg-[#aeb521] h-[11vw] rounded-3xl hidden md:block"></div>
                <img width="178" height="208" class="w-[16vw] md:w-[6vw]"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/anpVerde.svg" alt="" />
                <div class="">
                    <h1
                        class="MBlackCondensed text-[12vw] md:text-[4vw] leading-none text-[#aeb521] number1 dark:text-[#007080]">
                        38.86
                    </h1>
                    <h1 class="MBlackCondensed text-[8vw] uppercase md:text-3m leading-none text-gray-50">
                        HECTARES IN<br />TERRESTRIAL AREA
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="w-1/2 mx-auto md:w-1/5 overflow-hidden rounded-xl md:rounded-l-3xl bg-[#4c7738] h-fit">
        <div class="mt-5 bg-[#0a3518] p-2">
            <a href="https://datamares.org/anp/?lang=es" target="_blank"
                class="flex items-center transition-transform hover:scale-105">
                <img width="60" height="60" class="w-[6vw] md:w-[3.125vw]"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="" />
                <h1 class="MBlackCondensed ml-4 text-6m md:text-4xl text-gray-50">
                    VISITA NUESTRA SECCIÓN
                </h1>
            </a>
        </div>
        <a class="my-4 md:mb-0 md:mt-4 flex transition-transform hover:scale-105 pb-[1vw]"
            href="https://datamares.org/anp/?lang=es" target="_blank">
            <img width="260" height="168" class="m-auto w-[20vw] md:w-[13.5vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/iconoAnp.svg" alt="" />
        </a>
    </div>
</section>

<section data-aos="fade-up" class="my-8 ml-4 md:flex justify-between">
    <div class="flex w-full md:px-0 md:w-1/2 flex-col justify-around">
        <div class="flex items-center gap-4 xl:ml-2 2xl:ml-8">
            <img class="w-[11vw] md:w-[4.7vw]" width="87" height="87"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/calendario.svg" alt="" />
            <h1 class="MBlackCondensed text-[5.5vw] md:text-4m text-[#4c7738]">
                LOCALIZACIÓN: <span class="text-[#aeb521]">BAJA CALIFORNIA SUR</span>
            </h1>
        </div>
        <div class="flex justify-end">
            <img width="842" height="478" class="w-11/12 mx-auto md:mx-0 md:w-[43.854vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/mapaMx.svg" alt="" />
        </div>
        <div class="w-full rounded-l-3xl my-8 md:mt-0 bg-[#aeb521] rounded-r-3xl md:rounded-r-none px-2 md:px-6 py-2">
            <h1 class="MBlack text-[#4c7738] text-6m md:text-5xl leading-none text-center md:text-start">PROFUNDIDADES A
                LAS QUE SE LOCALIZAN<br>LAS BARRAS
                DE BASALTO
                SOBRE
                LAS QUE SE<br>ASIENTAN LOS CORALES:</h1>
            <div class="flex mb-2 gap-2 md:gap-6 items-center mt-4 md:mt-0">
                <img class="w-[11.5vw] md:w-[4.531vw] my-auto"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/metros.svg" alt="">
                <div class="text-gray-50">
                    <h1 class="text-[6.5vw] md:text-2m MBlackCondensed  leading-[6vw] md:leading-[3vw]">20 METROS</h1>
                    <h1 class="text-[3.6vw] md:text-4xl MBold leading-none">PROFUNDIDAD<br>MÁXIMA <span
                            class="text-2m md:text-xl">(HACIA EL
                            NORTE)</span></h1>
                </div>
                <div class="text-gray-50">
                    <h1 class="text-[6.5vw] md:text-2m MBlackCondensed  leading-[6vw] md:leading-[3vw]">2-3 METROS</h1>
                    <h1 class="text-[3.6vw] md:text-4xl MBold leading-none">PROFUNDIDAD<br>MÍNIMA <span
                            class="text-2m md:text-xl">(CENTRO Y
                            SUR)</span></h1>
                </div>
            </div>
            <div class="h-1 rounded-xl w-full bg-[#005f7e]"></div>
            <div class="mt-1 md:mt-4 ">
                <div class="flex gap-2 md:gap-6 items-cente text-gray-50 MBlackCondensed">
                    <img class="w-[11.5vw] md:w-[4.531vw] my-auto"
                        src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/temperatura.svg" alt="">
                    <div class="">
                        <h1 class="text-[11vw] md:text-6m leading-none">23.09 °C</h1>
                        <h1 class="text-6m md:text-8xl leading-none">TEMPERATURA MEDIA ANUAL</h1>
                    </div>
                </div>
                <div class="flex gap-2 md:gap-6 items-cente text-gray-50 MBlackCondensed">
                    <img class="w-[11.5vw] md:w-[4.531vw] my-auto"
                        src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/precipitacion.svg" alt="">
                    <div class="">
                        <h1 class="text-[13vw] md:text-8m leading-none">214.33 mm</h1>
                        <h1 class="text-9m md:text-3m leading-none">PRECIPITACIÓN ANUAL MEDIA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full  md:px-0 md:w-1/2">
        <div class="flex justify-start">
            <img width="877" height="1164" class="w-11/12 md:mx-0 md:w-[45.677vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/mapaCaboPulmo.svg" alt="" />
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
                <?php _e("ATRACTIVOS", 'dm') ?>
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
                <?php _e("AMENAZAS", 'dm') ?>
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
                                <h1 class="MBlack text-9m md:text-5xl text-[#aeb521]">
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
        <h1 class="text-9m md:text-1m leading-none text-gray-50">NIVEL DE PROTECCIÓN</h1>
        <h1 class="text-5m md:text-2xl text-gray-50 leading-none">
            México se suma a la Convención de Protección de la Naturaleza y
            Preservación de la Fauna Silvestre del hemisferio occidental.
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
            <h1 class="text-4xl leading-none text-gray-50">PROTECCIÓN</h1>
        </div>
        <div class="MBlackCondensed text-center">
            <h1 class="text-6m leading-none text-gray-50">50%</h1>
            <h1 class="text-4xl leading-none text-gray-50">PROTECCIÓN</h1>
        </div>
        <div class="MBlackCondensed text-center">
            <h1 class="text-6m leading-none text-gray-50">100%</h1>
            <h1 class="text-4xl leading-none text-gray-50">PROTECCIÓN</h1>
        </div>
    </div>
</div>

<section data-aos="fade-up"
    class="my-4 md:my-14 md:mx-2 flex-col md:flex-row justify-center  flex gap-2 md:justify-around">
    <div class="flex items-center justify-center md:justify-start gap-3 md:gap-6">
        <img width="143" height="168" class="w-[18vw] md:w-[7.448vw]"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/anpAzul.svg" alt="" />
        <h1 class="MBlackCondensed text-[7vw] md:text-8m text-[#4c7738]">BIODIVERSIDAD MARINA</h1>
    </div>
    <div class="flex flex-col items-center mt-2 md:mt-auto gap-2 md:gap-6">
        <div
            class="group flex w-11/12 md:w-[42.604vw] cursor-pointer justify-center md:justify-start items-center gap-2 rounded-3xl bg-secondary4 py-4 shadow-lg px-4">
            <img width="77" height="77" class="w-[10vw] md:w-[4.010vw] transition-transform group-hover:scale-105"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/datos.svg" alt="" />
            <h1 class="MBlack text-[3.5vw] md:text-8xl text-gray-50 transition-colors group-hover:text-[#aeb521]">
                CONSULTA LOS METADATOS
            </h1>
        </div>
        <div
            class="group flex w-11/12 md:w-[42.604vw] cursor-pointer items-center gap-2 rounded-3xl bg-secondary4 py-4 shadow-lg px-4">
            <img width="77" height="77" class="w-[10vw] md:w-[4.010vw] transition-transform group-hover:scale-105"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/datos.svg" alt="" />
            <a href="https://datamares.org/monitoreo_ecologico/?lang=es"
                class="MBlack text-[3.5vw] md:text-8xl text-gray-50 transition-colors group-hover:text-[#aeb521] text-center">
                CONSULTA LA SECCIÓN DE MONITOREO
            </a>
        </div>
    </div>
</section>

<section data-aos="fade-up" data-aos-id="number2"
    class="bg-[#4c7738] w-11/12 md:w-[95.260vw] mx-auto rounded-3xl md:flex items-center py-6">
    <div class="">
        <div class="flex justify-center md:justify-start gap-4 md:ml-6 mx-4 md:mx-0 pb-4 md:pb-12">
            <img width="78" height="78" class="w-[13vw] md:w-[4.063vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/biomasa.svg" alt="" />
            <div class="text-gray-50">
                <h1 class="text-[6vw] md:text-1m MBlack leading-none">BIOMASA RELATIVA</h1>
                <h1 class="text-6m md:text-3xl md:w-[22.396vw] leading-none">Se refiere a la biomasa de cada grupo
                    trófico con
                    respecto a la biomasa total; se expresa en porcentaje.</h1>
            </div>
        </div>
        <div class="flex">
            <div class="w-3/5 md:w-[30.208vw] bg-gray-50 h-[20vw] md:h-[6.354vw] flex items-center">
                <img width="78" height="78" class="w-[13vw] md:w-[4.063vw] ml-4 mr-4"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/arrecifes.svg" alt="" />
                <div class=" MBlack text-[#007080]">
                    <h1 class="text-[6vw] md:text-1m leading-none"><span class="number3" ini="36">36</span> <span
                            class="text-6m md:text-5xl leading-none">ARRECIFES</span></h1>
                    <h1 class="text-6m md:text-5xl leading-none ">MONITOREADOS</h1>
                </div>
            </div>
            <div
                class="w-0 h-0 border-t-[10vw] md:border-t-[3.18vw] border-l-[5vw] md:border-l-[2vw] border-b-[10vw] md:border-b-[3.18vw] border-y-transparent border-l-gray-50">
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mx-auto md:mx-0 w-3/4 md:w-[27%]">
        <img width="147" height="147" class="absolute w-[20vw] md:w-[7.656vw] z-10"
            src="https://datamares.org/wp-content/uploads/2023/11/datapie.svg" alt="" />
        <div id="arrecifes" class="w-full"></div>
    </div>
    <div class="w-3/4 md:w-auto mx-auto">
        <div class="flex gap-4 items-center justify-end">
            <h1 class="MBoldCondensed text-gray-50 text-8m md:text-5xl">PISCÍVOROS</h1>
            <img width="56" height="56" class=" w-[8vw] md:w-[2.917vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/piscivoros.svg" alt="" />
            <div class="flex items-center w-[22.5vw] md:w-[11.979vw]">
                <div class="hidden">
                    <div class="bg-gray-50 h-[6vw] w-[.1vw]"></div>
                    <div
                        class="w-0 h-0 border-t-[.7vw] border-t-transparent border-l-[.7vw] border-l-gray-50 border-b-[.7vw] border-b-transparent">
                    </div>
                </div>
                <h1 class="text-[10vw] md:text-9m MBlackCondensed leading-none text-gray-50"><span class="number2"
                        ini="19.6">19.6</span><span class="opacity-0 transition-opacity">%</span></h1>
            </div>

        </div>
        <div class="flex gap-4 items-center justify-end">
            <h1 class="MBoldCondensed text-gray-50 text-8m md:text-5xl">CARNÍVOROS</h1>
            <img width="56" height="56" class=" w-[8vw] md:w-[2.917vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/carnivoros.svg" alt="" />
            <div class="flex items-center w-[22.5vw] md:w-[11.979vw]">
                <div class="hidden">
                    <div class="bg-gray-50 h-[6vw] w-[.1vw]"></div>
                    <div
                        class="w-0 h-0 border-t-[.7vw] border-t-transparent border-l-[.7vw] border-l-gray-50 border-b-[.7vw] border-b-transparent">
                    </div>
                </div>
                <h1 class="text-[10vw] md:text-9m MBlackCondensed leading-none text-gray-50"><span class="number2"
                        ini="35.3">35.3</span><span class="opacity-0 transition-opacity">%</span></h1>
            </div>

        </div>
        <div class="flex gap-4 items-center justify-end">
            <h1 class="MBoldCondensed text-gray-50 text-8m md:text-5xl">HERBÍVOROS</h1>
            <img width="56" height="56" class=" w-[8vw] md:w-[2.917vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/herbivoros.svg" alt="" />
            <div class="flex items-center w-[22.5vw] md:w-[11.979vw]">
                <div class="hidden">
                    <div class="bg-gray-50 h-[6vw] w-[.1vw]"></div>
                    <div
                        class="w-0 h-0 border-t-[.7vw] border-t-transparent border-l-[.7vw] border-l-gray-50 border-b-[.7vw] border-b-transparent">
                    </div>
                </div>
                <h1 class="text-[10vw] md:text-9m MBlackCondensed leading-none text-gray-50"><span class="number2"
                        ini="37.8">37.8</span><span class="opacity-0 transition-opacity">%</span></h1>
            </div>

        </div>
        <div class="flex gap-4 items-center justify-end">
            <h1 class="MBoldCondensed text-gray-50 text-8m md:text-5xl">ZOOPLANCTÍVOROS</h1>
            <img width="56" height="56" class=" w-[8vw] md:w-[2.917vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/zooplanctivoros.svg" alt="" />
            <div class="flex items-center w-[22.5vw] md:w-[11.979vw]">
                <div class="hidden">
                    <div class="bg-gray-50 h-[6vw] w-[.1vw]"></div>
                    <div
                        class="w-0 h-0 border-t-[.7vw] border-t-transparent border-l-[.7vw] border-l-gray-50 border-b-[.7vw] border-b-transparent">
                    </div>
                </div>
                <h1 class="text-[10vw] md:text-9m MBlackCondensed leading-none text-gray-50"><span class="number2"
                        ini="7.3">7.3</span><span class="opacity-0 transition-opacity">%</span></h1>
            </div>

        </div>
    </div>
</section>

<section data-aos="fade-up" data-aos-id="number3"
    class="bg-[#4c7738] w-11/12 md:w-[95.260vw] mx-auto rounded-3xl md:flex justify-between items-center py-6 mt-6">
    <div class="">
        <div class="flex justify-center md:justify-start gap-4 md:ml-6 mx-4 md:mx-0 pb-4 md:pb-12">
            <img width="78" height="78" class="w-[13vw] md:w-[4.063vw]"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/riqueza.svg" alt="" />
            <div class="text-gray-50">
                <h1 class="text-[6vw] md:text-1m MBlack leading-none">RIQUEZA</h1>
                <h1 class="text-6m md:text-3xl md:w-[22.396vw] leading-none">El número total de especies en un hábitat,
                    ecosistema,
                    área o región determinada.</h1>
            </div>
        </div>
        <div class="flex">
            <div
                class="w-3/5 md:w-[30.208vw] bg-gray-50 h-[22vw] md:h-[14.688vw] flex flex-col justify-center items-center ">
                <h1 class="text-[6vw] md:text-4m MBlack text-[#007080] leading-none">RIQUEZA TOTAL</h1>
                <div class="flex items-center">
                    <img width="166" height="79" class="w-[22vw] md:w-[8.646vw] ml-6 mr-4"
                        src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/invypec.svg" alt="" />
                    <div class=" MBlack text-[#007080]">

                        <h1 class="text-[8vw] md:text-8m leading-none number3" ini="222">222</h1>
                        <h1 class="text-[3vw] md:text-5xl leading-none ">INVERTEBRADOS
                            <br> Y PECES
                        </h1>
                    </div>
                </div>
            </div>
            <div
                class="w-0 h-0 border-t-[11vw] md:border-t-[7.4vw] border-l-[6vw] md:border-l-[3vw] border-b-[11vw] md:border-b-[7.4vw] border-y-transparent border-l-gray-50">
            </div>
        </div>
    </div>
    <div class="w-11/12 mx-auto md:mx-0 md:w-[62%]">
        <div class="flex items-center justify-center h-[50vw] md:h-[19vw] mr-4">
            <div id="riqueza" class="w-full"></div>
        </div>
    </div>



</section>

<section data-aos="fade-up" class="mt-12 md:mt-28 w-11/12 md:w-[95.260vw] mx-auto md:flex">
    <div class="w-full md:w-[59.948vw]">
        <div class="bg-[#eff0d3] flex rounded-tr-3xl md:rounded-tr-none">
            <img width="415" height="118" class="w-[50vw] md:w-[21vw] py-4 md:py-0 px-8 bg-gray-50"
                src="https://datamares.org/wp-content/uploads/2023/11/dataviz.svg" alt="" />
            <div
                class="border-t-[18vw] md:border-t-[10vw] border-r-[6vw] border-l-0 border-solid border-t-gray-50 border-l-[#eff0d3] border-r-[#eff0d3] dark:border-t-gray-900">
            </div>
        </div>
        <div class="bg-[#eff0d3] py-4 md:py-8 rounded-bl-none md:rounded-bl-3xl rounded-l-3xl px-4 md:px-0 md:pl-8">
            <h1
                class='MBlackCondensed text-[7vw] md:text-6m text-[#4c7738] leading-none mb-4 text-center md:text-start'>
                TURISMO EN CABO PULMO
            </h1>
            <div class="flex gap-4">
                <img width="104" height="104" class="w-[15vw] md:w-[5.417vw]"
                    src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/turismoviz.svg" alt="" />
                <h1 class="text-6m md:text-5xl text-[#4c7738] leading-none">
				Para garantizar la gestión adecuada del PN Cabo Pulmo, es necesario contar con información que nos permita comprender los patrones de uso que se le da a la ANP. Personal de CONANP y prestadores de servicios mantienen un registro de las actividades de turismo que realizan, lo que permite monitorear la salud de los ecosistemas marinos.</h1>
            </div>
        </div>
    </div>
    <div
        class="bg-[#eff0d3] w-full md:w-[35.313vw] md:rounded-bl-none rounded-b-3xl md:rounded-r-3xl pb-6 pt-2 md:py-8 flex items-center overflow-hidden">
        <a href="https://public.tableau.com/app/profile/datamares/viz/Prueba_pulmo/Portada" target="_blank"
            class="bg-[#eff0d3] w-full rounded-r-3xl hover:scale-105 transition-transform flex items-center ">
            <img width="90" height="90" class="w-[14vw] ml-[7.5vw]  md:w-[4vw] mx-auto md:ml-[3.5vw] absolute"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
            <img width="546" height="449"
                class="w-[60vw] md:w-[24.438vw] mx-auto border-primary2 border-4 shadow-xl rounded-xl"
                src="https://datamares.org/wp-content/uploads/2023/11/Captura-de-pantalla-2023-11-13-a-las-7.20.39-p.m.png"
                alt="">
        </a>
    </div>
</section>

<section data-aos="fade-up" class="mt-12 md:mt-28 w-11/12 md:w-[95.260vw] mx-auto md:flex">
    <div class="w-full md:w-[59.948vw]">
        <div class="bg-[#eff0d3] flex rounded-tr-3xl md:rounded-tr-none">
            <img width="415" height="118" class="w-[50vw] md:w-[21vw] py-4 md:py-0 px-8 bg-gray-50"
                src="https://datamares.org/wp-content/uploads/2023/11/dataviz.svg" alt="" />
            <div
                class="border-t-[18vw] md:border-t-[10vw] border-r-[6vw] border-l-0 border-solid border-t-gray-50 border-l-[#eff0d3] border-r-[#eff0d3] dark:border-t-gray-900">
            </div>
        </div>
        <div class="bg-[#eff0d3] py-4 md:py-8 rounded-bl-none md:rounded-bl-3xl rounded-l-3xl px-4 md:px-0 md:pl-8">
            <h1
                class='MBlackCondensed text-[7vw] md:text-6m text-[#4c7738] leading-none mb-4 text-center md:text-start'>
                BIODIVERSIDAD TERRESTRE
            </h1>
            <div class="flex gap-4">
                <img width="95" height="111" class="w-[15vw] md:w-[4.948vw]"
                    src="https://datamares.org/wp-content/themes/dM-v2/img/CaboPulmo/anpVerde.svg"
                    alt="">
                <h1 class="text-6m md:text-5xl text-[#4c7738] leading-none">
				En la parte terrestre aledaña al PN Cabo Pulmo existen cuatro hábitats principales: matorral árido, matorral árido espinoso, dunas y áreas riparias. Cada uno de estos hábitats albergan a una diversidad única de especies de plantas y animales, varias de ellas endémicas a la región.
				</h1>
            </div>
        </div>
    </div>
    <div
        class="bg-[#eff0d3] w-full md:w-[35.313vw] md:rounded-bl-none rounded-b-3xl md:rounded-r-3xl pb-6 pt-2 md:py-8 flex items-center overflow-hidden">
        <a href="https://public.tableau.com/app/profile/datamares/viz/CaboPulmoNationalParkdiversity/Terrestrialecosystems"
            target="_blank"
            class="bg-[#eff0d3] w-full rounded-r-3xl hover:scale-105 transition-transform flex items-center ">
            <img width="90" height="90" class="w-[14vw] ml-[7.5vw]  md:w-[4vw] mx-auto md:ml-[3.5vw] absolute"
                src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
            <img width="546" height="449"
                class="w-[60vw] md:w-[24.438vw] mx-auto border-primary2 border-4 shadow-xl rounded-xl"
                src="https://datamares.org/wp-content/uploads/2023/11/Captura-de-pantalla-2023-11-13-a-las-7.19.47-p.m-1.png"
                alt="">
        </a>
    </div>
</section>




<div data-aos="fade-up" class="mt-6 md:mt-12 w-[95.260vw] mx-auto mb-12 md:mb-24">
    <h1
        class='MBlackCondensed text-[7vw] md:text-6m text-[#4c7738] leading-none md:mb-12 mb-6 md:pl-8 text-center md:text-start'>
        VISITA NUESTRA
        SECCIÓN
    </h1>
    <a href="https://datamares.org/atlas-de-buceo/?lang=es">
        <img width="1830" height="501"
            class="w-11/12 md:w-[95.260vw] mx-auto  shadow-xl rounded-3xl hover:scale-[1.02] transition-transform"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/atlas.svg" alt="">
    </a>
</div>

<div data-aos="fade-up" class="bg-[#4c7738] py-16 px-8">
    <div class="flex items-center justify-center md:justify-start gap-4">
        <img width="127" height="96" class="w-[16vw] md:w-[6.615vw]"
            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/exc.svg" alt="">
        <h1 class="MBlack text-[6vw] md:text-8xl text-gray-50">TE PUEDE INTERESAR</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <div class="">
            <a class="group" href="https://losnumerosnaturales.org/ecoturismo.html" target="_blank">
                <img width="339" height="187"
                    class="w-11/12 md:w-[17.135vw] shadow-xl mx-auto border-gray-50 border-4 rounded-xl group-hover:scale-105 transition-transform"
                    src="https://datamares.org/wp-content/uploads/2023/11/image-19.png" alt="">
                <div
                    class="w-11/12 md:w-[16.510vw] group-hover:bg-[#aeb521] transition-colors bg-secondary4 border-[#aeb521] border-8 mb-12 md:mb-auto mt-8 rounded-3xl mx-auto">
                    <div class="border-gray-50 border-4 p-2 rounded-2xl flex items-center gap-4">
                        <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
                        <h1 class="MBlack text-9m md:text-xl text-gray-50">Ecoturismo Marino</h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="">
            <a class="group" href="https://vimeo.com/163299942" target="_blank">
                <img width="339" height="187"
                    class="w-11/12 md:w-[17.135vw] shadow-xl mx-auto border-gray-50 border-4 rounded-xl group-hover:scale-105 transition-transform"
                    src="https://datamares.org/wp-content/uploads/2023/11/image-20.png" alt="">
                <div
                    class="w-11/12 md:w-[16.510vw] group-hover:bg-[#aeb521] transition-colors  bg-secondary4 border-[#aeb521] border-8 mb-12 md:mb-auto mt-8 rounded-3xl mx-auto">
                    <div class="border-gray-50 border-4 p-2 rounded-2xl flex gap-4 items-center">
                        <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
                        <h1 class="MBlack text-9m md:text-xl text-gray-50">CP: Una historia de éxito</h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="">
            <a class="group"
                href="https://ezcurralab.ucr.edu/sites/default/files/2020-05/cabo_pulmo_biodiversity_report.pdf"
                target="_blank">
                <img width="339" height="187"
                    class="w-11/12 md:w-[17.135vw] shadow-xl mx-auto border-gray-50 border-4 rounded-xl group-hover:scale-105 transition-transform"
                    src="https://datamares.org/wp-content/uploads/2023/11/image-21.png" alt="">
                <div
                    class="w-11/12 md:w-[16.510vw] group-hover:bg-[#aeb521] transition-colors bg-secondary4 border-[#aeb521] border-8 mb-12 md:mb-auto mt-8 rounded-3xl mx-auto">
                    <div class="border-gray-50 border-4 p-2 rounded-2xl flex items-center gap-4">
                        <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                            src="<?php bloginfo('template_url'); ?>/img/CaboPulmo/cursor.svg" alt="">
                        <h1 class="MBlack text-9m md:text-xl text-gray-50">Reporte Ezcurra Lab</h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="md:mt-4">
        <h1 class="MBlack text-[6vw] md:text-1m text-gray-50 text-center md:text-start">REFERENCIAS</h1>

        <div class="mb-4 md:my-8">
            <a href="http://sig.conanp.gob.mx/website/pagsig/info_shape.htm"
                class="Mbold text-gray-50 text-9m text-center md:text-start md:text-4xl flex justify-center md:justify-start"
                target="_blank" rel="noopener noreferrer">
                • http://sig.conanp.gob.mx/<span class="hidden md:block">pagsig/info_shape.htm</span>
            </a>
            <br>
            <a href="https://simec.conanp.gob.mx/ficha.php?anp=111&reg=1"
                class="Mbold text-gray-50 text-9m text-center md:text-start md:text-4xl flex justify-center md:justify-start"
                target="_blank" rel="noopener noreferrer">
                • https://simec.conanp.gob.mx/<span class="hidden md:block">ficha.php?anp=111&reg=1</span>
            </a>
        </div>
        <h1 class="text-gray-50 MBold text-9m md:text-4xl leading-none text-center md:text-start">ACTUALIZACIÓN: <br
                class="md:hidden"> <span class="MBlack text-[#aeb521]">NOVIEMBRE
                DE
                2023</span></h1>
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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/splide.min.css" />
<script
    src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4/dist/js/splide-extension-grid.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/cp.js"></script>