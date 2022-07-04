<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    	//*My sqle Databag save*//

    // Server Deatailes
	$hostname = 'localhost';
	$usermane = 'root';
	$userpass = '';

    // databaise Deatailes
	$dbname = 'signin_sigup_from';
    $tbnaim = 'user_data';

    // Databag table Deatailes
    $tb1 = 'Username';
    $tb2 = 'Email';
    $tb3 = 'Password';

    // Server Connation
	$con = new mysqli($hostname,$usermane,$userpass,$dbname);
	$sql = "INSERT INTO $tbnaim ( $tb1, $tb2, $tb3) VALUES('$username','$email','$pass')";

    if (mysqli_query($con,$sql))
    {
        echo 'inselt';
    } else {
        echo 'not inselt';
    };
    
?>
