<h2>Conditional</h2>
<?php
if(24 > 100)
    //execute if condition is met
    echo "is greater";
else 
{
    // only execute if previous if /else if is not executed
    echo "is not greater";
}

$name = "joe";
if(24 > 100 && $name == "joe")
    echo "is greater and name is joe";
else if (24 > 100 && $name == "joe")
    echo "is greater or name is joe";
else {
    echo "is not false";
}

switch($name)
{
    case "joe":
        echo "Hi joe";
    case "mike": // Equivalent to joe or mike
        echo "Hi mike";
        break;
    case "cinder":// execute only if case is met
        echo "Hi cinder";
        break;
    case "jonathon":
        echo "Hi jonathon";
        break;//Without this carry execute every case regard of whether the case is met
    case "James":
        echo "Hi james";
        break;
    default:// switch equivalent to else
        echo "Hi strange";
    
}

$age = 47;

switch($age)
{
    case 21:
        echo "Old enough to drink";
        break;
    case $age == 18: // Equivalent to joe or mike
        echo "Old enough to smoke";
        break;
    case $age > 18 && $age <= 20:
        echo "Old enough to smoke but not drink";
        break;
    case "James":
        echo "Hi james";
        break;
    default:
        echo "Hi strange";
    
}