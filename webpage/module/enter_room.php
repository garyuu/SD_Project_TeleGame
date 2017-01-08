<?php

$_SESSION['name'] = $_POST['name'];
$_SESSION['stage'] = "wait";
header("Location:../index.php");
exit();
?>