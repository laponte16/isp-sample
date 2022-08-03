<?php 
	$link = mysqli_connect("ec2-107-22-122-106.compute-1.amazonaws.com","blmpcpjcxstyva","7a715b95d910d73e924e34f4074ee9d0583d6f6416f1a296e01d933999162f15","d7h894o3lgdppj");
	if (!$link) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }

?>