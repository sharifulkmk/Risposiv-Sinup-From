<?php

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    	//*My sqle Databag save*//

    // Server Deatailes
	$hostname = 'localhost';
	$usermane = 'root';
	$userpass = '';

    // Server databaise Deatailes
	$dbname = 'signin_sigup_from';
    $tbnaim = 'user_data';

    // Databag table Deatailes
    $tb1 = 'Username';
    $tb2 = 'Password';

    // Server Connation
	$con = new mysqli($hostname,$usermane,$userpass,$dbname);

    // Sqli Save
/* 	$sql = "INSERT INTO $tbnaim ($tb1, $tb2) VALUES('$username','$pass')";

	if (mysqli_query($con,$sql))
    {
        echo 'inselt';
    } else {
        echo 'not inselt';
    }; */

    
?>
