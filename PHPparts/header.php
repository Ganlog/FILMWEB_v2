	<header>
		<img src="IMG/logo.png" id="logo">
		<h1>FILMWEB_v2</h1>
		<div id="right-menu">
			<img src="IMG/menu.png">
			<ul>
				<?php
					if($isLogged){
						echo
						'
							<li><a href="user.php">Kokpit</a></li>
							<li><a href="wylogowano">Log out</a></li>
						';
					}else{
						echo
						'
							<li><a href="user.php">Kokpit</a></li>
							<li><a href="zalogowano">Log in</a></li>
							<li><a href="zalogowano">Sign up</a></li>
						';
					}
				?>
			</ul>
		</div>
		<nav>
			<ul>
				<li><a href="ranking.php">Best Films</a></li>
				<li><a href="ranking.php">Best Actors</a></li>
				<li><a href="ranking.php">Best Actresses</a></li>
				<li><a href="addMovie.php">Add Movie</a></li>
				<li><a href="addPerson.php">Add Person</a></li>
			</ul>
		</nav>
	</header>
