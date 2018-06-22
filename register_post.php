<?php
	
	require 'zkcore/tool.php';
	
	if (isset($_POST['send'])) {
		
		//手机或电子邮件
		$accounts = $_POST['account'];
		if (!preg_match('/^([\w\.-]+)@([a-z0-9-]+)\.([a-z]{2,4})|1[34578]{1}\d{9}$/i', $accounts)) {
		        alert('填写有效的手机或邮箱！');
		    }
		    
		$passwd = $_POST['passwd'];
		if(strlen($passwd)<6){
			alert("密码不能小于6位");
		}
		
		$notpasswd = $_POST['notpasswd'];
		if($notpasswd!=$passwd){
			alert("密码和确认密码不一致");
		}
		
		
		$nickname = $_POST['nickname'];
		if(strlen($nickname)==0){
			alert("昵称不能为空");
		}
		require 'zkcore/config.php';
		require 'zkcore/db.php';
		
		$sendpasswd = sha1(SALT.$passwd);
		
		$accountssql = "select id from zknow_users where accounts = '$accounts' limit 1";

		if(mysqli_fetch_array(mysqli_query($db, $accountssql))){
			location("手机或邮箱已注册，请登录",'login.php');
		}
		
		$nicknamesql = "select id from zknow_users where nickname = '$nickname' limit 1";
		if(mysqli_fetch_array(mysqli_query($db, $nicknamesql))){
			alert("昵称已存在");
		}
		
		
		$sql = "insert into zknow_users (accounts,passwd,nickname,createtime) values ('$accounts','$sendpasswd','$nickname',NOW())";
	
		
		
		if(mysqli_query($db,$sql)){
			location("注册成功,请登录", "login.php");
		}
	
	}else{
		exit('非法操作！');
	}
	
	
	
