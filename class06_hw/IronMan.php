<?php
include 'Avengers.php';
class IronMan extends Avengers{
    //public $name = "Iron Man";
    public function character(){
        echo 'IronMan is a Hero. ';
        Avengers::character();
    }
}
?>