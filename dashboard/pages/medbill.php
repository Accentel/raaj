<?php
include("../db/connection.php");
$lr_id=$_REQUEST['lr_id'];

$rs=mysqli_query($link,"select customer_type from phr_salent_mast where lr_no='$lr_id' ");
while($rw = mysqli_fetch_array($rs))
{
	 $customer_type=$rw[0];
}

if($customer_type == "c"){
	 $cc="select CUST_NAME,sal_date,cust_name,Consultant_Name,auth_by,concession_type,bal,sr_bill_num,own_amnt,own_prd from 
	phr_salent_mast  where lr_no='$lr_id'";
	$ss=mysqli_query($link,$cc);
}
	
 else if($customer_type == "p"){
	  $cc="select CUST_NAME,sal_date,cust_name,Consultant_Name,auth_by,concession_type,bal,sr_bill_num,own_amnt,own_prd from 
	phr_salent_mast  where lr_no='$lr_id'";
	$ss=mysqli_query($link,$cc);
 } 
 
 else if($customer_type == "p1"){
	  $cc="select CUST_NAME,sal_date,cust_name,Consultant_Name,auth_by,concession_type,bal,sr_bill_num,own_amnt,own_prd from 
	phr_salent_mast  where lr_no='$lr_id'";
	$ss=mysqli_query($link,$cc);
 }
 else {
	 $a="select cust_name,sal_date,cust_name,Consultant_Name,auth_by,concession_type,conce_cardno,bal,sr_bill_num,own_amnt,own_prd from phr_salent_mast where lr_no='$lr_id'";
	$ss=mysqli_query($link,$a);
 }
 

while($rss = mysqli_fetch_array($ss))
{
  $custname=$rss[0];
$saledate=date('d-m-Y',strtotime($rss[1]));
$custname1=$rss[2];
$ConsultantName=$rss[3];
$authby=$rss[4];
$contype=$rss[5];
$bal=$rss['bal'];
$sr_bill_num=$rss['sr_bill_num'];
$own_amnt1=$rss['own_amnt'];
$own_prd1=$rss['own_prd'];
}

 $rest = substr("$custname", 0, 3); 
  $rest;
				if($rest=='RH-'){
					//$ctype="Out Patient";
					 $aa="Select a.patientname,a.registerno from patientregister a,`op_pat_dlt` b where
				 a.registerno=b.PAT_REGNO and a.registerno='$custname'";
				$res=mysqli_query($link,$aa);
				} else {
					//$ctype="In Patient";
				$res=mysqli_query($link,"Select a.patientname,a.registerno from patientregister a,`ip_pat_admit` b where a.registerno=b.PAT_REGNO and b.pat_no='$custname'");
				}


  //$xx=mysql_query("Select a.patientname from patientregister a,`ip_pat_admit` b where a.registerno=b.PAT_REGNO and b.pat_no='$custname'");
				  //$rs1=mysql_query($xx);
				  $r=mysqli_fetch_array($res);
				  $registerno=$r['registerno'];
				  $custname2=$r['patientname'];
				  
				  if($customer_type == "c"){
					  $custname2=$custname;
				  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Pharmacy </title>
<style type="text/css">
.label1{
	font-weight:bold;
}
.heading1{
	font-size:32px;
	text-align:center;
}
.heading2{
	font-size:18px;
	text-align:center;
    
}
.heading3{
	font-size:14px;
	text-align:center;
	font-family: arial;

}
</style>
<script type="text/javascript">
function prnt(){
document.getElementById("prnt").style.display="none";
document.getElementById("cls").style.display="none";
window.print();
//window.close();
window.self.location='../pages/salesentry_list.php';
}
function closew(){
//window.close();
window.self.location='../pages/salesentry_list.php';
}
function printp(){
window.print();
//window.close();
window.self.location='../pages/salesentry_list.php';
}
</script>
<style type="text/css" media="all">
table.table1{
	border-collapse:collapse;
}
table.table1, th.table1, td.table1{
border:1px solid #999999;
}
.cell_left{
	border-right:0px solid #999999;
	border-bottom:1px solid #999999;
}

</style>
</head>


<?php /*?><?php
		  
		  $sql="select *from  pharmacy";
		  $result=mysqli_query($link,$sql) or die(mysqli_error());
		  $i=1;
		  while($row=mysqli_fetch_array($result))
		  {
			  $orgname=$row['orgname'];
		  }
		  ?><?php */?>
          
       

<?php /*?><?php

$res=mysqli_query($link,"select * from  pharmacydetaisl");
while($row = mysqli_fetch_array($res)){
echo $HOSP_NAME=$row[1];
$phrno=$row[2];
$ADDR=$row[6];         
$PHONE1=$row[7];   
$PHONE2=$row[8];         
$dlno =$row[3];          
$tin =$row[4]; 
 }

?><?php */?>
<body style="margin-top:10px; font-style:normal; font-family:Verdana, Geneva, sans-serif;" >
<!--<div align="center" class="heading" style="font-size:22px;" ><?php  $HOSP_NAME ?></div>
                        <div align="center" class="heading"  style="font-size:18px;"><?php  $orgname ?></div>
                     <div align="center"  class="heading2" >Licence No. : TG/20/04/2015-8388,TG/20/04/2015-8389</div>
                     
                        <div align="center" class="heading" ><?php  $ADDR ?>. Ph : <?php  $PHONE1 ?></div>-->
                    
                    <div align="center"> 
                    <img src="../img/raajtop.png" height="100" width="100%" />
                     <!--<img src="images/logo print.png"  width="50%" height="" />--></div>  
                    
        
	
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="100%" border="0" style="font-size:12px;border-top:1px solid #999999;" cellspacing="4" cellpadding="0">
		<!--<tr height="5px"></tr>
		
		 <tr height="5px"></tr>-->
         
         
         <tr>
            <td style="padding-left:10px;" width="25%" align="left"><span class="label1"><!--Receipt No-->Reciept no</span> : <?php echo $sr_bill_num ?></td>
            <td width="20%" align="left"> </td>
            <td width="15%" ><div align="left"><span class="label1"></span>   </div></td>
            <td width="10%" align="left"> </td>
             <td width="35%" ><div align="left"><span class="label1"></span> <?php // $lr_id ?><?php //echo $saledate ?> </div></td>
            <td width="20%" align="left"> </td>
          </tr>
		<tr>
            <td style="padding-left:10px;" width="25%" align="left"><span class="label1"><!--Receipt No-->Patient Name</span> : <?php //echo $lr_id ?></td>
            <td width="20%" align="left"> </td>
            <td width="15%" ><div align="left"><span class="label1">Pat.No.</span> :  </div></td>
            <td width="10%" align="left"> </td>
             <td width="35%" ><div align="left"><span class="label1">Bill No.</span> : <?php echo $lr_id ?><?php //echo $saledate ?> </div></td>
            <td width="20%" align="left"> </td>
          </tr>
          <tr>
             <td style="padding-left:10px;"><div align="left"> <?php echo $custname2 ?> <?php //echo $custname2 ?></div></td>
            <td align="left"> </td>
            <td align="left"><?php echo $registerno?> <!--Doctor--> <?php //echo $ConsultantName ?></td>
            <td align="left"> </td>
            <td width="35%" ><div align="left"><span class="label1">Bill Date</span> : <?php echo $saledate ?> </div></td>
            <td width="20%" align="left"> </td>
           
          </tr>
		  <tr style="display:none">
             <td style="padding-left:10px;"><div align="left"><span class="label1">Payment Type</span></div></td>
            <td align="left"> : <?php echo $contype ?></td>
            <td align="left"><span class="label1">Card No.</span></td>
            <td align="left"> : <?php echo $cardno ?></td>
           
          </tr>
          <tr>
            <td colspan="8"><table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="border:1px solid #999999;background:#FFFFFF">
              <tr class="label1">
                <td width="50" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">S No. </td>
                 <!--<td width="55" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">Drug Type</td>-->
                <td width="185" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">Product Name</td>
                <td width="55" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">Batch No.</td>
             <!--   <td width="65" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">EXP. dt.</td>-->
				<td width="23" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">QTY.</td>
				<td width="45" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">Price</td>
				<td width="45" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">Value</td>
				<td width="72" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">Discount</td>
                  <td width="72" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">Amount</td>
                <td width="45" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">S-GST</td>
                <td width="45" align="left" style="border-bottom:1px solid #999999;background:#FFFFFF">C-GST</td>
              
              </tr>
                    
			  <?php
			  $nn=0;
			  $tot=0;
			  $discount=0;
			  $price=0;
			  
			     $sa="select  a.product_code,b.product_name,b.batch_no,b.mfg_date,b.exp_date,a.u_qty,a.u_rate,a.value,c.discount,c.total,a.disc,a.total,d.TYPE,a.gst,a.total as tt,c.own_prd,c.own_amnt,a.value from phr_salent_dtl as a,
			  phr_purinv_dtl as b,phr_salent_mast as c,`phr_prddetails_mast` as d where a.inv_id=b.inv_id and a.lr_no=c.lr_no and a.lr_no='$lr_id' and b.product_name=d.PRD_NAME";
			  $res1=mysqli_query($link,$sa);
			  while($row1 = mysqli_fetch_array($res1))
				{
				
				$discount=$row1[8];
				$tot=$row1[9];
				$price=($price+$row1[7]);
				$new_dis=$row1['value']-$row1['total'];
					$nn++;	  
				
			?>
              <tr >
                 <tr >
                <td align="left"><?php echo $nn ?>)</td>
               <?php /*?> <td align="left"><?php echo $row1['TYPE'] ?></td><?php */?>
                <td align="left"><?php echo $row1[1] ?></td>
                <td align="left"><?php echo $row1[2] ?></td>
	<?php /*?>	<td align="left"><?php echo date('d-m-Y',strtotime($row1[4])) ?></td><?php */?>
		<td align="left"><?php echo $row1[5] ?></td>
                <td align="left"><?php echo $row1[6] ?></td>
				  <td align="left"><?php echo $row1['value'] ?></td>
				<td align="left"><?php echo $new_dis; ?></td>
                <td align="left"><?php echo $row1[11] ?></td>
		<?php /*?><td align="left"><?php echo $row1[7] ?></td><?php */?>
                <td align="left"><?php  $tt=$row1['tt']; $gst=$row1['gst'];  $gst_amt1=$tt*$gst/100;
				echo $gst_amt=$gst_amt1/2;?>(<?php echo $gst/2?>%)
				 </td>
                 <td align="left"><?php echo $gst_amt; ?>(<?php echo $gst/2?>%) </td>
		
              </tr>
                <?php $new_dis1=$new_dis+$new_dis1;}  ?>
            </table></td>
          </tr>
		   
          <?php 
		  if($own_prd1=='Yes'){?>
		 
         
		  
		   <tr><td colspan="2">
          </td><td colspan="2" align="right" >
 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
              <strong >Other Medicine :</strong> </td><td colspan="1" align="" ><?php echo $own_amnt1; ?>
               
               </td></tr>
			    <tr><td colspan="2">
          </td><td colspan="2" align="right" >
 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
              <strong > Normal Medicine :</strong> </td><td><?php echo  $tot-$own_amnt1; ?>
               
               </td></tr>
			   
		  <?php }?>
		  
          <tr><td colspan="2">
          </td><td colspan="2" align="right" >
 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
              <strong >Total :</strong> </td><td><?php echo $tot+$new_dis1; ?>
               
               </td></tr>
			    <tr><td colspan="2">
          </td><td colspan="2" align="right" >
 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
              <strong >Discount :</strong> </td><td><?php echo $new_dis1; ?>
               
               </td></tr>
               
               <tr><td colspan="6"><hr /></td></tr><tr>
               <td colspan="2" align="left" >
 
               
               
              <strong >Total :</strong> <?php echo $tot ?>
               
               </td>
               <td colspan="2" align="left"><strong >Total Paid:</strong><?php echo $t=$tot+$bal ?></td>
               <td colspan="2" align="center"><strong>Balance :</strong><?php echo $variation = str_replace("-", "", $bal); // $bal?></td>
               </tr>
               <!-- <tr><td colspan="3">
          </td><td colspan="1" align="center" >
 
               
               
               &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
               </td><td colspan="1" align="left"> </td>
               <td colspan="1" align="left"></td>
               </tr>-->
               
                <?php
  /**
   * Created by PhpStorm.
   * User: sakthikarthi
   * Date: 9/22/14
   * Time: 11:26 AM
   * Converting Currency Numbers to words currency format
   */
$number = $t;
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
  $rupee= $result . "Rupees  " ;
 ?> 
             
               <td  colspan="6" align="left">
                 <hr />
               <strong>Rupees: </strong><?php echo $rupee?> Only.</td> </tr><tr>
                   
          <td  colspan="6" align="left">
                 <hr />
               <strong>Note: </strong> Items connot be taken back once sold <!--after 72 Hrs.  (Bill is Mandatatory)-->. <br />
               
               
               <!--2) Damaged / Fridze items will not be taken back, 3) Free Home delivery above Rs.500/- .--></td> 
		   <tr>
            <td  colspan="6">
          
		<table width="100%" align="left" style="font-size:10px;outline:1px solid black;">
		<tr >
            <td style="padding-left:10px;" width="10%" align="right"><span class="label1">Given by</span></td>
            <td width="25%" align="left"> : <?php echo $authby ?></td>
             <td width="15%" ><div align="left"><span class="label1"><!--24 HRS . Services--></span> </div></td>
            <td width="15%" ></td>
            <td width="15%" ><div align="right"><span class="label1">Order Date</span> </div></td>
            <td width="25%" align="left"> : <?php echo date('d-m-Y h:i:s'); ?></td>
          </tr>
	  </table>

	
	<div align="center" style="margin-top:2px;margin-bottom:2px; font-size:9px">We will pray for your good health and a speedy recovery.</div> 
	<div align="center"  style=" font-size:9px"> **** Thank You. <!--Visit Again.--> **** </div> 
		<!--<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#FFFFFF">
                    <tr height="30"></tr>
				<tr><td align="left"><b>GRN No. :</b><?php echo $phrno ?></td></tr>
                    <tr><td align="left"><b>D.L No.  :</b> <?php echo $dlno ?></td></tr>
                    <tr><td align="left"><?php if($tin == ""){ echo "";}else{ echo "<b>TIN No. : </b>".$tin;} ?></td></tr>
                    <tr><td>&nbsp;</td></tr>
		<tr align="right" style="font-size:18px;"><td>For <?php echo $HOSP_NAME ?></td></tr>
		</table>-->
		</td>
      </tr>
    </table>
	

<div align="center"><input type="button" value="Print" class="butt" id="prnt" onclick="prnt();"/>
<a href="salesentry_list.php">
 <input type="button" value="Close" class="butt" id="cls" /> </a></div>
</body>
</html>