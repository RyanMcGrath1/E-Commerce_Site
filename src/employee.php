<?php

$mysqli = new mysqli('localhost', 'mcgratr1','Thompson16!','mcgratr1_Test');

//echo mysqli_connect_errno();

if (mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit;
}

//ignore error
$sql = 'select * from birds';
$sql1 = 'select * from cages';
$sql2 = 'select * from food';
$sql3 = 'select * from toys';


$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$result3 = $mysqli->query($sql3);
$mysqli->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="customer/CSS/index.css">
    <style>
        h2{
            margin-top: 15px;
        }

        td{
            margin: 5px;
        }
        .entries {
            margin: 5px;
        }
    </style>
</head>
<body>



<h1>Inventory List</h1>

<h2>Birds</h2>
<table>
    <tr style="border: 1px solid black">
        <th>ID</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Received</th>
        <th>Quantity</th>
        <th>Cost</th>
    </tr>
    <?php
    while ($rows=$result->fetch_assoc())
    {
        ?>
        <tr style="">
            <td class="entries"><?php echo $rows['id']. '&nbsp;&nbsp;'?></td>
            <td class="entries"><?php echo $rows['name']. '&nbsp;&nbsp;';?></td>
            <td class="entries"><?php echo $rows['birthday'] . '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows['date_received']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows['quantity']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows['cost']. '&nbsp;&nbsp; ';?></td>

        </tr>
        <?php
    }
    ?>
</table>


<h2>Cages</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Size</th>
        <th>Received</th>
        <th>Quantity</th>
        <th>Remaining</th>
        <th>Cost</th>
    </tr>
    <?php
    while ($rows1=$result1->fetch_assoc())
    {
        ?>
        <tr>
            <td class="entries"><?php echo $rows1['id']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows1['name']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows1['size']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows1['date_received']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows1['quantity']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows1['remaining']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows1['cost']. '&nbsp;&nbsp; ';?></td>
        </tr>
        <?php
    }
    ?>
</table>



<h2>Food</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Received</th>
        <th>Food Type</th>
        <th>Quantity</th>
        <th>Remaining</th>
        <th>Cost</th>
    </tr>
    <?php
    while ($rows2=$result2->fetch_assoc())
    {
        ?>
        <tr>
            <td class="entries"><?php echo $rows2['id']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows2['name']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows2['date_received']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows2['food_type']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows2['quantity']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows2['remaining']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows2['cost']. '&nbsp;&nbsp; ';?></td>
        </tr>
        <?php
    }
    ?>
</table>


<h2>Cages</h2>
<table style="padding-bottom: 25px;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Item Type</th>
        <th>Received</th>
        <th>Quantity</th>
        <th>Remaining</th>
        <th>Cost</th>
    </tr>
    <?php
    while ($rows3=$result3->fetch_assoc())
    {
        ?>
        <tr>
            <td class="entries"><?php echo $rows3['id']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows3['name']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows3['item_type']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows3['date_received']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows3['quantity']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows3['remaining']. '&nbsp;&nbsp; ';?></td>
            <td class="entries"><?php echo $rows3['cost']. '&nbsp;&nbsp; ';?></td>
        </tr>
        <?php
    }
    ?>
</table>


<button type="submit">Click Me</button>

</body>
</html>