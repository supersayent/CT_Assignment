<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 01</title>
    </head>
    <body>
        <?php
        //Task01
        echo "<h1>Task01: Make two functions that sum and subtract two numbers and print it.</h1>";
        $a = 15;
        $b = 35;
        
        function getSum($a,$b){
            return $a+$b;
        }
        echo "<b>Summation: </b>".getSum($a,$b)."<br>";
        
        function getSub($a,$b){
            echo "<b>Subtraction: </b>".($b-$a);
        }
        getSub($a,$b);
        
        
        //Task02
        echo "<h1>Task02: Take a number and print it reversely till 0.</h1>";
        for($i=10; $i>-1; $i--){
            echo "<b>".$i."</b>";
            if($i>0){
                echo ", ";
            }
        }
        
        
        //Task03
        echo "<h1>Task03: Find even numbers between 1 to 20.</h1>";
        for($i=1; $i<21; $i++){
            if($i%2==0){
                echo "<b>".$i."</b>";
                if($i<20){
                echo ", ";
                }
            }
        }
        
        
        //Task04
        echo "<h1>Task04: Multiplication Table of 22 and 40.</h1>";
        for($i=22; $i<=40; $i+=18){
            echo "<h3>".$i."-Times Table: "."</h3>";
            for($j=1; $j<=10; $j++){
                echo $i." x $j times table = ".($i*$j)."<br>";
            }
        }
        ?>
    </body>
</html>
