<?php
include 'Connection.php';
$conn = new Connection;
$getId = $_GET['id'];
$res = $conn->getAll("SELECT * FROM task WHERE id=$getId",NULL);
//print_r($res);

//UPDATE Method
if(isset($_POST['submit'])){
    $tasks = $_POST['tasks'];
    $data = array(':tasks' => $tasks);
    $conn->update("UPDATE task SET tasks=:tasks WHERE id=$getId",$data);
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>edit.php</title>
</head>
<body>
    <form action="" method="POST">
        <?php
            foreach($res as $r){
        ?>
        <input type="text" name="tasks" value="<?php echo $r['tasks']; ?>"><br>
        <input type="submit" name="submit" value="Update"><br>
        <?php
            }
        ?>
    </form>
</body>
</html>