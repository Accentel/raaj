<?php
include_once("../db/Crud.php");
$crud = new Crud();

$q=$_GET["q"];
$sname=$_GET['sname'];

echo	 $sql="SELECT  a.each_mrp_rate,b.T_QTY  FROM phr_purinv_support1 a,stock b WHERE a.BATCH_NO=b.BATCH_NO and a.PRODUCT_NAME=b.PRODUCT_NAME  and   a.BATCH_NO = '$q' and a.PRODUCT_NAME='$sname'";
	//$result = mysql_query($sql);
	$rsd=$crud->getData($sql);
	foreach($rsd  as $key=>$r){
	//$cname = $rs['registerno'];
	 $amount=  trim($r['each_mrp_rate']);
	  $bqty=  trim($r['T_QTY']);
//	echo "$cname\n";
}
	//$row = mysql_fetch_array($result);
	//$amount=$row['amount'];
	echo ":" . $amount;
		echo ":" . $bqty;




	
	
	
	

?>	

