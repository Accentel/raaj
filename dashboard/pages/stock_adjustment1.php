<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?>
<?php include("header.php");?>

<script type="text/javascript">
function reload()
{
window.location.reload();
}
</script>
<script type="text/javascript">
function save_fun(str,inv,qty)
{ 

	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	} 
	//var ttt=document.getElementById('tott').value;
	//alert(ttt);

var qty1=document.getElementById("qty"+str).value;
var prd=document.getElementById("prd_name"+str).value;
//alert(qty1);
var batch=document.getElementById("batch"+str).value;
if(qty1=="" || qty1==null){alert("Enter Modified Qty ");document.getElementById("qty"+str).focus(); return;}

//alert(qty1);
if(qty1 < 0)
{
alert("Modified.Qty is not less than zero");
document.getElementById("qty"+str).focus();
document.getElementById("qty"+str).value='';

return ;
}
	var url="stock_adjustment_insert1.php";
	url=url+"?inv="+inv+"&qty="+qty+"&qty1="+qty1+"&prd="+prd+"&batch="+batch;
//alert("url"+url);
	xmlHttp.onreadystatechange=stateChanged12;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);	
	
}

function stateChanged12() 
{  	
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{	
	
	document.getElementById("aa").innerHTML=xmlHttp.responseText;
	
	var bb=document.getElementById("ccc").value;
	//alert(bb);
	var s=1;
		 if(bb==s)
		 {
		  reload();
		 //document.getElementById("success").innerHTML="Updated Successfully";
		alert("Successfully Updated");
		
		 }
		 else
		 {
		 reload();
		//document.getElementById("success").innerHTML="Not Updated ";
		 alert("Not Updated");
		
		 }
	}
	
}


function GetXmlHttpObject()
{

var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}

</script>	

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Supporter Stock Adjustment List</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Supporter Stock Adjustment List</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Supporter Stock Adjustment List</li>
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
					                                              
					                                            </div>
					                                        </div>
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group pull-right">
					                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
					                                                    <i class="fa fa-angle-down"></i>
					                                                </a>
					                                                <ul class="dropdown-menu pull-right">
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-print"></i> Print </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
					                                                    </li>
					                                                </ul>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div class="table-scrollable">
                                      					   <table class="table table-hover table-checkable order-column full-width" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th>#</th>
					                                                <th> Prd.Name </th>
					                                                <th> Batch No </th>
					                                                <th> Exp.Dt  </th>
																	<th>Type</th>
					                                        <th> Aval.Qty  </th>
					                                              <th> Modified.Qty </th> 
					                                                
					                                                <th> Action </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
                                                            
                                                            <?php 
															 $a="select a.product_code,a.product_name,a.packing_type,a.mrp,a.balance_qty,a.batch_no,a.exp_date,a.inv_id,b.prd_type_det from 
															phr_purinv_support1
			  as a,phr_prddetails_mast as b where a.PRODUCT_NAME=b.PRD_NAME and  b.TYPE='SUPPORTER' and upper(a.product_name) like ('$n%') order by a.product_name";
															$sq=mysqli_query($link,$a);
															$i=1;
															$tot=mysqli_num_rows($sq);
															
															//$tot=mysql_num_rows($sq);
				$fintot = 0;
			  $row = 0;
			  $i = 1;
															while($r=mysqli_fetch_array($sq)){
																$tot1=$r[4];  
				$fintot=$fintot+$tot1;
				   
				$unitcost=$r[3];  
				$nitem=$r[7];  
				$eachcost=($unitcost/$nitem);

				$eachcost=round(($eachcost*100)/100);$row++;
																?>
															
                                                            
																<tr class="odd gradeX">
                                                             
																	<td class="patient-img">
																			<?php echo $i?>
																	</td>
																	<td><?php echo $r['product_name'];?>
																	 <input type="hidden" name="prd_name<?php echo $row ?>" id="prd_name<?php echo $row ?>" value="<?php echo $r[1];  ?>" />
																	</td>
																	<td class="left">
                            <?php echo $r[5];  ?> <input type="hidden" name="batch<?php echo $row ?>" id="batch<?php echo $row ?>" value="<?php echo $r[5];  ?>" />
                                                         </td>
																	<td class="left"><?php //echo $r['type'];?>
																	<?php $d=$r[6];  echo date('d-m-Y',strtotime($d));?>
																	</td>
																	<td><?php echo $r['prd_type_det'];?></td>
																<td class="left"><?php echo $r[4];  ?></td>
																
																<td><input name="qty<?php echo $row ?>" size="5" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  id="qty<?php echo $row ?>" type="text"  /></td>	
															
																	<td>
																	<A href="javascript:save_fun(<?php echo $row ?>,<?php echo $r[4];  ?> ,<?php echo $r[7];  ?> );">
			 <img src="../img/save1.gif" border="0"></A>
															   <div id="aa"> <input type="hidden" name="ccc" id="ccc" value=""/></div>
					<input type="hidden" name="tott" id="tott" value="<?php echo $tot ?>" />
                     															
																		<!--<a href="edit_product_type.php?id=<?php echo $r['prdtype_code']?>" class="btn btn-primary btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a><a onclick="return confirm('Are you sure you want to delete this item?');" href="../modal/delete_product.php?id=<?php echo $r['prdtype_code']?>">
																	
																		<button class="btn btn-danger btn-xs">	
																			<i class="fa fa-trash-o "></i>
																		</button></a>-->
																	</td>
																</tr><?php $x=$i++;}?>
																
																
																
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    
            <!-- end page content -->
            <!-- start chat sidebar -->
            
                        <!-- End Doctor Chat --> 
 						<!-- Start Setting Panel --> 
 						
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
	 