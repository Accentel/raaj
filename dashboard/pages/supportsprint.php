<html>
<head>
<style>
@page
{
size: landscape;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width:100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:center;
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

	

<?php
include('../db/supportsizelist.php');
?>
<div align="center"><b>Supports Size List</b></div>


<table border="1" cellpadding="0" cellspacing="0" id="customers">

<tr>
<th>S.No</th>
<th >Support Name</th>
<th >Size</th>
<th>Amount</th>
<th >Qty</th>
</tr>
<?php $i=1;	foreach ($result as $key => $res) { ?>

<tr>
<td><?php echo $i; ?></td>
<td><?php echo $res['sname'] ?></td>
<td><?php echo $res['size'] ?></td>
<td><?php echo $res['amount'] ?></td>
<td><?php echo $res['qty'] ?></td>
        
</tr>
<?php $i++; } ?>
</table>
<div align="center">
          <p height="100" colspan="3" align="center"><input type="button" value="Print" id="prnt" class="butt" onclick="prnt();"/> <input type="button" value="Close" id="cls" class="butt" onclick="window.close();"/></p>
      </div>

</body>
</html>