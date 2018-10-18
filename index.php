<!DOCTYPE html>
<html>
<head>
	<title>SCRUD</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<form action="Backend/login.php" method="post" class="form">
		<p class="describe" id="login">Connexion</p>
		<div class="border">
			<div class="entry">
				<label>Host</label><input type="text" name="host">
			</div>
<!-- 			<div class="entry">
				<label>Nom de la base : </label><input type="text" name="dbname">
			</div> -->
			<div class="entry">
				<label>Utilisateur</label><input type="text" name="user">
			</div>
			<div class="entry">
				<label>Mot de passe</label><input type="password" name="password">
			</div>
			<input type="submit" name="submit" class="submit">
		</div>
	</form>
</body>
</html>