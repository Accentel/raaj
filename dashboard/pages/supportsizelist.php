<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
include('../db/supportsizelist.php');
include("header.php");?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Support Size  List</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Ortho</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Support Size List</li>
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
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group">
					                                                <a href="addsupportsize.php" id="addRow" class="btn btn-info">
					                                                    Add New <i class="fa fa-plus"></i>
					                                                </a>
					                                            </div>
					                                        </div>
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group pull-right">
					                                                <a class="btn deepPink-bgcolor  btn-outline" onclick="window.open('supportsprint.php','mywindow','width=700,height=500,toolbar=no,menubar=no,scrollbars=yes')">Report
					                                                    
					                                                </a>
					                                                
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div class="table-scrollable">
                                      					   <table class="table table-hover table-checkable order-column full-width" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th>id</th>
																	
					                                                <th> Support Name </th>
																	<th> Size</th>
																	<th> Amount</th>
																	<th> Qty</th>
					                                                
					                                                <th> Action </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
															<?php $i=1;	foreach ($result as $key => $res) { ?>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<?php echo $i; ?>
																	</td>
																	<td><?php echo $res['sname'] ?></td>
																	<td><?php echo $res['size'] ?></td>
																	<td><?php echo $res['amount'] ?></td>
																	<td><?php echo $res['qty'] ?></td>
																	
																	<td>
																		<a href="edit_supportsize.php?id=<?php echo $crud->my_simple_crypt($res['id'],'e'); ?>" class="btn btn-primary btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a href="../db/delete_supportsize.php?id=<?php echo $crud->my_simple_crypt($res['id'],'e'); ?>" onclick="confirm('are you sure delete a record?')" class="btn btn-danger btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																
															<?php $i++; }?>
																							
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