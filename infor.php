<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:login.html");
else if(empty($_SESSION['school']))
{
	include("my_db.php");
	$db2=new mydb();
	$sql="select * from user where phone=".$_SESSION['phone'];
	$res=$db2->usage($sql,"R",'my_database');
	$arr=mysqli_fetch_array($res);
	$_SESSION['school']=$arr['school'];
	$_SESSION['department']=$arr['department'];
	$_SESSION['email']=$arr['email'];
}
//ini_set("display_errors","On");  
//error_reporting(E_ALL);
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
function change()  
    {  
       var x = document.getElementById("first");  
       var y = document.getElementById("second");  
       y.options.length = 0; // 清除second下拉框的所有内容  
       if(x.selectedIndex == 0)  
       {  
    	   y.options.add(new Option("", "")); 
       } 
       if(x.selectedIndex == 0)  
       {  
    	   y.options.add(new Option("药学院", "药学院"));  
           y.options.add(new Option("法学院", "法学院"));  
           y.options.add(new Option("工学院", "工学院"));
           y.options.add(new Option("化学学院", "化学学院"));
           y.options.add(new Option("管理学院", "管理学院"));
           y.options.add(new Option("心理学系", "心理学系"));
           y.options.add(new Option("咨询管理学院", "咨询管理学院"));
           y.options.add(new Option("土木工程学院", "土木工程学院"));
           y.options.add(new Option("传播与设计学院", "传播与设计学院"));
           y.options.add(new Option("材料科学与工程学院", "材料科学与工程学院"));
           y.options.add(new Option("电子与信息工程学院", "电子与信息工程学院"));
           y.options.add(new Option("环境科学与工程学院", "环境科学与工程学院"));
           y.options.add(new Option("数据科学与计算机学院", "数据科学与计算机学院"));
           y.options.add(new Option("政治与公共事务管理学院", "政治与公共事务管理学院"));  
       }  

       if(x.selectedIndex == 1)  
       {  
    	   y.options.add(new Option("法学院", "法学院"));  
           y.options.add(new Option("教育学院", "教育学院"));  
           y.options.add(new Option("体育学院", "体育学院"));
           y.options.add(new Option("人文学院", "人文学院"));
           y.options.add(new Option("旅游学院", "旅游学院"));
           y.options.add(new Option("外国语学院", "外国语学院"));
           y.options.add(new Option("工商管理学院", "工商管理学院"));
           y.options.add(new Option("公共管理学院", "公共管理学院"));
           y.options.add(new Option("音乐舞蹈学院", "音乐舞蹈学院"));
           y.options.add(new Option("卫斯理安学院", "卫斯理安学院"));
           y.options.add(new Option("化学化工学院", "化学化工学院"));
           y.options.add(new Option("地理科学学院", "地理科学学院"));
           y.options.add(new Option("生命科学学院", "生命科学学院"));
           y.options.add(new Option("土木工程学院", "土木工程学院"));  
    	   y.options.add(new Option("国际教育学院", "国际教育学院"));  
           y.options.add(new Option("创新创业学院", "创新创业学院"));  
           y.options.add(new Option("教师培训学院", "教师培训学院"));
           y.options.add(new Option("经济与统计学院", "经济与统计学院"));
           y.options.add(new Option("马克思主义学院", "马克思主义学院"));
           y.options.add(new Option("新闻与传播学院", "新闻与传播学院"));
           y.options.add(new Option("美术与设计学院", "美术与设计学院"));
           y.options.add(new Option("物理与电子工程学院", "物理与电子工程学院"));
           y.options.add(new Option("数学与信息科学学院", "数学与信息科学学院"));
           y.options.add(new Option("机械与电气工程学院", "机械与电气工程学院"));
           y.options.add(new Option("建筑与城市规划学院", "建筑与城市规划学院"));
           y.options.add(new Option("环境科学与工程学院", "环境科学与工程学院"));
           y.options.add(new Option("计算机科学与教育软件学院", "计算机科学与教育软件学院"));
          
       }  
       if(x.selectedIndex == 2)  
       {  
    	   y.options.add(new Option("药学院", "药学院"));  
           y.options.add(new Option("体育部", "体育部"));  
           y.options.add(new Option("基础学院", "基础学院"));
           y.options.add(new Option("中药学院", "中药学院"));
           y.options.add(new Option("护理学院", "护理学院"));
           y.options.add(new Option("健康学院", "健康学院"));
           y.options.add(new Option("临床医学院", "临床医学院"));
           y.options.add(new Option("医学商学院", "医学商学院"));
           y.options.add(new Option("外国语学院", "外国语学院"));
           y.options.add(new Option("公共卫生学院", "公共卫生学院"));
           y.options.add(new Option("医学经济学院", "医学经济学院"));
           y.options.add(new Option("食品科学学院", "食品科学学院"));
           y.options.add(new Option("医学化工学院", "医学化工学院"));
           y.options.add(new Option("国际教育学院", "国际教育学院"));  
    	   y.options.add(new Option("继续教育学院", "继续教育学院"));  
           y.options.add(new Option("马克思主义学院", "马克思主义学院"));  
           y.options.add(new Option("医学信息工程学院", "医学信息工程学院"));
           y.options.add(new Option("生命科学与生物制药学院", "生命科学与生物制药学院"))
         
          
       }  
       if(x.selectedIndex == 3)  
       {  
    	   y.options.add(new Option("医学院", "医学院"));  
           y.options.add(new Option("法学院", "法学院"));  
           y.options.add(new Option("建筑学院", "建筑学院"));
           y.options.add(new Option("软件学院", "软件学院"));
           y.options.add(new Option("数学学院", "数学学院"));
           y.options.add(new Option("艺术学院", "艺术学院"));
           y.options.add(new Option("体育学院", "体育学院"));
           y.options.add(new Option("设计学院", "设计学院"));
           y.options.add(new Option("电力学院", "电力学院"));
           y.options.add(new Option("外国语学院", "外国语学院"));
           y.options.add(new Option("工商管理学院", "工商管理学院"));
           y.options.add(new Option("公共管理学院", "公共管理学院"));
           y.options.add(new Option("国际教育学院", "国际教育学院"));
           y.options.add(new Option("环境与能源学院", "环境与能源学院"));
           y.options.add(new Option("土木与交通学院", "土木与交通学院"));  
    	   y.options.add(new Option("电子与信息学院", "电子与信息学院"));  
           y.options.add(new Option("化学与化工学院", "化学与化工学院"));  
           y.options.add(new Option("马克思主义学院", "马克思主义学院"));
           y.options.add(new Option("新闻与传播学院", "新闻与传播学院"));
           y.options.add(new Option("物理与光电学院", "物理与光电学院"));
           y.options.add(new Option("经济与贸易学院", "经济与贸易学院"));
           y.options.add(new Option("机械与汽车工程学院", "机械与汽车工程学院"));
           y.options.add(new Option("生命科学与工程学院", "生命科学与工程学院"));
           y.options.add(new Option("材料科学与工程学院", "材料科学与工程学院"));
           y.options.add(new Option("轻工科学与工程学院", "轻工科学与工程学院"));
           y.options.add(new Option("食品科学与工程学院", "食品科学与工程学院"));
           y.options.add(new Option("自动化科学与工程学院", "自动化科学与工程学院"));
           y.options.add(new Option("计算机科学与工程学院", "计算机科学与工程学院"));
          
       }  
       if(x.selectedIndex == 4)  
       {  
    	   y.options.add(new Option("文学院", "文学院"));  
           y.options.add(new Option("法学院", "法学院"));  
           y.options.add(new Option("音乐学院", "音乐学院"));
           y.options.add(new Option("创业学院", "创业学院"));
           y.options.add(new Option("环境研究学院", "环境研究学院"));
           y.options.add(new Option("公共管理学院", "公共管理学院"));
           y.options.add(new Option("体育科学学院", "体育科学学院"));
           y.options.add(new Option("经济与管理学院", "经济与管理学院"));
           y.options.add(new Option("化学与环境学院", "化学与环境学院"));
           y.options.add(new Option("物理与电信工程学院", "物理与电信工程学院"));
           y.options.add(new Option("信息光电子科技学院", "信息光电子科技学院"));
           y.options.add(new Option("华南先进电子研究院", "华南先进电子研究院"));
           
          
       }  
       if(x.selectedIndex == 5)  
       {  
    	   y.options.add(new Option("计算机学院", "计算机学院"));  
           y.options.add(new Option("自动化学院", "自动化学院"));  
           y.options.add(new Option("外国语学院", "外国语学院"));
           y.options.add(new Option("机电工程学院", "机电工程学院"));
           y.options.add(new Option("轻工化工学院", "轻工化工学院"));
           y.options.add(new Option("信息工程学院", "信息工程学院"));
           y.options.add(new Option("创新创业学院", "创新创业学院"));
           y.options.add(new Option("材料与能源学院", "材料与能源学院"));
           y.options.add(new Option("环境科学与工程学院", "环境科学与工程学院"));
           y.options.add(new Option("土木与交通工程学院", "土木与交通工程学院"));
           y.options.add(new Option("物理与光电工程学院", "物理与光电工程学院"));

          
       } 
       if(x.selectedIndex == 6)  
       {  
    	   y.options.add(new Option("城市学院", "城市学院"));  
           y.options.add(new Option("中国画学院", "中国画学院"));  
           y.options.add(new Option("造型艺术学院", "造型艺术学院"));
           y.options.add(new Option("工业设计学院", "工业设计学院"));
           y.options.add(new Option("美术教育学院", "美术教育学院"));
           y.options.add(new Option("艺术与人文学院", "艺术与人文学院"));
           y.options.add(new Option("建筑艺术设计学院", "建筑艺术设计学院"));
           y.options.add(new Option("视觉艺术设计学院", "视觉艺术设计学院"));
           y.options.add(new Option("思想政治理论教育部", "思想政治理论教育部"));

          
       }
       if(x.selectedIndex == 7)  
       {  
    	   y.options.add(new Option("作曲系", "作曲系"));  
           y.options.add(new Option("钢琴系", "钢琴系"));  
           y.options.add(new Option("管弦系", "管弦系"));
           y.options.add(new Option("国乐系", "国乐系"));
           y.options.add(new Option("舞蹈学院", "舞蹈学院"));
           y.options.add(new Option("音乐学院", "音乐学院"));
           y.options.add(new Option("声乐歌剧系", "声乐歌剧系"));
           y.options.add(new Option("民族声乐系", "民族声乐系"));
           y.options.add(new Option("艺术管理系", "艺术管理系"));
           y.options.add(new Option("乐器工程系", "乐器工程系"));
           y.options.add(new Option("音乐基础部", "音乐基础部"));
           y.options.add(new Option("人文社科部", "人文社科部"));
           y.options.add(new Option("音乐教育学院", "音乐教育学院"));
           y.options.add(new Option("国际教育学院", "国际教育学院"));  
    	   y.options.add(new Option("继续教育学院", "继续教育学院"));  
           y.options.add(new Option("创新创业学院", "创新创业学院"));  
           y.options.add(new Option("马克思主义学院", "马克思主义学院"));
           y.options.add(new Option("现代音乐与戏剧学院", "现代音乐与戏剧学院"));

       }  
       if(x.selectedIndex == 8)  
       {  
    	   y.options.add(new Option("中药学院", "中药学院"));  
           y.options.add(new Option("护理学院", "护理学院"));  
           y.options.add(new Option("国际学院", "国际学院"));
           y.options.add(new Option("基础医学院", "基础医学院"));
           y.options.add(new Option("外国语学院", "外国语学院"));
           y.options.add(new Option("体育健康学院", "体育健康学院"));
           y.options.add(new Option("继续教育学院", "继续教育学院"));
           y.options.add(new Option("第一临床医学院", "第一临床医学院"));
           y.options.add(new Option("第二临床医学院", "第二临床医学院"));
           y.options.add(new Option("第三临床医学院", "第三临床医学院"));
           y.options.add(new Option("经济与管理学院", "经济与管理学院"));
           y.options.add(new Option("马克思主义学院", "马克思主义学院"));
           y.options.add(new Option("医学信息工程学院", "医学信息工程学院"));
           y.options.add(new Option("针灸康复临床医学院", "针灸康复临床医学院"));  
       }  
       if(x.selectedIndex == 9)  
       {  
    	   y.options.add(new Option("法学院", "法学院"));  
           y.options.add(new Option("商学院", "商学院"));  
           y.options.add(new Option("艺术学院", "艺术学院"));
           y.options.add(new Option("会计学院", "会计学院"));
           y.options.add(new Option("金融学院", "金融学院"));
           y.options.add(new Option("南国商学院", "南国商学院"));
           y.options.add(new Option("经济贸易学院", "经济贸易学院"));
           y.options.add(new Option("新闻与传播学院", "新闻与传播学院"));
           y.options.add(new Option("马克思主义学院", "马克思主义学院"));
           y.options.add(new Option("信息科学与技术学院", "信息科学与技术学院"));
           y.options.add(new Option("政治与公共管理学院", "政治与公共管理学院"));
 

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
			<!--  <div class="currency">			 
				 <a href="#"><i class="c1"></i></a>
				 <a class="active" href="#"><i class="c2"></i></a>
				 <a href="#"><i class="c3"></i></a>
				 <a href="#"><i class="c4"></i></a>
			 </div>		   --> 
			 <div class="signin">
				  <div class="cart-sec">
				  <?php
				  //ini_set("display_errors","On");  
				  //error_reporting(E_ALL);
				  //include("my_db.php");
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
</div>
<!---->
<div class="men-fashions" >
	 <div class="container1" >	
		<div class="col-md-9 fashions">

			 <div class="fashion-section">
				 	  <form class="for" action="update_user.php" method="post" name="form">
				 	   <ul style="margin:15px;">
						 <h5>手机号码:</h5>
						 <li style="list-style-type:none" >
						 <input type="text" value="<?php echo $_SESSION['phone'];?>"  readonly></li>
					 </ul>
					 <ul style="margin:15px;">
						  <h5>所在学校:</h5>
						 <li style="list-style-type:none">
						 <select name="school" style="" id="first" onChange="change(this.value)" >
						 <?php
						   $schools=array('中山大学','广州大学','广东药科大学','华南理工大学','华南师范大学','广东工业大学','广州美术学院','星海音乐学院','广州中医药大学','广东外语外贸大学');
						   $selected=array();
						   for($i=0;$i<10;$i++){
							  $s=''.$i;
							  if($_SESSION['school']==(string)$i) $selected[$i]='selected';
								else $selected[$i]='';}
						   echo "<option value='0' selected=".$selected[0].">中山大学</option>"
								."<option value='1' selected=".$selected[1].">广州大学</option>"
								."<option value='2' selected=".$selected[2].">广东药科大学</option>"
								."<option value='3' selected=".$selected[3].">华南理工大学</option>"
								."<option value='4' selected=".$selected[4].">华南师范大学</option>"
								."<option value='5' selected=".$selected[5].">广东工业大学</option>"
								."<option value='6' selected=".$selected[6].">广州美术学院</option>"
								."<option value='7' selected=".$selected[7].">星海音乐学院</option>"
								."<option value='8' selected=".$selected[8].">广州中医药大学</option>"
								."<option value='9' selected=".$selected[9].">广东外语外贸大学</option>";
						  
						  ?>
						  </select>
						 </li>
					 </ul>
					 <ul style="margin:15px;">
						 <h5>所在学院:</h5>
						<li style="list-style-type:none">
						 <select name="depart" style="" id="second" value="" >
						 <!--option value="药学院" selected>药学院</option-->
						  <!-- 中大 -->
						   <?php
						   if($_SESSION['school']=='0'){
							   echo "<option value='药学院'>药学院</option>"
								."<option value='法学院'>法学院</option>"
								."<option value='工学院'>工学院</option>"
	 
								."<option value='化学学院'>化学学院</option>"
								."<option value='管理学院'>管理学院</option>"
								."<option value='心理学系'>心理学系</option>"
								
								."<option value='资讯管理学院'>资讯管理学院</option>"
								."<option value='土木工程学院'>土木工程学院</option>"
							  
								."<option value='传播与设计学院'>传播与设计学院</option>"
	 
								."<option value='材料科学与工程'>材料科学与工程学院</option>"
								."<option value='电子与信息工程'>电子与信息工程学院</option> "  
								."<option value='环境科学与工程学院'>环境科学与工程学院</option>"
								
								."<option value='数据科学与计算机学院'>数据科学与计算机学院</option>"

								."<option value='政治与公共事务管理学院'>政治与公共事务管理学院</option>";
						   }
						   if($_SESSION['school']=='1'){
							   echo "<!-- 广州大学 -->"
                          
                            ."<option value='法学院'>法学院</option>"
                            
                           ." <option value='教育学院'>教育学院</option>"
                            ."<option value='体育学院'>体育学院</option>"
                            ."<option value='人文学院'>人文学院</option>"
						    ."<option value='旅游学院'>旅游学院</option>"
						    
						    ."<option value='外国语学院'>外国语学院</option>"
						    
                            ."<option value='工商管理学院'>工商管理学院</option>"
                            ."<option value='公共管理学院'>公共管理学院</option>"
 
                            ."<option value='音乐舞蹈学院'>音乐舞蹈学院</option>"
                            ."<option value='卫斯理安学院'>卫斯理安学院</option>"
                            ."<option value='化学化工学院'>化学化工学院</option>"
                            ."<option value='地理科学学院'>地理科学学院</option>"
                           ." <option value='生命科学学院'>生命科学学院</option>"
                            ."<option value='土木工程学院'>土木工程学院</option>"
                            ."<option value='国际教育学院'>国际教育学院</option>"
                            ."<option value='创新创业学院'>创新创业学院</option>"
                            ."<option value='教师培训学院'>教师培训学院</option>"
                            
                            ."<option value='经济与统计学院'>经济与统计学院</option>"
                            ."<option value='马克思主义学院'>马克思主义学院</option>"
                            ."<option value='新闻与传播学院'>新闻与传播学院</option>"
                            ."<option value='美术与设计学院'>美术与设计学院</option>"
                            
                            ."<option value='物理与电子工程学院'>物理与电子工程学院</option>"
                            ."<option value='数学与信息科学学院'>数学与信息科学学院</option>"                         
                            ."<option value='机械与电气工程学院'>机械与电气工程学院</option> "             
                            ."<option value='建筑与城市规划学院'>建筑与城市规划学院</option>"
                            ."<option value='环境科学与工程学院'>环境科学与工程学院</option>"
                            
                            ."<option value='计算机科学与教育软件学院'>计算机科学与教育软件学院</option>";
						   }
						   if($_SESSION['school']=='2'){
                            echo " <!-- 广东药学院 -->"
                            ."<option value='药学院'>药学院</option>"
                            ."<option value='体育部'>体育部</option>"
                            
                            ."<option value='基础学院'>基础学院</option>"
                            ."<option value='中药学院'>中药学院</option>"
						    ."<option value='护理学院'>护理学院</option>"
						    ."<option value='健康学院'>健康学院</option>"
						    
                            ."<option value='临床医学院'>临床医学院</option>"
                            ."<option value='医学商学院'>医学商学院</option>"
                            ."<option value='外国语学院'>外国语学院</option>"
                            
                            ."<option value='公共卫生学院'>公共卫生学院</option>"
                            ."<option value='医学经济学院'>医学经济学院</option>"
                            ."<option value='食品科学学院'>食品科学学院</option>"
                            ."<option value='医学化工学院'>医学化工学院</option>"
                            ."<option value='国际教育学院'>国际教育学院</option>"
                            ."<option value='继续教育学院'>继续教育学院</option>"
                            
                            ."<option value='马克思主义学院'>马克思主义学院</option>"
                            
                            ."<option value='医学信息工程学院'>医学信息工程学院</option>"
                            
                            ."<option value='生命科学与生物制药学院'>生命科学与生物制药学院</option>";
						   }
						   if($_SESSION['school']=='3'){
							echo "<!-- 华南理工大学 -->"
                            ."<option value='医学院'>医学院</option>"  
                            ."<option value='法学院'>法学院</option>"
                            
                            ."<option value='建筑学院'>建筑学院</option>"
                            ."<option value='软件学院'>软件学院</option>"
						    ."<option value='数学学院'>数学学院</option>"
						    ."<option value='艺术学院'>艺术学院</option>"
                            ."<option value='体育学院'>体育学院</option>"
                            ."<option value='设计学院'>设计学院</option"
                            ."<option value='电力学院'>电力学院</option>"
                            
                            ."<option value='外国语学院'>外国语学院</option>"
                            
                            ."<option value='工商管理学院'>工商管理学院</option>"
                            ."<option value='公共管理学院'>公共管理学院</option>"
                            ."<option value='国际教育学院'>国际教育学院</option>"
                            
                            ."<option value='环境与能源学院'>环境与能源学院</option>"
                            ."<option value='土木与交通学院'>土木与交通学院</option>"
                            ."<option value='电子与信息学院'>电子与信息学院</option>"
                            ."<option value='化学与化工学院'>化学与化工学院</option>"
                            ."<option value='马克思主义学院'>马克思主义学院</option>"
                            ."<option value='新闻与传播学院'>新闻与传播学院</option>"
                            ."<option value='物理与光电学院'>物理与光电学院</option>"
                            ."<option value='经济与贸易学院'>经济与贸易学院</option>"
                            
                            ."<option value='机械与汽车工程学院'>机械与汽车工程学院</option>"
                            ."<option value='生命科学与工程学院'>生命科学与工程学院</option> "                         
                            ."<option value='材料科学与工程学院'>材料科学与工程学院</option> "             
                            ."<option value='轻工科学与工程学院'>轻工科学与工程学院</option>"
                            ."<option value='食品科学与工程学院'>食品科学与工程学院</option>"
                            
                            ."<option value='自动化科学与工程学院'>自动化科学与工程学院</option>"
                            ."<option value='计算机科学与工程学院'>计算机科学与工程学院</option>";
                           }
						   if($_SESSION['school']=='4'){
						   echo <<<EOT
						    <!-- 华南师范大学 -->
                            <option value="文学院">文学院</option>
                            <option value="法学院">法学院</option>
                            
                            <option value="音乐学院">音乐学院</option>
                            <option value="创业学院">创业学院</option>
                            
						    <option value="环境研究院">环境研究院</option>
						    
						    <option value="公共管理学院">公共管理学院</option>
                            <option value="体育科学学院">体育科学学院</option>
                            
                            <option value="经济与管理学院">经济与管理学院</option>
                            <option value="化学与环境学院">化学与环境学院</option>
                            
                            <option value="物理与电信工程学院">物理与电信工程学院</option>
                            <option value="信息光电子科技学院">信息光电子科技学院</option>
                            <option value="华南先进光电子研究院">华南先进光电子研究院</option>
							
EOT;
						   }
						   if($_SESSION['school']=='5'){
							   echo <<<EOT
						<!-- 广东工业大学 -->
                            <option value="计算机学院">计算机学院</option>
                            <option value="自动化学院">自动化学院</option>                            
                            <option value="外国语学院">外国语学院</option>
                            
                            <option value="机电工程学院">机电工程学院</option>                 
						    <option value="轻工化工学院">轻工化工学院</option>						    
						    <option value="信息工程学院">信息工程学院</option>
                            <option value="创新创业学院">创新创业学院</option>
                            
                            <option value="材料与能源学院">材料与能源学院</option>
                            
                            <option value="环境科学与工程学院">环境科学与工程学院</option>
                            
                            <option value="土木与交通工程学院">土木与交通工程学院</option>
                            <option value="物理与光电工程学院">物理与光电工程学院</option>
EOT;
						   }
						   if($_SESSION['school']=='6'){
							   echo <<<EOT
							<!-- 广州美术学院 -->
                            <option value="城市学院">城市学院</option>
                            <option value="中国画学院">中国画学院</option>   
                                                     
                            <option value="造型艺术学院">造型艺术学院</option>                            
                            <option value="工业设计学院">工业设计学院</option>                 
						    <option value="美术教育学院">美术教育学院</option>			
						    			    
						    <option value="艺术与人文学院">艺术与人文学院</option>
						    
                            <option value="建筑艺术设计学院">建筑艺术设计学院</option>
                            
                            <option value="视觉艺术设计学院">视觉艺术设计学院</option>
                            
                            <option value="思想政治理论教育部">思想政治理论教育部</option>
EOT;
						   }
						   if($_SESSION['school']=='7'){
							   echo <<<EOT
							<!-- 星海音乐学院 -->
                            <option value="作曲系">作曲系</option>     
                            <option value="钢琴系">钢琴系</option>                            
                            <option value="管弦系">管弦系</option>
                            <option value="国乐系">国乐系</option>
                            
						    <option value="舞蹈学院">舞蹈学院</option>
						    <option value="音乐学系">音乐学系</option>
						    
                            <option value="声乐歌剧系">声乐歌剧系</option>
                            <option value="民族声乐系">民族声乐系</option>
                            <option value="艺术管理系">艺术管理系</option>                           
                            <option value="乐器工程系">乐器工程系</option>                           
                            <option value="音乐基础部">音乐基础部</option>
                            <option value="人文社科部">人文社科部</option>
                            
                            <option value="音乐教育学院">音乐教育学院</option>              
                            <option value="国际教育学院">国际教育学院</option>
                            <option value="继续教育学院">继续教育学院</option>            
                            <option value="创新创业学院">创新创业学院</option>
                            
                            <option value="马克思主义学院">马克思主义学院</option>
                            
                            <option value="现代音乐与戏剧学院">现代音乐与戏剧学院</option>
EOT;
						   }
						   if($_SESSION['school']=='8'){
							   echo <<<EOT
						<!-- 广州中医药大学 -->
                            <option value="中药学院">中药学院</option>     
                            <option value="护理学院">护理学院</option>                            
                            <option value="国际学院">国际学院</option>
                            
                            <option value="基础医学院">基础医学院</option>              
						    <option value="外国语学院">外国语学院</option>
						    
						    <option value="体育健康学院">体育健康学院</option> 
                            <option value="继续教育学院">继续教育学院</option>
                            
                            <option value="第一临床医学院">第一临床医学院</option>
                            <option value="第二临床医学院">第二临床医学院</option>                           
                            <option value="第三临床医学院">第三临床医学院</option>                           
                            <option value="经济与管理学院">经济与管理学院</option>
                            <option value="马克思主义学院">马克思主义学院</option>
                            
                            <option value="医学信息工程学院">医学信息工程学院</option>   
                                       
                            <option value="针灸康复临床医学院">针灸康复临床医学院</option>
EOT;
						   }
						   if($_SESSION['school']=='9'){
							   echo <<<EOT
							<!-- 广东外语外贸大学 -->
                             <option value="法学院">法学院</option>     
                            <option value="商学院">商学院</option>    
                                                    
                            <option value="艺术学院">艺术学院</option>
                            <option value="会计学院">会计学院</option>      
						    <option value="金融学院">金融学院</option>
						    
						    <option value="南国商学院">南国商学院</option>
						    
                            <option value="经济贸易学院">经济贸易学院</option>
                            
                            <option value="新闻与传播学院">新闻与传播学院</option>
                            <option value="马克思主义学院">马克思主义学院</option>         
                                              
                            <option value="信息科学与技术学院">信息科学与技术学院</option>                           
                            <option value="政治与公共管理学院">政治与公共管理学院</option>
EOT;
						   }
						?>
                        </select>
						 </li>
					 </ul>				 
					 <ul style="margin:15px;">					
						  <h5>邮&nbsp&nbsp&nbsp 箱:</h5>
						 <li  style="list-style-type:none"><input type="text"  value="<?php echo $_SESSION['email'];?>"  name="email"></li>
					 </ul>					
					 <input type="submit" value="修改信息？" class="now">
					
				 </form>
		 </div>
		 </div>
		 <div class="col-md-3 side-bar" >
			  <div class="categories">
					<h3>目录</h3>
				  <ul>
						<li><a href=""><span class="active1">个人信息</span></a></li>
						<li><a href="passwd.php"><span>修改密码</span></a></li>
						<li><a href="public.php"><span>发布新书</span></a></li>
						<li><a href="public_info.php"><span>已发布书目</span></a></li>
						<li><a href="collect_info.php"><span>已收藏书目</span></a></li>
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