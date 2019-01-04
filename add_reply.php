<?php
session_start();
$to=$_GET['from'];
$from=$_SESSION['phone'];
$infor=$_POST['infor'];
$book_id=$_GET['book'];


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
$sql="insert into message(FromPhone,book_id,infor,ToPhone,date,time,id) values('$from','$book_id','$infor','$to','$date','$time','$m_id')";
$str=$db->usage($sql,'F','my_database');

$sql="select phone from book where id=".$book_id;
$res=$db->usage($sql,'R','my_database');
$ans=mysqli_fetch_array($res);
$pub=$ans['phone'];

$db=null;
if($str=='OK')
{
	echo "<script type='text/javascript'>alert('评论成功！');location.href='see_comment.php?pub=".$pub."&phone=".$from."&id=".$book_id."';</script>";
}
else
{
	echo "<script type='text/javascript'>alert('评论失败！');location.href='see_comment.php?pub=".$pub."&phone=".$from."&id=".$book_id."';</script>";
}
?>