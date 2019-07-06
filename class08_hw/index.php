<?php
/*Using Form*/
include 'Connection.php';
$conn = new Connection;
$result = $conn->getAll("SELECT * FROM mobiles");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $model = $_POST['model'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $conn->insertData($name,$model,$type,$price);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Collection</title>
    <link rel="stylesheet" href="style.css">
    <script src="function.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top: 80px">
    <form action="" method="POST"><center>
        <b>Name: </b><input type="text" name="name"><br><br>
        <b>Model: </b><input type="text" name="model"><br><br>
        <b>Type: </b><input type="text" name="type"><br><br>
        <b>Price: </b><input type="text" name="price"><br><br>
        <b></b><input type="submit" name="submit" value="Insert"><br>
    </center></form>
    <hr>
    <div class="search-container">
        <form action="action_page.php" method="GET"><center>
          <input type="text" placeholder="Search.." name="search">
          <!--<button type="submit"><i class="fa fa-search"></i></button>-->
          <input type="submit" name="submit" value="GO">
            </center>
        </form>
    </div>
    <hr>
    <table id="myTable" border="1">
        <tr>
            <th>ID</th>
            <th onclick="sortTable(0)">Name</th>
            <th>Model</th>
            <th>Type</th>
            <th onclick="sortTable(1)">Price</th>
        </tr>
        <?php
            foreach ($result as $res){
        ?>
        <tr>
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['model']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <td><?php echo $res['price']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>