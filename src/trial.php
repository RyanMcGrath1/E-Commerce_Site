<?php

$mysqli = new mysqli('localhost', 'mcgratr1','','mcgratr1_Test');

//echo mysqli_connect_errno();

if (mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit;
}

//ignore error
$sql = 'select * from auth_info';

$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trial Page</title>
    <style>

    </style>

<body>
<h1>hello there</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Account Type</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php
    while ($rows=$result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['username'];?></td>
            <td><?php echo $rows['password'];?></td>
            <td><?php echo $rows['account_type'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['phone'];?></td>
        </tr>
        <?php
    }
    ?>
</table>
<script>



</script>
</body>
</html>