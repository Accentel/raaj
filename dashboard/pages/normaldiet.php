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
		  <a href="../pages/book_appointment.php"><input type="button" value="Close" id="cls" class="styled-button-2" onclick="closew();"/></a>
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
if(isset($_POST['submit'])){
	
$id=$_POST['reg'];
}

$sql=mysqli_query($link,"select * from `patientregister` where registerno='$id'");
$r=mysqli_fetch_array($sql);


//$doct=$r['registerno'];
$doct1=$r['registerdate'];
//$doct2=$r['tknum'];
$did=$r['doctorname'];
$pname=$r['patientname'];
$fname=$r['gaurdianname'];
$sex=$r['gender'];
$age=$r['age'];
$mobile=$r['phoneno'];
$pat_type=$r['pat_type'];
//$aadhar=$r['aadar'];
$ref_doc=$r['ref_doc'];
//$ref_mob=$r['ref_mob'];
$doctorname=$r['doctorname'];
 $con_doct_mob=$r['con_doc_mob'];
$ref_doc_mob=$r['ref_doc_mob'];
$tokenno=$r['tokenno'];
$validity=$r['validity'];
$registerno=$r['registerno'];
$rel_type=$r['rel_type'];
$token1=$r['token_num'];
$cons_fee=$r['cons_fee'];
$total=$r['total'];
 $regfee=$r['registerfee'];
$authby = $r['auth_by'];
$phoneno=$r['phoneno'];
$bill_num=$r['bill_num'];
 $hosp_fee=$r['hosp_fee'];
 $reg_date=$r['date'];
 $pname_type=$r['pname_type'];
 $opt_type=$r['opt_type'];
 $sno=$r['s_no'];
  $dd="select dname1,dsi1,desc1,stime,etime,wdays,edays from doct_infor where dname1 = '$did'";
$docid = mysqli_query($link,$dd);
if($docid)
{
	$row1 = mysqli_fetch_array($docid);
	$doct3 = $row1['dname1'];
	$dsi1 = $row1['dsi1'];
	$desc1 = $row1['desc1'];
	$stime=$row1['stime'];
	$etime=$row1['etime'];
	$wdays=$row1['wdays'];
	$edays=$row1['edays'];

}

?>

<?php // echo  $no = '$no';
    $newtimestamp = strtotime($doct1. ' + 330 minute');//gets timestamp
    //convert into whichever format you need 
     $newdate = date('d-m-Y H:i:s', $newtimestamp);
//echo "Right now: " . $now_stamp;
//echo "5 minutes from right now: " . $expire_stamp;

?>


	

 <div class="page"  >
        <div class="subpage" style="margin-top:160px; height:300px;">
		
		<!--<div ><img src="logo.png"/></div>-->
	
	
<table width="75%" border="0" cellspacing="0" align="left" cellpadding="0" style="background:#FFFFFF; margin-left: -50px;">
	

          
       
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
			<td ><?php echo $pname_type?>.<?php echo $pname;  ?> </td>
            <td width="20%"><div align="left"><b>MR NO: </b></div></td>
			<td > <?php echo $registerno?></td>
            </tr>
          <tr>
           
            <td ><div align="left"><b>Gender/Age :</b> </div></td>
			<td><?php  echo $sex;  ?>/<?php echo $age?> </td>
           <td  ><div align="left"><b>Mobile  : </b></div></td>
          <td><?php echo $phoneno;  ?></td>
            </tr>
			
			
		 
			
         
			<tr><td><br /><br /><br /></td></tr>
        </table></td>
      </tr>
   


        
</td></tr>  


  </td></tr>


</table>

</td></tr>
</table>

</table>

 <form>
<p align="right" style="margin-right:70px;" >Date:<br/><br/>Age:<br/><br/>
Wt.:<input type="hidden" name="weight" id="weight"></p>
<h1 align="center">Normal Diet</h1>
<hr/>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td>EARLY MORNING<br/>6-00 to 7.00 a.m.</td>
<td>WATER</td>
<td>4-5 Glasses</td>
</tr>
<tr style="height:30px;"></tr>
<tr>
<td>7.30 to 8.30 a.m.<br/>BREAK FAST</td>
<td>Tea/Coffee/Milk<br/>Upma/Idly</td>
<td>1 Cup<br/>1 Cup</td>
</tr>
<tr style="height:30px;"></tr>
<tr>
<td>MID MORNING<br/>9-00 a.m to 10 a.m</td>
<td>Butter Milk<br/>Any Fruit</td>
<td>1 Glass<br/>1 Serving</td>
</tr>
<tr style="height:30px;"></tr>
<tr>
<td>LUNCH<br/>1-00 to 2-00 p.m.</td>
<td>Phulkas<br/>Rice<br/>Veg Curry<br/>Dal<br/>Curd<br/>Salad like <br/>Cucumber,Carrots.<br/>Beetroot,Green Leafy veg.</td>
<td>2 Small<br/>1 Cup<br/>1 Cup<br/>1 Cup<br/>1 Cup<br/>1 Cup</td>
</tr>
<tr style="height:30px;"></tr>
<tr>
<td>Evening Snacks<br/>4-00 to 5-00 p.m.</td>
<td>Tea/Coffee/Milk <br/>Sprouts</td>
<td>1 Cup<br/>1 Cup</td>
</tr>
<tr style="height:30px;"></tr>
<tr>
<td>Dinner<br/>7-00 to 8-00 p.m.</td>
<td>Phulkas <br/>Veg Curry<br/>Butter Milk<br/>Rice<br/>Dal<br/>Veg.Curry</td>
<td>2 Small<br/>2 Cups<br/>1 Cup<br/>2 Cups<br/>2 Cups<br/>1 Cup</td>
</tr>
<tr style="height:30px;"></tr>
<tr>
<td>BEFORE SLEEPING<br/>10.00 p.m.</td>
<td>Water</td>
<td>2 Glasses</td>
</tr>
</table>
</form>
     
</td></tr></table></table>
    


</body>
</html>