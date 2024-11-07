<?php
include_once("Crud.php");

$crud = new Crud();
$id = $crud->my_simple_crypt($_GET['id'],'d');
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM employee where id='$id'";
$result = $crud->getData($query);

$query1 = "SELECT * FROM empdept";
$r = $crud->getData($query1);

if(isset($_POST['update'])){

$id=$crud->my_simple_crypt($_POST['id'],'d');
$ecode = $crud->escape_string($_POST['ecode']);
	$ename = $crud->escape_string($_POST['ename']);
	$email = $crud->escape_string($_POST['email']);
	$designation= $crud->escape_string($_POST['designation']);
	
	$jdate1 = str_replace('/', '-', ($_POST['jdate']));
    $jdate=date('Y-m-d', strtotime($jdate1));

$qualification= $crud->escape_string($_POST['qualification']);
$department= $crud->escape_string($_POST['department']);
//$dob= ($_POST['dob']);

	$dob1 = str_replace('/', '-', ($_POST['dob']));
    $dob=date('Y-m-d', strtotime($dob1));
	
$gender= $crud->escape_string($_POST['gender']);
$mobile= $crud->escape_string($_POST['mobile']);
$salary= $crud->escape_string($_POST['salary']);
$aadhar= $crud->escape_string($_POST['aadhar']);
$accountno= $crud->escape_string($_POST['accountno']);
$bname= $crud->escape_string($_POST['bname']);
$branch= $crud->escape_string($_POST['branch']);
$caddress=$crud->escape_string($_POST['caddress']);
$pddress= $crud->escape_string($_POST['pddress']);

$sql="update employee  set  empcode='$ecode',empname='$ename',empemail='$email',designation='$designation',jdate='$jdate',qualification='$qualification',department='$department',dob='$dob',gender='$gender',mobile='$mobile',salary='$salary',aadhar='$aadhar',accountno='$accountno',bname='$bname',branch='$branch',caddress='$caddress',pddress='$pddress' where id='$id'";

$result=$crud->execute($sql);
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='employeeslist.php';";
			print "</script>";
}
}
?>