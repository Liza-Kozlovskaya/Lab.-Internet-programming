<!DOCTYPE html>
<html>
<head>
    <title>Lab 12-13</title>
    <link href="add.css" rel="stylesheet">
</head>
<body>
<form action="lab12.php" class="transparent" autocomplete="on" method=POST> 
    <p>
        <b>Введите директорию:</b>
        <input id="path" name="dir" type="directory" autofocus required><br>
    </p>
    <p><input class="button" name="delete" type="submit" value="Удалить из всех файлов вещественные числа"/> </p>
    <p>
        <b>Добавить файл в директорию:</b><br>
        <input type="name new file" name="new_file_1" >
        <input type="text" placeholder=".txt" name="new_file_2" size="2">
        <input class="button" name="add_file" type="submit" value="Добавить файл"/>
    </p>
    <textarea name="new file" cols=45 rows=10 ></textarea>
    <p>
        <b>Удалить файл из директории:</b><br>
        <input type="name new file" name="delete_file_1" >
        <input type="text" placeholder=".txt" name="delete_file_2" size="2">
        <input class="button" name="delete_file" type="submit" value="Удалить файл"/>
    </p>
    <p>
        <b>Выберите файл для удаление вещественных чисел:</b><br>
        <input type="delete number" name="delete_number" >
        <input class="button" name="delete_number" type="submit" value="Удалить числа"/>

    </p>
</form>
    <?php
    function DeleteNumberInAllFile()
    {
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
    }

    function AddFile()
    {
        $new_file= $_POST['new_file_1'].$_POST['new_file_2'];
        echo $new_file;
    }

    function DeleteFile()
    {
        $delete_file = $_POST['delete_file_1'].$_POST['delete_file_2'];
        echo $delete_file;
    }

    function DeleteNumber()
    {
        echo "Ok!";
    }

    if($_POST['delete'])
    {
        DeleteNumberInAllFile();
    }

    if($_POST['add_file'])
    {
        AddFile();
    }

    if($_POST['delete_file'])
    {
        DeleteFile();
    }
    if($_POST['delete_number'])
    {
        DeleteNumber();
    }

    ?>
</body>
</html>