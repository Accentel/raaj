<?php 
include('../db/connection.php');
//if(isset($_POST['submit'])){
	$mrno=$_POST['mrno'];
	
	$name=$_POST['pname'];
	//$supports=$_POST['supports'];
	//$clinicalhistory=addslashes($_POST['clinicalhistory']);
	
	$user=$_POST['user'];
	$q="insert into prescription_ayur(mrno,pname,clinicalhistory,supports,user)
	values('$mrno','$name','','','$user')"; 
	$res=mysqli_query($link,$q) or die(mysqli_error($link));
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
			  $ts="insert into prescription_ayur1(mrno,drugname,qty,freequency,duration,time,id1)values('$mrno','$dname','$qty','$freequency','$duration','$time2','$id')";
		$q1=mysqli_query($link,$ts) or die(mysqli_error($link));
	   }else{
			
		}
	
	}
	//exit;
	
	
	if($q1){
		
	echo $id;
	
	}
	
	
	
	
	
//}
?>