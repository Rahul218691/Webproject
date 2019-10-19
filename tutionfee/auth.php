<?php
session_start();
if (!isset($_SESSION['auth'])) {
	header("LOCATION:login.php");
}
?>