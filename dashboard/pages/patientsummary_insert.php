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
	//$date=$_POST['date'];
	$date=date("Y-m-d", strtotime($_POST['date']));
	 	$date1=date("Y-m-d", strtotime($_POST['date1'])); 
		$reviewon=$_POST['reviewon'];
	$gynocology=$_POST['gynocology'];
	$gvalue=$_POST['gvalue'];
	$family=addslashes($_POST['family']);
	$clinicalsummary=addslashes($_POST['clinicalsummary']);
	$complaints=addslashes($_POST['complaints']);
	echo $cc=$_POST['cc'];
	$user=$_POST['user'];
	
	$bp=$_POST['bp'];
	$sugar=$_POST['sugar'];
	$thyriod=$_POST['thyriod'];
	$weight=$_POST['weight'];
	$nadi=$_POST['nadi'];
	
	$iname0=$_POST['iname0'];
	$ivalue0=$_POST['ivalue0'];
	
	$iname1=$_POST['iname1'];
	$ivalue1=$_POST['ivalue1'];
	
	$iname2=$_POST['iname2'];
	$ivalue2=$_POST['ivalue2'];
	
	$iname3=$_POST['iname3'];
	$ivalue3=$_POST['ivalue3'];
	
	$iname4=$_POST['iname4'];
	$ivalue4=$_POST['ivalue4'];
	$pkg=$_POST['pkg'];
	$pkg_name=$_POST['pkg_name'];
	$proced=$_POST['procedure'];
	$r="insert into patient_summary(mrno,pname,age,gender,cdate,complaints,clinicalsummary,gyncology,gremarks,pastfamily,remarks,user,diet,meditation,diagnosis,bp,sugar,thyriod,weight,nadi,iname0,iname1,iname2,iname3,iname4,ivalue0,ivalue1,ivalue2,ivalue3,ivalue4,pkg,pkg_name,proced,jdate,reviewon)
	values('$mrno','$paname','$age','$gender','$date','$complaints','$clinicalsummary','$gynocology','$gvalue','$family','$result','$user','$diet','$meditation','$diagnosis','$bp','$sugar','$thyriod','$weight','$nadi','$iname0','$iname1','$iname2','$iname3','$iname4','$ivalue0','$ivalue1','$ivalue2','$ivalue3','$ivalue4','$pkg','$pkg_name','$proced','$date','$reviewon')";
$q=mysqli_query($link,$r) or die(mysqli_error($link));
echo $id=mysqli_insert_id($link);
	
	 $count=10;
	
	for($i=0; $i< $count;$i++){
		 
	   $dname=$_POST['dname'.$i];
	   //print_r($dname);
	   $qty=$_POST["qty".$i];
	   $freequency= $_POST["freequency".$i];
	   $duration=$_POST["duration".$i];
	  
	     $time2=$_POST["time".$i];
		   $procedure=$_POST["dose".$i];
		if($dname!=''){
			  $ts="insert into pprescription1(mrno,drugname,qty,freequency,duration,time,id1,dose)values('$mrno','$dname','$qty','$freequency','$duration','$time2','$id','$procedure')";
		$q1=mysqli_query($link,$ts) or die(mysqli_error($link));
	   }else{
			
		}
	
	}
	
	

$d=10;

for($j=1;$j<$d;$j++){
    $pname=$_POST['pname'.$j];
    $pvalue=$_POST['pvalue'.$j];
    if($pvalue!=''){
	echo	$t="insert into pprocedure(procedures,pvalue,id1)values('$pname','$pvalue','$id')" ;
        $r2=mysqli_query($link,$t) or die(mysqli_error($link));
    }
    
}
	
	
	
	
	//exit;
	
	
	if($q1){
		
	echo $id;
	
	}
	
	
	
	
	
//}
?>