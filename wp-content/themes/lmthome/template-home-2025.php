<?php

/* Template Name: Home Page Updated*/

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
<div class="container">

	<div class="row">
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
		<div class="col-md-8">
			<div class="row services">
				<div class="col-md-6 exterior">
					<a href="/landscaping">
						<img src="/wp-content/themes/lmthome/images/landscape.jpg" alt="">
						<h2>Landscaping</h2>
						<ul>
							<li>patios</li>
							<li>fire pits</li>
							<li>retaining walls</li>
							<li>laying sod</li>
							<li>tree removal</li>
							<li>planters</li>
							<li>regrading yard</li>
							<li><b>...and more!</b></li>
						</ul>
					</a>
				</div>
				<div class="col-md-6 interior">
					<a href="/remodeling">
						<img src="/wp-content/themes/lmthome/images/interior.jpg" alt="">
						<h2>Interior Remodeling</h2>
						<ul>
							<li>kitchen, bathroom, basement remodels</li>
							<li>flooring installation & refinishing</li>
							<li>adding lighting</li>
							<li>ceiling repairs/retexturizing</li>
							<li>tiling</li>
							<li>countertops & cabinets</li>
							<li>painting</li>
							<li>accent walls</li>
							<li><b>...and more!</b></li>
						</ul>

					</a>
				</div>
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
