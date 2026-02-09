<?php get_header();
/*template name:NewsTL*/
?>
<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/splide.min.min.css">
<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/news.min.css">

<style>
li:hover {
    background-color: transparent !important;
}
	.to-blue-200,.buttonLink{
		background: rgb(158,165,33);
background: linear-gradient(180deg, rgba(158,165,33,1) 15%, rgba(22,101,97,1) 100%);
	}
	
	.buttonLink:hover{
		color:white;
	}
	.z-10 {
    z-index: 999;
}
</style>
<!-- Banner -->
<div>
    <?php if (has_post_thumbnail($post->ID)) { ?>     <?php $image =
                wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    } ?>
    <img src="<?php echo $image; ?>" alt="Banner news" class="mx-auto w-full" width="1905" height="274" />
</div>
<?php if (have_rows('banner1')): ?>
    <?php while (have_rows('banner1')):
        the_row();
        $banner1 = get_sub_field('banner');
        $link = get_sub_field('link'); ?>
            <img class="w-full transition-all hidden" width="1905" height="275"
                src="<?php echo esc_url($banner1['url']) ?>" alt="<?php echo esc_attr($banner1['alt']); ?>" />
    <?php endwhile; ?>
<?php endif; ?>
<?php if (have_rows('banner2')): ?>
    <?php while (have_rows('banner2')):
        the_row();
        $banner = get_sub_field('banner');
        $link = get_sub_field('link'); ?>
            <img  class="w-full hidden" width="1905" height="275"
                src="<?php echo esc_url($banner['url']) ?>" alt="<?php echo esc_attr($banner['alt']); ?>" />
    <?php endwhile; ?>
<?php endif; ?>


<!-- Cards and Interviews -->
<section class="gap-05w bg-blue-400 md:flex">
    <section class="bg-white pt-30w md:w-1/2 dark:bg-gray-900">
        <!-- News vault -->
        <div
            class="mx-30w flex h-[100vw] overflow-hidden rounded-[1vw] border-[.6vw] border-blue-200 bg-blue-400 md:mx-auto md:h-[37vw] md:w-4/5">
            <div class="hidden h-full w-[10%] bg-yellow-100 md:block">
                <?php $news_icon = get_field('news_icon') ?>
                <img width="145" height="145" class="absolute -ml-10w w-8w"
                    src="<?php echo esc_url($news_icon['url']) ?>" alt="<?php echo esc_attr($news_icon['alt']); ?>" />
            </div>

            <div class="mx-20w w-full md:mx-auto md:w-4/5">
                <?php $link_icon = get_field('link_icon') ?>
                <h1
                    class="mx-auto mb-20w mt-24w text-center font-myriadCond text-90w font-bold text-yellow-100 md:text-30w">
                     <?php _e("NEWS VAULT", 'dm') ?>
                </h1>

                <?php if (have_rows('news')): ?>
                    <ul id="" class="baultNews h-[84vw] snap-y overflow-y-scroll md:h-[28vw]">
                        <?php while (have_rows('news')):
                            the_row();
                            $link = get_sub_field('link');
                            $title = get_sub_field('title');
                            $from = get_sub_field('from'); ?>
                            <li class="group mb-10w flex snap-start items-center last:mb-0">
                                <img width="58" height="58"
                                    class="mr-10w w-9w transition-transform group-hover:scale-105 md:w-3w"
                                    src="<?php echo esc_url($link_icon['url']) ?>"
                                    alt="<?php echo esc_attr($link_icon['alt']); ?>" />
                                <a target="_blank" href="<?php echo $link ?>" class="">
                                    <h1
                                        class="mb-03w uppercase font-myriadCond text-50w text-white underline decoration-transparent transition-colors group-hover:decoration-yellow-100 md:text-16w">
                                        <?php echo $title ?>
                                    </h1>
                                    <span class="font-myriadCond uppercase text-40w text-yellow-100 md:text-11w">
                                        <?php echo $from ?>
                                    </span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <!-- Cards -->
        <div class="mx-30w overflow-hidden md:mx-auto">
            <?php $newsCards = get_field('newsCards') ?>
            <?php $card1 = $newsCards[0];
            $link = $card1['link'];
            $img = $card1['img'] ?>
            <a aria-label="Link to <?php echo $img['title'] ?>" href="<?php echo $link ?>" target="_blank"
                rel="noopener noreferrer">
                <img width="758" height="253"
                    class="my-50w w-full rounded-[1vw] shadow-lg transition-all hover:scale-105 hover:shadow-2xl md:mx-auto md:my-20w md:w-4/5"
                    src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
            </a>
            <?php $card2 = $newsCards[1];
            $link = $card2['link'];
            $img = $card2['img']
                ?>
            <a aria-label="Link to <?php echo $img['title'] ?>" href="<?php echo $link ?>" target="_blank"
                rel="noopener noreferrer">
                <img height="510" width="758"
                    class="my-50w w-full rounded-[1vw] shadow-lg transition-all hover:scale-105 hover:shadow-2xl md:mx-auto md:my-20w md:w-4/5"
                    src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
            </a>
            
        </div>
    </section>
    <section class="bg-white pt-30w md:w-1/2 dark:bg-gray-900">
        <!-- Interviews -->
        <div class="mx-30w overflow-hidden rounded-[1vw] border-[.6vw] border-blue-200 bg-blue-400 md:mx-auto md:w-4/5">
			
            <div class="mx-10w mb-06w mt-05w">
                <?php $interviews_icon = get_field('interviews_icon') ?>
                <img width="145" height="145" class="w-full" src="<?php echo esc_url($interviews_icon['url']) ?>"
                    alt="<?php echo esc_attr($interviews_icon['alt']); ?>" />
            </div>
			
			

            <div class="baultNews h-[113vw] snap-y overflow-y-scroll md:h-[47vw]">
                <?php $interviewsCards = get_field('interviewsCards') ?>
				
				<div class="mx-05w mb-06w flex snap-start items-center gap-10w rounded-md p-10w">
                    <a href="https://www.youtube.com/watch?v=BuPTrRV5jJM" target="_blank">
						<img style="" class="" src="https://datamares.org/wp-content/uploads/2025/09/Recurso-2-1.webp">
						</a>
                </div>
	
				<div class="mx-05w mb-06w flex snap-start items-center gap-10w rounded-md p-10w">
                    <a href="https://www.radiopodcast.unam.mx/podcast/audio/42090" target="_blank">
						<img style="" class="" src="https://datamares.org/wp-content/uploads/2025/05/Recurso-1-11.webp">
						</a>
                </div>
				
				
                <div class="mx-05w mb-06w flex snap-start items-center gap-10w rounded-md p-10w">
                    <?php $interview0 = $interviewsCards[0];
                    $link = $interview0['link'];
                    $img = $interview0['img'];
                    $title = $interview0['title'];
                    $subtitle = $interview0['subtitle'];
                    $summary = $interview0['summary']; ?>

                    <img width="145" height="145" class="h-fit w-2/5 rounded-[0.5vw] md:w-9w"
                        src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                    <div class="">
                        <h1 class="font-myriadCond text-50w font-bold text-white md:text-21w">
                            <?php echo $title ?>
                        </h1>
                        <h1 class="font-myriadCond text-44w font-bold text-blue-400 md:text-14w">
                            <?php echo $subtitle ?>
                        </h1>
                        <h1 class="font-myriadCond text-42w font-bold text-white md:text-12w">
                            <?php echo $summary ?>
                        </h1>
                        <a href="<?php echo $link ?>" target="_blank"
                            class="buttonLink my-05w block w-1/2 text-xl md:w-6w md:text-12w">
                            VIDEO
                        </a>
                    </div>
                </div>

                <div class="mx-05w mb-06w flex snap-start items-center gap-10w rounded-md p-10w">
                    <?php $interview1 = $interviewsCards[1];
                    $link = $interview1['link'];
                    $img = $interview1['img'];
                    $title = $interview1['title'];
                    $subtitle = $interview1['subtitle'];
                    $summary = $interview1['summary']; ?>

                    <img width="145" height="145" class="h-fit w-2/5 rounded-[0.5vw] md:w-9w"
                        src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                    <div class="">
                        <h1 class="font-myriadCond text-50w font-bold text-white md:text-21w">
                            <?php echo $title ?>
                        </h1>
                        <h1 class="font-myriadCond text-44w font-bold text-blue-400 md:text-14w">
                            <?php echo $subtitle ?>
                        </h1>
                        <h1 class="font-myriadCond text-42w font-bold text-white md:text-12w">
                            <?php echo $summary ?>
                        </h1>
                        <a href="<?php echo $link ?>" target="_blank"
                            class="buttonLink my-05w block w-1/2 text-xl md:w-6w md:text-12w">
                            VIDEO
                        </a>
                    </div>
                </div>

                <div
                    class="mx-05w mb-06w flex snap-start items-center gap-10w rounded-md bg-gradient-to-b from-yellow-200 to-blue-200 to-90% p-10w">
                    <?php $interview2 = $interviewsCards[2];
                    $link = $interview2['link'];
                    $img = $interview2['img'];
                    $title = $interview2['title'];
                    $subtitle = $interview2['subtitle'];
                    $summary = $interview2['summary']; ?>

                    <img width="145" height="145" class="h-fit w-2/5 rounded-[0.5vw] md:w-9w"
                        src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                    <div class="">
                        <h1 class="font-myriadCond text-50w font-bold text-white md:text-21w">
                            <?php echo $title ?>
                        </h1>
                        <h1 class="font-myriadCond text-44w font-bold text-blue-400 md:text-14w">
                            <?php echo $subtitle ?>
                        </h1>
                        <h1 class="font-myriadCond text-42w font-bold text-white md:text-12w">
                            <?php echo $summary ?>
                        </h1>
                        <a href="<?php echo $link ?>" target="_blank"
                            class="buttonLink my-05w block w-1/2 text-xl md:w-6w md:text-12w">
                            VIDEO
                        </a>
                    </div>
                </div>

                <div class="mx-05w mb-06w flex snap-start items-center gap-10w rounded-md p-10w">
                    <?php $interview3 = $interviewsCards[3];
                    $link = $interview3['link'];
                    $img = $interview3['img'];
                    $title = $interview3['title'];
                    $subtitle = $interview3['subtitle'];
                    $summary = $interview3['summary']; ?>

                    <img width="145" height="145" class="h-fit w-2/5 rounded-[0.5vw] md:w-9w"
                        src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                    <div class="">
                        <h1 class="font-myriadCond text-50w font-bold text-white md:text-21w">
                            <?php echo $title ?>
                        </h1>
                        <h1 class="font-myriadCond text-44w font-bold text-blue-400 md:text-14w">
                            <?php echo $subtitle ?>
                        </h1>
                        <h1 class="font-myriadCond text-42w font-bold text-white md:text-12w">
                            <?php echo $summary ?>
                        </h1>
                        <a href="<?php echo $link ?>" target="_blank"
                            class="buttonLink my-05w block w-1/2 text-xl md:w-6w md:text-12w">
                            <?php _e("LISTEN", 'dm') ?>
                        </a>
                    </div>
                </div>

                <!-- LA PANDILLA Interviews -->
                <?php $interviews_background = get_field("background_interviews");
                $title_interviews = get_field("title_interviews");
                $subtitle_interviews = get_field("subtitle_interviews"); ?>
				
				<a target="_blank" href="https://www.imer.mx/programas/ballenas-nacidas-en-aguas-mexicanas/"><img src="https://datamares.org/wp-content/uploads/2025/02/Asset-1.webp" class="my-20w mx-auto w-[98%] rounded-md" style=""></a>

                <div style="background-image: url('<?php echo esc_url($interviews_background['url']) ?>');"
                    class="mx-30w mb-10w snap-start rounded-[1vw] bg-cover bg-bottom p-05w md:mx-05w">
                    <div class="mb-15w">
                        <h1 class="mb-03w text-center font-myriadCond text-50w font-bold text-white md:text-22w">
                            <?php echo $title_interviews ?>
                        </h1>
                        <h1 class="mx-20w text-center font-myriadCond text-42w text-white md:text-15w">
                            <?php echo $subtitle_interviews ?>
                        </h1>
                    </div>

                    <div class="w-full justify-around gap-05w md:flex">
                        <?php if (have_rows('audios')): ?>
                            <?php while
                            (have_rows('audios')):
                                the_row();
                                $photo = get_sub_field('photo');
                                $name = get_sub_field('name');
                                $last_name = get_sub_field('last_name');
                                $position = get_sub_field('position');
                                $audio = get_sub_field("audio") ?>

                                <div class="mx-20w my-20w flex items-center gap-30w md:mx-auto md:my-0 md:w-1/2 md:gap-03w">
                                    <img width="145" height="145" class="h-fit w-1/3 md:w-7w"
                                        src="<?php echo esc_url($photo['url']) ?>"
                                        alt="<?php echo esc_attr($photo['alt']); ?>" />
                                    <div class="w-1/2 font-myriad font-bold text-white md:w-auto">
                                        <h1 class="mb-02w text-50w md:text-11w"><?php echo $name ?></h1>
                                        <h1 class="mb-02w text-40w md:text-08w">
                                            <?php echo $last_name ?>
                                        </h1>
                                        <h1 class="mb-02w text-30w md:text-05w">
                                            <?php echo $position ?>
                                        </h1>
                                        <button
                                            onclick="showModal('interviewsModal'),mediaSource('audio','<?php echo $audio ?>')"
                                            target="_blank"
                                            class="buttonLink mx-auto my-10w block w-4/5 text-xl md:w-9w md:text-09w">
                                            <?php _e("LISTEN", 'dm') ?>
                                        </button>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mx-30w my-20w grid snap-start gap-05w md:mx-05w md:grid-cols-2">
                    <?php $card4 = $newsCards[3];
                    $link = $card4['link'];
                    $img = $card4['img']; ?>
                    <button onclick="showModal('videoModal'),mediaSource('video','<?php echo $link ?>')"
                        aria-label="Link to <?php echo $img['title'] ?>"
                        class="my-50w transition-transform hover:scale-105 md:my-auto" target="_blank"
                        rel="noopener noreferrer">
                        <img width="758" height="271"
                            class="w-full rounded-[1vw] shadow-lg transition-all group-hover:scale-105 group-hover:shadow-2xl md:h-[9vw] md:w-auto"
                            src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                    </button>
                    <?php $card5 = $newsCards[4];
                    $link = $card5['link'];
                    $img = $card5['img'];
                    $title = $card5['title'];
                    $subtitle = $card5['subtitle'];
                    $summary = $card5['summary']; ?>
                    <a aria-label="Link to <?php echo $img['title'] ?>" href="<?php echo $link ?>"
                        class="flex gap-20w transition-transform hover:scale-105 md:gap-05w" target="_blank"
                        rel="noopener noreferrer">
                        <img width="758" height="271"
                            class="w-1/3 rounded-[1vw] shadow-lg transition-all group-hover:scale-105 group-hover:shadow-2xl md:h-[9vw] md:w-auto"
                            src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                        <div class="">
                            <h1 class="text-30w text-yellow-100 md:text-06w">
                                <?php echo $title ?> <?php echo $subtitle ?>
                                <span class="text-white"><?php echo $summary ?></span>
                            </h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <?php $card3 = $newsCards[5];
        $link = $card3['link'];
        $img = $card3['img'];
        $summary = $card3['summary']; ?>
        <div class="mx-30w my-50w block w-auto md:mx-auto md:my-20w md:w-4/5">
            <a aria-label="Link to <?php echo $img['title'] ?>" href="<?php echo $link ?>" class="group" target="_blank"
                rel="noopener noreferrer">
                <img width="758" height="271"
                    class="mb-10w rounded-[1vw] shadow-md transition-all group-hover:scale-105 "
                    src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
            </a>
            <h1 class="font-myriadCond text-60w text-green-100 md:text-15w">
                <?php echo $summary ?>
            </h1>
        </div>
    </section>
</section>
<!-- Reports -->
<section
    class="mx-30w my-30w rounded-[1vw] border-[.6vw] border-blue-300 bg-neutral-300 p-10w pb-0 md:mx-auto md:w-[90%]">
    <?php $reports_title = get_field('reports_title');
    $reports_subtitle = get_field('reports_subtitle');
    $reports_summary = get_field('reports_summary'); ?>
    <h1 class="text-center font-myriadCond text-70w font-bold md:text-20w">
        <?php echo $reports_title ?>
    </h1>
    <h2 class="text-center font-myriadCond text-80w font-bold md:text-30w">
        <?php echo $reports_subtitle ?>
    </h2>
    <p class="mt-05w hidden text-center font-myriad text-50w md:mx-auto md:block md:w-11/12 md:text-13w">
        <?php echo $reports_summary ?>
    </p>

    <?php if (have_rows('reports')): ?>
        <section id="reports" class="splide mx-10w rounded-lg md:mx-40w" aria-label="reports banners">
            <div class="splide__track mx-auto w-full md:w-11/12">
                <section class="splide__list">
                    <?php while (have_rows('reports')):
                        the_row();
                        $img = get_sub_field('img');
                        $link = get_sub_field('link'); ?>

                        <div class="splide__slide mb-20w mt-20w flex flex-col" role="banner">
                            <a href="<?php echo $link ?>" aria-label="<?php echo $img['title'] ?>">
                                <img class="mx-auto rounded-[.5vw] shadow-md transition-all hover:scale-105 hover:shadow-xl md:w-[13vw]"
                                    width="256" height="319" data-splide-lazy="<?php echo $img['url'] ?>"
                                    alt="<?php echo $img['title'] ?>" />
                            </a>
                        </div>

                    <?php endwhile; ?>
                </section>
            </div>
        </section>
    <?php endif; ?>

    <p class="mb-20w mt-05w text-center font-myriad text-50w md:mx-auto md:hidden md:w-4/5 md:text-13w">
        <?php echo $reports_summary ?>
    </p>
</section>

<!-- Modal video -->
<div id="videoModal" class="modal fixed bottom-0 left-0 right-0 top-0 z-10 hidden h-full w-full">
    <div onclick="closeModal(),pauseMedia('video')"
        class="modalBackground absolute bottom-0 left-0 right-0 top-0 bg-gray-900/80 backdrop-blur-lg"></div>

    <div class="modalContent z-10 mx-auto flex flex-col items-center justify-center gap-10w">
        <video id="video" controls src="" autoplay>
            Tu navegador no admite el elemento <code>video</code>.
        </video>
    </div>

    <div class="absolute right-[3vw] top-[3vw] flex gap-10w md:block">
        <button onclick="closeModal(),pauseMedia('video')" class="group z-20" aria-label="closeModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-[10vw] fill-blue-200 stroke-white shadow-2xl transition-all group-hover:scale-105 group-hover:stroke-yellow-100 md:w-[3vw]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
    </div>
</div>

<!-- Modal interviews -->
<div id="interviewsModal" class="modal fixed bottom-0 left-0 right-0 top-0 z-10 hidden h-full w-full">
    <div onclick="closeModal(),pauseMedia('audio')"
        class="modalBackground absolute bottom-0 left-0 right-0 top-0 bg-gray-900/80 backdrop-blur-lg"></div>

    <div class="modalContent z-10 mx-auto flex flex-col items-center justify-center gap-10w">
        <?php $auidoPopup = get_field('audioPopup') ?>
        <img class="w-auto" width="401" height="303" src="<?php echo $auidoPopup['url'] ?>"
            alt="<?php echo $auidoPopup['title'] ?>" />
        <audio class="w-full" controls id="audio" src=""></audio>
    </div>

    <div class="absolute right-[3vw] top-[3vw] flex gap-10w md:block">
        <button onclick="closeModal(),pauseMedia('audio')" class="group z-20" aria-label="closeModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-[10vw] fill-blue-200 stroke-white shadow-2xl transition-all group-hover:scale-105 group-hover:stroke-yellow-100 md:w-[3vw]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
    </div>
</div>

<!-- Modal FIL -->
<div id="filModal" class="modal fixed bottom-0 left-0 right-0 top-0 z-10 hidden h-full w-full">
    <div onclick="closeModal()"
        class="modalBackground absolute bottom-0 left-0 right-0 top-0 bg-gray-900/80 backdrop-blur-lg"></div>

    <div class="modalContent z-10 mx-auto">
        <?php $programfil = get_field('program') ?>
        <img width="447" height="387" style='width: 31vw;' class="mx-auto h-[95%] w-auto" src="https://datamares.org/wp-content/uploads/2025/08/PROGRAMA-DE-ACTIVIDAES-FILUNI-20251.webp" alt="" />
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
       
    </div>
</div>
<script src="<?php bloginfo('template_url'); ?>/js/splide.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/news.min.js"></script>
<?php get_footer(); ?>