<?php
include_once("Crud.php");

$crud = new Crud();
$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
//fetching data in descending order (lastest entry first)
$q1 = "SELECT * FROM supportsize where id='$id'";
$r = $crud->getData($q1);

$q2 = "SELECT * FROM supports";
$result = $crud->getData($q2);

if(isset($_POST['update'])){

$id=$crud->my_simple_crypt($_POST['id'],'d');
$sname = $crud->escape_string($_POST['sname']);
	$user =$crud->escape_string($_POST['user']);
	$ssize = $crud->escape_string($_POST['ssize']);
	$amount = $crud->escape_string($_POST['amount']);
	$quantity = $crud->escape_string($_POST['quantity']);


$sql="update supportsize  set  stype='$sname',size='$ssize',amount='$amount',user='$user',qty='$quantity' where id='$id'";
$result=$crud->execute($sql);
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='supportsizelist.php';";
			print "</script>";
}
}
?>