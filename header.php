<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NatalePortfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<!-- <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href= "<?php echo get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css'?>">
<link rel="stylesheet" href= "<?php echo get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css'?>">
<link rel="stylesheet" href= "<?php echo get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-social.css'?>">
<link rel="stylesheet" href= "<?php echo get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-theme.min.css'?>">
 


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i" rel="stylesheet">
<link rel="stylesheet" href= "<?php echo get_template_directory_uri() . '/assets/css/style_blog.css'?>">

<?php wp_head(); ?>
</head>

<body>

