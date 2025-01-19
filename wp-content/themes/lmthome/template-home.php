<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
<div class="container">

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
		<?php the_content();?>		
			<div class="project-grid">
			<?php
			if( have_rows('grid_items') ):
			while( have_rows('grid_items') ): the_row();
				$project = get_sub_field('project');
				$gallery = get_field('gallery', $project);
			?>
				<div class="item">
					<a href="<?php echo get_the_post_thumbnail_url($project);?>" data-lightbox="project-<?php echo $project;?>"><?php echo get_the_post_thumbnail($project, 'medium');?></a>
					<?php 
					foreach ($gallery as $galitem){ ?>
					<a class="project-gallery-hidden" href="<?php echo wp_get_attachment_image_url($galitem, 'full');?>" data-lightbox="project-<?php echo $project;?>"><?php echo wp_get_attachment_image($galitem, 'full');?></a>
					<?php } ?>
				</div>
			<?php endwhile; endif; ?>			
			</div>
		</div>
		<div class="col-md-6">
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
	</div>

	
</div>
</main>
<?php
	endwhile;
endif;

get_footer();
?>
