<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/supportlist1.php');
include('../db/supportlist.php');
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
<link rel="stylesheet" href="multiple-select.css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Campus Summary Form</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Campus Summary Form</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Campus Summary Form</header>
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
                                                <label class="control-label col-md-2">Campus
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select name="campus"  id="mrno" class="form-control" required >
													<option value="">Select Campus</option>
													<?php 

												$r1=mysqli_query($link,"select * from campus") or die(mysqli_error($link));
												while($row1=mysqli_fetch_array($r1)){
											  ?>
												<option value="<?php echo $row1['id']; ?>"><?php echo $row1['cam_name']; ?></option>
												<?php }?>
												</select> 
													 
													 
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
                                            <label class="control-label col-md-2">Mobile No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="mobile" maxlength="10"   id="mobile" value="" class="form-control " onkeypress='return event.charCode >= 48 && event.charCode <= 57'  /> 
													 
													 
													 </div>
											
                                            
											
											</div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                
                                                <div class="col-md-8">
                                                    <textarea name="addr" id="complaints"  rows="5" placeholder="Enter Complaints" class="form-control" ></textarea> 
													
													</div>
                                            
											
											</div>
											
											
											
											
											
                                             
											
                                           
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                                    <a href="campussummarylist1.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
 

 
	    <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>