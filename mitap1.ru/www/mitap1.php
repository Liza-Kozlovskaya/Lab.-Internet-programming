<?php
    date_default_timezone_set( 'Europe/Minsk' );
    $data = date('H:i:s');
    $pic = ($data / 6) % 4
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
           echo "<h1>$data <br> Картинка № $pic</h1>"
     ?>
</body>
</html>