<?php
include "../header.php";

$response = Tables();
?>
<a href="server.php" class="nav-link btn btn-secondary"><i class="fas fa-less-than"></i></a>
</nav>
<div class="container" style="margin-top: 2.5rem">
	<table class="table table-hover table-striped">
		<thead class="bg-primary">
			<tr>
				<th scope="col">Table</th>
				<th scope="col">Sélectionner</th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = $response->fetch()) { ?>
			<tr>
				<th scope="row"><?= $row["Tables_in_".$_SESSION["dbname"]] ?></th>
				<td><a href="table.php?table=<?= $row['Tables_in_'.$_SESSION["dbname"]] ?>"><i class="fas fa-greater-than text-dark"></i></a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

<?php
include "../footer.php";
?>