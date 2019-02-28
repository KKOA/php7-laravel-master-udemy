<h2>Conditional Quiz</h2>
<?php

$totalAmount = 5.00;

echo "Thank you for shopping with us";
echo " Your total is #{$totalAmount}.";
if($totalAmount > 100)
    echo "You get a soda and tbone steak for free";
else if($totalAmount > 50)
    echo "You get a free soda";

