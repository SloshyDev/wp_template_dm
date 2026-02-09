<?php
get_header();
/* template name: Partners*/
$image = get_the_post_thumbnail( $post_id );
?>

<style>
@layer theme{:host,:root{--font-sans:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--spacing:0.25rem;--text-3xl:1.875rem;--text-3xl--line-height:calc(2.25 / 1.875);--font-weight-black:900;--default-font-family:var(--font-sans);--default-mono-font-family:var(--font-mono);--font-Myriad:"myriad-pro",sans-serif}}@layer utilities{.mx-auto{margin-inline:auto!important}.my-\[4vw\]{margin-block:4vw!important}.mt-\[2vw\]{margin-top:2vw!important}.mt-\[3vw\]{margin-top:3vw!important}.mb-\[3vw\]{margin-bottom:3vw!important}.block{display:block!important}.w-3\/5{width:calc(3/5 * 100%)!important}.w-\[70\%\]{width:70%!important}.w-\[50\%\]{width:50%!important}.text-center{text-align:center!important}.font-Myriad{font-family:var(--font-Myriad)!important}.text-3xl{font-size:var(--text-3xl)!important;line-height:var(--tw-leading, var(--text-3xl--line-height))!important}.text-\[1\.8vw\]{font-size:1.8vw!important}.text-\[2\.2vw\]{font-size:2.2vw!important}.leading-\[2\.5vw\]{--tw-leading:2.5vw!important;line-height:2.5vw!important}.font-black{--tw-font-weight:var(--font-weight-black)!important;font-weight:var(--font-weight-black)!important}.text-\[\#1c7671\]{color:#1c7671!important}}
</style>


<!-- Banner -->
    <div class="">
        <?php if (has_post_thumbnail($post->ID)) { ?>
        <?php $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        } ?>
        <img src="<?php echo $image; ?>" alt="" class="img-responsive">
    </div>
    <h1 class="font-Myriad font-black text-[#1c7671] text-[2.2vw] text-center mt-[2vw]"><?php _e("COLLABORATIONS", 'dm' )?></h1>
    <img class="w-[70%] mx-auto my-[4vw] block" src="https://datamares.org/wp-content/uploads/2025/11/Colaboraciones.webp" alt="">
    <h1 class="font-Myriad font-black w-[50%] mx-auto text-[#1c7671] text-[2.2vw] text-center mt-[2vw]">
		<?php _e("WE ARE GRATEFUL FOR THE SUPPORT FROM THE FOLLOWING:", 'dm' )?></h1>
    <h1 class="text-[1.8vw] font-Myriad text-center text-[#1c7671] w-3/5 mx-auto mt-[3vw] leading-[2.5vw] mb-[3vw]">
        Alumbra Innovations Foundation
        <br><br>
        International Community Foundation
        <br><br>
        Jim Jameson
        <br><br>
        Oceans 5
        <br><br>
        Paul M. Angell Family Foundation
    </h1>




<?php get_footer(); ?>