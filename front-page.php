<?php 

	Themewrangler::setup_page();get_header(); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
	$featureImg = get_field('feature_image', 4);

?>

<div class="home__hero hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $featureImg['sizes']['gallery-lg']; ?>"}'>
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white text-center">
				<span class="title title--xl"><?php the_field('feature_headline'); ?></span><br>
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

<hr class="invisible">

<div class="fs-row">
	<?php $articles = get_field('articles'); ?>
	<?php if ($articles): ?>
	<?php $i = 1; foreach($articles as $article): ?>
	<?php 
		$article_title = $article['title'];
		$article_subtitle = $article['subtitle'];
		$article_link = $article['link'];
		$article_image = $article['image']['sizes']['large'];
	?>


	<?php if($i == 1): ?>
	<div class="fs-cell fs-lg-4 fs-md-3 fs-sm-full">
		<div class="hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $article_image; ?>"}'></div>
		<div class="text-center">
			<br>
			<a href="<?php echo $article_link; ?>">
				<span class="accent accent--sm color--gray"><?php echo $article_subtitle; ?></span>
				<h3 class="nomargin"><?php echo $article_title; ?></h3>
			</a>
		</div>
		<hr class="invisible">
	</div>
	<?php endif; ?>
	<?php if($i == 2): ?>
	<div class="fs-cell fs-lg-8 fs-md-3 fs-sm-full">
		<div class="hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $article_image; ?>"}'></div>
		<div class="text-center">
			<br>
			<a href="<?php echo $article_link; ?>">
				<span class="accent accent--sm color--gray"><?php echo $article_subtitle; ?></span>
				<h3 class="nomargin"><?php echo $article_title; ?></h3>
			</a>
		</div>
		<hr class="invisible">
	</div>
	<?php endif; ?>
	<?php if($i == 3): ?>
	<div class="fs-cell fs-all-full">
		<div class="hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $article_image; ?>"}'></div>
		<div class="text-center">
			<br>
			<a href="<?php echo $article_link; ?>">
				<span class="accent accent--sm color--gray"><?php echo $article_subtitle; ?></span>
				<h3 class="nomargin"><?php echo $article_title; ?></h3>
			</a>
		</div>
		<hr class="invisible">
	</div>
	<?php endif; ?>
	<?php $i++; endforeach; ?>
	<?php endif; ?>
</div>

<div class="carousel bg--lightBlue" data-carousel-options='{"autoAdvance": true, "infinite": true,"controls":false,"pagination":false}'>
<?php $quotes = get_field('quotes', 4); ?>
<?php foreach($quotes as $quote): ?>
	<div class="quotes hero hero--sm bg--lightBlue relative">
		<div class="centered">
			<div class="fs-row">
				<div class="fs-cell fs-all-full">
					<div class="carousel__slide text-center">
						<span class="quote__title accent accent--lg color--white">"<?php echo $quote['quote']; ?>"</span><br>
						<span class="quote__author accent color--white"><?php echo $quote['author']; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>

<?php get_footer(); ?>