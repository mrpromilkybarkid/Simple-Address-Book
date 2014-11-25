<?php

		require 'inc/conx.php';
		require 'inc/login_tools.php';

		list($check, $data) = validate($dbc, $_POST['loginUsername'], $_POST['loginPassword']);

		if ($check) {
			session_start();

			$_SESSION['id'] = $data['id'];
			$_SESSION['name'] = $data['name'];
			$_SESSION['username'] = $data['username'];

			//Set Cookie For 12 Hours
			$hour = time() + 43200;
			setCookie('rememberMe', $_SESSION['username'], $hour);

			load('addressbook/home.php');
		} else {
			$errors = $data;
		}
		mysqli_close($dbc);
		include "index.php";

?>
