
<h2>Variables</h2>
<?php

    // # single line comments
    /* mutliline comment */

    /* 
        Data types 
        - String
        - Integer and floats

        - boolean
            -true / false
        - array
        - object
        - null
        - resouces
    */

    // global scope
    $name='joe';

    const PLANE = "jet";

    // cannot be redefined
    // plane = 234;

    $car = "Mercedes";

    function printName()
    {
      //variable does not effect the global version
        //$car = "BMW";
        
        //use global variable
        global $car;

        //update global car variable
        $car = "BMW";

        return $car;
    }
?>


    <?php echo "<p>My name is {$name}</p>" ?>
    <?php echo PLANE; ?><br>
    <?php echo $car; ?><br>
    <?php echo printName(); ?><br>
    <?php echo $car; ?><br>


