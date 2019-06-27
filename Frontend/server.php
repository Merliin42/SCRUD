<?php 
include "../header.php";

$response = Bases();
?>
</nav>
<div class="d-flex flex-column-reverse">
	<div class="container">
		<table class="table table-hover table-striped text-center" style="margin-top: 2.5rem">
			<thead class="bg-primary">
				<tr>
					<th scope="col">Base</th>
					<th scope="col">Supprimer</th>
					<th scope="col">Sélectionner</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = $response->fetch()) { ?>
					<tr>
						<th scope="row"><?= $row["Database"] ?></th>
						<td><a href="../Backend/dropdb.php?dbname=<?= $row["Database"] ?>" class="btn btn-secondary col-sm-12"><i class="fas fa-trash-alt text-danger"></i></a></td>
						<td><a href="../Backend/usedb.php?dbname=<?= $row["Database"] ?>" class="btn btn-secondary col-sm-12"><i class="fas fa-greater-than text-dark"></i></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="container p-2">
		<form action="../Backend/createdb.php" method="post">
			<legend>Créer</legend>
			<div class="form-inline justify-content-between">
				<div class="form-group justify-content-center col-sm-3">
					<label for="name" class="col-form-label col-sm-12">Nom de la base</label>
					<input class="form-control" type="text" name="name" id="name">
				</div>
				<input type="submit" name="Valider" class="btn btn-primary align-self-end">
			</div>
		</form>
	</div>
</div>
<?php 
include "../footer.php";
?>