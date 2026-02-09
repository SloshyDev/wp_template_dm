<?php get_header(); 
/*template name: Monitoreo */
?>

<link rel="stylesheet" href="https://use.typekit.net/vxl2zqz.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ecologicalmonoring.css">

<?php
  $current_lang = ICL_LANGUAGE_CODE; ?>

    <script>
        let currentLang = "<?php echo $current_lang; ?>";
        document.documentElement.lang = currentLang === 'en' ? 'en' : 'es';
        document.documentElement.classList.toggle('lang-en', currentLang === 'en');
        document.documentElement.classList.toggle('lang-es', currentLang === 'es');
    </script>




<div class="mb-8 lg:mb-12">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
</div>

<!-- Introduction & report -->
<?php if( have_rows('section1') ): ?>
    <?php while( have_rows('section1') ): the_row(); 
                    $introduction = get_sub_field('introduction');
                    $linkMon = get_sub_field('report');
                    $background = get_sub_field('background');
                    ?>
    <section class='lg:flex justify-between'>
        <div class="w-full md:w-11/12 lg:w-[72%] px-8 mx-auto">
    <!--             <h1 class='isBlack text-secondary2 xl:text-2xl 2xl:text-4xl dark:text-secondary isBlack '>
                <?php _e("Introduction", 'dm' )?></h1> -->
            <h1 class='text-zinc-900 dark:text-gray-50 xl:text-xl 2xl:text-2xl isRegular'><?php echo $introduction ?></h1>
        </div>
        <div class="w-72 mx-auto mt-8 lg:mt-0 lg:w-[29%] xl:w-[27%] 2xl:w-1/4 bg-cover flex flex-col justify-center">
            <a href="<?php echo $linkMon ?>">
                <img src='<?php echo $background ?>'>
            </a>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>

<!-- Cards -->
<?php if( have_rows('cards') ): ?>
    <section
        class="grid md:grid-cols-1 lg:grid-cols-3 gap-7 xl:gap-14 my-16 w-4/5 md:w-11/12 lg:w-[97%] 2xl:w-11/12 mx-auto">
        <?php while( have_rows('cards') ): the_row(); 
                    $icon = get_sub_field('icon');
                    $content = get_sub_field('content');
                    ?>
        <div class="flex items-center">
            <img class='w-20 xl:w-28 2xl:w-40 m-auto' src="<?php echo $icon ?>" alt="">
            <h1 class='ml-5 isBold lg:text-xs xl:text-sm 2xl:text-xl text-secondary'><?php echo $content ?></h1>
        </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>

<!-- CHRONOLOGY -->
<?php if( have_rows('section3') ): ?>
    <?php while( have_rows('section3') ): the_row(); 
                    $background = get_sub_field('background');
                    ?>
    <section class='my-8'>
        <div class="bg-gradient-to-b from-[#afc1ca] to-[#0a7584] w-full">
            <div class="flex  justify-between pb-4">
                <h1 class='text-gray-50 text-3xl 2xl:text-5xl isBlack  m-auto ml-4 md:ml-auto mb-0' style="margin-bottom: 0 !important;"><?php _e("TIMELINE", 'dm' )?></h1>
                <div class="border-t-[4rem] border-t-gray-50 dark:border-t-gray-900 border-solid border-l-[5rem] border-l-transparent border-r-0 border-r-transparent h-0 w-8/12 2xl:w-4/5"></div>
            </div>
            <div id='slides' class="w-[70%] md:w-[85%] xl:w-11/12 mx-auto">
                <?php while( have_rows('slides') ): the_row(); 
                            $icon = get_sub_field('icon');
                            $content = get_sub_field('content');
                            $year = get_sub_field('year');
                            ?>
                <div class="">
                    <div class="">
                        <div class="h-1 w-full relative top-16 bg-gray-50 -z-10"></div>
                        <img class='w-32 mx-auto' src="<?php echo $icon ?>" alt="">
                    </div>
                    <h1 class='isBlack my-3 text-xl lg:text-2xl xl:text-3xl  text-gray-50 text-center'><?php echo $year ?>
                    </h1>
                    <h1 class='w-11/12 mx-auto isBold lg:text-xs xl:text-sm 2xl:text-xl text-gray-50 text-center'>
                        <?php echo $content ?></h1>
                </div>
                <?php endwhile; ?>
            </div>
            <img src="https://datamares.org/wp-content/uploads/2023/03/Asset-2-1-1-1.svg" alt="">
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>

<!-- NUMERALIA -->
<section id='numeralia' class="bg-[#AFA08A] my-8 pt-6" data-aos="fade-up" data-aos-id="numbers">
    <h1 class='text-gray-50 text-4xl 2xl:text-5xl mb-4  text-center lg:text-left lg:ml-12 2xl:ml-20 isBold lg:absolute'>NUMERALIA:</h1>
    <div class="">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 lg:absolute gap-5 z-10 w-11/12 lg:w-full mx-auto mt-11" style="margin-top: 3.5rem;">
            <div class="flex flex-col justify-end">
                <h1 id='n1' class='isBlack text-[#524A4C]  md:mb-0 text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-center w-fit mx-auto'></h1>
				<h1 class='numEng text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>RECORDS IN<br>THE DATABASE</h1>
                <h1 class='numEs text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>NÚMERO DE<br>REGISTROS</h1>
                <img id='1' class='w-20 iconI lg:w-16 mx-auto' src="https://datamares.org/wp-content/uploads/2023/03/icon6.svg" alt="">
				<div class='numEng'>
					<img  class='i1 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2026/02/d1En.png" alt="">
				</div>
                <div class='numEs'>
					<img class='i1 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2026/02/d1Es.png" alt="">
				</div>
            </div>
            <div class="flex flex-col justify-end">
                <h1 id='n2' class='isBlack text-[#524A4C] md:mb-0 text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-center w-fit mx-auto'></h1>
				<h1 class='numEng text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>SPECIES<br>RECORDED</h1>
                <h1 class='numEs text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>NÚMERO<br>DE ESPECIES</h1>
                <img id='2' class='w-20 iconI lg:w-16 mx-auto' src="https://datamares.org/wp-content/uploads/2023/03/icon5-1.svg" alt="">
				<div class='numEng'>
					<img id='i2' class='i2 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2026/02/d2En.png" alt="">
				</div>
                <div class='numEs'>
					<img id='i2' class='i2 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2026/02/d2Es.png" alt="">
				</div>
            </div>
            <div class="flex flex-col justify-end">
                <h1 id='n3' class='isBlack text-[#524A4C] md:mb-0 text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-center w-fit mx-auto'></h1>
				<h1 class='numEng text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>ORGANISMS COUNTED<br>AND MEASURED</h1>
                <h1 class='numEs text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>NÚMERO DE INDIVIDUOS<br>CONTADOS Y MEDIDOS</h1>
				<div class='flex justify-center items-center'>
					<div class='hidden lg:block w-11/12 mx-auto' style="
							position: absolute;
							height: 3px;
							background: white;
							z-index: -1;
						">

						</div>
					<img id='3' class='w-20 iconI lg:w-16 mx-auto' src="https://datamares.org/wp-content/uploads/2023/03/icon5-1.svg" alt="">
				</div>
                <div class='numEng'>
					<img id='i3' class='i3 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2026/02/d3En.png" alt="">
				</div>
                <div class='numEs'>
					<img id='i3' class='i3 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2026/02/d3Es.png" alt="">
				</div>
            </div>
            <div class="flex flex-col justify-end">
                <h1 id='n4' class='isBlack text-[#524A4C] md:mb-0 text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-center w-fit mx-auto'></h1>
				<h1 class='numEng text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>TRANSECTS<br>COMPLETED</h1>
                <h1 class='numEs text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>NÚMERO DE<br>TRANSECTOS</h1>
                <img id='4' class='w-20 iconI lg:w-16 mx-auto' src="https://datamares.org/wp-content/uploads/2023/03/icon6.svg" alt="">
				<div class='numEng' style="opacity: 0;">
					<img id='i4' class='i4 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2024/04/Asset-7-1.png" alt="">
				</div>
                <div class='numEs' style="opacity: 0;">
					<img id='i4' class='i4 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2024/04/Asset-7.png" alt="">
				</div>
 
            </div>
            <div class="flex flex-col justify-end">
                <h1 id='n5' class='isBlack text-[#524A4C] md:mb-0 text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-center w-fit mx-auto'></h1>
				<h1 class='numEng text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>HOURS SPENT<br>UNDERWATER</h1>
                <h1 class='numEs text-gray-50 md:mb-0 mb-3 text-2xl lg:text-sm xl:text-base 2xl:text-2xl text-center 2xl:px-5 isBold'>NÚMERO DE HORAS<br>BAJO EL AGUA</h1>
                <img id='5' class='w-20 iconI lg:w-16 mx-auto' src="https://datamares.org/wp-content/uploads/2023/03/icon2.svg" alt="">
				<div class='numEng'>
					<img id='i5' class='i5 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2024/04/Asset-8.png" alt="">
				</div>
                <div class='numEs'>
					<img id='i5' class='i5 mx-auto h-32 hidden lg:block opacity-0 transition-opacity' src="https://datamares.org/wp-content/uploads/2024/04/Asset-6.png" alt="">
				</div>
            </div>
        </div>
    </div>
    <div class="w-full bg-cover lg:bg-contain bg-bottom h-80 2xl:h-96 mt-12 bg-no-repeat grid grid-cols-6"
        style="background-image: url(https://datamares.org/wp-content/uploads/2023/03/SVGs-numeralia-01.svg);">
    </div>
</section>

<!-- SITE MONITORING -->
<section class='my-8 w-11/12 mx-auto'>
    <div class="p-3 bg-gradient-to-b from-[#b1c3cb] to-[#007080] w-[97%] mx-auto rounded-lg">
        <div class="w-full bg-[#007080] rounded-lg flex-col-reverse xl:flex-row flex justify-evenly">
            <?php if( have_rows('map') ): ?>
                <?php while( have_rows('map') ): the_row(); 
                            $icon = get_sub_field('icon');
                            ?>
                    <div class="w-11/12 xl:w-1/3 px-5 py-4 pr-0 grid grid-cols-1 md:grid-cols-2 xl:flex flex-col justify-evenly mx-auto">
                        <?php $j=1; while( have_rows('places') ): the_row(); 
                                        $iconP = get_sub_field('icon');
                                        $place = get_sub_field('place');
                                        ?>
                            <div id='<?php echo $j ?>' class="flex place hover:text-yellow hover:scale-105 cursor-pointer transition-all text-gray-50">
                                <img class='w-9' src="<?php echo $iconP ?>" alt="">
                                <div class="ml-4">
                                    <h1 class='text-base lg:text-xl 2xl:text-2xl isBlack'><?php _e("REGION", 'dm' )?> <?php echo $j ?></h1>
                                        <h1 id='text<?php echo $j ?>' class='text-sm lg:text-base 2xl:text-xl isBold'><?php echo $place ?></h1>
                                </div>
                            </div>
                        <?php $j++; endwhile; ?>
                    </div>
                    <div class="w-11/12  p-5 mx-auto pl-0">
                        <div class="flex xl:hidden justify-center mb-4 items-center">
                            <img class='w-16' src="<?php echo $icon ?>" alt="">
                            <h1 class='textM text-gray-50 text-3xl isBlack ml-4'>GRANDES ISLAS</h1>
                        </div>
                        <div class="">
<?php require_once get_template_directory() . '/Components/MonitoreoEcologico/Map.php'; ?>

                        </div>
                        <div class="hidden xl:flex xl:absolute xl:ml-16 xl:-mt-20  2xl:-mt-28 2xl:ml-24 justify-center mb-4 items-center">
                            <img class='w-16' src="<?php echo $icon ?>" alt="">
                            <h1 class='textM text-gray-50 text-3xl isBlack ml-4'>GRANDES ISLAS</h1>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>             
        </div>
    </div>
    <div class="w-0 h-0 border-l-[2rem] border-r-[2rem] border-t-[2rem] border-l-transparent border-r-transparent border-t-[#007080] mx-auto"></div>

    <div class="w-[97%] mx-auto bg-[#007080] rounded-lg flex-col xl:flex-row flex justify-between py-4 mt-8">
                <div class="w-[97%] mx-auto xl:w-[38%] 2xl:w-1/3 block lg:flex xl:block">
                    <div class="flex pl-4 md:pl-8 items-center">
                        <img class='w-20 2xl:w-24' src="https://datamares.org/wp-content/uploads/2023/03/Asset-1-1-1.svg" alt="">
                        <div class="text-gray-50 ml-4">
                            <h1 class='isBold text-2xl 2xl:text-5xl'><?php _e("RELATIVE BIOMASS", 'dm' )?></h1>
                            <p class='text-base 2xl:text-2xl isRegular'><?php _e("Refers to the biomass for each trophic group with respect to the total biomass; it is expressed as a percentage.", 'dm' )?></p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center xl:justify-start mx-auto w-auto md:w-1/2 xl:mx-0 xl:w-auto">
                        <div class="text-3xl 2xl:text-4xl w-96 2xl:w-[28rem] isBold text-[#007080] flex px-8 bg-gray-50 my-8 h-24 2xl:h-28">
                            <img class='bg-gray-50 w-12 2xl:w-20' src="https://datamares.org/wp-content/uploads/2023/03/Group-22.svg" alt="">
                            <div class="flex">
                                <div class="pl-4 2xl:pr-12 3xl:pr-14 bg-gray-50 flex flex-col justify-center">
                                    <h1><span id='numberReeffs' class='text-4xl 2xl:text-5xl'>41</span> <?php _e("SITES MONITORED", 'dm' )?></h1>
                                    <h1 class='numEs'>monitoreados</h1>
                                </div>
                            </div>
                        </div>
                        <div class="xl:block w-0 h-0 border-t-[3rem] border-b-[3rem] border-l-[1.5rem]  2xl:border-t-[3.5rem] 2xl:border-b-[3.5rem] 2xl:border-l-[3rem] border-t-transparent border-b-transparent border-l-gray-50"></div>
                    </div>
                    <div class="mb-8 hidden xl:block xl:my-0 ml-4 2xl:my-8 2xl:ml-8">
                        <img class='numEs w-96 mx-auto xl:w-auto' src="https://datamares.org/wp-content/uploads/2023/03/Group-23-1.svg" alt="">
						<img class='numEng w-96 mx-auto xl:w-auto' src='https://datamares.org/wp-content/uploads/2023/03/Asset-3-1-1.svg'>
                    </div>
                </div>
                <div id='charts' class="grid grid-cols-1 sm:grid-cols-3 w-11/12 mx-auto xl:w-2/3">
                    <div class="box1 flex flex-col justify-center">
                        <h1 class='txtBox1 textBox text-center  text-gray-50 text-xl isBoldCondensed'>GRANDES ISLAS</h1>
                        <div class="mx-auto flex justify-center items-center">
                            <div class="" id='pie1'></div>
                            <img class='absolute z-10 w-12 lg:w-16 xl:w-20 3xl:w-24' src="https://datamares.org/wp-content/uploads/2023/03/Asset-4-1.svg" alt="">
                        </div>
                    </div>
                    <div id='boxp2' class="box2 flex-col hidden">
                        <h1 class='txtBox2 textBox text-center  text-gray-50 text-xl isBoldCondensed' >  </h1>
                        <div class="mx-auto flex justify-center items-center">
                            <div class="" id='pie2'></div>
                            <img class='absolute z-10 w-12 lg:w-16 xl:w-20 3xl:w-24' src="https://datamares.org/wp-content/uploads/2023/03/Asset-4-1.svg" alt="">
                        </div>
                    </div>
                    <div id='boxp3' class="box3 hidden flex-col justify-center  transition-opacity">
                        <h1 class='txtBox3 textBox text-center  text-gray-50 text-xl isBoldCondensed'>  </h1>
                        <div class="mx-auto flex justify-center items-center">
                            <div class="" id='pie3'></div>
                            <img class='absolute z-10 w-12 lg:w-16 xl:w-20 3xl:w-24' src="https://datamares.org/wp-content/uploads/2023/03/Asset-4-1.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="block xl:hidden my-6 xl:my-0 ml-4 2xl:my-8 2xl:ml-8">
                        <img class='w-11/12 md:w-2/3 mx-auto xl:w-auto' src="https://datamares.org/wp-content/uploads/2023/03/Group-23-1.svg" alt="">
                </div>
    </div>
    <div class="w-0 h-0 border-l-[2rem] border-r-[2rem] border-t-[2rem] border-l-transparent border-r-transparent border-t-[#007080] mx-auto mb-8"></div>

    <div class="w-[97%] mx-auto bg-[#007080] rounded-lg flex-col xl:flex-row flex justify-between py-4 mt-8">
                <div class="w-[97%] mx-auto xl:w-[38%] 2xl:w-1/3  block lg:flex xl:block">
                    <div class="flex pl-4 pr-1 md:pl-8 md:pr-0 items-center">
                        <img class='w-20 2xl:w-24' src="https://datamares.org/wp-content/uploads/2023/03/Asset-72.svg" alt="">
                        <div class="text-gray-50 ml-4 ">
                            <h1 class='isBold text-2xl 2xl:text-5xl'><?php _e("RICHNESS", 'dm' )?></h1>
                            <p class='text-base 2xl:text-2xl isRegular'><?php _e("Total number of species in a type of a specific habitat, ecosystem, area or region.", 'dm' )?></p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center xl:justify-start mx-auto w-auto md:w-1/2 xl:mx-0 xl:w-auto">
                        <div class="text-xl flex flex-col pl-2 sm:pl-8 justify-center pr-0 lg:pr-12 2xl:pr-24 w-96 2xl:w-[28rem] isBlack text-[#007080] px-8 bg-gray-50 my-8 h-36">
                            <h1 class='text-2xl md:text-4xl'><?php _e("RICHNESS", 'dm' )?><span class='numEs'> TOTAL</span></h1>
                            <div class="flex">
                                <div class="flex mr-4">
                                    <img class='w-14 m-auto' src="https://datamares.org/wp-content/uploads/2023/03/Group-31.png" alt="">
                                    <img class='w-14 m-auto'  src="https://datamares.org/wp-content/uploads/2023/03/Group-31-kjh.png" alt="">
                                </div>
                                <div class="">
                                    <h1 id='numberSpecies' class='text-5xl'>188</h1>
                                    <h1 class='text-xl sm:leading-none'><?php _e("INVERTEBRATES", 'dm' )?><br><?php _e("AND", 'dm' )?> <?php _e("FISHES", 'dm' )?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="xl:block w-0 h-0 border-t-[4.5rem] border-b-[4.5rem] border-l-[1.5rem]  2xl:border-t-[4.5rem] 2xl:border-b-[4.5rem] 2xl:border-l-[3rem] border-t-transparent border-b-transparent border-l-gray-50"></div>
                    </div>
                </div>
                <div id='chartsL' class="grid grid-cols-1 sm:grid-cols-1 w-11/12  mx-auto xl:w-2/3">
                    <div class="box1">
                        <h1 class='txtBox1 textBox text-center text-gray-50 text-xl isBoldCondensed'>GRANDES ISLAS</h1>
                        <div class="">
                            <div class="" id='line1'></div>
                        </div>
                    </div>
                    <div class="box2 hidden">
                        <h1 class='txtBox2 textBox text-center opacity-0 text-gray-50 text-xl isBoldCondensed'>  </h1>
                        <div class="">
                            <div class="" id='line2'></div>
                        </div>
                    </div>
                    <div class="box3 hidden">
                        <h1 class='txtBox3 textBox text-center opacity-0 text-gray-50 text-xl isBoldCondensed'>  </h1>
                        <div class="">
                            <div class="" id='line3'></div>
                        </div>
                    </div>
                </div>
    </div>
</section>

<!-- METODOLOGY -->
<section class='my-8 bg-[#4b626e]'>
    <div class="flex  justify-between pb-4">
        <h1 id='metTitle' class='text-gray-50 text-3xl 2xl:text-5xl isBlack m-auto ml-4 md:ml-auto mb-0'style="margin-bottom: 0 !important;"><?php _e("TRANSECTS", 'dm' )?></h1>
        <div class="border-t-[4rem] border-t-gray-50 dark:border-t-gray-900 border-solid border-l-[5rem] border-l-transparent border-r-0 border-r-transparent h-0 w-8/12 2xl:w-4/5"></div>
    </div>
    <img id='met1' class='metImg' src="<?php the_field('met1'); ?>" alt="">
    <img id='met2' class='metImg hidden' src="<?php the_field('met2'); ?>" alt="">
    <img id='met3' class='metImg hidden' src="<?php the_field('met3'); ?>" alt="">
    <div class="bg-[#DA8F3B] md:py-4">
        <div class="mx-4 flex flex-col md:flex-row">
            <div id='t1'
                class="flex my-2 metButton cursor-pointer mx-4 lg:mx-8 text-gray-50 isBlack text-lg lg:text-2xl items-center">
                <img class='metIcon z-10 absolute w-11 -ml-[1.3rem] transition-all rounded-full' src="https://datamares.org/wp-content/uploads/2023/03/icon.svg">
                <img class='w-12 xl:w-auto transition-all rounded-full'
                    src="https://datamares.org/wp-content/uploads/2023/03/Group-1-2.svg" alt="">
                <h1 class='ml-4 metText'><?php _e("TRANSECTS", 'dm' )?></h1>
            </div>
            <div id='t2'
                class="flex my-2  metButton cursor-pointer mx-4 lg:mx-8 text-gray-50 isBlack text-lg lg:text-2xl items-center">
                <img class='metIcon z-10 absolute w-11 -ml-[1.3rem] transition-all rounded-full' src="https://datamares.org/wp-content/uploads/2023/03/icon.svg">
                <img class='w-12 xl:w-auto transition-all rounded-full'
                    src="https://datamares.org/wp-content/uploads/2023/03/Group-1-2.svg" alt="">
                <h1 class='ml-4 metText'><?php _e("DIVERS", 'dm' )?></h1>
            </div>
            <div id='t3'
                class="flex my-2 metButton cursor-pointer mx-4 lg:mx-8 text-gray-50 isBlack text-lg lg:text-2xl items-center">
                <img class='metIcon z-10 absolute w-11 -ml-[1.3rem] transition-all rounded-full' src="https://datamares.org/wp-content/uploads/2023/03/icon.svg">
                <img class='w-12 xl:w-auto transition-all rounded-full'
                    src="https://datamares.org/wp-content/uploads/2023/03/Group-2-1.svg" alt="">
                <h1 class='ml-4 metText'><?php _e("METHODOLOGY", 'dm' )?></h1>
            </div>
        </div>
    </div>
</section>

<!-- REEFS -->
<section class='xl:w-[97%] mx-auto grid grid-cols-1 gap-9 md:gap-3 xl:gap-0 w-11/12 xl:grid-cols-2 my-8'>
    <?php if( have_rows('reefs') ): ?>
        <?php while( have_rows('reefs') ): the_row();
                 $meta = get_sub_field('linkmeta');
            ?>
            <div class="flex flex-col justify-between">
				<div class="bg-[#4b626e] rounded-2xl xl:rounded-r-none  p-12 h-fit" style='padding-top: 2.5rem;'>
                    <?php if( have_rows('valueofreefs') ): ?>
                        <?php while( have_rows('valueofreefs') ): the_row(); 
                                    $title = get_sub_field('title');
                                    $content = get_sub_field('content');
                                    $iconI = get_field('iconi');
                                    ?>
                            <h1 class='text-gray-50 text-2xl 2xl:text-4xl isBlack'><?php echo $title ?></h1>
                            <h1 class='text-gray-50 text-lg 2xl:text-2xl'><?php echo $content ?></h1>
                        <?php endwhile; ?>
                    <?php endif; ?>     
                </div>
                <div class="hidden cursor-pointer buttonMeta xl:flex bg-[#DA8F3B] px-8 py-2 my-4 rounded-2xl items-center w-11/12 justify-center hover:scale-105 hover:shadow-xl transition-all">
                    <img src="https://datamares.org/wp-content/uploads/2023/03/Group.svg" class='w-20' alt="">
                    <h1 class='isBlack text-3xl ml-3 text-gray-50' style="min-width: 24rem;"><?php _e("REVIEW THE METADATA", 'dm' )?></h1>
                </div>
				<a class='hidden cursor-pointer xl:flex' href="mailto:catalina@gocmarineprogram.org">
				<div
					 class="hidden xl:flex bg-[#DA8F3B] px-8 py-2 mt-2 mb-4 rounded-2xl items-center w-11/12 justify-center hover:scale-105 hover:shadow-xl transition-all">
					<img src="https://datamares.org/wp-content/uploads/2023/03/Asset-1-2.svg" class='w-20' alt="">
					<h1 class='isBlack text-3xl ml-3 text-gray-50' style="min-width: 24rem;"><?php _e("REQUEST DATA", 'dm' )?></h1>
				</div>
			</a>
                <div class="w-11/12 hidden xl:block">
                    <h1 class='text-xl 2xl:text-3xl isBlack text-secondary2'><?php _e("SOURCES", 'dm' )?></h1>
                    <?php while( have_rows('references') ): the_row(); 
                                    $ref = get_sub_field('ref');
                                    $link = get_sub_field('link');
                                    ?>
                    <div class="my-4 select-all">
                        <h1 class='text-base 2xl:text-xl dark:text-gray-50 isRegular'>• <?php echo $ref ?></h1>
                        <a class='text-secondary hover:text-secondary2 isBold text-xl 2xl:text-2xl' href="<?php echo $link ?>" target="_blank" rel="noopener noreferrer"><?php echo $link ?></a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="bg-[#83a5b8] rounded-b-2xl">
                <div class="flex  justify-between">
                    <div class="flex items-center">
                        <div class="hidden xl:block w-0 h-0 border-t-[3.5rem] border-b-[3.5rem] border-l-[3rem] border-t-transparent border-b-transparent border-l-[#4b626e]"></div>
                        <h1 class='text-gray-50 text-2xl 2xl:text-4xl isBlack ml-3'><?php _e("ECOSYSTEM SERVICES", 'dm' )?></h1>
                    </div>
                    <div class="border-t-[4rem] border-t-gray-50 dark:border-t-gray-900 border-solid border-l-[5rem] border-l-transparent border-r-0 border-r-transparent h-0 w-64 2xl:w-80"></div>
                </div>
                <?php $j=1; while( have_rows('services') ): the_row(); 
                                $iconV = get_sub_field('iconv');
                                $title = get_sub_field('title');
                                $button = get_sub_field('button');
                                $contentS = get_sub_field('content');
                                $linkS = get_sub_field('link');
                                ?>
                                <div class="flex flex-col md:flex-row gap-4 px-4 my-4">
                                    <img class='w-32 md:w-[13%]  mx-auto' src="<?php echo $iconV ?>" alt="">
                                    <div class="w-10/12 mx-auto text-gray-50 pr-8">
                                        <h1 class='isBlack text-2xl'><?php echo $title ?></h1>
                                        <h1 class='isRegular text-lg 2xl:text-xl'><?php echo $contentS ?></h1>
                                    </div>
                                </div>
                                <?php if($button): ?>
                                    <div class="flex flex-col md:flex-row gap-4 px-4 my-4">
                                        <img class='w-24 md:w-[13%] p-3 mx-auto' src="https://datamares.org/wp-content/uploads/2023/03/servicios-ecosistemicos-y-referencias-SVG-03-1.svg" alt="">
                                        <div class="w-10/12 mx-auto text-gray-50 flex flex-col md:text-left text-center md:pr-8">
                                            <h1 class='isBlack text-2xl mb-1'><?php _e("YOU MIGHT LIKE", 'dm' )?></h1>
                                            <div class="md:mx-0 bg-gradient-to-b from-[#afc1c9] to-[#087483] p-1 w-fit rounded-3xl hover:scale-105 hover:shadow-xl transition-all">
                                                <a href="<?php echo $linkS ?>" class="isBlack text-2xl border-2 border-gray-50 bg-[#524a4c] p-3 rounded-3xl block">
                                                    <?php echo $button ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif;?>
                                <div class="h-1 bg-gray-50 w-11/12 mx-auto my-7 rounded-3xl"></div>
                <?php $j++; endwhile; ?>
            </div>

            <div class="flex cursor-pointer buttonMeta xl:hidden bg-[#DA8F3B] mx-auto px-8 py-2 rounded-2xl items-center w-full justify-center hover:scale-105 hover:shadow-xl transition-all">
                <img src="https://datamares.org/wp-content/uploads/2023/03/Group.svg" class='w-20' alt="">
                <h1 class='isBlack text-2xl ml-3 text-gray-50'style="min-width: 24rem;">CONSULTA LOS METADATOS</h1>
            </div>
			<a class='flex cursor-pointer xl:hidden' href="mailto:catalina@gocmarineprogram.org">
				<div
					 class="flex cursor-pointer xl:hidden bg-[#DA8F3B] mx-auto px-8 py-2 rounded-2xl items-center w-full justify-center hover:scale-105 hover:shadow-xl transition-all">
					<img src="https://datamares.org/wp-content/uploads/2023/03/Asset-1-2.svg" class='w-20' alt="">
					<h1 class='isBlack text-2xl ml-3 text-gray-50' style="min-width: 24rem;">SOLICITA DATOS</h1>
				</div>
			</a>
            <div class="w-11/12 block xl:hidden mx-auto overflow-hidden">
                <h1 class='text-xl 2xl:text-3xl isBlack text-secondary2'>REFERENCIAS</h1>
                <?php while( have_rows('references') ): the_row(); 
                                $ref = get_sub_field('ref');
                                $link = get_sub_field('link');
                                ?>
                    <div class="my-4 select-all">
                    <h1 class='text-base 2xl:text-xl dark:text-gray-50 isRegular'>• <?php echo $ref ?></h1>
                    <a class='text-secondary hover:text-secondary2 isBold text-xl 2xl:text-2xl' href="<?php echo $link ?>" target="_blank" rel="noopener noreferrer"><?php echo $link ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<!-- Sponsors -->
<?php if( have_rows('spon') ): ?>
    <section id='sponsorsMonitoring' class="w-11/12 mx-auto my-8">
    <?php while( have_rows('spon') ): the_row(); 
        $imageSpon = get_sub_field('img');
        $linkSpon = get_sub_field('link');
        ?>
        <div class="">
            <a href="<?php  echo $linkSpon ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo $imageSpon ?>" alt="">
            </a>
        </div>
    <?php endwhile; ?>
    <?php while( have_rows('spon') ): the_row(); 
        $imageSpon = get_sub_field('img');
        $linkSpon = get_sub_field('link');
        ?>
        <div class="">
            <a href="<?php  echo $linkSpon ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo $imageSpon ?>" alt="">
            </a>
        </div>
    <?php endwhile; ?>
    </section>
<?php endif; ?>


<?php require_once get_template_directory() . '/Components/MonitoreoEcologico/Modal.php'; ?>


<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>

        $('.buttonMeta').click(function (e) {
            $('.modal').addClass('is-active');
        });

        $('.close').click(function (e) {
            $('.modal').removeClass('is-active');
        });
        var dataC1 = [
            // Group 1
            [22.48, 14.13, 42.48, 20.91],
            // Group 2
            [38.50, 22.72, 24.13, 14.65],
            // Group 3
            [38.81, 11.85, 18.51, 30.82],
            // Group 4
            [26.54, 13.93, 25.05, 34.48],
            // Group 5
            [49.11, 11.58, 27.51, 11.80],
            // Group 6
            [54.2, 20.3, 11.8, 11.8],
            // Group 7
            [78.66, 3.49, 3.52, 14.33],
            // Group 8
            [14.2, 41.9, 26.5, 17.4],
            // Group 9
            [3.2, 3.2, 92.7, 0.5],
        ];

        var dataC2 = [
            //Group 1 region 2
            [0, 0, 0, 0],
            // Group 2 region 2
            [0, 0, 0, 0],
            // Group 3 region 2
            [19.61, 15.03, 27.05, 38.31],
            // Group 4 region 2
            [30.83, 17.77, 18.26, 33.13],
            // Group 5 region 2
            [32.99, 17.94, 31.26, 17.82],
            // Group 6 region 2
            [9.2, 50.5, 33.9, 6.4],
            // Group 7 region 2
            [0, 0, 0, 0],
            // Group 8 region 2
            [10.5, 38.4, 46.5, 4.6],
            // Group 9 region 2
            [16.4, 12.7, 50, 20.8],
        ];


        var dataC3 = [
        [21.72, 27.44, 24.64, 26.2]
        ];

        var dataL1 = [
            [73, 115],
            [112, 110],
            [128, 160],
            [118, 156],
            [106, 142],
            [61, 116],
            [50, 83],
            [47, 85],
            [96],
        ];

        var dataL2 = [
            [0, 0],
            [0, 0],
            [137, 164],
            [88, 110],
            [85, 121],
            [37, 62],
            [0, 0],
            [40, 66],
            [84],
        ];

        var dataL3 = [[69, 102]];

        var dataString1 = [
            ["GRANDES ISLAS", "", ""],
            ["SANTA ROSALÍA-BAHÍA CONCEPCIÓN", "", ""],
            ["CORREDOR", "LORETO", "SAN BASILIO"],
            ["LA PAZ", "LA VENTANA", ""],
            ["CABO PULMO", "LOS CABOS", ""],
            ["ISLAS MARÍAS", "BAHÍA BANDERAS", ""],
            ["REVILLAGIGEDO", "", ""],
            ["IXTAPA", "HUATULCO", ""],
            ["ALACRANES", "BAJO DEL NORTE", ""],
        ];

        var arrecifes = [41, 14, 111, 68, 38, 31, 41, 23, 23];

        var species = [188, 222, 760, 472, 453, 183, 133, 148, 180]

        AOS.init();
        document.addEventListener("aos:in:numbers", ({ detail }) => {
            var colorsExamples = anime
                .timeline({
                    duration: 5000,
                    easing: "easeOutExpo",
                    round: 1,
                    update: function (anim) {
                        numberWithCommas("n1", $("#n1").text());
                        numberWithCommas("n2", $("#n2").text());
                        numberWithCommas("n3", $("#n3").text());
                        numberWithCommas("n4", $("#n4").text());
                        numberWithCommas("n5", $("#n5").text());
                    },
                })
                .add({ targets: "#n1", innerHTML: [0, 449626] }, 0)
                .add({ targets: "#n2", innerHTML: [0, 481] }, 0)
                .add({ targets: "#n3", innerHTML: [0, 3377090] }, 0)
                .add({ targets: "#n4", innerHTML: [0, 16763] }, 0)
                .add({ targets: "#n5", innerHTML: [0, 2107] }, 0);
        });

        function numberWithCommas(tarjet, x) {
            x = x.toString();
            var pattern = /(-?\d+)(\d{3})/;
            while (pattern.test(x)) x = x.replace(pattern, "$1,$2");
            $("#" + tarjet).text(x);
        }

        $(".place").click(function () {
            let target = $(this).attr("id");
            $(".area").addClass("hidden");
            $(".textM").text($("#text" + target + "").text());
            $("#Area" + target + "").removeClass("hidden");
            setChart(target - 1);
            anime({
                targets: "#numberReeffs",
                innerHTML: [parseInt($("#numberReeffs").text()), arrecifes[target - 1]],
                easing: "linear",
                round: 1,
            });
            anime({
                targets: "#numberSpecies",
                innerHTML: [parseInt($("#numberSpecies").text()), species[target - 1]],
                easing: "linear",
                round: 1,
            });

        });

        $(".iconI").hover(
            function () {
                $(".i" + $(this).attr("id")).removeClass("opacity-0");
                $(".i" + $(this).attr("id")).addClass("opacity-100");
            },
            function () {
                $(".i" + $(this).attr("id")).addClass("opacity-0");
                $(".i" + $(this).attr("id")).removeClass("opacity-100");
            }
        );

        function ecologicalC() {
            $("#slides").slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }],
                prevArrow:
                    '<button class="slick-prev -left-11 slick-arrow absolute top-[3.3rem]" aria-label="Previous" type="button" style="z-index: 5;"><svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><defs><style>.cls-1{fill:#FFFFFFc;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class="cls-1" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="cls-1" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',
                nextArrow:
                    '<button class="slick-next -right-11 slick-arrow absolute top-[3.3rem]" aria-label="Next" type="button" style=""><svg class="icn-next w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><defs><style>.cls-1{fill:#FFFFFF;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class="cls-1" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="cls-1" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',
            });
        }

        var responsivePie = [
            {
                breakpoint: 821,
                options: {
                    chart: {
                        width: 180,
                        height: 180,
                    },
                },
            },
            {
                breakpoint: 851,
                options: {
                    chart: {
                        width: 220,
                        height: 220,
                    },
                },
            },
            {
                breakpoint: 1451,
                options: {
                    chart: {
                        width: 220,
                        height: 220,
                    },
                },
            }, {
                breakpoint: 1551,
                options: {
                    chart: {
                        width: 230,
                        height: 230,
                    },
                },
            },

            {
                breakpoint: 1670,
                options: {
                    chart: {
                        width: 300,
                        height: 300,
                    },
                },
            },
            {
                breakpoint: 1821,
                options: {
                    chart: {
                        width: 330,
                        height: 330,
                    },
                },
            },
        ];

        var responsiveLine = {
            chart: {
                width: '90%'
            },
            tooltip: {
                enabled: true,
                marker: false
            },
            xaxis: {
                categories: [["<?php _e('INVERTEBRATES', 'dm' )?>"], ["<?php _e('FISHES', 'dm' )?>"]],
                labels: {
                    show: false
                },
            },
            plotOptions: {
                bar: {
                    columnWidth: "75%",
                    distributed: true,
                },
            },
        }

        function renderChart(data) {
            var options = {
                series: data,
                dataLabels: {
                    enabled: false,
                },
                chart: {
                    width: 350,
                    height: 350,
                    type: "pie",
                },
                plotOptions: {
                    bar: {
                        columnWidth: "45%",
                        distributed: true,
                    },
                },
                stroke: {
                    show: true,
                    curve: 'smooth',
                    lineCap: 'butt',
                    colors: ["#FFFFFF", "#FFFFFF", "#FFFFFF", "#FFFFFF"],
                    width: 6,
                    dashArray: 0,
                },
                colors: ["#80a0b3", "#ae9f89", "#004854", "#524a4c"],
                labels: ["HERBÍVOROS", "ZOOPLANCTÍVOROS", "PISCÍVOROS", "CARNÍVOROS"],
                legend: {
                    show: false,
                },
                tooltip: {
                    enabled: true,
                    marker: {
                        show: true,
                    },
                },
                responsive: responsivePie,
            };

            return options;
        }

        var graphic1 = new ApexCharts(
            document.querySelector("#pie1"),
            renderChart(dataC1[0])
        );
        var graphic2 = new ApexCharts(
            document.querySelector("#pie2"),
            renderChart(dataC2[2])
        );
        var graphic3 = new ApexCharts(
            document.querySelector("#pie3"),
            renderChart(dataC3[0])
        );

        graphic1.render();
        graphic2.render();
        graphic3.render();

        function renderChartL(data) {
            var options = {
                series: [
                    {
                        data: data,
                    },
                ],
                chart: {
                    width: '100%',
                    height: 300,
                    type: "bar",
                },
                plotOptions: {
                    bar: {
                        columnWidth: "45%",
                        distributed: true,
                    },
                },
                dataLabels: {
                    enabled: true,
                    position: "top",
                },
                legend: {
                    show: false,
                },
                fill: {
                    colors: ["#f9fafb", "#f9fafb"],
                },
                tooltip: {
                    enabled: false,
                },
                xaxis: {
                    categories: [["<?php _e('INVERTEBRATES', 'dm' )?>"], ["<?php _e('FISHES', 'dm' )?>"]],
                    labels: {
                        style: {
                            colors: ["#f9fafb", "#f9fafb"],
                            fontSize: "12px",
                        },
                    },
                },
            };
            return options;
        }

        var graphiL1 = new ApexCharts(
            document.querySelector("#line1"),
            renderChartL(dataL1[0])
        );
        var graphiL2 = new ApexCharts(
            document.querySelector("#line2"),
            renderChartL(dataL2[2])
        );
        var graphiL3 = new ApexCharts(
            document.querySelector("#line3"),
            renderChartL(dataL3[0])
        );
        graphiL1.render()
        graphiL2.render()
        graphiL3.render()


        function setChart(target) {
            if (dataString1[target][0] != "") {
                $(".textBox").removeClass("opacity-0");
                $(".textBox").addClass("opacity-100");
                $(".txtBox1").text(dataString1[target][0]);
                $(".txtBox2").text(dataString1[target][1]);
                $(".txtBox3").text(dataString1[target][2]);
            } else {
                $(".textBox").removeClass("opacity-100");
                $(".textBox").addClass("opacity-0");
            }
            graphiL1.updateOptions({
                series: [
                    {
                        data: dataL1[target],
                    },
                ],
            });
            graphic1.updateOptions({
                series: dataC1[target],
            });



            if (dataC2[target][0] != 0) {
                $('#chartsL').addClass('sm:grid-cols-3');
                $('#chartsL').removeClass('sm:grid-cols-1');
                $(".box2").removeClass("hidden");
                $('#boxp2').addClass('flex justify-center');
                graphic2.updateOptions({
                    series: dataC2[target],
                });
                graphiL1.updateOptions(responsiveLine)
                graphiL2.updateOptions(responsiveLine)
                graphiL2.updateOptions({
                    series: [
                        {
                            data: dataL2[target],
                        },
                    ],
                    chart: {
                        width: '90%'
                    }
                });
            } else {
                $(".box2").addClass("hidden");
                $('#boxp2').removeClass('flex');
                $('#chartsL').addClass('sm:grid-cols-1');
                $('#chartsL').removeClass('sm:grid-cols-3');
                graphiL1.updateOptions({
                    responsive: [{
                        breakpoint: 2100,
                        options: {
                            chart: {
                                width: '100%'
                            },
                        },
                    }]
                })
            }

            if (target === 2) {
                $(".box3").removeClass("hidden");
                $('#boxp3').addClass('flex justify-center');
                graphiL3.updateOptions(responsiveLine)
                graphiL3.updateOptions({
                    series: [
                        {
                            data: dataL3[0],
                        },
                    ],
                    chart: {
                        width: '90%'
                    }
                });
            } else {
                $(".box3").addClass("hidden");
                $('#boxp3').removeClass('flex');
            }

            // Luego de actualizar, disparas el evento resize:
            window.dispatchEvent(new Event('resize'));
        }

        $('.metButton').hover(function () {
            $(this).find('.metIcon').addClass('shadow-2xl scale-105');
            $(this).find('.metText').addClass('text-[#524A4C]');
        }, function () {
            $(this).find('.metIcon').removeClass('shadow-2xl scale-105');
            $(this).find('.metText').removeClass('text-[#524A4C]');
        }
        );

        $('.metButton').click(function () {
            let text = $(this).find('.metText').text();
            let id = $(this).attr('id');
            $('#metTitle').text(text);
            $('.metImg').addClass('hidden');
            $('#me' + id).removeClass('hidden');
        });

        function ecologicalCS() {
            $("#sponsorsMonitoring").slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2300,
                responsive: [
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }],
                prevArrow:
                    '<button class="slick-prev -left-11 slick-arrow absolute top-[3.3rem]" aria-label="Previous" type="button" style="z-index: 5;"><svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class="fill-primary" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="fill-primary" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',
                nextArrow:
                    '<button class="slick-next -right-11 slick-arrow absolute top-[3.3rem]" aria-label="Next" type="button" style=""><svg class="icn-next w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class=" fill-primary" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="fill-primary" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',

            })
        }

        function ecologicalC() {
            $("#slides").slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }],
                prevArrow:
                    '<button class="slick-prev -left-11 slick-arrow absolute top-[3.3rem]" aria-label="Previous" type="button" style="z-index: 5;"><svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><defs><style>.cls-1{fill:#FFFFFFc;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class="cls-1" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="cls-1" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',
                nextArrow:
                    '<button class="slick-next -right-11 slick-arrow absolute top-[3.3rem]" aria-label="Next" type="button" style=""><svg class="icn-next w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><defs><style>.cls-1{fill:#FFFFFF;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class="cls-1" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="cls-1" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',
            });
        }

        ecologicalC();
        ecologicalCS();

    </script>