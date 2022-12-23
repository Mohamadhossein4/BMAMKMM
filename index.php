<?php
if (isset($_POST['numbers'])) {
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
            echo $input, " ";
    }


    primeFactors($input);
}
?>
<form method="post">
    <label> number:</label><br/>
    <input type="text" name="numbers"/>
    <input type="submit" name="submit" value="run"/>