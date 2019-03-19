<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        /*Создать рекурсивную функцию, принимающую два целых числа начальное 
        значение и конечное значение. Например, первый аргумент 10, второй 35. 
        Функция должна вывести произведение чисел от 10 до 35. */

        $A = (int)$_POST["numberA"];
        $B = (int)$_POST["numberB"];

        echo "Число А: $A <br>"; 
        echo "Число B: $B <br>";

        function rec_product($from, $to) {
            if ($from === $to)
            {
                return $to;
            } 
            else
            {
                return $to * rec_product($from, $to - 1);
            } 
        }
        echo "Произведение чисел от $A до $B равно: ";
        echo rec_product($A, $B);

        /*Проверка*/
        $a=range($A, $B);
        echo "<br>Произведение чисел от $A до $B равно: ";
        print_r(array_product($a));
    ?>
</body>
</html>