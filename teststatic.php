<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class test {
    public $name;
}
include_once("Animal.php");
class aditya {
    public static $id = 0;

    public static $name123;
    static function adi() {
//        $adi1 = new Animal();
//        $adi1->myTest();
  //echo "aditya";
//        $tst = new test();
//        $tst->name = 'test';
//        echo $tst->name;
        //$this->name123 = "text123456";
     // self::$name123 = "test123";
       //echo self::$name123;
       echo self::$id;
       self::$id++;
    }
  
    
}
$adi =new aditya();
$adi ->adi();
aditya::adi();
$adi ->adi();
aditya::adi();aditya::adi();
//echo self::$name123;

?>
