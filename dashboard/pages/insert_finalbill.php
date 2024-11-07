<?php
//including the database connection file
include('connection.php');

if(isset($_POST['submit'])) {	
	$mrno = ($_POST['mrno']);
	$bno = ($_POST['bno']);
	$patno = ($_POST['patno']);
	$bdate=$_POST['bdate'];
	$pname= ($_POST['patname']);
	$fname= ($_POST['fname']);
	$age= ($_POST['age']);
	$gender= ($_POST['sex']);
	
	$mobile= ($_POST['mobile']);
	$doa1= ($_POST['doa']);
	$doa=date('Y-m-d', strtotime($doa1));
	$dichargedate= ($_POST['dichargedate']);
	$address= ($_POST['address']);
	$doctors= ($_POST['doctors']);
	
	$thamount= ($_POST['thamount']);
	$concession= ($_POST['concession']);
	$namount= ($_POST['namount']);
	$hadamount= ($_POST['hadamount']);
	$hbamount= ($_POST['hbamount']);
	
	$payamount= ($_POST['payamount']);
	$rbamount= ($_POST['rbamount']);
	$user= ($_POST['user']);
	$paymenttype= ($_POST['paymenttype']);
	$patno1=$_POST['patno1'];
	
	
	$dtn=date('Y-m-d');
	$k="select * from daily_amount where date(date1)='$dtn'";
	$sq = mysqli_query($link,$k);
$bcnt=mysqli_num_rows($sq);
//$cnt=$bcnt+1;
$cnt1=$bcnt+1;
$cnt=date('dmy')."-".$cnt1;
date_default_timezone_set('Asia/Kolkata');
 $ndate=date( 'Y-m-d H:i:s', time ()); 
	$aa="insert into daily_amount(amnt_type,amount,bill_num,mrnum,recv_by,pay_type,date_time,amnt_desc)
	 values('Final Bill','$pamount','$cnt','$mrno','$user','$paymenttype','$ndate','Final Bill')";
	
	
	$sql = mysqli_query($link,$aa) or die(mysqli_error($link));
	
	
	
	
	if($mrno != '') {
		$ts="INSERT INTO final_bill(bno,PatientMRNo,PatientNo,PatientName,Age,Sex,Address,ConsultDoctor,
		ContactNo,AdmissionDate,DischargeDate,fname,totamt,totconsession,netamt,hospaid,hospdue,totpaid,totdue,user,paymenttype,BILL_DATE,patno1)VALUES
		('$bno','$mrno','$patno','$pname','$age','$gender','$address','$doctors','$mobile','$doa','$dichargedate',
		'$fname','$thamount','$concession','$namount','$hadamount','$hbamount','$payamount','$rbamount','$user','$paymenttype','$bdate','$patno1')";
    	$result = mysqli_query($link,$ts) or die(mysqli_error($link));
		$id=mysqli_insert_id($link);
	}
		//echo $count=;
		//exit;
		// $d=count($_POST['description']);
		for($t=0; $t<count($_POST['description']); $t++){
		$description= addslashes($_POST['description'][$t]);
		$days= $_POST['days'][$t];
		$charge= $_POST['charge'][$t];
		$amount= $_POST['amount'][$t];
			
		 $ts1="insert into final_bill1(id1,description,days,charge,amount)values('$id','$description','$days','$charge','$amount')";
		$result1 = mysqli_query($link,$ts1);
			
			
		}
	//exit;
		
		if($result1 ){
			print "<script>";
			print "alert('Successfully Registred ');";
			print "self.location='finalbilllist.php';";
			print "</script>";
		}
	}	
	

?>
