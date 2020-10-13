<?php
include_once 'config.php';

print_r($_FILES);

$path = $bigImgDir.$_FILES['imgFile']['name'];

if(move_uploaded_file($_FILES['imgFile']['tmp_name'],$path)){
    echo $_FILES['imgFile']['name']." успешно загружен в папку ".$bigImgDir;
	$tempResource=imagescale(imagecreatefromjpeg($path),300/*, 300*/);
	imagejpeg($tempResource,$smallImgDir.$_FILES['imgFile']['name']);	
}