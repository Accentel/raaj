<?php
//include('../db/connection.php');
$ch = curl_init();
if(isset($_POST['Send']))
{
if(isset($_POST['chk1'])){
$cnt = count($_POST['chk1']);
if($cnt > 0){
for($i=0; $i<$cnt;$i++){
//$sname=$_POST['chk1'][$i];	
echo $pno=$_POST['chk1'][$i];	
//$clas=$_POST['clas'][$i];
//$sect=$_POST['sect'][$i];		
$msg1=$_POST['sms'];

$user="raajhospital";
$password="900276";
//$receipientno=trim($mobile);
//$receipientno=$pno;
$senderID="RAJHOS";   
//$msgtxt="Dear Sir,\n Bill NO - $bno, $pname Balance is - $bal and  paid amount Rs. $cdue and Remaining balance is Rs. $rbal and payment taken by $user1 "; 

$msg = urlencode($msg1);
curl_setopt($ch,CURLOPT_URL,  "http://sms.scubedigi.com/api.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$user&password=$password&to=$pno&from=$senderID&message=$msg");
  $buffer = curl_exec($ch);	



//$sq=mysql_query("INSERT INTO groupsms(class,section1,mesage,name,number,send_time) VALUES('$clas','$sect','$msg','$sname','$pno',now())");
}
}
//exit;
	 if($buffer){
			print "<script>";
			print "alert(' Successfully Sent');";
			print "self.location='camp_sms.php';";
			print "</script>";
				}
				



}
}
?>