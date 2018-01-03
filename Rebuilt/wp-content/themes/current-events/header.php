<?php
/*-----------------------------------------------------------------------------------*/
/* This template will be called by all other template files to begin
/* rendering the page and display the header/nav
/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="viewport" content="initial-scale=1.0">
<title>
<?php bloginfo('name'); // show the blog name, from settings ?> |
<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,900,700,400italic' rel='stylesheet' type='text/css'>
<!-- <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,900,700' rel='stylesheet' type='text/css'> -->
<!-- UNSLIDER -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/unslider-min.js"></script>
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/js/unslider.css' media='all' />
<!-- scrollTO -->
<script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file,
// so if you want to load other stylesheets,
// I would load them with an @import call in your style.css
?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head();
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website.
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions.
// Move it if you like, but I would keep it around.
?>
</head>
<body
<?php body_class();
// This will display a class specific to whatever is being loaded by Wordpress
// i.e. on a home page, it will return [class="home"]
// on a single post, it will return [class="single postid-{ID}"]
// and the list goes on. Look it up if you want more.
?>
>
