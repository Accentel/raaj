<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("Crud.php");
include_once("Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['submit'])) {	
	$pname = $crud->escape_string($_POST['pname']);
	$user =$crud->escape_string($_POST['user']);
	
	if (empty($pname)) {
 $errorpname = "Please Enter vitalsigns Name";
       
    } else {

        $pname = $validation->test_input($pname);
    }
	
		
	// checking empty fields
	if($pname != '') {
		
    	$result = $crud->execute("INSERT INTO vitalsigns(vname,user)VALUES('$pname','$user')");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='vitalsignslist.php';";
			print "</script>";
		}
	}	
	
}
?>
</body>
</html>
