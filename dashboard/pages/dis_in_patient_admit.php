<?php
include('../db/connection.php');
$pat=$_GET['pat'];
$id=$_GET['id'];
$id1=$_GET['id1'];
$date=date('Y-m-d');
$time=date('H:i:s a');
$m=mysqli_query($link,"select * from ip_pat_admit where PAT_ID='$id' and PAT_REGNO='$id1' and PAT_NO='$pat'") or die(mysqli_error($link));
$m1=mysqli_fetch_array($m);
 $bno=$m1['BED_NO'];
 $rloc=$m1['room_loc'];
 $rno=$m1['room_no'];
 $rtype=$m1['room_type'];
 
$m2=mysqli_query($link,"update ip_pat_admit set DIS_STATUS='DISCHARGED',Discharge_date='$date',Discharge_Time='$time' where PAT_ID='$id' and PAT_REGNO='$id1' and PAT_NO='$pat'") or die(mysqli_error($link));
 

 $k=mysqli_query($link,"update beds set status='in' where rtype='$rtype' and ltype='$rloc' and roomno='$rno' and id='$bno'") or die(mysqli_query(link));
if($k){
	print "<script>";
			print "alert('Successfully DISCHARGED ');";
			print "self.location='inpatient.php';";
			print "</script>";
}
?>