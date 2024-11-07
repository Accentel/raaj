<?php //include('config.php');

session_start();
include('../db/connection.php');
if($_SESSION['user'])

{
    $aname = $_SESSION['user'];
	$lr_id=$_REQUEST['lr_no'];
	$cflag1="no";
	$cflag2="no";
	 $x="select distinct billing_type,cust_name,sales_type,sal_date,total,bill_type,customer_type,card_no,lr_no,age,sex,Consultant_Name,concession_type,bal,own_amnt from phr_salent_mast where lr_no='$lr_id' ";
$qr1=mysqli_query($link,$x);

if($qr1){
$row1 = mysqli_fetch_array($qr1);
$billing_type=$row1[0]; 
$customer_name=$row1[1];
$sale_type=$row1[2];
$sale_date=date('d-m-Y',strtotime($row1[3]));
$total_amt=$row1[4];
$bill_type=$row1[5];
 $customer_type=$row1[6];
$customer_type1=$row1[6];
$card_no=$row1[7];
$lr_no=$row1[8];
$age=$row1[9];
$sex=$row1[10];
$ConsultantName=$row1[11];
$concetype=$row1[12];
$cardno=$row1[13];
$bal=$row1['bal'];
$own_amnt=$row1['own_amnt'];
}	
  $a="select a.product_code,b.product_name,b.batch_no,b.mfg_date,b.exp_date,a.u_qty,a.u_rate,a.value,balance_qty,a.inv_id,c.discount,c.total,a.disc,a.total,c.spl_dis,a.gst from phr_salent_dtl as a,phr_purinv_dtl as b,phr_salent_mast as c where a.inv_id=b.inv_id and a.lr_no=c.lr_no and a.lr_no='$lr_id'";
$rsa=mysqli_query($link,$a);

if($sale_type == "C")
{
	$stype1="Cash";
}
else if($sale_type == "D")
{
	 $stype1="Credit/Debit Card";
}
else
{
	$stype1="Cheque";
}
	$aname = $_SESSION['user'];
	$rsp=mysqli_query($link,"select distinct product_name from phr_purinv_dtl where balance_qty>0");
	while($rs = mysqli_fetch_array($rsp)){
		$name1[]=$rs[0];
	}
	
 ?>
<?php  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

	<head>
	<?php
		//include("header.php");
	?>
    <link rel="stylesheet" href="../css/all1.css" type="text/css" /> 
<script language="javascript" type="text/javascript" src="../js/actb.js"></script>
<script language="javascript" type="text/javascript" src="../js/actb2.js"></script>
<script language="javascript" type="text/javascript" src="../js/common.js"></script>

<?php /*?><script type="text/javascript">
var customarray1=new Array("<?php for($p=0;$p != count($name1);$p++){if($p==(count($name1)-1)){ ?><?php echo $name1[$p] ?><?php }else{ ?><?php echo $name1[$p] ?>","<?php }} ?>");
var custom3= new Array('something','randomly','different');
alert(customarray1);
</script><?php */?>
<script>
$(document).ready(function(){
 $("#custname").autocomplete("autocomplete2.php", {
		selectFirst: true
	});
});
</script>
	<script>
$(document).ready(function(){
 $("#mobileno").autocomplete("autocomplete3.php", {
		selectFirst: true
	});
});
</script>
	<script>
$(document).ready(function(){
 $("#custname3").autocomplete("autocomplete2.php", {
		selectFirst: true
	});
});
</script>
<script>
$(document).ready(function(){
 $("#mobileno1").autocomplete("autocomplete3.php", {
		selectFirst: true
	});
});
</script>
<script>
function showHint21(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	//document.getElementById("supname").value=strar[2];
	
	document.getElementById("mobileno").value=strar[1];
	document.getElementById("caddress").value=strar[2];
	
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search16.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showHint22(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	//document.getElementById("supname").value=strar[2];
	
	document.getElementById("mobileno1").value=strar[1];
	document.getElementById("address1").value=strar[2];
	
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search16.php?q="+str,true);
xmlhttp.send();
}
</script>

<script>
function showHint23(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	//document.getElementById("supname").value=strar[2];
	
	document.getElementById("custname").value=strar[1];
	document.getElementById("caddress").value=strar[2];
	
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search161.php?q="+str,true);
xmlhttp.send();
}
</script>

<script>
function showHint24(str)
{

if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	//document.getElementById("supname").value=strar[2];
	
	document.getElementById("custname3").value=strar[1];
	document.getElementById("address1").value=strar[2];
	
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search161.php?q="+str,true);
xmlhttp.send();
}
</script>
<script type="text/javascript">

function val(str,id)
{


var srate1=document.getElementById("ucost"+id).value;
if(srate1=='' || srate1==null){srate1=0;}
var totqty=document.getElementById("bal"+id).value;
if(totqty=='' || totqty==null){totqty=0;}
if(str>eval(totqty)){alert("Please Enter Sale Quantity Below "+totqty);document.getElementById("sqty"+id).value="";return false;}
//alert("srate1--"+srate1)
//alert("str--"+str)
var prev=document.getElementById("value"+id).value;
var srate2=0;

if(str==null || str==''){srate2=0;}else{
srate2=eval(str)*eval(srate1);
}



document.getElementById("value"+id).value=Math.abs(srate2);
var vall=document.getElementById("rowval").value;
if(vall=='' || vall==null){vall=0;}
if(eval(vall)==0)
vall=eval(vall)+eval(srate2);
else{
if(prev==null || prev==''){prev=0;}
vall=eval(vall)-eval(prev);
vall=eval(vall)+eval(srate2);
//for discount
}
var sqty=document.getElementById("sqty"+id).value;
if(sqty=='' || sqty==null){sqty=0;}
var srat=document.getElementById("ucost"+id).value;
if(srat=='' || srat==null){srat=0;}
document.getElementById("total").value=vall;
document.getElementById("rowval").value=vall;

var doscount=document.getElementById("dis"+id).value;
if(doscount=='' || doscount==null){doscount=0;}
if(doscount==0){
document.getElementById("amt"+id).value=Math.abs((eval(srate2)));
}else{
var value=document.getElementById("value"+id).value;
var at=Math.abs((eval(value))-(eval(value))*(eval(str))/100);
//var at1=Math.abs(eval(at)+(eval(at)*eval(vat)/100));
var vat=document.getElementById("vat"+id).value;
if(vat=='' || vat==null){vat=0;}
//document.getElementById("amt"+id).value=Math.abs((eval(srate2))+(eval(srate2))*(eval(vat))/100);
}
var sum=0;
 var totaldiscount=0;
	 var count=$("#dataTable tr").length-1;
	for(i=1;i<=count;i++)
	{
	    var txtAmt="amt"+i;
		 var discount="dis"+i;
		var amt1=document.getElementById(txtAmt).value;
                if(amt1=='' || amt1==null){amt1=0;}
		var discount=document.getElementById(discount).value;
                if(discount=='' || discount==null){discount=0;}
		var amt=eval(amt1);
		sum=eval(sum)+eval(amt)
		totaldiscount=eval(totaldiscount)+eval(discount)/count
		document.getElementById("disc").value= Math.round(totaldiscount);	
		document.getElementById("nettotal").value= Math.round(sum);	
		document.getElementById("grand").value= Math.round(sum);
	}
	
	
}
function discal(str,id){
var value=document.getElementById("value"+id).value;
if(value=='' || value==null){value=0;}
var disamt=Math.abs((eval(value))-(eval(value))*(eval(str))/100);
//var vat=document.getElementById("va"+id).value;
//if(vat=='' || vat==null){vat=0;}
document.getElementById("amt"+id).value=Math.abs((eval(disamt)));
//Math.abs((eval(disamt))+(eval(disamt))*(eval(vat))/100);
//Math.abs(disamt);





 var sum=0;
 var totaldiscount=0;
            
	 var count=$("#dataTable tr").length-1;
	 
	for(i=1;i<=count;i++)
	{
	    var txtAmt="amt"+i;
		 var discount="dis"+i;
		var amt1=document.getElementById(txtAmt).value;
                if(amt1=='' || amt1==null){amt1=0;}
		var discount=document.getElementById(discount).value;
                if(discount=='' || discount==null){discount=0;}
		var amt=eval(amt1);
		sum=eval(sum)+eval(amt)
		totaldiscount=eval(totaldiscount)+eval(discount)/count;
		document.getElementById("disc").value= Math.round(totaldiscount);	
		document.getElementById("nettotal").value= Math.round(sum-((sum*totaldiscount)/100));
                 document.getElementById("amount").value= Math.round(sum-((sum*totaldiscount)/100));
				  document.getElementById("grand").value= Math.round(sum-((sum*totaldiscount)/100));
	}

 }
function tot()
{
	var sum3=0;
	var count3=$("#dataTable tr").length-1;
	for(l=1;l<=count3;l++)
	{
		var value3="value"+l;
		var value4=document.getElementById(value3).value;
		var amt=eval(value4);
		if(amt==null || amt==''){amt=0;}
		sum3=eval(sum3)+eval(amt);
		document.form.total.value=eval(sum3).toFixed(2);
		document.form.nettotal.value=eval(sum3).toFixed(2);
	}
}

function noitems(){
var sum=0;
var count=$("#dataTable tr").length-1;
for(l=1;l<=count;l++)
	{
var str=document.getElementById("sqty"+l).value;
sum=eval(sum)+eval(str);
}//for

document.getElementById("rows").value=count;
}//fun
function amount_cal()
{
     //alert("hai");
     var cal=0;
	 var cal1=document.getElementById("grand").value;
	 var cal2=document.getElementById("amount").value;
	 
	 cal=eval(cal2)-eval(cal1);
	
	 document.form.amount1.value=eval(cal).toFixed(2);
	 
}
var xmlHttp



////To get Sub A/c Names///////////

function showBatch(str,str1)
{ 
	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	} 
var url="getbatch_1.php";
url=url+"?pname="+str+"&row="+str1;
document.getElementById("str").value=str1;
xmlHttp.onreadystatechange=stateChanged2;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function stateChanged2() 
{ 
  
	if (xmlHttp.readyState==4)
	{ 	var str=document.form.str.value
	     var showdata = xmlHttp.responseText; 
	    document.getElementById("batchdiv"+str).innerHTML=showdata;
		 document.getElementById("bachno"+str).focus();
	}
}


function showMAName(str,str1,str2)
{ str2=document.getElementById("btype").value;
	//alert("1"+1);
//	alert(str2)
	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	} 
	
//alert("str1="+str1);
st = str1;
var url="getsname.php";
url=url+"?pname="+str+"&rowid="+str1+"&btype1="+str2;
//alert("url"+url);
document.getElementById("str").value=st;
xmlHttp.onreadystatechange=stateChanged1;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function stateChanged1() 
{ 
  
	if (xmlHttp.readyState==4)
	{ 
	     var showdata = xmlHttp.responseText; 
		var str=document.form.str.value
		 var strar = showdata.split(":");
		//alert("str="+str);
		//alert(strar);
		document.getElementById("bal"+str).value=strar[1];
			  document.getElementById("mfg"+str).value=strar[2];
			  document.getElementById("exp"+str).value=strar[3];
			  document.getElementById("ucost"+str).value=strar[4];
			 // document.getElementById("pcode"+str).value=strar[5];
			   document.getElementById("vat"+str).value=strar[5];
			   document.getElementById("gst"+str).value=strar[6];
			  document.getElementById("sqty"+str).focus();
			
			/* document.getElementById("bal"+str).value=strar[1];
			  document.getElementById("mfg"+str).value=strar[2];
			  document.getElementById("exp"+str).value=strar[3];
			  document.getElementById("ucost"+str).value=strar[4];
			  document.getElementById("pcode"+str).value=strar[5];
			   document.getElementById("pcode"+str).value=strar[6];
			   document.getElementById("vat"+str).value=strar[7];
			  document.getElementById("sqty"+str).focus();
			*/
	}
}

function patientdetails(str)
{ 

	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	} 
	
//alert(str);
var url="getPatientDetails.php";
url=url+"?pname="+str;
xmlHttp.onreadystatechange=stateChangedpat;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function stateChangedpat() 
{ 
  
	if (xmlHttp.readyState==4)
	{ 
	     var showdata = xmlHttp.responseText; 
		
		 var strar = showdata.split(":");
		//alert(strar);
			document.getElementById("conce").style.display='';
			document.getElementById("conce1").style.display='';
			 document.getElementById("age").value=strar[1];
			  document.getElementById("sex1").value=strar[2];
			  document.getElementById("consultant_name1").value=strar[3]; 
			  //document.getElementById("cconcessiontype").value=strar[4];
			  document.getElementById("custname2").value=strar[5].trim();
			  document.getElementById("ccardno").value=strar[6];
			  var cc=strar[4].trim();
			
			  if(!(cc=="Other")){
			    document.getElementById("stype").value="E";
			   document.form.bill[0].disabled = true;
					document.form.bill[0].checked=false;
					document.form.bill[1].checked=true;
			  }
			  else{
			  document.getElementById("stype").value="C";
			   document.form.bill[0].disabled = false;
			  document.form.bill[0].checked=true;
			  }
			  
			 
			
	}
}
function patientdetails1(str)
{ 

	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	} 
	
//alert(str);
var url="getPatientDetails1.php";
url=url+"?pname="+str;
xmlHttp.onreadystatechange=stateChangedpat1;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function stateChangedpat1() 
{ 
  
	if (xmlHttp.readyState==4)
	{ 
	     var showdata = xmlHttp.responseText; 
		
		 var strar = showdata.split(":");
		//alert(strar);
			document.getElementById("conce").style.display='';
			document.getElementById("conce1").style.display='';
			 document.getElementById("krk").value=strar[1];
			  document.getElementById("sex").value=strar[2];
			  document.getElementById("consultant_name").value=strar[3]; 
			  //document.getElementById("cconcessiontype").value=strar[4];
			  document.getElementById("custname2").value=strar[5].trim();
			  document.getElementById("ccardno").value=strar[6];
			  var cc=strar[4].trim();
			
			  if(!(cc=="Other")){
			    document.getElementById("stype").value="E";
			   document.form.bill[0].disabled = true;
					document.form.bill[0].checked=false;
					document.form.bill[1].checked=true;
			  }
			  else{
			  document.getElementById("stype").value="C";
			   document.form.bill[0].disabled = false;
			  document.form.bill[0].checked=true;
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
<!-- <script type="text/javascript">
		$(function(){
$('#sqty1').keyup(function() { 

	var totalpoints1 = parseFloat($('#sqty1').val());
    var totalpoints = parseFloat($('#ucost1').val());
	var totalpoints2 = parseFloat($('#va1').val());
    $('#vat1').val((totalpoints1 * totalpoints*totalpoints2)/100);
});

});
</script>-->
<script type="text/javascript">



rows="2";
        function addRow(tableID) {   

   
		var actb4=document.getElementById("actb").value;
		var actb5=eval(actb4)+1;
	
		document.getElementById("actb").value=actb5;
            var table = document.getElementById(tableID);   
            var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			document.form.rows.value=(rowCount);
			
            var cell1 = row.insertCell(0);   
            var element1 = document.createElement("input"); 
		    element1.type = "checkbox"; 
			element1.name = "checkbox1"; 
			element1.id= "checkbox1"; 
			element1.value = actb5; 
			cell1.appendChild(element1); 
            
			
	//oCell = document.createElement("TD");
  //  oCell.innerHTML = "<input  type='text' name='pname"+rowCount+"' id='pname' class='textbox1' size='22'  onblur=showBatch(this.value,"+actb5+")>";
  //
	
	oCell = document.createElement("TD");
	oCell.innerHTML = "<input id=\'pname"+rowCount+"\' list=\'city1"+rowCount+"\'  name='pname"+rowCount+"' onblur='showBatch(this.value,"+actb5+")' ><datalist id=\'city1"+rowCount+"\' ><?php $sql='select distinct product_name from phr_purinv_dtl '; $r=mysqli_query($link,$sql) or die(mysql_error());
while ($row=mysqli_fetch_array($r)) {echo  "<option value=\'$row[product_name]\'/>";}echo '</datalist>';?></div>"; 
	
	row.appendChild(oCell);
	oCell = document.createElement("TD");
	oCell.innerHTML = "<div id='batchdiv"+actb5+"'><select name='bachno"+rowCount+"' class='select' style=width:75px id='bachno"+actb5+"'><option>Batch</option></select></div>"; 
    row.appendChild(oCell);
	
	oCell = document.createElement("TD");
	oCell.innerHTML = "<input type='text' name='bal"+rowCount+"' id='bal"+actb5+"' class='textbox1' readonly size='8'>"; 
    row.appendChild(oCell);
    
    oCell = document.createElement("TD");
	oCell.innerHTML = "<input type=text name='mfg"+rowCount+"' id='mfg"+actb5+"' class='textbox1' readonly size='7' >"; 
    row.appendChild(oCell);

	oCell = document.createElement("TD");
    oCell.innerHTML = "<input type=text name='exp"+rowCount+"' id='exp"+actb5+"' class='textbox1' readonly size='7' >"; 
    row.appendChild(oCell);

    oCell = document.createElement("TD");
	oCell.innerHTML = "<input type='text' name='sqty"+rowCount+"' id='sqty"+actb5+"' size='5' onkeyup='val(this.value,"+actb5+")' class='textbox1'>"; 
    row.appendChild(oCell);

	oCell = document.createElement("TD");
	oCell.innerHTML = "<input  type='text' name='ucost"+rowCount+"' id='ucost"+actb5+"' readonly class='textbox1'  size='5'>"; 
    row.appendChild(oCell);
	
	
	  
    oCell = document.createElement("TD");
	oCell.innerHTML = "<input type='text' name='value"+rowCount+"' id='value"+actb5+"' class='textbox1' size='10'  readonly> "; 
    row.appendChild(oCell);
	
	oCell = document.createElement("TD");
	oCell.innerHTML = "<input  type='text' name='dis"+rowCount+"' id='dis"+actb5+"' value=0 class='textbox1' onkeyup='discal(this.value,"+actb5+")' size='5'> "; 
    row.appendChild(oCell);
	
oCell = document.createElement("TD");
	oCell.innerHTML = "<input  type='text' name='gst"+rowCount+"' id='gst"+actb5+"' readonly class='textbox1'  size='7'>"; 
    row.appendChild(oCell);
	
	
	
	
	oCell = document.createElement("TD");
	oCell.innerHTML = "<input  type='text' name='amt"+rowCount+"' id='amt"+actb5+"' class='textbox1' size='5'> "; 
    row.appendChild(oCell);
    oCell = document.createElement("TD");
	oCell.innerHTML = "<input  type='hidden' name='vat"+rowCount+"' id='vat"+actb5+"' readonly class='textbox1'  size='7'>"; 
    row.appendChild(oCell);
	oCell = document.createElement("TD");
	oCell.innerHTML = "<input  type='hidden' name='pcode"+rowCount+"' id='pcode"+actb5+"' class='textbox1' size='5'> "; 
    row.appendChild(oCell);
		oCell = document.createElement("TD");
	oCell.innerHTML = "<input  type='hidden' name='va"+rowCount+"' id='va"+actb5+"' readonly class='textbox1'  size='5'>"; 
    row.appendChild(oCell);
	
	var obj = actb(document.getElementById('pname'+actb5+''),customarray1);
        document.getElementById('pname'+actb5+'').focus();
	   }
           function deleteRow(tableID) {  
         try {  
		
            var table = document.getElementById(tableID);
			var rowss1 = table.rows.length;  
                        if (rowss1>2){
		      for(var i=1; i<rowss1; i++) {   
                var row = table.rows[i];  
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {   
				  
		var chval=chkbox.value	
		//alert("chval"+chval);
var ccc=document.getElementById("value"+chval).value;
if(ccc=='' || ccc==null){ccc=0;}
var rwval=document.getElementById("rowval").value;
if(rwval=='' || rwval==null){rwval=0;}
var final1=eval(rwval)-eval(ccc);
document.getElementById("rowval").value=Math.abs(final1);
document.form.total.value=Math.abs(final1).toFixed(2);  
document.form.nettotal.value=Math.abs(final1).toFixed(2);
document.form.amount.value=Math.abs(final1).toFixed(2);				  
                    table.deleteRow(i); 
                   // rowss1 --;   
                    i--;
		} 
                document.form.rows.value=eval(i);
                document.getElementById("actb").value=eval(i);
             }
			 if(null != chkbox ) {   
			  alert ('You didnt choose any of the checkbox!');		
			  }
                        }
            }catch(e) {   
                
            }   
        }   
          
				

</script>
<script type="text/javascript">
function save(finflg)
{
var type=null;

var count=document.getElementById("rows").value

if(count!=0){

var radioSelected = false;
for (i = 0;  i < form.custm_type.length;  i++){

if (form.custm_type[i].checked)radioSelected = true;
}

if (!radioSelected){
alert("Please select one of the \"Customar Type\" options.");
return (false);    
} 
else
{
//alert(document.getElementById("custm_type1").checked)
if(document.getElementById("custm_type1").checked){

type=document.getElementById("custm_type1").value;
//alert(type);
}
else
{
type=document.getElementById("custm_type2").value;
//alert(type);
}
}
if(type=="c"){
  
	
	if(document.form.csex.selectedindex=0){
  alert("Please Select Sex");
  form.csex.focus();
   return false; 
    }
	
}else{




}

	

if(document.form.stype.value=="")
{
alert("Please Select Sales Type");
form.stype.focus();
return false;
}


if(document.form.saledate.value=="")
{
alert("Sale Date Filed is Empty");
form.saledate.focus();
return false;
}

}else{
	alert("Select Click add row");
	return false;
	}

	document.form.action="salesentry_insert1.php";
	document.form.submit();
	
	
}
</script>
<script type="text/javascript">
function custom(str){
	if(str=='p'){
	document.getElementById("trcust").style.display='none';
	document.getElementById("trcustkrk").style.display='none';
	document.getElementById("trcust1").style.display='none';
	document.getElementById("trpat").style.display='';
	document.getElementById("trpat2").style.display='';
	document.getElementById("trpat1").style.display='none';
	document.getElementById("trpatk").style.display='none';
	//document.getElementById("trbill").style.display='';
	document.getElementById("conce2").style.display='none';
	document.getElementById("conce3").style.display='none';
	document.getElementById("conce").style.display='none';
	document.getElementById("conce1").style.display='none';
	document.getElementById("conce4").style.display='none';
	document.getElementById("conce5").style.display='none';
	document.getElementById("conce6").style.display='none';
	document.getElementById("conce7").style.display='none';
	}//if
	
	else if(str=='p1'){

	document.getElementById("trcustkrk").style.display='none';
	document.getElementById("trcust").style.display='none';
	document.getElementById("trcust1").style.display='none';
	document.getElementById("trpat").style.display='none';
	document.getElementById("trpatk").style.display='';
	document.getElementById("trpat1").style.display='';
	document.getElementById("trpat2").style.display='none';
	
	
	
	//document.getElementById("trpat").style.display='';
	//document.getElementById("trpat1").style.display='';
	//document.getElementById("trpat2").style.display='';
	//document.getElementById("trbill").style.display='';
	document.getElementById("conce2").style.display='none';
	document.getElementById("conce3").style.display='none';
	document.getElementById("conce").style.display='';
	document.getElementById("conce1").style.display='';
	document.getElementById("conce4").style.display='';
	}//if
	else{
	document.getElementById("trcustkrk").style.display='';
	document.getElementById("trcust").style.display='';
	document.getElementById("trcust1").style.display='';
	document.getElementById("trpat1").style.display='none';
	document.getElementById("trpat2").style.display='none';
	document.getElementById("trpat").style.display='none';
	document.getElementById("conce2").style.display='none';
	document.getElementById("conce3").style.display='none';
	document.getElementById("conce").style.display='none';
	document.getElementById("conce1").style.display='none';
	document.getElementById("conce4").style.display='none';
	document.getElementById("conce5").style.display='none';
	document.getElementById("conce6").style.display='none';
	document.getElementById("conce7").style.display='none';
	}//else
	
	}//fun
	
	
function saletype(str){
	if(str=='Q'){
	document.getElementById("saletype1").style.display='';	
	document.getElementById("saletype1").innerHTML='Cheque No';									
	document.getElementById("saletype2").style.display='';
	document.form.bill[0].disabled = false;
	document.form.bill[0].checked=true;
}
	else if(str=="D"){
	document.getElementById("saletype1").style.display='';	
	document.getElementById("saletype1").innerHTML='Credit/Debit No';									
	document.getElementById("saletype2").style.display='';
	document.form.bill[0].disabled = false;
	document.form.bill[0].checked=true;
	
	}//elseif
	else if(str=="C"){
	
	document.getElementById("saletype1").style.display='none';	
	document.getElementById("saletype2").style.display='none';
	document.form.bill[0].disabled = false;
	document.form.bill[0].checked=true;
	
	}//elseif
	else{
	document.getElementById("saletype1").style.display='none';	
	document.getElementById("saletype2").style.display='none';
	document.form.bill[0].disabled = true;
	document.form.bill[0].checked=false;
	document.form.bill[1].checked=true;
	}//else
	
	}//fun
	</script>
	
	
	
	<script type="text/javascript">
   function funconce2(str){
	//alert(str);
	if(str == "Yes"){
	

		document.getElementById("insu2").style.display='';
		
		
	}else if(str == "No"){
		
		document.getElementById("insu2").style.display='none';
		
		
	}
}
		</script>
	
<title>Hospital Managmeny System</title>
</head>

	<body>

	<div id="conteneur container" style="height:auto;">
		<!--<div id="header"><?php include("title.php"); ?><b id="logout">Welcome to <?php echo $_SESSION['name1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></b></div>-->
		
		  <div id="centre" class="table-responsive" style="height:auto;">
          <h1 style="color:red;" align="center">EDIT SALES ENTRY FORM</h1>
           <form name="form" autocomplete="off" method="post">
		   <input type="hidden" name="authby" value="<?php echo $aname ?>"/>
<table width="100%" border="0" class="table" cellspacing="0" cellpadding="0">
   
  <tr>
    <td colspan="2" class="mainbox"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	
      
      <tr>
        <td height="400" valign="top" class="box_midlebg" align="center"><br>
          <table width="98%" height="257" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><table width="100%" border="0" cellspacing="5" cellpadding="2">
			
                  
                   <tr  style="display:none" id="trcustkrk">
				 <td class="label1"><div align="right"><input type="radio" name="ctyp" value="Existing" checked="checked" />Existing &nbsp;
                 <a href="add_customer.php"><input type="radio" name="ctyp" value="New" onclick="javascript:location.href='add_customer.php'" />New</a>  </div></td>
                    <td align="left"></td>
					 <td class="label1"><div align="right"> </div></td>
                    <td >    </td>
                  </tr>
                  
				 <tr  style="display:none" id="trcust">
				 <td class="label1"><div align="right">Customer Name : </div></td>
                    <td align="left">
         <input name="custname1" type="text" class="text" id="custname1"
 onclick="window.open('finalbill_popupk.php','mypatwindow','width=500,height=500,toolbar=no,resizable=yes,menubar=no,scrollbar=yes')"/></td>
					 <td class="label1"><div align="right">Age : </div></td>
                    <td ><input name="cage" type="text" class="text" size="10" maxlength="3" id="cage" />    </td>
                  </tr>
				   <tr  style="display:none" id="trcust1">
                   
					   <td class="label1"><div align="right">Sex : </div></td>
					  <td ><select name="csex"  id="csex"><option selected="selected">-- Sex --</option><option value="Male">Male</option><option value="Female">Female</option></select>   </td>
					   <td class="label1"><div align="right">Consultant Name : </div></td>
					  <td >
					  
					  </td>
                   
				  </tr>
                  <tr style="display:none" id="trpat">
                     <td class="label1"><div align="right">Patient Name : </div></td>
                     <td align="left"><!--<input type="text" class="text" name="custname3" id="custname3" onfocus="patientdetails(this.value)"/>-->
					
					
					
					<input name="custname3" type="hidden" class="text" id="custname3"
 onclick="window.open('finalbill_popupk1.php','mypatwindow','width=500,height=500,toolbar=no,resizable=yes,menubar=no,scrollbar=yes')"/>
					
					
					<input name="ckrk" type="text" class="text" id="ckrk"
 onclick="window.open('finalbill_popupk1.php','mypatwindow','width=500,height=500,toolbar=no,resizable=yes,menubar=no,scrollbar=yes')"/>
					
					
					<?php /*?> <select name="custname3" style="width:230px;height:22px;" id="custname3"  onchange="patientdetails(this.value)">
                       <option selected="selected">-Select In Patient-</option>
                       <?php
					   include_once("config1.php"); 
							$sql = mysql_query("select distinct pat_no,patientname,a.registerno,b.PAT_REGNO from patientregister as a,ip_pat_admit as b where a.registerno=b.pat_regno and upper(dis_status) not like upper('discharged%') order by a.reg_id desc");
						while($row = mysql_fetch_array($sql))
						  { ?>
                       <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?>&nbsp;[<?php echo $row[3] ?>]</option>
                       <?php } ?>
                     </select><?php */?>
                     
                     
                     
                     
                     
					 </td>
					  <td class="label1"><div align="right">Age:</div></td>
					  <td ><input name="custname2" type="hidden" class="text" size="10" id="custname2" readonly/>  
                       <input name="age" type="text" class="text" size="10" id="age" readonly/>    </td>
                  </tr>
                  
                   <tr style="display:none" id="trpat2">
				  <td class="label1"><div align="right">Sex:</div></td>
					  <td ><input type="text" name="sex1" class="text" id="sex1" readonly>   </td>
					  <td class="label1"><div align="right">Consultant Name:</div></td>
					  <td ><input name="consultant_name1" type="text" class="text" size="20" id="consultant_name1"  readonly/>    </td></tr>
                  
                   <tr style="display:none" id="trpatk">
                     <td class="label1"><div align="right">Patient Name : </div></td>

                     <td align="left"><!--<input type="text" class="text" name="custname3" id="custname3" onfocus="patientdetails(this.value)"/>-->
					
                    
                    <input name="custname4" type="hidden" class="text" id="custname4"
 onclick="window.open('finalbill_popupk2.php','mypatwindow','width=500,height=500,toolbar=no,resizable=yes,menubar=no,scrollbar=yes')"/>
					
					
					<input name="ckrk1" type="text" class="text" id="ckrk1"
 onclick="window.open('finalbill_popupk2.php','mypatwindow','width=500,height=500,toolbar=no,resizable=yes,menubar=no,scrollbar=yes')"/>
					
                    
                    
                    
                     <?php /*?><select name="custname4" style="width:230px;height:22px;" id="custname4"  onchange="patientdetails1(this.value)">
                       <option selected="selected">-Select Out Patient-</option>
                       <?php 
					   //include_once("config1.php"); 
					   $xx="select distinct PAT_REGNO,patientname,a.registerno from patientregister as a,`op_pat_dlt` as b where a.registerno=b.pat_regno order by a.reg_id desc";
							$sql = mysql_query($xx);
							
						while($row = mysql_fetch_array($sql))
						  { ?>
                       <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?>&nbsp;[<?php echo $row[0] ?>]</option>
                       <?php } ?>
                     </select><?php */?>
					 </td>
					  <td class="label1"><div align="right">Age:</div></td>
					  <td ><input name="custname2" type="hidden" class="text" size="10" id="krk1" readonly/> 
                        <input name="agek" type="text" class="text" size="10" id="krk" readonly/>    </td>
                  </tr>
                  
                  
                  
                  
                  
				 <tr style="display:none" id="trpat1">
				  <td class="label1"><div align="right">Sex:</div></td>
					  <td ><input type="text" name="sexk" class="text" id="sex" readonly>   </td>
					  <td class="label1"><div align="right">Consultant Name:</div></td>
					  <td ><input name="consultant_namek" type="text" class="text" size="20" id="consultant_name"  readonly/>    </td></tr>
                  <tr style="display:none">
                    <td class="label1" style="display:none" id="conce"><div align="right">Payment Type:</div></td>
                    <td style="display:none" id="conce1"><div align="left">
                        <input name="cconcessiontype" type="text" class="text" id="cconcessiontype" readonly="readonly" size="35"/>
                    </div></td>
                    <td class="label1" style="display:none" id="conce2"><div align="right">Payment Type:</div></td>
                    <td style="display:none" id="conce3"><div align="left">
                        <select name="concessiontype"  id="concessiontype" onchange="javascript:aaa(this.value)">
                          <option value="General" selected="selected">General</option>
                          <?php
						  
							$sql1 = mysqli_query($link,"select CONCE_CODE, CONCE_NAME from CONCESSION_TYPE where CONCE_NAME != 'TPA Insurances'");

							if($sql1)
							{
								while($row1 = mysqli_fetch_array($sql1))
								{
									
							?>
							<option value="<?php echo $row1[1]?>"><?php echo $row1[1]?></option>
							<?php
								}
							}
							?>
							<option value="United Health Care India Pvt Ltd">United Health Care India Pvt Ltd</option>
							<option value="Paramount TPA">Paramount TPA</option>
							<option value="GHPL">GHPL</option>
							<option value="FHPL">FHPL</option>
							<option value="Medi Assist">Medi Assist</option>
							<option value="Bajaj Allianz TPA">Bajaj Allianz TPA</option>
							<option value="Vidal Health Care TPA(TTK)">Vidal Health Care TPA(TTK)</option>
							<option value="Star Health and Allied Insurance">Star Health and Allied Insurance</option>
							<option value="ICICI Lombard">ICICI Lombard</option>
							<option value="MD India">MD India</option>
							<option value="Heritage">Heritage</option>
							<option value="Emeditek TPA">Emeditek TPA</option>
							<option value="HDFC Ergo General Insurance">HDFC Ergo General Insurance</option>
							<option value="Raksha TPA">Raksha TPA</option>
							<option value="Medicare TPA">Medicare TPA</option>
							<option value="Health India">Health India</option>
							<option value="Future Generali India Insurance">Future Generali India Insurance</option>
							<option value="Max Bupa Health Insurance">Max Bupa Health Insurance</option>
							<option value="Alankit">Alankit</option>
							<option value="DHS-Dedicated Health Care Services">DHS-Dedicated Health Care Services</option>
							<option value="Genins TPA">Genins TPA</option>
							<option value="Appolo Munich Health Insurance">Appolo Munich Health Insurance</option>
							<option value="Spurthi Meditech">Spurthi Meditech</option>
							<option value="Vipul Ned Corp">Vipul Ned Corp</option>
							<option value="ReliGare Health Insurance">ReliGare Health Insurance</option>
							<option value="Anyuta">Anyuta</option>
							<option value="Universal Sompo General Insurance Company">Universal Sompo General Insurance Company</option>
							<option value="Reliance Health Insurance">Reliance Health Insurance</option>
							
							</select>
                    </div>
					</td>
					<!--<td class="label1" style="display:none" id="conce4"><div align="right">Card No.:</div></td>
                    <td style="display:none" id="conce5"><div align="left">
                        <input name="ccardno" type="text" class="text" id="ccardno" readonly />
                    </div></td>
					 <td class="label1" style="display:none" id="conce6"><div align="right">Card No.:</div></td>
                    <td style="display:none" id="conce7"><div align="left">
                        <input name="cardno" type="text" class="text" id="cardno" />
                    </div></td>-->
					<script>
					function aaa(str){
					
					 if(!(str=="General"))
					 {
			        document.getElementById("stype").value="E";
			        document.form.bill[0].disabled = true;
					document.form.bill[0].checked=false;
					document.form.bill[1].checked=true;
			        }
			       else
				   {
				   document.getElementById("stype").value="C";
			       document.form.bill[0].disabled = false;
			       document.form.bill[0].checked=true;
			       }
			  
					}
					</script>
                  </tr>
                  
                  <tr>
                    <td width="17%" class="label1"><div align="right">Billing Type:</div></td>
                    <td width="27%" align="left"> <?php echo $billing_type ?></td>
					<td class="label1"><div align="right">Sales Type:</div></td>
					<td align="left" ><?php echo $stype1 ?></td>
                  </tr>
                  
                  <tr>
                    <td class="label1"><div align="right">Sale Date:</div></td>
                    <td><div align="left">
                        <?php echo $sale_date ?>
						</div></td>
                    
                   
                    </tr><tr>
                    
                    <td class="label1"><div align="right" id="saletype1" style="display:none"> No </div></td>
                    <td><div align="left" id="saletype2" style="display:none">
                        <input name="card" type="text" class="text" id="card" size="35" value="0"/>
                    </div></td>
                  </tr>
                  <!--<tr><td><input type="text" name="billing" id="billing" value="btype.value"/></td></tr>-->
              </table>
                <input name="invno" type="hidden" class="text" id="invno"/></td>
            </tr>
            <tr>
              <td>
              
              <table id="t1" width="90%">
                  <tr>
                    <td align="center">
                         <table width="93%" class="ruler" id="dataTable" summary="Table of my records" align="center" >
                          <thead>
                            <tr>
							 <th width="1" class="TH1"></th>
                              <th class="TH1">Prd.Name</th>
                               <th class="TH1">Bat.No</th>
                              <th class="TH1">Avail.Qty</th>
                              <th class="TH1">MFG.Dt</th>
                              <th class="TH1">EXP.Dt</th>
                              <th class="TH1">Sale.Qty</th>
                              <th class="TH1">MRP</th>
                              <th class="TH1">Value</th>
							  <th class="TH1">Dis(%)</th>
                              <th class="TH1">Gst(%)</th>
						
							   <th class="TH1">Amount</th>
                            </tr>
							
                          </thead>
                          <tbody>
                              						  <?php
                          						  
							if($rsa){
							$i=0;
							while($rw = mysqli_fetch_array($rsa)){
							$pcode=$rw[0];
							$pname=$rw[1];
							$batch=$rw[2];
							$mfg=$rw[3];
							$exp=$rw[4];
							$uqty=$rw[5];
							$urate=$rw[6];
							$value=$rw[7];
							$s_qty=$rw[8];
							$value1=$rw[7];
							$inv_id2=$rw[9];
							$discount=$rw[10];
							$tot=$rw[11];
							$dis=$rw[12];
							$amt=$rw[13];
							$spl_dis=$rw[14];
							$gst=$rw[15];
							$i=$i+1;
							?>
                              
                              <tr style="text-align:center;">
								<td><input type="checkbox" id="checkbox1" name="checkbox1" value="<?php echo $i ?>"/></td>
                                  
                                  <td><input type="text" name="pname<?php echo $i ?>" id="pname<?php echo $i ?>" class="textbox1" value="<?php echo $pname ?>" size="22"/></td>
                                  <td><input type="text" name="bachno1<?php echo $i ?>" id="bachno1<?php echo $i ?>" class="textbox1" value="<?php echo $batch ?>" size="7"/></td>
                                  <td><input  type="text" name="bal<?php echo $i ?>" id="bal<?php echo $i ?>" value="<?php echo $s_qty ?>" class="textbox1" size="7"/></td>
                                  <td><input  type="text" name="mfg<?php echo $i ?>" id="mfg<?php echo $i ?>" value="<?php echo date("d-m-Y",strtotime($mfg)) ?>" class="textbox1" size="7"/></td>
                                  <td><input  type="text" name="exp<?php echo $i ?>" id="exp<?php echo $i ?>" value="<?php echo date("d-m-Y",strtotime($exp)) ?>" class="textbox1" size="7"/></td>
                                  <td><input  type="text" name="sqty<?php echo $i ?>" id="sqty<?php echo $i ?>" class="textbox1" value="<?php echo $uqty ?>" size="5" onkeyup="val(this.value,<?php echo $i ?>)"/></td>
                                  <td><input  type="text" name="ucost<?php echo $i ?>" id="ucost<?php echo $i ?>" value="<?php echo $urate ?>" class="textbox1" size="5"/></td>
                                  <td><input  type="text" name="value<?php echo $i ?>" id="value<?php echo $i ?>" value="<?php echo $value ?>" class="textbox1" readonly size="10"/></td>
                                  <td><input  type="text" name="dis<?php echo $i ?>" id="dis<?php echo $i ?>" class="textbox1" value="<?php echo $dis ?>"  onkeyup="discal(this.value,<?php echo $i ?>)" size="5"/></td>
                                  <td><input  type="text" name="gst<?php echo $i ?>" id="gst<?php echo $i ?>" value="<?php echo $gst ?>" class="textbox1" size="5"/><input  type="hidden" name="pcode<?php echo $i ?>" id="pcode<?php echo $i ?>" value="<?php echo $pcode ?>" class="textbox1" size="5"/></td>
                                    
                                  <td><input  type="text" name="amt<?php echo $i ?>" id="amt<?php echo $i ?>" value="<?php echo $amt ?>" class="textbox1" size="5"/><input  type="hidden" name="pcode<?php echo $i ?>" id="pcode<?php echo $i ?>" value="<?php echo $pcode ?>" class="textbox1" size="5"/></td>
                                  <input  type="hidden" name="bachno<?php echo $i ?>" id="bachno<?php echo $i ?>" value="<?php echo $inv_id2 ?>" class="textbox1" size="5"/>
                              </tr>
                              <?php } } ?>
                          </tbody>
                        </table>
                   </td>
                    <td valign="top"><input name="new" type="button" class="butnbg1" value="  +  "  onclick="addRow('dataTable')"/></td>
					<td valign="top"><input name="new" type="button" class="butnbg1" value=" -  " onclick="deleteRow('dataTable')"/>
					</td>
                    <td valign="top">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <input type="hidden" name="rows" id="rows" value="1" onclick="javasript:noitems()"/>
			
            <tr>
              <td>
                   <table  width="100%">
                  <tr>
                    <td align="center"><div id="div" valign="top">
                        <table width="100%" id="">
                          <tr style="display:none;" id="trbill">
                            <td class="label1"><div align="right">Bill </div></td>
                            <td align="left" >
<input type="radio" name="bill" value="Y" id="bill" onclick="trids(this.value)" checked="yes"/>
Paid
  <input type="radio" name="bill" value="N" id="bill" />
NotPaid</td>
                            <td align="left" >&nbsp;</td>
                            <td align="left">&nbsp;</td>
                          </tr>
						  <tr>
						    <td width="81%" class="label1"><div align="right"> Total:</div></td>
                            <td width="19%" align="left"><input name="total" type="text" value="<?php echo $tot ?>" class="text" id="total" readonly="readonly"/></td>
                          </tr>
						
							<tr id="cashtr" style="display:''">
							  <td class="label1"><div align="right">Average Discount(%):</div></td>
							  <td align="left">
							  <input name="disc" type="text" class="text" id="disc" value="<?php echo $discount ?>" />
							
							  <script>
							function nett(str){
							  var tot=document.getElementById("total").value;
							   var sum=0;
							   var sum1=0;
							  if(tot==null || tot==''){tot=0;}else{
							  if(eval(tot)<=eval(str)){alert("Please check Discount");document.getElementById("disc").value=0;return false;}
							   //sum=eval(tot)-eval(str);
							   sum=(eval(tot))*(eval(str))/100;
							   
							   sum1=(eval(tot))-sum;
							  if(sum1==null || sum1==''){sum1=0;}
							  }
							  document.getElementById("nettotal").value=eval(sum1).toFixed(2);
							  }
							  </script>
							   <script>
							function nett(str){
							  var tot=document.getElementById("total").value;
							   var sum=0;
							   var sum1=0;
							  if(tot==null || tot==''){tot=0;}else{
							  if(eval(tot)<=eval(str)){alert("Please check Discount");document.getElementById("disc").value=0;return false;}
							   //sum=eval(tot)-eval(str);
							   sum=(eval(tot))*(eval(str))/100;
							   
							   sum1=(eval(tot))-sum;
							  if(sum1==null || sum1==''){sum1=0;}
							  }
							  document.getElementById("nettotal").value=eval(sum1).toFixed(2);
							  document.getElementById("grand").value=eval(sum1).toFixed(2);
							  }
							  
							  
							  function nett1(str){
							  var o_dis=document.getElementById("o_dis").value;
							  var nettotal=document.getElementById("nettotal").value;
							   sumk=(eval(nettotal))-(eval(o_dis));
							   document.getElementById("grand").value=eval(sumk).toFixed(2);
							   document.getElementById("amount").value=eval(sumk).toFixed(2);
							  }
							  
							   function nett2(str){
							  var o_dis=document.getElementById("grand").value;
							  var nettotal=document.getElementById("amount").value;
							   sumk=(eval(nettotal))-(eval(o_dis));
							   document.getElementById("amount1").value=eval(sumk).toFixed(2);
							   //document.getElementById("amount").value=eval(sumk).toFixed(2);
							  }
							  
							  </script>
							  
							
							  </td>
							  </tr>  
							<tr id="cashtr" style="display:''">
							  <td class="label1"><div align="right"> Net Total:</div></td>
							  <td align="left"><input name="nettotal" type="text" class="text" value="<?php echo round(($tot- (($tot*$discount)/100)))+$spl_dis ?>" id="nettotal" readonly="readonly"/></td>
							  </tr>
                              
                               <tr id="cashtr" style="display:''">
							  <td class="label1"><div align="right"> Other Discount:</div></td>
							  <td align="left"><input name="o_dis" type="text" class="text" id="o_dis" value="<?php echo $spl_dis?>" onkeyup="nett1()" value="0"/></td>
							  </tr>
							   
                               <tr id="cashtr" style="display:''">
							  <td class="label1"><div align="right"> Other Amount:</div></td>
							  <td align="left"><input name="own_amnt" type="text" class="text" id="own_amnt" value="<?php echo $own_amnt?>" onkeyup="nett1()" value="0"/></td>
							  </tr>
							  
                              <tr id="cashtr" >
							
							<td width="85%" class="label1"><div align="right"> Grand Total:</div></td>
                            <td width="19%" align="left"><input name="grand" type="text" class="text" id="grand"  readonly="readonly" value="<?php echo round(($tot- (($tot*$discount)/100)))?>"/></td>
							</tr>
                              
							<tr id="cashtr" style="display:''">
							
							<td width="85%" class="label1"><div align="right"> Cash Received:</div></td>
                            <td width="19%" align="left"><input name="amount" type="text" class="text" value="<?php  echo round(($tot- (($tot*$discount)/100)) +$bal) ?>" id="amount" onkeyup='amount_cal();'/></td>
							</tr>
							<tr id="remaintr" style="display:''">
							<td width="85%" class="label1"><div align="right"> Remaining Change:</div></td>
                            <td width="19%" align="left"><input name="amount1" type="text" class="text" id="amount1" onblur='amount_cal();' value="<?php echo $bal?>"/></td>
							</tr>
							
                         <script>
						 function trids(str){
						 if(str=="N"){
						  document.getElementById("cashtr").style.display="none";
						 document.getElementById("remaintr").style.display="none";
						 }else{
						   document.getElementById("cashtr").style.display="";
						 document.getElementById("remaintr").style.display="";
						 
						 }
						 
						 
						 }
						 
						 </script>
                          <tr>
                            <td colspan="2"></thead></td>
                          </tr>
                          
                        </table>
                    </div></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="4"></td>
            </tr><input type="hidden"  id="str" name="str" >
            <tr>
              <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                  <tr>
                    
      <input name="fin_flag" id="fin_flag"  type="hidden"/>
	  <input name="actb" id="actb"  type="hidden" value="1"/>
	   <input name="rowval" id="rowval" value="<?php echo $tot ?>" type="hidden" value="0"/>
	
	  
   
  
                    <td ><div align="center">
					 <input type="submit" value="Update" class="butt" onclick="save(0)" />&nbsp;<input type="button" value="Close" onclick="window.location.href='salesentry_list.php'" class="butt"/></div></td>
                  </tr>
              </table></td>
            </tr>
          </table>
          <p><br>
          </p>
          </td>
      </tr>
      
    </table></td>
  </tr>
</table>
 </form>


			</div>

		<?php include('footer.php'); ?>

	</div>

</body>

</html>

<?php 

}else

{

session_destroy();

session_unset();

header('Location:login.php');

}

?>