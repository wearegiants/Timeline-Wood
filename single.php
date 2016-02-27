<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<?php the_post(); ?>
<article <?php post_class(); ?>>
	<div class="hero hero relative bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'></div>
	<hr class="invisible">
	<header class="hentry__header">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<h1 class="hentry__title title--lg text-center"><?php the_title(); ?></h1>
				<div class="accent accent--sm text-center">Words by <?php the_author(); ?>, posted on <?php the_date(); ?></div>
			</div>
		</div>
	</header>
	<hr class="invisible">
	<div class="hentry__content">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<div class="emphasized"><?php the_content(); ?></div>
				<?php $blog = get_field('blog'); ?>
			</div>
		</div>
		<?php if($blog): ?>
		<?php foreach($blog as $field): ?>
		<?php if($field['text']): ?>
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<?php echo $field['text']; ?>
			</div>
		</div>
		<?php endif; ?>

			<?php $gallery = $field['gallery']; ?>
			<?php if($gallery): ?>
			<hr class="invisible compact">
			<div class="carousel-wrapper hentry__carousel-wrapper">
				<div class="fs-row">
					<div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
						<div class="hentry__carousel carousel" data-carousel-options='{"contained":false, "autoHeight": true}'>
<?php foreach($gallery as $image): ?>
							<div class="hentry__carousel-slide">
								<img src="<?php echo $image['sizes']['gallery-xl']; ?>" class="img-responsive" />
							</div>
<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>

		<?php endforeach; ?>
		<?php endif; ?>
	</div>
</article>

<?php get_footer(); ?>