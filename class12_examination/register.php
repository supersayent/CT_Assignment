<?php
include 'Connection.php';
$conn = new Connection;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $data = array(
        ':username' => $username,
        ':password' => $password
    );
    $conn->update("INSERT INTO user (username,password) VALUES (:username,:password)",$data);
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body{
            margin-top: 200px;
        }
    </style>
</head>
<body><center>
    <form action="" method="POST" style="background-color: greenyellow; margin-left: 350px; margin-right: 350px;">
        <br><h1>SignUp Form:</h1>
        <b>Username: </b><input type="text" name="username" placeholder="email/username"><br><br>
        <b>Password: </b><input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Register"><br><br>
        <a href="login.php"><b>Login</b></a><br><br>
    </form></center>
</body>
</html>