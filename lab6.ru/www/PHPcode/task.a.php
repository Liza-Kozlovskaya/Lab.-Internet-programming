<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <?php

      /*Создать функцию, принимающую массив строк и формирующую таблицу, 
      состоящую из двух столбцов. В первом столбце должен быть выведен номер строки, 
      во втором ‒ содержание строки. */

         function table()
         { 
            $comments = $_POST['comment'];
            $view = '<table border=3>';
            //PHP_EOL или \r\n - символ конца строки
            //explode разбивает текст на строки
            // .= присваивания с конкатенацией, который присоединяет правый аргумент к левому
            foreach (explode(PHP_EOL, $comments) as $numb => $comment) 
            {
                $view .= '<tr><td>' . ++$numb . '</td><td>' . $comment . '</td></tr>';
            }
            echo $view;
            $view .= '</table>';
         }

         table();
   ?> 
</body>
</html>