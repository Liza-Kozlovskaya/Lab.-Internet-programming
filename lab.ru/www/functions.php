
<!DOCTYPE HTML>
<html>
<head>
    <title>Таблица умножения</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style>
    table {
        background: #50d6;
        border-collapse: collapse;
        /*padding: 20px; /* Поля вокруг текста */
    }
    td {
        border: 1px solid #000;
        padding: 20px;
    }
</style>
</head>
<body>
<?php
/*Функция принимающая два параметра ­ 2 целых числа.
Если вводятся не 2 целых числа­ то функция должна выводить ошибку наэкран.
Если пользователь вводит 2 целых числа ­ то ему должна отрисовываться таблица умножения
размером со значения параметров, переданных функции. */
$a = ($_POST['number1']);
$b = ($_POST['number2']);
echo "Первое число: $a <br>";
echo "Второе число: $b <br>";
function mult_table($a, $b) {
    if (is_integer($a) && is_integer($b)) 
    {
		echo '<table>';
        for ($j = 1; $j <= $b; $j++) 
        {
			echo "<tr>";
                for ($i = 1; $i <= $a; $i++) 
                {
                    echo "<td>" . $i * $j . "</td>";
                }
            echo "</tr>";
		}
        echo '</table>';
    } 
    else 
    {
		echo "ошибка, введите 2 целых числа!";
	}
}
mult_table((int)$a, (int)$b);
?>
