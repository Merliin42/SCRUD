<?php 
include "../header.php";
Login();
$response = Bases();
?>
</nav>
<div class="container">
	<button type="button" class="btn btn-primary"><a href="logs.php">logs</a></button>
	<table class="table table-hover table-striped text-center" style="margin-top: 2.5rem">
		<thead class="bg-primary">
			<tr>
				<th scope="col">Base</th>
				<th scope="col">Sélectionner</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = $response->fetch()) { ?>
				<tr>
					<th scope="row"><?= $row["Database"] ?></td>
					<td><a href="../Backend/usedb.php?dbname=<?= $row["Database"] ?>" class="btn btn-secondary col-sm-12"><i class="fas fa-greater-than text-dark"></i></a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php 
include "../footer.php";
?>