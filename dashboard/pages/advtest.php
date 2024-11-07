<?php
include('../db/connection.php');

echo $emp_id = $_REQUEST['emp_id']; 

   //$x="select a.age,a.gender,b.dname1,a.registerno,a.patientname,a.phoneno from patientregister as a,doct_infor as b, op_pat_dlt as d 
//where  d.doc_code=b.id and a.registerno=d.pat_regno and a.registerno='$emp_id'"; 
$x="SELECT  a.patientname,a.age,a.gender,a.phoneno,b.ADMIT_DATE,b.PAT_NO FROM ip_pat_admit b,patientregister a WHERE a.registerno=b.PAT_REGNO AND b.PAT_REGNO = '$emp_id'";
$consult=mysqli_query($link,$x);
while($r=mysqli_fetch_array($consult)){
	 $PAT_NO=  $r['PAT_NO'];
	 $ADMIT_DATE = date('d/m/Y',strtotime($r['ADMIT_DATE']));
 	 $age=  $r['age'];
	 $gender=  $r['gender'];
	 $patientname=  $r['patientname'];
	 $phoneno=  $r['phoneno'];
}
?>
<?php
echo $data="|".$emp_id."|".$PAT_NO."|".$ADMIT_DATE."|".$patientname."|".$age."|".$gender."|".$phoneno;
//."|".$maintfree2."|".$nursefee2."|".$icu; 
?>