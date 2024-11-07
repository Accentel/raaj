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
                                <div class="page-title">Add Asthama and Allergy </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="asthama.php">Asthama and Allergy</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Asthama and Allergy</li>
                            </ol>
                        </div>
                    </div>
					
					
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Asthama and Allergy</header>
									
																		<hr>
                                 <form name="frm" method="post" ><table width="100%"><tr><td align="right">  Search Name:</td><td>
                                  <input id=\"regk\" list=\"city1\" name="reg"  class="form-control"required >
<datalist id=\"city1\" >
<?php 
$sql="select  pname from asthama ";  // Query to collect records
$r=mysqli_query($link,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($r)) {
echo  "<option value=\"$row[pname]\"/>"; // Format for adding options 
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
									$affected=$_POST['affected'];
									$oth_med=$_POST['oth_med'];
									$date=date('Y-m-d');
									$oth_comp=$_POST['oth_comp'];
									$sq=mysqli_query($link,"insert into asthama(`pname_type`, `pname`, `sex`, `address`, `age`, `mobile`, `affected`, `oth_med`,date1,oth_comp,pat_type)
									values('$pname_type','$pname','$sex','$address','$age','$mobile','$affected','$oth_med','$date','$oth_comp','Existing')");
									if($sq){ print "<script>";
			print "alert('Sucessfully Register');";
			print "self.location='asthama.php';";
			print "</script>";
								}
								
								}?>
								<?php if(isset($_POST['submit1'])){
									$reg=$_POST['reg'];
									$sq=mysqli_query($link,"select * from asthama where pname='$reg'");
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
												
												<input type="radio" name="type" value="New"  onclick="javascript:location.href='add_asthama.php'" >New
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
												
												<input type="text" class="form-control" value="<?php echo $r2['pname'];?>"  name="pname" id="pname" required="required" /></td></tr></table>
 
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
	                                            <label>Address</label>
												<textarea name="address" class="form-control"><?php echo $r2['address'];?></textarea></div>
											
											<div class="form-group">
                                            <label>Other Complains :</label>
											
											
											
											 <textarea name="oth_comp" id="oth_comp"  class="form-control" value="<?php echo $r2['oth_comp'];?>" type="text"  size="20"   /></textarea>
	                                            
                                        </div>
											
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
										
										
										<div class="form-group">
	                                            <label>Age</label>
												 <input type="text" class="form-control" name="age" required id="age" value="<?php echo $r2['age'];?>"  ></div>
										<div class="form-group">
	                                            <label>Patient Mobile</label>
	                                            <input type="text" class="form-control" name="mobile" id="mobile"  required="required" value="<?php echo $r2['mobile'];?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	                                        </div>
										
										
                                        <div class="form-group">
                                            <label>Affected Since</label>
											
											<input name="affected" id="affected"  class="form-control" type="text"  size="20"  value="<?php echo $r2['affected'];?>"  />
											
	                                            
												
                                        </div>
												
										
										
										
										<div class="form-group">
                                            <label>Other Medications :</label>
											
											
											
											 <textarea name="oth_med" id="oth_med"  class="form-control" type="text"  size="20"   /><?php echo $r2['oth_med'];?></textarea>
	                                            
                                        </div>
									  
									   
									   
									   
									   
									   
										
										
                                   	
                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Submit" name="submit">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='asthama.php'">Cancel</button>
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