<?php 
 get_header();
/* template name: dataKids*/
 ?>

<?php while (have_posts() ) : the_post(); ?> <?php the_content(); ?> <?php endwhile; ?>

<style>
.slick-list,
.slick-slide {
    height: auto !important;
}

.scrollBar-G::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
}

.scrollBar-G::-webkit-scrollbar {
    border-radius: 10px;
    width: 10px;
}

.scrollBar-G::-webkit-scrollbar-thumb {
    border-radius: 10px;
}

img.lazy {
    opacity: 0;
}

img:not(.initial) {
    transition: opacity 1s;
}

img.initial,
img.loaded,
img.error {
    opacity: 1;
}

img:not([src]) {
    visibility: hidden;
}

.grid-cols-3 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
}

.img_wrapper {
    position: relative;
    float: left;
    text-align: center;
}
	@media (min-width: 1024px){
.lg\:w-1\/3 {
    width: 70.333333%;
	}}
	
	.rotate-180 {
		--tw-rotate: 0;}
</style>

<!-- Banner -->
<div class="mb-8 lg:mb-12">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
</div>

<?php $images = get_field('convocatorias');
if( $images ): ?>
<div class='w-4/6 my-8 mx-auto grid grid-cols-3 gap-6'>
    <?php $i = 1; foreach( $images as $image ): ?>
    <img id='<?php echo $i ?>'
        class='conv w-60 hover:scale-105 hover:shadow-xl transition-all rounded-2xl mx-auto dark:shadow-gray-800 drop-shadow-sm '
        src="<?php echo esc_url($image['url']); ?>" alt="">
    <?php $i++; endforeach; ?>
</div>
<?php endif; ?>

<?php if( have_rows('contenido') ): ?>
<section id='convs'>
    <?php $conv =1; while( have_rows('contenido') ): the_row(); 
        $type = get_sub_field('convocatoria_o_ganadores');
        ?>
    <div id='conv<?php echo $conv ?>' class='last:block hidden'>
        <?php if( $type == 'Convocatoria'): 
                $featured_posts = get_sub_field('convocatoria');
                ?>
        <?php if( $featured_posts ): ?>
        <div class="w-11/12 md:w-2/5 mx-auto">
            <?php foreach( $featured_posts as $featured_post ): 
                            $preview = get_permalink( $featured_post->ID );
                            $img = get_field( 'preview', $featured_post->ID );
                            $downLoad = get_field( 'pdf', $featured_post->ID );
                            $title = get_the_title( $featured_post->ID );
                            ?>
            <div data-aos="fade-up">
                <h1 class='text-4xl text-secondary isBold text-center my-4'>Convocatoria
                    <?php echo esc_html( $title ); ?>
                </h1>
                <a href="<?php echo esc_url( $preview ); ?>"><img class='rounded-lg' src="https://datamares.org/wp-content/uploads/2024/03/dataKids-2024.jpg"
                        alt=""></a>
                <div class="my-4 flex justify-evenly">
                    <div id='fb-share' onClick="shareF('<?php echo esc_url( $preview ); ?>')"
                        class="flex cursor-pointer bg-[#4292FF] rounded-md w-[6.5rem] items-center p-1 hover:scale-105 hover:shadow-xl transition-all">
                        <img class='w-2 ml-1' src="http://dm.local/wp-content/uploads/2023/03/Vector-F.svg" alt="">
                        <h1 class='text-gray-50 mx-auto text-sm isBold'>Facebook</h1>
                    </div>
                    <a class="flex cursor-pointer bg-secondary rounded-md w-[6.5rem] items-center p-1 hover:scale-105 hover:shadow-xl transition-all"
                        href="<?php echo $downLoad ?>">
                        <img class='w-[.8rem] ml-1' src="http://dm.local/wp-content/uploads/2023/03/Vector.svg" alt="">
                        <h1 class='text-gray-50 mx-auto text-sm isBold'>Download</h1>
                    </a>
                    <div id='tw-share' onClick="shareT('<?php echo esc_url( $preview ); ?>')"
                        class=" flex cursor-pointer bg-[#1d9bf0] rounded-md w-[6.5rem] items-center p-1 hover:scale-105 hover:shadow-xl transition-all">
                        <img class='w-4 ml-1' src="http://dm.local/wp-content/uploads/2023/03/XMLID_826_.svg" alt="">
                        <h1 class='text-gray-50 mx-auto text-sm isBold'>Twitter</h1>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php endif;?>

        <?php if( $type == 'Ganadores'): ?>
        <div class="grid grid-cols-1 lg:grid-cols-2 w-11/12 mx-auto my-8">
            <div class="">
                <h1 class='text-2xl text-center text-secondary my-4 isBlack'>Ganadores</h1>
                <div class="grid grid-cols-1 gap-y-4">
                    <?php 
                        $ganadores = get_sub_field('ganadores');
                        if( $ganadores ): ?>
                    <?php foreach( $ganadores as $ganador ): ?>
                    <img src="<?php bloginfo('template_url'); ?>/resources/placeholder.svg"
                        class='lazy h-52 2xl:h-80 rounded-xl mx-auto' data-src="<?php echo esc_url($ganador['url']); ?>"
                        alt="">
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <h1 class='text-2xl text-center text-secondary my-4 isBlack'>Galería</h1>
                <div id="gallery<?php echo $conv ?>"
                    class="scrollBar-G grid grid-cols-1 md:grid-cols-2 gap-y-4 h-[41rem] 2xl:h-[62rem] overflow-y-scroll snap-y scroll-smooth">
                    <?php 
                        $galeria = get_sub_field('galeria');
                        if( $galeria ): ?>
                    <?php $M=0; foreach( $galeria as $galeriaImg ): ?>
                    <img id='<?php echo $M ?>' class='lazy setG h-52 2xl:h-80 mx-auto snap-start rounded-xl'
                        data-src="<?php echo esc_url($galeriaImg['url']); ?>" alt="">
                    <?php $M++; endforeach; ?>
                    <?php endif; ?>


                    <!-- Galeria popUp -->
                    <?php 
                        $galeria = get_sub_field('galeria');
                        if( $galeria ): ?>
                    <div class="modal">
                        <div class="modal-background close"></div>
                        <div class="modal-content w-11/12 mx-auto">
                            <div class="slideA w-2/3 mx-auto">
                                <?php $A=0; foreach( $galeria as $galeriaImg ): ?>
                                <div class="">
                                    <img id='A<?php echo $A ?>'
                                        class='lazy h-auto w-[40rem] mx-auto snap-start rounded-xl'
                                        data-src="<?php echo esc_url($galeriaImg['url']); ?>" alt="">
                                </div>
                                <?php $A++; endforeach; ?>
                            </div>
                            <div class="slideB w-2/3 mx-auto my-4">
                                <?php $B=0; foreach( $galeria as $galeriaImg ): ?>
                                <div class="">
                                    <img id='B<?php echo $B ?>' class='w-40 lazy h-auto mx-auto snap-start rounded-sm'
                                        data-src="<?php echo esc_url($galeriaImg['url']); ?>" alt="">
                                </div>
                                <?php $B++; endforeach; ?>
                            </div>
                        </div>
                        <button class="modal-close close is-large" aria-label="close"></button>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <?php endif;?>


    </div>
    <?php $conv++; endwhile; ?>
</section>
<?php endif; ?>

<h1 class='text-3xl text-secondary isBold text-center mb-8 mt-12'>PARA FESTEJAR A LAS NIÑAS Y NIÑOS</h1>

<?php if( have_rows('dataposters') ): ?>
<section class="slides w-5/6 lg:w-1/3 mx-auto flex flex-col gap-4 md:flex-row justify-evenly my-4">
    <?php $dp=0; while( have_rows('dataposters') ): the_row(); 
        $title = get_sub_field('title');
        ?>
    <button id="<?php echo $dp++; ?>" class='p-2 bg-primary dp text-gray-50 rounded-md isBold hover:scale-105 transition-transform'>
        <?php echo $title ?>
    </button>
    <?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('dataposters') ): ?>
<div class="dataPosters">
    <?php $dp=0;  while( have_rows('dataposters') ): the_row(); 
        $title = get_sub_field('title');
        $img = get_sub_field('img');
        $downLoad = get_sub_field('downloadlink');
        $prev = get_sub_field('prev');
        $subtext = get_sub_field('subtext');
        ?>
    <section class="dP<?php echo $dp++; ?> my-4 w-11/12 mx-auto last:flex hidden flex-col gap-4  2xl:flex-row">
        <div class="w-11/12 md:w-3/4 flex mx-auto justify-center">
            <div class="w-full md:w-5/6 img_wrapper mt-0 mx-auto">
                <img class='zoomI' data-big='<?php echo $img ?>' src="<?php echo $img ?>" alt="">
            </div>
        </div>
        <div class="w-11/12 2xl:w-1/4 mt-2 mx-auto 2xl:mx-0">
            <div class="w-2/3 md:w-1/3  2xl:mx-0 2xl:w-2/3 flex flex-col gap-4">
                <a href="<?php echo $downLoad ?>" target="_blank" rel="noopener noreferrer"
                    class='p-2 w-full text-center bg-primary text-gray-50 rounded-md isBold hover:scale-105 transition-transform'>
                    Download
                </a>
                <div id='fb-share' onClick="shareF('<?php echo $downLoad; ?>')"
                    class="flex cursor-pointer bg-[#4292FF] rounded-md  items-center p-2 hover:scale-105 hover:shadow-xl transition-all">
                    <img class='w-2 ml-4 absolute' src="http://dm.local/wp-content/uploads/2023/03/Vector-F.svg" alt="">
                    <h1 class='text-gray-50 mx-auto isBold'>Facebook</h1>
                </div>
                <div id='tw-share' onClick="shareT('<?php echo $downLoad; ?>')"
                    class=" flex cursor-pointer bg-[#1d9bf0] rounded-md items-center p-2 hover:scale-105 hover:shadow-xl transition-all">
                    <img class='w-4 ml-4 absolute' src="http://dm.local/wp-content/uploads/2023/03/XMLID_826_.svg"
                        alt="">
                    <h1 class='text-gray-50 mx-auto isBold'>Twitter</h1>
                </div>
                <div class="text-gray-50">
                    <h1 class='text-gray-900 dark:text-gray-50'>Zoom level:</h1>
                    <div class="flex gap-4">
                        <button onClick="changeLen(1)"
                            class='p-2 w-10 flex justify-center items-center h-10 bg-secondary2 isBold text-center rounded-md hover:scale-105 hover:shadow-xl transition-all'>
                            1
                        </button>
                        <button onClick="changeLen(2)"
                            class='p-2 w-10 flex justify-center items-center h-10 bg-secondary2 isBold text-center rounded-md hover:scale-105 hover:shadow-xl transition-all'>
                            2
                        </button>
                        <button onClick="changeLen(3)"
                            class='p-2 w-10 flex justify-center items-center h-10 bg-secondary2 isBold text-center rounded-md hover:scale-105 hover:shadow-xl transition-all'>
                            3
                        </button>
                    </div>
                </div>
            </div>
            <h1 class='isBold text-gray-900 text-2xl mt-4 dark:text-gray-50'><?php echo $subtext ?></h1>
        </div>
    </section>
    <?php endwhile; ?>

    <?php endif; ?>
</div>


<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-text="Mira este nuevo #dataPoster echo por @dataMares" data-url="https://datamares.org/preview/dp_megalodon/?lang=es" class="twitter-share-button" data-related="@dataMares" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php get_footer(); ?>

<script>
/*! jquery.mlens.js - magnifying lens jQuery plugin for images by Federica Sibella (@musings.it) - Double licensed MIT and GPLv3 */
!(function (e) {
  function t(e) {
    if ("string" == typeof e) {
      var t = e.indexOf("_");
      -1 != t && (e = e.substr(t + 1));
    }
    return e;
  }
  function i(e, t) {
    if ("string" == typeof e) {
      var i = e.indexOf(t);
      if (-1 != i) return !0;
    }
    return !1;
  }
  var n = [],
    r = 0,
    o = {
      init: function (t) {
        var o = {
            lensShape: "square",
            lensSize: [100, 100],
            borderSize: 4,
            borderColor: "#888",
            borderRadius: 0,
            imgSrc: "",
            imgSrc2x: "",
            lensCss: "",
            imgOverlay: "",
            overlayAdapt: !0,
            zoomLevel: 1,
            responsive: !0,
          },
          a = e.extend({}, o, t),
          s = "100px",
          d = "100px";
        if (i(a.lensSize, ",")) {
          var u = a.lensSize.indexOf(","),
            l = [];
          (l[0] = a.lensSize.substring(0, u)),
            (l[1] = a.lensSize.substring(u + 1)),
            (a.lensSize = l);
        }
        this.each(function () {
          var t = e(this),
            u = t.data("mlens"),
            l = e(),
            c = e(),
            g = e(),
            p = e(),
            h = t.attr("src"),
            m = "auto";
          ("number" != typeof a.zoomLevel || a.zoomLevel <= 0) &&
            (a.zoomLevel = o.zoomLevel);
          var v = new Image();
          "" !== a.imgSrc2x && window.devicePixelRatio > 1
            ? ((h = a.imgSrc2x),
              (v.onload = function () {
                (m = String(parseInt(this.width / 2) * a.zoomLevel) + "px"),
                  l.css({ backgroundSize: m + " auto" }),
                  p.css({ width: m });
              }),
              (v.src = h))
            : ("" !== a.imgSrc && (h = a.imgSrc),
              (v.onload = function () {
                (m = String(parseInt(this.width) * a.zoomLevel) + "px"),
                  l.css({ backgroundSize: m + " auto" }),
                  p.css({ width: m });
              }),
              (v.src = h)),
            jQuery.isArray(a.lensSize) === !0
              ? ((s =
                  i(a.lensSize[0], "%") || i(a.lensSize[0], "px")
                    ? String(a.lensSize[0])
                    : String(a.lensSize[0]) + "px"),
                (d =
                  i(a.lensSize[1], "%") || i(a.lensSize[1], "px")
                    ? String(a.lensSize[1])
                    : String(a.lensSize[1]) + "px"))
              : ((s =
                  i(a.lensSize, "%") || i(a.lensSize, "px")
                    ? String(a.lensSize)
                    : String(a.lensSize) + "px"),
                (d = s));
          var f =
              "background-position: 0px 0px;width: " +
              s +
              ";height: " +
              d +
              ";float: left;display: none;border: " +
              String(a.borderSize) +
              "px solid " +
              a.borderColor +
              ";background-repeat: no-repeat;position: absolute;",
            S =
              "position: absolute; width: 100%; height: 100%; left: 0; top: 0; background-position: center center; background-repeat: no-repeat; z-index: 1;";
          switch (
            (a.overlayAdapt === !0 &&
              (S +=
                "background-position: center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"),
            a.lensShape)
          ) {
            case "square":
              (f = f + "border-radius:" + String(a.borderRadius) + "px;"),
                (S = S + "border-radius:" + String(a.borderRadius) + "px;");
              break;
            case "":
              (f = f + "border-radius:" + String(a.borderRadius) + "px;"),
                (S = S + "border-radius:" + String(a.borderRadius) + "px;");
              break;
            case "circle":
              (f += "border-radius: 50%;"), (S += "border-radius: 50%;");
              break;
            default:
              (f = f + "border-radius:" + String(a.borderRadius) + "px;"),
                (S = S + "border-radius:" + String(a.borderRadius) + "px;");
          }
          return (
            t.wrap("<div id='mlens_wrapper_" + r + "' />"),
            (g = t.parent()),
            a.responsive === !0
              ? t.css({ width: "100%" })
              : g.css({ width: t.width() }),
            (l = e(
              "<div id='mlens_target_" +
                r +
                "' style='" +
                f +
                "' class='" +
                a.lensCss +
                "'>&nbsp;</div>"
            ).appendTo(g)),
            l.css({
              backgroundImage: "url('" + h + "')",
              backgroundSize: m + " auto",
              cursor: "none",
            }),
            (p = e(
              "<img style='display:none;width:" +
                m +
                ";height:auto;max-width:none;max-height;none;' src='" +
                h +
                "' />"
            ).appendTo(g)),
            "" !== a.imgOverlay &&
              ((c = e(
                "<div id='mlens_overlay_" +
                  r +
                  "' style='" +
                  S +
                  "'>&nbsp;</div>"
              )),
              c.css({
                backgroundImage: "url('" + a.imgOverlay + "')",
                cursor: "none",
              }),
              c.appendTo(l)),
            t.attr("data-id", "mlens_" + r),
            l.mousemove(function (i) {
              e.fn.mlens("move", t.attr("data-id"), i);
            }),
            t.mousemove(function (i) {
              e.fn.mlens("move", t.attr("data-id"), i);
            }),
            l.on("touchmove", function (i) {
              i.preventDefault();
              var n =
                i.originalEvent.touches[0] || i.originalEvent.changedTouches[0];
              e.fn.mlens("move", t.attr("data-id"), n);
            }),
            t.on("touchmove", function (i) {
              i.preventDefault();
              var n =
                i.originalEvent.touches[0] || i.originalEvent.changedTouches[0];
              e.fn.mlens("move", t.attr("data-id"), n);
            }),
            l.hover(
              function () {
                e(this).show();
              },
              function () {
                e(this).hide();
              }
            ),
            t.hover(
              function () {
                l.show();
              },
              function () {
                l.hide();
              }
            ),
            l.on("touchstart", function (t) {
              t.preventDefault(), e(this).show();
            }),
            l.on("touchend", function (t) {
              t.preventDefault(), e(this).hide();
            }),
            t.on("touchstart", function (e) {
              e.preventDefault(), l.show();
            }),
            t.on("touchend", function (e) {
              e.preventDefault(), l.hide();
            }),
            t.data("mlens", {
              image: t,
              settings: a,
              target: l,
              imageTag: p,
              imgSrc: h,
              imgWidth: m,
              imageWrapper: g,
              overlay: c,
              instance: r,
              lensSizeHoriz: s,
              lensSizeVert: d,
            }),
            (u = t.data("mlens")),
            (n[r] = u),
            r++,
            n
          );
        });
      },
      move: function (e, i) {
        e = t(e);
        var r = n[e],
          o = r.image,
          a = r.target,
          s = r.imageTag,
          d = o.offset(),
          u = parseInt(i.pageX - d.left),
          l = parseInt(i.pageY - d.top),
          c = s.width() / o.width(),
          g = s.height() / o.height();
        return (
          u > 0 &&
            l > 0 &&
            u < o.width() &&
            l < o.height() &&
            ((u = String(-((i.pageX - d.left) * c - a.width() / 2))),
            (l = String(-((i.pageY - d.top) * g - a.height() / 2))),
            a.css({ backgroundPosition: u + "px " + l + "px" }),
            (u = String(i.pageX - d.left - a.width() / 2)),
            (l = String(i.pageY - d.top - a.height() / 2)),
            a.css({ left: u + "px", top: l + "px" })),
          (r.target = a),
          (n[e] = r),
          n
        );
      },
      update: function (t) {
        e(this).mlens("destroy"), e(this).mlens("init", t);
      },
      destroy: function () {
        var i = t(e(this).attr("data-id")),
          r = n[i];
        r.target.remove(),
          r.imageTag.remove(),
          r.image.unwrap(),
          r.overlay.remove(),
          e.removeData(r, "mlens"),
          this.unbind(),
          (this.element = null);
      },
    };
  e.fn.mlens = function (t) {
    return o[t]
      ? o[t].apply(this, Array.prototype.slice.call(arguments, 1))
      : "object" != typeof t && t
      ? void e.error("Method " + t + " does not exist on jQuery.mlens")
      : o.init.apply(this, arguments);
  };
})(jQuery);
</script>

<script>
$('.setG').click(function(e) {
    let tarjet = $(this).attr('id');
    $('.modal').addClass('is-active');
    $('.slideA').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrows: false,
        fade: true,
        asNavFor: '.slideB'
    });
    $('.slideB').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slideA',
        prevArrow: '<button class="slick-prev -left-11 slick-arrow absolute top-[3.3rem]" aria-label="Previous" type="button" style="z-index: 5;"><svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class="fill-primary" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="fill-primary" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',
        nextArrow: '<button class="slick-next -right-11 rotate-180 slick-arrow absolute top-[3.3rem]" aria-label="Next" type="button" style=""><svg class="icn-next w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.6 40.94"><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><polygon class=" fill-primary" points="20.47 0 25.94 5.46 10.93 20.47 25.94 35.48 20.47 40.94 0 20.47 20.47 0"></polygon><polygon class="fill-primary" points="36.13 0 41.59 5.46 26.59 20.47 41.59 35.48 36.13 40.94 15.66 20.47 36.13 0"></polygon></g></g></svg></button>',
        focusOnSelect: true
    });
    $('.slideA').slick('slickGoTo', tarjet);
});

$('.close').click(function(e) {
    $('.modal').removeClass('is-active');
    $('.slideA').slick('unslick');
    $('.slideB').slick('unslick');
});



$('.conv').click(function (e) { 
    let tarjet = $(this).attr('id');
    $('#conv'+tarjet).appendTo('#convs');
});
</script>


<script type="text/javascript">
$(document).ready(function() {
    $('.zoomI').mlens({
        "imgSrc": $(this).attr("data-big"),
        "lensSize": ["200", "200"],
        "lensShape": "circle"
    });
});

function shareF(url) {
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
        'facebook-share-dialog',
        'width=800,height=600'
    );
}


function changeLen(zoom) {
    $('.zoomI').mlens({
        "imgSrc": $(this).attr("data-big"),
        "lensSize": ["200", "200"],
        "lensShape": "circle",
        "zoomLevel": zoom,
    });
}

$('.dp').click(function(e) {
    let tarjet = $(this).attr('id');
    $('.dP' + tarjet).appendTo('.dataPosters');

});

function shareT(url) {
    window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(url) + '&text=dataPoster');
}
</script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
<script>
var lazyLoadInstance = new LazyLoad({});
</script>


<script>
$(".otgs-development-site-front-end").remove();
</script>