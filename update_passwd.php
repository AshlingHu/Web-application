<?php
if(empty($_GET['phone']))
	$phone=$_POST['phone'];
else
	$phone=$_GET['phone'];
$passwd=$_POST['passwd1'];
$passwd1=$_POST['passwd2'];
$identify=$_POST['identify'];
$input_code=$_POST['code'];
if($identify!=$input_code)
{
	echo "<script>alert('验证码输入错误');history.back();</script>";
}
else if($passwd!=$passwd1){
	echo "<script>alert('两次密码不同');history.back();</script>";
}
else{//验证码输入成功修改数据库密码
	require_once("my_db.php");
	$db=new mydb();
	$sql="UPDATE user SET password='{$password}' WHERE phone='{$phone}'";
	$res=$db->usage($sql,"F",'my_database');
	if($res=='OK'){
		echo "<script>alert('密码已修改');location.href='login.html'</script>";
	}
	else{
		echo "<script>alert('密码修改失败');history.back();</script>";
	}
}
exit;
?>