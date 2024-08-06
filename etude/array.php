<?php 

// $b=array("banana",20,"orange");
// foreach($b as $f) {
// 	echo $f."\n";

// }

function myFunction() {
  global $someGlobalVar; // Not recommended (see below)
  echo $_globals['someGlobalVar']; // Access using $_globals
}

$someGlobalVar = "This is a global variable";
myFunction(); // Output: This is a global variable


?>