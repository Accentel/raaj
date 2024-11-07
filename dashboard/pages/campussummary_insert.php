<?php 
include('../db/connection.php');
//if(isset($_POST['submit'])){
	$mrno=$_POST['mrno'];
	
	$paname=$_POST['paname'];
	$mrno=$_POST['mrno'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$diagnosis=addslashes($_POST['diagnosis']);
	$diet=addslashes($_POST['diet']);
	$meditation=addslashes($_POST['meditation']);
	$result=addslashes($_POST['result']);
	$date=$_POST['date'];
	$gynocology=$_POST['gynocology'];
	$gvalue=$_POST['gvalue'];
	$family=addslashes($_POST['family']);
	$clinicalsummary=addslashes($_POST['clinicalsummary']);
	$complaints=addslashes($_POST['complaints']);
	 $cc=$_POST['cc'];
	$user=$_POST['user'];
	echo $r="insert into campus_summary(cname,pname,age,gender,cdate,complaints,clinicalsummary,gyncology,gremarks,pastfamily,remarks,user,diet,meditation,diagnosis)
	values('$mrno','$paname','$age','$gender','$date','$complaints','$clinicalsummary','$gynocology','$gvalue','$family','$result','$user','$diet','$meditation','$diagnosis')";
$q=mysqli_query($link,$r) or die(mysqli_error($link));
 $id=mysqli_insert_id($link);
	
	 $count=10;
	
	for($i=0; $i< $count;$i++){
		 
	   $dname=$_POST['dname'.$i];
	   //print_r($dname);
	   $qty=$_POST["qty".$i];
	   $freequency= $_POST["freequency".$i];
	   $duration=$_POST["duration".$i];
	  
	     $time2=$_POST["time".$i];
		   
		if($dname!=''){
			echo  $ts="insert into cprescription1(mrno,drugname,qty,freequency,duration,time,id1)values('$mrno','$dname','$qty','$freequency','$duration','$time2','$id')";
		$q1=mysqli_query($link,$ts) or die(mysqli_error($link));
	   }else{
			
		}
	
	}
	
	for($i=0; $i< 7; $i++ ){
   
    $vname=$_POST['vname'.$i];
    $vvalue=$_POST['vvalue'.$i];
    if($vvalue!=''){
 echo $k="insert into cvital(vname,vvalue,id1)values('$vname','$vvalue','$id')";
$r1=mysqli_query($link,$k) or die(mysqli_error($link));
    }
}

$d=10;

for($j=1;$j<$d;$j++){
    $pname=$_POST['pname'.$j];
    $pvalue=$_POST['pvalue'.$j];
    if($pvalue!=''){
		echo $t="insert into cprocedure(procedures,pvalue,id1)values('$pname','$pvalue','$id')" ;
        $r2=mysqli_query($link,$t) or die(mysqli_error($link));
    }
    
}
	
	
	
	
	
	
	
	if($q1){
		
	echo $id;
	
	}
	
	
	
	
	
//}
?>