<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/connection.php');
include('../db/update_finalbill.php');

include("header.php");?>

<script>

function showHint52()
{
var str=document.getElementById("mrno").value;
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
	
	document.getElementById("address").value=strar[8];
	document.getElementById("doctors").value=strar[9];
	document.getElementById("mobile").value=strar[10];
	
	var adate=document.getElementById("doa").value;
	var ddate=document.getElementById("dichargedate").value;
	showUser(str,adate,ddate);
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search166.php?q="+str,true);
xmlhttp.send();
}
function showUser(str,adate,ddate) {
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
     var show=xmlhttp.responseText;
	var strar=show.split(":");
	document.getElementById("hadamount").value=strar[1];
    }
  }
  xmlhttp.open("GET","search311.php?q="+str+"&adate="+adate+"&ddate="+ddate,true);
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
                                <div class="page-title">Final Bill Details</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Final Bill Details</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Final Bill Details</header>
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
								<?php
			
		?>
                                    <form action="#" id="form_sample_1" class="form-horizontal" autocomplete="on" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
										 <div class="form-group row">
                                                <label class="control-label col-md-2">Bill No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="bno"  value="<?php echo $bno; ?>"  id="bno" placeholder="Enter Bill NO" class="form-control" required/> 
												</div>
												
												<label class="control-label col-md-2">Bill Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" name="bdate"    id="bdate" placeholder="Enter Bill Date" class="form-control" value="<?php echo $bdate; ?>" required/> 
												</div>
                                    	</div>
										
                                        <div class="form-group row">
                                                <label class="control-label col-md-2">UMR No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                   
													 
													<select name="mrno"  id="mrno"  class="form-control mrno" onChange="showHint52()" required>
													<option value="">Select MR NO</option>
													<?php 
													
													$q="select distinct a.PAT_REGNO,a.PAT_NO,b.patientname from patientregister b,ip_pat_admit a where a.PAT_REGNO=b.registerno  ";
													$rt=mysqli_query($link,$q) or die(mysqli_error($link));
													while($r1=mysqli_fetch_array($rt)){
														?>
													<option value="<?php echo $r1['PAT_REGNO']; ?>" <?php if($mrno=$r1['PAT_REGNO']){ echo 'selected';} ?>><?php echo $r1['PAT_REGNO']."(".$r1['patientname'].")"; ?></option>	
														<?php
													}
													?>
													
													</select>
													 
													 
													 
													 </div>
                                            
											<label class="control-label col-md-2">Pat No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="patno1" data-required="1" id="patno1" placeholder="Enter Patient No" class="form-control" value="<?php echo $PatientNo ?>" />
													
													</div>
                                           	</div>
											<input type="hidden" name="patno" data-required="1" id="patno" placeholder="Enter Patient No" class="form-control" value="<?php echo $PatientNo ?>" />
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Patient Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="patname" data-required="1"  id="patname" placeholder="Enter Patient Name" value="<?php echo $patname ?>" class="form-control " required/>
													
													<input type="hidden" name="user"  value="<?php echo $ses; ?>" id="ses"  />
													<input type="hidden" name="id"  value="<?php echo $BILL_NO; ?>" id="id"  />
													
													</div>
                                            <label class="control-label col-md-2">Father Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    
		                                                <input class="form-control" size="16" placeholder="Father Name" type="text"  name="fname" id="fname" value="<?php echo $fname ?>">
		                                                
	                                            	</div>
	                                    	</div>
																			
											<div class="form-group row">
                                                <label class="control-label col-md-2">Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="age" data-required="1" id="age" value="<?php echo $age ?>" placeholder="Enter Age " class="form-control" required/> 
													
													</div>
                                            <label class="control-label col-md-2">Sex
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                     <input type="text" name="sex" data-required="1" id="sex" value="<?php echo $gender ?>" placeholder="Enter Sex " class="form-control" required/> 
	                                            
	                                            </div>
											
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Contact No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="mobile" data-required="1" id="mobile" value="<?php echo $phoneno ?>" placeholder="Enter Age " class="form-control" required/> 
													
													</div>
                                           
											
											</div>
											
											
											<div class="form-group row">
                                                
                                            <label class="control-label col-md-2">Date of Admission
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    
		                                                <input class="form-control " size="16" placeholder="Date of Admission" type="text" value="<?php echo $AdmissionDate ?>" name="doa" id="doa" readonly>
		                                                
	                                            	
	                                            
	                                            </div>
											<label class="control-label col-md-2">Date of Discharge
                                                    <span class="required"> * </span>
                                                </label>
                                                 <div class="col-md-4">
                                                   
		                                                <input class="form-control " size="16" placeholder="Date of Discharge" type="date" value="<?php echo $DischargeDate ?>" name="dichargedate" id="dichargedate">
		                                             
	                                            	
	                                            
	                                            </div>
											</div>
										
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Current Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <textarea name="address" id="address" placeholder=" Address" class="form-control-textarea" rows="5" ><?php echo $Address ?></textarea>
                                                </div>
												 <label class="control-label col-md-2">Consultant Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <textarea name="doctors" id="doctors" placeholder="Consultant Name" class="form-control-textarea" rows="5" ><?php echo $dname ?></textarea>
                                                </div>
                                            </div>
								                          															
											<div class="form-group row">
                                                <div class="control-label col-md-12" >
                                                   <table class="table">
												   <tr>
												   <th>Description</th>
												   <th>Days</th>
												   <th>Charge</th>
												   <th>Amount</th>
												   </tr>
												   <?php 
												   $i=1;
												   $result=mysqli_query($link,"select * from final_bill1 where id1='$BILL_NO'") or die(mysqli_error($link));
												   foreach($result as $key=>$y){ ?>
												   <tr>
												   <td><input type="hidden" name="description[]"  data-row="<?php echo $i; ?>" id="description" value="<?php echo $y['description'];?>"/>
												   <input type="hidden" name="id1[]"  data-row="<?php echo $i; ?>" id="id1" value="<?php echo $y['id'];?>"/><?php echo $y['description'];?></td>
												   <td><input type="text" name="days[]" id="days<?php echo $i; ?>" data-row="<?php echo $i; ?>"  class='tet' value="<?php echo $y['days'];?>" /></td>
												   <td><input type="text" name="charge[]" id="charge<?php echo $i; ?>" data-row="<?php echo $i; ?>" value="<?php echo $y['charge'];?>" class='tet'/></td>
												   <td><input type="text" name="amount[]" id="amount<?php echo $i; ?>" data-row="<?php echo $i; ?>" value="<?php echo $y['amount'];?>" class="txt"/></td>
												    
												   </tr>
												   <?php $i++;}?>
												   </table>
                                                </div>
                                                												 
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-9">Total Hospital Amount
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="thamount" id="thamount" placeholder=" Total Hospital Amount" class="form-control " value="<?php echo $total ?>" />
                                                </div>
												</div>
												
												<div class="form-group row">
                                                <label class="control-label col-md-9">Concession 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="concession" id="concession" placeholder=" concession Amount" class="form-control con" value="<?php echo $consamt ?>"/>
                                                </div>
																			
												 
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-9">Net Amount 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="namount" id="namount" placeholder=" Net Amount" class="form-control" value="<?php echo $netamt ?>"/>
                                                </div>
											</div>
											
											
												<div class="form-group row">
												<label class="control-label col-md-9">Advance Amount
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="hadamount" id="hadamount" placeholder=" Total HospitalAdvance  Amount" class="form-control" value="<?php echo $hospaid ?>"/>
                                                </div>
												</div>
												<div class="form-group row">
												
												<label class="control-label col-md-9">Bal Amount
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="hbamount" id="hbamount" placeholder="Hospital Bal Amount" class="form-control" value="<?php echo $hospdue ?>"/>
                                                </div>
																							
												 
                                            </div>
											
																						
											<div class="form-group row">													
												<label class="control-label col-md-9">Pay Amount 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="payamount" id="payamount" placeholder=" Pay Amount" class="form-control pay" value="<?php echo $totpaid ?>"/>
                                                </div>
												</div>
												<div class="form-group row">
												<label class="control-label col-md-9">Balance Amount 
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <input type="text" name="rbamount" id="rbamount" placeholder=" Remaining Amount" class="form-control" value="<?php echo $totdue ?>"/>
                                                </div>
																							
												 
                                            </div>
											<div class="form-group row">
												
												<label class="control-label col-md-9">Payment Type
                                                    
                                                </label>
                                                <div class="col-md-3">
                                                    <select name="paymenttype" id="paymenttype" class="form-control" >
													<option value="cash" <?php if($paymenttype=="cash"){ echo 'selected';} ?>>Cash</option>
													<option value="card" <?php if($paymenttype=="card"){ echo 'selected';} ?>>Card</option>
													<option value="paytm" <?php if($paymenttype=="paytm"){ echo 'selected';} ?>>Paytm</option>
													</select>
                                                </div>
																							
												 
                                            </div>		
											
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                                    <a href="finalbilllist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
<script type="text/javascript">

$(document).on('keyup ','.tet',function(){
	
	id = $(this).attr('data-row');
	//alert(id);
	days = $('#days'+id).val();
	
	cost = $('#charge'+id).val();
		
	$amnt= $('#amount'+id).val( (parseFloat(days)*parseFloat(cost)).toFixed(2) );

	calculateTotal2();
	
	});
	
	function calculateTotal2(){
	subTotal = 0 ; total = 0; 
	$('.txt').each(function(){
		
		if($(this).val() != '' )subTotal += parseFloat( $(this).val() );
	});
	$('#thamount').val(subTotal.toFixed(2) );
	$('#namount').val(subTotal.toFixed(2));
	t=$('#thamount').val();
	//alert(t);
	$('#thamount').val(subTotal.toFixed(2));
	
	t3=$('#thamount').val();
	//alert(t3);
	

//HOSPITAL DUE
hospitalpaid=$("#hadamount").val();
hospdue=parseFloat(t)-parseFloat(hospitalpaid);
$("#hbamount").val(hospdue.toFixed(2));
//LAB DUE
//$("#namount").val(hospdue.toFixed(2));
$('#rbamount').val(hospdue.toFixed(2));


	
}


/*$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents("tr").remove();
calculateTableSum(currentTable);
});*/
$(".txt").each(function(){
$(this).keyup(function(){
calculateTotal2();
});
});
//connecession amount

$(".con").keyup(function(){
t=$('#thamount').val();
	c=$('#concession').val();
	n=parseFloat(t)-parseFloat(c);
	$('#namount').val(n.toFixed(2));
	
	hospitalpaid=$("#hadamount").val();
	b=parseFloat(n)-parseFloat(hospitalpaid);
	$('#hbamount').val(b.toFixed(2));
	$('#rbamount').val(b.toFixed(2));
});
$(".pay").keyup(function(){
t=$('#hbamount').val();
	c=$('#payamount').val();
	n=parseFloat(t)-parseFloat(c);
	$('#rbamount').val(n.toFixed(2));
	
});
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