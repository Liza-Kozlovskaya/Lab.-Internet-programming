<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <!-- <link rel="stylesheet" type="text/css" href="main.css" /> -->
</head>
<body>
    <?php
        if(!empty($_POST['00']))
        {
            $n = $_COOKIE['n'];
            $m = $_COOKIE['m'];
            $matrix = array();
            for($i = 0; $i < $n; $i++){
                for($j = 0; $j < $m; $j++){
                    $matrix[$i][$j] = $_POST[$i.$j];
                }
            }
            $matrixInit = $matrix;
        }
        else{
            $n = 5;
            $m = 5;
            $matrix = $matrixInit = array(
                array(4, 5, 5, 2, 1),
                array(2, 4, 5, 1, 3),
                array(2, 7, 9, 3, 5),
                array(4, 4, 3, 3, 7),
                array(9, 2, 4, 7, 2)
            );
        }
    if(checkMatrix($matrix)){
        $start = microtime(true);
        echo "Minimal elements in each row: <br/>";
        for($i = 0; $i < count($matrix); $i++){
            $min = min($matrix[$i]);
            echo $i. ": " .$min ."<br/>";
            $j = array_search($min, $matrix[$i]);
            array_splice($matrix[$i], 0, $j);
        }
        echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 10).' сек.<br/>';

        echo "Initial matrix: <br/>";
        for($i = 0; $i < count($matrixInit); $i++){
            for($j = 0; $j < count($matrixInit[$i]); $j++){
                echo "\t" .$matrixInit[$i][$j];
            }
            echo '<br/>';
        }
        echo "Changed matrix: <br/>";
        for($i = 0; $i < count($matrix); $i++){
            for($j = 0; $j < count($matrix[$i]); $j++){
                echo "\t" .$matrix[$i][$j];
            }
            echo '<br/>';
        }
    }
    else{
        echo "Matrix has wrong values. Please, try again...";
    }
    
    function checkMatrix($matrix){
        $isValid = true;
        for($i = 0; $i < count($matrix); $i++){
            for($j = 0; $j < count($matrix[$i]); $j++){
                if(!is_numeric($matrix[$i][$j])) {
                    $isValid = false;
                }
            }
        }
        return $isValid;
    }
    ?>
</body>
</html>