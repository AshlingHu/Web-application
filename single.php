<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:login.html");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>书目信息</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
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
<style>
.collect,button{
background-color:rgb(209,209,209);

}
button,input{
width:100%;
height:3em;
border-radius:2em/3em;
}
.collect{
background:#d1d1d1;

color:#1a1818;
width:100%;
font-size:1em;
text-align:center;
margin-bottom: 1.3em;
}
input{
margin-top:1em;}
.delete{
color:#fff;
background:#1a1818;

text-decoration:none;
display:block;
text-align:center;
}
.delete:hover{
color:#1a1818;
background: #d1d1d1;
}
</style>
</head>
<body>
<!---->
<div class="header single">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li><a href="index2.php">主页</a></li>
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
				  // ini_set("display_errors","On");  
				 // error_reporting(E_ALL);
				  include("my_db.php");
				  $db=new mydb();
				  $sql="SELECT COUNT(*) FROM collect WHERE co_phone=".$_SESSION['phone'];
				  $res=$db->usage($sql,"R",'my_database');
				  if($row=mysqli_fetch_row($res)) $res=$row[0];
				  echo "<a href='collect_info.php'><img href='collect_info.php' src='img/cart.png' alt=''/>{$res}</a></div>";
				  echo "<ul>";
				  if(strlen((string)$_SESSION['phone'])==11){
					  echo "<li><a href='infor.php?phone=".$_SESSION['phone']."' class='user_name'>".$_SESSION['phone']."</a><span></span>&nbsp</li>";
					}
				  else 
					  echo "<li><a href='' class='user_name'>".$_SESSION['phone']."</a><span></span>&nbsp</li>";
				 ?>
				   <!--a href="collect_info.jsp"><img href="art.jsp" src="img/cart.png" alt=""/>(num %>)</a></div-->
				 <li><a href="logout.php"> 退出登录</a></li>
				 </ul>	 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider2").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
    <script src="js/responsiveslides.min.js"></script>
<div class="single-section">
	 <div class="col-md-8 fashions2">			 
			<div class="slider2">
				<ul class="rslides rslider" id="slider2">	
				<?php
				$id=$_GET['id'];
				//include("my_db.php");
				$db=new mydb();
				$sql="select * from book where id=".$id;
				$res=$db->usage($sql,"R",'my_database');
				$arr=mysqli_fetch_array($res);
				$name=$arr['name'];
				$price=$arr['price'];
				$des=$arr['description'];
				$files=array($arr['file1'],$arr['file2'],$arr['file3'],$arr['file4']);
				$phone=$arr['phone'];
				for($i=0;$i<4;$i++){
					if(!($files[$i]=='')){
						echo "<li><img src=".$files[$i]." alt=''></li>";
					}
				}
				$db=null;
				?>
				</ul>
		   </div>
	  </div> 
	<div class="col-md-4 side-bar2">
		  <div class="product-price">
			   <div class="product-name">
			   <?php
			   $id=$_GET['id'];
			   $phone=$_SESSION['phone'];
				//include("my_db.php");
				$db=new mydb();
				$sql="select * from book where id=".$id;
				$res=$db->usage($sql,"R",'my_database');
				$arr=mysqli_fetch_array($res);
				$name=$arr['name'];
				$price=$arr['price'];
				$des=$arr['description'];
				$pub_phone=$arr['phone'];
				$tmp=$arr['avaliable'];
				if($tmp==true) $available="AVAILABLE";
				else $available="UNAVAILABLE";
				echo "<h2>".$name."</h2>"
					."<p>";
				if($pub_phone==$_SESSION['phone']){
					echo "<a href='infor.php'>".$phone."</a>";
				}
				else 
					echo "<a href='see_pub.php?pub=".$pub_phone."'>".$pub_phone."</a>";
				echo "</p>"
					."<p><a href='see_comment.php?pub=".$pub_phone."&phone=".$phone."&id=".$id."' target='view_window'>查看评论</a></p>"
					."<span>".$price."&#65509;</span>"
					."<p>".$des."</p>"
					."<div class='clearfix'></div>"
					."<h4>".$available."</h4></div>";
			
				
				echo "<div class='product-id'>"
					."<p>书目编号: <span>".$id."</span></p>";
				
				$sql="select * from collect where id=".$id." and co_phone=".$phone;
				$res2=$db->usage($sql,"R",'my_database');
				//$arr=mysqli_fetch_array($res2);//搜索当前登录用户的收藏情况
				if($res2==null) $collect_or_not=false;
				else $collect_or_not=true;
				
				if(strlen((string)$_SESSION['phone'])==11){//非管理员
					if($phone==$pub_phone){//是发布本人查看
					echo "<button onclick='window.location.href='update_book.php?id=".$id." class='collect' style='margin-top:1em'>修改</button>";
					echo "<form action='collect.php?phone=".$phone."&id=".$id."&collect_or_not=".$collect_or_not."&pub_phone=".$pub_phone."&available=".$tmp."' method='post'>";
					if($tmp==true) echo "<input name='delete' type='submit' value='下架' class='delete' >";
					else echo"<input name='add' type='submit' value='上架' class='delete' >";
					}
					else if($collect_or_not==true){//非发布本人已收藏
						echo "<form action='collect.php?phone=".$phone."&id=".$id."&collect_or_not=".$collect_or_not."&pub_phone=".$pub_phone."' method='post'>";
						echo "<input name='delete_collect' type='submit' value='取消收藏' class='collect' >";
					}
					else{//非发布本人未收藏
						echo "<form action='collect.php?phone=".$phone."&id=".$id."&collect_or_not=".$collect_or_not."&pub_phone=".$pub_phone."' method='post'>";
						echo "<input name='collect' type='submit' value='收藏' class='collect' >";
					}
				}
				else{//管理员
					echo "<form action='collect.php?phone=".$phone."&id=".$id."&collect_or_not=".$collect_or_not."&pub_phone=".$pub_phone."' method='post'>";
					echo "<input name='collect' type='submit' value='删除' class='collect' >";
				}
				echo "</form></div>";
				$db=null;
			   ?>
			 </div>
		</div>
	      	 
	 <div class="clearfix"></div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <p>Copyright &copy; 2018 二手书交易网 All rights reserved.</p>
		 <div class="social">
			 <a href="#"><span class="icon1"></span></a>
			 <a href="#"><span class="icon2"></span></a>
			 <a href="#"><span class="icon3"></span></a>
			 <a href="#"><span class="icon4"></span></a>
		 </div>
		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>
		