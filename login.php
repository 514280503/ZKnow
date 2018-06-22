<?php
    include 'zkcore/tool.php';
	if(isset($_COOKIE['id'])){
		alert("已登录！");
	}
	
	
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>登录---ZKnows</title>
	<link rel="stylesheet" type="text/css" href="css/common.css"/>
	<link rel="stylesheet" href="css/register.css" />
</head>
<body>
<?php require "header.php"?>

<div class="register">
	<form action="login_post.php" method="post">
		<label for="">
			<input type="text" name="user" id="user" value="" placeholder="账号"/>
		</label>
		<label for="">
			<input type="password" name="passwd" id="passwd" value="" placeholder="密码"/>
		</label>
		<label style="float: left;width: 100%;">
			<input type="checkbox" name="state" id="state" value="" class="state"/> 记住登录状态7天
		</label>
		<label for="">
			<button type="submit" class="submit" name="send">登录</button>
		</label>
		
	</form>
</div>



<?php require "footer.php"?>
</body>
</html>