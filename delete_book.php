<?php
session_start();
$delete_id=$_GET["delete"];

include_once('my_db.php');
$db=new mydb();
$sql="delete from book where book.id=".$delete_id;
$res1=$db->usage($sql,"F",'my_database');
if($res1=="OK")
{
	echo "<script type='text/javascript'>alert('删除成功！');location.href='admin_user.php';</script>";
}
else
{
	echo "<script type='text/javascript'>alert('删除失败');location.href='admin_user.php'</script>";
}
exit;
?>