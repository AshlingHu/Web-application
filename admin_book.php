<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Book</title>
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<script src="http://ajax.useso.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript"> 
var conn, rs; 

/*获取数据库连接*/
function getConnection() { 
    conn = new ActiveXObject("ADODB.Connection"); 
    // 1.JavaScript操作数据库JS操作Access数据库 
    // 在F盘有文件abc.mdf，表名为user，一共2个字段，id数字类型主键，name文本类型 
    // conn.Open("DBQ=f://abc.mdb;DRIVER={Microsoft Access Driver (*.mdb)};"); 

    // 2.JavaScript操作数据库JS操作SQL Server数据库 
    // 数据库名为：test，表名为user，id为int类型，自增列，name为用户名，为varchar类型；数据库用户名为sa，密码是sasa。 
    conn.Open("Driver={SQL Server};Server=.;DataBase=second_hand_book;UID=root;Password=693265");       //打开数据库 
    return conn; 
} 

/*执行增删改的方法*/
function executeUpdate(sql) { 
    getConnection(); 
    try { 
        conn.execute(sql); 
        return true; 
    } catch (e) { 
        document.write(e.description); 
    } finally { 
        closeAll(); 
    } 
    return false; 
} 

/*执行查询的方法*/
function executeQuery(sql) { 
    getConnection(); 
    try { 
        rs = new ActiveXObject("ADODB.Recordset"); 
        rs.open(sql, conn); 
        var html = ""; 
        while(!rs.EOF) { 
            html = html + rs.Fields("id") + "    " + rs.Fields("name")+"<br/>"; 
            rs.moveNext(); 
        } 
        document.write(html); 
    } catch (e) { 
        document.write(e.description); 
    } finally { 
        closeAll(); 
    } 
} 

/*关闭所有资源*/
function closeAll() { 
    if(rs != null) { 
        rs.close(); 
        rs = null; 
    } 
    if(conn != null) { 
        conn.close(); 
        conn = null; 
    } 
} 

// 增 
// executeUpdate("INSERT INTO [user](create_date, edit_date, is_delete, [name], sex, age) VALUES ('2013-10-17 12:00:00', '2013-10-17 12:00:00', 0, '空', '男', 20)"); 
// 删 
// executeUpdate("DELETE FROM [user] WHERE id = 1009"); 
// 改 
// executeUpdate("UPDATE [user] SET sex = '女', age = 18 WHERE id = 1009"); 
// 查 
//executeQuery("select * from [user]"); 
</script> 
<style>
body{
padding:0px;
margin:0px;
font-size:12px;
background:rgb(239,239,239);
}
body a{
color:#03515d;
text-decoration:none;

}
body button{
color:#03515d;
}
body span{
color:#03515d;
}
.center_bottom input{
color:#03515d;
font-size:12px;
height:20px;
width:40px;
padding:2px;
vertical-align:middle;
text-align:center;
margin-bottom:6px;
}
/**************************布局部分********************/
.table_div{
width:80%;
margin-top:3%;
margin-left:15%;
height:100%;
}
.div_clear{
clear:both;
}
.left_top{
background:url("img/10.gif");
height:30px;
width:12px;
float:left;
}
.left_center{
background:url("img/8.gif");
height:80%;
width:12px;
float:left;
}
.left_bottom{
background:url("img/12.gif");
height:35px;
width:12px;
float:left;
}


.center_top{
background:url("img/7.gif") repeat-x;
height:30px;
line-height:30px;
width:900px;
float:left;
}
.center_center{
height:80%;
width:900px;
float:left;
}
.center_bottom{
background:url("img/9.gif") repeat-x;
height:35px;
width:900px;
float:left;
line-height:35px;
}
.right_top{
background:url("img/11.gif");
height:30px;
width:15px;
float:left;
}
.right_center{
background:url("img/8.gif");
height:80%;
width:15px;
float:left;
}
.right_bottom{
background:url("img/13.gif");
height:35px;
width:15px;
float:left;
}
/**************************************表格内容***********************************/
.table_content{
margin:5px;
border:1px solid #B5D6E6;
width:890px;
height:100%;
overflow-x:hidden;
overflow-y:auto;
}


.table_content table{
width:100%;
border:0;
border-collapse:collapse;
font-size:12px;
}
.table_content table tr:hover{
background-color:#C1EBFF;
}
.table_content table th{
border-collapse:collapse;
height:22px;
background:url("img/6.gif");
border-right:1px solid #B5D6E6;
border-bottom:1px solid #B5D6E6;
}
.table_content table td{
height:22px;
word-wrap:break-word;
max-width:200px;
text-align:center;
vertical-align:middle;
border-right:1px solid #B5D6E6;
border-bottom:1px solid #B5D6E6;
}
.active1{
padding-bottom:2px; 
color:red;
}
.pic{
width:200px;
height:200px;}
</style>
</head>
<body>
<div class="table_div">
<div class="div_clear">
  <div class="left_top"></div>
  <div class="center_top">
  <div style="float:left">
  <img src="img/7.gif" width="16px" height="16px" style="vertical-align:middle"/>
  <span style="font-weight:bold">您当前的位置：</span><a href="admin_user.php"><span>[用户中心]</span></a><span  class="active1">-[书籍中心]</span>
  </div>
  <div style="float:right;padding-right:6px">
  </div>
  <a href="logout.php" style="float:right;"><span>退出登录</span></a>
  </div>
  <div class="right_top"></div>
  </div>
  <div class="div_clear">
  <div class="left_center"></div>
  
  <div class="center_center">
  <div class="table_content">
  <table cellspacing="0px" cellpadding="0px">
    <thead>
     <tr>
       <th width="12%">编号</th>
        <th width="12%">发布者</th>
       <th width="12%">书名</th>
       <th width="12%">作者</th>
       <th width="12%">价格</th>
       <th width="12%">种类</th>
       <th width="12%">有无存货</th>
 
       <th wdith="20%" style="border-right:none">操作</th>
     </tr>
    </thead>
    <tbody>
	<?php
	include_once("my_db.php");
	$db=new mydb();
	$sql="SELECT name,phone,id,price,writer,kind,avaliable,file1,file2,file3,file4 FROM book";
	$res=$db->usage($sql,"R",'my_database');
	//$arr=mysqli_fetch_array($res);
	//$schools=array("中山大学","广州大学","广东药科大学","华南理工大学","华南师范大学","广东工业大学","广州美术学院","星海音乐学院","广州中医药大学","广东外语外贸大学");
	while($row=mysqli_fetch_array($res)){
		$id=$row['id'];
		$name=$row['name'];
		$phone=$row['phone'];
		$price=$row['price'];
		$writer=$row['writer'];
		$kind=$row['kind'];
        $ava=$row['avaliable'];
		if($ava==1) $ava="有货";
		else $ava="无货";
		$file1=$row['file1'];
		$file2=$row['file2'];
		$file3=$row['file3'];
		$file4=$row['file4'];
		echo "<tr>"
			."<td width='12%'>".$id."</td>"
			."<td width='12%'>".$phone."</td>"
			."<td width='12%'>".$name."</td>"
			."<td width='12%'>".$writer."</td>"
			."<td width='12%'>".$price."</td>"
			."<td width='12%'>".$kind."</td>"
			."<td width='12%'>".$ava."</td>"
			."  <td width='20%' style='border-right:none'>"
			." <img width='16' height='16' src='img/5.gif' style='vertical-align:middle'/>"
			."<a href='adm_single.php?pub=".$id."' target='view_window'>书籍信息</a>&nbsp;"
			."<img width='16' height='16' src='img/4.gif' style='vertical-align:middle'/>"
			."<a id='delete' href='delete_book.php?delete=".$id."'>删除书籍</a>&nbsp;"
			."</td></tr>";
	}
	$db=null;
	?>
    </tbody>
   </table>
   </div>
  </div>
        <div class="right_center"></div>
  </div>
    <div class="div_clear">
        <div class="left_bottom"></div>
          <div class="center_bottom">
                 <?php
					include_once("my_db.php");
					$db=new mydb();
					$sql="SELECT count(*) FROM book";
					$res=$db->usage($sql,"R",'my_database');
					$arr=mysqli_fetch_row($res);
					echo "<span>&nbsp;&nbsp;共有".$arr[0]."条记录</span>";
					exit;
				?>
                     <div style="float:right;padding-right:30px">
                         <input type="button" value="顶部" />
                         <input type="button" value="上页"/>
                         <input type="button" value="下页"/>
                         <input type="button" value="底部"/>
                         <span>跳转到</span>
                         <input type="text" size="1"/>
                         <input type="button" value="跳转"/>
                       
                     </div>
           </div>
       <div class="right_bottom"></div>
    </div>
 </div>


<!---->		
</body>

</html>