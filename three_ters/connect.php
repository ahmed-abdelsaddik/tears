


<?php

$dsn="mysql:host=localhost;dbname=threetes";
$user="root";
$password="12345678";

$option=array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8');
try
{
	$con = new PDO($dsn,$user,$password,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
	echo "faild".$e->getMessage();
}


?>




