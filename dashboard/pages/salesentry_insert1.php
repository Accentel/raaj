<?php
include("../db/connection.php");

$admin = $_REQUEST['authby'];
$lrno = $_REQUEST['lrno'];
$total = $_REQUEST['grand'];
$disc = $_REQUEST['disc']+$o_dis=$_REQUEST['o_dis'];
$amount1=$_REQUEST['amount1'];
$own_amnt=$_REQUEST['own_amnt'];

$sql2=mysqli_query($link,"select u_qty,inv_id FROM phr_salent_dtl WHERE lr_no='$lrno'");
while($row2 = mysqli_fetch_array($sql2)){
	$uqty = $row2[0];
	$invid = $row2[1];
	$sql3=mysqli_query($link,"update phr_purinv_dtl set balance_qty=balance_qty+$uqty WHERE inv_id='$invid'");
}
$sql1=mysqli_query($link,"DELETE FROM phr_salent_dtl WHERE lr_no='$lrno'");
if($sql1){						
	$q1=mysqli_query($link,"update phr_salent_mast set total='$total',discount='$disc',bal='$amount1',own_amnt='$own_amnt' where lr_no=$lrno ");
}
if($q1){
$i = $_REQUEST['i'];
$count = $_REQUEST['rows'];
//echo $count;
for($m=1;$m <= $count;$m++)
{
//echo $count;
//echo $m;
$pcode=$_REQUEST['pcode'.$m];
//$mfg=$_REQUEST['mfg'+$m];
//$exp=$_REQUEST['exp'+$m];
$uqty=$_REQUEST['sqty'.$m];
$invno=$_REQUEST['bachno'.$m];
$urate=$_REQUEST['ucost'.$m];
$value=$_REQUEST['value'.$m];
$dis=$_REQUEST['dis'.$m];
$amt=$_REQUEST['amt'.$m];

	$q2=mysqli_query($link,"insert into phr_salent_dtl(LR_NO, PRODUCT_CODE, U_QTY, U_RATE, VALUE, CURRENT, AUTH_BY, inv_id,disc,total) values($lrno,'$pcode','$uqty','$urate','$value',now(),'$admin','$invno','$dis','$amt')");

if($q2){
	$q7=mysqli_query($link,"update phr_purinv_dtl set balance_qty=balance_qty-'$uqty' where inv_id='$invno'");

}
}
if($q7){

		print "<script>";
		print "alert('Successfully updated');";
		print "self.location='salesentry_list.php';";
		print "</script>";
	}else{
		print "<script>";
		print "alert('unable to update');";
		print "self.location='salesentry_view.php';";
		print "</script>";
}	

}
?>