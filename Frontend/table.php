<?php
include "../header.php";
?>
<a href="database.php"><i class="fas fa-less-than"></i></a>
<p>Entrées = <?= CountEntries($_GET["table"]) ?></p>
</div>
<div class="table">
	<div class="head">
 		<?php 
 		$response = Columns();
 		$fields = array();

 		while ($head = $response->fetch()) {
 			if ($head["Key"] == "PRI") {
 				$PrimaryKey = $head["Field"];
 			}
			$fields[] = $head["Field"];
 			?>
 			<span class="data"><?= $head["Field"] ?></span>
 		<?php } ?>
 		<span class="data">Modifier</span>
 		<span class="data">Supprimer</span>
 	</div>
	<?php 
	$response = Fields();
	while ($row = $response->fetch()) { ?>
		<div class="row">
			<?php foreach ($fields as $field) { ?>
				<span class="data"><?= $row[$field] ?></span>
			<?php } ?>
			<a href="../Frontend/table.php?table=<?= $_GET["table"] ?>&PrimaryKey=<?= $PrimaryKey ?>&value=<?= $row[$PrimaryKey] ?>" class="edit"><i class="fas fa-pen"></i></a>
			<a href="../Backend/delete.php?table=<?= $_GET["table"] ?>&PrimaryKey=<?= $PrimaryKey ?>&value=<?= $row[$PrimaryKey] ?>" class="delete"><i class="fas fa-trash-alt"></i></a>
		</div>
	<?php } ?>
</div>
<div class="edition">
<?php 
	if (isset($_GET["value"])) {
		$response = Select($_GET["table"], $_GET["PrimaryKey"], $_GET["value"]);
		$row = $response->fetch(); ?>
		<form action="../Backend/edit.php?table=<?= $_GET["table"] ?>&PrimaryKey=<?= $PrimaryKey ?>&value=<?= $row[$PrimaryKey] ?>" method="post" class="form">
			<p class="describe">Modifier</p>
			<div class="border">
				<?php foreach ($fields as $field) { 
					if($field == $PrimaryKey)
					{
						$readonly = "readonly=\"readonly\"";
					}else{
						$readonly = "";
					} ?>
					<div class="entry">
						<label><?= $field ?></label><input type="text" name="<?= $field ?>" value="<?= $row[$field] ?>" <?= $readonly ?>>
					</div>
				<?php } ?>
				<input type="submit" name="Valider" class="submit">
			</div>
	</form>
<?php }else{ ?>
	<form action="../Backend/add.php?table=<?= $_GET["table"] ?>" method="post" class="form">
		<p class="describe">Insérer</p>
		<div class="border">
			<?php foreach ($fields as $field) { 
				if($field == $PrimaryKey)
					{
						$readonly = "readonly=\"readonly\"";
						$placeholder = "placeholder=\"Clé Primaire\"";
					}else{
						$readonly = "";
						$placeholder = "";
				}
				?>
				<div class="entry">
					<label><?= $field ?></label><input type="text" name="<?= $field ?>" <?= $readonly ?> <?= $placeholder ?>>
				</div>
			<?php } ?>
		<input type="submit" name="Valider" class="submit">
		</div>
	</form>
<?php } ?>
<!-- <p>Entrées = <?= CountEntries($_GET["table"]) ?></p> -->
</div>


<?php 
include "../footer.php";
?>