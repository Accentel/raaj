<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?>
<?php include("header.php");?>
	
<script>
function calc(){
	var fee=document.getElementById('fee').value;
var hopshare=document.getElementById('hospitalshare').value/100;
//var doctshare=document.getElementById('doctorshare').value/100;
hamount=fee*hopshare;
htotal=fee-hamount;
document.getElementById('hamo').value=hamount;
}
</script>
<script>
function calc1(){
	var fee=document.getElementById('fee').value;
//var hopshare=document.getElementById('hospitalshare').value/100;
var doctshare=document.getElementById('doctorshare').value/100;
damount=fee*doctshare;
//dtotal=fee-hamount;
document.getElementById('doctoramount').value=damount;
}
</script>
<script>
function calc2(form){
	//var fee=document.getElementById('fee').value;
//var hopshare=document.getElementById('hospitalshare').value/100;
//var doctshare=document.getElementById('doctorshare').value/100;
//damount=fee*doctshare;
//dtotal=fee-hamount;
hamount=document.getElementById('hamo').value;
damount=document.getElementById('doctoramount').value;
//var number1 = form.hamo.value
// var number2 = form.doctoramount.value
tt=parseFloat(hamount)+parseFloat(damount);
document.getElementById('total').value=tt;
}
</script>

<script type="text/javascript">
tday  =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyear = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();
mnt=nmonth+1;

if(nyear<1000) nyear=nyear+1900;

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('intime').value=""+nhour+":"+nmin+":"+nsec+ap+"";
//document.getElementById('outtime').value=" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;

</script>
<script>
function showHint1(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	document.getElementById("pname").value=strar[1];
	document.getElementById("age").value=strar[2];
	if(strar[3] == "male"){
	document.getElementById("sex1").checked =true;
	}
	if(strar[3] == "female"){
	document.getElementById("sex2").checked =true;
	}
	document.getElementById("addr").value=strar[4];
	document.getElementById("mnum").value=strar[5];	
	document.getElementById("occ").value=strar[6];		
    }
  }
xmlhttp.open("GET","set100.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showHint2(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	document.getElementById("pname").value=strar[1];
	document.getElementById("age").value=strar[2];
	if(strar[3] == "male"){
	document.getElementById("sex1").checked =true;
	}
	if(strar[3] == "female"){
	document.getElementById("sex2").checked =true;
	}
	document.getElementById("addr").value=strar[4];
	document.getElementById("mnum").value=strar[5];	
	document.getElementById("occ").value=strar[6];		
    }
  }
xmlhttp.open("GET","set101.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showHint01(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("con_fee").value=strar[1];
	document.getElementById("con_doct_mob").value=strar[2];
	document.getElementById("total").value=strar[3];
	}
  }
xmlhttp.open("GET","set010.php?q="+str,true);
xmlhttp.send();
}
</script>

<script>
function showHint011(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("token").value=strar[1];
	}
  }
xmlhttp.open("GET","set13.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showHint012(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("token").value=strar[1];
	}
  }
xmlhttp.open("GET","set13.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showHint013(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("token").value=strar[1];
	}
  }
xmlhttp.open("GET","set13.php?q="+str,true);
xmlhttp.send();
}
</script>




<script>
function showHint01345(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("token1").value=strar[1];
	}
  }
xmlhttp.open("GET","setn13.php?q="+str,true);
xmlhttp.send();
}
</script>

<script>
function showHint022(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("ref_mob").value=strar[1];
	}
  }
xmlhttp.open("GET","set022.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showHint0222(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("ser_amt").value=strar[1];
	document.getElementById("total").value=strar[2];
	}
  }
xmlhttp.open("GET","set0222.php?q="+str,true);
xmlhttp.send();
}
</script>

<script type="text/javascript">
   function funconce2(str){
	//alert(str);
	if(str == "Yes"){
	
		//document.getElementById("card1").style.display='none';
		//document.getElementById("card2").style.display='none';
		document.getElementById("insu2").style.display='';
		document.getElementById("insu3").style.display='';
		document.getElementById("insu4").style.display='';
		document.getElementById("insu5").style.display='';
		document.getElementById("insu6").style.display='';
		document.getElementById("insu7").style.display='';
		
		//document.getElementById("card1").style.display='none';
		//document.getElementById("cardk").style.display='none';
		
	}else if(str == "No"){
		//document.getElementById("insu1").style.display='none';
	//	document.getElementById("conce_card").style.display='none';
		//document.getElementById("card2").style.display='none';
		//document.getElementById("cardk").style.display='';
		//document.getElementById("card1").style.display='';
		document.getElementById("insu2").style.display='none';
		document.getElementById("insu3").style.display='none';
		document.getElementById("insu4").style.display='none';
		document.getElementById("insu5").style.display='none';
		document.getElementById("insu6").style.display='none';
		document.getElementById("insu7").style.display='none';
		
		
	}
}
		</script>
		
		
		<script type="text/javascript">
   function funconce2k(str){
	//alert(str);
	if(str == "Ayurvedic"){
	
		
		document.getElementById("ayu").style.display='';
		document.getElementById("camp_type").style.display='';
		
	
		
	}else {
	
		document.getElementById("ayu").style.display='none';
		document.getElementById("camp_type").style.display='none';
		
		
	}
}
		</script>
 <?php

//$abc=$_GET['id'];

$y=date('y');
$s=mysqli_query($link,"select distinct (`registerno`) as reg,registerdate from patientregister");
while($r1=mysqli_fetch_array($s)){
$new=$r1['reg'];
}
$qs=mysqli_query($link,"select max(`reg_no`) as id from patientregister ");
$r2=mysqli_fetch_array($qs);
   $new1=$r2['id'];
 if($new1!=''){
	 
	 $output = explode("-",$new1);
	 $da=$output[count($output)-1];
 $reg1=$da+1;
$reg=("RH-$y-".($reg1));

 }else {
	$reg= ("RH-$y-".($new1+101));
 }


	
	$abc=mysqli_query($link,"select distinct max(reg_id)+0,registerdate from patientregister");
	$row1=mysqli_fetch_array($abc);
	//echo $row1[0]+1;
	$date=$row1['registerdate'];
	 //$dd=date("Y-m-d", strtotime("$date"));
	 
	
	//date('Y-m-d' strtotime($date));

if($abc){
	
	
}
else
{
echo "allredy exit";

}
//$ddd=date('Y-m-d');
//echo $date = strtotime("-1 day", $ddd);
 $date=date('Y-m-d', strtotime('-1 days'));
  $xxx="select * from patientregister where registerdate='$date' and pat_type='OP'";
$abcd=mysqli_query($link,$xxx);
 $cnt=mysqli_num_rows($abcd);
	//$row1=mysql_fetch_array($abc);
	//echo $row1[0]+1;
	//$date=$row1['registerdate'];
	//echo $dd=date("Y-m-d", strtotime("$date"));

?><?php 
 $xxx1="SELECT * FROM `validity_days`";
$abcd1=mysqli_query($link,$xxx1);
 //$cnt=mysql_num_rows($abcd);
	$row2=mysqli_fetch_array($abcd1);
	 $valid_days=$row2['valid_days'];
	  $valid=date('Y-m-d', strtotime("+$valid_days days"));

?>

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Appointment</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="book_appointment.php">Appointment</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Appointment</li>
                            </ol>
                        </div>
                    </div>
					
					<?php 
					
					$id=$_GET['id'];
					if($id!=''){
					
																	$sq=mysqli_query($link,"select * from asthama  where id='$id' ");
														$r=mysqli_fetch_array($sq);
												 $pname_type=$r['pname_type'];
												 $name=$r['pname'];
												 $addr=$r['address'];
												 $contact=$r['mobile'];
					}	
														$id1=$_GET['id1'];
														if($id1!=''){
														$sq=mysqli_query($link,"select * from suvarna  where id='$id1' ");
														$r=mysqli_fetch_array($sq);
														echo $pname_type=$r['pname_type'];
														 $name=$r['name'];
														 $addr=$r['addr'];
														 $contact=$r['contact'];
														}
					
					?>
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>PATIENT REGISTRATION</header>
                                    <button id = "panel-button3" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <!--<ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button3">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>-->
                                </div>
								
								<form name="form" method="post" action="../modal/patient_reg_insert.php">
                                
								
								<input type="hidden" name="opno"  value="<?php echo "OP".($row1[0]+1);?>"/>
<input type="hidden" name="ipno" value="<?php echo "IP".($row1[0]+1);?>"/>
<input type="hidden" name="ser" value="<?php echo $aname?>" />
<input type="hidden" name="authby" value="<?php echo $aname; ?>"/>
<?php $dt=date('y');
		 $d1=date('m');
		if($d1=='01'){$y=$dt-1;}
		if($d1=='02'){$y=$dt-1;}
		if($d1=='03'){$y=$dt-1;}
		
		if($d1=='04'){$y=$dt;}
		if($d1=='05'){$y=$dt;}
		if($d1=='06'){$y=$dt;}
		
		if($d1=='07'){$y=$dt;}
		if($d1=='08'){$y=$dt;}
		if($d1=='09'){$y=$dt;}
		
		if($d1=='10'){$y=$dt;}
		if($d1=='11'){$y=$dt;}
		if($d1=='12'){$y=$dt;}
		
		?>
								<input type="hidden" name="reg_no" value="<?php echo $new1?>" />
								<div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                        <div class="form-group">
	                                            <label><strong>New/Existing</label></strong>
<input type="radio" required="required" checked="checked" name="new" id="new" value="New"/> New 
<input type="radio" onclick="javascript:location.href='patientregister2.php'" required="required"  name="new" id="new" value="Existing"/> Existing</td>
	                                        

	                                        
 </div>				
											 <div class="form-group">
	                                            <label><strong>Registration Date :</strong></label>
												
												<table><tr><td>
												
												 <input name="ApplicationDeadline" id="date"  class="form-control"  type="text"  size="20"  required="required"
 value="<?php echo date('d-m-y'); ?>" readonly placeholder=""/></td><td>
												
												<input name="ApplicationDeadline1" id="intime" readonly="readonly"  value="<?php echo date('d-m-y'); ?>" type="text"  size="20"  class="form-control"  required="required"
 /></td></tr></table>
 
 </div>
											<div class="form-group">
	                                            <label>Patient Type </label><br />
												<input type="radio" required="required" name="type"  id="sex1" value="OP" onchange="showHint011(this.value)"  onclick="funconce1(this.value);"/>
 Out Patient <input type="radio" required="required" name="type" id="sex2" onchange="showHint012(this.value)" onclick="funconce1(this.value);" value="IP"/> In Patient
 <input type="radio" required="required" name="type" id="sex4" onchange="showHint013(this.value)" onclick="funconce1(this.value);" value="Lab"/> Lab
 
 <input type="radio" required="required" name="type" id="sex5" onchange="showHint013(this.value)" onclick="funconce1(this.value);" value="Physiotherapy"/> Physiotherapy

												
												
	                                        </div>
											<div class="form-group">
	                                            <label>Patient Name :</label>
												
												<table width="100%"><tr><td>
												
												<select name="pname_type" required class="form-control" >
												
												<option value="<?php echo $pname_type;?>"><?php echo $pname_type;?></option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Master">Master</option>
<option value="Baby">Baby</option>
<option value="B/O">B/O</option>
</select></td><td>
												
												<input type="text" class="form-control" value="<?php echo $name;?>"  name="pname" id="pname" required="required" /></td></tr></table>
 
 </div>
										
											
											
												<div class="form-group">
	                                            <label>Gender </label><br />
												<?php $sex=$r['sex'];
												if($sex=='male'){?>
	                                         <input type="radio" class="" required="required" checked name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
	                                        
												<?php } else if($sex=='female'){
													?>
												
	                                         <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" checked name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
	                                        <?php } else if($sex=='Others'){
													?>
											
												
	                                         <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" checked name="sex" id="sex3" value="Others"/> Others
	                                        
											<?php }?>
											
											</div>
											
											<div class="form-group">
	                                            <label>Patient Mobile</label>
	                                            <input type="text" class="form-control" value="<?php echo $contact;?>" name="mobile" id="mobile"  required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	                                        </div>
											<div class="form-group">
	                                            <label>Consult Doct Name</label>
	                                           <select name="doctorname" required id="doctorname" class="form-control"   onfocus="showHint01(this.value)" onmouseout="showHint01(this.value)"  onChange="showHint01345(this.value)"  onblur="showHint01345(this.value)">
<option value="">Select Doctor Name</option>
<?php 

$sq=mysqli_query($link,"select * from  doct_infor");
if($sq){
while($row=mysqli_fetch_array($sq)){

$rk=$row['dname1'];
$rk1=$row['id'];
?>
<option value="<?php echo $rk1; ?>"><?php echo $rk; ?></option>
<?php } } ?>
</select>
	                                        </div>
											
											
											<div class="form-group">
	                                            <label>Ref Doctor</label>
	                                          <select  name="ref_doc" id="ref_doc" class="form-control"   onChange="showHint022(this.value)">
<option value="">Select Referal Doctor</option>
<?php 

$sq=mysqli_query($link,"select * from  referal_doctor");
if($sq){
while($row=mysqli_fetch_array($sq)){

$ref_docname=$row['ref_docname'];
$refcode=$row['refcode'];
?>
<option value="<?php echo $refcode; ?>"><?php echo $ref_docname; ?></option>
<?php } } ?>

</select>
	                                        </div>
											
											<div class="form-group">
	                                            <label>Payment Type</label>
												<select name="payment_type" class="form-control" onChange="funconce(this.value);" required>
	<option value="Cash">Cash</option>
    
	<option value="Card">Card</option>
     <option value="Free">Free</option>
		<!--<option value="Bank">Bank</option>-->
        <!--<option value="Insurence">Insurence</option>-->
	</select>
	                                          
	                                        </div>
											<div class="form-group">
	                                            <label>If You have Insurence</label>
	                                         <select name="ins_type" class="form-control" onChange="funconce2(this.value);" >
	<option value="">Select Insurence Type</option>
     <option value="Yes">Yes</option>
	<option value="No">No</option>
		<!--<option value="Bank">Bank</option>-->
        <!--<option value="Insurence">Insurence</option>-->
	</select>
	                                        </div>
											
											
											
											<div class="form-group"  id="insu2" style="display:none;">
	                                            <label>Insurance Name </label>
	                                         <select  name="insutype_name" class="form-control" >
	<option value=""> -- Select -- </option>
<?php	$sq = mysqli_query($link,"select * from insurance order by ins_name ");
			  
			 
			  $tot=mysqli_num_rows($sq);
			  while($res=mysqli_fetch_array($sq)){
			 
			  $lid = $res['id'];
			  $locname=$res['ins_name'];?>
              <option value="<?php echo $locname?>"><?php echo $locname?></option><?php }?>
	
	</select>
	                                        </div>
                                            
                                   <div class="form-group"  id="insu4" style="display:none;">
	                                            <label>Package Amount </label>
	                                        <input type="text"    name="pkg_amt" id="pkg_amt" class="form-control"/>
	                                        </div>   
                                            
                                             <div class="form-group"  id="insu7" style="display:none;">
	                                            <label>Requested No</label>
	                                        <input type="text"    name="req_no" id="req_no" class="form-control"/>
	                                        </div>       
                                            
												<div class="form-group">
	                                            <label>Address</label>
	                                            <textarea  class="form-control" name="addr"  id="addr" ><?php echo $addr;?></textarea>
	                                        </div>
											
											
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
										
										<div class="form-group">
	                                            <label><strong>Appointment Type</label></strong>
												<select name="appoint_type" id="appoint_type" onChange="funconce2k(this.value);" required class="form-control">
												<option value="">Select</option>
												<option value="Ortho">Ortho</option>
												<option value="Ayurvedic">Ayurvedic</option>
												<option value="Genral">Genral</option>
												<option value="Specialist">Specialist</option>
												</select></div>
												
												
												<div class="form-group" id="camp_type" style="display:none;">
	                                            <label><strong>Camp Type</label></strong>
												<select name="camp_type" id="camp_type" class="form-control">
												<option value="Genral">Genral</option>
												<?php
          include('../db/campus_list.php');							
		foreach ($result as $key => $res) { ?>
												<option value="<?php echo $res['cam_name'] ?>"><?php echo $res['cam_name'] ?></option>
		<?php }?>
												</select></div>
												
										<table><tr><td>
                                        <div class="form-group">
                                            <label><strong>MR No :</strong></label>
											 <input type="hidden" class="form-control" name="rnum" id="rnum" value="<?php echo $reg;?>" readonly >
											
											<table><tr><td >
												
												 <input name="useee" id="date"  class="form-control"  type="text"  size="20"  required="required"
 value="<?php echo $reg;?>" readonly placeholder=""/></td><td id="ayu" style="display:none;"><strong>S.No: </strong> <?php $sq=mysqli_query($link,"select * from patientregister where opt_type='Ayurvedic'");
												$r=mysqli_fetch_array($sq);
												 $ayu_cnt=mysqli_num_rows($sq);
												echo $ay=$ayu_cnt+1;
												?>
												<input type="hidden" name="sno" value="<?php echo $ay?>">
												</td></tr></table>
											
											
											
	                                            
												
                                        </div>
												
										
										
										
										 <div class="form-group">
                                            <label>Patient ID :</label>
											
											
											
											 <input name="token" id="token" readonly="readonly"  class="form-control" type="text"  size="20"  required="required"
 />
	                                            
                                        </div>
										
										<div class="form-group">
	                                            <label><strong>Father/Hus Name:</strong></label>
												
												<table width="100%"><tr><td>
												
												<select name="rel"  class="form-control" >
<option value="">Relation</option>
<option value="Self">Self</option>
<option value="Father">Father</option>
<option value="Husband">Husband</option>
<option value="Mother">Mother</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Guardian">Guardian</option>
</select></td><td>
												
												<input type="text" class="form-control"  name="fname" id="fname"  /></td></tr></table>
 
 </div>
										
										
										
										 <div class="form-group">
                                            <label>Age</label>
	                                           <input type="text" class="form-control" value="<?php echo $r['age'];?>" name="age" id="age" required="required" />
                                        </div>
									
                                        
										
										<div class="form-group">
                                            <label>AAdhar Number</label>
											<input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="aadhar" id="aadhar"  />
                                           
											
                                        </div>
										
										
										
										<div class="form-group">
                                            <label>Consult Doct Mobile</label>
											<input type="text" class="form-control" name="con_doct_mob" id="con_doct_mob" />
                                           <input type="hidden" class="text" name="concession_type" id="concession_type"  value="card"/>
									   </div>
									   <div class="form-group">
                                            <label>Ref Doct Mobile</label>
											<input type="text" class="form-control" name="ref_mob" id="ref_mob" />
                                          
									   </div>
									   <div class="form-group">
                                            <label> Token Number</label>
												
											<input name="token1" id="token1" readonly="readonly"  class="form-control" type="text"  size="20"  required="required"
 />
											</div>
											
                                            <div class="form-group">
	                                            <label>Consultation Fee</label>
	                                          <input type="text"  name="con_fee"   id="con_fee" class="form-control"/>
	                                        </div>
                                            
                                            
									 
                                           <input type="hidden" required="required" value="0" name="fee" id="fee" class="form-control" onkeyup="calculateSum();"/>
									 
                                         
											<input type="hidden"   readonly="readonly"  name="total" id="total" class="form-control"/>
                                           
									   <div class="form-group"  id="insu3"  style="display:none;">
                                            <label>Policy No</label>
                                           <input type="text"   name="policy_no" id="policy_no" class="form-control"/>
									   </div>
                                       
                                        <div class="form-group"  id="insu5" style="display:none;">
	                                            <label>Request Amount  </label>
                                                <input type="text"   name="req_amt" id="req_amt" class="form-control"/>
	                                       
	                                        </div> 
                                            
                                            <div class="form-group"  id="insu6" style="display:none;">
	                                            <label>Approved Date  </label>
                                                <input type="date"   name="apr_date" id="apr_date" class="form-control"/>
                                                
	                                       
	                                        </div>
									   <div class="form-group">
                                            <label>Remarks </label>
                                            <textarea name="rmarks" class="form-control" id="rmarks" ></textarea>
									   </div>
									  
									   
									   
									   
									   
									   
										
										
                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Submit" name="submit">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='book_appointment.php'">Cancel</button>
                                                </div>
                                            	</div>
                                        	</div>
                            </div>
                        </div>
                    </div>
					
					</form>
					
					
					
              
            <!-- end page content -->
            <!-- start chat sidebar -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
	    <?php 

}else

{

session_destroy();

session_unset();

header('Location:../../index.php');

}

?>