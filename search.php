<?php
session_start();
$low=$_GET['low'];
$high=$_GET['high'];
$pageSize=6;
$rowCount=0;//共有多少记录
$pageNow=1;//希望显示的页数
$pageCount=0;//一共多少页
$phone=$_SESSION['phone'];
if(!empty($_GET['pageNow'])){
	$pageNow=$_GET['pageNow'];
}
include_once('my_db.php');
$db=new mydb();
$sql="select count(*) from book where book.price>=".$low." and book.price<=".$high;
$res1=$db->usage($sql,"R",'my_database');
if($row=mysqli_fetch_row($res1)) $rowCount=$row[0];
$pageCount=ceil($rowCount/$pageSize);
$pageStart=($pageNow-1)*$pageSize;
$sql="select id,name,price,file1 from book where book.price>=".$low." and book.price<=".$high." limit $pageStart,$pageSize";
$res2=$db->usage($sql,"R",'my_database');
while($row=mysqli_fetch_array($res2)){
	$id=$row['id'];
	$name=$row['name'];
	$price=$row['price'];
	$file1=$row['file1'];
	echo "<div class='col-md-4 fashion-grid'>"
	."<a href='single.php?id=".$id."'>"
	."<img class='img' src=". $file1 ." alt=''/>"
	."<div class='product'><h3>".$name."</h3><p><span></span>".$price."&euro;</p></div>"
	."</a>"
	."<div class='fashion-view'><span></span><div class='clearfix'></div>"
	."<h4><a href='single.php?id=$id'>Quick View</a></h4></div>"
	."</div>";
}
echo "<div class='clearfix'></div><p id='foot'>";
for($i=1;$i<=$pageCount;$i++){
	echo "<a id='page' href='?pageNow=$i'>$i</a>";
}
echo "</p>";		
$db=null;
?>