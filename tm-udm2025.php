<?php get_header();
/*template name: UUPM 2025 */
?>
<style>
	.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}
	.splide__container{box-sizing:border-box;position:relative}.splide__list{backface-visibility:hidden;display:-ms-flexbox;display:flex;height:100%;margin:0!important;padding:0!important}.splide.is-initialized:not(.is-active) .splide__list{display:block}.splide__pagination{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;margin:0;pointer-events:none}.splide__pagination li{display:inline-block;line-height:1;list-style-type:none;margin:0;pointer-events:auto}.splide:not(.is-overflow) .splide__pagination{display:none}.splide__progress__bar{width:0}.splide{position:relative;visibility:hidden}.splide.is-initialized,.splide.is-rendered{visibility:visible}.splide__slide{backface-visibility:hidden;box-sizing:border-box;-ms-flex-negative:0;flex-shrink:0;list-style-type:none!important;margin:0;position:relative}.splide__slide img{vertical-align:bottom}.splide__spinner{animation:splide-loading 1s linear infinite;border:2px solid #999;border-left-color:transparent;border-radius:50%;bottom:0;contain:strict;display:inline-block;height:20px;left:0;margin:auto;position:absolute;right:0;top:0;width:20px}.splide__sr{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.splide__toggle.is-active .splide__toggle__play,.splide__toggle__pause{display:none}.splide__toggle.is-active .splide__toggle__pause{display:inline}.splide__track{overflow:hidden;position:relative;z-index:0}@keyframes splide-loading{0%{transform:rotate(0)}to{transform:rotate(1turn)}}.splide__track--draggable{-webkit-touch-callout:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.splide__track--fade>.splide__list>.splide__slide{margin:0!important;opacity:0;z-index:0}.splide__track--fade>.splide__list>.splide__slide.is-active{opacity:1;z-index:1}.splide--rtl{direction:rtl}.splide__track--ttb>.splide__list{display:block}.splide__arrow{-ms-flex-align:center;align-items:center;background:#ccc;border:0;border-radius:50%;cursor:pointer;display:-ms-flexbox;display:flex;height:2em;-ms-flex-pack:center;justify-content:center;opacity:.7;padding:0;position:absolute;top:50%;transform:translateY(-50%);width:2em;z-index:1}.splide__arrow svg{fill:#000;height:1.2em;width:1.2em}.splide__arrow:hover:not(:disabled){opacity:.9}.splide__arrow:disabled{opacity:.3}.splide__arrow:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide__arrow--prev{left:1em}.splide__arrow--prev svg{transform:scaleX(-1)}.splide__arrow--next{right:1em}.splide.is-focus-in .splide__arrow:focus{outline:3px solid #0bf;outline-offset:3px}.splide__pagination{bottom:.5em;left:0;padding:0 1em;position:absolute;right:0;z-index:1}.splide__pagination__page{background:#ccc;border:0;border-radius:50%;display:inline-block;height:8px;margin:3px;opacity:.7;padding:0;position:relative;transition:transform .2s linear;width:8px}.splide__pagination__page.is-active{background:#fff;transform:scale(1.4);z-index:1}.splide__pagination__page:hover{cursor:pointer;opacity:.9}.splide__pagination__page:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__pagination__page:focus{outline:3px solid #0bf;outline-offset:3px}.splide__progress__bar{background:#ccc;height:3px}.splide__slide{-webkit-tap-highlight-color:rgba(0,0,0,0)}.splide__slide:focus{outline:0}@supports(outline-offset:-3px){.splide__slide:focus-visible{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide__slide:focus-visible{border:3px solid #0bf}}@supports(outline-offset:-3px){.splide.is-focus-in .splide__slide:focus{outline:3px solid #0bf;outline-offset:-3px}}@media screen and (-ms-high-contrast:none){.splide.is-focus-in .splide__slide:focus{border:3px solid #0bf}.splide.is-focus-in .splide__track>.splide__list>.splide__slide:focus{border-color:#0bf}}.splide__toggle{cursor:pointer}.splide__toggle:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide.is-focus-in .splide__toggle:focus{outline:3px solid #0bf;outline-offset:3px}.splide__track--nav>.splide__list>.splide__slide{border:3px solid transparent;cursor:pointer}.splide__track--nav>.splide__list>.splide__slide.is-active{border:3px solid #000}.splide__arrows--rtl .splide__arrow--prev{left:auto;right:1em}.splide__arrows--rtl .splide__arrow--prev svg{transform:scaleX(1)}.splide__arrows--rtl .splide__arrow--next{left:1em;right:auto}.splide__arrows--rtl .splide__arrow--next svg{transform:scaleX(-1)}.splide__arrows--ttb .splide__arrow{left:50%;transform:translate(-50%)}.splide__arrows--ttb .splide__arrow--prev{top:1em}.splide__arrows--ttb .splide__arrow--prev svg{transform:rotate(-90deg)}.splide__arrows--ttb .splide__arrow--next{bottom:1em;top:auto}.splide__arrows--ttb .splide__arrow--next svg{transform:rotate(90deg)}.splide__pagination--ttb{bottom:0;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;left:auto;padding:1em 0;right:.5em;top:0}
	
.col-span-4{grid-column:span 4 / span 4}.mx-4{margin-left:1rem;margin-right:1rem}.mx-auto{margin-left:auto;margin-right:auto}.my-12w{margin-top:.2vw;margin-bottom:.2vw}.my-6{margin-top:1.5rem;margin-bottom:1.5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.ml-auto{margin-left:auto}.mr-0{margin-right:0}.mt-12{margin-top:3rem}.h-full{height:100%}.w-2\/3{width:66.666667%}.w-full{width:100%}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.items-center{align-items:center}.justify-between{justify-content:space-between}.justify-around{justify-content:space-around}.gap-15w{gap:1.5vw}.gap-28w{gap:2.8vw}.gap-8{gap:2rem}.rounded-lg{border-radius:.5rem}.border-4{border-width:4px}.border-blue-400{--tw-border-opacity:1;border-color:rgb(0 48 46 / var(--tw-border-opacity))}.bg-blue-400{--tw-bg-opacity:1;background-color:rgb(0 48 46 / var(--tw-bg-opacity))}.px-4{padding-left:1rem;padding-right:1rem}.py-20w{padding-top:2.1vw;padding-bottom:2.1vw}.text-center{text-align:center}.font-myriad{font-family:myriad-pro,system-ui}.font-myriadCond{font-family:myriad-pro-condensed,system-ui}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-black{font-weight:900}.text-blue-200{--tw-text-opacity:1;color:rgb(22 101 97 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-yellow-100{--tw-text-opacity:1;color:rgb(196 204 45 / var(--tw-text-opacity))}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms}.font-myriad,.font-myriadCond{line-height:1}.wpml-ls-legacy-list-horizontal ul{display:flex;gap:.75rem}.splide__arrow svg{height:2vw;width:2vw;fill:none;stroke:#fff;stroke-width:.3vw}.splide__arrow{height:2vw;width:2vw;background-image:none}.buttonLink{border-radius:1rem;border-width:4px;--tw-border-opacity:1;border-color:rgb(0 48 46 / var(--tw-border-opacity));background:rgb(22,101,97);background:linear-gradient(180deg,rgba(22,101,97,1)0,rgba(158,165,33,1)100%);padding-left:.2vw;padding-right:.2vw;padding-top:.2vw;padding-bottom:.2vw;text-align:center;font-family:myriad-pro-condensed,system-ui;font-weight:700;--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity));transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:150ms;line-height:1}.buttonLink:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}.hover\:scale-\[1\.02\]:hover{--tw-scale-x:1.02;--tw-scale-y:1.02;transform:translate(var(--tw-translate-x),var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))}@media(min-width:768px){.md\:col-span-4{grid-column:span 4 / span 4}.md\:mb-0{margin-bottom:0}.md\:flex{display:flex}.md\:w-1\/2{width:50%}.md\:w-1\/4{width:25%}.md\:w-9\/12{width:75%}.md\:w-\[98\%\]{width:98%}.md\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.md\:flex-row{flex-direction:row}.md\:text-14w{font-size:1.4vw}.md\:text-16w{font-size:1.6vw}}.dark\:text-gray-50:where(.dark,.dark *){--tw-text-opacity:1;color:rgb(249 250 251 / var(--tw-text-opacity))}
	
	.my-8 {
    margin-top: 2.5rem /* 48px */;
    margin-bottom: 2rem /* 48px */;
}
	

	
	@media (min-width: 768px) {
    .md\:mb-0 {
        margin-bottom: 0 !important;
    }
}
	.splide__arrow {
		background:transparent;
	}
	.buttonLink:hover{
		color:white;
	}
	
	
	
	@media (min-width: 768px) {
    .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}
	
	
.right-\[3vw\] {
  right: 3vw;
}
.top-0 {
  top: 0px;
}
.top-\[3vw\] {
  top: 3vw;
}
.z-10 {
  z-index: 900;
}
.z-20 {
  z-index: 20;
}
.m-auto {
  margin: auto;
}


.h-\[95\%\] {
  height: 95%;
}
.h-full {
  height: 100%;
}
.w-\[10vw\] {
  width: 10vw;
}
.w-\[3vw\] {
  width: 3vw;
}
.w-full {
  width: 100%;
}
.scale-105 {
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.bg-gray-900\/80 {
  background-color: rgb(17 24 39 / 0.8);
}
.fill-blue-200 {
  fill: #166561;
}
.stroke-white {
  stroke: #fff;
}
.shadow-2xl {
  --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
  --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.backdrop-blur-lg {
  --tw-backdrop-blur: blur(16px);
  -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.hover\:scale-105:hover {
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.group:hover .group-hover\:scale-105 {
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.group:hover .group-hover\:stroke-yellow-100 {
  stroke: #c4cc2d;
}
@media (min-width: 768px) {

  .md\:w-\[3vw\] {
    width: 3vw;
  }
}
	
	
</style>

<style>
/*! tailwindcss v4.1.5 | MIT License | https://tailwindcss.com */
@layer properties;
@layer theme, base, components, utilities;

@layer theme {

    :root,
    :host {
        --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
            "Courier New", monospace;
        --color-white: #fff;
        --spacing: 0.25rem;
        --default-font-family: var(--font-sans);
        --default-mono-font-family: var(--font-mono);
    }
}

@layer base {

    *,
    ::after,
    ::before,
    ::backdrop,
    ::file-selector-button {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        border: 0 solid;
    }

    html,
    :host {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        tab-size: 4;
        font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
        font-feature-settings: var(--default-font-feature-settings, normal);
        font-variation-settings: var(--default-font-variation-settings, normal);
        -webkit-tap-highlight-color: transparent;
    }

    hr {
        height: 0;
        color: inherit;
        border-top-width: 1px;
    }

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit;
    }

    a {
        color: inherit;
        -webkit-text-decoration: inherit;
        text-decoration: inherit;
    }

    b,
    strong {
        font-weight: bolder;
    }

    code,
    kbd,
    samp,
    pre {
        font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
        font-feature-settings: var(--default-mono-font-feature-settings, normal);
        font-variation-settings: var(--default-mono-font-variation-settings, normal);
        font-size: 1em;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse;
    }

    :-moz-focusring {
        outline: auto;
    }

    progress {
        vertical-align: baseline;
    }

    summary {
        display: list-item;
    }

    ol,
    ul,
    menu {
        list-style: none;
    }

    img,
    svg,
    video,
    canvas,
    audio,
    iframe,
    embed,
    object {
        display: block;
        vertical-align: middle;
    }

    img,
    video {
        max-width: 100%;
        height: auto;
    }

    button,
    input,
    select,
    optgroup,
    textarea,
    ::file-selector-button {
        font: inherit;
        font-feature-settings: inherit;
        font-variation-settings: inherit;
        letter-spacing: inherit;
        color: inherit;
        border-radius: 0;
        background-color: transparent;
        opacity: 1;
    }

    :where(select:is([multiple], [size])) optgroup {
        font-weight: bolder;
    }

    :where(select:is([multiple], [size])) optgroup option {
        padding-inline-start: 20px;
    }

    ::file-selector-button {
        margin-inline-end: 4px;
    }

    ::placeholder {
        opacity: 1;
    }

    @supports (not (-webkit-appearance: -apple-pay-button)) or (contain-intrinsic-size: 1px) {
        ::placeholder {
            color: currentcolor;

            @supports (color: color-mix(in lab, red, red)) {
                color: color-mix(in oklab, currentcolor 50%, transparent);
            }
        }
    }

    textarea {
        resize: vertical;
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-date-and-time-value {
        min-height: 1lh;
        text-align: inherit;
    }

    ::-webkit-datetime-edit {
        display: inline-flex;
    }

    ::-webkit-datetime-edit-fields-wrapper {
        padding: 0;
    }

    ::-webkit-datetime-edit,
    ::-webkit-datetime-edit-year-field,
    ::-webkit-datetime-edit-month-field,
    ::-webkit-datetime-edit-day-field,
    ::-webkit-datetime-edit-hour-field,
    ::-webkit-datetime-edit-minute-field,
    ::-webkit-datetime-edit-second-field,
    ::-webkit-datetime-edit-millisecond-field,
    ::-webkit-datetime-edit-meridiem-field {
        padding-block: 0;
    }

    :-moz-ui-invalid {
        box-shadow: none;
    }

    button,
    input:where([type="button"], [type="reset"], [type="submit"]),
    ::file-selector-button {
        appearance: button;
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto;
    }

    [hidden]:where(:not([hidden="until-found"])) {
        display: none !important;
    }
}

@layer utilities {
    .absolute {
        position: absolute;
    }

    .mx-auto {
        margin-inline: auto;
    }

    .my-\[\.5vw\] {
        margin-block: .5vw;
    }

    .my-\[1vw\] {
        margin-block: 1vw;
    }

    .mt-\[\.5vw\] {
        margin-top: .5vw;
    }

    .mt-\[1vw\] {
        margin-top: 1vw;
    }

    .mt-\[3vw\] {
        margin-top: 3vw;
    }

    .mt-\[4svw\] {
        margin-top: 4svw;
    }

    .mt-\[4vw\] {
        margin-top: 4vw;
    }

    .flex {
        display: flex;
    }

    .table {
        display: table;
    }

    .h-\[5\.6vw\] {
        height: 5.6vw;
    }

    .min-h-screen {
        min-height: 100vh;
    }

    .w-3 {
        width: calc(var(--spacing) * 3);
    }

    .w-3\/6 {
        width: calc(3/6 * 100%);
    }

    .w-\[18vw\] {
        width: 18vw;
    }

    .w-\[21vw\] {
        width: 21vw;
    }

    .w-\[50vw\] {
        width: 50vw;
    }

    .w-\[55vw\] {
        width: 55vw;
    }

    .w-\[70vw\] {
        width: 70vw;
    }

    .w-full {
        width: 100%;
    }

    .border-collapse {
        border-collapse: collapse;
    }

    .resize {
        resize: both;
    }

    .items-center {
        align-items: center;
    }

    .justify-center {
        justify-content: center;
    }

    .border {
        border-style: var(--tw-border-style);
        border-width: 1px;
    }

    .bg-\[\#1f4c5c\] {
        background-color: #1f4c5c;
    }

    .bg-\[\#d3801e\] {
        background-color: #d3801e;
    }

    .bg-\[\#eadbc6\] {
        background-color: #eadbc6;
    }

    .bg-\[d3801e\] {
        background-color: d3801e;
    }

    .bg-white {
        background-color: var(--color-white);
    }

    .py-\[\.5vw\] {
        padding-block: .5vw;
    }

    .py-\[1vw\] {
        padding-block: 1vw;
    }

    .pt-\[1vw\] {
        padding-top: 1vw;
    }

    .pt-\[4vw\] {
        padding-top: 4vw;
    }

    .pb-\[2vw\] {
        padding-bottom: 2vw;
    }

    .pb-\[4vw\] {
        padding-bottom: 4vw;
    }

    .text-\[2\.14vw\] {
        font-size: 2.14vw;
    }

    .underline {
        text-decoration-line: underline;
    }

    .outline {
        outline-style: var(--tw-outline-style);
        outline-width: 1px;
    }
}

@property --tw-border-style {
    syntax: "*";
    inherits: false;
    initial-value: solid;
}

@property --tw-outline-style {
    syntax: "*";
    inherits: false;
    initial-value: solid;
}

@layer properties {
    @supports ((-webkit-hyphens: none) and (not (margin-trim: inline))) or ((-moz-orient: inline) and (not (color:rgb(from red r g b)))) {

        *,
        ::before,
        ::after,
        ::backdrop {
            --tw-border-style: solid;
            --tw-outline-style: solid;
        }
    }
}
</style>

<section class="min-h-screen bg-[#1f4c5c] pt-[1vw]">
        <div class="bg-[#eadbc6] py-[.5vw]">
            <img class="w-[50vw] mx-auto" src="https://datamares.org/wp-content/uploads/2025/05/Recurso-1-6.webp" alt="">
        </div>
        <img class="my-[1vw]" src="https://datamares.org/wp-content/uploads/2025/05/Recurso-2-2.webp" alt="">

        <div class="h-[5.6vw] flex justify-center items-center w-full bg-[#d3801e] " style="padding-top: 5vw;gap: 5vw;">
			<button onclick="showModal()" class="">
				<img class="w-[18vw]" src="https://datamares.org/wp-content/uploads/2025/05/Recurso-2-4.webp">
			</button>
         
        </div>
        <div class="bg-[#eadbc6] pt-[4vw] pb-[4vw]">
            <img class="w-[70vw] mx-auto" src="https://datamares.org/wp-content/uploads/2025/05/Recurso-3.svg" alt="">
        </div>
        <div class="bg-white">
            <img src="https://datamares.org/wp-content/uploads/2025/05/Recurso-4.svg" alt="">
        </div>
	<div class="bg-white pb-[4vw]">
            <img class="w-full " src="https://datamares.org/wp-content/uploads/2025/05/Recurso-1-9.webp">
        </div>
	
    </section>

<div id="tlmodal" class="absolute top-0 h-full w-full backdrop-blur-lg bg-gray-900/80 z-10 hidden">
    <div class="flex md:block gap-10w absolute top-[3vw] right-[3vw]">
        <button onclick="closeModal()" class=" group z-20" aria-label="closeModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-[10vw] md:w-[3vw] fill-blue-200 stroke-white shadow-2xl group-hover:scale-105 group-hover:stroke-yellow-100 transition-all">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
        <a class="hidden" href="https://datamares.org/dwd/semana-literatura-y-ciencia/">
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



    <?php $programfil = get_field('program') ?>
    <img width="447" height="387" class="w-auto h-[95%] m-auto" src="https://datamares.org/wp-content/uploads/2025/06/PROGRAMA-UDM-2025.jpg" alt="" />
</div>

<script>
let modal = document.getElementById("tlmodal");

function showModal() {
	  window.scrollTo(0, 0);
  modal.classList.remove("hidden");
  modal.classList.add("flex");

	// Get the current page scroll position
            scrollTop =
                window.pageYOffset ||
                document.documentElement.scrollTop;
            scrollLeft =
                window.pageXOffset ||
                document.documentElement.scrollLeft,

                // if any scroll is attempted,
                // set this to the previous value
                window.onscroll = function () {
                    window.scrollTo(scrollLeft, scrollTop);
                };
	
	
}

function closeModal() {
  modal.classList.add("hidden");
  modal.classList.remove("flex");
	window.onscroll = function () { };
}
</script>

    <?php get_footer(); ?>