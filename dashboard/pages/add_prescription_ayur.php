<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/support_ayur.php');
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
	
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search216.php?q="+str,true);
xmlhttp.send();
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
                                <div class="page-title">Ayurvedic Prescription Form</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Ayurvedic Prescription Form</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Ayurvedic Prescription Form</header>
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
								
								<div class="card-head">
                                    <header>Mobile No:</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>  <div class="col-md-4">
				                        <form name="frm" method="post" action="add_prescription_ayur.php">
										<input type="text" name="mobile" placeholder="Mobile No" class="form-control" required ></div>
										<div><input type="submit" value="Find MR No" name="subk" class="btn btn-primary">
										</form>
                                </div></div>
								
								<?php if(isset($_POST['subk'])){
									 $q=$_POST["mobile"];
//$itype=$_GET['itype'];

	 $sql="SELECT  * FROM patientregister WHERE phoneno = '$q'";
	$result = mysqli_query($link,$sql);
	$r1=mysqli_fetch_array($result);
	$mrno=$r1['registerno'];
	 $patientname=$r1['patientname'];
								}
								
	?>
								
                                <div class="card-body" id="bar-parent">
								
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post">
                                        <div class="form-body">
										
                                        <div class="form-group row">
                                                <label class="control-label col-md-2">MR No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="mrno"  value="<?php echo $mrno?>" id="mrno" placeholder="Enter MRNO" class="form-control mrno" required onChange="showHint5(this.value)"/> 
													 
													 <input type="hidden" name="user" id="user" value="<?php echo $ses; ?>"/>
													 </div>
                                            
											<label class="control-label col-md-2">Patient Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="pname" data-required="1" value="<?php echo $patientname?>" id="pname"  placeholder="Enter Patient Name" class="form-control" required/> 
													
													</div>
                                            
											
											</div>
											
											
										<!--	
											<div class="form-group row">
                                                <label class="control-label col-md-2">Supports
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select name="supports[]" multiple  validate="required:true"  id="supports" > 
													
													<?php

													foreach($result as $key=>$t){?>

													<option value="<?php echo $t['sname']; ?>"><?php echo $t['sname']; ?></option>
													
												<?php	}?>

													
													 </select>
													 </div>
                                            	</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Clinical Summary
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-10">
                                                    <textarea type="text" name="clinicalsummary" data-required="1" rows="5" id="clinicalsummary"  placeholder="Enter clinical Summary" class="form-control" ></textarea> 
													
													</div>
                                            
											
											</div>
											-->
											
											
											<div class="form-group row">
											<div class="col-md-12">
											<table class=" full-width" >
					                                      
					                                        <tr>
	<th>Drug Name</th>
	<th style="width:60px;">Qty</th>
	<th style="width:120px;">Frequency</th>
	<th style="width:150px;">Time </th>
	<th style="width:220px;">Duration</th>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname0" name="dname[]" id="dname0" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty0" /></td>
	<td><select class="freequency0"  id="freequency0" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time0" id="time0" multiple validate="required:true" >
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration0" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname1" name="dname[]" id="dname1" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty1" /></td>
	<td><select  id="freequency1" class="freequency1" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time1" id="time1" multiple validate="required:true">
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration1" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname2" name="dname[]" id="dname2" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty2" /></td>
	<td><select  id="freequency2" class="freequency2" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time2" id="time2" multiple validate="required:true">
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration2" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname3" name="dname[]" id="dname3" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty3" /></td>
	<td><select  id="freequency3" class="freequency3" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time3" id="time3" multiple validate="required:true" >
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration3" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname4" name="dname[]" id="dname4" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty4" /></td>
	<td><select  id="freequency4" class="freequency4" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" class="time4" id="time4" multiple validate="required:true" >
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration4" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname5" name="dname[]" id="dname5" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty5" /></td>
	<td><select  id="freequency5" class="freequency5" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time5" class="time5"   multiple validate="required:true">
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration5" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname6" name="dname[]" id="dname6" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty6" /></td>
	<td><select  id="freequency6" class="freequency6" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time6" class="time6" multiple validate="required:true" >
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration6" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname7" name="dname[]" id="dname7" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty7" /></td>
	<td><select  id="freequency7" class="freequency7" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time7" class="time7" multiple validate="required:true" >
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration7" /></td>
	
	
	</tr>
	<tr>
	<td><input type="text" class="form-control dname8" name="dname[]" id="dname8" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty8" /></td>
	<td><select  id="freequency8" class="freequency8" name="freequency[]" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select></td>
	<td><select  name="time[]" id="time8" class="time8" multiple validate="required:true" >
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration8" /></td>
	
	
	</tr>
	
	<tr>
	<td><input type="text" class="form-control dname9" name="dname[]" id="dname9" /></td>
	<td><input type="text" class="form-control" name="qty[]" id="qty9" /></td>
	<td>
	<select  id="freequency9" name="freequency[]" class="freequency9" multiple validate="required:true">
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="Night">Night</option>
	
	
	</select>
	
	
	
	</td>
	<td><select  name="time[]" id="time9" class="time9" multiple validate="required:true" >
	
	<option value="Before Breakfast">Before Breakfast</option>
	<option value="After Breakfast">After Breakfast</option>
	<option value="Before Lunch">Before Lunch</option>
	<option value="After Lunch">After Lunch</option>
	<option value="Before Dinner">Before Dinner</option>
	<option value="After Dinner">After Dinner</option>
	</select>
	</td>
	<td><input type="text" class="form-control" name="duration[]" id="duration9" /></td>
	
	
	</tr>
											</table>
											
											</div>
                                            </div>
                                            
											
											
											
											
                                           
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                                    <a href="prescriptionlist_ayur.php"><button type="button" class="btn btn-default">Cancel</button></a>
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



//$(function() {
    //for(var i=1;i<=10;i++){
    //autocomplete
    $(".dname0").autocomplete({
        source: "setd9.php",
        minLength: 1
    }); 

$(".dname1").autocomplete({
        source: "setd9.php",
        minLength: 1
    });

$(".dname2").autocomplete({
        source: "setd9.php",
        minLength: 1
    });

$(".dname3").autocomplete({
        source: "setd9.php",
        minLength: 1
    });

$(".dname4").autocomplete({
        source: "setd9.php",
        minLength: 1
    });

$(".dname5").autocomplete({
        source: "setd9.php",
        minLength: 1
    });
$(".dname6").autocomplete({
        source: "setd9.php",
        minLength: 1
    });
$(".dname7").autocomplete({
        source: "setd9.php",
        minLength: 1
    });$(".dname8").autocomplete({
        source: "setd9.php",
        minLength: 1
    });
$(".dname9").autocomplete({
        source: "setd9.php",
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
		
		});
</script>
<script>
$(document).ready(function(){
$('#form_sample_1').on('submit', function(event){
  event.preventDefault();
  var mrno=$("#mrno").val();
  var pname=$("#pname").val();
  var supports=$("#supports").val();
  var user=$("#user").val();
  
  var clinicalhistory=$("#clinicalsummary").val();
 
  var dataString='pname='+ pname + '&mrno=' + mrno+'&user='+ user + '&supports=' + supports+'&clinicalhistory='+ clinicalhistory+'&';
  for(var i= 0;i< 10;i++){
	  
   dataString += "dname"+i+"="+ $(".dname"+i).val() +"&qty"+i+"="+ $("#qty"+i).val() +"&freequency"+i+"="+ $(".freequency"+i).val() +"&time"+i+"="+ $(".time"+i).val() +"&duration"+i+"="+ $("#duration"+i).val()+"&";
   
  }
  //alert(dataString);
  var form_data = $('#form_sample_1').serialize();
  $.ajax({
   url:"prepatientregister_insert_ayur.php",
   method:"POST",
   data:dataString,
   success:function(data)
   {
	//$('.time0 option:selected').each(function(){
    // $(this).prop('selected', false);
    //});
	//$('.time1').multipleSelect('refresh');
	window.location.href = "print_ayur.php?mrno="+data;
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