<?php
include_once("Crud.php");

$crud = new Crud();
$id=$_GET['id'];
//getting id of the data from url
//$id = $crud->id;

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($id, 'ip_hosp_drug');
if($result){
	print "<script>";
			print "alert('Successfully Deleted ');";
			print "self.location='../pages/ot.php';";
			print "</script>";
}
?>