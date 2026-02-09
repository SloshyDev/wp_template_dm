<?php get_header(); 
/*template name:UPM*/
?>
<?php while (have_posts() ) : the_post(); ?> <?php the_content(); ?> <?php endwhile; ?>
<style>
	.delete::before, .modal-close::before {
    height: 2px;
    width: 39%;
}
    .splide__arrow svg{
        stroke:none;
    }

    .animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.animated.faster {
			-webkit-animation-duration: 500ms;
			animation-duration: 500ms;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}
</style>
<link href="https://www.dafontfree.net/embed/YWNhZGVteS1lbmdyYXZlZC1sZXQtcGxhaW4mZGF0YS8xMy9hLzY0MzEzLzQ2MTUyX19fLlRURg" rel="stylesheet" type="text/css"/>

<!-- Banner & introduction -->
<section class='bg-[#1f4c5c] py-4 text-gray-50'>
    <?php if( have_rows('sponsors1') ): ?>
        <section class="sponsors py-2 bg-[#eadbc6]">
            <div class="w-3/4 mx-auto grid grid-cols-1 md:grid-cols-4">
            <?php while( have_rows('sponsors1') ): the_row();
                $img = get_sub_field('img');
                ?>
                <div>
                    
                        <img src="<?php echo $img ?>" alt="sponsors" class='w-64 mx-auto hover:scale-105 transition-transform' width='256' height='72'>
                    
                </div>
            <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if( get_field('banner') ): ?>
        <img class='w-full mt-4'  alt='bannerUPM' src="<?php the_field('banner'); ?>" width='1800' height='600'/>
    <?php endif; ?>

    <div class="md:flex items-center">
		<h1 class='isBlackCond text-9m md:text-4m mx-auto md:text-left text-center'><?php _e("¡TE ESPERAMOS EL PRÓXIMO AÑO!", 'dm' )?></h1>
        <a href='https://datamares.org/noticias/?lang=es' target='_blank'>
			        <img class='w-52 my-2 md:my-0 md:w-[20rem] xl:w-[26rem] m-auto md:m-0'  alt='Go to news wall' src="https://datamares.org/wp-content/uploads/2023/06/Asset-1-3.svg" alt="" width='456' height='87'>
		</a>

    </div>

    <div class="bg-[#3d7b91] pt-10 pb-12">
        <?php $introduction = get_field('introduction') ?>
        <h2 style="width: 80%;" class=' isCond text-center text-8m md:text-2m lg:text-5xl xl:text-4xl mx-auto w-3/5'><?php echo $introduction?></h2>
    </div>
    <div class="bg-[#eadbc6] py-4 mb-4 mt-8">
        <h1 class='isAcademy text-center text-9m md:text-4m mx-auto text-[#3d7b91]' style="line-height: 0; margin-top: 2rem; margin-bottom: 2rem;"><?php _e("LA CONVERSACIÓN", 'dm' )?></h1>
    </div>
</section>

<!-- Tables -->
<?php if( have_rows('tables') ): $i=0;?>
    <section class="py-2 bg-[#3d7b91] grid grid-cols-2 md:flex justify-center">
        <?php while( have_rows('tables') ): the_row();?>
            <div onClick='changeTable(<?php echo $i ?>)' class='md:w-1/6 border-0 md:border-x-2 first:border-l-0 last:border-r-0 md:border-gray-50 group cursor-pointer'>
                <h1 class='isAcademy text-center text-gray-50 text-[6vw] md:text-2m group-hover:text-[#eadbc6] transition-colors'><?php _e("MESA", 'dm' )?> <?php echo $i+1 ?></h1>
            </div>
        <?php $i++; endwhile; ?>
    </section>
<?php endif; ?>

<!-- Schedules & resume -->
<?php if( have_rows('tables') ):?>
    <div class="splide tables">
        <div class="splide__track">
            <div class="splide__arrows">
                <button aria-label='prev slide' class="splide__arrow splide__arrow--prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.63 96.59">
                        <g>
                            <path class="cls-1 fill-[#1f4c5c] dark:fill-gray-50" d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z"/>
                        </g>
                    </svg>
                </button>
                <button aria-label='next slide' class="splide__arrow splide__arrow--next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.63 96.59">
                        <g>
                            <path class="cls-1 fill-[#1f4c5c] dark:fill-gray-50" d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z"/>
                        </g>
                    </svg>
                </button>
            </div>
            <ul class='splide__list'>
                <?php while( have_rows('tables') ): the_row(); 
                    $i++;
                    $title = get_sub_field('title');
                    $mainImg = get_sub_field('mainimg');
					$videoImg = get_sub_field('videoimg');
					$table2 = get_sub_field('table2');
                    $resume = get_sub_field('resume');
						$video = get_sub_field('video');
                    ?>
                <section class="md:flex splide__slide bg-[#3d7b91] justify-between w-full">
                    <div class="w-[97%] mx-auto md:w-[49.8%] py-8 bg-white dark:bg-gray-900">
                        <div class="w-[70%] flex h-full justify-between flex-col mx-auto">
                            <?php if( have_rows('topics') ): ?>
                                <section>
                                <h1 class='isAcademy text-center text-[#3d7b91] dark:text-gray-50 text-9m md:text-4xl'><?php echo $title ?></h1>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.05 60.33" class='w-16 mx-auto my-2'>
                                    <g class="cls-1 isolate">
                                        <g class="cls-3 mix-blend-multiply">
                                            <path class='fill-[#1f4c5c] dark:fill-[#3d7b91]' d="m27.45,11.77c4.8-.04,9.22.84,13.46,2.63,3.46,1.47,6.56,3.51,9.13,6.27,2.89,3.1,4.8,6.71,5.29,10.97.37,3.19-.1,6.27-1.41,9.22-1.02,2.3-2.44,4.32-4.17,6.12-1.73,1.8-3.72,3.29-5.89,4.51-2.48,1.4-5.11,2.42-7.88,3.11-3.39.84-6.83,1.12-10.31.95-1.37-.07-2.75-.2-4.1-.48-.37-.07-.59,0-.8.31-1.28,1.92-3.06,3.22-5.18,4.07-1.9.76-3.89.97-5.92.84-1.46-.1-2.87-.47-4.26-.89-.14-.04-.36-.06-.37-.24-.01-.19.2-.22.34-.28.86-.39,1.74-.77,2.6-1.16,2-.92,2.99-2.53,3.22-4.68.11-1.02-.03-1.74-1.07-2.36-2.93-1.74-5.34-4.09-7.23-6.94-1.42-2.15-2.42-4.49-2.81-7.04-.18-1.17-.05-2.37-.05-3.55,0-1.01-.09-2.02.13-3.03.69-3.14,2.09-5.93,4.14-8.39,3.16-3.8,7.19-6.34,11.79-8.01,3.72-1.34,7.57-2,11.34-1.94Z"/>
                                            <path class='fill-[#1f4c5c] dark:fill-[#3d7b91]' d="m76.02,22.11c-.07,1.21.13,2.63-.24,4.04-1.01,3.79-3,6.97-5.81,9.67-1.46,1.4-3.07,2.58-4.79,3.63-.17.11-.37.2-.36.45.06,1.4.18,2.78.92,4.02.6,1.01,1.54,1.62,2.56,2.11.83.4,1.67.75,2.51,1.13.11.05.27.07.26.23-.01.16-.17.17-.28.21-4.24,1.38-8.39,1.48-12.33-.96-1.09-.67-1.99-1.55-2.8-2.54-.25-.31-.15-.57,0-.87,1.15-2.21,1.91-4.55,2.23-7.02.37-2.85.13-5.65-.71-8.4-1.31-4.28-3.79-7.78-7.13-10.72-4.37-3.84-9.5-6.08-15.14-7.24-2.44-.5-4.91-.7-7.4-.7-.3,0-.6.03-.9.04-.18,0-.43.1-.52-.1-.09-.2.13-.34.26-.47.58-.56,1.15-1.13,1.77-1.65,2.63-2.21,5.59-3.86,8.82-5.02,2.84-1.02,5.78-1.63,8.79-1.86,3.56-.28,7.08-.03,10.56.76,4.38,1.01,8.39,2.81,11.93,5.59,2.61,2.05,4.74,4.52,6.2,7.51,1.01,2.07,1.8,4.22,1.63,6.6-.03.44,0,.89,0,1.54Z"/>
                                        </g>
                                    </g>
                                </svg>
                                    <?php while( have_rows('topics') ): the_row(); 
                                        $title = get_sub_field('title');
                                        $host = get_sub_field('host');
                                        $content = get_sub_field('content'); ?>
                                        <div class='my-8 fir first:mt-4'>
                                            <h1 class='isBlackCond text-9m md:text-5xl uppercase dark:text-gray-50 text-[#285b6e] text-center'><?php echo $title; ?></h1>
                                            <h1 class='dark:text-gray-400 leading-4 mb-1 text-[#3d7b91] isBoldCondensed text-8m md:text-3xl text-center'><?php echo $host; ?></h1>
                                            <h1 class='dark:text-gray-50 leading-6 text-[#285b6e] isBoldCondensed text-8m md:text-3xl text-center w-3/4 mx-auto'><?php echo $content; ?></h1>
                                        </div>
                                    <?php endwhile; ?>
                                </section>
                            <?php endif; ?>
                            
                            <div class="bg-gradient-to-b w-full shadow-lg px-2 py-4 mx-auto rounded-xl from-[#8ea7b7] to-[#234f5f] border-[6px] border-[#3d7b91]">
                                <img class='shadow-xl rounded-lg mx-auto' width='580' height='340' src="<?php echo $mainImg ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-[97%] mx-auto md:w-[49.8%] bg-white py-8 dark:bg-gray-900 text-gray-50">
                        <div class="w-[70%] flex h-full justify-between flex-col mx-auto">
                        <?php if( have_rows('summary') ): ?>
                            <div style="height: 35rem;" class="summary bg-gradient-to-b h-[40rem] overflow-y-scroll px-8 md:px-12 shadow-lg py-8 mx-auto list-disc text-3xl rounded-xl from-[#8ea7b7] to-[#234f5f] border-[6px] border-[#3d7b91]">
                                <h1 class='isAcademy text-center text-[6vw] md:text-4m mx-auto text-gray-50'><?php _e("EN RESUMEN", 'dm' )?></h1>
                                <ul class='list-disc isBoldCondensed'>
                                    <?php while( have_rows('summary') ): the_row(); 
                                        $content = get_sub_field('content');?>
                                        <li style="background-color: transparent;" class='text-8m md:text-3xl'><?php echo $content ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                            
								<?php if($video){ ?>
								 <?php echo $video ?>
								<?php } else { ?>
							<div class="bg-gradient-to-b boxVid md:my-0 w-full shadow-lg px-2 py-4 mx-auto rounded-xl from-[#8ea7b7] to-[#234f5f] border-[6px] border-[#3d7b91]">
								<img class='w-11/12 shadow-xl rounded-lg mx-auto' width='430' height='256' src="https://datamares.org/wp-content/uploads/2023/06/v1.png" alt="">
							 </div>	
								<?php  }?>
								
                           
							<?php if($table2): ?>
								<div class='flex' style="justify-content: space-around;">
									<button onClick='openM()' style="width: 40%;" >
									<img src='https://datamares.org/wp-content/uploads/2023/06/Asset-1@300x.png'>
									</button>
									<a style="width: 40%;" href='https://datamares.org/preview/mensaje-maxine-lr/?lang=es' target='_blank'>
									<img src='https://datamares.org/wp-content/uploads/2023/06/Asset-2@300x.png'>
									</a>
								</div>
								<?php endif ?>
                        </div>
                    </div>
                </section>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

<div class="bg-[#eadbc6] py-4 mb-4 mb-8 md:flex">
    <div class="w-4/5 mx-auto md:w-1/2">
        <h1 class='isAcademy text-center text-9m md:text-4m mx-auto text-[#3d7b91]'><?php _e("RECEPCIÓN", 'dm' )?></h1>
        <div class="mb-8">
            <h1 class='dark:text-gray-400 leading-4 mb-1 text-[#3d7b91] isBoldCondensed text-8m md:text-3xl text-center'>Dr. Octavio Aburto</h1>
            <h1 class='dark:text-gray-50 leading-6 text-[#285b6e] isBoldCondensed text-8m md:text-3xl text-center w-3/4 mx-auto'>Profesor investigador, Scripps Institution of Oceanography, UCSD</h1>
        </div>
        <div class="my-8">
            <h1 class='dark:text-gray-400 leading-4 mb-1 text-[#3d7b91] isBoldCondensed text-8m md:text-3xl text-center'>Cristina Mittermeier</h1>
            <h1 class='dark:text-gray-50 leading-6 text-[#285b6e] isBoldCondensed text-8m md:text-3xl text-center w-3/4 mx-auto'>Fundadora y Directora de Sealegacy</h1>
        </div>
        <div class="my-8">
            <h1 class='dark:text-gray-400 leading-4 mb-1 text-[#3d7b91] isBoldCondensed text-8m md:text-3xl text-center'>Richard Kiy</h1>
            <h1 class='dark:text-gray-50 leading-6 text-[#285b6e] isBoldCondensed text-8m md:text-3xl text-center w-3/4 mx-auto'>Presidente y CEO, Instituto de las Américas</h1>
        </div>
        <div class="my-8">
            <h1 class='dark:text-gray-400 leading-4 mb-1 text-[#3d7b91] isBoldCondensed text-8m md:text-3xl text-center'>Milcíades Concepción</h1>
            <h1 class='dark:text-gray-50 leading-6 text-[#285b6e] isBoldCondensed text-8m md:text-3xl text-center w-3/4 mx-auto'>Ministro de Ambiente de la República de Panamá
Acciones de Panamá para la Protección y Conservación del Océano.</h1>
        </div>
    </div>
    <div class="w-4/5 mx-auto md:w-1/2 flex justify-center items-center">
    <div class="bg-gradient-to-b  m-auto md:my-0 w-4/5 shadow-lg px-2 py-4 mx-auto rounded-xl from-[#8ea7b7] to-[#234f5f] border-[6px] border-[#3d7b91] boxVidR">
        
    <img class="bannerVidR mx-auto" width='580' height='340' src="https://datamares.org/wp-content/uploads/2023/07/Group-112.png">
    <div id="videoR" class='hidden w-11/12 mx-auto'></div>
  
    </div>
    </div>
</div>


<div class="my-8 bg-[#285b6e]">
    <h1 class='isBlackCond text-center text-[6vw] md:text-2m mx-auto text-gray-50  my-8'><?php _e("TE PUEDE INTERESAR", 'dm' )?></h1>
    <div class="md:flex pb-8">
        <div class="w-11/12 mx-auto md:w-[35%]">
            <h1 class='isAcademy text-9m text-center md:text-6xl mx-auto text-gray-50  mb-8'><?php _e("INVITACIÓN Y PROGRAMA", 'dm' )?></h1>
            <section class='md:flex'>
                <div class="w-11/12 mx-auto md:w-1/2  md:my-auto">
                    <a href="https://datamares.org/preview/un-dia-por-los-mares-recepcion/?lang=es">
                        <img class='shadow-lg h-[19rem] md:h-[14rem] lg:h-[18rem] xl:h-[23rem] 2xl:h-[25rem] w-auto hover:scale-105 rounded-lg transition-transform shadow-[#0e2027] mx-auto' src="https://datamares.org/wp-content/uploads/2023/06/image-22.png" alt="invitacion recepcion">
                    </a>
                    <a href="https://datamares.org/preview/un-dia-por-los-mares-recepcion/?lang=es" target="_blank" rel="noopener noreferrer">
                        <img src="<?php bloginfo('template_url'); ?>/img/upm/downloadButton_1.svg" class='mx-auto mt-6 w-32 md:w-24 xl:w-48 hover:scale-[102%] transition-transform shadow-lg rounded-full' alt="">
                    </a>
                </div>
                <div class="w-11/12 mx-auto md:w-1/2  md:my-auto">
                <a href="https://datamares.org/preview/un-dia-por-los-mares-programa/?lang=es">
                    <img class='shadow-lg h-[19rem] md:h-[14rem] lg:h-[18rem] xl:h-[23rem] 2xl:h-[25rem] w-auto hover:scale-105 rounded-lg transition-transform mx-auto shadow-[#0e2027]' src="https://datamares.org/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-29-at-12.44-1.png" alt="invitacion recepcion">
                </a>
                <a href="https://datamares.org/preview/un-dia-por-los-mares-programa/?lang=es" target="_blank" rel="noopener noreferrer">
                        <img src="<?php bloginfo('template_url'); ?>/img/upm/downloadButton_1.svg" class='mx-auto mt-6 w-32 md:w-24 xl:w-48 hover:scale-[102%] transition-transform shadow-lg rounded-full' alt="">
                    </a>
                </div>
            </section>
        </div>
        <div class="w-11/12 mx-auto md:w-[35%]">
            <h1 class='isAcademy text-9m text-center md:text-6xl mx-auto text-gray-50  mb-8'><?php _e("PARQUE NACIONAL REVILLAGIGEDO", 'dm' )?></h1>
            <div class="bg-gradient-to-b h-[19rem] md:h-[14rem] lg:h-[18rem] xl:h-[23rem] 2xl:h-[25rem] w-fit flex shadow-lg shadow-[#0e2027] px-2 py-4 mx-auto rounded-xl from-[#8ea7b7] to-[#234f5f] border-[6px] border-[#3d7b91]">
            <a href="https://datamares.org/preview/dp_parque-nacional-revillagigedo/?lang=es">
                <img class='shadow-xl rounded-lg mx-auto h-[97%] w-auto m-auto hover:scale-[101%] transition-transform' width='650' height='433' src="https://datamares.org/wp-content/uploads/2023/06/image-23.png" alt="">
            </a>
        </div>
            <a href="https://datamares.org/preview/dp_parque-nacional-revillagigedo/?lang=es" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_url'); ?>/img/upm/downloadButton_1.svg" class='mx-auto mt-6 w-32 md:w-24 xl:w-48 hover:scale-[102%] transition-transform shadow-lg rounded-full' alt="">
            </a>
        </div>
        <div class="w-11/12 mx-auto md:w-1/5">
            <h1 class='isAcademy text-9m text-center md:text-6xl mx-auto text-gray-50  mb-8'><?php _e("ARTÍCULO", 'dm' )?></h1>
            <section class='md:flex'>
                <div class="w-11/12 mx-auto  md:my-auto">
                <a href="https://www.science.org/doi/10.1126/sciadv.adg0709" target="_blank">
                    <img class='shadow-lg h-[19rem] md:h-[14rem] lg:h-[18rem] xl:h-[23rem] 2xl:h-[25rem] w-auto hover:scale-105 rounded-lg transition-transform shadow-[#0e2027] mx-auto' src="https://datamares.org/wp-content/uploads/2023/06/Screenshot-2023-06-29-182531.png" alt="invitacion recepcion">
                </a>
                <a href="https://www.science.org/doi/10.1126/sciadv.adg0709" target="_blank" rel="noopener noreferrer">
                        <img src="https://datamares.org/wp-content/uploads/2023/06/Asset-1.svg" class='mx-auto mt-6 w-32 md:w-24 xl:w-48 hover:scale-[102%] transition-transform shadow-lg rounded-full' alt="">
                    </a>
                </div>
            </section>
        </div>
    </div>
</div>

<h1 class='isAcademy text-center text-[6vw] md:text-4m mx-auto dark:text-gray-50 text-[#3d7b91] my-8' style="line-height: 0; margin-top: 4rem; margin-bottom: 4rem;"><?php _e("GALERÍA", 'dm' )?></h1>
<div class="gallery splide mx-auto" role="group" aria-label="Splide Basic HTML Example">
    <div class="splide__arrows">
		<button aria-label='prev slide' class="splide__arrow splide__arrow--prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.63 96.59">
                <g>
                    <path class="cls-1 fill-[#1f4c5c] dark:fill-gray-50" d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z"/>
                </g>
            </svg>
		</button>
		<button aria-label='next slide' class="splide__arrow splide__arrow--next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.63 96.59">
                <g>
                    <path class="cls-1 fill-[#1f4c5c] dark:fill-gray-50" d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z"/>
                </g>
            </svg>
		</button>
  </div>
  <div class="splide__track w-3/4 md:w-11/12 mx-auto">
		<ul class="splide__list text-gray-50 p-20">
                    <?php 
            $images = get_field('gallery');
            if( $images ): $galleryIndex=0;?>
                <?php foreach( $images as $image ): ?>
                    <li class="splide__slide flex justify-center hover:scale-105 transition-transform "><img onClick='openModal(<?php echo $galleryIndex; $galleryIndex++ ?>)' src="<?php echo esc_url($image['url']); ?>" class='h-[97%] m-auto rounded-md shadow-md' alt=""></li>
                <?php endforeach; ?>
            <?php endif; ?>
		</ul>
  </div>
</div>

<div class="w-full bg-[#3d7b91]">
    <h1 class='isBlackCond text-center text-9m  md:text-2m mx-auto text-gray-50  my-6'><?php _e("AGRADECEMOS EL APOYO DE:", 'dm' )?></h1>
</div>

<section class='w-4/5 mx-auto mb-8'>  
    <?php if( have_rows('sponsors') ): ?>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-2 my-2">
        <?php while( have_rows('sponsors') ): the_row(); 
            $img = get_sub_field('img');
            ?>
            <div class="">
                
                    <img class='mx-auto' src="<?php echo $img ?>" alt="">
               
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php if( have_rows('sponsors2') ): ?>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-2 my-2">
        <?php while( have_rows('sponsors2') ): the_row(); 
            $img = get_sub_field('img');
            ?>
            <div class="">
           
                    <img class='mx-auto' src="<?php echo $img ?>" alt="">
                
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>




	<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="modal-container w-11/12 border-0 mx-auto rounded z-50 overflow-y-auto">
			<div class="py-4 text-left px-6">
                <section class='mx-auto my-8'>
                    <div class="splide galleryModal my-4" role="group" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                                <ul class="splide__list">
                                <?php 
                                $images = get_field('galleryh');
                                if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                        <li class="splide__slide flex justify-center"><img src="<?php echo esc_url($image['url']); ?>" style='height: 85%;' class='m-auto rounded-md shadow-md' alt=""></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </ul>
                        </div>
                    </div>
                    <div class="splide gallerySync" role="group" aria-label="Splide Basic HTML Example">
                        <div class="splide__arrows">
                            <button aria-label='prev slide' class="splide__arrow splide__arrow--prev">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.63 96.59">
                                    <g>
                                        <path class="cls-1 fill-gray-50" d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z"/>
                                    </g>
                                </svg>
                            </button>
                            <button aria-label='next slide' class="splide__arrow splide__arrow--next">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.63 96.59">
                                    <g>
                                        <path class="cls-1 fill-gray-50" d="m35.63,41l-.04.04L9.45,16.25c-3.09-2.86-5.18-5.33-6.27-7.41C2.1,6.76,1.35,3.81.95,0h-.95v42.25h.95l.03-1.43c.16-4.16.51-7.09,1.04-8.78.53-1.69,1.37-2.54,2.53-2.54.89,0,1.94.56,3.14,1.69l19.59,17.09-19.59,17.09c-1.2,1.13-2.25,1.69-3.14,1.69-1.16,0-2-.84-2.53-2.54-.53-1.69-.87-4.62-1.04-8.78l-.03-1.43h-.95v42.25h.95c.41-3.81,1.15-6.76,2.24-8.84,1.09-2.08,3.18-4.55,6.27-7.41l26.14-24.78.04.04,7-6.44v-1.7l-7-6.44Zm-27.52-15.65c-1.34-1.26-2.51-1.89-3.51-1.89-.61,0-1.16.28-1.66.85-.5.56-1.07,1.65-1.72,3.25V7.67c1,2.69,2.24,4.92,3.72,6.7.85,1,1.61,1.84,2.26,2.54.65.69,1.29,1.32,1.92,1.88l25.04,23.5-4,3.49L8.11,25.35Zm1.01,52.45c-.63.56-1.27,1.19-1.92,1.88-.65.69-1.4,1.54-2.26,2.54-1.48,1.78-2.72,4.01-3.72,6.7v-19.89c.65,1.6,1.23,2.69,1.72,3.25.5.56,1.05.85,1.66.85,1,0,2.17-.63,3.51-1.89l22.05-20.42,4,3.49-25.04,23.5Z"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div class="splide__track w-3/5 md:w-4/5 mx-auto">
                                <ul class="splide__list mx-auto">
                                <?php 
                                $images = get_field('gallery');
                                if( $images ): $indexSync=0?>
                                    <?php foreach( $images as $image ): ?>
                                        <li class="splide__slide flex justify-center hover:scale-105 transition-transform"><img onClick='changeSync(<?php echo $indexSync; $indexSync++ ?>)'  src="<?php echo esc_url($image['url']); ?>" class='h-[97%] m-auto rounded-md shadow-md' alt=""></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </ul>
                        </div>
                    </div>
                </section>
				<div class="flex ">
					<button class="mx-auto focus:outline-none mc px-4 bg-[#285b6e] text-gray-50 isBold text-3xl p-3 rounded-lg hover:scale-105 transition-transform">Cerrar</button>
				</div>
			</div>
		</div>
	</div>









<div class="modal">
  <div onclick='closeM()' class="modal-background"></div>
  <div class="modal-content">
	  
	  <div id='videoP'>
		  
	  </div>
	  
	  <div onclick='closeM()' class="flex my-4">
	  <div onclick='closeM()' class="mx-auto focus:outline-none mc px-4 bg-[#285b6e] text-gray-50 isBold text-3xl p-3 rounded-lg hover:scale-105 transition-transform">Cerrar</div>
	</div>
  </div>
  
</div>






















<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4/dist/js/splide-extension-grid.min.js"></script>
<script>

	
var gallery = new Splide('.gallery', {
    breakpoints: {
        840: {
            perPage: 4,
        },
        640: {
            perPage: 3,
        },
        480: {
            perPage: 2,
        },
    },
    perPage: 6,
    perMove: 1,
    grid: {
        rows: 2,
        cols: 1,
        gap: {
            row: '1rem',
            col: '1.5rem',
        },
        rewind: true,
    },
})


var galleryModal = new Splide('.galleryModal',{
    perPage:1,
    perMove:1,
    rewind:true
})

var gallerySync = new Splide('.gallerySync',{
    breakpoints: {
        840: {
            perPage: 3,
        },
        480: {
            perPage: 2,
        },
    },
    perPage:6,
    perMove:1,
    rewind:true,
    
})

var tables = new Splide('.tables', {
    perPage: 1,
    perMove: 1,
    rewind: true,
})

gallery.mount(window.splide.Extensions);
tables.mount();
galleryModal.sync( gallerySync );
galleryModal.mount();
gallerySync.mount();

function changeSync(index){
    galleryModal.go(index)
}




function changeTable(index) {
    tables.go(index)
}

const modal = document.querySelector('.main-modal');
const closeButton = document.querySelectorAll('.mc');

const modalClose = () => {
    modal.classList.remove('fadeIn');
    modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 500);
}

const openModal = (index) => {
    modal.classList.remove('fadeOut');
    modal.classList.add('fadeIn');
    modal.style.display = 'flex';
    galleryModal.go(index)
}

for (let i = 0; i < closeButton.length; i++) {

    const elements = closeButton[i];

    elements.onclick = (e) => modalClose();

    modal.style.display = 'none';

    window.onclick = function (event) {
        if (event.target == modal) modalClose();
    }
}
</script>

<?php get_footer(); ?>



<script>
function openM() {
    $('.modal').addClass('is-active');
}
	function closeM() {
		 videoP.stopVideo();
    $('.modal').removeClass('is-active');
}
// 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var video1;
	var video2;
	var videoP;
	function onYouTubeIframeAPIReady() {
		video1 = new YT.Player('video1', {
          height: '340',
          width: '600',
          videoId: 'wd1G1NJX-0I',
          playerVars: {
            'playsinline': 1,
			 'origin': 'https://datamares.org/' 
          },
          events: {
            'onReady': onPlayerReady,
          }
        });
        video2 = new YT.Player('video2', {
          height: '340',
          width: '600',
          videoId: 'iP9CMUqPWJ4',
          playerVars: {
            'playsinline': 1,
			 'origin': 'https://datamares.org/' 
          },
          events: {
            'onReady': videoPlayer2,
          }
        });
		
		video3 = new YT.Player('video3', {
          height: '340',
          width: '600',
          videoId: 'l2wy63GCim8',
          playerVars: {
            'playsinline': 1,
			 'origin': 'https://datamares.org/' 
          },
          events: {
            'onReady': videoPlayer3,
          }
        });
		
		video4 = new YT.Player('video4', {
          height: '340',
          width: '600',
          videoId: 'DXJRLe58OMU',
          playerVars: {
            'playsinline': 1,
			 'origin': 'https://datamares.org/' 
          },
          events: {
            'onReady': videoPlayer4,
          }
        });
		video5 = new YT.Player('video5', {
          height: '340',
          width: '600',
          videoId: 't6ShLXcBad4',
          playerVars: {
            'playsinline': 1,
			 'origin': 'https://datamares.org/' 
          },
          events: {
            'onReady': videoPlayer5,
          }
        });
		
		videoP = new YT.Player('videoP', {
          height: '340',
          width: '600',
          videoId: 'Kqcrzn7eYQw',
          playerVars: {
            'playsinline': 1,
			 'origin': 'https://datamares.org/' 
          },
        });
		
		videoR = new YT.Player('videoR', {
          height: '340',
          width: '600',
          videoId: 'qXSXF6a3iDE',
          playerVars: {
            'playsinline': 1,
			 'origin': 'https://datamares.org/' 
          },
		events: {
            'onReady': videoPlayerR
          }
        });
      }
	function onPlayerReady(event) {
        $('.boxVid1').hover(function () {
            $('.bannerVid1').addClass('hidden');
            $('#video1').removeClass('hidden');
            video1.playVideo();
        }, function () {
            $('#video1').addClass('hidden');
            $('.bannerVid1').removeClass('hidden');
            video1.stopVideo();
        }
        );
    }
	
	
    function videoPlayer2(event) {
        $('.boxVid2').hover(function () {
            $('.bannerVid2').addClass('hidden');
            $('#video2').removeClass('hidden');
            video2.playVideo();
        }, function () {
            $('#video2').addClass('hidden');
            $('.bannerVid2').removeClass('hidden');
            video2.stopVideo();
        }
        );
    }
	
	function videoPlayer3(event) {
        $('.boxVid3').hover(function () {
            $('.bannerVid3').addClass('hidden');
            $('#video3').removeClass('hidden');
            video3.playVideo();
        }, function () {
            $('#video3').addClass('hidden');
            $('.bannerVid3').removeClass('hidden');
            video3.stopVideo();
        }
        );
    }
	
	function videoPlayer4(event) {
        $('.boxVid4').hover(function () {
            $('.bannerVid4').addClass('hidden');
            $('#video4').removeClass('hidden');
            video4.playVideo();
        }, function () {
            $('#video4').addClass('hidden');
            $('.bannerVid4').removeClass('hidden');
            video4.stopVideo();
        }
        );
    }
	
	function videoPlayer5(event) {
        $('.boxVid5').hover(function () {
            $('.bannerVid5').addClass('hidden');
            $('#video5').removeClass('hidden');
            video5.playVideo();
        }, function () {
            $('#video5').addClass('hidden');
            $('.bannerVid5').removeClass('hidden');
            video5.stopVideo();
        }
        );
    }
	
	function videoPlayerR(event) {
        $('.boxVidR').hover(function () {
            $('.bannerVidR').addClass('hidden');
            $('#videoR').removeClass('hidden');
            videoR.playVideo();
        }, function () {
            $('#videoR').addClass('hidden');
            $('.bannerVidR').removeClass('hidden');
            videoR.stopVideo();
        }
        );
    }
	
	
</script>
