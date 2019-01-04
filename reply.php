<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:login.html");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>评论</title>
<link href="css/registration.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.useso.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
<!---- tabs---->
<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
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
   

    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });

     
       </script>
       

<!---- tabs---->
<style>
.reg-form{
  text-align:center;
  width:32%;
  margin-right: auto;
  margin-left: auto;
}
ul{
  text-align:left;
}
.regis{
text-align:center;
margin-top:2%;
}
p.click {
width: 52%;
}
.logo1:link{
font-size:175%;
color:white;
font-style: normal;
}
.logo1:hover{
font-size:175%;
color:white;
font-style: normal;
}
.welcome{
font-size:125%;
color:white;
}
body{
background:rgb(239,239,239);
}
ul li{
text-align:center;
}
.container1 form select {
padding: 8px;
font-size: 1em;
font-weight: 400;
border: 1px solid #D6D6D6;
outline: none;
color: #5d5959;
margin-bottom:2em;
width: 100%;
padding: 7px;
font-size: 0.9m;
margin-bottom:0px;
}
.container1 form input {
padding: 8px;
font-size: 1em;
font-weight: 400;
border: 1px solid #D6D6D6;
outline: none;
color: #5d5959;
margin-bottom:2em;
width: 100%;
padding: 7px;
font-size: 0.9m;
margin-bottom:0px;
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
.comm{
width:80%;
height:65%;
}
textarea{
overflow:auto;
margin:5%;
margin-bottom:10%;}
h1{
margin:5%;
text-align:center;}
</style>
</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
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
<!--<div class="registration-form">-->
	 <div class="container1">
		 <div class="reg-form">
		
			 <div class="reg">
			 <?php
			 $from=$_GET['from'];
			 $book_id=$_GET['book'];
			 echo "<form action='add_reply.php?from=".$from."&book=".$book_id."' method='post' name='form' class='comm'>";
			 ?>
				     <ul>
						 <h1>评论</h1>
						 <li><textarea  name="infor" rows="10" cols="50">评论或回复点啥</textarea></li>
					 </ul>		
					 <input type="submit" value="发布" class="now">
					
				 </form>
			 </div>
		 </div>

<!---->
<div class="footer">
	 <div class="container container1">
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