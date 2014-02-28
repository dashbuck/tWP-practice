<?php

$pages = array('/index.php' => 'Main Page', '/index.php?page=B.php' => 'B', '/index.php?page=Contact.php' => 'Contact Us', '/index.php?page=D.php' => 'D', '/index.php?page=E.php' => 'E', '/index.php?page=F.php' => 'F');

$current_page = ($_SERVER['REQUEST_URI']);

echo "<title>".$pages[$current_page]."</title>"
	
?>