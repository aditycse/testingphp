<?php

$object = new User;
$object->save_user();
$object->name = "Joe";
$object->password = "mypass";
print_r($object);
echo "<br />";

class User {

    public $name, $password;

    function User() {
        print("i m constructor of user class");
// Constructor statements go here
    }

    function __construct() {
        echo "i m also constructor";
// Constructor statements go here
    }
function __destruct() {
    echo "i m destruct of this class";
}
    function save_user() {
        echo "Save User code goes here";
    }

}
?>
