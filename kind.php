<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Book</title>
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
<style>
.col-md-3 {
    width: 20%;
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
.sales h3,.sales h4{
text-align:center;
}
.price{
font-size:120%;
}
.range{
margin-top:5%;
margin-left:5%;
margin-right:auto;
}
#searchKeywords{
width:60%;
height:3em;
border-color:dirgrey;
float:left;
border-radius:10px 0px 0px 10px;
}
.search-btn{
height:3em;
width:10%;
border-radius:0px 10px 10px 0px;
}
.img{
height:400px;
width:250px;
}
.fashion-grid{
height:400px;
width:250px;
margin:10px;
}
#foot{
 width:798px;
 height:50px;
 position:relative;
margin-top:40px;
margin-left:37%;
}
#page{
margin:10px;}
.product,.fashion-view{
width:239px;
}
.categories a span{
font-weight:normal;
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
				 <li class="active"><a href="book.php">类别</a></li>
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
				  //ini_set("display_errors","On");  
				  //error_reporting(E_ALL);
				  include("my_db.php");
				  if(!empty($_SESSION['phone'])){
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
					  echo "<li><a href='logout.php'> 退出登录</a></li></ul>";
					}
					else
					{
						echo "<a href='login.html'><img href='login.html' src='img/cart.png' alt=''/>(0)</a></div>"
							."<ul><li><a href='registration.html'>注册</a> <span>/<span> &nbsp;</li>"
							."<li><a href='login.html'> 登录</a></li></ul>";
						
					}
				 ?>	 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!--request.setCharacterEncoding("utf-8");
String msg ="";
Integer pgno = 0; //当前页号
Integer pgcnt = 6; //每页行数
String param = request.getParameter("pgno");
if(param != null && !param.isEmpty()){
pgno = Integer.parseInt(param);
}
param = request.getParameter("pgcnt");
if(param != null && !param.isEmpty()){
pgcnt = Integer.parseInt(param);
}
int pgprev = (pgno>0)?pgno-1:0;
int pgnext = pgno+1;
String count=list.getCount();
int cou= Integer.parseInt(count);
String child="child",ec="ec",his="his",art="art",no="no",ad="ad",he="he",eng="eng",law="law",com="com",re="re";


$msg="";
$pgno = 0;
$pgcnt = 6;
$pgprev = (pgno>0)?pgno-1:0;
$pgnext = pgno+1;
include("my_db.php");
$db= new mydb();
$sql="SELECT COUNT(*) as total FROM book";
$res=$db->usage($sql,"R",'my_database');
$tmp=mysqli_fetch_array($res);
$count=$tmp['total'];*/
?>-->
<div class="men-fashions" >
	 <div class="container" >		 
		 <div class="col-md-9 fashions">
		 <div class="search-keyword-box">
        <input tabindex="0" id="searchKeywords" type="text" class="search-keyword" name="index1_none_search_ss2" value="" autocomplete="off" />     
		 </div>		
		 <input id="searchSubmit" type="image" class="search-btn" name="index1_none_search_ss1" src="img\searc.jpg" />
		
			 <div class="fashion-section">
				 <div class="fashion-grid1">
				 
				<?php
					$pageSize=6;
					$rowCount=0;//共有多少记录
					$pageNow=1;//希望显示的页数
					$pageCount=0;//一共多少页
					$kind="re";//
					if(!empty($_GET['pageNow'])){
						$pageNow=$_GET['pageNow'];
					}
					if(!empty($_GET['kind'])){//
						$kind=$_GET['kind'];//
					}//
					//$kind=mysqli_real_escape_string($kind);
					//echo "<script>alert('$kind');</script>";
					//include('my_db.php');
					$db=new mydb();
					$sql="SELECT COUNT(*) FROM book WHERE kind='$kind'";
					$res1=$db->usage($sql,"R",'my_database');
					if($row=mysqli_fetch_row($res1)) $rowCount=$row[0];
					//echo "<script>alert('$rowCount');</script>";
					
					$pageCount=ceil($rowCount/$pageSize);
					$pageStart=($pageNow-1)*$pageSize;
					$sql="SELECT * FROM book WHERE kind='$kind' LIMIT $pageStart,$pageSize";
					$res2=$db->usage($sql,"R",'my_database');
					//$row=mysqli_fetch_array($res2)
					while($row=mysqli_fetch_array($res2)){
						$id=$row['id'];
						//echo "<script>alert('$id');</script>";
						$name=$row['name'];
						$price=$row['price'];
						$file1=$row['file1'];
						echo "<div class='col-md-4 fashion-grid'>"
						."<a href='single.phpid=$id'>"
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
				?>
					
			<!--div class="clearfix"></div>
					  <p id="foot">
              </p>
				 </div-->
			 </div>
			 </div>
		 </div>
		 <div class="col-md-3 side-bar" >
			  <div class="categories">
					<h3>类别目录</h3>
				  <ul>
						<?php
						$child="child";$ec="ec";$his="his";$art="art";$no="no";$ad="ad";$he="he";$eng="eng";$law="law";$com="com";$re="re";
						if($_GET['kind']==$re)
							echo "<li><a href='kind.php?kind=&re'><span class='active'>推荐</span></a></li>";
						else echo "<li><a href='kind.php?kind=&re'><span>推荐</span></a></li>";
						
						if($_GET['kind']==$his) 
							echo "<li><a href='kind.php?kind=$his'><span class='active'>历史</span></a></li>";
						else echo "<li><a href='kind.php?kind=$his'><span>历史</span></a></li>";
						
						if($_GET['kind']==$child) 
							echo "<li><a href='kind.php?kind=$child'><span class='active'>儿童</span></a></li>";
						else echo "<li><a href='kind.php?kind=$child'><span>儿童</span></a></li>";
						
						if($_GET['kind']==$ec) 
							echo "<li><a href='kind.php?kind=$ec'><span class='active'>经济</span></a></li>";
						else echo "<li><a href='kind.php?kind=$ec'><span>经济</span></a></li>";
						
						if($_GET['kind']==$ad) 
							echo "<li><a href='kind.php?kind=$ad'><span class='active'>管理</span></a></li>";
						else echo "<li><a href='kind.php?kind=$ad'><span>管理</span></a></li>";
						
						if($_GET['kind']==$he) 
							echo "<li><a href='kind.php?kind=$he'><span class='active'>保健</span></a></li>";
						else echo "<li><a href='kind.php?kind=$he'><span>保健</span></a></li>";
						
						if($_GET['kind']==$no) 
							echo "<li><a href='kind.php?kind=$no'><span class='active'>小说</span></a></li>";
						else echo "<li><a href='kind.php?kind=$no'><span>小说</span></a></li>";
						
						if($_GET['kind']==$eng) 
							echo "<li><a href='kind.php?kind=$eng'><span class='active'>外语</span></a></li>";
						else echo "<li><a href='kind.php?kind=$eng'><span>外语</span></a></li>";
						
						if($_GET['kind']==$art) 
							echo "<li><a href='kind.php?kind=$art'><span class='active'>艺术</span></a></li>";
						else echo "<li><a href='kind.php?kind=$art'><span>艺术</span></a></li>";
						
						if($_GET['kind']==$law) 
							echo "<li><a href='kind.php?kind=$law'><span class='active'>法律</span></a></li>";
						else echo "<li><a href='kind.php?kind=$law'><span>法律</span></a></li>";
						
						if($_GET['kind']==$com) 
							echo "<li><a href='kind.php?kind=$com'><span class='active'>计算机</span></a></li>";
						else echo "<li><a href='kind.php?kind=$com'><span>计算机</span></a></li>";
						?>

				  </ul>
			  </div>
			  <div class="sales">
				 <!--<h3>价格</h3>-->
				 <div class="pricing">
					 <h4 class="price">价格范围</h4>
					 <input type="text" class="range" placeholder="最低价格" required/>		 
					 <input type="text" class="range" placeholder="最高价格" required/>
					 <div class="clearfix"></div>
				 </div>
				
			  </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		  <p>Copyright &copy; 2018 二手书交易网 All rights reserved.</p>
		
		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>