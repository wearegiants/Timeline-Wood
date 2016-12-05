</div>

<?php if(is_front_page()): ?>
<hr class="invisible">

<div class="fs-row">
	<div class="fs-cell fs-all-full">
		<div class="insta-wrapper">
			<div class="text-center"><a class="btn btn--big btn--outlined" href="http://instagram.com/timelinewood" target="blank">Instagram</a></div>
			<?php echo do_shortcode('[instashow id="1"]'); ?>
		</div>
	</div>
</div>

<?php endif; ?>

<div id="ticker" class="marquee bg--blue">
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
				<nav class="fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
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
				<nav class="fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<?php echo wp_nav_menu( $footerRight ); ?>
				</nav>
				<div class="fs-cell fs-lg-third fs-md-2 fs-sm-third fs-xs-half">
					<?php the_field('address', 4); ?>
				</div>
			</div>
		</div>
		<hr class="fs-cell fs-lg-hide fs-md-full fs-sm-3 divider">
		<div class="fs-cell fs-xl-4 fs-lg-5 fs-md-full fs-sm-full">
		
<?php
  $form_action = '//noongoons.us10.list-manage.com/subscribe/post?u=a16967a3803d008fcfa3388a9&id=5108d57724';
?>

	    <form class="footer__form relative" action="<?php echo $form_action; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
      	<label class="color--black accent accent--md">Join Our Newsletter</label>
        <input type="email" value="" placeholder="Email Address" name="EMAIL" id="Email" class="subscribe-input color--black" autocorrect="off" autocapitalize="off">
        <span class="input-group-btn">
          <button type="submit" class="footer__form-submit bg--darkBlue" name="subscribe" id="Subscribe">
            <span class="newsletter__submit-text--large">Submit</span>
          </button>
        </span>
	    </form>

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
			<a href="<?php echo the_permalink(13); ?>#<?php echo get_post(18)->post_name; ?>" class=""><u><?php echo get_the_title(18); ?></u>.</a>&nbsp;
			<a href="<?php echo the_permalink(13); ?>#<?php echo get_post(20)->post_name; ?>" class=""><u><?php echo get_the_title(20); ?></u>.</a>&nbsp;
			<a href="<?php echo the_permalink(13); ?>#<?php echo get_post(22)->post_name; ?>" class=""><u><?php echo get_the_title(22); ?></u>.</a>&nbsp;
			<div class="fs-lg-hide fs-md-hide fs-sm-hide"></div>
      <span class="footer-credits fl--right text-right">
      	<span class="footer-credits__wrapper">
					<span class="footer-credits__link-wrapper"><a href="<?php echo the_permalink(22); ?>" class="">+ <u>Site Credits</u></a></span>
					<span class="footer-credits__link-wrapper">
						<a target="_blank" href="#" class="">Design by 12:01</a> — 
						<a target="_blank" href="http://wearegiants.com" class="">Code by WeAreGiants.</a></span>
				</span>
			</span>
		</div>
	</div>
</footer>

<?php #if(is_front_page()){ include locate_template('parts/footer-mailchimp.php' ); } ?>
<?php include locate_template('parts/footer-search.php' ); ?>

</div><!--Wrapper-->

<?php wp_footer(); ?>

</body>
</html>
