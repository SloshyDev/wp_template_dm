<?php get_header(); ?>
<div class="content">
<div class="column">
    <h4 class="is-size-5 has-text-weight-semibold has-text-primary mb-1"><?php _e("Keywords", 'datamares' )?>:</h4>
    <div>
        <?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach($posttags as $tag) {echo '<a class="button is-success is-uppercase is-small m-1 is-rounded" href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a>';}
        }?>
    </div>
</div>
<!-- Stories Container -->
<div class="columns mx-4">
    <div class="stories_header column is-8 mx-auto">
        <!-- Tittle / Feature Image -->
        <h4 class="is-size-5 has-text-weight-semibold has-text-primary my-2"><?php the_title(); ?></h4>
        <div class="column is-9 mx-auto">
            <?php the_post_thumbnail("img-story"); ?>
        </div>
        <div class="column is-flex is-justify-content-flex-end">
            <!-- Modal Viz -->
            <?php if (!empty(get_field('explore_viz'))){ ?>
            <a class="viz button is-info is-small mx-1"><b><?php _e('Explore viz','dm');?></b></a>
            <?php } ?>
            <!-- Infogram -->
            <?php if (!empty(get_field('pdf_url'))) { ?>
            <a class="button is-info is-small" href="<?php echo get_field('pdf_url'); ?>"
                title="<?php echo get_field('pdf_url'); ?>"
                target="_blank"><b><?php _e("Infogram", 'datamares' )?></b></a>
            <?php } ?>
        </div>
        <!-- Content -->
        <div class="stories_content has-text-justified">
            <?php echo the_content(); ?>
        </div>
    </div>
    <!-- Authors and info -->
    <div class="column is-3 mx-auto my-6">
        <h4 class="has-text-weight-bold my-2"><?php _e("Authors", 'datamares' )?>:</h4>
        <p><?php echo get_field('author'); ?></p>
        <h4 class="has-text-weight-bold my-2"><?php _e("Contact Information", 'datamares' )?>:</h4>
        <p><a
                href="mailto:<?php echo get_field('contact_information'); ?>"><?php echo get_field('contact_information'); ?></a>
        </p>
        <h4 class="has-text-weight-bold my-2"><?php _e("DOI", 'datamares' )?>:</h4>
        <p><?php echo get_field('doi'); ?></p>
        <h4 class="has-text-weight-bold my-2"><?php _e("Affiliations", 'datamares' )?>:</h4>
        <p><?php echo get_field('affiliations'); ?></p>
        <h4 class="has-text-weight-bold my-2"><?php _e("Acknowledgements", 'datamares' )?>:</h4>
        <p><?php echo get_field('acknowledgements'); ?></p>
        <h4 class="has-text-weight-bold my-2"><?php _e("How to cite this story", 'datamares' )?>:</h4>
        <p><?php echo get_field('how_to_cite_this_story'); ?></p>

        <div class="button is-success is-fullwidth">
            <?php echo do_shortcode(' [print-me target=".content"/]'); ?>
        </div>
    </div>
</div>
<!-- References -->
<div class="column is-11 mx-auto my-3" id="accordion">
    <h2 class="is-clickable p-2 my-3 is-size-5 has-background-success has-text-primary">References</h2>
    <div class="">
        <?php echo get_field('refrences'); ?>
    </div>
</div>
</div>
<!-- Viz -->
<div class="modal">
    <div class="modal-background close-viz"></div>
    <div class="modal-content">
        <?php echo get_field('explore_viz'); ?>
    </div>
    <button class="close-viz modal-close is-large" aria-label="close"></button>
</div>

<?php get_footer(); ?>
<script>
$('.viz').click(function() {
    $('.modal').addClass('is-active');
});
$('.close-viz').click(function() {
    $('.modal').removeClass('is-active');
});
</script>