<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>注册---ZKnows</title>
	<link rel="stylesheet" type="text/css" href="css/common.css"/>
	<link rel="stylesheet" href="css/register.css" />
</head>
<body>
<?php require_once "header.php"?>

<div class="register">
	<form action="register_post.php" method="post">
		<label for="">
			<input type="text" name="account" id="account" value="" placeholder="手机或者邮箱"/>
		</label>
		<label for="">
			<input type="password" name="passwd" id="passwd" value="" placeholder="密码"/>
		</label>
		<label for="">
			<input type="password" name="notpasswd" id="notpasswd" value="" placeholder="密码确认"/>
		</label>
		<label for="">
			<input type="text" name="nickname" id="nickname" value="" placeholder="昵称"/>
		</label>
		
		<label for="">
			<button type="submit" class="submit" name="send">注册</button>
		</label>
		
	</form>
</div>



<?php require_once "footer.php"?>
</body>
</html>