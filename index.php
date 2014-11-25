<?php

    include "inc/conx.php";

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Social Network</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <style>

        body {
            padding-top: 20px;
        }

    </style>

		<?php

			if (isset($errors) && !empty($errors)) {
    			echo '<div class="container"><div class="alert alert-danger">';
    			foreach($errors as $msg) {
    				echo $msg . '<br />';
    			}
    				echo '</div></div>';
    			}

		?>

		<div class="jumbotron shadow-inset">
			<div class="container">
				<legend>Login</legend>
				<form action="login_action.php" method="POST">
					<input type="text" name="loginUsername" placeholder="Username..." class="input shadow border-radius form-control" />
					<br />
					<input type="password" name="loginPassword" placeholder="Password..." class="input shadow border-radius form-control" />
					<br />
					<input type="submit" class="btn btn-primary shadow border-radius" value="Login" />
				</form>
			</div>
		</div>

    </body>
</html>
