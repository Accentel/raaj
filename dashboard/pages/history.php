<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
include('../db/prescriptionlist.php');
include("header.php");?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Patient History</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Patient History</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                                            <!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
                                <ul class="nav customtab nav-tabs" role="tablist">
	                                <li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >List View</a></li>
	                                
	                            </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card card-topline-red">
					                                <div class="card-head">
					                                    <header></header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                    <div class="row">
					                                        <div class="col-md-12 col-sm12 col-xs12">
															<div style="width:100%">
					                                       <div class="col-md-3 col-sm3 col-xs3" align="left" style="width:30%; float:left;">
					                                             <form name="frm" method="post" action="">  
					                                                   <b>MR NO:</b> 
																	   
																	   
																	   
																	   <select name="mr_num"  id="mrno"  class="form-control mrno"  onChange="showHint5(this.value)" required>
													<option value="">Select MR NO</option>
													<?php 
													
													$q="select distinct registerno,patientname  FROM   patientregister where doctorname='RAJSHRI SONI' order by reg_id  desc";
													$rt=mysqli_query($link,$q) or die(mysqli_error($link));
													while($r1=mysqli_fetch_array($rt)){
														?>
													<option value="<?php echo $r1['registerno']; ?>"><?php echo $r1['registerno']."(".$r1['patientname'].")"; ?></option>		<?php
													}
													?>
													
													</select>	
																	   
																	  <!-- 
																	   <input id=\"pname\" list=\"city1\" placeholder="Search by Mr No" class="form-control"  name="mr_num"  >
<datalist id=\"city1\" >

<?php 
$sql="select distinct registerno from patientregister where doctorname='RAJSHRI SONI' ";  // Query to collect records
$r=mysqli_query($link,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($r)) {
echo  "<option value=\"$row[registerno]\"/>"; // Format for adding options 
}
////  End of data collection from table /// 

echo "</datalist>";?>-->
																	   
																
																	  
					                                              
					                                            </div>
																
																<div class="col-md-3 col-sm3 col-xs3" align="left"  style="width:30%; float:left;">
					                                               
					                                                  <b> Mobile No:</b>
<input id=\"pname1\" list=\"city2\" placeholder="Search by Mobile" class="form-control"  name="mobile"  >
<datalist id=\"city2\" >

<?php 
$sql="select distinct phoneno from patientregister  where doctorname='RAJSHRI SONI'";  // Query to collect records
$r=mysqli_query($link,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($r)) {
echo  "<option value=\"$row[phoneno]\"/>"; // Format for adding options 
}
////  End of data collection from table /// 

echo "</datalist>";?>

																	
																	  
					                                              
					                                            </div>
																
																<div class="col-md-3 col-sm3 col-xs3" align="left"  style="width:30%; float:left;">
					                                               <br/>
					                                                 <input type="submit" name="sub" value="Submit" class="btn btn-primary">
																	  
					                                              
					                                            </div></div>
					                                        </div></form>
					                                        
					                                    </div>
					                                    <div class="table-scrollable">
                                      					   <table class="table table-hover table-checkable order-column full-width" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th></th>
																	 <th> MR NO </th>
					                                                <th> Patient Name </th>
					                                                 <th> Mobile </th>
					                                                <th> Action </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
															<?php 
															if(isset($_POST['sub'])){
															$mr_num=$_POST['mr_num'];
															$mobile=$_POST['mobile'];
															if($mr_num!=''){
																 $a="select * from patientregister where registerno='$mr_num'";
															$sq=mysqli_query($link,$a);
															} else {
															$sq=mysqli_query($link,"select * from patientregister where phoneno='$mobile'");
															}
															while($r=mysqli_fetch_array($sq)){?>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="img/doc/doc1.jpg" alt="">
																	</td>
																	<td><?php echo $mrnum=$r['registerno']; ?></td>
																	<td><?php echo $r['patientname']; ?></td>
																		<td><?php echo $r['phoneno']; ?></td>
																	<td>
																		
																		<a href="" onclick="window.open('print26.php?id=<?php echo $mrnum; ?>','mywindow','width=700,height=500,toolbar=no,menubar=no,scrollbars=yes')" class="btn btn-primary btn-xs">
																			<i class="fa fa-print"></i>
																		</a>
																		
																	</td>
																</tr>
																
															<?php } }?>
																							
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    
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