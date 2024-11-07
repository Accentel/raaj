<?php 
include('../db/Crud.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<?php
		include("header.php");
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
    padding-top:0px;
	 padding-bottom: 1.5cm;
	  padding-left: 1.5cm;
	   padding-right: 1.5cm;
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
	padding-top:42px;
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
								
          <input type="button" value="Print" id="prnt" class="styled-button-2" onclick="prnt();"/> <a href="dischargesummarylist.php"><input type="button" value="Close" id="cls" class="styled-button-2" onclick="closew();"/></a>
								</div>
<div class="book">
    <div class="page">
        <div class="subpage">
        <?php 
$crud = new Crud();
$bno = $crud->my_simple_crypt($_REQUEST['id'],'d');
$k="select * from  adddischarge where  id='$bno'";
$t = $crud->getData($k);
foreach($t as $key=>$r){
$id1=$r['id'];
$mrno=$r['mrno'];
$patno=$r['patno'];
$pname=$r['pname'];
$relation=$r['relation'];
$age=$r['age'];
$sex=$r['sex'];
$admit1=$r['admit'];
$admit=date('Y-m-d',strtotime($admit1));
$discharge1=$r['discharge'];
$discharge=date('Y-m-d',strtotime($discharge1));
$surgery1=$r['surgery'];
$surgery=date('Y-m-d',strtotime($surgery1));
$ward=$r['ward'];
$addr=$r['addr'];
$doctor=$r['doctor'];
$clinicalsummary=$r['clinicalsummary'];
$treatsummary=$r['treatsummary'];
$pulse=$r['pulse'];
$pulse1=$r['pulse1'];
$bp=$r['bp'];
$bp1=$r['bp1'];
$temperature=$r['temperature'];
$temperature1=$r['temperature1'];
$repository=$r['repository'];
$repository1=$r['repository1'];
$heart=$r['heart'];
$heart1=$r['heart1'];
$lungs=$r['lungs'];
$lungs1=$r['lungs1'];
$pa=$r['pa'];
$pa1=$r['pa1'];
$cns=$r['cns'];
$cns1=$r['cns1'];
$localexamination=$r['localexamination'];
$localexamination1=$r['localexamination1'];

$suggestions=$r['suggestions'];
$reviewdate=$r['reviewdate'];
$finaldiagnosis=$r['finaldiagnosis'];
$invgreport=$r['invgreport'];
			}?>
<div><img src="../img/raajtop.png" style="width:100%; height:120px;"/>  </div>
        <table    border="0"  cellspacing="10">
        <tr>
<td><strong>UMR No</strong>  : <?php echo $mrno;  ?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><strong>Pat No</strong> : <?php echo $patno;  ?> </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><strong>Pt.Name</strong> : <?php echo $pname;  ?> </td>
</tr>

<tr>
<td><strong>Name</strong> : <?php echo $relation;  ?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><strong>Age/Gender </strong>: <?php  echo $age."/". $sex."&nbsp;&nbsp;";?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><strong>Consult Dr. Name</strong>  : <?php echo $doctor;  ?></td>
</tr>

<tr>
<td><strong>Admit Date</strong>  : <?php echo $admit;  ?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><strong>Dicharge Date</strong>  : <?php echo $discharge;  ?></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><strong>Address</strong>  : <?php echo $addr;  ?></td>
</tr>
<tr>

</tr>
</table>
<hr/>
<h3 align="center">Discharge Summary</h3>
 <table width="100%" align="left">
       
        <tr>
        <th style="width:150px;">Final Diagnosis</th>
        <th>:</th>
        <td><?php echo $finaldiagnosis ?></td>
       </tr>
       <tr>
        <th>Clinical Summary</th>
        <th>:</th>
        <td><?php echo $clinicalsummary; ?></td>
       </tr>
       <tr>
        <th>Treatment Summary</th>
        <th>:</th>
        <td><?php echo $treatsummary; ?></td>
       </tr>
       </table>
   <h3 align="center">Vitals Signs</h3>
        <table width="100%">
        <tr>
        <th >At The Time of Admission</th>
       
        <th>At The Time of Discharge</th>
        </tr>
        
        
        
         <tr>
        <td >
        <table>
        <tr>
        <th>Pulse Rate</th>
        <td><?php echo $pulse; ?> beat/min</td>
        </tr>
        
        <tr>
        <th>BP</th>
        <td><?php echo $bp; ?> mmHg</td>
        </tr>
        <tr>
        <th>Temperature</th>
        <td><?php echo $temperature; ?> <sup>0</sup>F</td>
        </tr>
        <tr>
        <th>Respiratory Rate</th>
        <td><?php echo $repository; ?> /min</td>
        </tr>
        
         <tr>
        <th>Heart</th>
        <td><?php echo $heart; ?></td>
        </tr>
        
        <tr>
        <th>Lungs</th>
        <td><?php echo $lungs; ?></td>
        </tr>
        <tr>
        <th>P/A</th>
        <td><?php echo $pa; ?></td>
        </tr>
        <tr>
        <th>CNS</th>
        <td><?php echo $cns; ?></td>
        </tr>
         <tr>
        <th>Local Examination Findings</th>
        <td><?php echo $localexamination; ?></td>
        </tr>
        
        
        </table>
        
        </td>
         <td>
         
         <table>
         <tr>
        <th>Pulse Rate</th>
        <td><?php echo $pulse1; ?> beat/min</td>
        </tr>
        
        <tr>
        <th>BP</th>
        <td><?php echo $bp1; ?> mmHg</td>
        </tr>
        <tr>
        <th>Temperature</th>
        <td><?php echo $temperature1; ?> <sup>0</sup>F</td>
        </tr>
        <tr>
        <th>Repository Rate</th>
        <td><?php echo $repository1; ?> /min</td>
        </tr>
        
         <tr>
        <th>Heart</th>
        <td><?php echo $heart1; ?></td>
        </tr>
        
        <tr>
        <th>Lungs</th>
        <td><?php echo $lungs1; ?></td>
        </tr>
        <tr>
        <th>P/A</th>
        <td><?php echo $pa1; ?></td>
        </tr>
        <tr>
        <th>CNS</th>
        <td><?php echo $cns1; ?></td>
        </tr>
         <tr>
        <th>Local Examination Findings</th>
        <td><?php echo $localexamination1; ?></td>
        </tr>
        <tr>
        <th>Investigations Report</th>
        <td><?php echo $invgreport; ?></td>
        </tr>
        </table>
        
         
         
         </td>
        
        </tr>
         
        </table>
		
		<h3 align="center">Discharge Medical Advised</h3>
       <table border="1" cellpadding="0" cellspacing="0" width="100%">
         
        <tr>
        <th>SNo</th>
        <th>Medical Type</th>
        <th>**Drug Name</th>
         <th>*Generic</th>
        <th>Dosage Time</th>
        <th>Route</th>
        <th>Days</th>
         <th>Quantity</th>
          <th>Indication</th>
        </tr>
         <?php
					   $p="select * from dischargemedical where mrno='$mrno' ";
					  $t = $crud->getData($p);
					  $i=1;
					   foreach($t as $key=>$r){
						   
					    
					    ?>
					   <tr>
                       <td><?php echo $i ?></td>
                       <td><?php echo $r['mtype'] ?></td>
                       <td><?php echo $r['mname'] ?></td>
                       <td><?php echo $r['generic'] ?></td>
					   <td ><?php echo $r['dosagetime'] ?></td>
                        <td ><?php echo $r['drugadmin'] ?></td>
                         <td ><?php echo $r['days'] ?></td>
						 <td ><?php echo $r['qty'] ?></td>
                         <td ><?php echo $r['indication'] ?></td>
						
						</tr>
                        <?php
						
						$i++;
						 }?>
                        
                        <tr>
        
        </table>     
        
        
              
        <table width="100%" align="left">
       
        <tr>
        <th>Other Procedures Adviced/Suggestions </th>
        <th>:</th>
        <td><?php echo $suggestions; ?></td>
       </tr>
      
       
       
       <tr>
        <th>Review Date</th>
        <th>:</th>
        <td><?php echo $reviewdate; ?></td>
        </tr>
             
        </table>
        
        </div> 
        </div>   
       
    </div>
    
</div>
</body>
</html>
<?php 

}else
{
session_destroy();
session_unset();
header('Location:index.php');
}
?>