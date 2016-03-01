<?php Themewrangler::setup_page();get_header(); ?>

<div class="fs-row grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="grid-item fs-cell fs-lg-third fs-md-half fs-sm-half fs-xs-3">
<?php get_template_part( 'parts/entry-blog'); ?>
</div>
<?php endwhile; endif; ?>
<?php echo do_shortcode('[ajax_load_more offset="10" button_label="Load More" button_loading_label="Loading" post_type="post" pause="true" scroll="false" transition="fade"]' );?>
</div>

<hr class="invisible compact">

<?php get_footer(); ?>