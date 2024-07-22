<?php
//temporary cache buster
header("Cache-Control: max-age=0, private, no-cache, no-store");
$ts = time();
include('includes/hours.php');
?>
<!DOCTYPE html>
<html <?php if (!$open) { echo 'class="closed"';}?>>
<head>
  <title>Habanero Tacos Grill Carry-Out Ordering</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-196x196.png" sizes="196x196" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/lmthome.css?ts=<?php echo $ts;?>" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php // echo $today; echo $currentTime; if( $open ){ echo ' open';}  if( !$open ){ echo ' closed';} ?>

<nav class="intro">
  <div class="container">
    <div class="branding">
      <p><a href="http://habanerotacosgrill.com/">RETURN TO OUR WEBSITE</a></p>
      <a href="http://habanerotacosgrill.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Habenero Tacos Grill"></a>
    </div>

  </div>
</nav>
