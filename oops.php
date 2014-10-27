<?php
class SimpleClass{
    public $var='';
}

$instance = new SimpleClass();

$assigned   =  $instance;
$reference  = &$instance;

$instance->var = '$assigned will have this value';
//print_r($reference);die;
$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);

?>
