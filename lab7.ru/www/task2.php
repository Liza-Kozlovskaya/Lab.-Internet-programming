<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php

        /*В массиве размером n (1<n<30) найти сумму всех отрицательных элементов. 
        Вывести на экран массив и сумму. */
        $start = microtime(true);
        $A = $_POST["numberA"];
        $B = $_POST["numberB"];

        $arr = array();
        for($i=$A; $i<$B; $i++)
        {
            $arr[$i] = rand(-100, 100);
        }
        var_dump('<pre>',$arr);
         
        function getSum ($a) 
        {
            $sum = 0;
            foreach ( $a as $val )
            ( $val < 0 ) &&
            ( $sum += $val );
            return $sum;
        }
        echo "Сумма всех отрицательных элементов:";
        echo getSum($arr);

        $time = microtime(true) - $start;
        printf('<br>Скрипт выполнялся %.6F сек.', $time);
    ?>
</body>
</html>