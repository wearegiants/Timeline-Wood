<?php 
	Themewrangler::setup_page();get_header();
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
	include locate_template('parts/page-header.php' );
?>

<?php 
  $home_args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );
  $home_posts = get_posts( $home_args );
  foreach ( $home_posts as $post ) : setup_postdata( $post );
?>

<div class="commercial">
	<div class="fs-row">
		<div class="fs-cell fs-lg-4 fs-md-full fs-sm-full">
			<strong class="title--sm color--red uppercase"><?php the_field('subhead'); ?></strong>
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="fs-cell fs-lg-8 fs-md-full fs-sm-full fs-right">
			<?php $images = get_field('gallery'); ?>
			<div class="carousel" data-carousel-options='{"autoHeight":true, "pagination":false}'>
<?php foreach($images as $image): ?>
				<div class="carousel-slide">
					<img src="<?php echo $image['sizes']['gallery-photo']; ?>" class="img-responsive" />
					<?php if($image['caption']): ?><div class="commercial-caption bg--yellow"><?php echo $image['caption']; ?></div><?php endif; ?>
				</div>
<?php endforeach; ?>
			</div>
			<div class="wrapper fs-lg-hide"></div>
		</div>
		<div class="fs-cell fs-lg-4 fs-md-full fs-sm-full"><?php the_content(); ?></div>
		<hr class="divider black big fs-cell fs-all-full" />
	</div>
</div>

<?php 
  endforeach; wp_reset_postdata(); 
  get_footer();
?>


<?php get_footer(); ?>