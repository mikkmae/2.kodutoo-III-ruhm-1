<h2> Menüü </h2>
<ul>
	<?php if($page_file_name == "home.php") { ?>
	<li>
	Home
	</li>
	<?php } else { ?>
	<li>
		<a href="home.php">Home</a>
	</li>
	<?php } ?>
	
	<?php /*
	kontrollime lehte, vastavalt ka siis tekst
	
	if($page_file_name == "login.php") {
		echo '<li>Login</li>';
	}
	else {
		echo '<li><a href="login.php">Login</a></li>';
	}
	?>
	*/
	?>
	<li>
		<a href="login.php">Login</a>
	</li>
</ul>
