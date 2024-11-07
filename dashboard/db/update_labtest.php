<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("labdeptlist.php");
include_once("Validation.php");
$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
$q="select * from labtest where id='$id'";
$r=$crud->getData($q);
//$crud = new Crud();
$validation = new Validation();

if(isset($_POST['update'])) {	
$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
	$dept = $crud->escape_string($_POST['dept']);
	$tname = $crud->escape_string($_POST['tname']);
	$user =$crud->escape_string($_POST['user']);
	$amount = $crud->escape_string($_POST['amount']);
	$iamount = $crud->escape_string($_POST['iamount']);
	
	//$msg = $validation->check_empty($_POST, array('ecode', 'ename', 'email','designation','jdate','qualification','department','dob','gender','mobile','salary','aadhar','accountno','bname','branch','caddress','pddress','designation','jdate','qualification','department','dob','gender','mobile','salary','aadhar','accountno','bname','branch','caddress','pddress'));
	//$check_age = $validation->is_age_valid($_POST['age']);
	//$check_email = $validation->is_email_valid($_POST['email']);
	
	 if (empty($tname)) {
 $errortname = "Please Enter Test Name";
       
    } else {

        $tname = $validation->test_input($tname);
    }
	 if (empty($amount)) {
 $erroramount = "Please Enter Lab Test Amount";
       
    } else {

        $amount = $validation->test_input($amount);
    }
	
	
	if (empty($iamount)) {
 $erroriamount = "Please Enter Lab Test Insurance Amount";
       
    } else {

        $iamount = $validation->test_input($iamount);
    }
		
	// checking empty fields
	if($tname != '' and $amount!='') {
		
    	$result = $crud->execute("update labtest set dept='$dept',tname='$tname',amount='$amount',iamount='$iamount',user='$user' where id='$id'");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='labtestdetails.php';";
			print "</script>";
		}
	}	
	
}
?>
</body>
</html>
