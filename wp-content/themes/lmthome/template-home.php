<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Restaurant",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Minneapolis",
    "addressRegion": "MN",
    "postalCode": "55406",
    "streetAddress": "3223 East Lake Street"
  },
  "name": "Habanero Tacos Grill",
  "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 10:00-20:00",
  "priceRange": "$",
  "servesCuisine": "Mexican",
  "telephone": "(612) 501-6929",
  "url": "<?php echo get_site_url();?>",
  "hasMenu": "<?php echo get_site_url();?>/menu",
  "logo": "<?php echo get_site_url();?>/wp-content/themes/habanero/images/logo.png"
}
</script>

<div class="container content-container">
		<div class="row">
			<div class="col-md-8 home-carousel">
				<div class="coverup"><img src="<?php echo get_template_directory_uri(); ?>/images/coverup.png" alt="circle"></div>
				<div class="owl-carousel owl-theme">
					<?php
					if( have_rows('carousel_items') ):
    			while( have_rows('carousel_items') ): the_row();
	        	$image = get_sub_field('item_image');
	        	$text = get_sub_field('item_text');
	        	$price = get_sub_field('item_price');
        	?>
					<div class="item">
						<div class="inner">
							<div class="image">
								<?php echo wp_get_attachment_image( $image, 'full' ); ?>
							</div>
							<?php if ($text):?>
							<div class="caption">
								<p>
								<?php echo $text; ?>
								<?php if ($price){
									echo "<span>$";
									echo $price;
									echo "</span>";
									}
								?>
								</p>
							</div>
						<?php endif;?>
						</div>
					</div>
    			<?php endwhile;	endif; ?>
				</div>
				<!-- <a class="button secondary play">Play</a> -->
				<!-- <a class="button secondary stop">Stop</a> -->
			</div>
			<div class="col-md-4 home-content">
				<?php the_content();?>
				<div class="socials">
					<a href="https://www.facebook.com/habanerotacos"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook"></a>
					<a href="https://twitter.com/HabaneroTacos"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="twitter"></a>
					<a href="https://www.instagram.com/explore/locations/849095344/habanero-tacos/"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="instagram"></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="youtube"></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 home-extras">
				<div class="inner">
					<div class="row">
					<?php
					$args = array(
					    'posts_per_page' => 2
					);
					$latest_posts = new WP_Query( $args );
					if ( $latest_posts->have_posts() ) {
					    while ( $latest_posts->have_posts() ) {
					        $latest_posts->the_post();
					        // Post data goes here.
									?>
										<div class="col-md-6">
											<div class="post">
												<div class="image">
													<a href="<?php echo get_the_permalink();?>">
														<?php echo get_the_post_thumbnail('','thumbnail');?>
													</a>
												</div>
												<div class="content">
													<h3><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a></h3>
													<p><?php echo get_the_excerpt();?></p>
												</div>
											</div>
										</div>
									<?php
					    }
					}
					wp_reset_postdata();
					?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 truck-badge">
				<a href="/taco-truck/">
					<img src="<?php echo get_field('home_bottom_image');?>" alt="Habanero Tacos Grill's Food Truck">
				</a>
			</div>
			<div class="col-md-7 truck-content">
				<?php the_field('truck_content');?>
			</div>
		</div>
</div>

<?php
	endwhile;
endif;

get_footer();
?>
