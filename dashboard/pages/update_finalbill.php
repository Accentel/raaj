<?php
//including the database connection file
include('connection.php');

if(isset($_POST['submit'])) {	
echo	$mrno = ($_POST['mrno']);
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
	$id=$_POST['id'];
	
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
	
	
	
	
	
	echo	$ts="update final_bill set bno='$bno',PatientMRNo='$mrno',PatientNo='$patno',PatientName='$pname',Age='$age',Sex='$gender',Address='$address',ConsultDoctor='$doctors',
		ContactNo='$mobile',AdmissionDate='$doa',DischargeDate='$dichargedate',fname='$fname',totamt='$thamount',totconsession='$concession',netamt='$namount',hospaid='$hadamount',hospdue='$hbamount',totpaid='$payamount',totdue='$rbamount',user='$user',paymenttype='$paymenttype',BILL_DATE='$bdate'  where BILL_NO='$id'";
    	$result = mysqli_query($link,$ts) or die(mysqli_error($link));
		//$id=mysqli_insert_id($link);
	
		//echo $count=;
		//exit;
		// $d=count($_POST['description']);
		for($t=0; $t<count($_POST['description']); $t++){
		$description= addslashes($_POST['description'][$t]);
		$days= $_POST['days'][$t];
		$charge= $_POST['charge'][$t];
		$amount= $_POST['amount'][$t];
		$id1= $_POST['id1'][$t];
			if($id1!=''){
				 $ts1="update final_bill1 set id1='$id',description='$description',days='$days',charge='$charge',amount='$amount' where id='$id1' ";
		
			}else{
		 $ts1="insert into final_bill1(id1,description,days,charge,amount)values('$id','$description','$days','$charge','$amount')";
		//$result1 = mysqli_query($link,$ts1);
			
			
		}
		
		$result1 = mysqli_query($link,$ts1);
	//exit;
		
		if($result ){
			print "<script>";
			print "alert('Successfully Registred ');";
			print "self.location='finalbilllist.php';";
			print "</script>";
		}
		}
	
	
}else{
		
		$id=$_REQUEST['id'];
		
		$ty="select * from final_bill where BILL_NO='$id'";
			$t = mysqli_query($link,$ty) or die(mysqli_error($link));
			//$sql= mysql_query("select  b.mrno,b.BillDate,b.phoneno,b.PatientName,b.Age,b.Sex,b.DoctorName,b.conce_type,b.ptype,b1.Total,b1.Discount,b1.NetAmount,b1.PaidAmount,b1.BalanceAmount,b1.time from bill b,bill1 b1 where b.BillNO=b1.BillNO and b.BillNO='$bno'");
			foreach($t as $key=>$row)
			{
				//$row = mysql_fetch_array($sql);
				$bdate = $row['BILL_DATE'];
				$BILL_NO=$row['BILL_NO'];
				$bno=$row['bno'];
				$AdmissionDate = ($row['AdmissionDate']);
				$DischargeDate = $row['DischargeDate'];
			    $patname = $row['PatientName'];
				$PatientNo = $row['PatientNo'];
				$age = $row['Age'];
				$fname = $row['fname'];
				$mrno = $row['PatientMRNo'];
				$gender = $row['Sex'];
				$dname = $row['ConsultDoctor'];
				$total =$row['totamt'];
				$consamt = $row['totconsession'];
				$netamt = $row['netamt'];
				$hospaid = $row['hospaid'];
				$hospdue = $row['hospdue'];
			//	$ctype = $row['conce_type'];
				$totpaid = $row['totpaid'];
				$phoneno = $row['ContactNo'];
				$totdue = $row['totdue'];
				$Address = $row['Address'];
			}	
		
}
		
		
	

?>
