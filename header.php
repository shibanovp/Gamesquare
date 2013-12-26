<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>
<?php
	wp_title ('|',true,'right');
	bloginfo('name');
?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/skeleton.css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" media="all" />
	<?php wp_head();?>
</head>
<body>
	<div class="container">
	<div class="five columns clearfix">
	<a href="<?php echo get_option('home')?>"><img src="<?php bloginfo('template_url')?>/img/logo.png" alt="" title="<?php  bloginfo('title')?>"/></a>
	<div class="sixteen columns nav-bar">
		<?php wp_nav_menu(array('container-class'=>'main-nav','container'=>'nav'))?>
	</div>
		
	</div>
	</div>
</body>