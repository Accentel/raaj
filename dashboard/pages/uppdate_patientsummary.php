<?php
include('connection.php');
include_once("Crud.php");
$crud = new Crud();

if(isset($_POST['submit'])){
$pid=$_POST['pid'];
$mrno=$_POST['mrno'];
$user=$_POST['user'];
$pname=$_POST['pname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$date=date("Y-m-d", strtotime($_POST['date']));
		$date1=date("Y-m-d", strtotime($_POST['date1']));
		$reviewon=$_POST['reviewon'];
$complaints=$_POST['complaints'];
$clinicalsummary=$_POST['clinicalsummary'];
$gynocology=$_POST['gynocology'];
$gvalue=$_POST['gvalue'];
$family=$_POST['pfamily'];
$result=$_POST['result'];
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
	
echo $r="update patient_summary set mrno='$mrno',pname='$pname',age='$age',gender='$gender',cdate='$date',complaints='$complaints',clinicalsummary='$clinicalsummary',gyncology='$gynocology',gremarks='$gvalue',pastfamily='$family',remarks='$result',user='$user',iname0='$iname0',iname1='$iname1',iname2='$iname2',iname3='$iname3',iname4='$iname4',ivalue0='$ivalue0',ivalue1='$ivalue1',ivalue2='$ivalue2',ivalue3='$ivalue3',ivalue4='$ivalue4',pkg='$pkg',pkg_name='$pkg_name',pkg='$pkg',proced='$proced',sugar='$sugar',thyriod='$thyriod',bp='$bp',weight='$weight',nadi='$nadi',jdate='$date',reviewon='$reviewon'  where id='$pid'";

$q=mysqli_query($link,$r) or die(mysqli_error($link));
//echo $id=mysqli_insert_id($link);


//$c=count($_POST['vvalue']);


echo $d=11;

for($j=1;$j<$d;$j++){
     $pnameid=$_POST['pnameid'.$j];
    $pname=$_POST['pname'.$j];
    $pvalue=$_POST['pvalue'.$j];
    if($pvalue!=''){
      $sqlnew="select * from pprocedure where id='$pnameid'";
$result1=mysqli_query($link,$sqlnew);
 $rowcount=mysqli_num_rows($result1);
        if($rowcount>0)
        	echo $t="Update pprocedure set procedures='$pname',pvalue='$pvalue' where id='$pnameid'" ;
        	else
           echo $t="insert into pprocedure(procedures,pvalue,id1)values('$pname','$pvalue','$pid')" ;
        

        $r2=mysqli_query($link,$t) or die(mysqli_error($link));
    }
    
}


     $count=10;
	
	for($i=0; $i< $count;$i++){
		 echo $i;
	 echo  $dname=$_POST['dname'.$i];
	   //print_r($dname);
	   $qty=$_POST["qty".$i];
	   $freequency= $_POST["freequency".$i];
	   $duration=$_POST["duration".$i];
	  $dnameid=$_POST["dnameid".$i];
	     $time2=$_POST["time".$i];
		   $dose=$_POST["dose".$i];
		    if($dname!=''){
		$sqlnew1="select * from pprescription1 where id='$dnameid'";
$result11=mysqli_query($link,$sqlnew1);
 $rowcount1=mysqli_num_rows($result11);
        if($rowcount1>0)
		echo	  $ts="update pprescription1 set mrno='$mrno',drugname='$dname',qty='$qty',freequency='$freequency',duration='$duration',time='$time2',dose='$dose' where id='$dnameid'";
			  else
		echo	  $ts="insert into pprescription1(mrno,drugname,qty,freequency,duration,time,id1,dose)values('$mrno','$dname','$qty','$freequency','$duration','$time2','$pid','$dose')";
	
		$q1=mysqli_query($link,$ts) or die(mysqli_error($link));
		    }
		    
}

if($q){
    print "<script>";
    print "alert('Record Updated Successfully ');";
    print "self.location='patientsummaryslist.php';";
    print "</script>";
}


}else{

    $id=$crud->my_simple_crypt($_REQUEST['id'],'d');
    $r="select * from patient_summary where id='$id'";
//$r="insert into patient_summary(mrno,pname,age,gender,cdate,complaints,clinicalsummary,gyncology,gremarks,pastfamily,remarks,user)values('$mrno','$pname','$age','$gender','$date','$complaints','$clinicalsummary','$gynocology','$gvalue','$family','$result','$user')";
$q=mysqli_query($link,$r) or die(mysqli_error($link));
$row=mysqli_fetch_array($q);
$pid=$row['id'];
}

?>