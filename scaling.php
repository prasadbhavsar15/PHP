<?php
    $image_name='C:\Users\NOBITA\DOWNLOADS\download.png';
    $image=imagecreatefrompng($image_name);
    $img=imagescale($image,500,400);
    header("Content-Type:image/png");
    imagepng($img);
?>