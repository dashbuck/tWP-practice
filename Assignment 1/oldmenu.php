<?php
$page = basename($_SERVER['SCRIPT_NAME'], '.php');
$index = $b = $contact = $d = $e = $f = "class='link'";
}

if ($page == 'index')
	{$index = "class='current'";}
else
	{if ($page == 'B')
		{$b = "class='current'";}
	else
		{if ($page == 'Contact')
			{$contact = "class='current'";}
		else
			{if ($page == 'D')
				{$d = "class='current'";}
			else
				{if ($page == 'E')
					{$e = "class='current'";}
				else
					{if ($page == 'F')
						{$f = "class='current'";}
					}
				}
			}
		}
	}

$menu = "<nav>
			<div id='menu'>
			<ul id = 'menulist'>
				<li><a ".$index." href='index.php'>Main Page</a></li>
				<li><a ".$b." href='B.php'>B</a></li>
				<li><a ".$contact." href='Contact.php'> Contact</a></li>
				<li><a ".$d." href='D.php'>D</a></li>
				<li><a ".$e." href='E.php'>E</a></li>
				<li><a ".$f." href='F.php'>F</a></li>
			</ul>
			</div>
		</nav>";
		
return $menu;
?>