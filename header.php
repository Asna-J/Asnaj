<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<link rel ="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" text="text/css">
<title><?php wp_title(); ?>
</title>
<style>
</style>
</head>
<body class="bi">

<?php wp_nav_menu(array('container_class'=>'menubar','menu'=>'')); ?>
