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

        $work = ($_POST['work']);
        $a = iconv_strlen($work); //количество символов в тексте
        echo "</br> <strong>Количество всех символов: $a</strong> </br>";
        echo "<strong>Делим текст на 2 части по символам:</strong> </br> ";
        $b= str_split($work, ceil($a/2));
        //print_r($b);
        $ar1 = $b[0];
        $ar2 = $b[1];

        echo "</br> <strong> Первая часть текста:</strong> ";
        print_r($ar1);
        echo "</br> <strong> Количество символов в первой части: </strong> ";
        $conv1 = iconv_strlen($ar1); /*Возвращает количество символов в строке */
        print_r($conv1);
        echo "</br>";
        echo "</br> <strong> Вторая часть текста: </strong>";
        echo $ar2;
        echo "</br> <strong> Количество символов во второй части: </strong>";
        $conv2 = iconv_strlen($ar2); /*Возвращает количество символов в строке */
        echo $conv2;
        echo "</br>";

        //; , . | / * - + ^ : ' '
        $txt1 = preg_split("/\\*((?:[^\\\\*]|\\\\.)*)/", $ar1);
        $txt2 = preg_split("/\\*((?:[^\\\\*]|\\\\.)*)/", $ar2);


        $txt1ed = count($txt1);//Количество слов 
        $txt2ed = count($txt2);

        echo "</br> <strong> Количество слов в первой части: </strong>";
        print_r($txt1ed);
        echo "</br> <strong> Количество слов во второй части: </strong>";
        print_r($txt2ed);
        echo "</br>";

        if((abs($txt1ed - $txt2ed)) %2) == 0)
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