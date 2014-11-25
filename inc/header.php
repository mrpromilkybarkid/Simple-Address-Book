<?php

	include "inc/conx.php";

	session_start();

	if (!isset($_SESSION['id'])) {
		require 'inc/login_tools.php';
		load();
	}

?>
<!doctype html>
<html lang="en">
<head>
	<title>Address Book</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>

	body {
		padding-top: 20px;
	}

</style>

<body>
