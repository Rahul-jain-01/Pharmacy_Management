<?php
		$conn = mysqli_connect("localhost", "root", "march2001", "pharmacy");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>