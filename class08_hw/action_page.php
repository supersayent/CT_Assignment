<?php
echo "<b>".$_GET['search']."</b><br>";

$search=array("800","1000","0");
$a=count($search);
if(isset($_GET['submit'])){
    for($i=0;$i<$a;$i++){
        if($search[$i] == $_GET['search']){
            echo "<b>Matched!</b>";
            break;
        }
        if($i==$a-1){
            if($search[$i] != $_GET['search']){
            echo "<b>Not Matched!</b>";
            }
        }
    }
}
?>