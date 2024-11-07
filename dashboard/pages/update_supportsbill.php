<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php
//including the database connection file
include('connection.php');
include_once("Crud.php");
include_once("Validation.php");
$crud = new Crud();
$query = "SELECT * FROM supports";
$result = $crud->getData($query);
$validation = new Validation();
			//include("config.php");
			$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
			$tp="select *  from supportsbill where billno='$id'";
								$rst1 = $crud->getdata($tp);
	
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
	 $id2= $crud->my_simple_crypt($_POST['id2'],'d');
	
	$dtn=date('Y-m-d');
	$k="select * from daily_amount where date(date1)='$dtn'";
	$sq = mysqli_query($link,$k);
	$bcnt=mysqli_num_rows($sq);
//$cnt=$bcnt+1;
$cnt1=$bcnt+1;
$cnt=date('dmy')."-".$cnt1;
date_default_timezone_set('Asia/Kolkata');
 $ndate=date( 'Y-m-d H:i:s', time ()); 
 $tdate=date('Y-m-d');
	//$aa="insert into daily_amount(amnt_type,amount,bill_num,mrnum,recv_by,pay_type,date_time,amnt_desc)
	// values('Supports Bill','$pamount','$cnt','$mrno','$user','$paymenttype','$ndate','Supports Bill')";
	$aa="update daily_amount set amount='$pamount',recv_by='$user' where mrnum='$mrno' and  amnt_type='Supports Bill'  and date(date1)='$tdate' ";
	$sql = $crud->execute($aa);

	if($mrno != '') {
		$ts="update supportsbill set mrno='$mrno',billno='$bno',bdate='$bdate',pname='$pname',age='$age',gender='$gender',dname='$dname',mobile='$mobile',ptype='$ptype',time='$time',tamount='$tamount',discount='$discount',namount='$namount',pamount='$pamount',bamount='$balamount',remarks='$remarks',user='$user',paymenttype='$paymenttype' where id='$id2'";
    	$result = $crud->execute($ts);
		// $result;
	}
	
		for($t=0; $t<count($_POST['sname']); $t++){
		 $tname= $_POST['sname'][$t];
		 $size= $_POST['size'][$t];
		$amount= $_POST['amount'][$t];
		$sqty= $_POST['sqty'][$t];
		$total= $_POST['total'][$t];
		$sid=$_POST['sid'][$t];
		$id1=$_POST['id1'][$t];
			if($sid!=''){
				 $ts1="update supportsbill1 set bno='$bno',mrno='$mrno',sname='$tname',amount='$amount',size='$size',total='$total',sqty='$sqty' where id='$sid' ";
				$result1 = $crud->execute($ts1);
			}else{
				$ts1="insert into supportsbill1(bno,mrno,sname,amount,cdate,size,id1,sqty,total)values('$bno','$mrno','$tname','$amount','$bdate','$size','$id2','$sqty','$total')";
				$result1 = $crud->execute($ts1);
			}
		}
	//exit;
	$bno = $crud->my_simple_crypt($_POST['bno'],'e');
		
		if($result){
			print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='supportsbilllist.php';";
			print "</script>";
		}
	}	
	

?>
</body>
</html>
