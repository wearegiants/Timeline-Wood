<?php 

	Themewrangler::setup_page();get_header();
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
	$on = get_field('online_retailers');
	$ca = get_field('ca_retailers');
	$or = get_field('or_retailers');
	$co = get_field('co_retailers');
	$sk = get_field('sk_retailers');
	$width = 'fs-cell fs-lg-3 fs-md-third fs-sm-half';

?>

<?php include locate_template('parts/page-header.php' ); ?>

<div class="retailer">
	<div class="retailer-nav">
		<div class="fs-row">
			<div class="fs-cell fs-all-full text-center">
				<?php if($on): ?><a href="#" class="swap retailer-nav__btn" data-swap-group="swap_group" data-swap-target='#online-retailers' data-swap-active='true'>Online Retailers</a><?php endif; ?>
				<?php if($ca): ?><a href="#" class="swap retailer-nav__btn" data-swap-group="swap_group" data-swap-target='#california-retailers'>California Retailers</a><?php endif; ?>
				<?php if($or): ?><a href="#" class="swap retailer-nav__btn" data-swap-group="swap_group" data-swap-target='#oregon-retailers'>Oregon Retailers</a><?php endif; ?>
				<?php if($co): ?><a href="#" class="swap retailer-nav__btn" data-swap-group="swap_group" data-swap-target='#colorado-retailers'>Colorado Retailers</a><?php endif; ?>
				<?php if($sk): ?><a href="#" class="swap retailer-nav__btn" data-swap-group="swap_group" data-swap-target='#korea-retailers'>South Korea Retailers</a><?php endif; ?>
			</div>
		</div>
	</div>
	<div class="retailer-tab">
		<?php if($on): ?><div id="online-retailers" class="retailer-tab__content">
			<div class="fs-row">
				<?php foreach($on as $image): ?>
				<?php include locate_template('parts/retailer.php'); ?>
				<?php endforeach; ?>
			</div>
		</div><?php endif; ?>
		<?php if($ca): ?><div id="california-retailers" class="retailer-tab__content">
			<div class="fs-row">
				<?php foreach($ca as $image): ?>
				<?php include locate_template('parts/retailer.php'); ?>
				<?php endforeach; ?>
			</div>
		</div><?php endif; ?>
		<?php if($or): ?><div id="oregon-retailers" class="retailer-tab__content">
			<div class="fs-row">
				<?php foreach($or as $image): ?>
				<?php include locate_template('parts/retailer.php'); ?>
				<?php endforeach; ?>
			</div>
		</div><?php endif; ?>
		<?php if($co): ?><div id="colorado-retailers" class="retailer-tab__content">
			<div class="fs-row">
				<?php foreach($co as $image): ?>
				<?php include locate_template('parts/retailer.php'); ?>
				<?php endforeach; ?>
			</div>
		</div><?php endif; ?>
		<?php if($sk): ?><div id="korea-retailers" class="retailer-tab__content">
			<div class="fs-row">
				<?php foreach($sk as $image): ?>
				<?php include locate_template('parts/retailer.php'); ?>
				<?php endforeach; ?>
			</div>
		</div><?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>