<!DOCTYPE html>
<html>
<head>
    <title>Lab 12-13</title>
    <link href="add.css" rel="stylesheet">
</head>
<body>
    <?php
    /*Удалить из файла все вещественные числа из промежутка от 0.001 до 1.001. */
    $dir = $_POST['dir'];
 
        foreach (glob("$dir/*.txt") as $filename) 
        {
            echo "<h3> $filename </h3>";
                                            //file читаем содержимое файла в массив
            $data = file($filename, FILE_IGNORE_NEW_LINES); //FILE_IGNORE_NEW_LINES- отбрасываем перевод на новую строку
            //print_r($data);
            echo "<p> Данные в файле: </p>";
            $text = file_get_contents($filename);
            echo nl2br(htmlspecialchars($text));

            $patt = '~^(?:0\.(?:\d{1,2})?[1-9]|0\.(?:\d[1-9]|[1-9]\d)0|1(?:\.0{2}[01])?)$~';
            $data = array_filter(preg_replace($patt, '', $data));
            //print_r($data);
            echo "<p> Данные в файле после удаления вещественных чисел: </p>";
            file_put_contents($filename, join(PHP_EOL, $data)); //join объединяет элементы массива в строку
                                                //PHP_EOL признак конца строки ИЛИ " "
                                                //file_put_contents записывает данные в файл
            $text2 = file_get_contents($filename);
            echo nl2br(htmlspecialchars($text2));
            echo "<br>";
        }
    ?>
</body>
</html>