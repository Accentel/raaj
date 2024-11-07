<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("Crud.php");
include_once("Validation.php");


$crud = new Crud();
$validation = new Validation();
$query = "SELECT * FROM empdept";
$result = $crud->getData($query);

if(isset($_POST['Submit'])) {	
	$umrno = ($_POST['umrno']);
	$patno = ($_POST['patno']);
	$patname = ($_POST['patname']);
	$fname= ($_POST['fname']);
	
	$dichargedate1 = str_replace('/', '-', ($_POST['dichargedate']));
    $dichargedate=date('Y-m-d', strtotime($dichargedate1));

$age= ($_POST['age']);
$sex= ($_POST['sex']);
//$dob= ($_POST['dob']);

$doa1 = str_replace('/', '-', ($_POST['doa']));
    $doa=date('Y-m-d', strtotime($doa1));

$address= ($_POST['address']);
$doctors= ($_POST['doctors']);
$finaldiagnosis= ($_POST['finaldiagnosis']);
$clinicalsummary= ($_POST['clinicalsummary']);
$pulsrate= ($_POST['pulsrate']);
$pulserate1= ($_POST['pulserate1']);
$bp= $_POST['bp'];
$bp1= $_POST['bp1'];
$temperature= $_POST['temperature'];

$temperature1= $_POST['temperature1'];
$respiratoryrate= $_POST['respiratoryrate'];
$respiratoryrate1= $_POST['respiratoryrate1'];
$heart= $_POST['heart'];
$heart1= $_POST['heart1'];
$lungs= $_POST['lungs'];
$lungs1= $_POST['lungs1'];
$pa= $_POST['pa'];
$pa1= $_POST['pa1'];

$cns= $_POST['cns'];
$cns1= $_POST['cns1'];
$localexamination= $_POST['localexamination'];
$localexamination1= $_POST['localexamination1'];
$investigations= $_POST['investigations'];
$suggestions= $_POST['suggestions'];
$treatsummary= $_POST['treatsummary'];

$investigations= $_POST['investigations'];
$user=$_POST['user'];
	
$reviewdate1 = str_replace('/', '-', ($_POST['reviewdate']));
    $reviewdate=date('Y-m-d', strtotime($reviewdate1));	
	
	$iname = $_FILES['image']['name'];
	//$inreport=$_POST['inreport'];		 
			 if($iname!= ""){
				// echo "hi";
				 
	$code = md5(rand());
	 $iname =$code. $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
	 $dir = "upload";
		    echo   $destination =  $dir . '/' . $iname;
		         move_uploaded_file($tmp, $destination);
	//move_uploaded_file($tmp,"../staff/" . $code.$_FILES["sfile"]["name"]);
	 $iname1 =$code. $_FILES['image']['name'];
	//$iname = $code.$_FILES["sfile"]["name"];
	$iname1 = ($iname1);
	}else{
	 $iname1 = ($image1);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	 if (empty($umrno)) {
 $errorumrno = "Please Enter UMR NO";
       
    } else {

        $umrno = $validation->test_input($umrno);
    }
	

	
	// checking empty fields
	if($umrno != '' ) {
	$sq="INSERT INTO adddischarge(mrno,patno,pname,relation,age,sex,admit,discharge,ward,addr,doctor,clinicalsummary,treatsummary,pulse,pulse1,bp,bp1,temperature,temperature1,repository,repository1,heart,heart1,lungs,lungs1,pa,pa1,cns,cns1,localexamination,localexamination1,suggestions,reviewdate,cdate,file,finaldiagnosis,user,invgreport)VALUES('$umrno','$patno','$patname','$fname','$age','$sex','$doa','$dichargedate','$ward','$address','$doctors','$clinicalsummary','$treatsummary','$pulsrate','$pulsrate1','$bp','$bp1','$temperature','$temperature1','$respiratoryrate','$respiratoryrate1','$heart','$heart1','$lungs','$lungs1','$pa','$pa1','$cns','$cns1','$localexamination','$localexamination1','$suggestions','$reviewdate',now(),'$iname1','$finaldiagnosis','$user','$investigations')";
    	$result = $crud->execute($sq);
		
		
		
		$rows1=count($_POST['pname']);
	for($i=0;$i<$rows1;$i++)
{
$pname = $_POST['pname'][$i];
$mtype = $_POST['mtype'][$i];
 $dtime = $_POST['dtime'][$i]; 
$dadmin = $_POST['dadmin'][$i];
$Days = $_POST['Days'][$i];
$indication = $_POST['indication'][$i];
$qty = $_POST['qty'][$i];
$generic = $_POST['generic'][$i];
 $date=date('Y-m-d');
if($pname != ""){
	 $rs="insert into dischargemedical(mrno, mname,mtype,dosagetime,drugadmin,days,qty,date1,indication,generic) values('$umrno','$pname','$mtype','$dtime','$dadmin','$Days','$qty','$date','$indication','$generic')";
$result = $crud->execute($rs);


}

}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Successfully Registred ');";
			print "self.location='dischargesummarylist.php';";
			print "</script>";
		}
	}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>
</body>
</html>
