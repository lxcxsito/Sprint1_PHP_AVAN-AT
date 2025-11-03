<?php

define('PI', 3.1416);
define('RadioConst', 5);

function calculateCircleArea(): void
{
    $area = PI * RadioConst * RadioConst;
    echo "L'àrea del cercle és: " . number_format($area) . "<br>";
}


?>