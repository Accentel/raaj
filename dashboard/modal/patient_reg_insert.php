<?php
session_start(); $ses = $_SESSION['name1'];// exit;
ob_start();
include("../db/connection.php");
if(isset($_POST['submit'])){

$doct=$_POST['rnum'];
$doct1=$_POST['ApplicationDeadline1'];
//$doct2=$_POST['tknum'];
 $did=$_POST['doctorname'];
$pname=$_POST['pname'];
$fname=$_POST['fname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$aadhar=$_POST['aadhar'];
  $ref_doc=$_POST['ref_doc'];
$ref_mob=$_POST['ref_mob'];
$doctorname=$_POST['doctorname'];
$con_doct_mob=$_POST['con_doct_mob'];
 $concession_type=$_POST['concession_type'];
$fee=$_POST['fee'];
$addr=$_POST['addr'];
$rmarks=$_POST['rmarks'];
$sno=$_POST['sno'];
//$ApplicationDeadline=$_POST['ApplicationDeadline'];
//$ApplicationDeadline=date('Y-m-d', strtotime($_POST['ApplicationDeadline']));
 $ApplicationDeadline=$_POST['ApplicationDeadline'];
  $type=$_POST['type']; 
$rel=$_POST['rel'];
$date=date('Y-m-d');
$token=$_POST['token'];
  $con_fee=$_POST['con_fee']; 
  $reg_no=$_POST['reg_no']+1;
//$total=$_POST['total'];

if($type=='OP'){
$sdec="Patient Register";	
 $con_fee=$_POST['con_fee']; 
} else if($type=='IP') {
	$sdec="In Patient";
}else if($type=='Lab') {
	$sdec="Lab";
	$con_fee="0";
}else if($type=='Physiotherapy') {
	$sdec="Physiotherapy";
	 $con_fee=0;
}


$serv_name=$_POST['serv_name'];

$ser_amt=$_POST['ser_amt'];

     $total=$con_fee+$fee+$ser_amt;  
$new=$_POST['new'];
$pname_type=$_POST['pname_type'];
 $payment_type=$_POST['payment_type']; 
$dept=$_POST['dept'];
$insutype=$_POST['insutype'];
$policy=$_POST['policy'];
$chq_num=$_POST['chq_num'];
$bank=$_POST['bank'];
$chq_date=$_POST['chq_date'];
 $time= date("h:i:sa");
 $d=date('d-m-Y');

 $insutype_name=$_POST['insutype_name'];
 $policy_no=$_POST['policy_no'];
 $pkg_amt=$_POST['pkg_amt'];
 $req_amt=$_POST['req_amt'];
 $req_no=$_POST['req_no'];
 $apr_date=$_POST['apr_date'];
  $ins_type=$_POST['ins_type'];
  $token1=$_POST['token1'];
  $ser=$_POST['ser'];
 $appoint_type=$_POST['appoint_type'];
 $camp_type=$_POST['camp_type'];
 

//$doct7=$_POST['mnum'];
//$doct8=$_POST['occ'];
//$doct11=$_POST['ApplicationDeadline2'];
//$doct12=$_POST['fee'];
//$doct9=$_POST['rmarks'];
$pattype="OP";
$opno = $_POST['opno'];
//$cardno = $_POST['conce_card'];
//$ctype = $_POST['concession_type'];
$insutype = $_POST['insutype'];


 $xxx1="SELECT * FROM `validity`";
$abcd1=mysqli_query($link,$xxx1);

	$row2=mysqli_fetch_array($abcd1);
	  $valid_days=$row2['vdays'];
	  $valid1=date('Y-m-d', strtotime("+$valid_days days"));
	//$valid=7;
	if($appoint_type=='Ortho'){
		$valid=$valid1;
	} else {
		 $valid1=date('Y-m-d', strtotime("+30 days"));
		$valid=$valid1;
	}
	if($appoint_type=='Ayurvedic'){
		$sno=$_POST['sno'];
	} else {
		$sno='';
	}
	
	//$sno=$_POST['sno'];
	
//echo $valid; exit;
$docid = mysqli_query($link,"select dname1,doct_type from doct_infor where id = '$did'");
if($docid)
{
	$row1 = mysqli_fetch_array($docid);
	 $doct3 = $row1['dname1'];
	 $doct_type = $row1['doct_type'];

}


	 $new_doct_type=$doct_type;


//exit;
if($doct3!=''){ 

$doct3=$doct3;}
 else {
$doct3=$did;	 
 } 
 $dt=date('Y-m-d');
$sq=mysqli_query($link,"select * from daily_amount where date(date1)='$dt'");
$bcnt=mysqli_num_rows($sq);
$cnt1=$bcnt+1;
$cnt=date('dmy')."-".$cnt1;
date_default_timezone_set('Asia/Kolkata');
 $ndate=date( 'Y-m-d H:i:s', time ()); 
 
 // $doct3; 
     $ff="INSERT INTO `patientregister`( `registerno`,  `doctorname`, `patientname`, `age`, `gaurdianname`,
 `gender`, `address`, `phoneno`, `registerfee`, `remarks`, `pat_type`, `pay_type`, `aadar`, `ref_doc`, `ref_doc_mob`,
  `con_doc_mob`,`rel_type`,`date`,`tokenno`,`cons_fee`,`total`,`pat_type1`,`pname_type`,`validity`,`concession_type`,`dept`,`insutype`
  ,`policy`,`chq_num`,`bank`,`chq_date`, `insutype_name`, `policy_no`, `pkg_amt`, `req_amt`, `req_no`, `apr_date`, `ins_type`,`token_num`,`auth_by`,bill_num,serv_name,hosp_fee,reg_no,opt_type,s_no,camp_type) VALUES 
  ('$doct','$doct3','$pname','$age','$fname' ,'$sex',
 '$addr','$mobile','$fee','$rmarks','$type','$concession_type','$aadhar','$ref_doc','$ref_mob','$con_doct_mob','$rel',
 '$date','$token','$con_fee','$total','$new','$pname_type','$valid','$payment_type','$dept','$insutype',
 '$policy','$chq_num','$bank','$chq_datse','$insutype_name','$policy_no','$pkg_amt','$req_amt','$req_no','$apr_date','$ins_type','$token1','$ser','$cnt','$serv_name','$ser_amt','$reg_no','$appoint_type','$sno','$camp_type')"; 


$sq=mysqli_query($link,$ff);
 $id=mysqli_insert_id($link); 

$msf="insert into opdigitalform(pname,age,sex,mrno,optype,date1,consult_doct) values('$pname','$age','$sex','$doct','$type','$date','$doct3')";
mysqli_query($link,$msf) or die(mysql_error());
//$sq=mysqli_query($link,"INSERT INTO patientregister(registerno,registerdate,doctorname,patientname,age,gaurdianname,gender,address,phoneno,occupation,appointmentdate,registerfee,remarks,pat_type,con_type,card_no,insu_type)
//VALUES('$doct','$doct1','$doct3','$doct4','$doct13','$doct5','$doct14','$doct6','$doct7','$doct8','$doct11','$doct12','$doct9','$pattype','$ctype','$cardno','$insutype')");


$qq=mysqli_query($link,"insert into daily_amount(amnt_type,amount,bill_num,mrnum,recv_by,pay_type,date_time,amnt_desc,doct_name)
values('Patient Register','$total','$cnt','$doct','$ses','$payment_type','$ndate','$sdec','$new_doct_type')");

 


$s=mysqli_query($link,"select * from ulogin where uname='$doct'");
					$count=mysqli_num_rows($s);
if($count==0)
{
				$y=mysqli_query($link,"insert into ulogin (uname,pass)values('$doct','$mobile')");
						
						
					}

if($sq){
	$vdate = date("Y-m-d");
	$authby = $_POST['authby'];
	
	$op = mysqli_query($link,"insert into op_pat_dlt(PAT_REGNO,OP_NO,VISIT_NO,VISIT_DT,DOC_CODE,CURRENTDATE,AUTH_BY,token_status,reg_fee) 
	values('$doct','$opno','1','$vdate','$did',now(),'$authby','Y','$fee')");
	if($op)
	{
		 $xx="insert into doct_pat_appmnt(DOC_CODE, PAT_REGNO, APPMNT_DATE,  CURRENTDATE, AUTH_BY) 
		values('$did','$doct','$vdate',now(),'$authby')";
		
		$patapt= mysqli_query($link,$xx);

		if($patapt)
		{
			if($type=='IP'){
				
					header("location:../pages/add_in_patient_admit.php?id=$id");
				
				}else if($type=='Lab'){
					header("location:pay_bill2.php?id=$id");
					
				}else{
					
					header("location:print.php?id=$id");
					}
					
					

?>

<?php
}
}
}
else{
mysql_error();}
}
?>
<?php
ob_get_flush();
?>