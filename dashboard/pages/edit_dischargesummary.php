<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/update_dischargesummary.php');

include("header.php");?>
<script>
function showHint52()
{
var str=document.getElementById("umrno").value;
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
	//document.getElementById("supname").value=strar[2];
	
	document.getElementById("patno").value=strar[1];
	
	document.getElementById("patname").value=strar[2];
	document.getElementById("fname").value=strar[3];
	document.getElementById("age").value=strar[4];
	document.getElementById("sex").value=strar[5];
	document.getElementById("doa").value=strar[6];
	document.getElementById("dichargedate").value=strar[7];
	document.getElementById("address").value=strar[8];
	document.getElementById("doctors").value=strar[9];
	showUser(str)
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search66.php?q="+str,true);
xmlhttp.send();
}
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("labre").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","search31.php?q="+str,true);
  xmlhttp.send();
}
</script>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Discharge Summary Details</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Discharge Summary Details</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Discharge Summary Details</header>
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
								
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
										
                                        <div class="form-group row">
                                                <label class="control-label col-md-2">UMR No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="umrno" data-required="1"  id="umrno" placeholder="Enter UMR NO" class="form-control" value="<?php echo $mrno; ?>" onChange="showHint52()" required/> 
													 <strong class="required"><?php if(isset($errorecode)){ echo $errorecode;} ?> </strong></div>
                                            
											<label class="control-label col-md-2">Pat No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="patno" data-required="1" id="patno" placeholder="Enter Patient No" class="form-control" value="<?php echo $patno; ?>" />
													
													</div>
                                            
											
											</div>
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Patient Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="patname" data-required="1" value="<?php echo  $patname; ?>" id="patname" placeholder="Enter Patient Name" class="form-control " required/>
													
													</div>
                                            <label class="control-label col-md-2">Father Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    
		                                                <input class="form-control " size="16" placeholder="Father Name" type="text" value="<?php echo  $fname; ?>"  name="fname" id="fname">
		                                                
	                                            	</div>
	                                            
											
											</div>
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="age" data-required="1" id="age" value="<?php  echo $age; ?>" placeholder="Enter Age " class="form-control" required/> 
													
													</div>
                                            <label class="control-label col-md-2">Sex
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                     <input type="text" name="sex" data-required="1" id="sex" value="<?php  echo $sex; ?>" placeholder="Enter Sex " class="form-control" required/> 
	                                            
	                                            </div>
											
											</div>
											
											
											
											<div class="form-group row">
                                                
                                            <label class="control-label col-md-2">Date of Admission
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                                                <input class="form-control " size="16" placeholder="Date of Birth" type="text" value="<?php echo $admit; ?>" name="doa" id="doa">
		                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	                                            	</div>
	                                            
	                                            </div>
											<label class="control-label col-md-2">Date of Discharge
                                                    <span class="required"> * </span>
                                                </label>
                                                 <div class="col-md-4">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                                                <input class="form-control " size="16" placeholder="Date of Discharge" type="text" value="<?php echo $discharge; ?>" name="dichargedate" id="dichargedate">
		                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	                                            	</div>
	                                            
	                                            </div>
											</div>
											
											
											
											
											
											
											
											
											
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Current Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <textarea name="address" id="address" placeholder=" Address" class="form-control-textarea" rows="5" ><?php echo $addr; ?></textarea>
                                                </div>
												 <label class="control-label col-md-2">Consultant Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <textarea name="doctors" id="doctors" placeholder="Consultant Name" class="form-control-textarea" rows="5" ><?php echo $doctor; ?></textarea>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Final  Diagnosis
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea name="finaldiagnosis" id="finaldiagnosis" placeholder="Enter Final Diagnosis" class="form-control-textarea" rows="5" ><?php echo $finaldiagnosis; ?></textarea>
                                                </div>
												 
                                            </div>
                                           <div class="form-group row">
                                                <label class="control-label col-md-2">Clinical  Summary
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea name="clinicalsummary" id="clinicalsummary" placeholder="Enter Clinical Summary " class="form-control-textarea" rows="5" ><?php echo $clinicalsummary; ?></textarea>
                                                </div>
												 
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Treatment  Summary
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea name="treatsummary" id="treatsummary" placeholder="Enter Treatment Summary " class="form-control-textarea" rows="5" ><?php echo $treatsummary; ?></textarea>
                                                </div>
												 
                                            </div>
											<div class="form-group row">
                                                <div class="control-label col-md-12" style="text-align:center;">Vital Signs
                                                   
                                                </div>
                                                												 
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-6" style="text-align:center;">At the time of Admission</label>
												<label class="control-label col-md-6" style="text-align:center;">At the time of Discharge</label>
                                                												 
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Pulse Rate
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="pulserate" data-required="1" id="pulserate"  placeholder="Enter Pulse Rate " class="form-control" value="<?php echo $pulse; ?>" />beat/min 
													
													</div>
                                            <label class="control-label col-md-2">Pulse Rate
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="pulserate1" data-required="1" id="pulserate1"  placeholder="Enter Pulse Rate " class="form-control" value="<?php echo $pulse1; ?>" /> beat/min
	                                            
	                                            </div>
											
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">BP
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="bp" data-required="1" id="bp"  placeholder="Enter BP " class="form-control" value="<?php echo $bp; ?>"/>mmHg 
													
													</div>
                                            <label class="control-label col-md-2">BP
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="bp1" data-required="1" id="bp1"  placeholder="Enter BP " class="form-control" value="<?php echo $bp1; ?>"/> mmHg
	                                            
	                                            </div>
											
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Temperature
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="temperature" data-required="1" id="temperature"  placeholder="Enter Temperature " class="form-control" value="<?php echo $temperature; ?>"/><sup>0</sup>F 
													
													</div>
                                            <label class="control-label col-md-2">Temperature
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="temperature1" data-required="1" id="temperature1"  placeholder="Enter Temperature " class="form-control" value="<?php echo $temperature1; ?>"/> <sup>0</sup>F
	                                            
	                                            </div>
											
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Respiratory Rate
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="respiratoryrate" data-required="1" id="respiratoryrate"  placeholder="Enter Respiratory Rate " class="form-control" value="<?php echo $repository; ?>" />/min 
													
													</div>
                                            <label class="control-label col-md-2">Respiratory Rate
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="respiratoryrate1" data-required="1" id="respiratoryrate1"  placeholder="Enter Respiratory Rate " class="form-control" value="<?php echo $repository1; ?>" /> /min
	                                            
	                                            </div>
											
											</div>	
											<div class="form-group row">
                                                <label class="control-label col-md-2">Heart 
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="lheart"  id="lheart"  placeholder="Enter Heart" class="form-control" value="<?php echo $heart; ?>"/>
													
													</div>
                                            <label class="control-label col-md-2">Heart 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="lheart1"  id="lheart1"  placeholder="Enter Heart" class="form-control" value="<?php echo $heart1; ?>" /> 
	                                            
	                                            </div>
											
											</div>	
											
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Lungs 
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="lungs" data-required="1" id="Lungs"  placeholder="Enter Lungs  " class="form-control" value="<?php echo $lungs; ?>"/>
													
													</div>
                                            <label class="control-label col-md-2">Lungs 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="lungs1" data-required="1" id="Lungs1"  placeholder="Enter Lungs  " class="form-control" value="<?php echo $lungs1; ?>"/> 
	                                            
	                                            </div>
											
											</div>	
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">P/A 
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="pa" data-required="1" id="pa"  placeholder="Enter P/A  " class="form-control" value="<?php echo $pa; ?>"/>
													
													</div>
                                            <label class="control-label col-md-2">P/A 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="pa1" data-required="1" id="pa1"  placeholder="Enter P/A  " class="form-control" value="<?php echo $pa1; ?>"/> 
	                                            
	                                            </div>
											
											</div>	
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">CNS 
                                                   
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="cns" data-required="1" id="cns"  placeholder="Enter CNS  " class="form-control" value="<?php echo $cns; ?>"/>
													
													</div>
                                            <label class="control-label col-md-2">CNS 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                     <input type="text" name="cns1" data-required="1" id="cns1"  placeholder="Enter CNS  " class="form-control" value="<?php echo $cns1; ?>"/> 
	                                            
	                                            </div>
											
											</div>	
											
											 <div class="form-group row">
                                                <label class="control-label col-md-2">Local Examination Findings
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <textarea name="localexamination" id="localexamination" placeholder=" Local Examination Findings" class="form-control-textarea" rows="5" ><?php echo $localexamination; ?></textarea>
                                                </div>
												 <label class="control-label col-md-2">Local Examination Findings
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <textarea name="localexamination1" id="localexamination1" placeholder="Local Examination Findings" class="form-control-textarea" rows="5" ><?php echo $localexamination1; ?></textarea>
                                                </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Investigations Report
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="investigations" id="investigations" placeholder=" Investigations Report" class="form-control" <?php echo $inreport; ?>/>
                                                </div>
												 
                                            </div>
											<div class="form-group row">
											<div class="col-md-2">Lab Reports</div>
											
											</div>
																			
											<div id="labre"></div>
											<div class="form-group row">
											<div class="col-md-2">Medications Advised<button type="button" class='btn btn-success addmore1'>+</button>
											<button type="button" class='btn btn-danger delete'>-</button>
											</div>
											</div>
											<table>
                        <?php
					   $p="select * from dischargemedical where mrno='$mrno' ";
					  $rt = $crud->getData($p);
					foreach($rt as $key=>$r){
						   
					    
					    ?>
					   <tr>
                       <td><input type='text' class=' print-type1' id='mtype"+i+"' data-row='"+i+"' name='mtype[]' value='<?php echo $r['mtype'] ?>' style='width:90px;'/></td>
                       <td><input type='text' class='text print-type1' id='pname"+i+"' data-row='"+i+"' name='pname[]' value='<?php echo $r['mname'] ?>'/></td><td ><input type='text' class='	 ' id='generic"+i+"' data-row='"+i+"' name='generic[]' value='<?php echo $r['generic'] ?>' style='width:80px;'/></td>
					   <td ><input type='text' class='	 ' id='dtime"+i+"' data-row='"+i+"' name='dtime[]' value='<?php echo $r['dosagetime'] ?>' style='width:80px;'/></td>
                        <td ><input type='text' class=' ' id='dadmin"+i+"' data-row='"+i+"' name='dadmin[]' value='<?php echo $r['drugadmin'] ?>' style='width:80px;'/></td>
                         <td ><input type='text'  id='Days"+i+"' data-row='"+i+"' name='Days[]' style='width:50px;' value='<?php echo $r['days'] ?>'/></td>
						 <td ><input type='text'  id='qty"+i+"' data-row='"+i+"' name='qty[]' value='<?php echo $r['qty'] ?>' style='width:50px;'/><input type='hidden' class='text print-type1' id='mid"+i+"' data-row='"+i+"' name='mid[]' value="<?php echo $r['mid'] ?>"/></td>
						<td ><input type='text'  id='indication"+i+"' data-row='"+i+"' name='indication[]' value='<?php echo $r['indication'] ?>' style='width:80px;'/></td>
						</tr>
                        <?php
						
						
						 }?>
                        
                        </table>
											<div class="form-group row">
											<div class="osu1"  class="col-md-12"></div>
											</div>
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Other Procedures Adviced/Suggestions
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea name="suggestions" id="suggestions" placeholder="Enter Other Procedures Adviced/Suggestions" class="form-control-textarea" rows="5" ><?php echo $suggestions; ?></textarea>
                                                </div>
												 
                                            </div>
											
											<div class="form-group row">
                                                
                                            <label class="control-label col-md-2">Review Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                                                <input class="form-control " size="16" placeholder="Date of Birth" type="text" value="<?php echo $reviewdate; ?>" name="reviewdate" id="reviewdate">
		                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	                                            	</div>
	                                            
	                                            </div>
											<label class="control-label col-md-2">Outside Report
                                                   
                                                </label>
                                                <div class="col-md-4">
                                                    
		                                                <input class="form-control" size="16"  type="file"  name="image" id="image">
		                                                 <input class="form-control" size="16"  type="hidden"  name="user" id="user" value="<?php echo $ses; ?>">
	                                            <input class="form-control" size="16"  type="hidden"  name="id2" id="id2" value="<?php echo $id2; ?>">
	                                            </div>
                                                 
											</div>
											
											
											
											
											
											
											
											
											
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="Submit" class="btn btn-info">Submit</button>
                                                    <a href="employeeslist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
            <!-- end page content -->
            <!-- start chat sidebar -->
            
            <!-- end chat sidebar -->
        </div>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>    
		<script>
/*$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents("tr").remove();
calculateTableSum(currentTable);
});*/

$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents(".form-group").remove();
	$('#check_all').prop("checked", false); 
	calculateTotal();
});


var i=2;
$(".addmore1").on('click',function(){
     
	var data ="<div class='form-group'>";
   
    data +="<div class='col-sm-12'>";          
    data +="<input type='checkbox' class='case'/><select class='text' id='mtype"+i+"' data-row='"+i+"' name='mtype[]'> <option value=''>Select Type</option><?php $r2 = $crud->getdata('select * from phr_prdtype_mast'); foreach($r2 as $key=>$r){?><option value='<?php echo $r['PRDTYPE_NAME']?>'><?php echo $r['PRDTYPE_NAME']?></option><?php }?></select><input type='text' class='text print-type10' id='pname"+i+"' data-row='"+i+"' name='pname[]' placeholder='Drug Name'/><input type='text' class=' ' id='generic"+i+"' data-row='"+i+"' name='generic[]' placeholder='Generic' style='width:90px;'/><input type='text' class=' ' id='dtime"+i+"' data-row='"+i+"' name='dtime[]' placeholder='Dosage Time' style='width:90px;'/><input type='text' class=' ' id='dadmin"+i+"' data-row='"+i+"' name='dadmin[]' placeholder='Route ' style='width:90px;'/><input type='text'  id='Days"+i+"' data-row='"+i+"' name='Days[]' placeholder='Days' style='width:50px;'/><input type='text'  id='qty"+i+"' data-row='"+i+"' name='qty[]' placeholder='Quantity' style='width:50px;'/><input type='text'  id='indication"+i+"' data-row='"+i+"' name='indication[]' placeholder='indication' style='width:90px;'/>";
   data +="<input type='hidden' name='ksr[]' value='1'/>";
    data +="</div></div>";
	
	
	
	
	
	$('.osu1').append(data);
	i++;
});



function select_all() {
	$('input[class=case]:checkbox').each(function(){ 
		if($('input[class=check_all]:checkbox:checked').length == 0){ 
			$(this).prop("checked", false); 
		} else {
			$(this).prop("checked", true); 
		} 
	});
	
	
		
}
</script>  
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
	    <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>