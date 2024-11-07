<?php include('../db/connection.php');
include('../db/Crud.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<?php
		//include("header.php");
	?>
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
	padding-top:10px;
	font:"Times New Roman", Times, serif;
	font-size:14px;
  
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

	<body style="margin-top:0px;">
 <div height="100" colspan="3" align="center"><input type="button" value="Print" id="prnt" class="butt" onclick="prnt();"/> <input type="button" value="Close" id="cls" class="butt" onclick="window.close();"/></div>
	<div class="book">
     <div class="page">
        <div class="subpage">
       
<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" style="background:#FFFFFF;" >

<tr><td colspan="2"><img src="../img/raajtop.png" style="width:100%; height:120px;"/>  </td></tr>
<tr><td colspan="2"> <h2 align="center" style="font-size:18px;"><b><u>Patient Summary</u></b></h2></td></tr>
 
  </table>
	<?php
			//include("config.php");
$crud = new Crud();
			$bno = $_REQUEST['id'];
			
			$ty="select * from patient_summary where id='$bno'";
			$t = $crud->getData($ty);
			//$sql= mysql_query("select  b.mrno,b.BillDate,b.phoneno,b.PatientName,b.Age,b.Sex,b.DoctorName,b.conce_type,b.ptype,b1.Total,b1.Discount,b1.NetAmount,b1.PaidAmount,b1.BalanceAmount,b1.time from bill b,bill1 b1 where b.BillNO=b1.BillNO and b.BillNO='$bno'");
			foreach($t as $key=>$row)
			{
				//$row = mysql_fetch_array($sql);
				$bdate = date('d-m-Y',strtotime($row['cdate']));
			    $patname = $row['pname'];
				$age = $row['age'];
				$mrno = $row['mrno'];
                $gender = $row['gender'];
                $complaints = $row['complaints'];
				$clinicalsummary = $row['clinicalsummary'];
                $gyncology = $row['gyncology'];
                $gremarks = $row['gremarks'];
				$pastfamily = $row['pastfamily'];
				$remarks = $row['remarks'];
				$diagnosis = $row['diagnosis'];
				$meditation = $row['meditation'];
				$diet = $row['diet'];
						
				$bp = $row['bp'];
				$sugar = $row['sugar'];
				$thyriod = $row['thyriod'];
				$weight = $row['weight'];
				$nadi = $row['nadi'];
				$iname0=$row['iname0'];
	$iname1=$row['iname1'];
	$iname2=$row['iname2'];
	$iname3=$row['iname3'];
	$iname4=$row['iname4'];
	$ivalue0=$row['ivalue0'];
	$ivalue1=$row['ivalue1'];
	$ivalue2=$row['ivalue2'];
	$ivalue3=$row['ivalue3'];
	$ivalue4=$row['ivalue4'];
			}		
				
		?>
    <table width="100%">
      
         <tr>
         <td style="padding-left:20px;"><div align="left">Mr No </div></td>
			<td style="padding-left:20px;"> : <b><?php echo $mrno ?></b></td>
            
            <td style="padding-left:20px;" width="15%"><div align="left">Date </div></td>
			<td style="padding-left:20px;" width="35%"> : <b><?php echo $bdate ?></b></td>
            </tr>
          <tr>
         
          <td style="padding-left:20px;" width="20%"><div align="left">Patient Name </div></td>
			<td style="padding-left:20px;"> : <b><?php echo $patname ?></b></td>
            
            <td style="padding-left:20px;"><div align="left">Age / Sex </div></td>
			<td style="padding-left:20px;"> : <b><?php echo $age ?> / <?php echo $gender ?></b></td>
           </tr>
		   <tr><td colspan="4"> <hr/></td></tr>
			</table>
			
		  <div style="height:80px;">C/O:&nbsp;&nbsp;<?php echo $complaints; ?></div>
		  <div style="height:80px;">Diagnosis:&nbsp;&nbsp;<?php echo $diagnosis; ?></div>
          <div style="height:80px;">Clincal Summary:&nbsp;&nbsp;<?php echo $clinicalsummary; ?></div>
		  
		  
		  
	
                                                
                                                
                                            
											
                                               
                                                <table  border="1" width="100%" cellpadding="0" cellspacing="0">
												<tr><th colspan="1"> <b># </b></th>
												<th colspan="1"> <b>Vital Signs </b></th>
												<th colspan="1"> <b>Investigations </b></th>
												<th colspan="2"> <b>Result </b></th>
												</tr>
												<tr>
												<td><b>B.P</b></td>
			<td><?php echo $bp; ?></td>
			<td><?php echo $iname0; ?></td>
			<td><?php echo $ivalue0; ?></td>
			</tr>
			
			<tr>
			<td><b>Sugar</b></td>
			<td><?php echo $sugar; ?></td>
			<td><?php echo $iname1; ?></td>
			<td><?php echo $ivalue1; ?></td>
			</tr>
			<tr>
			<td><b>Thyriod</b></td>
			<td><?php echo $thyriod; ?></td>
			<td><?php echo $iname2; ?></td>
			<td><?php echo $ivalue2; ?></td>
			</tr>
			<tr>
			<td><b>Weight</b></td>
			<td><?php echo $weight; ?></td>
			<td><?php echo $iname3; ?></td>
			<td><?php echo $ivalue3; ?></td>
			</tr>
			<tr>
			<td><b>Nadi</b></td>
			<td><?php echo $nadi; ?></td>
			<td><?php echo $iname4; ?></td>
			<td><?php echo $ivalue4; ?></td>
			</tr>
												
												</table>

												
											
                                            
										
										
		  
		  
		  
		  
		  
				<!--<div><b>Vital Signs</b> </div>
				<table width="500">
				
			<tr>
			<td><b>B.P</b></td>
			<td><?php echo $bp; ?></td>
			</tr>
			
			<tr>
			<td><b>Sugar</b></td>
			<td><?php echo $sugar; ?></td>
			</tr>
			<tr>
			<td><b>Thyriod</b></td>
			<td><?php echo $thyriod; ?></td>
			</tr>
			<tr>
			<td><b>Weight</b></td>
			<td><?php echo $weight; ?></td>
			</tr>
			<tr>
			<td><b>Nadi</b></td>
			<td><?php echo $nadi; ?></td>
			</tr>
			
			
				</table>-->
				
				
           <div>Gynocology &nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $gyncology; ?></div>
           <div style="height:80px;">Gynocology Remarks &nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $gremarks; ?></div>
           <div style="height:80px;">Past Family &nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $pastfamily; ?></div>
			
			
			Rx.
<table border="1" width="100%" cellpadding="0" cellspacing="0">
<tr>
<th style="width:10px;">SNO</th>
<th style="width:220px;">DRUG NAME</th>
<th style="width:30px;">QTY</th>
<th style="width:180px;">FREQUENCY</th>

<th style="width:230px;">TIME</th>
<th style="width:50px;">DURATION</th>


</tr>
<?php
 $y="select * from pprescription1 where id1='$bno'";
$t=mysqli_query($link,$y) or die(mysqli_error($link));
$i=1;
while($t1=mysqli_fetch_array($t)){
	$time=explode(",",$t1['time']);
?>
<tr >
<td style="height:20px;"><?php echo $i; ?></td>
<td><?php echo $t1['drugname']; ?></td>
<td><?php echo $t1['qty']; ?></td>
<td><?php echo $t1['freequency']; ?></td>

<td><?php foreach($time as $out) {
      echo $out."<br/>";
   } ?></td>
<td><?php echo $t1['duration']; ?></td>


</tr>
<?php $i++; } ?>


</table>
			
			
			
			
			
			
			
			
			
			
         
     
        
       <div id="footer_wrapper">
  <div id="footer_content">
  <!--  <p>24x7 Emergency: *Cardiac  *Neuro  *Paediatric  *General Surgery  *Ortho Poly Trauma Services Available</p>
    <hr />
    <p>Super Bazar,HUZURABAD-505 468,Dist.Karimnagar.*Cell:9441773007, 9959954108,8008036663</p>-->
  </div>
</div>

		
</div>
</div>






<div class="page">
        <div class="subpage">
       
<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" style="background:#FFFFFF;" >
<THEAD>
<tr><td colspan="2"><img src="../img/raajtop.png" style="width:100%; height:120px;"/>  </td></tr>

  </THEAD>
  </table>
			<div style="height:20px;"></div>
			
			<table width="400">
            <tr>
            <td><b>Procedure</b></td>
            <td><b>Duration</b></td>
            </tr>
            <?php	
				 $sql2="SELECT * FROM pprocedure WHERE id1 = '$bno'";
				$y2=$crud->getData($sql2);
				foreach($y2 as $key=>$row12){
				//while($row1 = mysql_fetch_array($sql1)){
				
				?>	
				<tr>
                <td><?php echo $row12['procedures'] ?></td><td><?php echo $row12['pvalue']; ?></td>
                </tr>
				
				<?php }  ?>
            </table>
			<div style="height:10px;"></div>
			<div style="height:80px;">Food to be avoided:&nbsp;&nbsp;<?php echo $diet; ?></div>
			<div style="height:80px;">Yoga/Exercise :&nbsp;&nbsp;<?php echo $meditation; ?></div>
			<div style="height:80px;">Result:&nbsp;&nbsp;<?php echo $remarks; ?></div>
       
	
         
     
        
       <div id="footer_wrapper">
  <div id="footer_content">
  <!--  <p>24x7 Emergency: *Cardiac  *Neuro  *Paediatric  *General Surgery  *Ortho Poly Trauma Services Available</p>
    <hr />
    <p>Super Bazar,HUZURABAD-505 468,Dist.Karimnagar.*Cell:9441773007, 9959954108,8008036663</p>-->
  </div>
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