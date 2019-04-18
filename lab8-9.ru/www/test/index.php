<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ЛР8</title>
</head>
<body>
    <?php
        $n = 5;
        $m = 5;
        if(!empty($_GET['n']))
        {
            $n = $_GET['n'];
        }
        if(!empty($_GET['m']))
        {
            $n = $_GET['m'];
        }
    ?>
    <form action="" method="get">
        <input type="text" value="<?php echo $m?>" name="n"/>
        <input type="text" value="<?php echo $n?>" name="m"/>
        <input type="submit" onClick="" value="Ввести матрицу"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(!empty($_GET['n']) && !empty($_GET['m'])){
            $n = $_GET['n'];
            $m = $_GET['m'];
            if(is_numeric($n) && is_numeric($m) && ($n > 1 && $n < 10 ) && ($m > 1 && $m < 10)){
                echo "<form action='' method='post'>";
                for($i = 0; $i < $n; $i++){
                    for($j = 0; $j < $m; $j++){
                        echo "<input type='text' name='".$i.$j."' value=".rand(-90, 90)." />";
                    }
                    echo '<br/>';
                }
                echo "<input type='submit' value='submit'/>";
                echo "</form>";
                }
            }
        }
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!empty($_POST['00']) && !empty($_GET['n']) && !empty($_GET['m']))
            {
                $n = $_GET['n'];
                $m = $_GET['m'];
                $matrix = array();
                for($i = 0; $i < $n; $i++){
                    for($j = 0; $j < $m; $j++){
                        $matrix[$i][$j] = $_POST[$i.$j];
                    }
                }
                $matrixInit = $matrix;
            }
            
            if(checkMatrix($matrix)){
                for($i = 0; $i < count($matrix); $i++){
                    $max = max($matrix[$i]);
                    $j = array_search($max, $matrix[$i]);
                    $subarray = array_slice($matrix[$i], $j + 1, count($matrix[$i]));
                    $subarray = sortArray($subarray);
                array_splice($matrix[$i], $j + 1, count($matrix[$i]) - 1, $subarray);
                }
        
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
        }
            function sortArray($array){
                for($k = 0; $k < count($array); $k++)
                    for($m = $k; $m < count($array); $m++)
                    {
                        if($array[$k] > $array[$m])
                        {
                            $p = $array[$k];
                            $array[$k] = $array[$m];
                            $array[$m] = $p;
                        }
                    }
                return $array;
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