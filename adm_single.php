<?php
session_start();
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
body{
padding:0px;
margin:0px;
font-size:12px;
background:rgb(239,239,239);
}
input{
width:100%;
height:3em;
border-radius:5em;
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
				include_once("my_db.php");
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
					."<span>".$price."&#65509;</span>"
					."<p>".$des."</p>"
					."<div class='clearfix'></div>"
					."<h4>".$available."</h4></div>";
			
				
				echo "<div class='product-id'>"
					."<p>书目编号: <span>".$id."</span></p>"
					."<form action='delete_book.php?id=".$id."' method='post'>";
					$db=null;
					?>
					 
					<input name="collect" type="submit"value="删除" class="collect" >
			
				 </form>
			 </div>
		 </div>
      </div>
	      	 
	 <div class="clearfix"></div>
</div>
<!---->
<!---->		
</body>
</html>