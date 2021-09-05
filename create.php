<?php
require_once("connection.php");

if(isset($_POST["submit"])){
    $sql="INSERT INTO crud (name, email, address) VALUES ('$_POST[name]','$_POST[email]','$_POST[address]')";
    if($con->query($sql)){
        header("Location: index.php");
        echo "<script>alert('done')</script>";

    }
    else{
        echo "fail";
    }
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
            <td><input type="text" name="name" id="name"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email"/></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" id="address"/></td>
        </tr>
        <tr>
            <td colspan='2' align="center"><input type="submit" name="submit" value="Submit Form"></td>
        </tr>
    </table>    
    </form>
</body>
</html>