<?php
$con = mysql_connect("localhost","root","123");
if(!$con)
die("Could not connect:".mysql_error());
mysql_select_db("search");
$query="SET NAMES 'GB2312'";
mysql_query($query);
?>
<?php
$keyword=$_POST['search'];

$rt=mysql_query("select * from course where CourseName like '%$keyword%' ");

if (!$rt){
echo "again";
}
$rs = mysql_query($rt, $con); // 执行查询语句
$result = mysql_fetch_array($rs); //返回查询结果到数组
$CourseName = $result ["CourseName"]; //将数据从数组取出
$DiningHall = $result ["DiningHall"];
$Prise = $result ["Prise"];
echo $CourseName;
echo $DiningHall;
echo $Prise;
//echo "<li>《".$name."》</br>价格：".$price."</br>ISBN:".$isbn."</li>";  //输出数据
?>
