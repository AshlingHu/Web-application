<?php
session_start();
$phone=$_GET['phone'];
$book_id=$_GET['id'];
$collect_or_not=$_GET['collect_or_not'];
$pub_phone=$_GET['pub_phone'];
$avaliable=$_GET['available'];
include("my_db.php");
$db_c=new mydb();
if(strlen((string)$phone)==11){//非管理员
	if($phone==$pub_phone)//本人查看
	{
		if($avaliable==true){//下架操作
			$sql="update book set avaliable=0 where id=".$book_id;
			$res=$db_c->usage($sql,"F",'my_database');
			if($res=='OK'){
				echo "<script>alert('下架成功');</script>";
				header("Location:single.php?id=".$book_id);
				exit;
				}
		}
		else
		{
			$sql="update book set avaliable=1 where id=".$book_id;
			$res=$db_c->usage($sql,"F",'my_database');
			if($res=='OK'){
				echo "<script>alert('上架成功');</script>";
				header("Location:single.php?id=".$book_id);
				exit;}
		}
	}
	else{
		if($collect_or_not==0){
			$time = date("Y-m-d", time());
			$sql="Insert INTO collect(id,date,co_phone) VALUES ('$book_id','$time','$phone')";
			$res=$db_c->usage($sql,"F",'my_database');
			if($res=='OK'){
				echo "<script>alert('收藏成功');</script>";
				header("Location:single.php?id=".$book_id);
				exit;}
		}
		else{//取消收藏
			$sql="delete from collect where id=".$book_id." and co_phone=".$phone;
			$res=$db_c->usage($sql,"F",'my_database');
			if($res=='OK'){
				echo "<script>alert('已取消收藏');</script>";
				header("Location:single.php?id=".$book_id);
				exit;
			}
		}
	}
}
else//管理员
{
	$sql="delete from book where id=".$book_id;
	$res=$db_c->usage($sql,"F",'my_database');
	if($res=='OK'){
		echo "<script>alert('删除成功');</script>";
		header("Location:index2.php");
		exit;
	}
}
$db_c=null;
?>