<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?>
<?php include("header.php");?>

 <?php

$id=$_GET['reg'];

$y=date('y');
$s=mysqli_query($link,"select * from asthama where id='$id'");
$r=mysqli_fetch_array($s);
$new=$r1['reg'];

	 
	?>

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Asthama and Allergy </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="asthama.php">Asthama and Allergy</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Asthama and Allergy</li>
                            </ol>
                        </div>
                    </div>
					
					
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Edit Asthama and Allergy</header>
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
								
								
								
								
								<form name="form" method="post" action="">
                                
								
								
								<div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                       
										
											<div class="form-group">
	                                            <label>Patient Name :</label>
												
												<table width="100%"><tr><td>
												
												<select name="pname_type" required class="form-control" >
												
												<option value="<?php echo $r['pname_type'];?>"><?php echo $r['pname_type'];?></option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Master">Master</option>
<option value="Baby">Baby</option>
<option value="B/O">B/O</option>
</select></td><td>
												
												<input type="text" class="form-control" value="<?php echo $r['pname'];?>"  name="pname" id="pname" required="required" /></td></tr></table>
 
 </div>
										
											
											
												<div class="form-group">
												<?php $sex=$r['sex'];?>
	                                            <label>Gender </label><br />
												<?php if($sex=='male'){?>
	                                         <input type="radio" class="" checked required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
												<?php } else if($sex=='female'){?>
											  <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" checked name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
												<?php } else if($sex=='Others'){?>
											  <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" checked id="sex3" value="Others"/> Others
												<?php } else{?>
												  <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
												<?php }?>
	                                        </div>
											
											<div class="form-group">
	                                            <label>Address</label>
												<textarea name="address" class="form-control"><?php echo $r['address'];?></textarea></div>
											
											<div class="form-group">
                                            <label>Other Complains :</label>
											
											
											
											 <textarea name="oth_comp" id="oth_comp"  class="form-control" type="text"  size="20"   /><?php echo $r['oth_comp'];?></textarea>
	                                            
                                        </div>
											
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
										
										
										<div class="form-group">
	                                            <label>Age</label>
												 <input type="text" class="form-control" value="<?php echo $r['age'];?>"  name="age" required id="age"  ></div>
										<div class="form-group">
	                                            <label>Patient Mobile</label>
	                                            <input type="text" class="form-control" value="<?php echo $r['mobile'];?>" name="mobile" id="mobile"  required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	                                        </div>
										
										
                                        <div class="form-group">
                                            <label>Affected Since</label>
											
											<input name="affected" id="affected" value="<?php echo $r['affected'];?>" class="form-control" type="text"  size="20"  
 />
											
	                                            
												
                                        </div>
												
										
										
										
										<div class="form-group">
                                            <label>Other Medications :</label>
											
											
											
											 <textarea name="oth_med" id="oth_med"  class="form-control" type="text"  size="20"   /><?php echo $r['oth_med'];?> </textarea>
	                                            
                                        </div>
									  
									   
									   <input type="hidden" name="id" value="<?php echo $r['id'];?>">
									   
									   
									   
										
										
                                   	
                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Update" name="submit">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='asthama.php'">Cancel</button>
                                                </div>
                                            	</div>
                                        	</div>
                            </div>
                        </div>
                    </div>
					
					</form>
					
					<?php if(isset($_POST['submit'])){
									$pname_type=$_POST['pname_type'];
									$pname=$_POST['pname'];
									$sex=$_POST['sex'];
									$address=$_POST['address'];
									$age=$_POST['age'];
									$mobile=$_POST['mobile'];
									$affected=$_POST['affected'];
									$oth_med=$_POST['oth_med'];
									$date=date('Y-m-d');
									$id=$_POST['id'];
									$oth_comp=$_POST['oth_comp'];
									$sq=mysqli_query($link,"update  asthama set `pname_type`='$pname_type', `pname`='$pname', `sex`='$sex', `address`='$address', `age`='$age', `mobile`='$mobile',
									`affected`='$affected', `oth_med`='$oth_med',oth_comp='$oth_comp' where id='$id'");
									if($sq){ print "<script>";
			print "alert('Sucessfully Updated');";	
			print "self.location='asthama.php';";
			print "</script>";
								}
								
								}?>
              
            <!-- end page content -->
            <!-- start chat sidebar -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            
            <!-- end chat sidebar -->
      
        <!-- end page container -->
        <!-- start footer -->
		</div>
       <?php include("footer.php");?>
	     </div>
	    <?php 

}else

{

session_destroy();

session_unset();

header('Location:../../index.php');

}

?>