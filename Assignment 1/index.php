<?php include 'header.php' ?>

	<article id='content'>
		<?php
		$page = $_GET['page'];	/* gets the variable $page */
		if (!empty($page)) {
			include($page);
		} 	/* if $page has a value, include it */
		else {
			include('main.php');
		} 	/* otherwise, include the default page */
		?>
	</article>
	
<?php include 'sidebar.php'; ?>
	
</div> <!--contentsidebar background div-->
	
<?php include 'footer.php'; ?>

</div> <!--container div-->
</body>
</html>