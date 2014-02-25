<div id=menuwrapper>
<div id=listwrapper>
<ul>
<?php

/*$pages = array('Main Page' => '/index.php', 'B' => '/B.php', 'Contact Us' => '/Contact.php', 'D' => '/D.php', 'E' => '/E.php', 'F' => '/F.php');*/
$pages = array('/index.php' => array('Main Page', 'index.php'), '/B.php' => array('B', 'index.php?page=B.php'), '/Contact.php' => array('Contact Us', 'index.php?page=Contact.php'), '/D.php' => array('D', 'index.php?page=D.php'), '/E.php' => array('E','index.php?page=E.php'), '/F.php' => array('F','index.php?page=F.php'));
$current_page =($_SERVER['SCRIPT_NAME']);

echo "<h1>".$current_page."</h1>";

foreach ($pages as $href=>$page)
{
	if ($current_page == $href)
	{echo "<div class='menu'><a class='current' href=".$page[1].">".$page[0]."</a></div>";}
	else 
	{echo "<div class='menu'><a class='link' href=".$page[1].">".$page[0]."</a></div>";}

}
?>
</div> <!--listwrapper-->

</div> <!--menuwrapper-->