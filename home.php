<?php

	include "inc/header.php";

?>

	<div class="container">
		<div class="jumbotron">
			<h1 style="text-align: center;">Address Book For <br /><b><?php echo $_SESSION['name']; ?></b></h1>
			<legend>Contacts</legend>
			<?php

				$currentUser = $_SESSION['username'];

				$result = mysqli_query($dbc, "SELECT * FROM contacts WHERE contactFor = '$currentUser'");

				while ($row = mysqli_fetch_object($result)) {
					$contactName = $row->name;
					$contactPhoneNumber = $row->phoneNumber;
					$contactEmail = $row->email;

					?>

						<div class="row" style="text-align: center;">
							<div class="col-md-4">
								<h4><span class="glyphicon glyphicon-user"></span><br /><b><?php echo $contactName; ?></b></h4>
							</div>
							<div class="col-md-4">
								<h4><span class="glyphicon glyphicon-earphone"></span><br /><b><?php echo $contactPhoneNumber; ?></b></h4>
							</div>
							<div class="col-md-4">
								<h4><span class="glyphicon glyphicon-envelope"></span><br /><b><?php echo $contactEmail; ?></b></h4>
							</div>
						</div>
						<hr />

					<?php
				}

			?>
		</div>
	</div>

<?php

	include_once "inc/js.php";

?>

<?php

	include_once "inc/footer.php";

?>
