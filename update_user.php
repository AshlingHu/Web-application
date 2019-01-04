<?php
session_start();
$school=$_POST['first'];
$department=$_POST['second'];
$email=$_POST['email'];
$phone=$_POST['phone'];

require_once("my_db.php");
$db=new mydb();
$sql="UPDATE user SET school='{$school}',department='{$department}',email= '{$email}' WHERE phone='{$_SESSION['phone']}'";
//echo $sql;

$str =$db->usage($sql,"F",'my_database');
if($str=="OK"){
	$_SESSION['school']=$school;
	$_SESSION['department']=$department;
	$_SESSION['email']=$email;
	echo "<script>alert('修改成功');location.href='index2.php'</script>";
	//$_SESSION['phone']=$phone;
}
else //echo "<script>alert('修改失败');history.back();</script>";
{
	echo "<script>alert('修改失败');history.back();</script>";
}
exit;
//echo $str;
?>