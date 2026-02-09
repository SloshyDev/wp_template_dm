<?php get_header(); 
/*template name:About*/
?>
<!-- Banner -->
<div class="px-5 my-4">
    <?php if (has_post_thumbnail( $post->ID ) ){ ?>
    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID)); }?>
    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
</div>
<!-- About us  -->
<section class="about-us">
    <?php while (have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
</section>
<!-- Team dataMares -->
<div class=" column mx-auto team_dm is-6">
    <div class="column is-full is-flex is-justify-content-center">
        <img src="<?php echo get_field('img-dm')?>" alt="">
    </div>
    <div class="columns column is-flex is-justify-content-center is-full is-multiline m-auto">
        <?php if( have_rows('team-dm') ): $i=1; ?>
        <?php while( have_rows('team-dm') ): the_row();
        $image = get_sub_field('img');
        ?>
        <div class="column is-one-third is-half-mobile">
            <img src="<?php echo $image; ?>" alt="" class="">
        </div>
        <?php $i++; endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<!-- Team Committee -->
<div class="column mx-auto team_committee is-5">
    <div class="column is-full is-flex is-justify-content-center hover:scale-105 transition-transform cursor-pointer">
        <img style="width: 13vw;"  onclick="show('committee')" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/Recurso-3-2.svg", 'dm') ?>" alt="">
    </div>
    <div id="committee" class="hidden is-full is-justify-content-center is-multiline m-auto">
        <?php if( have_rows('team-committee') ): $i=1; ?>
        <?php while( have_rows('team-committee') ): the_row();
            $image = get_sub_field('img');
            ?>
        <div class="column is-one-quarter is-half-mobile">
            <img src="<?php echo $image; ?>" alt="" class="img-responsive img-thumbnail">
        </div>
        <?php $i++; endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<!-- Team Founders -->
<div class="column mx-auto is-6 mb-6">
    <div class="column is-full is-flex is-justify-content-center hover:scale-105 transition-transform cursor-pointer">
        <img style="width: 13vw;" onclick="show('founders')" src="<?php _e("https://datamares.org/wp-content/uploads/2025/12/Recurso-2-2.svg", 'dm') ?>" alt="">
    </div>
    <div id="founders" class="hidden is-full is-justify-content-center is-multiline m-auto">
        <?php if( have_rows('team-founders') ): $i=1; ?>
        <?php while( have_rows('team-founders') ): the_row();
            $image = get_sub_field('img');
            ?>
        <div class="column is-one-fifth is-half-mobile mx-auto">
            <img src="<?php echo $image; ?>" alt="" class="img-responsive img-thumbnail">
        </div>
        <?php $i++; endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<div class="w-1/5 mx-auto" style="
    width: 15rem;
    margin: auto;
">
	
	<a  class="button is-success is-fullwidth is-medium my-5" href="https://datamares.org/partners-supporters/?lang=es"><?php _e("Partners & Collaborators", 'dm') ?></a>

</div>


<script>
function show(id) {
	
	
    let element = document.getElementById(id);
    if (element.classList.contains("hidden")) {
      element.classList.remove("hidden")
	element.classList.add("flex")
	element.classList.add("columns")
	element.classList.add("column")
    }else{
		element.classList.add("hidden")
	element.classList.remove("flex")
	element.classList.remove("columns")
	element.classList.remove("column")
	}

    
    
    
  }

</script>



<?php get_footer(); ?>