<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
include('../db/insert_roomno.php');
include("header.php");?>
<script>
function showtest(str){
	
	if(str=="Yes"){
		document.getElementById('gtest1').style.display="block";
	}else{
		document.getElementById('gtest1').style.display="none";
	}
	
	
	
}
function showuser(str)
{
	
		
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
	document.getElementById("rtype").innerHTML=show;
	//document.location.reload();
    }
  }
xmlhttp.open("GET","get_rtype.php?q="+str,true);
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
                                <div class="page-title">Add Room No </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Ward</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Room No </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Room No</header>
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
                                                <label class="control-label col-md-3">Location
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select name="ltype"  id="ltype" class="form-control " required onChange="showuser(this.value)">
													<option value="">Select Location</option>
													<?php foreach($result as $key=>$v){ ?>
													<option value="<?php echo $v['id']; ?>"><?php echo $v['lname']; ?></option>
													<?php }?>
													</select>
                                            </div>
                                            </div>		
										
										<div class="form-group row">
                                                <label class="control-label col-md-3">Room Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select name="rtype"  id="rtype" class="form-control " required>
													<option value="">Select Room Type</option>
													
													</select>
                                            </div>
                                            </div>	
											
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Room No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="rno" data-required="1" id="rno" placeholder="Enter Department Name" class="form-control " value="<?php if(isset($rno)){echo $rno;} ?>" required/>
													<input name="user" id="user" type="hidden"  class="form-control input-height" value="<?php echo $ses; ?>" /> 
													<span class="required"><?php if(isset($errorrno)){echo $errorrno;} ?></span>
                                            </div>
                                            </div>
                                           
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                                    <a href="roomslist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
	   <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>