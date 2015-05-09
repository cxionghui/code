<?php


//绘制验证码;
// header("Content-type:image/png");
// $im = imagecreate(58, 28);
// $black = imagecolorallocate($im, rand(200,255), rand(200,255), rand(200,255));
// $white = imagecolorallocate($im, rand(50,155), rand(50,155), rand(50,155));
// imagefill($im, 0, 0, $white);
// imageline($im, rand(0,10), rand(0,10), rand(11,18), rand(11,18), $black);
// imageline($im, rand(0,10), rand(0,10), rand(11,18), rand(11,18), $black);
// imageline($im, rand(0,10), rand(0,10), rand(11,18), rand(11,18), $black);
// imagestring($im, 5, 10, 8, rand(1000,9999), $black);
// imagepng($im);
// imagedestroy($im);
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";



$img = imagecreatefrompng("D:\\1.png");
$col = imagecolorallocate($img, 255, 255, 0);
imagestring($img, 20, 100, 20, " hello my love", $col);
imagepng($img,"D:\\1.png");
imagedestroy($img);

echo phpinfo();







?>