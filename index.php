<?php

$input = $_POST['numbers'];
$array = explode(',', $input);
function primeFactors($input)
{
    while ($input % 2 == 0) {
        echo 2, " ";
        $input = $input / 2;
    }
    for ($i = 3; $i <= sqrt($input);
         $i = $i + 2) {
        while ($input % $i == 0) {
            echo $i, " ";
            $input = $input / $i;
        }
    }
    if ($input > 2)
        print_r($array);
}


primeFactors($input);
