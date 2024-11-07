<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
//include('../db/insert_employee.php');
include("header.php");?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">User Management</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">User Management</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>User Management</header>
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
								
                                    <form action="user_insert.php" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
										
										<table width="100%" border="0" cellpadding="2" cellspacing="0">
                    <tr >
                        <td width="40%" align="right" >Employee Name :</td>
                        <td width="60%"  align="left" >
                            <select  name="ename" id="ename" class="home_textbox" style="width:180px;" required>
                            <option value="">Select Emp Name</option>
                            <?php
							$qry="select * from employee";
							$r=mysqli_query($link,$qry) or die(mysql_error());
							while($rt=mysqli_fetch_array($r)){ ?>
								<option value="<?php echo $rt['empcode'] ?>"><?php echo $rt['empname'] ?></option>
								<?php		} ?>
                            </select>
                        </td>
                    </tr>            
                    <tr >
                        <td width="40%" align="right" >User Name :</td>
                        <td width="60%"  align="left" >
                            <input type="text" name="user_id" id="user_id" class="home_textbox"/>
                        </td>
                    </tr>
                     <tr >
                        <td align="right" >Password :</td>
                        <td align="left">
                            <input type="password" name="pwd" id="pwd" class="home_textbox"/>
                             <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['name1']; ?>" class="home_textbox"/>
                        </td>
                    </tr>
					<tr>
					<td align="left" colspan="2">
		<table width="100%" id="mainmenu" style="text-align:left;margin-left:20px;" cellpadding="0" cellspacing="0" border="0">
		<tr >
            <td colspan="8"><div align="center"><font color="#FF0000"><b>Main Menu</b></font></div></td>
            </tr>
		
		
        <tr >
        <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="2" />&nbsp;&nbsp; <b>SETTINGS</b>
        </div>
		<div class="checkcust" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="21" />&nbsp;&nbsp; Hospital Details<br>
			<input type="checkbox" name="menu[]" value="22" />&nbsp;&nbsp; Pharmacy Details<br>
			<input type="checkbox" name="menu[]" value="23" />&nbsp;&nbsp; Lab Details<br>
			<input type="checkbox" name="menu[]" value="023" />&nbsp;&nbsp; Daycare Details<br>
			<input type="checkbox" name="menu[]" value="024" />&nbsp;&nbsp; Lab Test Department<br>
			<input type="checkbox" name="menu[]" value="27" />&nbsp;&nbsp; Lab Test Details<br>
			 <input type="checkbox" name="menu[]" value="202" />&nbsp;&nbsp; Validity Days<br>
			 <input type="checkbox" name="menu[]" value="025" />&nbsp;&nbsp; Add Insurance Companies<br>
			  <input type="checkbox" name="menu[]" value="4111" />&nbsp;&nbsp; Add Camp<br>
			 
			       <input type="checkbox" name="menu[]" value="36" />&nbsp;&nbsp; Add Hospital Tarrif List<br>
			 	<input type="checkbox" name="menu[]" value="205" />&nbsp;&nbsp; Add Employee Department<br>
				 <input type="checkbox" name="menu[]" value="206" />&nbsp;&nbsp; Add Employees<br>
				 <input type="checkbox" name="menu[]" value="207" />&nbsp;&nbsp; User Management<br>
			 
			<!--<input type="checkbox" name="menu[]" value="24" />&nbsp;&nbsp; Location Setup<br>
            
            <input type="checkbox" name="menu[]" value="25" />&nbsp;&nbsp; Add Department<br>
			<input type="checkbox" name="menu[]" value="26" />&nbsp;&nbsp; Add Test Department<br>
			<input type="checkbox" name="menu[]" value="27" />&nbsp;&nbsp; Add Test<br>
			<input type="checkbox" name="menu[]" value="28" />&nbsp;&nbsp; Department Details<br>
            
            <input type="checkbox" name="menu[]" value="29" />&nbsp;&nbsp; Operation Theatre<br>
			<input type="checkbox" name="menu[]" value="200" />&nbsp;&nbsp; Concession Type<br>
			<input type="checkbox" name="menu[]" value="201" />&nbsp;&nbsp; Disease Details<br>
			           
           
			<input type="checkbox" name="menu[]" value="203" />&nbsp;&nbsp; Add Customer<br>
			<input type="checkbox" name="menu[]" value="204" />&nbsp;&nbsp; Add Box<br>
		
            
            <input type="checkbox" name="menu[]" value="206" />&nbsp;&nbsp; Add Employees<br>
			<input type="checkbox" name="menu[]" value="1004" />&nbsp;&nbsp; Change Password<br>-->
			
			
			
		</div>
		</td>
        
        <td ></td>
        
        <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="4" />&nbsp;&nbsp; <b>DOCTOR</b>
        </div>
		<div class="checkqut" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="41" />&nbsp;&nbsp; Doctor<br>
			<input type="checkbox" name="menu[]" value="026" />&nbsp;&nbsp; Doctor Department<br>
			<!--<input type="checkbox" name="menu[]" value="42" />&nbsp;&nbsp; Outside Consul. Tariff<br>-->
			<input type="checkbox" name="menu[]" value="43" />&nbsp;&nbsp; Referal Doctor<br>
			<input type="checkbox" name="menu[]" value="42" />&nbsp;&nbsp; Add Doctor<br>
			<input type="checkbox" name="menu[]" value="4112" />&nbsp;&nbsp; Patient History<br>
		</div>
		</td>
		<td ></td>
        
        <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="3" />&nbsp;&nbsp; <b>WARD</b>
        </div>
		<div class="checkprd" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
		<input type="checkbox" name="menu[]" value="24" />&nbsp;&nbsp; Locations<br>
		<input type="checkbox" name="menu[]" value="31" />&nbsp;&nbsp; Room Types<br>
		<input type="checkbox" name="menu[]" value="33" />&nbsp;&nbsp; Rooms <br>
		<input type="checkbox" name="menu[]" value="32" />&nbsp;&nbsp; Beds<br>
		<input type="checkbox" name="menu[]" value="37" />&nbsp;&nbsp; Room Tarrif<br>
		<input type="checkbox" name="menu[]" value="34" />&nbsp;&nbsp; Beds Status<br>
		
			
			
			<br>
      
		
		</div>
		</td>
         <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="4113" />&nbsp;&nbsp; <b>Ortho</b>
        </div>
		<div class="checkprd" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
		<input type="checkbox" name="menu[]" value="4114" />&nbsp;&nbsp; Clinical Summary List<br>
		<input type="checkbox" name="menu[]" value="4115" />&nbsp;&nbsp; Investigation List<br>
		<input type="checkbox" name="menu[]" value="4116" />&nbsp;&nbsp; Prescription <br>
		<input type="checkbox" name="menu[]" value="41161" />&nbsp;&nbsp; Supports<br>
		<input type="checkbox" name="menu[]" value="4117" />&nbsp;&nbsp; Supports Size List<br>
		
		
			
			
			<br>
      
		
		</div>
		</td>
        </tr>
		
        <tr >
		
		<td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="4118" />&nbsp;&nbsp; <b>Ayurvedic</b>
        </div>
		<div class="checkprd" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
		<input type="checkbox" name="menu[]" value="4133" />&nbsp;&nbsp; Procedure List<br>
		<input type="checkbox" name="menu[]" value="4119" />&nbsp;&nbsp; Patient Summary List<br>
		<input type="checkbox" name="menu[]" value="4120" />&nbsp;&nbsp; Camp Summary List <br>
		<input type="checkbox" name="menu[]" value="4121" />&nbsp;&nbsp; Packages List<br>
		<input type="checkbox" name="menu[]" value="4122" />&nbsp;&nbsp; Package Services<br>
		<input type="checkbox" name="menu[]" value="4123" />&nbsp;&nbsp; Upload Reports<br>
		
			
			
			<br>
      
		
		</div>
		</td>
		
		 <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="5" />&nbsp;&nbsp; <b>Appointment</b>
        </div>
		<div class="checkpur" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="51" />&nbsp;&nbsp; Book Appointment<br>
			<input type="checkbox" name="menu[]" value="52" />&nbsp;&nbsp; Registration Card<br>
            
            
                  
			
		</div>
		</td>
        <td ></td>
		
		
		<td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="4124" />&nbsp;&nbsp; <b>CAMP</b>
        </div>
		<div class="checkpur" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
		<input type="checkbox" name="menu[]" value="4125" />&nbsp;&nbsp; Find Mr No<br>
		<input type="checkbox" name="menu[]" value="4126" />&nbsp;&nbsp; Suvarnaprashan Dates<br>
		<input type="checkbox" name="menu[]" value="4127" />&nbsp;&nbsp; Asthama & Allergy<br>
		<input type="checkbox" name="menu[]" value="4128" />&nbsp;&nbsp; Asthama & Allergy Report<br>
		<input type="checkbox" name="menu[]" value="4129" />&nbsp;&nbsp; Suvarnaprashan<br>
		<input type="checkbox" name="menu[]" value="4130" />&nbsp;&nbsp; Suvarnaprashan Report<br>
		<input type="checkbox" name="menu[]" value="4131" />&nbsp;&nbsp; Normal Diet<br>
		<input type="checkbox" name="menu[]" value="4132" />&nbsp;&nbsp; Campus List<br>
		
			
                  
			
		</div>
		</td>
        <td ></td>
		
		
        <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="05" />&nbsp;&nbsp; <b>IN PATIENTS</b>
        </div>
		<div class="checkpur" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
		<input type="checkbox" name="menu[]" value="54" />&nbsp;&nbsp; In Patient Admission<br>
		<input type="checkbox" name="menu[]" value="4133" />&nbsp;&nbsp; O.T Medicines<br>
			<input type="checkbox" name="menu[]" value="4134" />&nbsp;&nbsp; Ward Medicines<br>
                  
			
		</div>
		</td>
        <td ></td>
        
        <td valign="top" class="label1" colspan="2" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="6" />&nbsp;&nbsp; <b>BILLING</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="61" />&nbsp;&nbsp; Advance Payment<br>
             <input type="checkbox" name="menu[]" value="608" />&nbsp;&nbsp; PhysiotherapyAdvance Payment<br>
			  <input type="checkbox" name="menu[]" value="64" />&nbsp;&nbsp; Lab Bill<br>
			   <input type="checkbox" name="menu[]" value="609" />&nbsp;&nbsp; Daycare Bill<br>
			   <input type="checkbox" name="menu[]" value="67" />&nbsp;&nbsp; Supporters Bill<br>
			  
			    <input type="checkbox" name="menu[]" value="605" />&nbsp;&nbsp; Physiotherapy Bill<br>
				<input type="checkbox" name="menu[]" value="62" />&nbsp;&nbsp; Discharge Summary<br>
			     <input type="checkbox" name="menu[]" value="63" />&nbsp;&nbsp; Final Bill<br>
            
          <!--
			<input type="checkbox" name="menu[]" value="601" />&nbsp;&nbsp; Package Ip List<br>
			<input type="checkbox" name="menu[]" value="602" />&nbsp;&nbsp; Package payment Ip List<br>
			<input type="checkbox" name="menu[]" value="603" />&nbsp;&nbsp; Package Refund Amount<br>
			
			
           
            <input type="checkbox" name="menu[]" value="65" />&nbsp;&nbsp; OP Digital Lab Bill<br>
             <input type="checkbox" name="menu[]" value="690" />&nbsp;&nbsp; IP Lab Bill<br>
            <input type="checkbox" name="menu[]" value="66" />&nbsp;&nbsp; View  Bill/Pay Balance<br>
			 
			 
			  
			  <input type="checkbox" name="menu[]" value="606" />&nbsp;&nbsp; General Cash  Bill<br>
			  <input type="checkbox" name="menu[]" value="607" />&nbsp;&nbsp; General Cash  Bill View<br>
			  
			 
			
			
            
            <input type="checkbox" name="menu[]" value="68" />&nbsp;&nbsp; OP Cash  Bill View<br>
            
            <input type="checkbox" name="menu[]" value="69" />&nbsp;&nbsp; Lab Final Bill Summary<br>-->
		</div>
		</td>
        <!--<td colspan="2" class="label1" ></td>
        
        <td class="label1" colspan="2" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="7" />&nbsp;&nbsp; <b>Lab</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			
            
           
            <input type="checkbox" name="menu[]" value="71" />&nbsp;&nbsp; Lab Results Entry<br>
            <input type="checkbox" name="menu[]" value="72" />&nbsp;&nbsp; Print Lab Results<br>
         
            
		</div>
		</td>
        <td ></td>-->
        </tr>
       
        <tr >
        <!-- <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="8" />&nbsp;&nbsp; <b>CASE SHEET</b>
        </div>
		<div class="checkpur" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="81" />&nbsp;&nbsp; Patient Details<br>
			<input type="checkbox" name="menu[]" value="82" />&nbsp;&nbsp; Initial Assessment Sheet<br>
            
            <input type="checkbox" name="menu[]" value="83" />&nbsp;&nbsp; Admission Record<br>
			<input type="checkbox" name="menu[]" value="84" />&nbsp;&nbsp; Clinical Finding<br>
            
            <input type="checkbox" name="menu[]" value="85" />&nbsp;&nbsp; Diagnostics<br>
			<input type="checkbox" name="menu[]" value="86" />&nbsp;&nbsp; Activity Chart<br>
            <input type="checkbox" name="menu[]" value="891" />&nbsp;&nbsp; Add Nurse Chart<br>
            <input type="checkbox" name="menu[]" value="87" />&nbsp;&nbsp; Sugar Chart<br>
			<input type="checkbox" name="menu[]" value="88" />&nbsp;&nbsp; Discharge Summary<br>  
             <input type="checkbox" name="menu[]" value="89" />&nbsp;&nbsp; Add Nurse Duty<br>
             <input type="checkbox" name="menu[]" value="892" />&nbsp;&nbsp; Add Blood Component<br>
             <input type="checkbox" name="menu[]" value="890" />&nbsp;&nbsp; Case Sheet Reports<br>     
			
		</div>
		</td>
        <td ></td>-->
        
        <td valign="top" class="label1" colspan="2" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="9" />&nbsp;&nbsp; <b>Pharmacy</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<!--<input type="checkbox" name="menu[]" value="90" />&nbsp;&nbsp; <B>Masters</B><br>-->
            
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="91" />&nbsp;&nbsp; UOM<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="92" />&nbsp;&nbsp; Product Type<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="93" />&nbsp;&nbsp; Supplier Information<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="94" />&nbsp;&nbsp; Supplier Amount<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="95" />&nbsp;&nbsp; Packing Information<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="96" />&nbsp;&nbsp; Product Details<br>
				 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="027" />&nbsp;&nbsp; Product Details Edit<br>
				 
            <!--<input type="checkbox" name="menu[]" value="97" />&nbsp;&nbsp; <B>TRANSACTIONS</B><br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="98" />&nbsp;&nbsp; Purchase Invoice<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="99" />&nbsp;&nbsp; Purchase Return<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="990" />&nbsp;&nbsp; Stock Adjustment<br>
            <input type="checkbox" name="menu[]" value="991" />&nbsp;&nbsp; <B>REPORTS</B><br>
            
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="992" />&nbsp;&nbsp; Purchase Entry Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="993" />&nbsp;&nbsp; Purchase Return Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="994" />&nbsp;&nbsp; Supplier Items<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="995" />&nbsp;&nbsp; VAT Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="996" />&nbsp;&nbsp; Stock Position<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="997" />&nbsp;&nbsp; Medicine Shortlist<br> 
                 
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="998" />&nbsp;&nbsp; Search Medicine<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="999" />&nbsp;&nbsp; Compare Medicine Price<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9990" />&nbsp;&nbsp; Drug Expiry Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9991" />&nbsp;&nbsp; FSN Analysis<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9992" />&nbsp;&nbsp; ABC Analysis<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9993" />&nbsp;&nbsp; Total Store Stock<br>
                
            <input type="checkbox" name="menu[]" value="9995" />&nbsp;&nbsp; <B>REPORTS NEW</B><br>
            
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9996" />&nbsp;&nbsp; DAY-SALES REPORT<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9997" />&nbsp;&nbsp; M-Sales Entry Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9998" />&nbsp;&nbsp; Drug Inspector Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9999" />&nbsp;&nbsp; Pharmacy Bill Summery<br>
				 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1002" />&nbsp;&nbsp; GST Report<br>
                      <input type="checkbox" name="menu[]" value="1003" />&nbsp;&nbsp; <B>Profit Report</B><br>-->
		</div>
		</td>
        <td colspan="2" class="label1" ></td>
		
		
		
		 <td valign="top" class="label1" colspan="2" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="90" />&nbsp;&nbsp; <b>Pharmacy Purchase</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<!--<input type="checkbox" name="menu[]" value="90" />&nbsp;&nbsp; <B>Masters</B><br>-->
            
                
				 
            <!--<input type="checkbox" name="menu[]" value="97" />&nbsp;&nbsp; <B>TRANSACTIONS</B><br>-->
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="98" />&nbsp;&nbsp; Purchase Invoice<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="99" />&nbsp;&nbsp; Purchase Return<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="990" />&nbsp;&nbsp; Stock Adjustment<br>
				 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="991" />&nbsp;&nbsp; Stock Adjustment Report<br>
				  &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="4135" />&nbsp;&nbsp; Panchakarma Purchase Invoice<br>
				   &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="4136" />&nbsp;&nbsp; Supporters Purchase Invoice<br>
            <!--<input type="checkbox" name="menu[]" value="991" />&nbsp;&nbsp; <B>REPORTS</B><br>
            
                
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9993" />&nbsp;&nbsp; Total Store Stock<br>
                
            <input type="checkbox" name="menu[]" value="9995" />&nbsp;&nbsp; <B>REPORTS NEW</B><br>
            
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="9999" />&nbsp;&nbsp; Pharmacy Bill Summery<br>
				 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1002" />&nbsp;&nbsp; GST Report<br>
                      <input type="checkbox" name="menu[]" value="1003" />&nbsp;&nbsp; <B>Profit Report</B><br>-->
		</div>
		</td>
      
      
        <td class="label1" colspan="2" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="10" />&nbsp;&nbsp; <b>Pharmacy Sales</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="101" />&nbsp;&nbsp; Sales Entry<br>
            
           
            <input type="checkbox" name="menu[]" value="102" />&nbsp;&nbsp; Sales Entry Hospital<br>
			 <input type="checkbox" name="menu[]" value="103" />&nbsp;&nbsp; Sales Return<br>
			 	<input type="checkbox" name="menu[]" value="108" />&nbsp;&nbsp; Due Patient/Customer<br>
			  <input type="checkbox" name="menu[]" value="104" />&nbsp;&nbsp; Sales Entry Total<br>
			
		
			<!--menu108
           
           
            <input type="checkbox" name="menu[]" value="105" />&nbsp;&nbsp; Sales Entry & Returns<br>
            
            
             <input type="checkbox" name="menu[]" value="138" />&nbsp;&nbsp; Drug Indent Form<br>-->
		</div>
		</td>
        <td ></td>
		
		
		 <td class="label1" colspan="3" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="12903" />&nbsp;&nbsp; <b>Pharmacy Reports</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			  <input type="checkbox" name="menu[]" value="992" />&nbsp;&nbsp; Purchase Entry Report<br>
			  <input type="checkbox" name="menu[]" value="4137" />&nbsp;&nbsp; Product Details Report<br>
			  <input type="checkbox" name="menu[]" value="4138" />&nbsp;&nbsp; Stock Adjustment Report<br>
			  
			  <input type="checkbox" name="menu[]" value="993" />&nbsp;&nbsp; Purchase Return Report<br>
			  <input type="checkbox" name="menu[]" value="994" />&nbsp;&nbsp; Supplier Items<br>
			  <input type="checkbox" name="menu[]" value="995" />&nbsp;&nbsp; GST Report<br>
			  <input type="checkbox" name="menu[]" value="996" />&nbsp;&nbsp; Stock Position<br>
			  <input type="checkbox" name="menu[]" value="997" />&nbsp;&nbsp; Medicine Shortlist<br> 
			  <input type="checkbox" name="menu[]" value="998" />&nbsp;&nbsp; Search Medicine<br>
			  <input type="checkbox" name="menu[]" value="999" />&nbsp;&nbsp; Compare Medicine Price<br>
			  <input type="checkbox" name="menu[]" value="9990" />&nbsp;&nbsp; Drug Expiry Report<br>
			  <input type="checkbox" name="menu[]" value="9991" />&nbsp;&nbsp; FSN Analysis<br>
			  <input type="checkbox" name="menu[]" value="9992" />&nbsp;&nbsp; ABC Analysis<br>
			<input type="checkbox" name="menu[]" value="9992" />&nbsp;&nbsp; Stock Position Report<br>
			<input type="checkbox" name="menu[]" value="4139" />&nbsp;&nbsp;  Supports Stock Position Report<br>
			<input type="checkbox" name="menu[]" value="9996" />&nbsp;&nbsp; DAY-SALES REPORT<br>
			<input type="checkbox" name="menu[]" value="9997" />&nbsp;&nbsp; M-Sales Entry Report<br>
			<input type="checkbox" name="menu[]" value="9998" />&nbsp;&nbsp; Drug Inspector Report<br>
			<input type="checkbox" name="menu[]" value="106" />&nbsp;&nbsp; Sales Entry Report<br>
			<input type="checkbox" name="menu[]" value="107" />&nbsp;&nbsp; Sales Return Report<br>
		<input type="checkbox" name="menu[]" value="138" />&nbsp;&nbsp; Pharmacy Account Summery<br>
			<!--menu108
           
           
            <input type="checkbox" name="menu[]" value="105" />&nbsp;&nbsp; Sales Entry & Returns<br>
            <input type="checkbox" name="menu[]" value="106" />&nbsp;&nbsp; Sales Entry Report<br>
            <input type="checkbox" name="menu[]" value="107" />&nbsp;&nbsp; Sales Return Report<br>
             <input type="checkbox" name="menu[]" value="138" />&nbsp;&nbsp; Drug Indent Form<br>-->
		</div>
		</td>
        <td ></td>
        </tr>
  
       
               <tr >
        <!--<td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="11" />&nbsp;&nbsp; <b>LAB</b>
        </div>
		<div class="checkpur" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="111" />&nbsp;&nbsp; View  Paitents List<br>
			<input type="checkbox" name="menu[]" value="112" />&nbsp;&nbsp; View  Result Entry<br>
            
            <input type="checkbox" name="menu[]" value="113" />&nbsp;&nbsp; Select Report Test Wise<br>
			
                  
			
		</div>
		</td>
        <td ></td>-->
        
        <td valign="top" class="label1" colspan="2" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="12" />&nbsp;&nbsp; <b>REPORTS</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<!--<input type="checkbox" name="menu[]" value="121" />&nbsp;&nbsp; <B>RECEPTION</B><br>-->
            
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="122" />&nbsp;&nbsp; Total Patiens List<br>
				  &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="028" />&nbsp;&nbsp; Doctor wise Patient Report<br>                
				   &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="124" />&nbsp;&nbsp; In Patient Payment History<br>
				  &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="126" />&nbsp;&nbsp; Admitted Patients Report<br>
				   &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1294" />&nbsp;&nbsp; Referal Doctors List<br>
				  &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="029" />&nbsp;&nbsp; Date Wise Referal Doctors Amount Report<br>
				  &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="030" />&nbsp;&nbsp; Out Patient Report<br>
				   &nbsp;&nbsp;  <input type="checkbox" name="menu[]" value="1297" />&nbsp;&nbsp; Admited In Patients Report<br>
				     &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1293" />&nbsp;&nbsp; Referal Patients Report<br>
					  &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="031" />&nbsp;&nbsp; Advance Bill Report<br>
				  &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="12902" />&nbsp;&nbsp; Lab Bill Report<br>
				  
				  
                &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="123" />&nbsp;&nbsp; Amount Collection Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="125" />&nbsp;&nbsp; Discharged Patients List<br>
                
                
            <!--<input type="checkbox" name="menu[]" value="12902" />&nbsp;&nbsp; <B>LAB</B><br>-->
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="127" />&nbsp;&nbsp; Total Patiens List<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="128" />&nbsp;&nbsp; Amount Collection Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="129" />&nbsp;&nbsp; Dues List Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1290" />&nbsp;&nbsp; Test Reports<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="12901" />&nbsp;&nbsp; Final Lab Bill Summary<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="12903" />&nbsp;&nbsp; Daycare Bill Report<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1295" />&nbsp;&nbsp; Physiotherapy Bill Report<br>
         &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1298" />&nbsp;&nbsp; Daily Amount Collection<br>
            &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1296" />&nbsp;&nbsp; Daily  Amount Pharmacy<br>
                &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="1299" />&nbsp;&nbsp; Daily  Amount Summary<br>
                
                 
          
            
                
		</td>
      <!--  <td colspan="2" class="label1" ></td>
        
        <td class="label1" colspan="2" >
		<div align="left">
            <input type="checkbox" name="menu[]" value="13" />&nbsp;&nbsp; <b>CERTIFICATES</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
		<input type="checkbox" name="menu[]" value="1390" />&nbsp;&nbsp; Emergency Certificate<br>
		
			<input type="checkbox" name="menu[]" value="131" />&nbsp;&nbsp; Birth Certificate<br>
            
           
            <input type="checkbox" name="menu[]" value="132" />&nbsp;&nbsp; Death Certificate<br>
            <input type="checkbox" name="menu[]" value="133" />&nbsp;&nbsp; Medical Certificate<br>
			 <input type="checkbox" name="menu[]" value="139" />&nbsp;&nbsp; Essentiality Certificate<br>
			  <input type="checkbox" name="menu[]" value="1391" />&nbsp;&nbsp; Medical Fitness Certificate<br>
            <input type="checkbox" name="menu[]" value="134" />&nbsp;&nbsp; Brought Dead Certificate<br>
              &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="137" />&nbsp;&nbsp; Medical Certificate of cause of death list(4A)<br>
             &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="136" />&nbsp;&nbsp; Medical Certificate of cause of death list<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="135" />&nbsp;&nbsp; DISCHARGE SUMMARY<br>
                
               
            
           
           
            
           
           
            
		</div>
		</td>
        <td ></td>-->
        </tr>
 
 <!--
  <tr >
        <td valign="top" class="label1" colspan="2">
		<div align="left">
            <input type="checkbox" name="menu[]" value="14" />&nbsp;&nbsp; <b>ACCOUNTS</b>
        </div>
		<div class="checkinv" align="left" style="margin-top:10px;margin-bottom:10px;margin-left:10px;">
			<input type="checkbox" name="menu[]" value="141" />&nbsp;&nbsp; <B>EXPENSES</B><br>
            
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="142" />&nbsp;&nbsp; Expenses Type<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="143" />&nbsp;&nbsp; Expenses List<br>
                 &nbsp;&nbsp;   <input type="checkbox" name="menu[]" value="144" />&nbsp;&nbsp; Expenses Report<br>
                 
                
            <input type="checkbox" name="menu[]" value="145" />&nbsp;&nbsp; <B>REFERAL DOCTORS AMOUNT PAID</B><br>
                 
                 
                 
            <input type="checkbox" name="menu[]" value="146" />&nbsp;&nbsp; <B>REFERAL DOCTORS AMOUNT PAIDLIST</B><br>
            
                 
            
               </div> 
		</td>
        <td ></td>
        
        
        
        
        
        </tr>-->
  
       
                </table>
                                           
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="Submit" class="btn btn-info">Submit</button>
                                                    <a href="employeeslist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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