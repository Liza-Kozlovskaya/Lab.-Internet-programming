<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <?php
        $string = ($_POST['comment']);
        $stringedit = preg_replace('/^\W*(.+?)\W*$/', '$1', $string);
        echo $stringedit;
        $str = explode(" ",$string);

   ?> 
</body>
</html>