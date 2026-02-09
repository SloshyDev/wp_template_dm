<?php
get_header();
/* template name: anp*/
?>
  <link rel="stylesheet" href="https://use.typekit.net/vxl2zqz.css">

<?php 
$embed = get_field('embed');
if( $embed ) {?>
    <div class="column is-9 m-auto">
    	<?php echo get_field('embed'); ?>
	</div>
<?php }else { ?> 

<style>
	.splide__arrow {
        top: 4rem !important;
    }

    .apexcharts-pie circle {
        fill: #86cbaa;
    }

    .apexcharts-datalabel-value {
        fill: #1a495a;
    }
	
	.menu-item{
		padding: 0.5rem 0.75rem !important;
	}

	
	*,::before,::after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb;}::before,::after{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";}body{margin:0;line-height:inherit;}hr{height:0;color:inherit;border-top-width:1px;}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em;}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse;}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0;}button,select{text-transform:none}button,[type='button'],[type='reset'],[type='submit']{-webkit-appearance:button;background-color:transparent;background-image:none;}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type='search']{-webkit-appearance:textfield;outline-offset:-2px;}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit;}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af;}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af;}button,[role="button"]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle;}img,video{max-width:100%;height:auto}[hidden]{display:none}*,::before,::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x:;--tw-pan-y:;--tw-pinch-zoom:;--tw-scroll-snap-strictness:proximity;--tw-ordinal:;--tw-slashed-zero:;--tw-numeric-figure:;--tw-numeric-spacing:;--tw-numeric-fraction:;--tw-ring-inset:;--tw-ring-offset-width:0;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / .5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur:;--tw-brightness:;--tw-contrast:;--tw-grayscale:;--tw-hue-rotate:;--tw-invert:;--tw-saturate:;--tw-sepia:;--tw-drop-shadow:;--tw-backdrop-blur:;--tw-backdrop-brightness:;--tw-backdrop-contrast:;--tw-backdrop-grayscale:;--tw-backdrop-hue-rotate:;--tw-backdrop-invert:;--tw-backdrop-opacity:;--tw-backdrop-saturate:;--tw-backdrop-sepia:}::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x:;--tw-pan-y:;--tw-pinch-zoom:;--tw-scroll-snap-strictness:proximity;--tw-ordinal:;--tw-slashed-zero:;--tw-numeric-figure:;--tw-numeric-spacing:;--tw-numeric-fraction:;--tw-ring-inset:;--tw-ring-offset-width:0;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / .5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur:;--tw-brightness:;--tw-contrast:;--tw-grayscale:;--tw-hue-rotate:;--tw-invert:;--tw-saturate:;--tw-sepia:;--tw-drop-shadow:;--tw-backdrop-blur:;--tw-backdrop-brightness:;--tw-backdrop-contrast:;--tw-backdrop-grayscale:;--tw-backdrop-hue-rotate:;--tw-backdrop-invert:;--tw-backdrop-opacity:;--tw-backdrop-saturate:;--tw-backdrop-sepia:}.container{width:100%}.\!container{width:100%!important}@media(min-width:640px){.container{max-width:640px}.\!container{max-width:640px!important}}@media(min-width:768px){.container{max-width:768px}.\!container{max-width:768px!important}}@media(min-width:1024px){.container{max-width:1024px}.\!container{max-width:1024px!important}}@media(min-width:1280px){.container{max-width:1280px}.\!container{max-width:1280px!important}}@media(min-width:1536px){.container{max-width:1536px}.\!container{max-width:1536px!important}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border-width:0}.not-sr-only{position:static;width:auto;height:auto;padding:0;margin:0;overflow:visible;clip:auto;white-space:normal}.pointer-events-none{pointer-events:none}.pointer-events-auto{pointer-events:auto}.visible{visibility:visible}.\!visible{visibility:visible!important}.invisible{visibility:hidden}.collapse{visibility:collapse}.static{position:static}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.sticky{position:sticky}.inset-0{top:0;right:0;bottom:0;left:0}.-inset-1{top:-.25rem;right:-.25rem;bottom:-.25rem;left:-.25rem}.right-2{right:.5rem}.-left-11{left:-2.75rem}.top-\[3\.3rem\]{top:3.3rem}.-right-11{right:-2.75rem}.top-16{top:4rem}.right-8{right:2rem}.left-16{left:4rem}.left-\[100\%\]{left:100%}.isolate{isolation:isolate}.isolation-auto{isolation:auto}.z-10{z-index:10}.-z-10{z-index:-10}.z-50{z-index:50}.z-\[300\]{z-index:300}.col-span-2{grid-column:span 2 / span 2}.col-span-4{grid-column:span 4 / span 4}.col-span-3{grid-column:span 3 / span 3}.float-right{float:right}.float-left{float:left}.float-none{float:none}.clear-left{clear:left}.clear-right{clear:right}.clear-both{clear:both}.clear-none{clear:none}.m-8{margin:2rem}.m-auto{margin:auto}.m-1{margin:.25rem}.m-10{margin:2.5rem}.m-0{margin:0}.m-2{margin:.5rem}.m-3{margin:.75rem}.m-4{margin:1rem}.m-5{margin:1.25rem}.m-6{margin:1.5rem}.my-3{margin-top:.75rem;margin-bottom:.75rem}.mx-auto{margin-left:auto;margin-right:auto}.my-6{margin-top:1.5rem;margin-bottom:1.5rem}.my-8{margin-top:2rem;margin-bottom:2rem}.mx-4{margin-left:1rem;margin-right:1rem}.mx-0{margin-left:0;margin-right:0}.my-2{margin-top:.5rem;margin-bottom:.5rem}.my-4{margin-top:1rem;margin-bottom:1rem}.my-0{margin-top:0;margin-bottom:0}.mx-1{margin-left:.25rem;margin-right:.25rem}.my-1{margin-top:.25rem;margin-bottom:.25rem}.mx-2{margin-left:.5rem;margin-right:.5rem}.mx-3{margin-left:.75rem;margin-right:.75rem}.mx-5{margin-left:1.25rem;margin-right:1.25rem}.my-5{margin-top:1.25rem;margin-bottom:1.25rem}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.my-auto{margin-top:auto;margin-bottom:auto}.mb-8{margin-bottom:2rem}.mb-4{margin-bottom:1rem}.mr-6{margin-right:1.5rem}.mt-8{margin-top:2rem}.mt-\[2px\]{margin-top:2px}.ml-\[2px\]{margin-left:2px}.mt-2{margin-top:.5rem}.mb-12{margin-bottom:3rem}.mt-12{margin-top:3rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mb-0{margin-bottom:0}.mb-6{margin-bottom:1.5rem}.mb-20{margin-bottom:5rem}.mr-4{margin-right:1rem}.ml-0{margin-left:0}.mr-auto{margin-right:auto}.mt-24{margin-top:6rem}.-mt-\[10\%\]{margin-top:-10%}.ml-\[5\%\]{margin-left:5%}.ml-3{margin-left:.75rem}.-ml-4{margin-left:-1rem}.mr-0{margin-right:0}.ml-20{margin-left:5rem}.mb-1{margin-bottom:.25rem}.mt-6{margin-top:1.5rem}.mr-3{margin-right:.75rem}.-mt-1{margin-top:-.25rem}.mt-0{margin-top:0}.mt-1{margin-top:.25rem}.mr-1{margin-right:.25rem}.ml-1{margin-left:.25rem}.mr-2{margin-right:.5rem}.mb-2{margin-bottom:.5rem}.ml-2{margin-left:.5rem}.mt-3{margin-top:.75rem}.mb-3{margin-bottom:.75rem}.mt-5{margin-top:1.25rem}.mr-5{margin-right:1.25rem}.mb-5{margin-bottom:1.25rem}.ml-5{margin-left:1.25rem}.ml-6{margin-left:1.5rem}.mt-auto{margin-top:auto}.mb-auto{margin-bottom:auto}.ml-auto{margin-left:auto}.box-border{box-sizing:border-box}.box-content{box-sizing:content-box}.block{display:block}.\!block{display:block!important}.inline-block{display:inline-block}.inline{display:inline}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.\!table{display:table!important}.inline-table{display:inline-table}.table-caption{display:table-caption}.table-cell{display:table-cell}.table-column{display:table-column}.table-column-group{display:table-column-group}.table-footer-group{display:table-footer-group}.table-header-group{display:table-header-group}.table-row-group{display:table-row-group}.table-row{display:table-row}.flow-root{display:flow-root}.grid{display:grid}.inline-grid{display:inline-grid}.contents{display:contents}.list-item{display:list-item}.hidden{display:none}.\!hidden{display:none!important}.aspect-\[100\/37\]{aspect-ratio:100/37}.h-1{height:.25rem}.h-20{height:5rem}.h-5{height:1.25rem}.h-10{height:2.5rem}.h-8{height:2rem}.h-7{height:1.75rem}.h-12{height:3rem}.h-0{height:0}.h-\[80\%\]{height:80%}.h-24{height:6rem}.h-full{height:100%}.h-\[22rem\]{height:22rem}.h-\[40rem\]{height:40rem}.h-\[97\%\]{height:97%}.h-\[19rem\]{height:19rem}.h-screen{height:100vh}.h-auto{height:auto}.h-9{height:2.25rem}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-16{width:4rem}.w-auto{width:auto}.w-4\/5{width:80%}.w-28{width:7rem}.w-1\/2{width:50%}.w-11\/12{width:91.666667%}.w-5{width:1.25rem}.w-52{width:13rem}.w-10{width:2.5rem}.w-8{width:2rem}.w-6{width:1.5rem}.w-3\/5{width:60%}.w-5\/6{width:83.333333%}.w-2\/3{width:66.666667%}.w-8\/12{width:66.666667%}.w-32{width:8rem}.w-\[63\%\]{width:63%}.w-56{width:14rem}.w-20{width:5rem}.w-2\/5{width:40%}.w-\[inherit\]{width:inherit}.w-12{width:3rem}.w-3\/4{width:75%}.w-36{width:9rem}.w-64{width:16rem}.w-\[97\%\]{width:97%}.w-\[70\%\]{width:70%}.w-fit{width:-moz-fit-content;width:fit-content}.w-1{width:.25rem}.w-screen{width:100vw}.w-7{width:1.75rem}.max-w-sm{max-width:24rem}.max-w-full{max-width:100%}.flex-shrink{flex-shrink:1}.shrink{flex-shrink:1}.flex-grow{flex-grow:1}.grow{flex-grow:1}.table-auto{table-layout:auto}.table-fixed{table-layout:fixed}.border-collapse{border-collapse:collapse}.border-separate{border-collapse:separate}.scale-105{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.\!transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))!important}.transform-cpu{transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.transform-gpu{transform:translate3d(var(--tw-translate-x),var(--tw-translate-y),0)rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.transform-none{transform:none}.cursor-pointer{cursor:pointer}.touch-auto{touch-action:auto}.touch-none{touch-action:none}.touch-pan-x{--tw-pan-x:pan-x;touch-action:var(--tw-pan-x)var(--tw-pan-y)var(--tw-pinch-zoom)}.touch-pan-left{--tw-pan-x:pan-left;touch-action:var(--tw-pan-x)var(--tw-pan-y)var(--tw-pinch-zoom)}.touch-pan-right{--tw-pan-x:pan-right;touch-action:var(--tw-pan-x)var(--tw-pan-y)var(--tw-pinch-zoom)}.touch-pan-y{--tw-pan-y:pan-y;touch-action:var(--tw-pan-x)var(--tw-pan-y)var(--tw-pinch-zoom)}.touch-pan-up{--tw-pan-y:pan-up;touch-action:var(--tw-pan-x)var(--tw-pan-y)var(--tw-pinch-zoom)}.touch-pan-down{--tw-pan-y:pan-down;touch-action:var(--tw-pan-x)var(--tw-pan-y)var(--tw-pinch-zoom)}.touch-pinch-zoom{--tw-pinch-zoom:pinch-zoom;touch-action:var(--tw-pan-x)var(--tw-pan-y)var(--tw-pinch-zoom)}.touch-manipulation{touch-action:manipulation}.select-none{-webkit-user-select:none;-moz-user-select:none;user-select:none}.select-text{-webkit-user-select:text;-moz-user-select:text;user-select:text}.select-all{-webkit-user-select:all;-moz-user-select:all;user-select:all}.select-auto{-webkit-user-select:auto;-moz-user-select:auto;user-select:auto}.resize-none{resize:none}.resize-y{resize:vertical}.resize-x{resize:horizontal}.resize{resize:both}.snap-none{scroll-snap-type:none}.snap-x{scroll-snap-type:x var(--tw-scroll-snap-strictness)}.snap-y{scroll-snap-type:y var(--tw-scroll-snap-strictness)}.snap-both{scroll-snap-type:both var(--tw-scroll-snap-strictness)}.snap-mandatory{--tw-scroll-snap-strictness:mandatory}.snap-proximity{--tw-scroll-snap-strictness:proximity}.snap-start{scroll-snap-align:start}.snap-end{scroll-snap-align:end}.snap-center{scroll-snap-align:center}.snap-align-none{scroll-snap-align:none}.snap-normal{scroll-snap-stop:normal}.snap-always{scroll-snap-stop:always}.list-inside{list-style-position:inside}.list-outside{list-style-position:outside}.list-disc{list-style-type:disc}.appearance-none{-webkit-appearance:none;-moz-appearance:none;appearance:none}.break-before-auto{-moz-column-break-before:auto;break-before:auto}.break-before-avoid{-moz-column-break-before:avoid;break-before:avoid}.break-before-all{-moz-column-break-before:all;break-before:all}.break-before-avoid-page{-moz-column-break-before:avoid;break-before:avoid-page}.break-before-page{-moz-column-break-before:page;break-before:page}.break-before-left{-moz-column-break-before:left;break-before:left}.break-before-right{-moz-column-break-before:right;break-before:right}.break-before-column{-moz-column-break-before:column;break-before:column}.break-inside-auto{-moz-column-break-inside:auto;break-inside:auto}.break-inside-avoid{-moz-column-break-inside:avoid;break-inside:avoid}.break-inside-avoid-page{break-inside:avoid-page}.break-inside-avoid-column{-moz-column-break-inside:avoid;break-inside:avoid-column}.break-after-auto{-moz-column-break-after:auto;break-after:auto}.break-after-avoid{-moz-column-break-after:avoid;break-after:avoid}.break-after-all{-moz-column-break-after:all;break-after:all}.break-after-avoid-page{-moz-column-break-after:avoid;break-after:avoid-page}.break-after-page{-moz-column-break-after:page;break-after:page}.break-after-left{-moz-column-break-after:left;break-after:left}.break-after-right{-moz-column-break-after:right;break-after:right}.break-after-column{-moz-column-break-after:column;break-after:column}.grid-flow-row{grid-auto-flow:row}.grid-flow-col{grid-auto-flow:column}.grid-flow-dense{grid-auto-flow:dense}.grid-flow-row-dense{grid-auto-flow:row dense}.grid-flow-col-dense{grid-auto-flow:column dense}.grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))}.grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-row{flex-direction:row}.flex-row-reverse{flex-direction:row-reverse}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.flex-wrap{flex-wrap:wrap}.flex-wrap-reverse{flex-wrap:wrap-reverse}.flex-nowrap{flex-wrap:nowrap}.place-content-center{place-content:center}.place-content-start{place-content:start}.place-content-end{place-content:end}.place-content-between{place-content:space-between}.place-content-around{place-content:space-around}.place-content-evenly{place-content:space-evenly}.place-content-baseline{place-content:baseline}.place-content-stretch{place-content:stretch}.place-items-start{place-items:start}.place-items-end{place-items:end}.place-items-center{place-items:center}.place-items-baseline{place-items:baseline}.place-items-stretch{place-items:stretch}.content-center{align-content:center}.content-start{align-content:flex-start}.content-end{align-content:flex-end}.content-between{align-content:space-between}.content-around{align-content:space-around}.content-evenly{align-content:space-evenly}.content-baseline{align-content:baseline}.items-start{align-items:flex-start}.items-end{align-items:flex-end}.items-center{align-items:center}.items-baseline{align-items:baseline}.items-stretch{align-items:stretch}.justify-start{justify-content:flex-start}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-around{justify-content:space-around}.justify-evenly{justify-content:space-evenly}.justify-items-start{justify-items:start}.justify-items-end{justify-items:end}.justify-items-center{justify-items:center}.justify-items-stretch{justify-items:stretch}.gap-2{gap:.5rem}.gap-1{gap:.25rem}.gap-8{gap:2rem}.gap-7{gap:1.75rem}.gap-4{gap:1rem}.space-y-6>:not([hidden]) ~:not([hidden]){--tw-space-y-reverse:0;margin - top:calc(1.5rem * calc(1 - var( -  - tw - space - y - reverse)));margin - bottom:calc(1.5rem * var( -  - tw - space - y - reverse))}.space-y-12>:not([hidden]) ~:not([hidden]){--tw-space-y-reverse:0;margin - top:calc(3rem * calc(1 - var( -  - tw - space - y - reverse)));margin - bottom:calc(3rem * var( -  - tw - space - y - reverse))}.space-y-8>:not([hidden]) ~:not([hidden]){--tw-space-y-reverse:0;margin - top:calc(2rem * calc(1 - var( -  - tw - space - y - reverse)));margin - bottom:calc(2rem * var( -  - tw - space - y - reverse))}.space-y-4>:not([hidden]) ~:not([hidden]){--tw-space-y-reverse:0;margin - top:calc(1rem * calc(1 - var( -  - tw - space - y - reverse)));margin - bottom:calc(1rem * var( -  - tw - space - y - reverse))}.space-x-2>:not([hidden]) ~:not([hidden]){--tw-space-x-reverse:0;margin - right:calc(.5rem * var( -  - tw - space - x - reverse));margin - left:calc(.5rem * calc(1 - var( -  - tw - space - x - reverse)))}.space-y-reverse>:not([hidden]) ~:not([hidden]){--tw-space-y-reverse:1}.space-x-reverse>:not([hidden]) ~:not([hidden]){--tw-space-x-reverse:1}.divide-x>:not([hidden]) ~:not([hidden]){--tw-divide-x-reverse:0;border - right - width:calc(1px * var( -  - tw - divide - x - reverse));border - left - width:calc(1px * calc(1 - var( -  - tw - divide - x - reverse)))}.divide-y>:not([hidden]) ~:not([hidden]){--tw-divide-y-reverse:0;border - top - width:calc(1px * calc(1 - var( -  - tw - divide - y - reverse)));border - bottom - width:calc(1px * var( -  - tw - divide - y - reverse))}.divide-y-reverse>:not([hidden]) ~:not([hidden]){--tw-divide-y-reverse:1}.divide-x-reverse>:not([hidden]) ~:not([hidden]){--tw-divide-x-reverse:1}.divide-solid>:not([hidden]) ~:not([hidden]){border-style:solid}.divide-dashed>:not([hidden]) ~:not([hidden]){border-style:dashed}.divide-dotted>:not([hidden]) ~:not([hidden]){border-style:dotted}.divide-double>:not([hidden]) ~:not([hidden]){border-style:double}.divide-none>:not([hidden]) ~:not([hidden]){border-style:none}.place-self-auto{place-self:auto}.place-self-start{place-self:start}.place-self-end{place-self:end}.place-self-center{place-self:center}.place-self-stretch{place-self:stretch}.self-auto{align-self:auto}.self-start{align-self:flex-start}.self-end{align-self:flex-end}.self-center{align-self:center}.self-stretch{align-self:stretch}.self-baseline{align-self:baseline}.justify-self-auto{justify-self:auto}.justify-self-start{justify-self:start}.justify-self-end{justify-self:end}.justify-self-center{justify-self:center}.justify-self-stretch{justify-self:stretch}.overflow-auto{overflow:auto}.overflow-hidden{overflow:hidden}.overflow-clip{overflow:clip}.overflow-visible{overflow:visible}.overflow-scroll{overflow:scroll}.overflow-x-auto{overflow-x:auto}.overflow-y-auto{overflow-y:auto}.overflow-x-hidden{overflow-x:hidden}.overflow-y-hidden{overflow-y:hidden}.overflow-x-clip{overflow-x:clip}.overflow-y-clip{overflow-y:clip}.overflow-x-visible{overflow-x:visible}.overflow-y-visible{overflow-y:visible}.overflow-x-scroll{overflow-x:scroll}.overflow-y-scroll{overflow-y:scroll}.overscroll-auto{overscroll-behavior:auto}.overscroll-contain{overscroll-behavior:contain}.overscroll-none{overscroll-behavior:none}.overscroll-y-auto{overscroll-behavior-y:auto}.overscroll-y-contain{overscroll-behavior-y:contain}.overscroll-y-none{overscroll-behavior-y:none}.overscroll-x-auto{overscroll-behavior-x:auto}.overscroll-x-contain{overscroll-behavior-x:contain}.overscroll-x-none{overscroll-behavior-x:none}.scroll-auto{scroll-behavior:auto}.scroll-smooth{scroll-behavior:smooth}.truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.overflow-ellipsis{text-overflow:ellipsis}.text-ellipsis{text-overflow:ellipsis}.text-clip{text-overflow:clip}.whitespace-normal{white-space:normal}.whitespace-nowrap{white-space:nowrap}.whitespace-pre{white-space:pre}.whitespace-pre-line{white-space:pre-line}.whitespace-pre-wrap{white-space:pre-wrap}.break-normal{overflow-wrap:normal;word-break:normal}.break-words{overflow-wrap:break-word}.break-all{word-break:break-all}.break-keep{word-break:keep-all}.rounded{border-radius:.25rem}.rounded-xl{border-radius:.75rem}.rounded-full{border-radius:9999px}.rounded-md{border-radius:.375rem}.rounded-2xl{border-radius:1rem}.rounded-lg{border-radius:.5rem}.rounded-l-xl{border-top-left-radius:.75rem;border-bottom-left-radius:.75rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-t{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.rounded-r{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.rounded-b{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.rounded-l{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.rounded-tl{border-top-left-radius:.25rem}.rounded-tr{border-top-right-radius:.25rem}.rounded-br{border-bottom-right-radius:.25rem}.rounded-bl{border-bottom-left-radius:.25rem}.border-8{border-width:8px}.border-4{border-width:4px}.border-0{border-width:0}.border-\[6px\]{border-width:6px}.border{border-width:1px}.border-x{border-left-width:1px;border-right-width:1px}.border-y{border-top-width:1px;border-bottom-width:1px}.border-b{border-bottom-width:1px}.border-t-\[4rem\]{border-top-width:4rem}.border-l-\[5rem\]{border-left-width:5rem}.border-r-0{border-right-width:0}.border-b-2{border-bottom-width:2px}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.border-l{border-left-width:1px}.border-solid{border-style:solid}.border-dashed{border-style:dashed}.border-dotted{border-style:dotted}.border-double{border-style:double}.border-hidden{border-style:hidden}.border-none{border-style:none}.border-primary{--tw-border-opacity:1;border-color:rgb(106 154 73 / var(--tw-border-opacity))}.border-\[\#86cbaa\]{--tw-border-opacity:1;border-color:rgb(134 203 170 / var(--tw-border-opacity))}.border-gray-900{--tw-border-opacity:1;border-color:rgb(17 24 39 / var(--tw-border-opacity))}.border-secondary4{--tw-border-opacity:1;border-color:rgb(0 48 46 / var(--tw-border-opacity))}.border-secondary2{--tw-border-opacity:1;border-color:rgb(23 100 97 / var(--tw-border-opacity))}.border-\[\#3d7b91\]{--tw-border-opacity:1;border-color:rgb(61 123 145 / var(--tw-border-opacity))}.border-t-gray-50{--tw-border-opacity:1;border-top-color:rgb(249 250 251 / var(--tw-border-opacity))}.border-l-transparent{border-left-color:transparent}.border-r-transparent{border-right-color:transparent}.bg-primary{--tw-bg-opacity:1;background-color:rgb(106 154 73 / var(--tw-bg-opacity))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-secondary{--tw-bg-opacity:1;background-color:rgb(29 116 112 / var(--tw-bg-opacity))}.bg-\[\#1a495a\]{--tw-bg-opacity:1;background-color:rgb(26 73 90 / var(--tw-bg-opacity))}.bg-\[\#86cbaa\]{--tw-bg-opacity:1;background-color:rgb(134 203 170 / var(--tw-bg-opacity))}.bg-secondary4{--tw-bg-opacity:1;background-color:rgb(0 48 46 / var(--tw-bg-opacity))}.bg-\[\#1f4c5c\]{--tw-bg-opacity:1;background-color:rgb(31 76 92 / var(--tw-bg-opacity))}.bg-secondary3{--tw-bg-opacity:1;background-color:rgb(14 68 65 / var(--tw-bg-opacity))}.bg-yellow{--tw-bg-opacity:1;background-color:rgb(198 192 38 / var(--tw-bg-opacity))}.bg-\[\#eadbc6\]{--tw-bg-opacity:1;background-color:rgb(234 219 198 / var(--tw-bg-opacity))}.bg-\[\#3d7b91\]{--tw-bg-opacity:1;background-color:rgb(61 123 145 / var(--tw-bg-opacity))}.bg-\[\#285b6e\]{--tw-bg-opacity:1;background-color:rgb(40 91 110 / var(--tw-bg-opacity))}.bg-gray-400{--tw-bg-opacity:1;background-color:rgb(156 163 175 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-\[rgb\(255\2c 0\2c 0\)\]{--tw-bg-opacity:1;background-color:rgb(255 0 0 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-\[\#046498\]{--tw-gradient-from:#046498;--tw-gradient-to:rgb(4 100 152 / 0);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.from-\[\#046398\]{--tw-gradient-from:#046398;--tw-gradient-to:rgb(4 99 152 / 0);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.from-secondary{--tw-gradient-from:#1d7470;--tw-gradient-to:rgb(29 116 112 / 0);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.from-\[\#8ea7b7\]{--tw-gradient-from:#8ea7b7;--tw-gradient-to:rgb(142 167 183 / 0);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.to-\[\#06070d\]{--tw-gradient-to:#06070d}.to-\[\#060a11\]{--tw-gradient-to:#060a11}.to-yellow{--tw-gradient-to:#c6c026}.to-\[\#234f5f\]{--tw-gradient-to:#234f5f}.decoration-slice{-webkit-box-decoration-break:slice;box-decoration-break:slice}.decoration-clone{-webkit-box-decoration-break:clone;box-decoration-break:clone}.box-decoration-slice{-webkit-box-decoration-break:slice;box-decoration-break:slice}.box-decoration-clone{-webkit-box-decoration-break:clone;box-decoration-break:clone}.bg-cover{background-size:cover}.bg-fixed{background-attachment:fixed}.bg-local{background-attachment:local}.bg-scroll{background-attachment:scroll}.bg-clip-border{background-clip:border-box}.bg-clip-padding{background-clip:padding-box}.bg-clip-content{background-clip:content-box}.bg-clip-text{-webkit-background-clip:text;background-clip:text}.bg-repeat{background-repeat:repeat}.bg-no-repeat{background-repeat:no-repeat}.bg-repeat-x{background-repeat:repeat-x}.bg-repeat-y{background-repeat:repeat-y}.bg-repeat-round{background-repeat:round}.bg-repeat-space{background-repeat:space}.bg-origin-border{background-origin:border-box}.bg-origin-padding{background-origin:padding-box}.bg-origin-content{background-origin:content-box}.fill-white{fill:#fff}.fill-\[\#f38f1e\]{fill:#f38f1e}.fill-secondary{fill:#1d7470}.fill-primary{fill:#6a9a49}.fill-\[\#1a495a\]{fill:#1a495a}.fill-\[\#1f4c5c\]{fill:#1f4c5c}.fill-gray-50{fill:#f9fafb}.fill-\[\#86cbaa\]{fill:#86cbaa}.stroke-secondary{stroke:#1d7470}.stroke-white{stroke:#fff}.object-contain{-o-object-fit:contain;object-fit:contain}.object-cover{-o-object-fit:cover;object-fit:cover}.object-fill{-o-object-fit:fill;object-fit:fill}.object-none{-o-object-fit:none;object-fit:none}.object-scale-down{-o-object-fit:scale-down;object-fit:scale-down}.p-3{padding:.75rem}.p-20{padding:5rem}.p-1{padding:.25rem}.p-2{padding:.5rem}.p-0{padding:0}.p-4{padding:1rem}.p-5{padding:1.25rem}.p-6{padding:1.5rem}.px-4{padding-left:1rem;padding-right:1rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.px-2{padding-left:.5rem;padding-right:.5rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-11{padding-left:2.75rem;padding-right:2.75rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.px-8{padding-left:2rem;padding-right:2rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-0{padding-left:0;padding-right:0}.py-0{padding-top:0;padding-bottom:0}.px-1{padding-left:.25rem;padding-right:.25rem}.px-3{padding-left:.75rem;padding-right:.75rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.pb-2{padding-bottom:.5rem}.pb-4{padding-bottom:1rem}.pb-12{padding-bottom:3rem}.pr-4{padding-right:1rem}.pb-8{padding-bottom:2rem}.pt-10{padding-top:2.5rem}.pt-2{padding-top:.5rem}.pb-32{padding-bottom:8rem}.pt-0{padding-top:0}.pt-1{padding-top:.25rem}.pt-3{padding-top:.75rem}.pt-4{padding-top:1rem}.pt-5{padding-top:1.25rem}.pt-6{padding-top:1.5rem}.pr-0{padding-right:0}.pb-0{padding-bottom:0}.pl-0{padding-left:0}.pr-1{padding-right:.25rem}.pb-1{padding-bottom:.25rem}.pl-1{padding-left:.25rem}.pr-2{padding-right:.5rem}.pl-2{padding-left:.5rem}.pr-3{padding-right:.75rem}.pb-3{padding-bottom:.75rem}.pl-3{padding-left:.75rem}.pl-4{padding-left:1rem}.pr-5{padding-right:1.25rem}.pb-5{padding-bottom:1.25rem}.pl-5{padding-left:1.25rem}.pr-6{padding-right:1.5rem}.pb-6{padding-bottom:1.5rem}.pl-6{padding-left:1.5rem}.text-left{text-align:left}.text-center{text-align:center}.text-right{text-align:right}.text-justify{text-align:justify}.text-start{text-align:start}.text-end{text-align:end}.align-baseline{vertical-align:baseline}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.align-text-top{vertical-align:text-top}.align-text-bottom{vertical-align:text-bottom}.align-sub{vertical-align:sub}.align-super{vertical-align:super}.text-5xl{font-size:1.70vw}.text-2xl{font-size:1.15vw}.text-2m{font-size:2.5vw}.text-4xl{font-size:1.55vw}.text-xl{font-size:1vw}.text-4m{font-size:3vw}.text-3m{font-size:2.8vw}.text-8m{font-size:4.5vw}.text-6m{font-size:4vw}.text-9m{font-size:5vw}.text-5m{font-size:3.25vw}.text-3xl{font-size:1.25vw}.text-\[7vw\]{font-size:7vw}.text-\[6vw\]{font-size:6vw}.text-\[10vw\]{font-size:10vw}.font-light{font-weight:300}.font-bold{font-weight:700}.uppercase{text-transform:uppercase}.lowercase{text-transform:lowercase}.capitalize{text-transform:capitalize}.normal-case{text-transform:none}.italic{font-style:italic}.not-italic{font-style:normal}.normal-nums{font-variant-numeric:normal}.ordinal{--tw-ordinal:ordinal;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.slashed-zero{--tw-slashed-zero:slashed-zero;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.lining-nums{--tw-numeric-figure:lining-nums;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.oldstyle-nums{--tw-numeric-figure:oldstyle-nums;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.proportional-nums{--tw-numeric-spacing:proportional-nums;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.tabular-nums{--tw-numeric-spacing:tabular-nums;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.diagonal-fractions{--tw-numeric-fraction:diagonal-fractions;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.stacked-fractions{--tw-numeric-fraction:stacked-fractions;font-variant-numeric:var(--tw-ordinal)var(--tw-slashed-zero)var(--tw-numeric-figure)var(--tw-numeric-spacing)var(--tw-numeric-fraction)}.leading-none{line-height:1}.leading-5{line-height:1.25rem}.leading-4{line-height:1rem}.leading-6{line-height:1.5rem}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-gray-50{--tw-text-opacity:1;color:rgb(249 250 251 / var(--tw-text-opacity))}.text-\[\#f4901e\]{--tw-text-opacity:1;color:rgb(244 144 30 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-\[\#524A4C\]{--tw-text-opacity:1;color:rgb(82 74 76 / var(--tw-text-opacity))}.text-secondary2{--tw-text-opacity:1;color:rgb(23 100 97 / var(--tw-text-opacity))}.text-\[\#80a2b4\]{--tw-text-opacity:1;color:rgb(128 162 180 / var(--tw-text-opacity))}.text-yellow2{--tw-text-opacity:1;color:rgb(212 220 39 / var(--tw-text-opacity))}.text-secondary3{--tw-text-opacity:1;color:rgb(14 68 65 / var(--tw-text-opacity))}.text-yellow{--tw-text-opacity:1;color:rgb(198 192 38 / var(--tw-text-opacity))}.text-\[\#3d7b91\]{--tw-text-opacity:1;color:rgb(61 123 145 / var(--tw-text-opacity))}.text-\[\#285b6e\]{--tw-text-opacity:1;color:rgb(40 91 110 / var(--tw-text-opacity))}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-\[\#369\]\/\[\.35\]{color:rgb(51 102 153 / .35)}.text-blue-500{--tw-text-opacity:1;color:rgb(59 130 246 / var(--tw-text-opacity))}.underline{text-decoration-line:underline}.overline{text-decoration-line:overline}.line-through{text-decoration-line:line-through}.no-underline{text-decoration-line:none}.decoration-secondary{text-decoration-color:#1d7470}.decoration-solid{text-decoration-style:solid}.decoration-double{text-decoration-style:double}.decoration-dotted{text-decoration-style:dotted}.decoration-dashed{text-decoration-style:dashed}.decoration-wavy{text-decoration-style:wavy}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.subpixel-antialiased{-webkit-font-smoothing:auto;-moz-osx-font-smoothing:auto}.opacity-0{opacity:0}.opacity-100{opacity:1}.bg-blend-normal{background-blend-mode:normal}.bg-blend-multiply{background-blend-mode:multiply}.bg-blend-screen{background-blend-mode:screen}.bg-blend-overlay{background-blend-mode:overlay}.bg-blend-darken{background-blend-mode:darken}.bg-blend-lighten{background-blend-mode:lighten}.bg-blend-color-dodge{background-blend-mode:color-dodge}.bg-blend-color-burn{background-blend-mode:color-burn}.bg-blend-hard-light{background-blend-mode:hard-light}.bg-blend-soft-light{background-blend-mode:soft-light}.bg-blend-difference{background-blend-mode:difference}.bg-blend-exclusion{background-blend-mode:exclusion}.bg-blend-hue{background-blend-mode:hue}.bg-blend-saturation{background-blend-mode:saturation}.bg-blend-color{background-blend-mode:color}.bg-blend-luminosity{background-blend-mode:luminosity}.mix-blend-normal{mix-blend-mode:normal}.mix-blend-multiply{mix-blend-mode:multiply}.mix-blend-screen{mix-blend-mode:screen}.mix-blend-overlay{mix-blend-mode:overlay}.mix-blend-darken{mix-blend-mode:darken}.mix-blend-lighten{mix-blend-mode:lighten}.mix-blend-color-dodge{mix-blend-mode:color-dodge}.mix-blend-color-burn{mix-blend-mode:color-burn}.mix-blend-hard-light{mix-blend-mode:hard-light}.mix-blend-soft-light{mix-blend-mode:soft-light}.mix-blend-difference{mix-blend-mode:difference}.mix-blend-exclusion{mix-blend-mode:exclusion}.mix-blend-hue{mix-blend-mode:hue}.mix-blend-saturation{mix-blend-mode:saturation}.mix-blend-color{mix-blend-mode:color}.mix-blend-luminosity{mix-blend-mode:luminosity}.mix-blend-plus-lighter{mix-blend-mode:plus-lighter}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / .1),0 2px 4px -2px rgb(0 0 0 / .1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / .1),0 4px 6px -4px rgb(0 0 0 / .1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / .25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / .1),0 8px 10px -6px rgb(0 0 0 / .1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow{--tw-shadow:0 1px 3px 0 rgb(0 0 0 / .1),0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.\!shadow{--tw-shadow:0 1px 3px 0 rgb(0 0 0 / .1),0 1px 2px -1px rgb(0 0 0 / .1)!important;--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color)!important;box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)!important}.shadow-\[\#0b1f27\]{--tw-shadow-color:#0b1f27;--tw-shadow:var(--tw-shadow-colored)}.shadow-secondary4{--tw-shadow-color:#00302e;--tw-shadow:var(--tw-shadow-colored)}.shadow-\[\#0e2027\]{--tw-shadow-color:#0e2027;--tw-shadow:var(--tw-shadow-colored)}.outline-none{outline:2px solid transparent;outline-offset:2px}.outline{outline-style:solid}.outline-dashed{outline-style:dashed}.outline-dotted{outline-style:dotted}.outline-double{outline-style:double}.ring{--tw-ring-offset-shadow:var(--tw-ring-inset)0 0 0 var(--tw-ring-offset-width)var(--tw-ring-offset-color); -  - tw - ring - shadow:var( -  - tw - ring - inset)0 0 0 calc(3px + var( -  - tw - ring - offset - width))var( -  - tw - ring - color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.ring-inset{--tw-ring-inset:inset}.blur{--tw-blur:blur(8px);filter:var(--tw-blur)var(--tw-brightness)var(--tw-contrast)var(--tw-grayscale)var(--tw-hue-rotate)var(--tw-invert)var(--tw-saturate)var(--tw-sepia)var(--tw-drop-shadow)}.drop-shadow{--tw-drop-shadow:drop-shadow(0 1px 2px rgb(0 0 0 / .1))drop-shadow(0 1px 1px rgb(0 0 0 / .06));filter:var(--tw-blur)var(--tw-brightness)var(--tw-contrast)var(--tw-grayscale)var(--tw-hue-rotate)var(--tw-invert)var(--tw-saturate)var(--tw-sepia)var(--tw-drop-shadow)}.grayscale{--tw-grayscale:grayscale(100%);filter:var(--tw-blur)var(--tw-brightness)var(--tw-contrast)var(--tw-grayscale)var(--tw-hue-rotate)var(--tw-invert)var(--tw-saturate)var(--tw-sepia)var(--tw-drop-shadow)}.invert{--tw-invert:invert(100%);filter:var(--tw-blur)var(--tw-brightness)var(--tw-contrast)var(--tw-grayscale)var(--tw-hue-rotate)var(--tw-invert)var(--tw-saturate)var(--tw-sepia)var(--tw-drop-shadow)}.sepia{--tw-sepia:sepia(100%);filter:var(--tw-blur)var(--tw-brightness)var(--tw-contrast)var(--tw-grayscale)var(--tw-hue-rotate)var(--tw-invert)var(--tw-saturate)var(--tw-sepia)var(--tw-drop-shadow)}.filter{filter:var(--tw-blur)var(--tw-brightness)var(--tw-contrast)var(--tw-grayscale)var(--tw-hue-rotate)var(--tw-invert)var(--tw-saturate)var(--tw-sepia)var(--tw-drop-shadow)}.\!filter{filter:var(--tw-blur)var(--tw-brightness)var(--tw-contrast)var(--tw-grayscale)var(--tw-hue-rotate)var(--tw-invert)var(--tw-saturate)var(--tw-sepia)var(--tw-drop-shadow)!important}.filter-none{filter:none}.backdrop-blur{--tw-backdrop-blur:blur(8px);-webkit-backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia)}.backdrop-grayscale{--tw-backdrop-grayscale:grayscale(100%);-webkit-backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia)}.backdrop-invert{--tw-backdrop-invert:invert(100%);-webkit-backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia)}.backdrop-sepia{--tw-backdrop-sepia:sepia(100%);-webkit-backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia)}.backdrop-filter{-webkit-backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur)var(--tw-backdrop-brightness)var(--tw-backdrop-contrast)var(--tw-backdrop-grayscale)var(--tw-backdrop-hue-rotate)var(--tw-backdrop-invert)var(--tw-backdrop-opacity)var(--tw-backdrop-saturate)var(--tw-backdrop-sepia)}.backdrop-filter-none{-webkit-backdrop-filter:none;backdrop-filter:none}.transition-colors{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.transition-shadow{transition-property:box-shadow;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.ease-in{transition-timing-function:cubic-bezier(.4,0,1,1)}.ease-out{transition-timing-function:cubic-bezier(0,0,.2,1)}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.content-\[\'this-is-also-valid\]-weirdly-enough\'\]{--tw-content:'this-is-also-valid]-weirdly-enough';content:var(--tw-content)}.w-wide{max-width:1280px}.w-content{width:1024px}.max-w-wide{max-width:1280px}.\!max-w-wide{max-width:1280px!important}.max-w-content{max-width:1024px}.alignfull{margin:2rem calc(50% - 50vw)!important;max-width:100vw!important;width:100vw}.alignwide{margin:2rem 0;max-width:1280px!important}.alignnone{margin-left:0;margin-right:0;height:auto;max-width:100%}.aligncenter{margin:.5rem auto;display:block}@media(min-width:640px){.alignleft:not(.wp-block-button) {margin-right:.5rem;float:left}.alignright:not(.wp-block-button) {margin-left:.5rem;float:right}.wp-block-button.alignleft a{float:left;margin-right:1rem}.wp-block-button.alignright a{float:right;margin-left:1rem}}.wp-caption{display:inline-block}.wp-caption img{margin-bottom:.5rem;line-height:1}.wp-caption-text{font-size:.;color:#4b5563}.\[a-zA-Z-\:\#\]{a-z-a--z-:#}.menu-item{border-radius:.375rem;padding:.25rem;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.menu-item:hover{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity));--tw-shadow:0 1px 3px 0 rgb(0 0 0 / .1),0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.dark .menu-item:hover{--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}.otgs-development-site-front-end{display:none}.wpml-ls-statics-footer{display:none}.navbar-dropdown{width:-moz-max-content;width:max-content;border-radius:.375rem;--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity));--tw-shadow:0 4px 6px -1px rgb(0 0 0 / .1),0 2px 4px -2px rgb(0 0 0 / .1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.dark .navbar-dropdown{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.wpml-ls-legacy-list-horizontal{border-width:0;padding:0}.wpml-ls-legacy-list-horizontal .wpml-ls-item{display:block}.wpml-ls-link{padding:0}.wpml-ls-legacy-list-horizontal>ul{display:flex;gap:.5rem}.wpml-ls-item-legacy-list-horizontal{margin:.25rem;display:flex;align-items:center;border-radius:9999px;--tw-shadow:0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.wpml-ls-item-legacy-list-horizontal:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y));--tw-shadow:0 10px 15px -3px rgb(0 0 0 / .1),0 4px 6px -4px rgb(0 0 0 / .1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.wpml-ls-flag{aspect-ratio:1 / 1}.w-97{width:97%}.splide__pagination__page{--tw-bg-opacity:1;background-color:rgb(29 116 112 / var(--tw-bg-opacity))}.dark .splide__pagination__page{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.apexcharts-datalabel-value{font-size:10vw}@media(min-width:768px){.apexcharts-datalabel-value{font-size:4vw}}@media(min-width:1024px){.apexcharts-datalabel-value{font-size:4vw}}@media(min-width:1536px){.apexcharts-datalabel-value{font-size:3.25vw}}.idkkk{width:7rem;fill:#1a495a}@media(min-width:1280px){.idkkk{width:11rem}}.iconNormal{fill:#f9fafb}.group:hover .iconNormal{fill:#86cbaa}.iconActive{fill:#86cbaa}.stateActive{cursor:pointer;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.stateActive:hover{fill:#f38f1e}.first\:mt-4:first-child{margin-top:1rem}.first\:border-l-0:first-child{border-left-width:0}.last\:border-r-0:last-child{border-right-width:0}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:scale-\[102\%\]:hover{--tw-scale-x:102%;--tw-scale-y:102%;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:scale-\[101\%\]:hover{--tw-scale-x:101%;--tw-scale-y:101%;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:bg-secondary2:hover{--tw-bg-opacity:1;background-color:rgb(23 100 97 / var(--tw-bg-opacity))}.hover\:bg-gray-300:hover{--tw-bg-opacity:1;background-color:rgb(209 213 219 / var(--tw-bg-opacity))}.hover\:bg-gray-200:hover{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity))}.hover\:fill-\[\#f38f1e\]:hover{fill:#f38f1e}.hover\:font-bold:hover{font-weight:700}.hover\:underline:hover{text-decoration-line:underline}.hover\:shadow-lg:hover{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / .1),0 4px 6px -4px rgb(0 0 0 / .1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.hover\:shadow-xl:hover{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / .1),0 8px 10px -6px rgb(0 0 0 / .1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.hover\:shadow-2xl:hover{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / .25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.hover\:shadow:hover{--tw-shadow:0 1px 3px 0 rgb(0 0 0 / .1),0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.before\:hover\:text-center:hover::before{content:var(--tw-content);text-align:center}.hover\:before\:text-center:hover::before{content:var(--tw-content);text-align:center}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.hover\:focus\:text-center:focus:hover{text-align:center}.focus\:hover\:text-center:hover:focus{text-align:center}.group\/Nested:hover .group-hover\/Nested\:block{display:block}.group\/Main:hover .group-hover\/Main\:block{display:block}.group\/Nested:hover .group-hover\/Nested\:rotate-180{--tw-rotate:180deg;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.group\/Main:hover .group-hover\/Main\:rotate-180{--tw-rotate:180deg;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.group:hover .group-hover\:fill-\[\#86cbaa\]{fill:#86cbaa}.group:hover .group-hover\:text-\[\#eadbc6\]{--tw-text-opacity:1;color:rgb(234 219 198 / var(--tw-text-opacity))}.group\/Nested:hover .group-hover\/Nested\:transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.dark .dark\:border-t-gray-900{--tw-border-opacity:1;border-top-color:rgb(17 24 39 / var(--tw-border-opacity))}.dark .dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark .dark\:bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark .dark\:bg-primary{--tw-bg-opacity:1;background-color:rgb(106 154 73 / var(--tw-bg-opacity))}.dark .dark\:fill-primary{fill:#6a9a49}.dark .dark\:fill-gray-50{fill:#f9fafb}.dark .dark\:fill-\[\#3d7b91\]{fill:#3d7b91}.dark .dark\:stroke-gray-900{stroke:#111827}.dark .dark\:text-gray-50{--tw-text-opacity:1;color:rgb(249 250 251 / var(--tw-text-opacity))}.dark .dark\:text-secondary{--tw-text-opacity:1;color:rgb(29 116 112 / var(--tw-text-opacity))}.dark .dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark .dark\:hover\:bg-gray-700:hover{--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}@media(min-width:640px){.sm\:container{width:100%}@media(min-width:640px){.sm\:container{max-width:640px}}@media(min-width:768px){.sm\:container{max-width:768px}}@media(min-width:1024px){.sm\:container{max-width:1024px}}@media(min-width:1280px){.sm\:container{max-width:1280px}}@media(min-width:1536px){.sm\:container{max-width:1536px}}.sm\:flex{display:flex}.sm\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.sm\:grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.sm\:text-2m{font-size:2.5vw}.sm\:text-9m{font-size:5vw}.sm\:underline{text-decoration-line:underline}}@media(min-width:768px){.md\:static{position:static}.md\:absolute{position:absolute}.md\:right-auto{right:auto}.md\:col-span-2{grid-column:span 2 / span 2}.md\:m-0{margin:0}.md\:my-6{margin-top:1.5rem;margin-bottom:1.5rem}.md\:my-0{margin-top:0;margin-bottom:0}.md\:mx-4{margin-left:1rem;margin-right:1rem}.md\:my-auto{margin-top:auto;margin-bottom:auto}.md\:ml-auto{margin-left:auto}.md\:-mt-8{margin-top:-2rem}.md\:mr-auto{margin-right:auto}.md\:ml-24{margin-left:6rem}.md\:block{display:block}.md\:flex{display:flex}.md\:grid{display:grid}.md\:hidden{display:none}.md\:h-16{height:4rem}.md\:h-40{height:10rem}.md\:h-\[14rem\]{height:14rem}.md\:w-1\/2{width:50%}.md\:w-1\/3{width:33.333333%}.md\:w-24{width:6rem}.md\:w-\[20rem\]{width:20rem}.md\:w-1\/6{width:16.666667%}.md\:w-\[49\.8\%\]{width:49.8%}.md\:w-11\/12{width:91.666667%}.md\:w-\[35\%\]{width:35%}.md\:w-1\/5{width:20%}.md\:w-4\/5{width:80%}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.md\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.md\:grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.md\:flex-row{flex-direction:row}.md\:items-center{align-items:center}.md\:justify-start{justify-content:flex-start}.md\:justify-end{justify-content:flex-end}.md\:gap-4{gap:1rem}.md\:gap-6{gap:1.5rem}.md\:border-x-2{border-left-width:2px;border-right-width:2px}.md\:border-gray-50{--tw-border-opacity:1;border-color:rgb(249 250 251 / var(--tw-border-opacity))}.md\:p-0{padding:0}.md\:px-12{padding-left:3rem;padding-right:3rem}.md\:pr-4{padding-right:1rem}.md\:pl-2{padding-left:.5rem}.md\:pt-10{padding-top:2.5rem}.md\:text-left{text-align:left}.md\:text-start{text-align:start}.md\:text-end{text-align:end}.md\:text-3xl{font-size:1.25vw}.md\:text-2m{font-size:2.5vw}.md\:text-4xl{font-size:1.55vw}.md\:text-8m{font-size:4.5vw}.md\:text-3m{font-size:2.8vw}.md\:text-1m{font-size:2.2vw}.md\:text-4m{font-size:3vw}.md\:text-5xl{font-size:1.70vw}.md\:text-6m{font-size:4vw}.md\:text-6xl{font-size:1.80vw}}@media(min-width:1024px){.lg\:ml-8{margin-left:2rem}.lg\:mt-auto{margin-top:auto}.lg\:ml-10{margin-left:2.5rem}.lg\:mb-auto{margin-bottom:auto}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:grid{display:grid}.lg\:hidden{display:none}.lg\:h-48{height:12rem}.lg\:h-\[18rem\]{height:18rem}.lg\:h-\[22rem\]{height:22rem}.lg\:h-\[80\%\]{height:80%}.lg\:w-8\/12{width:66.666667%}.lg\:w-\[30\%\]{width:30%}.lg\:w-full{width:100%}.lg\:w-auto{width:auto}.lg\:w-1\/2{width:50%}.lg\:w-4\/5{width:80%}.lg\:w-1\/4{width:25%}.lg\:grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.lg\:gap-16{gap:4rem}.lg\:space-y-0>:not([hidden]) ~:not([hidden]){--tw-space-y-reverse:0;margin - top:calc(0 * calc(1 - var( -  - tw - space - y - reverse)));margin - bottom:calc(0 * var( -  - tw - space - y - reverse))}.lg\:text-4xl{font-size:1.55vw}.lg\:text-2xl{font-size:1.15vw}.lg\:text-3m{font-size:2.8vw}.lg\:text-xl{font-size:1vw}.lg\:text-9xl{font-size:2.1vw}.lg\:text-3xl{font-size:1.25vw}.lg\:text-5xl{font-size:1.70vw}.lg\:text-6m{font-size:4vw}.dark .dark\:lg\:hover\:\[paint-order\:markers\]:hover{paint-order:markers}}@media(min-width:1280px){.xl\:mt-auto{margin-top:auto}.xl\:block{display:block}.xl\:hidden{display:none}.xl\:h-\[23rem\]{height:23rem}.xl\:h-\[25rem\]{height:25rem}.xl\:h-\[97\%\]{height:97%}.xl\:w-4\/5{width:80%}.xl\:w-44{width:11rem}.xl\:w-\[26rem\]{width:26rem}.xl\:w-48{width:12rem}.xl\:w-11\/12{width:91.666667%}.xl\:flex-row{flex-direction:row}.xl\:border-\[6px\]{border-width:6px}.xl\:py-2{padding-top:.5rem;padding-bottom:.5rem}.xl\:pl-3{padding-left:.75rem}.xl\:text-6xl{font-size:1.80vw}.xl\:text-4m{font-size:3vw}.xl\:text-4xl{font-size:1.55vw}}@media(min-width:1536px){.\32xl\:right-20{right:5rem}.\32xl\:block{display:block}.\32xl\:hidden{display:none}.\32xl\:h-24{height:6rem}.\32xl\:h-64{height:16rem}.\32xl\:h-\[25rem\]{height:25rem}.\32xl\:w-3\/5{width:60%}.\32xl\:w-4\/5{width:80%}.\32xl\:w-32{width:8rem}.\32xl\:w-80{width:20rem}.\32xl\:text-2xl{font-size:1.15vw}.\32xl\:text-5m{font-size:3.25vw}}
	
	
	.splide__container{box-sizing:border-box;position:relative}.splide__list{backface-visibility:hidden;display:-ms-flexbox;display:flex;height:100%;margin:0!important;padding:0!important}.splide.is-initialized:not(.is-active) .splide__list{display:block}.splide__pagination{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;margin:0;pointer-events:none}.splide__pagination li{display:inline-block;line-height:1;list-style-type:none;margin:0;pointer-events:auto}.splide:not(.is-overflow) .splide__pagination{display:none}.splide__progress__bar{width:0}.splide{position:relative;visibility:hidden}.splide.is-initialized,.splide.is-rendered{visibility:visible}.splide__slide{backface-visibility:hidden;box-sizing:border-box;-ms-flex-negative:0;flex-shrink:0;list-style-type:none!important;margin:0;position:relative}.splide__slide img{vertical-align:bottom}.splide__spinner{animation:splide-loading 1s linear infinite;border:2px solid #999;border-left-color:transparent;border-radius:50%;bottom:0;contain:strict;display:inline-block;height:20px;left:0;margin:auto;position:absolute;right:0;top:0;width:20px}.splide__sr{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.splide__toggle.is-active .splide__toggle__play,.splide__toggle__pause{display:none}.splide__toggle.is-active .splide__toggle__pause{display:inline}.splide__track{overflow:hidden;position:relative;z-index:0}@keyframes splide-loading{0%{transform:rotate(0)}to{transform:rotate(1turn)}}.splide__track--draggable{-webkit-touch-callout:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.splide__track--fade>.splide__list>.splide__slide{margin:0!important;opacity:0;z-index:0}.splide__track--fade>.splide__list>.splide__slide.is-active{opacity:1;z-index:1}.splide--rtl{direction:rtl}.splide__track--ttb>.splide__list{display:block}.splide__arrow{-ms-flex-align:center;align-items:center;border:0;border-radius:50%;cursor:pointer;display:-ms-flexbox;display:flex;height:2em;-ms-flex-pack:center;justify-content:center;opacity:.9;padding:0;position:absolute;top:50%;transform:translateY(-50%);width:2em;z-index:1}.splide__arrow svg{stroke:#fff;stroke-width:6px;fill:none}.splide__arrow:hover:not(:disabled) {opacity:.9}.splide__arrow:disabled{opacity:.3}.splide__arrow:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide__arrow--prev{left:1em}.splide__arrow--prev svg{transform:scaleX(-1)}.splide__arrow--next{right:1em}.splide.is-focus-in .splide__arrow:focus{outline:3px solid #0bf;outline-offset:3px}.splide__pagination{bottom:1em;left:0;padding:0 1em;position:absolute;right:0;z-index:1}.splide__pagination__page{border:0;border-radius:50%;display:inline-block;height:12px;margin:3px;padding:0;position:relative;transition:transform .2s linear;width:12px}.splide__pagination__page.is-active{transform:scale(1.4);z-index:1}.splide__pagination__page:hover{cursor:pointer;opacity:.9}.splide__pagination__page:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__pagination__page:focus{outline:3px solid #0bf;outline-offset:3px}.splide__progress__bar{height:3px}.splide__slide{-webkit-tap-highlight-color:rgba(0,0,0,0)}.splide__slide:focus{outline:0}@supports(outline-offset:-3px){.splide__slide:focus-visible{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide__slide:focus-visible{border:3px solid #0bf}}@supports(outline-offset:-3px){.splide.is-focus-in .splide__slide:focus{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide.is-focus-in .splide__slide:focus{border:3px solid #0bf}.splide.is-focus-in .splide__track>.splide__list>.splide__slide:focus{border-color:#0bf}}.splide__toggle{cursor:pointer}.splide__toggle:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__toggle:focus{outline:3px solid #0bf;outline-offset:3px}.splide__track--nav>.splide__list>.splide__slide{border:3px solid transparent;cursor:pointer}.splide__track--nav>.splide__list>.splide__slide.is-active{border:3px solid #000}.splide__arrows--rtl .splide__arrow--prev{left:auto;right:1em}.splide__arrows--rtl .splide__arrow--prev svg{transform:scaleX(1)}.splide__arrows--rtl .splide__arrow--next{left:1em;right:auto}.splide__arrows--rtl .splide__arrow--next svg{transform:scaleX(-1)}.splide__arrows--ttb .splide__arrow{left:50%;transform:translate(-50%)}.splide__arrows--ttb .splide__arrow--prev{top:1em}.splide__arrows--ttb .splide__arrow--prev svg{transform:rotate(-90deg)}.splide__arrows--ttb .splide__arrow--next{bottom:1em;top:auto}.splide__arrows--ttb .splide__arrow--next svg{transform:rotate(90deg)}.splide__pagination--ttb{bottom:0;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;left:auto;padding:1em 0;right:.5em;top:0}
	
	@font-face{font-family:'Academy Engraved LET';src:url(../Fonts/AcademyEngravedLetPlain.woff)format('woff');font-weight:100;font-style:normal;font-display:swap}.MBold{font-family:"myriad-pro",sans-serif;font-weight:700;font-style:normal}.MRegular{font-family:"myriad-pro",sans-serif;font-weight:200;font-style:normal}.isSansExtraBold{font-family:"OpenSansExtraBold"}.MCond{font-family:"myriad-pro-condensed",sans-serif;font-weight:400;font-style:normal}.MBoldCondensed{font-family:"myriad-pro-condensed",sans-serif;font-weight:700;font-style:normal}.MBlack{font-family:"myriad-pro",sans-serif;font-weight:900;font-style:normal}.MBlackCondensed{font-family:"myriad-pro-condensed",sans-serif;font-weight:900;font-style:normal}.isAcademy{font-family:'Academy Engraved LET',sans-serif}.apexcharts-tooltip *{font-family:"myriad-pro",sans-serif;font-weight:700;font-style:normal}.apexcharts-tooltip-text-y-label{display:none}.apexcharts-canvas{margin:auto}.dark::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#111827}.dark::-webkit-scrollbar{width:10px;background-color:#111827}.dark::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#1f4c5c}.summary::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#3d7b91;border-radius:10px}.summary::-webkit-scrollbar{width:10px;background-color:#3d7b91;border-radius:10px}.summary::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#4b5563}#baultNews::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#00302e;border-radius:10px}#baultNews::-webkit-scrollbar{width:10px;background-color:#00302e;border-radius:10px}#baultNews::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#D4DC27}.apexcharts-tooltip-text-y-value{margin-left:0!important}.apexcharts-tooltip-text{margin:auto}.apexcharts-menu-icon{display:none}#numeralia{cursor:url(https://datamares.org/wp-content/uploads/2023/03/Group-23.svg),auto}.cursor-zoom{cursor:url(../len.svg),zoom-in}.apexcharts-datalabel-value{font-family:"myriad-pro-condensed",sans-serif!important;font-weight:900!important;font-style:normal;color:white}
	
</style>


<section class=" mb-12 bg-gray-50">
    <!-- Banner -->
    <div class="mb-8 lg:mb-12">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
		<img src="<?php echo $image; ?>" alt="" class="img-responsive"> </div>

    <section class="lg:flex justify-between">
        <div class="w-11/12 mx-auto lg:w-8/12 lg:ml-8">
           
                <h1 class='text-6m md:text-4xl lg:text-2xl MBold'>
                    <?php echo the_field('text1'); ?>
                </h1>
            
            <img class="hidden lg:block w-5/6 mt-12"
                src="<?php echo the_field('img1'); ?>" alt="">
        </div>
        <div class="w-full lg:w-[30%] justify-between bg-cover bg-no-repeat mt-8 md:my-0 sm:flex">
            <img class='block lg:hidden mx-auto w-1/2'
                src="<?php echo the_field('img1'); ?>" alt="">
            <div class="w-11/12 mx-auto md:w-1/3 lg:w-full bg-cover bg-no-repeat py-4 bg-[#1a495a] rounded-l-xl z-10">
                <h1 class='text-center text-9m md:text-2m MBlack text-[#80a2b4] leading-none'><?php _e("EXPLORE THE", 'dm' )?></h1>
                <img src="https://datamares.org/wp-content/uploads/2023/09/Asset-1-3.svg" class='my-3 mx-auto w-1/2'
                    alt="">
                <a href="https://public.tableau.com/app/profile/datamares/viz/Mexico_ANP_reducida/ANP" target="_blank"
                    rel="noopener noreferrer"><img
                        class="w-2/3 mx-auto shadow-lg shadow-[#0b1f27] mt-4 hover:scale-105 transition-transform rounded-md"
                        src="https://datamares.org/wp-content/uploads/2023/09/Asset-5@300x-1.png" alt=""></a>

            </div>
        </div>
    </section>

    <!-- CHRONOLOGY -->
    <section class='my-8 bg-gradient-to-b from-[#046398] to-[#060a11] w-full md:-mt-8'>
        <div class="">
            <div class="flex justify-between pb-4">
                <h1 class='text-gray-50 MBlack text-9m md:text-8m lg:text-3m  m-auto ml-4 md:ml-auto mb-0'
                    style="margin-bottom: 0 !important;">
                    <?php _e( "TIMELINE", 'dm' ) ?>
                </h1>
                <div
                    class="border-t-[4rem] pb-4 border-t-gray-50 dark:border-t-gray-900 border-solid border-l-[5rem] border-l-transparent border-r-0 border-r-transparent h-0 w-8/12 2xl:w-4/5">
                </div>
            </div>
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track w-11/12 mx-auto">
                    <ul class="splide__list">
                        <?php while ( have_rows( 'slides' ) ) :
                            the_row();
                            $icon = get_sub_field( 'icon' );
                            $content = get_sub_field( 'content' );
                            $year = get_sub_field( 'year' );
                            ?>
                            <li class="splide__slide mb-4">
                                <div class="">
                                    <div class="h-1 w-full relative top-16 bg-gray-50 -z-10"></div>
                                    <img class='w-32 mx-auto' src="<?php echo $icon ?>" alt="">
                                </div>
                                <h1 class='MBlack my-3 text-5m lg:text-2xl xl:text-6xl  text-gray-50 text-center'>
                                    <?php echo $year ?>
                                </h1>
                                <h1 class='w-11/12 mx-auto MBold lg:text-xl 2xl:text-2xl text-gray-50 text-center mb-6'>
                                    <?php echo $content ?>
                                </h1>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>
        </div>
    </section>



    <section
        class="w-97 mb-8 mx-auto flex flex-col-reverse lg:grid grid-cols-6 rounded-xl border-8 border-[#86cbaa] bg-gradient-to-b from-[#046498] to-[#06070d] py-8 px-4">
        <div class="col-span-2">
            <img id="setAnps" class="mt-8 lg:mt-auto h-20 md:h-16 2xl:h-24 lg:w-auto mx-auto mb-4"
                src="<?php echo the_field('img2'); ?>" alt="" />
            <div class="h-[80%] flex flex-col" style="gap: 3rem;">
                <img id="regs" class="w-1/2 md:mr-auto mx-auto md:ml-24"
                    src="https://datamares.org/wp-content/uploads/2024/04/reg1<?php _e("en", 'dm' )?>.svg" alt="">
                <img id="states" class="w-[63%] md:mr-auto mx-auto md:ml-24 mt-8"
                    src="https://datamares.org/wp-content/uploads/2024/04/state1<?php _e("en", 'dm' )?>.svg" alt="">
            </div>
        </div>
        <div class="col-span-4">
            <div class="flex justify-center items-center mb-4">
				
                <h1 class='text-right MBoldCondensed text-3xl text-gray-50 mr-6'>
					<?php _e( "NPA AREA<br>BY REGION:", 'dm' ) ?>
                </h1>
                <div class="grid grid-cols-5 gap-7">
                    <img onclick="changeArea(1)" class="w-16 hover:scale-105 transition-transform cursor-pointer"
                        src="https://datamares.org/wp-content/uploads/2023/09/Asset-2-5.svg" alt="">
                    <img onclick="changeArea(2)" class="w-16 hover:scale-105 transition-transform cursor-pointer"
                        src="https://datamares.org/wp-content/uploads/2023/09/Asset-3-4.svg" alt="">
                    <img onclick="changeArea(3)" class="w-16 hover:scale-105 transition-transform cursor-pointer"
                        src="https://datamares.org/wp-content/uploads/2023/09/Asset-4-2.svg" alt="">
                    <img onclick="changeArea(4)" class="w-16 hover:scale-105 transition-transform cursor-pointer"
                        src="https://datamares.org/wp-content/uploads/2023/09/Asset-5-1.svg" alt="">
                    <img onclick="changeArea(5)" class="w-16 hover:scale-105 transition-transform cursor-pointer"
                        src="https://datamares.org/wp-content/uploads/2023/09/Asset-6.svg" alt="">
                </div>
            </div>
            <img id="areaMap" src="https://datamares.org/wp-content/uploads/2023/11/ar1<?php _e("en", 'dm' )?>.svg" class="w-11/12 mx-auto"
                alt="">
        </div>
    </section>


    <section class="text-gray-50">
        <div class="bg-[#1a495a] pb-12 py-8">
            <h1 class='text-center text-9m md:text-3m MBlack'><?php _e("Management categories", 'dm' )?></h1>
            <h1 class='text-center text-7m md:text-1m MRegular leading-5'><?php _e("for NPAs", 'dm' )?>
            </h1>
            <section class='grid md:w-1/2 lg:w-auto mx-auto grid-cols-3 lg:grid-cols-6 gap-8 mt-12 iconsS1'>
                
<svg class="group w-28 xl:w-44 category mx-auto" cat='1' data-name="Layer 2"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 181.93 181.93">
  <circle class="iconANP iconNormal transition-colors" cx="90.96" cy="90.96"
    r="90.96" />
  <g>
    <path class="fill-[#1a495a]"
      d="m137.28,105.22c-2.55-11.12-8.49-20.15-17.55-27.08-8.01-6.13-17.09-9.33-27.18-9.69-8.8-.32-17.06,1.67-24.71,5.95-9.32,5.22-16.21,12.76-20.49,22.56-4.17,9.56-5.09,19.48-2.76,29.66,1.95,8.52,5.98,15.94,12.03,22.24,5.87,6.13,12.86,10.5,21.06,12.74,3.45.94,7.05,1.34,10.57,1.98h5.54c.4-.07.81-.15,1.21-.22,3.48-.68,7.07-1.02,10.42-2.1,11.53-3.72,20.47-10.86,26.59-21.34,6.34-10.84,8.06-22.48,5.26-34.71Zm-46.37,54.21c-23.93-.07-43.51-19.71-43.41-43.54.1-23.92,19.47-43.26,43.43-43.36,23.82-.1,43.52,19.59,43.46,43.45-.06,23.97-19.62,43.51-43.48,43.45Z" />
    <path class="fill-[#1a495a]"
      d="m84.7,59.61v5.21h4.17v-5.11h4.18v5.09h4.16v-5.28c15.79-2.57,22.55-15.75,20.55-28.93-11.08-1.09-20.23,2.06-26.1,12.08-1.2-2.32-2.15-4.64-3.51-6.69-7.85-11.91-19.36-15.44-32.99-14.16-.38,7.5-.16,14.93,3.75,21.71,5.71,9.89,14.38,15.15,25.77,16.09Zm28.89-24.93c1.6,9.48-6.84,20.09-17.46,20.51,3.84-3.83,7.42-7.4,10.98-10.95-.97-.97-1.88-1.87-2.83-2.83-3.54,3.54-7.13,7.14-10.86,10.87-1.31-8.83,9.86-18.39,20.17-17.6Zm-54.16-8.76c16.46-1.53,29.35,11.51,29.35,26.29-5.47-5.5-10.8-10.86-16.07-16.16-1.08,1.11-2,2.05-2.99,3.07,5.23,5.21,10.61,10.57,16.13,16.07-14.24.53-28.24-12.61-26.43-29.28Z" />
    <path class="fill-[#1a495a]"
      d="m112.83,137.88c1.58-6,2.46-12.12,2.65-18.33.01-.45.08-.9.14-1.52h4.99v-4.13h-4.84c-.11-.24-.2-.36-.21-.49-.05-.37-.08-.73-.09-1.1-.17-6.12-1.03-12.14-2.58-18.06-.27-1.05-.07-1.52.87-2.05,1.99-1.1,3.89-2.38,5.91-3.63-.97-1.26-1.77-2.3-2.54-3.3-2.01,1.26-3.84,2.42-5.82,3.67-1.62-4.4-3.49-8.5-6.31-12.23-1.1.83-2.16,1.63-3.02,2.28,1.95,3.9,3.83,7.67,5.77,11.55-4.95,1.99-9.64,3.14-14.72,3.26v-17.73h-4.19v17.74c-5.07-.17-9.78-1.27-14.67-3.29,1.95-3.88,3.83-7.65,5.78-11.54-.86-.64-1.92-1.42-3.03-2.24-2.85,3.69-4.66,7.8-6.35,12.16-2.02-1.27-3.88-2.43-5.81-3.64-.82,1.1-1.6,2.15-2.47,3.33,2.44,1.54,4.73,2.99,6.64,4.2-1.01,7.15-1.99,14.07-3,21.14h-14.86v4.19h15.19c.04.3.08.48.09.66.3,6.47,1.03,12.88,2.74,19.15.24.88-.06,1.29-.81,1.72-2.02,1.16-3.97,2.43-6.03,3.71.94,1.25,1.72,2.28,2.5,3.32,1.97-1.23,3.86-2.42,5.85-3.66,1.65,4.44,3.5,8.54,6.33,12.2,1.15-.87,2.21-1.66,3.16-2.38-1.14-2-2.28-3.8-3.22-5.69-.94-1.88-1.68-3.85-2.52-5.81,4.73-1.96,9.42-2.99,14.52-3.24v17.76h4.17v-17.76c5.05.27,9.79,1.25,14.68,3.34-1.93,3.86-3.81,7.62-5.76,11.51.88.67,1.93,1.46,3.33,2.52,2.15-4.2,4.2-8.21,6.28-12.28,1.72,1.08,3.59,2.26,5.55,3.5.81-1.07,1.6-2.12,2.53-3.34-2.09-1.28-4.06-2.55-6.1-3.72-.77-.44-.97-.84-.74-1.74Zm-24.03-4.42c-5.27,1.14-10.42,2.25-15.67,3.38-1.65-5.89-2.37-12.18-2.6-18.66h18.27v15.28Zm0-19.64h-18.25c.15-6.45.94-12.75,2.55-18.73,5.23,1.13,10.37,2.25,15.69,3.41v15.32Zm19.94,23.31c-2.67-.77-5.17-1.62-7.73-2.18-2.56-.55-5.19-.8-7.9-1.2v-15.58h18.21c-.08,6.44-.94,12.75-2.59,18.95Zm-15.62-23.28v-15.38c5.2-1.11,10.36-2.21,15.68-3.35,1.58,5.86,2.43,12.16,2.55,18.74h-18.23Z" />
    <path class="fill-[#1a495a]"
      d="m125.01,122.47c-.98,5.19-3.12,9.87-6.25,14.22,1.15.86,2.2,1.64,3.35,2.48,7.24-10.22,9.27-21.22,6.37-33.31-1.39.38-2.62.71-4.05,1.09,1.35,5.24,1.55,10.36.58,15.51Z" />
    <path class="fill-[#1a495a]"
      d="m120.94,98.52c1.22-.71,2.32-1.35,3.57-2.08-.87-1.3-1.64-2.46-2.43-3.66-1.2.9-2.22,1.66-3.31,2.48.74,1.11,1.44,2.15,2.18,3.25Z" />
    <path class="fill-[#1a495a]"
      d="m123.67,104.44c1.34-.47,2.58-.91,3.9-1.38-.57-1.37-1.1-2.63-1.68-4.04-1.32.65-2.46,1.21-3.73,1.83.51,1.22.98,2.34,1.51,3.59Z" />
  </g>
</svg>


<svg class="group w-28 xl:w-44 category mx-auto" cat='2' data-name="Layer 2"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 181.93 181.93">
  <circle class="iconANP iconNormal transition-colors" cx="90.96" cy="90.96"
    r="90.96" />
  <path class="fill-[#1a495a]"
    d="m91.74,164.61c-1.47,0-3.1-.38-4.88-1.39-17.31-9.94-30.52-21.25-40.39-34.57-9.68-13.05-14.17-26.69-13.73-41.7.2-7.08.16-14.31.11-21.31-.02-3.35-.05-6.7-.04-10.05,0-6.92,1.96-9.07,9.1-10,14.05-1.82,24.41-5.81,32.61-12.56,3.42-2.81,6.42-6.54,9.33-10.14l1.54-1.89c2.06-2.52,4.66-3.76,7.12-3.64,2.33.16,4.41,1.56,5.85,3.93,7.03,11.58,17.88,18.62,35.18,22.84,2.36.57,4.79.92,7.36,1.28l1.79.26c5.82.85,8.09,3.5,8.11,9.44.01,4.53.01,9.07,0,13.6l-.15,6.03c.8,6.57-.91,25.12-1.31,27.47-2.78,16.06-12.88,28.27-20.23,36.05-8.81,9.33-19.26,17.42-31.96,24.74-1.38.79-3.21,1.64-5.41,1.64ZM39.64,52.97c.1,0-.02.64-.02,2.61,0,3.33.02,6.66.04,10,.05,7.06.1,14.35-.11,21.55-.39,13.43,3.66,25.68,12.39,37.45,9.3,12.56,21.83,23.26,38.31,32.72,1.1.62,1.82.73,3.49-.24,12.12-6.99,22.07-14.68,30.42-23.51,10.87-11.51,16.56-21.54,18.47-32.53,1.09-6.28,1.4-17.8,1.43-23.13h-.07s0-9.21,0-9.21c0-4.53,0-9.05,0-13.57,0-1.77-.23-2.19-.25-2.24,0,.03-.12-.2-2.04-.48l-1.76-.25c-2.62-.37-5.33-.76-8.02-1.41-18.94-4.62-31.46-12.85-39.39-25.92-.34-.56-.58-.68-.58-.68-.02.03-.56.28-1.29,1.16l-1.51,1.87c-3.12,3.86-6.34,7.86-10.3,11.12-9.23,7.6-20.69,12.07-36.06,14.06-1.78.23-2.84.44-3.16.64,0,0,.01,0,.02,0Z" />
  <g>
    <path class="fill-[#1a495a]"
      d="m124.47,84.44c-1.87,1.49-3.68,3.06-5.62,4.45-4.21,3.02-8.87,3.86-13.92,2.67-3.62-.86-6.98-2.36-10.21-4.16-4.23-2.36-8.56-4.47-13.28-5.67-5.84-1.49-11.57-1.36-17.13,1.19-4.22,1.93-7.76,4.83-11.14,7.92-1.61,1.48-1.71,4.02-.45,5.8,1.58,2.22,4.41,2.49,6.63.69,1.96-1.59,3.89-3.22,5.96-4.65,3.85-2.65,8.12-3.4,12.71-2.46,4.02.82,7.68,2.51,11.23,4.49,4.28,2.39,8.68,4.46,13.47,5.61,5.9,1.41,11.64,1.1,17.16-1.6,3.47-1.69,6.44-4.09,9.37-6.54,1.14-.96,2.1-2,2.47-3.49v-1.56c-.07-.19-.14-.39-.21-.58-1.01-3.08-4.53-4.14-7.06-2.12Z" />
    <path class="fill-[#1a495a]"
      d="m124.01,107.48c-1.56,1.44-3.26,2.75-4.99,3.99-4.14,2.99-8.72,3.98-13.73,2.87-3.76-.83-7.24-2.38-10.58-4.25-4.69-2.61-9.5-4.92-14.8-6.01-5.36-1.1-10.59-.76-15.61,1.54-4.21,1.93-7.76,4.83-11.13,7.93-1.33,1.22-1.6,2.88-1.03,4.61,1,3.05,4.56,4.01,7.1,1.96,2.02-1.63,4.01-3.32,6.14-4.79,3.76-2.58,7.94-3.32,12.42-2.46,3.9.75,7.47,2.33,10.91,4.24,4.44,2.47,8.97,4.69,13.94,5.89,5.92,1.43,11.69,1.13,17.24-1.58,3.37-1.64,6.27-3.95,9.13-6.34,1.19-1,2.27-2.03,2.72-3.58v-1.72s-.09-.08-.09-.12c-.6-3.17-4.59-5-7.63-2.2Z" />
    <path class="fill-[#1a495a]"
      d="m131.63,64.27c-.59-3.22-4.69-4.97-7.69-2.13-1.56,1.48-3.31,2.77-5.06,4.03-4.19,3.01-8.82,3.87-13.84,2.72-3.73-.86-7.17-2.43-10.49-4.28-4.53-2.52-9.18-4.74-14.28-5.85-5.49-1.19-10.83-.89-15.99,1.49-4.21,1.93-7.76,4.82-11.13,7.93-1.75,1.62-1.67,4.46-.05,6.23,1.63,1.77,4.18,1.92,6.11.34,1.39-1.14,2.76-2.3,4.16-3.42,4.93-3.95,10.42-5.17,16.53-3.37,3.08.9,6,2.18,8.79,3.75,4.34,2.43,8.78,4.62,13.63,5.83,6.02,1.5,11.89,1.27,17.55-1.48,3.42-1.67,6.36-4.01,9.26-6.44,1.18-.99,2.22-2.03,2.62-3.57v-1.56c-.03-.06-.08-.13-.1-.2Z" />
  </g>
</svg>

<svg class="group w-28 xl:w-44 category mx-auto" cat='3' data-name="Layer 2"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 181.93 181.93">
  <circle class="iconANP iconNormal transition-colors" cx="90.96" cy="90.96"
    r="90.96" />
  <g>
    <path class="fill-[#1a495a]"
      d="m149.65,105.28c-.99-1.16-2.19-1.98-3.68-2.35-2.06-.51-4.01-.1-5.9.74-2.73,1.22-4.97,3.12-7.11,5.16-1.13,1.07-2.05,2.35-3.32,3.29-2.95,2.2-5.78,4.57-8.82,6.65-1.96,1.34-4,2.53-6.24,3.34-1.81.66-3.69.84-5.6,1.05-3.72.4-7.43.98-11.17,1.25-2.84.2-5.68.31-8.51-.14-2.16-.34-4.09-1.01-5.36-2.99-.84-1.32-.62-1.93.94-2.14,1.37-.19,2.75-.18,4.13-.14,3.45.1,6.91.13,10.36.27,4.02.16,7.94-.3,11.77-1.53,2.23-.71,4.33-1.68,5.98-3.41,1.63-1.71,2.28-3.72,1.83-6.07-.09-.49-.3-.61-.78-.61-10.38.02-20.76.02-31.14.03-4.74,0-9.47.16-14.2.48-3.59.24-7.08,1.01-10.59,1.7-2.29.45-4.26,1.7-6.18,2.99-3.81,2.58-7.21,5.67-10.61,8.75-3.47,3.14-6.88,6.37-10.54,9.3v.1c.08.06.16.11.23.18,1.72,1.9,3.45,3.8,5.17,5.7,3.95,4.36,7.91,8.72,11.85,13.09.22.25.35.3.61.03.58-.61,1.18-1.19,1.79-1.77,2.54-2.44,5.17-4.77,8.1-6.75,2.87-1.94,5.94-3,9.48-2.88,4.9.15,9.8.02,14.7-.06,5.74-.09,11.47-.22,17.21-.51,3.6-.18,7.19-.4,10.76-.92.98-.14,1.95-.28,2.82-.9,2.03-1.46,4.07-2.9,6.03-4.45,6-4.73,11.57-9.95,16.86-15.46,3.16-3.29,6.21-6.67,9.13-10.16.27-.32.27-.52,0-.83Z" />
    <path class="fill-[#1a495a]"
      d="m64,57.92c2.34,6.16,6.33,10.95,11.92,14.39,3.52,2.17,7.35,3.06,11.48,2.31.25-.05.39.07.55.23,1.13,1.2,1.6,2.65,1.65,4.27.02.64,0,1.27.24,1.89.68,1.8,1.32,3.61,1.96,5.43.71,1.98,1.37,3.98,1.62,6.09.15,1.26.15,1.26-1.09,1.26h-.2q-2.84,0-5.17,1.63c-3.22,2.26-5.96,5.06-8.74,7.82-.05.05-.07.11-.04.15h34.56c-.08-.11-.11-.17-.16-.21-2.51-2.45-5.14-4.77-8.1-6.66-2.11-1.34-4.29-2.51-6.85-2.72-.32-.03-.26-.23-.26-.42,0-1.68,0-3.36,0-5.03,0-.26.08-.48.21-.69,1.32-2.18,3.01-3.98,5.27-5.21.24-.13.32-.28.31-.54-.02-.45,0-.91,0-1.47.49.54.9,1.03,1.34,1.48,4.91,4.94,12.33,4.61,16.96,1.21,1.81-1.33,3.48-2.86,4.96-4.57,3.77-4.37,6.63-9.31,9.1-14.49.15-.31.45-.7.36-.93-.12-.32-.64-.16-.97-.29-.03-.01-.06-.02-.09-.03-4.17-1.03-8.35-1.97-12.65-2.26-2.75-.18-5.48-.11-8.21.29-2.86.42-5.52,1.47-8.13,2.65-1.14.51-2.15,1.22-2.98,2.15-2.18,2.47-2.97,5.25-1.85,8.45.19.54.21.53.62.13,2.43-2.39,5.08-4.48,8.05-6.15,3.96-2.23,8.15-3.56,12.76-3.32.56.03,1.12.08,1.59.17-11.08,3.98-20.19,10.93-28.54,19.12-.01-.2-.03-.36-.03-.52,0-1.56,0-3.13,0-4.69,0-.23,0-.46-.06-.68-.38-1.46-.79-2.92-1.27-4.35-3.93-11.73-10.44-21.88-18.82-30.89-.8-.86-1.64-1.7-2.46-2.54,0,0,0,0,0,0,.2-.04.34.11.49.2,6.53,3.85,11.85,8.98,16,15.31,2.56,3.9,4.61,8.04,5.77,12.58.18.72.27,1.46.39,2.26.27-.29.49-.5.7-.74.51-.56.99-1.15,1.4-1.78,4.05-6.25,4.55-12.65.73-19.19-1.31-2.24-3.23-3.94-5.22-5.54-7.57-6.08-16.3-9.57-25.78-11.29-.92-.17-1.85-.27-2.77-.4h-2.67c-.14.14-.34.11-.51.14-.49.09-.74.33-.75.85,0,.64-.09,1.28-.11,1.92-.1,3.32,0,6.64.37,9.95.52,4.56,1.52,9,3.15,13.3Z" />
  </g>
</svg>

<svg class="group w-28 xl:w-44 category mx-auto" cat='4' data-name="Layer 2"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 181.93 181.93">
  <circle class="iconANP iconNormal transition-colors" cx="90.96" cy="90.96"
    r="90.96" />
  <path class="fill-[#1a495a]"
    d="m58.63,143.79c0-16.18.54-32.09-.21-47.94-.42-8.78,1.57-15.53,8.77-20.6.71-.5,1.18-1.31,1.88-1.83,6.39-4.76,9.56-10.77,8.18-18.98-.25-1.49.81-3.62,1.93-4.85,3.53-3.88,7.38-7.47,11.12-11.17.16-.15.45-.17,1-.37,4.13,4.12,8.49,8.22,12.49,12.65.97,1.07,1.16,3.31.94,4.9-.96,6.91,1.22,12.16,6.75,16.59,4.26,3.42,9.27,7.13,11.23,11.84,1.96,4.71.59,10.83.6,16.33.03,14.38,0,28.76,0,43.43H58.63Z" />
  <path class="fill-[#1a495a]" d="m44.37,143.86h-13.31v-50.51h13.31v50.51Z" />
  <path class="fill-[#1a495a]" d="m137.59,93.31h13.28v50.49h-13.28v-50.49Z" />
</svg>

<svg class="group w-28 xl:w-44 category mx-auto" cat='5' data-name="Layer 2"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 181.93 181.93">
  <circle class="iconANP iconNormal transition-colors" cx="90.96" cy="90.96"
    r="90.96" />
  <path class="fill-[#1a495a]"
    d="m91.74,170.47c-1.47,0-3.1-.38-4.88-1.39-17.31-9.94-30.52-21.25-40.39-34.57-9.68-13.05-14.17-26.69-13.73-41.7.2-7.08.16-14.31.11-21.31-.02-3.35-.05-6.7-.04-10.05,0-6.92,1.96-9.07,9.1-10,14.05-1.82,24.41-5.81,32.61-12.56,3.42-2.81,6.42-6.54,9.33-10.14l1.54-1.89c2.06-2.52,4.66-3.76,7.12-3.64,2.33.16,4.41,1.56,5.85,3.93,7.03,11.58,17.88,18.62,35.18,22.84,2.36.57,4.79.92,7.36,1.28l1.79.26c5.82.85,8.09,3.5,8.11,9.44.01,4.53.01,9.07,0,13.6l-.15,6.03c.8,6.57-.91,25.12-1.31,27.47-2.78,16.06-12.88,28.27-20.23,36.05-8.81,9.33-19.26,17.42-31.96,24.74-1.38.79-3.21,1.64-5.41,1.64ZM39.64,58.83c.1,0-.02.64-.02,2.61,0,3.33.02,6.66.04,10,.05,7.06.1,14.35-.11,21.55-.39,13.43,3.66,25.68,12.39,37.45,9.3,12.56,21.83,23.26,38.31,32.72,1.1.62,1.82.73,3.49-.24,12.12-6.99,22.07-14.68,30.42-23.51,10.87-11.51,16.56-21.54,18.47-32.53,1.09-6.28,1.4-17.8,1.43-23.13h-.07s0-9.21,0-9.21c0-4.53,0-9.05,0-13.57,0-1.77-.23-2.19-.25-2.24,0,.03-.12-.2-2.04-.48l-1.76-.25c-2.62-.37-5.33-.76-8.02-1.41-18.94-4.62-31.46-12.85-39.39-25.92-.34-.56-.58-.68-.58-.68-.02.03-.56.28-1.29,1.16l-1.51,1.87c-3.12,3.86-6.34,7.86-10.3,11.12-9.23,7.6-20.69,12.07-36.06,14.06-1.78.23-2.84.44-3.16.64,0,0,.01,0,.02,0Z" />
  <g>
    <path class="fill-[#1a495a]"
      d="m133.73,89.12c-.46.08-.92.17-1.38.25-10.51,1.97-21.02,3.92-31.52,5.92-.73.14-1.5.54-2.04,1.05-2.31,2.2-4.51,4.51-6.8,6.73-.84.82-1.18,1.71-1.17,2.88.1,8.36.17,16.73.21,25.09,0,.4-.22.9-.5,1.2-1.75,1.81-3.54,3.57-5.32,5.36-.29.29-.57.6-.78.94-.68,1.13-.04,2.58,1.23,2.91.91.24,1.59-.14,2.2-.75,1.82-1.82,3.66-3.62,5.45-5.47.45-.46.9-.62,1.54-.61,8.33.1,16.67.17,25,.27.95.01,1.77-.19,2.46-.9,2.38-2.41,4.81-4.79,7.17-7.22.4-.42.75-1.01.86-1.57,1.74-9.12,3.43-18.26,5.14-27.39.38-2.03.82-4.05,1.23-6.07v-1.23c-.81-1.43-1.33-1.68-3-1.4Zm-4.25,18.71c-.97,5.2-1.94,10.4-2.94,15.59-.08.4-.29.83-.57,1.12-1.9,1.95-3.82,3.87-5.77,5.77-.24.24-.64.44-.97.44-6.9-.04-13.81-.1-20.71-.17-.08,0-.17-.03-.36-.07.2-.23.34-.42.51-.6,1.4-1.41,2.83-2.8,4.2-4.23.48-.51,1-.71,1.69-.74,2.98-.15,5.96-.33,8.93-.53,1.23-.08,1.95-.76,2.09-1.85.11-.87-.43-1.78-1.3-2.05-.43-.13-.92-.15-1.38-.13-1.58.08-3.15.19-4.85.3.16-.22.24-.38.36-.51,1.32-1.33,2.63-2.67,3.98-3.97.24-.24.64-.4.98-.43,1.84-.15,3.68-.24,5.52-.35.5-.03.99-.06,1.48-.14,1.07-.18,1.76-.97,1.77-1.97,0-1.01-.73-1.89-1.84-1.99-.95-.09-1.92-.02-2.94-.02.15-.17.29-.36.46-.54,1.96-1.97,3.93-3.93,5.89-5.9.94-.95,1.08-1.93.45-2.83-.62-.88-1.8-1.14-2.7-.55-.34.22-.64.51-.93.79-2.03,2.02-4.05,4.05-6.24,6.24.05-1.08.14-1.96.13-2.84-.02-1.51-1.33-2.48-2.69-1.99-.94.33-1.31,1.09-1.37,2.05-.12,2.1-.22,4.21-.41,6.3-.05.5-.31,1.06-.65,1.43-1.31,1.42-2.69,2.76-4.24,4.09.01-.32.03-.64.04-.96.07-1.37.17-2.74.21-4.12.05-1.4-.72-2.32-1.9-2.37-1.23-.05-2.07.83-2.16,2.25-.18,3.06-.36,6.13-.55,9.19-.02.25-.05.57-.21.73-1.73,1.77-3.48,3.51-5.36,5.38-.02-.36-.04-.52-.04-.69-.06-6.76-.13-13.51-.16-20.27,0-.43.21-.97.51-1.28,1.85-1.92,3.74-3.79,5.64-5.65.29-.29.71-.54,1.11-.61,9.67-1.83,19.35-3.63,29.03-5.44.25-.05.51-.05.88-.08-.9,4.82-1.77,9.5-2.64,14.18Z" />
    <path class="fill-[#1a495a]"
      d="m78,123.09c1.78,1.39,3.83,1.96,6.06,1.93.76,0,1.44-.23,1.9-.9.46-.67.5-1.38.13-2.08-.46-.89-1.3-1.12-2.22-1.12-2.19,0-3.85-.79-4.66-2.98-.3-.82-.99-1.24-1.85-1.24-.86,0-1.49.45-1.86,1.24-.07.16-.15.32-.22.48-1.38,2.93-5.86,3.65-8.02,1.25-.96-1.06-1.88-2.17-2.7-3.34-.91-1.3-1.69-2.69-2.6-4.16,2.38-.12,4.39-.63,6.2-1.83.16-.11.6.02.79.17,2.61,2.18,5.6,2.74,8.8,1.83,1.37-.39,2.62-1.2,4.04-1.87.08.06.32.28.59.45.54.34,1.07.73,1.66.97.99.4,2.07-.05,2.53-.97.45-.89.2-1.96-.68-2.54-.93-.62-1.87-1.19-2.26-2.34-.33-.97-.98-1.63-2.05-1.61-1.07.01-1.68.7-2.03,1.66-.39,1.1-1.2,1.77-2.25,2.19-2.78,1.1-5.45.1-6.73-2.57-.38-.79-.98-1.26-1.84-1.28-.85-.01-1.47.42-1.89,1.2-.26.48-.56,1.01-.99,1.3-1.54,1.06-3.26,1.4-5.09.96-.29-.07-.65-.42-.74-.71-.39-1.31-.75-2.64-1.02-3.99-.23-1.12-.32-2.28-.46-3.33,1.44-.21,2.74-.26,3.95-.63,1.2-.37,2.3-1.07,3.5-1.65,1.75,1.55,3.91,2.36,6.33,2.35,2.41,0,4.58-.79,6.42-2.47,1.79,1.6,3.85,2.41,6.18,2.46,1.66.03,3.28-.2,4.73-1.06.91-.54,1.19-1.61.78-2.52-.41-.9-1.33-1.35-2.31-1.1-.45.11-.89.28-1.34.4-2.21.61-5.38-.12-6.12-2.68-.12-.4-.5-.8-.87-1.04-1.09-.7-2.39-.24-2.92,1.08-.48,1.18-1.23,2.02-2.43,2.48-2.1.81-5.87.4-6.73-2.62-.24-.83-.97-1.25-1.84-1.25-.86,0-1.48.44-1.86,1.23-1.09,2.23-2.96,3.14-5.53,2.67.04-.49.08-.92.12-1.36.39-5.01,1.9-9.69,4.47-13.98,3.64-6.09,8.7-10.66,15.21-13.55,6.74-3,13.74-3.65,20.91-2.04,7.03,1.58,12.92,5.15,17.68,10.56,2.34,2.66,4.13,5.65,5.59,8.86.85,1.88,1.7,2.18,3.63,1.41,1.9-.76,3.79-1.53,5.69-2.3.32-.13.64-.29.93-.48.8-.55,1.08-1.54.71-2.4-.39-.91-1.33-1.41-2.28-1.16-.65.17-1.27.44-1.89.68-1.18.46-2.36.94-3.33,1.32-2.08-3.11-4.06-6.08-6.11-9.15.99-.99,2.11-2.1,3.22-3.21,1.27-1.27,1.45-2.5.51-3.42-.93-.91-2.12-.73-3.36.51-1.13,1.13-2.25,2.27-3.25,3.27-2.92-1.98-5.72-3.87-8.56-5.79.07-.18.19-.48.31-.77.6-1.46,1.25-2.9,1.79-4.38.36-.99-.16-1.97-1.09-2.39-.92-.41-1.94-.1-2.51.81-.2.32-.35.67-.5,1.02-.61,1.41-1.21,2.83-1.81,4.23-1.81-.48-3.51-1.03-5.24-1.38-1.77-.36-3.57-.54-5.45-.81,0-1.63,0-3.26,0-4.89,0-.78-.1-1.53-.74-2.07-.64-.54-1.39-.63-2.13-.31-.88.38-1.2,1.16-1.22,2.06-.03,1.4-.07,2.81.01,4.21.05.87-.22,1.13-1.09,1.21-1.77.18-3.53.47-5.28.81-1.25.24-2.47.63-3.72.95-.13-.3-.24-.54-.34-.78-.55-1.35-1.07-2.72-1.65-4.06-.57-1.33-1.78-1.82-2.91-1.23-.99.52-1.32,1.57-.84,2.81.62,1.6,1.28,3.19,1.86,4.62-3.09,2.05-6.09,4.05-9.25,6.14-.26-.29-.62-.75-1.04-1.16-.93-.93-1.84-1.89-2.83-2.74-.82-.7-1.9-.59-2.63.11-.74.71-.83,1.85-.15,2.71.45.57,1,1.07,1.51,1.58.84.84,1.68,1.67,2.37,2.34-1.99,2.95-3.88,5.75-5.79,8.58,0,0-.12-.04-.22-.09-1.62-.67-3.22-1.39-4.86-1.99-1.04-.38-2.06.15-2.46,1.1-.4.94-.04,2.01.92,2.55.56.32,1.17.53,1.76.79,1.14.49,2.28.98,3.21,1.38-.74,3.67-1.45,7.18-2.17,10.8-.15,0-.47,0-.78,0-1.49,0-2.99-.03-4.48.02-1.17.04-1.96.83-2.03,1.9-.07,1.02.7,1.92,1.84,2.09.43.07.87.05,1.31.05,1.45,0,2.91,0,4.36,0,.06.46.13.8.15,1.15.36,4.69,1.6,9.14,3.69,13.34,4.12,8.25,10.45,14.19,18.89,17.88,1.19.52,2.28.17,2.79-.83.55-1.09.16-2.19-1.07-2.84-.8-.43-1.65-.76-2.44-1.19-1-.54-1.98-1.14-2.9-1.67,1.35-.77,2.64-1.49,4-2.26.1.08.3.24.51.4Z" />
  </g>
</svg>


<svg class="group w-28 xl:w-44 category mx-auto" cat='6' data-name="Layer 2"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 181.93 181.93">
  <circle class="iconANP iconNormal transition-colors" cx="90.96" cy="90.96"
    r="90.96" />
  <g id="nk42Ao">
    <path class="fill-[#1a495a]"
      d="m43.22,150.35c0-2.33-.1-4.53.02-6.73.18-3.16,2.83-5.62,6.03-5.71,2.1-.06,4.2-.01,6.49-.01,0-.69,0-1.26,0-1.83,0-3.38-.01-6.76,0-10.14.02-4.35,2.51-6.84,6.83-6.85,3.82,0,7.64,0,11.46-.02.1,0,.19-.04.52-.12v-1.79c0-21.9.03-43.79-.04-65.69,0-2.71.77-4.97,2.32-7.08,3.58-4.85,8.09-8.77,12.72-12.56.26-.21.98-.25,1.22-.05,4.87,4.11,9.65,8.32,13.27,13.64,1.25,1.83,1.84,3.79,1.84,6.05-.05,21.85-.03,43.69-.03,65.54v2.05c1.69,0,3.24,0,4.79,0,2.6,0,5.19-.03,7.79,0,3.51.06,6.14,2.62,6.21,6.12.07,3.62.02,7.25.03,10.87,0,.53,0,1.06,0,1.81,1.9,0,3.69,0,5.48,0,4.6,0,7.08,2.47,7.09,7.06,0,1.76,0,3.52,0,5.39H43.22Z" />
  </g>
</svg>
            </section>
        </div>
        <section class='bg-gray-50 dark:bg-gray-900 md:flex flex-col-reverse'>
            <div
                class="bg-[#86cbaa] py-8 md:py-auto md:h-40 lg:h-48 2xl:h-64 border-b-2 border-gray-900 md:flex items-center justify-center md:justify-start mb-20">
                <div class="w-11/12 lg:w-1/2 md:grid grid-cols-5">
                    <h1 id="CategoryText"
                        class="MBlack col-span-2  text-[7vw] sm:text-2m flex justify-center md:justify-end items-center text-center md:text-end pr-4 leading-none">
                        <?php _e("National Parks", 'dm' )?>
                    </h1>
                    <div class="col-span-3 flex">
                        <svg class="hidden md:block mr-4" width="22" height="141" viewBox="0 0 22 141" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 70.5L2 100L2 41L22 70.5Z" fill="white" />
                            <path d="M1.5 1V140" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <h1
                            class="MBlack leading-none text-[7vw] text-center md:text-start sm:text-2m col-span-3 flex flex-col justify-center">
                            <?php _e("SURFACE (hectares)", 'dm' )?> <br><span id="AreaCat" class='text-[7vw] sm:text-9m'>17,569,683</span></h1>
                    </div>
                </div>
                <div>
					<div>
						A
					</div>
					<div id="chartCategory">
                </div>
				</div>
            </div>

        </section>
    </section>

    <section class="text-gray-50">
        <div class="bg-[#1a495a] pb-12 py-8">
            <h1 class='text-center text-9m md:text-3m MBlack leading-none'> <?php _e("How much of Mexico’s territory is<br>under some type of protection?", 'dm' )?></h1>
            <section class='grid grid-cols-2 mx-auto gap-8 mt-12 md:w-1/3 iconsS2'>
                <svg class="group w-28 xl:w-44 anp mx-auto" anp='1' data-name="Layer 2"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 181.93 181.93">
                    <g>
                        <path class="iconANP iconActive transition-colors"
                            d="m25.29,65.67c.7-1.26,1.18-1.22,1.96-.16,3.54,4.8,7.12,9.51,10.69,14.26q1.32,1.76,2.28-.36c3.67-8.16,7.38-16.28,10.99-24.51.76-1.74,1.58-2.43,2.94-2.1,1.18.29,2.39.26,3.57.54.87.2,1.44-.27,2-1.18,8.09-13.11,16.19-26.21,24.28-39.31.74-1.21,1.54-2.35,2.23-3.62.69-1.26,1.08-.92,1.59.26,3.64,8.44,7.31,16.86,10.97,25.28,4.1,9.44,8.23,18.86,12.3,28.33.65,1.5,1.32,2.05,2.31.93,2.66-3.03,4.74-2.1,7.19,1.12,4.95,6.49,10.26,12.38,15.37,18.62,1.13,1.38,1.81,1.32,2.83-.25,3.53-5.42,7.18-10.67,10.75-16.04.76-1.15,1.18-1.21,1.86.18,7.84,16.16,15.72,32.27,23.58,48.4,1.08,2.22,1.12,2.23,2.14.04.87-1.87,1.81-3.68,2.62-5.61.05-.12.1-.22.15-.33,1.33-6.2,2.04-12.62,2.04-19.22C181.93,40.73,141.2,0,90.96,0S0,40.73,0,90.96c0,5.79.55,11.46,1.58,16.95,8-13.96,15.84-28.12,23.7-42.25Z" />
                        <path class="iconANP iconActive transition-colors"
                            d="m65.17,178.21c.21-.29.44-.6.7-.97-1.06.14-1.89.25-2.68.36.66.21,1.31.41,1.98.61Z" />
                        <path class="iconANP iconActive transition-colors"
                            d="m139.63,162.98c3.12-8.3,4-17.38,4.89-26.52.38-3.87.81-7.72,1.24-11.57.07-.65.01-1.42.56-2,.53,1.87.38,3.81.53,5.65.65,8.25,1.19,16.52,1.77,24.78.07.94-.03,1.83-.25,2.71-.56,2.27-1.13,4.55-1.69,6.82,5.12-3.97,9.79-8.47,13.96-13.43.9-2.41,1.79-4.82,2.68-7.23.36-.98.74-1.03,1.13-.06.21.52.42,1.04.62,1.56.36-.51.72-1.03,1.08-1.55-.23-.58-.46-1.15-.69-1.73-.61-1.52-1.51-2.23-2.5-1.1-.98,1.12-1.16.45-1.37-.81-1.18-6.96-2.36-13.92-3.55-20.88-2.41-14.12-4.82-28.23-7.26-42.52-.61.49-.86,1.26-1.17,1.92-4.3,9.16-8.51,18.42-12.93,27.45-1.55,3.16-1.53,6.63-1.82,10.1-.84,10.22-1.61,20.45-2.43,30.68-.05.66,0,1.41-.43,2.06-1.61-11.82-1.64-23.6-.18-35.43-.19-.07-.38-.15-.57-.22-.68,1.06-1.36,2.11-2.03,3.18-5.91,9.52-11.82,19.03-17.71,28.58-.69,1.13-1.17,1.21-1.77-.11-1.02-2.24-2.12-4.4-3.14-6.63-.42-.92-.74-1.25-1.47-.48-3.58,3.82-7.21,7.55-10.81,11.31-.91.95-1.36,2.42-1.76,3.83-1.56,5.5-4.06,9.43-7.93,11.49-1.66.88-3.17,2.34-4.76,3.51-1.18.87-2.58-.47-2.26-2.38.34-2.03-.11-3.48-.92-4.86-.59-1-.42-1.83-.06-2.89,2.03-6,5.35-10.54,8.09-15.73,2.31-4.36,4.73-8.59,7.15-12.81.83-1.44,1.21-2.91,1.16-4.82-.19-7.24-.29-14.48-.44-21.72-.02-1.03.15-1.96.38-2.9,1.09-4.48,2.15-8.97,3.28-13.43.32-1.26.38-2.45.17-3.74-3.46-21.49-6.91-42.98-10.36-64.47-.05-.34-.16-.65-.34-1.35-1.62,2.83-3.13,5.45-4.62,8.08-6.62,11.71-13.25,23.41-19.84,35.16-.9,1.61-1.86,2.47-3.32,2.2-1.52-.28-3.06-.27-4.59-.46-.88-.11-1.41.37-1.83,1.54-2.09,5.76-4.2,11.5-6.38,17.18-.55,1.43-.42,2.33.34,3.5,4.38,6.78,8.69,13.64,13.04,20.46.54.85.98,1.68.95,2.96-.14,5.39-.24,10.79-.36,16.19,0,.25-.1.5-.17.84-.63-.28-.65-1.09-.82-1.68-.95-3.42-1.95-6.81-2.77-10.3-.69-2.98-1.86-5.38-3.33-7.59-3.67-5.5-7.3-11.07-11.07-16.78-.12.88.12,1.47.26,2.07,2.09,8.78,4.19,17.55,6.28,26.32.17.73.36,1.49.4,2.25.05.91-.36,1.66-.82,2.14-.57.6-.67-.46-.95-.82-1-1.3-2.47-1.07-3.03.75-2.06,6.72-4.38,13.26-6.14,20.19-.78,3.07-2.47,5.38-3.77,8-.34.69-.69.16-.9-.35-.97-2.37-1.93-4.74-2.87-7.14-.38-.98-.02-1.95.19-2.87.3-1.33.1-2.21-.73-3.03-2.28-2.24-4.48-4.63-6.72-6.96q-1.42-1.48-.15-3.37c2.65-3.92,5.29-7.85,7.94-11.75.53-.78.9-1.48.7-2.77-1.84-11.69-3.62-23.4-5.43-35.1-.05-.33-.15-.64-.31-1.29-4.97,9.55-9.77,18.78-14.57,28-2.4,4.6-4.79,9.21-7.2,13.79,2.3,8.56,5.81,16.62,10.35,23.98.82-2.04,1.63-4.08,2.45-6.11.78-1.94.98-1.92,1.74.12,1.5,4.05,2.98,8.11,4.51,12.14.53,1.4.63,2.24-.75,2.12-1.17-.11-.89.68-.42,1.59.25.49.48.99.73,1.48.68.79,1.36,1.58,2.06,2.35-.07-.48-.02-.97.19-1.52,1.03-2.73,2.03-5.48,3.02-8.24.58-1.61,1.01-1.3,1.54.08,1.19,3.08,2.44,6.12,3.66,9.17q1.08,2.71-1.05,3.36c.65,1.32,1.25,2.57,1.87,3.8.8,1.6.98,1.97.22,2.32,1.27,1.05,2.58,2.06,3.91,3.03.66-1.11,1.33-2.22,1.99-3.33-.92-.46-2.14,0-3.33-.14-.42-.05-.95.21-1.21-.39-.33-.77.19-1.31.45-1.85,1.33-2.78,2.7-5.52,4.04-8.29.21-.43.63-.87.36-1.48-.2-.46-.62-.21-.94-.28-.6-.13-1.44.46-1.73-.4-.3-.87.47-1.57.82-2.3.77-1.63,1.59-3.21,2.37-4.83.31-.64.76-1.38-.27-1.53-.78-.12-.8-.82-.53-1.67,1.71-5.48,3.4-10.97,5.14-16.43.54-1.68.85-.36,1.08.33,1.44,4.41,2.86,8.84,4.29,13.26.31.96.61,1.93.91,2.9.29.97.81,1.98-.53,2.19-.85.13-.34.89-.12,1.34,1.07,2.18,2.18,4.33,3.25,6.51.21.43.64.88.42,1.47-.23.61-.69.21-1.05.15-.37-.06-.85-.4-1.09.09-.33.67.21,1.14.43,1.61.82,1.75,1.69,3.45,2.52,5.19,1.39,2.87.63,5.61-1.79,6.34,0,.22-.03.32-.01.35,1.41,2.07,1.99,4.15.24,6.53-.42.57-.22,1.4.35,1.68.92.45.62,1.14.25,1.91-.08.17-.16.34-.24.5.21.09.41.19.62.28.29-.6.58-1.2.88-1.8.42-.86.61-1.53-.42-1.57-.99-.03-.84-.78-.42-1.64.39-.81.8-1.6,1.19-2.41.39-.82,1.17-1.74-.31-2.01-.67-.12-.47-.92-.26-1.49,1.24-3.37,2.5-6.72,3.74-10.08.41-1.12.75-.81,1.1.07,1.39,3.48,2.79,6.96,4.19,10.44.42,1.05.27,1.58-.59,1.59-.27,0-.58-.12-.84.4.36,1.14,1.05,2.07.66,3.78-.34,1.47.98,1.03,1.59,1.58-.24.83-.8.04-1.18.64.87,1.34.09,2.17-.55,3.05-.25.34-.51.64-.75.99-.29.42-.68.81-.85,1.32.24.08.47.17.7.25.05-.38.4-.62.59-.9,1.01-1.51,2.06-2.97,3.07-4.49.32-.48.79-.82.83-1.66-.54-.49-1.12-.18-1.67-.27-.37-.06-.83.18-1.06-.38-.25-.62.17-1.04.38-1.47.9-1.91,1.83-3.8,2.73-5.66-.11-.22-.16-.41-.22-.43q-1.79-.35-.69-2.55c.51-1.02,1-2.04,1.53-3.1-1.72-.82-1.73-.83-.88-3.15,1.03-2.81,2.09-5.58,3.1-8.4.51-1.42.91-1.44,1.42,0,1.14,3.2,2.32,6.37,3.47,9.56.2.57.65,1.42-.08,1.74-1.08.47-.67,1.13-.26,1.92.44.84.89,1.68,1.28,2.56.25.55.87.98.54,1.77-.26.64-.8.04-1.44.27,1.11,2.27,2.13,4.4,3.18,6.5.64,1.28.64,2.02-.62,2.05-.44,0-1.1-.39-1.26.47-.13.67.43,1.19.74,1.71.79,1.33,1.61,2.63,2.4,3.96.21.35.59.67.44,1.24-.15.59-.57.34-.89.4-.6.11-1.23-.21-1.9.29.17.32.31.58.45.84.15.29.42.53.33.94,4.49.68,9.09,1.04,13.77,1.04,17.04,0,32.98-4.69,46.62-12.84.64-2.07,1.3-4.12,2.05-6.1Zm-77.46-11.47c-.26.45-.49,1.29-1,.86-.6-.51-.35-1.36-.12-2.08,1.07-3.34,2.14-6.67,3.22-10,1.88-5.76,3.74-11.52,5.65-17.25.46-1.38.68-2.76.67-4.29-.02-8.1.02-16.2-.04-24.29-.01-1.94.38-3.35,1.33-4.67,1.79-2.47,3.42-5.18,5.22-7.63,1-1.37,1.37-2.95,1.48-4.87.65-11.1,1.33-22.19,2.01-33.29.02-.34.07-.68.11-1.01.12-.01.24-.02.35-.03.35,3.12.72,6.24,1.06,9.36,1.05,9.67,2.07,19.35,3.16,29.01.23,2.07.05,3.81-.7,5.65-2.39,5.91-4.66,11.92-7.01,17.87-.52,1.31-.65,2.58-.46,4.07.5,4.05.9,8.12,1.41,12.17.15,1.23.02,2.16-.53,3.12-5.29,9.09-10.55,18.21-15.83,27.32Zm40.97-.59c-3.09,6.55-3.26,14.03-3.4,21.57-.04,2.41-.19,4.81-.26,7.22-.03,1.16-.42,1.64-1.18,1.63-2.16-.02-4.31-.02-6.47,0-.91,0-1.17-.56-.95-1.87,1.35-7.98,2.66-15.97,4-23.95.11-.63.29-1.21.66-1.6,3.16-3.31,6.32-6.61,9.48-9.91.12.13.24.25.36.38-.74,2.19-1.31,4.56-2.25,6.54Z" />
                    </g>
                </svg>
                <svg class='group w-28 xl:w-44 anp mx-auto' anp='2' data-name="Layer 2"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 181.93 181.93">
                    <g>
                        <path class="iconANP iconNormal transition-colors"
                            d="m100.36,102.24c.31-.04.35.33.44.56,1.43,3.93,3.67,7.36,6.41,10.49,1.56,1.79,3.32,3.35,5.44,4.67-.07-.2-.07-.29-.12-.35-.12-.16-.26-.31-.4-.45-1.77-1.82-3.28-3.82-4.4-6.1-1.86-3.77-3.01-7.8-4.36-11.75-.41-1.19-.81-2.39-1.23-3.57-.21-.58-.51-.56-.81-.06-.14.25-.27.51-.37.77-.51,1.37-1.05,2.73-1.74,4.02-3.26,6.12-7.48,11.51-12.53,16.25-4.62,4.34-9.97,4.87-15.64,2.75-3.75-1.4-6.91-3.9-10.05-6.37-1.59-1.25-3-2.72-4.68-3.9.03.11.05.22.09.32,1.82,4.17,3.53,8.39,5.72,12.39,2.67,4.88,6.21,8.91,11.13,11.62,1.48.82,2.98,1.62,4.67,2.32-.24-.44-.55-.56-.8-.73-3-1.91-5.68-4.16-7.82-7.02-1.51-2.02-2.67-4.2-3.07-6.73-.04-.28-.15-.61.12-.8.28-.2.54.04.78.19.26.17.52.36.76.56,1.93,1.52,3.82,3.12,6.11,4.11,4.76,2.05,9.25,1.9,13.32-1.62.76-.65,1.46-1.37,2.19-2.06.74-.7.82-.69,1.2.25.83,2.03,1.83,3.95,3.53,5.41,1.49,1.29,3.1,2.34,5.25,2.89-.47-.56-.79-.96-1.13-1.34-1.85-2.06-3.04-4.42-3.35-7.2-.39-3.48-.06-6.92.59-10.33.1-.5.1-1.31.72-1.32.7-.01.7.82.78,1.34.64,3.89,2.72,6.93,5.54,9.55.93.86,1.95,1.61,3.17,2.33-.15-.62-.49-.9-.74-1.24-1.74-2.3-3.35-4.7-3.98-7.54-.84-3.81-1.08-7.71-1.04-11.61,0-.26-.08-.66.3-.7Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m40.52,101.37c.07-.32.08-.78.52-.79.37,0,.41.42.51.71.16.49.33.98.45,1.48,1.21,4.9,3.06,9.52,5.71,13.83,3.84,6.26,8.64,11.6,14.86,15.58.31.2.61.46,1.11.52-.5-.74-1.17-1.11-1.69-1.63-3.14-3.08-5.8-6.55-8.33-10.13-2.28-3.23-3.73-6.75-4.05-10.71-.2-2.51-.43-5.02-.58-7.53-.05-.81-.32-1.4-.88-1.95-2.33-2.29-4.64-4.6-6.57-7.24-2.55-3.47-4.63-7.17-5.27-11.52-.06-.39-.1-.83-.61-1.17-.15,1.02-.08,1.93-.02,2.83.27,4.17.52,8.34.82,12.5.29,4.1.97,8.13,2.42,11.99.35.95.76,1.88,1.34,2.76.24-.29.16-.52.16-.74-.01-2.06-.26-4.11-.18-6.18.04-.89.1-1.77.28-2.64Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m70.63,52.38c.31-.2.64-.38.96-.58.31-.19.62-.39.93-.59-4.76,1.77-8.87,4.46-12.05,8.42-5.99,7.47-8.12,15.99-6.47,25.38,1.09,6.2,3.97,11.61,8.08,16.36,3.21,3.71,7.26,6.15,12.07,7.66-.14-.18-.17-.24-.21-.27-.23-.17-.47-.33-.71-.49-4.21-2.66-7.74-6.05-10.66-10.08-4.18-5.77-6.49-12.22-6.65-19.35-.12-5.4,1.15-10.52,3.83-15.23,2.66-4.66,6.39-8.34,10.88-11.25Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m50.51,106.64c1.98,6.29,4.92,12.05,9.33,17.01-3.02-5.72-6.33-11.28-9.33-17.01Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m66.49,32.49c-4.43,2.04-8.67,4.41-12.71,7.15-4.92,3.35-9.4,7.21-13.39,11.62-4.88,5.4-8.74,11.45-11.57,18.17-2.46,5.84-4.3,11.83-4.89,18.17-.41,4.43-.43,8.86-.16,13.29.35,5.87,1.72,11.48,4.32,16.77,2.58,5.26,6.17,9.75,10.54,13.64,4,3.56,8.45,6.37,13.43,8.33.45.18.91.34,1.38.49.42.14.86.24,1.29.36-2.57-1.36-4.96-2.93-7.26-4.64-3.38-2.52-6.59-5.24-9.27-8.52-3.94-4.83-6.8-10.25-8.58-16.22-.6-2-1.17-4.01-1.48-6.09-.03-.21-.17-.5.13-.6.28-.09.38.2.47.4.23.46.44.93.63,1.41,1.43,3.6,3.09,7.09,5.11,10.39,4.32,7.08,9.97,12.89,16.93,17.39,7.11,4.6,14.8,7.87,23.08,9.7,1.98.44,3.98.69,6.01.68-1.31-.46-2.65-.83-3.98-1.22-5.06-1.49-10.07-3.11-14.83-5.41-8.3-4-15.15-9.83-21-16.86-5.84-7.01-9.35-15.16-11.45-23.97-1.16-4.89-1.5-9.84-1.05-14.84.4-4.4,1.64-8.6,3.16-12.72,1.49-4.08,3.5-7.9,5.99-11.46,2.71-3.89,5.94-7.33,9.28-10.68,4.56-4.59,9.51-8.68,15.19-11.84,1.85-1.03,3.69-2.05,5.54-3.08-.03-.05-.05-.11-.08-.16-.26.11-.52.22-.77.34Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m98.77,162.95c9.81-3.61,18.96-8.49,27.47-14.55,4.22-3,8.36-6.13,12.64-9.05,7.05-4.82,14.21-9.46,22.17-12.71,3.64-1.49,7.4-2.58,11.24-3.43.5-.11.99-.25,1.47-.44-1.56,0-3.07.35-4.57.71-3.87.94-7.68,2.09-11.41,3.51-4.13,1.57-8.08,3.53-11.91,5.72-7.62,4.35-14.72,9.51-22.18,14.1-12.91,7.95-26.47,14.37-41.34,17.73-8.11,1.84-16.28,3.18-24.63,3.42-5.18.15-10.36.03-15.53-.19,1.92,1.22,3.88,2.37,5.89,3.44,4.63-.14,9.26-.34,13.88-.63,12.62-.8,24.91-3.25,36.79-7.62Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m54.8,164.91c6.87-.24,13.61-1.31,20.22-3.21,4.35-1.25,8.7-2.48,12.94-4.07,6.78-2.54,13.22-5.77,19.45-9.44,8.11-4.77,15.72-10.26,23.43-15.63,5.29-3.68,10.65-7.25,16.32-10.35.57-.31,1.11-.69,1.6-1.17-1.58.77-3.18,1.5-4.74,2.31-4.78,2.48-9.51,5.04-14.07,7.91-.41.26-.86.46-1.29.68-.13.06-.28.1-.4-.02-.15-.17-.05-.33.07-.45.43-.42.85-.86,1.32-1.23,7.96-6.27,16.69-11.17,26.27-14.51,3.5-1.22,7.08-2.08,10.73-2.72.67-.12,1.34-.29,1.99-.6-.62.07-1.24.09-1.85.2-6.44,1.14-12.82,2.5-18.88,5.05-5.14,2.16-9.96,4.92-14.59,8-6.84,4.56-13.35,9.58-20.25,14.05-8.53,5.52-17.3,10.57-26.76,14.33-7.83,3.11-15.93,5.23-24.27,6.46-6.98,1.03-14,1.62-21.05,1.5-2.39-.04-4.79-.13-7.17-.3,1.6,1.29,3.24,2.54,4.93,3.72,1.07-.03,2.14-.06,3.21-.11,4.29-.19,8.58-.26,12.88-.41Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m12.65,136.88c4.17,3.78,8.72,7.06,13.72,9.68,5.76,3.02,11.89,4.77,18.33,5.44,2,.21,4.02.26,6.02.39-.13-.19-.29-.25-.45-.29-6.2-1.65-12.36-3.42-18.24-6.04-8.47-3.77-15.99-8.9-22.41-15.6-.44-.46-.82-.95-1.1-1.52-.54-1.11-.29-2.43.64-3.3.86-.81,1.83-.9,3-.25.48.27.95.53,1.49.64.91.18,1.43-.24,1.47-1.17.13-2.85-2.2-5.36-5.03-5.43-.74-.02-1.49.03-2.23-.13-.57-.13-.91-.44-1-1.02-.44-2.76,1.27-4.71,4.02-4.3,4.3.64,8.81,5.15,9.63,9.65.37,2.04.21,4.11.31,6.17.11,2.22.72,4.16,2.39,5.69.19.17.35.38.52.57,1.64,1.77,3.38,3.42,5.42,4.72.55.35,1.14.72,1.89.61-.11-.53-.51-.74-.81-1.03-2.03-1.89-3.75-4.01-5.07-6.45-.14-.27-.33-.6-.09-.88.27-.3.6-.07.87.05,1.47.64,2.88,1.42,4.24,2.27,4.75,2.96,9.63,5.66,14.74,7.93,1.8.8,3.62,1.6,5.58,1.95.26.05.54.2.83-.07-2.38-.64-4.54-1.73-6.7-2.82-3.74-1.88-7.4-3.9-10.78-6.38-2.75-2.02-5.23-4.36-7.71-6.7-2.1-1.98-3.71-4.26-4.44-7.11-.7-2.73-2.48-4.75-4.62-6.45-1.09-.86-1.8-1.9-2.13-3.22-.18-.72-.37-1.44-.49-2.18-.86-5.54-.98-11.11-.74-16.7.22-5.08.86-10.09,2.04-15.04,1.55-6.5,3.98-12.65,7.13-18.54,3.39-6.33,7.53-12.09,12.57-17.2,2.37-2.41,4.79-4.76,7.34-6.98,3.11-2.71,6.34-5.26,9.76-7.58,4.17-2.82,8.62-5.11,13.22-7.11,6.58-2.86,13.34-5.17,20.33-6.81,2.29-.54,4.62-.83,6.91-1.31h6.19c1.78.46,3.37,1.21,4.64,2.61,1.05,1.16,1.44,2.44,1.2,3.95-.08.51-.16,1.02-.23,1.53-.03.22-.15.49.06.65.21.17.43-.02.64-.11,1.49-.66,2.95-1.41,4.48-1.98,4.73-1.75,9.58-2.46,14.58-1.34,4.75,1.07,7.21,5.48,5.63,10.08-.7,2.05.56,3.56,2.7,3.22,1.64-.26,3.27-.59,4.91-.84,4.97-.76,9.09,2.27,10.92,6.31.89,1.97,1.05,4.03.86,6.14-.08.93-.55,1.67-1.17,2.33-1.08,1.15-2.26,2.2-3.5,3.17-.52.41-.5.65-.02,1.12,1.36,1.3,2.88,2.45,4.02,3.99,1.83,2.48,1.86,4.76.07,7.09-2,2.6-4.9,3.5-7.59,2.41-1.55-.63-2.79-1.66-3.99-2.78-3.02-2.81-2.07-2.27-5.58-1.3-1.24.34-2.46.76-3.7,1.11-3.4.96-5.36.27-7.46-2.57-1.17-1.59-2.22-3.27-3.61-4.69-1.14-1.16-1.34-1.18-2.86-.6-.95.37-1.76.96-2.6,1.5-2.23,1.43-4.44,1.52-6.67,0-1.47-1-3.11-1.44-4.89-1.27-.37.03-.74.11-1.09.23-1.82.65-2.13,1.34-1.41,3.14.62,1.54,1.31,3.05,1.6,4.71.52,3.03-.8,5.53-3.83,7.18-2.32,1.26-4.97.83-7.12-1.15-1.07-.98-1.85-2.18-2.53-3.45-1.47-2.73-3.07-3.32-6-2.26-2.28.83-4.05,2.33-5.54,4.2-3.99,5.03-4.95,10.82-3.97,16.96,1.53,9.65,7.03,16.39,15.72,20.63,1.31.64,2.64,1.26,4.04,1.68,2.03.61,3.31.2,4.61-1.47,1.76-2.27,3.26-4.7,4.3-7.4.7-1.82,1.23-3.69,1.75-5.57.09-.34.04-.85.49-.92.48-.07.64.43.82.76,1.99,3.72,4.73,6.87,7.55,9.96,3.92,4.3,8.75,7.23,13.97,9.63,4.38,2.01,9,3.39,13.49,5.11.51.19,1,.43,1.48.69.68.36.71.67.07,1.12-.92.63-1.86,1.24-2.84,1.78-5.11,2.85-9.97,6.09-14.88,9.25-7.78,5.02-15.75,9.7-24.03,13.85-6.56,3.29-13.28,6.21-20.23,8.57-7.84,2.66-15.87,4.41-24.15,5.06-3.26.25-6.52.41-9.78.42-5.59.02-11.15-.36-16.68-1.01,1.37,1.41,2.78,2.77,4.24,4.08,5.65.56,11.32.75,17.01.49,7.31-.33,14.5-1.56,21.61-3.33,6.46-1.61,12.79-3.6,18.91-6.23,5.93-2.55,11.6-5.6,17.14-8.9,6.87-4.08,13.51-8.53,20.13-13,5.63-3.8,11.36-7.43,17.41-10.53,6.49-3.33,13.32-5.72,20.53-6.86,4.6-.73,9.24-.6,13.88-.32,1.07.07,2.14.16,3.2.28,1.33-6.19,2.03-12.6,2.03-19.19C181.93,40.73,141.2,0,90.96,0S0,40.73,0,90.96c0,16.57,4.44,32.11,12.18,45.5.15.14.31.28.47.42Zm124.25-63.62c-2.98-.05-5.33-2.41-5.27-5.31.05-2.59,2.04-4.78,4.34-4.75,2.65.03,5.61,2.78,5.54,5.16-.07,2.54-2.32,4.93-4.61,4.9Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m136.19,66.88c-.66-.02-1.22.61-1.23,1.38-.01.77.45,1.27,1.18,1.28.76.01,1.38-.54,1.38-1.22,0-.69-.67-1.42-1.33-1.44Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m141.03,38.63c-1.17.02-1.96.86-1.93,2.05.03,1.16,1.05,2.05,2.32,2.03,1.06-.02,1.95-.96,1.91-2.02-.05-1.18-1.05-2.08-2.3-2.06Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m139.99,56.99c0,1.03,1,2.06,2.03,2.06,1,0,1.97-1.01,2.01-2.08.04-1.07-.62-1.66-1.91-1.68-1.3-.02-2.12.63-2.13,1.71Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m123.31,55.34c-.03.9.96,1.92,1.86,1.92.79,0,1.5-.83,1.51-1.77.01-1.07-.65-1.99-1.45-2.03-.86-.04-1.89.98-1.92,1.88Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m140.53,165.86c-5.62,3.1-11.4,5.87-17.37,8.24-4.23,1.68-8.47,3.33-12.87,4.56-.47.13-.95.21-1.43.3-.19.04-.45.12-.51-.14-.06-.24.2-.32.37-.41,1.07-.55,2.21-.95,3.35-1.33,9.39-3.19,18.08-7.78,26.41-13.09,6.29-4.01,12.21-8.53,18.12-13.04,2.03-1.55,4.13-2.98,6.29-4.3.59-.76,1.17-1.54,1.74-2.32-5.31,2.7-10.44,5.75-15.37,9.15-6.8,4.69-13.81,9.01-21.24,12.64-9.54,4.66-19.44,8.28-29.84,10.44-4.65.96-9.33,1.83-14.06,2.3-.51.05-1.03.05-1.54.06-.14,0-.31,0-.36-.16-.07-.24.14-.29.3-.33.67-.15,1.34-.32,2.02-.43,9.59-1.43,18.9-3.86,27.86-7.59,6.89-2.86,13.45-6.36,19.75-10.38,6.14-3.92,11.76-8.55,17.61-12.87,5.75-4.24,11.73-8.11,18.27-11.06.84-.38,1.69-.72,2.54-1.07.26-.47.52-.95.78-1.43-4.26,1.34-8.37,3.11-12.38,5.15-7.93,4.02-15.2,9.03-22.04,14.69-3.95,3.27-7.97,6.45-12.58,8.79-7.27,3.69-14.84,6.63-22.71,8.79-7.17,1.97-14.46,3.25-21.85,4.05-6.94.75-13.9.57-20.86.53-.16,0-.35.04-.58-.28,1.14-.09,2.16-.18,3.18-.24,6.43-.33,12.87-.56,19.25-1.58,4.76-.76,9.41-1.99,14.05-3.27,5.36-1.49,10.63-3.22,15.69-5.56,5.6-2.59,10.91-5.69,16.13-8.97,2.16-1.35,4.33-2.7,6.34-4.27.09-.07.16-.15.17-.35-1.17.68-2.33,1.39-3.51,2.04-6.44,3.57-13.05,6.8-19.88,9.56-9.3,3.76-18.88,6.54-28.78,8.19-4.52.75-9.07,1.24-13.65,1.51-4.15.24-8.3.23-12.45.09-1.6-.05-3.2-.15-4.8-.27,12.3,6.2,26.19,9.7,40.91,9.7,22.21,0,42.56-7.96,58.35-21.18-2.89,1.78-5.81,3.49-8.78,5.12Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m94.4,61.41c.02-1.12-.69-1.92-1.71-1.94-1.51-.03-2.69.84-2.73,2.03-.04,1.23,1.06,2.36,2.32,2.38,1.11.02,2.1-1.13,2.13-2.46Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m105.85,48.4c-.02-.84-1.14-2.01-1.93-2.03-.76-.01-1.72,1.09-1.72,1.97,0,.82.82,1.44,1.91,1.44,1.02,0,1.75-.58,1.74-1.37Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m80.44,21.34c1.89-.12,3.74-.38,5.46-1.33-.7-.11-1.4-.21-2.09-.34-1.32-.26-2.49.17-3.59.82-.21.12-.5.28-.38.59.09.24.38.27.6.26Z" />
                        <path class="iconANP iconNormal transition-colors"
                            d="m122.75,25.18c-.97.01-1.89.98-1.87,1.97.02,1.08,1.11,1.99,2.38,1.99,1.02,0,1.76-.77,1.74-1.82-.01-1.11-1.12-2.16-2.25-2.15Z" />
                    </g>
                </svg>
            </section>
        </div>
        <section class='bg-gray-50 dark:bg-gray-900'>
            <div
                class="bg-[#86cbaa] py-8 md:py-auto md:h-40 lg:h-48 2xl:h-64 border-b-2 border-gray-900 flex items-center justify-center md:justify-start mb-20">
                <div class="w-11/12 lg:w-1/2 md:grid grid-cols-5">
                    <h1 id="AnpText"
                        class="MBlack col-span-2  text-[7vw] sm:text-2m md:flex justify-center md:justify-end items-center text-center md:text-end md:pr-4 leading-none">
                        <?php _e("Terrestrial", 'dm' )?>
                    </h1>
                    <div class="col-span-3 flex">
                        <svg class="hidden md:block mr-4" width="22" height="141" viewBox="0 0 22 141" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 70.5L2 100L2 41L22 70.5Z" fill="white" />
                            <path d="M1.5 1V140" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <h1
                            class="MBlack leading-none text-[7vw] text-center md:text-start sm:text-2m flex flex-col justify-center">
                            <?php _e("SURFACE (hectares)", 'dm' )?><br><span id="AreaAnp" class='text-[7vw] sm:text-9m'>23,013,380</span></h1>
                    </div>
                </div>
                <div id="chartAnp" class=''>
                </div>

            </div>
        </section>
    </section>

    <section class="bg-[#1a495a] py-8 grid grid-cols-1 lg:grid-cols-3 text-gray-50 lg:gap-16">
        <div class="">
            <div class="flex items-center justify-center gap-4 h-24">
                <img class="w-20 2xl:w-32" src="https://datamares.org/wp-content/uploads/2023/09/Asset-15.svg" alt="">
                <h1 class="text-8m lg:text-9xl MBlack"><?php _e("YOU MIGHT LIKE", 'dm' )?></h1>
            </div>
            <div class="grid grid-cols-2 gap-4 w-11/12 mx-auto mt-8">
                <div class="">
                    <img class="shadow-md rounded-md w-11/12 mx-auto"
                        src="https://datamares.org/wp-content/uploads/2023/09/image-8.jpg" alt="">
                    <a href="https://datamares.org/preview/dp_anp/?lang=es" target="_blank" rel="noopener noreferrer">
                        <img src="<?php _e("https://datamares.org/wp-content/uploads/2023/11/Asset-19-1.svg", 'dm' )?>"
                            class="hover:scale-105 transition-transform my-8 mx-4" alt="">
                    </a>
                </div>
                <div class="">
                    <img class="shadow-md rounded-md w-11/12 mx-auto"
                        src="https://datamares.org/wp-content/uploads/2023/09/image-9.jpg" alt="">
                    <a href="<?php _e("https://datamares.org/preview/dg_anp_en/", 'dm' )?>" target="_blank"
                        rel="noopener noreferrer">
                        <img src="<?php _e("https://datamares.org/wp-content/uploads/2023/11/Asset-18-1.svg", 'dm' )?>"
                            class="hover:scale-105 transition-transform my-8 mx-4" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="md:col-span-2 w-11/12 lg:w-auto ml-0 mr-auto flex items-end">
            <div class="flex gap-4 justify-evenly">
                <img class="w-20 2xl:w-32" src="https://datamares.org/wp-content/uploads/2023/09/Asset-15.svg" alt="">
                <a href="/" target="_blank" rel="noopener noreferrer">
                    <img class="hover:scale-105 transition-transform w-56 2xl:w-80"
                        src="<?php _e("https://datamares.org/wp-content/uploads/2023/11/Asset-18-2.svg", 'dm' )?>" alt="">
                </a>
            </div>
        </div>
        <div class="col-span-3 px-11">
            <h1 class="text-8m lg:text-9xl MBlack h-24 items-center flex"><?php _e("REFERENCES", 'dm' )?></h1>
            <div class="mt-8 flex flex-col justify-between">
                <div class="">
                    <h1 class="text-4m mt-2 lg:text-4xl 2xl:text-2xl">
                        • CONANP. (2020). Programa Nacional de Áreas Naturales Protegidas 2020-2024. Comisión Nacional
                        de Áreas Naturales Protegidas. Programa Institucional
                        <a class='MBlack text-4m lg:text-4xl 2xl:text-2xl' href='https://www.gob.mx/conanp/documentos/programa-nacional-de-areas-naturales-protegidas-2020-2024'
                            target="_blank">https://www.gob.mx/conanp/documentos/programa-nacional-de-areas-naturales-protegidas-2020-2024</a>.

                    </h1>
                    <h1 class="text-4m mt-2 lg:text-4xl 2xl:text-2xl">
                        • Castañeda Rincón, J. (2006). Las áreas naturales protegidas de México; de su origen precoz a
                        su consolidación tardía. Scripta Nova. Revista electrónica de geografía y ciencias sociales.
                        Barcelona: Universidad de Barcelona. vol. X, núm. 218 (13).
                    </h1>
                    <h1 class="text-4m mt-2 lg:text-4xl 2xl:text-2xl">
                        • Melo Gallegos, C. (2002). Áreas Naturales Protegidas de México en el siglo XX. Instituto de
                        Geografía. UNAM. México.156 pp.
                    </h1>
                    <h1 class="text-4m mt-2 lg:text-4xl 2xl:text-2xl">
                        • Ezcurra, E., O. Aburto-Oropeza, M.A. Carvajal, R. Cudney-Bueno, y J. Torre. (2009). Gulf of
                        California, Mexico. En: K. McLeod and H. Leslie (eds.) Ecosystem-Based Management for the
                        Oceans. Island Press, New York. pp. 227–252.

                    </h1>

                    <a class="MBlack text-4m lg:text-4xl 2xl:text-2xl"
                        href="http://sig.conanp.gob.mx/website/pagsig/info_shape.htm" target="_blank"
                        rel="noopener noreferrer">
                        • http://sig.conanp.gob.mx/website/pagsig/info_shape.htm
                    </a><br>
                    <a class="MBlack text-4m md:text-4xl 2xl:text-2xl" href="https://simec.conanp.gob.mx/numeralia.php"
                        target="_blank" rel="noopener noreferrer">
                        • https://simec.conanp.gob.mx/numeralia.php
                    </a>
                </div>
                <div class="MBlack text-4m lg:text-4xl 2xl:text-2xl mt-24">
                    <?php _e("UPDATE", 'dm' )?>: AGOSTO DE 2023
                </div>
            </div>
        </div>
    </section>

</section>




<?php  } ?>





<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
    integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

	var splide = new Splide('.splide', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 3,
        },
        640: {
            perPage: 2,
        },
        480: {
            perPage: 2,
        },
    },
    perPage: 4,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

splide.mount();



let dataCategory = [
    [18.73, 100 - 18.73],
    [68.26, 100 - 68.26],
    [7.96, 100 - 7.96],
    [0.02, 99.98],
    [4.86, 100 - 4.86],
    [0.17, 100 - 0.17],
];
let areaCategory = [17569683, 64033711, 7469180, 16269, 4563474, 155488]
let textCategory = ['<?php _e("National Parks", 'dm' )?>', '<?php _e("Biosphere Reserves", 'dm' )?>', '<?php _e("Flora and Fauna Protection Area", 'dm' )?>',
    '<?php _e("Natural Monuments", 'dm' )?>', '<?php _e("Natural Resources Protection Area", 'dm' )?>', '<?php _e("Sanctuaries", 'dm' )?>']

let dataAnp = [
    [11.7, 100-11.7],
    [22.47, 100-22.47],
    [32.48, 67.52]
]
let areaAnp = [ 23013380, 70794424, 29542217]
let textAnp = ['<?php _e("Terrestrial", 'dm' )?>', '<?php _e("Marine", 'dm' )?>', 'Marino-costeras']

let dataTpe = [
    [0.004, 100 - 0.004],
    [5.07, 100 - 5.07],
    [3.62, 100 - 3.62],
    [7.04, 100 - 7.04],
    [0.42, 100 - 0.42],
    [6.07, 100 - 6.07],
    [1.44, 100 - 1.44],
    [0.14, 100 - 0.14],
    [0.55, 100 - 0.55],
    [9.13, 100 - 9.13],
    [66.53, 100 - 66.53]
]

let areaTpe = [3619,
    4614205,
    3289962,
    6402137,
    386605,
    5522882,
    1309523,
    124209,
    497869,
    8300983,
    60517335];

let textTpe = [
    'Sin vegetación aparente',
    'Bosques tropicales',
    'Bosques templados',
    'Matorrales',
    'Manglares',
    'Otros humedales',
    'Pastizales',
    'Alta Montaña',
    'Islas',
    'Arrecifes de coral y mar somero',
    'Sistemas pelágicos',
]


let responsivePie = [
    {
        breakpoint: 758,
        options: {
            chart: {
                width: 420,
            },
            stroke: {
                show: true,
                colors: '#1a495a',
                width: 4,
                dashArray: 0,
            },
        },
    },
    {
        breakpoint: 796,
        options: {
            chart: {
                width: 280,
            },
            stroke: {
                show: true,
                colors: '#1a495a',
                width: 4,
                dashArray: 0,
            },
        },
    },
    {
        breakpoint: 951,
        options: {
            chart: {
                width: 350,
            },
        },
    },
    {
        breakpoint: 1151,
        options: {
            chart: {
                width: 350,
            },
        },
    },
    {
        breakpoint: 1451,
        options: {
            chart: {
                width: 380,
            },
            stroke: {
                show: true,
                colors: '#1a495a',
                width: 6,
                dashArray: 0,
            },
        },
    },
    {
        breakpoint: 1670,
        options: {
            chart: {
                width: 430,
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
                width: 450,
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
            colors: '#1a495a',
            width: 10,
            dashArray: 0,
        },
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        chart: {
            width: 480,
            type: 'donut',
        },
        responsive: responsivePie,
        colors: ['#1a495a', '#f9fafb'],
        plotOptions: {
            pie: {
                donut: {
                    size: '55%',
                    labels: {
                        show: true,
                        showAlways: true,
                        total: {
                            label: '',
                            show: true,
                            showAlways: true,
                            color: '#f9fafb',
                            formatter: function (w) {
                                return w.globals.seriesTotals.reduce((a, b) => {
                                    let n = 100 - b
                                    let num = n.toFixed(2);
                                    if (num == "0.00") {
                                        return n.toFixed(3) + '%'
                                    } else {
                                        return n.toFixed(2) + "%"
                                    }
                                }, 0)
                            }
                        }
                    },

                }
            }
        }
    };
    return options;
}

function numberWithCommas(tarjet, x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x)) x = x.replace(pattern, "$1,$2");
    $("#" + tarjet).text(x);
}

var chartCategory = new ApexCharts(
    document.querySelector("#chartCategory"),
    renderChartCategory(dataCategory[0])
);

var chartAnp = new ApexCharts(
    document.querySelector("#chartAnp"),
    renderChartCategory(dataAnp[0])
);



chartCategory.render();
chartAnp.render();

$('.category').click(function (e) {
    $('.iconsS1').find('.iconANP').removeClass('iconActive')
    $('.iconsS1').find('.iconANP').addClass('iconNormal')

    $(this).find('.iconANP').removeClass('iconNormal')
    $(this).find('.iconANP').addClass('iconActive')

    let target = $(this).attr('cat') - 1;
    chartCategory.updateOptions({
        series: dataCategory[target]
    });
    $('#CategoryText').text(textCategory[target]);
    anime.timeline({
        duration: 1000,
        easing: "easeOutExpo",
        round: 1,
        update: function (anim) {
            numberWithCommas("AreaCat", $("#AreaCat").text());
        },
    }).add({ targets: "#AreaCat", innerHTML: [0, areaCategory[target]] }, 0)
});

$('.anp').click(function (e) {
    $('.iconsS2').find('.iconANP').removeClass('iconActive')
    $('.iconsS2').find('.iconANP').addClass('iconNormal')

    $(this).find('.iconANP').removeClass('iconNormal')
    $(this).find('.iconANP').addClass('iconActive')
    let target = $(this).attr('anp') - 1;
    if (target == 2) {
        $('#bgAnp').attr('src', 'https://datamares.org/wp-content/uploads/2023/09/Asset-3-2.svg');
        $('#chartAnp2').addClass('hidden');
        $('#boxAnp').removeClass('pb-32');
    } else {
        $('#bgAnp').attr('src', 'https://datamares.org/wp-content/uploads/2023/09/a.svg');
        $('#chartAnp2').removeClass('hidden');
        $('#boxAnp').addClass('pb-32');
    }
    chartAnp.updateOptions({
        series: dataAnp[target]
    });

    $('#AnpText').text(textAnp[target]);
    anime.timeline({
        duration: 1000,
        easing: "easeOutExpo",
        round: 1,
        update: function (anim) {
            numberWithCommas("AreaAnp", $("#AreaAnp").text());
        },
    }).add({ targets: "#AreaAnp", innerHTML: [0, areaAnp[target]] }, 0)
});



function changeArea(tarjet) {

    $('#areaMap').attr('src', 'https://datamares.org/wp-content/uploads/2023/11/ar' + tarjet + '<?php _e("en", 'dm' )?>.svg');
    $('#regs').attr('src', 'https://datamares.org/wp-content/uploads/2024/04/reg' + tarjet + '<?php _e("en", 'dm' )?>.svg');
    $('#states').attr('src', 'https://datamares.org/wp-content/uploads/2024/04/state' + tarjet + '<?php _e("en", 'dm' )?>.svg');

}
	
</script>


<?php get_footer(); ?>