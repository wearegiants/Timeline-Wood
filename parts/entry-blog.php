<article <?php post_class('relative'); ?>>
	<div class="wrappesr bgs--bgGray">
		<a href="<?php the_permalink(); ?>" class="covered"></a>
		<div class="hentry__image">
			<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
		</div>
		<header class="hentry__header  text-center">
			<h2 class="hentry__title title--md"><?php the_title(); ?></h2>
			<span class="hentry__posted title--sm color--lightgray"><?php the_time('n.j.y'); ?></span>
		</header>
	</div>
</article>

<hr class="invisible compact">