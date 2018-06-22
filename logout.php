<?php

require 'zkcore/tool.php';
require 'zkcore/db.php';
require 'zkcore/config.php';

if(isset($_COOKIE['id'])){
	setcookie('id',NULL);
	setcookie('name',NULL);
	location("退出成功！","index.php");
}
