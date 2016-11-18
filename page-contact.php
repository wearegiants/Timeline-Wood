<?php 

	Themewrangler::setup_page();get_header(/***Template Name: Glossary */);
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];

?>

<div class="hero hero--sm bg--bgGray relative wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<h2 class="title title--md text-center capped spaced nomargin color--black"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>

<hr class="invisible">
<?php #Contact ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('description'); ?></div>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3">
		<div class="contact-map">
			<?php the_field('map'); ?>
		</div>
	</div>
</div>

<hr class="invisible big">
<?php #Join the Newsletter ?>
<?php
  $form_action = get_field('mailchimp_action_url', 11);
?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('join'); ?></div>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3">
		<form class="contact__subscribe" action="<?php echo $form_action; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
      <div class="input-group">
        <input type="email" value="" placeholder="Enter your email address" name="EMAIL" id="Email" class="contact__subscribe-text color--black" autocorrect="off" autocapitalize="off">
        <span class="input-group-btn">
          <button type="submit" class="subscribe-form-submit bg--orange color--white ss-gizmo ss-right right" name="subscribe" id="Subscribe">
            <span class="newsletter__submit-text--large">Submit</span>
          </button>
        </span>
      </div>
    </form>
	</div>
</div>

<hr class="invisible big">
<?php #Contact ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><?php the_field('commercial_inquiries'); ?></div>
	<?php $contact = get_field('contact_shortcode'); ?>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3"><?php echo do_shortcode($contact); ?></div>
</div>

<hr class="invisible">

<?php get_footer(); ?>