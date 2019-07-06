<?php
include 'IronMan.php';
class Fight extends IronMan{
    public function characterIron(){
        IronMan::character();
        echo 'He fights the Villains.<br>';
    }
    public function characterCap(){
        Avengers::character();
        echo 'He fights the Villains.<br>';
    }
    public function characterBad(){
        echo 'He fights the Heroes. ';
    }
}
?>