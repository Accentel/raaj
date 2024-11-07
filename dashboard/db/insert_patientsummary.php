<?php
include('connection.php');
if(isset($_POST['submit'])){
echo 'hi';
$mrno=$_POST['mrno'];
$user=$_POST['user'];
$pname=$_POST['pname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$complaints=$_POST['complaints'];
$clinicalsummary=$_POST['clinicalsummary'];
$gynocology=$_POST['gynocology'];
$gvalue=$_POST['gvalue'];
$family=$_POST['family'];
$result=$_POST['result'];
$r="insert into patient_summary(mrno,pname,age,gender,cdate,complaints,clinicalsummary,gyncology,gremarks,pastfamily,remarks,user)values('$mrno','$pname','$age','$gender','$date','$complaints','$clinicalsummary','$gynocology','$gvalue','$family','$result','$user')";
$q=mysqli_query($link,$r) or die(mysqli_error($link));
echo $id=mysqli_insert_id($link);


//$c=count($_POST['vvalue']);

for($i=0; $i<count($_POST['vvalue']); $i++ ){
   
    $vname=$_POST['vname'][$i];
    $vvalue=$_POST['vvalue'][$i];
    if($vvalue!=''){
 $k="insert into pvital(vname,vvalue,id1)values('$vname','$vvalue','$id')";
$r1=mysqli_query($link,$k) or die(mysqli_error($link));
    }
}

$d=count($_POST['pvalue']);

for($j=0;$j<$d;$j++){
    $procedures=$_POST['procedures'][$j];
    $pvalue=$_POST['pvalue'][$j];
    if($pvalue!=''){
        $r2=mysqli_query($link,"insert into pprocedure(procedures,pvalue,id1)values('$procedures','$pvalue','$id')") or die(mysqli_error($link));
    }
    
}


if($q){
    print "<script>";
    print "alert('Record Inserted Successfully ');";
    print "self.location='patientsummaryslist.php';";
    print "</script>";
}


}

?>