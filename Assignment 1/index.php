<!DOCTYPE html>
<!--Fixes HTML5 for stupid old browsers - might need to be in CSS file instead? http://www.w3.org/wiki/HTML_structural_elements unclear. -->
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
		<title>Page Title</title>
	</head>
	<body>
		<div id='container'>
		<header id='header'>
	<?php include 'header.php'; ?>
		</header>
	
	<?php include 'testmenu.php'; ?>
	
	<div id="background">
	
	<div id="evener"> <!--content and sidebar even-er -->
		<article id='content'>
	<?php
	$page = $_GET['page'];	/* gets the variable $page */
	if (!empty($page)) {
		include($page);
	} 	/* if $page has a value, include it */
	else {
		include('test.php');
	} 	/* otherwise, include the default page */
	?>
		</article>
		
		<aside id='sidebar'>
	<?php include 'sidebar.php'; ?>
		</aside>
	</div>
        
        <div id='footwrapper'>
	<?php include 'footer.php'; ?>
		</div>
	</div>
	</div>
	</body>
</html>