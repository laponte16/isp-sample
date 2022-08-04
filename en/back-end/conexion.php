<?php 

    $host = "54.215.148.52";	
    $user = "sql3510867";
    $password = "uAd5kvlkUs";
    $database = "sql3510867";
    $port = "3306";

	$link = mysqli_connect($host,$user,$password,$database,$port);
	if (!$link) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }

?>