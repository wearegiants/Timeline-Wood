<?php 

	Themewrangler::setup_page();get_header();
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
	$images = get_field('us_retailer_logos');

?>

<?php include locate_template('parts/page-header.php' ); ?>

<div class="fs-row">
	<?php foreach ($images as $image): ?>
	<div class="fs-cell fs-lg-fourth fs-md-half fs-sm-half">
		<div class="retailer-logo-wrapper">
			<a target="blank" href="<?php echo $image['caption']; ?>"><img src="<?php echo $image['url']; ?>" class="img-responsive" /></a>
			<hr class="invisible">
		</div>
	</div>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>