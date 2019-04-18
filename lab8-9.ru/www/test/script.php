
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
            array(4, 4, 2, 3, 7),
            array(9, 2, 4, 7, 2)
        );
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