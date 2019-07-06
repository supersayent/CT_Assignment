<?php
include 'Fight.php';
class Loki extends Fight{
    public function character() {
        echo 'Loki is a Villain. ';
        Fight::characterBad();
    }
}
