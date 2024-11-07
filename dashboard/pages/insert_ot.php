<?php
//include("config.php");
include("../db/connection.php");

if(isset($_POST['submit'])){
	//print_r($_POST);
echo $sex=$_POST['sex'];
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
$rec_num=$_POST['rec_num'];
 	$count = $_REQUEST['nitem'];
 $ty="insert into ip_hosp_drug(mrno,gender,name,age,date1,sub_total,adjust,round,total_amt,paid,bal,recby,record_no)  values('$rnum','$sex','$pname','$age','$d','$sub','$adjt','$round','$gtot','$paid','$bal','$recby','$rec_num')";
$qry=mysqli_query($link,$ty) or die(mysqli_error($link));
$sql = mysqli_query($link,"select max(id+0) from ip_hosp_drug");
//$sql=1;
if($sql)
{
	while($row = mysqli_fetch_array($sql))
	{
		$sno=$row[0];
	}
}	
	$id=$sno;
if($qry)
{
	$count = $_REQUEST['nitem'];
	
	for($i=1;$i<=$count;$i++)
		{

	
		$pname=$_REQUEST['pname'.$i];
		$sqty=$_REQUEST['sqty'.$i];
		$srate=$_REQUEST['srate'.$i];
		$value=$_REQUEST['value'.$i];
		




		
		  $as="insert into ip_hosp_drug1(id1,drug_name,qty,rate,amnt)
		 values('$id','$pname','$sqty','$srate','$value')";
		$sql1=mysqli_query($link,$as);
		
		
		
}
				
}	//for




		
if($sql1)
{
	print "<script>";
	print "alert('successfully added');";
	print "self.location='ot.php'";
	print "</script>";
}	

}
?>