<?php
include "../header.php";
?>
<a href="database.php" class="nav-link btn btn-secondary"><i class="fas fa-less-than"></i></a>
</nav>
<div class="container p-2">
		<form action="../Frontend/response.php" method="post">
			<legend>Insérer</legend>
			<div class="form justify-content-between">
				<div class="form-group">
					<label for="request">Reqête:</label>
					<textarea class="form-control" rows="5" id="request" name="request"></textarea>
				</div>
				<input type="submit" name="Valider" class="btn btn-primary align-self-end">
			</div>
		</form>
</div>
<div class="embed-responsive-21by9">
	<iframe class="embed-responsive-item col-12" src="database.php" style="height: 40rem;"></iframe>
</div>