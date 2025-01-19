<?php

/* Template Name: Service Type Landing */

get_header(); ?>

<?php

if(have_posts()):
	while(have_posts()): the_post();

?>

<div class="container">

<?php the_content();?>

 <div class="owl-carousel owl-theme home-carousel">
	<?php
	if( have_rows('carousel_items') ):
	while( have_rows('carousel_items') ): the_row();
		$image = get_sub_field('image');
	?>
	<div class="item">
		<?php echo wp_get_attachment_image($image, 'full');?>
	</div>
	<?php endwhile; endif; ?>
</div>

</div>
<?php
	endwhile;
endif;

get_footer();

