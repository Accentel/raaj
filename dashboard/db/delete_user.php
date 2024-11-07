<?php
include("../db/connection.php");
	$id=$_GET['id'];
	 $id;
	//$name=$_GET['name'];
	//echo $name;
	$sql="DELETE FROM login WHERE ename='$id'";
	$result=mysqli_query($link,$sql);
	
	$sql1="DELETE FROM hr_user WHERE emp_id='$id'";
	mysqli_query($link,$sql1);
	
	
	
	if($result)
	{
		print "<script>";
		print "alert('Successfully deleted');";
		print "self.location='../pages/userview.php';";
		print "</script>";
	}else{
		print "<script>";
		print "alert('unable to delete');";
		print "self.location='../pages/userview.php';";
		print "</script>";
	}
	
	
	
	
?>