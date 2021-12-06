<?php
define('db_server',"localhost");
define('username',"root");
define('password',"");
define('db_name',"practice_");
$connection = mysqli_connect(db_server,username,password,db_name);
if(mysqli_connect_errno())
die("database connection error:".mysqli_connect_errno()."(".
mysqli_connect_errno().")");
else 
echo "database connection successfull";
?>

