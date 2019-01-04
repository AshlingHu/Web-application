<?php
	class mydb
	{
		var $host="localhost";
		var $username="root";
		var $password="1+1=2hyj";
		var $database="my_database";	
		
		function usage($sql,$type,$data)
		{
			$db = new mysqli($this->host,$this->username,$this->password,$data);
			if(mysqli_connect_error())
			{
				echo "<script>alert('数据库连接失败');</script>";
				exit;
			}
			else //如果$type为R表示需要返回数据结果，如果是F表示需要返回操作是否成功的结果
			{
				$result = $db->query($sql);
				if(!($type=="R"))
				{
					if($result) return "OK";
					else return "NO";
				}
				else return $result;
			}
	
		}
		function closeConn($db){//关闭连接
			return null;
		}
	}
?>