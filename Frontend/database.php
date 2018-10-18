<?php
include "../header.php";

$response = Tables();
?>
<a href="server.php"><i class="fas fa-less-than"></i></a>
</div>
<div class="table">
	<div class="head">
		<span class="data">Table</span>
		<span class="data">Sélectionner</span>
	</div>
	<?php while ($row = $response->fetch()) { ?>
		<div class="row">
			<span class="data"><?= $row["Tables_in_".$_SESSION["dbname"]] ?></span>
			<a href="table.php?table=<?= $row['Tables_in_'.$_SESSION["dbname"]] ?>" class="select"><i class="fas fa-greater-than"></i></a>
		</div>
	<?php } ?>
</div>

<?php
include "../footer.php";
?>