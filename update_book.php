<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:login.html");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<jsp:useBean id="publish" class="tom.jiafei.PublishBook" scope="session"/>
<title>修改书籍信息</title>
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
     
       var InterValObj; //timer变量，控制时间  
       var count = 120; //间隔函数，1秒执行  
       var curCount;//当前剩余秒数  
       var code = ""; //验证码  
       var codeLength = 6;//验证码长度  
       function sendMessage() {  
           curCount = count;  
           var phone=$("#phone").val();//手机号码  
           if(phone != ""){  
               //产生验证码  
               for (var i = 0; i < codeLength; i++) {  
                   code += parseInt(Math.random() * 9).toString();  
               }  
               //设置button效果，开始计时  
               $("#btnSendCode").attr("disabled", "true");  
               $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");  
               InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次  
           //向后台发送处理数据  
               $.ajax({  
                   type: "POST", //用POST方式传输  
                   dataType: "json", //数据格式:JSON  
                   url: 'SendMessage.php', //目标地址  
                   data: "phone="+phone+"&code="+code,
       			async:true,
                   //error: function (XMLHttpRequest, textStatus, errorThrown) { },  
                   success: function (data){ 
       			debugger;
       			alert(data.code);
       			//var dataObj=eval("("+data+")");
       			$("#identify").val(data.code);
       			}  
               });  
           }else{  
               alert("手机号码不能为空！");  
           }  
       }  
       //timer处理函数  
       function SetRemainTime() {  
           if (curCount == 0) {                  
               window.clearInterval(InterValObj);//停止计时器  
               $("#btnSendCode").removeAttr("disabled");//启用按钮  
               $("#btnSendCode").val("重新发送验证码");  
               code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效      
           }  
           else {  
               curCount--;  
               $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");  
           }  
       }  
       </script>
       

<!---- tabs---->
<style>
.reg-form{
  text-align:center;
  width:40%;
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
.container1 form input,textarea {
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
width: 70px;
height: 70px;
border: 1px solid grey;
overflow: hidden;
float:left;
}
.imgnum input {
position: absolute;
width: 70px;
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
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <ul>
				<li><a href="index2.php">主页</a></li>
				 <li><a href="book.php">类别</a></li>
				  <li><a href="infor.php">个人</a></li>	 
				 </ul>	 
				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			  <a href="index2.php"><img src="img/logo.png" alt=""/></a>
			 <span class="welcome"></span>
		 </div>
		 
		 <div class="header-right">
		
				 <div class="signin">
				  <div class="cart-sec">
				  <?php
				  ini_set("display_errors","On");  
				  error_reporting(E_ALL);
				  include("my_db.php");
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
				 <!--<p>Welcome, please enter the folling to continue.</p>
				 <p>我已经注册，<a href="#">马上登录></a></p>-->
				 <h3>书目信息</h2>
			 <form class="file_upload" name="fileupload" action="publish_book.php" method="POST" enctype="multipart/form-data">     
                   <?php
				   $db=new mydb();
				   $id=$_GET['id'];
				   $sql="SELECT * FROM book WHERE id=".$id;
				   $res=$db->usage($sql,"R",'my_database');
				   $arr=mysqli_fetch_array($res);
				   $name=$arr['name'];
					$price=$arr['price'];
					$des=$arr['description'];
					$pub_phone=$arr['phone'];
					$tmp=$arr['avaliable'];
					$kind=$arr['kind'];
					$writer=$arr['writer'];
					echo "<ul style='margin:15px;'>"
						."<li class='text-info'  style='float:left;'>书名: </li>"
						."<li><input type='text' value=".$name." name='name' ></li>"
						."</ul>"
						."<ul style='margin:15px;'>"
						."<li class='text-info'  style='float:left;'>类别: </li>"
						."<li><<select name='kind' style=>";
					$kind_arr=array('his','child','ec','ad','he','no','eng','art','law','com');
					$kind_arr_CH=array('历史','童书','经济','管理','保健','小说','外语','艺术','法律','计算机');
					$i=0;
					for(;$i<10;$i++){
						if($kind==$kind_arr[$i]){
							echo "<option value=".$kind_arr[$i]." selected='selected'>".$kind_arr_CH[$i]."</option>";
						}
						else{
							echo "<option value=".$kind_arr[$i]." selected=''>".$kind_arr_CH[$i]."</option>";
						}
					}
					echo "</select></li></ul>";
					echo "<ul style='margin:15px;'>"
						."<li class='text-info'  style='float:left;'>作者: </li>"
						."<li><input type='text' value=".$writer." name='writer' ></li>"
						."</ul>";
					echo "<ul style='margin:15px;'>"
						."<li class='text-info'  style='float:left;'>价格: </li>"
						."<li><input type='text' value=".$price." name='price' ></li>"
						."</ul>";
					echo "<ul style='margin:15px;'>"
						."<li class='text-info'  style='float:left;'>简介: </li>"
						."<li><input type='text' value=".$des." name='description' style='height:10em'></li>"
						."</ul>";
					echo "<ul style='margin:15px;'>"
						."<li class='text-info'  style='float:left;'>图片: </li>"
						."<li style='list-style-type:none;'>"//图片重新上传问题
				   ?>
                     <input type=submit id="public" name="submit" value="马上发布？" size=24 >
                   </form> 
			 </div>
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