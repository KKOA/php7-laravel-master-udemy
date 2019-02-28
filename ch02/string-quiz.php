<h2>String Quiz</h2>
<?php

    $fullName = "Keith Amoah";

    $sentence = "{$fullName} is not enough.";

    $sentence = str_shuffle($sentence);

    echo $sentence;