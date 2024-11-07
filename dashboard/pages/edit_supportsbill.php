<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 

include("header.php");?>
<script>
function showUser(str)
{
	
	var str1=document.getElementById('sname'+str).value;	
if (str=="")
  {
  document.getElementByName("section").innerHTML="";
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
   // document.getElementById("country5").innerHTML=xmlhttp.responseText;
	//document.getElementById("country5").innerHTML=show;
	var show=xmlhttp.responseText;
	//alert(show);
	document.getElementById("size"+str).innerHTML=show;
	//document.location.reload();
    }
  }
xmlhttp.open("GET","get_size.php?q="+str1,true);
xmlhttp.send();
}



	//var sy="showHint()"+i;
	//alert(sy);
function showHint(str)
{
var sname=document.getElementById('sname'+str).value;
var size=document.getElementById('size'+str).value;
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
	
	document.getElementById("amount"+str).value=strar[1];
	
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search416.php?q="+size+"&sname="+sname,true);
xmlhttp.send();
}

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
	document.getElementById("dname").value=strar[4];
	document.getElementById("mobile").value=strar[5];
	document.getElementById("ptype").value=strar[6];
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search216.php?q="+str,true);
xmlhttp.send();
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

if(nyear<1000) nyear=nyear+1900;

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('time').value=" "+nhour+":"+nmin+":"+nsec+ap+"";

setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Supports Bill</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Supports Bill</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Supports Bill</header>
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
								include('../db/update_supportsbill.php');

								foreach($rst1 as $key=>$t){
									$mrno=$t['mrno'];
									$billno=$t['billno'];
									$bdate1 = str_replace('-', '/', ($t['bdate']));
											$bdate=date('d/m/Y', strtotime($bdate1));
											$tamount=$t['tamount'];
											$discount=$t['discount'];
											$namount=$t['namount'];
											$pamount=$t['pamount'];
											$bamount=$t['bamount'];
											$remarks=$t['remarks'];
											$paymenttype=$t['paymenttype'];
									
									
								} ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post">
                                        <div class="form-body">
										
                                        <div class="form-group row">
                                                <label class="control-label col-md-2">MR No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="mrno"  value="<?php echo $mrno; ?>" id="mrno" placeholder="Enter MRNO" class="form-control mrno" required onChange="showHint5(this.value)"/> 
													 </div>
                                                                           
											
											</div>
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Bill No
                                                    <span class="required"> * </span>
                                                </label>
												
											
                                                <div class="col-md-4">
												
                                                    <input type="text" name="bno" data-required="1" id="bno" placeholder="Enter Bill No" class="form-control" value="<?php echo $bno1=$t['billno']; ?>" />
													 <input type="hidden" name="user"  id="user"  class="form-control" value="<?php echo $ses; ?>" />
													</div>
											
                                            <label class="control-label col-md-2">Bill Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                                                <input class="form-control " size="16" placeholder="Bill Date" type="text" value="<?php echo $bdate; ?>" name="bdate" id="bdate">
		                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	                                            	</div>
	                                            
	                                            </div>
											
											</div>
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Patient Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="pname" value="<?php echo $t['pname']; ?>" data-required="1" id="pname"  placeholder="Enter Patient Name" class="form-control" required/> 
													<input type="hidden" name="id2"  id="id2"  class="form-control" value="<?php echo $crud->my_simple_crypt($t['id'],'e'); ?>" />
													</div>
												<label class="control-label col-md-2">Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
												<input type="text" name="age" data-required="1" id="age" value="<?php echo $t['age']; ?>" placeholder="Enter Age" class="form-control" required/> 
                                              </div>
											
											</div>
											
											
											 <div class="form-group row">
                                                <label class="control-label col-md-2">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="gender" data-required="1" id="gender" value="<?php echo $t['gender']; ?>"  placeholder="Enter Gender" class="form-control" required/> 
													
													</div>
                                            <label class="control-label col-md-2">Doctor Name
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="dname" data-required="1" id="dname" value="<?php echo $t['dname']; ?><?php echo $t['dname']; ?>" placeholder="Enter Doctor Name" class="form-control" /> </div>
                                            
											
											</div>
											
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Mobile No
                                                  
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="mobile" data-required="1" id="mobile" placeholder="Enter Mobile No" class="form-control" value="<?php echo $t['mobile']; ?>" /> </div>
                                            <label class="control-label col-md-2">Patient Type
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="ptype" data-required="1" id="ptype" placeholder="Enter Patient type" class="form-control" value="<?php echo $t['ptype']; ?>" /> </div>
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Time
                                                  
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="time" data-required="1" value="<?php echo $t['time']; ?>"  placeholder="" class="form-control" /> </div>
                                           
											</div>
											<div align="right">
	
<button type="button" class='btn btn-success addmore'>+</button>
<button type="button" class='btn btn-danger delete'>-</button>
	</div>										
											
											<div class="form-group row">
											<div class="col-md-12">
											<table class=" full-width" id="table">
					                                        <thead>
					                                            <tr>
					                                            	<th></th>
																	 <th> Support Name </th>
																	 <th> Batch Num </th>
																	 <th> A Qty</th>
																	 <th> S Qty</th>
					                                                <th> Amount </th>
																	<th> Total </th>
														        </tr>
					                                        </thead>
					                                        <tbody>
															<!--1-->
															<?php 
															$yk="select * from supportsbill1 where bno='$bno1' and mrno='$mrno'";
															$tu=$crud->getdata($yk);
															$i=1;
															foreach($tu as $key=>$t1){
																$tid=$t1['size'];
																$tname=$t1['sname'];
															?>
															<tr>
					                                            	<th></th>
																	 <th> <select name="sname[]" data-row='<?php echo $i ?>'  id="sname1" class="form-control tet"  style="width:150px;" >
																	 
																	 <option value="">Select Suppor Name</option>
																	 
																	 
																	 <?php 
																	 
																	 $query1 = "SELECT distinct 	PRODUCT_NAME FROM phr_purinv_support1";
																			$r3=mysqli_query($link,$query1) or die(mysqli_error($link));
																			while($r2=mysqli_fetch_array($r3)){?>
																	<option value="<?php echo $r2['PRODUCT_NAME'] ?>" <?php if($r2['PRODUCT_NAME']==$tname){ echo 'selected';} ?> ><?php echo $r2['PRODUCT_NAME'] ?></option>				
																	<?php  $i++; }?>
																	</select>
																	 </th>
																	 <th> <select name="size[]" data-row='<?php echo $i ?>'  id="size<?php echo $i ?>" class="form-control  tet<?php echo $i ?>" style="width:150px;" >
																	 
																	 <option value="<?php echo $t1['size'] ?>"><?php echo $t1['size'] ?></option>
																	</select>
																	 </th>
																	 <th> <input type="text" name="aqty[]" data-row='<?php echo $i ?>'  id="aqty<?php echo $i ?>" value="<?php echo $t1[''] ?>" class="form-control col-md-6 " />
																		  <input type="hidden" name="sid[]" data-row='<?php echo $i ?>'  id="sid<?php echo $i ?>" value="<?php echo $t1['id'] ?>" class="form-control col-md-6 " />																	 </th>
																	  <th> <input type="text" name="sqty[]" data-row='<?php echo $i ?>'  id="sqty<?php echo $i ?>" value="<?php echo $t1['sqty'] ?>" class="form-control col-md-6" onkeyup='calculateSum25(<?php echo $i ?>)' /> </th>
					                                                <th> <input type="text" name="amount[]" data-row='<?php echo $i ?>'  id="amount<?php echo $i ?>" value="<?php echo $t1['amount'] ?>"  class="form-control col-md-6 " /> </th>
																	<th> <input type="text" name="total[]" data-row='<?php echo $i ?>'  id="total<?php echo $i ?>" value="<?php echo $t1['total'] ?>" class="form-control col-md-6 txt" onkeyup='calculateSum()' /> </th>
															   </tr>
															<?php $i++; }?>
																
															</tbody>
											</table>
											
											</div>
                                            </div>
                                            
											<div class="form-group row">
                                                <label class="control-label col-md-2">Total Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="tamount" data-required="1" id="tamount"  value="<?php echo $tamount ?>" placeholder="Enter Total Amount" class="form-control" required/> 
													
													</div>
                                            <label class="control-label col-md-2">Discount
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="discount"  value="<?php echo $discount; ?>" id="discount" placeholder="Enter Discount" class="form-control txt1" /> </div>
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Net Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="namount"  id="namount"  value="<?php echo $namount; ?>" placeholder="Enter Net Amount" class="form-control" required/> 
													
													</div>
                                            <label class="control-label col-md-2">Paid Amount
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="pamount"  id="pamount" placeholder="Enter Paid Amount" value="<?php echo $pamount; ?>" class="form-control txt2" /> </div>
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Balance Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="balamount"  id="balamount"  value="<?php echo $bamount; ?>" placeholder="Enter Balance Amount" class="form-control" required/> 
													
													</div>
                                            <label class="control-label col-md-2">Remarks
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                    <textarea name="remarks"  id="remarks" placeholder="Enter Remarks" class="form-control" ><?php echo $remarks; ?></textarea> </div>
                                            
											
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-2">Payment Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select name="paymenttype"  id="paymenttype" required class="form-control" required> 
													<option value="">Select Payment</option>
													<option value="cash" <?php if($paymenttype=="cash"){echo 'selected';} ?>>Cash</option>
													<option value="card" <?php if($paymenttype=="card"){echo 'selected';} ?>>Card</option>
														<option value="paytm"  <?php if($paymenttype=="paytm"){echo 'selected';} ?>>Paytm</option>
													</select>
													</div>
                                           
                                                
											
											</div>
                                           
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="Submit" class="btn btn-info">Submit</button>
                                                    <a href="supportsbilllist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
	   
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
function calculateSum25(id){
	//
	var sqty=$('#sqty'+id).val();
	alert(sqty);
	var amount=$('#amount'+id).val();
	
	var tot=parseFloat(sqty)*parseFloat(amount);
	
	$('#total'+id).val(tot.toFixed(2));
	calculateSum();
}


$(function() {
    for(var i=1;i<=10;i++){
    //autocomplete
    $(".tname"+i).autocomplete({
        source: "set1999.php",
        minLength: 1
    });  
	}
	
});
	   $(document).ready (function(){ 
$(".txt").each(function(){
$(this).keyup(function(){
calculateSum()
;})
});

$(".tet").change(function(){
	id = $(this).attr('data-row');
	//size=
	alert(id);
	showUser(id);
});

$(".tet1").change(function(){
	id = $(this).attr('data-row');
	sname=$("#sname"+id).val();
		size=$("#size"+id).val();
	//alert(sname);
	showHint(id);
});





$(".txt1").each(function(){
$(this).keyup(function(){
calculateSum1()
;})
});


$(".txt2").each(function(){
$(this).keyup(function(){
calculateSum2()
;})
});



});

var i=20;
$(".addmore").on('click',function(){
	
	var data ="<tr>";
    data +="<td><input type='checkbox' class='case'/></td>";
	data +="<td><select name='sname[]' data-row='"+i+"'  id='sname"+i+"' style='width:150px;' class='form-control tet' onChange='showUser("+i+")'  ><option value=''>Select Product Name</option>";
	<?php 
	$query1 = "SELECT distinct 	PRODUCT_NAME FROM phr_purinv_support1";
	$r=mysqli_query($link,$query1) or die(mysqli_error($link));
	while($r1=mysqli_fetch_array($r)){
	?>
	data +="<option value='<?php echo $r1["PRODUCT_NAME"]; ?>'><?php echo $r1["PRODUCT_NAME"]; ?></option>";
	<?php }?>
	data +="</select></td>";
	data +="<th> <select name='size[]' data-row='"+i+"'  id='size"+i+"' style='width:150px;' class='form-control tet1' onChange='showHint("+i+")' ><option value=''>Select Batch No</option></select></th>";
	data +="<th> <input type='text' name='aqty[]' data-row='"+i+"'  id='aqty"+i+"'  class='form-control col-md-6 ' /> <input type='hidden' name='sid[]' data-row='"+i+"'  id='sid"+i+"'  class='form-control col-md-6 ' /> </th>";
	data +="<th> <input type='text' name='sqty[]' data-row='"+i+"'  id='sqty"+i+"' class='form-control col-md-6 ' onkeyup='calculateSum25("+i+")' /> </th>";
	data +="<th> <input type='text' name='amount[]' data-row='"+i+"'  id='amount"+i+"'  class='form-control col-md-6' /> </th>";
	data +="<th> <input type='text' name='total[]' data-row='"+i+"'  id='total"+i+"'  class='form-control col-md-6 txt' /> </th>";
	data +="</tr>";
												   
	$('#table').append(data).find('#table>tbody>tr:nth-child(2)');
	
	i++;
});










function calculateSum(){
var sum=0;
$(".txt").each(function(){
if(!isNaN(this.value)&&this.value.length!=0){
sum+=parseFloat(this.value)
;}});
$("#tamount").val(sum.toFixed(2));
$("#namount").val(sum.toFixed(2));

var p=$("#pamount").val();

var n=$("#namount").val();
//alert(n);
var bal=parseFloat(n)-parseFloat(p);
$("#balamount").val(bal.toFixed(2))

;}


function calculateSum1(){
var sum1=0;
$(".txt1").each(function(){
if(!isNaN(this.value)&&this.value.length!=0){
sum1+=parseFloat(this.value)
;}});
$t=$("#tamount").val();

$d=$("#discount").val();
$n=parseFloat($t)-parseFloat($d);
$("#namount").val($n);
$("#balamount").val($n);
}



function calculateSum2(){
var sum2=0;
$(".txt2").each(function(){
if(!isNaN(this.value)&&this.value.length!=0){
sum2+=parseFloat(this.value)
;}});
//$("#tamount").val(sum.toFixed(2));
$ts=$("#namount").val();
$pm=$("#pamount").val();
$bm=parseFloat($ts)-parseFloat($pm);
$("#balamount").val($bm);

;}
	   </script>
	    <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>