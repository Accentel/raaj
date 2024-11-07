<?php
session_start();
$ses = $_SESSION['user'];
if (!isset($_SESSION['user'])) {
    header('Location: ../../index.php');
    exit;
}

include("header.php");

// Database Configuration
$dbHost = "localhost";
$dbUser = "a16673ai_payamath";
$dbPass = "Payamath@2016";
$dbName = "a16673ai_raaj";

// Establish Database Connection
$link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch the maximum SUP_ID
$res = mysqli_query($link, "SELECT MAX(SUP_ID) FROM phr_supplier_mast");
$sid = 0;
if ($res) {
    $row = mysqli_fetch_array($res);
    $sid = $row[0];
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/all1.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript functions go here
        function addRow() {
            // Your JavaScript code for adding rows
			var count=document.getElementById("rows").value
	   for(k=1;k<=count;k++)
		{
		  var select3="itemcode"+k;
		  		  						
			if(document.getElementById(select3).value=="")
			{
				alert("Please Click on Product Code Feild");
				document.getElementById(select3).focus();
				return false;
			}
			
			
			var select12="minlevel"+k;
			if(document.getElementById(select12).value=="")
			{
				alert("Min Order Level Feild is Empty");
				document.getElementById(select12).focus();
				return false;
			}
					
	
		}
 
		     if(count>=2)
			{
      for(i=1;i!=count;i++)
		{	
		  var select3="itemcode"+i;
		var pp=document.getElementById(select3).value;	
		for(j=count;j!=i;j--)
			{	
		 var select32="itemcode"+j;
		var p=document.getElementById(select32).value;
		
		if(pp==p)
		{
		
		alert("Product Codes are same ");
		document.getElementById(select32).value="";
		document.getElementById(select32).focus();
		return (false);

		}
		}
		}
		}
	
	   var supcode=document.getElementById("supcode").value

   var newRow = document.getElementById("TABLE1");
   var Row = newRow.rows.length;
   var row = newRow.insertRow(Row);
   var index=row.rowIndex;


	oCell = document.createElement("TD");
    oCell.innerHTML = "<div align='center' ><input  type='text' name='itemname"+Row+"' id='itemname"+Row+"' class='textbox1'   size='8'> </div>"; 
    row.appendChild(oCell);

    oCell = document.createElement("TD");
	 	 oCell.innerHTML = "<div align='center' ><input  type='text' name='uom"+Row+"' id='uom"+Row+"'class='textbox1' size='8'  > </div>"; 
     row.appendChild(oCell);

	oCell = document.createElement("TD");
    oCell.innerHTML = "<div align='center' ><input  type='text' name='minlevel"+Row+"' id='minlevel"+Row+"' class='textbox1'  > </div>"; 
    row.appendChild(oCell);

    oCell = document.createElement("TD");
	 	 oCell.innerHTML = "<div align='center' ><input  type='text' name='rate"+Row+"' id='rate"+Row+"'class='textbox1'  > </div>"; 
     row.appendChild(oCell);




     document.getElementById("rows").value=Row;
        }

        function deleteRow() {
            // Your JavaScript code for deleting rows
        }

        function checkForm() {
            // Your JavaScript code for form validation
        }
    </script>
</head>
<body>
    <!-- Your HTML content goes here -->

	<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Supplier Items</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="add_supplier_items.php">Supplier Items</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Supplier Items</li>
                            </ol>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Supplier Items</header>
                                    <button id = "panel-button3" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                    
                                </div>
								
								 <form name="form" method="post" action="insert_purchase_invoice.php" >
                                <div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
	                                        <div class="form-group">
	                                            <label>Supplier Code</label>
	                                            <input type="text" class="form-control" name="supcode"   onclick="window.open('supplier_item_popup.php','mywindow','width=500,height=550,toolbar=no,resizable=yes,menubar=no,scrollbars=yes')"  required="required" id="supcode" >
	                                        </div>

    <!-- Footer -->
    <?php include("footer.php"); ?>

</body>
</html>
