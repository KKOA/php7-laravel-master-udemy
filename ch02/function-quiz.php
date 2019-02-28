<h2>Function Quiz</h2>
<?php 

function looper(string $a , int $number) :void
{
    
    for($i = 1; $i < $number; $i++)
    {
        echo "{$i} : {$a} <br>";
    } 
}

looper("why", 5);

