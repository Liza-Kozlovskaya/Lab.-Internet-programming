<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php

        /*Создать функцию, принимающую три параметра: два массива чисел, 
        размеры массивов равны и строку, обозначающую арифметическое действие, 
        которое необходимо выполнить над элементами массивов. Функция должна 
        выводить полученный результат на экран. Например, дано: $a – первый массив, 
        $ b – второй массив, ‘+’. Результат: $a[i]+$b[i],i=0…n, где n– размер массивов. */

        $razm = $_POST["razm"];
        $method = $_POST["optional"];
        echo "Размер массивов: $razm <br>";
        echo "Метод над массивами: $method <br>";

        /*Заполнение массивов числами от 1 до 100*/
        $arr1 = array();
        $arr2 = array();
        for($i=0; $i<$razm; $i++)
        {
            $arr1[$i] = rand(1, 100);
            $arr2[$i]= rand(1, 100);
        }
        var_dump('<pre>',$arr1);
        var_dump('<pre>',$arr2);

        /*Функция для выполнения арифм.действия над элементами массивов */
        function arifaction($arr1, $arr2, $method)
        {
            switch($method)
            {
                case "Сумма":
                foreach($arr1 as $key=>$val)
                {
                    $arr1[$key] += $arr2[$key];
                }
                echo "Сумма массивов чисел: <br>";
                print_r($arr1);
                break;

                case "Разность":
                foreach($arr1 as $key=>$val)
                {
                    $arr1[$key] -= $arr2[$key];
                }
                echo "Разность массивов чисел: <br>";
                print_r($arr1);
                break;

                case "Произведение":
                foreach($arr1 as $key=>$val)
                {
                    $arr1[$key] *= $arr2[$key];
                }
                echo "Произведение массивов чисел: <br>";
                print_r($arr1);
                break;

                case "Частное":
                foreach($arr1 as $key=>$val)
                {
                    $arr1[$key] /= $arr2[$key];
                }
                echo "Частное массивов чисел: <br>";
                print_r($arr1);
                break;

                case "Возведение в степень":
                foreach($arr1 as $key=>$val)
                {
                    $arr1[$key] = pow($arr1[$key], $arr2[$key]);
                }
                echo "Возведение в степень массивов чисел: <br>";
                print_r($arr1);
                break;
            }
        }
        
        arifaction($arr1, $arr2, $method);
    ?>
</body>
</html>