<?php
include "..\header.php";
$response = Logs();
?>
</nav>
<form action="logs.php" method="get">
	<fieldset>
		<label for="date_in" class="col-sm-2 col-form-label">Date début</label>
      		<div class="col-sm-10">
        		<input type="text" class="form-control" id="date_in">
      		</div>
      	<label for="date_out" class="col-sm-2 col-form-label">Date fin</label>
      		<div class="col-sm-10">
        		<input type="text" class="form-control" id="date_out">
      		</div>
      	<input type="submit" class="btn btn-primary"></input>
	</fieldset>
</form>
<div class="container" style="margin-top: 2.5rem">
	<table class="table table-hover table-striped text-center">
		<thead class="bg-primary">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Date et heure de début</th>
				<th scope="col">Date et heure de fin</th>
				<th scope="col">Login</th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = $response->fetch()) { ?>
			<tr>
				<td scope="row"><?= $row["ID"] ?></td>
				<td scope="row"><?= $row["date_in"] ?></td>
				<td scope="row"><?= $row["date_out"] ?></td>
				<td scope="row"><?= $row["login"] ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<!-- <?php
include "..\footer.php";
?> -->