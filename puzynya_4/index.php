<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="jquery.lightbox.min.css" />
        <title>Галерея</title>
    </head>
    <body>
        <form action="store.php" method="post" enctype="multipart/form-data">
            <fieldset>
			<legend>Отправка изображения</legend>
			<label for="imgId">Выберите jpeg</label>
            <input type="file" id="imgId" name="imgFile" accept="image/jpeg"><br>
            <input type="submit" value="Загрузить">
			</fieldset>
			
        </form>
	<?php 
	include 'config.php';
	
	$smallImgS=array_slice(scandir($smallImgDir),2);
	$bigImgS=array_slice(scandir($bigImgDir),2);
	
	$countImg=count($smallImgS);
	?>
	<div class="gallery">
	<?
	for($i=0;$i<$countImg;$i++){?>
		<a href="
				<?=$bigImgDir."/".$bigImgS[$i]?>
			" 
			target="_blank">
			<img src="
				<?=$smallImgDir."/".$smallImgS[$i]?>
				"
				>
		</a>
	<?}?>
	</div>
	<meta http-equiv="refresh" content="1">	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="jquery.lightbox.min.js"></script>

	<script>
	 $(function()
	 {
		$('.gallery a').lightbox(); 
		
		// If you want seperate galleries on the same page
		// just specify different class names. 
		$('.gallery-2 a').lightbox();
	 });
	</script>
	
    </body>
</html>