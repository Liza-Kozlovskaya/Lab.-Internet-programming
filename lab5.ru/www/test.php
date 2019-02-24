<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Task 1, Lab5</title>
</head>
<body>
<?php 
          $number1 = ($_POST['number1']);
          $number2 = ($_POST['number2']);
          $number3 = ($_POST['number3']);
          /*поиск минимального введённого числа*/ 
          $min1vs2 = min($number1, $number2);
          $min = min($min1vs2, $number3);
          echo "Минимальное число: $min <br>";
          /*Является ли число числом Марсена*/
          /*M = 2^n -1*/
          $k=1;
          while ($min > pow(2,$k)-1)
          {
              $k++;
          }
          if( $min == pow(2,$k)-1)
          {
              echo "Число является числом Марсена <br>";
              echo "2^$k -1 <br>";
          }
          else
          {
            echo "Не является";
          }
    ?>
</body>
</html>