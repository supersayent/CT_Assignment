<?php
include 'FullName.php';
class MyName extends FullName{
    /*public function __construct(){
        $this->printName();
    }*/
    
    public function printName($n){
        echo '<b>Nickname: </b>'.$n.'<br>';
        FullName::printName($n);
    }
}
?>