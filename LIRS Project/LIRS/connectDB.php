<?php
	//connect to MySQL database server
	$connection = mysql_connect("localhost", "root", "") or die("Failed MySQL server connection attempt.<br>" . mysql_error() . "<br>");

	//connecting to database
	$selection = mysql_select_db("LIRS") or die("Fail to connect to database.<br>" . mysql_error() . "<br>");
?>