<?php
session_start();
$from=$_GET['from'];
$book_id=$_GET['book'];
$to=$_GET['to'];
$m_id=$_GET['id'];
include_once("my_db.php");
$db=new mydb();
$sql="delete from message where id=".$m_id;
$str=$db->usage($sql,'F','my_database');
$db=null;
if($str=='OK')
{
	echo "<script type='text/javascript'>alert('删除成功！');</script>";
    echo "<script type='text/javascript'>location.href='see_comment.php?pub=".$to."&phone=".$from."&id=".$book_id."'</script>";
}
else
{
	echo "<script type='text/javascript'>alert('删除失败！');</script>";
}
?>