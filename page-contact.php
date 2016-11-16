<?php 

	Themewrangler::setup_page();get_header(/***Template Name: Glossary */);
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];

?>

<div class="hero hero--sm bg--bgGray relative wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<h2 class="title title--md text-center capped spaced nomargin color--black"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>

<hr class="invisible">
<?php #Contact ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('description'); ?></div>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3"></div>
</div>

<hr class="invisible">
<?php #Join the Newsletter ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('join'); ?></div>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3"></div>
</div>

<hr class="invisible">
<?php #Contact ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('commercial_inquiries'); ?></div>
	<?php $contact = get_field('contact_shortcode'); ?>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3"><?php echo do_shortcode($contact); ?></div>
</div>

<hr class="invisible">

<?php get_footer(); ?>