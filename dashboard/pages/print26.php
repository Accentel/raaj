<?php include('../db/connection.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Header & Footer test</title>
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
    padding-left: 1.9cm;
	padding-right: 1.9cm;
	padding-bottom: 1.9cm;
	padding-top: 1.1cm;
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
	padding-top:320px;
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
.text-line {
        background-color: transparent;
        color: #000;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid red 1px;
        padding: 3px 10px;
		width:80px;
    }
	input[type="checkbox"]{
  width: 15px; /*Desired width*/
  height: 15px;; /*Desired height*/
  border-color:2px solid red;
  

}
</style>
</head>

<body>
<div align="center" style="border:#CC6666">
								
          <input type="button" value="Print" id="prnt" class="styled-button-2" onclick="prnt();"/> <a href="history.php"><input type="button" value="Close" id="cls" class="styled-button-2" onclick="closew();"/></a>
								</div>
<div class="book">
    <div class="page">
        <div class="subpage">
        <?php 
//include("config.php");
 $id=$_GET['id'];

$sql=mysqli_query($link,"select * from `patientregister` where registerno='$id' order by reg_id asc");
$r=mysqli_fetch_array($sql);
$cnt=mysqli_num_rows($sql);
$registerdate=date($r['registerdate']);
$date=date('Y-m-d');
$date1=date_create("$registerdate");
$date2=date_create("$date");
 $reg_date=date("Y-m-d", strtotime($registerdate));
?>
 <div align="center"> <b style="color:red"><?php echo $r['pname_type'];?>. <?php echo $r['patientname'];?> has came 
 <?php $diff = date_diff($date1,$date2);

//count days
echo ''.$diff->format("%a");?> Days.
 </b>
	 </div>
     <div align="center"> <b><?php echo $cnt?> VISITS</b>
	 </div>
	 <br/>
	 
	        <?php 
//include("config.php");
 $id=$_GET['id'];

$sql=mysqli_query($link,"select * from `patientregister` where registerno='$id' order by reg_id asc");
while($r=mysqli_fetch_array($sql)){
$cnt=mysqli_num_rows($sql);
$registerdate=date($r['registerdate']);
$date=date('Y-m-d');
$date1=date_create("$registerdate");
$date2=date_create("$date");
 $reg_date=date("Y-m-d", strtotime($registerdate));
?>
	 <fieldset border="1">
  <table width="100%"><tr><th><?php echo $b=date("d-m-Y", strtotime($registerdate));?></th><th>Dr.<?php echo $r['doctorname'];?></tr>
  <tr><th colspan="2"><hr></th></tr>
</table>  
<?php
  $s="select * from patient_summary where mrno='$id' and cdate='$reg_date'";
 
 
$t1=mysqli_query($link,$s) or die(mysqli_error($link));
$row=mysqli_fetch_array($t1);
 $id1=$row['id'];
		
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
	 $complaints = $row['complaints'];
				$clinicalsummary = $row['clinicalsummary'];
                $gyncology = $row['gyncology'];
                $gremarks = $row['gremarks'];
				$pastfamily = $row['pastfamily'];
				$remarks = $row['remarks'];
				$diagnosis = $row['diagnosis'];
				$meditation = $row['meditation'];
				$diet = $row['diet'];
?>

<table><tr><td><b>C/o </b></td><td>:</td><td><?php echo $complaints;?></td></tr>
<tr><td><b>Diagnosis</b>  </td><td>:</td><td><?php echo $diagnosis;?></td></tr>
<tr><td><b>Clincal Summary</b> </td><td>:</td><td><?php echo $clinicalsummary;?></td></tr>
<?php if($gyncology=='Yes'){?>
<tr><td><b>Gynocology</b> </td><td>:</td><td><?php echo $gyncology;?></td></tr>
<tr><td><b>Gynocology Remarks</b> </td><td>:</td><td><?php echo $gremarks;?></td></tr>
<?php }?>
<tr><td><b>Past Family</b> </td><td>:</td><td><?php echo $pastfamily;?></td></tr>

</table>


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

<table border="0" width="100%" cellpadding="0" cellspacing="0">
	 <tr><th colspan="6"><hr></th></tr>	
<tr>
<th style="width:10px;">SNO</th>
<th style="width:220px;">DRUG NAME</th>
<th style="width:30px;">QTY</th>
<th style="width:180px;">FREQUENCY</th>

<th style="width:230px;">TIME</th>
<th style="width:50px;">DURATION</th>


</tr>


<?php
$t=mysqli_query($link,"select * from pprescription1 where id1='$id1'") or die(mysqli_error($link));
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
<?php  $i++; }?>


</table>


<table width="100%">
 <tr><th colspan="2"><hr></th></tr>	
            <tr>
            <td><b>Procedure</b></td>
            <td><b>Duration</b></td>
            </tr>
            <?php	
			 $sd="SELECT * FROM pprocedure WHERE id1 = '$id1'";
				 $sql2=mysqli_query($link,$sd);
			
				//foreach($y2 as $key=>$row12){
				while($row12 = mysqli_fetch_array($sql2)){
				
				?>	
				<tr>
                <td><?php echo $row12['procedures'] ?></td><td><?php echo $row12['pvalue']; ?></td>
                </tr>
				
				<?php }  ?>
            </table>
			<div style="height:10px;"><hr /></div>
			<div style="height:80px;"><b>Diet:</b>&nbsp;&nbsp;<?php echo $diet; ?></div>
			<div style="height:80px;"><b>Meditation :</b>&nbsp;&nbsp;<?php echo $meditation; ?></div>
			<div style="height:20px;"><b>Result:&nbsp;&nbsp;</b><?php echo $remarks; ?></div>

</fieldset><br /><?php }  ?>
<div style="height:50px;"></div>



     </div> 
        </div>    
    </div>
    
</div>

</body>
</html>