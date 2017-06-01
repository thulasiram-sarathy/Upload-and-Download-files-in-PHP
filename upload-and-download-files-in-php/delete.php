<?php 
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$sdb=mysql_select_db("uploadphp",$conn) or die(mysql_error());
$id=$_REQUEST['id'];
$query = "DELETE FROM upload WHERE id=$id"; 
$result = mysql_query($query) or die ( mysql_error());
header("Location: index.php"); 
 ?>
