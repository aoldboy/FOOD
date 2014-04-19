<?php
$con = mysql_connect("localhost","root","123");
mysql_query('SET NAMES gb2312');    //转换汉字
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("order_system", $con);
echo $_POST[username];
//if(empty($_POST[username]))//{              //判空
//	echo"用户名不能为空";
//}
//if(empty($_POST[pwd])){              //判空
//	echo"密码不能为空";
///elseif(!)


/*if(empty($_POST[email])){              //判空
	echo"邮箱地址不能为空";
}
else if(!ereg ("(c[0-9a-zA-Z]+)([@])([0-9a-zA-Z]+)(.)([0-9a-zA-Z]+)",$_POST[email])){
	echo"邮箱地址不合法，请重新输入”;
}
*/





 
$sql="INSERT INTO user_info (UserName,PWD,Email) VALUES ('$_POST[username]','$_POST[pwd]','$_POST[email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());  
  }
echo "1 record added";

mysql_close($con)
?>