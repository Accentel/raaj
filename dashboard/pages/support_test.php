<?php
include('../db/connection.php');

echo $emp_id = $_REQUEST['emp_id']; 

   //$x="select a.age,a.gender,b.dname1,a.registerno,a.patientname,a.phoneno from patientregister as a,doct_infor as b, op_pat_dlt as d 
//where  d.doc_code=b.id and a.registerno=d.pat_regno and a.registerno='$emp_id'"; 
$x="SELECT  * FROM patientregister  WHERE registerno = '$emp_id'";
$consult=mysqli_query($link,$x);
while($r=mysqli_fetch_array($consult)){
	 $doctorname=  $r['doctorname'];
	 $pat_type = $r['pat_type'];
 	 $age=  $r['age'];
	 $gender=  $r['gender'];
	 $patientname=  $r['patientname'];
	 $phoneno=  $r['phoneno'];
}
?>
<?php
echo $data="|".$emp_id."|".$patientname."|".$age."|".$gender."|".$doctorname."|".$phoneno."|".$pat_type;
//."|".$maintfree2."|".$nursefee2."|".$icu; 
?>