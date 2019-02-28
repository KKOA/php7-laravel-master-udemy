<h2>Array Quiz</h2>
<?php
$cars = [
    [
        'name'      => 'panda', 
        'company'   => 'fiat',
        'wheels'      => 4,
        'doors'      => 5
    ],
    [
        'name'      => 'range rover ', 
        'company'   => 'land rover',
        'wheels'    => 4,
        'doors'     => 6
    ],
    [
        'name'      => '911', 
        'company'   => 'porsche',
        'wheels'    => 4,
        'doors'     => 3
    ],
    [
        'name'      => 'panda', 
        'company'   => 'fiat',
        'wheels'    => 4,
        'doors'     => 5
    ],
];

var_dump($car);
echo $cars[2]['wheels']."\n";
$cars[0]['doors'] = 3;
var_dump($car);

