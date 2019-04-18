<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ЛР8</title>
    <!-- <link rel="stylesheet" type="text/css" href="main.css" /> -->
</head>
<body>
    <?php
        $showTable = false;
    ?>
    <form action="" method="get">
        <input type="text" value="5" name="n"/>
        <input type="text" value="5" name="m"/>
        <input type="submit" onClick="" value="Ввести матрицу"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(!empty($_GET['n']) && !empty($_GET['m'])){
            $n = $_GET['n'];
            $m = $_GET['m'];
            setcookie('n', $n);
            setcookie('m', $m);
            if(is_numeric($n) && is_numeric($m) && ($n > 1 && $n < 10 ) && ($m > 1 && $m < 10)){
                echo "<form action='task2.php' method='post'>";
                for($i = 0; $i < $n; $i++){
                    for($j = 0; $j < $m; $j++){
                        echo "<input type='text' name='".$i.$j."' value=".random_int(-9, 9)." />";
                    }
                    echo '<br/>';
                }
                echo "<input type='submit' value='submit'/>";
                echo "</form>";
            }
        }
        }
    ?>
</body>
</html>