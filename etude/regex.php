<?php 

// $pattern="/php/i";// i makes the search case sensitive
// $string="I love php";
// if (preg_match($pattern, $string)) {
// 	echo "Match found!";

// }



// $pattern="/[a-z]+/";// 
// $string="Helloworld!";
// if (preg_match($pattern, $string, $matches)) {
// 	print_r($matches);

// }

// $pattern="/\d{3}-\d{2}-\d{4}/";// i makes the search case sensitive
// $string="My SSN is 123-45-6789.";
// if (preg_match($pattern, $string)) {
// 	echo "SSN found!";

// }

$pattern="/world/";
$replacement="PHP";
$subject="Hello world";
$result=preg_replace($pattern, $replacement, $subject);
echo $result;


?>