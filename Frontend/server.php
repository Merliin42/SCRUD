<?php 
include "../header.php";

$response = Bases();
?>
</div>
<div class="table">
	<div class="head">
		<span class="data">Base</span>
		<span class="data">Sélectionner</span>
	</div>
	<?php while ($row = $response->fetch()) { ?>
		<div class="row">
			<span class="data"><?= $row["Database"] ?></span>
			<a href="../Backend/usedb.php?dbname=<?= $row["Database"] ?>" class="select"><i class="fas fa-greater-than"></i></a>
		</div>
	<?php } ?>
</div>
<?php 
include "../footer.php";
?>