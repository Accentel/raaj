<?php if($_SESSION['user']=="admin"){ ?>
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>

<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse ">
	                <div id="remove-scroll" class="left-sidemenu">
	                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <!--<li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="../img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> Dr</p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>-->
	                        
							
							
							<li class="nav-item">
	                            <a href="dashboard.php" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="update_hospital.php" class="nav-link ">
	                                        <span class="title">Hospital Details</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="update_pharmacy.php" class="nav-link ">
	                                        <span class="title">Pharmacy Details</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="update_lab.php" class="nav-link ">
	                                        <span class="title">Lab Details</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
									
									 <li class="nav-item  ">
	                                    <a href="daycarelist.php" class="nav-link ">
	                                        <span class="title">Daycare Details</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
									
									 <li class="nav-item">
	                                    <a href="labtestdeptlist.php" class="nav-link ">
	                                        <span class="title">Lab Test Department</span>
	                                    </a>
	                                </li>
									
									 <li class="nav-item">
	                                    <a href="labtestdetails.php" class="nav-link ">
	                                        <span class="title">Lab Test Details</span>
	                                    </a>
	                                </li>
									
									<li class="nav-item">
	                                    <a href="update_validity.php" class="nav-link ">
	                                        <span class="title">Update Validity Days</span>
	                                    </a>
	                                </li>
									<li class="nav-item">
	                                    <a href="insurancelist.php" class="nav-link ">
	                                        <span class="title">Add Insurance Companies</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="campuslist.php" class="nav-link ">
	                                        <span class="title">Add Camp</span>
	                                    </a>
	                                </li>
									<li class="nav-item">
	                                    <a href="hospitaltarriflist.php" class="nav-link ">
	                                        <span class="title">Add Hospital Tarrif List</span>
	                                    </a>
	                                </li>
									
									<li class="nav-item  ">
	                                    <a href="empdeptlist.php" class="nav-link ">
	                                        <span class="title">Employee Department</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="employeeslist.php" class="nav-link ">
	                                        <span class="title">Employee Details</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                                
									<li class="nav-item  ">
	                                    <a href="userview.php" class="nav-link ">
	                                        <span class="title">User Management</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                         <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Doctors</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="doctor.php" class="nav-link "> <span class="title">Doctor</span>
	                                    </a>
	                                </li>
									
									<li class="nav-item  ">
	                                    <a href="doctdeptlist.php" class="nav-link ">
	                                        <span class="title">Doctor Department</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
									  <li class="nav-item  ">
	                                    <a href="reffer_doctor.php" class="nav-link "> <span class="title">Referal Doctor</span>
	                                    </a>
	                                </li>
									
	                                <li class="nav-item  ">
	                                    <a href="add_doctor.php" class="nav-link "> <span class="title">Add Doctor</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="history.php" class="nav-link "> <span class="title">Patient History</span>
	                                    </a>
	                                </li>
	                               <!-- <li class="nav-item  ">
	                                    <a href="add_doctor_material.html" class="nav-link "> <span class="title">Add Doctor Material</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="edit_doctor.html" class="nav-link "> <span class="title">Edit Doctor</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="doctor_profile.html" class="nav-link "> <span class="title">About Doctor</span>
	                                    </a>
	                                </li>-->
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">hotel</i>
	                                <span class="title">Wards</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="locationlist.php" class="nav-link "> <span class="title">Locations</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="roomtypeslist.php" class="nav-link "> <span class="title">Room Types</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="roomslist.php" class="nav-link "> <span class="title">Rooms</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="bedslist.php" class="nav-link "> <span class="title">Beds</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="roomtarriflist.php" class="nav-link "> <span class="title">Room Tarrif</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="bedstatus.php" class="nav-link "> <span class="title">Beds Status</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Ortho</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                
	                                
	                                <li class="nav-item  ">
	                                    <a href="clinicalsummarylist.php" class="nav-link "> <span class="title">Clinical Summary List</span>
	                                    </a>
	                                </li>
								
								 <li class="nav-item  ">
	                                    <a href="investigationlist.php" class="nav-link "> <span class="title">Investigation List</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item  ">
	                                    <a href="prescriptionlist.php" class="nav-link "> <span class="title">Prescription</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item  ">
	                                    <a href="supportslist.php" class="nav-link "> <span class="title">Supports</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item  ">
	                                    <a href="supportsizelist.php" class="nav-link "> <span class="title">Supports Size List</span>
	                                    </a>
	                                </li>
	                               
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title">Ayurvedic</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
								<li class="nav-item  ">
	                                    <a href="procedurelist.php" class="nav-link "> <span class="title">Procedure List</span>
	                                    </a>
	                                </li>
									
								<!--	<li class="nav-item  ">
	                                    <a href="vitalsignslist.php" class="nav-link "> <span class="title">vital signs List</span>
	                                    </a>
	                                </li>-->
									
									
									<li class="nav-item  ">
	                                    <a href="patientsummaryslist.php" class="nav-link "> <span class="title">Patient Summary List</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item  ">
	                                    <a href="campussummarylist.php" class="nav-link "> <span class="title">Camp Summary List</span>
	                                    </a>
	                                </li>
								 
	                                <li class="nav-item  "> 
	                                    <a href="packageslist.php" class="nav-link "> <span class="title">Packages List</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="packageservicelist.php" class="nav-link "> <span class="title">Package Services</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item  ">
	                                    <a href="uploadreportslist.php" class="nav-link "> <span class="title">Upload Reports</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
	                          <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title">Appointment</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <!--<li class="nav-item  ">
	                                    <a href="schedule.html" class="nav-link "> <span class="title">Doctor Schedule</span>
	                                    </a>
	                                </li>-->
	                                <li class="nav-item  ">
	                                    <a href="book_appointment.php" class="nav-link "> <span class="title">Book Appointment</span>
	                                    </a>
	                                </li>
									
									 <li class="nav-item  ">
	                                    <a href="reg_card.php" class="nav-link "> <span class="title">Registration Card</span>
	                                    </a>
	                                </li>
									
									
	                               <!-- <li class="nav-item  ">
	                                    <a href="book_appointment_material.html" class="nav-link "> <span class="title">Book Appointment Material</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item  ">
	                                    <a href="edit_appointment.html" class="nav-link "> <span class="title">Edit Appointment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="view_appointment.html" class="nav-link "> <span class="title">View All Appointment</span>
	                                    </a>
	                                </li>-->
	                            </ul>
	                        </li>
	                         <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title">Camp</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <!--<li class="nav-item  ">
	                                    <a href="schedule.html" class="nav-link "> <span class="title">Doctor Schedule</span>
	                                    </a>
	                                </li>-->
	                                 <li class="nav-item  ">
	                                    <a href="search_mrno.php" class="nav-link "> <span class="title">Find Mr No</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item  ">
	                                    <a href="calender.php" class="nav-link "> <span class="title">Suvarnaprashan Dates</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="asthama.php" class="nav-link "> <span class="title">Asthama & Allergy</span>
	                                    </a>
	                                </li>
	                                	<li class="nav-item  ">
	                                    <a href="asthama_report.php" class="nav-link "> <span class="title">Asthama & Allergy Report</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="suvarna.php" class="nav-link "> <span class="title">Suvarnaprashan</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="suvarna_report.php" class="nav-link "> <span class="title">Suvarnaprashan Report</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="normal_diet.php" class="nav-link "> <span class="title">Normal Diet</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="campussummarylist1.php" class="nav-link "> <span class="title">Campus List</span>
	                                    </a>
	                                </li>
									
									 <!--<li class="nav-item  ">
	                                    <a href="" class="nav-link "> <span class="title">Registration Card</span>
	                                    </a>
	                                </li>-->
									
									
	                             
	                            </ul>
	                        </li>
	                       
	                       
	                       <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">accessible</i>
	                                <span class="title">In Patients</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="inpatient.php" class="nav-link "> <span class="title">All Patients</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item  ">
	                                    <a href="dispatients.php" class="nav-link "> <span class="title">Discharged Patients</span>
	                                    </a>
	                                </li>
	                                  <li class="nav-item  ">
	                                    <a href="ot.php" class="nav-link "> <span class="title">O.T Medicines</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item  ">
	                                    <a href="ward_med.php" class="nav-link "> <span class="title">Ward Medicines</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
	                       
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
	                                <span class="title">Billing</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="advancebilllist.php" class="nav-link "> <span class="title">Advance Payment</span>
	                                    </a>
	                                </li>
	                                    <li class="nav-item  ">
	                                    <a href="dis_billlist.php" class="nav-link "> <span class="title">Discharge  Bill</span>
	                                    </a>
	                                </li>
	                               
	                                <li class="nav-item  ">
	                                    <a href="padvancebilllist.php" class="nav-link "> <span class="title">PhysiotherapyAdvance Payment</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="labbilllist.php" class="nav-link "> <span class="title">Lab Bill</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="daycarebilllist.php" class="nav-link "> <span class="title">Day Care Bill</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="physiotherapybilllist.php" class="nav-link "> <span class="title">Physiotherapy Bill</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="supportsbilllist.php" class="nav-link "> <span class="title">Supporters Bill</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="dischargesummarylist.php" class="nav-link "> <span class="title">Discharge Summary</span>
	                                    </a>
	                                </li>
	                                
	                                <li class="nav-item  ">
	                                    <a href="finalbilllist.php" class="nav-link "> <span class="title">Final Bill</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
           
	                      
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
	                                <span class="title">Pharmacy</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
                                
                                
                                
                                
                                
                                
                                
                                 <li class="nav-item  "><a href="uom.php"><span class="title">UOM</span></a></li>
                        <li class="nav-item  "><a href="product_type_list.php"><span class="title">Product Type</span></a></li>
						<li class="nav-item  "> <a href="supplier_info_list.php"><span class="title">Supplier Information</span></a></li>
						<li class="nav-item  "><a href="supplier_info_list2.php"><span class="title">Supplier Amount</span></a></li>
                        <li class="nav-item  "><a href="packing_info_list.php"><span class="title">Packing Information</span></a></li>
						<li class="nav-item  "><a href="product_details_list.php"><span class="title">Product Details</span></a></li>
                        <li class="nav-item  "><a href="edit_product.php"><span class="title">Product Details Edit</span></a></li>

                                
	                              
	                            </ul>
								
								
								
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
	                                <span class="title">Pharmacy Purchase</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
                                
                                 <li class="nav-item  "><a href="purchase_invoice_list.php"><span class="title">Purchase Invoice</span></a></li>
                        <li class="nav-item  "><a href="purchase_return_list.php"><span class="title">Purchase Return</span></a></li>
						<li class="nav-item  "> <a href="stock_adjustment.php"><span class="title">Stock Adjustment</span></a></li>
						<li class="nav-item  "><a href="stock_report.php"><span class="title">Stock Adjustment Report</span></a></li>
						<li class="nav-item  "><a href="purchase_invoice_list2.php"><span class="title">Panchakarma Purchase Invoice</span></a></li>
						 <li class="nav-item  "><a href="purchase_invoice_list1.php"><span class="title">Supporters Purchase Invoice</span></a></li>
                       	<li class="nav-item  "> <a href="stock_adjustment1.php"><span class="title">Supporters Stock Adjustment</span></a></li>
      
	                            </ul>
								
	                        </li>
                            
							 <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
	                                <span class="title">Pharmacy Sales</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
                                
                                  <li class="nav-item  "><a href="salesentry_list.php"><span class="title">Sales Entry</span></a></li>
                       <!-- <li class="nav-item  "><a href="opdigitallab_reg1.php">
                        <span class="title">OP Digital Sales Entry</span></a></li>
						<li class="nav-item  ">
                         <a href="opdigital_reg2.php"><span class="title">Discharge Summary Entry</span></a></li>
						<li class="nav-item  "><a href="duecustomer.php"><span class="title">
                       Due Patient/Customer</span></a></li>
                       <li class="nav-item  "><a href="salestype_report_ind.php"><span class="title">
                        Sales Entry & Returns</span></a></li>
                        <li class="nav-item  "><a href="salesentryreports.php"><span class="title">
                       Sales Entry Report</span></a></li>
                        <li class="nav-item  "><a href="salesreturnreports.php"><span class="title">
                       Sales Return Report</span></a></li>
                        <li class="nav-item  "><a href="drugindent_view.php"><span class="title">
                        Drug Indent For</span></a></li>-->
                        <li class="nav-item  "><a href="salesreturn.php"><span class="title">
                        Sales Return</span></a></li>
						<li class="nav-item  "><a href="duecustomer.php"><span class="title">
                       Due Patient/Customer</span></a></li>
					    <li class="nav-item  "><a href="salesentry_list1.php"><span class="title">Total Sales Entry </span></a></li>
					   <!-- <li class="nav-item  "><a href="drugindent_view.php"  ><span class="title">
                       Drug Indent Form</span></a></li>	 -->
      </ul>
								
	                        </li>
							
							  <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
	                                <span class="title">Pharmacy Reports</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                
	                                <li class="nav-item  "><a href="total_prd.php" target="new"><span class="title">
                       Product Details Report</span></a></li>
                                
                                 <li class="nav-item  "><a href="stock_report.php"><span class="title">Stock Adjustment Report</span></a></li>
								 
								
								 
                        <li class="nav-item  "><a href="purchase_entry_report.php">
                        <span class="title">Purchase Entry Report</span></a></li>
						<li class="nav-item  ">
                         <a href="purchase_return_report.php"><span class="title">Purchase Return Report</span></a></li>
						<li class="nav-item  "><a href="add_supplier_items.php"><span class="title">
                       Supplier Items</span></a></li>
                       
      <li class="nav-item  "><a href="vat_report.php"><span class="title">
                       GST Report</span></a></li>
      
 <!--<li class="nav-item  "><a href="stock_position_report.php"><span class="title">
                       Stock Position Report</span></a></li>-->
               <li class="nav-item  "><a href="medicinelist.php" target="new"><span class="title">
                       Medicine Short List</span></a></li>
                       
					    <li class="nav-item  "><a href="searchbox.php" ><span class="title">
                       Search Medicine</span></a></li>
					     <li class="nav-item  "><a href="searchbox1.php" ><span class="title">
                       Compare Medicine</span></a></li>
					    <li class="nav-item  "><a href="drug_expiry.php?report=11" ><span class="title">
                       Drug Expiry Report</span></a></li>
					    <li class="nav-item  "><a href="FSN_productdetails_list.php" ><span class="title">
                       FSN Analysis</span></a></li>
               <li class="nav-item  "><a href="ABC_Analysis.php" ><span class="title">
                       ABC Analysis</span></a></li>
					   
					    <li class="nav-item  "><a href="stock_position_report1.php" ><span class="title">
                       Stock Position Report</span></a></li>
                         <li class="nav-item  "><a href="medicinelist1.php" ><span class="title">
                       Supports Stock Position Report</span></a></li>
					   
					    <li class="nav-item  "><a href="salesentry_report.php" ><span class="title">
                       Day Sales Report</span></a></li>
					    <li class="nav-item  "><a href="sales_typesmonth_report.php" ><span class="title">
                       M-Sales Entry Report</span></a></li>
					    <li class="nav-item  "><a href="druginspector_report.php" target="new" ><span class="title">
                       Drug Inspector Report</span></a></li>
					    <li class="nav-item  "><a href="salesentryreports.php"  ><span class="title">
                       Sales Entry Report</span></a></li>
					    <li class="nav-item  "><a href="salesreturnreports.php"  ><span class="title">
                       Sales Return Report</span></a></li>
                       
       <li class="nav-item  "><a href="profit_report.php"  ><span class="title">
                      Pharmacy Account Summery</span></a></li>
	                            </ul>
								
	                        </li>
                            
                            
                            <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">hotel</i>
	                                <span class="title">Reports</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                 <li class="nav-item  ">
	                                    <a href="hospitalpatients_report.php" class="nav-link "> <span class="title">Total Patient List</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="op_report_doct.php" class="nav-link "> <span class="title">Doctor wise Patient Report</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="patientpaymenthistory.php" class="nav-link "> <span class="title">In Patient Payment History</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="admitpatients.php" class="nav-link "> <span class="title">Admited Patients Report</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="referal_doctors_List.php" target="new" class="nav-link "> <span class="title">Referal Doctors List</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="datereferaldoctoramountcollection.php" class="nav-link "> <span class="title">Date Wise Referal Doctors Amount Report</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="op_report.php" class="nav-link "> <span class="title">Out Patient Report</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="op_report1.php" class="nav-link "> <span class="title">Admited In Patients Report</span>
	                                    </a>
	                                </li>
									
									<li class="nav-item  ">
	                                    <a href="referalpatients_report.php" class="nav-link "> <span class="title">Referal Patients Report</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="advancebillreport.php" class="nav-link "> <span class="title">Advance Bill Report</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="labbillreport.php" class="nav-link "> <span class="title">Lab Bill Report</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="supportsbillreport.php" class="nav-link "> <span class="title">Supports Bill Report</span>
	                                    </a>
	                                </li>

	                                <li class="nav-item  ">
	                                    <a href="daycarebillreport.php" class="nav-link "> <span class="title">Daycare Bill Report</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="physiotherapybillreport.php" class="nav-link "> <span class="title">Physiotherapy Bill Report</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item  ">
	                                    <a href="daily_amount.php" class="nav-link "> <span class="title">Daily Collected Amount Report</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="daily_amount1.php" class="nav-link "> <span class="title">Daily  Amount Pharmacy</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="daily_amount_emp.php" class="nav-link "> <span class="title">Daily  Amount Summary</span>
	                                    </a>
	                                </li>
	                               
	                               
	                            </ul>
	                        </li>
                           
      <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">hotel</i>
	                                <span class="title">SMS</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                
									<li class="nav-item  ">
	                                    <a href="single.php" class="nav-link "> <span class="title">Single Sms</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="bulk.php" class="nav-link "> <span class="title">Patient Registration Sms</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="suvuma_sms.php" class="nav-link " target="_blank"> <span class="title" > Suvarnaprashan Sms</span>
	                                    </a>
	                                </li>
	                                
	                                 <li class="nav-item  ">
	                                    <a href="asthama_sms.php" class="nav-link " target="_blank"> <span class="title" > Asthama and Allergy Sms</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="camp_sms.php" class="nav-link " target="_blank"> <span class="title" > Campus Sms</span>
	                                    </a>
	                                </li>
               
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <?php }else{

include('menu1.php');
}?>		