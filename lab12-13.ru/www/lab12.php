<!DOCTYPE html>
<html>
<head>
    <title>Lab 12-13</title>
</head>
<body>
    <?php
        $dir = ($_POST['dir']);

        foreach(glob("A:/home/*.txt") as $filename)
        {
            echo $filename."</br>";
        }
    ?>
</body>
</html>