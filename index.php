<?php
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$query = "select * from crud";
$result = $con->query($query);
?>
<form align="center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table>
<thead>
<tr>
<td>id</td>
<td>name</td>
<td>Email</td>
<td>Address</td>
<td><a href ="create.php">➕Create new</a></td>
</tr>
</thead>
<tbody>
<?php
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td>".$row['id']."</td>";
    echo  "<td>".$row['name']."</td>";
    echo  "<td>".$row['email']."</td>";
    echo  "<td>".$row['address']."</td>";
    echo "<td><a href ='read.php?id=".$row['id']."'>read</a>&nbsp;<a href ='update.php?id=".$row['id']."'>update</a>&nbsp;<a href ='delete.php?id=".$row['id']."'>delete</a></td>";
}
?>

</tbody>
</table>    
</body>
</html>