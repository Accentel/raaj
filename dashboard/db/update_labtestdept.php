<?php
include_once("Crud.php");

$crud = new Crud();
$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM labdept where id='$id'";
$result = $crud->getData($query);



if(isset($_POST['update'])){

$id=$crud->my_simple_crypt($_POST['id'],'d');
$dname=$crud->escape_string($_POST['dname']);
$user=$crud->escape_string($_POST['user']);
$dcode=$crud->escape_string($_POST['dcode']);

$sql="update labdept  set  deptname='$dname',user='$user',deptcode='$dcode' where id='$id'";
$result=$crud->execute($sql);
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='labtestdeptlist.php';";
			print "</script>";
}
}
?>