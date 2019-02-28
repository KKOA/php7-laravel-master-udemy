<h2>Operators</h2>
<?php
$blocks = 230;

$blocks *= 4; //blocks = block * 4

echo $blocks."<br>";

$blocks = 230;
$newVar = $blocks == "230"; //php return 1 (true) or 0 (false)
echo $blocks."<br>";

$newVar = $blocks === "230"; // check value and the datatype
echo $newVar."<br>";

echo var_dump($newVar);

$newVar = 2 <= "4"; // less than or equal
echo $newVar."<br>";

echo var_dump($newVar);

// And
var_dump((3 >= 3 )&& (24 < 32 ));
var_dump((3 > 3 )&& (24 < 32 ));
var_dump((3 > 3 )&& (24 > 32 ));

// OR
var_dump((3 >= 3 )|| (24 < 32 ));
var_dump((3 > 3 ) || (24 < 32 ));
var_dump((3 > 3 ) || (24 > 32 ));

//Not - invert result - true = false and false = true
var_dump(!(3 > 3 )&& !(24 > 32 ));

$string1 = "charly ";
//shorthand concentation
$string1 .= " chaplin"; 
var_dump($string1);