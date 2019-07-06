<?php
session_start();
include 'Connection.php';
$conn = new Connection;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $conn->getAll("SELECT * FROM user WHERE username='$username' AND password='$password'",null);
    if(count($result)){
        foreach($result as $r){
             $_SESSION['logged_id'] = $r['id'];
             $_SESSION['username'] = $r['username'];
        }
        header("location:index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{
            margin-top: 200px;
        }
    </style>
</head>
<body><center>
    <form action="" method="POST" style="background-color: aqua; margin-left: 350px; margin-right: 350px;">
        <br><h1>Login Form:</h1>
        <b>Username: </b><input type="text" name="username" placeholder="email/username"><br><br>
        <b>Password: </b><input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login"><br><br>
        <a href="register.php"><b>Register</b></a><br><br>
    </form></center>
</body>
</html>