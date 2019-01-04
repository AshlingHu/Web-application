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
<script type="text/javascript">
function add()
{
	p1= document.getElementById("text");
	var xmlhttp = new XMLHttpRequest(); // 创建http请求
	xmlhttp.onreadystatechange = function() { // 当http请求的状态变化时执行
	if(xmlhttp.readyState == 4) { // 4-已收到http响应数据
	if(xmlhttp.status >= 200 && xmlhttp.status < 300|| xmlhttp.status == 304) { // 200~299-OK 304-unmodified
	//alert(xmlhttp.responseText); // http响应的正文
	 document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

	} else{
	alert("error");
	}
	};
	};
	// 打开http请求（open）的参数：get|post，url，是否异步发送
	xmlhttp.open("get", "add_comment.php", true);
	xmlhttp.send(null); //发送http请求。get只能用null作为参数
}
function change()
{
	document.getElementById('add').style.display='block';	
	document.getElementById('choose').style.display='none';	
	document.getElementById('choose1').style.display='block';	
}
function change1()
{
	document.getElementById('add').style.display='none';	
	document.getElementById('choose').style.display='block';	
	document.getElementById('choose1').style.display='none';	
}
</script>
<style>
.collect,button{
background-color:rgb(209,209,209);

}
body{
background:rgb(239,239,239);
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
.picture{
margin-left:20%;
width:200px;
height:200px;}
.message{
width:100%;

padding:3px;
padding-bottom:0px;
background:rgb(222,222,222);
z-index:99;
border:5px solid rgb(209,209,239);
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
width:80%;
margin:0%;
margin-left:14%;
height:100%;
background:rgb(222,222,222);
border-radius:5px;
}
.infor{
margin:10px;
overflow:auto;
height:90%;
border:5px solid rgb(209,209,239);
}

.now{
width:20%;
display:block;
font-size:0.8em;
border:none;
color:#fff;
border-radius:5px;
outline: none;
background:background: rgb(119,119,119);
background: -moz-linear-gradient(top,  rgba(119,119,119,1) 0%, rgba(2,2,2,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(119,119,119,1)), color-stop(100%,rgba(2,2,2,1)));
background: -webkit-linear-gradient(top,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
background: -o-linear-gradient(top,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
background: -ms-linear-gradient(top,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
background: linear-gradient(to bottom,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#777777', endColorstr='#020202',GradientType=0 );
float:right;
}
.comm{
margin:2%;
display:none;
}
.neirong{
margin:9px;
}
.add,.now1{
display:none;
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
				 $db1=null;
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
	<div class="col-md-4 side-bar2">
		  <div class="product-price">
			   <div class="product-name">
			  <p> <a href="single.php">更多细节 </a></p>
			  <?php
			  $phone=$_SESSION['phone'];//denglu
			  $pub=$_GET['pub'];
			  $book_id=$_GET['id'];
			  include_once("my_db.php");
			  $db=new mydb();
			  $sql="select * from book where id=".$book_id;
			  $res=$db->usage($sql,"R",'my_database');
			  $ans=mysqli_fetch_array($res);
			  $name=$ans['name'];
			  $price=$ans['price'];
			  $des=$ans['description'];
			  $file1=$ans['file1'];
			  $pub_phone=$ans['phone'];
			  echo "<img class='picture' src=".$file1." alt=''>";
			  echo "<h2>".$name."</h2>";
			  echo "<p><a href='see_pub.php?pub=".$pub_phone."'>".$pub_phone."</a></p>";
			  echo "<span>".$price."&#65509;</span>";
			  echo "<p>".$des."</p>";
			  echo "<div class='clearfix'></div>";
			  if($ans['avaliable']==1) $avaliable="AVAILABLE";
			  else $avaliable="UNAVAILABLE";
			  echo "<h4>".$avaliable."</h4></div>";
			  echo "<div class='product-id'>"
				."<p>书目编号: <span>".$book_id." </span></p></div>"
				."</div></div>"
				."<div class='col-md-8 fashions2'>";
			  $sql="SELECT message.id,book.phone,FromPhone,ToPhone,book_id,infor,date,time FROM message,book where book_id=book.id and book_id=".$book_id;
			  $res=$db->usage($sql,"R",'my_database');
			 
			 $str='评论如下：';
			  if($res==null) $str="暂无评论！";
			  echo "<div class='comment'> ";
			  if($res==null) echo "<div class='infor' id='txtHint' style='height:0%;'>";
			  else echo "<div class='infor' id='txtHint' >";
			 
			 while($row=mysqli_fetch_array($res)){
				  $from=$row['FromPhone'];
				  $to=$row['ToPhone'];
				  $id=$row['id'];
				  $book_id=$row['book_id'];
				  $infor=$row['infor'];
				  $date=$row['date'];
				  $time=$row['time'];
				  $pub=$row['phone'];
				  echo "<div class='message g1'>";
				  if($phone==$from||$phone==$pub){
					  echo "<div class='neirong'><h3><a href='infor.php?phone=".$phone."' >".$from."</a>@<a href='see_pub.php?pub=".$to."' >".$to." </a></h3><br>";
					  echo "<p class='date'>".$date." ".$time."</p><br>";
					  echo "<a href='delete_comment.php?from=".$from."&book=".$book_id."&to=".$to."&id=".$id."' class='date'>删除</a>";
					  echo "<span class='date'>/</span><a href='reply.php?from=".$from."&book=".$book_id."' class='date'>回复</a>";
					  echo "<h4>".$infor."</h4></div></div>";
				  }
				  else if($phone==$to){
					  echo " <div class='neirong'><h3><a href='see_pub.php?pub=".$from."' >".$from."</a>@<a href='infor.php?phone=".$to."'>".$to." </a></h3><br>";
                	  echo " <p class='date'>".$date." ".$time."</p><br>";  
                      echo " <a href='reply.php?from=".$from."&book=".$book_id."' class='date'>回复</a>";
                      echo "<h4>".$infor."</h4></div></div>";
				  }
				  else
				  {
					  echo " <div class='neirong'><h3><a href='see_pub.php?pub=".$phone."' >".$from."</a>@<a href='see_pub.php?pub=".$to."'>".$to." </a></h3><br>";
                	  echo " <p class='date'>".$date." ".$time."</p><br>";  
                      echo " <a href='reply.php?from=".$from."&book=".$book_id."' class='date'>回复</a>";
                      echo "<h4>".$infor."</h4></div></div>";
				  }
			  }
			  echo <<<EOT
			  </div>
			<input type="button" value="评论" onclick="change()" class="now" id="choose" style="width:30%;height:" >
            <input type="button" value="取消" onclick="change1()" class="now now1" id="choose1" style="width:30%;height:" >
EOT;
			echo "<form action='add_comment.php?pub=".$pub_phone."&phone=".$phone."&id=".$book_id."' method='post' name='form' class='add' id='add' >";
			echo <<<EOT
			<textarea name="infor" rows="5" cols="60" value="快来发表评论吧~" id="text" style="float:left;"> </textarea>
			<input type="submit" value="马上发表" class="now" style="width:30%;float:right;" >
			</form>
			  </div> 
		</div>
EOT;
			  ?>	
  
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
		