</div>

<div id="ticker" class="bg--red">
	<div id="ticker__wrapper" class="mono mono--sm color--white">
		<?php the_field('ticker',4); ?>
	</div>
</div>

<footer id="footer" class="footer--md bg--bgGray">
	<div class="fs-row">
		<nav class="fs-cell fs-lg-fifth fs-md-half fs-sm-half">
			<ul class="footer__nav">
				<li><a href="<?php echo the_permalink(7 ); ?>" class=""><?php echo get_the_title(7 ); ?></a></li>
				<li><a href="<?php echo the_permalink(11); ?>" class=""><?php echo get_the_title(11); ?></a></li>
				<li><a href="<?php echo the_permalink(33); ?>" class=""><?php echo get_the_title(33); ?></a></li>
				<li><a href="<?php echo the_permalink(35); ?>" class=""><?php echo get_the_title(35); ?></a></li>
				<li><a href="<?php echo the_permalink(15); ?>" class=""><?php echo get_the_title(15); ?></a></li>
			</ul>
		</nav>
		<nav class="fs-cell fs-lg-fifth fs-md-half fs-sm-half">
			<ul class="footer__nav">
				<li><a href="<?php echo the_permalink(13); ?>" class=""><?php echo get_the_title(13); ?></a></li>
				<li><a href="<?php echo the_permalink(37); ?>" class=""><?php echo get_the_title(37); ?></a></li>
				<li><a href="<?php echo the_permalink(39); ?>" class=""><?php echo get_the_title(39); ?></a></li>
				<li><a href="<?php echo the_permalink(41); ?>" class=""><?php echo get_the_title(41); ?></a></li>
				<li><a href="<?php echo the_permalink(43); ?>" class=""><?php echo get_the_title(43); ?></a></li>
			</ul>
		</nav>
	</div>
	<hr class="invisible">
	<div class="fs-row">
		<div class='fs-cell fs-all-full'>
			<span class="">&copy; 2009-<?php echo date('Y'); ?> <?php bloginfo('name' );?>.</span>
			<div class="fs-lg-hide fs-md-hide">
			<a href="<?php echo the_permalink(18); ?>" class="">Privacy Policy</a>
			<a href="<?php echo the_permalink(20); ?>" class="">Terms &amp; Conditions</a>
			<a href="<?php echo the_permalink(22); ?>" class="">Cookies</a>
			<div class="fs-lg-hide fs-md-hide">
			<a href="<?php echo the_permalink(22); ?>" class="fl--right">+ Site Credits</a>
		</div>
	</div>
</footer>

<?php include locate_template('parts/footer-mailchimp.php' ); ?>
<?php include locate_template('parts/footer-search.php' ); ?>

</div><!--Wrapper-->

<?php wp_footer(); ?>

</body>
</html>
