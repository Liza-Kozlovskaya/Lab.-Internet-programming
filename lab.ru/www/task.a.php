<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <?php
        $string = ($_POST['comment']);
        $str = explode(" ", $string);
         print_r($str);

         $val = current($str);
         print "<table border=3>";
         while ($val)
         {
            print "<tr> <td> $val </td> ";
            $val = next ( $str );
         }
         print "</table>";
   ?> 
</body>
</html>