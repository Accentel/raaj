<?php
//including the database connection file
include_once("Crud.php");
//include_once("Validation.php");
//include_once("locations.php");
$crud = new Crud();
//$validation = new Validation();

if(isset($_POST['submit'])) {	
$campus = $crud->escape_string($_POST['campus']);
	$paname = $crud->escape_string($_POST['paname']);
	$age = $crud->escape_string($_POST['age']);
	$gender = $crud->escape_string($_POST['gender']);
	$date =$crud->escape_string($_POST['date']);
		$addr =$crud->escape_string($_POST['addr']);
			$mobile =$crud->escape_string($_POST['mobile']);
	
	//$msg = $validation->check_empty($_POST, array('ecode', 'ename', 'email','designation','jdate','qualification','department','dob','gender','mobile','salary','aadhar','accountno','bname','branch','caddress','pddress','designation','jdate','qualification','department','dob','gender','mobile','salary','aadhar','accountno','bname','branch','caddress','pddress'));
	//$check_age = $validation->is_age_valid($_POST['age']);
	//$check_email = $validation->is_email_valid($_POST['email']);
	
		
	// checking empty fields
	if($paname != '') {
		
    	$result = $crud->execute("INSERT INTO campus_list(campus,name,age,gender,date1,address,mobile)
		VALUES('$campus','$paname','$age','$gender','$date','$addr','$mobile')");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='campussummarylist1.php';";
			print "</script>";
		}
	}	
	
}
?>