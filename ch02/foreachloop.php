<h2>Foreach Loop</h2>
<?php

$bBallPlayer = [
    [ 'first'=>'Micheal',   'last'=>'Jordan'],
    ['first'=>'Dwayne',     'last'=>'Wade'],
    ['first'=>'Lebron',     'last'=>'James'],
    ['first'=>'Patrick',    'last'=>'Ewing']

];

//current element is assigned to player
//php moves the pointer to next element at the endo loop 
//array as [key =>] value
foreach($bBallPlayer as $player){
    echo "{$player['first']} {$player['first']}<br>";
}