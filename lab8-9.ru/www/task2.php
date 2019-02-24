<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Task 2, Lab8-9</title>
</head>
<body>
    <?php
        
        $first_name = ($_POST['first_name']);
        $last_name = ($_POST['last_name']);
        //делим текст по пробелам и создаём массив слов
        $work = ($_POST['work']);
        $editwork =explode(' ',$work);
        //разбиваем массив на 2 части
        //ceil переводит нечётный элемент в 1 массив
        $editwork=array_chunk($editwork,ceil(count($editwork)/2));
        //print_r($editwork);
        $array1 = count($editwork[0]);
        $array2 = count($editwork[1]);
        if($array1>$array2)
        {
            echo "Добрый день, $first_name $last_name. Вы были приняты на работу!</br>";
        }
        else
        {
            echo "Добрый день, $first_name $last_name. Мы сожалеем, но вы не были приняты на работу!</br>";
        }

        /*******************************************************************/
        echo "Первая часть: $array1 слов.</br>";
        echo "Вторая часть: $array2 слов.</br>";
        print_r($editwork);
        $a = iconv_strlen($work);
        echo "</br> Количество всех символов: $a. </br>";
        echo "Делим текст на 2 части по символам: ";
        $b= str_split($work, $a/2);
        print_r($b);
        $ar1 = $b[0];
        $ar2 = $b[1];
        echo "</br> Первая часть текста: ";
        print_r($ar1);
        echo "</br> Количество символов в первой части: ";
        $conv1 = iconv_strlen($ar1);
        print_r($conv1);
        echo "</br> Вторая часть текста:";
        echo $ar2;
        echo "</br> Количество символов во второй части: ";
        $conv2 = iconv_strlen($ar2);
        echo $conv2;
        $part1 = count($ar1);
        $part2 = count($ar2);
        if($part1>$part2 or $part1<$part2)
        {
            echo "</br> Добрый день, $first_name $last_name. Вы были приняты на работу!</br>";
        }
        else
        {
            echo "</br> Добрый день, $first_name $last_name. Мы сожалеем, но вы не были приняты на работу!</br>";
        }

    ?>
</body>
</html>