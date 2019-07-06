<?php
session_start();
if(!isset($_SESSION['logged_id'])){
	header("location:login.php");
}
include 'Connection.php';
$conn = new Connection;
$getId = $_GET['id'];
$res = $conn->getAll("SELECT * FROM task WHERE id=$getId",NULL);

foreach ($res as $r2){
    $tasks = $r2['tasks'];
    $conn->insertCompleteTask($tasks);
}
$conn->updateCT("DELETE FROM task WHERE id=$getId",NULL);
//Search
if(isset($_POST['src'])){
    $query = $_POST['search'];
    $result = $conn->getAll("SELECT * FROM task_done WHERE tasks LIKE '%$query%'",null);
}else{
    $result = $conn->getAll("SELECT * FROM task_done",null);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tasks Done</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin: 150px;
        }
        * {
            box-sizing: border-box;
          }
    </style>
</head>
<body>
    <table align="right">
        <tr>
            <td style="color:green;">Logged in As: <b> <?php echo $_SESSION['username']; ?> </b> || 
                <a href="logout.php"><b>logout</b></a></td>
        </tr>
    </table>
    <br><br>
    <table border="1" align="center">
        <tr align="center" style="color:brown">
            <td><b>ID</b></td>
            <td><b>Completed Tasks</b></td>
        </tr>
        <?php
            foreach($result as $r){
        ?>
        <tr align="center">
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['tasks']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>