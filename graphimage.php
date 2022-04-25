<?php
//$image=imagecreate(200,200);
//$white=imagecolorallocate($image,0xFF,0xFF,0xFF);
//$red=imagecolorallocate($image,0xFF,0xFF,0xFF);
//imagefilledrectangle($image,50,50,150,150,$black);
//imagestring($image,5,50,160,"A Black Box",$black);
//imagestring($image,5,50,100,"Inside Box",$white);
//imagestring($image,5,50,30,"Above Box",$black);
//header("Content-Type: image/png");
//imagepng($image);
//======================================
$image=imagecreatefrompng('imgstr.png');
$red=imagecolorallocate($image,255,0,0);
$green= imagecolorallocate($image,0,225,0);
$blue=imagecolorallocate($image,0,0,255);

imagefilledrectangle($image,50,50,150,150,$red);
imagestring($image,5,50,160,"A Black Box",$green);
imagestring($image,5,50,100,"Inside Box",$blue);
imagestring($image,5,50,30,"Above Box",$red);
header("Content-Type: image/png");
imagepng($image);
?>