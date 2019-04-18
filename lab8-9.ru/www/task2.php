<html>
<body>
<form action="task2.php" autocomplete="on" method=POST> 
<p>Задать два числа: 
    Number A <input type="number" min="1" max="20" name="A" required>
    Number B <input type="number" min="1" max="20" name="B" required>
    <input type="submit" value="Отправить">
    <input type="reset" value="Очистить">
</form>
<?php

    start();

    function search_sum($array) //подсчёт суммы в каждой строчке матрицы
    {
        $result = array();
        for($i=0; $i<count($array); $i++)
        {
            echo 'Сумма элементов '.($i+1).'-го массива равна '.array_sum($array[$i]).'<br>';
            array_push($result, array_sum($array[$i])); //добавляем в массив сумму каждой строки
        }
    }

    function buble_sort(&$result) //сортировка пузырьком
    {
        for($j=0; $j < count($result) -1; $j++)
        {
            for($i=0; $i < count($result) - $j -1; $i++)
            {
                if(array_sum($result[$i]) > array_sum($result[$i +1]))
                {
                    $tmp_var = $result[$i +1];
                    $result[$i+1] = $result[$i];
                    $result[$i] = $tmp_var;
                }
            }
        }
    }

    function generation_matrix(&$array, $cols, $rows) //заполнение матрицы числами
    {
        for($i=0; $i<$rows; $i++)
        {
            for($j=0; $j<$cols; $j++)
            { 
                $array[$i][$j] = rand(0, 10);
            }
        } 
        /*$array = array(
            array(4, 5, 5, 2, 1),
            array(2, 4, 5, 1, 3),
            array(2, 7, 9, 3, 5),
            array(4, 4, 3, 3, 7),
            array(9, 2, 4, 7, 2));*/
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
        echo("<b>Начальная матрица: </b><br> ");
        generation_matrix($array, $A, $B);
        print_matrix($array);
        echo("<b>Сумма каждой строки начальной матрицы: </b><br>");
        search_sum($array);
        echo("<b>Итоговая матрица: </b><br>");
        buble_sort($array);
        print_matrix($array);
    }
?>
</body>
</html>