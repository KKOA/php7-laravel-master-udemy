<h2>Arrays</h2>
<?php 
 $names = [
     "Joe santos",
     "Jane Doe",
     "John Doe",
     22,
     true,
     ["Johny", 23]
 ];//can hold more than one time
 
 var_dump($names);
 var_dump($names[1]);
 var_dump($names[5][0]);

//Associative array
$settlements =[
    [
    'cities' => 'rigdewood',
    'population' =>10000,
    'nickname' =>'woods'
    ],
    [
        'cities' => 'rigdewood',
        'population' =>10000,
        'nickname' =>'woods'
    ]
];

var_dump($settlements);
var_dump($settlements[0]['nickname']);

$settlements[2]['populations'] = 25000; //Change an existing value
$settlements[3] = 'Another city'; //Add value to array
var_dump($settlements);

$names =[];
//Add to end of array
var_dump($names);
// Add one or more element to end of array
array_push($names,'jane','johnny','steven'); 
var_dump($names);
//pops and returns the value of the last element of array, shortening the array by one element.
array_pop($names);
var_dump($names);
echo count($names); //return length of array