<?php 
include('../db/connection.php');
$id=$_REQUEST['id'];
$r=mysqli_query($link,"select * from adv_collection where ADV_ID='$id'") or die(mysqli_error($link));
$r1=mysqli_fetch_assoc($r);
$bno=$r1['bill_num'];
$k=mysqli_query($link,"delete from daily_amount where bill_num='$bno'") or die(mysqli_error($link));
$res=mysqli_query($link,"delete from adv_collection where ADV_ID='$id'") or die(mysqli_error($link));

if($res){
			print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='advancebilllist.php';";
			print "</script>";
		}
?>