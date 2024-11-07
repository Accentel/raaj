<?php
//include("config.php");
include("../db/connection.php");

if(isset($_POST['submit'])){
	//print_r($_POST);
 $sex=$_POST['sex'];
$age=$_POST['age'];
$rnum=$_POST['rnum'];
$pname=$_POST['pname'];
$sub=$_POST['total'];
$adjt=$_POST['adjt'];
$round=$_POST['round'];
$gtot=$_POST['gtot'];
$paid=$_POST['paid'];
$bal=$_POST['bal'];
$recby=$_POST['recby'];
$d=$_POST['ApplicationDeadline1'];
//date('Y-m-d');
$otid=$_POST['otid'];
$rec_num=$_POST['rec_num'];
 	$count = $_REQUEST['nitem'];

$qry=mysqli_query($link,"update ip_hosp_drug set 
mrno='$rnum',gender='$sex',name='$pname',age='$age',date1='$d',sub_total='$sub',adjust='$adjt',round='$round',total_amt='$gtot',paid='$paid',bal='$bal',recby='$recby',record_no='$rec_num' where id='$otid'");

if($qry)
{
	$count = $_REQUEST['nitem'];
	
	for($i=1;$i<=$count;$i++)
		{

	
		$pname=$_REQUEST['pname'.$i];
		$sqty=$_REQUEST['sqty'.$i];
		$srate=$_REQUEST['srate'.$i];
		$value=$_REQUEST['value'.$i];
		$pid=$_REQUEST['pid'.$i];

if($pid!=''){
	
	  $as1="update ip_hosp_drug1 set drug_name='$pname',qty='$sqty',rate='$srate',amnt='$value' where id='$pid' and id1='$otid'";
		$sql10=mysqli_query($link,$as1) or die(mysqli_error($link));
	
}else{


		
		  $as="insert into ip_hosp_drug1(id1,drug_name,qty,rate,amnt)
		 values('$otid','$pname','$sqty','$srate','$value')";
		$sql1=mysqli_query($link,$as);
}
		
		
}
				
}	//for




		
if($qry)
{
	print "<script>";
	print "alert('successfully added');";
	print "self.location='ot.php'";
	print "</script>";
}	

}
?>