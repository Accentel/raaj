<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/supportlist.php');
include('../db/packagelist.php');

//include('../db/clinical_list.php');
include("header.php");?>
<script>
function showHint5(str)
{
//var str=document.getElementById('mrno').value;
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
	
	document.getElementById("paname").value=strar[1];
	document.getElementById("age").value=strar[2];
	document.getElementById("gender").value=strar[3];
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search216.php?q="+str,true);
xmlhttp.send();
}

function show(str){
	
	//alert(str);
	if(str=="yes"){
		document.getElementById('gid').style.display="";
		
	}else{
		document.getElementById('gid').style.display="none";
	}
}

</script>

<script type="text/javascript">
   function funconce2k(str){
	//alert(str);
	if(str == "Yes"){
	
		
		document.getElementById("ayu").style.display='';
		document.getElementById("camp_type").style.display='';
		
	
		
	}else {
	
		document.getElementById("ayu").style.display='none';
		document.getElementById("camp_type").style.display='none';
		
		
	}
}
		</script>
<link rel="stylesheet" href="multiple-select.css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Prescription Form</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Prescription Form</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Prescription Form</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
								
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post">
                                        <div class="form-body">
										
                                        <div class="form-group row">
                                                <label class="control-label col-md-2">MR No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <!--<input type="text" name="mrno"  value="" id="mrno" placeholder="Enter MRNO" class="form-control mrno" required onChange="showHint5(this.value)"/> -->
													 
 
													<select name="mrno"  id="mrno"  class="form-control mrno"  onChange="showHint5(this.value)" required>
													<option value="">Select MR NO</option>
													<?php 
													
													$q="select distinct registerno,patientname  FROM   patientregister where doctorname='RAJSHRI SONI' order by reg_id  desc";
													$rt=mysqli_query($link,$q) or die(mysqli_error($link));
													while($r1=mysqli_fetch_array($rt)){
														?>
													<option value="<?php echo $r1['registerno']; ?>"><?php echo $r1['registerno']."(".$r1['patientname'].")"; ?></option>		<?php
													}
													?>
													
													</select>													

													
											<!--		 <input id="mrno" list=\"city1\" name="mrno" onChange="showHint5(this.value)" class="form-control mrno"   placeholder="Enter MRNO">
<datalist id=\"city1\" >

<?php 
$sql="select distinct registerno,patientname  FROM   patientregister where doctorname='RAJSHRI SONI' order by reg_id  desc ";  // Query to collect records
$r=mysqli_query($link,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($r)) {?>
<option value="<?php echo $r1['registerno']; ?>"><?php echo $r1['registerno']."(".$r1['patientname'].")"; ?></option>	
		<?php 											

//echo  "<option value='$row[registerno]'/>$row[patientname] </option>"; // Format for adding options 

}
////  End of data collection from table /// 

echo "</datalist>";?></datalist>-->



													 <input type="hidden" name="user" id="user" value="<?php echo $ses; ?>"/>
													 </div>
                                            
											<label class="control-label col-md-2">Patient Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="paname" data-required="1" id="paname"  placeholder="Enter Patient Name" class="form-control" required/> 
													
													</div>
                                            
											
											</div>
											
											
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="age"  value="" id="age" placeholder="Enter Age" class="form-control mrno"  /> 
													 
													 
													 </div>
                                            
											<label class="control-label col-md-2">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="gender" id="gender"  placeholder="Enter Gender" class="form-control" /> 
													
													</div>
                                            
											
											</div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" name="date"   id="date" value="<?php echo date('Y-m-d');  ?>" class="form-control mrno"  /> 
													 
													 
													 </div>
                                            
											
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">C/o
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                                    <input type="text" name="complaints" id="complaints"   placeholder="Enter Complaints" class="form-control" /> 
													
													</div>
                                            
											
											</div>
											
										<!--	<div class="form-group row">
                                                <label class="control-label col-md-2">Investigations
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                                    
													</div>
                                            
											
											</div>-->
											<input type="hidden" name="diagnosis" id="diagnosis"   placeholder="Enter Investigations" class="form-control" /> 
													
											<div class="form-group row">
                                                <label class="control-label col-md-2">Clinical Summary
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                                 <input type="text" name="clinicalsummary" id="clinicalsummary"  placeholder="Enter Clinical Summary" class="form-control" /> 
												</div>
                                            
											
											</div>
											
											
											
											<div class="form-group row">
                                                
                                                
                                            
											
                                                <div class="col-md-6">
                                                <table class="table table-bordered">
												<tr>
												<th colspan="2"> <b>Vital Signs </b></th>
												</tr>
												<tr>
												<td>B.P</td>
                                                <td><input type="text" name="bp"   id="bp"  class="form-control"  /></td>
                                            	</tr>
												
												<tr>
												<td>Sugar</td>
                                                <td><input type="text" name="sugar"   id="sugar"  class="form-control"  /></td>
                                            	</tr>
												
												<tr>
												<td>Thyriod</td>
                                                <td><input type="text" name="thyriod"   id="thyriod"  class="form-control"  /> </td>
                                            	</tr>
												
												<tr>
												<td>Weight</td>
                                                <td><input type="text" name="weight"   id="weight"  class="form-control"  /> </td>
                                            	</tr>
												
												<tr>
												<td>Nadi</td>
                                                <td><input type="text" name="nadi"   id="nadi"  class="form-control"  /></td>
                                            	</tr>
												
												</table>

												
												</div>
                                            
											<div class="col-md-6">
                                                
												<table class="table table-bordered">
									<tr>
									
									<td><b>Investigations</b></td>
									<td><b>Result</b></td>
									</tr>
									
									
									
									<tr>
									
									<td>
									<input type="text" class="form-control iname0" name="iname0" id="iname0" /></td>
									<td><input type="text" class="form-control iname0" name="ivalue0" id="ivalue0" /></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname1" id="iname1" /></td>
									<td><input type="text" class="form-control iname1" name="ivalue1" id="ivalue1" /></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname2" id="iname2" /></td>
									<td><input type="text" class="form-control ivalue2" name="ivalue2" id="ivalue2" /></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname3" id="iname3" /></td>
									<td><input type="text" class="form-control ivalue3" name="ivalue3" id="ivalue3" /></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname4" id="iname4" /></td>
									<td><input type="text" class="form-control ivalue4" name="ivalue4" id="ivalue4" /></td>
									</tr>
									
									
									
									</table>
												
												</div>
											</div>
											
											
											
											 <div class="form-group row">
                                                <label class="control-label col-md-2">Gynocology
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select  name="gynocology"   id="gynocology" class="form-control " onChange="show(this.value);" >
														<option value="">Select</option>
														<option value="yes">Yes</option>
														<option value="no">No</option>														
													</select> 
													 </div>
                                            
											
												</div>	
											
                                           <div id="gid" class="form-group row" style="display:none;">
											<label class="control-label col-md-2">Remarks
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    
												<input type="text" name="gvalue"   id="gvalue" class="form-control "  /> 													
													 
													 </div>
											</div>
										   
										   <div class="form-group row">
                                                <label class="control-label col-md-2">Past/Family
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                 <input type="text" name="pfamily" id="pfamily"   placeholder="Enter Past/Family" class="form-control" />
												<input type="hidden" name="cc" id="cc" value="<?php echo $cc; ?>"/>
												</div>
                                            
											
											</div>
											
											
											
											
											
											
											<div class="form-group row">
											<div class="col-md-12">
											<table class=" full-width" >
					                                      
					                                        <tr>
	<th>Drug Name</th>
	<th style="width:60px;">Qty</th>
	<th style="width:60px;">Dose</th>
	<th style="width:120px;">Frequency</th>
	<th style="width:150px;">Time </th>
	<th style="width:220px;">Duration</th>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname0" name="dname[]" id="dname0" /></td>

	<td><input type="text" class="form-control" name="qty[]" id="qty0" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose0" /></td>
	<td><select class="freequency0"  id="freequency0" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time0" id="time0" multiple validate="required:true" >
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration0" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname1" name="dname[]" id="dname1" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty1" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose1" /></td>
	<td><select  id="freequency1" class="freequency1" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time1" id="time1" multiple validate="required:true">
	
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration1" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname2" name="dname[]" id="dname2" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose2" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty2" /></td>
	<td><select  id="freequency2" class="freequency2" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time2" id="time2" multiple validate="required:true">
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration2" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname3" name="dname[]" id="dname3" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty3" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose3" /></td>
	<td><select  id="freequency3" class="freequency3" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time3" id="time3" multiple validate="required:true" >
	
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration3" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname4" name="dname[]" id="dname4" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty4" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose4" /></td>
	<td><select  id="freequency4" class="freequency4" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time4" id="time4" multiple validate="required:true" >
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration4" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname5" name="dname[]" id="dname5" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty5" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose5" /></td>
	<td><select  id="freequency5" class="freequency5" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time5" class="time5"   multiple validate="required:true">
	
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration5" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname6" name="dname[]" id="dname6" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty6" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose6" /></td>
	<td><select  id="freequency6" class="freequency6" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time6" class="time6" multiple validate="required:true" >
	
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration6" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname7" name="dname[]" id="dname7" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty7" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose7" /></td>
	<td><select  id="freequency7" class="freequency7" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time7" class="time7" multiple validate="required:true" >
	
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration7" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname8" name="dname[]" id="dname8" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty8" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose8" /></td>
	<td><select  id="freequency8" class="freequency8" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time8" class="time8" multiple validate="required:true" >
	
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration8" /></td>
	
	
	</tr>
	
	<tr>
	<td><input type="text" class="form-control dname9" name="dname[]" id="dname9" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty9" /></td>
		<td><input type="text" class="form-control" name="dose[]" id="dose9" /></td>
	<td>
	<select  id="freequency9" name="freequency[]" class="freequency9" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Evening">Evening</option>
	
	
	</select>
	
	
	
	</td>
	<td><select  name="time[]" id="time9" class="time9" multiple validate="required:true" >
	
	<option value="Before Food">Before Food</option>
	<option value="After Food">After Food</option>
	<!--<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>-->
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration9" /></td>
	</tr>
	</table>
		</div>
        </div>
		
		
		<div class="form-group row">
                                                <label class="control-label col-md-2"> Package
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                                <select name="pkg" id="pkg" class="form-control" onChange="funconce2k(this.value)" required>
												<option value="">Select Package</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
												</select>
												</div>
                                            
											
											</div>
		
		
		<div class="form-group row" id="ayu" style="display:none;" >
                                                <label class="control-label col-md-2">Select Package 
                                                    <span class="required">  </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                                <select name="pkg_name" id="pkg_name" class="form-control" >
												<option value="">Select Package Name</option>
												<?php	foreach ($result as $key => $res) { ?>
												<option value="<?php echo $res['pname'];?>"><?php echo $res['pname'];?></option>
												<?php }?>
												</select>
												</div>
                                            
											
											</div>
											<div class="form-group row"   id="camp_type" style="display:none;">
                                                <label class="control-label col-md-2">Select Procedure
                                                    <span class="required">  </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                               <select  name="procedure[]"  id="procedure" class=" procedure" multiple  >
	
		<?php
include('../db/procedurelist.php');
		foreach ($result as $key => $res) { ?>
												<option value="<?php echo $res['pname'];?>"><?php echo $res['pname'];?></option>
												<?php }?>
	</select>
												</div>
                                            
											
											</div>
		
 										<div class="form-group row" >
                                               <label class="col-md-4"><b>Procedure</b>
                                                    
                                                </label>
                                                 <label class="col-md-4"><b>Duration</b>
                                                    
                                                </label>
                                           										
											</div>
											
											
											  <div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname1" class="form-control pname1"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue1" class="form-control "  />
												
													 
													 </div>
                                            
												</div>	
												
											<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname2" class="form-control pname2"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue2" class="form-control "  />
												
													 
													 </div>
                                            
												</div>	
												
											<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname3" class="form-control pname3"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue3" class="form-control "  />
												
													 
													 </div>
                                            
												</div>		
												
												
												<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname4" class="form-control pname4"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue4" class="form-control "  />
												
													 
													 </div>
                                            
												</div>	
												
												
												<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname5" class="form-control pname5"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue5" class="form-control "  />
												
													 
													 </div>
                                            
												</div>	
												
												
												<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname6" class="form-control pname6"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue6" class="form-control "  />
												
													 
													 </div>
                                            
												</div>	
												
												
												
												<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname7" class="form-control pname7"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue7" class="form-control "  />
																									 </div>
                                            
												</div>	
												
												<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname8" class="form-control pname8"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue8" class="form-control "  />
																									 </div>
                                            
												</div>	
												
												<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname9" class="form-control pname9"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue9" class="form-control "  />
																									 </div>
                                            
												</div>	
												
												
												<div class="form-group row">
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname[]"   id="pname10" class="form-control pname10"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue[]"   id="pvalue10" class="form-control "  />
																									 </div>
                                            
												</div>	
												
												
												
												
												
												
												
												
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Food to be avoided
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="diet" id="diet"  placeholder="Food to be avoided" class="form-control" /> 
													
													</div>
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Yoga/Exercise
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="meditation" id="meditation"  placeholder="Yoga/Exercise" class="form-control" /> 
													
													</div>
                                            
											
											</div>
											
											
											
										   <div class="form-group row">
                                                <label class="control-label col-md-2">Result
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                 <input type="text" name="result" id="result"   placeholder="Enter Result" class="form-control" />
												</div>
                                            
											
											</div>
											
                                           
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                                    <a href="patientsummaryslist.php"><button type="button" class="btn btn-default">Cancel</button></a>
                                                </div>
                                            	</div>
                                        	</div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page container -->
        <!-- start footer -->
<?php include("footer.php");?>
 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>    
<script type="text/javascript">
$(function() {
    
    //autocomplete
    $(".mrnokk").autocomplete({
        source: "set9.php",
        minLength: 1
    });    

	for(var i=1;i<=7;i++){
    $(".vname"+i).autocomplete({
        source: "setd92.php",
        minLength: 1
    });    
	}
;})



//$(function() {
    //for(var i=1;i<=10;i++){
    //autocomplete
	
	$(".pname1").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
	$(".pname2").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
	$(".pname3").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
    $(".dname0").autocomplete({
        source: "setd91.php",
        minLength: 1
    }); 
	
	$(".pname4").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	$(".pname5").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	$(".pname6").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
	
	$(".pname7").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
	$(".pname8").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
	$(".pname9").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
	$(".pname10").autocomplete({
        source: "setd90.php",
        minLength: 1
    });
	
$(".dname1").autocomplete({
        source: "setd91.php",
        minLength: 1
    });

$(".dname2").autocomplete({
        source: "setd91.php",
        minLength: 1
    });

$(".dname3").autocomplete({
        source: "setd91.php",
        minLength: 1
    });

$(".dname4").autocomplete({
        source: "setd91.php",
        minLength: 1
    });

$(".dname5").autocomplete({
        source: "setd91.php",
        minLength: 1
    });
$(".dname6").autocomplete({
        source: "setd91.php",
        minLength: 1
    });
$(".dname7").autocomplete({
        source: "setd91.php",
        minLength: 1
    });$(".dname8").autocomplete({
        source: "setd91.php",
        minLength: 1
    });
$(".dname9").autocomplete({
        source: "setd91.php",
        minLength: 1
    });	
	
	
	$(".iname0").autocomplete({
        source: "iname.php",
        minLength: 1
    });	
	//}
	
//});
 </script>
	   <script src="multiple-select.js"></script>
	   

<script>

    $(function() {

        $('#freequency9').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#freequency1').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#freequency2').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#freequency3').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#freequency4').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		
		$('#freequency5').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#freequency6').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#freequency7').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#freequency8').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#freequency0').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#time0').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#time1').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#time2').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#time3').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#time4').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#time5').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#time6').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#time7').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#time8').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#time9').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		
		$('#supports').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		$('#procedure').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		
		$('#investigations').change(function() {

            console.log($(this).val());

        }).multipleSelect({

            width: '100%'

        });
		});
</script>
<script>
$(document).ready(function(){
$('#form_sample_1').on('submit', function(event){
  event.preventDefault();
  var mrno=$("#mrno").val();
  var paname=$("#paname").val();
  var age=$("#age").val();
  var gender=$("#gender").val();
  var complaints=$("#complaints").val();
  var cc=$("#cc").val();
  var diagnosis=$("#diagnosis").val();
  var clinicalsummary=$("#clinicalsummary").val();
  var diet=$("#diet").val();
  var meditation=$("#meditation").val();
  var result=$("#result").val();
  var date=$("#date").val();
  var user=$("#user").val();
  
  var bp=$("#bp").val();
  var sugar=$("#sugar").val();
  var thyriod=$("#thyriod").val();
  var weight=$("#weight").val();
  var nadi=$("#nadi").val();
  var iname0=$("#iname0").val();
  var iname1=$("#iname1").val();
  var iname2=$("#iname2").val();
  var iname3=$("#iname3").val();
  var iname4=$("#iname4").val();
  var ivalue0=$("#ivalue0").val();
   var ivalue1=$("#ivalue1").val();
   var ivalue2=$("#ivalue2").val();
   var ivalue3=$("#ivalue3").val();
   var ivalue4=$("#ivalue4").val();
    var gynocology=$("#gynocology").val();
	  var gvalue=$("#gvalue").val();
	    var pfamily=$("#pfamily").val();
		 var pkg=$("#pkg").val();
		  var pkg_name=$("#pkg_name").val();
		  var procedure=$("#procedure").val();
 
  var dataString='paname='+ paname + '&mrno=' + mrno+'&user='+ user + '&age=' + age+'&gender='+ gender+'&complaints='+complaints+'&diagnosis='+diagnosis+'&clinicalsummary='+clinicalsummary+'&diet='+diet+'&meditation='+meditation+'&result='+result+'&date='+date+'&gynocology='+gynocology+'&gvalue='+gvalue+'&family='+pfamily+'&bp='+bp+'&sugar='+sugar+'&thyriod='+thyriod+'&weight='+weight+'&nadi='+nadi+'&'+'&iname0='+iname0+'&'+'&iname1='+iname1+'&'+'&iname2='+iname2+'&'+'&iname3='+iname3+'&'+'&iname4='+iname4+'&'+'&ivalue0='+ivalue0+'&'+'&ivalue1='+ivalue1+'&'+'&ivalue2='+ivalue2+'&'+'&ivalue3='+ivalue3+'&'+'&ivalue4='+ivalue4+'&'+'&pkg='+pkg+'&'+'&pkg_name='+pkg_name+'&'+'&procedure='+procedure+'&';
  
  
  for(var i= 1;i< 10;i++){
	  
 dataString += "pname"+i+"="+ $('.pname'+i).val() +"&pvalue"+i+"="+ $('#pvalue'+i).val()+"&";
   
  }
  
    
  //document.write(cc);
  
  for(var i= 0;i< 10;i++){
	  
  dataString += "dname"+i+"="+ $(".dname"+i).val() +"&qty"+i+"="+ $("#qty"+i).val() +"&freequency"+i+"="+ $(".freequency"+i).val() +"&time"+i+"="+ $(".time"+i).val() +"&duration"+i+"="+ $("#duration"+i).val()+"&dose"+i+"="+ $("#dose"+i).val()+"&";
   
  }
  
  
  //exit;
  //alert(dataString);
  var form_data = $('#form_sample_1').serialize();
  $.ajax({
   url:"patientsummary_insert.php",
   method:"POST",
   data:dataString,
   success:function(data)
   {
	//$('.time0 option:selected').each(function(){
    // $(this).prop('selected', false);
    //});
	//$('.time1').multipleSelect('refresh');
	window.location.href = "patientsummaryslist.php";
   // alert(data);
	//window.reload();
   }
  });
 });
});
</script>
 
	    <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>