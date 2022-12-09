<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
	integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
	crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="utils/css/style.css">
	<title>Document</title>
</head>
<body>

	<header class="navbar navbar-expand-lg navbar-dark bg-secondary p-4">
		<nav>
			<div class="container-fluid">
				
				<?php if(isset($_SESSION['user'])): ?>
					<a class="navbar-brand" href="?actionUser=logout">Logout</a> 
				
    				<a class="navbar-brand"	href="?actionUser=liste">Liste user</a> 
    				<a class="navbar-brand" href="#">Ajouter </a> 
    				
    				<a class="navbar-brand"	href="?actionVoiture=liste">Liste</a> 
    				<a class="navbar-brand" href="?actionVoiture=addVehicule">Ajouter </a> 
    			<?php else: ?>
    				<a class="navbar-brand" href="?actionUser=logon">Logon</a> 
					<a class="navbar-brand"	href="?actionUser=login">Login</a> 
				
				<?php endif; ?>
			</div>
		</nav>
		<?php if(isset($_SESSION['delete'])): ?>
			<div id="flasBag"> <?= $_SESSION['delete']; ?> </div>
		<?php endif; ?>
	</header>
	
	<main class="container-fluid">
		<?= $content ?? "" ?>
	</main>
	
	<footer class="text-white bg-secondary p-4 mt-5 text-center">
		&copy; - COUPE DU MONDE- 2022
		<?php unset($_SESSION['delete']); ?>
		<script type="text/javascript" src="utils/js/flasBag.js"></script>
	</footer>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	

</body>
</html>