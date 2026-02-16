<?php get_header();
/*template name: Marine Prosperity areas*/
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/splide.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/amp.css">


<section>
    <!-- Banner -->
    <?php if (has_post_thumbnail($post->ID)) {
        $banner_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    ?>
        <div class="w-full">
            <img src="<?php echo esc_url($banner_image); ?>" alt="" class="w-full h-auto">
        </div>
    <?php } ?>
    <!-- Buttons to navigate sections -->
    <section class="flex items-center ml-[2vw]">
        <div id="buttons" class="flex gap-[3vw] w-[80%] ml-auto mr-[5.15vw] items-stretch">
            <div class="section-button cursor-pointer flex flex-col m-auto items-center justify-baseline" data-section="1">
                <svg viewBox="0 0 48 48" class="group w-[2vw] mb-2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.54 47.08C36.5408 47.08 47.08 36.5408 47.08 23.54C47.08 10.5392 36.5408 0 23.54 0C10.5392 0 0 10.5392 0 23.54C0 36.5408 10.5392 47.08 23.54 47.08Z" fill="#054371" />
                    <path class="path-white group-hover:fill-[#054371] transition-colors duration-200" d="M23.5414 44.6399C35.1946 44.6399 44.6414 35.1931 44.6414 23.5399C44.6414 11.8867 35.1946 2.43994 23.5414 2.43994C11.8882 2.43994 2.44141 11.8867 2.44141 23.5399C2.44141 35.1931 11.8882 44.6399 23.5414 44.6399Z" fill="white" />
                    <path class="path-blue group-hover:fill-white transition-colors duration-200" d="M41.7283 21.4299C41.6683 21.6499 41.6283 21.8799 41.5583 22.0999C41.0383 23.8999 39.4183 25.1199 37.5083 25.1399C36.6783 25.1399 35.8383 25.1499 35.0083 25.1399C34.7683 25.1399 34.6883 25.1999 34.6683 25.4499C34.6183 26.4799 34.1783 27.3399 33.4783 28.0899C33.3683 28.2099 33.2883 28.4099 33.2883 28.5699C33.2883 29.4199 33.2983 30.2599 32.9283 31.0599C32.4683 32.0599 31.7383 32.7899 30.7283 33.2199C30.5383 33.2999 30.4683 33.3999 30.4683 33.5999C30.3983 36.0499 28.6183 37.7899 26.1483 37.7899C23.4383 37.7899 20.7283 37.7899 18.0083 37.7899C17.7083 37.7899 17.3983 37.7299 17.1083 37.6399C14.4883 36.7799 11.8683 35.8999 9.24828 35.0199C8.27828 34.6999 7.98828 34.2899 7.98828 33.2799C7.98828 29.2199 7.98828 25.1499 7.98828 21.0899C7.98828 20.1799 8.39828 19.6899 9.28828 19.5199C9.44828 19.4899 9.60828 19.3899 9.75828 19.2999C14.0583 16.7699 18.3583 14.2399 22.6683 11.7099C24.0883 10.8699 25.5583 10.8299 26.9783 11.6699C28.4083 12.5199 29.0983 13.8199 29.0483 15.4899C29.0383 15.8799 28.9283 16.2699 28.8583 16.6999C28.9683 16.6999 29.0783 16.6999 29.1983 16.6999C31.9083 16.6999 34.6183 16.6999 37.3383 16.6999C39.5883 16.6999 41.2083 18.0399 41.6583 20.2599C41.6583 20.2999 41.6983 20.3399 41.7183 20.3699C41.7183 20.7199 41.7183 21.0699 41.7183 21.4199L41.7283 21.4299ZM31.8483 25.1399C31.6583 25.1399 31.4583 25.1399 31.2683 25.1399C30.0683 25.1399 28.8783 25.1499 27.6783 25.1399C26.7083 25.1299 26.0783 24.2799 26.3183 23.3599C26.4883 22.7299 27.0283 22.3499 27.7983 22.3499C30.9683 22.3499 34.1483 22.3499 37.3183 22.3499C37.5383 22.3499 37.7583 22.3299 37.9683 22.2599C38.6383 22.0399 39.0183 21.3699 38.8983 20.6699C38.7783 19.9999 38.1783 19.5299 37.4483 19.5299C33.2983 19.5299 29.1483 19.5299 24.9883 19.5299C24.8383 19.5299 24.6783 19.5299 24.5283 19.4899C23.8183 19.3199 23.3983 18.6999 23.4683 17.9599C23.5383 17.2599 24.0983 16.7699 24.8983 16.7199C25.5383 16.6799 26.0183 16.3199 26.1983 15.7399C26.3783 15.1799 26.1783 14.5699 25.7083 14.2099C25.2383 13.8499 24.6483 13.8299 24.1083 14.1599C19.7583 16.8299 15.4183 19.5099 11.0683 22.1799C10.8683 22.2999 10.7883 22.4299 10.7883 22.6699C10.7883 25.8599 10.7883 29.0399 10.7883 32.2299C10.7883 32.4999 10.8683 32.6299 11.1283 32.7199C13.3583 33.4499 15.5783 34.1999 17.8083 34.9299C17.9583 34.9799 18.1283 35.0099 18.2883 35.0099C20.8383 35.0099 23.3883 35.0099 25.9283 35.0099C26.1383 35.0099 26.3483 35.0099 26.5483 34.9699C27.1883 34.8599 27.6583 34.2599 27.6083 33.5999C27.1883 33.5999 26.7583 33.5999 26.3383 33.5999C25.4683 33.5999 24.8383 32.9999 24.8483 32.1899C24.8483 31.3899 25.4683 30.8099 26.3283 30.7999C27.0183 30.7999 27.7083 30.7999 28.4083 30.7999C28.7283 30.7999 29.0483 30.7999 29.3583 30.7599C30.0283 30.6499 30.5383 29.9699 30.3983 29.3899C29.5083 29.3899 28.6083 29.3899 27.7083 29.3899C26.8783 29.3899 26.2583 28.7899 26.2483 28.0099C26.2383 27.2199 26.8583 26.6099 27.7083 26.5999C28.5583 26.5999 29.3983 26.5999 30.2483 26.5999C30.4183 26.5999 30.5983 26.5999 30.7683 26.5599C31.4183 26.4299 31.8783 25.8499 31.8383 25.1799L31.8483 25.1399Z" fill="#1075BC" />
                </svg>
                <h1 class="font-Myriad font-black text-[1.2vw] text-[#054371] text-center leading-none"><?php _e("PROSPERITY BEYOND PROTECTING", 'dm') ?></h1>
            </div>
            <div class="w-[.15vw] h-[8vw] bg-black"></div>
            <div class="section-button cursor-pointer flex flex-col m-auto items-center justify-baseline" data-section="2">
                <svg class="group w-[2vw] mb-2" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.54 47.08C36.5408 47.08 47.08 36.5408 47.08 23.54C47.08 10.5392 36.5408 0 23.54 0C10.5392 0 0 10.5392 0 23.54C0 36.5408 10.5392 47.08 23.54 47.08Z" fill="#054371" />
                    <path class="path-white group-hover:fill-[#054371] transition-colors duration-200" d="M23.5414 44.6399C35.1946 44.6399 44.6414 35.1931 44.6414 23.5399C44.6414 11.8867 35.1946 2.43994 23.5414 2.43994C11.8882 2.43994 2.44141 11.8867 2.44141 23.5399C2.44141 35.1931 11.8882 44.6399 23.5414 44.6399Z" fill="white" />
                    <path class="path-blue group-hover:fill-white transition-colors duration-200" d="M41.7283 21.4299C41.6683 21.6499 41.6283 21.8799 41.5583 22.0999C41.0383 23.8999 39.4183 25.1199 37.5083 25.1399C36.6783 25.1399 35.8383 25.1499 35.0083 25.1399C34.7683 25.1399 34.6883 25.1999 34.6683 25.4499C34.6183 26.4799 34.1783 27.3399 33.4783 28.0899C33.3683 28.2099 33.2883 28.4099 33.2883 28.5699C33.2883 29.4199 33.2983 30.2599 32.9283 31.0599C32.4683 32.0599 31.7383 32.7899 30.7283 33.2199C30.5383 33.2999 30.4683 33.3999 30.4683 33.5999C30.3983 36.0499 28.6183 37.7899 26.1483 37.7899C23.4383 37.7899 20.7283 37.7899 18.0083 37.7899C17.7083 37.7899 17.3983 37.7299 17.1083 37.6399C14.4883 36.7799 11.8683 35.8999 9.24828 35.0199C8.27828 34.6999 7.98828 34.2899 7.98828 33.2799C7.98828 29.2199 7.98828 25.1499 7.98828 21.0899C7.98828 20.1799 8.39828 19.6899 9.28828 19.5199C9.44828 19.4899 9.60828 19.3899 9.75828 19.2999C14.0583 16.7699 18.3583 14.2399 22.6683 11.7099C24.0883 10.8699 25.5583 10.8299 26.9783 11.6699C28.4083 12.5199 29.0983 13.8199 29.0483 15.4899C29.0383 15.8799 28.9283 16.2699 28.8583 16.6999C28.9683 16.6999 29.0783 16.6999 29.1983 16.6999C31.9083 16.6999 34.6183 16.6999 37.3383 16.6999C39.5883 16.6999 41.2083 18.0399 41.6583 20.2599C41.6583 20.2999 41.6983 20.3399 41.7183 20.3699C41.7183 20.7199 41.7183 21.0699 41.7183 21.4199L41.7283 21.4299ZM31.8483 25.1399C31.6583 25.1399 31.4583 25.1399 31.2683 25.1399C30.0683 25.1399 28.8783 25.1499 27.6783 25.1399C26.7083 25.1299 26.0783 24.2799 26.3183 23.3599C26.4883 22.7299 27.0283 22.3499 27.7983 22.3499C30.9683 22.3499 34.1483 22.3499 37.3183 22.3499C37.5383 22.3499 37.7583 22.3299 37.9683 22.2599C38.6383 22.0399 39.0183 21.3699 38.8983 20.6699C38.7783 19.9999 38.1783 19.5299 37.4483 19.5299C33.2983 19.5299 29.1483 19.5299 24.9883 19.5299C24.8383 19.5299 24.6783 19.5299 24.5283 19.4899C23.8183 19.3199 23.3983 18.6999 23.4683 17.9599C23.5383 17.2599 24.0983 16.7699 24.8983 16.7199C25.5383 16.6799 26.0183 16.3199 26.1983 15.7399C26.3783 15.1799 26.1783 14.5699 25.7083 14.2099C25.2383 13.8499 24.6483 13.8299 24.1083 14.1599C19.7583 16.8299 15.4183 19.5099 11.0683 22.1799C10.8683 22.2999 10.7883 22.4299 10.7883 22.6699C10.7883 25.8599 10.7883 29.0399 10.7883 32.2299C10.7883 32.4999 10.8683 32.6299 11.1283 32.7199C13.3583 33.4499 15.5783 34.1999 17.8083 34.9299C17.9583 34.9799 18.1283 35.0099 18.2883 35.0099C20.8383 35.0099 23.3883 35.0099 25.9283 35.0099C26.1383 35.0099 26.3483 35.0099 26.5483 34.9699C27.1883 34.8599 27.6583 34.2599 27.6083 33.5999C27.1883 33.5999 26.7583 33.5999 26.3383 33.5999C25.4683 33.5999 24.8383 32.9999 24.8483 32.1899C24.8483 31.3899 25.4683 30.8099 26.3283 30.7999C27.0183 30.7999 27.7083 30.7999 28.4083 30.7999C28.7283 30.7999 29.0483 30.7999 29.3583 30.7599C30.0283 30.6499 30.5383 29.9699 30.3983 29.3899C29.5083 29.3899 28.6083 29.3899 27.7083 29.3899C26.8783 29.3899 26.2583 28.7899 26.2483 28.0099C26.2383 27.2199 26.8583 26.6099 27.7083 26.5999C28.5583 26.5999 29.3983 26.5999 30.2483 26.5999C30.4183 26.5999 30.5983 26.5999 30.7683 26.5599C31.4183 26.4299 31.8783 25.8499 31.8383 25.1799L31.8483 25.1399Z" fill="#1075BC" />
                </svg>
                <h1 class="font-Myriad font-black text-[1.2vw] text-[#054371] text-center leading-none"><?php _e("A DECADAL FRAMEWORK", 'dm') ?></h1>
            </div>
            <div class="w-[.15vw] h-[8vw] bg-black"></div>
            <div class="section-button cursor-pointer flex flex-col m-auto items-center justify-baseline" data-section="3">
                <svg class="group w-[2vw] mb-2" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.54 47.08C36.5408 47.08 47.08 36.5408 47.08 23.54C47.08 10.5392 36.5408 0 23.54 0C10.5392 0 0 10.5392 0 23.54C0 36.5408 10.5392 47.08 23.54 47.08Z" fill="#054371" />
                    <path class="path-white group-hover:fill-[#054371] transition-colors duration-200" d="M23.5414 44.6399C35.1946 44.6399 44.6414 35.1931 44.6414 23.5399C44.6414 11.8867 35.1946 2.43994 23.5414 2.43994C11.8882 2.43994 2.44141 11.8867 2.44141 23.5399C2.44141 35.1931 11.8882 44.6399 23.5414 44.6399Z" fill="white" />
                    <path class="path-blue group-hover:fill-white transition-colors duration-200" d="M41.7283 21.4299C41.6683 21.6499 41.6283 21.8799 41.5583 22.0999C41.0383 23.8999 39.4183 25.1199 37.5083 25.1399C36.6783 25.1399 35.8383 25.1499 35.0083 25.1399C34.7683 25.1399 34.6883 25.1999 34.6683 25.4499C34.6183 26.4799 34.1783 27.3399 33.4783 28.0899C33.3683 28.2099 33.2883 28.4099 33.2883 28.5699C33.2883 29.4199 33.2983 30.2599 32.9283 31.0599C32.4683 32.0599 31.7383 32.7899 30.7283 33.2199C30.5383 33.2999 30.4683 33.3999 30.4683 33.5999C30.3983 36.0499 28.6183 37.7899 26.1483 37.7899C23.4383 37.7899 20.7283 37.7899 18.0083 37.7899C17.7083 37.7899 17.3983 37.7299 17.1083 37.6399C14.4883 36.7799 11.8683 35.8999 9.24828 35.0199C8.27828 34.6999 7.98828 34.2899 7.98828 33.2799C7.98828 29.2199 7.98828 25.1499 7.98828 21.0899C7.98828 20.1799 8.39828 19.6899 9.28828 19.5199C9.44828 19.4899 9.60828 19.3899 9.75828 19.2999C14.0583 16.7699 18.3583 14.2399 22.6683 11.7099C24.0883 10.8699 25.5583 10.8299 26.9783 11.6699C28.4083 12.5199 29.0983 13.8199 29.0483 15.4899C29.0383 15.8799 28.9283 16.2699 28.8583 16.6999C28.9683 16.6999 29.0783 16.6999 29.1983 16.6999C31.9083 16.6999 34.6183 16.6999 37.3383 16.6999C39.5883 16.6999 41.2083 18.0399 41.6583 20.2599C41.6583 20.2999 41.6983 20.3399 41.7183 20.3699C41.7183 20.7199 41.7183 21.0699 41.7183 21.4199L41.7283 21.4299ZM31.8483 25.1399C31.6583 25.1399 31.4583 25.1399 31.2683 25.1399C30.0683 25.1399 28.8783 25.1499 27.6783 25.1399C26.7083 25.1299 26.0783 24.2799 26.3183 23.3599C26.4883 22.7299 27.0283 22.3499 27.7983 22.3499C30.9683 22.3499 34.1483 22.3499 37.3183 22.3499C37.5383 22.3499 37.7583 22.3299 37.9683 22.2599C38.6383 22.0399 39.0183 21.3699 38.8983 20.6699C38.7783 19.9999 38.1783 19.5299 37.4483 19.5299C33.2983 19.5299 29.1483 19.5299 24.9883 19.5299C24.8383 19.5299 24.6783 19.5299 24.5283 19.4899C23.8183 19.3199 23.3983 18.6999 23.4683 17.9599C23.5383 17.2599 24.0983 16.7699 24.8983 16.7199C25.5383 16.6799 26.0183 16.3199 26.1983 15.7399C26.3783 15.1799 26.1783 14.5699 25.7083 14.2099C25.2383 13.8499 24.6483 13.8299 24.1083 14.1599C19.7583 16.8299 15.4183 19.5099 11.0683 22.1799C10.8683 22.2999 10.7883 22.4299 10.7883 22.6699C10.7883 25.8599 10.7883 29.0399 10.7883 32.2299C10.7883 32.4999 10.8683 32.6299 11.1283 32.7199C13.3583 33.4499 15.5783 34.1999 17.8083 34.9299C17.9583 34.9799 18.1283 35.0099 18.2883 35.0099C20.8383 35.0099 23.3883 35.0099 25.9283 35.0099C26.1383 35.0099 26.3483 35.0099 26.5483 34.9699C27.1883 34.8599 27.6583 34.2599 27.6083 33.5999C27.1883 33.5999 26.7583 33.5999 26.3383 33.5999C25.4683 33.5999 24.8383 32.9999 24.8483 32.1899C24.8483 31.3899 25.4683 30.8099 26.3283 30.7999C27.0183 30.7999 27.7083 30.7999 28.4083 30.7999C28.7283 30.7999 29.0483 30.7999 29.3583 30.7599C30.0283 30.6499 30.5383 29.9699 30.3983 29.3899C29.5083 29.3899 28.6083 29.3899 27.7083 29.3899C26.8783 29.3899 26.2583 28.7899 26.2483 28.0099C26.2383 27.2199 26.8583 26.6099 27.7083 26.5999C28.5583 26.5999 29.3983 26.5999 30.2483 26.5999C30.4183 26.5999 30.5983 26.5999 30.7683 26.5599C31.4183 26.4299 31.8783 25.8499 31.8383 25.1799L31.8483 25.1399Z" fill="#1075BC" />
                </svg>
                <h1 class="font-Myriad font-black text-[1.2vw] text-[#054371] text-center leading-none"><?php _e("KEY ACTIONS", 'dm') ?></h1>
            </div>
            <div class="w-[.15vw] h-[8vw] bg-black"></div>
            <div class="section-button cursor-pointer flex flex-col m-auto items-center justify-baseline" data-section="4">
                <svg class="group w-[2vw] mb-2" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.54 47.08C36.5408 47.08 47.08 36.5408 47.08 23.54C47.08 10.5392 36.5408 0 23.54 0C10.5392 0 0 10.5392 0 23.54C0 36.5408 10.5392 47.08 23.54 47.08Z" fill="#054371" />
                    <path class="path-white group-hover:fill-[#054371] transition-colors duration-200" d="M23.5414 44.6399C35.1946 44.6399 44.6414 35.1931 44.6414 23.5399C44.6414 11.8867 35.1946 2.43994 23.5414 2.43994C11.8882 2.43994 2.44141 11.8867 2.44141 23.5399C2.44141 35.1931 11.8882 44.6399 23.5414 44.6399Z" fill="white" />
                    <path class="path-blue group-hover:fill-white transition-colors duration-200" d="M41.7283 21.4299C41.6683 21.6499 41.6283 21.8799 41.5583 22.0999C41.0383 23.8999 39.4183 25.1199 37.5083 25.1399C36.6783 25.1399 35.8383 25.1499 35.0083 25.1399C34.7683 25.1399 34.6883 25.1999 34.6683 25.4499C34.6183 26.4799 34.1783 27.3399 33.4783 28.0899C33.3683 28.2099 33.2883 28.4099 33.2883 28.5699C33.2883 29.4199 33.2983 30.2599 32.9283 31.0599C32.4683 32.0599 31.7383 32.7899 30.7283 33.2199C30.5383 33.2999 30.4683 33.3999 30.4683 33.5999C30.3983 36.0499 28.6183 37.7899 26.1483 37.7899C23.4383 37.7899 20.7283 37.7899 18.0083 37.7899C17.7083 37.7899 17.3983 37.7299 17.1083 37.6399C14.4883 36.7799 11.8683 35.8999 9.24828 35.0199C8.27828 34.6999 7.98828 34.2899 7.98828 33.2799C7.98828 29.2199 7.98828 25.1499 7.98828 21.0899C7.98828 20.1799 8.39828 19.6899 9.28828 19.5199C9.44828 19.4899 9.60828 19.3899 9.75828 19.2999C14.0583 16.7699 18.3583 14.2399 22.6683 11.7099C24.0883 10.8699 25.5583 10.8299 26.9783 11.6699C28.4083 12.5199 29.0983 13.8199 29.0483 15.4899C29.0383 15.8799 28.9283 16.2699 28.8583 16.6999C28.9683 16.6999 29.0783 16.6999 29.1983 16.6999C31.9083 16.6999 34.6183 16.6999 37.3383 16.6999C39.5883 16.6999 41.2083 18.0399 41.6583 20.2599C41.6583 20.2999 41.6983 20.3399 41.7183 20.3699C41.7183 20.7199 41.7183 21.0699 41.7183 21.4199L41.7283 21.4299ZM31.8483 25.1399C31.6583 25.1399 31.4583 25.1399 31.2683 25.1399C30.0683 25.1399 28.8783 25.1499 27.6783 25.1399C26.7083 25.1299 26.0783 24.2799 26.3183 23.3599C26.4883 22.7299 27.0283 22.3499 27.7983 22.3499C30.9683 22.3499 34.1483 22.3499 37.3183 22.3499C37.5383 22.3499 37.7583 22.3299 37.9683 22.2599C38.6383 22.0399 39.0183 21.3699 38.8983 20.6699C38.7783 19.9999 38.1783 19.5299 37.4483 19.5299C33.2983 19.5299 29.1483 19.5299 24.9883 19.5299C24.8383 19.5299 24.6783 19.5299 24.5283 19.4899C23.8183 19.3199 23.3983 18.6999 23.4683 17.9599C23.5383 17.2599 24.0983 16.7699 24.8983 16.7199C25.5383 16.6799 26.0183 16.3199 26.1983 15.7399C26.3783 15.1799 26.1783 14.5699 25.7083 14.2099C25.2383 13.8499 24.6483 13.8299 24.1083 14.1599C19.7583 16.8299 15.4183 19.5099 11.0683 22.1799C10.8683 22.2999 10.7883 22.4299 10.7883 22.6699C10.7883 25.8599 10.7883 29.0399 10.7883 32.2299C10.7883 32.4999 10.8683 32.6299 11.1283 32.7199C13.3583 33.4499 15.5783 34.1999 17.8083 34.9299C17.9583 34.9799 18.1283 35.0099 18.2883 35.0099C20.8383 35.0099 23.3883 35.0099 25.9283 35.0099C26.1383 35.0099 26.3483 35.0099 26.5483 34.9699C27.1883 34.8599 27.6583 34.2599 27.6083 33.5999C27.1883 33.5999 26.7583 33.5999 26.3383 33.5999C25.4683 33.5999 24.8383 32.9999 24.8483 32.1899C24.8483 31.3899 25.4683 30.8099 26.3283 30.7999C27.0183 30.7999 27.7083 30.7999 28.4083 30.7999C28.7283 30.7999 29.0483 30.7999 29.3583 30.7599C30.0283 30.6499 30.5383 29.9699 30.3983 29.3899C29.5083 29.3899 28.6083 29.3899 27.7083 29.3899C26.8783 29.3899 26.2583 28.7899 26.2483 28.0099C26.2383 27.2199 26.8583 26.6099 27.7083 26.5999C28.5583 26.5999 29.3983 26.5999 30.2483 26.5999C30.4183 26.5999 30.5983 26.5999 30.7683 26.5599C31.4183 26.4299 31.8783 25.8499 31.8383 25.1799L31.8483 25.1399Z" fill="#1075BC" />
                </svg>
                <h1 class="font-Myriad font-black text-[1.2vw] text-[#054371] text-center leading-none"><?php _e("STUDY</br>CASES", 'dm') ?></h1>
            </div>
        </div>
        <div id="HomeButton" class="cursor-pointer bg-[#054371] hover:bg-[#1b75bb] transition-colors duration-200 w-[10%] py-[2vw]" data-section="0">
            <img class="w-[5vw] mx-auto mb-[.6vw]" src="https://datamares.org/wp-content/uploads/2025/12/HomeButton.svg" alt="">
            <h1 class="font-Myriad-Condensed font-black text-center text-[2vw] text-white leading-none"><?php _e("HOME", 'dm') ?></h1>
        </div>
    </section>
    <?php if (have_rows('sections')):
        $section_index = 0;
        while (have_rows('sections')): the_row();
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $image = get_sub_field('image');

            // Handle both URL string and array format
            $image_url = '';
            if (is_array($image)) {
                $image_url = isset($image['url']) ? $image['url'] : '';
            } else {
                $image_url = $image;
            }

            $is_first = ($section_index === 0);
    ?>
            <section class="content-section my-[4vw] <?php echo !$is_first ? 'hidden' : ''; ?>" data-section-index="<?php echo $section_index; ?>">
                <h1 class="w-4/5 mx-auto font-Myriad-Condensed text-[5.6vw] text-[#054371] text-center font-black mb-[3vw] leading-[4.5vw]">
                    <?php echo wp_kses_post($title); ?>
                </h1>
                <h1 class="w-4/5 mx-auto font-Myriad text-[1.5vw] text-[#054371] text-justify font-bold leading-none">
                    <?php echo wp_kses_post($content); ?>
                </h1>
                <?php if ($image_url): ?>
                    <img class="h-[50vw] mx-auto my-[4vw]" src="<?php echo esc_url($image_url); ?>" alt="">
                <?php endif; ?>
            </section>
    <?php
            $section_index++;
        endwhile;
    endif; ?>
    <section class="bg-[#1b75bb] flex items-center justify-around py-[2vw] gap-[2vw]">
        <div class="" style="width: 60vw;margin-left: 4vw;">
            <a href="https://www.frontiersin.org/journals/marine-science/articles/10.3389/fmars.2024.1491483/full" target="_blank" rel="noopener noreferrer">
                <img class="hover:scale-105 transition-transform duration-200 w-[17.9vw]" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/News1-N@1.5x.webp", 'dm') ?>" alt="">
            </a>
        </div>
        <div class="splide" id="apm-splide">
            <div class="splide__track" style="padding-inline: 3vw !important;">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <a href="https://elpais.com/mexico/2026-02-16/el-movimiento-de-cientificos-mexicanos-que-promueve-las-areas-de-prosperidad-marina.html" target="_blank" rel="noopener noreferrer">
                            <img class="hover:scale-105 mx-auto transition-transform duration-200 w-[21vw]" src="<?php _e("https://datamares.org/wp-content/uploads/2026/02/Recurso-2-5.png", 'dm') ?>" alt="">
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="https://climatica.coop/cabo-pulmo-desierto-marino-transformado-acuario/" target="_blank" rel="noopener noreferrer">
                            <img class="hover:scale-105 mx-auto transition-transform duration-200 w-[21vw]" src="<?php _e("https://datamares.org/wp-content/uploads/2026/02/Recurso-3-3.png", 'dm') ?>" alt="">
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="https://pulitzercenter.org/stories/can-gulf-california-be-saved-cabo-pulmos-lesson-prosperity" target="_blank" rel="noopener noreferrer">
                            <img class="hover:scale-105 mx-auto transition-transform duration-200 w-[21vw]" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/News2-N@1.5x.webp", 'dm') ?>" alt="">
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="https://pulitzercenter.org/stories/can-gulf-california-be-saved-cabo-pulmos-lesson-prosperity" target="_blank" rel="noopener noreferrer">
                            <img class="hover:scale-105 mx-auto transition-transform duration-200 w-[21vw]" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/News2-N@1.5x.webp", 'dm') ?>" alt="">
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="<?php _e("https://especiales.eluniversal.com.mx/2025/prosperidad-marina/index-en.html", 'dm') ?>" target="_blank" rel="noopener noreferrer">
                            <img class="hover:scale-105 mx-auto transition-transform duration-200 w-[21vw]" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/News3-N@1.5x.webp", 'dm') ?>" alt="">
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="https://es.weforum.org/stories/2025/06/como-un-pequeno-pueblo-de-mexico-se-unio-para-recuperar-su-arrecife-de-corral-degradado/" target="_blank" rel="noopener noreferrer">
                            <img class="hover:scale-105 mx-auto transition-transform duration-200 w-[21vw]" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/News4-N@1.5x.webp", 'dm') ?>" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <div class="bg-[#accdec] py-[2vw]">
        <img class="w-[41vw] mx-auto" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/Recurso-1-8.webp", 'dm') ?>" alt="">
    </div>
    <div class="my-[2vw]">
        <img class="w-[7.5vw] mx-auto mb-[2vw]" style="width: 7.5vw;margin-top: 1vw;margin-bottom: 2vw;" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/ContactIcon.svg", 'dm') ?>" alt="">
        <div class="grid grid-cols-3 w-4/5 mx-auto" style="margin-bottom: 2vw;">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.6vw]" style="font-size: 1.8vw;">Fabio Favoretto</h1>
                <h2 class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.2vw]">Centro para la Biodiversidad Marina y la Conservación</h2>
                <a class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.2vw]" href="mailto:fabio@gocmarineprogram.org">fabio@gocmarineprogram.org</a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.6vw]" style="font-size: 1.8vw;">Catalina López-Sagástegui</h1>
                <h2 class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.2vw]">Institute of the Americas</h2>
                <a class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.2vw]" href="mailto:clopez@iamericas.org ">clopez@iamericas.org </a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.6vw]" style="font-size: 1.8vw;">Octavio Aburto Oropeza</h1>
                <h2 class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.2vw]">Scripps Institution of Oceanography, UCSD</h2>
                <a class="text-[#054371] font-Myriad-Condensed text-center leading-none font-black text-[1.2vw]" href="mailto:maburto@ucsd.edu">maburto@ucsd.edu</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sectionButtons = document.querySelectorAll('.section-button');
            var homeButton = document.getElementById('HomeButton');
            var sections = document.querySelectorAll('.content-section');

            function switchSection(sectionIndex) {
                // Hide all sections
                sections.forEach(function(section) {
                    section.classList.add('hidden');
                });

                // Show selected section
                var targetSection = document.querySelector('[data-section-index="' + sectionIndex + '"]');
                if (targetSection) {
                    targetSection.classList.remove('hidden');
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }

                // Remove active state from all buttons
                sectionButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
            }

            // Section button clicks
            sectionButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var sectionIndex = button.getAttribute('data-section');
                    switchSection(sectionIndex);
                    button.classList.add('active');
                });
            });

            // Home button click
            homeButton.addEventListener('click', function() {
                switchSection(0);
                sectionButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                homeButton.classList.add('active');
            });

            // Remove active from home button when other buttons are clicked
            sectionButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    homeButton.classList.remove('active');
                });
            });

            // Set home button as active on page load
            homeButton.classList.add('active');

            // Initialize Splide carousel for the news block (3 per page)
            (function initSplide() {
                var initOptions = {
                    type: 'loop',
                    perPage: 3,
                    perMove: 1,
                    pagination: false,
                    gap: '2vw',
                    breakpoints: {
                        1024: {
                            perPage: 2
                        },
                        640: {
                            perPage: 1
                        }
                    },
                    arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
                };

                function mountSplide() {
                    if (typeof Splide !== 'undefined') {
                        new Splide('#apm-splide', initOptions).mount();
                    }
                }

                if (typeof Splide === 'undefined') {
                    var s = document.createElement('script');
                    s.src = 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js';
                    s.onload = mountSplide;
                    document.body.appendChild(s);
                } else {
                    mountSplide();
                }
            })();
        });
    </script>

</section>

<?php get_footer(); ?>