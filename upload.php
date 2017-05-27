<?php
$fileInfo=$_FILES["file"];
	date_default_timezone_set('PRC');
	$dirName=date("Ymd");//创建文件夹名字
	$imgName=date("Ymdhis");//创建图片名字
	if(!file_exists("upload")){
		mkdir("upload",0777,true);
	}
	if(!file_exists("upload/".$dirName)){
		mkdir("upload/".$dirName,0777,true);
	}
	if(is_uploaded_file($fileInfo["tmp_name"])){
		$path="upload/".$dirName."/".$imgName.$fileInfo["name"];
		move_uploaded_file($fileInfo["tmp_name"],$path);
	}
	echo "http://localhost/w1610/2-28mvc/upload/".$dirName."/".$imgName.$fileInfo["name"];
?>