<?php

	define("HOSTNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DBNAME", "phpapp");

	$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die("Cannot connect to database.");

	if($con){
		
	}

?>