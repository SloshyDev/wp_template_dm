<?php get_header();?>
<?php /*template name:Ficha*/ ?>

<div class="fab-container">
    <div class="fab fab-icon-holder">
        <img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/Float-Menu.svg" alt="">
        <h1 class="is-size-6 has-text-centered">Menu</h1>
    </div>
    <ul class="fab-options">
        <li>
            <div class="fab-icon-holder">
                <a href="#especie"> <img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/FM-1.svg"
                        title="Idenficacion Rapida" alt=""></a>
            </div>
        </li>
        <li>
            <div class="fab-icon-holder">
                <a href="#distribucion"><img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/FM-2.svg"
                        title="Distribucion" alt=""></a>
            </div>
        </li>
        <li>
            <div class="fab-icon-holder">
                <a href="#fish"> <img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/FM-3.svg"
                        title="Actividad Pesquera" alt=""></a>

            </div>
        </li>
        <li>
            <div class="fab-icon-holder">
                <a href="#sc"><img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/FM-4.svg"
                        title="Socio-Economico" alt=""></a>
            </div>
        </li>
        <li>
            <div class="fab-icon-holder">
                <a href="#mi"><img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/FM-5.svg"
                        title="Instrumentos de manejo" alt=""></a>

            </div>
        </li>
        <li>
            <div class="fab-icon-holder">
                <a href="#rf"> <img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/FM-6.svg"
                        title="Referencias" alt="">
                </a>
            </div>
        </li>
        <li>
            <div class="fab-icon-holder">
                <a href="#frd"><img src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/FM-7.svg"
                        title="Lecturas Adicionales" alt=""></a>

            </div>
        </li>

    </ul>
</div>

<div class="columns is-multiline p-0 m-0" id="especie">
    <h1 class="is-size-4 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
        <?php echo get_field('titulo'); ?></h1>
    <div class="especie column is-6 ml-auto">
        <img onclick="modal('<?php echo get_field('img-especie'); ?>','<?php echo get_field('texto-especie');?>');"
            class="is-clickable modal-launch m-auto" src="<?php echo get_field('img-especie'); ?>" alt="">
        <h1 class="is-size-6 has-text-weight-medium"><?php echo get_field('texto-especie');?></h1>
    </div>
    <div class="column is-4 mr-auto">
        <h1
            class="is-size-6 has-text-weight-semibold has-text-primary my-2 column is-full heading-block has-text-centered">
            <?php echo _e('Quick identification','dm'); ?></h1>
        <?php if( have_rows('identificacion-rapida') ): $i=0; ?>
        <div class="columns ml-3 is-multiline control">
            <?php while( have_rows('identificacion-rapida') ): the_row(); ?>
            <label class="column py-0 is-full radio quick-id is-size-6" for="pm-quick-id-<?php echo $i; ?>">
                <?php echo get_sub_field('ip-titulo'); ?>
                <input id="I<?php echo $i ?>" value="" type="radio" name="pm-quick-id-group"
                    onclick="getSelectedCheckbox(this.id,'C','.pm-radios-panel-I')"><span class="checkmark S"> </span>
                </input>
            </label>
            <?php   if ($i==0) { ?>
            <script>
            document.getElementById("I<?php echo $i ?>").checked = true;
            </script>
            <?php } $i++; endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if( have_rows('identificacion-rapida') ): $i=0; ?>
        <?php while( have_rows('identificacion-rapida') ): the_row(); ?>

        <div class="pm-radios-panel-I is-hidden " id="CI<?php echo $i?>">
            <img type="ra" alt="<?php echo $i; ?>"
                onclick="modal('<?php echo get_sub_field('ip-img'); ?>','<?php echo get_sub_field('ip-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src="<?php echo get_sub_field('ip-img'); ?>" alt="">
            <h1 class="is-size-6 has-text-weight-medium"> <?php echo get_sub_field('ip-texto'); ?></h1>
        </div>

        <?php   if ($i==0) { ?>
        <script>
        var content = document.getElementById("CI<?php echo $i?>");
        content.classList.remove("is-hidden");
        </script>
        <?php } $i++; endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php if( get_field( "tp-texto" ) ):?>
<div id="tp" data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/TamanoPoblacional.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('POPULATION SIZE','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('tp-texto'); ?>
        </div>

        <div class="column is-4 mr-auto modal_launch">
            <?php if( get_field('tp-viz')){ ?>
            <a href="<?php the_field('tp-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('tp-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('tp-img'); ?>','<?php the_field('tp-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('tp-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "bm-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class=" my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/Biomasa.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('BIOMASS','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('bm-texto'); ?>
        </div>
        <div class="column is-4 mr-auto modal_launch">
            <?php if( get_field('bm-viz')){ ?>
            <a href="<?php the_field('bm-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('bm-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('bm-img'); ?>','<?php the_field('bm-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('bm-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "ec-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/EdadCrecimiento.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('AGE, GROWTH AND SEXUAL MATURITY','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('ec-texto'); ?>
        </div>
        <div class="column is-4 mr-auto modal_launch">
            <?php if( get_field('ec-viz')){ ?>
            <a href="<?php the_field('ec-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('ec-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('ec-img'); ?>','<?php the_field('ec-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('ec-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<h1 id="distribucion"
    class="is-uppercase is-size-4 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php echo _e('Distribution','dm')?></h1>

<?php if( get_field( "db-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/Distribucion.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('GEOGRAPHICAL DISTRIBUTION','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('db-texto'); ?>
        </div>
        <div class="column is-4 mr-auto modal_launch">
            <?php if( get_field('db-viz')){ ?>
            <a href="<?php the_field('db-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('db-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('db-img'); ?>','<?php the_field('db-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('db-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "zb-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/ZonaDesove.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('SPAWN AREA','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('zb-texto'); ?>
        </div>
        <div class="column is-4 mr-auto modal_launch">
            <?php if( get_field('zb-viz')){ ?>
            <a href="<?php the_field('zb-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('zb-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('zb-img'); ?>','<?php the_field('zb-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('zb-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<h1 id="fish"
    class="is-uppercase is-size-4 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php echo _e('Fishing activity','dm')?></h1>
<h2 class="is-flex is-align-items-center is-size-6 column is-9 m-auto">
    <?php the_field('cp-textocabecera'); ?></h2>

<?php if( get_field( "zb-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/CapturasPesquera.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('FISHERIES CATCH','dm'); ?></h2>
    </div>
    <h2 class="is-flex is-align-items-center is-size-6 column my-4 is-9 mx-auto">
        <?php the_field('cap-textocabecera'); ?></h2>
    <div class="columns is-multiline column is-10 p-0 m-auto">
        <?php while( have_rows('cp-row') ): the_row();
                $texto= get_sub_field('cp-texto');
                $textot= get_sub_field('cp-texto-titulo');
                $img  = get_sub_field('cp-img');
                $viz  = get_sub_field('cp-viz');
                ?>
        <div class="column is-half">
            <p class="has-text-weight-semibold"><?php echo $textot ?></p>
            <?php echo $texto ?>
            <div class="column">
                <?php if( get_sub_field('cp-viz')){ ?>
                <a href="<?php echo $viz; ?>" target="_blank" rel="noopener noreferrer">
                    <img class="m-auto" src="<?php echo $img; ?>" alt="">
                </a>
                <?php }else { ?>
                <img onclick="modal('<?php echo $img; ?>','<?php echo $texto; ?>');"
                    class="is-clickable modal-launch m-auto" src="<?php echo $img; ?>" alt="">
                <?php  } ?>
            </div>
        </div>

        <?php $i++; endwhile; ?>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "zp-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/ZonasPesca.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('FISHING AREAS','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('zp-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('zp-viz')){ ?>
            <a href="<?php the_field('zp-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('zp-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('zp-img'); ?>','<?php the_field('zp-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('zp-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "ep-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/EsfuerzosPesqueros.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('FISHERIES EFFORTS','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('ep-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('ep-viz')){ ?>
            <a href="<?php the_field('ep-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('ep-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('ep-img'); ?>','<?php the_field('ep-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('ep-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "dr-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/Duracion.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('DURATION AND ROUTE OF FISHING TRIPS','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('dr-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('dr-viz')){ ?>
            <a href="<?php the_field('dr-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('dr-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('dr-img'); ?>','<?php the_field('dr-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('dr-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "tmp-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/TemporadaPesca.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('FISHING SEASON','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('tmp-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('tmp-viz')){ ?>
            <a href="<?php the_field('tmp-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('tmp-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('tmp-img'); ?>','<?php the_field('tmp-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('tmp-img'); ?>" alt="">
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "cpi-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/CapturaIncidental.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('INCIDENTAL CAPTURE','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('cpi-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('cpi-img')){ ?>
            <?php if( get_field('cpi-viz')){ ?>
            <a href="<?php the_field('cpi-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('cpi-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('cpi-img'); ?>','<?php the_field('cpi-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('cpi-img'); ?>" alt="">
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/UnidadEsfuerzo.svg"" alt="">
            <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('UNIT OF EFFORT','dm'); $j=0; ?></h2>
    </div>
    <div class="column p-0 m-0">
        <div class="  columns column is-4 mx-auto is-multiline is-flex is-justify-content-space-evenly">
            <div class="column is-4 mx-2 is-flex">
                <img class="column is-5" src="<?php bloginfo('template_url');?>/img/ficha-Especie/Recurso 1.svg" alt="">
                <label
                    class="column py-0 is-full  radio quick-id is-size-6 is-text-align-center has-text-weight-semibold is-flex is-align-items-center my-0"
                    for="pm-quick-id">
                    <?php  echo _e('Fishing arts','dm'); ?>
                    <input id="U<?php echo $j ?>" value="" type="radio" name="PM"
                        onclick="getSelectedCheckbox(this.id,'I','.pm-radios-panel-U')"><span class="checkmark S">
                    </span> </input>
                </label>
            </div>
            <script>
            document.getElementById("U<?php echo $j; ?>").checked = true;
            </script>
            <div class="column is-4 mx-2 is-flex">
                <img class="column is-5" src="<?php bloginfo('template_url');?>/img/ficha-Especie/Recurso 2.svg" alt="">
                <label
                    class="column py-0 is-full  radio quick-id is-size-6 is-text-align-center has-text-weight-semibold is-flex is-align-items-center my-0"
                    for="pm-quick-id">
                    <?php  echo _e('Type of boat','dm'); ?>
                    <input id="U<?php $j++; echo $j ?>" type="radio" name="PM"
                        onclick="getSelectedCheckbox(this.id,'I','.pm-radios-panel-U')"><span class="checkmark"> </span>
                    </input>
                </label>
            </div>
        </div>
        <div class="columns is-multiline p-0 m-0">
            <div class="pm-radios-panel-U is-hidden columns is-multiline p-0 m-0 " id="IU<?php $j=0; echo $j?>">
                <h1 class="column is-6 ml-auto is-size-6 has-text-weight-medium"> <?php echo get_field('adp-texto'); ?>
                </h1>
                <div class="column is-4 mr-auto">
                    <?php if( get_field('adp-img')){ ?>
                    <?php if( get_field('adp-viz')){ ?>
                    <a href="<?php the_field('adp-viz'); ?>" target="_blank" rel="noopener noreferrer">
                        <img class="m-auto" src="<?php the_field('adp-img'); ?>" alt="">
                    </a>
                    <?php }else { ?>
                    <img type="ra" alt="<?php echo $j; ?>"
                        onclick="modal('<?php echo get_field('adp-img'); ?>','<?php echo get_field('adp-texto'); ?>');"
                        class="modal-launch mx-auto is-clickable" src="<?php echo get_field('adp-img'); ?>" alt="">
                    <?php  } ?>
                    <?php  } ?>
                </div>
            </div>
            <script>
            var content = document.getElementById("IU<?php echo $j?>");
            content.classList.remove("is-hidden");
            </script>
            <div class="pm-radios-panel-U is-hidden columns is-multiline p-0 m-0 " id="IU<?php $j++; echo $j?>">
                <h1 class="column is-6 ml-auto is-size-6 has-text-weight-medium"> <?php echo get_field('tde-texto'); ?>
                </h1>
                <div class="column is-4 mr-auto">
                    <?php if( get_field('tde-img')){ ?>
                    <?php if( get_field('tde-viz')){ ?>
                    <a href="<?php the_field('tde-viz'); ?>" target="_blank" rel="noopener noreferrer">
                        <img class="m-auto" src="<?php the_field('tde-img'); ?>" alt="">
                    </a>
                    <?php }else { ?>
                    <img type="ra" alt="<?php echo $j; ?>"
                        onclick="modal('<?php echo get_field('tde-img'); ?>','<?php echo get_field('tde-texto'); ?>');"
                        class="modal-launch mx-auto is-clickable" src="<?php echo get_field('tde-img'); ?>" alt="">
                    <?php  } ?>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/ManejoPesquero.svg"" alt="">
            <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('FISHERY MANAGEMENT','dm'); $j=0; ?></h2>
    </div>
    <div class="column p-0 m-0">
    <h2 class="is-flex is-align-items-center is-size-6 column is-9 m-auto">
    <?php the_field('mj-textocabecera'); ?></h2>
        <div class=" columns column is-6 mx-auto is-multiline">
            <div class="column is-3 mx-2 is-flex mx-auto">
                <img class="column is-4" src="<?php bloginfo('template_url');?>/img/ficha-Especie/Recurso 3.svg" alt="">
                <label
                    class="column py-0 is-full  radio quick-id is-size-6 is-text-align-center has-text-weight-semibold is-flex is-align-items-center my-0"
                    for="pm-quick-id">
                    <?php  echo _e('Catch quotas','dm'); ?>
                    <input id="P<?php echo $j ?>" value="" type="radio" name="UM"
                        onclick="getSelectedCheckbox(this.id,'I','.pm-radios-panel-P')"><span class="checkmark S">
                    </span> </input>
                </label>
            </div>
            <script>
            document.getElementById("P<?php echo $j; ?>").checked = true;
            </script>
            <div class="column is-3 mx-2 is-flex mx-auto">
                <img class="column is-4" src="<?php bloginfo('template_url');?>/img/ficha-Especie/Recurso 4.svg" alt="">
                <label
                    class="column py-0 is-full  radio quick-id is-size-6 is-text-align-center has-text-weight-semibold is-flex is-align-items-center my-0"
                    for="pm-quick-id">
                    <?php  echo _e('Bans','dm'); ?>
                    <input id="P<?php $j++; echo $j ?>" type="radio" name="UM"
                        onclick="getSelectedCheckbox(this.id,'I','.pm-radios-panel-P')"><span class="checkmark"> </span>
                    </input>
                </label>
            </div>
            <div class="column is-3 mx-2 is-flex mx-auto">
                <img class="column is-4" src="<?php bloginfo('template_url');?>/img/ficha-Especie/Recurso 5.svg" alt="">
                <label
                    class="column py-0 is-full  radio quick-id is-size-6 is-text-align-center has-text-weight-semibold is-flex is-align-items-center my-0"
                    for="pm-quick-id">
                    <?php  echo _e('Minimum catch size','dm'); ?>
                    <input id="P<?php $j++; echo $j ?>" type="radio" name="UM"
                        onclick="getSelectedCheckbox(this.id,'I','.pm-radios-panel-P')"><span class="checkmark"> </span>
                    </input>
                </label>
            </div>
        </div>
    </div>
    <div class="pm-radios-panel-P is-hidden columns is-multiline p-0 m-0 " id="IP<?php $j=0; echo $j?>">
        <h1 class="column is-6 ml-auto is-size-6 has-text-weight-medium"> <?php echo get_field('cap-texto'); ?>
        </h1>
        <div class="column is-4 mr-auto">
            <?php if( get_field('cap-img')){ ?>
            <?php if( get_field('cap-viz')){ ?>
            <a type="ra" alt="<?php echo $j;?>" href="<?php the_field('cap-viz'); ?>" target="_blank"
                rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('cap-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img type="ra" alt="<?php echo $j; ?>"
                onclick="modal('<?php echo get_field('cap-img'); ?>','<?php echo get_field('cap-texto'); ?>');"
                class="modal-launch mx-auto is-clickable" src="<?php echo get_field('cap-img'); ?>" alt="">
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
    <script>
    var content = document.getElementById("IP<?php echo $j?>");
    content.classList.remove("is-hidden");
    </script>
    <div class="pm-radios-panel-P is-hidden columns is-multiline p-0 m-0 " id="IP<?php $j++; echo $j?>">
        <h1 class="column is-6 ml-auto is-size-6 has-text-weight-medium"> <?php echo get_field('vd-texto'); ?>
        </h1>
        <div class="column is-4 mr-auto">
            <?php if( get_field('vd-img')){ ?>
            <?php if( get_field('vd-viz')){ ?>
            <a href="<?php the_field('vd-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('vd-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img type="ra" alt="<?php echo $j; ?>"
                onclick="modal('<?php echo get_field('vd-img'); ?>','<?php echo get_field('vd-texto'); ?>');"
                class="modal-launch mx-auto is-clickable" src="<?php echo get_field('vd-img'); ?>" alt="">
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
    <div class="pm-radios-panel-P is-hidden columns is-multiline p-0 m-0 " id="IP<?php $j++; echo $j?>">
        <h1 class="column is-6 ml-auto is-size-6 has-text-weight-medium"> <?php echo get_field('tm-texto'); ?>
        </h1>
        <div class="column is-4 mr-auto">
            <?php if( get_field('tm-img')){ ?>
            <?php if( get_field('tm-viz')){ ?>
            <a href="<?php the_field('tm-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('tm-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img type="ra" alt="<?php echo $j; ?>"
                onclick="modal('<?php echo get_field('tm-img'); ?>','<?php echo get_field('tm-texto'); ?>');"
                class="modal-launch mx-auto is-clickable" src="<?php echo get_field('tm-img'); ?>" alt="">
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
</div>


<h1 id="sc"
    class="is-uppercase is-size-4 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
    <?php echo _e('Socio - economic','dm')?></h1>
<h2 class="is-flex is-align-items-center is-size-6 column is-9 m-auto">
    <?php the_field('ap-textocabecera'); ?></h2>
<?php if( get_field( "npr-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/NumerodePermisos.svg"" alt="">
                <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('NUMBER OF PERMITS','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('npr-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('npr-img')){ ?>
            <?php if( get_field('npr-viz')){ ?>
            <a href="<?php the_field('npr-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('npr-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('npr-img'); ?>','<?php the_field('npr-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('npr-img'); ?>" alt="">
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/GananciasEcomonicas.svg" alt="">
        <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('ECONOMIC EARNINGS','dm'); $g=0; ?></h2>
    </div>
    <div class="column p-0 m-0">
        <div class=" columns column is-4 mx-auto is-multiline is-flex is-justify-content-space-evenly">
            <div class="column is-4 mx-2 is-flex">
                <img class="column is-5" src="<?php bloginfo('template_url');?>/img/ficha-Especie/Recurso 6.svg" alt="">
                <label
                    class="column py-0 is-full  radio quick-id is-size-6 is-text-align-center has-text-weight-semibold is-flex is-align-items-center my-0"
                    for="pm-quick-id">
                    <?php  echo _e('Price trend','dm'); ?>
                    <input id="G<?php echo $g ?>" value="" type="radio" name="GM"
                        onclick="getSelectedCheckbox(this.id,'I','.pm-radios-panel-G')"><span class="checkmark S">
                    </span> </input>
                </label>
            </div>
            <script>
            document.getElementById("G<?php echo $g; ?>").checked = true;
            </script>
            <div class="column is-4 mx-2 is-flex">
                <img class="column is-5" src="<?php bloginfo('template_url');?>/img/ficha-Especie/Recurso 7.svg" alt="">
                <label
                    class="column py-0 is-full  radio quick-id is-size-6 is-text-align-center has-text-weight-semibold is-flex is-align-items-center my-0"
                    for="pm-quick-id">
                    <?php  echo _e('Income per trip','dm'); ?>
                    <input id="G<?php $g++; echo $g ?>" type="radio" name="GM"
                        onclick="getSelectedCheckbox(this.id,'I','.pm-radios-panel-G')"><span class="checkmark"> </span>
                    </input>
                </label>
            </div>
        </div>
        <div class="columns is-multiline p-0 m-0">
            <div class="pm-radios-panel-G is-hidden columns is-multiline column is-full p-0 m-0 " id="IG<?php $g=0; echo $g?>">
                <div class="column is-6 ml-auto is-size-6 has-text-weight-medium">
                    <h1> <?php echo get_field('gmr-texto'); ?></h1>
                </div>
                <div class="column is-4 mr-auto">
                    <?php if( get_field('gmr-img')){ ?>
                    <?php if( get_field('gmr-viz')){ ?>
                    <a href="<?php the_field('gmr-viz'); ?>" target="_blank" rel="noopener noreferrer">
                        <img class="m-auto" src="<?php the_field('gmr-img'); ?>" alt="">
                    </a>
                    <?php }else { ?>
                    <img type="ra" alt="<?php echo $g; ?>"
                        onclick="modal('<?php echo get_field('gmr-img'); ?>','<?php echo get_field('gmr-texto'); ?>');"
                        class="modal-launch mx-auto is-clickable" src="<?php echo get_field('gmr-img'); ?>" alt="">
                    <?php  } ?>
                    <?php  } ?>
                </div>
            </div>
            <script>
            var content = document.getElementById("IG<?php echo $g;?>");
            content.classList.remove("is-hidden");
            </script>
            <div class="pm-radios-panel-G is-hidden columns is-multiline column is-full p-0 m-0 " id="IG<?php $g++; echo $g;?>">
                <div class="column is-6 ml-auto is-size-6 has-text-weight-medium">
                    <h1> <?php echo get_field('tder-texto'); ?></h1>
                </div>
                <div class="column is-4 mr-auto">
                    <?php if( get_field('tder-img')){ ?>
                    <?php if( get_field('tder-viz')){ ?>
                    <a href="<?php the_field('tder-viz'); ?>" target="_blank" rel="noopener noreferrer">
                        <img class="m-auto" src="<?php the_field('tder-img'); ?>" alt="">
                    </a>
                    <?php }else { ?>
                    <img type="ra" alt="<?php echo $g; ?>"
                        onclick="modal('<?php echo get_field('tder-img'); ?>','<?php echo get_field('tder-texto'); ?>');"
                        class="modal-launch mx-auto is-clickable" src="<?php echo get_field('tder-img'); ?>" alt="">
                    <?php  } ?>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if( get_field( "idd-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/Infraestructura.svg" alt="">
        <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('LANDING INFRASTRUCTURE','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('idd-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('idd-img')){ ?>
            <?php if( get_field('idd-viz')){ ?>
            <a href="<?php the_field('idd-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('idd-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('idd-img'); ?>','<?php the_field('idd-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('idd-img'); ?>" alt="">
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( "prm-texto" ) ):?>
<div data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <div class="my-5 p-0 has-radius is-flex mx-auto column is-11 is-size-6 has-text-white has-background-success">
        <img class=" has-radius mr-4 image is-64x64 has-background-info"
            src="<?php bloginfo('template_url'); ?>/img/ficha-Especie/Procesamiento.svg" alt="">
        <h2 class=" is-uppercase is-flex is-align-items-center is-size-5
            has-text-weight-semibold"><?php  echo _e('PROSECUTION','dm'); ?></h2>
    </div>
    <div class="columns is-multiline p-0 m-0">
        <div class="column is-6 ml-auto">
            <?php the_field('prm-texto'); ?>
        </div>
        <div class="column is-4 mr-auto">
            <?php if( get_field('prm-img')){ ?>
            <?php if( get_field('prm-viz')){ ?>
            <a href="<?php the_field('prm-viz'); ?>" target="_blank" rel="noopener noreferrer">
                <img class="m-auto" src="<?php the_field('prm-img'); ?>" alt="">
            </a>
            <?php }else { ?>
            <img onclick="modal('<?php the_field('prm-img'); ?>','<?php the_field('prm-texto'); ?>');"
                class="is-clickable modal-launch m-auto" src=" <?php the_field('prm-img'); ?>" alt="">
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
</div>
<?php endif; ?>

<div id="mi" data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <h1
        class="is-uppercase is-size-4 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
        <?php echo _e('Management Instruments','dm')?></h1>
    <h2 class="is-flex is-align-items-center is-size-6 column is-9 m-auto">
        <?php the_field('itm-texto'); ?></h2>
</div>

<div id="rf" data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <h1
        class="is-uppercase is-size-4 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
        <?php echo _e('References','dm')?></h1>
    <h2 class="is-flex is-align-items-center is-size-6 column is-9 m-auto">
        <?php the_field('rfc-texto'); ?></h2>
</div>

<div id="frd" data-aos="fade-down" data-aos-duration="1200" class="column is-full ficha-especie">
    <h1
        class="is-uppercase is-size-4 has-text-weight-semibold has-text-primary mt-6 column is-full heading-block has-text-centered">
        <?php echo _e('Further reading','dm')?></h1>
    <h2 class=" is-flex is-align-items-center is-size-6 column is-9 m-auto">
        <?php the_field('la-texto'); ?></h2>
</div>


<!-- Modal -->
<div class="ficha-m modal">
    <div class="modal-background close-m"></div>
    <div class="ficha-content modal-content close-m columns is-multiline is-justify-content-space-evenly">
        <img class="img_modal column is-12" src="" alt="">
    </div>
    <button class="close-m modal-close is-large" aria-label="close"></button>
</div>



<?php get_footer()?>
<script>
function modal(link, text) {
    $('.img_modal').attr("src", link);
    $('.modal').addClass('is-active');
    $('.modal-t').text(text);
}
$('.close-m').click(function() {
    $('.modal').removeClass('is-active');
});

function getSelectedCheckbox(id, n, clase) {

    n = n.concat(id);
    const visible = document.getElementById(n);
    const radio = document.querySelectorAll(clase);
    radio.forEach(element => {
        element.classList.add("is-hidden");
    });
    console.log(n);
    visible.classList.remove("is-hidden");
}
</script>