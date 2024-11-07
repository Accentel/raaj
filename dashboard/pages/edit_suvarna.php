<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?>
<?php include("header.php");?>



			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Suvarnaprashan </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="suvarna.php">Suvarnaprashan</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Suvarnaprashan</li>
                            </ol>
                        </div>
                    </div>
					
					
					<?php $id=$_GET['reg'];
					$sq=mysqli_query($link,"select * from suvarna where id='$id'");
					$r=mysqli_fetch_array($sq);?>
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Edit Suvarnaprashan</header>
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
												
												<input type="text" class="form-control"  value="<?php echo $r['name'];?>"  name="pname" id="pname" required="required" /></td></tr></table>
 
 </div>
										
											
											
												<div class="form-group">
	                                            <label>Gender </label><br /><?php $sex=$r['sex'];?>
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
                                            <label>Date of Birth :</label>
											
											
											
											 <input type="date" name="dob" id="dob" value="<?php echo $r['dob'];?>"  class="form-control" type="text"  size="20"   />
	                                            
                                        </div>
										<div class="form-group">
                                            <label>Height :</label>
											
											
											
											 <input type="text" name="height" id="height" value="<?php echo $r['height'];?>" class="form-control" type="text"  size="20"   />
	                                            
                                        </div>
										<div class="form-group">
	                                            <label>Address</label>
												<textarea name="address" class="form-control"><?php echo $r['addr'];?></textarea></div>
											
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
										
										<div class="form-group">
	                                            <label>UID No</label>
												 <input type="text" class="form-control" name="uid_no" value="<?php echo $r['uid_no'];?>" required id="uid_no"  ></div>
										<div class="form-group">
	                                            <label>Age</label>
												 <input type="text" class="form-control" name="age" value="<?php echo $r['age'];?>" required id="age"  ></div>
										<div class="form-group">
	                                            <label>Patient Mobile</label>
	                                            <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $r['contact'];?>"  required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	                                        </div><div class="form-group">
									  <label>Weight :</label>
											
											
											
											 <input type="text" name="weight" id="weight" value="<?php echo $r['weight'];?>" class="form-control" type="text"  size="20"   />
	                                            
                                        </div>
									   <div class="form-group">
	                                            <label>Camp Date</label>
												<select name="camp_date" class="form-control" required>
												<option value="<?php echo $r['camp_date'];?>"><?php echo $r['camp_date'];?></option>
												<?php $sq1=mysqli_query($link,"select * from suvarna_cal order by date1");
while($rx=mysqli_fetch_array($sq1)){?>											
								<option value="<?php echo $rx['date1'];?>"><?php echo $rx['date1'];?></option>
<?php }?>
								</select>			</div>
									
									    <input type="hidden" class="form-control" name="idx" id="idx" value="<?php echo $r['id'];?>"  required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	                                        
								
									   
									   
										
										
                                   	
                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Update" name="submit">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='suvarna.php'">Cancel</button>
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
									$dob=$_POST['dob'];
									$uid_no=$_POST['uid_no'];
									 $idx=$_POST['idx'];
									$date=date('Y-m-d');
									//echo $id1=$_POST['id1'];
									$camp_date=$_POST['camp_date'];
									$id=$_GET['reg'];
									$weight=$_POST['weight'];
										$height=$_POST['height'];
									 $a="update   suvarna set `uid_no`='$uid_no', `pname_type`='$pname_type', `name`='$pname',
									`age`='$age', `sex`='$sex', `dob`='$dob', `addr`='$address', `contact`='$mobile',camp_date='$camp_date',weight='$weight',height='$height' where id='$id'";
									
									$sq=mysqli_query($link,$a);
									if($sq){ print "<script>";
			print "alert('Sucessfully Updated');";
			print "self.location='suvarna.php';";
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