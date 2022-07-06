<?php
try{
	require('connect.php');
    $rs = $db->query('select * from employees');
	$db=null;
}
catch(PDOException $ex) {
    echo "Connection Error occured!"; //user friendly message
    die ($ex->getMessage());
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style2.css">

    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            foreach($rs as $row){
                ?>
        <tr>
            <td><?php echo($row['id']);?></td>
            <td><?php echo($row['name']);?></td>
            <td><?php echo($row['uname']);?></td>
            <td><?php echo($row['email']);?></td>
            <td><?php echo($row['phone']);?></td>
            <td><a href="update.php?eid='<?php echo($row['id']);?>'">Update</a></td>
            <td><a href="delete.php?eid='<?php echo($row['id']);?>'">Delete</a></td>
        </tr>
        <?php
            }            
            ?>
    </table>
</body>

</html>