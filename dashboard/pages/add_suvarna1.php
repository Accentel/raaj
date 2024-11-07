<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?>
<?php include("header.php");?>

 <?php

//$abc=$_GET['id'];

$y=date('y');
$s=mysqli_query($link,"select distinct (`registerno`) as reg,registerdate from patientregister");
while($r1=mysqli_fetch_array($s)){
$new=$r1['reg'];
}
$qs=mysqli_query($link,"select max(`reg_no`) as id from patientregister ");
$r2=mysqli_fetch_array($qs);
   $new1=$r2['id'];
 if($new1!=''){
	 
	 $output = explode("-",$new1);
	 $da=$output[count($output)-1];
 $reg1=$da+1;
$reg=("RH-$y-".($reg1));

 }else {
	$reg= ("RH-$y-".($new1+101));
 }


	
	$abc=mysqli_query($link,"select distinct max(reg_id)+0,registerdate from patientregister");
	$row1=mysqli_fetch_array($abc);
	//echo $row1[0]+1;
	$date=$row1['registerdate'];
	 //$dd=date("Y-m-d", strtotime("$date"));
	 
	
	//date('Y-m-d' strtotime($date));

if($abc){
	
	
}
else
{
echo "allredy exit";

}
//$ddd=date('Y-m-d');
//echo $date = strtotime("-1 day", $ddd);
 $date=date('Y-m-d', strtotime('-1 days'));
  $xxx="select * from patientregister where registerdate='$date' and pat_type='OP'";
$abcd=mysqli_query($link,$xxx);
 $cnt=mysqli_num_rows($abcd);
	//$row1=mysql_fetch_array($abc);
	//echo $row1[0]+1;
	//$date=$row1['registerdate'];
	//echo $dd=date("Y-m-d", strtotime("$date"));

?><?php 
 $xxx1="SELECT * FROM `validity_days`";
$abcd1=mysqli_query($link,$xxx1);
 //$cnt=mysql_num_rows($abcd);
	$row2=mysqli_fetch_array($abcd1);
	 $valid_days=$row2['valid_days'];
	  $valid=date('Y-m-d', strtotime("+$valid_days days"));

?>

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Suvarnaprashan </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="suvarna.php">Suvarnaprashan</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Suvarnaprashan</li>
                            </ol>
                        </div>
                    </div>
					
					
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Suvarnaprashan</header>
									<hr>
                                 <form name="frm" method="post" ><table width="100%"><tr><td align="right">  Search UID No:</td><td>
                                  <input id=\"regk\" list=\"city1\" name="reg"  class="form-control"required >
<datalist id=\"city1\" >
<?php 
$sql="select distinct uid_no,name from suvarna ";  // Query to collect records
$r=mysqli_query($link,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($r)) {
	
	echo  "<option value='$row[uid_no]'/>$row[name] </option>"; 
//echo  "<option value=\"$row[uid_no]\"/>"; // Format for adding options 
}
////  End of data collection from table /// 

echo "</datalist>";?>
</td><td>
<input name="submit1" type="submit" value="" style="background:url(../img/go1.gif);width:42px;height:22px;border-style:none;" />
           </td></tr></table> </form>                  

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
								
								
								<?php if(isset($_POST['submit'])){
									$pname_type=$_POST['pname_type'];
									$pname=$_POST['pname'];
									$sex=$_POST['sex'];
									$address=$_POST['address'];
									$age=$_POST['age'];
									$mobile=$_POST['mobile'];
									$dob=$_POST['dob'];
									$uid_no=$_POST['uid_no'];
									$date=date('Y-m-d');
										$camp_date=$_POST['camp_date'];
										$weight=$_POST['weight'];
										$height=$_POST['height'];
									//$oth_comp=$_POST['oth_comp'];
									$sq=mysqli_query($link,"insert into suvarna(`uid_no`, `pname_type`, `name`, `age`, `sex`, `dob`, `addr`, `contact`, `date`,`camp_date`,pat_type,`height`,weight)
									values('$uid_no','$pname_type','$pname','$age','$sex','$dob','$address','$mobile','$date','$camp_date','Existing','$height','$weight')");
									if($sq){ print "<script>";
			print "alert('Sucessfully Register');";
			print "self.location='suvarna.php';";
			print "</script>";
								}
								
								}?>
								<?php 
								$abc=mysqli_query($link,"select distinct max(id)+0 as id1 from suvarna");
	$row1=mysqli_fetch_array($abc);
	$max=$row1['id1']+1;
								?>
								
								
								<?php if(isset($_POST['submit1'])){
									$reg=$_POST['reg'];
									$sq=mysqli_query($link,"select * from suvarna where uid_no='$reg'");
									$r2=mysqli_fetch_array($sq);
								}	?>
								<form name="form" method="post" action="">
                                
								
								
								<div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                       <div class="form-group">
	                                            <label><strong>Patient Type :</strong></label>
												
												<table width="100%"><tr><td>
												
												<input type="radio" name="type" value="New" onclick="javascript:location.href='add_suvarna.php'"  >New
												<input type="radio" name="type" checked="checked"  value="Existing">Existing
												
												</td><td>
												
												</td></tr></table>
 
 </div>
										
											<div class="form-group">
	                                            <label>Patient Name :</label>
												
												<table width="100%"><tr><td>
												
												<select name="pname_type" required class="form-control" >
				<option value="<?php echo $r2['pname_type'];?>"><?php echo $r2['pname_type'];?></option>								
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Master">Master</option>
<option value="Baby">Baby</option>
<option value="B/O">B/O</option>
</select></td><td>
												
												<input type="text" class="form-control"  name="pname" value="<?php echo $r2['name'];?>" id="pname" required="required" /></td></tr></table>
 
 </div>
										
											
											
												<div class="form-group">
	                                            <label>Gender </label><br />
												<?php $sex=$r2['sex'];
												if($sex=='male'){?>
	                                         <input type="radio" class="" required="required" name="sex" checked="checked" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
												<?php } else if($sex=='female'){?>
											   <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" checked="checked" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
												<?php } else if($sex=='Others'){?>
											   <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" checked="checked" id="sex3" value="Others"/> Others
												<?php } else {?>
												 <input type="radio" class="" required="required" name="sex" id="sex1" value="male"/> Male
											 <input type="radio" required="required" name="sex" id="sex2" value="female"/> Female
                                              <input type="radio" required="required" name="sex" id="sex3" value="Others"/> Others
												<?php }?>
	                                        </div>
											
											
											
											<div class="form-group">
                                            <label>Date of Birth :</label>
											
											
											
											 <input type="date" name="dob" id="dob" value="<?php echo $r2['dob'];?>" class="form-control" type="text"  size="20"   />
	                                            
                                        </div>
										<div class="form-group">
                                            <label>Height :</label>
											
											
											
											 <input type="text" name="height" id="height" value="<?php echo $r2['height'];?>" class="form-control" type="text"  size="20"   />
	                                            
                                        </div>
										<div class="form-group">
	                                            <label>Address</label>
												<textarea name="address" class="form-control"><?php echo $r2['addr'];?></textarea></div>
											
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
										
										<div class="form-group">
	                                            <label>UID No</label>
												 <input type="text" class="form-control" value="<?php echo $r2['uid_no'];?>" readonly name="uid_no" required id="uid_no"  ></div>
										<div class="form-group">
	                                            <label>Age</label>
												 <input type="text" class="form-control" value="<?php echo $r2['age'];?>" name="age" required id="age"  ></div>
										<div class="form-group">
	                                            <label>Patient Mobile</label>
	                                            <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $r2['contact'];?>"  required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	                                        </div>
											<div class="form-group">
                                            <label>Weight :</label>
											
											
											
											 <input type="text" name="weight" id="weight" value="<?php echo $r2['weight'];?>" class="form-control" type="text"  size="20"   />
	                                            
                                        </div>
										<div class="form-group">
	                                            <label>Camp Date</label>
												<select name="camp_date" class="form-control" required>
												<option value="">Select Camp Date</option>
												<?php $sq1=mysqli_query($link,"select * from suvarna_cal order by date1");
while($r=mysqli_fetch_array($sq1)){?>											
								<option value="<?php echo $r['date1'];?>"><?php echo $r['date1'];?></option>
<?php }?>
								</select>			</div>
                                        
												
										
										
										
									   
									   
									   
									   
									   
										
										
                                   	
                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Submit" name="submit">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='suvarna.php'">Cancel</button>
                                                </div>
                                            	</div>
                                        	</div>
                            </div>
                        </div>
                    </div>
					
					</form>
					
					
              
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