<meta charset="UTF-8"/>
<header class="header">
	<div class="center">
		<div class="logo"></div>
		<nav class="nav">
			<ul>
				<li>
					<a href="index.php">首页</a>
				</li>
				<li>
					<a href="user_list.php">用户<span class="sm-hidden">列表</span></a>
				</li>
				<li>
					<a href="#">搜索</a>
				</li>
				<?php if(isset($_COOKIE['name'])):?>
				<li>
					<a href="member.php">个人<span class="sm-hidden">中心</span></a>
				</li>
				<li>
					<a href="logout.php">退出</a>
				</li>
				<?php else:?>
				<li>
					<a href="register.php">注册</a>
				</li>
				<li>
					<a href="login.php">登录</a>
				</li>
				<?php endif;?>	
			</ul>
		</nav>
	</div>
</header>

<div class="mt70"></div>