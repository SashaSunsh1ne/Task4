<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TestTask4</title>
</head>

<body>

    <div class="container">

        <p>
            Дан массив из 100 элементов. Требуется вывести
            количество последовательных пар одинаковых элементов<br>
            Например: 1, 1, 2, 3, 4 -51, 12, 12, 12, -51<br>
            Пришлите ссылку на репозиторий с решением
        </p>

        <?php

        $array = array(); // creating array for numbers
        for ($i = 0; $i < 100; $i++)
            array_push($array, rand(-5, 5)); // pushing random numbers to array

        echo "<h1>Массив из 100 элементов:</h1>";
        print_r('<pre>');
        print_r($array);
        print_r('</pre>');

        $pairs = array(); // creating array for pairs
        $counter = 0;  // pairs counter
        for ($i = 0; $i < count($array) - 1; $i++) { // matching elements with their next neighbors
            if ($array[$i] == $array[$i + 1]) {
                array_push($pairs, array($i . ':' . $array[$i], $i + 1 . ':' . $array[$i + 1])); // adds pair to array
                $counter++; // increments counter if they are equals 
            }
        }

        echo "<h1>Последовательные пары одинаковых элементов:</h1>";
        print_r('<pre>');
        print_r($pairs);
        print_r('</pre>');

        echo "<p>Количество последовательных пар одинаковых элементов: " . $counter . "</p>"; // outputs the counter
        ?>

    </div>

</body>

</html>