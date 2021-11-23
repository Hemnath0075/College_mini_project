<?php

session_start();

if(isset($_SESSION['staffid']))
{
	unset($_SESSION['staffid']);

}

header("Location: stafflogin.php");
die;