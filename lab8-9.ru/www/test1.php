<html>
<body>
<form action="test1.php" autocomplete="on" method=POST> 
<p>Задать два числа: 
    Number A <input type="number" min="1" max="20" name="A" required>
    Number B <input type="number" min="1" max="20" name="B" required>
    <input type="submit" value="Отправить">
    <input type="reset" value="Очистить">
</form>
<?php
    start();

    function sum_all_negative_elements($array, $A, $B) //поиск суммы всех отрицательных чисел
    {
        $sum = 0;
        for ($i = 0; $i < $B; $i++) 
        {
            for ($j = 0; $j < $A; $j++) 
            {
                if ($array[$i][$j] < 0) 
                {
                    $sum += $array[$i][$j];
                }
            }
        }
        echo $sum;
    }

    function generation_matrix(&$array, $cols, $rows) //заполнение матрицы числами
    {
        for($i=0; $i<$rows; $i++)
        {
            for($j=0; $j<$cols; $j++)
            { 
                $array[$i][$j] = rand(-10, 10);
                //print_r($array);
            }
        } 
    }

    function print_matrix($array) //вывод матрицы на экран
    {
        $result = "<table style=\"font-size: 20px;\">";
        for($i = 0; $i < count($array); $i++)
        {
            $result .= "<tr>";
            for ($j = 0; $j < count($array[0]); $j++) 
            {
                $result .= "<td align=\"right\"; width=\"30px\">";
                $result .= $array[$i][$j];
                $result .= "</td>";
            }
            $result .= "</tr>";
        }
        $result .= "</table>";
        echo $result;
    }

    function start() //запуск программы
    {
        $A = $_POST['A'];
        $B = $_POST['B'];
        echo("Матрица: <br> ");
        generation_matrix($array, $A, $B);
        print_matrix($array);
        echo("Сумма всех отрицательных элементов: ");
        $start = microtime(true);

        sum_all_negative_elements($array, $A, $B);
        $time = microtime(true) - $start;
        printf('<br>Скрипт выполнялся %.10F сек.', $time);
    }
?>
</body>
</html>