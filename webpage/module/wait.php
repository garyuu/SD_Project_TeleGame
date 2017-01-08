<?php
require_once("../function/mysql_connect.php");

$name = array(1 => "空位",
			  2 => "空位",
			  3 => "空位",
			  4 => "空位",
			  5 => "空位",
			  6 => "空位",
			  7 => "空位");

$db = new MySQLConnect();
$result = $db->query("SELECT ");

?>