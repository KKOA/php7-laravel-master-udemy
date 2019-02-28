<h2>String</h2>
<?php
    $sentence = 'Hi my name is joe';
    $sentence = lcfirst($sentence);// convert first character to lowercase

    $name = keith;

    //interpolating the variable inside a string
    echo "Hi my name is {$name}"; 
    
    //Concatenate - does not add a space
    echo "Hi my name is ".$name; 
    
    //return string literal and not interpolating the variable
    echo "Hi my name is ".'{$name}'; 

    echo strtoupper($sentence);// convert string characters to uppercase

    echo strrev($sentence);// reverse string

    echo strlen($sentence); // return number of characters in string include space

    // see https://www.w3schools.com/php/php_ref_string.asp


    