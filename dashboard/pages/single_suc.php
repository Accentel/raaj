<?php 

$ch = curl_init();


if(isset($_POST['add_doct'])){
				$pnum=$_POST['pnum'];
					$msg1=$_POST['msg'];
					
					
					
$user="raajhospital";
$password="900276";
//$receipientno=trim($mobile);
$receipientno=$mobile;
$senderID="RAJHOS";  
//$msgtxt="Dear $pname,\n Your User Name - $bno, Password - $mno, please click the below link and get the reports,\n www.soujanyadiagnostics.com/user.php "; 
$msg = urlencode($msg1);
curl_setopt($ch,CURLOPT_URL,  "http://sms.scubedigi.com/api.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$user&password=$password&to=$pnum&from=$senderID&message=$msg");
  $buffer = curl_exec($ch);					
					
//$msg = "Congratulations for Choosing Best and for being Associated with The Woods Valley.You are booking $room_type from $check_in to $check_out. Winning Regards from : http://thewoodsvalley.com";
			
//	$url = "http://sms.scubedigi.com/api.php?username=raajhospital&password=900276&to=$pnum&from=RAJHOS&message=".urlencode($msg); 
//$ret = file($url); 
if($buffer){
print "<script>";
			print "alert(' Successfully Sent');";
			print "self.location='single.php';";
			print "</script>";
				}
				}

?>				