<?php
include_once("Crud.php");

$crud = new Crud();

//getting id of the data from url
$id = $crud->my_simple_crypt($_GET['id'],'d');

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($id, 'patient_summary');
$result = $crud->delete2($id, 'pvital');
$result = $crud->delete2($id, 'pprocedure');
$result = $crud->delete2($id, 'pprescription1');
if($result){
	print "<script>";
			print "alert('Successfully Deleted ');";
			print "self.location='../pages/patientsummaryslist.php';";
			print "</script>";
}
?>