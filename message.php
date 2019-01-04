<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:login.html");
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
background-color:;
}
.categories ul li{
text-align:center;
font-size:120%;

}
.categories h3{
text-align:center;
}
.for{
margin-left:40%;
margin-right:auto;
color:black;
font-size:125%;
}
.fashion-grid1{
margin-top:3%;
border-color:red;
border-width:20px;
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
.fashion-section{
margin-left:-30%;
margin-top:0%;

}
.fashion-section {
background:rgb(222,222,222);
width:75%;
margin-left:15%;
height:85%;
border:3px solid rgb(222,222,222);
border-radius:5px;
overflow:auto;
}
ul{
  text-align:left;
}

.fashion-section h5{
color: #5d5959;
font-size:1.0em;
padding-bottom:10px; 

}

.message{
width:100%;
height:7em;
padding:3px;
padding-bottom:0px;
background:rgb(222,222,222);
z-index:99;
border:5px solid rgb(239,239,239);
}
.g1 a:hover{
color:grey;
text-decoration: none;}
.g1 a:click{
text-decoration: none;
}
.g1 h3{
color:balck;
float:left;
text-decoration: none;}
.g1 .date{
float:right;}
.comment{
overflow:auto;
}
</style>
</head>
<body>
<!---->
<div class="header men" >
	 <div class="container" >
		 <div class="header-left">
			 <div class="top-menu" >
				 <ul>
				 <li><a href="index2.php">主页</a></li>
				 <li ><a href="book.php">类别</a></li>
				 <li class="active"><a href="infor.php">个人</a></li>		
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
				  //ini_set("display_errors","On");  
				  //error_reporting(E_ALL);
				  include_once("my_db.php");
				  $db1=new mydb();
				  $sql="SELECT COUNT(*) FROM collect WHERE co_phone=".$_SESSION['phone'];
				  $res=$db1->usage($sql,"R",'my_database');
				  if($row=mysqli_fetch_row($res)) $res=$row[0];
				  echo "<a href='collect_info.php'><img href='collect_info.php' src='img/cart.png' alt=''/>".$res."</a></div>";
				  echo "<ul>";
				  if(strlen((string)$_SESSION['phone'])==11){
					  echo "<li><a href='infor.php?phone=".$_SESSION['phone']."' class='user_name'>".$_SESSION['phone']."</a><span></span>&nbsp</li>";
					}
				  else 
					  echo "<li><a href='' class='user_name'>".$_SESSION['phone']."</a><span></span>&nbsp</li>";
				 
				 ?>
				 
				 <!--ul>
					 <li><a href="infor.php" class="user_name"><?php //echo $_SESSION['phone']; ?></a> <span>/<span> &nbsp;</li-->
						
					<li><a href="logout.php"> 退出登录</a></li>
				 </ul>	  
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="men-fashions">
	 <div class="container">		 
		 <div class="col-md-9 fashions">
	       <div class="comment"> 	
			 <div class="fashion-section">
			<?php
			  include_once("my_db.php");
			  $db=new mydb();
			  $sql="SELECT distinct FromPhone,ToPhone,message.id,book_id,infor,date,time,book.phone FROM message,book WHERE book.id=message.book_id and (book.phone=".$_SESSION['phone']." or FromPhone=".$_SESSION['phone']." or ToPhone=".$_SESSION['phone'].")";
			  $res=$db->usage($sql,"R",'my_database');
			  while($row=mysqli_fetch_array($res)){
				  $from=$row['FromPhone'];
				  $to=$row['ToPhone'];
				  $id=$row['message.id'];
				  $book_id=$row['book_id'];
				  $infor=$row['infor'];
				  $date=$row['date'];
				  $time=$row['time'];
				  $book_phone=$row['book.phone'];
				  echo "<div class='message g1'>"
					." <a href='see_comment.php?pub=".$book_phone."&phone=".$_SESSION['phone']."&id=".$book_id."'>"
					."<h3>".$from.": </h3><br>"
					."<p class='date'>".$date." ".$time."</p><br>"
					."<h4>".$infor."</h4></a></div>";
			  }
			  $db=null;
			?> 
		                      
			
			 </div>
			 </div>
		 </div>
		 <div class="col-md-3 side-bar">
			  <div class="categories">
					<h3>目录</h3>
				  <ul>
						<li ><a href="infor.php"><span >个人信息</span></a></li>
						<li><a href="passwd.php"><span>修改密码</span></a></li>
						<li><a href="public.php"><span >发布新书</span></a></li>
						<li><a href="public_info.php"><span>已发布书目</span></a></li>
						<li><a href="collect_info.php"><span >已收藏书目</span></a></li>
						<li><a href="message.php"><span class="active1">消息</span></a></li>
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