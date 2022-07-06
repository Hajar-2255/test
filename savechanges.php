<?php
extract($_REQUEST);

try{
    
	require('connect.php');
    $result = $db->exec("UPDATE  employees SET name='$name', uname='$uname', email='$email', phone='$phone' WHERE  id = $eid");
	$db=null;
}
catch(PDOException $ex) {
    echo "Connection Error occured!"; //user friendly message
    die ($ex->getMessage());
}

header("Location: employees.php");
?>