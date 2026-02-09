<?php get_header();
/*template name: dataContent*/
?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/splide.min.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dataKids.css">

<h1 class="text-center font-myriad font-black text-50w md:text-20w text-blue-100 mt-20w"><?php the_title()  ?></h1>

<div class="border-gray-400 shadow-lg mb-20w mt-10w mx-auto border-[.2vw] rounded-full pl-20w md:pl-10w pr-05w py-10w md:py-02w flex justify-between gap-05w w-3/4 md:w-fit dark:bg-gray-800  bg-gray-100">
    <input id="searchBar" onkeyup="searchdP()" class="focus:outline-none bg-transparent font-myriad font-bold placeholder:text-gray-300 text-30w md:text-10w text-gray-600 dark:text-gray-200" placeholder="Type to search.." type="text">
    <div class="bg-blue-100 rounded-full p-02w">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" class="size-5 stroke-white rotate-180">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
    </div>
</div>





<?php if (have_rows('dataposter')): ?>
    <div class="dPs grid grid-cols-1 md:grid-cols-2 gap-40w md:gap-20w w-4/5 mx-auto min-h-screen mb-20w">
        <script>
            let names = []
        </script>
        <?php
        $dP = 0;
        $current_lang = apply_filters('wpml_current_language', NULL);
        while (have_rows('dataposter')): the_row();
            $image = get_sub_field('img');
            $content = get_field('content');

        ?>
            <?php while (have_rows('content')): the_row();
                $title = get_sub_field('title');
                $ShareLink = get_sub_field('previewlink');
                $dataPoster = get_sub_field('dataposter');
				$featured_post = get_field('nose');


            endwhile; ?>
			<script>
		console.log(<?php echo $featured_post  ?>)
		</script>
            <div id="box<?php echo $dP ?>" class="rounded-[1vw] overflow-hidden shadow-md h-fit transition-opacity duration-200 w-fit group flex justify-center items-center">
                <img shareLink="<?php echo $dataPoster ?>" class="dP group-hover:blur-sm transition-all group-hover:brightness-50" id="dP<?php echo $dP ?>" src="<?php echo $image['url'] ?>" height="<?php echo $image['height'] ?>" width="<?php echo $image['width'] ?>" alt="<?php echo $title ?>">
                <div id="imageOptions" class="group-hover:block absolute hidden">

                    <h1 class="text-gray-50 text-40w md:text-13w font-myriad font-bold mb-10w text-center"><?php echo $title ?></h1>
                    <div class="flex gap-20w md:gap-05w justify-center">



                        <a aria-label="Preview dataPoster" href="<?php echo $dataPoster ?>">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" class="group/edit hover:scale-105 transition-transform" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" class="fill-blue-100 transition-transform group-hover/edit:fill-green-100" />
                                <path d="M21.8536 12.5926H11.6684C10.9317 12.5926 10.2252 12.8853 9.70422 13.4062C9.18328 13.9271 8.89063 14.6337 8.89062 15.3704V28.3334C8.89062 29.0701 9.18328 29.7766 9.70422 30.2975C10.2252 30.8185 10.9317 31.1111 11.6684 31.1111H24.6314C25.3681 31.1111 26.0746 30.8185 26.5956 30.2975C27.1165 29.7766 27.4091 29.0701 27.4091 28.3334V18.1482M14.4462 25.5556L31.1128 8.88892M31.1128 8.88892H24.6314M31.1128 8.88892V15.3704" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a class="downloadlink" aria-label="Download dataPoster" href="">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" class="group/edit hover:scale-105 transition-transform" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" class="fill-blue-100 transition-transform group-hover/edit:fill-green-100" />
                                <path d="M8.89062 25.5556V28.3334C8.89062 29.0701 9.18328 29.7766 9.70422 30.2975C10.2252 30.8185 10.9317 31.1111 11.6684 31.1111H28.3351C29.0718 31.1111 29.7783 30.8185 30.2993 30.2975C30.8202 29.7766 31.1128 29.0701 31.1128 28.3334V25.5556M25.5573 20L20.0017 25.5556M20.0017 25.5556L14.4462 20M20.0017 25.5556V8.88892" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <button onclick="shareF('<?php echo $dataPoster ?>')" class="fbLink" aria-label="Share on facebook" target="_blank" rel="noopener noreferrer">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" class="group/edit hover:scale-105 transition-transform" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 40C31.0458 40 40 31.0458 40 20C40 8.95431 31.0458 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0458 8.95431 40 20 40Z" class="fill-blue-100 transition-transform group-hover/edit:fill-green-100" />
                                <path d="M16.7526 13.1505C16.7526 13.7781 16.7526 16.574 16.7526 16.574H14.2812V20.7593H16.7526V32.2416H21.8251V20.7549H25.2269C25.2269 20.7549 25.5471 18.7467 25.6987 16.5567C25.2571 16.5567 21.8424 16.5567 21.8424 16.5567C21.8424 16.5567 21.8424 14.1243 21.8424 13.6958C21.8424 13.2674 22.3965 12.6917 22.9418 12.6917C23.4871 12.6917 24.6383 12.6917 25.7074 12.6917C25.7074 12.1204 25.7074 10.1555 25.7074 8.33337C24.2834 8.33337 22.6647 8.33337 21.9506 8.33337C16.6271 8.33771 16.7526 12.5273 16.7526 13.1505Z" fill="white" />
                                <clipPath id="clip0_92_18">
                                    <rect width="40" height="40" fill="white" />
                                </clipPath>
                            </svg>
                        </button>
                        <button onclick="shareT('<?php echo $dataPoster ?>')" class="xLink" aria-label="Share on Twitter" target="_blank" rel="noopener noreferrer">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" class="group/edit hover:scale-105 transition-transform" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 40C31.0458 40 40 31.0458 40 20C40 8.95431 31.0458 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0458 8.95431 40 20 40Z" class="fill-blue-100 transition-transform group-hover/edit:fill-green-100" />
                                <path d="M30.9461 13.501C30.141 13.8602 29.2754 14.1026 28.3665 14.2108C29.2928 13.6568 30.007 12.7739 30.3401 11.7265C29.4745 12.2415 28.5094 12.6181 27.4879 12.8172C26.6656 11.9429 25.5014 11.3976 24.2072 11.3976C21.7273 11.3976 19.7147 13.4101 19.7147 15.8901C19.7147 16.2407 19.7537 16.5826 19.8316 16.9159C16.0965 16.7298 12.7855 14.9379 10.5738 12.2199C10.1886 12.8821 9.96358 13.6568 9.96358 14.4792C9.96358 16.0373 10.7556 17.4136 11.9632 18.2186C11.2274 18.197 10.5349 17.9935 9.92895 17.656C9.92895 17.6733 9.92895 17.6949 9.92895 17.7122C9.92895 19.8892 11.4784 21.7027 13.5342 22.1182C13.1577 22.2221 12.7595 22.2782 12.3527 22.2782C12.0627 22.2782 11.7814 22.248 11.5087 22.1961C12.08 23.9836 13.742 25.282 15.7069 25.3167C14.1705 26.5198 12.2315 27.2382 10.128 27.2382C9.76449 27.2382 9.4096 27.2167 9.05469 27.1778C11.0456 28.4502 13.4044 29.1947 15.9406 29.1947C24.203 29.1947 28.7214 22.3476 28.7214 16.4138C28.7214 16.219 28.7172 16.0243 28.7085 15.8338C29.5783 15.1933 30.3401 14.4012 30.9461 13.501Z" fill="white" />
                                </defs>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>

        <?php $dP++;
        endwhile; ?>
    </div>
<?php endif; ?>
<script src="<?php bloginfo('template_url'); ?>/js/dataContent.js"></script>

<?php get_footer(); ?>