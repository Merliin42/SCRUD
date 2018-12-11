<?php 
include "../header.php";

$response = Bases();
?>
</nav>
<div class="container">
	<table class="table table-hover border border-secondary" style="margin-top: 2.5rem">
		<thead>
			<tr>
				<th scope="col">Base</th>
				<th scope="col">Sélectionner</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = $response->fetch()) { ?>
				<tr>
					<th scope="row"><?= $row["Database"] ?></td>
					<td><a href="../Backend/usedb.php?dbname=<?= $row["Database"] ?>"><i class="fas fa-greater-than text-primary"></i></a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php 
include "../footer.php";
?>