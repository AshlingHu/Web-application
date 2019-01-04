<?php
session_start();
$pub=$_GET['pub'];
$phone=$_GET['phone'];
$book_id=$_GET['id'];
$infor=$_POST['infor'];
date_default_timezone_set('Asia/Shanghai');
$date=date("Y-m-d");
$time=date("H:i:s");
include_once("my_db.php");
$db=new mydb();
$sql="select count(*) from message";
$res=$db->usage($sql,"R",'my_database');
$ans=mysqli_fetch_row($res);
$count=$ans[0];
if($count==0) $m_id=1;
else $m_id=$count+1;
$sql="insert into message(FromPhone,book_id,infor,ToPhone,date,time,id) values('$phone','$book_id','$infor','$pub','$date','$time','$m_id')";
$str=$db->usage($sql,'F','my_database');
$db=null;
if($str=='OK')
{
	echo "<script type='text/javascript'>alert('评论成功！');location.href='see_comment.php?pub=".$pub."&phone=".$phone."&id=".$book_id."';</script>";
}
else
{
	echo "<script type='text/javascript'>alert('评论失败！');location.href='see_comment.php?pub=".$pub."&phone=".$phone."&id=".$book_id."';</script>";
}
?>