<?php
include_once("Crud.php");

$crud = new Crud();
$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM procedures where id='$id'";
$result = $crud->getData($query);



if(isset($_POST['update'])){

$id=$crud->my_simple_crypt($_POST['id'],'d');
$pname=$crud->escape_string($_POST['pname']);
$user=$crud->escape_string($_POST['user']);
$amnt=$crud->escape_string($_POST['amnt']);

$sql="update procedures  set  pname='$pname',user='$user',amnt='$amnt' where id='$id'";
$result=$crud->execute($sql);
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='procedurelist.php';";
			print "</script>";
}
}
?>