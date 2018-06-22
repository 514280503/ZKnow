<?php

//弹窗提示
function alert($info){
	echo "<script>alert('$info');history.back()</script>";
	exit();
}

function location($info,$url){
	echo "<script>alert('$info');location.href='$url'</script>";
	exit();
}
