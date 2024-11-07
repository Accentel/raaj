<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/uppdate_patientsummary.php');
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
	
	document.getElementById("pname").value=strar[1];
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
                                <div class="page-title">Patient Summary Form</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Patient Summary Form</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Patient Summary Form</header>
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
                                                    <input type="text" name="mrno"  value="<?php echo $row['mrno']; ?>" id="mrno" placeholder="Enter MRNO" class="form-control mrno" required onChange="showHint5(this.value)"/> 
													 
													 <input type="hidden" name="user" id="user" value="<?php echo $ses; ?>"/>
                                                     <input type="hidden" name="pid" id="pid" value="<?php echo $pid; ?>"/>
													 </div>
                                            
											<label class="control-label col-md-2">Patient Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4"> 
                                                    <input type="text" name="pname" data-required="1" id="pname" value="<?php echo $row['pname']; ?>"  placeholder="Enter Patient Name" class="form-control" required/> 
													
													</div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="age"  value="<?php echo $row['age']; ?>" id="age" placeholder="Enter Age" class="form-control mrno"  /> 
													 
													 
													 </div>
                                            
											<label class="control-label col-md-2">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="gender" id="gender"  value="<?php echo $row['gender']; ?>"  placeholder="Enter Gender" class="form-control" /> 
													
													</div>
                                            
											
											</div>

                                            <div class="form-group row">
                                                 <label class="control-label col-md-2">Join Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" name="date1" required  id="date1" value="<?php echo $row['jdate'];  ?>" class="form-control mrno"  /> 
													 
													 
													 </div>
                                                <label class="control-label col-md-2">Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="date"   id="date" value="<?php echo $row['cdate'];  ?>" class="form-control mrno"  /> 
													 
													 
													 </div>
                                            
											
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">C/o
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                    <textarea name="complaints" id="complaints"  rows="5" placeholder="Enter Complaints" class="form-control" ><?php echo $row['complaints'] ?></textarea> 
													
													</div>
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Clinical Summary
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                 <textarea name="clinicalsummary" id="clinicalsummary"  rows="5" placeholder="Enter Clinical Summary" class="form-control" ><?php echo $row['clinicalsummary']; ?></textarea> 
												</div>
                                            
											
											</div>
											
										
    			
											
                                               <?php 

												$r=mysqli_query($link,"select * from pvital where id1='$pid' ") or die(mysqli_error($link));
												while($row1=mysqli_fetch_array($r)){
											  ?>
											  <div class="form-group row">
                                                <label class="control-label col-md-2"><?php echo $row1['vname']; ?>
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="hidden" name="vname[]"  value="<?php echo $row1['vname']; ?>" id="vname" class="form-control "  />
                                                    <input type="hidden" name="pvid[]"  value="<?php echo $row1['id']; ?>" id="pvid" class="form-control "  />
												<input type="text" name="vvalue[]"  value="<?php echo $row1['vvalue']; ?>"  id="vvalue" class="form-control "  /> 													
													 
													 </div>
                                            
												</div>	
												
												<?php }?>							
																
											
											 
										   			<div class="form-group row">
                                                
                                                <div class="col-md-6">
                                                <table class="table table-bordered">
												<tr>
												<th colspan="2"> <b>Vital Signs </b></th>
												</tr>
												<tr>
												<td>B.P</td>
                                                <td><input type="text" name="bp"   id="bp"  class="form-control"  value="<?php echo $row['bp']; ?>" /></td>
                                            	</tr>
												
												<tr>
												<td>Sugar</td>
                                                <td><input type="text" name="sugar"   id="sugar"  class="form-control"  value="<?php echo $row['sugar']; ?>"  /></td>
                                            	</tr>
												
												<tr>
												<td>Thyriod</td>
                                                <td><input type="text" name="thyriod"   id="thyriod"  class="form-control"  value="<?php echo $row['thyriod']; ?>" /> </td>
                                            	</tr>
												
												<tr>
												<td>Weight</td>
                                                <td><input type="text" name="weight"   id="weight"  class="form-control"  value="<?php echo $row['weight']; ?>" /> </td>
                                            	</tr>
												
												<tr>
												<td>Nadi</td>
                                                <td><input type="text" name="nadi"   id="nadi"  class="form-control"  value="<?php echo $row['nadi']; ?>" /></td>
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
									<input type="text" class="form-control iname0" name="iname0" id="iname0" value="<?php echo $row['iname0']; ?>" /></td>
									<td><input type="text" class="form-control iname0" name="ivalue0" id="ivalue0" value="<?php echo $row['ivalue1']; ?>" /></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname1" id="iname1" value="<?php echo $row['iname1']; ?>" /></td>
									<td><input type="text" class="form-control iname1" name="ivalue1" id="ivalue1"
									value="<?php echo $row['ivalue1']; ?>"/></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname2" id="iname2" value="<?php echo $row['iname2']; ?>" /></td>
									<td><input type="text" class="form-control ivalue2" name="ivalue2" id="ivalue2"value="<?php echo $row['ivalue2']; ?>" /></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname3" id="iname3" value="<?php echo $row['iname3']; ?>" /></td>
									<td><input type="text" class="form-control ivalue3" name="ivalue3" id="ivalue3"value="<?php echo $row['ivalue3']; ?>" /></td>
									</tr>
									
									<tr>
									
									<td><input type="text" class="form-control iname0" name="iname4" id="iname4" value="<?php echo $row['iname4']; ?>"/></td>
									<td><input type="text" class="form-control ivalue4" name="ivalue4" id="ivalue4" value="<?php echo $row['ivalue4']; ?>" /></td>
									</tr>
									
									
									
									</table>
												
												</div>
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Gynocology
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select  name="gynocology"   id="gynocology" class="form-control " onChange="show(this.value);"  >
														<option value="" <?php if($row['gyncology']=='') echo "selected='selected'";?>>Select</option>
														<option value="yes"  <?php if($row['gyncology']=='yes') echo "selected='selected'";?>>Yes</option>
														<option value="no" <?php if($row['gyncology']=='no') echo "selected='selected'";?>>No</option>														
													</select> 
													 </div>
                                            
											
												</div>
												<div style="display:none;">
											<label class="control-label col-md-2">Remarks
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    
												<input type="text" name="gvalue"   id="gvalue" class="form-control " value="<?php echo $row['gremarks']; ?>" /> 									
													 
													 </div>
											</div>
										   
										   <div class="form-group row">
                                                <label class="control-label col-md-2">Past/Family
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                 <input type="text" name="pfamily" id="pfamily"   placeholder="Enter Past/Family" class="form-control" value="<?php echo $row['pastfamily']; ?>"/>
												<input type="hidden" name="cc" id="cc" value="<?php echo $cc; ?>"/>
												</div>
                                            
											
											</div>
											
											
											
											
								<?php					

// set array
$rowni=$row['id'];
$array1 = array();
$query1 = mysqli_query($link,"SELECT * FROM pprescription1 where id1='$rowni'");
// look through query
while($row1 = mysqli_fetch_assoc($query1)){

  // add each row returned into an array
  $array1[] = $row1;

  // OR just echo the data:
 // echo $row['username']; // etc

}?>						
											
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
	    <input type="hidden" name="dnameid0" id="dnameid0" value="<?php echo $array1[0]['id']; ?>" />
	<td><input type="text" class="form-control dname0" name="dname0" id="dname0" value="<?php echo $array1[0]['drugname']; ?>" /></td>

	<td><input type="text" class="form-control" name="qty0" id="qty0"  value="<?php echo $array1[0]['qty']; ?>"/></td>
		<td><input type="text" class="form-control" name="dose0" id="dose0" value="<?php echo $array1[0]['dose']; ?>" /></td>
	<td><input type="text" class="form-control"  id="freequency0" name="freequency0"  value="<?php echo $array1[0]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time0" class="form-control" id="time0" value="<?php echo $array1[0]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration0" id="duration0" value="<?php echo $array1[0]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	    <input type="hidden" name="dnameid1" id="dnameid1" value="<?php echo $array1[1]['id']; ?>" />
	<td><input type="text" class="form-control dname1" name="dname1" id="dname1" value="<?php echo $array1[1]['drugname']; ?>"/></td>
	<td><input type="text" class="form-control" name="qty1" id="qty1"value="<?php echo $array1[1]['qty']; ?>" /></td>
		<td><input type="text" class="form-control" name="dose1" id="dose1" value="<?php echo $array1[1]['dose']; ?>"/></td>
	<td><input type="text" class="form-control"  id="freequency1" name="freequency1"  value="<?php echo $array1[1]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time1" class="form-control" id="time1" value="<?php echo $array1[1]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration1" id="duration1" value="<?php echo $array1[1]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	    <input type="hidden" name="dnameid2" id="dnameid2" value="<?php echo $array1[2]['id']; ?>" />
	<td><input type="text" class="form-control dname2" name="dname2" id="dname2" value="<?php echo $array1[2]['drugname']; ?>"/></td>
		<td><input type="text" class="form-control" name="dose2" id="dose2" value="<?php echo $array1[2]['dose']; ?>"/></td>
	<td><input type="text" class="form-control" name="qty2" id="qty2"value="<?php echo $array1[2]['qty']; ?>" /></td>
		<td><input type="text" class="form-control"  id="freequency2" name="freequency2"  value="<?php echo $array1[2]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time2" class="form-control" id="time2" value="<?php echo $array1[2]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration2" id="duration2" value="<?php echo $array1[2]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	   <input type="hidden" name="dnameid3" id="dnameid3" value="<?php echo $array1[3]['id']; ?>" />
	<td><input type="text" class="form-control dname3" name="dname3" id="dname3"  value="<?php echo $array1[3]['drugname']; ?>"/></td>
	<td><input type="text" class="form-control" name="qty3" id="qty3"  value="<?php echo $array1[3]['qty']; ?>"/></td>
		<td><input type="text" class="form-control" name="dose3" id="dose3" value="<?php echo $array1[3]['dose']; ?>" /></td>
		<td><input type="text" class="form-control"  id="freequency3" name="freequency3"  value="<?php echo $array1[3]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time3" class="form-control" id="time3" value="<?php echo $array1[3]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration3" id="duration3"  value="<?php echo $array1[3]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	   <input type="hidden" name="dnameid4" id="dnameid4" value="<?php echo $array1[4]['id']; ?>" />
	<td><input type="text" class="form-control dname4" name="dname4" id="dname4" value="<?php echo $array1[4]['drugname']; ?>"/></td>
	<td><input type="text" class="form-control" name="qty4" id="qty4" value="<?php echo $array1[4]['qty']; ?>"/></td>
		<td><input type="text" class="form-control" name="dose4" id="dose4"
		value="<?php echo $array1[4]['dose']; ?>"/></td>
		<td><input type="text" class="form-control"  id="freequency4" name="freequency4"  value="<?php echo $array1[4]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time4" class="form-control" id="time4" value="<?php echo $array1[4]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration4" id="duration4" value="<?php echo $array1[4]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	   <input type="hidden" name="dnameid5" id="dnameid5" value="<?php echo $array1[5]['id']; ?>" />
	<td><input type="text" class="form-control dname5" name="dname5" id="dname5"value="<?php echo $array1[5]['drugname']; ?>" /></td>
	<td><input type="text" class="form-control" name="qty5" id="qty5"value="<?php echo $array1[5]['qty']; ?>" /></td>
		<td><input type="text" class="form-control" name="dose5" id="dose5" value="<?php echo $array1[5]['dose']; ?>"/></td>
	<td><input type="text" class="form-control"  id="freequency5" name="freequency5"  value="<?php echo $array1[5]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time5" class="form-control" id="time5" value="<?php echo $array1[5]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration5" id="duration5" value="<?php echo $array1[5]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	   <input type="hidden" name="dnameid6" id="dnameid6" value="<?php echo $array1[6]['id']; ?>" />
	<td><input type="text" class="form-control dname6" name="dname6" id="dname6"  value="<?php echo $array1[6]['drugname']; ?>"/></td>
	<td><input type="text" class="form-control" name="qty6" id="qty6"  value="<?php echo $array1[6]['qty']; ?>"/></td>
		<td><input type="text" class="form-control" name="dose6" id="dose6"  value="<?php echo $array1[6]['dose']; ?>"/></td>
	<td><input type="text" class="form-control"  id="freequency6" name="freequency6"  value="<?php echo $array1[6]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time6" class="form-control" id="time6" value="<?php echo $array1[6]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration6" id="duration6"  value="<?php echo $array1[6]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	  <input type="hidden" name="dnameid7" id="dnameid7" value="<?php echo $array1[7]['id']; ?>" />
	<td><input type="text" class="form-control dname7" name="dname7" id="dname7"value="<?php echo $array1[7]['drugname']; ?>" /></td>
	<td><input type="text" class="form-control" name="qty7" id="qty7" value="<?php echo $array1[7]['qty']; ?>"/></td>
		<td><input type="text" class="form-control" name="dose7" id="dose7" value="<?php echo $array1[7]['dose']; ?>"/></td>
		<td><input type="text" class="form-control"  id="freequency7" name="freequency7"  value="<?php echo $array1[7]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time7" class="form-control" id="time7" value="<?php echo $array1[7]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration7" id="duration7" value="<?php echo $array1[7]['duration']; ?>"/></td>
	
	
	</tr>
	<tr>
	    <input type="hidden" name="dnameid8" id="dnameid8" value="<?php echo $array1[8]['id']; ?>" />
	<td><input type="text" class="form-control dname8" name="dname8" id="dname8" value="<?php echo $array1[8]['drugname']; ?>"/></td>
	<td><input type="text" class="form-control" name="qty8" id="qty8" value="<?php echo $array1[8]['qty']; ?>"/></td>
		<td><input type="text" class="form-control" name="dose8" id="dose8" value="<?php echo $array1[8]['dose']; ?>"/></td>
		<td><input type="text" class="form-control"  id="freequency8" name="freequency8"  value="<?php echo $array1[8]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time8" class="form-control" id="time8" value="<?php echo $array1[8]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration8" id="duration8" value="<?php echo $array1[8]['duration']; ?>"/></td>
	
	
	</tr>
	
	<tr>
	  <input type="hidden" name="dnameid9" id="dnameid9" value="<?php echo $array1[9]['id']; ?>" />
	<td><input type="text" class="form-control dname9" name="dname9" id="dname9" value="<?php echo $array1[9]['drugname']; ?>"/></td>
	<td><input type="text" class="form-control" name="qty9" id="qty9"value="<?php echo $array1[9]['qty']; ?>" /></td>
		<td><input type="text" class="form-control" name="dose9" id="dose9" value="<?php echo $array1[9]['dose']; ?>"/></td>
		<td><input type="text" class="form-control"  id="freequency9" name="freequency9"  value="<?php echo $array1[9]['freequency']; ?>"/>
	    </td>
	<td><input type="text"  name="time9" class="form-control" id="time9" value="<?php echo $array1[9]['time']; ?>"  >
	</td>
	<td><input type="text" class="form-control" name="duration9" id="duration9"
	value="<?php echo $array1[9]['duration']; ?>"/></td>
	</tr>
	</table>
		</div>
        </div>
		
		
		<div class="form-group row">
		    <?php if($row['pkg']=='Yes'){?>
		    <script>
		        funconce2k('Yes');
		    </script>
		    <?php } ?>
                                                <label class="control-label col-md-2"> Package
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                                <select name="pkg" id="pkg" class="form-control" onChange="funconce2k(this.value)" >
												<option value="">Select Package</option>
												<option value="Yes"
												<?php if($row['pkg']=='Yes') echo "selected='selected'";
											
											?>>Yes</option>
												<option value="No" <?php if($row['pkg']=='No') echo "selected='selected'";?>>No</option>
												</select>
												</div>
                                            
											
											</div>
		
		
		<div class="form-group row" id="ayu"  >
                                                <label class="control-label col-md-2">Select Package 
                                                   
                                                </label>
                                                
                                                  
                                                <div class="col-md-10">
                                                <select name="pkg_name" id="pkg_name" class="form-control" >
												<option value="">Select Package Name</option>
												<?php	foreach ($result as $key => $res) { ?>
												<option value="<?php echo $res['pname'];?>"<?php if($row['pkg_name']==$res['pname']) echo "selected='selected'";?>><?php echo $res['pname'];?></option>
												<?php }?>
												</select>
												</div>
                                            
											
											</div>
											<div class="form-group row"   id="camp_type" >
                                                <label class="control-label col-md-2">Select Procedure
                                                    <span class="required">  </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                               <input type="text" name="procedure"  id="procedure" class="form-control" value="<?php echo $row['proced']; ?>" />
	
		
												</div>
                                            
											
											</div>
		
 										<div class="form-group row" >
                                               <label class="col-md-4"><b>Procedure</b>
                                                    
                                                </label>
                                                 <label class="col-md-4"><b>Duration</b>
                                                    
                                                </label>
                                           										
											</div>
											
	<?php					

// set array
$rowni=$row['id'];
$array = array();
$query = mysqli_query($link,"SELECT * FROM pprocedure where id1='$rowni'");
// look through query
while($row23 = mysqli_fetch_assoc($query)){

  // add each row returned into an array
  $array[] = $row23;

  // OR just echo the data:
 // echo $row['username']; // etc

}?>						
											  <div class="form-group row">
                                                 
                                                     <input type="hidden" name="pnameid1"   id="pnameid1" value="<?php echo $array[0]['id']; ?>" />
                                                     
                                                     <div class="col-md-4">
                                                    <input type="text" name="pname1"   id="pname1" class="form-control pname1" value="<?php echo $array[0]['procedures']; ?>" />
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue1"   id="pvalue1" class="form-control " value="<?php echo $array[0]['pvalue']; ?>" />
												
													 
													 </div>
                                            
												</div>	
												 
                                                     
                                                     
											<div class="form-group row">
											    <input type="hidden" name="pnameid2"   id="pnameid2" value="<?php echo $array[1]['id']; ?>" />
                                                 <div class="col-md-4">
                                                     
                                                    <input type="text" name="pname2"   id="pname2" class="form-control pname2" value="<?php echo $array[1]['procedures']; ?>" />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue2"   id="pvalue2" class="form-control " value="<?php echo $array[1]['pvalue']; ?>" />
												
													 
													 </div>
                                            
												</div>	
												
											<div class="form-group row">
											     
                                                     <input type="hidden" name="pnameid3"   id="pnameid3" value="<?php echo $array[2]['id']; ?>" />
                                                     
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname3"   id="pname3" class="form-control pname3"value="<?php echo $array[2]['procedures']; ?>"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue3"   id="pvalue3" class="form-control " value="<?php echo $array[2]['pvalue']; ?>" />
												
													 
													 </div>
                                            
												</div>		
												
												
												<div class="form-group row">
												     
                                                     <input type="hidden" name="pnameid4"   id="pnameid4" value="<?php echo $array[3]['id']; ?>" />
                                                     
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname4"   id="pname4" class="form-control pname4" value="<?php echo $array[3]['procedures']; ?>" />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue4"   id="pvalue4" class="form-control " value="<?php echo $array[3]['pvalue']; ?>"   />
												
													 
													 </div>
                                            
												</div>	
												
												
												<div class="form-group row">
												     
                                                     <input type="hidden" name="pnameid5"   id="pnameid5" value="<?php echo $array[4]['id']; ?>" />
                                                     
                                                 <div class="col-md-4">
                                                
                                                    <input type="text" name="pname5"   id="pname5" class="form-control pname5" value="<?php echo $array[4]['procedures']; ?>" />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue5"   id="pvalue5" class="form-control " value="<?php echo $array[4]['pvalue']; ?>"  />
												
													 
													 </div>
                                            
												</div>	
												
												
												<div class="form-group row">
												    
                                                     <input type="hidden" name="pnameid6"   id="pnameid6" value="<?php echo $array[5]['id']; ?>" />
                                                    
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname6"   id="pname6" class="form-control pname6" value="<?php echo $array[5]['procedures']; ?>" />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue6"   id="pvalue6" class="form-control "  value="<?php echo $array[5]['pvalue']; ?>"/>
												
													 
													 </div>
                                            
												</div>	
												
												
												
												<div class="form-group row">
												    
                                                     <input type="hidden" name="pnameid7"   id="pnameid7" value="<?php echo $array[6]['id']; ?>" />
                                                     
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname7"   id="pname7" class="form-control pname7" value="<?php echo $array[6]['procedures']; ?>" />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue7"   id="pvalue7" class="form-control " value="<?php echo $array[6]['pvalue']; ?>" />
																									 </div>
                                            
												</div>	
												
												<div class="form-group row">
												   
                                                     <input type="hidden" name="pnameid8"   id="pnameid8" value="<?php echo $array[7]['id']; ?>" />
                                                     
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname8"   id="pname8" class="form-control pname8"  value="<?php echo $array[7]['procedures']; ?>"/>
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue8"   id="pvalue8" class="form-control "value="<?php echo $array[7]['pvalue']; ?>"  />
																									 </div>
                                            
												</div>	
												
												<div class="form-group row">
												     
                                                     <input type="hidden" name="pnameid9"   id="pnameid9" value="<?php echo $array[8]['id']; ?>" />
                                                     
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname9"   id="pname9" class="form-control pname9"value="<?php echo $array[8]['procedures']; ?>"  />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue9"   id="pvalue9" class="form-control " value="<?php echo $array[8]['pvalue']; ?>" />
																									 </div>
                                            
												</div>	
												
												
												<div class="form-group row">
												    
                                                     <input type="hidden" name="pnameid10"   id="pnameid10" value="<?php echo $array[9]['id']; ?>" />
                                                    
                                                 <div class="col-md-4">
                                                    <input type="text" name="pname10"   id="pname10" class="form-control pname10" value="<?php echo $array[9]['procedures']; ?>" />
																								
													 
													 </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="pvalue10"   id="pvalue10" class="form-control " value="<?php echo $array[9]['pvalue']; ?>" />
																									 </div>
                                            
												</div>	
												
												
												
												
												
												
												
												
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Food to be avoided
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="diet" id="diet"  placeholder="Food to be avoided" class="form-control" value="<?php echo $row['diet']; ?>" /> 
													
													</div>
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Yoga/Exercise
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="meditation" id="meditation"  placeholder="Yoga/Exercise" class="form-control" value="<?php echo $row['meditation']; ?>" /> 
													
													</div>
                                            
											
											</div>
											
											
											
										   <div class="form-group row">
                                                <label class="control-label col-md-2">Result
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                 <input type="text" name="result" id="result"   placeholder="Enter Result" class="form-control" value="<?php echo $row['remarks']; ?>" />
												</div>
                                            
											
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Review on
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                 <input type="text" name="reviewon" id="reviewon"   placeholder="Enter Review" class="form-control" value="<?php echo $row['reviewon']; ?>" />
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

        
		
		
	
		
		
		$('#supports').change(function() {

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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>    
<script type="text/javascript">
$(function() {
    
    //autocomplete
    $(".mrno").autocomplete({
        source: "set9.php",
        minLength: 1
    });    

	
;})
 </script>
	   
<?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>