<?php

	$dbc = mysqli_connect("localhost", "root", "mysql", "addressbook")or die(mysqli_connect_error());
	mysqli_select_db($dbc, "addressbook");

?>