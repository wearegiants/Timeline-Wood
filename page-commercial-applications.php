<?php 

	Themewrangler::setup_page();get_header();
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

<hr class="invisible big">
<?php #Color Series ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('color_series'); ?></div>
	<?php $asks = get_field('color_series_gallery'); ?>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3">
		<div class="carousel">
<?php foreach($asks as $image): ?>
			<div class="carousel-slide"><img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>"></div>
<?php endforeach; ?>
		</div>
	</div>
</div>
<hr class="invisible big">
<?php #Color for Days ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('color_for_days'); ?></div>
	<?php $samples = get_field('color_samples_gallery'); ?>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3">
		<div class="fs-row">
<?php foreach($samples as $sample): ?>
			<div class="fs-cell fs-lg-fourth fs-md-fourth fs-sm-fourth">
				<div class="swatch relative">
					<span class="swatch-title centered"><?php echo $sample['title']; ?></span>
					<img src="<?php echo $sample['url']; ?>" class="img-responsive img-rounded" alt="Color Sample">
				</div>
				<br>
			</div>
<?php endforeach; ?>
		</div>
	</div>
</div>

<hr class="invisible big">
<?php #Ask our Customers ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('ask_our_customers'); ?></div>
	<?php $asks = get_field('ask_our_customers_gallery'); ?>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3">
		<div id="cust-carousel" class="carousel">
<?php foreach($asks as $image): ?>
			<div><img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>"></div>
<?php endforeach; ?>
		</div>
	</div>
</div>

<hr class="invisible big">
<?php #Inquiry Form ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('inquries'); ?></div>
	<?php $contact = get_field('inquiry_form'); ?>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3"><?php echo do_shortcode($contact); ?></div>
</div>

<hr class="invisible">

<?php get_footer(); ?>