<?php
include_once("Crud.php");

$crud = new Crud();
$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM clinicalsummary where id='$id'";
$result = $crud->getData($query);



if(isset($_POST['update'])){

$id=$crud->my_simple_crypt($_POST['id'],'d');
$sname=$crud->escape_string($_POST['sname']);
$user=$crud->escape_string($_POST['user']);
$sql="update clinicalsummary  set  cname='$sname',user='$user' where id='$id'";
$result=$crud->execute($sql);
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='clinicalsummarylist.php';";
			print "</script>";
}
}
?>