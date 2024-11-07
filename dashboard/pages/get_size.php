<?php
include_once('../db/Crud.php');
 $q=$_GET["q"];
 $crud = new Crud();
 echo $sql="SELECT a.BATCH_NO  FROM `phr_purinv_support1` a,stock b where a.PRODUCT_NAME='$q' and b.PRODUCT_NAME='$q' and b.T_QTY>=1";
$result = $crud->getData($sql);
//$result = mysql_query($sql) or die(mysql_error());




 //echo "<select  class='invest' name='invtest' id='invtest' multiple validate='required:true'>";
 echo "<option value=''>Select Batch no</option>";
foreach($result as $key=>$t)
  {
  
  echo "<option value='".$t['BATCH_NO']."'>" . $t['BATCH_NO'] . "</option>";
   
  }
 // echo "<option value='Any'>" .Any. "</option>";
//echo "<select>";


  

//mysql_close($con);
?> 
