<?php

$arr=range(a,z);
$num=range(1,9);
$rand=range($arr,$num);
$str=$arr[array_rand($arr)].$arr[array_rand($arr)].$num[array_rand($num)].$num[array_rand($num)].$arr[array_rand($arr)];
//echo $str;
$im=imagecreate(80,25);
imagecolorallocate($im,0,0,0);
$txtcol=imagecolorallocate($im,255,255,255);
imagestring($im,18,18,5,$str,$txtcol);
imagejpeg($im,"../gallery/images/gen.jpeg");

?>