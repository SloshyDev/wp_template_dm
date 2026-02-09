<meta property="og:url" content="https://datamares.org/datapics/?lang=es" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="dataMares" />
    <meta property="og:description" content="WORK - PUBLISH - RELEASE" />
    <meta property="og:image:url" content="https://datamares.org/wp-content/uploads/2024/09/Asset-9.webp" />
 <meta property="og:image:width" content="222.32" />
<meta property="og:image:height" content="314" />

<?php get_header();
/*template name:datPics*/
?>
<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/news.min.css">
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@dataMares" />
<meta name="twitter:title" content="dataPis" />
<meta name="twitter:description" content="View all of our dataPics" />
<meta name="twitter:image" content="https://datamares.org/wp-content/uploads/2024/09/Asset-8.webp" />



<style>
.z-10 {
    z-index: 999;
}

</style>

<h1 class='font-myriad font-black md:text-20w text-blue-100 text-center'>
	dataPics
</h1>

<section class=" my-30w">
	
	
	
    <?php $datapics = get_field('datapics');
    if ($datapics): ?>
        <div class="mx-auto grid w-11/12 grid-cols-1 md:grid-cols-2 gap-20w">
            <?php foreach ($datapics as $datapic): ?>
                <img onclick="showModal('modal'),mediaSource('image','<?php echo esc_url($datapic['url']); ?>')"
                    class="rounded-[1vw] mx-auto hover:scale-105 transition-all shadow-md hover:shadow-xl cursor-pointer"
                    src="<?php echo esc_url($datapic['url']); ?>" alt="<?php echo esc_attr($datapic['alt']); ?>" />
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>

<!-- Modal -->
<div id="modal" class="modal fixed bottom-0 left-0 right-0 top-0 z-10 hidden h-full w-full">
    <div onclick="closeModal()"
        class="modalBackground absolute bottom-0 left-0 right-0 top-0 bg-gray-900/80 backdrop-blur-lg"></div>

    <div class="modalContent z-10 mx-auto flex items-center">
        <?php $programfil = get_field('program') ?>
        <img width="647" height="587" id="image" class="mx-auto" style="" src="width: 30rem;" alt="" />
    </div>

    <div class="absolute right-[3vw] top-[3vw] flex gap-10w md:block">
        <button onclick="closeModal()" class="group z-20" aria-label="closeModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-[10vw] fill-blue-200 stroke-white shadow-2xl transition-all group-hover:scale-105 group-hover:stroke-yellow-100 md:w-[3vw]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
		<a style="    z-index: 999;
    position: relative;" id="imgDown" class="" href="">
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
</div>




<script src="<?php bloginfo('template_url'); ?>/js/datapics.js"></script>
<?php get_footer(); ?>