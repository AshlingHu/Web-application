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
.fashion-section form input,.fashion-section form select {
padding: 8px;
font-size: 1em;
font-weight: 400;
border: 1px solid #D6D6D6;
outline: none;
color: #5d5959;
margin-bottom:2em;
width: 60%;
padding: 7px;
font-size: 0.9m;
margin-bottom:0px;
}
ul{
  text-align:left;
}

.fashion-section h5{
color: #5d5959;
font-size:1.0em;
padding-bottom:10px; 
}
.now{
width:80%;
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
</style>
</head>
<body>
<!---->
<div class="header men" >
	 <div class="container" >
		 <div class="header-left">
			 <div class="top-menu" >
				 <ul>
				 <li><a href="index.jsp">主页</a></li>
				 <li ><a href="book.jsp">类别</a></li>
				 <li class="active"><a href="infor.jsp">个人</a></li>		
				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="index.jsp"><img src="img/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
			 <div class="signin">
				  <div class="cart-sec">
				   <%
				 String login=(String)session.getAttribute("login");
						 String phone=(String)session.getAttribute("phone");
						 session.setAttribute("phone",phone);
						 String collect_num=publish.getCount1(phone); 
						 int num=Integer.parseInt(collect_num);
						 num--;
						 //String name=(String)session.getAttribute("user_name");
						 %>	
			  <a href="collect_info.jsp"><img href="art.jsp" src="img/cart.png" alt=""/>(<%=num %>)</a></div>
				
				 <ul>
					 <!--  <li><a href="infor.jsp?phone=<%=phone%>" class="user_name"><%=phone%></a> <span>/<span> &nbsp;</li>-->
					 <li><a href="logout.jsp"> 退出登录</a></li>
				 </ul>	 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<!--<div class="men-fashions" >-->
<div class="men-fashions">
	 <div class="container">		 
		 <div class="col-md-9 fashions">

			 <div class="fashion-section">
				 
				  <form class="for" action="update_pass.php?phone=<?php echo $_SESSION['phone']?>" method="post" name="form">
			         <ul style="margin:15px;">
						 <h5>新密码: </h5>
						 <li class="text-info" style="list-style-type:none">
						 <input type="password"  value=""  name="passwd1"></li>
					 </ul>
					 <ul style="margin:15px;">
						 <h5>确认密码: </h5>
						 <li class="text-info" style="list-style-type:none">
						 <input type="password"  value=""  name="passwd2">
						 </li>
					 </ul >
				        <ul style="margin:15px;">
						 <h5>短信验证码:</h5>
						 <li class="text-info" style="list-style-type:none">
							<input type="text" value="" name="code" style="width:40%;margin-right:0px;">
							<input id="btnSendCode" type="button" value="发送验证码" style="width:20%;margn-left:0px;" onclick="sendMessage()" /> 
						 </li>
						 <li style="list-style-type:none"><input type="hidden" id="identify" name="identify" value="" ></li>
					 </ul>			
			
					 <input type="submit" value="修改密码？" class="now" style="color:white;">
				 </form>
				
			
			 </div>
		 </div>
		 <div class="col-md-3 side-bar">
			  <div class="categories">
					<h3>目录</h3>
				  <ul>
						<li ><a href="infor.php"><span>个人信息</span></a></li>
						<li><a href="passwd.php"><span  class="active1">修改密码</span></a></li>
						<li><a href="public.php"><span >发布新书</span></a></li>
						<li><a href="public_info.php"><span>已发布书目</span></a></li>
						<li><a href="collect_info.php"><span >已收藏书目</span></a></li>
						<li><a href="message.php"><span>消息</span></a></li>
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