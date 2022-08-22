<?php 

    $host = "sql212.epizy.com";	
    $user = "epiz_32148024";
    $password = "";
    $database = "epiz_32148024_isp_sample";
    $port = "3306";

	$link = mysqli_connect($host,$user,$password,$database,$port);
	if (!$link) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }

?>