<?php
session_start();
$ses= $_SESSION['user'] ;
if($_SESSION['user'])
{
 ?>
<?php include("header.php");
//include('../db/connection.php');

$res = mysqli_query($link,"select max(SUP_ID) FROM phr_supplier_mast");
	IF($res)
	{
		$row = mysqli_fetch_array($res);
		$sid = $row[0];	
	}
?>
<link rel="stylesheet" href="../css/all1.css" type="text/css" /> 
<script>


	
function noitems(){
var sum=0;
var count=document.form.rows.value;
for(l=1;l<=count;l++)
	{
var str=document.getElementById("sqty"+l).value;
sum=eval(sum)+eval(str);
}//for

document.getElementById("nitem").value=count;
}//fun

function val(str,j)

{//alert(document.getElementById("vat").value)
	var sum1=0;
	var vatsum=0;
	var value1="value"+j;
	var sqty1="sqty"+j;
	
	//var tqty1="tqty"+j;
	//var sal_tab1="sal_tab"+j;
	//var vat1="vat"+j;
	var sal_rate1="srate"+j;
//var noi1="noi"+j;
	var x=0;
	var y=0;
	var z=0;
	var value2=document.getElementById(value1).value;
	
	//alert("hi");
	//var tqty2=document.getElementById(tqty1).value;
	//var noi2=document.getElementById(noi1).value;
	var sqty2=document.getElementById(sqty1).value;
//alert(sqty2);
	//var vat2=document.getElementById(vat1).value;
		
	if(eval(sqty2)==null ||eval(sqty2)=='' ){
	//alert("Please Enter Qty");
	//document.getElementById(sqty1).focus();
	//document.getElementById(tqty1).focus();
	document.getElementById(srate1).value="";
	
	return false;}//if
	
	
	
		//alert(value2);
		x=str*sqty2;
		
			//each=str/noi2;
		//alert(str);
		sum1=str*sqty2;
		//alert(sum1);
		//y=x*vat2/100;
		//z=y/2;
		//alert(z);
		//document.getElementById("sal_tab"+j).value=each;
		document.getElementById("value"+j).value=sum1;
		vatsum=(vat2/100)*sum1;
		//alert(vatsum);
		//document.getElementById("vamt"+j).value=vatsum.toFixed(2);
		//document.getElementById("sst"+j).value=z;
		//document.getElementById("cst"+j).value=z;
		
tot();
vatt();
vattot();
nettotal();
}


function valk(str,j)

{//alert(document.getElementById("vat").value)
	var sum1=0;
	var vatsum=0;
	var value1="value"+j;
	var srate1="srate"+j;

	var x=0;
	var y=0;
	var z=0;
	var value2=document.getElementById(value1).value;
	
	var srate2=document.getElementById(srate1).value;
//alert(srate2);
	//var vat2=document.getElementById(vat1).value;
		
	if(eval(srate2)==null ||eval(srate2)=='' ){
	//alert("Please Enter Qty");
	//document.getElementById(sqty1).focus();
	//document.getElementById(tqty1).focus();
	document.getElementById(sqty1).value="";
	
	return false;}//if
	
	
	
		//alert(value2);
		x=str*srate2;
		
			//each=str/noi2;
		//alert(str);
		sum1=str*srate2;
		//alert(sum1);
		//y=x*vat2/100;
		//z=y/2;
		//alert(z);
		//document.getElementById("sal_tab"+j).value=each;
		document.getElementById("value"+j).value=sum1;
		vatsum=(vat2/100)*sum1;
		//alert(vatsum);
		//document.getElementById("vamt"+j).value=vatsum.toFixed(2);
		//document.getElementById("sst"+j).value=z;
		//document.getElementById("cst"+j).value=z;
		
tot();
vatt();
vattot();
nettotal();
}


function mrpk(str,j)
{//alert(document.getElementById("vat").value)
	var sum1=0;
	var vatsum=0;
	var mrp_tab1="mrp_tab"+j;
	var mrp1="mrp"+j;
	var vat1="tqty"+j;
	var noi1="noi"+j;
	var x=0;
	var y=0;
	var z=0;
	var mrp_tab2=document.getElementById(mrp_tab1).value;
	var noi2=document.getElementById(noi1).value;
		var mrp2=document.getElementById(mrp1).value;

		each=mrp2/noi2;
		//alert(each);
document.getElementById("mrp_tab"+j).value=each;

}


function vatt()
{
	
var count=document.form.rows.value;
var vatsum4=0;
var vatsum12=0;
var vatsum14=0;
for(l=1;l<=count;l++)
{
var str=document.getElementById("vat"+l).value;
//if(str==15){
var vat14=document.getElementById("vamt"+l).value;
if(vat14==""||vat14==null){vat14=0;}
else{vatsum14=eval(vatsum14)+eval(vat14);}
document.getElementById("vat_14").value=vatsum14.toFixed(2);
//}//14


//if(str==14.5){
var vat12=document.getElementById("vamt"+l).value;
if(vat12==""||vat12==null){vat12=0;}
else{vatsum12=eval(vatsum12)+eval(vat12);}
document.getElementById("vat_12").value=vatsum12.toFixed(2);
//}//12
//if(str==5){
var vat4=document.getElementById("vamt"+l).value;
if(vat4==""||vat4==null){vat4=0;}
else{vatsum4=eval(vatsum4)+eval(vat4);}
document.getElementById("vat_4").value=vatsum4.toFixed(2);
//}//4
}//for
}

function tot()
{
	var sum3=0;
	var count3=document.form.rows.value;
	for(l=1;l<=count3;l++)
	{
		var value3="value"+l;
		var value4=document.getElementById(value3).value;
		var amt=eval(value4);
		sum3=Math.ceil(eval(sum3)+eval(amt));
		document.form.total.value=eval(sum3);
		document.form.nettot.value=eval(sum3);
	}
}

</script>
<script>

function nettotal()
{
var count=document.form.rows.value;
if(count==0){
document.getElementById("nettot").value=0;
}
else{
var netsum=0;
var subtot=document.getElementById("total").value;
var vatadd=document.getElementById("vatadd").value;
//var vatadd=0;
var disc=document.getElementById("disc").value;
netsum=(eval(subtot)+eval(vatadd))-eval(disc);
if(netsum<0){alert("Please Check Discount");return false;}
document.getElementById("nettot").value=netsum;
}
adjttotal();
}
</script>
<script>


//////////////////////////addrow starts//////////
function Addrow()
{
	
 
		  
		
   var newRow = document.getElementById("TABLE1");
   var Row = newRow.rows.length;
   var row = newRow.insertRow(Row);
   var index=row.rowIndex;

	<!-- var oCell = document.createElement("TD");
    //oCell.innerHTML= "<div align='center' ><input  type='text' name='pcode"+Row+"' id='pcode"+Row+"' class='form-control' onblur='sameinvcode()'  size='4'  readonly> </div>"; 
	//row.appendChild(oCell);-->

	oCell = document.createElement("TD");
    oCell.innerHTML = "<div align='center' ><input id=\'pname"+Row+"\' list=\'city1"+Row+"\'  name='pname"+Row+"'  ><datalist id=\'city1"+Row+"\' ><?php $sql='SELECT  PRD_NAME FROM  phr_prddetails_mast '; $r=mysqli_query($link,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($r)) {echo  "<option value=\'$row[PRD_NAME]\'/>";}echo '</datalist>';?></div>"; 
    row.appendChild(oCell);




	 oCell = document.createElement("TD");
	 	 oCell.innerHTML = "<div align='center' ><input  type='text' name='sqty"+Row+"' id='sqty"+Row+"' onkeyup='valk(this.value,"+Row+")' class='form-control'  size='4' ><input  type='hidden' name='pid"+Row+"' id='pid"+Row+"'  class='form-control'  size='4' > </div>"; 
     row.appendChild(oCell);
	



	 oCell = document.createElement("TD");
	 	 oCell.innerHTML = "<div align='center' ><input  type='text' name='srate"+Row+"' id='srate"+Row+"'class='form-control'  size='4' onkeyup='val(this.value,"+Row+")' > </div>"; 
     row.appendChild(oCell);

	

	 oCell = document.createElement("TD");
	 	 oCell.innerHTML = "<div align='center'><input type='text' name='value"+Row+"' id='value"+Row+"' class='form-control'  size='4' onFocus='tot()' readonly> </div>"; 
     row.appendChild(oCell);


	 
	
	 
	 
	  oCell = document.createElement("TD");
	 	 oCell.innerHTML = "<div align='center'><input type='hidden' name='vat"+Row+"' id='vat"+Row+"' class='form-control'  size='5' > </div>"; 
    // row.appendChild(oCell);
	 
	 oCell = document.createElement("TD");
	 	 oCell.innerHTML = "<div align='center' ><input  type='hidden' name='vamt"+Row+"' id='vamt"+Row+"' class='form-control'  size='5' onFocus='vatt()' readonly> </div>"; 
    //row.appendChild(oCell);
	

	// oCell = document.createElement("TD");
	 	// oCell.innerHTML = "<div align='center' ><input  type='text' name='cst"+Row+"' id='cst"+Row+"' class='form-control'  size='5' onFocus='cost()' readonly> </div>"; 
    // row.appendChild(oCell);
 
  document.getElementById("nitem").value=Row;

     document.getElementById("rows").value=Row;
//sameinvcodes(Row);
   }//addrow()


 function deleteRow(tableID) {  
 //alert("hi");
    var tbl = document.getElementById('TABLE1');
   var lastRow = tbl.rows.length;
    var rowss=document.getElementById("rows").value;
	//alert(rowss);
  if (lastRow > 1){ 
				  var txtAmt="value"+rowss;
				  var aa= document.getElementById(txtAmt).value;
				  var amt2=eval(aa);
				  var bb=document.form.total.value;
				    sum=bb-amt2;
				  document.form.total.value = eval(sum); 

				  // var vat= document.getElementById("vat"+rowss).value;
				     //alert(vat)
				   // var vatamt= document.getElementById("vamt"+rowss).value;
				   //alert(vatamt)
					
 var sqty= document.getElementById("sqty"+rowss).value;
var nitem= document.getElementById("nitem").value;
var itemsum=eval(nitem)-eval(sqty);
document.getElementById("nitem").value=itemsum;

  tbl.deleteRow(lastRow - 1);document.getElementById("rows").value=eval(rowss)-1;

  vattot();nettotal();
}
  else{ alert('Please Select Row');return false;}
}

</script>
<script>
function save()
{

 // if(document.form.supcode.value=="")
//{
//alert("Please Click On SupplierCode");
//document.form.supcode.focus();
//return false;
//}

//if(document.form.ptype.value=="")
//{
//alert("Please Select purchase Type");
//document.form.ptype.focus();
//return false;
//}
//if(document.form.invno.value=="")
//{
//alert("Invoice No Filed is Empty");
//document.form.invno.focus();
//return false;
//}
//if(document.form.invdate.value=="")
//{
//alert("Invoice Date Filed is Empty");
//document.form.invdate.focus();
//return false;
//}
//if(document.form.recdate.value=="")
//{
//alert("Received Date Filed is Empty");
//document.form.recdate.focus();
//return false;
//}
//if(document.form.recby.value=="")
//{
//alert("Received By Filed is Empty");
//document.form.recby.focus();
//return false;
//}


var count=document.getElementById("rows").value
	   for(k=1;k<=count;k++)
		{
		  var select3="pname"+k;
		  		  						
			if(document.getElementById(select3).value=="")
			{
				alert("Please Click on Product Code Feild");
				document.getElementById(select3).focus();
				return false;
			}
			
			var select4="noi"+k;
			if(document.getElementById(select4).value=="")
			{
				alert("Pack Qty Feild is Empty");
				document.getElementById(select4).focus();
				return false;
			}
			
                        var ss=document.getElementById(select4).value
                        if(isNaN(ss))
                            {
                                alert("Please enter Numbers in Pack Qty");
				document.getElementById(select4).focus();
				return false;  
                            }

			var select5="bno"+k;
			if(document.getElementById(select5).value=="")
			{
				alert("Batch No. Feild is Empty");
				document.getElementById(select5).focus();
				return false;
			}
			
			var select7="mfg"+k;
			if(document.getElementById(select7).value=="")
			{
				alert("Mfg.Date Feild is Empty");
				document.getElementById(select7).focus();
				return false;
			}
			var select8="exp"+k;
			if(document.getElementById(select8).value=="")
			{
				alert("Exp.Date Feild is Empty");
				document.getElementById(select8).focus();
				return false;
			}
                        if(!(document.getElementById(select7).value=="") && !(document.getElementById(select8).value==""))
                            {
                               var str2 = document.getElementById(select7).value;//alert("dob"+str2);
                                 var dt2  = parseInt(str2.substring(0,2),10);
                                 var mon2 = parseInt(str2.substring(3,5),10);
                                 var yr2  = parseInt(str2.substring(6,10),10);
                                 var date2 = new Date(yr2, mon2, dt2);
                               //alert(date2);

                                 var str3=document.getElementById(select8).value;//alert('str3--'+str3)
                                 var dt3 = parseInt(str3.substring(0,2),10);
                                 var mon3 = parseInt(str3.substring(3,5),10);
                                 var yr3  = parseInt(str3.substring(6,10),10);
                                 var current_datefor = new Date(yr3, mon3, dt3);
                                 //alert(current_datefor);
                            if(date2>current_datefor)
                                 {//alert("Date of Birth--"+date2);alert("current_datefor--"+current_datefor)
                                     alert("MFG date Should be Less than EXP date");//To date cannot be greater than from date
                                     return false;
                                 }  
                            }
			var select9="sqty"+k;
			if(document.getElementById(select9).value=="")
			{
				alert("Qty Feild is Empty");
				document.getElementById(select9).focus();
				return false;
			}
                        
                        var sqt=document.getElementById(select9).value
                        if(isNaN(sqt))
                            {
                                alert("Please enter Numbers in Qty");
				document.getElementById(select9).focus();
				return false;  
                            }
                            
			var select10="sfree"+k;
			if(document.getElementById(select10).value=="")
			{
				alert("Free Feild is Empty");
				document.getElementById(select10).focus();
				return false;
			}
                        var sfr=document.getElementById(select10).value
                        if(isNaN(sfr))
                            {
                                alert("Please enter Numbers in Qty");
				document.getElementById(select10).focus();
				return false;  
                            }
			var select6="mrp"+k;
			if(document.getElementById(select6).value=="")
			{
				alert("MRP Feild is Empty");
				document.getElementById(select6).focus();
				return false;
			}
                        var mr=document.getElementById(select6).value
                        if(isNaN(mr))
                            {
                                alert("Please enter Numbers in MRP");
				document.getElementById(select6).focus();
				return false;  
                            }
			var select12="srate"+k;
			if(document.getElementById(select12).value=="")
			{
				alert("Rate Feild is Empty");
				document.getElementById(select12).focus();
				return false;
			}
                        var sra=document.getElementById(select12).value
                        if(isNaN(sra))
                            {
                                alert("Please enter Numbers in Rate");
				document.getElementById(select12).focus();
				return false;  
                            }
					
	
		}//for
 
	
	document.form.action="insert_purchase_invoice.php";
	document.form.submit();
}
</script>

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content1">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">ADD O.T Medicines</div>
								
							
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="ot.php">ADD O.T Medicines List</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">ADD O.T Medicines</li>
                            </ol>
                        </div>
                    </div>
				<?php 	
				
				 $a="select max(lr_no) from phr_purinv_mast";
				$sql = mysqli_query($link,$a);
if($sql)
{
	$row = mysqli_fetch_array($sql);
	$pnid = $row[0];
}
		?>			
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">ADD O.T Medicines</header>
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
								<?php 
								$otid=$_REQUEST['id'];
								$uy=mysqli_query($link,"select * from ip_hosp_drug where id='$otid'") or die(mysqli_error($link));
								$uy1=mysqli_fetch_array($uy);
								
								?>
								 <form name="form" method="post" action="update_ot.php" >
								 
								 <input type="hidden" name="otid" id="otid" value="<?php echo $otid?>" />
                                <input type="hidden" name="opno"  value="<?php echo "OP".($row1[0]+1);?>"/>
<input type="hidden" name="ipno" value="<?php echo "IP".($row1[0]+1);?>"/>
<input type="hidden" name="ser" value="<?php echo $aname?>" />
<input type="hidden" name="authby" value="<?php echo $aname; ?>"/>
<?php $dt=date('y');
		 $d1=date('m');
		if($d1=='01'){$y=$dt-1;}
		if($d1=='02'){$y=$dt-1;}
		if($d1=='03'){$y=$dt-1;}
		
		if($d1=='04'){$y=$dt;}
		if($d1=='05'){$y=$dt;}
		if($d1=='06'){$y=$dt;}
		
		if($d1=='07'){$y=$dt;}
		if($d1=='08'){$y=$dt;}
		if($d1=='09'){$y=$dt;}
		
		if($d1=='10'){$y=$dt;}
		if($d1=='11'){$y=$dt;}
		if($d1=='12'){$y=$dt;}
		
		?>
								<input type="hidden" name="reg_no" value="<?php echo $new1?>" />
								<div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                       
											 <div class="form-group">
	                                            <label><strong>Registration Date :</strong></label>
												
												<table><tr><td>
												
												 <input name="ApplicationDeadline1" id="regdate"  class="form-control"  type="date"  size="20"  required="required"
 value="<?php echo $uy1['date1']; ?>"  placeholder=""/></td><td>
												
												</td></tr></table>
 
 </div>
 
 
 
 	<div class="form-group">
                                            <label>Gender :</label>
											
											
											
											 <input name="sex" id="gen1" readonly="readonly"  class="form-control" type="text" value="<?php echo $uy1['gender'];?>" size="20"  required="required"
 />
	                                            
                                        </div>
											<div class="form-group">
	                                            <label>Age :</label>
												
												<table width="100%"><tr><td>
												<input type="text" class="form-control" name="age" id="age" value="<?php echo $uy1['age'];?>" readonly />
											</td></tr></table>
 
 </div>
										
											
											
											
											
											
											
	                                    </div>
	                                    <div class="col-md-6 col-sm-6">
                                        <!-- textarea -->
										
										<div class="form-group">
	                                            <label><strong>Patient MR No</label></strong>
												<input type="text" name="rnum" class="form-control" value="<?php echo $uy1['mrno'];?>" onclick="javascript:window.open('patient_popup2.php','mypatwindow','width=500,height=500,toolbar=no,resizable=yes,menubar=no')"
 id="regno" readonly /></div>
										
                                       
										
										
										
										 <div class="form-group">
                                            <label>Patient Name :</label>
											
											
											
											 <input name="pname" id="patname" readonly="readonly" value="<?php echo $uy1['name'];?>"  class="form-control" type="text"  size="20"  required="required"
 />
	                                            
                                        </div>
										
										
									 <div class="form-group">
                                            <label>Record No :</label>
											
											
											
											 <input name="rec_num" id="rec_num"   class="form-control" type="text"  size="20" value="<?php echo $uy1['record_no'];?>"  required="required"
 />
	                                            
                                        </div>
										
										
									  
									   
									   
									   
									   
									   
										
										
                                    </div>
									
                                	</div>
								<div class="table-scrollable">
								<table id="t1" width="99%">
			<tr><td><div align="right">
              	     <input name="new2" type="button" class="btn btn-info" value=" + " onclick="javascript:Addrow()"/>
            	     <input name="new" type="button" class="btn btn-info" value=" - " onclick="javascript:deleteRow()"/>
            	     </div></td>
            	   
           <tr><td width="100%" align="center"><br />

<div id="purtable" valign="top">


                                      					   <table class="table table-hover table-checkable order-column full-width" border="1" id="TABLE1">
					                                        <thead>
					                                            <tr>
					                                            	 <th width="10%" class="TH1">Drug Name </th>     
																		
																		<th width="7%" class="TH1">Qty</th>
																		
																		<th width="7%" class="TH1">Rate</th>
																		
																		<th width="7%" class="TH1">Amount</th>
																		
					                                            </tr>
																<?php
																$uy2=mysqli_query($link,"select * from ip_hosp_drug1 where id1='$otid'") or die(mysqli_error($link));
																$nit=mysqli_num_rows($uy2);
																$i=1;
																while($uy3=mysqli_fetch_array($uy2)){
																?>
																<tr>
																<td><input  type='text' name='pname<?php echo $i; ?>' id='pname<?php echo $i; ?>'  value="<?php echo $uy3['drug_name']; ?>" class='form-control'  size='4' >
																<input  type='hidden' name='pid<?php echo $i; ?>' id='pid<?php echo $i; ?>'  value="<?php echo $uy3['id']; ?>" class='form-control'  size='4' >
																</td>
																<td><input  type='text' name='sqty<?php echo $i; ?>' id='sqty<?php echo $i; ?>' onkeyup='valk(this.value,<?php echo $i; ?>)' value="<?php echo $uy3['qty']; ?>" class='form-control'  size='4' ></td>
																<td><input  type='text' name='srate<?php echo $i; ?>' id='srate<?php echo $i; ?>' onkeyup='val(this.value,<?php echo $i; ?>)' value="<?php echo $uy3['rate']; ?>" class='form-control'  size='4' >
																</td>
																<td><input  type='text' name='value<?php echo $i; ?>' id='value<?php echo $i; ?>'  value="<?php echo $uy3['amnt']; ?>" class='form-control' onFocus='tot()' size='4' ></td>
																</tr>
																<?php $i++; }?>
					                                        </thead>
					                                        <tbody>
                                                           
															
                                                            
																
																
															</tbody>
					                                    </table>
														</table>
														<input type="hidden" name="rows" id="rows" value="0" >
													</div>	
												<div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-3 col-sm-3">
	                                        <!-- text input -->
										
	                                            <input type="text"  readonly class="form-control" id="nitem" name="nitem" size="10" value="<?php echo $nit; ?>"  onclick="javasript:noitems()" >
                                  										
	                                    </div>
										 <div class="col-md-3 col-sm-3">
	                                        <!-- text input -->
										
																			
	                                    </div>
										
	                                    <div class="col-md-3 col-sm-3" >
                                        <!-- textarea -->
										
							
									
								
									<div class="form-group">
                                            <label>Sub Total</label>
	                                            <input type="text" class="form-control" readonly value="<?php echo $uy1['sub_total']; ?>"  name="total" required id="total" >
                                        </div>
										<!--<div class="form-group">
                                            <label>Net Amount</label>
											 </div>
											-->
	                                            <input type="hidden"  readonly="readonly"class="form-control" name="nettot" required id="nettot" >
                                       
										<div class="form-group">
                                            <label>Adjustables</label>
	                                            <input type="text" class="form-control" name="adjt" value="<?php echo $uy1['adjust']; ?>" id="adjt" onkeyup="javascript:adjttotal()" >
                                        </div>
										<div class="form-group">
                                            <label>Rounded</label>
	                                            <input type="text" class="form-control" name="round" value="<?php echo $uy1['round']; ?>" id="round" onkeyup="javascript:adjttotal()">
                                        </div>
										<div class="form-group">
                                            <label>Total Amount</label>
	                                            <input type="text" readonly="readonly" class="form-control" name="gtot" value="<?php echo $uy1['total_amt']; ?>"  id="gtot" onclick="javascript:adjttotal()" >
                                        </div>
										<div class="form-group">
                                            <label>Paid Amount</label>
	                                            <input type="text" class="form-control" name="paid" required id="paid" value="<?php echo $uy1['paid']; ?>" onkeyup="javascript:krk()" >
                                        </div>
										<div class="form-group">
                                            <label>Balance Amount</label>
	                                            <input type="text" class="form-control" name="bal" value="<?php echo $uy1['bal']; ?>" readonly="readonly" id="bal" >
                                        </div>
										<script>
function adjttotal(){
var sum=0;
var ntot=document.getElementById("nettot").value;

if(ntot=="" || ntot==null){
document.getElementById("gtot").value="0";
}
else{
var ad=document.getElementById("adjt").value;
var rn=document.getElementById("round").value;
if(ad=="" || ad==null){ad=0;}
if(rn=="" || rn==null){rn=0;}
ntot=eval(ntot)+eval(ad);
//alert(sum);
var ss=eval(ntot)-eval(rn);
document.getElementById("gtot").value=ss;
//document.getElementById("paid").value=ss;
}
}

</script>

<script>
function krk(){
	
	var gtot=document.getElementById("gtot").value;
	var paid=document.getElementById("paid").value;
	
	var ss=eval(gtot)-eval(paid);
document.getElementById("bal").value=ss;
}</script>

 <script type="text/javascript">
		$(function(){
$('#paid').keyup(function() { 
    var balance = parseFloat($(this).val());
    var totalpoints = parseFloat($('#gtot').val());
    $('#bal').val(totalpoints - balance);
});



});//]]>  
</script>
										<div class="form-group">
                                            <label>Received By</label>
	                                            <input type="text" class="form-control" name="recby" readonly="readonly" value="<?php echo $ses?>" required id="recby" >
                                        </div>
                                       
                                    </div>
                                	</div></div>
														
									<div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-3 col-sm-3">
	                                        <!-- text input -->
											<div class="form-group"></div>
											<div class="form-group"> </div>	
										
	                                    </div>
										
										
	                                   
									
									
                                	</div>
									
									
                                </div>					
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" name="submit" onclick="save1()" value="Submit" name=" ">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='ot.php'">Cancel</button>
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