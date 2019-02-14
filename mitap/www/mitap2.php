<?php
    date_default_timezone_set( 'Europe/Minsk' );
    $data = date('H:i:s');
    if($data>0 && $data<5)
    {
        $pic = DvWYPA5XHGg;
    }
    elseif($data>6 && $data<11)
    {
        $pic = mViRsuU6B_o;
    }
    elseif($data>12 && $data<17)
    {
        $pic = dUR6l52tWdQ;
    }
    else
    {
        $pic =OCDelksTvNY;
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Task1</title>
	<style>
		body
        {
			background: url(<?php echo $pic; ?>.jpg) no-repeat fixed;
            background-size: 100% 100%;
            color: #fff;
            position: fixed; top: 40%; left: 40%;
		}
        h1
        {
            text-align: center;
        }
	</style>
</head>
<body>
    <?php
           echo "<h1>$data<br></h1>"
     ?>
</body>
</html>