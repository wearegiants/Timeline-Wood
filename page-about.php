<?php Themewrangler::setup_page();get_header(/***Template Name: Slideshow */); ?>

<div class="about">
<?php $slides = get_field('about'); ?>
<?php if($slides): ?>
<div class="about__slide-container">
<?php $counter = 1; foreach($slides as $slide): ?>

	<div id="slide-<?php echo $counter; ?>" class="about__slide hero hero--wh relative bg--<?php echo $slide['background']; ?>" data-height-modifier="#header">
		<div class="centered">
			<div class="fs-row">
				<div class="fs-cell fs-lg-7 fs-md-5 fs-sm-3 fs-centered">
					<div class="wrapper wrapper--extra bg--white">
						<header class="about__slide-header text-center">
							<h2 class="title title--lg color--<?php echo $slide['text_color']; ?>"><?php echo $slide['title']; ?></h2>
						</header>
						<div class="about__slide-content text-center color--<?php echo $slide['text_color']; ?>">
							<?php echo $slide['content']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if($slide['image']): ?>
		<div class="about__slide-bg covered wallpaper" data-background-options='{"source":"<?php echo $slide['image']['sizes']['gallery-xl']; ?>"}'></div>
		<?php endif; ?>
	</div>

<?php $counter++; endforeach; ?>
</div>
<?php endif; ?>
</div>

<?php get_footer(); ?>