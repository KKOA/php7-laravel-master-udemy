<h2>Function</h2>
<?php 

//Assign anonymus function to variable
$myName = function (string $name){
    //function can have 0 or parameters
    // parameter are temporary variable that exist duration of function
    //value are assigned parameter in order that supplied by the function call
    echo "My name is {$name}<br>";
};

//name function
function adding(int $a, int $b) :int
{
    // function can only return one value to return mutliple use array
    return $a + $b;
}


// Call function
$myName("keith");
$myName("mary");
$myName("jane");

adding(4,5);