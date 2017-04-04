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
	<a class="home__hero-link covered" href="<?php the_field('feature_link_url', 4); ?>"></a>
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full <?php the_field('feature_headline_color'); ?> text-center">
				<span class="title title--xl"><?php the_field('feature_headline'); ?></span><br>
				<span class="title title--md"><?php the_field('feature_subheadline'); ?></span><br>
			</div>
		</div>
	</div>
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white text-center">
				<span href="<?php the_field('feature_link_url', 4); ?>" class="btn btn--primary accent bg--black ss-gizmo ss-right right"><?php the_field('feature_link_title', 4); ?></span>
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
		$article_video = $article['video_background'];
	?>


	<?php if($i == 2): ?>
	<div class="home-module fs-cell fs-lg-4 fs-md-3 fs-sm-full">
		<?php if($article_video): ?>
		<div class="hero wallpaper bg--bgGray relative" data-background-options='{"source":{"autoPlay":true,"video":"<?php echo $article_video; ?>"}}'></div>
		<?php else: ?>
		<a href="<?php echo $article_link; ?>" class="hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $article_image; ?>"}'></a>
		<?php endif; ?>
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
	<?php if($i == 1): ?>
	<div class="home-module fs-cell fs-lg-8 fs-md-3 fs-sm-full fs-right">
		<?php if($article_video): ?>
		<div class="hero wallpaper bg--bgGray relative" data-background-options='{"source":{"autoPlay":true,"video":"<?php echo $article_video; ?>"}}'></div>
		<?php else: ?>
		<a href="<?php echo $article_link; ?>" class="hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $article_image; ?>"}'></a>
		<?php endif; ?>
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
	<div class="home-module fs-cell fs-all-full">
		<?php if($article_video): ?>
		<div class="hero wallpaper bg--bgGray relative" data-background-options='{"source":{"autoPlay":true,"video":"<?php echo $article_video; ?>"}}'></div>
		<?php else: ?>
		<a href="<?php echo $article_link; ?>" class="hero wallpaper bg--bgGray relative" data-background-options='{"source":"<?php echo $article_image; ?>"}'></a>
		<?php endif; ?>
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