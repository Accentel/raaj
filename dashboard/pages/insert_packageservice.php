<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("packagelist.php");

include_once("Validation.php");

//$crud = new Crud();
$validation = new Validation();

if(isset($_POST['submit1'])) {	
	$pname = $crud->escape_string($_POST['pname']);
	$user =$crud->escape_string($_POST['user']);
	$sname =$crud->escape_string(implode('',$_POST['sname']));
	
	if (empty($pname)) {
 $errorpname = "Please Enter Package Name";
       
    } else {

        $pname = $validation->test_input($pname);
    }
	
		
	// checking empty fields
	if($pname!= '' and $sname!='') {
		
    	$result = $crud->execute("INSERT INTO packageservice(pname,sname,user)VALUES('$pname','$sname','$user')");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='packageservicelist.php';";
			print "</script>";
		}
	}	
	
}
?>


	<?php if(isset($_POST['submit1'])) {	
			$pname=$_POST['pname'];
			$user=$_POST['user'];
			$procedure=implode(' ',$_POST['procedure']);
			$sq=mysqli_query($link,"INSERT INTO packageservice(pname,sname,user)VALUES('$pname','$procedure','$user')");
			if($sq){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='packageservicelist.php';";
			print "</script>";
		}
			}
			?>
</body>
</html>