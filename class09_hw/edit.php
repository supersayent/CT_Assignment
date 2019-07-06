<?php
include 'Connection.php';
$conn = new Connection;
$getId = $_GET['id'];
$res = $conn->getAll("SELECT * FROM inventory WHERE id=$getId",NULL);
//print_r($res);

//UPDATE Method
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $supplier = $_POST['supplier'];
    $data = array(
        ':name' => $name,
        ':quantity' => $quantity,
        ':price' => $price,
        ':supplier' => $supplier
    );
    $conn->update("UPDATE inventory SET name=:name,quantity=:quantity,price=:price,supplier=:supplier WHERE id=$getId",$data);
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
        <input type="text" name="name" value="<?php echo $r['name']; ?>"><br>
        <input type="text" name="quantity" value="<?php echo $r['quantity']; ?>"><br>
        <input type="text" name="price" value="<?php echo $r['price']; ?>"><br>
        <input type="text" name="supplier" value="<?php echo $r['supplier']; ?>"><br>
        <input type="submit" name="submit" value="Update"><br>
        <?php
            }
        ?>
    </form>
</body>
</html>