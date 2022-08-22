<?php 

    $host = "192.168.0.182";	
    $user = "epiz_32148024";
    $password = "Dsympt03RcmH";
    $database = "epiz_32148024_isp_sample";
    $port = "3306";

	$link = mysqli_connect($host,$user,$password,$database,$port);
	if (!$link) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }

?>