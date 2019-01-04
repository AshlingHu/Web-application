<?php
session_start();
if(empty($_SESSION['phone'])) header("Location:login.html");
$phone=$_SESSION['phone'];
$writer=$_POST['writer'];
$name=$_POST['name'];
$price=$_POST['price'];
$des=$_POST['description'];
//$pu=$_POST['publish_name'];//出版社
$kind=$_POST['kind'];
//echo "POST";

if(!is_dir("/usr/share/nginx/html/tmp/".$phone)) mkdir("/usr/share/nginx/html/tmp/".$phone, 0777, true);
$dest_folder="/usr/share/nginx/html/tmp/".$phone."/";//目标文件夹
$i=1;
foreach ($_FILES["files"]["error"] as $key => $error){
	if ($error == UPLOAD_ERR_OK) {
		if(($_FILES["files"]["type"][$key]== "image/gif")||($_FILES["files"]["type"][$key] == "image/jpeg")||($_FILES["files"]["type"][$key] == "image/pjpeg")){
			$tmp_name = $_FILES["files"]["tmp_name"][$key];
			$filename = $_FILES["files"]["name"][$key];
			$uploadfile = $dest_folder.$filename;
			move_uploaded_file($tmp_name, $uploadfile);}
		else{
			echo "<script> alert('图片".$i."Invalid file');history.back();</script>";//"Invalid file";
			exit;
		}
	}
	$i++;
}

include_once("my_db.php");
$db=new mydb();

$sql_id="SELECT COUNT(*) as total FROM book";

$res=$db->usage($sql_id,"R",'my_database');

$count = mysqli_fetch_array($res);
if($count['total']==0) $book_id=$count['total']+1;
else
{
	$sql="select * from book by id DESC LIMIT 0，1";
	$res=$db->usage($sql,"R",'my_database');
	$count = mysqli_fetch_array($res);
	$book_id=$count['id']+1;
}

//echo $book_id;
$time = date("Y-m-d", time());
$file1_path="tmp/". $phone."/". $_FILES["files"]["name"][0] ;
$file2_path="tmp/". $phone."/". $_FILES["files"]["name"][1] ;
$file3_path="tmp/". $phone."/". $_FILES["files"]["name"][2] ;
$file4_path="tmp/". $phone."/". $_FILES["files"]["name"][3];
//echo "insert 之前";
$sql="INSERT INTO book (id,phone,price,name,writer,kind,avaliable,description,file1,file2,file3,file4) VALUES ('$book_id','$phone','$price','$name','$writer','$kind',true,'$des','$file1_path','$file2_path','$file3_path','$file4_path')";
$str=$db->usage($sql,"F",'my_database');
if($str=="OK"){
	echo "<script>alert('上传成功');history.back();</script>";
}
else
{
	echo"<script>alert('上传失败，请重新选择');history.back();</script>";
}
?>