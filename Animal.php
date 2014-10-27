<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

//myTest();
//myTest();
//myTest();
class Animal {

    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
        echo $x;
        echo $x;
    }

}

?>