<?php
session_start();
session_unset();//free all session variable
session_destroy();//销毁一个会话中的全部数据
setcookie(session_name(),'',time()-3600);//销毁与客户端的卡号
?>
<html>
<head>
<title>退出登录...</title>
<meta http-equiv="refresh" content="2;URL=index.html">
</head>
<link rel="stylesheet" href="${pageContext.request.contextPath}/back.css" />
<body>
<h3>你已经退出本系统,两秒后跳回首页</h3>
<h3>如没有跳转,请按<a href="index2.php">这里</a></h3>
</body>
</html>