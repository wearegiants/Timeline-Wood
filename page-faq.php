<?php Themewrangler::setup_page();get_header(/***Template Name: Glossary */); ?>

<div class="hero hero--sm bg--bgGray relative">
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<h2 class="title title--md text-center capped spaced"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>

<hr class="invisible">

<?php 

$args = array(
  'posts_per_page' => -1,
  'post_parent'    => $post->ID,
  'post_type'      => 'page',
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
);

$glossry_items = get_posts( $args );

?>

<div class="fs-row">
	<ul class="fs-cell fs-lg-3 fs-md-2 fs-sm-3">

<?php $counter=0; foreach ( $glossry_items as $post ) : setup_postdata( $post ); ?>
		<li><a href="#<?php echo $post->post_name;?>"><?php the_title(); ?></a></li>
<?php $counter++; endforeach; ?>

	</ul>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3">

<?php $counter=0; foreach ( $glossry_items as $post ) : setup_postdata( $post ); ?>
		<div id="<?php echo $post->post_name;?>" <?php post_class(); ?>>
			<h2 class="title title--md capped spaced"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<hr class="invisible">
<?php $counter++; endforeach; ?>

	</div>
</div>

<?php get_footer(); ?>