<?php
	$db = @new mysqli("localhost", "root", "", "myDB");

	if ($db->connect_error) {
		die(' Error');
	} else {
		mysqli_set_charset($db,'utf8');
	}
?>