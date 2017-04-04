<?php 

	Themewrangler::setup_page();get_header(/***Template Name: Glossary */);
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'url', true);
	$thumb_url = $thumb_url_array[0];

?>

<?php include locate_template('parts/page-header.php' ); ?>

<?php #Contact ?>
<div class="fs-row">
	<div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3">
		<div class="contact-desc">
			<?php the_field('description'); ?>
		</div>
	</div>
	<div class="fs-cell fs-lg-8 fs-lg-push-1 fs-md-4 fs-sm-3">
		<div class="contact-map">
			<img src="<?php echo $thumb_url; ?>" class="img-responsive" alt="Timeline Contact" />
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
		<div class="contact__subscribe">
      <?php echo do_shortcode('[epm_mailchimp]' ); ?>
    </div>
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