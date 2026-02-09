<?php get_header();
/*template name: dataKidsTL*/
?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/splide.min.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dataKids.css">


<!-- Banner -->
<div>
    <?php if (has_post_thumbnail($post->ID)) { ?>
    <?php $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    } ?>
    <img src="<?php echo $image; ?>" alt="Banner datakids" class="mx-auto w-full" width="1905" height="274" />
</div>
<!-- datakids editions -->
<?php if (have_rows('datakids_editions')): ?>
    <section id="datakids_editions" class="splide mx-10w rounded-lg md:mx-40w" aria-label="reports banners">
        <div class="splide__arrows customArrows">
            <button aria-label='prev slide' class="splide__arrow splide__arrow--prev">
                <svg class="stroke-[.5vw] md:stroke-[.1vw] stroke-blue-100" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 42.63 96.59">
                    <g>
                        <path class="cls-1 "
                            d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z" />
                    </g>
                </svg>
            </button>
            <button aria-label='next slide' class="splide__arrow splide__arrow--next">
                <svg class="stroke-[.5vw] md:stroke-[.1vw] stroke-blue-100" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 42.63 96.59">
                    <g>
                        <path class="cls-1"
                            d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z" />
                    </g>
                </svg>
            </button>
        </div>
        <div class="splide__track mx-auto w-full md:w-11/12">
            <section class="splide__list">
                <?php $i = 1;
					$j =0;
                while (have_rows('datakids_editions')):
                    the_row(); 
			 if($i == 1)
			 {
				 $j=1;
			 }else{
				 $j = $i;
			 }
				?>

                    <div class="splide__slide mb-20w mt-20w flex flex-col" role="banner">
                        <h1 class="font-myriad font-black text-70w md:text-25w text-center  text-blue-100">dataKids<br>
<span class="text-yellow-100 text-90w md:text-40w">202<?php echo $j; ?></span>
                        </h1>
                    </div>

                <?php $i++;
                endwhile; ?>

            </section>
        </div>
    </section>
<?php endif; ?>

<style>

	#dk5{
		justify-content:center;
	}

</style>

<!-- Winners and gallery -->
<div class="">
    <?php if (have_rows('datakids_editions')):
        $dk_edition = 1 ?>

        <?php while (have_rows('datakids_editions')):
            the_row();
            $type = get_sub_field('type'); ?>
            <div id="dk<?php echo $dk_edition ?>" class="editions hidden first:block">
                <div style="justify-content:center;" id="dk<?php echo $dk_edition ?>" class="block md:flex justify-center">
                    <?php if ($type) { ?>
                        <?php $winnersGallery = get_sub_field('winnersgallery');
                        if ($winnersGallery): ?>
                            <!-- Winners -->
                            <div class="md:w-1/2 md:mx-auto mx-30w">
                                <h1 class="font-myriad font-black text-70w my-50w md:text-15w text-blue-100 text-center md:my-10w">Ganadores</h1>
                                <?php foreach ($winnersGallery as $image): ?>
                                    <img width="254" height="343"
                                        class=" w-full md:w-2/3 md:h-[17.4vw] my-20w md:mx-auto rounded-[1vw] shadow-lg"
                                        src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <?php $gallery = get_sub_field('gallery');
                        if ($gallery): ?>
                            <!-- Gallery -->
                            <div class="md:w-1/2 mx-auto">
                                <h1 class="font-myriad font-black text-70w my-50w md:text-15w text-blue-100 text-center md:my-10w">Galería</h1>
                                <div id="gallery<?php echo $dk_edition ?>"
                                    class="mx-30w md:w-11/12 md:mx-auto flex flex-wrap gap-x-05w mt-20w h-[143vw] md:h-[56.5vw] baultNews snap-y overflow-y-scroll overflow-x-hidden">
                                    <?php $id = 0;
                                    foreach ($gallery as $image): ?>
                                        <img onclick="showModal(<?php echo $dk_edition ?>,<?php echo $id ?>)" width="254" height="343"
                                            class="cursor-pointer snap-start md:w-[48%] w-auto h-[70vw] md:h-[17.4vw] mx-auto mb-20w rounded-[1vw] hover:shadow-lg hover:scale-[1.01] transition-all"
                                            src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php $id++;
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>



                        <!-- Gallery pop up -->
                        <div id="galleryModal<?php echo $dk_edition ?>"
                            class="modal fixed bottom-0 left-0 right-0 top-0 z-10 hidden h-full w-full">
                            <div onclick="closeModal()"
                                class="modalBackground absolute bottom-0 left-0 right-0 top-0 bg-gray-900/80 backdrop-blur-lg">
                            </div>

                            <div class="modalContent z-10 mx-auto flex flex-col items-center justify-center gap-10w">
                                <div id="g<?php echo $dk_edition ?>" class="splide" role="group"
                                    aria-label="Splide Basic HTML Example">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <?php if ($gallery): ?>

                                                <?php foreach ($gallery as $image): ?>
                                                    <li class="splide__slide">
                                                        <img width="254" height="343" class="w-1/3 mx-auto rounded-[1vw]"
                                                            src="<?php echo esc_url($image['url']); ?>"
                                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </li>
                                                <?php endforeach; ?>

                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div id="gsync<?php echo $dk_edition ?>" class="splide" role="group"
                                    aria-label="Splide Basic HTML Example">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <?php if ($gallery): ?>

                                                <?php $i = 0;
                                                foreach ($gallery as $image): ?>
                                                    <li class="splide__slide">
                                                        <img onclick="goto('<?php echo $dk_edition ?>', <?php echo $i ?>)" width="254"
                                                            height="343"
                                                            class="w-3/5 hover:scale-105 transition-transform cursor-pointer mx-auto rounded-[1vw]"
                                                            src="<?php echo esc_url($image['url']); ?>"
                                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </li>
                                                <?php $i++;
                                                endforeach; ?>

                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute right-[3vw] top-[3vw] flex z-10 gap-10w md:block">
                                <button onclick="closeModal()" class="group" aria-label="closeModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-[10vw] fill-blue-200 stroke-white shadow-2xl transition-all group-hover:scale-105 group-hover:stroke-yellow-100 md:w-[3vw]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                    <?php } else { ?>
					<a href="https://datamares.org/preview/datakids-2025/?lang=es" target="_blank">
<img style="width:40vw;" class="rounded-md" src="https://datamares.org/wp-content/uploads/2025/03/CONVOCATORIA-dataKids-2025.jpg" >
					</a>
                    <?php } ?>
                </div>
            </div>



        <?php $dk_edition++;
        endwhile; ?>

    <?php endif; ?>
</div>



<!-- Carrousel dPs -->
<div class="">
    <h1 class="font-myriad font-black text-60w mx-30w md:mx-auto my-50w md:text-20w text-blue-100 text-center md:my-10w">PARA FESTEJAR A LAS NIÑAS Y NIÑOS</h1>
    <h2 id="dPtitle" class="font-myriad font-black text-60w my-50w md:text-15w text-green-100 text-center md:my-10w">VIAJE AL CENTRO DE LA TIERRA</h2>
    <div class="flex justify-around items-center">
        <button onclick="prevSlide()" aria-label="prev dataPoster">
            <svg class="rotate-180" width="43" height="97" viewBox="0 0 43 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_31_14)">
                    <path d="M35.63 40.9998L35.59 41.0398L9.45 16.2498C6.36 13.3898 4.27 10.9198 3.18 8.83976C2.1 6.75976 1.35 3.80976 0.95 -0.000244141L0 -0.000244141L0 42.2498H0.95L0.98 40.8198C1.14 36.6598 1.49 33.7298 2.02 32.0398C2.55 30.3498 3.39 29.4998 4.55 29.4998C5.44 29.4998 6.49 30.0598 7.69 31.1898L27.28 48.2798L7.69 65.3698C6.49 66.4998 5.44 67.0598 4.55 67.0598C3.39 67.0598 2.55 66.2197 2.02 64.5198C1.49 62.8298 1.15 59.8998 0.98 55.7398L0.95 54.3098H0L0 96.5598H0.95C1.36 92.7498 2.1 89.7998 3.19 87.7198C4.28 85.6398 6.37 83.1698 9.46 80.3098L35.6 55.5298L35.64 55.5698L42.64 49.1298V47.4298L35.64 40.9898L35.63 40.9998ZM8.11 25.3498C6.77 24.0898 5.6 23.4598 4.6 23.4598C3.99 23.4598 3.44 23.7398 2.94 24.3098C2.44 24.8698 1.87 25.9598 1.22 27.5598L1.22 7.66976C2.22 10.3598 3.46 12.5898 4.94 14.3698C5.79 15.3698 6.55 16.2098 7.2 16.9098C7.85 17.5998 8.49 18.2298 9.12 18.7898L34.16 42.2898L30.16 45.7798L8.11 25.3498ZM9.12 77.7998C8.49 78.3598 7.85 78.9898 7.2 79.6798C6.55 80.3698 5.8 81.2198 4.94 82.2198C3.46 83.9998 2.22 86.2298 1.22 88.9198L1.22 69.0298C1.87 70.6298 2.45 71.7198 2.94 72.2798C3.44 72.8398 3.99 73.1298 4.6 73.1298C5.6 73.1298 6.77 72.4998 8.11 71.2398L30.16 50.8198L34.16 54.3098L9.12 77.8098V77.7998Z" class="fill-blue-100" />
                </g>
                <defs>
                    <clipPath id="clip0_31_14">
                        <rect width="42.63" height="96.59" fill="white" transform="translate(0 -0.000244141)" />
                    </clipPath>
                </defs>
            </svg>
        </button>

        <div class="md:flex justify-center gap-20w w-3/4 mb-20w">
            <div id="magnifierContainer" class="mx-30w md:mx-auto md:w-3/5 img-magnifier-container cursor-none">
                <img id="zoomImage" fetchpriority="high" class="mx-auto rounded-[1vw] opacity-100 transition-opacity duration-300" src="https://datamares.org/wp-content/uploads/2025/05/dataPoster-VIAJE-AL-CENTRO-DE-LA-TIERRA.webp" alt="">
            </div>
            <div class="mx-30w md:mx-auto md:w-2/5">
                <div class="my-10w">
                    <p id="dPsummary" class="font-myriad font-semibold text-gray-900 dark:text-gray-50 text-40w md:text-13w my-10w">Conoce la historia de un curioso grupo que emprende el viaje en busca del mítico mundo en el centro de la tierra. Una obra de Julio Verne que explora las fantásticas teorías alrededor de este gran misterio sobre nuestro planeta.</p>
                    <!-- Links -->
                    <div class="grid grid-cols-1 gap-10w mb-10w">
                        <a target='_blank' id="dPLink" href="" class="cursor-pointer md:w-15w transition-all text-30w md:text-10w block font-myriad font-semibold text-white p-10w md:p-05w text-center bg-green-100 hover:scale-105 rounded-[.5vw]">
                            Descargar
                        </a>
                        <a target='_blank' id="fLink" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fdatamares.org%2Fpreview%2Fdp_frankenstein%2F%3Flang%3Des&display=popup&ref=plugin&src=share_button" aria-label="share post on facebook" href="" class="cursor-pointer md:w-15w transition-all text-30w md:text-10w block font-myriad font-semibold text-white p-10w md:p-05w text-center bg-[#3188F9] hover:scale-105 rounded-[.5vw]">
                            Facebook
                        </a>
                        <a target='_blank' id="xLink" href="https://twitter.com/intent/tweet?hashtags=dataPosters&original_referer=https%3A%2F%2Fdatamares.org%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Eshare%7Ctwgr%5E&text=FRANKENSTEIN&url=https%3A%2F%2Fdatamares.org%2Fpreview%2Fdp_frankenstein%2F&via=dataMares" aria-label="share post on x" class="cursor-pointer md:w-15w transition-all text-30w md:text-10w block font-myriad font-semibold text-white p-10w md:p-05w text-center bg-[#353535] hover:scale-105 rounded-[.5vw]">
                            Twitter (x)
                        </a>
                    </div>
                    <!-- Zoom level -->
                    <div class="">
                        <div class="flex gap-05w md:w-15w items-center justify-center">
                            <h1 class="font-myriad text-30w md:text-12w text-blue-100 font-bold text-center">Zoom</h1>
                        </div>
                        <div class="flex gap-02w items-center mb-20w md:w-15w">
                            <svg width="100" class="w-2w h-auto" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M87.5 87.5001L65.8458 65.8459M65.8458 65.8459C71.7066 59.9852 74.9991 52.0363 74.9991 43.748C74.9991 35.4597 71.7066 27.5108 65.8458 21.6501C59.9851 15.7894 52.0362 12.4968 43.7479 12.4968C35.4596 12.4968 27.5107 15.7894 21.65 21.6501C15.7893 27.5108 12.4967 35.4597 12.4967 43.748C12.4967 52.0363 15.7893 59.9852 21.65 65.8459C27.5107 71.7066 35.4596 74.9992 43.7479 74.9992C52.0362 74.9992 59.9851 71.7066 65.8458 65.8459Z" class="stroke-blue-100" stroke-width="10.5" stroke-linecap="round" stroke-linejoin="round" />
                                <rect x="28" y="42" width="31" height="5" class="fill-blue-100" />
                            </svg>

                            <input aria-labelledby="zoom len" aria-label="Zoom dataPoster" type="range" min=".1" max="11" value="2" step=".1" class="slider" id="myRange"
                                oninput="zoom('zoomImage', this.value);numberwheels = parseFloat(this.value); "
                                onchange="zoom('zoomImage', this.value);">
                            <svg width="100" class="w-2w h-auto" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M87.5 87.5001L65.8458 65.8459M65.8458 65.8459C71.7066 59.9852 74.9991 52.0363 74.9991 43.748C74.9991 35.4597 71.7066 27.5108 65.8458 21.6501C59.9851 15.7894 52.0362 12.4968 43.7479 12.4968C35.4596 12.4968 27.5107 15.7894 21.65 21.6501C15.7893 27.5108 12.4967 35.4597 12.4967 43.748C12.4967 52.0363 15.7893 59.9852 21.65 65.8459C27.5107 71.7066 35.4596 74.9992 43.7479 74.9992C52.0362 74.9992 59.9851 71.7066 65.8458 65.8459Z" class="stroke-blue-100" stroke-width="10.5" stroke-linecap="round" stroke-linejoin="round" />
                                <rect x="28" y="42" width="31" height="5" class="fill-blue-100" />
                                <rect x="41" y="60" width="31" height="5" transform="rotate(-90 41 60)" class="fill-blue-100" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button onclick="nextSlide()" aria-label="next dataPoster">
            <svg class="" width="43" height="97" viewBox="0 0 43 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_31_14)">
                    <path d="M35.63 40.9998L35.59 41.0398L9.45 16.2498C6.36 13.3898 4.27 10.9198 3.18 8.83976C2.1 6.75976 1.35 3.80976 0.95 -0.000244141L0 -0.000244141L0 42.2498H0.95L0.98 40.8198C1.14 36.6598 1.49 33.7298 2.02 32.0398C2.55 30.3498 3.39 29.4998 4.55 29.4998C5.44 29.4998 6.49 30.0598 7.69 31.1898L27.28 48.2798L7.69 65.3698C6.49 66.4998 5.44 67.0598 4.55 67.0598C3.39 67.0598 2.55 66.2197 2.02 64.5198C1.49 62.8298 1.15 59.8998 0.98 55.7398L0.95 54.3098H0L0 96.5598H0.95C1.36 92.7498 2.1 89.7998 3.19 87.7198C4.28 85.6398 6.37 83.1698 9.46 80.3098L35.6 55.5298L35.64 55.5698L42.64 49.1298V47.4298L35.64 40.9898L35.63 40.9998ZM8.11 25.3498C6.77 24.0898 5.6 23.4598 4.6 23.4598C3.99 23.4598 3.44 23.7398 2.94 24.3098C2.44 24.8698 1.87 25.9598 1.22 27.5598L1.22 7.66976C2.22 10.3598 3.46 12.5898 4.94 14.3698C5.79 15.3698 6.55 16.2098 7.2 16.9098C7.85 17.5998 8.49 18.2298 9.12 18.7898L34.16 42.2898L30.16 45.7798L8.11 25.3498ZM9.12 77.7998C8.49 78.3598 7.85 78.9898 7.2 79.6798C6.55 80.3698 5.8 81.2198 4.94 82.2198C3.46 83.9998 2.22 86.2298 1.22 88.9198L1.22 69.0298C1.87 70.6298 2.45 71.7198 2.94 72.2798C3.44 72.8398 3.99 73.1298 4.6 73.1298C5.6 73.1298 6.77 72.4998 8.11 71.2398L30.16 50.8198L34.16 54.3098L9.12 77.8098V77.7998Z" class="fill-blue-100" />
                </g>
                <defs>
                    <clipPath id="clip0_31_14">
                        <rect width="42.63" height="96.59" fill="white" transform="translate(0 -0.000244141)" />
                    </clipPath>
                </defs>
            </svg>
        </button>
    </div>
</div>








<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/splide.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/datakidsTL.js"></script>

<?php get_footer(); ?>

<?php if (have_rows('dataposters')): ?>
    <?php while (have_rows('dataposters')): the_row();
        $LowRes_image = get_sub_field('lowres_image');
        $HighRes_image = get_sub_field('highres_image');
        $title = get_sub_field('title');
        $sypnosis = get_sub_field('sypnosis');
        $link = get_sub_field('downloadlink');
        $shareLink = get_sub_field('sharelink');
    ?>
        <script>
            dPLowRes.push('<?php echo $LowRes_image['url'] ?>')
            dPHighRes.push('<?php echo $HighRes_image['url'] ?>')
            dPLink.push('<?php echo $link ?>')
            dPSummary.push('<?php echo $sypnosis ?>')
            dPtitle.push('<?php echo $title ?>')
            dPshare.push('<?php echo $shareLink ?>')
        </script>
    <?php endwhile; ?>
<?php endif; ?>