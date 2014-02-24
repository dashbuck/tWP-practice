<div id=menuwrapper>
<div id=listwrapper>
<ul>
<?php

$pages = array('Main Page' => '/index.php', 'B' => '/B.php', 'Contact Us' => '/Contact.php', 'D' => '/D.php', 'E' => '/E.php', 'F' => '/F.php');
$current_page =($_SERVER['SCRIPT_NAME']);

foreach ($pages as $page=>$href)
{
	if ($current_page == $href)
	{echo "<div class='menu'><a class='current' href=".$href.">".$page."</a></div>";}
	else 
	{echo "<div class='menu'><a class='link' href=".$href.">".$page."</a></div>";}

}
?>
</div> <!--listwrapper-->

</div> <!--menuwrapper-->