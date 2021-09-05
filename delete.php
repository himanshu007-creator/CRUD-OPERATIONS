<?php
require_once("connection.php");
$sql = "delete from crud where id=".$_GET['id']."";
$con->query($sql);
if($con->query($sql)){
    header("Location: index.php");
}
?>