<?php
/*
	检测程序是否已经安装
*/
if(!is_file("install.lock")){
	header("location:install/index.php");
}else{
	header("location:admin.php");
}
?>