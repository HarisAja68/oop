<?php

try
{
	$con = new PDO('mysql:host=localhost;dbname=pdo', 'root', '', array(PDO::ATTR_PERSISTENT => true));
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

include_once 'crudclass.php';
$crud = new crud($con);

?>