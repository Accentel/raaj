<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?>
<?php include("header.php");?>
	

<script>
function reportxx(){
	var fdate = document.getElementById("fromdate").value;
	var tdate = document.getElementById("todate").value;
		var sb=document.form.sortby.value;
		if (document.form.sortby.value == "") {
				alert("Please select category.");
				document.sortby.focus();
				return (false);
				}
	window.open('daterefdoctamount_collection.php?sdate='+fdate+'&edate='+tdate+'&sb='+sb,'Mywindow','width=1020,height=800,toolbar=no,menubar=no');
}
</script>		

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                </li>
                                <li class="active">Date Wise Referal Doctors Amount Report</li>
                            </ol>
                        </div>
                    </div>
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Date Wise Referal Doctors Amount Report</header>
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
								
								<form name="form" method="post" >
                                <div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                        <div class="form-group">
	                                            <label>From Date</label>
	                                            <input type="date" class="form-control" name="fromdate" required value="<?php echo date('Y-m-d')?>"  id="fromdate" >
	                                        </div>
											
											 <div class="form-group">
	                                            <label>To Date</label>
	                                            <input type="date" class="form-control" required="required" value="<?php echo date('Y-m-d')?>" name="todate" id="todate" >
	                                        </div>
											<div class="form-group">
	                                            <label>Sort By</label>
												<select name="sortby" class="form-control" onChange="funconce(this.value);" required>
												<option value="<?php echo $concession_type?>"><?php echo $concession_type?></option>
	<?php if($concession_type!='ALL'){?><option value="ALL">All</option><?php }?>
    
	<?php if($concession_type!='Ortho'){?><option value="Ortho">Ortho</option><?php }?>
    <?php if($concession_type!='General'){?> <option value="General">General</option><?php }?>
    <?php if($concession_type!='Ayurvedic'){?> <option value="Ayurvedic">Ayurvedic</option><?php }?>
		<!--<option value="Bank">Bank</option>-->
        <!--<option value="Insurence">Insurence</option>-->
	</select>
	                                          
	                                        </div>
									   
									   <input type="hidden" value="<?php echo $ses?>" class="form-control" name="ses" id="ses" >
										
										
                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" name="submit" value="Report"  onclick="reportxx();">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='dashboard.php'">Cancel</button>
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
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
	    <?php 

}else

{

session_destroy();

session_unset();

header('Location:../../index.php');

}

?>