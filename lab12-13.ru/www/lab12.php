<!DOCTYPE html>
<html>
<head>
    <title>Lab 12-13</title>
    <link rel="stylesheet" href="add.css" type="text/css"/>
</head>
<body>
<form action="lab12.php" autocomplete="on" method=POST > 
    <p>
        <b>Введите директорию:</b>
        <input id="path" name="dir" type="directory" autofocus required>
        <input class="button" name="update" type="submit" value="Обновить"/><br>
    </p>
    <p><input name="delete" type="submit" value="Удалить из всех файлов вещественные числа"/> </p>
    <p>
        <b>Добавить файл в директорию:</b><br>
        <input type="name new file" name="new_file_1" >
        <input class="button" name="add_file" type="submit" value="Добавить файл"/>
    </p>
    <textarea name="new_file" cols=45 rows=10 ></textarea>
    <p>
        <b>Удалить файл из директории:</b><br>
        <input type="name new file" name="delete_file_1" >
        <input class="button" name="delete_file" type="submit" value="Удалить файл"/>
    </p>
    <p>
        <b>Выберите файл для удаление вещественных чисел:</b><br>
        <input type="delete number" name="delete_number" >
        <input class="button" name="delete_number_button" type="submit" value="Удалить числа"/>

    </p>
    <br>
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
        $dir = $_POST['dir'];
        $new_file= $_POST['new_file_1'].".txt";

        if(!file_exists($dir.$new_file))
        {
            $text = $_POST['new_file']; //запись из textarea данных пользователя в файл
            $fp = fopen($dir.$new_file, "w");
            fwrite($fp, $text);
            fclose($fp);
            echo "Файл $new_file был создан!";
        }
        else
        {
            echo "Такой файл уже существует!";
        }
    }

    function DeleteFile()
    {
        $dir = $_POST['dir'];
        $delete_file = $_POST['delete_file_1'].".txt";
        $path = $dir.$delete_file;
        if(file_exists($path))
        {
            unlink($path);
            echo "Файл $path был удалён!";
        }
        else
        {
            echo "Такого файла не существует!";
        }
    }

    function DeleteNumber()
    {
        $dir = $_POST['dir'];
        $filename = $_POST['delete_number'].".txt";

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

    function UpdatePage()
    {

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
    if($_POST['update'])
    {
        UpdatePage();
    }

    ?>
</body>
</html>