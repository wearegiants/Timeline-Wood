<?php Themewrangler::setup_page();get_header(); ?>

<div class="fs-row grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="grid-item fs-cell fs-lg-third fs-md-half fs-sm-half fs-xs-3">
<?php get_template_part( 'parts/entry-blog'); ?>
</div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>