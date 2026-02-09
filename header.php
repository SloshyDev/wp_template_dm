<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_front_page()) { echo bloginfo('name'); } else { wp_title(''); } ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bulma.css">
    <link media="all" rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_url'); ?>/css/bulma-carousel.min.css">
    <link media="all" rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_url'); ?>/css/featherlight.min.css">
    <link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
	<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/caboPulmo.css">
    <link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/vxl2zqz.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
$logo = get_field('logo','option');
?>
<header class='bg-gray-100 dark:bg-gray-800  px-2 py-1 shadow-md flex-col xl:flex-row flex justify-between mb-4'>
	
	<style>
        .button-container {
            display: flex;
            gap: 0.5rem; /* gap-2 */
        }
        
        .nav-button {
            margin: 0.25rem; /* m-1 */
            border-radius: 9999px; /* rounded-full */
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); /* shadow-sm */
            transition: transform 0.15s ease-in-out, box-shadow 0.15s ease-in-out; /* transition-transform */
            border: none;
            background: none;
            cursor: pointer;
        }
        
        .nav-button:hover {
            transform: scale(1.05); /* hover:scale-105 */
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1); /* hover:shadow-lg */
        }
        
        .nav-icon {
            height: 2rem; /* h-8 */
            width: 2rem; /* w-8 */
        }
        
        .icon-fill {
            fill: #172e67; /* fill-[#172e67] */
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            .icon-fill {
                fill: var(--primary-color, #172e67); /* dark:fill-primary */
            }
        }
        
        /* Responsive: hide on md and larger screens */
        @media (min-width: 768px) { /* md breakpoint */
            .button-container {
                display: none; /* md:hidden */
            }
        }
    </style>
	  <style>
        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-large {
            width: 10rem;
            display: block;
            margin: auto;
        }

        .logo-small {
            width: 2.5rem;
            height: 2.5rem;
            display: none;
            margin: 0 auto;
        }

        /* Responsive styles */
        @media (min-width: 1280px) {

            /* xl breakpoint */
            .logo-large {
                display: none;
            }

            .logo-small {
                display: block;
            }
        }

        @media (min-width: 1536px) {

            /* 2xl breakpoint */
            .logo-large {
                display: block;
            }

            .logo-small {
                display: none;
            }
        }
    </style>
	
            <div class="flex justify-between">
                <a href="<?php echo get_home_url(); ?>" aria-label='link to home' class="logo-container">
        <img class='logo-large'
            src="https://datamares.org/wp-content/uploads/2025/01/logotipo-datamares-600px-sin-pagina.png" alt="">
        <img class='logo-small'
            src="https://datamares.org/wp-content/uploads/2020/11/formacion-web-equipo-dM-pngs_boton-dm-1.png" alt="">
    </a>
               <div class="button-container">
        <button class="nav-button" aria-label='search'>
            <svg class='nav-icon' viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="18" height="18" rx="9" fill="#265852" class='icon-fill' />
                <path
                    d="M13.6251 13.6254L11.2432 11.2434M11.2432 11.2434C11.8878 10.5987 12.25 9.72435 12.25 8.81263C12.25 7.90091 11.8878 7.02654 11.2432 6.38186C10.5985 5.73718 9.7241 5.375 8.81239 5.375C7.90067 5.375 7.02629 5.73718 6.38161 6.38186C5.73693 7.02654 5.37476 7.90091 5.37476 8.81263C5.37476 9.72435 5.73693 10.5987 6.38161 11.2434C7.02629 11.8881 7.90067 12.2503 8.81239 12.2503C9.7241 12.2503 10.5985 11.8881 11.2432 11.2434Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <button onClick='toggleNav()' id='navBurger' aria-label='Show navbar' class="nav-button">
            <svg class='nav-icon' viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="18" height="18" rx="9" fill="#265852" class='icon-fill' />
                <path d="M4 6H14M4 9.5H14M4 13H14" stroke="white" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
                <div class="hidden md:block xl:hidden">
                    <?php include 'socialIcons.php'; ?>
                </div>
            </div>

            <div class="navBar hidden md:flex w-full justify-between xl:pl-3">
                <?php wp_nav_menu(array('menu' => 'main-menu', 'theme_location' => 'main_menu', 'menu_class' => 'navbar-start md:items-center flex gap-1 md:gap-4 flex-col md:flex-row', 'container' => 'ul')); ?>

                <div class="flex justify-center md:hidden xl:block">
                    <?php include 'socialIcons.php'; ?>
                </div>
                <a class="hover:scale-105 rounded-full hover:shadow-lg transition-transform md:hidden m-auto"
                    target="_blank" href="https://public.tableau.com/app/profile/datamares"><img
                        class="w-52 h-7 mt-2 m-auto"
                        src="<?php bloginfo('template_url'); ?>/img/tableu_icon.png" alt=""
                        aria-label='tableu'>
                </a>
            </div>
        </header>