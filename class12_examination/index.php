<?php
session_start();
if(!isset($_SESSION['logged_id'])){
	header("location:login.php");
}
include 'Connection.php';
$conn = new Connection;

//Search
if(isset($_POST['src'])){
    $query = $_POST['search'];
    $result = $conn->getAll("SELECT * FROM task WHERE tasks LIKE '%$query%'",null);
}else{
    $result = $conn->getAll("SELECT * FROM task",null);
}

if(isset($_POST['submit'])){
    $tasks = $_POST['tasks'];
    $conn->insertData($tasks);
    header('location:');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>
    <meta http-equiv="refresh" content="5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin: 150px;
        }
        * {
            box-sizing: border-box;
          }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
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
    
    <br>
    
    <br>
    <form action="" method="POST">
        <table align="center" style="background-color:sandybrown;">
            <tr>
                <td><b>Task:</b></td>
                <td><input type="textbox" name="tasks" placeholder="Enter Your Task"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Insert" style="color:blue;font-weight:bold;"></td>
            </tr>
        </table>
        <br>
    </form>
    <hr>
    <br>
    <table border="1" align="center">
        <tr align="center" style="color:brown">
            <td><b>ID</b></td>
            <td><b>Tasks</b></td>
            <td><b>Actions</b></td>
        </tr>
        <?php
            foreach ($result as $res){
        ?>
        <tr align="center">
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['tasks']; ?></td>
            <td><a href="edit.php?id=<?php echo $res['id']; ?>"><b>Edit</b></a> <b> || </b>
            <a href="delete.php?id=<?php echo $res['id']; ?>" onclick="return confirm('Are you sure?')"><b>Delete</b></a> <b> || </b>
            <a href="done.php?id=<?php echo $res['id']; ?>" target=1><b>Mark as Done</b></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>