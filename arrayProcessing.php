<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Processing</title>
</head>

<body>

    <?php
    function processArray($array)
    {
        $total = 0;
        echo "Array elements: ";
        foreach ($array as $element) {
            echo $element . " ";
            $total += $element;
        }
        echo "<br>Total of all elements: " . $total . "<br>";
    }

    $array = [5, 10, 15, 20, 25,50];
    processArray($array);
    ?>

</body>

</html>