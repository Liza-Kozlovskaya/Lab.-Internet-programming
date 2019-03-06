<!DOCTYPE html>
<html>
<head>
    <title>Lab 12-13</title>
</head>
<body>
    <?php
        $dir = ($_POST['dir']);

        foreach(glob("$dir/*.txt") as $filename)
        {
            echo $filename."</br>";
            $file ='dsv.txt';
            //$file ='$filename';
            $file1 =preg_replace('/(?:\\d+(?:\\.\\d*)?|\\.\\d+)(?:[eE][-+]?\\d+)?/', ' ', $file);
            $text = file_get_contents($file1);
            echo nl2br(htmlspecialchars($text));
            echo "</br>";
        }
    ?>
</body>
</html>