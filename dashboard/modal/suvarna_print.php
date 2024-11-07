<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Raaj Hospital</title>


<script language="JavaScript" type="text/javascript">


function prnt(){
	
document.getElementById("prnt").style.display="none";
document.getElementById("cls").style.display="none";
window.print();
//window.close();
window.self.location='../pages/suvarna.php';
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

<style>
body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Tahoma";
}
.styled-button-2 {
	 background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    min-height: 28.7cm;
    padding: 1.5cm;
    margin: 1cm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 0.25cm;
    border: 0px red solid;
    height: 245mm;
	padding-top:0px;
	font:"Times New Roman", Times, serif;
	font-size:12px;
  
}

@page {
    size: A4;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
	
}

</style>
</head>

<body>
<div align="center" style="border:#CC6666">
								
          <input type="button" value="Print" id="prnt" class="styled-button-2" onclick="prnt();"/> 
		  <a href="../pages/suvarna.php"><input type="button" value="Close" id="cls" class="styled-button-2" onclick="closew();"/></a>
								</div>

<div align="center" style="border:#CC6666; " >
								
          <!--<input type="button" value="Print" id="prnt" class="styled-button-2" onclick="prnt();"/>
           <input type="button" value="Close" id="cls" class="styled-button-2" onclick="closew();"/>-->
								</div>
<div class="book"  >
<!--<div class="book">
    <div class="page">
        <div class="subpage">-->
        <?php 
include("../db/connection.php");
$id=$_GET['id'];

$sql=mysqli_query($link,"select * from `suvarna` where id='$id'");
$r=mysqli_fetch_array($sql);



?>




	

 <div class="page"  >
        <div class="subpage" style="margin-top:160px; height:300px;">
		
		<!--<div ><img src="logo.png"/></div>-->
	
	
<table width="75%" border="0" cellspacing="0" align="left" cellpadding="0" style="background:#FFFFFF; margin-left: -50px;">
	
<?php /*?><tr><td colspan="4"  align="center"><img src="images/majestic_reghead.png"  ></td></tr>
  <tr>
      <td colspan="2" style="border-bottom:0px solid #999999;padding-left: 20px;">
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr>
           
            <td colspan="1" width="50%"><div align="left"><b><?php echo $doctorname;  ?> , <?php echo $dsi1;  ?> </b></div></td>
			<td colspan="" width="50%" style="font-size:12px;"> For Appointment : 040-23521051, <?php echo $con_doct_mob;  ?></td></tr>
            <tr><td><?php echo $desc1;  ?></td><td><?php echo $stime; if($stime!=''){?>(<?php echo $wdays?>)<?php }?>
            
            <?php echo $etime; if($etime!=''){?>(<?php echo $edays?>)<?php }?>.
</td>
           
          </tr>
          <tr><td colspan="2"><hr /></td></tr><?php */?>
          
       
  <tr>
    <td colspan="2" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="" valign="top" align="left">
        
        
        
           <table width="100%" border="0" cellspacing="0" cellpadding="4"> <!--style="border:1px #BDD9E1 solid">-->

      <tr>
	  
        <td  valign="top" >
         
		
		<table width="100%" border="0" align="left" style="vertical-align:text-top" cellpadding="1" cellspacing="0" >
          
          <tr>
            <td colspan="4"></td>
             </tr>
          <!-- <tr>
         
            <td width="20%"><div align="left"><b>Bill No : </b> </div></td>
			<td ><?php echo $bill_num;  ?> &nbsp;&nbsp;&nbsp;</td>
            <td width="20%"><div align="left"></div></td>
			<td > </td>
            </tr>-->
          <tr>
         
            <td width="20%"><div align="left"><b> Name : </b> </div></td>
			<td ><?php echo $r['pname_type']?>.<?php echo $r['name'];  ?> </td>
            <td width="20%"><div align="left"><b>Date: </b></div></td>
			<td > <?php echo $r['date'];?></td>
            </tr>
          <tr>
           
            <td ><div align="left"><b>Gender/Age :</b> </div></td>
			<td><?php  echo $r['sex'];  ?>/<?php echo $r['age'];?> </td>
           <td  ><div align="left"><b>Mobile  : </b></div></td>
          <td><?php echo $r['contact'];  ?></td>
            </tr>
			
			  <tr>
           
            <td ><div align="left"><b>Date of Birth :</b> </div></td>
			<td><?php  echo $r['dob'];  ?> </td>
           <td  ><div align="left"><b>Address  : </b></div></td>
          <td><?php echo $r['addr'];  ?></td>
            </tr>
			 
		
            
			
         
			
        </table></td>
      </tr>
     <?php /*?> <tr><td align="center" style=" border-top: #000000 1px solid">
      <table width="100%" cellpadding="0" cellspacing="0" >
    
        <tr> <td width="33%"><div align="left"><b>Consultation.Fee :  </b> <?php echo $cons_fee+$hosp_fee ?></div> </td>
			
             <td    width="33%"><div align="left"><b>Total Fee : </b><?php echo $regfee+$cons_fee+$hosp_fee ?>.00</div> </td>
		 <td width="33%" ><div align="left"><b>Paid.Amt : </b><?php echo $regfee+$cons_fee+$hosp_fee ?>.00</div> </td>
			</tr>
            <tr height="10"></tr>
		<tr><td height="18" colspan="6"><b>Received By:</b><?php echo $authby ?></td><td valign="top"><div align="right"><b></b></div></td>
      </tr></table></td></tr>
    

	</td>
  </tr><?php */?>


        
</td></tr>   

</table>

</td></tr>
</table>

</table>
</table>
   </div> 
        </div>    
    </div>
    


</body>
</html>