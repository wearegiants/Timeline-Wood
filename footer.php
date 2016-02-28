</div>

<div id="ticker" class="marquee bg--darkBlue">
	<div id="ticker__wrapper" class="marquee-content_items mono mono--sm color--white">
		<div><?php the_field('ticker',4); ?></div>
	</div>
</div>

<footer id="footer" class="footer footer--md bg--bgGray">
	<div class="fs-row">
		<div class="fs-cell fs-xl-8 fs-lg-7 fs-md-full fs-sm-3">
			<div class="fs-row">
				<nav class="fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<ul class="footer__nav">
						<li><a href="<?php echo the_permalink(7 ); ?>" class=""><?php echo get_the_title(7 ); ?></a></li>
						<li><a href="<?php echo the_permalink(11); ?>" class=""><?php echo get_the_title(11); ?></a></li>
						<li><a href="<?php echo the_permalink(33); ?>" class=""><?php echo get_the_title(33); ?></a></li>
						<li><a href="<?php echo the_permalink(35); ?>" class=""><?php echo get_the_title(35); ?></a></li>
						<li><a href="<?php echo the_permalink(15); ?>" class=""><?php echo get_the_title(15); ?></a></li>
					</ul>
				</nav>
				<nav class="fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<ul class="footer__nav">
						<li><a href="<?php echo the_permalink(13); ?>" class=""><?php echo get_the_title(13); ?></a></li>
						<li><a href="<?php echo the_permalink(37); ?>" class=""><?php echo get_the_title(37); ?></a></li>
						<li><a href="<?php echo the_permalink(39); ?>" class=""><?php echo get_the_title(39); ?></a></li>
						<li><a href="<?php echo the_permalink(41); ?>" class=""><?php echo get_the_title(41); ?></a></li>
						<li><a href="<?php echo the_permalink(43); ?>" class=""><?php echo get_the_title(43); ?></a></li>
					</ul>
				</nav>
				<div class="fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<?php the_field('address', 4); ?>
				</div>
			</div>
		</div>
		<hr class="fs-cell fs-lg-hide fs-md-full fs-sm-3 divider">
		<div class="fs-cell fs-xl-4 fs-lg-5 fs-md-full fs-sm-full">
			<form class="footer__form relative">
				<label class="color--black accent accent--md">Join Our Newsletter</label>
				<input type="text" placeholder="Email Address">
				<input type="submit" value="Submit" class="footer__form-submit bg--darkBlue">
			</form>
			<div class="fs-row">
				<a href="" class="accent accent--sm fs-cell fs-all-fifth">Facebook</a>
				<a href="" class="accent accent--sm text-center fs-cell fs-all-fifth">Instagram</a>
				<a href="" class="accent accent--sm text-center fs-cell fs-all-fifth">Twitter</a>
				<a href="" class="accent accent--sm text-center fs-cell fs-all-fifth">YouTube</a>
				<a href="" class="accent accent--sm text-right fs-cell fs-all-fifth">Pinterest</a>
			</div>
		</div>
	</div>
	<hr class="invisible compact">
	<div class="fs-row footer__links">
		<div class='fs-cell fs-all-full'>
			<span class="">&copy; 2009-<?php echo date('Y'); ?> <?php bloginfo('name' );?>.</span>&nbsp;
			<div class="fs-lg-hide fs-md-hide"></div>
			<a href="<?php echo the_permalink(13); ?>#<?php echo get_post(18)->post_name; ?>" class=""><?php echo get_the_title(18); ?>.</a>&nbsp;
			<a href="<?php echo the_permalink(13); ?>#<?php echo get_post(20)->post_name; ?>" class=""><?php echo get_the_title(20); ?>.</a>&nbsp;
			<a href="<?php echo the_permalink(13); ?>#<?php echo get_post(22)->post_name; ?>" class=""><?php echo get_the_title(22); ?>.</a>&nbsp;
			<div class="fs-lg-hide fs-md-hide fs-sm-hide"></div>
      <span class="footer-credits fl--right text-right">
      	<span class="footer-credits__wrapper">
					<span class="footer-credits__link-wrapper"><a href="<?php echo the_permalink(22); ?>" class="">+ Site Credits</a></span>
					<span class="footer-credits__link-wrapper">
						<a target="_blank" href="#" class="">Design by 12:01</a> — 
						<a target="_blank" href="http://wearegiants.com" class="">Code by WeAreGiants.</a></span>
				</span>
			</span>
		</div>
	</div>
</footer>

<?php include locate_template('parts/footer-mailchimp.php' ); ?>
<?php include locate_template('parts/footer-search.php' ); ?>

</div><!--Wrapper-->

<?php wp_footer(); ?>

</body>
</html>
