<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?>
<?php include("header.php");?>

 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
 $xxx1="SELECT * FROM `validity`";
$abcd1=mysqli_query($link,$xxx1);
 //$cnt=mysql_num_rows($abcd);
	$row2=mysqli_fetch_array($abcd1);
	 $valid_days=$row2['vdays'];
	  $valid=date('Y-m-d', strtotime("+$valid_days days"));

?>

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Suvarnaprashan Calender </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="calender.php">Suvarnaprashan Calender List</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Suvarnaprashan Calender</li>
                            </ol>
                        </div>
                    </div>
					
					
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Suvarnaprashan Calender</header>
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
									$date=$_POST['date'];
									
									$sq=mysqli_query($link,"insert into suvarna_cal(`date1`)
									values('$date')");
									if($sq){ print "<script>";
			print "alert('Sucessfully Register');";
			print "self.location='calender.php';";
			print "</script>";
								}
								
								}?>
								
								<form name="form" method="post" action="">
                                
								
								
								<div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                       
										
											<div class="form-group">
	                                            <label>Suvarnaprashan Calender :</label>
												
												<table width="100%"><tr><td>
												<input type="date" name="date" class="form-control" value="<?php echo date('Y-m-d');?>" required> 
												</td><td>
												
												</td></tr></table>
 
 </div>
										
											
											
											
											
											
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
										
										
										
										
									
												
										
										
										
									
									   
									   
									   
									   
									   
										
										
                                   	
                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Submit" name="submit">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='calender.php'">Cancel</button>
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