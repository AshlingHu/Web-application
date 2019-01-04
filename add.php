<?php
session_start();
$phone=$_POST['phone'];
$email=$_POST['email'];
$first=$_POST['school'];
$second=$_POST['depart'];
$passwd=$_POST['passwd'];
$passwd1=$_POST['passwd1'];
$identify=$_POST['identify'];
$input_code=$_POST['code'];
if($passwd=="")
{
	echo "<script>alert('请输入密码');history.back();</script>";
}
else if(!($passwd1==$passwd)){
	echo "<script>alert('两次密码不同');history.back();</script>";
}
else if(!($identify==$input_code)){
	echo "<script>alert('验证码输入错误');history.back();</script>";
}
else{
	//数据库添加数据
	//echo "<script>alert('".$phone.$passwd.$first.$second.$email."')</script>";
	require_once("my_db.php");
	$db=new mydb();
	$sql="INSERT INTO user (phone,password,school,department,email) VALUES ('$phone','$passwd','$first','$second','$email')";
	$str =$db->usage($sql,"F",'my_database');
	if($str=="OK"){
		$_SESSION['phone']=$phone;
		$_SESSION['school']=$first;
		$_SESSION['department']=$second;
		$_SESSION['email']=$email;
		header("Location: index2.php");
		exit;
	}
	else echo"<script>history.back();</script>";
	exit;
}
?>