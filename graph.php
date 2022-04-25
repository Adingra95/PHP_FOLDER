<?php
$image=imagecreate(400,400);//Creates a Canvas
$clr1 =imagecolorallocate($image,255,255,255);
$clr2 =imagecolorallocate($image,255,0,0);
$clr3 =imagecolorallocate($image,0,0,255);

ImageLine($image,100,100,200,100,$clr2);
ImageLine($image,150,100,150,300,$clr2);
header("content-Type:Image/png");
imagepng($image);
?>