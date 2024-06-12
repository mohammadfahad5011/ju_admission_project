<?php
	require('connection.php');
	setcookie("logged_username", "", time() - 3600);
	header('Location: '.$base_url.'admin');
?>