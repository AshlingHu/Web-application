<?php
session_start();
if($_SESSION['phone']==$_GET['pub']) header("Location:public_info.php");
//不是发布者本人
?>
<html>
<head>
<title>个人信息</title>
<link href="css/book.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<script src="http://ajax.useso.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
</script>
<style>
.col-md-3 {
    width: 20%;
	height:100%;
  }
.side-bar {
padding: 2em 2em 6em 2em;
width:20%;
}
.categories ul li{
text-align:center;
font-size:120%;

}
.categories h3{
text-align:center;
}
.active1{
padding-bottom:2px; 
border-bottom:2px solid black;
}
.categories a span{
font-weight:normal;
}
body{
background:rgb(239,239,239);
}
.fashion-section h5{
color: #5d5959;
font-size:1.0em;
padding-bottom:10px; 
}
.fashion-section{
margin-top:1%;
border-color:red;
border-width:20px;
width:700px;
height:700px;
float:left;
margin-left:8%;
border:solid 4px white;
}
.g1{
list-style:none;
margin:10px;
width:300px;
float:left;
}
div h3,div h5{
text-align:center;}
.img{
width:300px;
height:300px;
}

#page{
margin:10px;}

#foot{
 width:798px;
 height:50px;
 position:relative;
margin-top:640px;
margin-left:37%;
}
#page{
margin:10px;}
body{
background:rgb(239,239,239);
}
</style>
</head>
<body>
<div class="header men" >
	 <div class="container" >
		 <div class="header-left">
			 <div class="top-menu" >
				 <ul>
				 <li class="active"><a href="index2.php">主页</a></li>
				 <li><a href="book.php">类别</a></li>
				  <li><a href="infor.php">个人</a></li>
				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="index2.php"><img src="img/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
			 <div class="signin">
				  <div class="cart-sec">
				  <?php
				  include("my_db.php");
				  $db=new mydb();
				  $sql="SELECT COUNT(*) FROM collect WHERE co_phone={$_SESSION['phone']}";
				  $res=$db->usage($sql,"R",'my_database');
				  if($row=mysqli_fetch_row($res)) $res=$row[0];
				  echo "<a href='collect_info.php'><img href='collect_info.php' src='img/cart.png' alt=''/>{$res}</a></div>";
				 ?>
				 <?php echo "<ul><li><a href='infor.php' class='user_name'>{$_SESSION['phone']}</a> <span>/<span> &nbsp;</li><li><a href='logout.php'> 退出登录</a></li></ul>";
				 ?> 	 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="men-fashions">
	 <div class="container">		 
		 <div class="col-md-9 fashions">
			 <div class="fashion-section">
				<div class="container1" >		
				  <h2>卖家已经发布的书目如下：</h2>
				   <div class="course_demo1"> 
					<?php
					$pageSize=6;
					$rowCount=0;//共有多少记录
					$pageNow=1;//希望显示的页数
					$pageCount=0;//一共多少页
					$phone=$_GET['pub'];
					if(!empty($_GET['pageNow'])){
						$pageNow=$_GET['pageNow'];
					}
					include_once('my_db.php');
					$db=new mydb();
					$sql="select count(*) from book where book.phone=".$phone;
					$res1=$db->usage($sql,"R",'my_database');
					if($row=mysqli_fetch_row($res1)) $rowCount=$row[0];
					$pageCount=ceil($rowCount/$pageSize);
					$pageStart=($pageNow-1)*$pageSize;
					$sql="select id,name,price,file1 from book where book.phone=".$phone." limit $pageStart,$pageSize";
					$res2=$db->usage($sql,"R",'my_database');
					while($row=mysqli_fetch_array($res2)){
						$id=$row['id'];
						$name=$row['name'];
						$price=$row['price'];
						$file1=$row['file1'];
						echo "<div class='g1'>"
						."<img class='img' src=". $file1 ." alt=''/>"
						."<a href='single.php?id=".$id."'>"
						."<div class='caption'><span></span><h3>".$name."</h3><h5>".$price."&#65509;</h5></div>"
						."</a>"
						."<div class='clearfix'></div>"
						."</div>";
					}
					echo "</div>";//course_demo1
					echo "<p id='foot'>";
					for($i=1;$i<=$pageCount;$i++){
						echo "<a id='page' href='?pageNow=$i'>$i</a>";
					}
					echo "</p>";
					$db=null;
				?>
				</div><!--container1-->
			</div><!--fashion-section-->
			</div><!--col-md-9 fashions-->
			 <div class="col-md-3 side-bar">
				  <div class="categories">
						<h3>卖家信息</h3>
					  <ul>
					  <li></li>
					  <?php
						$school=array("中山大学","广州大学","广东药科大学","华南理工大学","华南师范大学","广东工业大学","广州美术学院","星海音乐学院","广州中医药大学","广东外语外贸大学");
						include_once('my_db.php');
						$db=new mydb();
						$sql="select * from user where phone=".$_GET['pub'];
						$res=$db->usage($sql,"R",'my_database');
						$arr=mysqli_fetch_array($res);
						echo "<li><a href=''><span >".$school[$arr['school']]."</span></a></li>"
							."<li><a href=''><span>".$arr['department']."</span></a></li>"
							."<li><a href=''><span >".$arr['phone']."</span></a></li>"
							."<li><a href=''><span >".$arr['email']."</span></a></li>";
					  ?>
						
					  </ul>
				  </div>
				  <div class="sales">
					  <div class="pricing">
					  <div class="clearfix"></div>
						 </div>
					  <div class="size">
						 </div>
				  </div>
			</div>
			 <div class="clearfix"></div>
		</div>
	</div>
<div class="footer">
	 <div class="container">
		  <p>Copyright &copy; 2018 二手书交易网 All rights reserved.</p>

		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>