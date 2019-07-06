<?php
include 'Connection.php';
$conn = new Connection;
$getId = $_GET['id'];
$conn->update("DELETE FROM inventory WHERE id=$getId",NULL);
header("location:index.php");
?>