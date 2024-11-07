<?php //include('config.php');

session_start();

if($_SESSION['user'])

{

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

	<head>
	<?php
		//include("header.php");
	?>
<script language="JavaScript" type="text/javascript">
function prnt(){
document.getElementById("prnt").style.display="none";
document.getElementById("cls").style.display="none";
window.print();
window.close();
}
function closew(){
window.close();
}

function abc(){
	
//document.getElementById('tr1').style.display='none';
window.print();
window.close();
//document.getElementById('tr1').style.display='';
}
</script>


	</head>

	<body>

	
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#FFFFFF">
  <tr>
      <td colspan="2" style="border-bottom:1px solid #999999;padding-left: 20px;">
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr>
		   <?php
				include("../db/connection.php");
				
				$sql = mysqli_query($link,"select * from organization");
				if($sql)
				{
					$row = mysqli_fetch_array($sql);
					
					$orgname = $row['orgname'];
					$orgaddr = $row['address'];
					$orgphone = $row['phone'];
					$orgmobile = $row['mobile'];
					
				}
		   ?>
            <td> <div class="subpage" style="margin-top:100px; height:100px;"></div>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#FFFFFF">
                   <?php /*?> <tr>
                        <td align="center" style="font-size:24px;" colspan="6"><?php echo $orgname ?></td>
                    </tr>
                    <tr>
                        <td align="center" style="font-size:18px;" colspan="6"><?php echo $orgaddr ?>,</td>
                    </tr>
                    <tr>
                        <td align="center" style="font-size:18px;" colspan="6">Ph : <?php echo $orgphone ?>,<?php echo $orgmobile ?></td>
                    </tr><?php */?>
                    
                    <!--<tr><tr><td colspan="6"  align="center"><img src="images/majestic_reghead.png"  ></td></tr>-->
					 <tr>
                        <td align="center" style="font-size:24px;" colspan="6">Ward Medicines</td>
                    </tr>
					<div align="center"> 
                    <!--<img src="../img/raajtop.png" height="100" width="100%" />-->
                     <!--<img src="images/logo print.png"  width="50%" height="" />--></div>
                    <tr><td>&nbsp;</td></tr>
                </table>
            </td>
            </tr>
        </table>
            </td>
        </tr>
	<?php
			//include("config.php");

			$pno = $_REQUEST['id'];
			
			$sql= mysqli_query($link,"select * from ip_ward_drug where id='$pno'");
			if($sql)
			{
				$row = mysqli_fetch_array($sql);
				
				$adate = date('d-m-Y',strtotime($row['date1']));
				$name = $row['name'];
				$mrno = $row['mrno'];
				$age = $row['age'];
				$gender = $row['gender'];
				$addr = $row['address'];
				$paid =$row['paid'];
				
				$tot=$row['total_amt'];
				$bal=$row['bal'];
				$adjust=$row['adjust'];
				$round=$row['round'];
				$sub_total=$row['sub_total'];
				$recby=$row['recby'];
				$rec_no=$row['rec_no'];
				
				
				//$sql1 = mysql_query("select CONCE_NAME from concession_type where CONCE_CODE='$contype'");
				//if($sql1)
				//{
					//$row1=mysql_fetch_array($sql1);
					//$conname = $row1['CONCE_NAME'];
				//}
			}		
				
		?>
        
         <?php
		 
		 $sql1= mysqli_query($link,"SELECT * FROM `ip_pat_admit` where PAT_REGNO='$mrno'");
		 $r1=mysqli_fetch_array($sql1);
		 $PAT_NO=$r1['PAT_NO'];
		 
  /**
   * Created by PhpStorm.
   * User: sakthikarthi
   * Date: 9/22/14
   * Time: 11:26 AM
   * Converting Currency Numbers to words currency format
   */
$number = $paid;
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  $rupee= $result . "Rupees  Only." ;
 ?> 
    <tr colspan="2"><td height="20">&nbsp;</td> </tr>
  <tr>
    <td colspan="2" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="250" valign="top" align="center">
           <table width="100%" border="0" cellspacing="0" cellpadding="4"> <!--style="border:1px #BDD9E1 solid">-->

      <tr>
	  
        <td  valign="top" >
		
		<table width="100%" border="0" align="center" style="vertical-align:text-top" cellpadding="1" cellspacing="0" >
          
          <tr>
            <td colspan="4"></td>
             </tr>
         
          <tr>
         
            <td width="20%"><div align="left"><b>Mr No : </b> </div></td>
			<td ><?php echo $mrno ?></td>
            <td width="20%"><div align="left"><b>IP NO : </b></div></td>
<td ><?php if($rec_no!='') { echo $rec_no; } else { echo  $PAT_NO; } ?></td>
            </tr>
         
          <tr>
         
            <td width="20%"><div align="left"><b>Patient Name : </b> </div></td>
			<td ><?php echo $name ?></td>
            <td width="20%"><div align="left"><b> Date : </b></div></td>
			<td ><?php echo $adate ?></td>
            </tr>
          <tr>
           
            <td ><div align="left"><b>Age/Gender :</b> </div></td>
			<td><?php echo $age ?> / <?php echo $gender ?></td>
           <td  ><div align="left"><b> </b></div></td>
          <td></td>
            </tr>
			
	<tr><td colspan="4">	
     <table style="width:100%; border:1px solid;"><tr><td><strong>DRUG NAME</strong></td><td><strong>QTY</strong></td>
	 <td><strong>RATE</strong></td><td><strong>AMOUNT</strong></td></tr>
	 <tr><td colspan="4"><hr /></td></tr>
	 <?php $sq1=mysqli_query($link,"select * from ip_ward_drug1 where id1='$pno'");
	 while($r=mysqli_fetch_array($sq1)){?>
	 <tr><td><?php echo $r['drug_name'];?></td><td><?php echo $r['qty'];?></td><td><?php echo $r['rate'];?></td>
	 <td><?php echo $t=$r['amnt'];?></td></tr>
	 <?php $t1=$t+$t1;}?>
	  <tr><td colspan="4"><hr /></td></tr>
	 <!--<tr><td colspan="3" align="right"><strong>Total Amount : </strong></td><td><?php echo $t1;?></td></tr>
	  <tr><td colspan="" ><strong>Adjust : </strong><?php echo $adjust?></td><td colspan="" ><strong>Round : </strong>
	  <?php echo $round?></td>
	  <td colspan="2" ><strong>Grnad Total : </strong>
	  <?php echo $tot?></td></tr>-->
	  <tr>  <td colspan="2"><strong>Grand Total</strong> :<?php echo $tot;?></td>
	  <td colspan="2"><strong>Paid</strong> :<?php echo $paid;?></td>
	
	  </tr>
	 </table>
            
            
            
		<?php /*?>	
          <tr>
            <td class="label1" >&nbsp;</td>
			 <td class="label1" >&nbsp;</td>
            <td><div align="left"><b>Conce.Fee : </b> </div></td>
			<td><?php echo $consamt; ?></td>
            </tr>
          <tr>
            <td class="label1" >&nbsp;</td>
			<td class="label1" ><u><span style="color:#FF9999"></span></u></td>
            <td  ><div align="left"><b>Total Fee : </b></div></td>
			<td><?php echo (($amt+$mrcost)-$consamt); ?>.00</td>
            </tr><?php */?>
			<tr height="20"></tr>
            <tr>
            <td colspan="4" height="30"><div id="inwords"><b>Rupees  : <?php echo $rupee?><!--Validity for Registration Card Up to <?php echo $validity ?>--> </b></div> </td>
            </tr>
            
        </table></td>
      </tr>
      <!--<tr><td align="center" style=" border-top: #000000 1px solid"><table width="70%" cellpadding="0" cellspacing="0" >
        <tr height="20"></tr>
		<tr><td height="18"><b>Prepared By:</b><?php echo $recby ?></td><td valign="top"><div align="right"><b>Printed Date:</b><?php echo date('d-m-Y',strtotime("now"));?></div></td>
      </tr></table></td></tr>-->
    </table>
	</tr>
	</td>
  </tr>
      <tr>
          <td  colspan="3" align="right"><b>SIGNATURE &nbsp;&nbsp;</b></td>
      </tr>
  <tr><td >&nbsp;</td></tr>
	<tr>
          <td height="100" colspan="3" align="center"><input type="button" value="print" id="prnt" class="butt" onclick="prnt();"/> <input type="button" value="Close" id="cls" class="butt" onclick="closew();"/></td>
      </tr>
        </table>
		  

	</body>

</html>

<?php 

}else

{

session_destroy();

session_unset();

header('Location:login.php');

}

?>