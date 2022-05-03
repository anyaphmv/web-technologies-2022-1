<?php
$title = "Начальная страница";
$h1 = "Это заголовок";
$year = date('Y');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
</head>
<body>
<h1><?=$h1?></h1>
Всем привет! Это задание 1!
<p>А это текущий год - <?=$year?></p>
</body>
</html>
<?php
$h = date("H")+2;
$m = date("i");
if ($h==1 || $h==21) {
    $hours = " час";}
elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
    $hours = " часа";}
else {$hours = " часов";}
if (($m<20) || ($m>10))
{$minutes = " минут.";}
elseif (($m % 10) === 1) {
    $minutes = " минута.";}
elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
    $minutes = " минуты.";}
else {
    $minutes = " минут.";}
echo $h . $hours . " " . $m . $minutes;
?>
