<?php
include "../header.php";
?>
<span class="nav-item btn btn-secondary">Entrées = <?= CountEntries($_GET["table"]) ?></span>
<a href="database.php" class="nav-link btn btn-secondary"><i class="fas fa-less-than"></i></a>
</nav>
<div class="d-flex flex-column-reverse">
	<div class="container" style="margin-top: 2.5rem">
		<table class="table table-hover table-striped p-2 text-center">
			<thead class="bg-primary">
				<tr>
					<?php 
					$response = Columns();
					$fields = array();

					while ($head = $response->fetch()) {
						if ($head["Key"] == "PRI") {
							$PrimaryKey = $head["Field"];
						}
						$fields[] = $head["Field"];
						?>
						<td scope="col"><?= $head["Field"] ?></td>
					<?php } ?>
					<td scope="col">Modifier</td>
					<td scope="col">Supprimer</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$response = Fields();
				while ($row = $response->fetch()) { ?>
					<tr scope="row">
						<?php foreach ($fields as $field) { ?>
							<td><?= $row[$field] ?></td>
						<?php } ?>
						<td><a href="../Frontend/table.php?table=<?= $_GET["table"] ?>&PrimaryKey=<?= $PrimaryKey ?>&value=<?= $row[$PrimaryKey] ?>" class="btn btn-secondary col-sm-12"><i class="fas fa-pen text-primary"></i></a></td>
						<td><a href="../Backend/delete.php?table=<?= $_GET["table"] ?>&PrimaryKey=<?= $PrimaryKey ?>&value=<?= $row[$PrimaryKey] ?>" class="btn btn-secondary col-sm-12"><i class="fas fa-trash-alt text-danger"></i></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="container p-2">
		<?php 
		if (isset($_GET["value"])) {
			$response = Select($_GET["table"], $_GET["PrimaryKey"], $_GET["value"]);
			$row = $response->fetch(); ?>
			<form action="../Backend/edit.php?table=<?= $_GET["table"] ?>&PrimaryKey=<?= $PrimaryKey ?>&value=<?= $row[$PrimaryKey] ?>" method="post">
				<legend>Modifier</legend>
				<div class="form-inline justify-content-between">
					<?php foreach ($fields as $field) { 
						if($field == $PrimaryKey)
						{
							$readonly = "readonly=\"readonly\"";
						}else{
							$readonly = "";
						} ?>
						<div class="form-group justify-content-center col-sm-3">
							<label for="<?= $field ?>" class="col-form-label col-sm-12"><?= $field ?></label>
							<input class="form-control" type="text" name="<?= $field ?>" id="<?= $field ?>" value="<?= $row[$field] ?>" <?= $readonly ?>>
						</div>
					<?php } ?>
					<input type="submit" name="Valider" class="btn btn-primary align-self-end">
				</div>
			</form>
		<?php }else{ ?>
			<form action="../Backend/add.php?table=<?= $_GET["table"] ?>" method="post">
				<legend>Insérer</legend>
				<div class="form-inline justify-content-between">
					<?php foreach ($fields as $field) { 
						if($field == $PrimaryKey)
							{
								$readonly = "readonly=\"readonly\"";
								$placeholder = "placeholder=\"Clé Primaire\"";
							}else{
								$readonly = "";
								$placeholder = "";
						} ?>
						<div class="form-group justify-content-center col-sm-3">
							<label for="<?= $field ?>" class="col-form-label col-sm-12"><?= $field ?></label>
							<input class="form-control" type="text" name="<?= $field ?>" id="<?= $field ?>" <?= $readonly ?> <?= $placeholder ?>>
						</div>
					<?php } ?>
					<input type="submit" name="Valider" class="btn btn-primary align-self-end">
				</div>
			</form>
		<?php } ?>
	</div>
</div>


<?php 
include "../footer.php";
?>