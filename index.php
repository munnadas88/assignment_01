<?php
function CheckNumber($x) {
  $message = ($x > 0)? "Positive number" : 
             (($x == 0)? "Zero" : "Negative number");
             
  echo $message."\n";
}

CheckNumber(5.5);
CheckNumber(-10.8);
?>


