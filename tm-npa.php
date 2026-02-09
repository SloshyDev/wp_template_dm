<?php get_header();
/*template name: Natural Protected Areas */
?>
<style>
    #banners_anps svg {
        stroke: #007080;
    }

    #timeline .splide__arrow {
        top: 4rem !important;
    }
	
	.font-myriad{
		line-height:1;
	}
	
	#timeline .splide__arrow {
    top: 4rem !important;
		stroke: white;
}
	
	.grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
}
@media (min-width: 768px) {
    .md\:static {
        position: static !important;
    }
}
	
	.splide__container{box-sizing:border-box;position:relative}.splide__list{backface-visibility:hidden;display:-ms-flexbox;display:flex;height:100%;margin:0!important;padding:0!important}.splide.is-initialized:not(.is-active) .splide__list{display:block}.splide__pagination{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;margin:0;pointer-events:none}.splide__pagination li{display:inline-block;line-height:1;list-style-type:none;margin:0;pointer-events:auto}.splide:not(.is-overflow) .splide__pagination{display:none}.splide__progress__bar{width:0}.splide{position:relative;visibility:hidden}.splide.is-initialized,.splide.is-rendered{visibility:visible}.splide__slide{backface-visibility:hidden;box-sizing:border-box;-ms-flex-negative:0;flex-shrink:0;list-style-type:none!important;margin:0;position:relative}.splide__slide img{vertical-align:bottom}.splide__spinner{animation:splide-loading 1s linear infinite;border:2px solid #999;border-left-color:transparent;border-radius:50%;bottom:0;contain:strict;display:inline-block;height:20px;left:0;margin:auto;position:absolute;right:0;top:0;width:20px}.splide__sr{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.splide__toggle.is-active .splide__toggle__play,.splide__toggle__pause{display:none}.splide__toggle.is-active .splide__toggle__pause{display:inline}.splide__track{overflow:hidden;position:relative;z-index:0}@keyframes splide-loading{0%{transform:rotate(0)}to{transform:rotate(1turn)}}.splide__track--draggable{-webkit-touch-callout:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.splide__track--fade>.splide__list>.splide__slide{margin:0!important;opacity:0;z-index:0}.splide__track--fade>.splide__list>.splide__slide.is-active{opacity:1;z-index:1}.splide--rtl{direction:rtl}.splide__track--ttb>.splide__list{display:block}.splide__arrow{-ms-flex-align:center;align-items:center;background:#ccc;border:0;border-radius:50%;cursor:pointer;display:-ms-flexbox;display:flex;height:2em;-ms-flex-pack:center;justify-content:center;opacity:.7;padding:0;position:absolute;top:50%;transform:translateY(-50%);width:2em;z-index:1}.splide__arrow svg{fill:transparent;stroke-width: .3vw;}.splide__arrow:hover:not(:disabled){opacity:.9}.splide__arrow:disabled{opacity:.3}.splide__arrow:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide__arrow--prev{left:1em}.splide__arrow--prev svg{transform:scaleX(-1)}.splide__arrow--next{right:1em}.splide.is-focus-in .splide__arrow:focus{outline:3px solid #0bf;outline-offset:3px}.splide__pagination{bottom:.5em;left:0;padding:0 1em;position:absolute;right:0;z-index:1}.splide__pagination__page{background:#ccc;border:0;border-radius:50%;display:inline-block;height:8px;margin:3px;opacity:.7;padding:0;position:relative;transition:transform .2s linear;width:8px}.splide__pagination__page.is-active{background:#fff;transform:scale(1.4);z-index:1}.splide__pagination__page:hover{cursor:pointer;opacity:.9}.splide__pagination__page:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__pagination__page:focus{outline:3px solid #0bf;outline-offset:3px}.splide__progress__bar{background:#ccc;height:3px}.splide__slide{-webkit-tap-highlight-color:rgba(0,0,0,0)}.splide__slide:focus{outline:0}@supports(outline-offset:-3px){.splide__slide:focus-visible{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide__slide:focus-visible{border:3px solid #0bf}}@supports(outline-offset:-3px){.splide.is-focus-in .splide__slide:focus{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide.is-focus-in .splide__slide:focus{border:3px solid #0bf}.splide.is-focus-in .splide__track>.splide__list>.splide__slide:focus{border-color:#0bf}}.splide__toggle{cursor:pointer}.splide__toggle:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__toggle:focus{outline:3px solid #0bf;outline-offset:3px}.splide__track--nav>.splide__list>.splide__slide{border:3px solid transparent;cursor:pointer}.splide__track--nav>.splide__list>.splide__slide.is-active{border:3px solid #000}.splide__arrows--rtl .splide__arrow--prev{left:auto;right:1em}.splide__arrows--rtl .splide__arrow--prev svg{transform:scaleX(1)}.splide__arrows--rtl .splide__arrow--next{left:1em;right:auto}.splide__arrows--rtl .splide__arrow--next svg{transform:scaleX(-1)}.splide__arrows--ttb .splide__arrow{left:50%;transform:translate(-50%)}.splide__arrows--ttb .splide__arrow--prev{top:1em}.splide__arrows--ttb .splide__arrow--prev svg{transform:rotate(-90deg)}.splide__arrows--ttb .splide__arrow--next{bottom:1em;top:auto}.splide__arrows--ttb .splide__arrow--next svg{transform:rotate(90deg)}.splide__pagination--ttb{bottom:0;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;left:auto;padding:1em 0;right:.5em;top:0}
	
	
	/*! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com*/*,:after,:before{box-sizing:border-box;border:0 solid #e5e7eb}:after,:before{--tw-content:""}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:initial}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:initial;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:initial}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0}fieldset,legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,::backdrop,:after,:before{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:#3b82f680;--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}@media (min-width:1536px){.container{max-width:1536px}}.absolute{position:absolute}.relative{position:relative}.sticky{position:sticky}.top-0{top:0}.top-16{top:4rem}.-z-10{z-index:-10}.z-10{z-index:10}.col-span-3{grid-column:span 3/span 3}.col-span-4{grid-column:span 4/span 4}.m-1{margin:.25rem}.m-auto{margin:auto}.mx-20w{margin-left:2.1vw;margin-right:2.1vw}.mx-39w{margin-left:3.9vw;margin-right:3.9vw}.mx-4{margin-left:1rem;margin-right:1rem}.mx-\[3vw\]{margin-left:3vw;margin-right:3vw}.mx-\[4vw\]{margin-left:4vw;margin-right:4vw}.mx-auto{margin-left:auto;margin-right:auto}.my-12{margin-top:3rem;margin-bottom:3rem}.my-12w{margin-top:.2vw;margin-bottom:.2vw}.my-30w{margin-top:3.1vw;margin-bottom:3.1vw}.my-39w{margin-top:3.9vw;margin-bottom:3.9vw}.my-6{margin-top:1.5rem;margin-bottom:1.5rem}.my-8{margin-top:2rem;margin-bottom:2rem}.mb-1{margin-bottom:.25rem}.mb-12{margin-bottom:3rem}.mb-15w{margin-bottom:.5vw}.mb-16{margin-bottom:4rem}.mb-19w{margin-bottom:.9vw}.mb-20w{margin-bottom:2.1vw}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.ml-0{margin-left:0}.ml-15w{margin-left:.5vw}.ml-19w{margin-left:.9vw}.ml-4{margin-left:1rem}.ml-\[1vw\]{margin-left:1vw}.ml-auto{margin-left:auto}.mr-0{margin-right:0}.mr-19w{margin-right:.9vw}.mr-20w{margin-right:2.1vw}.mr-3{margin-right:.75rem}.mr-auto{margin-right:auto}.mt-12{margin-top:3rem}.mt-15w{margin-top:.5vw}.mt-17w{margin-top:.7vw}.mt-19w{margin-top:.9vw}.mt-2{margin-top:.5rem}.mt-20{margin-top:5rem}.mt-20w{margin-top:2.1vw}.mt-24{margin-top:6rem}.mt-25w{margin-top:2.5vw}.mt-39w{margin-top:3.9vw}.mt-8{margin-top:2rem}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.h-0{height:0}.h-1{height:.25rem}.h-11{height:2.75rem}.h-24{height:6rem}.h-5{height:1.25rem}.h-7{height:1.75rem}.h-8{height:2rem}.h-full{height:100%}.w-0{width:0}.w-11\/12{width:91.666667%}.w-2\/3{width:66.666667%}.w-20{width:5rem}.w-28{width:7rem}.w-3\/4{width:75%}.w-3\/5{width:60%}.w-32{width:8rem}.w-4\/5{width:80%}.w-5{width:1.25rem}.w-52{width:13rem}.w-56{width:14rem}.w-7{width:1.75rem}.w-72{width:18rem}.w-8{width:2rem}.w-8\/12{width:66.666667%}.w-9w{width:9vw}.w-\[1\.2vw\]{width:1.2vw}.w-\[1\.4vw\]{width:1.4vw}.w-\[12vw\]{width:12vw}.w-\[20vw\]{width:20vw}.w-\[29vw\]{width:29vw}.w-\[43vw\]{width:43vw}.w-fit{width:-moz-fit-content;width:fit-content}.w-full{width:100%}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-end{align-items:flex-end}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-around{justify-content:space-around}.justify-evenly{justify-content:space-evenly}.gap-1{gap:.25rem}.gap-15w{gap:1.5vw}.gap-2{gap:.5rem}.gap-28w{gap:2.8vw}.gap-3{gap:.75rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.gap-\[2vw\]{gap:2vw}.rounded-2xl{border-radius:1rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.border-4{border-width:4px}.border-\[\.5vw\]{border-width:.5vw}.border-l-\[3vw\]{border-left-width:3vw}.border-l-\[5rem\]{border-left-width:5rem}.border-r-0{border-right-width:0}.border-r-\[3vw\]{border-right-width:3vw}.border-t-2{border-top-width:2px}.border-t-\[3vw\]{border-top-width:3vw}.border-t-\[4rem\]{border-top-width:4rem}.border-solid{border-style:solid}.border-\[\#84c9a8\]{--tw-border-opacity:1;border-color:rgb(132 201 168/var(--tw-border-opacity))}.border-blue-400{--tw-border-opacity:1;border-color:rgb(0 48 46/var(--tw-border-opacity))}.border-gray-400{--tw-border-opacity:1;border-color:rgb(156 163 175/var(--tw-border-opacity))}.border-l-transparent{border-left-color:#0000}.border-r-transparent{border-right-color:#0000}.border-t-\[\#84c9a8\]{--tw-border-opacity:1;border-top-color:rgb(132 201 168/var(--tw-border-opacity))}.border-t-gray-50{--tw-border-opacity:1;border-top-color:rgb(249 250 251/var(--tw-border-opacity))}.bg-\[\#1a495a\]{--tw-bg-opacity:1;background-color:rgb(26 73 90/var(--tw-bg-opacity))}.bg-\[\#84c9a8\]{--tw-bg-opacity:1;background-color:rgb(132 201 168/var(--tw-bg-opacity))}.bg-blue-100{--tw-bg-opacity:1;background-color:rgb(26 116 112/var(--tw-bg-opacity))}.bg-blue-400{--tw-bg-opacity:1;background-color:rgb(0 48 46/var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246/var(--tw-bg-opacity))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251/var(--tw-bg-opacity))}.bg-green-200{--tw-bg-opacity:1;background-color:rgb(90 134 62/var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-\[\#046398\]{--tw-gradient-from:#046398 var(--tw-gradient-from-position);--tw-gradient-to:#04639800 var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.to-\[\#060a11\]{--tw-gradient-to:#060a11 var(--tw-gradient-to-position)}.fill-\[\#00a096\]{fill:#00a096}.fill-\[\#00a9ea\]{fill:#00a9ea}.fill-\[\#0d3e1e\]{fill:#0d3e1e}.fill-\[\#1a495a\]{fill:#1a495a}.fill-\[\#36ad4a\]{fill:#36ad4a}.fill-\[\#b3ba21\]{fill:#b3ba21}.fill-\[\#f18d1e\]{fill:#f18d1e}.fill-blue-100{fill:#1a7470}.fill-blue-200{fill:#166561}.fill-white{fill:#fff}.stroke-blue-100{stroke:#1a7470}.stroke-white{stroke:#fff}.p-0{padding:0}.p-1{padding:.25rem}.p-19w{padding:.9vw}.p-39w{padding:3.9vw}.px-11{padding-left:2.75rem;padding-right:2.75rem}.px-12{padding-left:3rem;padding-right:3rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-30w{padding-left:3.1vw;padding-right:3.1vw}.px-4{padding-left:1rem;padding-right:1rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.py-20w{padding-top:2.1vw;padding-bottom:2.1vw}.py-3{padding-top:.75rem;padding-bottom:.75rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.pb-4{padding-bottom:1rem}.pl-0{padding-left:0}.pt-19w{padding-top:.9vw}.pt-4{padding-top:1rem}.text-center{text-align:center}.text-right{text-align:right}.font-myriad{font-family:myriad-pro,system-ui}.font-myriadCond{font-family:myriad-pro-condensed,system-ui}.text-12w{font-size:1.2vw}.text-16w{font-size:1.6vw}.text-2w{font-size:2vw}.text-2xl{font-size:1.5rem;line-height:2rem}.text-32w{font-size:3.2vw}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4w{font-size:4vw}.text-\[10vw\]{font-size:10vw}.text-\[14\.5vw\]{font-size:14.5vw}.text-\[14vw\]{font-size:14vw}.text-\[3\.2vw\]{font-size:3.2vw}.text-\[4vw\]{font-size:4vw}.text-\[5\.5vw\]{font-size:5.5vw}.text-\[5vw\]{font-size:5vw}.text-\[6vw\]{font-size:6vw}.text-\[7vw\]{font-size:7vw}.text-\[8\.5vw\]{font-size:8.5vw}.text-\[8vw\]{font-size:8vw}.text-\[9vw\]{font-size:9vw}.text-base{font-size:1rem;line-height:1.5rem}.text-lg{font-size:1.125rem}.text-lg,.text-xl{line-height:1.75rem}.text-xl{font-size:1.25rem}.font-black{font-weight:900}.font-bold{font-weight:700}.leading-none{line-height:1}.text-\[\#1a495a\]{--tw-text-opacity:1;color:rgb(26 73 90/var(--tw-text-opacity))}.text-black{--tw-text-opacity:1;color:rgb(0 0 0/var(--tw-text-opacity))}.text-blue-100{--tw-text-opacity:1;color:rgb(26 116 112/var(--tw-text-opacity))}.text-blue-200{--tw-text-opacity:1;color:rgb(22 101 97/var(--tw-text-opacity))}.text-blue-300{--tw-text-opacity:1;color:rgb(14 67 65/var(--tw-text-opacity))}.text-gray-50{--tw-text-opacity:1;color:rgb(249 250 251/var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.text-yellow-100{--tw-text-opacity:1;color:rgb(196 204 45/var(--tw-text-opacity))}.shadow-lg{--tw-shadow:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)}.shadow-lg,.shadow-md{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color)}.shadow-sm{--tw-shadow:0 1px 2px 0 #0000000d;--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color)}.shadow-sm,.shadow-xl{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color)}.drop-shadow-lg{--tw-drop-shadow:drop-shadow(0 10px 8px #0000000a) drop-shadow(0 4px 3px #0000001a)}.drop-shadow-lg,.drop-shadow-md{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-md{--tw-drop-shadow:drop-shadow(0 4px 3px #00000012) drop-shadow(0 2px 2px #0000000f)}.transition-colors{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05}.hover\:scale-105:hover,.hover\:scale-\[1\.02\]:hover{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.hover\:scale-\[1\.02\]:hover{--tw-scale-x:1.02;--tw-scale-y:1.02}.hover\:shadow-lg:hover{--tw-shadow:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.group\/nestedMenu:hover .group-hover\/nestedMenu\:block,.group\/subMenu:hover .group-hover\/subMenu\:block{display:block}.group:hover .group-hover\:fill-\[\#84c9a8\]{fill:#84c9a8}.group:hover .group-hover\:fill-blue-200{fill:#166561}.group:hover .group-hover\:fill-white{fill:#fff}@media (min-width:640px){.sm\:leading-none{line-height:1}.sm\:leading-normal{line-height:1.5}}@media (min-width:768px){.md\:col-span-2{grid-column:span 2/span 2}.md\:col-span-4{grid-column:span 4/span 4}.md\:mx-\[2vw\]{margin-left:2vw;margin-right:2vw}.md\:mx-auto{margin-left:auto;margin-right:auto}.md\:mb-0{margin-bottom:0}.md\:block{display:block}.md\:flex{display:flex}.md\:hidden{display:none}.md\:h-\[13vw\]{height:13vw}.md\:w-1\/2{width:50%}.md\:w-1\/3{width:33.333333%}.md\:w-1\/4{width:25%}.md\:w-11\/12{width:91.666667%}.md\:w-3\/4{width:75%}.md\:w-4w{width:4vw}.md\:w-5w{width:5vw}.md\:w-9\/12{width:75%}.md\:w-\[14vw\]{width:14vw}.md\:w-\[15vw\]{width:15vw}.md\:w-\[63vw\]{width:63vw}.md\:w-\[6vw\]{width:6vw}.md\:w-\[9\.6vw\]{width:9.6vw}.md\:w-\[98\%\]{width:98%}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.md\:grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))}.md\:flex-row{flex-direction:row}.md\:items-center{align-items:center}.md\:justify-start{justify-content:flex-start}.md\:gap-0{gap:0}.md\:gap-1{gap:.25rem}.md\:pt-0{padding-top:0}.md\:text-left{text-align:left}.md\:text-right{text-align:right}.md\:text-12w{font-size:1.2vw}.md\:text-14w{font-size:1.4vw}.md\:text-16w{font-size:1.6vw}.md\:text-1w{font-size:1vw}.md\:text-22w{font-size:2.2vw}.md\:text-24w{font-size:2.4vw}.md\:text-26w{font-size:2.6vw}.md\:text-2w{font-size:2vw}.md\:text-32w{font-size:3.2vw}.md\:text-36w{font-size:3.6vw}.md\:text-3w{font-size:3vw}.md\:text-46w{font-size:4.6vw}.md\:text-4w{font-size:4vw}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:text-\[7\.6vw\]{font-size:7.6vw}.md\:leading-\[1\.5vw\]{line-height:1.5vw}.md\:leading-\[2\.5vw\]{line-height:2.5vw}.md\:leading-\[3vw\]{line-height:3vw}}@media (min-width:1024px){.lg\:w-auto{width:auto}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:items-center{align-items:center}.lg\:gap-16{gap:4rem}.lg\:text-4xl{font-size:2.25rem;line-height:2.5rem}.lg\:text-9xl{font-size:8rem;line-height:1}}@media (min-width:1280px){.xl\:block{display:block}.xl\:flex{display:flex}.xl\:hidden{display:none}.xl\:w-44{width:11rem}.xl\:flex-row{flex-direction:row}.xl\:pl-3{padding-left:.75rem}}@media (min-width:1536px){.\32xl\:block{display:block}.\32xl\:hidden{display:none}.\32xl\:w-32{width:8rem}.\32xl\:w-4\/5{width:80%}.\32xl\:w-80{width:20rem}.\32xl\:pl-0{padding-left:0}.\32xl\:text-2xl{font-size:1.5rem;line-height:2rem}}.dark\:border-t-gray-900:where(.dark,.dark *){--tw-border-opacity:1;border-top-color:rgb(17 24 39/var(--tw-border-opacity))}.dark\:bg-gray-800:where(.dark,.dark *){--tw-bg-opacity:1;background-color:rgb(31 41 55/var(--tw-bg-opacity))}.dark\:bg-gray-900:where(.dark,.dark *){--tw-bg-opacity:1;background-color:rgb(17 24 39/var(--tw-bg-opacity))}.dark\:text-gray-50:where(.dark,.dark *){--tw-text-opacity:1;color:rgb(249 250 251/var(--tw-text-opacity))}.dark\:text-white:where(.dark,.dark *){--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}
	
	
</style>
<!-- Banner -->
<div class="mb-12">
    <?php if (has_post_thumbnail($post->ID)) { ?>
        <?php $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    } ?>
    <img src="<?php echo $image; ?>" alt="Banner About us" class="mx-auto w-full" width="1905" height="274">
</div>

<h1 class="font-myriad text-4w md:text-14w w-3/4 mx-auto text-center"><?php echo the_field('main_text') ?></h1>


<?php
$anp_verde = get_field('anp_verde');
$anp_agua = get_field('anp_agua');
$anp_azul = get_field('anp_azul');
$icon_area = get_field('icon_area');
$anps_in_mexico = get_field('anps_in_mexico');
?>
<!-- data of total npa's -->
<div data-aos="flip-up" data-aos-id="dataAnp" class=" flex flex-col md:flex-row gap-4 justify-center my-8
    items-center">
    <div class="flex items-end w-fit">
        <img class=" w-[29vw] md:w-[9.6vw] mb-15w" width="147" height="172"
            src="<?php echo esc_url($anp_agua['url']); ?>" alt="<?php echo $anp_agua['title'] ?>">
        <div class="ml-4 text-blue-300 leading-none font-myriadCond drop-shadow-md">
            <h1 class="text-[14.5vw] md:text-46w font-black numbersAnpdata" number="232">232</h1>
            <h1 class="text-[5.5vw] md:text-16w font-bold"><?php _e( "NATURAL <br>PROTECTED AREAS", 'dm' ) ?></h1>
            <h1 class="text-[10vw] w-[43vw] md:w-[14vw] numbersAnpdata coma md:text-32w font-black" number="98000719">
                98,000,719</h1>
            <h1 class="text-[5vw] md:text-22w font-black"><?php _e( "total hectares", 'dm' ) ?></h1>
        </div>
        <img width="23" height="247" class="hidden md:block w-[1.2vw] mt-15w ml-19w"
            src="https://datamares.org/wp-content/uploads/2024/04/Asset-1-3.svg" alt="">
    </div>
    <div class="flex items-end w-fit">
        <img class=" w-[29vw] md:w-[9.6vw] mb-15w" width="147" height="172"
            src="<?php echo esc_url($anp_azul['url']); ?>" alt="<?php echo $anp_azul['title'] ?>">
        <div class="ml-4 text-blue-300 leading-none font-myriadCond drop-shadow-md">
            <h1 class="text-[14.5vw] md:text-46w font-black numbersAnpdata per" number="23.78">23.78</h1>
            <h1 class="text-[5.5vw] md:text-16w font-bold"><?php _e( "MARINE <br>AREA PROTECTED", 'dm' ) ?></h1>
            <h1 class="text-[10vw] w-[43vw] md:w-[14vw] md:text-32w font-black numbersAnpdata coma" number="74904155">
                74,904,155</h1>
            <h1 class="text-[5vw] md:text-22w font-black"><?php _e( "total hectares", 'dm' ) ?></h1>
        </div>
    </div>
    <div class="flex items-end w-fit">
        <img class=" w-[29vw] md:w-[9.6vw] mb-15w" width="147" height="172"
            src="<?php echo esc_url($anp_verde['url']); ?>" alt="<?php echo $anp_verde['title'] ?>">
        <div class="ml-4 text-blue-300 leading-none font-myriadCond drop-shadow-md">
            <h1 class="text-[14.5vw] md:text-46w font-black numbersAnpdata per" number="11.76">11.76</h1>
            <h1 class="text-[5.5vw] md:text-16w font-bold"><?php _e( "TERRESTRIAL <br>AREA PROTECTED", 'dm' ) ?></h1>
            <h1 class="text-[10vw] md:text-32w numbersAnpdata w-[43vw] md:w-[14vw] coma font-black" number="23096563">
                23,096,563</h1>
            <h1 class="text-[5vw] md:text-22w font-black"><?php _e( "total hectares", 'dm' ) ?></h1>
        </div>
    </div>

</div>
<h1 class="text-center text-[3.2vw] md:text-12w mx-39w">*<?php _e( "Does not include areas voluntarily designated for conservation or fishing refuges", 'dm' ) ?>.
</h1>

<!-- Carrousel anp sections -->
<section class="my-8">
    <h1 class="font-myriad font-black text-[5vw] md:text-2w text-center mb-4 text-blue-300"><?php _e( "CHECK OUR SECTIONS", 'dm' ) ?>
    </h1>
    <?php if (have_rows('anp_sections')): ?>
        <section id="banners_anps" class="splide  md:mx-[2vw]" aria-label="banners anps">
            <div class="splide__track w-4/5 md:w-11/12 mx-auto">
                <section class="splide__list">
                    <?php while (have_rows('anp_sections')):
                        the_row();
                        $image = get_sub_field('banner');
                        $link = get_sub_field("link");
                        ?>

                        <div data-aos="flip-up" class="splide__slide" role="anp_sections">
                            <a href="<?php echo $link ?>">
                                <img height="241" width="828" class="mx-auto rounded-lg" src="<?php echo $image['url'] ?>"
                                    alt="<?php echo $image['title'] ?>" />
                            </a>
                        </div>

                    <?php endwhile; ?>
                </section>
            </div>
        </section>
    <?php endif; ?>
</section>

<!-- Timeline -->
<section class="my-8 bg-gradient-to-b from-[#046398] to-[#060a11] w-full ">
    <div class="flex justify-between items-center pb-4">
        <h1 class="font-myriad mx-auto font-black sm:leading-normal text-[7vw] md:text-22w text-white text-center"
            style="margin-bottom: 0 !important;">
            <?php _e( "TIMELINE", 'dm' ) ?> </h1>
        <div
            class="border-t-[4rem] pb-4 border-t-gray-50 dark:border-t-gray-900 border-solid border-l-[5rem] border-l-transparent border-r-0 border-r-transparent h-0 w-8/12 2xl:w-4/5">
        </div>
    </div>
    <section id="timeline" class="splide md:mx-[2vw]" aria-label="Splide timeline anp">
        <div class="splide__track w-4/5 md:w-11/12 mx-auto">
            <section class="splide__list">
                <?php while (have_rows('timeline')):
                    the_row();
                    $icon = get_sub_field('icon');
                    $content = get_sub_field('content');
                    $year = get_sub_field('year');
                    ?>
                    <div class="splide__slide mb-4 text-white">
                        <div class="">
                            <div class="h-1 w-full relative top-16 bg-gray-50 -z-10"></div>
                            <img class='w-32 mx-auto' src="<?php echo $icon['url'] ?>" alt="<?php echo $image['title'] ?>">
                        </div>
                        <h1 class='font-myriad font-black text-[7vw] md:text-22w text-center '>
                            <?php echo $year ?>
                        </h1>
                        <h1 class='w-11/12 mx-auto text-center font-myriad font-bold text-[5vw] md:text-1w mb-20w mt-19w'>
                            <?php echo $content ?>
                        </h1>
                    </div>
                <?php endwhile; ?>
            </section>
        </div>
    </section>

</section>

<!-- ANP map -->
<section class="mx-20w rounded-2xl border-[.5vw] p-19w border-[#84c9a8] bg-gradient-to-b from-[#046398] to-[#060a11]">
    <div class="flex flex-col items-center md:flex-row justify-between">
        <div class="flex items-center">
            <img class="w-9w md:w-5w" width="147" height="172" src="<?php echo esc_url($anps_in_mexico['url']); ?>"
                alt="<?php echo $anps_in_mexico['title'] ?>">
            <h1 class="font-myriad font-black text-[8.5vw] md:text-36w text-white ml-15w"><?php _e( "NPAs in Mexico", 'dm' ) ?></h1>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-[2vw] mr-20w">
            <h1 class="text-right font-myriadCond font-bold text-white text-[5vw] md:text-2w"><?php _e( "NPA AREA", 'dm' ) ?>
                <br class="hidden md:block"><?php _e( "BY REGION", 'dm' ) ?>
            </h1>
            <div class="flex gap-[2vw]">
                <?php include 'arrows_anp.php'; ?>
            </div>
        </div>
    </div>
    <div class="flex flex-col-reverse md:flex-row justify-between mt-20w">
        <div class="my-30w mx-20w">
            <div class="flex items-center justify-center md:justify-start">
                <svg class="w-[12vw] md:w-4w" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 79.66 118.39">
                    <path class="fill-white"
                        d="M79.61,39.78C79.61,17.81,61.8,0,39.83,0S.05,17.81.05,39.78h0s-3.1,23.39,39.78,78.61c42.88-55.22,39.78-78.61,39.78-78.61Z" />
                    <path class="transition-colors location_color colored icon" style="fill:#f18d1e;"
                        d="M74.85,40.38H4.81s-2.73,20.59,35.02,69.21c37.75-48.61,35.02-69.21,35.02-69.21Z" />
                    <circle class="transition-colors location_color colored icon" style="fill:#f18d1e;" cx="39.83"
                        cy="40.38" r="35.02" />
                    <circle class="fill-[#0d3e1e]" cx="39.83" cy="42.1" r="12.78" />
                    <circle class="fill-white" cx="39.83" cy="42.1" r="7.73" />
                </svg>
                <div class="font-myriadCond font-bold ml-[1vw] text-white leading-none">
                    <h1 class="text-[9vw] md:text-3w"><?php _e( "REGION", 'dm' ) ?> <span class="coma" id="region">1</span></h1>
                    <h1 class="text-[7vw] md:text-2w"># <?php _e( "of NPAs", 'dm' ) ?>: <span id="numberRegion"
                            class="sm:leading-none colored md:leading-[1.5vw] font-myriad coma areas text-[9vw] md:text-3w location_color transition-colors"
                            style="color:#f18d1e;">32</span>
                    </h1>
                </div>
            </div>
            <div class="my-30w flex justify-center md:justify-start">
                <img class="w-[12vw] md:w-4w" width="96" height="112" src="<?php echo esc_url($icon_area['url']); ?>"
                    alt="<?php echo $icon_area['title'] ?>">
                <div class="ml-[1vw]">
                    <h1 class="text-white text-[9vw] md:text-2w font-myriadCond font-bold"> <?php _e( "Estimated Protected Area", 'dm' ) ?></h1>
                    <h1 id="heRegion"
                        class="coma  font-myriad font-black text-[10vw] md:text-4w md:leading-[3vw] colored"
                        style="color:#f18d1e;">
                        7,363,616</h1>
                    <h1 class="font-myriad font-black text-[7vw] md:text-24w md:leading-[2.5vw] colored"
                        style="color:#f18d1e;">
                        <?php _e( "hectares", 'dm' ) ?></h1>
                </div>
            </div>
            <div class="mx-[3vw]">
                <img id="states" src="https://datamares.org/wp-content/uploads/2024/04/Group.svg" alt="">
            </div>
        </div>
        <div class="">
            <img id="map" class="mx-[4vw] md:mx-auto md:w-[63vw]"
                src="https://datamares.org/wp-content/uploads/2023/11/ar1en.svg" alt="">
        </div>
    </div>
</section>

<div class="bg-[#1a495a] text-white text-center my-39w pt-19w">
    <h1 class="font-myriad font-black text-[7vw] md:text-36w"> <?php _e( "Management categories", 'dm' ) ?></h1>
    <h1 class="font-myriad text-[6vw] md:text-26w mb-12"><?php _e( "for NPAs", 'dm' ) ?></h1>
    <?php include 'anp_categories.php'; ?>
    <div
        class="font-myriad font-black text-white flex flex-col md:flex-row  md:h-[13vw] items-center text-[7vw]  md:text-26w justify-between p-39w mt-25w bg-[#84c9a8] ">
        <div class="flex flex-col md:flex-row items-center ">
            <h1 id="areaName"
                class="text-[8vw] md:w-[15vw] mb-19w md:mb-0 md:text-26w mr-19w text-center md:text-right drop-shadow-lg">
                 <?php _e("National Parks", 'dm' )?>
            </h1>
            <img class="w-[1.4vw] hidden md:block" src="https://datamares.org/wp-content/uploads/2024/04/Asset-12.svg"
                alt="">
            <div class="ml-19w text-center md:text-left">
                <h1 class="drop-shadow-lg"><?php _e("SURFACE (hectares)", 'dm' )?></h1>
                <h1 id="area" class="text-[9vw] md:text-46w drop-shadow-lg coma">21,679,414</h1>
            </div>
        </div>
        <div class="justify-center items-center flex">
            <h1 class="absolute flex text-[9vw] md:text-26w font-myriadCond text-[#1a495a] mt-17w"><span id="areaPer"
                    class="block w-[20vw] md:w-[6vw] areas ">34.1</span>%</h1>
            <div id="chartCategory">
            </div>
        </div>
        <div class="text-[#1a495a]">
            <h1>TOTAL <?php _e("NPAs", 'dm' )?></h1>
            <h1 id="areaNumber" class="text-[14vw] md:text-[7.6vw] drop-shadow-lg areas coma">79</h1>
        </div>
    </div>
</div>



<div class="bg-[#1a495a] text-white text-center mt-39w pt-19w">
    <h1 class="font-myriad font-black text-32w mx-39w"><?php _e("How much of Mexico’s territory is<br>under some type of protection?", 'dm' )?></h1>
    <?php include 'anp_territory.php'; ?>
    <div
        class="font-myriad font-black text-white flex flex-col md:flex-row  md:h-[13vw] items-center text-[7vw]  md:text-26w justify-around p-39w mt-25w bg-[#84c9a8] ">
        <div class="flex flex-col md:flex-row items-center ">
            <h1 id="tName" class="text-[8vw] mb-19w md:mb-0 md:text-26w mr-19w text-center md:text-right"> <?php _e("Marine", 'dm' )?></h1>
            <img class="w-[1.4vw] hidden md:block" src="https://datamares.org/wp-content/uploads/2024/04/Asset-12.svg"
                alt="">
            <div class="ml-19w text-center md:text-left">
                <h1 class=""><?php _e("SURFACE (hectares)", 'dm' )?></h1>
                <h1 id="tArea" class="text-[9vw] md:text-46w coma">74,904,155</h1>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <h1 class="absolute flex text-[9vw] md:text-26w font-myriadCond text-[#1a495a] mt-17w"><span id="tPer"
                    class="block w-[20vw] md:w-[6vw] areas ">23.78</span>%</h1>
            <div id="chartT">
            </div>
        </div>
    </div>
</div>
<div class="w-full flex justify-center bg-[#1a495a]">
    <div
        class="w-0 h-0 border-l-[3vw] border-r-[3vw] border-t-[3vw] border-l-transparent border-r-transparent border-t-[#84c9a8] mx-auto">
    </div>
</div>
<div class="bg-[#1a495a] py-20w">
    <h1 class="font-myriad font-bold text-[4vw] md:text-14w text-white text-center w-11/12 md:w-3/4 mx-auto"><?php _e("On December 13, 2020, Mexico announced its accession to the High Ambition Coalition for Nature and People whose agenda is known as the 30x30 Initiative. As part of this coalition, Mexico agreed to work to protect 30% of the planet's land and sea surface by 2030.
One of the ways to contribute to achieving the goal of protecting 30% of the marine area in Mexico is by establishing marine protected areas dedicated entirely to the protection and recovery of its biodiversity.", 'dm' )?> </h1>
    <img class="w-11/12 md:w-3/4 mx-auto my-30w" src="<?php _e("https://datamares.org/wp-content/uploads/2025/01/Asset-1-2.webp", 'dm' )?>"
        alt="">
	
 <a target="_blank" href="https://www.pienzasostenible.com/#section_BMvks4xB">
	<img class="w-1/2 mx-auto" src="<?php _e("https://datamares.org/wp-content/uploads/2024/05/Asset-3-1.webp", 'dm' )?>">
	</a>
</div>




<section class="bg-[#1a495a] py-8 grid grid-cols-1 my-12 lg:grid-cols-3 text-gray-50 lg:gap-16">
    <div class="col-span-2">
        <div class="flex items-center justify-center gap-4 h-24">
            <img class="w-20 2xl:w-32" src="https://datamares.org/wp-content/uploads/2023/09/Asset-15.svg" alt="">
            <h1 class="text-2w font-myriad font-black "><?php _e("YOU MIGHT LIKE", 'dm') ?></h1>
        </div>
        <div class="grid grid-cols-4 gap-4 w-11/12 mx-auto mt-8">
			<div class="">
                <img class="shadow-md rounded-md w-11/12 mx-auto"
                    src="https://datamares.org/wp-content/uploads/2026/01/Recurso-1-1.webp" alt="">
                <a href="https://escholarship.org/uc/item/0f17f69p" target="_blank" rel="noopener noreferrer">
                    <img src="<?php _e("https://datamares.org/wp-content/uploads/2026/01/Recurso-2-1.svg", 'dm') ?>"
                        class="hover:scale-105 transition-transform my-8 mx-4" alt="">
                </a>
            </div>
            <div class="">
                <img class="shadow-md rounded-md w-11/12 mx-auto"
                    src="https://datamares.org/wp-content/uploads/2026/01/Recurso-3-1.webp" alt="">
                <a href="https://datamares.org/preview/dp_anp/?lang=es" target="_blank" rel="noopener noreferrer">
                    <img src="<?php _e("https://datamares.org/wp-content/uploads/2023/11/Asset-19-1.svg", 'dm') ?>"
                        class="hover:scale-105 transition-transform my-8 mx-4" alt="">
                </a>
            </div>
            <div class="">
                <img class="shadow-md rounded-md w-11/12 mx-auto"
                    src="https://datamares.org/wp-content/uploads/2023/09/image-9.jpg" alt="">
                <a href="<?php _e("https://datamares.org/preview/dg_anp_en/", 'dm') ?>" target="_blank"
                    rel="noopener noreferrer">
                    <img src="<?php _e("https://datamares.org/wp-content/uploads/2023/11/Asset-18-1.svg", 'dm') ?>"
                        class="hover:scale-105 transition-transform my-8 mx-4" alt="">
                </a>
            </div>
			 <div class="">
                <img class="shadow-md rounded-md w-11/12 mx-auto"
                    src="https://datamares.org/wp-content/uploads/2024/04/image-8.png" alt="">
                <a href="<?php _e("https://public.tableau.com/app/profile/datamares/viz/Mexico_ANP_reducida/ANP", 'dm') ?>" target="_blank"
                    rel="noopener noreferrer">
                    <img src="<?php _e("https://datamares.org/wp-content/uploads/2024/04/Asset-14.svg", 'dm') ?>"
                        class="hover:scale-105 transition-transform my-8 mx-4" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="w-11/12 lg:w-auto ml-0 mr-auto flex items-end">
        <div class="flex gap-4 justify-evenly">
            <img class="w-20 2xl:w-32" src="https://datamares.org/wp-content/uploads/2023/09/Asset-15.svg" alt="">
            <a href="https://public.tableau.com/app/profile/datamares/vizzes" target="_blank" rel="noopener noreferrer">
                <img class="hover:scale-105 transition-transform w-56 2xl:w-80"
                    src="<?php _e("https://datamares.org/wp-content/uploads/2023/11/Asset-18-2.svg", 'dm') ?>" alt="">
            </a>
        </div>
    </div>
    <div class="col-span-3 px-11">
        <h1 class="text-2w font-myriad font-black  h-24 items-center flex"><?php _e("REFERENCES", 'dm') ?></h1>
        <div class="mt-8 flex flex-col justify-between">
            <div class="">
                <h1 class="text-12w">
                    • CONANP. (2020). Programa Nacional de Áreas Naturales Protegidas 2020-2024. Comisión Nacional
                    de Áreas Naturales Protegidas. Programa Institucional
                    <a class='MBlack '
                        href='https://www.gob.mx/conanp/documentos/programa-nacional-de-areas-naturales-protegidas-2020-2024'
                        target="_blank">https://www.gob.mx/conanp/documentos/programa-nacional-de-areas-naturales-protegidas-2020-2024</a>.

                </h1>
                <h1 class="text-12w">
                    • Castañeda Rincón, J. (2006). Las áreas naturales protegidas de México; de su origen precoz a
                    su consolidación tardía. Scripta Nova. Revista electrónica de geografía y ciencias sociales.
                    Barcelona: Universidad de Barcelona. vol. X, núm. 218 (13).
                </h1>
                <h1 class="text-12w">
                    • Melo Gallegos, C. (2002). Áreas Naturales Protegidas de México en el siglo XX. Instituto de
                    Geografía. UNAM. México.156 pp.
                </h1>
                <h1 class="text-12w mt-2 ">
                    • Ezcurra, E., O. Aburto-Oropeza, M.A. Carvajal, R. Cudney-Bueno, y J. Torre. (2009). Gulf of
                    California, Mexico. En: K. McLeod and H. Leslie (eds.) Ecosystem-Based Management for the
                    Oceans. Island Press, New York. pp. 227–252.

                </h1>

                <a class="text-12w"
                    href="http://sig.conanp.gob.mx/website/pagsig/info_shape.htm" target="_blank"
                    rel="noopener noreferrer">
                    • http://sig.conanp.gob.mx/website/pagsig/info_shape.htm
                </a><br>
                <a class="text-12w" href="https://simec.conanp.gob.mx/numeralia.php"
                    target="_blank" rel="noopener noreferrer">
                    • https://simec.conanp.gob.mx/numeralia.php
                </a>
            </div>
            <div class="MBlack text-12w">
                <?php _e("UPDATE", 'dm') ?>:  <?php _e( "JANUARY 2025", 'dm' ) ?> 
            </div>
        </div>
    </div>
</section>

</section>







<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"
    integrity="sha512-aNMyYYxdIxIaot0Y1/PLuEu3eipGCmsEUBrUq+7aVyPGMFH8z0eTP0tkqAvv34fzN6z+201d3T8HPb1svWSKHQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script>


    let categories = {
        1: [(nombre = '<?php _e("National Parks", 'dm') ?>'),
        per = 34.1,
        area = "21679414",
        number = "79"],
        2: [(nombre = '<?php _e("Biosphere Reserves", 'dm') ?>'),
        per = "20.7",
        area = "64033711",
        number = "48"],
        3: [(nombre = '<?php _e("Flora and Fauna Protection Area", 'dm') ?>'),
        per = "24.6",
        area = "7525040",
        number = "57"],
        4: [(nombre = '<?php _e("Natural Monuments", 'dm') ?>'),
        per = "2.1",
        area = "16269",
        number = "5"],
        5: [(nombre = '<?php _e("Natural Resources Protection Area", 'dm') ?>'),
        per = "6.5",
        area = "4585287",
        number = "15"],
        6: [(nombre = '<?php _e("Sanctuaries", 'dm') ?>'),
        per = "12",
        area = "155488",
        number = "28"],
    };

    let territories = {
        1: [(nombre = '<?php _e("Marine", 'dm') ?>'),
        per = "23.78",
        area = "74904155"],
        2: [(nombre = '<?php _e("Terrestrial", 'dm') ?>'),
        per = "11.76",
        area = "23096563",]
    };

</script>

<script>
AOS.init();

var banners = new Splide("#banners_anps", {
  type: "loop",
  perPage: 2,
  perMove: 1,
  rewind: true,
  pagination: false,
  interval: 5000,
  autoplay: true,
  gap: "1vw",
  snap: true,
  arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
  role: "banner",
  breakpoints: {
    768: {
      perPage: 1,
    },
  },
});
banners.mount();

var timeline = new Splide("#timeline", {
  type: "loop",
  breakpoints: {
    1024: {
      perPage: 3,
    },
    640: {
      perPage: 2,
    },
    550: {
      perPage: 1,
      height: "100%",
    },
  },
  perPage: 4,
  height: "auto",
  rewind: true,
  pagination: false,
  autoplay: true,
  arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
});

timeline.mount();

let dataCategory = [
  [34.1, 100 - 34.1],
  [20.7, 100 - 20.7],
  [24.6, 100 - 24.6],
  [2.1, 100 - 2.1],
  [6.5, 100 - 6.5],
  [12, 100 - 12],
];

let responsivePie = [
  {
    breakpoint: 758,
    options: {
      chart: {
        width: 350,
      },
      stroke: {
        show: true,
        colors: "#1a495a",
        width: 4,
        dashArray: 0,
      },
    },
  },
  {
    breakpoint: 796,
    options: {
      chart: {
        width: 300,
      },
      stroke: {
        show: true,
        colors: "#1a495a",
        width: 4,
        dashArray: 0,
      },
    },
  },
  {
    breakpoint: 951,
    options: {
      chart: {
        width: 220,
      },
    },
  },
  {
    breakpoint: 1151,
    options: {
      chart: {
        width: 280,
      },
    },
  },
  {
    breakpoint: 1451,
    options: {
      chart: {
        width: 290,
      },
      stroke: {
        show: true,
        colors: "#1a495a",
        width: 6,
        dashArray: 0,
      },
    },
  },
  {
    breakpoint: 1551,
    options: {
      chart: {
        width: 300,
      },
      stroke: {
        show: true,
        colors: "#1a495a",
        width: 6,
        dashArray: 0,
      },
    },
  },
  {
    breakpoint: 1670,
    options: {
      chart: {
        width: 400,
      },
    },
  },
  {
    breakpoint: 1720,
    options: {
      chart: {
        width: 440,
      },
    },
  },
  {
    breakpoint: 1821,
    options: {
      chart: {
        width: 400,
      },
    },
  },
];

function renderChartCategory(data) {
  var options = {
    series: data,
    tooltip: {
      enabled: false,
      onDatasetHover: {
        highlightDataSeries: false,
      },
    },
    stroke: {
      show: true,
      colors: "#1a495a",
      width: 10,
      dashArray: 0,
    },
    legend: {
      show: false,
    },
    dataLabels: {
      enabled: false,
    },
    chart: {
	  width:450,
      type: "donut",
    },
    responsive: responsivePie,
    colors: ["#1a495a", "#f9fafb"],
    plotOptions: {
      pie: {
        donut: {
          size: "55%",
          labels: {
            show: false,
          },
        },
      },
    },
  };
  return options;
}

var chartCategory = new ApexCharts(
  document.querySelector("#chartCategory"),
  renderChartCategory(dataCategory[0]),
);

chartCategory.render();

var chartT = new ApexCharts(
  document.querySelector("#chartT"),
  renderChartCategory([22.47, 100 - 22.47]),
);

chartT.render();

let numbersAnpdata = document.getElementsByClassName("numbersAnpdata");

document.addEventListener("aos:in:dataAnp", ({ detail }) => {
  for (let i = 0; i < numbersAnpdata.length; i++) {
    const tarjet = numbersAnpdata[i];

    animateNumber(tarjet, tarjet.getAttribute("number"));
  }
});

function animateNumber(tarjet, number, start) {
  anime({
    targets: tarjet,
    round: tarjet.classList.contains("coma") ? 1 : 100,
    easing: "linear",
    duration: tarjet.classList.contains("areas") ? 1200 : 3000,
    innerHTML: [tarjet.classList.contains("areas") ? start : 0, number],
    update: function () {
      if (tarjet.classList.contains("coma")) {
        numberWithCommas(tarjet, remocecoma(tarjet.innerHTML));
      }
    },
    easing: "easeOutCirc",
    complete: function () {
      if (tarjet.classList.contains("per")) {
        tarjet.innerHTML += "%";
      }
    },
  });
}

function remocecoma(val) {
  var val = val.replace(/,/g, "");
  return parseFloat(val);
}
function numberWithCommas(tarjet, x) {
  x = x.toString();
  var pattern = /(-?\d+)(\d{3})/;
  while (pattern.test(x)) x = x.replace(pattern, "$1,$2");
  tarjet.innerHTML = x;
}

let areas = {
  1: [
    (number = 32),
    (he = 7363616),
    (color = "#f18d1e"),
    (states = "https://datamares.org/wp-content/uploads/2024/04/Group-1.svg"),
    (map = "https://datamares.org/wp-content/uploads/2023/11/ar1en.svg"),
  ],
  2: [
    (number = 39),
    (he = 7101990),
    (color = "#36ad4a"),
    (states = "https://datamares.org/wp-content/uploads/2024/04/Group-31.svg"),
    (map = "https://datamares.org/wp-content/uploads/2023/11/ar2en.svg"),
  ],
  3: [
    (number = 66),
    (he = 47263815),
    (color = "#b3ba21"),
    (states = "https://datamares.org/wp-content/uploads/2024/04/Group-33.svg"),
    (map = "https://datamares.org/wp-content/uploads/2023/11/ar3en.svg"),
  ],
  4: [
    (number = 53),
    (he = 9901360),
    (color = "#00a096"),
    (states = "https://datamares.org/wp-content/uploads/2024/04/Group-32.svg"),
    (map = "https://datamares.org/wp-content/uploads/2023/11/ar4en.svg"),
  ],
  5: [
    (number = 38),
    (he = 1505908),
    (color = "#00a9ea"),
    (states = "https://datamares.org/wp-content/uploads/2024/04/Group-34.svg"),
    (map = "https://datamares.org/wp-content/uploads/2023/11/ar5en.svg"),
  ],
};

function changeArea(tarjet) {
  let region = document.getElementById("region");
  let numberRegion = document.getElementById("numberRegion");
  let heRegion = document.getElementById("heRegion");
  let states = document.getElementById("states");
  let map = document.getElementById("map");

  region.innerHTML = tarjet;
  animateNumber(numberRegion, areas[tarjet][0], numberRegion.innerHTML);
  animateNumber(heRegion, areas[tarjet][1]);
  states.setAttribute("src", areas[tarjet][3]);
  map.setAttribute("src", areas[tarjet][4]);

  let color = document.getElementsByClassName("colored");
  for (let i = 0; i < color.length; i++) {
    const element = color[i];

    element.setAttribute(
      "style",
      element.classList.contains("icon")
        ? "fill:" + areas[tarjet][2]
        : "color:" + areas[tarjet][2],
    );
  }
}

function changeDataCategories(tarjet) {
  let areaName = document.getElementById("areaName");
  let area = document.getElementById("area");
  let areaper = document.getElementById("areaPer");
  let areanumber = document.getElementById("areaNumber");

  areaName.innerHTML = categories[tarjet][0];

  animateNumber(areaper, categories[tarjet][1], areaper.innerHTML);

  animateNumber(area, categories[tarjet][2]);

  animateNumber(areanumber, categories[tarjet][3], areanumber.innerHTML);

  chartCategory.updateOptions({
    series: [
      parseFloat(categories[tarjet][1]),
      100 - parseFloat(categories[tarjet][1]),
    ],
  });
}

function changeDataTerritorie(tarjet) {
  let tName = document.getElementById("tName");
  let tArea = document.getElementById("tArea");
  let tPer = document.getElementById("tPer");

  tName.innerHTML = territories[tarjet][0];

  animateNumber(tArea, territories[tarjet][2], tPer.innerHTML);

  animateNumber(tPer, territories[tarjet][1]);

  chartT.updateOptions({
    series: [
      parseFloat(territories[tarjet][1]),
      100 - parseFloat(territories[tarjet][1]),
    ],
  });
}


</script>

<?php get_footer(); ?>