<?php
require_once("connection.php");
session_start();
if(!isset($_SESSION['id'])){
$_SESSION['id']= $_GET['id'];
}
echo $_SESSION['id'];
$sql = "select * from crud where id=".$_SESSION['id']."";
$record =$con->query($sql);
$row = $record->fetch_assoc();

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email']? $_POST['email']:$row['email'];
    $address = $_POST['address']? $_POST['email']:$row['address'];
    $sqlu = "UPDATE `crud` SET `name`='".$_POST['name']."',`email`='".$_POST['email']."',`address`='".$_POST['address']."' WHERE id=".$_SESSION['id']."";
    $con->query($sqlu);
    session_unset();
    session_destroy();
    header("Location: index.php");

}


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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $row['name']?>" id="name"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $row['email']?>"id="email"/></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"value="<?php echo $row['address']?>" id="address"/></td>
        </tr>
        <tr>
            <td colspan='2' align="center"><input type="submit" name="submit" value="Submit Form"></td>
        </tr>
    </table>    
    </form>
</body>
</html>