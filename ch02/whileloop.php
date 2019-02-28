<h2>While Loop</h2>
<?php
$i = 0;
while ( $i < 11 ) { 
    echo $i."\n";
    $i++; // without this loop will be stuck infinite loop
}