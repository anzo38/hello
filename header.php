<html>
<head>
<title>
<?php wp_title('｜', true, 'right'); ?></title>
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta name="format-detection" content="telephone=no">
<!-- slick -->


<!-- /slick js -->


<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/taxtillate/animate.css" media="screen" />
 <script src="<?php echo get_template_directory_uri(); ?>/taxtillate/fittext.js"> </script>
 <script src="<?php echo get_template_directory_uri(); ?>/taxtillate/jquery/lettering.js"> 



</script>
 

</head>

<body <?php body_class(); ?>>
<?php wp_body_open();?>

<header>
<section id="mainvisal">
 <div class="mainvisal-innner">
    <nav>
      <ul class="main-nav">
      
        <li><a href ="<?php echo home_url( '/' );?>#about">About</a></li>
        <li><a href ="<?php echo home_url( '/' );?>#bio">Biography</a></li>
        <li><a href ="<?php echo home_url( '/' );?>#skills">Skills</a></li>
        <li><a href
        ="<?php echo get_page_link( 22 ); ?>">works</a></li>
        <li><a href ="<?php echo get_page_link( 20 ); ?>">contact</a></li>
      </ul>
    </nav>
    <div class="mainvisal-tittle"> 
    <h1>Hello</h1>
    <p>SAYAKO YAMAZAKI</p>
    </div>
  
  
  </div>
</section>
</header>

<main>
