<?php 

	Themewrangler::setup_page();get_header(); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
	$featureImg = get_field('feature_image', 4);
	$featureVid = get_field('feature_video_background', 4);

?>

<?php if($featureVid): ?>
<div class="home__hero hero hero--wh wallpaper bg--bgGray relative" data-background-options='{"source":{"autoPlay":true,"video":"<?php echo $featureVid; ?>"}}'>
<?php else: ?>
<div class="home__hero hero hero--wh wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $featureImg['sizes']['gallery-lg']; ?>"}'>
<?php endif; ?>
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full <?php the_field('feature_headline_color'); ?> text-center">
				<span class="title title--xl"><?php the_field('feature_headline'); ?></span><br>
				<span class="title title--md"><?php the_field('feature_subheadline'); ?></span><br><br><br>
				<a href="<?php the_field('feature_link_url', 4); ?>" class="btn btn--primary accent bg--black">
					<?php the_field('feature_link_title', 4); ?>
					<img src="/assets/img/arrow-right.svg" alt="right" class="feathericon">	
				</a>
			</div>
		</div>
	</div>
</div>

<hr class="invisible">

<div class="">
	<div class="fs-row">
		<?php $items = get_field('features'); ?>
		<?php foreach($items as $item): ?>
		<?php $article_image = $item['image']['sizes']['large']; ?>
		<a href="<?php echo $item['link']['url']; ?>" class="fs-cell fs-all-full fs-lg-half">
			<div class="hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $article_image; ?>"}'></div>
			<div class="text-center">
				<br>
				<h3 class="nomargin"><?php echo $item['title']; ?></h3>
				<span class="accent accent--sm underline uppercase"><?php echo $item['link']['title']; ?></span>
			</div>
			<hr class="invisible">
		</a>
		<?php endforeach; ?>
	</div>
</div>


<hr class="invisible">

<div class="carousel bg--lightBlue" data-carousel-options='{"autoAdvance": true, "infinite": true,"controls":false,"pagination":false}'>
<?php $quotes = get_field('quotes', 4); ?>
<?php foreach($quotes as $quote): ?>
	<div class="quotes hero hero--sm relative" style="background-color:<?php echo $quote['background_color']; ?>; color: <?php echo $quote['font_color']; ?>; ">
		<div class="centered">
			<div class="fs-row">
				<div class="fs-cell fs-all-full">
					<div class="carousel__slide text-center">
						<span class="quote__title accent accent--lg">"<?php echo $quote['quote']; ?>"</span><br>
						<span class="quote__author accent"><?php echo $quote['author']; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>
<?php get_footer(); ?>