<?php
if(!isset($_SESSION['IsLoginPortal']))
{
	header('location:Login.php');
}
?>