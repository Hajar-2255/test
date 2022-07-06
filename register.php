<?php
extract($_POST);

try{
    
	require('connect.php');
    $result = $db->exec("INSERT INTO employees VALUES(null, '$fullname', '$uname','$email', '$phone', '$pass', '$cpass')");
	$db=null;
}
catch(PDOException $ex) {
    echo "Connection Error occured!"; //user friendly message
    die ($ex->getMessage());
}

header("Location: employees.php");
?>