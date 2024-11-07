<html>
<head>
	
</head>
<body>
<?php
//including the database connection file
include('connection.php');
include_once("Crud.php");
include_once("Validation.php");
$crud = new Crud();
$query = "SELECT distinct 	PRODUCT_NAME FROM phr_purinv_support1";
$result = $crud->getData($query);
$validation = new Validation();
			//include("config.php");
			$dt = date('d-m-Y');
			$dt1 = explode("-",$dt);
			$dt2 = implode($dt1);
			$dt3 = ltrim($dt2, '0');
			$str20 = "BL-".$dt3."-";
			$tp="select count(distinct billno) as billcont from supportsbill where billno like '$str20%'";
			$rst = $crud->getdata($tp);
	
if(isset($_POST['Submit'])) {	
	$mrno = $crud->escape_string($_POST['mrno']);
	$bno = $crud->escape_string($_POST['bno']);
	$bdate1 = str_replace('/', '-', ($_POST['bdate']));
    $bdate=date('Y-m-d', strtotime($bdate1));
	$pname= $crud->escape_string($_POST['pname']);
	$age= $crud->escape_string($_POST['age']);
	$gender= $crud->escape_string($_POST['gender']);
	$dname= $crud->escape_string($_POST['dname']);
	$mobile= $crud->escape_string($_POST['mobile']);
	$ptype= $crud->escape_string($_POST['ptype']);
	$time= $crud->escape_string($_POST['time']);
	$tamount= $crud->escape_string($_POST['tamount']);
	$discount= $crud->escape_string($_POST['discount']);
	$namount= $crud->escape_string($_POST['namount']);
	$pamount= $crud->escape_string($_POST['pamount']);
	$balamount= $crud->escape_string($_POST['balamount']);
	$remarks= $crud->escape_string($_POST['remarks']);
	$user= $crud->escape_string($_POST['user']);
	$paymenttype= $crud->escape_string($_POST['paymenttype']);
	
	
	$dtn=date('Y-m-d');
	$k="select * from daily_amount where date(date1)='$dtn'";
	$sq = mysqli_query($link,$k);
$bcnt=mysqli_num_rows($sq);
//$cnt=$bcnt+1;
$cnt1=$bcnt+1;
$cnt=date('dmy')."-".$cnt1;
date_default_timezone_set('Asia/Kolkata');
 $ndate=date( 'Y-m-d H:i:s', time ()); 
 
 	 $date = DateTime::createFromFormat("Y-m-d", $bdate);
    $y=$date->format("Y");
    $m=$date->format("m");
    $d=$date->format("d");
    
	$dxx1=date($y.'-01-01');
$d2=date($y.'-12-31');
$aa="select count(1) as ct from supportsbill where bdate = '$bdate' ";
$qs=mysqli_query($link,$aa);
$r2=mysqli_fetch_array($qs);
    
 
 $reg=$r2['ct']+1;
$bno="BL-".$d.$m.$y."-".$reg;											
	
	$aa="insert into daily_amount(amnt_type,amount,bill_num,mrnum,recv_by,pay_type,date_time,amnt_desc)
	 values('Supports Bill','$pamount','$cnt','$mrno','$user','$paymenttype','$ndate','Supports Bill')";
	$sql = $crud->execute($aa);

	if($mrno != '') {
		$ts="INSERT INTO supportsbill(mrno,billno,bdate,pname,age,gender,dname,mobile,ptype,time,tamount,discount,namount,pamount,bamount,remarks,user,paymenttype)VALUES
		('$mrno','$bno','$bdate','$pname','$age','$gender','$dname','$mobile','$ptype','$time','$tamount','$discount','$namount','$pamount','$balamount','$remarks','$user','$paymenttype')";
    	$result = $crud->execute($ts);
		// $result;
	}
	
		for($t=0; $t<=count($_POST['sname']); $t++){
		 $tname= $_POST['sname'][$t];
		 $size= $_POST['size'][$t];
		$amount= $_POST['amount'][$t];
		$sqty= $_POST['sqty'][$t];
		$total= $_POST['total'][$t];
			if($tname!=''){
				
				  $ssq="select T_QTY from stock where PRODUCT_NAME='$tname' and BATCH_NO='$size'";
				$sq=mysqli_query($link,$ssq) or die(mysqli_error($sq));
				
				$r1l=mysqli_fetch_array($sq);
				
				//$resultl = $crud->execute($ssq);
				//foreach($resultl as $key=>$r1l){	
				 $available=$r1l['T_QTY'];
				
			
				$tot=$available-$sqty;
				//}
				
	
				
				 $ts1="insert into supportsbill1(bno,mrno,sname,amount,cdate,size,id1,sqty,total)values('$bno','$mrno','$tname','$amount','$bdate','$size','$result','$sqty','$total')";
				$result1 = $crud->execute($ts1);
				
				$ssq1="update stock set T_QTY='$tot' where PRODUCT_NAME='$tname' and BATCH_NO='$size'";
$result3 = $crud->execute($ssq1);				
			}
			
		}
	//exit;
	$bno = $crud->my_simple_crypt($bno,'e');
		
		if($result1){
			print "<script>";
			print "alert('Successfully Registred ');";
			print "self.location='print_supportbill.php?id=$bno';";
			print "</script>";
		}
	}	
	

?>
</body>
</html>
