<?php
session_start();
$admin_phone=$_POST['phone'];
$pwd=$_POST['passwd'];

include_once("my_db.php");
$db=new mydb();

$sql="SELECT * FROM admin WHERE phone=$admin_phone";
$str = $db->usage($sql,"R","my_database");
if($str==null) //该用户不存在
	echo "<script>alert('账号输入错误');history.back();</script>";
else{
	$row = mysqli_fetch_array($str, MYSQLI_ASSOC);
	mysqli_free_result($str);
	if($row['password']==$pwd)
	{
		$_SESSION['phone']=$admin_phone; //设置登录用户标识
	
		header("Location: index2.php");
	}
	else echo "<script>alert('密码错误');history.back();</script>";
}
exit;
?>