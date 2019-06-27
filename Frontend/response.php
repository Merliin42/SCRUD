<?php
include "../header.php";
?>
<a href="database.php" class="nav-link btn btn-secondary"><i class="fas fa-less-than"></i></a>
</nav>
<div class="d-flex flex-column-reverse">
	<div class="container" style="margin-top: 2.5rem">
		<table class="table table-hover table-striped p-2 text-center">
<!-- 			<thead class="bg-primary">
				<tr>
					<?php 
					$response = Request($_POST["request"]);
					$fields = array();

					while ($head = $response->fetch()) {
						$fields[] = $head["Field"];
						?>
						<td scope="col"><?= $head["Field"] ?></td>
					<?php } ?>
				</tr>
			</thead> -->
			<tbody>
				<?php
				$response = Request($_POST["request"]);
				$i = 0;
				while ($row = $response->fetch()) { ?>
					<tr scope="row">
						<?php foreach ($fields as $field) { ?>
							<td><?= $row[$field] ?></td>
						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>