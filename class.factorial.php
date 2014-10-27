<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?

//class.factorial.php
class Factorial {

    private $result = 1;
    private $number;

    function factorial($number) {
        $this->number = $number;
        for ($i = 2; $i <= $number; $i++) {
            $this->result*=$i;
        }
        echo "factorial() executed. ";
    }

    function __construct($number) {
        $this->number = $number;
        for ($i = 2; $i <= $number; $i++) {
            $this->result*=$i;
        }
        echo "__construct() executed. ";
    }

    public function showResult() {
        echo "Factorial of {$this->number} is {$this->result}. ";
    }

    function __destruct() {
        echo " Object Destroyed.";
    }
//otherwise destuct methos is automatically called by php
}

?>