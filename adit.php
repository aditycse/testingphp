<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

final class Action {
   private function __construct() {}
   const ADD = 0;
   const SUBTRACT = 1;
   const MULTIPLY = 2;
   const DIVIDE = 3;
}

 

function math($x, $y, $action) {
   switch($action) {
    case Action::ADD :
         return $x + $y;
    break;
 case Action::SUBTRACT :

         return $x - $y;

         break;


      case Action::MULTIPLY :

         return $x * $y;

         break;


      case Action::DIVIDE :

         return $x / $y;

         break;

   }

}

echo "Result for Add action: ", math(4,2,Action::ADD), PHP_EOL;

echo "Result for Subtract action: ", math(4,2,Action::SUBTRACT), PHP_EOL;

echo "Result for Multiply action: ", math(4,2,Action::MULTIPLY), PHP_EOL;
echo "Result for Divide action: ", math(4,2,Action::DIVIDE), PHP_EOL;

?>
