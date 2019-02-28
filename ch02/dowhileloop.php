<h2>Do While Loop</h2>
<?php
    $i = 1;
    do{
        echo $i." ";
        $i++;
    } while($i < 20);
    ?>
    <br>
    <?php

    $cars = ["beemer","benz","bentley"];
    $i = 0;
    do{
        echo $cars[$i]." ";
        $i++;
    } while($i < count($cars));