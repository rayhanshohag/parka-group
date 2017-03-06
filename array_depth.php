Write a function that calculates a passed array’s depth.
-        Array is passed to the function as parameter.
-        Calculate maximum level of nested arrays.
-        Extra point if you can check array structure for links making infinite cycle.


<?php
function array_depth(array $array)
{
    $depth = 1;
    foreach ($array as $value) {
        if (is_array($value)) {
            $depth += array_depth($value);
            break;
        }
    }

    return $depth;
}

?>
