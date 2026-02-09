<?php
$logo = get_field('logo','option');
?>
<footer class="footer columns py-0 px-6 m-0 ">
   <div class="columns column is-11 mx-auto">
        <a id="button" class="button is-info p-0 show"></a>
    <div class="column has-text-centered">
        <div class="p-0 is-flex is-justify-content-center is-align-item">
            <a class="m-1 is-flex is-align-items-center" target="_blank" href="mailto:catalina@gocmarineprogram.org"><img class="social-links" src="https://datamares.org/wp-content/uploads/2021/05/gmail.svg" alt=""></a>
            <a class="m-1 is-flex is-align-items-center" target="_blank" href="https://www.facebook.com/datamares/"><img class="social-links" src="https://datamares.org/wp-content/uploads/2021/05/facebook.svg" alt=""></a>
            <a class="m-1 is-flex is-align-items-center" target="_blank" href="https://twitter.com/dataMares"><img class="social-links" src="https://datamares.org/wp-content/uploads/2025/11/Group-4.png" alt=""></a>
            <a class="m-1 is-flex is-align-items-center" target="_blank" href="https://www.instagram.com/datamares_/"><img class="social-links" src="https://datamares.org/wp-content/uploads/2021/05/instagram.svg" alt=""></a>
        </div>
        <p>© dataMares, 2026. All rights reserved</p>
    </div>
    <div class="column is-3 mx-6 px-6 pb-0">
        <a class="m-auto" href="https://datamares.org/?lang=es">
            <img src="https://datamares.org/wp-content/uploads/2025/01/logotipo-datamares-600px-sin-pagina.png">
        </a>
    </div>
    <div class="column">
		
		<a href="mailto:catalina@gocmarineprogram.com" class="flex justify-center" target="_blank">
		<img src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/Recurso-1-1.svg", 'dm') ?>" style="width:19rem" />
		</a>
       
    </div>
   </div>
	<div id='dropDownArrow' class="hidden">
    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-5 h-5 m-auto mt-[2px] stroke-secondary ml-[2px] md:ml-auto absolute right-2 md:right-auto md:static">
        <path stroke-linecap="round" stoke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
    </svg>
</div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bulma-carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/anime.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
<?php  wp_footer(); ?>

<script>

	

function toggleNav() {
    let navBurguer = document.querySelector('.navBar')
    navBurguer.classList.toggle('hidden')
}

	
</script>

</body>

</html>