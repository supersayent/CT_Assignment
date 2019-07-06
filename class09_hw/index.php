<?php
/*Using Form*/
/*session_start();
if(isset($_SESSION['logged_id'])){
    header("location:login.php");
}*/
include 'Connection.php';
$conn = new Connection;
//$result = $conn->getAll("SELECT * FROM inventory",NULL);
/*$conn->insertData("Mercedes-Benz","S-Class","800000");
$conn->insertData("BMW","7-Series","780000");
$conn->insertData("Porsche","Panamera","750000");
$conn->insertData("Chevrolet","Corvette","680000");
$conn->insertData("Lexus","LC","670000");
$conn->insertData("Porsche","911","660000");
$conn->insertData("Audi","A5","650000");
$conn->insertData("Tesla","S","750000");
$conn->insertData("Tesla","3","700000");
$conn->insertData("Acura","NSX","610000");*/

//Search
if(isset($_POST['src'])){
    $query = $_POST['search'];
    $result = $conn->getAll("SELECT * FROM inventory WHERE name LIKE '%$query%'",null);
    print_r($result);
}else{
    $result = $conn->getAll("SELECT * FROM inventory",null);
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $supplier = $_POST['supplier'];
    $conn->insertData($name,$quantity,$price,$supplier);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Collection</title>
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
    <!--<a href="logout.php">logout</a>-->
    
    <!--<form action="" method="POST">
        <input type="text" name="search">
        <input type="submit" name="src" value="search"><br>
    </form>
    <form class="example" action="" method="POST">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit" name="src"><i class="fa fa-search"></i></button>
    </form>-->
    <form class="example" action="" method="POST" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit" name="src"><i class="fa fa-search"></i></button>
    </form><br>
    <hr>
    <br>
    <form action="" method="POST">
        <table align="center">
            <tr>
                <td><b>Product Name:</b></td>
                <td><input type="text" name="name" placeholder="Enter Product Name"></td>
            </tr>
            <tr>
                <td><b>Quantity:</b></td>
                <td><input type="text" name="quantity"></td>
            </tr>
            <tr>
                <td><b>Price: (BDT)</b></td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td><b>Supplier:</b></td>
                <td><input type="text" name="supplier"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Insert" style="color:blue;font-weight:bold;"></td>
            </tr>
        </table>
        <br>
    <hr>
    <br>
    <table border="1" align="center">
        <tr align="center" style="color:brown">
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Quantity</b></td>
            <td><b>Price</b></td>
            <td><b>Supplier</b></td>
            <td><b>Actions</b></td>
        </tr>
        <?php
            foreach ($result as $res){
        ?>
        <tr align="center">
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['quantity']; ?></td>
            <td><?php echo $res['price']; ?></td>
            <td><?php echo $res['supplier']; ?></td>
            <td><a href="edit.php?id=<?php echo $res['id']; ?>"><b>Edit</b></a> <b> || </b>
            <a href="delete.php?id=<?php echo $res['id']; ?>" onclick="return confirm('Are you sure?')"><b>Delete</b></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>