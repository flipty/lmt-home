<!DOCTYPE html>
<html>
<head>
  <title>LMT Home - Twin Cities General Contractor - Remodeling and Landscaping</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-196x196.png" sizes="196x196" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/lmthome.css?v=2025.2" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <nav class="intro">
    <div class="container">
      <div class="header-content">
        <div class="branding">
          <a href="https://lmt-home.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="LMT Home LLC"></a>
        </div>
        <div class="contact">
          <span class="header">LMT HOME</span>
          <a href="tel:<?php echo get_field('phone', 'options');?>"><?php echo get_field('phone', 'options');?></a><br>
          <a href="mailto:<?php echo get_field('email', 'options');?>"><?php echo get_field('email', 'options');?></a> 
        </div>        
      </div>
    </div>
  </nav>  
</header>
