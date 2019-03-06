<head>
    <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
</head>
<?php
 
function getSum ( $a ) {
 
    $sum = 0;
 
    foreach ( $a as $val )
        ( $val < 0 ) &&
        ( $sum += $val );
 
    return $sum;
 
}
 
$razm_n=$_POST["razm_n"];
$error=0;
if ($razm_n=="")
{
    echo "<form action='' method=POST>";
    echo "Введите N<br>";
    echo "<input type=\"text\" name=\"razm_n\"><br>";
    echo "<input type='submit' name='act' value='Далее'><br>";
    echo "</form>";
}
elseif ($_POST["act"]=="Далее")
    {
        if (is_numeric($razm_n) and (($razm_n>1) and ($razm_n<=30)))
        {
            echo "Введите элементы<br>";
            echo "<form action='' method=POST>";
            echo "<input type=hidden name=\"razm_n\" value=".$razm_n.">";
            for($i=0;$i<$razm_n;$i++)
            {
                echo "<input type=\"text\" name=\"elem[".$i."]\"><br>";
            }
            echo "<input type='submit' name='act' value='Найти'><br>";
            echo "</form>";
        }
        else
        {
            echo "Вы ввели не подходящие данные!";
        }
    }
    else if ($_POST["act"]=="Найти")
    {
        $mass=array();
        echo getSum ( $_POST [ "elem" ] );
        echo "<form action='' method=POST>";
        echo "<input type='hidden' name='razm_n'><br>";
        echo "<input type='submit' name='no_name' value='Пройти еще раз'><br>";
        echo "</form>";
    }
 
 
?>