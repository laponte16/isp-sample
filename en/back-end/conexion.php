<?php 
	$link = mysqli_connect("localhost","root","","isp_sample");
	if (!$link) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }

?>