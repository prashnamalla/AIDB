<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 4/9/2018
 * Time: 9:50 AM
 */
session_start();

if (($_SESSION["login"])!="true") {
	header('Location:index.php');
	
}

echo "WELCOME TO ADMIN DASHBOARD".$_SESSION['UserName']; //$_SESSION['UserName'];

echo "<a href='includes/logout.php'> LOGOUT </a>";


?>
