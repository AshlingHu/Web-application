<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:login.html");
?>
<html>
<head>
<title>个人信息</title>
<link href="css/login.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/pub_style.css" rel="stylesheet" type="text/css" media="all" />
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
		$(function() {
		        $(".filepath").on("change",function() {
		        	//alert($('.imgbox').length);
		            var srcs = getObjectURL(this.files[0]);   //获取路径
		            $(this).nextAll(".img1").hide();   //this指的是input
		            $(this).nextAll(".img2").show();  //fireBUg查看第二次换图片不起做用
		            $(this).nextAll('.close').show();   //this指的是input
		            $(this).nextAll(".img2").attr("src",srcs);    //this指的是input
		            $(".close").on("click",function() {
		            	 $(this).hide();     //this指的是span
                         $(this).nextAll(".img2").hide();
                         $(this).nextAll(".img1").show(); 
                    })
		        })
		    })
		
		
		
		
		 function getObjectURL(file) {
		                var url = null;
		                if (window.createObjectURL != undefined) {
		                    url = window.createObjectURL(file)
		                } else if (window.URL != undefined) {
		                    url = window.URL.createObjectURL(file)
		                } else if (window.webkitURL != undefined) {
		                    url = window.webkitURL.createObjectURL(file)
		                }
		                return url
		            };
		
		
		   $(function() {
		        $(".filepath1").on("change",function() {
		        	//alert($('.imgbox1').length);
		            var srcs = getObjectURL(this.files[0]);   //获取路径
		            alert(srcs);
		            //this指的是input
		            /* $(this).nextAll(".img22").attr("src",srcs);    //this指的是input
		            $(this).nextAll(".img22").show();  //fireBUg查看第二次换图片不起做用*/
		            var htmlImg='<div class="imgbox1">'+
			                  '<div class="imgnum1">'+
				              '<input type="file" class="filepath1" />'+
				              '<span class="close1">X</span>'+
				              '<img src="btn.png" class="img11" />'+
				              '<img src="'+srcs+'" class="img22" />'+
		                      '</div>'+
		                      '</div>';
		            
		            $(this).parent().parent().before(htmlImg);
		            $(this).parent().parent().prev().find(".img11").hide();   //this指的是input
		            $(this).parent().parent().prev().find('.close1').show(); 
					
		            $(".close1").on("click",function() {
		            	 $(this).hide();     //this指的是span
                         $(this).nextAll(".img22").hide();
                         $(this).nextAll(".img11").show(); 
                         if($('.imgbox1').length>1){
                         	$(this).parent().parent().remove();
                         }
                         
                    })
		        })
		    })
		   
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
.file_upload ul .usua{
display: inline-block;
width: 65%;
}
.fashion-section {
margin-left:20%;
margin-top:2%;}
.fashion-section form input,.fashion-section form select,.fashion-section form textarea {
width: 70%;
padding: 8px;
font-size: 1em;
font-weight: 400;
border: 1px solid #D6D6D6;
outline: none;
color:#5d5959;
}
.file_upload {
margin: 2em 0 3em 0;
}
.file_upload h5 {
color: #5d5959;
font-size:1.5em;
padding-bottom:10px; 
}
.file_upload form {
margin-top: 1.5em;
}
#public{
width:60%;
margin:0 auto;
display:block;
padding: 10px;
font-size: 1.2em;
font-weight: 400;
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
margin-top:1em;
float:left;
}
.imgnum{		
margin-right: 20px;	
position: relative;
width: 90px;
height: 90px;
border: 1px solid grey;
overflow: hidden;
float:left;
}
.imgnum input {
position: absolute;
width: 90px;
height: 60px;
opacity: 0;
}
.imgnum img{
width: 100%;
height: 100%;
}
.close{
color: balck;
position: absolute;
left: 70px;
top: 0px;
display: none;
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
				  include("my_db.php");
				  $db=new mydb();
				  $sql="SELECT COUNT(*) FROM collect WHERE co_phone={$_SESSION['phone']}";
				  $res=$db->usage($sql,"R",'my_database');
				  if($row=mysqli_fetch_row($res)) $res=$row[0];
				  echo "<a href='collect_info.php'><img href='collect_info.php' src='img/cart.png' alt=''/>".$res."</a></div>";
				 ?>
				<!--String login=(String)session.getAttribute("login");
						 String phone=(String)session.getAttribute("phone");
						 String name=(String)session.getAttribute("user_name");%>-->	
				 <ul>
					 <li><a href="infor.php" class="user_name"><?php echo $_SESSION['phone'] ?></a> <span>/<span> &nbsp;</li>
					 <li><a href="logout.php"> 退出登录</a></li>
				 </ul>	 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="men-fashions" >
	<div class="container">		 
		 <div class="col-md-9 fashions">

			 <div class="fashion-section">	 
			<h2 style="margin-left:20%"> 书目信息</h2>
			 <form class="file_upload" name="fileupload" action="publish_book.php" method="POST" enctype="multipart/form-data">     
                   <ul style="margin:15px;">
						 <h5 style="float:left;">书&nbsp&nbsp&nbsp名：</h5> 
						<li class="usua"><input type="text" value="" name="name" ></li>
					 </ul>
					   <ul style="margin:15px;">
						 <h5 style="float:left;">类&nbsp&nbsp&nbsp别：</h5> 
						 <li class="usua"><select name="kind" style=""><option value="his">历史</option>
                            <option value="child">童书</option>
                            <option value="ec">经济</option>
                            <option value="ad">管理</option>
                            <option value="he">保健</option>
                            <option value="no">小说</option>
                            <option value="eng">外语</option>
                            <option value="art">艺术</option>
                            <option value="law">法律</option>
                            <option value="com">计算机</option>
                        </select>
                           </li>
					 </ul>
					 <ul style="margin:15px;">
						 <h5 style="float:left;">作&nbsp&nbsp&nbsp者：</h5>
						<li class="usua"><input type="text" value="" name="writer"></li>
					</ul>			
					<ul style="margin:15px;">
						 <h5 style="float:left;">价&nbsp&nbsp&nbsp格：</h5> 
						 <li class="usua"><input type="number" value="" name="price" ></li>
					 </ul>
					 <ul style="margin:15px;">
						 <h5 style="float:left;">简&nbsp&nbsp&nbsp介：</h5>
						 <li class="usua">
						<!--  <input type="textarea" value="" name="description" style="height:10em">-->
						<textarea name="description" rows="3" cols="30"> </textarea>
						 </li>
					</ul>					 
		
				  <ul  style="margin:15px;">
				  	 <h5 style="float:left;">图&nbsp&nbsp&nbsp片：</h5>
                      <li style="list-style-type:none;">
                   
			            <div class="imgnum" >
				         <input name="files[]" type="file" class="filepath" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"/>
				         <span class="close">X</span>
				         <img src="img/add.png" class="img1" />
				         <img src="" class="img2" />
			          </div>
		                <div class="imgnum">
				         <input name="files[]" type="file" class="filepath" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"/>
				         <span class="close">X</span>
				         <img src="img/add.png" class="img1" />
				         <img src="" class="img2" />
			          </div>
			           <div class="imgnum">
				         <input  name="files[]" type="file" class="filepath" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"/>
				         <span class="close">X</span>
				         <img src="img/add.png" class="img1" />
				         <img src="" class="img2" />
			          </div>
			           <div class="imgnum">
				         <input name="files[]" type="file" class="filepath" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"/>
				         <span class="close">X</span>
				         <img src="img/add.png" class="img1" />
				         <img src="" class="img2" />
			          </div>
                      </li>
             
                 </ul>
					
                     <input type=submit id="public" name="submit" value="马上发布？" style="margin-left:2%;" >
			</form>
		 </div>
		 </div>
		 <div class="col-md-3 side-bar" >
			  <div class="categories">
					
				  <ul>
						<li ><a href="infor.php"><span >个人信息</span></a></li>
						<li><a href="passwd.php"><span>修改密码</span></a></li>
						<li><a href="public.php"><span class="active1">发布新书</span></a></li>
						<li><a href="public_info.php"><span>已发布书目</span></a></li>
						<li><a href="collect_info.jsp"><span>已收藏书目</span></a></li>
						<li><a href="message.jsp"><span>消息</span></a></li>
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
		<!--<div class="social">
			 <a href="#"><span class="icon1"></span></a>
			 <a href="#"><span class="icon2"></span></a>
			 <a href="#"><span class="icon3"></span></a>
			 <a href="#"><span class="icon4"></span></a>
		 </div>  --> 
		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>