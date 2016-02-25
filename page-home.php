<?php 

	Themewrangler::setup_page();get_header(/***Template Name: Home Page */); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
	$featureImg = get_field('feature_image', 4);

?>

<div class="home__hero hero wallpaper bg--black relative" data-background-options='{"source":"<?php echo $featureImg['sizes']['gallery-lg']; ?>"}'>
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white text-center">
				<span class="title title--xl">Spring Cleaning</span><br>
			</div>
		</div>
	</div>
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white text-center">
				<a href="<?php the_field('feature_link_url', 4); ?>" class="btn btn--primary accent bg--red ss-gizmo ss-right right"><?php the_field('feature_link_title', 4); ?></a>
			</div>
		</div>
	</div>
</div>

<div class="quotes hero hero--sm bg--blue relative">
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<div class="carousel carousel_fade" data-carousel-options='{"autoAdvance": true, "infinite": true, "single":true,"controls":false,"pagination":false}'>
					<?php $quotes = get_field('quotes', 4); ?>
					<?php foreach($quotes as $quote): ?>
					<div class="carousel__slide text-center">
						<span class="quote__quote accent accent--lg color--white"><?php echo $quote['quote']; ?></span><br>
						<span class="quote__author accent color--white"><?php echo $quote['author']; ?></span>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>