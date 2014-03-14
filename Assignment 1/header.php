<!DOCTYPE html>
<!--Fixes HTML5 for stupid old browsers from http://www.w3.org/wiki/HTML_structural_elements -->
<script>
    document.createElement('article');
    document.createElement('section');
    document.createElement('aside');
    document.createElement('hgroup');
    document.createElement('nav');
    document.createElement('header'); 
    document.createElement('footer');
    document.createElement('figure');
    document.createElement('figcaption'); 
</script>

<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'>
		<?php
		$pages = array('/index.php' => 'Main Page', '/index.php?page=B.php' => 'B', '/index.php?page=Contact.php' => 'Contact Us', '/index.php?page=D.php' => 'D', '/index.php?page=E.php' => 'E', '/index.php?page=F.php' => 'F');

		$current_page = ($_SERVER['REQUEST_URI']);

		echo "<title>".$pages[$current_page]."</title>"?>
	</head>
	<body>
		<div id='container'>
		<header id='header'>
		<a href="\index.php"><img src='Snowflake_Blue_Nova.jpg' alt='Blue Nova' /></a>
		</header>
	
		<div id=menuwrapper>
		<div id=listwrapper>
		<ul>
		<?php
		$pages = array('/index.php' => 'Main Page', '/index.php?page=B.php' => 'B', '/index.php?page=Contact.php' => 'Contact Us', '/index.php?page=D.php' => 'D', '/index.php?page=E.php' => 'E', '/index.php?page=F.php' => 'F');
		foreach ($pages as $href=>$page){
		if ($current_page == $href){
		echo "<div class='menu'><a class='current' href=".$href.">".$page."</a></div>";
		}
		else{
		echo "<div class='menu'><a class='link' href=".$href.">".$page."</a></div>";
			}
		}
		?>
		</div> <!--listwrapper-->
		</div> <!--menuwrapper-->
	
		<div id="background">
