<html>
<head>
<style>
@page
{
size: landscape;
}
div{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	text-align:center;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding:auto;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}

#customers td {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
 
  color: #000;
}
</style>
<script language="JavaScript" type="text/javascript">
function prnt(){
document.getElementById("prnt").style.display="none";
document.getElementById("cls").style.display="none";
window.print();
window.close();
}
function closew(){
window.close();
}

function abc(){
	
//document.getElementById('tr1').style.display='none';
window.print();
window.close();
//document.getElementById('tr1').style.display='';
}
</script>
<script type="text/javascript">
checked=false;
function checkedAll (frm1) {
	var aa= document.getElementById('frm1');
	 if (checked == false)
          {
           checked = true
          }
        else
          {
          checked = false
          }
	for (var i =0; i < aa.elements.length; i++) 
	{
	 aa.elements[i].checked = checked;
	}
      }
</script>	
</head>
<body>
<form class="form-horizontal" role="form" name="frm1"  id="frm1" novalidate enctype="multipart/form-data"  method="post" action="bulk_send_sms.php">
<?php
include('../db/connection.php');

if(isset($_POST['go'])){
$ptype=$_POST['ptype'];
 

?>

	<div><?php echo $ptype; ?> SMS</div>
	


<table border="1" cellpadding="0" cellspacing="0" id="customers">

<tr>

<th><input type="checkbox" name="chk" id="chk" onclick='checkedAll(frm1);'/>Select All </th>
<th>Message</th>


</tr>

<tr>
<td style="height:350px;">
<div style="height:266px;overflow: auto;" >
<input type="checkbox" name="chk1[]" id="chk1" value="9959583024"  />kollipara<br/>
<input type="checkbox" name="chk1[]" id="chk1" value="9666111717"  />kollipara1<br/>
<?php
$p=mysqli_query($link,"select distinct registerno,patientname,phoneno from patientregister where opt_type='$ptype'") or die(mysqli_error($link));
while($p1=mysqli_fetch_array($p)){ ?>
<input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $p1['phoneno'];?>"  /><?php echo $p1['patientname']; ?>-<?php echo $p1['phoneno'] ?><br/>

<?php } ?>
</div>
</td>
<td><textarea type="text" name="sms" id="sms" rows="5" cols="35"></textarea></td>
</tr>
</table>
<?php
}
?>

<div align="center">
          <p height="100" colspan="3" align="center"><input type="submit" name="Send" value="Send" id="send" /> <a href="bulk.php"><input type="button" value="Close" id="cls" class="butt" /></a></p>
      </div>








</form>

</body>
</html>