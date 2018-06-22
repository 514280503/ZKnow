<?php

$db = mysqli_connect("localhost",'root','root','zknow');

if(mysqli_connect_errno()>0){
	exit('数据库链接错误:'.mysqli_connect_errno());
}

mysqli_set_charset($db,'UTF8');
