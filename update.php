<?php
extract($_REQUEST);
try{
	require('connect.php');
    $rs = $db->query("select * from employees WHERE id = $eid");
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
    <form action="savechanges.php" method="post">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Update</th>

            </tr>
            <?php
            foreach($rs as $row){
                ?>
            <tr>
                <td> <input type="hidden" name="eid" value="<?php echo($row['id']);?>"><?php echo($row['id']);?></td>
                <td> <span id="detials"><input type="text" name="name" value="<?php echo($row['name']);?>"></span> </td>
                <td> <span id="detials"><input type="text" name="uname" value="<?php echo($row['uname']);?>"></span>
                </td>
                <td> <span id="detials"><input type="email" name="email" value="<?php echo($row['email']);?>"></span>
                </td>
                <td> <span id="detials"><input type="text" name="phone" value="<?php echo($row['phone']);?>"> </span>
                </td>

                <td><span id="button"><input type="submit" value="Save Changes"></span></td>
            </tr>
            <?php
            }            
            ?>
        </table>
    </form>
</body>

</html>