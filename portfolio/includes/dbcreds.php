<?php
//dbreds.php
// Connect to database
$database = "nayazgre_grc";
$username = "nayazgre_grcuser";
$password = "Afghanistan@55";
$hostname = "localhost";
$cnxn = @mysqli_connect($hostname,$username,$password,$database)
or die("There was error in connection");
