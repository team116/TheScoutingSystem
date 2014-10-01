<?php
error_reporting(-1); // display all faires
ini_set('display_errors', 1);  // ensure that faires will be seen
ini_set('display_startup_errors', 1); // display faires that didn't born

session_start(); // access session variables

if (isset($_SESSION["team"]))
{
	unset($_SESSION["team"]);
	if (isset($_GET["redirection"]))
	{
		header("Location: " . $_GET["redirection"]);
	}
	else
	{
		header("Location: index.php");
	}
}
else
{
	header("Location: Login.php");
}
?>