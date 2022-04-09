<?php

$con= mysqli_connect("localhost","c8ittools_user1","7Yom6U@tLg","c8ittoolsdb") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>