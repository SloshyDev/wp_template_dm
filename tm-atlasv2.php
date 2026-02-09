<?php get_header();
/*template name:dive Atlas v2*/
?>

<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/diveAtlas.css">

<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/caboPulmo.css">

<style>
    .apexcharts-text tspan {
        font-family: myriad-pro-condensed, system-ui !important;
    }
	.splide__arrow svg {
  stroke: white ;
  stroke-width: .3vw;
  fill: none;
  width: 2vw;
  height: 2vw;
}
	.bg-yellow {
    --tw-bg-opacity: 1;
    background-color: rgb(158 165 33 / var(--tw-bg-opacity));
}
	header{
		z-index:10;
	}
	.bg-blue-100  a:hover{
		color: #9ea521;
	}


.right-\[4vw\] {
  right: 4vw;
}

.z-10 {
  z-index: 10;
}

.mx-8 {
  margin-left: 2rem;
  margin-right: 2rem;
}

.mx-\[10vw\] {
  margin-left: 9vw;
  margin-right: 9vw;
}

.my-\[3vw\] {
  margin-top: 3vw;
  margin-bottom: 3vw;
}

.my-\[5vw\] {
  margin-top: 5vw;
  margin-bottom: 5vw;
}

.my-4 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.mt-\[\.5vw\] {
  margin-top: .5vw;
}

.mt-\[1vw\] {
  margin-top: 1vw;
}

.mt-\[5vw\] {
  margin-top: 5vw;
}

.h-\[19\.6vw\] {
  height: 19.6vw;
}

.h-\[33vw\] {
  height: 33vw;
}

.h-\[5\.6vw\] {
  height: 5.6vw;
}

.w-\[\.3vw\] {
  width: .3vw;
}

.w-\[11\.5vw\] {
  width: 11.5vw;
}

.w-\[19\.6vw\] {
  width: 19.6vw;
}

.w-\[24vw\] {
  width: 24vw;
}

.w-\[26vw\] {
  width: 26vw;
}

.w-\[34vw\] {
  width: 34vw;
}

.w-\[4\.3vw\] {
  width: 4.3vw;
}

.w-\[43\.5vw\] {
  width: 43.5vw;
}

.w-\[5\.5vw\] {
  width: 5.5vw;
}



.w-\[9\.5vw\] {
  width: 9.5vw;
}

.w-full {
  width: 100%;
}


.gap-\[12\.5vw\] {
  gap: 12.5vw;
}

.gap-\[1vw\] {
  gap: 1vw;
}

.rounded-\[1vw\] {
  border-radius: 1vw;
}

.bg-\[\#237370\] {
  --tw-bg-opacity: 1;
  background-color: rgb(35 115 112 / var(--tw-bg-opacity, 1));
}

.bg-\[\#A5AC21\] {
  --tw-bg-opacity: 1;
  background-color: rgb(165 172 33 / var(--tw-bg-opacity, 1));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1));
}

.p-\[1vw\] {
  padding: 1vw;
}

.pb-\[1\.5vw\] {
  padding-bottom: 1.5vw;
}

.pr-\[2vw\] {
  padding-right: 2vw;
}

.text-center {
  text-align: center;
}

.text-end {
  text-align: end;
}

.text-\[1\.5vw\] {
  font-size: 1.5vw;
}

.text-\[1\.9vw\] {
  font-size: 1.9vw;
}

.text-\[6\.7vw\] {
  font-size: 6.7vw;
}

.leading-none {
  line-height: 1;
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity, 1));
}

.mpBold {
  font-family: "myriad-pro", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.mpBlack {
  font-family: "myriad-pro-condensed", sans-serif;
  font-weight: 900;
  font-style: normal;
}
</style>

<div class="w-full">
    <?php if (has_post_thumbnail($post->ID)) { ?>
        <?php $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    } ?>
    <img src="<?php echo $image; ?>" alt="">
</div>

   <div class="bg-[#237370] my-4 mx-8 rounded-[1vw] p-[1vw] text-white">
        <h1 class="mbBold text-[1.5vw] text-center mx-[10vw]">
            El buceo es parte de una industria multimillonaria que depende de ecosistemas saludables. El potencial que
            este sector tiene para impulsar esfuerzos de conservación es inmenso y podría ayudar a catalizar iniciativas
            que prioricen el bienestar de comunidades costeras a través de la conservación del capital natural marino y
            costero.
        </h1>
        <section class="flex justify-center items-center gap-[1vw] my-[3vw]">
            <div class="w-[43.5vw] flex justify-between items-center relative right-[4vw]">
                <div class="w-full flex justify-between items-end">
                    <div class="absolute w-[19.6vw] h-[19.6vw] flex justify-center items-center">
                        <img class="absolute w-[9.5vw] mt-[1vw]" src="https://datamares.org/wp-content/uploads/2025/02/chart-1.svg" alt="">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class=""></div>
                    <div class="w-[34vw] flex flex-col justify-center">
                        <div class="w-full pr-[2vw] flex justify-end">
                            <div class="flex flex-col justify-center items-center">
                                <h1 class="text-[6.7vw] mpBlack text-center leading-none">859</h1>
                                <p class="mpBold text-center text-[1.9vw] leading-none">sitios de buceo en México
                                </p>
                                <img class="w-[4.3vw] h-[5.6vw] mt-[.5vw]"
                                    src="https://datamares.org/wp-content/uploads/2025/02/Asset-3-1.svg" alt="">
                            </div>
                        </div>
                        <div class="w-full bg-[#A5AC21] p-[1vw] pb-[1.5vw] rounded-[1vw] pr-[2vw] flex justify-end">
                            <div class="">
                                <h1 class="text-[6.7vw] mpBlack text-end leading-none">59.25%</h1>
                                <p class="mpBold text-center text-[1.9vw] leading-none">están dentro de un<br>área
                                    protegida.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute flex justify-center items-center">
                <div class="w-[.3vw] h-[33vw] bg-white absolute"></div>
                <img class="w-[8vw] relative" src="https://datamares.org/wp-content/uploads/2025/02/Asset-2-4.svg"
                    alt="">
            </div>
            <div class="">
                <div class="flex flex-col justify-center items-center">
                    <img class="absolute w-[24vw] mt-[5vw]"
                        src="https://datamares.org/wp-content/uploads/2025/02/Asset-1-3.svg" alt="">
                    <h1 class="text-[6.7vw] mpBlack text-center leading-none">509</h1>
                    <p class="mpBold text-center text-[1.9vw] leading-none">sitios dentro de una ANP
                    </p>
                </div>
                <section class="flex justify-center gap-[12.5vw] ">
                    <div class="flex flex-col justify-center items-center">
                        <div class="w-[11.5vw] flex justify-center items-center z-10">
                            <img class="w-[5.5vw] absolute mt-[1vw]"
                                src="https://datamares.org/wp-content/uploads/2025/02/Asset-2-3.svg" alt="">
                            <canvas id="pie2"></canvas>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="w-[11.5vw] flex justify-center items-center z-10">
                            <img class="w-[5.5vw] absolute mt-[1vw]"
                                src="https://datamares.org/wp-content/uploads/2025/02/Asset-3-2.svg" alt="">
                            <canvas id="pie3"></canvas>
                        </div>
                    </div>
                </section>
                <section class="flex">
                    <div class="w-[26vw] relative right-[4vw]">
                        <h1 class="text-[6.7vw] mpBlack text-center leading-none">28.5%</h1>
                        <p class="mpBold text-center text-[1.9vw] leading-none">
                            en zonas totalmente protegidas
                        </p>
                    </div>
                    <div class="">
                        <h1 class="text-[6.7vw] mpBlack text-center leading-none">71.5%</h1>
                        <p class="mpBold text-center text-[1.9vw] leading-none">
                            en zonas multiuso
                        </p>
                    </div>
                </section>

            </div>
        </section>





    </div>

<section class="flex justify-center">
    <div class="flex flex-col gap-[1vw] mt-[2vw]">
        <div class="flex items-center">
            <div class="text-end w-[25.5vw] mr-4">
                <h1 class="text-green-100 text-4w font-myriadCond font-black leading-none">$ <?php  echo _e('722 MD','dm'); ?></h1>
                <h1 class="text-blue-100 font-myriadCond font-bold leading-none text-18w">
					<?php  echo _e("economic contribution of the diving tourism sector to Mexico's economy in 2019.",'dm'); ?>
                </h1>
            </div>
            <img class="w-6w" src="https://datamares.org/wp-content/uploads/2024/03/Asset-1-1.svg" alt="">

        </div>
        <div class="flex items-center">
            <div class="text-end w-[25.5vw] mr-4">
                <h1 class="text-green-100 text-4w font-myriadCond font-black leading-none">$ <?php  echo _e('455 MD','dm'); ?></h1>
                <h1 class="text-blue-100 font-myriadCond font-bold leading-none text-18w">
                    <?php  echo _e('economic contribution of small tourism businesses.','dm'); ?>
                </h1>
            </div>
            <img class="w-6w" src="https://datamares.org/wp-content/uploads/2024/03/Asset-1-1.svg" alt="">

        </div>

    </div>
    <div class="h-[23.5vw]">
        <div class="w-[60vw] " id="chart"></div>
    </div>
</section>

<section class="rounded-[2.5vw] mx-8 p-[2vw] bg-blue-100 flex gap-8">
    <a class="" href="">
        <img src="https://datamares.org/wp-content/uploads/2024/03/Asset-1.png"
            class="w-[36vw] border-4 border-white rounded-xl shadow-md hover:scale-[1.02] transition-transform" alt=" ">
    </a>
    <div class="flex flex-col justify-evenly">
        <img class="w-[25.5vw]" src="https://datamares.org/wp-content/uploads/2024/03/Asset-3.svg" alt="">
        <div class="leading-none text-white">
            <h1 class="font-myriadCond font-bold text-46w uppercase"><?php  echo _e('Diving and snorkel atlas','dm'); ?></h1>
            <h1 class="font-myriad font-bold text-12w w-[36vw]" style="width:37vw">
                <?php  echo _e("Dive into this interactive atlas and explore Mexico's diving sites and marine protected areas.",'dm'); ?>
            </h1>
        </div>
        <div class="text-white text-16w font-myriadCond font-bold flex justify-around gap-4">
            <a style="height: fit-content;" class="bg-blue-300 rounded-full border-yellow border-[.4vw] px-[2vw] py-[.1vw] block w-fit hover:scale-105 transition-all hover:shadow-md "
                href="https://datamares.org/wp-content/uploads/2022/08/ATLAS-DE-BUCEO.pdf">
                <?php  echo _e("EXPLORE THE INTERACTIVE PDF",'dm'); ?>
            </a>
            <a style="height: fit-content;" class="bg-blue-300 rounded-full border-yellow border-[.4vw] px-[2vw] py-[.1vw] block w-fit hover:scale-105 transition-all hover:shadow-md "
                href="https://datamares.org/dwd/atlas-de-buceo-interactivo/">
                 <?php  echo _e("DOWNLOAD THE INTERACTIVE PDF",'dm'); ?>
            </a>
        </div>
    </div>
</section>

<section class="my-8">
    <div class="flex justify-start">
        <div class="w-1/2 md:w-auto group flex cursor-pointer justify-center items-center bg-green-200 md:pl-8"
            onclick="changeCarrousel('multimedia')">
            <img width="60" height="60" class="mr-2 w-[6vw] md:w-[3.125vw] transition-transform group-hover:scale-105"
                src="https://datamares.org/wp-content/themes/dM-v2/img/CaboPulmo/cursor.svg" alt="" />
            <h1
                class="font-myriad font-black z-10 text-22w text-white transition-colors group-hover:text-yellow md:ml-auto">
                <?php  echo _e("MULTIMEDIA",'dm'); ?>
            </h1>
        </div>
        <div
            class="hidden md:block md:w-4 border-t-[4.167vw] border-l-[4.167vw] border-r-0 border-solid border-t-yellow border-l-green-200 border-r-green-200 dark:border-t-yellow">
        </div>
        <div class="w-1/2 md:w-auto group flex  justify-center items-center cursor-pointer bg-yellow"
            onclick="changeCarrousel('galeria')">
            <img width="60" height="60" class="mr-2 w-[6vw] md:w-[3.125vw] transition-transform group-hover:scale-105"
                src="https://datamares.org/wp-content/themes/dM-v2/img/CaboPulmo/cursor.svg" alt="" />
            <h1
                class="font-myriad font-black z-10 text-22w text-white transition-colors group-hover:text-green-200 md:ml-auto">
               <?php  echo _e("GALLERY",'dm'); ?>
            </h1>
        </div>
        <div
            class="hidden md:block md:w-[52%] border-t-[4.167vw] border-l-[4.167vw] border-r-0 border-solid border-t-white border-l-yellow border-r-yellow">
        </div>
    </div>

    <?php if (have_rows('videos')): ?>
        <section id="multimedia" class="splide mx-auto  bg-green-200 min-h-[22vw]" aria-label="Carrousel ATRACTIVOS">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while (have_rows('videos')):
                        the_row(); ?>

                        <li class="splide__slide flex flex-col py-8">
                            <img onclick="showModal('<?php the_sub_field('video'); ?>')" width="527" height="410"
                                class="mx-auto shadow-lg w-3/4 rounded-lg hover:scale-105 transition-transform cursor-pointer"
                                src="<?php the_sub_field('img'); ?>" alt="" />
                        </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('galeria')): ?>
        <section id="galeria" class="splide hidden mx-auto  bg-yellow min-h-[22vw]" aria-label="Carrousel ATRACTIVOS">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $images = get_field('galeria');
                    if ($images): ?>

                        <?php foreach ($images as $image): ?>
                            <li class="splide__slide flex flex-col py-8">
                                <img width="527" height="410" class="mx-auto shadow-lg w-3/4 rounded-lg"
                                    src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </li>
                        <?php endforeach; ?>

                    <?php endif; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>


</section>

<div class="bg-green-200 px-6 py-4">
    <div class="mb-8">
        <div class="flex items-center justify-center md:justify-start gap-4">
            <img width="127" height="96" class="w-[16vw] md:w-[6.615vw]"
                src="https://datamares.org/wp-content/themes/dM-v2/img/CaboPulmo/exc.svg" alt="">
            <h1 class="font-myriad font-black text-2w text-gray-50">
                <?php  echo _e("YOU MIGHT LIKE",'dm'); ?>
            </h1>
        </div>
    </div>
    <div class="flex">
        <div class="w-1/4 flex justify-around">
            <a class="block group py-12" href="<?php  echo _e("https://datamares.org/preview/dp_diving-atlas/?lang=es",'dm'); ?>">
                <img class="rounded-md shadow-lg mb-6 group-hover:scale-[1.02] w-[16vw] transition-transform mx-auto"
                    src="<?php  echo _e("https://datamares.org/wp-content/uploads/2024/03/image-26.png",'dm'); ?>" alt="">

                <div class="rounded-[2vw] border-4 border-yellow overflow-hidden w-fit bg-blue-300 m-auto">
                    <div
                        class="border-4 border-white rounded-[2vw]  flex items-center gap-1 text-[.8vw] text-white leading-none font-myriad font-black w-fit px-4 py-1">
                        <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                            src="https://datamares.org/wp-content/themes/dM-v2/img/CaboPulmo/cursor.svg" alt="">
                        <h1>dataPoster <br><?php  echo _e("Diving Atlas",'dm'); ?></h1>
                    </div>
                </div>
            </a>

            <div class="w-[.2vw] bg-white rounded-3xl h-full"></div>
        </div>
        <div class="w-3/4">
            <?php if (have_rows('datapub')): ?>
                <section id="datapub" class="splide mx-auto " aria-label="Carrousel datapubs">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_rows('datapub')):
                                the_row(); ?>
                                <div class="splide__slide flex-col w-1/3 flex justify-around">
                                    <a class="block group py-12" href="<?php the_sub_field('link') ?>" target="_blank">
                                        <img class="rounded-md shadow-lg mb-6 group-hover:scale-[1.02] w-[16vw] transition-transform mx-auto"
                                            src="<?php the_sub_field('img') ?>" alt="">

                                        <div
                                            class="rounded-[2vw] border-4 w-3/4 border-yellow overflow-hidden bg-blue-300 m-auto">
                                            <div
                                                class="border-4 w-full border-white rounded-[2vw]  flex items-center gap-1 text-white leading-none font-myriad font-black px-4 py-1">
                                                <img width="47" height="47" class="w-[8vw] md:w-[2.448vw]"
                                                    src="https://datamares.org/wp-content/themes/dM-v2/img/CaboPulmo/cursor.svg"
                                                    alt="">
                                                <h1 class="text-[.8vw]">
                                                    <?php the_sub_field('title') ?>
                                                </h1>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>

	#sponsors svg {
    stroke: #237370 !important;
    stroke-width: .3vw;
    fill: none;
    width: 2vw;
    height: 2vw;
}
</style>

<?php if (have_rows('sponsors')): ?>
    <h1 class="my-4 font-myriad px-3 font-black text-22w text-center text-blue-100"> <?php  echo _e("COLLABORATORS ",'dm'); ?></h1>
    <section id="sponsors" class="splide mx-auto my-8 " style="width: 95%;
    padding-inline: 4vw;" aria-label="Carrousel ATRACTIVOS">
        <div id="patro" class="splide__track px-[4vw]">
            <ul class="splide__list">
                <?php while (have_rows('sponsors')):
                    the_row(); ?>
                    <li class="splide__slide">
                        <img class="mx-auto w-3/4" src="<?php the_sub_field('img'); ?>" alt="" />
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

<div class="bg-blue-100 flex items-center">

    <div class="flex">
        <div class="bg-yellow p-6 flex ">
            <img class="w-[18vw]" src="<?php  echo _e("https://datamares.org/wp-content/uploads/2024/03/Asset-2-2.svg",'dm'); ?>" alt="">
        </div>
        <div
            class="w-0 h-0 border-t-[11vw] md:border-t-[7.4vw] border-l-[6vw] md:border-l-[3vw] border-b-[11vw] md:border-b-[7.4vw] border-y-transparent border-l-yellow">
        </div>
    </div>
    <div class="text-white text-1w font-myriad font-semibold ml-6 w-[25vw]">
        <h1>•
            <span class="font-black">Octavio Aburto Oropeza</span><br>
            Scripps Institution of Oceanography, UCSD
            <a href="mailto:maburto@ucsd.edu">maburto@ucsd.edu</a>
            <br><br>
            • <span class="font-black">Fabio Favoretto</span><br>
            Scripps Institution of Oceanography
            <a href="mailto:ffavoretto@ucsd.edu">ffavoretto@ucsd.edu</a>
        </h1>
    </div>
</div>



<div onclick="" id="modal" class="hidden fixed justify-center items-center w-full h-screen z-10">
    <div onclick="closeModal()"
        class="fixed justify-center items-center backdrop-blur-lg z-20 top-0 bg-black/75 w-full h-screen"></div>
    <div onclick="closeModal()"
        class="fixed top-[3vw] z-20 right-[5vw] px-4 py-2 rounded-lg bg-blue-100 text-white font-black hover:scale-105 transition-transform cursor-pointer">
        x</div>
    <video id="video" class="z-20 h-[35vw] m-auto fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 " controls>
        <source src="" type="video/mp4">
    </video>
</div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1"></script>
    <script>

        const pieChart = new Chart(
            document.getElementById('myChart'), {
            type: 'pie',
            data: {
                datasets: [{
                    data: [59.25, 100 - 59.25],
                    backgroundColor: [
                        "#A5AC21", "#237370"
                    ],
                    borderWidth: 7,

                }]
            },
        }
        );
        const pie3 = new Chart(
            document.getElementById('pie3'), {
            type: 'pie',
            data: {
                datasets: [{
                    data: [71.5, 100 - 71.5],
                    backgroundColor: [
                        "#669551", "#237370"
                    ],
                    borderWidth: 4,

                }]
            },
        }
        );
        const pie2 = new Chart(
            document.getElementById('pie2'), {
            type: 'pie',
            data: {
                datasets: [{
                    data: [28.5, 100 - 28.5],
                    backgroundColor: [
                        "#669551", "#237370"
                    ],
                    borderWidth: 4,

                }]
            },
        }
        );


    </script>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/diveAtlas.js"></script>
<?php get_footer(); ?>