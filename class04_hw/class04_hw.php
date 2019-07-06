<!DOCTYPE html>
<!-- -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 04 Homework</title>
        <link rel="stylesheet" href="button.css">
    </head>
    <body>
        <center>
        <div>
            <h1>Calculator</h1>
            <form action="" method="POST">
                <input type="text" name="no1" placeholder="Input01">
                <input type="text" name="no2" placeholder="Input02">
                <br><br>

                <input type="submit" class="button button1" name="sum" value=" + ">
                <input type="submit" class="button button2" name="subs" value=" - ">
                <input type="submit" class="button button3" name="multy" value=" * ">
                <input type="submit" class="button button4" name="div" value=" / ">
            </form>
        <br><br>
        <?php
        /*Sum*/
        if(isset($_POST['sum'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getSum($n1,$n2){
                echo "<h1 style='color:black;'>Summation: ".($n1+$n2)."</h1>";
                }
                getSum($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        /*Subs*/
        if(isset($_POST['subs'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getSubs($n1,$n2){
                echo "<h1 style='color:black;'>Substraction: ".($n1-$n2)."</h1>";
                }
                getSubs($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        /*Multy*/
        if(isset($_POST['multy'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getMulty($n1,$n2){
                echo "<h1 style='color:black;'>Multiplication: ".($n1*$n2)."</h1>";
                }
                getMulty($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        /*Div*/
        if(isset($_POST['div'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getDiv($n1,$n2){
                echo "<h1 style='color:black;'>Division: ".($n1/$n2)."</h1>";
                }
                getDiv($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        ?>
        </div>
        </center>
    </body>
</html>
