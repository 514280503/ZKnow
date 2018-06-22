<?php

require 'zkcore/tool.php';
require 'zkcore/db.php';
require 'zkcore/config.php';

if(isset($_POST['send'])){

	$accounts = $_POST['user'];
	if (!preg_match('/^([\w\.-]+)@([a-z0-9-]+)\.([a-z]{2,4})|1[34578]{1}\d{9}$/i', $accounts)) {
	        alert('填写有效的手机或邮箱！');
	    }
	    
	$passwd = $_POST['passwd'];
	if(strlen($passwd)<6){
		alert("密码不能小于6位");
	}
	
	
	$endpasswd = sha1(SALT.$passwd);
	
	$sql = "select id,nickname from zknow_users where accounts = '$accounts' and passwd = '$endpasswd'";
	
	if($res = mysqli_fetch_array(mysqli_query($db, $sql),MYSQLI_ASSOC)){
		
		if(isset($_POST['state'])){
			setcookie('id',$res['id'],time()+60*60*24*7);
			setcookie('name',$res['nickname'],time()+60*60*24*7);
		}else{
			setcookie('id',$res['id']);
			setcookie('name',$res['nickname']);
		}
		location("登录成功", 'index.php');
	}else{
		alert("账号或密码错误！");
	}	
	
}else{
	exit("非法登录！");
}
