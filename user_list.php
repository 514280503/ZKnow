<?php

include 'zkcore/db.php';


//每页的条数
$pageSize = 12;

//当前页码
$page = 1;

//总页码初始为1
$pageAbsolute = 1;

//先判断page 是否存在
if (isset($_GET['page'])) {
    //将得到的页码赋值给变量
    $page = $_GET['page'];

    //如果页面值为空或小于零或不是数字，则默认为1
    if (empty($page) || $page <= 0 || !is_numeric($page)) {
        $page = 1;
    } else {
        $page = intval($page);
    }
}

//总记录数的SQL
$totalSql = "SELECT COUNT(*) FROM zknow_users";

//得到总记录数
$total = mysqli_fetch_array(mysqli_query($db, $totalSql))[0];

//得到总页码
if ($total != 0) {
    $pageAbsolute = ceil($total / $pageSize);
}

//超过页码判断
if ($page > $pageAbsolute) {
    $page = $pageAbsolute;
}

//计算当前页码在从第几条开始
$num = ($page - 1) * $pageSize;

//组合成LIMIT
$limit = "$num, $pageSize";

//获取用户列表的SQL
$usersSql = "SELECT nickname FROM zknow_users ORDER BY createtime DESC LIMIT $limit";

//获取结果集
$res = mysqli_query($db, $usersSql);

//$sql = "select nickname from zknow_users order by createtime desc";
//
//$res = mysqli_query($db, $sql);

?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>用户列表---ZKnows</title>
	<link rel="stylesheet" type="text/css" href="css/common.css"/>
	<link rel="stylesheet" href="css/user.css" />
</head>
<body>
<?php require "header.php"?>

<div class="userlist">
	<?php while($rows = mysqli_fetch_assoc($res)):?>
	<figure>
		<img src="img/face/<?php echo rand(0,10)?>.png"/>
		<figcaption>
			<div class="name"><?php echo $rows['nickname']?></div>
			<div class="info">提问：XX | 回答：XX</div>
		</figcaption>
	</figure>
	<?php endwhile;?>
	<div class="page">
		<ul>
			<!--<li class="first"><a href="#">&lt;</a></li>
			<li><a href="#" class="active">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li class="next"><a href="#">&gt;</a></li>-->
			<?php
                //上一页
                if ($page == 1) {
                    echo '<li class="first"><a href="javascript:void(0)">&lt;</a></li>';
                } else {
                    echo '<li class="first"><a href="user_list.php?page='.($page - 1).'">&lt;</a></li>';
                }


                //循环分页页码
                for ($i = 1; $i <= $pageAbsolute; $i++) {
                    if ($page == $i) {
                        echo '<li><a href="javascript:void(0)" class="active">'.$i.'</a></li>';
                    } else {
                        echo '<li><a href="user_list.php?page='.$i.'">'.$i.'</a></li>';
                    }
                }

                //下一页
                if ($page == $pageAbsolute) {
                    echo '<li class="last"><a href="javascript:void(0)">&gt;</a></li>';
                } else {
                    echo '<li class="last"><a href="user_list.php?page='.($page + 1).'">&gt;</a></li>';
                }
            ?>
		</ul>
	</div>
</div>



<?php require "footer.php"?>
</body>
</html>

