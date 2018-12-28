<!DOCTYPE html>
<html>
<head>
	<title>SCRUD</title>
	<!-- <link rel="stylesheet" type="text/css" href="../style.css"> -->
	<link rel="stylesheet" type="text/css" href="Style/bootstrap.min.css">
</head>
<body class="container justify-content-center">
	<form action="Backend/login.php" method="post" class="jumbotron">
		<h1 class="display-3 text-center">Connexion</h1>
		<div class="form-inline">
			<div class="col-lg-1"></div>
			<div class="form-group col-lg-3">
				<label for="connectHost" class="col-lg-12 col-form-label">Host</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" name="connectHost" id="connectHost">
				</div>
			</div>
			<div class="form-group col-lg-3">
				<label for="connectUser" class="col-lg-12 col-form-label">Utilisateur</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" name="connectUser" id="connectUser">
				</div>
			</div>
			<div class="form-group col-lg-3">
				<label for="connectPassword" class="col-form-label col-lg-12">Mot de passe</label>
				<div class="col-lg-10">
					<input type="password" class="form-control" name="connectPassword" id="connectPassword">
				</div>
			</div>
			<div class="form-group col-lg-2">
				<div class="col-lg-12" style="height: 2.25rem"></div>
				<input type="submit" name="submit" class="btn btn-primary align-self-end">
			</div>
		</div>
	</form>
</body>
</html>