<?php

function calcule($a,$operation,$b)
{

    if ($operation == "+")
    {
        return ($a + $b);
    }
    else if ($operation == "-")
    {
        return ($a - $b);
    }
    else if ($operation == "*")
    {
        return ($a * $b);
    }
    else if ($operation == "/")
    {
        return ($a / $b);
    }
    else if ($operation == "%")
    {
        return ($a % $b);
    }
}

echo calcule(5, "+", 6 );

?>    