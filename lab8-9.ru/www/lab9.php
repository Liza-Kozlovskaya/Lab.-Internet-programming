<?php
if (isset($_POST['matrix'])) {
$f = explode("\n",trim($_POST['matrix']));
$n = count($f);
$m = count(explode(' ',trim($f[0])));
 
$ni=0;
foreach ($f as $string) {
    $ni++;
    $w = explode(' ',trim($string));
    $mi=0;
    foreach($w as $vl) {
        $mi++;
        $massiv[$ni][$mi]=$vl;
    }
}
//var_dump($massiv);
 
$nmr = 0;
for ($a=1;$a<=$n;$a++)
for ($b=1;$b<=$m;$b++) {
 if($massiv[$a][$b]>=0) continue 2;
if ($b==$m) $nmr=$a;
}
echo $nmr;
}
?>
<form action="" method="post">
    введите значения матрицы через пробел, новая строка - с новой строки
    <textarea name="matrix" rows="5" cols="20"></textarea>
<input type="submit" value="Отправить">
</form>