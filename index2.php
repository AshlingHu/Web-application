<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:index.html")
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>主页</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<script src="js/jquery.min.js"></script>

<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
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

<style>
.resp-tabs-list{
text-align:center;
}
.user_name:hover{
}

</style>
</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				<?php
				if(strlen((string)$_SESSION['phone'])==11)
				{
					echo "<ul>"
						."<li class='active'><a href='index2.html'>主页</a></li>"
						."<li><a href='book.php'>类别</a></li>"
						."<li><a href='infor.php'>个人</a></li>"
						."</ul>";
				}
				else
				{
					echo "<ul>"
						."<li class='active'><a href='index2.html'>主页</a></li>"
						."<li><a href='admin_user.php'>用户</a></li>"
						."<li><a href='admin_book.php'>书籍</a></li>"
						."</ul>";
				}
				?>
				 <!-- script-for-menu -->
				 <script>
						$("span.menu").click(function(){
							$(".top-menu ul").slideToggle("slow" , function(){
							});
						});
				 </script>
				 <!-- script-for-menu -->	 	 

			 </div>
		 </div>
		 <div class="logo">
			 <a href="index.html"><img src="img/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
			 <!--  <div class="currency">			 
				 <a href="#"><i class="c1"></i></a>
				 <a class="active" href="#"><i class="c2"></i></a>
				 <a href="#"><i class="c3"></i></a>
				 <a href="#"><i class="c4"></i></a>
			 </div>		 -->
			 <div class="signin">
				  <div class="cart-sec">
				  <?php
				  if(strlen((string)$_SESSION['phone'])==11){
					  include_once('my_db.php');
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
				  }
				 ?>
					 <li><a href="logout.php"> 退出登录</a></li>
				 </ul>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        manualControls: '#slider3-pager',
      });
    });
  </script>
</head>
<body>
 <div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				  <img src="img/bnr.jpg" alt="">
				  <div class="banner-info">
				  <h3>FASHIONS</h3>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				  </div>
	         </li>
	         <li>
				 <img src="img/bnr2.jpg" alt="">
	        	 <div class="banner-info">
	        	 <h3>MODELING</h3>
	          	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				 </div>
			 </li>
	         <li>
	             <img src="img/bnr3.jpg" alt="">
	        	 <div class="banner-info">
	        	 <h3>FASHIONS</h3>
	          	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >手机网站模板</a></div>
<div class="tab-section">
	 <div class="wrap">
		 <div id="horizontalTab">
			   <ul class="resp-tabs-list">
					<li><a href="#">FEATURED</a></li>
					<!--<li class="active"><a href="#">JUST ARRIVED</a></li>
					<li><a href="#">SALE</a></li>-->
					<div class="clearfix"></div>				
			   </ul>
			   <div class="resp-tabs-container">
				 <!---tab1----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo1">	
								 <li class="g1">						
									 <img src="img/c1.jpg" alt="" />		
										<a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c2.jpg" alt="" />
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c3.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c4.jpg" alt="" />					
									 <a href="single.html"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c1.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c3.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab1----->
				 <!---tab2----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo2">	
								 <li class="g1">						
									 <img src="img/c4.jpg" alt="" />		
										<a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c3.jpg" alt="" />
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c2.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c1.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c4.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c1.jpg" alt="" />					
									<a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo2").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab2----->
				 <!---tab3----->
				 <div>
					 <div class="course_demo1">
							 <ul id="flexiselDemo3">	
								 <li class="g1">						
									 <img src="img/c1.jpg" alt="" />		
										<a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c2.jpg" alt="" />
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c3.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c4.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c1.jpg" alt="" />					
									 <a href="single.jsp"><div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
								 <li class="g1">						
									 <img src="img/c3.jpg" alt="" />					
									<a href="single.jsp"> <div class="caption">
										<span></span>
										<h3>PRODUCT NAME</h3>
										<h5>180.00 &euro;</h5>
										</div></a>
										<div class="clearfix"></div>
								 </li>
							 </ul>
						 </div>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
							<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						 });
						  </script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
				 </div>
				 <!---//tab3----->
			 </div>
		 </div>
	 </div>
	 <div class="container">
		 <div class="navigation">
			<!-- <ul>
				 <li><a href="about.html">ABOUT</a></li>
				 <li><a href="woman.html">STOCKITS</a></li>
				 <li><a href="contact.html">CONTACT</a></li>
				 <li><a href="man.html">STORE</a></li>
				 <li><a href="terms.html">TERMS & CONDITION</a></li>
				 <li><a href="man.html">SHOW TO BUY</a></li>
				 <li><a href="index.html">SHIPPING</a></li>
				 <li><a href="man.html">RETURNS</a></li>
				 <li><a href="single.html">SIZE CHART</a></li>
			 </ul>  -->
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <p>Copyright &copy; 2018 二手书交易网 All rights reserved.</p>
		 <!--  <div class="social">
			 <a href="#"><span class="icon1"></span></a>
			 <a href="#"><span class="icon2"></span></a>
			 <a href="#"><span class="icon3"></span></a>
			 <a href="#"><span class="icon4"></span></a>
		 </div>-->
		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>
		