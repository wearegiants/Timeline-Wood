<?php Themewrangler::setup_page();get_header(/***Template Name: Blog */); ?>

<div class="fs-row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="fs-cell fs-lg-third fs-md-half fs-sm-3">
<?php get_template_part( 'parts/entry-blog'); ?>
</div>
<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>