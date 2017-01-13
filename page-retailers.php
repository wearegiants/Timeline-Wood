<?php 

	Themewrangler::setup_page();get_header();
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];

	$us_retailers = get_field('us_retailers');
	$ca_retailers = get_field('ca_retailers');
	$mx_retailers = get_field('mx_retailers');

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

<div class="fs-row">
	<div class="fs-cell fs-all-full">
		<h3>United States</h3>
		<hr class="invisible compact">
	</div>
<?php foreach($us_retailers as $retailer): ?>
	<div class="fs-cell fs-lg-third fs-md-third fs-sm-full">
		<a class="hero hero--xs bg--yellow text-center relative" href="<?php echo $retailer['url']; ?>" target="_blank">
			<h3><span class="centered color--black"><?php echo $retailer['title']; ?></span></h3>
		</a>
	</div>
<?php endforeach; ?>

<hr class="invisible">
<hr class="invisible">

<div class="fs-cell fs-all-full">
		<h3>Canada</h3>
		<hr class="invisible compact">
	</div>
<?php foreach($ca_retailers as $retailer): ?>
	<div class="fs-cell fs-lg-third fs-md-third fs-sm-full">
		<a class="hero hero--xs bg--red text-center relative" href="<?php echo $retailer['url']; ?>" target="_blank">
			<h3><span class="centered color--white"><?php echo $retailer['title']; ?></span></h3>
		</a>
	</div>
<?php endforeach; ?>

<hr class="invisible">
<hr class="invisible">

<div class="fs-cell fs-all-full">
		<h3>Mexico</h3>
		<hr class="invisible compact">
	</div>
<?php foreach($mx_retailers as $retailer): ?>
	<div class="fs-cell fs-lg-third fs-md-third fs-sm-full">
		<a class="hero hero--xs bg--blue text-center relative" href="<?php echo $retailer['url']; ?>" target="_blank">
			<h3><span class="centered color--white"><?php echo $retailer['title']; ?></span></h3>
		</a>
	</div>
<?php endforeach; ?>

</div>

<hr class="invisible">
<hr class="invisible">

<?php get_footer(); ?>