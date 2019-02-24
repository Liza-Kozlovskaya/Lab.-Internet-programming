<!DOCTYPE HTML>
<html>
<head>
    <title>Замена словосочетания</title>
</head>
<body>
<?php
/*Дана строка найти и заменить в строке все сочетания (вводятся с формы)
на сочетания (вводятся с формы). Вывести исходную строку и
получившуюся. Если искомое сочетание не встречается, то ответить, что
заменять нечего */

# Строка
$string = ($_POST['string']);
    
# Что ищем
$search = ($_POST['search']);

# Чем заменяем
$replace = ($_POST['replace']);

# Если есть что заменять
if( substr_count( (string) $string, (string) $search ))
{
    # Заменяем
    $new_string = str_replace( $search, $replace, $string );
    
    # Выводим
    echo 'Исходная строка: ' . $string . '<br />Новая строка: ' . $new_string;
}
else
    echo 'Менять нечего.';
?>
