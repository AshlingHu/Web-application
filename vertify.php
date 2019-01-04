<?php
session_start();//开启session服务
$passwd=$_POST['passwd'];
$phone=$_POST['phone'];

include("my_db.php");
$db=new mydb();

$sql="SELECT * FROM user WHERE phone=$phone";
$str = $db->usage($sql,"R","my_database");
if($str==null) //该用户不存在
	echo "<script>alert('用户输入错误');history.back();</script>";
else{
	$row = mysqli_fetch_array($str, MYSQLI_ASSOC);
	mysqli_free_result($str);
	if($row['password']==$passwd)
	{
		$_SESSION['phone']=$phone; //设置登录用户标识
	
		header("Location: index2.php");
	}
	else echo "<script>alert('密码错误');history.back();</script>";
}
?>