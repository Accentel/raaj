<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
//include_once("Crud.php");
include_once("Validation.php");

//$crud = new Crud();
include('supportlist.php');
$validation = new Validation();

if(isset($_POST['submit'])) {	
	$sname = $crud->escape_string($_POST['sname']);
	$user =$crud->escape_string($_POST['user']);
	$ssize = $crud->escape_string($_POST['ssize']);
	$amount = $crud->escape_string($_POST['amount']);
	$quantity = $crud->escape_string($_POST['quantity']);
	
	//$msg = $validation->check_empty($_POST, array('ecode', 'ename', 'email','designation','jdate','qualification','department','dob','gender','mobile','salary','aadhar','accountno','bname','branch','caddress','pddress','designation','jdate','qualification','department','dob','gender','mobile','salary','aadhar','accountno','bname','branch','caddress','pddress'));
	//$check_age = $validation->is_age_valid($_POST['age']);
	//$check_email = $validation->is_email_valid($_POST['email']);
	
	 if (empty($sname)) {
 $errorsname = "Please Enter Supports Name";
       
    } else {

        $sname = $validation->test_input($sname);
    }
	
		
	// checking empty fields
	if($sname != '') {
		
    	$result = $crud->execute("INSERT INTO supportsize(stype,size,amount,user,qty)VALUES('$sname','$ssize','$amount','$user','$quantity')");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='supportsizelist.php';";
			print "</script>";
		}
	}	
	
}
?>
</body>
</html>
