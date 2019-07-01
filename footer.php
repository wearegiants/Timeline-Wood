</div>

<?php if(is_front_page()): ?>
<hr class="invisible">
<div class="fs-row">
	<div class="fs-cell fs-all-full">
		<div class="insta-wrapper">
			<div class="text-center"><a class="btn btn--big btn--outlined" href="http://instagram.com/timelinewood" target="blank">Instagram</a></div>
			<hr class="compact invisible">
			<?php echo do_shortcode('[instashow id="1"]'); ?>
			<hr class="compact invisible">
		</div>
	</div>
</div>

<?php endif; ?>

<?php
	// Random array of colors for the ticker. 
	$input = array("blue", "green", "red", "orange", "darkBlue", "lightBlue");
	$rand_keys = array_rand($input, 2);
?>

<div id="ticker" class="marquee bg--<?php echo $input[$rand_keys[0]] . "\n"; ?>">
	<div id="ticker__wrapper" class="marquee-content_items mono mono--sm color--white">
		<div>
			<?php the_field('ticker',4); ?>
			<?php the_field('ticker',4); ?>
			<?php the_field('ticker',4); ?>
			<?php the_field('ticker',4); ?>
			<?php the_field('ticker',4); ?>		
		</div>
	</div>
</div>

<footer id="footer" class="footer footer--md bg--bgGray">
	<div class="fs-row">
		<div class="fs-cell fs-xl-8 fs-lg-7 fs-md-full fs-sm-3">
			<div class="fs-row">
				<nav class="footer-nav fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<?php 
						$footerLeft = array(
				    'container'       => false,
				    'echo'            => false,
				    'theme_location'  => 'footer-left',
				    'depth'           => 0,
				  );

				  $footerRight = array(
				    'container'       => false,
				    'echo'            => false,
				    'theme_location'  => 'footer-right',
				    'depth'           => 0,
				  );
				  ?>
					<?php echo wp_nav_menu( $footerLeft ); ?>
				</nav>
				<nav class="footer-socials fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<?php echo wp_nav_menu( $footerRight ); ?>
				</nav>
				<div class="footer-address fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<?php the_field('address', 4); ?>
				</div>
			</div>
		</div>
		<hr class="fs-cell fs-lg-hide fs-md-full fs-sm-3 divider">
		<div class="fs-cell fs-xl-4 fs-lg-5 fs-md-full fs-sm-full">
		
	    <div class="footer__form relative">
      	<span class="color--black accent accent--md">Join Our Newsletter</span>
      	<?php echo do_shortcode('[epm_mailchimp]' ); ?>
	    </div>

	    <?php /*
			<div class="fs-row">
				<a href="" class="accent accent--sm fs-cell fs-all-fifth">Facebook</a>
				<a href="" class="accent accent--sm text-center fs-cell fs-all-fifth">Instagram</a>
				<a href="" class="accent accent--sm text-center fs-cell fs-all-fifth">Twitter</a>
				<a href="" class="accent accent--sm text-center fs-cell fs-all-fifth">YouTube</a>
				<a href="" class="accent accent--sm text-right fs-cell fs-all-fifth">Pinterest</a>
			</div>
			*/ ?>
		</div>
	</div>
	<hr class="invisible compact">
	<div class="fs-row footer__links">
		<div class='fs-cell fs-all-full'>
			<span class="">&copy; 2009-<?php echo date('Y'); ?> <?php bloginfo('name' );?>.</span>&nbsp;
			<div class="fs-lg-hide fs-md-hide"></div>
			<a href="<?php echo the_permalink(18); ?>" class=""><u><?php echo get_the_title(18); ?></u>.</a>&nbsp;
			<a href="<?php echo the_permalink(20); ?>" class=""><u><?php echo get_the_title(20); ?></u>.</a>&nbsp;
			<a href="<?php echo the_permalink(22); ?>" class=""><u><?php echo get_the_title(22); ?></u>.</a>&nbsp;
			<div class="fs-lg-hide fs-md-hide fs-sm-hide"></div>
      <span class="footer-credits fl--right text-right">
      	<span class="footer-credits__wrapper">
					<span class="footer-credits__link-wrapper"><a href="<?php echo the_permalink(22); ?>" class="">+ <u>Site Credits</u></a></span>
					<span class="footer-credits__link-wrapper">
						<a target="_blank" href="#" class="">Design by 12:01</a> — 
						<a target="_blank" href="http://howler.la" class="">Code by HOWLER</a>
					</span>
				</span>
			</span>
		</div>
	</div>
</footer>

<?php #if(is_front_page()){ include locate_template('parts/footer-mailchimp-easy.php' ); } ?>
<?php include locate_template('parts/footer-search.php' ); ?>

</div><!--Wrapper-->

<?php wp_footer(); ?>

</body>
</html>
