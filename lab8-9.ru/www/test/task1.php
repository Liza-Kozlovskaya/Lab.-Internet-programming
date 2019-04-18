<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <!-- <link rel="stylesheet" type="text/css" href="main.css" /> -->
</head>
<body>
    <?php
    if(!empty($_POST) && !empty($_COOKIE['n']) && !empty($_COOKIE['m']))
    {
        $n = $_COOKIE['n'];
        $m = $_COOKIE['m'];
        $matrix = array();
        for($i = 0; $i < $n; $i++){
            $temp = array();
            for($j = 0; $j < $m; $j++){
                $temp[$j] = $_POST[$i.$j];
            }
            $matrix[$i] = $temp;
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
            array(4, 4, 2, 3, 7),
            array(9, 2, 4, 7, 2)
        );
    }

    var_dump($matrix);
    if(checkMatrix($matrix)){
        $start = microtime(true);
        echo "Minimal elements in each row: <br/>";
        for($i = 0; $i < count($matrix); $i++){
            $min = minArray($matrix[$i]);
            echo $i. ": " .$matrix[$i][$min] ."<br/>";
            for($j = 0; $j < count($matrix[$i]); $j++){
                if($j < $min) $matrix[$i][$j] = 0;
            }
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
    function minArray($array){
        $min = 0;
        for($i = 1; $i < count($array); $i++){
            if($array[$i] < $array[$min]) $min = $i;
        };
        return $min;
    };

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